<?php
/**
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
*/

interface IEmailMessage
{
	/**
	 * @return string
	 */
	public function Charset();

	/**
	 * @return array|EmailAddress[]|EmailAddress
	 */
	public function To();

	/**
	 * @return EmailAddress
	 */
	public function From();

	/**
	 * @return array|EmailAddress[]|EmailAddress
	 */
	public function CC();

	/**
	 * @return array|EmailAddress[]|EmailAddress
	 */
	public function BCC();

	/**
	 * @return string
	 */
	public function Subject();

	/**
	 * @return string
	 */
	public function Body();

	/**
	 * @return EmailAddress
	 */
	public function ReplyTo();

	/**
	 * @abstract
	 * @param string $contents
	 * @param string $fileName
	 */
	public function AddStringAttachment($contents, $fileName);

	/**
	 * @abstract
	 * @return bool
	 */
	public function HasStringAttachment();

	/**
	 * @abstract
	 * @return string|null
	 */
	public function AttachmentContents();

	/**
	 * @abstract
	 * @return string|null
	 */
	public function AttachmentFileName();
	
	public function AddAttachment($attachment);
	
	public function HasAttachment();
	
	public function GetAttachment();
	
}