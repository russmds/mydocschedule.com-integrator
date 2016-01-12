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

class ReconciliationEmail extends EmailMessage
{
	protected $diffs = array();
	
	protected $local = array();
	
	protected $mds = array();
	
	private $emails = array();
	
	protected $date;
	
	public function __construct($diffs, $local, $mds, $lang, $emails)
	{
		parent::__construct($lang);
	
		$this->diffs = $diffs;
		$this->local = $local;
		$this->mds = $mds;
		$this->emails = $emails;
		
		$date = new Date();
		
		$this->date = $date->Format('d/m/Y');
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
		return $this->Translate('ReconciliationReport');
	}

	/**
	 * @return string
	 */
	function Body()
	{
		$this->Set('Local', $this->local);
		$this->Set('Mds', $this->mds);
		$this->Set('Diffs', $this->diffs);
		$this->Set('Date',  $this->date);
		return $this->FetchTemplate('Reconciliation.tpl');
	}
}

