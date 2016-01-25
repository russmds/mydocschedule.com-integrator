# MyDocSchedule.com (MDS) Integrator #

## Synopsis

This software integrates a local scheduling software with the schedule on MyDocSchedule.com. "Local" means either the same machine where this package will be installed or
a different machine on the same network. It "integrates" the two software domains by synchronizing the scheduling data between these two in near real time, the exact
delay depends on how often the integrator runs usually either every 1 or 2 minutes. 

## Installation

Download the package appropriate for your machine based on its OS. The operating system's short name is part of the software package name, namely "lin" is
for Linux and "win" is for Windows. The package is written in PHP and therefore PHP must be installed on the local machine where the integrator will run.

### Linux

For Linux istallation make sure PHP and 2 of its libraries are installed. You need at least PHP 5.5 or higher plus mysqli and curl are the required libraries.
PHP is usually installed on Linux distributions, to check the version of PHP run this:

~~~
php -v
~~~

Check the output make sure it's at least 5.5 or higher.

~~~
russ@russ-vaio:~/mdsIntegrator$ php -v
PHP 5.6.4-4ubuntu6.4 (cli) (built: Oct 28 2015 01:21:29) 
Copyright (c) 1997-2014 The PHP Group
Zend Engine v2.6.0, Copyright (c) 1998-2014 Zend Technologies
    with Zend OPcache v7.0.4-dev, Copyright (c) 1999-2014, by Zend Technologies
    with Xdebug v2.3.2, Copyright (c) 2002-2015, by Derick Rethans
~~~    

## API Reference

Depending on the size of the project, if it is small and simple enough the reference docs can be added to the README. For medium size to larger projects it is important to at least provide a link to where the API reference docs live.

## Tests

Describe and show how to run the tests with code examples.

## Contributors

Let people know how they can dive into the project, include important links to things like issue trackers, irc, twitter accounts if applicable.

## License

A short snippet describing the license (MIT, Apache, etc.)

