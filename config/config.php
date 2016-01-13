<?php
/**
Copyright 2014-2016 Russ Profant

This file is part of Integration package for Oscar and MyDocSchedule.com

This is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This software is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
*/

/**
 * Application configuration
 */
$conf['settings']['timezone'] = 'America/Toronto';                // look up here http://php.net/manual/en/timezones.php
$conf['settings']['enable.email'] = 'true';                       // global configuration to enable if any emails will be sent
$conf['settings']['default.language'] = 'en_us';                  // find your language in phpScheduleIt/lang directory
$conf['settings']['admin.email'] = '';
$conf['settings']['lang.code'] = 'en_us';
$conf['settings']['integration.with'] = 'oscar';

/**
 * Database configuration
 */
$conf['settings']['local.db']['type'] = 'mysql';
$conf['settings']['local.db']['user'] = 'mds';             // database user with permission to the phpScheduleIt database
$conf['settings']['local.db']['password'] = 'mds123';
$conf['settings']['local.db']['hostspec'] = 'localhost';   // ip, dns or named pipe
$conf['settings']['local.db']['name'] = 'oscar_12_1';

/**
 * MDS configuration
 */
$conf['settings']['mds']['user'] = 'oscar@naidoo.com';                  // database user with permission to the phpScheduleIt database
$conf['settings']['mds']['password'] = 'oscar1';
$conf['settings']['mds']['base.url'] = 'http://localhost/docSchedule/Web/Services';        // ip, dns or named pipe
$conf['settings']['mds']['authenticate.url'] = '/Authentication/Authenticate';
$conf['settings']['mds']['signout.url'] = '/Authentication/SignOut';
$conf['settings']['mds']['appointment.url'] = '/Reservations/';
$conf['settings']['mds']['email.list'] = 'remprofant@gmail.com';
$conf['settings']['mds']['phone.format'] = '999-999-9999';
$conf['settings']['mds']['reconciliation.time'] = '07:00';   // time of the day when full reconciliation is run in HH:MM

/**
 * Data transfer configuration
 */

// If set to 'no' a patient in Oscar will not be created from MDS data only the appointment with demographic_no = 0
// possible values are true or false
$conf['settings']['data.transfer']['create.patient.in.oscar'] = 'true';

// This option sets whether Oscar demographic data should be updated by the patient data from MDS;
// this doesn't apply to basic data (first name, last name) which is always updated but only to email, phone, address data
// possible values are true or false
$conf['settings']['data.transfer']['update.oscar.from.mds'] = 'true'; 

// List of data fields to transfer from Oscar to MDS; possible values are 'all', 'none', 'basic' which includes first_name, last_name, phone and email
// or names of actual fields such as address, city, province which are added in addition to the 4 basic fields mentioned earlier   
$conf['settings']['data.transfer']['oscar.to.mds.patient.data.field.list'] = 'basic'; 

// List of fields used for mapping patients from MDS to Oscar
$conf['settings']['data.transfer']['map.mds.patient.to.oscar.by.field.list'] = 'Phone,Email';

// List of providers that have their schedule on MyDocSchedule.com
// Valid values are 'all' meaning all doctors setup in the Oscar provider table
// or a list of last names of doctorsas set up in Oscar or a list of provider ids in Oscar
// (for cases where there are 2 or more doctors with identical last names and one or more use MDS and one or more don't)
$conf['settings']['data.transfer']['provider.list'] = 'all';


/**
 * Mail server configuration
 */
$conf['settings']['phpmailer']['mailer'] = 'mail';              // options are 'mail', 'smtp' or 'sendmail'
$conf['settings']['phpmailer']['smtp.host'] = '';               // 'smtp.company.com'
$conf['settings']['phpmailer']['smtp.port'] = '25';
$conf['settings']['phpmailer']['smtp.secure'] = '';             // options are '', 'ssl' or 'tls'
$conf['settings']['phpmailer']['smtp.auth'] = 'true';           // options are 'true' or 'false'
$conf['settings']['phpmailer']['smtp.username'] = '';
$conf['settings']['phpmailer']['smtp.password'] = '';
$conf['settings']['phpmailer']['sendmail.path'] = '/usr/sbin/sendmail';
$conf['settings']['phpmailer']['send.mail.flag'] = 'true';

/**
 * Live Data; this is used to save the latest run-time values for the next run
 */
$conf['settings']['dynamic.data']['last.deleted.id'] = '453';
$conf['settings']['dynamic.data']['last.updated.timestamp'] = '2016-01-13 11:06:27';

