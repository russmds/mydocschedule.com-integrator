<?php
/**
Copyright 2011-2012 Nick Korbel
Copyright 2012, Moritz Schepp, IST Austria
Copyright 2012, Alois Schloegl, IST Austria

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

class Queries
{
	private function __construct() {}

	const GET_OSCAR_APPOINTMENTS = "SELECT a.*, d.*, a.provider_no 'provider_no', a.demographic_no 'demographic_no', value as 'cell_phone',
										   a.updatedatetime as 'update_timestamp'
									FROM oscar_12_1.appointment a
										 LEFT JOIN oscar_12_1.demographic d on a.demographic_no = d.demographic_no
										 LEFT JOIN oscar_12_1.demographicExt e on d.demographic_no = e.demographic_no and e.key_val = 'demo_cell'
									WHERE CONCAT(appointment_date, ' ', start_time) >= NOW() AND
										  updatedatetime > @timestamp AND
										  status in ('t', 'N') AND
										  COALESCE(a.lastupdateuser, -1) <> @userId AND
										  a.provider_no IN [PROVIDERS]
									ORDER BY a.updatedatetime ASC";

	const GET_ALL_OSCAR_APPOINTMENTS = "SELECT a.*, d.*, a.provider_no 'provider_no', a.demographic_no 'demographic_no', value as 'cell_phone'
										FROM oscar_12_1.appointment a 
											 LEFT JOIN oscar_12_1.demographic d on a.demographic_no = d.demographic_no
										     LEFT JOIN oscar_12_1.demographicExt e on d.demographic_no = e.demographic_no and e.key_val = 'demo_cell'
										WHERE CONCAT(appointment_date, ' ', start_time) >= NOW() and status in ('t', 'N') AND
											  a.provider_no IN [PROVIDERS]
										ORDER BY updatedatetime ASC";

	const GET_DELETED_APPOINTMENTS = "SELECT MAX(id) 'id', SUBSTRING(notes, 5, LOCATE(';', notes) -5) referenceNumber, appointment_no FROM oscar_12_1.appointmentArchive
									  WHERE id > @lastId AND notes like 'MDS%' AND
											provider_no IN [PROVIDERS] AND	
											NOT EXISTS (SELECT 1 FROM oscar_12_1.appointment WHERE appointment.appointment_no = appointmentArchive.appointment_no)
									  GROUP BY appointment_no";
	
	const INSERT_APPOINTMENT_IN_OSCAR = "INSERT INTO oscar_12_1.appointment(provider_no, appointment_date, start_time, end_time, name, demographic_no, program_id, notes, status, createdatetime, updatedatetime,
										 creator, lastupdateuser, reason, location, resources, type)
										 VALUES(@resourceId, DATE(@date), @startTime, @endTime, UPPER(@name), @patientId, 'mdsIntegrator',
										 CONCAT('MDS:', @rn, ';', @seriesId, ';'), @status, NOW(), NOW(), @creator, @userId, '', '', '', '')"; 
	
	const INSERT_PATIENT_IN_OSCAR = "INSERT INTO oscar_12_1.demographic(last_name, first_name, address, city, province, postal, phone, phone2, email, patient_status,
									 patient_status_date, date_joined, official_lang, provider_no, hc_type, country_of_origin, newsletter, lastUpdateDate, lastUpdateUser,
									 hin, ver, roster_status, chart_no, spoken_lang, family_doctor, title)
								     VALUES(UPPER(@lname), UPPER(@fname), @street, @city, @state, @zip, @phone, '', @email, 'AC', CURDATE(), CURDATE(), 'English', @resourceId, 'ON', -1, 'Unknown',
									 NOW(), @userId, '', '', '', '', '', '', '')";

	const UPDATE_PATIENT_IN_OSCAR = "UPDATE oscar_12_1.demographic
 									 SET last_name = UPPER(@lname), first_name = UPPER(@fname), address = @street, city = @city, province = @state,
									 	 postal = @zip, phone = @phone, email = @email, provider_no = @resourceId, lastUpdateDate = NOW(),
										 lastUpdateUser = @userId
									 WHERE demographic_no = @patientId";
									 
	const UPDATE_PATIENT_NAME_IN_OSCAR = "UPDATE oscar_12_1.demographic 
										  SET last_name = UPPER(@lname), first_name = UPPER(@fname)
										  WHERE demographic_no = @patientId";

	const GET_PROVIDER_BY_LNAME = "SELECT provider_no providerId, first_Name firstName FROM oscar_12_1.provider WHERE last_name = @lname";									 
		
	const GET_DOCTOR_PROVIDERS = "SELECT provider_no providerId, last_Name lastName FROM oscar_12_1.provider WHERE provider_type = 'doctor'";
	
	const USE_OSCAR = "USE oscar_12_1";
	
	const UPDATE_OSCAR_WITH_MDS_RN = "UPDATE oscar_12_1.appointment SET notes = CONCAT('MDS:', @id, ';', notes) WHERE appointment_no = @appNo";	

	const INSERT_APPOINTMENT_ARCHIVE_IN_OSCAR = "INSERT INTO oscar_12_1.appointmentArchive(appointment_no, provider_no, appointment_date, start_time, end_time, name,
												demographic_no, program_id, notes, reason, location, resources, type, style, billing, status, imported_status, createdatetime, updatedatetime, creator, lastupdateuser, remarks, urgency, creatorSecurityId, bookingSource)
												SELECT * FROM oscar_12_1.appointment WHERE appointment_no = @appointmentId"; 

	const INSERT_APPOINTMENT_ARCHIVE_IN_OSCAR_BY_NOTES = "INSERT INTO oscar_12_1.appointmentArchive(appointment_no, provider_no, appointment_date, start_time, end_time, name,
												demographic_no, program_id, notes, reason, location, resources, type, style, billing, status, imported_status, createdatetime, updatedatetime, creator, lastupdateuser, remarks, urgency, creatorSecurityId, bookingSource)
												SELECT * FROM oscar_12_1.appointment WHERE notes LIKE @notes"; 
	
	const UPDATE_APPOINTMENT_IN_OSCAR = "UPDATE oscar_12_1.appointment
										 SET provider_no = @resourceId, appointment_date = DATE(@date), start_time = @startTime, end_time = @endTime,
											 name = UPPER(@name), demographic_no = @patientId, status = @status, updatedatetime = NOW(), lastupdateuser = @userId
										 WHERE appointment_no = @appointmentId"; 

	const DELETE_APPOINTMENT_IN_OSCAR = "DELETE FROM oscar_12_1.appointment WHERE appointment_no = @appointmentId";
	
	const DELETE_APPOINTMENT_IN_OSCAR_BY_NOTES = "DELETE FROM oscar_12_1.appointment WHERE notes LIKE @notes";
	
	const GET_APPOINTMENT_BY_RN = "SELECT * FROM oscar_12_1.appointment WHERE notes like @notes";
	
	const GET_PATIENT_BY_MOBILE = "SELECT * FROM oscar_12_1.demographicExt WHERE key_val = 'demo_cell' AND value = @value";
	
	const GET_APPOINTMENT_BY_SID = "SELECT * FROM oscar_12_1.appointment WHERE notes LIKE CONCAT('%;', @seriesId, ';%')";
}


class QueryBuilder
{
	public static $FIND_TEMPLATE = 'SELECT * FROM oscar_12_1.demographic WHERE UPPER([FIELD]) = UPPER(@value)';

	private static function Build($select, $field)
	{
		return str_replace('[FIELD]', $field, $select);
	}

	public static function GET_FIND_BY_FIELD($field)
	{
		return self::Build(self::$FIND_TEMPLATE, $field);
	}
	
	public static function GetAppointmentsForProviders($providers)
	{
		return str_replace('[PROVIDERS]', $providers, Queries::GET_OSCAR_APPOINTMENTS);
	}

	public static function GetAllAppointmentsForProviders($providers)
	{
		return str_replace('[PROVIDERS]', $providers, Queries::GET_ALL_OSCAR_APPOINTMENTS);
	}	

	public static function GetDeletedAppointmentsForProviders($providers)
	{
		return str_replace('[PROVIDERS]', $providers, Queries::GET_DELETED_APPOINTMENTS);
	}		
}
