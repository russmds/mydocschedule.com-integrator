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
                <td colspan="2" style="text-align:left;">Hello {$FirstName},</td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr><td colspan="2">A login to MyDocSchedule.com was created for you as follows:</td></tr>
            <tr><td style="font-weight:bold;">Login Name:</td><td style="text-decoration:underline;">{$Email}</td></tr>
            <tr><td style="font-weight:bold;">Password:</td><td style="text-decoration:underline;">{$Password}</td></tr>
            <tr><td colspan="2">Now you can manage your medical appointments online.</td></tr>
            <tr><td colspan="2">&nbsp;</td></tr>            
            <tr><td colspan="2">Kind Regards,</td></tr>        
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr><td colspan="2">Support at MyDocSchedule.com</td></tr>
        </table>
        <br/>
        <a href="{$ScriptUrl}/login.php">Log in to MyDocSchedule.com</a>
    </div>        
{include file='..\..\tpl\Email\emailfooter.tpl'}