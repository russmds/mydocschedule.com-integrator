<?php
/**
Copyright 2011-2016 Russ Profant

This file is part of MyDocSchedule.com integration package.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
*/

require_once(ROOT_DIR . 'lib/Common/namespace.php');
require_once(ROOT_DIR . 'lib/Config/namespace.php');
require_once(ROOT_DIR . 'lib/Database/namespace.php');
require_once(ROOT_DIR . 'lib/Database/Commands/namespace.php');
require_once(ROOT_DIR . 'lib/Common/Logging/Log.php');
require_once(ROOT_DIR . 'lib/Email/Messages/SyncErrorEmail.php');
require_once(ROOT_DIR . 'lib/Email/Messages/ReconciliationEmail.php');

interface IIntegrator
{
	/**
	 * @abstract
	 * @return true/false
	 */    
    public function LoginToMDS();

	/**
	 * @abstract
	 * @return true/false
	 */        
    public function LoginToLocal();

	/**
	 * @abstract
	 * @return true/false
	 */       
    public function GetLocalAppointments();

	/**
	 * @abstract
	 * @return true/false
	 */        
    public function GetMDSAppointments();

	/**
	 * @abstract
	 * @param $appointment array()
	 * @return true/false
	 */            
    public function FormatMDSAppointment($appointment);

	/**
	 * @abstract
	 * @param $appointment array()
	 * @return true/false
	 */            
    public function FormatLocalAppointment($appointment);

	/**
	 * @abstract
	 * @param $appointment array()
	 * @return true/false
	 */            
    public function SendToMDS($request, $refNumber);

    /**
	 * @abstract
	 * @return true/false
	 */                
    public function SyncUpMDS();
	
    /**
	 * @abstract
	 * @return true/false
	 */                
    public function SyncUpLocal();
	
	//public function SendErrorEmail($message, $errors = array());
}

abstract class BaseIntegrator implements IIntegrator
{
    protected $config;
    
    protected $mdsUserId;
    
    protected $mdsSessionToken;
    
    protected $mdsBaseUrl;
    
    private $_error;
	
	protected $mdsAppointments = array();
	
	protected $myLname;
	
	protected $myFname;
	
	protected $myId;
	
	protected $providers = array();
	
	protected $nonmdsAppointments = array();
    		
	/**
	 * @constructor
	 * @param none
	 * @return none
	 */            
    public function __construct()
    {
        $this->config = Configuration::Instance();
        
        $this->mdsBaseUrl = $this->config->GetSectionKey(ConfigSection::MDS, ConfigKeys::BASE_URL);
		
        if (!$this->LoginToMDS())
        {
            return;
        }

        if (!$this->LoginToLocal())
        {
            return;
        }
        $this->myLname = $this->config->GetSectionKey(ConfigSection::DATABASE, ConfigKeys::DATABASE_USER);
        
        // get the Oscar provider id of our program
        $result = $this->GetIntegratorAsUserInLocal();
        
        if ($row = $result->GetRow())
        {
            $this->myId = $row['providerId'];
            
            $this->myFname = $row['firstName'];
        }else
        {            
            $this->SendErrorEmail('IntegratorProviderNotFound');
            
            return;
        }                                      
        
        $providerString = $this->config->GetSectionKey(ConfigSection::DATA_TRANSFER, ConfigKeys::PROVIDERS);
        
        $providerIds = explode(',', $providerString);

        // Get all Oscar/Local providers
        $result = $this->GetAllProviders();
        
        // select the providers that use MyDocSchedule.com
        while ($row = $result->GetRow())
        {
            if (preg_match('/^all$/i', $providerString))
            {
                $this->providers[] = $row['providerId'];
            }else
            {
                foreach ($providerIds as $id)
                {
                    if ($row['providerId'] == $id || strtolower($row['lastName']) == strtolower($id))
                    {
                        $this->providers[] = $row['providerId'];
                    }
                }
            }
        }        
        return;		
    }
    
	/**
	 * @public
	 * @param none
	 * @return true/false
	 */            	
    public function LoginToMDS()
    {				
        $user = $this->config->GetSectionKey(ConfigSection::MDS, ConfigKeys::DATABASE_USER);
        $pass = $this->config->GetSectionKey(ConfigSection::MDS, ConfigKeys::DATABASE_PASSWORD);
                                       
        // set the url for accessing the call you want
        $url = $this->mdsBaseUrl . $this->config->GetSectionKey(ConfigSection::MDS, ConfigKeys::AUTHENTICATE_URL);
        
        Log::Debug('Logging to MyDocSchedule.com web service url: %s using user id: %s', $url, $user);
        
        // ========================= TEST PARAMETERS END ========================= */        
        // create login/auth info
        // need username and password in an array to do json_encode
        $body = array('username' => $user, 'password' => $pass);
        
        // make sure it is utf-8 so json is happy (you may not need this step, but a good idea...)
        $body = array_map('utf8_encode', $body );
        
        // create the post data for the auth
        $body =  json_encode($body );        
						
		//$url .= '?XDEBUG_SESSION_START=1';
		
        // make the call to the API
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url );
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);        
        
        // grab URL and pass it to the browser, retaining the reply
        $reply = curl_exec($ch);
        
        // close cURL resource, and free up system resources
        curl_close($ch);
        
        $returnJson = json_decode($reply, true);
        
        if ($returnJson['isAuthenticated'])
        {
            $this->mdsSessionToken = $returnJson['sessionToken'];
            
            $this->mdsUserId = $returnJson['userId'];
            
            if (!$this->mdsSessionToken || !$this->mdsUserId)
            {
                $this->_error = $returnJson['message'];
                
                Log::Error('Failed to log in to MyDocSchedule.com: %s', $this->_error );
                
				$this->SendErrorEmail();
				
                return false;
            }
        }else{
            
            Log::Error('Error authenticating with MyDocSchedule.com: %s', $reply);
            
            $this->_error = $reply;
			
			$this->SendErrorEmail();
            
            return false;
        }
        Log::Debug('Succesfully authenticated with MyDocSchedule.com');
        
        return true;
    }

	/**
	 * @public
	 * @param none
	 * @return $_error array
	 */                
    public function GetError()
    {
        return $this->_error;    
    }

	/**
	 * @public
	 * @param $message, $errors array()
	 * @return none
	 */            	
	protected function SendErrorEmail($message = null, $errors = array())
	{
		if (is_null($message))
		{
			$message = $this->_error;
		}		
		$emails = array();
		
		if ($this->config->GetSectionKey(ConfigSection::MDS, ConfigKeys::EMAILS) != '')
		{			
			$emails = explode(',', $this->config->GetSectionKey(ConfigSection::MDS, ConfigKeys::EMAILS));		
		}
		if (count($emails) > 0)
		{
			$lang = (!($this->config->GetKey(ConfigKeys::LANG_CODE))) ? 'en_us' : $this->config->GetKey(ConfigKeys::LANG_CODE);
								  
			$message = new SyncErrorEmail($message, $errors, $lang, $emails);
		
			$emailService = ServiceLocator::GetEmailService()->Send($message);
		}	
	}

	/**
	 * @public
	 * @param $all = yes|no
	 * @return none
	 * This is the function that retrieves either all or only changed appointments from MyDocSchedule.com based on the parameter $all
	 */          		           
    public function GetMDSAppointments($all = 'no')
	{
		global $options;
		
		$url = $this->mdsBaseUrl . $this->config->GetSectionKey(ConfigSection::MDS, ConfigKeys::APPOINTMENT_URL);
		
		$url .= '?sourceType=oscar&userId=' . $this->mdsUserId . '&all=' . $all;
		
		if (array_key_exists('d', $options) || array_key_exists('debug', $options))		
			$url .= '&XDEBUG_SESSION_START=1';
       
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url );
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-MDS-SessionToken: $this->mdsSessionToken", "X-MDS-UserId: $this->mdsUserId"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $reply = curl_exec($ch);
        
        // close cURL resource, and free up system resources
        curl_close($ch);
				
		$reply = json_decode($reply);
		
		if (!is_null($reply) && property_exists($reply, 'reservations'))
		{
			$this->mdsAppointments = $reply->reservations;
		}			
		return;
	}

	/**
	 * @public
	 * @param none
	 * @return none
	 * This function logs out the integrator from MDS by invalidating the session
	 */          		           	
	public function SignOutFromMDS()
	{
		// set signout url
        $url = $this->mdsBaseUrl . $this->config->GetSectionKey(ConfigSection::MDS, ConfigKeys::SIGNOUT_URL);
		
        // make the call to the API
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url );
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-MDS-SessionToken: $this->mdsSessionToken", "X-MDS-UserId: $this->mdsUserId"));
		curl_setopt($ch, CURLOPT_POST, true);
        
        // grab URL and pass it to the browser, retaining the reply
        $reply = curl_exec($ch);		
	}
	
	protected function FormatPhone($phone)
	{
		$format = $this->config->GetSectionKey(ConfigSection::MDS, ConfigKeys::PHONE_FORMAT);
		$pattern = '/-|\s+|\(|\)/';
		
		$replacement = '';
		
		$phone = preg_replace($pattern, $replacement, $phone);
		
		$formatted = '';
		
		$cnt = 0;
		
		foreach (str_split($format) as $char)
		{
			$next = '';
			
			if (is_numeric($char))
			{								
				$next = substr($phone, $cnt, 1);
				
				if (is_null($next))
					break;
				
				$cnt++;
				
			}else
			{
				$next = $char;
			}
			$formatted .= $next;
		}
		return $formatted;
	}

	/**
	 * @public
	 * @param none
	 * @return array $providers
	 */          		           		
	public function GetProviders()
	{
		return $this->providers;
	}

	/**
	 * @public
	 * @param none
	 * @return integrator Id
	 */          		           		
	public function GetMyId()
    {
        return $this->myId;
    }

	/**
	 * @public
	 * @param none
	 * @return true|false
	 * this function checks whether it's time for reconciliation report to run
	 */          		           		    	
	protected function IsItRuntime()
	{
		$runTime = ($this->config->GetSectionKey(ConfigSection::MDS, ConfigKeys::RECONCILIATION_TIME)) ? $this->config->GetSectionKey(ConfigSection::MDS, ConfigKeys::RECONCILIATION_TIME) : '07:00';
		
		$runTime = preg_replace('/:/', '', $runTime);
		
		$date = new Date();
		
		$now = $date->Format('Gi');
		
		if ($now >= $runTime && !file_exists("../reports/reconciliation_report_" . $date->Format('Ymd') . ".rpt"))
		{
			return true;
		}		
		return false;
	}

	/**
	 * @public
	 * @param none
	 * @return
	 * This is the reconciliation report which is run daily based on the configuration time setup
	 */          		           			
    public function Reconcile()
    {
        if (!$this->IsItRuntime())
			return;
		
		$this->GetMDSAppointments('yes');

        $this->GetAllLocalAppointments();
        
		$appointments = array();
		
		// let's create array with appointment number as the key
		foreach ($this->mdsAppointments as $appointment)
		{
			$appointments[$appointment->referenceNumber] = $appointment;	
		}
		
		$localOnly = array();
		
		$difference = array();
		
        foreach ($this->nonmdsAppointments as $aptString)
        {
            $oscarApt = json_decode($aptString);
			
			if (array_key_exists($oscarApt->referenceNumber, $appointments))
			{
				$apt = $appointments[$oscarApt->referenceNumber];
				
				$diff = $this->Compare($oscarApt, $apt);
				
				if (!is_null($diff))
					$difference[] = $diff;
				
				unset($appointments[$oscarApt->referenceNumber]);
				
			}else{
				
				$localOnly[] = $this->GetLocalAppointmentAsString($oscarApt);
			}
        }		
		$this->SendReport($localOnly, $appointments, $difference);
    }

	/**
	 * @public
	 * @param none
	 * @return none
	 * Email the reconciliation report
	 */          		           			
	protected function SendReport($localOnly = null, $inMds = null, $diff = null)
	{
		$emails = array();
		
		if ($this->config->GetSectionKey(ConfigSection::MDS, ConfigKeys::EMAILS) != '')
		{			
			$emails = explode(',', $this->config->GetSectionKey(ConfigSection::MDS, ConfigKeys::EMAILS));		
		}
		
		if (count($emails) > 0)
		{
			$lang = (!$this->config->GetKey(ConfigKeys::LANG_CODE)) ? 'en_us' : $this->config->GetKey(ConfigKeys::LANG_CODE);
								  
			$message = new ReconciliationEmail($diff, $localOnly, $inMds, $lang, $emails);
		
			$emailService = ServiceLocator::GetEmailService()->Send($message);
			
			$date = new Date();
			
			$myfile = fopen("../reports/reconciliation_report_" . $date->Format('Ymd') . ".rpt", "w");
			
			fwrite($myfile, $message->Body());
			
			fclose($myfile);
		}			
	}
	
    public function SyncUpMDS()
    {        
        $this->ProcessLocalNewAndUpdated();
        
        $this->ProcessLocalDeleted();
    }
	
    private function ProcessLocalNewAndUpdated()
    {
        $records = $this->GetLocalAppointments();
        
        if ($records->NumRows() == 0)
        {
            Log::Debug('No new or updated appointments found in Oscar');
            
            return;
        }
        
        while ($appointment = $records->GetRow())
        {
            list($refNumber, $request) = $this->FormatLocalAppointment($appointment);
            
            $reply = $this->SendToMDS($request, $refNumber);
            
            $this->handleMDSReply($request, $reply);
            
            $timestamp = $appointment['update_timestamp'];          
        }
        $this->config->SetKeyValue(ConfigSection::DYNAMIC_DATA,ConfigKeys::LAST_UPDATED_TIMESTAMP, $timestamp);
        
        $this->config->SaveSectionKey(ConfigSection::DYNAMIC_DATA,ConfigKeys::LAST_UPDATED_TIMESTAMP);
    }

	/**
	 * @private
	 * @param none
	 * @return none
	 */          		           		
    private function ProcessLocalDeleted()
    {                
        $records = $this->GetLocalDeletedAppointments();
        
        if ($records->NumRows() == 0)
        {
            Log::Debug('No deleted appointments found in Oscar');
            
            return;
        }    
        
        while ($appointment = $records->GetRow())
        {            
            $reply = $this->DeleteInMDS($appointment['referenceNumber']);
            
            $no = $appointment['appointment_no'];
            
            $request = '{"reservationId":"' . $no . '"}';
            
            $this->handleMDSReply($request, $reply);
            
            $id = $appointment['id'];
        }
        $this->config->SetKeyValue(ConfigSection::DYNAMIC_DATA,ConfigKeys::LAST_DELETED_ID, $id);
        
        $this->config->SaveSectionKey(ConfigSection::DYNAMIC_DATA,ConfigKeys::LAST_DELETED_ID);
    }

	/**
	 * @public
	 * @param json $request, string $refNum
	 * @return string(html) $reply
	 * Send an appoinment to MyDocSchedule.com
	 */          		           			
    public function SendToMDS($request, $refNum = null)
    {
        global $options;
        
        // make the call to the API
        $url = $this->mdsBaseUrl . $this->config->GetSectionKey(ConfigSection::MDS, ConfigKeys::APPOINTMENT_URL);
                
        // check if this is an existing appointment in which case this is an update
        // and we need to send the reference number to MDS        
        if (!is_null($refNum))
        {        
            $url .= $refNum;
        }        
		if (array_key_exists('d', $options) || array_key_exists('debug', $options))		
			$url .= '?XDEBUG_SESSION_START=1';
        
        Log::Debug('Using curl to post Oscar appointment to MDS');
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url );
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-MDS-SessionToken: $this->mdsSessionToken", "X-MDS-UserId: $this->mdsUserId"));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        
        $reply = curl_exec($ch);
        
        // close cURL resource, and free up system resources
        curl_close($ch);
        
        // see what we got
        return $reply;
    }

	/**
	 * @public
	 * @param string $refNum
	 * @return string $reply
	 */          		           			
    public function DeleteInMDS($refNum)
    {
        global $options;
                
        // make the call to the API
        $url = $this->mdsBaseUrl . $this->config->GetSectionKey(ConfigSection::MDS, ConfigKeys::APPOINTMENT_URL);
        
        $url .= $refNum;
        
		if (array_key_exists('d', $options) || array_key_exists('debug', $options))		
			$url .= '&XDEBUG_SESSION_START=1';
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url );
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-MDS-SessionToken: $this->mdsSessionToken", "X-MDS-UserId: $this->mdsUserId"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');        
        
        $reply = curl_exec($ch);
        
        // close cURL resource, and free up system resources
        curl_close($ch);
        
        // see what we got
        return $reply;
    }

	/**
	 * @public
	 * @param none
	 * @return integrator Id
	 */          		           			
    protected function handleMDSReply($request, $reply)
    {
        $reply = json_decode($reply);
        
        $request = json_decode($request);
        
        if ($reply->message == 'The reservation was created')
        {
            Log::Debug("Oscar appointment # " . $request->reservationId . " was CREATED in MDS with ref ID " . $reply->referenceNumber);
            
            ServiceLocator::GetDatabase()->Execute(new UpdateOscarAppointmentsCommand($reply->referenceNumber, $request->appointment_no));
        }

        if ($reply->message == 'The reservation was updated')
        {
            Log::Debug("Oscar appointment # " . $request->reservationId . " was UPDATED in MDS with ref ID " . $reply->referenceNumber);
        }

        if ($reply->message == 'The item was deleted')
        {
            Log::Debug("Oscar appointment # " . $request->reservationId . " was DELETED in MDS.");
        }
        
        if (preg_match('/error/', $reply->message))
        {
            if (!$reply->message)
            {
                $message = 'SynchronizationError';
                
            }else{
                $message = $reply->message;
            }
            $this->SendErrorEmail($message,  $reply->errors);
        }
    }
	/**
	 * @public
	 * @param none
	 * @return none
	 * The controlling function for synchronizing local db with MyDocSchedule.com
	 */          		           			
    public function SyncUpLocal()
	{				
		$this->GetMDSAppointments();
		
        if (count($this->mdsAppointments) == 0)
        {
            Log::Debug("No new/updated appointments found in MyDocSchedule.com");
            
            return;
        }
        $newAppointments = array();
                
		foreach ($this->mdsAppointments as $appointment)
		{
            if ($appointment->status == 1 || $appointment->status == 3)
            {
                $newAppointments[] = $this->updateLocalAppointment($appointment);
                
            }elseif($appointment->status == 2)
            {
                $this->deleteLocalAppointment($appointment->reservationId, $appointment->referenceNumber);
            }
		}                
	}	
}


