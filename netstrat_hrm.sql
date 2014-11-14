-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2014 at 04:54 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `netstrat_hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=243 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'US', 'United States'),
(2, 'CA', 'Canada'),
(3, 'AF', 'Afghanistan'),
(4, 'AL', 'Albania'),
(5, 'DZ', 'Algeria'),
(6, 'DS', 'American Samoa'),
(7, 'AD', 'Andorra'),
(8, 'AO', 'Angola'),
(9, 'AI', 'Anguilla'),
(10, 'AQ', 'Antarctica'),
(11, 'AG', 'Antigua and/or Barbuda'),
(12, 'AR', 'Argentina'),
(13, 'AM', 'Armenia'),
(14, 'AW', 'Aruba'),
(15, 'AU', 'Australia'),
(16, 'AT', 'Austria'),
(17, 'AZ', 'Azerbaijan'),
(18, 'BS', 'Bahamas'),
(19, 'BH', 'Bahrain'),
(20, 'BD', 'Bangladesh'),
(21, 'BB', 'Barbados'),
(22, 'BY', 'Belarus'),
(23, 'BE', 'Belgium'),
(24, 'BZ', 'Belize'),
(25, 'BJ', 'Benin'),
(26, 'BM', 'Bermuda'),
(27, 'BT', 'Bhutan'),
(28, 'BO', 'Bolivia'),
(29, 'BA', 'Bosnia and Herzegovina'),
(30, 'BW', 'Botswana'),
(31, 'BV', 'Bouvet Island'),
(32, 'BR', 'Brazil'),
(33, 'IO', 'British lndian Ocean Territory'),
(34, 'BN', 'Brunei Darussalam'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'KH', 'Cambodia'),
(39, 'CM', 'Cameroon'),
(40, 'CV', 'Cape Verde'),
(41, 'KY', 'Cayman Islands'),
(42, 'CF', 'Central African Republic'),
(43, 'TD', 'Chad'),
(44, 'CL', 'Chile'),
(45, 'CN', 'China'),
(46, 'CX', 'Christmas Island'),
(47, 'CC', 'Cocos (Keeling) Islands'),
(48, 'CO', 'Colombia'),
(49, 'KM', 'Comoros'),
(50, 'CG', 'Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'ID', 'Indonesia'),
(101, 'IR', 'Iran (Islamic Republic of)'),
(102, 'IQ', 'Iraq'),
(103, 'IE', 'Ireland'),
(104, 'IL', 'Israel'),
(105, 'IT', 'Italy'),
(106, 'CI', 'Ivory Coast'),
(107, 'JM', 'Jamaica'),
(108, 'JP', 'Japan'),
(109, 'JO', 'Jordan'),
(110, 'KZ', 'Kazakhstan'),
(111, 'KE', 'Kenya'),
(112, 'KI', 'Kiribati'),
(113, 'KP', 'Korea, Democratic People''s Republic of'),
(114, 'KR', 'Korea, Republic of'),
(115, 'XK', 'Kosovo'),
(116, 'KW', 'Kuwait'),
(117, 'KG', 'Kyrgyzstan'),
(118, 'LA', 'Lao People''s Democratic Republic'),
(119, 'LV', 'Latvia'),
(120, 'LB', 'Lebanon'),
(121, 'LS', 'Lesotho'),
(122, 'LR', 'Liberia'),
(123, 'LY', 'Libyan Arab Jamahiriya'),
(124, 'LI', 'Liechtenstein'),
(125, 'LT', 'Lithuania'),
(126, 'LU', 'Luxembourg'),
(127, 'MO', 'Macau'),
(128, 'MK', 'Macedonia'),
(129, 'MG', 'Madagascar'),
(130, 'MW', 'Malawi'),
(131, 'MY', 'Malaysia'),
(132, 'MV', 'Maldives'),
(133, 'ML', 'Mali'),
(134, 'MT', 'Malta'),
(135, 'MH', 'Marshall Islands'),
(136, 'MQ', 'Martinique'),
(137, 'MR', 'Mauritania'),
(138, 'MU', 'Mauritius'),
(139, 'TY', 'Mayotte'),
(140, 'MX', 'Mexico'),
(141, 'FM', 'Micronesia, Federated States of'),
(142, 'MD', 'Moldova, Republic of'),
(143, 'MC', 'Monaco'),
(144, 'MN', 'Mongolia'),
(145, 'ME', 'Montenegro'),
(146, 'MS', 'Montserrat'),
(147, 'MA', 'Morocco'),
(148, 'MZ', 'Mozambique'),
(149, 'MM', 'Myanmar'),
(150, 'NA', 'Namibia'),
(151, 'NR', 'Nauru'),
(152, 'NP', 'Nepal'),
(153, 'NL', 'Netherlands'),
(154, 'AN', 'Netherlands Antilles'),
(155, 'NC', 'New Caledonia'),
(156, 'NZ', 'New Zealand'),
(157, 'NI', 'Nicaragua'),
(158, 'NE', 'Niger'),
(159, 'NG', 'Nigeria'),
(160, 'NU', 'Niue'),
(161, 'NF', 'Norfork Island'),
(162, 'MP', 'Northern Mariana Islands'),
(163, 'NO', 'Norway'),
(164, 'OM', 'Oman'),
(165, 'PK', 'Pakistan'),
(166, 'PW', 'Palau'),
(167, 'PA', 'Panama'),
(168, 'PG', 'Papua New Guinea'),
(169, 'PY', 'Paraguay'),
(170, 'PE', 'Peru'),
(171, 'PH', 'Philippines'),
(172, 'PN', 'Pitcairn'),
(173, 'PL', 'Poland'),
(174, 'PT', 'Portugal'),
(175, 'PR', 'Puerto Rico'),
(176, 'QA', 'Qatar'),
(177, 'RE', 'Reunion'),
(178, 'RO', 'Romania'),
(179, 'RU', 'Russian Federation'),
(180, 'RW', 'Rwanda'),
(181, 'KN', 'Saint Kitts and Nevis'),
(182, 'LC', 'Saint Lucia'),
(183, 'VC', 'Saint Vincent and the Grenadines'),
(184, 'WS', 'Samoa'),
(185, 'SM', 'San Marino'),
(186, 'ST', 'Sao Tome and Principe'),
(187, 'SA', 'Saudi Arabia'),
(188, 'SN', 'Senegal'),
(189, 'RS', 'Serbia'),
(190, 'SC', 'Seychelles'),
(191, 'SL', 'Sierra Leone'),
(192, 'SG', 'Singapore'),
(193, 'SK', 'Slovakia'),
(194, 'SI', 'Slovenia'),
(195, 'SB', 'Solomon Islands'),
(196, 'SO', 'Somalia'),
(197, 'ZA', 'South Africa'),
(198, 'GS', 'South Georgia South Sandwich Islands'),
(199, 'ES', 'Spain'),
(200, 'LK', 'Sri Lanka'),
(201, 'SH', 'St. Helena'),
(202, 'PM', 'St. Pierre and Miquelon'),
(203, 'SD', 'Sudan'),
(204, 'SR', 'Suriname'),
(205, 'SJ', 'Svalbarn and Jan Mayen Islands'),
(206, 'SZ', 'Swaziland'),
(207, 'SE', 'Sweden'),
(208, 'CH', 'Switzerland'),
(209, 'SY', 'Syrian Arab Republic'),
(210, 'TW', 'Taiwan'),
(211, 'TJ', 'Tajikistan'),
(212, 'TZ', 'Tanzania, United Republic of'),
(213, 'TH', 'Thailand'),
(214, 'TG', 'Togo'),
(215, 'TK', 'Tokelau'),
(216, 'TO', 'Tonga'),
(217, 'TT', 'Trinidad and Tobago'),
(218, 'TN', 'Tunisia'),
(219, 'TR', 'Turkey'),
(220, 'TM', 'Turkmenistan'),
(221, 'TC', 'Turks and Caicos Islands'),
(222, 'TV', 'Tuvalu'),
(223, 'UG', 'Uganda'),
(224, 'UA', 'Ukraine'),
(225, 'AE', 'United Arab Emirates'),
(226, 'GB', 'United Kingdom'),
(227, 'UM', 'United States minor outlying islands'),
(228, 'UY', 'Uruguay'),
(229, 'UZ', 'Uzbekistan'),
(230, 'VU', 'Vanuatu'),
(231, 'VA', 'Vatican City State'),
(232, 'VE', 'Venezuela'),
(233, 'VN', 'Vietnam'),
(234, 'VG', 'Virgin Islands (British)'),
(235, 'VI', 'Virgin Islands (U.S.)'),
(236, 'WF', 'Wallis and Futuna Islands'),
(237, 'EH', 'Western Sahara'),
(238, 'YE', 'Yemen'),
(239, 'YU', 'Yugoslavia'),
(240, 'ZR', 'Zaire'),
(241, 'ZM', 'Zambia'),
(242, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `hrm_config`
--

CREATE TABLE IF NOT EXISTS `hrm_config` (
  `key` varchar(200) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_countries`
--

CREATE TABLE IF NOT EXISTS `hrm_countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=240 ;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_employee`
--

CREATE TABLE IF NOT EXISTS `hrm_employee` (
  `emp_number` int(7) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) DEFAULT NULL,
  `emp_lastname` varchar(250) NOT NULL DEFAULT '',
  `emp_firstname` varchar(250) NOT NULL DEFAULT '',
  `emp_middle_name` varchar(250) NOT NULL DEFAULT '',
  `emp_nick_name` varchar(100) DEFAULT '',
  `emp_primary_address` text NOT NULL,
  `emp_primary_city` varchar(200) NOT NULL,
  `emp_primary_state` varchar(200) NOT NULL,
  `emp_primary_country` varchar(200) NOT NULL,
  `emp_primary_pincode` int(11) NOT NULL,
  `emp_permanent_address` text NOT NULL,
  `emp_permanent_city` varchar(200) NOT NULL,
  `emp_permanent_state` varchar(200) NOT NULL,
  `emp_permanent_country` varchar(200) NOT NULL,
  `emp_permanent_pincode` int(11) NOT NULL,
  `emp_gender` enum('M','F') DEFAULT NULL,
  `emp_dob` date NOT NULL,
  `emp_marital_status` varchar(20) DEFAULT NULL,
  `emp_dri_lice_num` varchar(100) DEFAULT '',
  `emp_status` int(13) DEFAULT NULL,
  `job_title_code` int(7) DEFAULT NULL,
  `emp_home_phone` int(11) NOT NULL,
  `emp_mobile` int(11) NOT NULL,
  `joined_date` date DEFAULT NULL,
  `emp_additional_notes` text NOT NULL,
  PRIMARY KEY (`emp_number`),
  UNIQUE KEY `emp_number` (`emp_number`),
  KEY `job_title_code` (`job_title_code`),
  KEY `emp_status` (`emp_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=147 ;

--
-- Dumping data for table `hrm_employee`
--

INSERT INTO `hrm_employee` (`emp_number`, `employee_id`, `emp_lastname`, `emp_firstname`, `emp_middle_name`, `emp_nick_name`, `emp_primary_address`, `emp_primary_city`, `emp_primary_state`, `emp_primary_country`, `emp_primary_pincode`, `emp_permanent_address`, `emp_permanent_city`, `emp_permanent_state`, `emp_permanent_country`, `emp_permanent_pincode`, `emp_gender`, `emp_dob`, `emp_marital_status`, `emp_dri_lice_num`, `emp_status`, `job_title_code`, `emp_home_phone`, `emp_mobile`, `joined_date`, `emp_additional_notes`) VALUES
(141, NULL, 'naeel', 'nabeel', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', NULL, NULL, 0, 0, NULL, ''),
(142, NULL, 'naeel', 'nabeel', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', NULL, NULL, 0, 0, NULL, ''),
(143, NULL, 'ba', 'nabee', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', NULL, NULL, 0, 0, NULL, ''),
(144, NULL, 'ba', 'nabee', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', NULL, NULL, 0, 0, NULL, ''),
(145, NULL, 's', 'suresh', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', NULL, NULL, 0, 0, NULL, ''),
(146, NULL, 'sudhakar', 'sajith', 'su', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', NULL, NULL, 0, 0, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `hrm_emp_basicsalary`
--

CREATE TABLE IF NOT EXISTS `hrm_emp_basicsalary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_number` int(7) NOT NULL DEFAULT '0',
  `sal_grd_code` int(11) DEFAULT NULL,
  `currency_id` varchar(6) NOT NULL DEFAULT '',
  `ebsal_basic_salary` varchar(100) DEFAULT NULL,
  `payperiod_code` varchar(13) DEFAULT NULL,
  `salary_component` varchar(100) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sal_grd_code` (`sal_grd_code`),
  KEY `currency_id` (`currency_id`),
  KEY `emp_number` (`emp_number`),
  KEY `payperiod_code` (`payperiod_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_emp_children`
--

CREATE TABLE IF NOT EXISTS `hrm_emp_children` (
  `emp_number` int(7) NOT NULL DEFAULT '0',
  `ec_seqno` decimal(2,0) NOT NULL DEFAULT '0',
  `ec_name` varchar(100) DEFAULT '',
  `ec_date_of_birth` date DEFAULT NULL,
  PRIMARY KEY (`emp_number`,`ec_seqno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_emp_emergency_contacts`
--

CREATE TABLE IF NOT EXISTS `hrm_emp_emergency_contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_number` int(11) NOT NULL,
  `eec_seqno` decimal(11,0) NOT NULL,
  `eec_name` varchar(100) NOT NULL,
  `eec_address` text NOT NULL,
  `eec_city` varchar(200) NOT NULL,
  `eec_state` varchar(200) NOT NULL,
  `eec_pincode` varchar(20) NOT NULL,
  `eec_country` varchar(200) NOT NULL,
  `eec_relationship` varchar(100) DEFAULT '',
  `eec_home_no` varchar(100) DEFAULT '',
  `eec_mobile_no` varchar(100) DEFAULT '',
  `eec_office_no` varchar(100) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `hrm_emp_emergency_contacts`
--

INSERT INTO `hrm_emp_emergency_contacts` (`id`, `emp_number`, `eec_seqno`, `eec_name`, `eec_address`, `eec_city`, `eec_state`, `eec_pincode`, `eec_country`, `eec_relationship`, `eec_home_no`, `eec_mobile_no`, `eec_office_no`) VALUES
(1, 0, 0, 'nabeelichur', '', 'trichur', '43', '232323', '1', 'brother', '2331231312', '8945334599', ''),
(2, 0, 0, 'unnikrishnan', 'sopana\r\naluva', 'kochi', 'asasas', '684102', '81', 'asasas', '04842609016', '7293310700', '23232323'),
(3, 0, 0, 'sreed', 'sopana\r\naluva', 'kochi', '17', '684102', '99', 'mother', '04842609016', '7293310700', '23232323'),
(4, 0, 0, 'sujith', 'asdasdasddsa', 'trichur', '17', '232323', '99', 'akshhkHSK', '2331231312', '8945334599', '2232334444'),
(5, 0, 0, 'jabong', 'asdasdjasdj', 'kochi', '17', '232323', '99', 'faaa', '2331231312', '8945334599', '2232334444'),
(9, 0, 0, 'SUJITH', 'asdsdasdsad', 'kochi', 'ssadasdsa', '232323', '96', 'brother', '222222222', '7338383221', '343434');

-- --------------------------------------------------------

--
-- Table structure for table `hrm_emp_history_of_ealier_pos`
--

CREATE TABLE IF NOT EXISTS `hrm_emp_history_of_ealier_pos` (
  `emp_number` int(7) NOT NULL DEFAULT '0',
  `emp_seqno` decimal(2,0) NOT NULL DEFAULT '0',
  `ehoep_job_title` varchar(100) DEFAULT '',
  `ehoep_years` varchar(100) DEFAULT '',
  PRIMARY KEY (`emp_number`,`emp_seqno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_job_title`
--

CREATE TABLE IF NOT EXISTS `hrm_job_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(250) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hrm_job_title`
--

INSERT INTO `hrm_job_title` (`id`, `job_title`, `status`) VALUES
(1, 'Senior Developer', 'active'),
(2, 'Junior Developer', 'active'),
(3, 'Trainee', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `hrm_language`
--

CREATE TABLE IF NOT EXISTS `hrm_language` (
  `emp_number` int(7) NOT NULL DEFAULT '0',
  `lang_id` int(11) NOT NULL,
  `fluency` smallint(6) NOT NULL DEFAULT '0',
  `competency` smallint(6) DEFAULT '0',
  `comments` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`emp_number`,`lang_id`,`fluency`),
  KEY `lang_id` (`lang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_locations`
--

CREATE TABLE IF NOT EXISTS `hrm_locations` (
  `emp_number` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  PRIMARY KEY (`emp_number`,`location_id`),
  KEY `location_id` (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_login_history`
--

CREATE TABLE IF NOT EXISTS `hrm_login_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `login_time` datetime NOT NULL,
  `ip_address` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `hrm_login_history`
--

INSERT INTO `hrm_login_history` (`id`, `user_id`, `user_name`, `login_time`, `ip_address`) VALUES
(1, 2, 'sujithmu@netstratum.com', '2014-10-30 10:43:32', '127.0.0.1'),
(2, 2, 'sujithmu@netstratum.com', '2014-10-30 11:01:15', '127.0.0.1'),
(3, 2, 'sujithmu@netstratum.com', '2014-10-30 11:03:14', '127.0.0.1'),
(4, 2, 'sujithmu@netstratum.com', '2014-10-30 12:38:40', '127.0.0.1'),
(5, 2, 'sujithmu@netstratum.com', '2014-10-30 12:38:41', '127.0.0.1'),
(6, 2, 'sujithmu@netstratum.com', '2014-10-30 12:52:43', '127.0.0.1'),
(7, 2, 'sujithmu@netstratum.com', '2014-10-30 12:57:38', '127.0.0.1'),
(8, 2, 'sujithmu@netstratum.com', '2014-10-30 13:08:41', '127.0.0.1'),
(9, 2, 'sujithmu@netstratum.com', '2014-10-30 13:08:50', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `hrm_menu_item`
--

CREATE TABLE IF NOT EXISTS `hrm_menu_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(250) NOT NULL,
  `screen_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `order_hint` int(11) NOT NULL,
  `url_extras` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hrm_menu_item`
--

INSERT INTO `hrm_menu_item` (`id`, `menu_title`, `screen_id`, `parent_id`, `level`, `order_hint`, `url_extras`, `status`) VALUES
(1, 'Admin', 1, 0, 0, 1, '#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hrm_module`
--

CREATE TABLE IF NOT EXISTS `hrm_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_screen`
--

CREATE TABLE IF NOT EXISTS `hrm_screen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `module_id` int(11) NOT NULL,
  `action_url` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_skills`
--

CREATE TABLE IF NOT EXISTS `hrm_skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(200) NOT NULL,
  `active` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hrm_skills`
--

INSERT INTO `hrm_skills` (`id`, `skill_name`, `active`) VALUES
(1, 'Erlang', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `hrm_user_education`
--

CREATE TABLE IF NOT EXISTS `hrm_user_education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `education_name` varchar(200) NOT NULL,
  `active` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_user_group_screen`
--

CREATE TABLE IF NOT EXISTS `hrm_user_group_screen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_section_id` int(11) NOT NULL,
  `screen_id` int(11) NOT NULL,
  `permission` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_user_master`
--

CREATE TABLE IF NOT EXISTS `hrm_user_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role_id` int(11) NOT NULL,
  `emp_number` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `modified_user_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `hrm_user_master`
--

INSERT INTO `hrm_user_master` (`id`, `user_role_id`, `emp_number`, `user_name`, `user_password`, `deleted`, `status`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`) VALUES
(103, 2, 0, 'nabeel@gmail.com', 'nabeel', 0, 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(104, 2, 0, 'nabeel@gmail.com', 'nabeel', 0, 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(105, 2, 0, 'bana@gmil.cm', 'nabeel', 0, 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(106, 2, 0, 'bana@gmil.cm', 'nabeel', 0, 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(107, 3, 0, 'suresh@gmail.com', 'suresh', 0, 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(108, 1, 0, 'sajith@gmail.com', 'sajith', 0, 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hrm_user_page_sections`
--

CREATE TABLE IF NOT EXISTS `hrm_user_page_sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `can_read` enum('0','1') NOT NULL DEFAULT '0',
  `can_write` enum('0','1') NOT NULL DEFAULT '0',
  `can_update` enum('0','1') NOT NULL DEFAULT '0',
  `can_delete` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_user_role`
--

CREATE TABLE IF NOT EXISTS `hrm_user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `display_name` varchar(100) NOT NULL,
  `is_assignable` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hrm_user_role`
--

INSERT INTO `hrm_user_role` (`id`, `name`, `display_name`, `is_assignable`) VALUES
(1, 'user_admin', 'Administrator', '1'),
(2, 'user_hr', 'HR Manager', '1'),
(3, 'user_employee', 'Employee', '1');

-- --------------------------------------------------------

--
-- Table structure for table `hrm_user_role_group`
--

CREATE TABLE IF NOT EXISTS `hrm_user_role_group` (
  `id` int(11) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `data_group_id` int(11) NOT NULL,
  `can_read` enum('0','1') NOT NULL DEFAULT '0',
  `can_create` enum('0','1') NOT NULL DEFAULT '0',
  `can_update` enum('0','1') NOT NULL DEFAULT '0',
  `can_delete` enum('0','1') NOT NULL DEFAULT '0',
  `self` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_user_role_screen`
--

CREATE TABLE IF NOT EXISTS `hrm_user_role_screen` (
  `id` bigint(20) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `screen_id` int(11) NOT NULL,
  `can_read` enum('0','1') NOT NULL DEFAULT '0',
  `can_create` enum('0','1') NOT NULL DEFAULT '0',
  `can_update` enum('0','1') NOT NULL DEFAULT '0',
  `can_delete` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_user_skills`
--

CREATE TABLE IF NOT EXISTS `hrm_user_skills` (
  `emp_number` int(7) NOT NULL DEFAULT '0',
  `skill_id` int(11) NOT NULL,
  `years_of_exp` decimal(2,0) DEFAULT NULL,
  `comments` text NOT NULL,
  KEY `emp_number` (`emp_number`),
  KEY `skill_id` (`skill_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_work_experience`
--

CREATE TABLE IF NOT EXISTS `hrm_work_experience` (
  `emp_number` int(7) NOT NULL DEFAULT '0',
  `exp_seqno` decimal(10,0) NOT NULL DEFAULT '0',
  `exp_employer` varchar(100) DEFAULT NULL,
  `exp_jobtitle` varchar(120) DEFAULT NULL,
  `exp_from_date` datetime DEFAULT NULL,
  `exp_to_date` datetime DEFAULT NULL,
  `exp_comments` varchar(200) DEFAULT NULL,
  `exp_internal` int(1) DEFAULT NULL,
  PRIMARY KEY (`emp_number`,`exp_seqno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state_list`
--

CREATE TABLE IF NOT EXISTS `state_list` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `state` varchar(50) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `state_list`
--

INSERT INTO `state_list` (`id`, `state`, `country_id`) VALUES
(1, 'ANDAMAN AND NICOBAR ISLANDS', 99),
(2, 'ANDHRA PRADESH', 99),
(3, 'ARUNACHAL PRADESH', 99),
(4, 'ASSAM', 99),
(5, 'BIHAR', 99),
(6, 'CHATTISGARH', 99),
(7, 'CHANDIGARH', 99),
(8, 'DAMAN AND DIU', 99),
(9, 'DELHI', 99),
(10, 'DADRA AND NAGAR HAVELI', 99),
(11, 'GOA', 99),
(12, 'GUJARAT', 99),
(13, 'HIMACHAL PRADESH', 99),
(14, 'HARYANA', 99),
(15, 'JAMMU AND KASHMIR', 99),
(16, 'JHARKHAND', 99),
(17, 'KERALA', 99),
(18, 'KARNATAKA', 99),
(19, 'LAKSHADWEEP', 99),
(20, 'MEGHALAYA', 99),
(21, 'MAHARASHTRA', 99),
(22, 'MANIPUR', 99),
(23, 'MADHYA PRADESH', 99),
(24, 'MIZORAM', 99),
(25, 'NAGALAND', 99),
(26, 'ORISSA', 99),
(27, 'PUNJAB', 99),
(28, 'PONDICHERRY', 99),
(29, 'RAJASTHAN', 99),
(30, 'SIKKIM', 99),
(31, 'TELANGANA', 99),
(32, 'TAMIL NADU', 99),
(33, 'TRIPURA', 99),
(34, 'UTTARAKHAND', 99),
(35, 'UTTAR PRADESH', 99),
(36, 'WEST BENGAL', 99),
(37, 'Alaska', 1),
(38, 'Alabama', 1),
(39, 'Arkansas', 1),
(40, 'Arizona', 1),
(41, 'California', 1),
(42, 'Colorado', 1),
(43, 'Connecticut', 1),
(44, 'District of Columbia', 1),
(45, 'Delaware', 1),
(46, 'Florida', 1),
(47, 'Georgia', 1),
(48, 'Hawaii', 1),
(49, 'Iowa', 1),
(50, 'Idaho', 1),
(51, 'Illinois', 1),
(52, 'Indiana', 1),
(53, 'Kansas', 1),
(54, 'Kentucky', 1),
(55, 'Louisiana', 1),
(56, 'Massachusetts', 1),
(57, 'Maryland', 1),
(58, 'Maine', 1),
(59, 'Michigan', 1),
(60, 'Minnesota', 1),
(61, 'Missouri', 1),
(62, 'Mississippi', 1),
(63, 'Montana', 1),
(64, 'North Carolina', 1),
(65, 'North Dakota', 1),
(66, 'Nebraska', 1),
(67, 'New Hampshire', 1),
(68, 'New Jersey', 1),
(69, 'New Mexico', 1),
(70, 'Nevada', 1),
(71, 'New York', 1),
(72, 'Ohio', 1),
(73, 'Oklahoma', 1),
(74, 'Oregon', 1),
(75, 'Pennsylvania', 1),
(76, 'Rhode Island', 1),
(77, 'South Carolina', 1),
(78, 'South Dakota', 1),
(79, 'Tennessee', 1),
(80, 'Texas', 1),
(81, 'Utah', 1),
(82, 'Virginia', 1),
(83, 'Vermont', 1),
(84, 'Washington', 1),
(85, 'Wisconsin', 1),
(86, 'West Virginia', 1),
(87, 'Wyoming', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
