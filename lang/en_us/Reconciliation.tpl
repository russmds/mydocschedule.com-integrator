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
{include file='..\emailheader.tpl'}
<div style="padding:25px; margin-left:265px;">   
	<br/>
	<br/>	
	<h2>Reconciliation Report For {$Date}</h2>
    <br/>
	<br/>
	{if $Diffs|count > 0}
        <h3>***    Differences    ***</h3>
		{foreach from=$Diffs item=Diff}
			{$Diff}<br/>
		{/foreach}
    {/if}    
    {if $Local|count > 0}
        <h3>***    Appointments Missing In MyDocSchedule.com    ***</h3>
		{foreach from=$Local item=Apt}
			{$Apt}<br/>
		{/foreach}
	{/if}
    {if $MDS|count > 0}
        <h3>***    Appointments Missing In Local Schedule    ***</h3>
		{foreach from=$MDS item=Apt}
			{$Apt}<br/>
		{/foreach}
	{/if}
    {if $MDS|count == 0 && $Local|count == 0 && $Diffs|count == 0}
		No differences found between local schedule and MyDocSchedule.com.<br/>
	{/if}
</div>    
{include file='..\emailfooter.tpl'}