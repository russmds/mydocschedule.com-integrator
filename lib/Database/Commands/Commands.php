<?php
/**
Copyright 2011-2012 Nick Korbel

This file is part of phpScheduleIt.

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

require_once(ROOT_DIR . 'lib/Database/SqlCommand.php');
//require_once(ROOT_DIR . 'lib/Database/Commands/namespace.php');

class GetOscarAppointmentsCommand extends SqlCommand
{
	public function __construct($timestamp, $mdsId, $providerString)
	{
		parent::__construct(QueryBuilder::GetAppointmentsForProviders($providerString));
		$this->AddParameter(new Parameter(ParameterNames::LAST_TIMESTAMP, $timestamp));
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $mdsId));
	}
}

class GetAllOscarAppointmentsCommand extends SqlCommand
{
	public function __construct($providerString)
	{
		parent::__construct(QueryBuilder::GetAllAppointmentsForProviders($providerString));
	}
}

class TestConnectionCommand extends SqlCommand
{
	public function __construct()
	{
		parent::__construct(Queries::USE_OSCAR);		
	}	
}

class UpdateOscarAppointmentsCommand extends SqlCommand
{
	public function __construct($rn, $appNo)
	{
		parent::__construct(Queries::UPDATE_OSCAR_WITH_MDS_RN);
		$this->AddParameter(new Parameter(ParameterNames::ID, $rn));
		$this->AddParameter(new Parameter(ParameterNames::APPOINTMENT_NO, $appNo));
	}
}

class GetDeletedAppointmentsCommand extends SqlCommand
{
	public function __construct($lastId = 0, $providerString)
	{
		parent::__construct(QueryBuilder::GetDeletedAppointmentsForProviders($providerString));
		$this->AddParameter(new Parameter(ParameterNames::LAST_ID, $lastId));
	}	
}

class FindPatientByFieldCommand extends SqlCommand
{
	public function __construct($field, $value)
	{
		parent::__construct(QueryBuilder::GET_FIND_BY_FIELD($field));
		$this->AddParameter(new Parameter(ParameterNames::VALUE, $value));
	}	
}

class GetProviderCommand extends SqlCommand
{
	public function __construct($lname)
	{
		parent::__construct(Queries::GET_PROVIDER_BY_LNAME);
		$this->AddParameter(new Parameter(ParameterNames::LAST_NAME, $lname));
	}	
}

class InsertPatientInOscarCommand extends SqlCommand
{
	public function __construct($lname, $fname, $street, $city, $state = 'ON', $zip, $phone, $email, $resourceId, $userId)
	{
		parent::__construct(Queries::INSERT_PATIENT_IN_OSCAR);
		$this->AddParameter(new Parameter(ParameterNames::LAST_NAME, $lname));
		$this->AddParameter(new Parameter(ParameterNames::FIRST_NAME, $fname));
		$this->AddParameter(new Parameter(ParameterNames::STREET, $street));
		$this->AddParameter(new Parameter(ParameterNames::CITY, $city));
		$this->AddParameter(new Parameter(ParameterNames::STATE, $state));
		$this->AddParameter(new Parameter(ParameterNames::ZIP, $zip));
		$this->AddParameter(new Parameter(ParameterNames::PHONE, $phone));
		$this->AddParameter(new Parameter(ParameterNames::EMAIL, $email));
		//$this->AddParameter(new Parameter(ParameterNames::DATE, $date));
		$this->AddParameter(new Parameter(ParameterNames::RESOURCE_ID, $resourceId));
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
	}	
}

class UpdatePatientInOscarCommand extends SqlCommand
{
	public function __construct($lname, $fname, $street, $city, $state = 'ON', $zip, $phone, $email, $resourceId, $userId, $patientId)
	{
		parent::__construct(Queries::UPDATE_PATIENT_IN_OSCAR);
		$this->AddParameter(new Parameter(ParameterNames::LAST_NAME, $lname));
		$this->AddParameter(new Parameter(ParameterNames::FIRST_NAME, $fname));
		$this->AddParameter(new Parameter(ParameterNames::STREET, $street));
		$this->AddParameter(new Parameter(ParameterNames::CITY, $city));
		$this->AddParameter(new Parameter(ParameterNames::STATE, $state));
		$this->AddParameter(new Parameter(ParameterNames::ZIP, $zip));
		$this->AddParameter(new Parameter(ParameterNames::PHONE, $phone));
		$this->AddParameter(new Parameter(ParameterNames::EMAIL, $email));
		//$this->AddParameter(new Parameter(ParameterNames::DATE, $date));
		$this->AddParameter(new Parameter(ParameterNames::RESOURCE_ID, $resourceId));
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
		$this->AddParameter(new Parameter(ParameterNames::PATIENT_ID, $patientId));
	}	
}

class UpdatePatientNameInOscarCommand extends SqlCommand
{
	public function __construct($lname, $fname, $patientId)
	{
		parent::__construct(Queries::UPDATE_PATIENT_NAME_IN_OSCAR);
		$this->AddParameter(new Parameter(ParameterNames::LAST_NAME, $lname));
		$this->AddParameter(new Parameter(ParameterNames::FIRST_NAME, $fname));
		$this->AddParameter(new Parameter(ParameterNames::PATIENT_ID, $patientId));
	}	
}

class InsertAppointmentInOscarCommand extends SqlCommand
{
	public function __construct($resourceId, $startTime, $endTime, $name, $rn, $status, $patientId, $providerId, $providerName, $date)
	{
		parent::__construct(Queries::INSERT_APPOINTMENT_IN_OSCAR);
		$this->AddParameter(new Parameter(ParameterNames::RESOURCE_ID, $resourceId));
		$this->AddParameter(new Parameter(ParameterNames::START_TIME, $startTime));
		$this->AddParameter(new Parameter(ParameterNames::END_TIME, $endTime));		
		$this->AddParameter(new Parameter(ParameterNames::NAME, $name));
		$this->AddParameter(new Parameter(ParameterNames::REFERENCE_NUMBER, $rn));
		$this->AddParameter(new Parameter(ParameterNames::STATUS, $status));
		$this->AddParameter(new Parameter(ParameterNames::PATIENT_ID, $patientId));
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $providerId));
		$this->AddParameter(new Parameter(ParameterNames::CREATOR, $providerName));
		$this->AddParameter(new Parameter(ParameterNames::DATE, $date));
	}	
}

class UpdateAppointmentInOscarCommand extends SqlCommand
{
	public function __construct($resourceId, $startTime, $endTime, $name, $status, $patientId, $providerId, $date, $appointmentId)
	{
		parent::__construct(Queries::UPDATE_APPOINTMENT_IN_OSCAR);
		$this->AddParameter(new Parameter(ParameterNames::RESOURCE_ID, $resourceId));
		$this->AddParameter(new Parameter(ParameterNames::START_TIME, $startTime));
		$this->AddParameter(new Parameter(ParameterNames::END_TIME, $endTime));		
		$this->AddParameter(new Parameter(ParameterNames::NAME, $name));
		$this->AddParameter(new Parameter(ParameterNames::STATUS, $status));
		$this->AddParameter(new Parameter(ParameterNames::PATIENT_ID, $patientId));
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $providerId));
		$this->AddParameter(new Parameter(ParameterNames::DATE, $date));
		$this->AddParameter(new Parameter(ParameterNames::APPOINTMENT_ID, $appointmentId));
	}	
}


class InsertAppointmentArchiveInOscarCommand extends SqlCommand
{
	public function __construct($appointmentId)
	{
		parent::__construct(Queries::INSERT_APPOINTMENT_ARCHIVE_IN_OSCAR);
		$this->AddParameter(new Parameter(ParameterNames::APPOINTMENT_ID, $appointmentId));
	}	
}

class DeleteAppointmentInOscarCommand extends SqlCommand
{
	public function __construct($appointmentId)
	{
		parent::__construct(Queries::DELETE_APPOINTMENT_IN_OSCAR);
		$this->AddParameter(new Parameter(ParameterNames::APPOINTMENT_ID, $appointmentId));
	}	
}

class GetAppointmentByRNCommand extends SqlCommand
{
	public function __construct($notes)
	{
		parent::__construct(Queries::GET_APPOINTMENT_BY_RN);
		$this->AddParameter(new Parameter(ParameterNames::NOTES, $notes));
	}	
}

class GetDoctorProvidersCommand extends SqlCommand
{
	public function __construct()
	{
		parent::__construct(Queries::GET_DOCTOR_PROVIDERS);
		//$this->AddParameter(new Parameter(ParameterNames::PROVIDERS, $providers));
	}	
}

class FindPatientByMobileCommand extends SqlCommand
{
	public function __construct($phone)
	{
		parent::__construct(Queries::GET_PATIENT_BY_MOBILE);
		$this->AddParameter(new Parameter(ParameterNames::VALUE, $phone));
	}	
}