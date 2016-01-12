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
{include file='globalheader.tpl'}
<h1>Contact Us</h1>

<div id="help">
<h2>{html_image src="mail24.png" style="margin:2px 5px -5px 5px"} Mailing Address</h2>

<p>Please mail your checks and any other snail correspondence to:</p>

<p><b>
	CM Processing Inc.<br />
	160 Main St. P.O. Box 92516 <br />
	Brampton, Ontario, Canada<br />
	L6W 4R1
	</b>
</p>
<br />
<h2>{html_image src="phone24.png" style="margin:2px 5px -5px 5px"} Phone</h2>

<p>Our business hours are 9AM to 5PM Eastern Time.</p>
<p><b>289-271-2078</b><p>
<p>Please beware that the phone is not always attended. If that's the case please leave us a message and we will return your call ASAP.</p>
<br />
<h2>{html_image src="edit_mail24.png" style="margin:2px 5px -5px 5px"} Email</h2>

<p>You can email us from your favorite email app at <a href="mailto:support@mydocschedule.com">support@mydocschedule.com</a> or use the form below.</p>
<br />


<form id="contactForm" method="post" action="" style="width:40%;margin-right:auto;margin-left:auto;">
	<div id="reservationbox">
		<p><b>Subject</b></p>
		<p>{textbox name="SUBJECT" class="input" id="subject" value="" style="width:50%" size="50"}</p>
		<br />
		<p><b>Message</b></p>
		<p><textarea id="description" name="{FormKeys::MESSAGE}" class="input-area" style="width:100%" rows="10">{$Description}</textarea></p>
	</div>
	<br />
	<p class="regsubmit"><button type="button" class="button send">{html_image src="send_mail16.png"} {translate key='Send'}</button></p>
</form>

<div id="dialogSave" style="display:none;">
	<div id="creatingNotification" style="position:relative; top:170px;">
	<p class="regsubmit">	
		{block name="ajaxMessage"}
			{translate key=SendingEmail}...<br/>
		{/block}
		<img src="{$Path}img/reservation_submitting.gif" alt="Sending email"/>
	</p>	
	</div>
	<div id="result" style="display:none;"></div>
</div>

<script type="text/javascript" src="scripts/js/jquery.textarea-expander.js"></script>
<script type="text/javascript" src="scripts/js/jquery.qtip.min.js"></script>
<script type="text/javascript" src="scripts/js/jquery.form-3.09.min.js"></script>

<script type="text/javascript">

	$(document).ready(function () {
		/*
		var ajaxOptions = {
			target:'#result', // target element(s) to be updated with server response
			beforeSubmit:preSubmit, // pre-submit callback
			success:showResponse  // post-submit callback
		};

		$('#contactForm').submit(function () {
			$(this).ajaxSubmit(ajaxOptions);
			return false;
		});
		*/
		$('.send').click(function() {
			$('#contactForm').submit();
			$('#dialogSave').dialog('open');
			$('#result').hide();
			$('#creatingNotification').show();						
		});
		
		$('#dialogSave').dialog({
			autoOpen: false, modal: true, draggable: false, resizable: false, closeOnEscape: false,
			minHeight: 400, minWidth: 700, width: 700,
			open: function(event, ui) {
				$(this).parents(".ui-dialog:first").find(".ui-dialog-titlebar").hide();
			}
		});
	/*
	// pre-submit callback 
	var preSubmit = function(formData, jqForm, options) {

		$('#dialogSend').dialog('open');
		$('#result').hide();
		$('#creatingNotification').show();

		return true;
	};

	// post-submit callback 
	var showResponse = function(responseText, statusText, xhr, $form) {
		$('#creatingNotification').hide();
		$('#result').show();
	};
		*/
	});
</script>

{include file='globalfooter.tpl'}