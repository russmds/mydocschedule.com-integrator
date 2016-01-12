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
            <tr><td colspan=2 style="font-weight:bold;text-align:center;">Appointment Details</td></tr>
            <tr>
                <td style="font-weight:bold;text-align:right;">Patient:</td><td>{$UserName}</td>
            </tr>
            <tr>
                {if $ResourceNames|count > 1}
                    <td style="font-weight:bold;text-align:right;">Providers:</td>
                    <td>
                        {foreach from=$ResourceNames item=resourceName}
                            {$resourceName}<br/>
                        {/foreach}
                    </td>
                {else}
                     <td style="font-weight:bold;text-align:right;">Provider:</td><td>{$ResourceName}</td>
                {/if}       
            </tr>
            <tr>
                <td style="font-weight:bold;text-align:right;">Start Time:</td><td>{formatdate date=$StartDate key=reservation_email}</td>
            </tr>
            <tr>
                <td style="font-weight:bold;text-align:right;">End Time:</td><td>{formatdate date=$EndDate key=reservation_email}</td>
            </tr>
            <tr>
                <td style="font-weight:bold;text-align:right;">Notes:</td><td>{$Description}</td>
            </tr>    
        </table>    
        
        {if count($RepeatDates) gt 1}
            <br/>
            The appointment occurs on the following dates:
            <br/>        
            {foreach from=$RepeatDates item=date name=dates}
                {formatdate date=$date}<br/>
            {/foreach}
        {/if}
        {if $Accessories|count > 0}
            <br/>Accessories:<br/>
            {foreach from=$Accessories item=accessory}
                ({$accessory->QuantityReserved}) {$accessory->Name}<br/>
            {/foreach}
        {/if}
    
        {if $RequiresApproval}
            <br/>
            One or more of the providers require approval before usage. Please ensure that this reservation request is approved or rejected.
        {/if}
        <br/>
        <div style="margin: 20px auto; text-align: center;">
            <a href="{$ScriptUrl}/{$ReservationUrl}">View this appointment</a> | <a href="{$ScriptUrl}/login.php">Log in to MyDocSchedule.com</a>
        </div>    
    </div>	
{include file='..\..\tpl\Email\emailfooter.tpl'}