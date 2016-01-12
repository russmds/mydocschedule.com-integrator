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


class ConfigKeys
{
    const ADMIN_EMAIL = 'admin.email';
    const ALLOW_REGISTRATION = 'allow.self.registration';
	const CSS_EXTENSION_FILE = 'css.extension.file';
    const DEFAULT_PAGE_SIZE = 'default.page.size';
    const ENABLE_EMAIL = 'enable.email';
	const INACTIVITY_TIMEOUT = 'inactivity.timeout';
    const LANGUAGE = 'default.language';
    const NAME_FORMAT = 'name.format';
    const PASSWORD_PATTERN = 'password.pattern';
    const SCRIPT_URL = 'script.url';
    const SERVER_TIMEZONE = 'timezone';
    const REGISTRATION_ENABLE_CAPTCHA = 'registration.captcha.enabled';
    const REGISTRATION_REQUIRE_ACTIVATION = 'registration.require.email.activation';
    const REGISTRATION_AUTO_SUBSCRIBE_EMAIL = 'registration.auto.subscribe.email';
    const VERSION = 'version';

    const SCHEDULE_SHOW_INACCESSIBLE_RESOURCES = 'show.inaccessible.resources';
    const SCHEDULE_RESERVATION_LABEL = 'reservation.label';

    const PLUGIN_AUTHENTICATION = 'Authentication';
    const PLUGIN_AUTHORIZATION = 'Authorization';
    const PLUGIN_PERMISSION = 'Permission';
    const PLUGIN_POSTREGISTRATION = 'PostRegistration';
    const PLUGIN_PRERESERVATION = 'PreReservation';
    const PLUGIN_POSTRESERVATION = 'PostReservation';

    const RESERVATION_START_TIME_CONSTRAINT = 'start.time.constraint';
    const RESERVATION_UPDATES_REQUIRE_APPROVAL = 'updates.require.approval';
    const RESERVATION_PREVENT_PARTICIPATION = 'prevent.participation';
    const RESERVATION_PREVENT_RECURRENCE = 'prevent.recurrence';

    const IMAGE_UPLOAD_DIRECTORY = 'image.upload.directory';
    const IMAGE_UPLOAD_URL = 'image.upload.url';

    const CACHE_TEMPLATES = 'cache.templates';

    const USE_LOCAL_JQUERY = 'use.local.jquery';

    const INSTALLATION_PASSWORD = 'install.password';

    const ICS_SUBSCRIPTION_KEY = 'subscription.key';

    const PRIVACY_HIDE_USER_DETAILS = 'hide.user.details';
    const PRIVACY_HIDE_RESERVATION_DETAILS = 'hide.reservation.details';
    const PRIVACY_VIEW_RESERVATIONS = 'view.reservations';
    const PRIVACY_VIEW_SCHEDULES = 'view.schedules';

    const NOTIFY_CREATE_RESOURCE_ADMINS = 'resource.admin.add';
    const NOTIFY_CREATE_APPLICATION_ADMINS = 'application.admin.add';
    const NOTIFY_CREATE_GROUP_ADMINS = 'group.admin.add';

    const NOTIFY_UPDATE_RESOURCE_ADMINS = 'resource.admin.update';
    const NOTIFY_UPDATE_APPLICATION_ADMINS = 'application.admin.update';
    const NOTIFY_UPDATE_GROUP_ADMINS = 'group.admin.update';

    const NOTIFY_DELETE_RESOURCE_ADMINS = 'resource.admin.delete';
    const NOTIFY_DELETE_APPLICATION_ADMINS = 'application.admin.delete';
    const NOTIFY_DELETE_GROUP_ADMINS = 'group.admin.delete';

	const UPLOAD_ENABLE_RESERVATION_ATTACHMENTS = 'enable.reservation.attachments';
	const UPLOAD_RESERVATION_ATTACHMENTS = 'reservation.attachment.path';
	const UPLOAD_RESERVATION_EXTENSIONS = 'reservation.attachment.extensions';	
    const DATABASE_TYPE = 'type';
    const DATABASE_USER = 'user';
    const DATABASE_PASSWORD = 'password';
	const DATABASE_HOTSPEC = 'hotspec';
    const DATABASE_NAME = 'name';
	
	const BASE_URL = 'base.url';
	const AUTHENTICATE_URL = 'authenticate.url';
	const APPOINTMENT_URL = 'appointment.url';
	const SIGNOUT_URL = 'signout.url';
	const LAST_TIMESTAMP = 'last.timestamp';
	
	const EMAILS = 'email.list';
	const LANG_CODE = 'lang.code';
	const SEND_MAIL_FLAG = 'send.mail.flag';
	
	const APP_INSERT = 'appointment.insert';
	const MAP_PATIENT = 'map.mds.patient.to.oscar.by.field.list';
	const CREATE_PATIENT = 'create.patient.in.oscar';
	
	const PHONE_FORMAT = 'phone.format';
	
	const LAST_DELETED_ID = 'last.deleted.id';
	const LAST_UPDATED_TIMESTAMP = 'last.updated.timestamp';
	const UPDATE_OSCAR_FROM_MDS = 'update.oscar.from.mds';
	
	const OSCAR_FIELD_LIST = 'oscar.to.mds.patient.data.field.list';
	
	const PROVIDERS = 'provider.list';
	const RECONCILIATION_TIME = 'reconciliation.time';
	
	const INTEGRATION_WITH = 'integration.with';
}

class ConfigSection
{
    const DATABASE = 'nonmds.db';
	const MDS = 'mds';
	const MAILER = 'phpmailer';
	const DYNAMIC_DATA = 'dynamic.data';
	const DATA_TRANSFER = 'data.transfer';
 }
