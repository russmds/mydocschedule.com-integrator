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
	
	Detalhes da Reserva: 
	<br/>
	<br/>
	
	Usuário: {$UserName}
	Iniciando: {formatdate date=$StartDate key=reservation_email}<br/>
	Terminando: {formatdate date=$EndDate key=reservation_email}<br/>
	Recurso: {$ResourceName}<br/>
	Título: {$Title}<br/>
	Descrição: {$Description}<br/>
	
	{if count($RepeatDates) gt 0}
		<br/>
		A reserva ocorre nas seguintes datas:
		<br/>
	{/if}
	
	{foreach from=$RepeatDates item=date name=dates}
		{formatdate date=$date}<br/>
	{/foreach}

	{if $RequiresApproval}
		<br/>
		Um ou mais recursos reservados requerem aprovação antes do uso. Certifique-se que este pedido de reserva seja aprovado ou rejeitado.
	{/if}
	
	<br/>
	<a href="{$ScriptUrl}{$ReservationUrl}">Ver esta reserva</a> | <a href="{$ScriptUrl}">Entrar no phpScheduleIt</a>
	
{include file='..\..\tpl\Email\emailfooter.tpl'}