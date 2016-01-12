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

class hi_in extends Language
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

		$strings['FirstName']="पहला नाम";
		$strings['LastName']="उपनाम";
		$strings['Timezone']="समय क्षेत्र";
		$strings['Edit']="संपादित";
		$strings['Change']="बदलाव";
		$strings['Rename']="नाम बदलें";
		$strings['Remove']="हटा";
		$strings['Delete']="हटाना";
		$strings['Update']="अपडेट";
		$strings['Cancel']="रद्द करना";
		$strings['Add']="जोड़ना";
		$strings['Name']="नाम";
		$strings['Yes']="हाँ";
		$strings['No']="ना";
		$strings['FirstNameRequired']="पहला नाम आवश्यक है।";
		$strings['LastNameRequired']="अंतिम नाम के लिए आवश्यक है।";
		$strings['PhoneRequired']="फ़ोन नंबर की आवश्यकता है।";
		$strings['PwMustMatch']="पासवर्ड की पुष्टि पासवर्ड मेल खाना चाहिए।";
		$strings['PwComplexity']="पासवर्ड अक्षर, संख्या और प्रतीकों के संयोजन के साथ कम से कम 6 अक्षरों का होना चाहिए।";
		$strings['ValidEmailRequired']="एक वैध ईमेल पता की आवश्यकता है।";
		$strings['UniqueEmailRequired']="ईमेल एड्रेस पहले से पंजीकृत है।";
		$strings['UniqueUsernameRequired']="उपयोगकर्ता नाम पहले से ही पंजीकृत है।";
		$strings['UserTypeNotAllowed']="इस ईमेल के साथ उपयोगकर्ता पहले से ही पंजीकृत हैं और एक अलग उपयोगकर्ता प्रकार है, इस की अनुमति नहीं है।";
		$strings['UserNameRequired']="उपयोगकर्ता नाम आवश्यक है।";
		$strings['CaptchaMustMatch']="सुरक्षा छवि से पत्र बिल्कुल के रूप में दिखाया दर्ज करें।";
		$strings['StreetRequired']="चिकित्सा पद्धति की सड़क का पता आवश्यक है।";
		$strings['CityRequired']="चिकित्सा पद्धति का पता शहर की आवश्यकता है।";
		$strings['ZipRequired']="चिकित्सा पद्धति का पिन कोड की आवश्यकता है।";
		$strings['UsePermissionRequired']="स्टाफ और एजेंटों अनुमतियों की आवश्यकता है।";
		$strings['Today']="टुडे";
		$strings['Week']="सप्ताह";
		$strings['Month']="महीना";
		$strings['BackToCalendar']="पीछे कैलेंडर के लिए";
		$strings['BeginDate']="शुरू";
		$strings['EndDate']="समाप्त";
		$strings['Username']="यूजर का नाम";
		$strings['Password']="पासवर्ड";
		$strings['Organization']="संगठन";
		$strings['PasswordConfirmation']="पासवर्ड की पुष्टि कीजिये";
		$strings['DefaultPage']="डिफ़ॉल्ट होमपेज़";
		$strings['MyCalendar']="मेरे पंचांग";
		$strings['ScheduleCalendar']="अनुसूची कैलेंडर";
		$strings['Registration']="पंजीकरण";
		$strings['NoAnnouncements']="कोई घोषणाएं कर रहे हैं";
		$strings['Announcements']="घोषणाएँ";
		$strings['NoUpcomingReservations']="आप कोई आगामी आरक्षण दिया है";
		$strings['UpcomingReservations']="मेरी नियुक्ति";
		$strings['UpcomingBlackouts']="आगामी छुट्टियों और ब्लैकआउट";
		$strings['NoUpcomingBlackouts']="कोई आगामी ब्लैकआउट";
		$strings['ShowHide']="दिखाओ छुपाओ";
		$strings['Error']="त्रुटि";
		$strings['ReturnToPreviousPage']="आप पर थे कि पिछले पृष्ठ पर वापस लौटें";
		$strings['UnknownError']="अज्ञात त्रुटि";
		$strings['InsufficientPermissionsError']="आप इस संसाधन का उपयोग करने की अनुमति नहीं है";
		$strings['MissingReservationResourceError']="एक संसाधन नहीं चुना गया था";
		$strings['MissingReservationScheduleError']="एक कार्यक्रम का चयन नहीं किया गया था";
		$strings['DoesNotRepeat']="दोहराना नहीं करता";
		$strings['Daily']="रोजाना";
		$strings['Weekly']="साप्ताहिक";
		$strings['Monthly']="मासिक";
		$strings['Yearly']="सालाना";
		$strings['RepeatPrompt']="दोहराना";
		$strings['hours']="घंटे";
		$strings['days']="दिनों";
		$strings['weeks']="सप्ताह";
		$strings['months']="महीने";
		$strings['years']="वर्षों";
		$strings['day']="दिन";
		$strings['week']="सप्ताह";
		$strings['month']="महीना";
		$strings['year']="साल";
		$strings['repeatDayOfMonth']="महीने का दिन";
		$strings['repeatDayOfWeek']="सप्ताह के दिन";
		$strings['RepeatUntilPrompt']="जब तक";
		$strings['RepeatEveryPrompt']="हर एक";
		$strings['RepeatDaysPrompt']="पर";
		$strings['CreateReservationHeading']="नई नियुक्ति बनाएँ";
		$strings['EditReservationHeading']="संपादन नियुक्ति #% की";
		$strings['ViewReservationHeading']="देखना नियुक्ति% की";
		$strings['ReservationErrors']="बदले नियुक्ति";
		$strings['Create']="बनाएँ";
		$strings['ThisInstance']="केवल इस उदाहरण";
		$strings['AllInstances']="सभी उदाहरणों";
		$strings['FutureInstances']="भविष्य उदाहरण";
		$strings['Print']="छाप";
		$strings['ShowHideNavigation']="दिखाएँ / छुपाएँ नेविगेशन";
		$strings['ReferenceNumber']="संदर्भ संख्या";
		$strings['Tomorrow']="आने वाला कल";
		$strings['LaterThisWeek']="इस सप्ताह बाद में";
		$strings['NextWeek']="अगले सप्ताह";
		$strings['SignOut']="साइन आउट";
		$strings['LayoutDescription']="एक समय पर% s दिनों दिखा रहा है,% s पर शुरू होता है";
		$strings['AllResources']="सभी प्रदाताओं";
		$strings['TakeOffline']="ऑफ़लाइन ले";
		$strings['BringOnline']="ऑनलाइन लाओ";
		$strings['AddImage']="छवि जोड़ें";
		$strings['NoImage']="निरुपित कोई छवि";
		$strings['Move']="चाल";
		$strings['AppearsOn']="% S पर दिखाई देता है";
		$strings['Location']="स्थान";
		$strings['NoLocationLabel']="(अकरण स्थान)";
		$strings['Contact']="संपर्क";
		$strings['NoContactLabel']="(डिफ़ॉल्ट संपर्क जानकारी)";
		$strings['Description']="विवरण";
		$strings['NoDescriptionLabel']="(कोई विवरण नहीं)";
		$strings['Notes']="टिप्पणियाँ";
		$strings['NoNotesLabel']="(कोई नोट्स)";
		$strings['NoTitleLabel']="(कोई शीर्षक नहीं)";
		$strings['UsageConfiguration']="मरीजों के लिए बुकिंग नियम";
		$strings['ProviderDetails']="प्रदाता विवरण";
		$strings['ChangeConfiguration']="बदले विन्यास";
		$strings['ResourceMinLength']="नियुक्ति% की कम से कम पिछले चाहिए";
		$strings['CancelationMin']="नियुक्ति को रद्द कर दिया जाना चाहिए अग्रिम में कम से कम% s पर";
		$strings['ResourceMinLengthNone']="कोई न्यूनतम आरक्षण अवधि है";
		$strings['ResourceMaxLength']="नियुक्ति% की तुलना में अधिक पिछले नहीं कर सकते";
		$strings['ResourceMaxLengthNone']="कोई अधिकतम आरक्षण अवधि है";
		$strings['ResourceRequiresApproval']="नियुक्ति अनुमोदित किया जाना चाहिए";
		$strings['ResourceRequiresApprovalNone']="नियुक्ति अनुमोदन की आवश्यकता नहीं है";
		$strings['ResourcePermissionAutoGranted']="अनुमति स्वचालित रूप से प्रदान किया जाता है";
		$strings['ResourcePermissionNotAutoGranted']="अनुमति स्वचालित रूप से नहीं दी है";
		$strings['ResourceMinNotice']="नियुक्ति% कम से कम किया जाना चाहिए समय शुरू करने से पहले";
		$strings['ResourceMinNoticeNone']="नियुक्ति वर्तमान समय तक बना जा सकता है";
		$strings['ResourceMaxNotice']="नियुक्ति अग्रिम में% की तुलना में अधिक नहीं बनाया जा सकता";
		$strings['ResourceMaxNoticeNone']="नियुक्ति भविष्य में किसी भी बिंदु पर बनाया जा सकता है";
		$strings['ResourceAllowMultiDay']="नियुक्ति दिनों में बनाया जा सकता है";
		$strings['ResourceNotAllowMultiDay']="नियुक्ति दिनों के पार नहीं किया जा सकता";
		$strings['ResourceCapacity']="इस संसाधन% लोगों की क्षमता है";
		$strings['ResourceCapacityNone']="इस संसाधन असीमित क्षमता है";
		$strings['AddNewResource']="नए प्रदाता जोड़ें";
		$strings['AddNewUser']="नई उपयोगकर्ता को जोड़ना";
		$strings['AddUser']="नई उपयोगकर्ता को जोड़ना";
		$strings['Schedule']="अनुसूची";
		$strings['AddResource']="प्रदाता जोड़ें";
		$strings['Capacity']="क्षमता";
		$strings['Access']="प्रवेश";
		$strings['Duration']="अवधि";
		$strings['Active']="सक्रिय";
		$strings['Inactive']="निष्क्रिय";
		$strings['ResetPassword']="पासवर्ड रीसेट";
		$strings['LastLogin']="अंतिम लॉगइन";
		$strings['Search']="सर्च";
		$strings['ResourcePermissions']="प्रदाता अनुमतियां";
		$strings['Reservations']="आरक्षण";
		$strings['Groups']="समूह";
		$strings['ResetPassword']="पासवर्ड रीसेट";
		$strings['AllUsers']="सभी उपयोगकर्ता";
		$strings['AllGroups']="सभी समूहों";
		$strings['AllSchedules']="सभी अनुसूचियों";
		$strings['UsernameOrEmail']="उपयोगकर्ता का नाम या ईमेल";
		$strings['Members']="सदस्यों";
		$strings['QuickSlotCreation']="हर% मिनटों% s और% के बीच स्लॉट बनाएं";
		$strings['ApplyUpdatesTo']="ApplyUpdatesTo";
		$strings['CancelParticipation']="सहभागिता को रद्द";
		$strings['Attending']="भाग लेने के";
		$strings['QuotaConfiguration']="% S में% S उपयोगकर्ता के लिए% s पर सीमित कर रहे हैं% s% s% s प्रति";
		$strings['reservations']="आरक्षण";
		$strings['ChangeCalendar']="बदले कैलेंडर";
		$strings['AddQuota']="कोटा जोड़ें";
		$strings['FindUser']="प्रयोक्ता का पता लगाएं";
		$strings['Created']="बनाया गया";
		$strings['LastModified']="अंतिम बार संशोधित";
		$strings['GroupName']="समूह का नाम";
		$strings['GroupMembers']="समूह के सदस्य";
		$strings['GroupRoles']="समूह भूमिकाएँ";
		$strings['GroupAdmin']="समूह प्रशासक";
		$strings['Actions']="क्रियाएं";
		$strings['CurrentPassword']="वर्तमान पासवर्ड";
		$strings['NewPassword']="नया पासवर्ड";
		$strings['InvalidPassword']="मौजूदा पासवर्ड गलत है";
		$strings['PasswordChangedSuccessfully']="तुम्हारा पासवर्ड सफलतापूर्वक बदल दिया गया है";
		$strings['SignedInAs']="इस रूप में साइन इन किया";
		$strings['NotSignedIn']="आप साइन इन नहीं हैं";
		$strings['ReservationTitle']="आरक्षण का शीर्षक";
		$strings['AppointmentNotes']="टिप्पणियाँ";
		$strings['AppointmentFor']="प्रदाता";
		$strings['Accessories']="सामान";
		$strings['Add']="जोड़ना";
		$strings['ParticipantList']="प्रतिभागियों";
		$strings['InvitationList']="आमंत्रितों";
		$strings['AccessoryName']="गौण नाम";
		$strings['QuantityAvailable']="उपलब्ध मात्रा";
		$strings['Resources']="प्रदाता";
		$strings['Participants']="प्रतिभागियों";
		$strings['User']="प्रयोक्ता";
		$strings['Resource']="संसाधन";
		$strings['Status']="स्थिति";
		$strings['Approve']="मंजूर";
		$strings['Page']="पृष्ठ";
		$strings['Rows']="पंक्तियाँ";
		$strings['Unlimited']="असीमित";
		$strings['Email']="ईमेल";
		$strings['EmailAddress']="ईमेल पता";
		$strings['Phone']="टेलीफोन";
		$strings['Position']="स्थान";
		$strings['Language']="भाषा";
		$strings['Permissions']="अनुमतियां";
		$strings['Reset']="रीसेट";
		$strings['FindGroup']="समूह का पता लगाएं";
		$strings['Manage']="प्रबंधित";
		$strings['None']="कोई नहीं";
		$strings['AddToOutlook']="कैलेंडर में जोड़ें";
		$strings['Done']="हो गया";
		$strings['RememberMe']="मुझे याद रखें";
		$strings['FirstTimeUser?']="पहली बार उपयोगकर्ता?";
		$strings['CreateAnAccount']="खाता बनाएं";
		$strings['ViewSchedule']="देखें अनुसूची";
		$strings['ForgotMyPassword']="मैं अपना पासवर्ड भूल गया";
		$strings['YouWillBeEmailedANewPassword']="आप एक नया बेतरतीब ढंग से उत्पन्न पासवर्ड ईमेल किया जाएगा";
		$strings['Close']="बंद";
		$strings['ExportToCSV']="सीएसवी निर्यात";
		$strings['OK']="ठीक";
		$strings['Working']="कार्य";
		$strings['Login']="लॉग इन करें";
		$strings['AdditionalInformation']="अतिरिक्त जानकारी";
		$strings['AllFieldsAreRequired']="सभी फ़ील्ड आवश्यक हैं";
		$strings['OnlyNameIsRequired']="केवल नाम की आवश्यकता है";
		$strings['Optional']="ऐच्छिक";
		$strings['YourProfileWasUpdated']="आपका प्रोफाइल अपडेट किया गया";
		$strings['YourSettingsWereUpdated']="अपनी सेटिंग को अपडेट किया गया";
		$strings['Register']="रजिस्टर";
		$strings['SecurityCode']="सुरक्षा कोड";
		$strings['ReservationCreatedPreference']="मैं एक आरक्षण बनाने या जब आरक्षण मेरी ओर से बनाई गई है";
		$strings['ReservationUpdatedPreference']="मैं आरक्षण को अपडेट करने या जब आरक्षण मेरी ओर से अद्यतन किया जाता है";
		$strings['ReservationDeletedPreference']="मैं एक आरक्षण या आरक्षण हटाना जब मेरी ओर से हटा दिया गया है";
		$strings['ReservationApprovalPreference']="मेरे लंबित आरक्षण को मंजूरी दे दी है, जब";
		$strings['PreferenceSendEmail']="मुझे एक ईमेल भेजें";
		$strings['PreferenceNoEmail']="मुझे सूचित न करें";
		$strings['ReservationCreated']="आपका आरक्षण सफलतापूर्वक बनाया गया था!";
		$strings['ReservationUpdated']="आपका आरक्षण सफलतापूर्वक अपडेट किया गया था!";
		$strings['ReservationRemoved']="आपका आरक्षण हटा दिया गया था";
		$strings['YourReferenceNumber']="अपनी संदर्भ संख्या% s है";
		$strings['UpdatingReservation']="अद्यतन कर रहा है आरक्षण";
		$strings['ChangeUser']="उपयोगकर्ता का परिवर्तन करें";
		$strings['MoreResources']="प्रदाता जोड़ें";
		$strings['ReservationLength']="लंबाई";
		$strings['ParticipantList']="प्रतिभागी सूची";
		$strings['AddParticipants']="प्रतिभागियों को जोड़ें";
		$strings['InviteOthers']="अन्य लोगों को आमंत्रित";
		$strings['AddResources']="प्रदाताओं को जोड़ें";
		$strings['AddAccessories']="सहायक जोड़ें";
		$strings['Accessory']="सहायक";
		$strings['QuantityRequested']="मात्रा का अनुरोध";
		$strings['CreatingReservation']="बनाना रिज़र्वेशन";
		$strings['UpdatingReservation']="अद्यतन कर रहा है रिज़र्वेशन";
		$strings['DeleteWarning']="यह क्रिया स्थायी और irrecoverable है!";
		$strings['DeleteAccessoryWarning']="इस सहायक हटाया जा रहा है सभी आरक्षण से इसे हटा देंगे।";
		$strings['AddAccessory']="गौण जोड़ें";
		$strings['AddBlackout']="अंधकार में जोड़ें";
		$strings['AllResourcesOn']="सभी संसाधनों पर";
		$strings['Reason']="कारण";
		$strings['BlackoutShowMe']="मुझे परस्पर विरोधी आरक्षण दिखाएँ";
		$strings['BlackoutDeleteConflicts']="परस्पर विरोधी आरक्षण हटाएं";
		$strings['Filter']="फ़िल्टर";
		$strings['Between']="बीच";
		$strings['CreatedBy']="के द्वारा बनाई गई";
		$strings['BlackoutCreated']="ब्लैकआउट बनाया!";
		$strings['BlackoutNotCreated']="अंधकार नहीं बनाया जा सकता है!";
		$strings['BlackoutConflicts']="परस्पर विरोधी अंधकार बार कर रहे हैं";
		$strings['ReservationConflicts']="परस्पर विरोधी आरक्षण बार कर रहे हैं";
		$strings['UsersInGroup']="इस समूह में उपयोगकर्ता";
		$strings['Browse']="ब्राउज़ करें";
		$strings['DeleteGroupWarning']="इस समूह हटाया जा रहा है सभी संबद्ध संसाधन अनुमतियाँ निकाल देंगे। इस समूह के उपयोगकर्ताओं को संसाधनों तक पहुंच खो सकते हैं।";
		$strings['WhatRolesApplyToThisGroup']="क्या भूमिकाओं इस समूह के लिए लागू होती है?";
		$strings['WhoCanManageThisGroup']="कौन इस समूह का प्रबंधन कर सकते हैं?";
		$strings['WhoCanManageThisSchedule']="कौन इस कार्यक्रम का प्रबंधन कर सकते हैं?";
		$strings['AddGroup']="समूह जोड़ें";
		$strings['AllQuotas']="सभी कोटा";
		$strings['QuotaReminder']="याद रखें: कोटा अनुसूची \ 'के समय क्षेत्र के आधार पर लागू कर रहे हैं।";
		$strings['AllReservations']="सभी आरक्षण";
		$strings['PendingReservations']="अपूर्ण आरक्षण";
		$strings['Approving']="अनुमोदन";
		$strings['MoveToSchedule']="शेड्यूल करने के लिए ले जाएँ";
		$strings['DeleteResourceWarning']="इस प्रदाता हटाने सहित, सभी संबंधित डेटा को नष्ट करेगा";
		$strings['DeleteResourceWarningReservations']="इसके साथ जुड़े सब अतीत, वर्तमान और भविष्य आरक्षण";
		$strings['DeleteResourceWarningPermissions']="सभी अनुमति के कार्य";
		$strings['DeleteResourceWarningReassign']="आप आगे बढ़ने से पहले नष्ट किया जा नहीं करना चाहते हैं कि कुछ भी पुन: असाइन कृपया";
		$strings['ScheduleLayout']="साप्ताहिक लेआउट";
		$strings['ReservableTimeSlots']="बुक टाइम स्लॉट";
		$strings['BlockedTimeSlots']="अवरोधित समय स्लॉट";
		$strings['ThisIsTheDefaultSchedule']="यह तयशुदा शेड्यूल है (नष्ट नहीं किया जा सकता है)";
		$strings['DefaultScheduleCannotBeDeleted']="डिफ़ॉल्ट अनुसूची हटाया नहीं जा सकता";
		$strings['MakeDefault']="डिफ़ॉल्ट बनाना";
		$strings['BringDown']="जानबूझ कर गिरा देना";
		$strings['ChangeLayout']="नक्शा परिवर्तित करें";
		$strings['AddSchedule']="अनुसूची जोड़ें";
		$strings['StartsOn']="पर शुरू होता है";
		$strings['NumberOfDaysVisible']="दर्शनीय दिनों की संख्या";
		$strings['UseSameLayoutAs']="के रूप में एक ही लेआउट का प्रयोग करें";
		$strings['Format']="प्रारूप";
		$strings['OptionalLabel']="वैकल्पिक लेबल";
		$strings['LayoutInstructions']="प्रति पंक्ति एक स्लॉट दर्ज करें। स्लॉट शुरुआत और 12:00 पर समाप्त दिन के सभी 24 घंटे के लिए प्रदान किया जाना चाहिए।";
		$strings['UserPermissionInfo']="संसाधन के लिए वास्तविक पहुँच उपयोगकर्ता भूमिका, समूह अनुमतियाँ, या बाहरी अनुमति सेटिंग्स के आधार पर अलग-अलग हो सकता है";
		$strings['DeleteUserWarning']="इस उपयोक्ता को मिटाने के उनके वर्तमान, भविष्य के सभी दूर है, और ऐतिहासिक आरक्षण होगा।";
		$strings['AddAnnouncement']="घोषणा जोड़ें";
		$strings['Announcement']="घोषणा";
		$strings['Priority']="प्राथमिकता";
		$strings['Reservable']="बुक";
		$strings['Unreservable']="अनुपलब्ध";
		$strings['Reserved']="बुक किया गया";
		$strings['MyReservation']="मेरी नियुक्ति";
		$strings['Pending']="अपूर्ण";
		$strings['Past']="अतीत";
		$strings['Restricted']="वर्जित";
		$strings['ViewAll']="सभी को देखें";
		$strings['MoveResourcesAndReservations']="करने के लिए संसाधनों और आरक्षण हटो";
		$strings['TurnOffSubscription']="कैलेंडर अनुमोदन बंद करें";
		$strings['TurnOnSubscription']="इस कैलेंडर के लिए अनुमोदन की अनुमति दें";
		$strings['SubscribeToCalendar']="इस कैलेंडर की सदस्यता";
		$strings['SubscriptionsAreDisabled']="व्यवस्थापक कैलेंडर सदस्यता के निष्क्रिय कर दिया";
		$strings['NoResourceAdministratorLabel']="(कोई प्रदाता प्रशासक)";
		$strings['WhoCanManageThisResource']="कौन इस संसाधन का प्रबंधन कर सकते हैं?";
		$strings['ResourceAdministrator']="प्रदाता प्रशासक";
		$strings['Private']="निजी";
		$strings['Accept']="स्वीकार करना";
		$strings['Decline']="पतन";
		$strings['ShowFullWeek']="दिखाएँ पूरा सप्ताह";
		$strings['CustomAttributes']="कस्टम गुण";
		$strings['AddAttribute']="एक गुण जोड़ें";
		$strings['EditAttribute']="एक गुण अद्यतन";
		$strings['DisplayLabel']="प्रदर्शन लेबल";
		$strings['Type']="प्रकार";
		$strings['Required']="अपेक्षित";
		$strings['ValidationExpression']="मान्यता अभिव्यक्ति";
		$strings['PossibleValues']="संभावित मान";
		$strings['SingleLineTextbox']="एकल लाइन पाठ बॉक्स";
		$strings['MultiLineTextbox']="एकाधिक पंक्ति पाठ बॉक्स";
		$strings['Checkbox']="चेकबॉक्स";
		$strings['SelectList']="चयन सूची";
		$strings['CommaSeparated']="अल्पविराम से अलग";
		$strings['Category']="श्रेणी";
		$strings['CategoryReservation']="आरक्षण";
		$strings['CategoryGroup']="गट";
		$strings['SortOrder']="क्रमबद्ध करेन का आदेश";
		$strings['Title']="शीर्षक";
		$strings['AdditionalAttributes']="अतिरिक्त विशेषताओं";
		$strings['AdditionalAppointmentAttributes']="अतिरिक्त नियुक्ति विवरण";
		$strings['AdditionalPatientAttributes']="अतिरिक्त रोगी का विवरण";
		$strings['True']="सच";
		$strings['False']="झूठा";
		$strings['ForgotPasswordEmailSent']="एक ईमेल आपके पासवर्ड रीसेट करने के लिए निर्देश के साथ उपलब्ध कराए गए पते पर भेज दिया गया है";
		$strings['ActivationEmailSent']="आप जल्द ही एक सक्रियण ईमेल प्राप्त होगा।";
		$strings['AccountActivationError']="क्षमा करें, हम आपके खाते को चालू नहीं कर सका।";
		$strings['Attachments']="अनुलग्नक";
		$strings['AttachFile']="फ़ाइल जोड़ें";
		$strings['Maximum']="मैक्स";
		$strings['NoScheduleAdministratorLabel']="कोई अनुसूची प्रशासक";
		$strings['ScheduleAdministrator']="अनुसूची प्रशासक";
		$strings['Total']="टोटल";
		$strings['QuantityReserved']="मात्रा सुरक्षित";
		$strings['AllAccessories']="सभी सामान";
		$strings['GetReport']="रिपोर्ट प्राप्त करें";
		$strings['NoResultsFound']="कोई मिलान परिणाम नहीं मिला";
		$strings['SaveThisReport']="इस रिपोर्ट को सहेजना";
		$strings['ReportSaved']="रिपोर्ट बचाया!";
		$strings['EmailReport']="ईमेल रिपोर्ट";
		$strings['ReportSent']="सूचना भेजी गई!";
		$strings['RunReport']="रिपोर्ट चलाएं";
		$strings['NoSavedReports']="आपके पास कोई सहेजी रिपोर्ट नहीं है।";
		$strings['CurrentWeek']="यह सप्ताह";
		$strings['CurrentMonth']="वर्तमान माह";
		$strings['AllTime']="पूरे समय";
		$strings['FilterBy']="के द्वारा फिल्टर";
		$strings['Select']="चुनना";
		$strings['List']="लिस्ट";
		$strings['TotalTime']="कुल समय";
		$strings['Count']="गिनती";
		$strings['Usage']="प्रयोग";
		$strings['AggregateBy']="सकल तक";
		$strings['Range']="रेंज";
		$strings['Choose']="चुनना";
		$strings['All']="सभी";
		$strings['ViewAsChart']="चार्ट के रूप में देखें";
		$strings['ReservedResources']="आरक्षित संसाधन";
		$strings['ReservedAccessories']="आरक्षित सहायक उपकरण";
		$strings['ResourceUsageTimeBooked']="संसाधन उपयोग - टाइम बुक";
		$strings['ResourceUsageReservationCount']="संसाधन उपयोग - रिज़र्वेशन गणना";
		$strings['Top20UsersTimeBooked']="शीर्ष 20 उपयोगकर्ताओं - टाइम बुक";
		$strings['Top20UsersReservationCount']="शीर्ष 20 उपयोगकर्ताओं - रिज़र्वेशन गणना";
		$strings['ContactPerson']="संपर्क व्यक्ति";
		$strings['ContactPhone']="संपर्क फ़ोन नंबर";
		$strings['OrganizationNameRequired']="संगठन नाम की आवश्यकता है";
		$strings['OrganizationRegistered']="संगठन पहले से ही पंजीकृत है";
		$strings['InternalOrg']="आंतरिक संगठन";
		$strings['OrganizationName']="संगठन का नाम";
		$strings['SelectAccount']="सूची से नाम का चयन तो लिखना प्रारंभ";
		$strings['card']="क्रेडिट कार्ड";
		$strings['CardNumber']="कार्ड संख्या";
		$strings['CardCvc']="सुरक्षा कोड";
		$strings['CardExpiry']="समाप्ति तिथि";
		$strings['Pay']="अब भुगतान करें";
		$strings['PayAmount']="कितनी राशि का भुगतान";
		$strings['ProcessPayment']="भुगतान की प्रक्रिया";
		$strings['ConfirmPayment']="भुगतान की पुष्टि कृपया";
		$strings['Confirm']="पुष्टि करें";
		$strings['ConfirmMsg']="आप अपने भुगतान प्रेस की पुष्टि बटन के साथ आगे बढ़ना चाहते हैं, तो; अन्यथा रद्द दबाएँ।";
		$strings['YourBillingWasUpdated']="आपका बिलिंग डाटा अपडेट किया गया";
		$strings['PaymentProcessed']="आपका भुगतान संसाधित किया गया था और एक रसीद आपको ईमेल किया गया था";
		$strings['IncorrectCardData']="गलत क्रेडिट कार्ड डेटा";
		$strings['ID']="आईडी";
		$strings['MedicalPractice']="मेडिकल अभ्यास करना";
		$strings['Patient']="रोगी";
		$strings['PracticeName']="अभ्यास का नाम";
		$strings['Specialty']="चिकित्सा विशेषता";
		$strings['StreetName']="गली का पता";
		$strings['Street']="गली का पता";
		$strings['Unit']="इकाई संख्या";
		$strings['Zip']="पिन कोड";
		$strings['City']="शहर";
		$strings['State']="प्रांत / राज्य";
		$strings['Country']="कंट्री";
		$strings['UserType']="उपयोगकर्ता का प्रकार";
		$strings['PracticeInfo']="अभ्यास की जानकारी";
		$strings['PersonalInfo']="उपयोगकर्ता जानकारी";
		$strings['PhoneNumber']="फ़ोन नंबर";
		$strings['single']="सिंगल";
		$strings['double']="दोगुना";
		$strings['triple']="ट्रिपल";
		$strings['quad']="ट्रैक्टर";
		$strings['office']="कार्यालय";
		$strings['MaxDoctors']="प्रदाता सीमा";
		$strings['NoWeekends']="कोई सप्ताहांत अनुसूची";
		$strings['EditTimeSlotLayout']="संपादित अनुसूची लेआउट";
		$strings['required']="() की आवश्यकता";
		$strings['Monday']="सोमवार";
		$strings['Tuesday']="मंगलवार";
		$strings['Wednesday']="बुधवार";
		$strings['Thursday']="गुरुवार";
		$strings['Friday']="शुक्रवार";
		$strings['Saturday']="शनिवार";
		$strings['Sunday']="रविवार";
		$strings['Clear']="सभी साफ़ फील्ड्स";
		$strings['CreateAppointment']="नई नियुक्ति बनाएँ";
		$strings['PatientInfo']="रोगी जानकारी";
		$strings['AppointmentInfo']="नियुक्ति विवरण";
		$strings['AppointmentMaker']="द्वारा अपडेट";
		$strings['FileAttachement']="फ़ाइल अनुलग्नक";
		$strings['PracticeInfo']="प्रैक्टिस सूचना";
		$strings['CustomAttributes']="कस्टम गुण";
		$strings['FindDoctor']="चिकित्सक का पता लगाएं";
		$strings['DoctorSchedules']="डॉक्टर अनुसूचियों";
		$strings['ProviderSchedules']="प्रदाता अनुसूचियों";
		$strings['UserType']="उपयोगकर्ता का प्रकार";
		$strings['PasswordOptional']="छोड़ खाली प्रणाली एक बनाएगा अगर";
		$strings['SendLoginEmail']="उपयोगकर्ता के लिए ईमेल लॉगिन";
		$strings['InvalidPhone']="अवैध फोन नंबर";
		$strings['NewPatients']="नए रोगियों";
		$strings['NewPatientsAccepted']="नए रोगियों का स्वागत करते हैं";
		$strings['NewPatientsNotAccepted']="नए रोगियों को स्वीकार नहीं कर रहे";
		$strings['Accepted']="कुबूल हे";
		$strings['NotAccepted']="स्वीकार नहीं";
		$strings['Cancelations']="Cancelations";
		$strings['CancelationsOnlineYes']="Cancelations ऑनलाइन किया जा सकता है";
		$strings['CancelationsOnlineNo']="Cancelations ऑनलाइन नहीं किया जा सकता";
		$strings['CancelationMinDays']="मनाही की कम से कम किया जाना चाहिए";
		$strings['hours']="घंटे";
		$strings['minutes']="मिनट";
		$strings['Additional']="अतिरिक्त";
		$strings['Attributes']="गुण";
		$strings['NoNewPatients']="इस डॉक्टर 'टी नए रोगियों को स्वीकार \ doesn";
		$strings['ReservationNote']="नियुक्ति नोट";
		$strings['CreatedBy']="के द्वारा बनाई गई";
		$strings['Doctor']="डॉक्टर";
		$strings['Address']="पता";
		$strings['FullAddressRequired']="मेडिकल चिकित्सकों उनके पूरे पते के बाहर भरने की जरूरत है";
		$strings['NoSchedule']="कोई अनुसूची आप पहली बार एक चिकित्सक खोजने के लिए है, मौजूद है";
		$strings['Communication']="संप्रेषण";
		$strings['EmailBeforeAppointment']="नियुक्ति के एक दिन पहले ईमेल रिमाइंडर भेजे";
		$strings['NoEmailBeforeAppointment']="नियुक्ति से पहले अनुस्मारक ईमेल भेज नहीं है";
		$strings['ManageAppointments']="नियुक्ति";
		$strings['EmailLogin']="दर्ज किया गया एक लॉगिन रोगी को ईमेल किया जाएगा यदि";
		$strings['MedicalAddress']="अभ्यास के लिए - आवश्यक";
		$strings['Contact']="हमसे संपर्क करें";
		$strings['Send']="भेजो";
		$strings['SendingEmail']="ईमेल भेजें";
		$strings['TipsTricks']="सुझाव और युक्ति";
		$strings['NewPatients']="नए रोगियों";
		$strings['Accepted']="कुबूल हे";
		$strings['NotAccepted']="स्वीकार नहीं";
		$strings['Confirmed']="इस बात की पुष्टि";
		$strings['Pending']="अपूर्ण";
		$strings['MinCancelError']="एक रद्द% की सूचना की आवश्यकता है; इस नियुक्ति अब रद्द नहीं किया जा सकता है।";
		$strings['DeleteFailed']="नियुक्ति में विफल हटा दें।";
		$strings['DoctorIsVisible']="डॉक्टर जनता के लिए दिख रहा है";
		$strings['DoctorIsInvisible']="डॉक्टर जनता के लिए अदृश्य है";
		$strings['MyUsersOnly']="डॉक्टर कैलेंडर के लिए सुलभ है";
		$strings['NoUsers']="कोई सार्वजनिक उपयोगकर्ता नियुक्तियों बुक करने के लिए अनुमति दी है";
		$strings['PublicBooking']="कोई भी पंजीकृत उपयोगकर्ता नियुक्तियों बुक करने के लिए अनुमति दी है।";
		$strings['UsersWithPermission']="उपयोगकर्ता पहुँच कैलेंडर के लिए अनुमति की जरूरत है";
		$strings['UserPermission']="कैलेंडर जनता के लिए उपलब्ध है";
		$strings['Permission']="अनुमति अनुरोध";
		$strings['WithPermission']="केवल अनुमति के साथ उन";
		$strings['Grant']="अनुदान अनुमति";
		$strings['Deny']="इंकार अनुमति";
		$strings['RequestPermissions']="अनुमति अनुरोध";
		$strings['UserInfo']="उपयोगकर्ता विवरण";
		$strings['ThisWeek']="इस सप्ताह";
		$strings['AfterThisWeek']="इस सप्ताह के बाद";
		$strings['AccountSetup']="एकाउंट सेटअप";
		$strings['SlotCount']="नियुक्ति प्रति समय स्लॉट की संख्या";
		$strings['Appointment']="मुलाकात";
		$strings['Tutorials']="ट्यूटोरियल";
		$strings['SetupTutorial']="कैसे सेटअप एक मेडिकल खाते में";
		$strings['HowToTutorial']="MyDocSchedule.com का उपयोग कैसे करें";
		$strings['AccountCreated']="नई चिकित्सा खाता पंजीकृत";
		$strings['Service']="सेवा";
		$strings['Constrain']="समय की कमी";
		$strings['AllDoctorsOn']="पर सभी डॉक्टरों";
		$strings['AnyUser']="किसी भी उपयोगकर्ता";
		$strings['NoUser']="कोई उपयोगकर्ता";
		$strings['UserWithPermissions']="अनुमति के साथ उपयोगकर्ता";
		$strings['SlotLength']="मिनटों में खांचा लंबाई";
		$strings['Appointments']="नियुक्ति";
		$strings['Promotion']="प्रचार कोड";
		$strings['Code']="कोड";
		$strings['Discount']="छूट";
		$strings['DisplayDays']="दिन प्रदर्शित करने के लिए";
		$strings['ScheduleName']="शेड्यूल का नाम";
		$strings['Admin']="प्रशासक";
		$strings['BusinessBenefits']="कारोबारी लाभ";
		$strings['BusinessFunctionality']="व्यापार कार्यशीलता";
		$strings['DoctorIsInvisibleExplanation']="यह विकल्प चिकित्सक चाहे नियंत्रित करता है और उसकी / उसके अनुसूची mydocschedule.com पर दिख रहा है। 'नहीं' करने के लिए सेट तो डॉक्टर वेबसाइट का उपयोग रोगियों द्वारा नहीं मिला होगा। यह एक डॉक्टर अपने मरीजों वह / वो तो कर रही है कि बारे में पता किया जा रहा बिना अपने कार्यालय के लिए केवल आंतरिक रूप से इस सेवा का उपयोग करना चाहती है जहां स्थितियों के लिए है।";
		$strings['OfficeCreatedPatientsExplanation']="इस विकल्प के लिए एक सार्वजनिक उपयोगकर्ता डॉक्टर कैलेंडर का उपयोग और नियुक्तियों कर सकते हैं या नहीं, फैसला करता है। 1) नियुक्तियों बुक कर सकते हैं;: उपलब्ध विकल्पों में से एक सार्वजनिक उपयोगकर्ता / रोगी है कि कर रहे हैं 2) नियुक्तियों में आरक्षण नहीं कर सकते हैं; अनुमति चिकित्सक कार्यालय द्वारा दी जाती है जब 3) नियुक्तियों बुक कर सकते हैं। डिफ़ॉल्ट सार्वजनिक नियुक्तियों बुक कर सकते हैं।";
		$strings['AutomaticApproval']="यह विकल्प रोगियों द्वारा की गई नियुक्तियों को स्वचालित रूप से मंजूरी दे दी है या नहीं कर रहे हैं कि क्या नियंत्रित करता है। डिफ़ॉल्ट रूप से सभी नियुक्तियों कार्यालय अनुमोदन की आवश्यकता होती है।";
		$strings['MinLeadTime']="एक नई नियुक्ति के लिए आवश्यक नेतृत्व समय है जब यह विकल्प नियंत्रित करता है। डिफ़ॉल्ट रूप से नियुक्तियों वर्तमान समय तक बना जा सकता है।";
		$strings['MaxInAdvanceTime']="यह विकल्प नियुक्तियों बनाया जा सकता है कि कितने समय तक अग्रिम में नियंत्रित करता है। डिफ़ॉल्ट रूप से वे अग्रिम में 60 दिनों के लिए बनाया जा सकता है।";
		$strings['MinCancelTime']="इस विकल्प को रद्द के लिए आवश्यक न्यूनतम नेतृत्व समय को नियंत्रित करता है";
		$strings['NewPatientsHelp']="यह विकल्प चिकित्सा पद्धति नए रोगियों को स्वीकार करता है कि क्या नियंत्रित करता है।";
		$strings['ReminderEmail']="इस विकल्प को एक ई-मेल नियुक्ति के एक दिन पहले रोगी के लिए भेजा है कि क्या नियंत्रित करता है।";
		$strings['OnlineOfflineTip']="यह विकल्प अनुसूची अपने रोगियों को बुकिंग के लिए उपलब्ध है कि क्या नियंत्रित करता है। अनुसूची ऑफ़लाइन है तो यह अभी भी अपने कार्यालय के लिए नहीं बल्कि अपने रोगियों को उपलब्ध है।";
		$strings['ScheduleTip']="यह चिकित्सक द्वारा इस्तेमाल किया जाता है जो अनुसूची लेआउट सेट अप";
		$strings['SortOrderTip']="यह विकल्प कार्यक्रम के प्रदर्शन का क्रम को नियंत्रित करता है";
		$strings['LocationTip']="स्थान यहाँ निर्दिष्ट किया जाता है, तो यह प्रोफ़ाइल में सेट ऑफिस का पता पार कर जाएगी। केवल सड़क, (इस क्रम में) इकाई (यदि आवश्यक) संख्या और शहर के लिए आवश्यक हैं और वे एक स्तंभ से अलग किया जाना चाहिए।";
		$strings['ContactTip']="संपर्क जानकारी, फोन और / या ईमेल, निर्दिष्ट कर रहे हैं तो वे प्रोफ़ाइल में मूल्यों पार कर जाएगी।";
		$strings['MedSpecialtyTip']="इस डॉक्टर की वास्तविक चिकित्सा विशेषता है, यह कार्यालय प्रोफ़ाइल में सेट विशेषता ओवरराइड करता है";
		$strings['NotesTip']="कुछ भी कार्यालय / डॉक्टर महत्वपूर्ण यहाँ उल्लेख किया जा सकता समझे";
		$strings['ResourceAdminTip']="यह इन विकल्पों का प्रबंधन कर सकते हैं, जो संसाधन व्यवस्थापक के चयन की अनुमति देता है";
		$strings['LoginError']="हम अपना यूज़रनेम या पासवर्ड से मेल नहीं सकता";
		$strings['ReservationFailed']="आपका आरक्षण नहीं बनाया जा सकता है";
		$strings['MinNoticeError']="इस आरक्षण अग्रिम सूचना की आवश्यकता है। आरक्षित किया जा सकता है कि जल्द से जल्द की तारीख और समय% s है।";
		$strings['MaxNoticeError']="इस आरक्षण दूर भविष्य में इस बनाया नहीं जा सकता। आरक्षित किया जा सकता है कि नवीनतम तारीख और समय% s है।";
		$strings['MinDurationError']="इस आरक्षण कम से कम% पिछले चाहिए।";
		$strings['MaxDurationError']="इस आरक्षण% की तुलना में अब पिछले नहीं कर सकते हैं।";
		$strings['ConflictingAccessoryDates']="निम्नलिखित सामान के लिए पर्याप्त नहीं हैं:";
		$strings['NoResourcePermission']="आप का अनुरोध संसाधनों में से एक या एक से अधिक का उपयोग करने की अनुमति नहीं है";
		$strings['ConflictingReservationDates']="निम्नलिखित तारीखों पर परस्पर विरोधी आरक्षण रहे हैं:";
		$strings['StartDateBeforeEndDateRule']="आरंभ तिथि और समय समाप्ति तिथि और समय से पहले होना चाहिए";
		$strings['StartIsInPast']="आरंभ तिथि और समय अतीत में नहीं किया जा सकता";
		$strings['EmailDisabled']="व्यवस्थापक ईमेल सूचनाएं अक्षम है";
		$strings['ValidLayoutRequired']="स्लॉट शुरुआत और 12:00 पर समाप्त दिन के सभी 24 घंटे के लिए प्रदान किया जाना चाहिए।";
		$strings['CustomAttributeErrors']="आपके द्वारा दी गई अतिरिक्त विशेषताओं के साथ समस्याएं हैं:";
		$strings['CustomAttributeRequired']="% S के क्षेत्र जरूरी है";
		$strings['CustomAttributeInvalid']="% s के लिए प्रदान की जाती मान अमान्य है";
		$strings['AttachmentLoadingError']="क्षमा करें, अनुरोध की गई फ़ाइल लोड करने में कोई समस्या नहीं थी।";
		$strings['InvalidAttachmentExtension']="आप केवल प्रकार की फ़ाइलों को अपलोड कर सकते है:% s";
		$strings['Approval']="आरक्षण का अनुमोदन";
		$strings['Required']="अपेक्षित";
		$strings['Automatic']="स्वचालित";
		$strings['MinCancel']="मिन नोटिस रद्द";
		$strings['MinBookingLead']="मिन आरक्षण का नोटिस";
		$strings['MaxBookingLead']="मैक्स आरक्षण का नोटिस";
		$strings['NoLimit']="कोई सीमा नहीं";
		$strings['Days']="% एस";
		$strings['Location']="स्थान";
		$strings['ContactPhone']="संपर्क फ़ोन";
		$strings['ContactInfo']="संपर्क";
		$strings['AppointmentPatient']="रोगी";
		$strings['AppointmentDoctor']="डॉक्टर";
		$strings['AppointmentStart']="शुरु";
		$strings['AppointmentEnd']="समाप्त";
		$strings['SelectUser']="का चयन रोगी";
		$strings['CreateReservation']="आरक्षण बनाएँ";
		$strings['EditReservation']="संपादन रिज़र्वेशन";
		$strings['LogIn']="लॉग इन करें";
		$strings['ManageReservations']="नियुक्ति";
		$strings['AwaitingActivation']="एक्टिवेशन प्रतीक्षा में है";
		$strings['PendingApproval']="लंबित अनुमोदन";
		$strings['ManageSchedules']="अनुसूचियों और सेवाएँ";
		$strings['ManageResources']="प्रदाता";
		$strings['ManageAccessories']="सामान";
		$strings['ManageUsers']="उपयोगकर्ता & मरीजों को";
		$strings['ManageGroups']="समूह";
		$strings['ManageQuotas']="कोटा";
		$strings['ManageBlackouts']="छुट्टियों और ब्लैकआउट";
		$strings['MyDashboard']="मेरा डैशबोर्ड";
		$strings['ServerSettings']="सर्वर सेटिंग्स";
		$strings['Dashboard']="डैशबोर्ड";
		$strings['Help']="सहायता";
		$strings['Administration']="प्रशासन";
		$strings['About']="तकरीबन";
		$strings['Bookings']="बुकिंग";
		$strings['Schedule']="अनुसूची";
		$strings['Reservations']="आरक्षण";
		$strings['Account']="खाता";
		$strings['EditProfile']="मेरे प्रोफ़ाइल संपादित करे";
		$strings['FindAnOpening']="एक खोलने का पता लगाएं";
		$strings['OpenInvitations']="खुले निमंत्रण";
		$strings['MyCalendar']="मेरे पंचांग";
		$strings['ResourceCalendar']="प्रदाता कैलेंडर";
		$strings['Reservation']="नई रिज़र्वेशन";
		$strings['Install']="स्थापना";
		$strings['ChangePassword']="पासवर्ड बदलें";
		$strings['MyAccount']="मेरा खाता";
		$strings['Profile']="प्रोफ़ाइल";
		$strings['Billing']="बिलिंग";
		$strings['ApplicationManagement']="प्रशासन";
		$strings['ForgotPassword']="पासवर्ड भूल गए";
		$strings['NotificationPreferences']="सूचना की प्राथमिकताएं";
		$strings['ManageAnnouncements']="घोषणाएँ";
		$strings['Responsibilities']="जिम्मेदारियों";
		$strings['GroupReservations']="समूह आरक्षण";
		$strings['ResourceReservations']="संसाधन आरक्षण";
		$strings['Customization']="अनुकूलन";
		$strings['Attributes']="गुण";
		$strings['AccountActivation']="खाता सक्रियण";
		$strings['ScheduleReservations']="अनुसूची आरक्षण";
		$strings['Reports']="रिपोर्ट";
		$strings['GenerateReport']="नई रिपोर्ट बनाएँ";
		$strings['MySavedReports']="अपने को बचाया रिपोर्ट";
		$strings['CommonReports']="आम रिपोर्टें";
		$strings['ViewDay']="देखें दिवस";
		$strings['Group']="गट";
		$strings['BillingInfo']="बिलिंग जानकारी";
		$strings['Account']="खाता";
		$strings['Pricing']="मूल्य निर्धारण";
		$strings['FeaturesBenefits']="विशेषताएं और लाभ";
		$strings['DefineServices']="चिकित्सा सेवाओं को परिभाषित";
		$strings['DefineSlots']="टाइम स्लॉट परिभाषित";
		$strings['ServiceName']="सेवा का नाम";
		$strings['ServiceDesc']="सेवा विवरण";
		$strings['NumSlots']="टाइम स्लॉट";
		$strings['ScheduleServices']="अनुसूची सेवाएं";
		$strings['ScheduleDetails']="अनुसूची विवरण";
		$strings['UpdateServicesSlots']="अद्यतन सेवा और लेआउट";
		$strings['Minutes']="कार्यवृत्त";
		$strings['ReservationApprovedSubject']="अपनी नियुक्ति अनुमोदित किया गया है";
		$strings['ReservationCreatedSubject']="अपनी नियुक्ति के बनाया गया था";
		$strings['ReservationUpdatedSubject']="अपनी नियुक्ति के अपडेट किया गया";
		$strings['ReservationDeletedSubject']="अपनी नियुक्ति के हटा दिया गया था";
		$strings['ReservationCreatedAdminSubject']="अधिसूचना: एक नियुक्ति बनाया गया था";
		$strings['ReservationUpdatedAdminSubject']="अधिसूचना: एक नियुक्ति अपडेट किया गया";
		$strings['ReservationDeleteAdminSubject']="अधिसूचना: एक नियुक्ति हटा दिया गया था";
		$strings['ParticipantAddedSubject']="नियुक्ति भागीदारी अधिसूचना";
		$strings['ParticipantDeletedSubject']="नियुक्ति हटाया";
		$strings['InviteeAddedSubject']="नियुक्ति का निमंत्रण";
		$strings['ResetPassword']="पासवर्ड रीसेट अनुरोध";
		$strings['ActivateYourAccount']="कृपया अपने खाते को सक्रिय करें";
		$strings['ReportSubject']="आपके अनुरोध रिपोर्ट (% s)";
		$strings['EditBilling']="मेरा बिलिंग जानकारी संपादित";
		$strings['AccountType']="चालू खाते के प्रकार";
		$strings['PaymentType']="वर्तमान भुगतान पद्धति";
		$strings['BillingCycle']="बिलिंग चक्र";
		$strings['BulkUserCreation']="थोक में उपयोगकर्ताओं बनाएँ";
		$strings['Taxes']="करों";
		$strings['free']="फ्री";
		$strings['low usage']="कम उपयोग";
		$strings['medium usage']="मध्यम उपयोग";
		$strings['high usage']="उच्च उपयोग";
		$strings['extra high usage']="अतिरिक्त उच्च उपयोग";
		$strings['enterprise usage']="एंटरप्राइज उपयोग";
		$strings['ResourceLimit']="संसाधन सीमा";
		$strings['NoUserLimit']="असीमित उपयोगकर्ताओं";
		$strings['AccountStatus']="खाते की स्थिति";
		$strings['check']="चेक";
		$strings['CreditCard']="क्रेडिट कार्ड";
		$strings['Prepaid']="अगले बिलिंग दिनांक";
		$strings['Owed']="बकाया राशि";
		$strings['AdditionalServices']="अतिरिक्त सेवाएं";
		$strings['monthly']="मासिक";
		$strings['semi-annually']="अर्द्ध वार्षिक";
		$strings['yearly']="प्रतिवर्ष";
		$strings['quarterly']="त्रैमासिक";
		$strings['UserCreation']="मैं अपने उपयोगकर्ता फ़ाइल से बनाया उपयोगकर्ताओं चाहते हैं";
		$strings['UserCreationMsg']="Support@mydocschedule.com करने के लिए फाइल ईमेल करें";
		$strings['InCanada']="मैं कनाडा में स्थित है और एचएसटी के अधीन रहा हूँ";
		$strings['CurrentFee']="वर्तमान शुल्क";
		$strings['Home']="होम";
		$strings['FAQ']="सामान्य प्रश्न";
		$strings['Terms']="नियम एवं शर्तें";
		$strings['Privacy']="गोपनीयता नीति";
		$strings['Faq']="सामान्यतःपूछे जाने वाले प्रश्न";
		$strings['LastTransaction']="अंतिम लेन-देन";
		$strings['PaymentMsgSubject']="Www.MyDocSchedule.com से भुगतान चालान";
		$strings['LoginEmail']="Www.MyDocSchedule.com अपना लॉगिन";
		$strings['FindDoctor']="चिकित्सक का पता लगाएं";
		$strings['DoctorName']="डॉक्टर का नाम";
		$strings['MedicalSpecialty']="चिकित्सा विशेषता";
		$strings['PracticeName']="अभ्यास का नाम";
		$strings['Note']="नोट";
		$strings['DoctorInfo']="डॉक्टर की जानकारी";
		$strings['AddToMyAccount']="मेरे खाते में जोड़ें";
		$strings['RequestPermission']="अनुमति का अनुरोध करें";
		$strings['InAccount']="आपका डॉक्टर";
		$strings['MyDoctors']="मेरे डॉक्टरों";
		$strings['NoDoctorsSelected']="कोई डॉक्टर अभी तक चयनित";
		$strings['Features']="विशेषताएं और लाभ";
		$strings['FeaturesMenu']="विशेषताएं";
		$strings['Public']="सार्वजनिक";
		$strings['EmailNotFound']="नीचे दिए गए ईमेल प्रणाली में नहीं मिला था, पासवर्ड couldn \ 'टी रीसेट किया";
		$strings['AppointmentDetails']="नियुक्ति विवरण";
		$strings['Bookable']="बुक";
		$strings['NotBookableMessage']="यह सेवा ऑनलाइन बुक नहीं किया जा सकता। आप नियुक्ति करने के लिए कार्यालय में फोन करने के लिए है";
		$strings['PracticeAddress']="प्रैक्टिस पता";
		$strings['UserAddress']="प्रयोक्ता पता";
		$strings['DeleteUser']="उपयोगकर्ता हटाएं";
		$strings['AdditionalUser']="संबंधित उपयोगकर्ता";
		$strings['NewAddress']="विभिन्न पता है";
		$strings['Takesawhile']="डाउनलोड की वजह से फ़ाइल आकार करने के लिए कई मिनट लगते हैं।";
		$strings['SelectService']="सेवा का चयन करें";
		$strings['MailCheck']="चेक मेल करें:";
		$strings['Permonth']="प्रति महीने";
		$strings['DiscountFromFull']="पूरी कीमत से कम";
		$strings['Home']="होम";
		$strings['Tutorials']="ट्यूटोरियल";
		$strings['UseTutorial']="MyDocSchedule.com का उपयोग कैसे करें";
		$strings['Trial']="चिकित्सा पद्धतियों के लिए मुक्त 30 दिन परीक्षण";
		$strings['HowForDocs']="यह डॉक्टरों के लिए कैसे काम करता है";
		$strings['Register']="रजिस्टर";
		$strings['RegisterLong']="हमारी वेबसाइट के साथ अपने व्यवहार रजिस्टर करें और अपने कार्यालय उपयोगकर्ताओं को बनाने के";
		$strings['Step1']="स्टेप 1";
		$strings['SetupSchedule']="सेटअप अपने अनुसूची";
		$strings['SetupScheduleLong']="सेटअप अपने साप्ताहिक कार्यक्रम और रोगियों के लिए अपनी बुकिंग के विकल्प";
		$strings['Step2']="चरण 2";
		$strings['Bookings']="अपने आरक्षण करो";
		$strings['BookingsLong']="कहीं और आप की तरह अपने कार्यालय से अपने रोगियों बुकिंग शुरू या";
		$strings['Step3']="चरण 3";
		$strings['LetPatients']="चलो मरीजों को उनकी करो";
		$strings['LetPatientsLong']="वैकल्पिक रूप से अपने रोगियों को अपनी सुविधा पर हमारी वेबसाइट पर अपनी बुकिंग करने की अनुमति";
		$strings['Step4']="चरण 4";
		$strings['WatchDemo']="प्रदर्शन का अवलोकन";
		$strings['FreePatients']="मरीजों के लिए हमेशा के लिए मुक्त";
		$strings['HowForPatients']="यह मरीजों के लिए कैसे काम करता है";
		$strings['RegisterPatient']="एक रोगी के रूप में हमारी वेबसाइट के साथ रजिस्टर";
		$strings['FindDoc']="आपका चिकित्सक का पता लगाएं";
		$strings['FindDocLong']="अपने चिकित्सक का पता लगाएं और अपने खाते में उसे / उसे जोड़ने";
		$strings['BookApp']="आपकी नियुक्ति की किताब";
		$strings['BookAppLong']="अपने चिकित्सक के साथ एक नियुक्ति की किताब";
		$strings['DocBenefits']="चिकित्सा पद्धतियों के लिए लाभ";
		$strings['Points']="बहुत है, कुछ अंक नीचे सूचीबद्ध हैं:";
		$strings['Increased']="नियुक्तियों और राजस्व वृद्धि की संख्या में वृद्धि";
		$strings['MorePatients']="अपने अभ्यास के लिए और अधिक रोगियों के लिए प्रवेश";
		$strings['Inexpensive']="व्यावहारिक और सस्ती ऑनलाइन उपस्थिति";
		$strings['LessWork']="अपने कर्मचारियों के लिए कम काम और तनाव";
		$strings['LessIssues']="कोई सॉफ्टवेयर रखरखाव, डेटा बैकअप, कम हार्डवेयर मुद्दों";
		$strings['Satisfaction']="अधिक रोगी संतोष";
		$strings['PatientBenefits']="मरीजों के लिए लाभ";
		$strings['PatientDeal']="रोगियों के लिए भी एक बेहतर सौदा:";
		$strings['EasierBooking']="बुकिंग नियुक्तियों का एक नया आसान तरीका";
		$strings['WideAccess']="अपने डॉक्टर से कैलेंडर के लिए किसी भी समय किसी भी जगह का उपयोग";
		$strings['Tracking']="नियुक्तियों ट्रैक रखने और प्रबंध का आसान तरीका";
		$strings['Convenience']="रोगी सुविधानुसार appointmnets बुक करने की क्षमता";
		$strings['ManageApps']="एक ही खाते से परिवार के सदस्य नियुक्तियों का प्रबंधन";
		$strings['Notifications']="आगामी नियुक्ति सूचनाएं";
		$strings['Specials']="स्पेशल!";
		$strings['50off']="नियमित रूप से मूल्य से 50 %% जाओ";
		$strings['6months']="6 महीने के लिए आप आप मेल में प्राप्त है कि प्रचार कोड का उपयोग कर रजिस्टर जब";
		$strings['OR']="या";
		$strings['CreatePatients']="अपने रोगियों को निशुल्क पैदा हो";
		$strings['DataFile']="किसी भी फ़ाइल स्वरूप में हमें अपने रोगियों के साथ एक फ़ाइल ईमेल और हम प्रभार से मुक्त आप के लिए उन्हें लोड होगा; रोगी के प्रति $ 0.50 की बचत";
		$strings['Join']="प्रीमियर मेडिकल निर्धारण और सहयोग मंच में शामिल हों";
		$strings['Cloud']="चिकित्सा के पेशे के लिए क्लाउड सेवा";

        // Day representations
        $strings['DaySundaySingle'] = 'S';
        $strings['DayMondaySingle'] = 'M';
        $strings['DayTuesdaySingle'] = 'T';
        $strings['DayWednesdaySingle'] = 'W';
        $strings['DayThursdaySingle'] = 'T';
        $strings['DayFridaySingle'] = 'F';
        $strings['DaySaturdaySingle'] = 'S';

        $strings['DaySundayAbbr'] = 'Sun';
        $strings['DayMondayAbbr'] = 'Mon';
        $strings['DayTuesdayAbbr'] = 'Tue';
        $strings['DayWednesdayAbbr'] = 'Wed';
        $strings['DayThursdayAbbr'] = 'Thu';
        $strings['DayFridayAbbr'] = 'Fri';
        $strings['DaySaturdayAbbr'] = 'Sat';
		// End Day representations

		$strings['Configuration'] = "विन्यास";
		$strings['AppointmentWith'] = "साथ नियुक्ति";
		$strings['SendReminder'] = "द्वारा नियुक्ति अनुस्मारक";
		$strings['NewReminder'] = "द्वारा नई नियुक्ति अनुस्मारक";
		$strings['email'] = "ईमेल";
		$strings['SMS'] = "एसएमएस";
		$strings['BeforeAppointment'] = "दिन (एस) के नियुक्ति से पहले";
		$strings['AfterAppointment'] = "एक बार पिछले नियुक्ति के बाद महीनों";
		$strings['OnlineOfflineTip'] = "यह विकल्प प्रदाता अनुसूची के रोगियों के लिए बुकिंग के लिए उपलब्ध है कि क्या नियंत्रित करता है। प्रदाता अनुसूची ऑफ़लाइन है तो यह अभी भी कार्यालय में नहीं बल्कि रोगियों को उपलब्ध है।";
		$strings['NoEmailBeforeAppointment'] = "नियुक्ति से पहले अनुस्मारक न भेजें";
		$strings['NoEmailForNewAppointment'] = "नई नियुक्ति के लिए अनुस्मारक न भेजें";
		$strings['day'] = "दिन";
		$strings['week'] = "सप्ताह";
		$strings['month'] = "महीना";
		$strings['UpTo'] = "तक";
		$strings['reminders'] = "अनुस्मारक";
		$strings['Reminders'] = "अनुस्मारक";
		$strings['ReminderEmail'] = "इस विकल्प को एक चेतावनी के एक वर्तमान नियुक्ति से पहले रोगी के लिए भेजा है कि क्या नियंत्रित करता है।";
		$strings['NewReminderEmail'] = "इस विकल्प को एक चेतावनी के एक नई नियुक्ति के लिए रोगी के लिए भेजा है कि क्या नियंत्रित करता है।";
		$strings['EmailBeforeAppointment'] = "%s दिन में नियुक्ति से पहले ईमेल %s अनुस्मारक भेजें";
		$strings['NewAppointmentReminder'] = "पिछले नियुक्ति के बाद ईमेल %s %s माह अनुस्मारक भेजें";
		
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
        return 'hi';
    }
}