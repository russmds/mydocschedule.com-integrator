<?php
/**
Copyright 2012 Nick Korbel

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
 */

require_once(ROOT_DIR . 'lib/Email/namespace.php');
require_once(ROOT_DIR . 'lib/Common/namespace.php');

class SyncErrorEmail extends EmailMessage
{
	private $msg;
	
	protected $errors = array();
	
	private $emails = array();
	
	public function __construct($message, $errors, $lang, $emails)
	{
		parent::__construct($lang);

		$transMsg = $this->Translate($message);
		
		$this->msg = ($transMsg == '?') ? $message : $transMsg;
		$this->errors = $errors;
		$this->emails = $emails;
	}

	/**
	 * @return EmailAddress[]
	 */
	function To()
	{
		return new EmailAddress($this->emails[0], 'Oscar Admin');
	}

	function CC()
	{
		$ccEmails = array();
		
		array_shift($this->emails);
		
		foreach ($this->emails as $email)
		{
			$ccEmails[] = $email;
		}	
		return $ccEmails;
	}

	/**
	 * @return string
	 */
	function Subject()
	{
		return $this->Translate('SynchronizationError');
	}

	/**
	 * @return string
	 */
	function Body()
	{
		$this->Set('Message', $this->msg);
		$this->Set('Errors', $this->errors);
		return $this->FetchTemplate('SyncError.tpl');
	}
}
