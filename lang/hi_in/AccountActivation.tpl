{*
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
*}
{include file='..\..\tpl\Email\emailheader.tpl'}
	<div style="padding:25px; margin-left:265px;">   
        <table>
            <tr>
                <td style="text-align:left;">Dear {$FirstName},</td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td>Thank you for registering with MyDocSchedule.com</td></tr>
            <tr><td>Please <a href="{$ActivationUrl}">activate your account</a>.</td></tr>
            <tr><td>&nbsp;</td></tr>
            {if $Message}
                <tr><td>{$Message}</td></tr>
                <tr><td>&nbsp;</td></tr>
            {/if}    
            <tr><td>Kind Regards,</td></tr>        
            <tr><td>&nbsp;</td></tr>
            <tr><td>Support at MyDocSchedule.com</td></tr>
        </table>
    </div>    
{include file='..\..\tpl\Email\emailfooter.tpl'}
