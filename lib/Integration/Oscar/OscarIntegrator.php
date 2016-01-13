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
require_once(ROOT_DIR . 'lib/Integration/BaseIntegrator.php');

class OscarIntegrator extends BaseIntegrator
{    
    public function __construct()
    {
        parent::__construct();
    }

    protected function GetIntegratorAsUserInNonMDS()
    {
        return ServiceLocator::GetDatabase()->Query(new GetProviderCommand($this->myLname));
    }
    
    protected function GetAllProviders()
    {
        return ServiceLocator::GetDatabase()->Query(new GetDoctorProvidersCommand());
    }
    
    public function LoginToNonMDS()
    {
        try
        {        
            ServiceLocator::GetDatabase()->Query(new TestConnectionCommand());
            
        }catch (Exception $e)
        {
            Log::Debug('Couldn\'t login to Oscar db');
            
            $this->SendErrorEmail($e->GetMessage(), null);
            
            return false;
        }
        Log::Debug('Successfully logged in to Oscar db');
        
        return true;
    }
        
    public function FormatMDSAppointment($appointment){}
    
    public function FormatNonMDSAppointment($appointment)
    {
        Log::Debug('Formatting Oscar appointment %s for MDS', $appointment['appointment_no']);
         
        $request = array();
        
        $selectedFields = array();
        
        $fieldList = $this->config->GetSectionKey(ConfigSection::DATA_TRANSFER, ConfigKeys::OSCAR_FIELD_LIST);
        
        if (preg_match('/^all$/i', $fieldList))
        {
            $selectedFields = $appointment;
        }else
        {
            $selectedFields['name'] = 'Do_Not_Book,Do_Not_Book';
            $selectedFields['first_name'] = 'Do_Not_Book';
            $selectedFields['last_name'] = 'Do_Not_Book';
            $selectedFields['appointment_no'] = $appointment['appointment_no'];
            $selectedFields['appointment_date'] = $appointment['appointment_date'];
            $selectedFields['start_time'] = $appointment['start_time'];
            $selectedFields['end_time'] = $appointment['end_time'];
            $selectedFields['demographic_no'] = $appointment['demographic_no'];
            $selectedFields['provider_no'] = $appointment['provider_no'];
            $selectedFields['notes'] = $appointment['notes'];
            $selectedFields['referenceNumber'] = (strrpos($appointment['notes'], ';') > 0) ? (substr($appointment['notes'], 4, strrpos($appointment['notes'], ';') - 4)) : '';
            $selectedFields['status'] = $appointment['status'];            
            
            // The basic patient fields need to be transferred as well
            if (!preg_match('/^none$/i', $fieldList))
            {
                $selectedFields['name'] = $appointment['name'];
                $selectedFields['first_name'] = $appointment['first_name'];
                $selectedFields['last_name'] = $appointment['last_name'];
                $selectedFields['phone'] = $appointment['phone'];
                $selectedFields['email'] = $appointment['email'];
            }
            
            // Add the other fields requested besides the 4 basic fields
            if (!preg_match('/^none$/i', $fieldList) && !preg_match('/^basic$/i', $fieldList))
            {
                foreach (explode(',', $fieldList) as $field)
                {
                    if ($appointment[$field])
                    {
                        $selectedFields[$field] = $appointment[$field];
                        
                    }elseif($appointment[strtolower($field)])
                    {
                        $selectedFields[strtolower($field)] = $appointment[strtolower($field)];
                    
                    }elseif($appointment[strtoupper($field)])
                    {
                        $selectedFields[strtoupper($field)] = $appointment[strtoupper($field)];
                    }
                }
            }                
        }
        
        $request = array_map('utf8_encode', $selectedFields );
        
        $request['sourceType'] = 'oscar';
        
        $request = json_encode($request);
        
        $refNumber = ($appointment['notes']) ? $this->ExtractMDSRefNumber($appointment['notes']) : null;
        
        return array($refNumber, $request);
    }    
    
    protected function ExtractMDSRefNumber($data)
    {
        list($str, $refNum) = explode(':', substr($data, 0, ((strpos($data, ';') > 0) ? strpos($data, ';') : strlen($data))));
        
        return $refNum;
    }
           
    public function GetNonMDSAppointments()
    {
        $lastTs = $this->config->GetSectionKey(ConfigSection::DYNAMIC_DATA,ConfigKeys::LAST_UPDATED_TIMESTAMP);
        
        $providers = '(' . (implode(',', $this->providers)) . ')';
        
        return ServiceLocator::GetDatabase()->Query(new GetOscarAppointmentsCommand($lastTs, $this->myId, $providers));        
    }

    public function GetAllNonMDSAppointments()
    {
        $providers = '(' . (implode(',', $this->providers)) . ')';
        
        $result = ServiceLocator::GetDatabase()->Query(new GetAllOscarAppointmentsCommand($providers));
        
        while ($row = $result->GetRow())
        {
            list($refNumber, $request) = $this->FormatNonMDSAppointment($row);
            
            $this->nonmdsAppointments[] = $request;
        }
    }

    public function GetNonMDSDeletedAppointments()
    {
        $lastId = $this->config->GetSectionKey(ConfigSection::DYNAMIC_DATA,ConfigKeys::LAST_DELETED_ID);
        
        $providers = '(' . (implode(',', $this->providers)) . ')';
        
        return ServiceLocator::GetDatabase()->Query(new GetDeletedAppointmentsCommand($lastId, $providers));
    }        
    
    protected function deleteNonMDSAppointment($appointmentId, $refNumber)
    {        
        ServiceLocator::GetDatabase()->Execute(new InsertAppointmentArchiveInOscarCommand($appointmentId, $refNumber));
        
        ServiceLocator::GetDatabase()->Execute(new DeleteAppointmentInOscarCommand($appointmentId, $refNumber));
    }
    
    protected function updateNonMDSAppointment($appointment)
    {
        $resourceId = $appointment->resourceId;                
        
        // in the appointment record the user is the patient
        if ($appointment->userId == 0)
        {
            $patientId = $this->_mapPatient($appointment->patient);
        }else
        {
            $patientId = $appointment->userId;
        }
        
        $providerId = $this->myId;
                
        $patient = $appointment->patient;
        
        $lname = $patient->LastName;
        
        $fname = $patient->FirstName;
        
        $street = (!$patient->Street) ? '' : $patient->Street;
        
        $city = (!$patient->City) ? '' : $patient->City;
        
        $state = (!$patient->State) ? 'ON' : $patient->State;
        
        $zip = (!$patient->Zip) ? '' : $patient->Zip;
        
        $phone = (!$patient->Phone) ? '' : ($this->FormatPhone($patient->Phone));
        
        $email = $patient->Email;                                        

        if ($patientId == 0)
        {
            if ($this->config->GetSectionKey(ConfigSection::DATA_TRANSFER, ConfigKeys::CREATE_PATIENT, new BooleanConverter()))
            {    
                $patientId = ServiceLocator::GetDatabase()->ExecuteInsert(new InsertPatientInOscarCommand($lname, $fname, $street, $city, $state, $zip, $phone, $email, $resourceId, $providerId));
                
                if ($patientId == 0)
                {
                    $this->SendErrorEmail('OscarPatientInsertError');
                    
                    return;
                }
            }
        }else
        {
            if ($this->config->GetSectionKey(ConfigSection::DATA_TRANSFER, ConfigKeys::UPDATE_OSCAR_FROM_MDS, new BooleanConverter()))
            {                
                ServiceLocator::GetDatabase()->Execute(new UpdatePatientInOscarCommand($lname, $fname, $street, $city, $state, $zip, $phone, $email, $resourceId, $providerId, $patientId));
                
                 Log::Debug("Updated patient data in Oscar for patient id: %d", $patientId);
            }else
            {
                ServiceLocator::GetDatabase()->Execute(new UpdatePatientNameInOscarCommand($lname, $fname, $patientId));
                
                Log::Debug("Updated patient names only in Oscar to last name = %s, first name = %s", $lname, $fname);
            }
        }                
        $startTime = substr($appointment->startDate, 11, 8);
        $dt = new DateTime($appointment->endDate);
        // subtract a minute to satisfy Oscar
        $dt->sub(new DateInterval('PT1M'));
        $endTime = $dt->format('H:i:s');
        $name = $appointment->title;
        $rn = $appointment->referenceNumber;
        $status = 't';
        $providerName = $this->myLname . ',' .  $this->myFname;
        
        $returnArray = array();
        
        $appointmentId = $appointment->reservationId;
        
        if ($appointmentId == 0)
        {
            $result = ServiceLocator::GetDatabase()->Query(new GetAppointmentByRNCommand('MDS:' . $appointment->referenceNumber . '%' ));
            
            if ($row = $result->GetRow())
            {
                $appointmentId = $row['appointment_no'];
            }
        }
        
        if ($appointmentId == 0)
        {
            $appointmentId = ServiceLocator::GetDatabase()->ExecuteInsert(new InsertAppointmentInOscarCommand($resourceId, $startTime, $endTime, $name, $rn, $status, $patientId, $providerId, $providerName, $appointment->startDate));
            
            $returnArray = array('patientId' => $patientId, 'appointmentId' => $appointmentId);
        }else
        {
            ServiceLocator::GetDatabase()->Execute(new InsertAppointmentArchiveInOscarCommand($appointmentId, $rn));
            
            ServiceLocator::GetDatabase()->ExecuteInsert(new UpdateAppointmentInOscarCommand($resourceId, $startTime, $endTime, $name, $status, $patientId, $providerId, $appointment->startDate, $appointmentId));
        }
        return $returnArray;
    }    
    
    private function _mapPatient($patient)
    {
        $mapFlag = $this->config->GetSectionKey(ConfigSection::DATA_TRANSFER, ConfigKeys::MAP_PATIENT);
    
        $patientId = 0;
        
        if (!is_null($mapFlag))
        {
            foreach (explode(',', $mapFlag) as $key)
            {
                $value = $patient->$key;
                
                if (preg_match('/phone/i', $key))
                {
                    $value = $this->FormatPhone($value);
                }
                
                if ($value)
                {
                    $result = ServiceLocator::GetDatabase()->Query(new FindPatientByFieldCommand($key, $value));
                    
                    if ($row = $result->GetRow())
                    {
                        $patientId = $row['demographic_no'];
                        
                        break;
                    }
                    if (preg_match('/phone/i', $key))
                    {
                        // there is another column called phone2
                        $result = ServiceLocator::GetDatabase()->Query(new FindPatientByFieldCommand($key . '2', $value));
    
                        if ($row = $result->GetRow())
                        {
                            $patientId = $row['demographic_no'];
                            
                            break;
                        }                        
                        $result = ServiceLocator::GetDatabase()->Query(new FindPatientByMobileCommand($value));

                        if ($row = $result->GetRow())
                        {
                            $patientId = $row['demographic_no'];
                            
                            break;
                        }                                                
                    }    
                }
            }
        }
        return $patientId;
    }
    
    public function Compare($OscarApt, $MDSApt)
    {
        $diff;
        
        if ($MDSApt->reservationId > 0 && $OscarApt->appointment_no != $MDSApt->reservationId)
        {
            $diff = "Appointment ID: MyDocSchedule.com: $MDSApt->reservationId    Local Schedule: $OscarApt->appointment_no;";
        }

        if ($OscarApt->provider_no != $MDSApt->resourceId)
        {
            $diff .= "Doctor ID: MyDocSchedule.com: $MDSApt->resourceId    Local Schedule: $OscarApt->provider_no;";
        }

        if (($MDSApt->userId > 0 && $OscarApt->demographic_no != $MDSApt->userId) ||
            ($MDSApt->userId == 0 && $MDSApt->firstName != 'Do_not_book' &&
             (strtolower($OscarApt->first_name) != strtolower($MDSApt->firstName) || (strtolower($OscarApt->last_name) != strtolower($MDSApt->lastName)))))
        {
            $diff .= "Patient ID: MyDocSchedule.com:  $MDSApt->userId    Local Schedule: $OscarApt->demographic_no;";
            $diff .= "Patient Name: MyDocSchedule.com: $MDSApt->lastName    Local Schedule: $MDSApt->firstName:$OscarApt->last_name,$OscarApt->first_name;";
        }
        
        $oscarStart = new Date("$OscarApt->appointment_date $OscarApt->start_time");

        $oscarEnd = new Date("$OscarApt->appointment_date $OscarApt->end_time");
        
        $mdsStart = new Date($MDSApt->startDate);
        
        $mdsEnd = new Date(new Date($MDSApt->endDate));
        
        if (!$oscarStart->DateEquals($mdsStart))
        {
            $diff .= 'Appointment Date: ' . 'MydocSchedule.com: ' .  $mdsStart->Format('Y-m-d H:i:s') . '-' . $mdsEnd->Format('Y-m-d H:i:s') . '    Local Schedule: ' . $oscarStart->Format('Y-m-d H:i:s') . '-' . $oscarEnd->Format('Y-m-d H:i:s');
        }
        
        if ($diff  && !preg_match('/Appointment/', $diff))
            $diff = "Appointment ID: MydocSchedule.com: $MDSApt->referenceNumber    Local Schedule: $OscarApt->appointment_no;" . $diff;
        
        return (!$diff) ? null : $diff;
    }
    
    protected function GetLocalAppointmentAsString($appointment)
    {
        return "Name: $appointment->name    Date: $appointment->appointment_date $appointment->start_time";
    }
}

