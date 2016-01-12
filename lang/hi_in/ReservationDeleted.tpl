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
                <td style="font-weight:bold;text-align:right;">Patient:</td><td>{$Title}</td>
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
            {if count($RepeatDates) gt 0}
                <tr>
                    <td colspan=2>The following dates have been removed:</td>
                </tr>
                <tr>              
                    <td>
                    {foreach from=$RepeatDates item=date name=dates}
                        {formatdate date=$date}<br/>
                    {/foreach}
                    </td>
                </tr>    
            {/if}    
        </table>
        <br/>
        <a style="text-align:left" href="{$ScriptUrl}/login.php">Log in to MyDocSchedule.com</a>    
    </div>    			
{include file='..\..\tpl\Email\emailfooter.tpl'}