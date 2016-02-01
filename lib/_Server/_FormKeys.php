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

class FormKeys
{
	private function __construct()
	{}

	const ACCESSORY_LIST = 'accessoryList';
	const ACCESSORY_NAME = 'accessoryName';
	const ACCESSORY_ID = 'ACCESSORY_ID';
	const ACCESSORY_QUANTITY_AVAILABLE = 'accessoryQuantityAvailable';
	const ADDITIONAL_RESOURCES = 'additionalResources';
	const ADDRESS = 'address';
	const ALLOW_MULTIDAY = 'allowMultiday';
    const ANNOUNCEMENT_TEXT = 'announcementText';
    const ANNOUNCEMENT_START = 'announcementStart';
    const ANNOUNCEMENT_END = 'announcementEnd';
    const ANNOUNCEMENT_PRIORITY = 'announcementPriority';
	const ATTRIBUTE_LABEL = 'attributeLabel';
	const ATTRIBUTE_TYPE = 'attributeType';
	const ATTRIBUTE_CATEGORY = 'attributeScope';
	const ATTRIBUTE_VALIDATION_EXPRESSION = 'attributeRegex';
	const ATTRIBUTE_IS_REQUIRED = 'attributeRequired';
	const ATTRIBUTE_POSSIBLE_VALUES = 'attributePossibleValues';
	const ATTRIBUTE_PREFIX = 'psiattribute';
	const ATTRIBUTE_SORT_ORDER = 'attributeOrder';
	const ATTRIBUTE_IS_PUBLIC = 'attributePublic';
	const AUTO_ASSIGN = 'autoAssign';

	const BEGIN_DATE = 'beginDate';
	const BEGIN_PERIOD = 'beginPeriod';
	const BEGIN_TIME = 'beginTime';
	const BLACKOUT_APPLY_TO_SCHEDULE = 'applyToSchedule';

    const CAPTCHA = 'captcha';
	const CONFLICT_ACTION = 'conflictAction';
	const CONTACT_INFO = 'contactInfo';
	const CURRENT_PASSWORD = 'currentPassword';

	const DEFAULT_HOMEPAGE = 'defaultHomepage';
	const DESCRIPTION = 'reservationDescription';
	const DURATION = 'duration';

	const EMAIL = 'email';
	const END_DATE = 'endDate';
	const END_PERIOD = 'endPeriod';
	const END_REPEAT_DATE = 'endRepeatDate';
	const END_TIME = 'endTime';

	const FIRST_NAME = 'fname';

	const GROUP = 'group';
	const GROUP_ID = 'group_id';
	const GROUP_NAME = 'group_name';
	const GROUP_ADMIN = 'group_admin';

	const INSTALL_PASSWORD = 'install_password';
	const INSTALL_DB_USER = 'install_db_user';
	const INSTALL_DB_PASSWORD = 'install_db_password';
	const INVITATION_LIST = 'invitationList';
	const IS_ACTIVE = 'isactive';

	const LANGUAGE = 'language';
	const LAST_NAME = 'lname';
	const LIMIT = 'limit';
	const LOCATION = 'location';
	const LOGIN = 'login';

	const MIN_DURATION = 'minDuration';
	const MIN_INCREMENT = 'minIncrement';
	const MAX_DURATION = 'maxDuration';
	const MAX_PARTICIPANTS = 'maxParticipants';
	const MIN_NOTICE = 'minNotice';
	const MAX_NOTICE = 'maxNotice';

	const NOTES = 'notes';

	const ORGANIZATION = 'organization';
	const CONTACT_PERSON = 'contactName';
	const CONTACT_PHONE = 'contactPhone';
	const ORG_NAME = 'organizationName';
	const ORG_SELECT = 'orgName';

	const PARTICIPANT_LIST = 'participantList';
	const PASSWORD = 'password';
	const PASSWORD_CONFIRM = 'passwordConfirm';
	const PERSIST_LOGIN = 'persistLogin';
	const PHONE = 'phone';
	const POSITION = 'position';

	const REFERENCE_NUMBER = 'referenceNumber';
	const REMOVED_FILE_IDS = 'removeFile';
	const REPEAT_OPTIONS = 'repeatOptions';
	const REPEAT_EVERY = 'repeatEvery';
	const REPEAT_SUNDAY = 'repeatSunday';
	const REPEAT_MONDAY = 'repeatMonday';
	const REPEAT_TUESDAY = 'repeatTuesday';
	const REPEAT_WEDNESDAY = 'repeatWednesday';
	const REPEAT_THURSDAY = 'repeatThursday';
	const REPEAT_FRIDAY = 'repeatFriday';
	const REPEAT_SATURDAY = 'repeatSaturday';
	const REPEAT_MONTHLY_TYPE = 'repeatMonthlyType';
	const REPORT_START = 'reportStart';
	const REPORT_END = 'reportEnd';
	const REPORT_GROUPBY = 'REPORT_GROUPBY';
	const REPORT_RANGE = 'REPORT_RANGE';
	const REPORT_RESULTS = 'reportResults';
	const REPORT_USAGE = 'REPORT_USAGE';
	const REPORT_NAME = 'REPORT_NAME';
	const REQUIRES_APPROVAL = 'requiresApproval';
	const RESERVATION_ACTION = 'reservationAction';
	const RESERVATION_FILE = 'reservationFile';
	const RESERVATION_ID = 'reservationId';
	const RESERVATION_TITLE = 'reservationTitle';
	const RESOURCE = 'resource';
	const RESOURCE_ADMIN_GROUP_ID = 'resourceAdminGroupId';
	const RESOURCE_CONTACT = 'resourceContact';
	const RESOURCE_DESCRIPTION = 'resourceDescription';
	const RESOURCE_ID = 'resourceId';
	const RESOURCE_IMAGE = 'resourceImage';
	const RESOURCE_LOCATION = 'resourceLocation';
	const RESOURCE_NAME = 'resourceName';
	const RESOURCE_NOTES = 'resourceNotes';
	const RESOURCE_SORT_ORDER = 'RESOURCE_SORT_ORDER';
	const RESUME = 'resume';
	const RETURN_URL = 'returnUrl';
	const ROLE_ID = 'roleId';

	const SCHEDULE_ID = 'scheduleId';
	const SCHEDULE_NAME = 'scheduleName';
	const SCHEDULE_WEEKDAY_START = 'scheduleWeekdayStart';
	const SCHEDULE_DAYS_VISIBLE = 'scheduleDaysVisible';
	const SERIES_UPDATE_SCOPE = 'seriesUpdateScope';
	const SLOTS_BLOCKED = 'blockedSlots';
	const SLOTS_RESERVABLE = 'reservableSlots';
	const SUMMARY = 'summary';
	const SCHEDULE_ADMIN_GROUP_ID = 'adminGroupId';
	const SERVICE_NAME = 'serviceName';
	const SERVICE_DESCRIPTION = 'serviceDescription';
	const TIME_SLOTS = 'timeSlots';

	const TIMEZONE = 'timezone';
	const SLOTS_PER_APPOINTMENT = 'slotsPerAppointment';
	const SLOT_LENGTH = 'slotLength';
	
	const UNIT = 'unit';
	const UNIT_COST = 'unitCost';
	const USER_ID = 'userId';
	const USERNAME = 'username';

	const ACCOUNT_TYPE = 'accountType';
	const PAYMENT_TYPE = 'paymentType';
	const BILLING_CYCLE = 'billingCycle';
	const IS_TAXABLE = 'isTaxable';
	const PAY_AMOUNT = 'amount';
	const ACNT_TYPE = 'acntType';
	const PAY_TYPE = 'payType';
	const BILL_CYCLE = 'billCycle';
	const TAX = 'tax';
	const USER_FILE = 'userFile';
	
	const SPECIALTY = 'specialty';
	const ZIP = 'zip';
	const STATE = 'state';
	const COUNTRY = 'country';
	const STREET = 'street';
	const CITY = 'city';
	const CODE = 'code';
	
	const USER_TYPE = 'userType';
	const NO_WEEKEND = 'noWeekend';
	
	const WEEKDAYS = 'weekdays';
	const ADDRESS_ID = 'addressId';
	const PATIENT_ID = 'patientId';
	const SEND_EMAIL = 'sendEmail';
	const NAME = 'doctorName';
	
	const SUBJECT = 'subject';
	const MESSAGE = 'message';
	
	const IS_INVISIBLE = 'isInvisible';
	const USER_ACCESS = 'userAccess';
	
	const SERVICE_ID = 'serviceId';
		
	const USER_FIRST_NAME = 'ufName';
	const USER_LAST_NAME = 'ulName';
	const USER_PHONE = 'uPhone';
	const USER_ADDRESS = 'uAddress';

	const USER_CITY = 'uCity';
	const USER_UNIT = 'uUnit';
	const USER_ZIP = 'uZip';
	const USER_STREET = 'uStreet';
	
	const PATIENT_LIST = 'patientList';
	const SCREEN_LOCK = 'screenLock';
	
	const REMINDER_FLAG = 'reminderFlag';
	const NEW_REMINDER_FLAG = 'newReminderFlag';
	
	const MSG_TYPE = 'msgType';
	const REMINDER_DAYS = 'reminderDays';

	const NEW_MSG_TYPE = 'newMsgType';
	const NEW_REMINDER_MONTHS = 'newReminderMonths';
	const NEW_REMINDER_FREQUENCY = 'newReminderFrequency';
	const NEW_REMINDER_COUNT = 'newReminderCount';
	const REMINDER_ID = 'reminderId';
	const NEW_REMINDER_ID = 'newReminderId';
	
	const MOBILE_FLAG = 'mobileFlag';
	
	const DIGITS = 'Digits';
	const ANSWERED_BY = 'AnsweredBy';
	const CALL_SID = 'CallSid';
	const CALL_STATUS = 'CallStatus';


	public static function Evaluate($formKey)
	{
		$key = strtoupper($formKey);
		return eval("return FormKeys::$key;");
	}
}



