# MyDocSchedule.com (MDS) Integrator #

## Synopsis

This software integrates a local scheduling software with the schedule on MyDocSchedule.com. "Local" means either the same machine where this package will be installed or
a different machine on the same network. It "integrates" the two software domains by synchronizing the scheduling data between these two in near real time, the exact
delay depends on how often the integrator runs, this is usually every 1 or 2 minutes. 

## Installation

The integration package is written in PHP and therefore PHP must be installed on the local machine where the integrator will run.

### Linux

For Linux istallation make sure PHP and 2 of its libraries are installed. You need at least PHP 5.5 or higher plus mysqli and curl are the required libraries.
PHP is usually installed on Linux distributions, to check the version of PHP run this:

~~~
php -v
PHP 5.6.4-4ubuntu6.4 (cli) (built: Oct 28 2015 01:21:29) 
Copyright (c) 1997-2014 The PHP Group
Zend Engine v2.6.0, Copyright (c) 1998-2014 Zend Technologies
    with Zend OPcache v7.0.4-dev, Copyright (c) 1999-2014, by Zend Technologies
    with Xdebug v2.3.2, Copyright (c) 2002-2015, by Derick Rethans
~~~    

Check the output make sure it's at least 5.5 or higher. If you need to upgrade your PHP, Google how to go about it. On Ubuntu you can look at this article [a link](http://askubuntu.com/questions/565784/how-to-upgrade-php-version-to-the-latest-stable-released-version-lets-say-how).
Sometimes you may need to upgrade your Linux version with your your PHP upgrade. Linux upgrade usually takes hours so you may have to do it in off hours.

Assuming you now have PHP 5.5 or higher. You need to check the required libraries are enabled in PHP.

~~~
php -m | egrep -e mysqli -e curl
~~~

If both mysqli and curl are displayed after you run the command then both libraries are installed and you don't need to do anything else. If one or both are not found then you need to install them by running:

~~~
sudo apt-get install php5-mysql php5-curl
~~~

Now download the package appropriate for your machine based on its OS. The operating system's short name is part of the software package name, namely "lin" is
for Linux and "win" is for Windows. After the download unzip the package anywhere you like and you are done with installation.

## Integrator Setup

The integrator package needs to be setup before it can be used. The setup depends on which local software is being integrated with MyDocSchedule.com. Folow the instructions below for you software.

### Oscar

#### Create Oscar login

You need to create the integrator login in Oscar and MyDocSchedule.com. First, create a provider in Oscar by clicking 'Admin->Provider->Add A Provider Record'. The name can be something like
'Mds Integrator' or anything else you want but it should be indicative that this is the name used by the MDS integration software. After provider is created, you
need to create a login for the provider you just created by clicking 'Admin->Security->Create A Login Record'.

Once the login is created you need to enter the login in the 'config.php' file of the integrator which is in the 'integration_home_directory/config' directory under
*$conf['settings']['local.db']['user']* and *$conf['settings']['local.db']['password']* settings.

The important thing with Oscar login is that the login thus created will only work if the integration package is installed on the same computer where Oscar is installed, specifically
Oscar database. If the software is installed on a different machine the login into Oscar database will fail because Oscar creates 'local' login only in Oscar db.

To get around this problem you need to update the user in MySQL directly like this.

~~~
mysql -u user -ppassword -e "UPDATE user SET host = '%' WHERE user = 'login_name'" mysql
~~~

#### Create MyDocSchedule.com Login
   
Assuming you registered your practice with MyDocSchedule.com you need to log in and go to 'Administration->Users & Patients' to setup the integrator login. You need only need to enter the name,
password, email and login type. Anything will work. **The email doesn't need to be real**. It's needed because email is used as a login name in MyDocSchedule.com. However
because the user is created by an administrator the email doesn't need to be verified and therefore doesn't need to exist it's just a login name in the format of an email. For example
you can use 'oscar-integrator@yourmedicalpractice.com'.

Once done enter this login in the *installation_directory/config/config.php* file under the *$conf['settings']['mds']['user']* and *$conf['settings']['mds']['password']* keys.
 
#### Setup Providers in MyDocSchedule.com

Make sure the providers from Oscar that want their schedule published on MyDocSchedule.com are created in MyDocSchedule.com and their schedule reflects their Oscar schedule.

In addition you have to map each provider from Oscar to his/her schedule in MyDocSchedule.com. To do that in MyDocSchedule.com click on 'Administration->Providers' and under 'Provider
Details' edit 'External ID' field. You get the Oscar ID in Oscar by clicking 'Administration->Provider->Search/Edit/Delete Provider Record' then search for the
provider by name.  When the provider is found the 'ID' is the value you need. Enter this value in MyDocSchedule.com.

That's all that is required on MyDocSchedule.com side.

#### Update Configuration File

Now we need to complete the update of the integrator configuration file. You should have already entered the logins. 

Here are the first few setting keys:

~~~
$conf['settings']['timezone'] = 'America/Toronto';
$conf['settings']['enable.email'] = 'true';       
$conf['settings']['default.language'] = 'en_us';  
$conf['settings']['admin.email'] = '';
$conf['settings']['integration.with'] = 'oscar';
~~~

The full list of timezones is available [here](http://php.net/manual/en/timezones.php). It's important to note that many timezones share the same time so it doesn't matter
whether you enter 'America/Toronto' or 'America/New_York' as these 2 are equivalent.

The 'enable.email' setting is important. The integrator reports errors and reconcilation runs through email. Therefore email should be setup on the machine where the integrator runs
so that emails can be sent. However many of the host machines will not have the email server setup and it's not worth going through the trouble of setting up full mail server.

For Linux machines the solution is easy. Instead of setting up a full mail server you only need to setup an outgoing email forwarding software that will forward the email
to mail server/hub such as Google's Gmail. **sSmtp** is just such a tool. Google the setup, it's quick and simple. If you don't have a Gmail account you need to open one.
You can combine the need for an email account on Gmail with the need for an email address (as the login name) for the integrator into MyDocSchedule.com and use the created Gmail
account as the Integrator login name for MyDocSchedule.com. This is just a sugestion not a requirement.

If you decide not to install/use mail then set the setting to false. If you have the email setup then to specify who gets the error and reconciliation emails fill in the
*$conf['settings']['mds']['email.list']* setting with as many emails as you want using comma to separate them. 

The rest of the settings can be left as they are.

#### Test The Setup

To test the setup navigate to the bin directory of the installation directory and run the integrator with '-t' or '--test' options.

~~~
cd /home/user/mdsIntegrator/bin
php integrator.php -t
~~~

The test run only checks logins to local database and MyDocSchedule.com. If both succeed the test is a success otherwise the test fails. You need to check the
log to see why login failed and why.


#### Schedule The Integration Runs

To schedule the integration runs do this open a crontab file:

~~~
crontab -e
~~~

In the crontab file enter a line like this where you can change '2' to '1' to run the integrator script every 1 minute instead of every 2 minutes.
Replace the $INSTALLATION_DIRECTORY with your actual directory where the mdsIntegrator can be found.

~~~
*/2 * * * * cd $INSTALLATION_DIRECTORY/mdsIntegrator;php integrator.php
~~~

## License

A short snippet describing the license (MIT, Apache, etc.)

