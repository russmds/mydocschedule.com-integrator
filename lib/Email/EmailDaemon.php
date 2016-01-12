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

define('ROOT_DIR', '../../');

require_once(ROOT_DIR . 'Domain/namespace.php');
require_once(ROOT_DIR . 'lib/Config/namespace.php');
require_once(ROOT_DIR . 'lib/Email/namespace.php');
require_once(ROOT_DIR . 'lib/Common/namespace.php');
require_once(ROOT_DIR . 'lib/Database/namespace.php');
require_once(ROOT_DIR . 'lib/Server/namespace.php');
require_once(ROOT_DIR . 'lib/external/phpmailer/class.phpmailer.php');

// Allowed arguments & their defaults
$runmode = array(
    'no-daemon' => false,
    'help' => false,
    'write-initd' => false,
);

// Scan command line attributes for allowed arguments
foreach ($argv as $k=>$arg) {
    if (substr($arg, 0, 2) == '--' && isset($runmode[substr($arg, 2)])) {
        $runmode[substr($arg, 2)] = true;
    }
}

// Help mode. Shows allowed argumentents and quit directly
if ($runmode['help'] == true) {
    echo 'Usage: '.$argv[0].' [runmode]' . "\n";
    echo 'Available runmodes:' . "\n";
    foreach ($runmode as $runmod=>$val) {
        echo ' --'.$runmod . "\n";
    }
    die();
}

// Make it possible to test in source directory
// This is for PEAR developers only
ini_set('include_path', ini_get('include_path').':..');


// Include Class
error_reporting(E_STRICT);
require_once 'System/Daemon.php';

// Setup
$options = array(
    'appName' => 'emailDaemon',
    'appDir' => dirname(__FILE__),
    'appDescription' => 'This is an email daemon for mydocschedule.com',
    'authorName' => 'Russ Profant',
    'authorEmail' => 'russ@mydocschedule.com',
    'sysMaxExecutionTime' => '0',
    'sysMaxInputTime' => '0',
    'sysMemoryLimit' => '1024M',
    'appRunAsGID' => 1000,
    'appRunAsUID' => 1000,
);

System_Daemon::setOptions($options);

// This program can also be run in the forground with runmode --no-daemon
if (!$runmode['no-daemon']) {
    // Spawn Daemon
    System_Daemon::start();
}

// With the runmode --write-initd, this program can automatically write a
// system startup file called: 'init.d'
// This will make sure your daemon will be started on reboot
if (!$runmode['write-initd']) {
    System_Daemon::info('not writing an init.d script this time');
} else {
    if (($initd_location = System_Daemon::writeAutoRun()) === false) {
        System_Daemon::notice('unable to write init.d script');
    } else {
        System_Daemon::info(
            'sucessfully written startup script: %s',
            $initd_location
        );
    }
}

// Run your code
// Here comes your own actual code

// This variable gives your own code the ability to breakdown the daemon:
$runningOkay = true;

// This variable keeps track of how many 'runs' or 'loops' your daemon has
// done so far. For example purposes, we're quitting on 3.
$cnt = 1;

// While checks on 3 things in this case:
// - That the Daemon Class hasn't reported it's dying
// - That your own code has been running Okay
// - That we're not executing more than 3 runs
while (!System_Daemon::isDying() && $runningOkay) {
    // What mode are we in?
    $mode = '"'.(System_Daemon::isInBackground() ? '' : 'non-' ).'daemon" mode';

    // Log something using the Daemon class's logging facility
    // Depending on runmode it will either end up:
    //  - In the /var/log/logparser.log
    //  - On screen (in case we're not a daemon yet)
    System_Daemon::info('{appName} running in %s %s/3',
        $mode,
        $cnt
    );

    // In the actuall logparser program, You could replace 'true'
    // With e.g. a  parseLog('vsftpd') function, and have it return
    // either true on success, or false on failure.	
	$daemon = new EmailDaemon();
	
    $runningOkay = $daemon->ProcessEmails();;    

    // Should your parseLog('vsftpd') return false, then
    // the daemon is automatically shut down.
    // An extra log entry would be nice, we're using level 3,
    // which is critical.
    // Level 4 would be fatal and shuts down the daemon immediately,
    // which in this case is handled by the while condition.
    if (!$runningOkay)
	{
        System_Daemon::err('parseLog() produced an error, '.
					       'so this will be my last run');
    }

    // Relax the system by sleeping for a little bit
    // iterate also clears statcache
    System_Daemon::iterate(2);

    $cnt++;
}

// Shut down the daemon nicely
// This is ignored if the class is actually running in the foreground
System_Daemon::stop();

class EmailDaemon
{
	public function ProcessEmails()
	{
		$reader = ServiceLocator::GetDatabase()->Query(new GetActiveEmailsCommand());
		
		while ($row = $reader->GetRow())
		{
			$mailer = unserialize($row['serialized']);
			
			if ($mailer)
			{
				try
				{
					$status = $mailer->Send();
				}
				catch(Exception $ex)
				{
					Log::Error('Failed sending email. Exception: %s', $ex);
				}								
				$mailStatus = ($status) ? 'S' : 'F';
				
				ServiceLocator::GetDatabase()->Execute(new UpdateEmailStatusCommand($row['id'], $mailStatus));
			}
		}
		return true;
	}
}

*/
