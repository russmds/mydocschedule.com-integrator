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
<h1>MyDocSchedule.com User Guide</h1>
<div id="help">	
<h2>Registration & Setup For Medical Practices</h2>
<br />

<p>There are three main steps that need to be performed before a medical practice can start using MyDocSchedule.com for booking patient appointments.
	
<h3>Register</h3>

<p>To register click on 'Register' link in the upper right corner. This will bring up the registration screen. The screen has three main sections: Login, Additional Info and Security code.
For medical registrations all fields are required except for 'Unit' number. A medical practice can be registered by anybody working there. It doesn't need to be the doctor.
In general the registration should be done by the person who will be using the web service the most, in other words the person who does the bookings. Based on who is doing the registration
the login and Personal Info need to be specified; the login is the email address. The email address must be valid and accessible to the registering person because the activation email
will be sent there.
</p>

<p>'Practice Name' field should have the medical practice name. If the practice has no specific name the name of the doctor or one of the doctors should be entered. That way the name for the
time schedule and the doctor/resource will not need to be updated because the program takes the practice name as the name for the schedule and resource names.</p>

<p>The 'Personal Info' section should be filled with the name of the registrant with the address being the address of the practice rather than personal address of the registrant.</p>

<p>Once the registration is submitted the system will send an activation email. The registrant needs to check his/her email and click on the activation link. The link will actvate
the account and immediately log in the registrant. The registrant is automatically the administrator of the application with full permissions over every facet of the system.</p>

<h3>Setup Doctor Schedule(s)</h3>

<p>The second step is to setup the actual <u>schedule and the scheduling options</u> for the practice available to the system administrator under the 'Administration->Schedules' menu option. A schedule is the time available for booking and a calendar is the holder of the booking slots on a per day basis.</p>

<p>On the left side of the screen are scheduling options.</p>

<p><b>1) The first line</b> controls how the schedule is displayed to the user, which day it starts from and how many days are shown.</p>
<p><b>2) The second line</b> sets the administrator for the schedule. By default any user registred as staff can make changes to the schedule. To change that a complex permission setup must be done.</p>
<p><b>3) The third line</b> allows to change the name of the schedule.</p>

<p>The important thing is the right screen with booking time slots. These you will most likely need to change to fit your particular needs. Click on 'Change Layout' to update the time slots. The slots can be setup on a daily basis.
This is for those who have varied schedule during the week.</p>

<p>If the doctor has the same schedule daily and no weekend schedule the setup is simple; just click 'Weekdays' option and then specify the length of the time slots and start and and time of the day and the system will create the slots for you.</p>

<p>If the doctor has the same schedule daily but has a Saturday schedule as well you cannot use 'Weekdays' selection but must instead select each day from 'Monday' to 'Friday' to setup the weekdays and then add the Saturday schedule separately.</p>

<p>After that you can make manual adjustments; for instance you can enter lunch break in the 'blocked' column but you must delete the 'lunch' slots from the 'reservable' column. You can make any kind of adjustment
you wish, you can lengthen or shorten individual slots as necessary.</p>

<p><b>Any adjustments must be such that all the slots on the left and right must make up together exactly 24 hours not a minute more or less otherwise the system will not save
the schedule.</b></p>

<p>If at any point you make a mistake or want to start over you can use the system to regenerate the slots. For the system to do that you need to change at least one of the values in the 3 small windows.
That's the only way to force the system to generate slots. If you have all the correct values in the three windows you still need to change one of them to get the slots regenerated;
then you can change the value back to the correct one to get the right slots.<p>

<p>You can use either 'Update' button to override the old data or you can use 'Delete' button to delete it first and then use 'Update' to recreate it again. Either way will work. Basically you can play with the schedule until it's exactly like you want it, repeated updates and deletes will not cause any problems.<p>

<h3>Setup Doctor(s) & Booking Options</h3>

<p>The last step in setting up the medical calendar for use is to setup the doctor and his/her <u>booking options</u> available to the administrator under the 'Administration->Doctors' menu item. The booking options control specific details about booking. The booking options
DO NOT APPLY to the system adminitrators e.g. the internal medical staff doing the booking as every staff member of a medical practice is by deafult an administrator for the system
(this can be chaged using group setup screen).<p>

<p>The booking options are applied only to the patients doing their own booking. The booking options are setup on a per doctor basis and are accessible under 'Application Management->Doctors'
menu option.<p>

<p>This screen controls the complete doctor setup. Not only can new doctors be created in this screen the existing doctor setup can be updated here as well. There are three important
doctor attributes on the left:</p>

<p><b>Status:</b> controls whether the doctor calendar is available to patients online. If the status is offline the patients will not be able to book appointments. Normally the doctor should
be offline only when major adjustments need to be performed to the schedule and you don't want patients doing any changes while this is being done. One such time is upon signup when
the current schedule needs to be entered into the system. It's very unlikely that a patient will immediately try to book an appointment upon medical practice signup but it's not impossible.

<p><b>Appears On Schedule:</b> controls which schedule is used by the doctor. Ordinarily each doctor will have his/her own schedule but doesn't have to.</p>

<p><b>Medical Specialty:</b> lists what the doctor specializes in medically. This may need to be updated if there are several doctors with different specialties within the practice. <b>This value overrides the profile value set up for the practice.</b></p>

<p><b>Location:</b> is the actual location where the appointment takes place. <b>This value overrides the addess setup in the profile</b>. This value will be displayed when a user is booking an appointment.</p>

<p><b>Contact:</b> is the actual contact info (phone or email) for the doctor. <b>This value overrides the contact setup in the profile</b>. This value will be displayed when a user is booking an appointment.</p>

<p>The very important options are on the right side of the screen under 'Booking Configuration'.</p>

<p>The first is whether the doctor schedule should be made public at all. If the doctor wants to use the service only internally by his office without being found by registered users on www.mydocshcedule.com then this option needs to be set to 'YES' meaning the doctor will be invisible to the public.</p>

<p>The second option is applicable only if the doctor is visible to the public. In which case the doctor may decide to make his/her schedule available only to approved users/patients. This allows the office to have a very tight control over the scheduling of the appointments because the user has to ask for a permission and the office may or may not grant it.</p>

<p>The third is whether the appointments by patients must be approved by the office. The default is 'yes'. This allows the office administrator to control the patient appointments.
The primary reason for this is that as with most Internet-based services there might be some fake or fathom patients and/or bookings by pranksters, hackers, teenagers and other assorted characters. This is just an extra level
of security to ensure legitimate bookings. It's up to the office staff to decide whether to turn this off in which case each patient booking will be automatically approved.</p>

<p>The next two options control how early and how late can the bookings be made online. The default is that bookings can be made until the present time meaning a patient can book an appointment starting
in say 30 minutes assuming there is an open slot. The default for the early booking is 30 days in advance. Both of these option can be changed based the current office practices.</p>

<p>The next option controls when patients can cancel their appointments. The default is 1 day. Again this should be updated to reflect the office practices.</p>

<p>The following option is crucial for practices that don't accept new patients. By default when a practice registers the system creates a booking attribute that forces patients to select whether
they are new patients or existing ones. This comes into play if and when the medical practice doesn't accept new patients in that the application will not allow the new patient to book an appointment.
Obviously the patient can always decide not to tell the truth in which case he or she will be allowed to book an appointment. In that case the approving person should be able to recorgnize or find out that
the patient is new and block the appointment.<p>

<p>If on the other hand the practice accepts new patients this booking attribute can be deleted as it's not needed. To delete the attribute of 'new/existing patient' the adminstrator needs
to go to 'Application Management->Customization->Attributes' screen and delete the attrbute 'Patient Status' listed under 'Reservations'.</p>

<p>The last option currently (more are under development) is whether the system should send reminder emails to patients (with email addresses) a day before their appointment. The default is 'yes'.</p>

<h3>Billing</h3>

<p>The service is free for the first month so you don't have to worry about setting up the billing section right away. Eventually if you decide to use the service you will need to setup the billing section.</p>

<p>The Billing is accessible from under 'My Account' menu when logged in as an administrator. There are 2 payment options; by check or by a credit card.
To pay by a check click on the 'Check' button and it will show you where to mail the check. To pay by a credit card fill-in the credit card data and save it. Your account is not billed immediately after the setup but the next day.
After the first billing you can see the next billing date displayed at the top of the billing page as well as the last billing date.  After each billing an email with the invoice is sent to the email of the registrant.</p>

<p>You can decide to pay for your service immediately by clicking the 'Pay' button. This is useful if you want to make sure your payment goes through or if a payment was declined previously
and you want to see that it goes through.</p>

<p>We use a third party provider for payment processing. This means that we don't store any of your credit card info in our system. That makes our system more secure.</p>

<p>If you don't want to save your credit card information with our payment provider you can enter the credit card data in the proper fields in the billing form immediately pay for our service by clicking
the 'Pay' button and then select 'Check' option and save the data. That way your payment will go through only once without the card being saved. But for the next payment you will have to
do the same thing again.</p>

<br />
<h2>Administration For Medical Practices</h2>
<br />

<h3>Setting up Schedules</h3>

<p>In the context of this application a resource is an alternative name to doctor</p>
<p>
	What is important to understand is that the setup needs to start with setting up a schedule which is basically
	the time available for booking. The reason the setup starts with a schedule and not a doctor is because a doctor setup
	needs to be based on a schedule and several doctors can have the same schedule.
</p>

<p>
	When you register in MyDocSchedule.com a default schedule (and doctor) will be created for you. From the
	Schedules menu option you can view and edit attributes of the defined schedules.
</p>

<p>Each schedule must have a layout defined for it. This controls the availability of the resources on that
	schedule. Clicking the Change Layout link will bring up the layout editor. Here you can create and change the
	time slots that are available for reservation and blocked from reservation. There is no restriction on the slot
	times, but you must provide slot values for all 24 hours of the day, one per line. Also, the time format must be
	in 24 hour time.
	You can also provide a display label for any or all slots, if you wish.</p>

<p>A slot without a label should be formatted like this: 10:25 - 16:50</p>

<p>A slot with a label should be formatted like this: 10:25 - 16:50 Schedule Period 4</p>

<p>Below the slot configuration windows is a slot creation wizard. This will set up available slots at the given interval between the start and end times.</p>

<p>Click the 'Weekdays' selection only if the schedule is the same from Monday to Friday and there is no Saturday schedule. If you have Saturday schedule you need to build up
the schedules for each day individually. In other words you cannot click 'Weekdays' to build a schedule for Monday to Friday and then add Saturday to it. You need to click each
day Monday to Friday individually create the schedule for them and then add Saturday to them.

<h3>Setting up Doctors</h3>

<p>You can view and manage resources from the Resources menu option. Here you can change the attributes and usage
	configuration of a resource.
</p>

<p>Resources in MyDocSchedule.com can be anything you want to make bookable, such as rooms or equipment. Every resource
	must be assigned to a schedule in order for it to be bookable. The resource will inherit whatever layout the
	schedule uses.</p>

<p>Setting a minimum reservation duration will prevent booking from lasting longer than the set amount. The default is
	no minimum.</p>

<p>Setting a maximum reservation duration will prevent booking from lasting shorter than the set amount. The default is
	no maximum.</p>

<p>Setting a resource to require approval will place all bookings for that resource into a pending state until approved.
	The default is no approval required.</p>

<p>Setting a resource to automatically grant permission to it will grant all new users permission to access the resource
	at registration time. The default is to automatically grant permissions.</p>

<p>You can require a booking lead time by setting a resource to require a certain number of days/hours/minutes
	notification. For example, if it is currently 10:30 AM on a Monday and the resource requires 1 days notification,
	the resource will not be able to be booked until 10:30 AM on Sunday. The default is that reservations can be made up
	until the current time.</p>

<p>You can prevent resources from being booked too far into the future by requiring a maximum notification of
	days/hours/minutes. For example, if it is currently 10:30 AM on a Monday and the resource cannot end more than 1 day
	in the future, the resource will bot be able to be booked past 10:30 AM on Tuesday. The default is no maximum.</p>

<p>Certain resources cannot have a usage capacity. For example, some conference rooms may only hold up to 8 people.
	Setting the resource capacity will prevent any more than the configured number of participants at one time,
	excluding the organizer. The default is that resources have unlimited capacity.</p>

<p>Application Administrators are exempt from usage constraints.</p>

<h3>Resource Images</h3>

<p>You can set a resource/doctor/office image which will be displayed when viewing resource details from the reservation page.</p>

<h3>Setting up Quotas</h3>

<p>Quotas prevent reservations from being booked based on a configurable limit. The quota system in MyDocSchedule.com is
	very flexible, allowing you to build limits based on reservation length and number reservations. Also, quota limits
	"stack". For example, if a quota exists limiting a resource to 5 hours per day and another quota exists limiting to
	4 reservations per day a user would be able to make 4 hour-long reservations but would be restricting from making 3
	two-hour-long reservations. This allows powerful quota combinations to be built.</p>

<p>Application Administrators are exempt from quota limits.</p>

<h3>Setting up Announcements</h3>

<p>Announcements are a very simple way to display notifications to MyDocSchedule.com users. From the Announcements menu item
	you can view and manage the announcements that are displayed on users dashboards. An announcement can be configured
	with an optional start and end date. An optional priority level is also available, which sorts announcements from 1
	to 10.</p>

<p>HTML is allows within the announcement text. This allows you to embed links or images from anywhere on the web.</p>

<h3>Setting up Groups</h3>

<p>Groups in MyDocSchedule.com organize users, control resource access permissions and define roles within the
	application.</p>

<h3>Roles</h3>

<p>Roles give a group of users the authorization to perform certain actions.</p>

<p>Users that belong to a group that is given the Application Administrator role are open to full administrative
	privileges. This role has nearly zero restrictions on what resources can be booked. It can manage all aspects of the
	application.</p>

<p>Users that belong to a group that is given the Group Administrator role are able to reserve on behalf of and manage
	users within that group.</p>

<h3>Viewing and Managing Reservations</h3>

<p>You can view and manage reservations from the Reservations menu item. By default you will see the last 7 days and the
	next 7 days worth of reservations. This can be filtered more or less granular depending on what you are looking for.
	This tool allows you to quickly find an act on a reservation. You can also export the list of filtered reservations
	to CSV format for further reporting.</p>

<h3>Reservation Approval</h3>

<p>From the Reservations admin tool you will be able to view and approve pending reservations. Pending reservations will
	be highlighted.</p>

<h3>Viewing and Managing Users</h3>

<p>You can add, view, and manage all registered users from the Users menu item. This tool allows you to change resource
	access permissions of individual users, deactivate or delete accounts, reset user passwords, and edit user details.
	You can also add new users to MyDocSchedule.com. This is especially useful if self-registration is turned off.</p>

<h3>Reporting</h3>

<p>Reports are accessible to all application, group, resource and schedule administrators. When the currently logged in
	user has access to reporting features, they will see a Reports navigation item. MyDocSchedule.com comes with a set of
	Common Reports which can be viewed as a list of results, a chart, exported to CSV and printed. In addition, ad-hoc
	reports can be created from the Create New Report menu item. This also allows listing, charting, exporting and
	printing. In addition, custom reports can be saved and accessed again at a later time from the My Saved Reports menu
	item. Saved reports also have the ability to be emailed.</p>

<!--h2>Configuration</h2>

<p>Some of phpScheduleIt's functionality can only be controlled by editing the config file.</p>

<p class="setting"><span>$conf['settings']['server.timezone']</span>This must reflect the timezone of the server that
	phpScheduleIt is hosted
	on. You can view the current timezone from the Server Settings menu item. Possible values are located here:
	http://php.net/manual/en/timezones.php</p>

<p class="setting"><span>$conf['settings']['allow.self.registration']</span>If users are allowed to register new
	accounts.</p>

<p class="setting"><span>$conf['settings']['admin.email']</span>The email address of the main application administrator
</p>

<p class="setting"><span>$conf['settings']['default.page.size']</span>The initial number of rows for any page that
	displays a list of data
</p>

<p class="setting"><span>$conf['settings']['enable.email']</span>Whether or not any emails are sent out of phpScheduleIt
</p>

<p class="setting"><span>$conf['settings']['default.language']</span>Default language for all users. This can be any
	language in the
	phpScheduleIt lang directory</p>

<p class="setting"><span>$conf['settings']['script.url']</span>The full public URL to the root of this instance of
	phpScheduleIt. This should
	be the Web directory which contains files like bookings.php and calendar.php</p>

<p class="setting"><span>$conf['settings']['password.pattern']</span>A regular expression to enforce password complexity
	during user account
	registration</p>

<p class="setting"><span>$conf['settings']['schedule']['show.inaccessible.resources']</span>Whether or not resources
	that are not
	accessible to the user
	are displayed in the schedule</p>

<p class="setting"><span>$conf['settings']['schedule']['reservation.label']</span>The value to display for the
	reservation on the
	Bookings page. Options
	are 'name', 'title', or 'none'. Default is 'name'.</p>

<p class="setting"><span>$conf['settings']['image.upload.directory']</span>The physical directory to store images.
	This directory will need to be writable (755 suggested). This can be the full directory or relative to the
	phpScheduleIt root directory.</p>

<p class="setting"><span>$conf['settings']['image.upload.url']</span>The URL where uploaded
	images can be viewed from. This can be the full URL or relative to $conf['settings']['script.url'].
</p>

<p class="setting"><span>$conf['settings']['cache.templates']</span>Whether or not templates are cached. It is
	recommended to set this to
	true, as long as tpl_c is writable</p>

<p class="setting"><span>$conf['settings']['use.local.jquery']</span>Whether or not a local version of jQuery files
	should be used. If set to false, the files will be served from the Google CDN. It is recommended to set this to
	false to improve performance and bandwidth usage. Default is false.</p>

<p class="setting"><span>$conf['settings']['registration.captcha.enabled']</span>Whether or not captcha image security
	is enabled during user account registration</p>

<p class="setting"><span>$conf['settings']['registration.require.email.activation']</span>Whether or not a user will be
	required to activate their account by email before logging in.</p>

<p class="setting"><span>$conf['settings']['registration.auto.subscribe.email']</span>Whether or not users will be
	automatically subscribed to all emails upon registration.</p>

<p class="setting"><span>$conf['settings']['inactivity.timeout']</span>Number of minutes before the user is
	automatically logged out. Leave this blank if you do not want users automatically logged out.</p>

<p class="setting"><span>$conf['settings']['name.format']</span>Display format for first name and last name. Default
	is {literal}'{first} {last}'{/literal}.</p>

<p class="setting"><span>$conf['settings']['ics']['require.login']</span>If users should be required to log in to add a
	reservation to
	Outlook.</p>

<p class="setting"><span>$conf['settings']['ics']['subscription.key']</span>If you want to allow webcal subscriptions,
	set this to a
	difficult to guess value. If nothing is set then webcal subscriptions will be disabled.</p>

<p class="setting"><span>$conf['settings']['privacy']['view.schedules']</span>If non-authenticated users can view the
	booking schedules.
	Default is false.</p>

<p class="setting"><span>$conf['settings']['privacy']['view.reservations']</span>If non-authenticated users can view
	reservation details.
	Default is false.</p>

<p class="setting"><span>$conf['settings']['privacy']['hide.user.details']</span>If non-adminstrators can view personal
	information about
	other users. Default is false.</p>

<p class="setting"><span>$conf['settings']['reservation']['start.time.constraint']</span>When reservations can be
	created or edited.
	Options are future, current, none. Future means reservations cannot be created or modified if the starting time of
	the selected slot is in the past. Current means reservations can be created or modified if the ending time of the
	selected slot is not in the past. None means that there is no restriction on when reservations can be created or
	modified. Default is future.</p>

<p class="setting"><span>$conf['settings']['reservation']['updates.require.approval']</span>Whether or not updates to
	reservations which have previously been approved require approval again. Default is false.</p>

<p class="setting"><span>$conf['settings']['reservation']['prevent.participation']</span>Whether or not users should be
	prevented from adding and inviting others to a reservation. Default is false.</p>

<p class="setting"><span>$conf['settings']['reservation']['prevent.recurrence']</span>Whether or not users should be
	prevented creating recurring reservations. Default is false.</p>

<p class="setting"><span>$conf['settings']['reservation.notify']['resource.admin.add']</span>Whether or not to send an
	email to all resource administrators when a reservation is created. Default is false.</p>

<p class="setting"><span>$conf['settings']['reservation.notify']['resource.admin.update']</span>Whether or not to send
	an
	email to all resource administrators when a reservation is updated. Default is false.</p>

<p class="setting"><span>$conf['settings']['reservation.notify']['resource.admin.delete']</span>Whether or not to send
	an
	email to all resource administrators when a reservation is deleted. Default is false.</p>

<p class="setting"><span>$conf['settings']['reservation.notify']['application.admin.add']</span>Whether or not to send
	an
	email to all application administrators when a reservation is created. Default is false.</p>

<p class="setting"><span>$conf['settings']['reservation.notify']['application.admin.update']</span>Whether or not to
	send an
	email to all application administrators when a reservation is updated. Default is false.</p>

<p class="setting"><span>$conf['settings']['reservation.notify']['application.admin.delete']</span>Whether or not to
	send an
	email to all application administrators when a reservation is deleted. Default is false.</p>

<p class="setting"><span>$conf['settings']['reservation.notify']['group.admin.add']</span>Whether or not to send an
	email to all group administrators when a reservation is created. Default is false.</p>

<p class="setting"><span>$conf['settings']['reservation.notify']['group.admin.update']</span>Whether or not to send an
	email to all group administrators when a reservation is updated. Default is false.</p>

<p class="setting"><span>$conf['settings']['reservation.notify']['group.admin.delete']</span>Whether or not to send an
	email to all group administrators when a reservation is deleted. Default is false.</p>

<p class="setting"><span>$conf['settings']['css.extension.file']</span>Full or relative URL to an additional CSS file to
	include. This can be used to override the default style with adjustments or a full theme. Leave this blank if you
	are not extending the style of phpScheduleIt.</p>

<p class="setting"><span>$conf['settings']['uploads']['enable.reservation.attachments']</span>If users are allowed to
	attach files to reservations. Default is false.</p>

<p class="setting"><span>$conf['settings']['uploads']['reservation.attachment.path']</span>The full or relative
	filesystem path (relative to the root of your phpScheduleIt directory) to store reservation attachments. This
	directory must be writable by PHP (755 suggested). Default is uploads/reservation</p>

<p class="setting"><span>$conf['settings']['uploads']['reservation.attachment.extensions']</span>Comma separated list of
	safe file extensions. Leaving this blank will allow all file types (not recommended).</p>

<p class="setting"><span>$conf['settings']['database']['type']</span>Any PEAR::MDB2 supported type</p>

<p class="setting"><span>$conf['settings']['database']['user']</span>Database user with access to the configured
	database</p>

<p class="setting"><span>$conf['settings']['database']['password']</span>Password for the database user</p>

<p class="setting"><span>$conf['settings']['database']['hostspec']</span>Database host URL or named pipe</p>

<p class="setting"><span>$conf['settings']['database']['name']</span>Name of phpScheduleIt database</p>

<p class="setting"><span>$conf['settings']['phpmailer']['mailer']</span>PHP email library. Options are mail, smtp,
	sendmail, qmail</p>

<p class="setting"><span>$conf['settings']['phpmailer']['smtp.host']</span>SMTP host, if using smtp</p>

<p class="setting"><span>$conf['settings']['phpmailer']['smtp.port']</span>SMTP port, if using smtp, usually 25</p>

<p class="setting"><span>$conf['settings']['phpmailer']['smtp.secure']</span>SMTP security, if using smtp. Options are
	'', ssl or tls</p>

<p class="setting"><span>$conf['settings']['phpmailer']['smtp.auth']</span>SMTP requies authentication, if using smtp.
	Options are true
	or false</p>

<p class="setting"><span>$conf['settings']['phpmailer']['smtp.username']</span>SMTP username, if using smtp</p>

<p class="setting"><span>$conf['settings']['phpmailer']['smtp.password']</span>SMTP password, if using smtp</p>

<p class="setting"><span>$conf['settings']['phpmailer']['sendmail.path']</span>Path to sendmail, if using sendmail</p>

<p class="setting"><span>$conf['settings']['plugins']['Authentication']</span>Name of authentication plugin to use. For
	more on plugins,
	see Plugins below</p>

<p class="setting"><span>$conf['settings']['plugins']['Authorization']</span>Name of authorization plugin to use. For
	more on plugins,
	see Plugins below</p>

<p class="setting"><span>$conf['settings']['plugins']['Permission']</span>Name of permission plugin to use. For more on
	plugins, see
	Plugins below</p>

<p class="setting"><span>$conf['settings']['plugins']['PreReservation']</span>Name of prereservation plugin to use. For
	more on plugins,
	see Plugins below</p>

<p class="setting"><span>$conf['settings']['plugins']['PostReservation']</span>Name of postreservation plugin to use.
	For more on
	plugins, see Plugins below</p>

<p class="setting"><span>$conf['settings']['install.password']</span>If you are running an installation or upgrade, you
	will be required to
	provide a value here</p>

<h2>Plugins</h2>

<p>The following components are currently pluggable:</p>

<ul>
	<li>Authentication - Who is allowed to log in</li>
	<li>Authorization - What a user can do when you are logged in</li>
	<li>Permission - What resources a user has access to</li>
	<li>Pre Reservation - What happens before a reservation is booked</li>
	<li>Post Reservation - What happens after a reservation is booked</li>
</ul>

<p>
	To enable a plugin, set the value of the config setting to the name of the plugin folder. For example, to enable
	LDAP
	authentication, set
	$conf['settings']['plugins']['Authentication'] = 'Ldap';</p>

<p>Plugins may have their own configuration files. For LDAP, rename or copy
	/plugins/Authentication/Ldap/Ldap.config.dist to /plugins/Authentication/Ldap/Ldap.config and edit all values that
	are applicable to your environment.</p>

<h3>Installing Plugins</h3>

<p>To install a new plugin copy the folder to either the Authentication, Authorization and Permission directory. Then
	change either $conf['settings']['plugins']['Authentication'], $conf['settings']['plugins']['Authorization'] or
	$conf['settings']['plugins']['Permission'] in config.php to the name of that folder.</p>

</div-->

{include file='globalfooter.tpl'}
