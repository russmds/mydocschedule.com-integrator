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
//error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);

require_once(ROOT_DIR . 'lang/AvailableLanguages.php');

interface IResourceLocalization
{
	/**
	 * @abstract
	 * @param $key
	 * @param array|string $args
	 * @return void
	 */
	public function GetString($key, $args = array());

	public function GetDateFormat($key);

	public function GetDays($key);

	public function GetMonths($key);

	function GeneralDateFormat();

	function GeneralDateTimeFormat();
}

class ResourceKeys
{
	const DATE_GENERAL = 'general_date';
	const DATETIME_GENERAL = 'general_datetime';
	const DATETIME_SYSTEM = 'system_datetime';
}

class Resources implements IResourceLocalization
{
	/**
	 * @var string
	 */
	public $CurrentLanguage;
	public $LanguageFile;
	public $CalendarLanguageFile;

	/**
	 * @var array|AvailableLanguage[]
	 */
	public $AvailableLanguages = array();

	public $LanguageArray = array();
	/**
	 * @var string
	 */
	public $Charset;

	/**
	 * @var string
	 */
	public $HtmlLang;

	protected $LanguageDirectory;

	private static $_instance;

	private $systemDateKeys = array();

	/**
	 * @var Language
	 */
	private $_lang;

	public $States = array();
	
	public $Countries = array();
	
	public $Specialties = array();
	
	public function __construct()
	{
		$this->LanguageDirectory = dirname(__FILE__) . '/../../lang/';

		$this->systemDateKeys['js_general_date'] = 'mm/dd/yy';
		$this->systemDateKeys['system_datetime'] = 'Y-m-d H:i:s';
		$this->systemDateKeys['url'] = 'Y-m-d';
		$this->systemDateKeys['ical'] = 'Ymd\THis\Z';
		$this->systemDateKeys['system'] = 'Y/m/d';
		$this->systemDateKeys['fullcalendar'] = 'Y-m-d H:i';

		$this->LoadAvailableLanguages();
		$this->LoadLanguageArray();
	}

	private static function Create()
	{
		$resources = new Resources();
		$resources->SetCurrentLanguage($resources->GetLanguageCode());
		$resources->SetStates();
		$resources->SetCountries();
		$resources->SetSpecialties();
		return $resources;
	}

	/**
	 * @return Resources
	 */
	public static function &GetInstance()
	{
		if (is_null(self::$_instance))
		{
			self::$_instance = Resources::Create();
		}

		return self::$_instance;
	}

	public static function SetInstance($instance)
	{
		self::$_instance = $instance;
	}

	/**
	 * @param string $languageCode
	 * @return bool
	 */
	public function SetLanguage($languageCode)
	{
		return $this->SetCurrentLanguage($languageCode);
	}

	/**
	 * @param string $languageCode
	 * @return bool
	 */
	public function IsLanguageSupported($languageCode)
	{
		return !empty($languageCode) &&
			(array_key_exists($languageCode, $this->AvailableLanguages) &&
			file_exists($this->LanguageDirectory . $this->AvailableLanguages[$languageCode]->LanguageFile));
	}

	public function GetString($key, $args = array())
	{
		if (!is_array($args))
		{
			$args = array($args);
		}

		$strings = $this->_lang->Strings;

		$return = '';

		if (!isset($strings[$key]) || empty($strings[$key]))
		{
			return '?';
		}

		if (empty($args))
		{
			return $strings[$key];
		}
		else
		{
			$sprintf_args = '';

			for ($i = 0; $i < count($args); $i++)
			{
				$sprintf_args .= "'" . addslashes($args[$i]) . "',";
			}

			$sprintf_args = substr($sprintf_args, 0, strlen($sprintf_args) - 1);
			$string = addslashes($strings[$key]);
			$return = eval("return sprintf('$string', $sprintf_args);");
			return $return;
		}
	}

	public function GetDateFormat($key)
	{
		if (array_key_exists($key, $this->systemDateKeys))
		{
			return $this->systemDateKeys[$key];
		}

		$dates = $this->_lang->Dates;

		if (!isset($dates[$key]) || empty($dates[$key]))
		{
			return '?';
		}

		return $dates[$key];
	}

	public function GeneralDateFormat()
	{
		return $this->GetDateFormat(ResourceKeys::DATE_GENERAL);
	}

	public function GeneralDateTimeFormat()
	{
		return $this->GetDateFormat(ResourceKeys::DATETIME_GENERAL);
	}

	public function SystemDateTimeFormat()
	{
		return $this->GetDateFormat(ResourceKeys::DATETIME_SYSTEM);
	}

	public function GetDays($key)
	{
		$days = $this->_lang->Days;

		if (!isset($days[$key]) || empty($days[$key]))
		{
			return '?';
		}

		return $days[$key];
	}

	public function GetMonths($key)
	{
		$months = $this->_lang->Months;

		if (!isset($months[$key]) || empty($months[$key]))
		{
			return '?';
		}

		return $months[$key];
	}

	/**
	 * @param $languageCode
	 * @return bool
	 */
	private function SetCurrentLanguage($languageCode)
	{
		$languageCode = strtolower($languageCode);

		if ($languageCode == $this->CurrentLanguage)
		{
			return true;
		}

		if ($this->IsLanguageSupported($languageCode))
		{
			$languageSettings = $this->AvailableLanguages[$languageCode];
			$this->LanguageFile = $languageSettings->LanguageFile;

			require_once($this->LanguageDirectory . $this->LanguageFile);

			$class = $languageSettings->LanguageClass;
			$this->_lang = new $class;
			$this->CurrentLanguage = $languageCode;
			$this->Charset = $this->_lang->Charset;
			$this->HtmlLang = $this->_lang->HtmlLang;

			return true;
		}

		return false;
	}

	private function GetLanguageCode()
	{
		$cookie = ServiceLocator::GetServer()->GetCookie(CookieKeys::LANGUAGE);
		if ($cookie != null)
		{
			return $cookie;
		}
		else
		{
			return Configuration::Instance()->GetKey(ConfigKeys::LANGUAGE);
		}
	}

	private function LoadAvailableLanguages()
	{
		$this->AvailableLanguages = AvailableLanguages::GetAvailableLanguages();
	}

	private function LoadLanguageArray()
	{
		$this->LanguageArray = AvailableLanguages::GetLanguageArray();
	}
	
	private function SetStates()
	{
		$this->States = array(  "ON"=>"Ontario",
								"AB"=>"Alberta",
								"BC"=>"British Columbia",
								"MB"=>"Manitoba",
								"NB"=>"New Brunswick",
								"NF"=>"Newfoundland",
								"NS"=>"Nova Scotia",
								"NT"=>"Northwest Territories",						
								"PE"=>"Prince Edward Island",					
								"QC"=>"Quebec",						
								"SK"=>"Saskatchewan",												
								"YT"=>"Yukon Territory", 				
								'AL'=>"Alabama",
								'AK'=>"Alaska", 
								'AZ'=>"Arizona", 
								'AR'=>"Arkansas", 
								'CA'=>"California", 
								'CO'=>"Colorado", 
								'CT'=>"Connecticut", 
								'DE'=>"Delaware", 
								'DC'=>"District Of Columbia", 
								'FL'=>"Florida", 
								'GA'=>"Georgia", 
								'HI'=>"Hawaii", 
								'ID'=>"Idaho", 
								'IL'=>"Illinois", 
								'IN'=>"Indiana", 
								'IA'=>"Iowa", 
								'KS'=>"Kansas", 
								'KY'=>"Kentucky", 
								'LA'=>"Louisiana", 
								'ME'=>"Maine", 
								'MD'=>"Maryland", 
								'MA'=>"Massachusetts", 
								'MI'=>"Michigan", 
								'MN'=>"Minnesota", 
								'MS'=>"Mississippi", 
								'MO'=>"Missouri", 
								'MT'=>"Montana",
								'NE'=>"Nebraska",
								'NV'=>"Nevada",
								'NH'=>"New Hampshire",
								'NJ'=>"New Jersey",
								'NM'=>"New Mexico",
								'NY'=>"New York",
								'NC'=>"North Carolina",
								'ND'=>"North Dakota",
								'OH'=>"Ohio", 
								'OK'=>"Oklahoma", 
								'OR'=>"Oregon", 
								'PA'=>"Pennsylvania", 
								'RI'=>"Rhode Island", 
								'SC'=>"South Carolina", 
								'SD'=>"South Dakota",
								'TN'=>"Tennessee", 
								'TX'=>"Texas", 
								'UT'=>"Utah", 
								'VT'=>"Vermont", 
								'VA'=>"Virginia", 
								'WA'=>"Washington", 
								'WV'=>"West Virginia", 
								'WI'=>"Wisconsin", 
								'WY'=>"Wyoming");				
	}
	
	private function SetCountries()
	{
		$this->Countries = array(   "CA" => "Canada",
									"US" => "USA",
									"AU" => "Australia",
									"AF" => "Afghanistan",
									"AL" => "Albania",
									"DZ" => "Algeria",
									"AS" => "American Samoa",
									"AD" => "Andorra",
									"AO" => "Angola",
									"AI" => "Anguilla",
									"AQ" => "Antarctica",
									"AG" => "Antigua & Barbuda",
									"AR" => "Argentina",
									"AM" => "Armenia",
									"AW" => "Aruba",
									"AT" => "Austria",
									"AZ" => "Azerbaijan",
									"BS" => "Bahamas",
									"BH" => "Bahrain",
									"BD" => "Bangladesh",
									"BB" => "Barbados",
									"BY" => "Belarus",
									"BE" => "Belgium",
									"BZ" => "Belize",
									"BJ" => "Benin",
									"BM" => "Bermuda",
									"BT" => "Bhutan",
									"BO" => "Bolivia",
									"BA" => "Bosnia/Hercegovina",
									"BW" => "Botswana",
									"BV" => "Bouvet Island",
									"BR" => "Brazil",
									"IO" => "British Indian Ocean Territory",
									"BN" => "Brunei Darussalam",
									"BG" => "Bulgaria",
									"BF" => "Burkina Faso",
									"BI" => "Burundi",
									"KH" => "Cambodia",
									"CM" => "Cameroon",
									"CV" => "Cape Verde",
									"KY" => "Cayman Is",
									"CF" => "Central African Republic",
									"TD" => "Chad",
									"CL" => "Chile",
									"CN" => "China, People's Republic of",
									"CX" => "Christmas Island",
									"CC" => "Cocos Islands",
									"CO" => "Colombia",
									"KM" => "Comoros",
									"CG" => "Congo",
									"CD" => "Congo, Democratic Republic",
									"CK" => "Cook Islands",
									"CR" => "Costa Rica",
									"CI" => "Cote d'Ivoire",
									"HR" => "Croatia",
									"CU" => "Cuba",
									"CY" => "Cyprus",
									"CZ" => "Czech Republic",
									"DK" => "Denmark",
									"DJ" => "Djibouti",
									"DM" => "Dominica",
									"DO" => "Dominican Republic",
									"TP" => "East Timor",
									"EC" => "Ecuador",
									"EG" => "Egypt",
									"SV" => "El Salvador",
									"GQ" => "Equatorial Guinea",
									"ER" => "Eritrea",
									"EE" => "Estonia",
									"ET" => "Ethiopia",
									"FK" => "Falkland Islands",
									"FO" => "Faroe Islands",
									"FJ" => "Fiji",
									"FI" => "Finland",
									"FR" => "France",
									"FX" => "France, Metropolitan",
									"GF" => "French Guiana",
									"PF" => "French Polynesia",
									"TF" => "French South Territories",
									"GA" => "Gabon",
									"GM" => "Gambia",
									"GE" => "Georgia",
									"DE" => "Germany",
									"GH" => "Ghana",
									"GI" => "Gibraltar",
									"GR" => "Greece",
									"GL" => "Greenland",
									"GD" => "Grenada",
									"GP" => "Guadeloupe",
									"GU" => "Guam",
									"GT" => "Guatemala",
									"GN" => "Guinea",
									"GW" => "Guinea-Bissau",
									"GY" => "Guyana",
									"HT" => "Haiti",
									"HM" => "Heard Island And Mcdonald Island",
									"HN" => "Honduras",
									"HK" => "Hong Kong",
									"HU" => "Hungary",
									"IS" => "Iceland",
									"IN" => "India",
									"ID" => "Indonesia",
									"IR" => "Iran",
									"IQ" => "Iraq",
									"IE" => "Ireland",
									"IL" => "Israel",
									"IT" => "Italy",
									"JM" => "Jamaica",
									"JP" => "Japan",
									"JT" => "Johnston Island",
									"JO" => "Jordan",
									"KZ" => "Kazakhstan",
									"KE" => "Kenya",
									"KI" => "Kiribati",
									"KP" => "Korea, Democratic Peoples Republic",
									"KR" => "Korea, Republic of",
									"KW" => "Kuwait",
									"KG" => "Kyrgyzstan",
									"LA" => "Lao People's Democratic Republic",
									"LV" => "Latvia",
									"LB" => "Lebanon",
									"LS" => "Lesotho",
									"LR" => "Liberia",
									"LY" => "Libyan Arab Jamahiriya",
									"LI" => "Liechtenstein",
									"LT" => "Lithuania",
									"LU" => "Luxembourg",
									"MO" => "Macau",
									"MK" => "Macedonia",
									"MG" => "Madagascar",
									"MW" => "Malawi",
									"MY" => "Malaysia",
									"MV" => "Maldives",
									"ML" => "Mali",
									"MT" => "Malta",
									"MH" => "Marshall Islands",
									"MQ" => "Martinique",
									"MR" => "Mauritania",
									"MU" => "Mauritius",
									"YT" => "Mayotte",
									"MX" => "Mexico",
									"FM" => "Micronesia",
									"MD" => "Moldavia",
									"MC" => "Monaco",
									"MN" => "Mongolia",
									"MS" => "Montserrat",
									"MA" => "Morocco",
									"MZ" => "Mozambique",
									"MM" => "Union Of Myanmar",
									"NA" => "Namibia",
									"NR" => "Nauru Island",
									"NP" => "Nepal",
									"NL" => "Netherlands",
									"AN" => "Netherlands Antilles",
									"NC" => "New Caledonia",
									"NZ" => "New Zealand",
									"NI" => "Nicaragua",
									"NE" => "Niger",
									"NG" => "Nigeria",
									"NU" => "Niue",
									"NF" => "Norfolk Island",
									"MP" => "Mariana Islands, Northern",
									"NO" => "Norway",
									"OM" => "Oman",
									"PK" => "Pakistan",
									"PW" => "Palau Islands",
									"PS" => "Palestine",
									"PA" => "Panama",
									"PG" => "Papua New Guinea",
									"PY" => "Paraguay",
									"PE" => "Peru",
									"PH" => "Philippines",
									"PN" => "Pitcairn",
									"PL" => "Poland",
									"PT" => "Portugal",
									"PR" => "Puerto Rico",
									"QA" => "Qatar",
									"RE" => "Reunion Island",
									"RO" => "Romania",
									"RU" => "Russian Federation",
									"RW" => "Rwanda",
									"WS" => "Samoa",
									"SH" => "St Helena",
									"KN" => "St Kitts & Nevis",
									"LC" => "St Lucia",
									"PM" => "St Pierre & Miquelon",
									"VC" => "St Vincent",
									"SM" => "San Marino",
									"ST" => "Sao Tome & Principe",
									"SA" => "Saudi Arabia",
									"SN" => "Senegal",
									"SC" => "Seychelles",
									"SL" => "Sierra Leone",
									"SG" => "Singapore",
									"SK" => "Slovakia",
									"SI" => "Slovenia",
									"SB" => "Solomon Islands",
									"SO" => "Somalia",
									"ZA" => "South Africa",
									"GS" => "South Georgia and South Sandwich",
									"ES" => "Spain",
									"LK" => "Sri Lanka",
									"XX" => "Stateless Persons",
									"SD" => "Sudan",
									"SR" => "Suriname",
									"SJ" => "Svalbard and Jan Mayen",
									"SZ" => "Swaziland",
									"SE" => "Sweden",
									"CH" => "Switzerland",
									"SY" => "Syrian Arab Republic",
									"TW" => "Taiwan, Republic of China",
									"TJ" => "Tajikistan",
									"TZ" => "Tanzania",
									"TH" => "Thailand",
									"TL" => "Timor Leste",
									"TG" => "Togo",
									"TK" => "Tokelau",
									"TO" => "Tonga",
									"TT" => "Trinidad & Tobago",
									"TN" => "Tunisia",
									"TR" => "Turkey",
									"TM" => "Turkmenistan",
									"TC" => "Turks And Caicos Islands",
									"TV" => "Tuvalu",
									"UG" => "Uganda",
									"UA" => "Ukraine",
									"AE" => "United Arab Emirates",
									"GB" => "United Kingdom",
									"UM" => "US Minor Outlying Islands",
									"HV" => "Upper Volta",
									"UY" => "Uruguay",
									"UZ" => "Uzbekistan",
									"VU" => "Vanuatu",
									"VA" => "Vatican City State",
									"VE" => "Venezuela",
									"VN" => "Vietnam",
									"VG" => "Virgin Islands (British)",
									"VI" => "Virgin Islands (US)",
									"WF" => "Wallis And Futuna Islands",
									"EH" => "Western Sahara",
									"YE" => "Yemen Arab Rep.",
									"YD" => "Yemen Democratic",
									"YU" => "Yugoslavia",
									"ZR" => "Zaire",
									"ZM" => "Zambia",
									"ZW" => "Zimbabwe");
		
	}
	
	private function SetSpecialties()
	{
		$this->Specialties = array('Family Medicine',
							'Dentistry',
							'Optometry',
							'Chiropractice',
							'Other',
							'Adolescent Medicine',
							'Anatomical Pathology',
							'Anesthesiology',
							'Bacteriology',
							'Cardiac Surgery',
							'Cardiology',
							'Cardiothoracic Surgery',
							'Cardiovascular and Thoracic Surgery',
							'Clinical Immunology',
							'Clinical Immunology and Allergy',
							'Clinical Pharmacology',
							'Clinical Pharmacology and Toxicology',
							'Community Medicine',
							'Critical Care Medicine',
							'Dermatology',
							'Diagnostic and Therapeutic Radiology',
							'Diagnostic Radiology',
							'Emergency Medicine',
							'Endocrinology and Metabolism',							
							'FCFP - Family Medicine',
							'Forensic Pathology',
							'Gastroenterology',
							'General Pathology',
							'General Surgery',
							'Geriatric Medicine',
							'Hematological Pathology',
							'Hematology',
							'Infectious Diseases',
							'Internal Medicine',
							'Laboratory Medicine',
							'Maternal Fetal Medicine',
							'Medical Biochemistry',
							'Medical Genetics',
							'Medical Microbiology',
							'Medical Oncology',
							'Neonatal-Perinatal Medicine',
							'Nephrology',
							'Neurology',
							'Neurology and Psychiatry',
							'Neuropathology',
							'Neurosurgery',
							'Nuclear Medicine',
							'Obstetrics',
							'Obstetrics and Gynecology',
							'Occupational Medicine',
							'Ophthalmology',
							'Orthopedic Surgery',
							'Otolaryngology - Head and Neck Surgery',
							'Paediatric Cardiology',
							'Paediatric Surgery',
							'Pathology and Bacteriology',
							'Pediatric Emergency Medicine',
							'Pediatric General Surgery',
							'Pediatrics',
							'Physical Medicine and Rehabilitation',
							'Plastic Surgery',
							'Psychiatry',
							'Public Health',
							'Public Health &amp; Preventive Medicine',
							'Radiation Oncology',
							'Respirology',
							'Rheumatology',
							'Thoracic Surgery',
							'Urology',
							'Vascular Surgery');				
	}
	
	public function GetStateName($stateCode)
	{
		return $this->States[$stateCode];
	}

	public function GetCountryName($countryCode)
	{
		return $this->Countries[$countryCode];
	}
	
}
