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

{$FirstName},<br/>
Merci de votre inscription a phpScheduleIt. Merci de cliquer ici pour <a href="{$ActivationUrl}">activer votre compte</a>.
	
{include file='..\..\tpl\Email\emailfooter.tpl'}
