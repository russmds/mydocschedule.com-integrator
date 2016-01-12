<?php
/**
 * To validate an email address according to RFCs 5321, 5322 and others
 *
 * Copyright © 2008-2011, Dominic Sayers					<br>
 * Test schema documentation Copyright © 2011, Daniel Marschall			<br>
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 *     - Redistributions of source code must retain the above copyright notice,
 *       this list of conditions and the following disclaimer.
 *     - Redistributions in binary form must reproduce the above copyright notice,
 *       this list of conditions and the following disclaimer in the documentation
 *       and/or other materials provided with the distribution.
 *     - Neither the name of Dominic Sayers nor the names of its contributors may be
 *       used to endorse or promote products derived from this software without
 *       specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR
 * ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
 * ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @package	is_email
 * @author	Dominic Sayers <dominic@sayers.cc>
 * @copyright	2008-2011 Dominic Sayers
 * @license	http://www.opensource.org/licenses/bsd-license.php BSD License
 * @link	http://www.dominicsayers.com/isemail
 * @version	3.01.1 - Fixed examples and readme.txt
 */

// The quality of this code has been improved greatly by using PHPLint
// Copyright (c) 2010 Umberto Salsi
// This is free software; see the license for copying conditions.
// More info: http://www.icosaedro.it/phplint/
/*.
	require_module 'standard';
	require_module 'pcre';
.*/
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

/**************************************************************************
 * new edition RP
*/
function check_email_format($email)
{
    // validate email address syntax
    $exp = "/^[a-z\'0-9]+([._-][a-z\'0-9]+)*@([a-z0-9]+([._-][a-z0-9]+))+$/i";
     
    $valid = preg_match($exp, $email);
    
    return $valid;
}

function check_email_exists($email)
{
    // don't check on test/development server as the telnet is not working there
    //if (preg_match('/localhost/', Configuration::Instance()->GetKey(ConfigKeys::SCRIPT_URL)))    
    //{
        //return true;
    //}
    
    $server = get_mx_server($email);
        
    $valid = true;

    if ($server)
    {
        //$cmd = '(echo "helo microsoft.com"; sleep 0.1; echo "mail from: <support@microsoft.com>"; sleep 0.5; echo "rcpt to: <' . $email . '>"; sleep 1; echo "quit";) | telnet ' . $server . " 25 2>&1 >/tmp/$email.out | grep 550 2>&1 >/dev/null";

        //$discard = system($cmd, $result);
        
        //$output = file_get_contents("/tmp/$email.out");

        //if (preg_match('/550/', $output))
        //{
            //$valid = false;
        //}
        //try connection on port 25
        Log::Debug("Opening telnet socket to: $server");
        
        $connection = @fsockopen($server,25, $errno, $errstr, 1);
    
        if($connection)
        {
            // Introduce ourselves
            fputs($connection, "HELO mydocschedule.com\n");
            
            stream_set_timeout($connection, 2);
            
            $res = fgets($connection,256);
            
            Log::Debug("Telnet 'HELO' reply: $res\n");
            
            if(substr($res,0,3) != "220") return $valid;

            // Envelope from
            fputs($connection, "MAIL FROM: <support@mydocschedule.com>\n");
            
            stream_set_timeout($connection, 2);
            
            $res = fgets($connection,256);
            
            Log::Debug("Telnet 'MAIL FOM' reply: $res\n");
            
            if(substr($res,0,3) != "250") return $valid;

            // Envelope to            
            fputs($connection, "RCPT TO: <$email>\n");
            
            stream_set_timeout($connection, 2);

            for ($i =0; $i < 2; $i++)
            {
               $res.=fgets($connection,1024);
            }
            Log::Debug("Telnet 'RCPT TO' reply: $res\n");
            
            if(preg_match('/550/', $res)) $valid = false;

            fclose($connection);
        }            
    }else
    {
        $valid = false;
    }
    return $valid;
}

function get_mx_server($email)
{
   $mailparts = explode("@",$email);
   
   if (!$mailparts[1])
   {
        return null;
   }
   
   $hostname = $mailparts[1];
   
   // yahoo is blacklisting us so we cannot check
   if (preg_match('/yahoo/i', $hostname))
   {
       return null;
   }
   $b_mx_avail = getmxrr( $hostname, $mx_records, $mx_weight );

   return (($b_mx_avail) ? $mx_records[0] : null);
}
