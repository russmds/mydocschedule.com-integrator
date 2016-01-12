{*
Copyright 2011-2012 Nick Korbel

Ce fichier fait parti de phpScheduleIt.

phpScheduleIt est un logiciel libre : vous pouvez le redistribuer et/ou le
modifier dans le respect des termes de la license GNU (General Public License)
telle que publiée par la Free Software Foundation, que ce soit en version 3 
de cette license ou plus récente (à votre guise).

phpScheduleIt est distribué dans l'espoir d'être utile mais
il est fourni SANS AUCUNE GARANTIE; sans même une garantie implicite 
de COMMERCIABILITE ou DE CONFORMITE A UNE UTILISATION PARTICULIERE.
Voir la Licence Publique Générale GNU pour plus de détails.

Vous devez avoir reçu une copie de la GNU General Public License
avec phpScheduleIt. si ce n'est pas le cas consultez <http://www.gnu.org/licenses/>.
*}
{include file='..\..\tpl\Email\emailheader.tpl'}
	
	Details de Reservation :
	<br/>
	<br/>
	
	Debut: {formatdate date=$StartDate key=reservation_email}<br/>
	Fin: {formatdate date=$EndDate key=reservation_email}<br/>
	{if $ResourceNames|count > 1}
		Ressources:<br/>
		{foreach from=$ResourceNames item=resourceName}
			{$resourceName}<br/>
		{/foreach}
		{else}
		Ressource: {$ResourceName}<br/>
	{/if}
	Titre: {$Title}<br/>
	Description: {$Description|nl2br}<br/>
	
	{if count($RepeatDates) gt 0}
		<br/>
		Les dates suivantes on été effacées:
		<br/>
	{/if}
	
	{foreach from=$RepeatDates item=date name=dates}
		{formatdate date=$date}<br/>
	{/foreach}

	{if $Accessories|count > 0}
		<br/>Accessoires:<br/>
		{foreach from=$Accessories item=accessory}
			({$accessory->QuantityReserved}) {$accessory->Name}<br/>
		{/foreach}
	{/if}

	<a href="{$ScriptUrl}">Connexion à phpScheduleIt</a>
	
{include file='..\..\tpl\Email\emailfooter.tpl'}
