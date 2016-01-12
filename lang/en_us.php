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

require_once('Language.php');

class en_us extends Language
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return array
     */
    protected function _LoadDates()
    {
        $dates = array();

        $dates['general_date'] = 'm/d/Y';
        $dates['general_datetime'] = 'm/d/Y H:i:s';
        $dates['schedule_daily'] = 'l, m/d/Y';
        $dates['reservation_email'] = 'm/d/Y @ g:i A (e)';
        $dates['res_popup'] = 'm/d/Y g:i A';
        $dates['dashboard'] = 'l, m/d/Y g:i A';
        $dates['period_time'] = 'g:i A';
		$dates['general_date_js'] = 'mm/dd/yy';
		$dates['calendar_time'] = 'h:mmt';
		$dates['calendar_dates'] = 'M/d';

        $this->Dates = $dates;

        return $this->Dates;
    }

    /**
     * @return array
     */
    protected function _LoadStrings()
    {
        $strings = array();

		$strings['SynchronizationError'] = "Schedule Synchronization Error";
		$strings['OscarPatientInsertError'] = "An error occured while inserting patient into Oscar database";
		$strings['IntegratorProviderNotFound'] = "MyDocSchedule.com integrator program not setup in Oscar 'provider' table";
		$strings['ReconciliationReport'] = "Schedule Reconciliation Report";
		
        $this->Strings = $strings;

        return $this->Strings;
    }

    /**
     * @return array
     */
    protected function _LoadDays()
    {
        $days = array();

        /***
        DAY NAMES
        All of these arrays MUST start with Sunday as the first element
        and go through the seven day week, ending on Saturday
         ***/
        // The full day name
        $days['full'] = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        // The three letter abbreviation
        $days['abbr'] = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
        // The two letter abbreviation
        $days['two'] = array('Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa');
        // The one letter abbreviation
        $days['letter'] = array('S', 'M', 'T', 'W', 'T', 'F', 'S');

        $this->Days = $days;

        return $this->Days;
    }

    /**
     * @return array
     */
    protected function _LoadMonths()
    {
        $months = array();

        /***
        MONTH NAMES
        All of these arrays MUST start with January as the first element
        and go through the twelve months of the year, ending on December
         ***/
        // The full month name
        $months['full'] = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        // The three letter month name
        $months['abbr'] = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

        $this->Months = $months;

        return $this->Months;
    }

    /**
     * @return array
     */
    protected function _LoadLetters()
    {
        $this->Letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

        return $this->Letters;
    }

    protected function _GetHtmlLangCode()
    {
        return 'en';
    }
}













