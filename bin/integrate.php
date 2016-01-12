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

define('ROOT_DIR', '../');

require_once(ROOT_DIR . 'lib/Integration/IntegrationFactory.php');

error_reporting(E_ALL);
ini_set("display_errors", 1);

$shortopts = "dt";

$longopts = array("debug", "test");

$options = getopt($shortopts, $longopts);

$factory = new IntegrationFactory();

/*********************************************************************************************
 *   Create the integrator object
*********************************************************************************************/
$integrator = $factory->GetIntegrator();

/*********************************************************************************************
 *   If there was a problem with integrator creation, exit
*********************************************************************************************/
if (is_null($integrator->GetMyId()) || count($integrator->GetProviders()) == 0)
{
    if (array_key_exists('t', $options) || array_key_exists('test', $options))
    {
        $date = new Date();
        
        echo "Test FAILED check the log file ../log/mds_integration_log_" . $date->Format('Ymd') . ".log\n";
    }
    exit(1);
}

if (array_key_exists('t', $options) || array_key_exists('test', $options))
{
    echo "Test SUCCEEDED\n";
    
    exit(0);
}

/*********************************************************************************************
 *   First, synchronize MyDocSchedule.com with Local, e.g. send appointments from Local to MDS
*********************************************************************************************/
$integrator->SyncUpMDS();

/*********************************************************************************************
 *   Second, synchronize Local schedule with MDS, e.g. get appointments from MDS to Local
*********************************************************************************************/
$integrator->SyncUpNonMDS();

/*********************************************************************************************
 *   Check if reconciliation needs to be run and if so run it
*********************************************************************************************/
$integrator->Reconcile();

/*********************************************************************************************
 *  Log out of MDS
*********************************************************************************************/
$integrator->SignOutFromMDS();

exit(0);
