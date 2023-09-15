-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2015 at 09:58 AM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

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
-- Table structure for table `hrm_current_job`
--

CREATE TABLE IF NOT EXISTS `hrm_current_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_number` int(11) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `job_status` varchar(200) NOT NULL,
  `job_category` varchar(200) NOT NULL,
  `join_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hrm_current_job`
--

INSERT INTO `hrm_current_job` (`id`, `emp_number`, `job_title`, `job_status`, `job_category`, `join_date`) VALUES
(1, 20, '1', '2', '4', '2014-12-16'),
(2, 34, '1', '2', '2', '2014-10-02'),
(3, 45, '3', '3', '3', '2014-12-25'),
(4, 41, '1', '2', '3', '2014-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `hrm_dependent`
--

CREATE TABLE IF NOT EXISTS `hrm_dependent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_number` int(11) NOT NULL,
  `dependent_name` varchar(300) NOT NULL,
  `dependent_relation` varchar(250) NOT NULL,
  `dependent_dob` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `hrm_dependent`
--

INSERT INTO `hrm_dependent` (`id`, `emp_number`, `dependent_name`, `dependent_relation`, `dependent_dob`) VALUES
(22, 2, 'dsf', 'mother', '2014-12-25'),
(26, 30, 'abc', 'brother', '2014-12-10'),
(27, 1, 'Father', 'father', '2014-12-16'),
(28, 1, 'padf', 'mother', '2014-12-16'),
(29, 1, 'zczx', 'mother', '2014-12-08'),
(30, 72, 'sdd', 'mother', '2014-12-16');

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
  `emp_status` enum('Y','N') DEFAULT 'Y',
  `job_title_code` int(7) DEFAULT NULL,
  `emp_home_phone` int(11) NOT NULL,
  `emp_mobile` int(11) NOT NULL,
  `joined_date` date DEFAULT NULL,
  `emp_additional_notes` text NOT NULL,
  `emp_deleted` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`emp_number`),
  UNIQUE KEY `emp_number` (`emp_number`),
  KEY `job_title_code` (`job_title_code`),
  KEY `emp_status` (`emp_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `hrm_employee`
--

INSERT INTO `hrm_employee` (`emp_number`, `employee_id`, `emp_lastname`, `emp_firstname`, `emp_middle_name`, `emp_nick_name`, `emp_primary_address`, `emp_primary_city`, `emp_primary_state`, `emp_primary_country`, `emp_primary_pincode`, `emp_permanent_address`, `emp_permanent_city`, `emp_permanent_state`, `emp_permanent_country`, `emp_permanent_pincode`, `emp_gender`, `emp_dob`, `emp_marital_status`, `emp_dri_lice_num`, `emp_status`, `job_title_code`, `emp_home_phone`, `emp_mobile`, `joined_date`, `emp_additional_notes`, `emp_deleted`) VALUES
(1, '', 'Admin', 'HR', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '2014-12-10', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(30, NULL, 'Basheer', 'Nabeel', 'dfdfdfdf', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(31, NULL, 'Vijayanf', 'Vipin', 'sdfdsffdsssds', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(32, NULL, 'Vijaye', 'Vipin', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(33, NULL, 'aj', 'jineed', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(34, NULL, 'Freddy', 'James', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(35, NULL, 'Madhavan', 'Vijesh', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(36, NULL, 'M', 'Tarseem', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(37, NULL, 'bc', 'Employeea', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(38, NULL, 'bc', 'hraa', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(39, NULL, 'Abdu', 'Zebin', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(40, NULL, 'james', 'Jackson', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(41, NULL, 'dsf', 'sdfsd', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(42, NULL, 'sdfsdf', 'sdfsdf', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(43, NULL, 'vijay', 'Ajay', 'vipin', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(44, NULL, 'vijay', 'Ajay', 'vipin', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '0000-00-00', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(45, '00001', 'vijay', 'Ajay', 'vipin', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '1975-12-16', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(46, '00002', 'Aron', 'James', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '1986-12-17', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(47, '00003', 'sdfd', 'dsf', 'sdf', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-24', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(48, '00004', 'sdfsf', 'xvv', '', '', '', '', '', '', 0, '', '', '', '', 0, 'F', '2014-12-25', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(49, '00005', 'sdfdsfsf', 'sdfsdf', '', '', '', '', '', '', 0, '', '', '', '', 0, 'F', '2014-12-25', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(50, '00006', 'sdfdsf', 'sfsdf', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-24', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(51, '00007', 'cbc', 'dsfdf', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-10', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(52, '00008', 'sdsfds', 'sdfsf', 'sdfsfs', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-04', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(53, '00009', 'asda', 'asdsd', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-24', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(54, '00010', 'sdfsf', 'sdfsf', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-02', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(55, '00011', 'sdfdsf', 'sdfsf', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-02', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(56, '00012', 'sdfsf', 'sdfs', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-02', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(57, '00013', 'sdfsdfs', 'sdfsdf', 'sdfs', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '1977-12-07', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(58, '00014', 'sdfsf', 'sdfsdf', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-11', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(59, '00015', 'sdfs', 'sdfsf', 'sdfs', '', '', '', '', '', 0, '', '', '', '', 0, 'F', '2014-12-11', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(60, '00016', 'Jils', 'Jack', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '2008-04-12', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'Y'),
(61, '00017', 'M', 'Suresh', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '1962-12-25', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(62, '00018', 'one', 'Super ', '', '', '', '', '', '', 0, '', '', '', '', 0, NULL, '2014-04-12', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(63, '00019', 'two', 'Super ', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '0000-00-00', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(64, '00020', ' three', 'Super', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-18', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(65, '00021', 'vipin', 'Vipin', 'vijayan', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-09', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(66, '', 'xcvv', 'xvxcv', 'cvcxv', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-17', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(67, '00022', 'sdfsf', 'sdfs', 'sdfsfs', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-17', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(68, '00023', 'sfds', 'ddsf', 'sdfs', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-19', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(69, '00024', 'dfgdfg', 'dfgqdfg', 'fdgdfg', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-03', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(70, '00025', 'Mcnair', 'James', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '1979-12-26', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(71, '00026', 'df', 'sdf', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-10', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(72, '00027', 'sdf', 'fsdf', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-17', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(73, '0028', 'sdfsf', 'sdfsdf', 'sdfdsf', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-23', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(74, '0029', 'sdfsdf', 'sdsf', 'sdfdsf', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-17', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(75, '0030', 'sfdds', 'Jomon', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-18', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(76, '0031', 'MC', 'Jaison', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-17', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(77, '0032', 'ks', 'Vijeshks', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-10', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(78, '0033', 'OV', 'Vipin', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-24', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(79, '0034', 'Vijayan', 'Vipin', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-09', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(80, '0035', 'dfdf', 'sdfdsf', '', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-12-16', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(81, '0036', 'eer', 'Vipin', 'vijay', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-11-12', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(82, '0037', 'U', 'Sujith', 'M', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-11-05', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N'),
(83, '0038', 'U', 'Sujith', 'M', '', '', '', '', '', 0, '', '', '', '', 0, 'M', '2014-11-04', NULL, '', 'Y', NULL, 0, 0, NULL, '', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `hrm_employee_leave`
--

CREATE TABLE IF NOT EXISTS `hrm_employee_leave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_number` int(11) NOT NULL,
  `leave_type` int(11) NOT NULL,
  `leave_number` decimal(10,2) NOT NULL,
  `year` varchar(100) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=570 ;

--
-- Dumping data for table `hrm_employee_leave`
--

INSERT INTO `hrm_employee_leave` (`id`, `emp_number`, `leave_type`, `leave_number`, `year`, `active`) VALUES
(31, 30, 1, 1.00, '2014', 'Y'),
(32, 30, 2, 6.00, '2014', 'Y'),
(33, 30, 3, 1.00, '2014', 'Y'),
(34, 30, 4, 5.00, '2014', 'Y'),
(35, 30, 6, 5.00, '2014', 'Y'),
(36, 30, 8, 3.00, '2014', 'Y'),
(37, 30, 10, 22.00, '2014', 'Y'),
(38, 30, 11, 2.00, '2014', 'Y'),
(39, 30, 19, 3.00, '2014', 'Y'),
(40, 30, 20, 6.00, '2014', 'Y'),
(41, 31, 1, 1.00, '2014', 'Y'),
(42, 31, 2, 6.00, '2014', 'Y'),
(43, 31, 3, 1.00, '2014', 'Y'),
(44, 31, 4, 5.00, '2014', 'Y'),
(45, 31, 6, 5.00, '2014', 'Y'),
(46, 31, 8, 3.00, '2014', 'Y'),
(47, 31, 10, 22.00, '2014', 'Y'),
(48, 31, 11, 2.00, '2014', 'Y'),
(49, 31, 19, 3.00, '2014', 'Y'),
(50, 31, 20, 6.00, '2014', 'Y'),
(51, 32, 1, 1.00, '2014', 'Y'),
(52, 32, 2, 6.00, '2014', 'Y'),
(53, 32, 3, 1.00, '2014', 'Y'),
(54, 32, 4, 5.00, '2014', 'Y'),
(55, 32, 6, 5.00, '2014', 'Y'),
(56, 32, 8, 3.00, '2014', 'Y'),
(57, 32, 10, 22.00, '2014', 'Y'),
(58, 32, 11, 2.00, '2014', 'Y'),
(59, 32, 19, 3.00, '2014', 'Y'),
(60, 32, 20, 6.00, '2014', 'Y'),
(61, 33, 1, 1.00, '2014', 'Y'),
(62, 33, 2, 6.00, '2014', 'Y'),
(63, 33, 3, 1.00, '2014', 'Y'),
(64, 33, 4, 5.00, '2014', 'Y'),
(65, 33, 6, 5.00, '2014', 'Y'),
(66, 33, 8, 3.00, '2014', 'Y'),
(67, 33, 10, 22.00, '2014', 'Y'),
(68, 33, 11, 2.00, '2014', 'Y'),
(69, 33, 19, 3.00, '2014', 'Y'),
(70, 33, 20, 6.00, '2014', 'Y'),
(71, 33, 19, 3.00, '2014', 'Y'),
(72, 34, 1, 1.00, '2014', 'Y'),
(73, 34, 2, 6.00, '2014', 'Y'),
(74, 34, 3, 1.00, '2014', 'Y'),
(75, 34, 4, 5.00, '2014', 'Y'),
(76, 34, 6, 5.00, '2014', 'Y'),
(77, 34, 8, 3.00, '2014', 'Y'),
(78, 34, 10, 22.00, '2014', 'Y'),
(79, 34, 11, 2.00, '2014', 'Y'),
(80, 34, 19, 3.00, '2014', 'Y'),
(81, 34, 20, 6.00, '2014', 'Y'),
(82, 34, 21, 10.00, '2014', 'Y'),
(96, 31, 8, 3.00, '2014', 'Y'),
(97, 31, 9, 3.00, '2014', 'Y'),
(98, 31, 10, 3.00, '2014', 'Y'),
(99, 31, 8, 3.00, '2014', 'Y'),
(100, 35, 1, 1.00, '2014', 'Y'),
(101, 35, 2, 6.00, '2014', 'Y'),
(102, 35, 3, 1.00, '2014', 'Y'),
(103, 35, 4, 5.00, '2014', 'Y'),
(104, 35, 5, 2.00, '2014', 'Y'),
(105, 35, 6, 5.00, '2014', 'Y'),
(106, 35, 7, 3.00, '2014', 'Y'),
(107, 35, 8, 3.00, '2014', 'Y'),
(108, 35, 9, 3.00, '2014', 'Y'),
(109, 35, 10, 3.00, '2014', 'Y'),
(110, 36, 1, 1.00, '2014', 'Y'),
(111, 36, 2, 6.00, '2014', 'Y'),
(112, 36, 3, 1.00, '2014', 'Y'),
(113, 36, 4, 5.00, '2014', 'Y'),
(114, 36, 5, 2.00, '2014', 'Y'),
(115, 36, 6, 5.00, '2014', 'Y'),
(116, 36, 7, 3.00, '2014', 'Y'),
(117, 37, 1, 1.00, '2014', 'Y'),
(118, 37, 2, 6.00, '2014', 'Y'),
(119, 37, 3, 1.00, '2014', 'Y'),
(120, 37, 4, 5.00, '2014', 'Y'),
(121, 37, 5, 2.00, '2014', 'Y'),
(122, 37, 6, 5.00, '2014', 'Y'),
(123, 37, 7, 3.00, '2014', 'Y'),
(131, 39, 1, 1.00, '2014', 'Y'),
(132, 39, 2, 6.00, '2014', 'Y'),
(133, 39, 3, 1.00, '2014', 'Y'),
(134, 39, 4, 5.00, '2014', 'Y'),
(135, 39, 5, 2.00, '2014', 'Y'),
(136, 39, 6, 5.00, '2014', 'Y'),
(137, 39, 7, 3.00, '2014', 'Y'),
(138, 40, 1, 1.00, '2014', 'Y'),
(139, 40, 2, 6.00, '2014', 'Y'),
(140, 40, 3, 13.00, '2014', 'Y'),
(141, 40, 4, 5.00, '2014', 'Y'),
(142, 40, 5, 2.00, '2014', 'Y'),
(143, 40, 6, 5.00, '2014', 'Y'),
(144, 40, 7, 3.00, '2014', 'Y'),
(145, 41, 1, 1.00, '2014', 'Y'),
(146, 41, 2, 6.00, '2014', 'Y'),
(147, 41, 3, 13.00, '2014', 'Y'),
(148, 41, 4, 5.00, '2014', 'Y'),
(149, 41, 5, 2.00, '2014', 'Y'),
(150, 41, 6, 5.00, '2014', 'Y'),
(151, 41, 7, 3.00, '2014', 'Y'),
(159, 45, 1, 0.00, '2014', 'Y'),
(160, 45, 2, 6.00, '2014', 'Y'),
(161, 45, 3, 9.00, '2014', 'Y'),
(162, 45, 4, 5.00, '2014', 'Y'),
(163, 45, 5, 2.00, '2014', 'Y'),
(164, 45, 6, 5.00, '2014', 'Y'),
(165, 45, 7, 3.00, '2014', 'Y'),
(166, 46, 1, 0.00, '2014', 'Y'),
(167, 46, 2, 6.00, '2014', 'Y'),
(168, 46, 3, 9.00, '2014', 'Y'),
(169, 46, 4, 5.00, '2014', 'Y'),
(170, 46, 5, 2.00, '2014', 'Y'),
(171, 46, 6, 5.00, '2014', 'Y'),
(172, 46, 7, 3.00, '2014', 'Y'),
(173, 47, 1, 0.00, '2014', 'Y'),
(174, 47, 2, 6.00, '2014', 'Y'),
(175, 47, 3, 0.00, '2014', 'Y'),
(176, 47, 4, 5.00, '2014', 'Y'),
(177, 47, 5, 2.00, '2014', 'Y'),
(178, 47, 6, 5.00, '2014', 'Y'),
(179, 47, 7, 3.00, '2014', 'Y'),
(180, 48, 1, 0.00, '2014', 'Y'),
(181, 48, 2, 6.00, '2014', 'Y'),
(182, 48, 3, 0.00, '2014', 'Y'),
(183, 48, 4, 5.00, '2014', 'Y'),
(184, 48, 5, 2.00, '2014', 'Y'),
(185, 48, 6, 5.00, '2014', 'Y'),
(186, 48, 7, 3.00, '2014', 'Y'),
(187, 49, 1, 0.00, '2014', 'Y'),
(188, 49, 2, 6.00, '2014', 'Y'),
(189, 49, 3, 0.00, '2014', 'Y'),
(190, 49, 4, 5.00, '2014', 'Y'),
(191, 49, 5, 2.00, '2014', 'Y'),
(192, 49, 6, 5.00, '2014', 'Y'),
(193, 49, 7, 3.00, '2014', 'Y'),
(194, 50, 1, 0.00, '2014', 'Y'),
(195, 50, 2, 6.00, '2014', 'Y'),
(196, 50, 3, 0.00, '2014', 'Y'),
(197, 50, 4, 5.00, '2014', 'Y'),
(198, 50, 5, 2.00, '2014', 'Y'),
(199, 50, 6, 5.00, '2014', 'Y'),
(200, 50, 7, 3.00, '2014', 'Y'),
(201, 51, 1, 0.00, '2014', 'Y'),
(202, 51, 2, 6.00, '2014', 'Y'),
(203, 51, 3, 0.00, '2014', 'Y'),
(204, 51, 4, 5.00, '2014', 'Y'),
(205, 51, 5, 2.00, '2014', 'Y'),
(206, 51, 6, 5.00, '2014', 'Y'),
(207, 51, 7, 3.00, '2014', 'Y'),
(208, 52, 1, 0.00, '2014', 'Y'),
(209, 52, 2, 6.00, '2014', 'Y'),
(210, 52, 3, 0.00, '2014', 'Y'),
(211, 52, 4, 5.00, '2014', 'Y'),
(212, 52, 5, 2.00, '2014', 'Y'),
(213, 52, 6, 5.00, '2014', 'Y'),
(214, 52, 7, 3.00, '2014', 'Y'),
(215, 53, 1, 0.00, '2014', 'Y'),
(216, 53, 2, 6.00, '2014', 'Y'),
(217, 53, 3, 0.00, '2014', 'Y'),
(218, 53, 4, 5.00, '2014', 'Y'),
(219, 53, 5, 2.00, '2014', 'Y'),
(220, 53, 6, 5.00, '2014', 'Y'),
(221, 53, 7, 3.00, '2014', 'Y'),
(222, 54, 1, 0.00, '2014', 'Y'),
(223, 54, 2, 6.00, '2014', 'Y'),
(224, 54, 3, 0.00, '2014', 'Y'),
(225, 54, 4, 5.00, '2014', 'Y'),
(226, 54, 5, 2.00, '2014', 'Y'),
(227, 54, 6, 5.00, '2014', 'Y'),
(228, 54, 7, 3.00, '2014', 'Y'),
(229, 55, 1, 0.00, '2014', 'Y'),
(230, 55, 2, 6.00, '2014', 'Y'),
(231, 55, 3, 0.00, '2014', 'Y'),
(232, 55, 4, 5.00, '2014', 'Y'),
(233, 55, 5, 2.00, '2014', 'Y'),
(234, 55, 6, 5.00, '2014', 'Y'),
(235, 55, 7, 3.00, '2014', 'Y'),
(236, 56, 1, 0.00, '2014', 'Y'),
(237, 56, 2, 6.00, '2014', 'Y'),
(238, 56, 3, 9.00, '2014', 'Y'),
(239, 56, 4, 5.00, '2014', 'Y'),
(240, 56, 5, 2.00, '2014', 'Y'),
(241, 56, 6, 5.00, '2014', 'Y'),
(242, 56, 7, 3.00, '2014', 'Y'),
(243, 57, 1, 0.00, '2014', 'Y'),
(244, 57, 2, 6.00, '2014', 'Y'),
(245, 57, 3, 0.00, '2014', 'Y'),
(246, 57, 5, 2.00, '2014', 'Y'),
(247, 57, 6, 5.00, '2014', 'Y'),
(248, 57, 7, 3.00, '2014', 'Y'),
(249, 58, 1, 0.00, '2014', 'Y'),
(250, 58, 2, 6.00, '2014', 'Y'),
(251, 58, 3, 0.00, '2014', 'Y'),
(252, 58, 5, 2.00, '2014', 'Y'),
(253, 58, 6, 5.00, '2014', 'Y'),
(254, 58, 7, 3.00, '2014', 'Y'),
(255, 59, 1, 0.00, '2014', 'Y'),
(256, 59, 2, 6.00, '2014', 'Y'),
(257, 59, 3, 0.00, '2014', 'Y'),
(258, 59, 4, 5.00, '2014', 'Y'),
(259, 59, 5, 2.00, '2014', 'Y'),
(260, 59, 7, 3.00, '2014', 'Y'),
(261, 60, 1, 0.00, '2014', 'Y'),
(262, 60, 2, 6.00, '2014', 'Y'),
(263, 60, 3, 0.00, '2014', 'Y'),
(264, 60, 5, 2.00, '2014', 'Y'),
(265, 60, 6, 5.00, '2014', 'Y'),
(266, 60, 7, 3.00, '2014', 'Y'),
(322, 38, 1, 3.50, '2014', 'Y'),
(323, 38, 2, 6.00, '2014', 'Y'),
(324, 38, 3, 9.00, '2014', 'Y'),
(325, 38, 5, 2.00, '2014', 'Y'),
(326, 38, 7, 3.00, '2014', 'Y'),
(327, 61, 1, 0.00, '2014', 'Y'),
(328, 61, 2, 6.00, '2014', 'Y'),
(329, 61, 3, 9.00, '2014', 'Y'),
(330, 61, 5, 2.00, '2014', 'Y'),
(331, 61, 6, 5.00, '2014', 'Y'),
(332, 61, 7, 3.00, '2014', 'Y'),
(333, 62, 1, 0.00, '2014', 'Y'),
(334, 62, 2, 6.00, '2014', 'Y'),
(335, 62, 3, 9.00, '2014', 'Y'),
(336, 62, 5, 2.00, '2014', 'Y'),
(337, 62, 6, 5.00, '2014', 'Y'),
(338, 62, 7, 3.00, '2014', 'Y'),
(339, 63, 1, 0.00, '2014', 'Y'),
(340, 63, 2, 6.00, '2014', 'Y'),
(341, 63, 3, 9.00, '2014', 'Y'),
(342, 63, 5, 2.00, '2014', 'Y'),
(343, 63, 6, 5.00, '2014', 'Y'),
(344, 63, 7, 3.00, '2014', 'Y'),
(345, 64, 1, 0.00, '2014', 'Y'),
(346, 64, 2, 6.00, '2014', 'Y'),
(347, 64, 3, 9.00, '2014', 'Y'),
(348, 64, 5, 2.00, '2014', 'Y'),
(349, 64, 6, 5.00, '2014', 'Y'),
(350, 64, 7, 3.00, '2014', 'Y'),
(351, 65, 1, 0.50, '2014', 'Y'),
(352, 65, 2, 6.00, '2014', 'Y'),
(353, 65, 3, 9.00, '2014', 'Y'),
(354, 65, 5, 2.00, '2014', 'Y'),
(355, 65, 6, 5.00, '2014', 'Y'),
(356, 65, 7, 3.00, '2014', 'Y'),
(357, 65, 8, 0.00, '2014', 'Y'),
(358, 66, 1, 0.50, '2014', 'Y'),
(359, 66, 2, 6.00, '2014', 'Y'),
(360, 66, 3, 9.00, '2014', 'Y'),
(361, 66, 5, 2.00, '2014', 'Y'),
(362, 66, 6, 5.00, '2014', 'Y'),
(363, 66, 7, 3.00, '2014', 'Y'),
(364, 66, 8, 0.00, '2014', 'Y'),
(365, 67, 1, 0.50, '2014', 'Y'),
(366, 67, 2, 6.00, '2014', 'Y'),
(367, 67, 3, 9.00, '2014', 'Y'),
(368, 67, 5, 2.00, '2014', 'Y'),
(369, 67, 6, 5.00, '2014', 'Y'),
(370, 67, 7, 3.00, '2014', 'Y'),
(371, 67, 8, 0.00, '2014', 'Y'),
(372, 68, 1, 0.50, '2014', 'Y'),
(373, 68, 2, 6.00, '2014', 'Y'),
(374, 68, 3, 9.00, '2014', 'Y'),
(375, 68, 5, 2.00, '2014', 'Y'),
(376, 68, 6, 5.00, '2014', 'Y'),
(377, 68, 7, 3.00, '2014', 'Y'),
(378, 68, 8, 0.00, '2014', 'Y'),
(379, 69, 1, 0.50, '2014', 'Y'),
(380, 69, 2, 6.00, '2014', 'Y'),
(381, 69, 3, 9.00, '2014', 'Y'),
(382, 69, 5, 2.00, '2014', 'Y'),
(383, 69, 6, 5.00, '2014', 'Y'),
(384, 69, 7, 3.00, '2014', 'Y'),
(385, 69, 8, 0.00, '2014', 'Y'),
(386, 61, 13, 4.00, '', 'Y'),
(387, 61, 14, 4.00, '', 'Y'),
(388, 61, 11, 3.00, '', 'Y'),
(389, 61, 14, 4.00, '', 'Y'),
(390, 61, 14, 4.00, '', 'Y'),
(391, 70, 1, 0.50, '2014', 'Y'),
(392, 70, 2, 6.00, '2014', 'Y'),
(393, 70, 3, 9.00, '2014', 'Y'),
(394, 70, 5, 2.00, '2014', 'Y'),
(395, 70, 6, 5.00, '2014', 'Y'),
(396, 70, 7, 3.00, '2014', 'Y'),
(397, 70, 8, 0.00, '2014', 'Y'),
(398, 71, 1, 0.50, '2014', 'Y'),
(399, 71, 2, 6.00, '2014', 'Y'),
(400, 71, 3, 9.00, '2014', 'Y'),
(401, 71, 5, 2.00, '2014', 'Y'),
(402, 71, 6, 5.00, '2014', 'Y'),
(403, 71, 7, 3.00, '2014', 'Y'),
(404, 71, 8, 0.00, '2014', 'Y'),
(412, 73, 1, 0.50, '2014', 'Y'),
(413, 73, 2, 6.00, '2014', 'Y'),
(414, 73, 3, 9.00, '2014', 'Y'),
(415, 73, 5, 2.00, '2014', 'Y'),
(416, 73, 6, 5.00, '2014', 'Y'),
(417, 73, 7, 3.00, '2014', 'Y'),
(418, 73, 8, 0.00, '2014', 'Y'),
(419, 74, 1, 0.50, '2014', 'Y'),
(420, 74, 2, 6.00, '2014', 'Y'),
(421, 74, 3, 9.00, '2014', 'Y'),
(422, 74, 5, 2.00, '2014', 'Y'),
(423, 74, 6, 5.00, '2014', 'Y'),
(424, 74, 7, 3.00, '2014', 'Y'),
(425, 74, 8, 0.00, '2014', 'Y'),
(426, 75, 1, 0.50, '2014', 'Y'),
(427, 75, 2, 6.00, '2014', 'Y'),
(428, 75, 3, 9.00, '2014', 'Y'),
(429, 75, 5, 2.00, '2014', 'Y'),
(430, 75, 6, 5.00, '2014', 'Y'),
(431, 75, 7, 3.00, '2014', 'Y'),
(432, 75, 8, 0.00, '2014', 'Y'),
(433, 76, 1, 5.50, '2014', 'Y'),
(434, 76, 2, 6.00, '2014', 'Y'),
(435, 76, 3, 9.00, '2014', 'Y'),
(436, 76, 5, 2.00, '2014', 'Y'),
(437, 76, 6, 5.00, '2014', 'Y'),
(438, 76, 7, 3.00, '2014', 'Y'),
(439, 76, 8, 0.00, '2014', 'Y'),
(440, 77, 1, 0.00, '2014', 'Y'),
(441, 77, 2, 6.00, '2014', 'Y'),
(442, 77, 3, 9.00, '2014', 'Y'),
(443, 77, 5, 2.00, '2014', 'Y'),
(444, 77, 6, 5.00, '2014', 'Y'),
(445, 77, 7, 3.00, '2014', 'Y'),
(446, 77, 8, 0.00, '2014', 'Y'),
(447, 78, 1, 0.00, '2014', 'Y'),
(448, 78, 2, 6.00, '2014', 'Y'),
(449, 78, 3, 9.00, '2014', 'Y'),
(450, 78, 5, 2.00, '2014', 'Y'),
(451, 78, 6, 5.00, '2014', 'Y'),
(452, 78, 7, 3.00, '2014', 'Y'),
(453, 78, 8, 0.00, '2014', 'Y'),
(461, 42, 1, 5.50, '2014', 'Y'),
(462, 42, 2, 6.00, '2014', 'Y'),
(463, 42, 3, 9.00, '2014', 'Y'),
(464, 42, 5, 2.00, '2014', 'Y'),
(465, 42, 7, 3.00, '2014', 'Y'),
(466, 42, 8, 0.00, '2014', 'Y'),
(485, 72, 1, 1.00, '2014', 'Y'),
(486, 72, 2, 6.00, '2014', 'Y'),
(487, 72, 3, 9.00, '2014', 'Y'),
(488, 72, 5, 2.00, '2014', 'Y'),
(489, 72, 7, 3.00, '2014', 'Y'),
(490, 72, 8, 0.00, '2014', 'Y'),
(527, 79, 1, 5.50, '2014', 'Y'),
(528, 79, 2, 6.00, '2014', 'Y'),
(529, 79, 3, 9.00, '2014', 'Y'),
(530, 79, 5, 2.00, '2014', 'Y'),
(531, 79, 7, 3.00, '2014', 'Y'),
(532, 79, 8, 0.00, '2014', 'Y'),
(533, 80, 1, 5.50, '2014', 'Y'),
(534, 80, 2, 6.00, '2014', 'Y'),
(535, 80, 3, 9.00, '2014', 'Y'),
(536, 80, 5, 2.00, '2014', 'Y'),
(537, 80, 6, 5.00, '2014', 'Y'),
(538, 80, 7, 3.00, '2014', 'Y'),
(539, 80, 8, 0.00, '2014', 'Y'),
(540, 0, 1, 6.00, '2014', 'Y'),
(541, 0, 2, 6.00, '2014', 'Y'),
(542, 0, 3, 12.00, '2014', 'Y'),
(543, 0, 5, 2.00, '2014', 'Y'),
(544, 0, 7, 3.00, '2014', 'Y'),
(545, 0, 8, 0.00, '2014', 'Y'),
(546, 81, 1, 1.00, '2014', 'Y'),
(547, 81, 2, 6.00, '2014', 'Y'),
(548, 81, 3, 0.00, '2014', 'Y'),
(549, 81, 5, 2.00, '2014', 'Y'),
(550, 81, 6, 5.00, '2014', 'Y'),
(551, 81, 7, 3.00, '2014', 'Y'),
(552, 81, 8, 0.00, '2014', 'Y'),
(553, 82, 1, 1.00, '2014', 'Y'),
(554, 82, 2, 6.00, '2014', 'Y'),
(555, 82, 3, 0.00, '2014', 'Y'),
(556, 82, 5, 2.00, '2014', 'Y'),
(557, 82, 6, 5.00, '2014', 'Y'),
(558, 82, 7, 3.00, '2014', 'Y'),
(559, 82, 8, 0.00, '2014', 'Y'),
(560, 83, 1, 1.00, '2014', 'Y'),
(561, 83, 2, 6.00, '2014', 'Y'),
(562, 83, 3, 0.00, '2014', 'Y'),
(563, 83, 5, 2.00, '2014', 'Y'),
(564, 83, 6, 5.00, '2014', 'Y'),
(565, 83, 7, 3.00, '2014', 'Y'),
(566, 83, 8, 0.00, '2014', 'Y'),
(567, 82, 14, 4.00, '', 'Y'),
(568, 65, 14, 4.00, '', 'Y'),
(569, 62, 14, 4.00, '', 'Y');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `hrm_emp_emergency_contacts`
--

INSERT INTO `hrm_emp_emergency_contacts` (`id`, `emp_number`, `eec_seqno`, `eec_name`, `eec_address`, `eec_city`, `eec_state`, `eec_pincode`, `eec_country`, `eec_relationship`, `eec_home_no`, `eec_mobile_no`, `eec_office_no`) VALUES
(16, 2, 0, 'James', 'Thrissur', 'Thrissur', '17', '343434', '99', 'Friend', '3434443', '3434334343', '343434334'),
(17, 0, 0, 'Jose', 'Pullely House', 'erer', '17', '343434', '99', 'Friend', '45454454', '4545454545', '45454545'),
(18, 20, 0, 'jamess', 'sdfsff', '3434', '17', '343434', '99', 'friend', '3434343', '4545454544', '3354354353'),
(19, 41, 0, 'dfsfdsf', 'sdfsdf', '4545', '17', '545454', '99', 'sdfddfs', '45454545', '4544545454', ''),
(20, 73, 0, 'sdfdsf', 'sdfdsf', 'sdf', '17', '343434', '99', 'sdfdsf', '343434343', '3434343434', ''),
(21, 74, 0, 'vvvvv', 'asdad', 'sdfsf', '17', '233333', '99', 'asda', '343434', '3434333333', ''),
(22, 75, 0, 'sdfdsf', 'sdfsd', '3434', '17', '333333', '99', 'sfsdf', '34343', '3443433333', '');

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
-- Table structure for table `hrm_holidays`
--

CREATE TABLE IF NOT EXISTS `hrm_holidays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `holiday_date` datetime NOT NULL,
  `holiday_type` enum('holiday','optional') NOT NULL DEFAULT 'holiday',
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `hrm_holidays`
--

INSERT INTO `hrm_holidays` (`id`, `name`, `holiday_date`, `holiday_type`, `active`) VALUES
(4, 'Boxing Day', '2014-12-22 00:00:00', 'optional', 'Y'),
(5, 'Christmas', '2014-12-25 00:00:00', 'holiday', 'Y'),
(6, 'sfsdf', '2014-12-12 00:00:00', 'holiday', 'Y'),
(7, 'ddffs', '2014-12-11 00:00:00', 'optional', 'Y'),
(8, 'Republic day', '2015-01-02 00:00:00', 'optional', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `hrm_job_category`
--

CREATE TABLE IF NOT EXISTS `hrm_job_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_category` varchar(300) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hrm_job_category`
--

INSERT INTO `hrm_job_category` (`id`, `job_category`, `status`) VALUES
(1, 'Officials & Managers', 'active'),
(2, 'Product Developement Team', 'active'),
(3, 'Web Team', 'active'),
(4, 'Others', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `hrm_job_title`
--

CREATE TABLE IF NOT EXISTS `hrm_job_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(250) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hrm_job_title`
--

INSERT INTO `hrm_job_title` (`id`, `job_title`, `status`) VALUES
(1, 'Senior Developer', 'active'),
(2, 'Junior Developer', 'active'),
(3, 'Trainee', 'active'),
(4, 'Others', 'active');

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
-- Table structure for table `hrm_leave`
--

CREATE TABLE IF NOT EXISTS `hrm_leave` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `emp_number` int(11) NOT NULL,
  `emp_leave_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_type` enum('fullday','halfday_morning','halfday_evening','custom') NOT NULL DEFAULT 'fullday',
  `end_type` enum('fullday','halfday_morning','halfday_evening','custom') NOT NULL DEFAULT 'fullday',
  `leave_days` decimal(10,2) NOT NULL DEFAULT '0.00',
  `apply_date` datetime NOT NULL,
  `createdby` varchar(200) NOT NULL,
  `leave_comments` text NOT NULL,
  `remarks` text NOT NULL,
  `approval` enum('approve','reject','pending','cancel') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=195 ;

--
-- Dumping data for table `hrm_leave`
--

INSERT INTO `hrm_leave` (`id`, `emp_number`, `emp_leave_id`, `start_date`, `end_date`, `start_type`, `end_type`, `leave_days`, `apply_date`, `createdby`, `leave_comments`, `remarks`, `approval`) VALUES
(154, 31, 32, '2014-12-12', '2014-12-24', 'fullday', 'fullday', 0.00, '2014-12-12 12:32:55', '1', 'Fever', '', 'reject'),
(155, 31, 34, '2014-12-18', '2014-12-25', 'fullday', 'fullday', 0.00, '2014-12-18 10:44:13', '1', 'sdfsdf', '', 'reject'),
(156, 31, 34, '2014-12-18', '2014-12-25', 'fullday', 'fullday', 0.00, '2014-12-18 10:54:16', '1', 'sdfsdf', '', 'reject'),
(157, 31, 34, '2014-12-18', '2014-12-22', 'fullday', 'fullday', 3.00, '2014-12-18 12:34:22', '1', '', '', 'approve'),
(158, 35, 101, '2014-12-18', '2014-12-26', 'halfday_morning', '', 6.50, '2014-12-18 15:59:23', '35', 'as', '', 'reject'),
(159, 35, 101, '2014-12-18', '2014-12-26', 'halfday_morning', '', 6.50, '2014-12-18 16:08:00', '35', 'as', '', 'reject'),
(160, 35, 100, '2014-12-24', '2014-12-25', 'halfday_morning', '', 1.50, '2014-12-18 16:10:10', '35', 'sdfsdf', '', 'reject'),
(161, 35, 100, '2014-12-25', '2014-12-30', 'halfday_morning', '', 2.50, '2014-12-18 16:15:16', '35', 'ssad', '', 'reject'),
(162, 35, 101, '2014-12-19', '2014-12-30', '', 'halfday_morning', 6.50, '2014-12-18 16:16:29', '35', 'sdfss', '', 'reject'),
(163, 35, 101, '2014-12-24', '2014-12-31', 'halfday_morning', '', 4.50, '2014-12-18 16:18:13', '35', 'sddsfs', '', 'reject'),
(164, 35, 107, '2014-12-19', '2014-12-20', '', '', 1.00, '2014-12-18 16:25:35', '35', '', '', 'reject'),
(165, 36, 111, '2014-12-18', '2014-12-19', '', '', 2.00, '2014-12-18 17:30:55', '36', '', '', 'cancel'),
(166, 37, 118, '2014-12-19', '2014-12-23', '', '', 3.00, '2014-12-18 19:02:08', '37', 'Fever', '', 'approve'),
(167, 38, 32, '2014-12-24', '2014-12-25', 'fullday', 'fullday', 2.00, '2014-12-23 10:32:05', '1', '', '', 'approve'),
(168, 61, 328, '2014-12-24', '2014-12-26', 'halfday_morning', '', 2.50, '2014-12-23 16:24:28', '61', '', '', 'reject'),
(169, 61, 328, '2014-12-26', '2014-12-30', '', '', 2.00, '2014-12-23 16:28:30', '61', '', '', 'reject'),
(170, 61, 328, '2014-12-26', '2014-12-30', '', '', 2.00, '2014-12-23 16:32:30', '61', '', '', 'reject'),
(171, 61, 328, '2014-12-26', '2014-12-30', '', '', 2.00, '2014-12-23 16:32:35', '61', '', '', 'reject'),
(172, 61, 328, '2014-12-25', '2014-12-27', 'fullday', 'fullday', 1.00, '2014-12-24 11:43:53', '61', 'Fever--------------------------\n\n Leave Cancel Comments\n\n sdfdsf', '', 'pending'),
(173, 61, 328, '2014-12-24', '2014-12-24', 'fullday', 'fullday', 1.00, '2014-12-24 11:46:07', '61', ' sddfsf sffdsfs <br /> Leave Applied Reason: Fever', '', 'pending'),
(174, 63, 340, '2014-12-25', '2014-12-30', '', '', 3.00, '2014-12-24 14:33:40', '63', '', '', 'approve'),
(175, 61, 328, '2014-12-30', '2014-12-30', 'fullday', 'fullday', 1.00, '2014-12-24 11:46:07', '61', ' sddfsf sffdsfs <br /> Leave Applied Reason: Fever', '', 'approve'),
(176, 61, 332, '2014-12-12', '2014-12-16', 'fullday', 'fullday', 2.50, '2014-12-10 10:55:01', '1', '34343344 3434334', '', 'approve'),
(177, 61, 332, '2014-12-12', '2014-12-16', 'fullday', 'fullday', 3.00, '2014-12-10 10:55:27', '1', '34343344 3434334', '', 'approve'),
(178, 61, 328, '2014-12-25', '2014-12-29', '', '', 2.00, '2014-12-10 10:57:19', '61', '', '', 'pending'),
(179, 63, 341, '2014-12-10', '2014-12-27', 'fullday', 'fullday', 17.00, '2014-12-11 05:51:31', '1', '', '', 'approve'),
(180, 61, 329, '2014-12-11', '2014-12-26', 'fullday', 'fullday', 9.50, '2014-12-11 10:31:09', '1', 'sdfsdf', '', 'approve'),
(181, 61, 329, '2014-12-11', '2014-12-26', 'fullday', 'fullday', 9.50, '2014-12-11 10:32:40', '1', 'sdfsdf', '', 'approve'),
(182, 61, 329, '2014-12-11', '2014-12-26', 'fullday', 'fullday', 9.50, '2014-12-11 10:32:47', '1', 'sdfsdf', '', 'approve'),
(183, 61, 330, '2014-12-11', '2014-12-26', 'fullday', 'fullday', 9.50, '2014-12-11 10:33:03', '1', 'sdfsdf', '', 'approve'),
(184, 61, 332, '2014-12-11', '2014-12-26', 'fullday', 'fullday', 9.50, '2014-12-11 10:33:12', '1', 'sdfsdf', '', 'approve'),
(185, 61, 327, '2014-12-11', '2014-12-26', 'fullday', 'fullday', 9.50, '2014-12-11 10:33:20', '1', 'sdfsdf', '', 'approve'),
(186, 61, 328, '2014-12-11', '2014-12-13', 'fullday', 'fullday', 1.00, '2014-12-11 10:34:10', '1', 'sdfs', '', 'approve'),
(187, 61, 328, '2014-12-13', '2014-12-14', 'fullday', 'fullday', 0.50, '2014-12-11 10:39:06', '1', '', '', 'approve'),
(188, 61, 328, '2014-12-13', '2014-12-14', 'fullday', 'fullday', 0.50, '2014-12-11 10:39:41', '1', '', '', 'approve'),
(189, 61, 329, '2014-12-19', '2014-12-26', 'fullday', 'fullday', 3.50, '2014-12-11 10:43:52', '1', '', '', 'approve'),
(190, 61, 327, '2014-12-11', '2014-12-12', 'fullday', 'fullday', 1.00, '2014-12-11 10:46:50', '1', '', '', 'approve'),
(191, 61, 327, '2014-12-12', '2014-12-30', 'fullday', 'fullday', 12.00, '2014-12-11 10:47:53', '1', '', '', 'approve'),
(192, 62, 334, '2014-12-25', '2014-12-31', 'halfday_morning', '', 5.50, '2014-12-11 11:29:04', '62', 'sdf sdfds <br /> Leave Applied Reason: ', '', 'cancel'),
(193, 39, 131, '2015-01-02', '2015-01-02', '', '', 1.00, '2015-01-02 13:57:33', '39', '', '', 'pending'),
(194, 39, 132, '2015-01-02', '2015-01-02', '', '', 1.00, '2015-01-02 13:58:03', '39', '', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `hrm_leave_approval`
--

CREATE TABLE IF NOT EXISTS `hrm_leave_approval` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `hrm_leave_id` bigint(20) NOT NULL,
  `remarks` text NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  `approval` enum('pending','reject','approve','') NOT NULL DEFAULT 'pending',
  `approval_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `hrm_leave_approval`
--

INSERT INTO `hrm_leave_approval` (`id`, `hrm_leave_id`, `remarks`, `supervisor_id`, `approval`, `approval_date`) VALUES
(1, 172, '', 64, 'pending', '2014-12-24 00:00:00'),
(2, 173, '', 64, 'pending', '2014-12-24 00:00:00'),
(4, 173, '', 63, 'pending', '2014-12-24 00:00:00'),
(6, 172, 'sdsad ddasd', 63, 'approve', '2014-12-24 16:12:56'),
(7, 174, '', 62, 'approve', '2014-12-24 00:00:00'),
(8, 176, '', 63, 'approve', '2014-12-10 10:12:02'),
(9, 176, '', 64, 'approve', '2014-12-10 10:12:02'),
(10, 177, '', 63, 'approve', '2014-12-10 10:12:27'),
(11, 177, '', 64, 'approve', '2014-12-10 10:12:28'),
(12, 178, '', 63, 'pending', '2014-12-10 00:00:00'),
(13, 178, '', 64, 'pending', '2014-12-10 00:00:00'),
(14, 179, '', 62, 'approve', '2014-12-11 05:12:32'),
(15, 180, '', 63, 'approve', '2014-12-11 10:12:10'),
(16, 180, '', 64, 'approve', '2014-12-11 10:12:10'),
(17, 181, '', 63, 'approve', '2014-12-11 10:12:40'),
(18, 181, '', 64, 'approve', '2014-12-11 10:12:40'),
(19, 182, '', 63, 'approve', '2014-12-11 10:12:48'),
(20, 182, '', 64, 'approve', '2014-12-11 10:12:48'),
(21, 183, '', 63, 'approve', '2014-12-11 10:12:03'),
(22, 183, '', 64, 'approve', '2014-12-11 10:12:03'),
(23, 184, '', 63, 'approve', '2014-12-11 10:12:12'),
(24, 184, '', 64, 'approve', '2014-12-11 10:12:12'),
(25, 185, '', 63, 'approve', '2014-12-11 10:12:20'),
(26, 185, '', 64, 'approve', '2014-12-11 10:12:20'),
(27, 186, '', 63, 'approve', '2014-12-11 10:12:10'),
(28, 186, '', 64, 'approve', '2014-12-11 10:12:10'),
(29, 187, '', 63, 'approve', '2014-12-11 10:12:07'),
(30, 187, '', 64, 'approve', '2014-12-11 10:12:07'),
(31, 188, '', 63, 'approve', '2014-12-11 10:12:42'),
(32, 188, '', 64, 'approve', '2014-12-11 10:12:42'),
(33, 189, '', 63, 'approve', '2014-12-11 10:12:52'),
(34, 189, '', 64, 'approve', '2014-12-11 10:12:53'),
(35, 190, '', 63, 'approve', '2014-12-11 10:12:50'),
(36, 190, '', 64, 'approve', '2014-12-11 10:12:50'),
(37, 191, '', 63, 'approve', '2014-12-11 10:12:54'),
(38, 191, '', 64, 'approve', '2014-12-11 10:12:54');

-- --------------------------------------------------------

--
-- Table structure for table `hrm_leave_days`
--

CREATE TABLE IF NOT EXISTS `hrm_leave_days` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_number` int(11) NOT NULL,
  `week_days` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `hrm_leave_days`
--

INSERT INTO `hrm_leave_days` (`id`, `emp_number`, `week_days`) VALUES
(1, 61, 6),
(2, 61, 5),
(3, 40, 4),
(4, 40, 7),
(5, 38, 3),
(6, 38, 7),
(9, 41, 4),
(10, 41, 6),
(11, 69, 6),
(12, 69, 7),
(13, 70, 6),
(14, 70, 7),
(15, 71, 6),
(16, 71, 7),
(17, 72, 6),
(18, 72, 7),
(19, 73, 6),
(20, 73, 7),
(21, 74, 6),
(22, 74, 7),
(23, 75, 6),
(24, 75, 7),
(25, 76, 6),
(26, 76, 7),
(27, 77, 6),
(28, 77, 7),
(29, 78, 6),
(30, 78, 7),
(31, 79, 6),
(32, 79, 7),
(33, 80, 6),
(34, 80, 7),
(35, 81, 6),
(36, 81, 7),
(37, 82, 6),
(38, 82, 7),
(39, 83, 6),
(40, 83, 7);

-- --------------------------------------------------------

--
-- Table structure for table `hrm_leave_time`
--

CREATE TABLE IF NOT EXISTS `hrm_leave_time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hrm_leave_id` int(11) NOT NULL,
  `start_day_time` varchar(50) NOT NULL,
  `end_day_time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `hrm_leave_time`
--

INSERT INTO `hrm_leave_time` (`id`, `hrm_leave_id`, `start_day_time`, `end_day_time`) VALUES
(9, 1, '9', '18'),
(10, 1, '9', '18'),
(11, 1, '9', '18'),
(12, 149, '9', '18'),
(13, 150, '9', '18'),
(14, 151, '9', '18'),
(15, 152, '9', '18'),
(16, 153, '9', '18'),
(17, 154, '9', '18'),
(18, 155, '9', '18'),
(19, 156, '9', '18'),
(20, 157, '9', '18'),
(21, 158, '9', '18'),
(22, 159, '9', '18'),
(23, 160, '9', '18'),
(24, 161, '9', '18'),
(25, 162, '9', '18'),
(26, 163, '9', '18'),
(27, 164, '9', '18'),
(28, 165, '9', '18'),
(29, 166, '9', '18'),
(30, 167, '9', '18'),
(31, 168, '9', '18'),
(32, 169, '9', '18'),
(33, 170, '9', '18'),
(34, 171, '9', '18'),
(35, 172, '9', '18'),
(36, 173, '9', '18'),
(37, 174, '9', '18'),
(38, 176, '9', '18'),
(39, 177, '9', '18'),
(40, 178, '9', '18'),
(41, 179, '9', '18'),
(42, 180, '9', '18'),
(43, 181, '9', '18'),
(44, 182, '9', '18'),
(45, 183, '9', '18'),
(46, 184, '9', '18'),
(47, 185, '9', '18'),
(48, 186, '9', '18'),
(49, 187, '9', '18'),
(50, 188, '9', '18'),
(51, 189, '9', '18'),
(52, 190, '9', '18'),
(53, 191, '9', '18'),
(54, 192, '9', '18'),
(55, 193, '9', '18'),
(56, 194, '9', '18');

-- --------------------------------------------------------

--
-- Table structure for table `hrm_leave_types`
--

CREATE TABLE IF NOT EXISTS `hrm_leave_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `leave_max_no` decimal(10,2) NOT NULL,
  `emp_appliable` enum('Y','N') NOT NULL DEFAULT 'Y',
  `probation_period` int(11) NOT NULL,
  `custom_leave_type` enum('Y','N') NOT NULL DEFAULT 'N',
  `expiry_date` datetime NOT NULL,
  `year` varchar(100) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `hrm_leave_types`
--

INSERT INTO `hrm_leave_types` (`id`, `name`, `leave_max_no`, `emp_appliable`, `probation_period`, `custom_leave_type`, `expiry_date`, `year`, `active`) VALUES
(1, 'Casual Leave (CL)', 6.00, 'Y', 6, 'N', '0000-00-00 00:00:00', '', 'Y'),
(2, 'Sick Leave (SL)', 6.00, 'Y', 2, 'N', '0000-00-00 00:00:00', '', 'Y'),
(3, 'Privileged Leave (PL)', 12.00, 'Y', 2, 'N', '0000-00-00 00:00:00', '', 'Y'),
(4, 'Maternity Leave (ML)', 5.00, 'N', 1, 'N', '0000-00-00 00:00:00', '', 'Y'),
(5, 'Festival Leave', 2.00, 'Y', 0, 'N', '0000-00-00 00:00:00', '', 'Y'),
(6, 'Paternity Leave', 5.00, 'N', 4, 'N', '0000-00-00 00:00:00', '', 'Y'),
(7, 'Compassionate Leave', 3.00, 'N', 1, 'N', '0000-00-00 00:00:00', '', 'Y'),
(8, 'Loss of Pay (LoP)', 0.00, 'N', 0, 'N', '0000-00-00 00:00:00', '', 'Y'),
(10, 'vxcv', 4.00, 'Y', 2, 'Y', '2014-12-27 00:00:00', '2014', 'Y'),
(11, 'dfdsf', 3.00, 'Y', 5, 'Y', '2014-12-12 00:00:00', '2014', 'Y'),
(12, 'sdfs', 3.00, 'Y', 4, 'Y', '2014-12-12 00:00:00', '2014', 'Y'),
(13, 'ds', 4.00, 'Y', 5, 'Y', '2014-12-13 00:00:00', '2014', 'Y'),
(14, 'dfdg', 4.00, 'Y', 4, 'Y', '2014-12-18 00:00:00', '2014', 'Y');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=268 ;

--
-- Dumping data for table `hrm_login_history`
--

INSERT INTO `hrm_login_history` (`id`, `user_id`, `user_name`, `login_time`, `ip_address`) VALUES
(84, 1, 'admin@netstratum.com', '2014-12-11 16:40:07', '127.0.0.1'),
(85, 2, 'hr@netstratum.com', '2014-12-11 17:02:00', '127.0.0.1'),
(86, 2, 'hr@netstratum.com', '2014-12-11 17:09:40', '127.0.0.1'),
(87, 1, 'admin@netstratum.com', '2014-12-11 17:11:49', '127.0.0.1'),
(88, 1, 'admin@netstratum.com', '2014-12-11 22:02:57', '127.0.0.1'),
(89, 1, 'admin@netstratum.com', '2014-12-11 23:24:59', '127.0.0.1'),
(90, 1, 'admin@netstratum.com', '2014-12-12 11:34:05', '127.0.0.1'),
(91, 31, 'vipin@netstratum.com', '2014-12-12 12:56:17', '127.0.0.1'),
(92, 1, 'admin@netstratum.com', '2014-12-12 12:57:36', '127.0.0.1'),
(93, 31, 'vipin@netstratum.com', '2014-12-12 13:48:08', '127.0.0.1'),
(94, 1, 'admin@netstratum.com', '2014-12-12 13:57:37', '127.0.0.1'),
(95, 31, 'vipin@netstratum.com', '2014-12-12 13:59:07', '127.0.0.1'),
(96, 1, 'admin@netstratum.com', '2014-12-12 14:05:35', '127.0.0.1'),
(97, 31, 'vipin@netstratum.com', '2014-12-12 14:17:19', '127.0.0.1'),
(98, 1, 'admin@netstratum.com', '2014-12-12 14:22:17', '127.0.0.1'),
(99, 31, 'vipin@netstratum.com', '2014-12-12 14:25:53', '127.0.0.1'),
(100, 31, 'vipin@netstratum.com', '2014-12-12 14:26:20', '127.0.0.1'),
(101, 31, 'vipin@netstratum.com', '2014-12-12 14:28:27', '127.0.0.1'),
(102, 31, 'vipin@netstratum.com', '2014-12-12 14:36:41', '127.0.0.1'),
(103, 1, 'admin@netstratum.com', '2014-12-12 14:36:57', '127.0.0.1'),
(104, 31, 'vipin@netstratum.com', '2014-12-12 14:37:30', '127.0.0.1'),
(105, 1, 'admin@netstratum.com', '2014-12-12 14:38:43', '127.0.0.1'),
(106, 31, 'vipin@netstratum.com', '2014-12-12 14:40:21', '127.0.0.1'),
(107, 1, 'admin@netstratum.com', '2014-12-12 14:43:33', '127.0.0.1'),
(108, 31, 'vipin@netstratum.com', '2014-12-12 14:43:59', '127.0.0.1'),
(109, 1, 'admin@netstratum.com', '2014-12-12 14:54:26', '127.0.0.1'),
(110, 1, 'admin@netstratum.com', '2014-12-12 17:58:30', '127.0.0.1'),
(111, 31, 'vipin@netstratum.com', '2014-12-12 18:43:44', '127.0.0.1'),
(112, 1, 'admin@netstratum.com', '2014-12-15 10:41:30', '127.0.0.1'),
(113, 1, 'admin@netstratum.com', '2014-12-15 10:44:13', '127.0.0.1'),
(114, 1, 'admin@netstratum.com', '2014-12-15 11:10:56', '127.0.0.1'),
(115, 31, 'vipin@netstratum.com', '2014-12-15 11:27:54', '127.0.0.1'),
(116, 1, 'admin@netstratum.com', '2014-12-15 12:21:55', '127.0.0.1'),
(117, 1, 'admin@netstratum.com', '2014-12-15 12:39:17', '127.0.0.1'),
(118, 1, 'admin@netstratum.com', '2014-12-15 12:45:22', '127.0.0.1'),
(119, 1, 'admin@netstratum.com', '2014-12-15 12:45:48', '127.0.0.1'),
(120, 1, 'admin@netstratum.com', '2014-12-15 12:48:49', '127.0.0.1'),
(121, 1, 'admin@netstratum.com', '2014-12-15 13:18:40', '127.0.0.1'),
(122, 1, 'admin@netstratum.com', '2014-12-15 13:58:28', '127.0.0.1'),
(123, 35, 'freddy@netstratum.com', '2014-12-15 14:12:14', '127.0.0.1'),
(124, 1, 'admin@netstratum.com', '2014-12-15 14:50:07', '127.0.0.1'),
(125, 35, 'freddy@netstratum.com', '2014-12-15 14:52:07', '127.0.0.1'),
(126, 1, 'admin@netstratum.com', '2014-12-15 15:50:34', '127.0.0.1'),
(127, 35, 'freddy@netstratum.com', '2014-12-15 15:51:36', '127.0.0.1'),
(128, 1, 'admin@netstratum.com', '2014-12-15 16:05:06', '127.0.0.1'),
(129, 35, 'freddy@netstratum.com', '2014-12-15 17:43:36', '127.0.0.1'),
(130, 1, 'admin@netstratum.com', '2014-12-15 17:46:43', '127.0.0.1'),
(131, 1, 'admin@netstratum.com', '2014-12-16 09:54:03', '127.0.0.1'),
(132, 1, 'admin@netstratum.com', '2014-12-16 11:40:04', '127.0.0.1'),
(133, 1, 'admin@netstratum.com', '2014-12-16 23:11:19', '127.0.0.1'),
(134, 1, 'admin@netstratum.com', '2014-12-17 09:23:11', '127.0.0.1'),
(135, 1, 'admin@netstratum.com', '2014-12-17 14:41:57', '127.0.0.1'),
(136, 1, 'admin@netstratum.com', '2014-12-18 04:07:10', '127.0.0.1'),
(137, 1, 'admin@netstratum.com', '2014-12-18 11:28:49', '127.0.0.1'),
(138, 1, 'admin@netstratum.com', '2014-12-18 14:33:18', '127.0.0.1'),
(139, 1, 'admin@netstratum.com', '2014-12-18 15:21:23', '127.0.0.1'),
(140, 36, 'vijesh@netstratum.com', '2014-12-18 15:44:36', '127.0.0.1'),
(141, 1, 'admin@netstratum.com', '2014-12-18 17:28:44', '127.0.0.1'),
(142, 37, 'tarseem@netstratum.com', '2014-12-18 17:29:51', '127.0.0.1'),
(143, 1, 'admin@netstratum.com', '2014-12-18 18:55:50', '127.0.0.1'),
(144, 38, 'employeeaa@netstratum.com', '2014-12-18 18:59:36', '127.0.0.1'),
(145, 39, 'hraa@netstratum.com', '2014-12-18 19:06:53', '127.0.0.1'),
(146, 1, 'admin@netstratum.com', '2014-12-19 09:29:11', '127.0.0.1'),
(147, 1, 'admin@netstratum.com', '2014-12-19 10:07:44', '127.0.0.1'),
(148, 1, 'admin@netstratum.com', '2014-12-19 10:10:25', '127.0.0.1'),
(149, 1, 'admin@netstratum.com', '2014-12-19 10:11:02', '127.0.0.1'),
(150, 1, 'admin@netstratum.com', '2014-12-19 12:59:01', '127.0.0.1'),
(151, 1, 'admin@netstratum.com', '2014-12-19 14:02:32', '127.0.0.1'),
(152, 1, 'admin@netstratum.com', '2014-12-19 15:25:57', '127.0.0.1'),
(153, 1, 'admin@netstratum.com', '2014-12-19 15:35:43', '127.0.0.1'),
(154, 1, 'admin@netstratum.com', '2014-12-19 15:36:15', '127.0.0.1'),
(155, 1, 'admin@netstratum.com', '2014-12-19 15:38:09', '127.0.0.1'),
(156, 1, 'admin@netstratum.com', '2014-12-19 15:38:32', '127.0.0.1'),
(157, 1, 'admin@netstratum.com', '2014-12-19 16:46:49', '127.0.0.1'),
(158, 39, 'hraa@netstratum.com', '2014-12-19 16:47:31', '127.0.0.1'),
(159, 1, 'admin@netstratum.com', '2014-12-19 16:50:47', '127.0.0.1'),
(160, 1, 'admin@netstratum.com', '2014-12-22 05:11:21', '127.0.0.1'),
(161, 1, 'admin@netstratum.com', '2014-12-22 05:11:22', '127.0.0.1'),
(162, 1, 'admin@netstratum.com', '2014-12-22 09:32:35', '127.0.0.1'),
(163, 1, 'admin@netstratum.com', '2014-12-22 11:21:42', '127.0.0.1'),
(164, 44, 'vipinvijay@gmail.ccom', '2014-12-22 11:40:43', '127.0.0.1'),
(165, 1, 'admin@netstratum.com', '2014-12-22 11:58:35', '127.0.0.1'),
(166, 1, 'admin@netstratum.com', '2014-12-22 13:53:06', '127.0.0.1'),
(167, 1, 'admin@netstratum.com', '2014-12-22 17:05:03', '127.0.0.1'),
(168, 1, 'admin@netstratum.com', '2014-12-23 09:47:11', '127.0.0.1'),
(169, 1, 'admin@netstratum.com', '2014-12-23 09:47:14', '127.0.0.1'),
(170, 1, 'admin@netstratum.com', '2014-12-23 12:33:15', '127.0.0.1'),
(171, 1, 'admin@netstratum.com', '2014-12-23 13:12:29', '127.0.0.1'),
(172, 1, 'admin@netstratum.com', '2014-12-23 16:13:14', '127.0.0.1'),
(173, 1, 'admin@netstratum.com', '2014-12-23 16:14:38', '127.0.0.1'),
(174, 60, 'suresh@gmail.com', '2014-12-23 16:16:37', '127.0.0.1'),
(175, 60, 'suresh@gmail.com', '2014-12-24 05:08:04', '127.0.0.1'),
(176, 60, 'suresh@gmail.com', '2014-12-24 10:10:17', '127.0.0.1'),
(177, 1, 'admin@netstratum.com', '2014-12-24 10:11:38', '127.0.0.1'),
(178, 1, 'admin@netstratum.com', '2014-12-24 10:54:33', '127.0.0.1'),
(179, 60, 'suresh@gmail.com', '2014-12-24 11:27:39', '127.0.0.1'),
(180, 1, 'admin@netstratum.com', '2014-12-24 11:28:08', '127.0.0.1'),
(181, 60, 'suresh@gmail.com', '2014-12-24 11:28:42', '127.0.0.1'),
(182, 1, 'admin@netstratum.com', '2014-12-24 11:34:18', '127.0.0.1'),
(183, 1, 'admin@netstratum.com', '2014-12-24 11:40:52', '127.0.0.1'),
(184, 60, 'suresh@gmail.com', '2014-12-24 11:42:13', '127.0.0.1'),
(185, 61, 'super1@gmail.com', '2014-12-24 13:45:59', '127.0.0.1'),
(186, 62, 'super2@gmail.com', '2014-12-24 14:31:46', '127.0.0.1'),
(187, 1, 'admin@netstratum.com', '2014-12-24 14:32:12', '127.0.0.1'),
(188, 62, 'super2@gmail.com', '2014-12-24 14:33:10', '127.0.0.1'),
(189, 61, 'super1@gmail.com', '2014-12-24 14:34:12', '127.0.0.1'),
(190, 1, 'admin@netstratum.com', '2014-12-24 14:36:00', '127.0.0.1'),
(191, 61, 'super1@gmail.com', '2014-12-24 14:38:08', '127.0.0.1'),
(192, 1, 'admin@netstratum.com', '2014-12-24 14:38:46', '127.0.0.1'),
(193, 61, 'super1@gmail.com', '2014-12-24 15:03:59', '127.0.0.1'),
(194, 1, 'admin@netstratum.com', '2014-12-24 15:05:52', '127.0.0.1'),
(195, 62, 'super2@gmail.com', '2014-12-24 15:08:24', '127.0.0.1'),
(196, 1, 'admin@netstratum.com', '2014-12-24 16:17:39', '127.0.0.1'),
(197, 60, 'suresh@gmail.com', '2014-12-25 09:54:27', '127.0.0.1'),
(198, 60, 'suresh@gmail.com', '2015-01-02 11:18:10', '127.0.0.1'),
(199, 60, 'suresh@gmail.com', '2015-01-02 11:18:10', '127.0.0.1'),
(200, 60, 'suresh@gmail.com', '2015-01-02 11:18:10', '127.0.0.1'),
(201, 60, 'suresh@gmail.com', '2014-12-26 11:41:31', '127.0.0.1'),
(202, 60, 'suresh@gmail.com', '2014-12-26 11:53:19', '127.0.0.1'),
(203, 1, 'admin@netstratum.com', '2014-12-26 12:49:33', '127.0.0.1'),
(204, 1, 'admin@netstratum.com', '2014-12-26 14:12:04', '127.0.0.1'),
(205, 1, 'admin@netstratum.com', '2014-12-26 15:14:27', '127.0.0.1'),
(206, 60, 'suresh@gmail.com', '2014-12-26 17:18:15', '127.0.0.1'),
(207, 1, 'admin@netstratum.com', '2014-12-29 05:07:39', '127.0.0.1'),
(208, 1, 'admin@netstratum.com', '2014-12-29 09:33:16', '127.0.0.1'),
(209, 1, 'admin@netstratum.com', '2014-12-29 09:33:16', '127.0.0.1'),
(210, 60, 'suresh@gmail.com', '2014-12-10 10:56:37', '127.0.0.1'),
(211, 1, 'admin@netstratum.com', '2014-12-10 10:59:18', '127.0.0.1'),
(212, 1, 'admin@netstratum.com', '2014-12-10 12:10:13', '127.0.0.1'),
(213, 1, 'admin@netstratum.com', '2014-12-10 14:06:56', '127.0.0.1'),
(214, 1, 'admin@netstratum.com', '2014-12-10 15:22:39', '127.0.0.1'),
(215, 60, 'suresh@gmail.com', '2014-12-10 15:27:26', '127.0.0.1'),
(216, 1, 'admin@netstratum.com', '2014-12-10 16:24:15', '127.0.0.1'),
(217, 60, 'suresh@gmail.com', '2014-12-10 16:27:26', '127.0.0.1'),
(218, 1, 'admin@netstratum.com', '2014-12-10 16:28:02', '127.0.0.1'),
(219, 60, 'suresh@gmail.com', '2014-12-10 16:31:16', '127.0.0.1'),
(220, 1, 'admin@netstratum.com', '2014-12-10 16:31:41', '127.0.0.1'),
(221, 60, 'suresh@gmail.com', '2014-12-10 16:36:16', '127.0.0.1'),
(222, 1, 'admin@netstratum.com', '2014-12-10 16:37:23', '127.0.0.1'),
(223, 60, 'suresh@gmail.com', '2014-12-10 16:37:58', '127.0.0.1'),
(224, 1, 'admin@netstratum.com', '2014-12-10 16:38:33', '127.0.0.1'),
(225, 60, 'suresh@gmail.com', '2014-12-10 16:40:02', '127.0.0.1'),
(226, 1, 'admin@netstratum.com', '2014-12-11 04:41:56', '127.0.0.1'),
(227, 1, 'admin@netstratum.com', '2014-12-11 09:42:22', '127.0.0.1'),
(228, 1, 'admin@netstratum.com', '2014-12-11 10:22:48', '127.0.0.1'),
(229, 61, 'super1@gmail.com', '2014-12-11 11:15:55', '127.0.0.1'),
(230, 1, 'admin@netstratum.com', '2014-12-11 13:26:30', '127.0.0.1'),
(231, 61, 'super1@gmail.com', '2014-12-11 14:17:43', '127.0.0.1'),
(232, 1, 'admin@netstratum.com', '2014-12-11 14:18:29', '127.0.0.1'),
(233, 69, 'james123@gmail.com', '2014-12-11 14:19:41', '127.0.0.1'),
(234, 1, 'admin@netstratum.com', '2014-12-11 15:39:34', '127.0.0.1'),
(235, 1, 'admin@netstratum.com', '2014-12-11 17:11:27', '127.0.0.1'),
(236, 1, 'admin@netstratum.com', '2014-12-12 04:26:35', '127.0.0.1'),
(237, 61, 'super1@gmail.com', '2014-12-12 04:53:04', '127.0.0.1'),
(238, 61, 'super1@gmail.com', '2014-12-12 13:10:19', '127.0.0.1'),
(239, 1, 'admin@netstratum.com', '2014-12-12 15:49:34', '127.0.0.1'),
(240, 1, 'admin@netstratum.com', '2014-12-12 15:52:16', '127.0.0.1'),
(241, 1, 'admin@netstratum.com', '2014-12-31 17:16:51', '127.0.0.1'),
(242, 75, 'james@netstratum.com', '2014-12-31 17:18:09', '127.0.0.1'),
(243, 1, 'admin@netstratum.com', '2014-12-30 17:19:35', '127.0.0.1'),
(244, 76, 'vijeshks@gmail.com', '2014-12-30 17:21:17', '127.0.0.1'),
(245, 1, 'admin@netstratum.com', '2014-12-30 17:30:45', '127.0.0.1'),
(246, 77, 'vipinvijayanov@gmail.com', '2014-12-30 17:32:20', '127.0.0.1'),
(247, 1, 'admin@netstratum.com', '2014-12-31 17:33:27', '127.0.0.1'),
(248, 78, 'sendtovipin@gmail.com', '2014-12-31 17:34:31', '127.0.0.1'),
(249, 1, 'admin@netstratum.com', '2014-12-31 17:36:07', '127.0.0.1'),
(250, 78, 'sendtovipin@gmail.com', '2014-12-31 17:37:37', '127.0.0.1'),
(251, 1, 'admin@netstratum.com', '2014-12-31 18:23:43', '127.0.0.1'),
(252, 79, 'sdfdsf@fsf.com', '2014-12-31 18:24:51', '127.0.0.1'),
(253, 1, 'admin@netstratum.com', '2014-11-01 11:12:14', '127.0.0.1'),
(254, 1, 'admin@netstratum.com', '2014-11-01 14:42:45', '127.0.0.1'),
(255, 1, 'admin@netstratum.com', '2015-01-01 17:23:12', '127.0.0.1'),
(256, 1, 'admin@netstratum.com', '2015-01-02 10:16:06', '127.0.0.1'),
(257, 1, 'admin@netstratum.com', '2015-01-02 11:48:34', '127.0.0.1'),
(258, 1, 'admin@netstratum.com', '2015-01-02 12:54:11', '127.0.0.1'),
(259, 40, 'info.vipinov@gmail.com', '2015-01-02 13:19:02', '127.0.0.1'),
(260, 1, 'admin@netstratum.com', '2015-01-02 14:24:46', '127.0.0.1'),
(261, 1, 'admin@netstratum.com', '2015-01-02 15:14:08', '127.0.0.1'),
(262, 61, 'super1@gmail.com', '2015-01-02 15:38:42', '127.0.0.1'),
(263, 1, 'admin@netstratum.com', '2015-01-02 16:01:15', '127.0.0.1'),
(264, 1, 'admin@netstratum.com', '2015-01-02 16:32:03', '127.0.0.1'),
(265, 1, 'admin@netstratum.com', '2015-01-02 16:32:26', '127.0.0.1'),
(266, 1, 'admin@netstratum.com', '2015-01-02 16:32:43', '127.0.0.1'),
(267, 1, 'admin@netstratum.com', '2015-01-02 16:33:46', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `hrm_mail`
--

CREATE TABLE IF NOT EXISTS `hrm_mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_address` varchar(50) NOT NULL,
  `mail_bcc` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `template_name` varchar(100) NOT NULL,
  `display_name` varchar(100) NOT NULL,
  `mail_content` text NOT NULL,
  `dynamic_variable` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `hrm_mail`
--

INSERT INTO `hrm_mail` (`id`, `from_address`, `mail_bcc`, `subject`, `template_name`, `display_name`, `mail_content`, `dynamic_variable`) VALUES
(1, 'nick007@voicepundit.com', 'isujithmu@gmail.com', 'REGISTRATION MAIL', 'registration_mail', 'Registration Mail', '<p>test</p>\n\n<p>Hai #_FIRSTNAME_# #_LASTNAME_#</p>\n\n<p>YOUR USERNAME IS&nbsp; #_USERNAME_#</p>\n\n<p>PASSWORD IS #_PASSWORD_#</p>\n', '#_FIRSTNAME_#~Employee First Name|#_LASTNAME_#~Employee Last Name|#_USERNAME_#~Employee User Name|#_PASSWORD_#~Employee Password'),
(2, 'vipin@voicepundit.com', 'sujith.sopanam@gmail.com', 'RECOVER PASSWORD', 'forgot_password', 'Forgot Password', '<p>this is forgotpassword.</p>\n\n<p>#_FIRSTNAME_#</p>\n\n<p>USERNAME IS #_USERNAME_#</p>\n\n<p>NEW PASSWORD IS #_PASSWORD_#</p>\n', '#_FIRSTNAME_#~Employee First Name|#_USERNAME_#~Employee User Name|#_PASSWORD_#~Employee Password'),
(4, '#_EMPLOYEE_EMAIL_#', 'admin@netstratum.com', '', 'leave_request_admin_confirm', 'Apply Leave to admin,hr,supervisors', '<p>Hi sir,</p>\n\n<p>&nbsp;</p>\n\n<p>Regards #_FIRSTNAME_#.</p>\n', '#_FIRSTNAME_#~Employee First Name|#_LEAVE_DATE_#~Leave Date|#_DAYS_#~Days|#_LEAVE_TYPE_#~Leave Type|#_EMPLOYEE_EMAIL_#~Employee Email|#_REASON_#~Reason'),
(5, 'hr@netstratum.com', 'admin@netstratum.com', 'ASSIGNED LEAVE', 'leave_assign', 'Assign Leave to Employee', '\r\nHi #_FIRST_NAME_#,\r\n\r\n', '#_FIRSTNAME_#~Employee First Name|#_EXPIRE_DATE_#~Leave Expiration Date|#_DAYS_#~Days|#_LEAVE_TYPE_#~Leave Category|#_EMPLOYEE_EMAIL_#~Employee Email'),
(8, 'hr@netstratum.com', '', '#_FIRST_NAME_# CANCELLED LEAVE', 'leave_cancel_admin', 'Cancel Leave Confirmation to Admin,Hr,Supervisors', '', '#_FIRSTNAME_#~Employee First Name|#_LEAVE_DATE_#~Leave Date|#_DAYS_#~Days|#_LEAVE_TYPE_#~Leave Type|#_EMPLOYEE_EMAIL_#~Employee Email|#_REASON_#~Reason'),
(9, 'hr@netstratum.com', 'admin@netstratum.com', 'LEAVE STATUS', 'leave_reject', 'Leave Reject to Employee', '', '#_FIRSTNAME_#~Employee First Name|#_LEAVE_DATE_#~Leave Date|#_DAYS_#~Days|#_LEAVE_TYPE_#~Leave Type|#_EMPLOYEE_EMAIL_#~Employee Email|#_REMARKS_#~Remarks'),
(11, 'admin@netstratum.com', '', 'YOUR LEAVE HAS BEEN REJECTED', 'leave_reject_super', 'Leave Reject Status to HR/Admin', '', '#_FIRSTNAME_#~Employee First Name|#_LEAVE_DATE_#~Leave Date|#_DAYS_#~Days|#_LEAVE_TYPE_#~Leave Type|#_EMPLOYEE_EMAIL_#~Employee Email|#_REMARKS_#~Remarks'),
(13, 'hr@netstratum.com', '', 'LEAVE APPROVED', 'leave_approve', 'Leave Approval Mail for Employee', '', '#_FIRSTNAME_#~Employee First Name|#_LEAVE_DATE_#~Leave Date|#_DAYS_#~Days|#_LEAVE_TYPE_#~Leave Type|#_EMPLOYEE_EMAIL_#~Employee Email|#_REMARKS_#~Remarks');

-- --------------------------------------------------------

--
-- Table structure for table `hrm_menu_item`
--

CREATE TABLE IF NOT EXISTS `hrm_menu_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_type` enum('top','leave','profile') NOT NULL DEFAULT 'top',
  `menu_title` varchar(250) NOT NULL,
  `role_id` varchar(50) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `order_hint` int(11) NOT NULL,
  `url_extras` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `hrm_menu_item`
--

INSERT INTO `hrm_menu_item` (`id`, `menu_type`, `menu_title`, `role_id`, `parent_id`, `order_hint`, `url_extras`, `status`) VALUES
(1, 'top', 'Admin', '1,2', 0, 1, '#', 1),
(2, 'top', 'Manage Users', '1,2', 1, 1, 'index.php?r=Manageuser/Manage', 1),
(3, 'top', 'Add Users', '1,2', 1, 2, 'index.php?r=Manageuser/View', 1),
(4, 'top', 'Employee Leave', '1,2', 0, 2, '#', 1),
(5, 'top', 'Manage Employee Leave', '1,2', 4, 1, 'index.php?r=Leave/Userleave', 1),
(6, 'top', 'Manage Profile', '3,4,5,6,7', 0, 0, 'index.php?r=Manageuser/View', 1),
(7, 'top', 'Manage Leave', '3,4,5,6,7', 0, 0, '#', 1),
(8, 'profile', 'Profile', '1,2', 0, 1, '#profile', 1),
(9, 'profile', 'Emergency Contact', '1,2', 0, 2, '#econtact', 1),
(10, 'profile', 'Dependency', '1,2', 0, 3, '#dependent', 1),
(11, 'profile', 'Job', '1,2', 0, 4, '#job', 1),
(12, 'profile', 'Report To', '1,2', 0, 5, '#report', 1),
(13, 'profile', 'Profile', '3,4,5,6,7', 0, 1, '#profile', 1),
(14, 'profile', 'Emergency Contact', '3,4,5,6,7', 0, 2, '#econtact', 1),
(15, 'profile', 'Dependency', '3,4,5,6,7', 0, 3, '#dependent', 1),
(16, 'profile', 'Job', '3,4,5,6,7', 0, 4, '#job', 1),
(17, 'profile', 'Report To', '3,4,5,6,7', 0, 5, '#report', 1),
(18, 'leave', 'My Leave Status', '2,3,4,5,6,7', 0, 1, '#myleave', 1),
(19, 'leave', 'Apply Leave', '2,3,4,5,6,7', 0, 2, '#reqleave', 1),
(20, 'leave', 'Subordinate Leave Status', '3,4,5,6,7', 0, 3, '#lreport', 1),
(22, 'leave', 'Assign Leave', '1,2', 0, 5, '#assignleave', 1),
(23, 'leave', 'Leave Types', '1,2', 0, 6, '#leavetypes', 1),
(24, 'leave', 'Custom Leave', '1,2', 0, 7, '#otherleave', 1),
(25, 'top', 'Leave Calendar', '1,2', 4, 2, 'index.php?r=Holiday/HolidayForm', 1),
(26, 'top', 'Manage Leave', '3,4,5,6,7', 7, 1, 'index.php?r=Leave/Userleave', 1),
(27, 'top', 'Leave Calendar', '3,4,5,6,7', 7, 2, 'index.php?r=Holiday/HolidayForm', 1),
(28, 'leave', 'Manage Holiday', '1,2', 0, 8, '#holiday', 1),
(29, 'top', 'My Leave Balance', '3,4,5,6,7', 7, 3, 'index.php?r=Leave/Showmyleavebalance', 1),
(30, 'top', 'Manage Emails', '1,2', 0, 3, 'index.php?r=Manageuser/Mail', 1),
(31, 'top', 'Manage Leave Balance', '1,2', 4, 3, 'index.php?r=Leave/Showleavebalance', 1),
(32, 'leave', 'Employee Leave Status', '1,2', 0, 3, '#lreport', 1);

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
-- Table structure for table `hrm_report_to`
--

CREATE TABLE IF NOT EXISTS `hrm_report_to` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_number` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` enum('supervisor','subordinate') NOT NULL,
  `leave_approval` enum('Y','N') NOT NULL DEFAULT 'N',
  `order_no` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `hrm_report_to`
--

INSERT INTO `hrm_report_to` (`id`, `emp_number`, `user_id`, `user_type`, `leave_approval`, `order_no`) VALUES
(5, 2, 1, 'supervisor', 'Y', 1),
(6, 20, 2, 'supervisor', 'Y', 1),
(7, 30, 32, 'supervisor', 'Y', 1),
(8, 30, 1, 'supervisor', 'Y', 1),
(9, 30, 1, 'supervisor', 'N', 0),
(10, 33, 33, 'supervisor', 'Y', 1),
(11, 31, 32, 'supervisor', 'N', 0),
(12, 31, 32, 'supervisor', 'Y', 4),
(13, 31, 32, 'subordinate', 'N', 4),
(14, 31, 32, 'supervisor', 'Y', 4),
(15, 31, 32, 'supervisor', 'Y', 3),
(16, 31, 30, 'supervisor', 'Y', 3),
(17, 1, 35, 'supervisor', 'Y', 1),
(18, 1, 35, 'supervisor', 'Y', 1),
(34, 61, 62, 'supervisor', 'N', 0),
(35, 62, 61, 'subordinate', 'Y', 0),
(36, 61, 63, 'supervisor', 'Y', 0),
(37, 63, 61, 'subordinate', 'Y', 0),
(38, 61, 64, 'supervisor', 'Y', 0),
(39, 64, 61, 'subordinate', 'Y', 0),
(40, 63, 62, 'supervisor', 'Y', 0),
(41, 62, 63, 'subordinate', 'Y', 0),
(42, 41, 62, 'supervisor', 'N', 0),
(43, 62, 41, 'subordinate', 'N', 0),
(44, 61, 46, 'subordinate', 'N', 0),
(45, 46, 61, 'supervisor', 'N', 0);

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
-- Table structure for table `hrm_user_master`
--

CREATE TABLE IF NOT EXISTS `hrm_user_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role_id` int(11) NOT NULL,
  `emp_number` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `modified_user_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `emp_deleted` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `hrm_user_master`
--

INSERT INTO `hrm_user_master` (`id`, `user_role_id`, `emp_number`, `user_name`, `user_password`, `status`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `emp_deleted`) VALUES
(1, 1, 1, 'admin@netstratum.com', 'afE.Wf6ACyC.k', 'Y', '2014-12-11 00:00:00', '2014-12-12 04:12:29', 1, 1, 'N'),
(30, 2, 30, 'nabeel@netstratum.com', 'afDXZDuOz7OqM', 'N', '2014-12-12 12:12:53', '2014-12-12 18:12:41', 1, 1, 'Y'),
(31, 3, 31, 'vipin@netstratum.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-12 12:12:25', '2014-12-15 11:12:31', 31, 1, 'Y'),
(33, 2, 33, 'jineed@netstratum.com', 'afowoOrdciL7k', 'N', '2014-12-12 18:12:15', '2014-12-12 18:12:43', 1, 1, 'Y'),
(35, 3, 34, 'freddy@netstratum.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-15 14:12:15', '2014-12-15 14:12:15', 1, 1, 'Y'),
(36, 3, 35, 'vijesh@netstratum.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-18 15:12:08', '2014-12-18 15:12:08', 1, 1, 'Y'),
(37, 3, 36, 'tarseem@netstratum.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-18 17:12:24', '2014-12-18 17:12:24', 1, 1, 'Y'),
(38, 3, 37, 'employeeaa@netstratum.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-18 18:12:58', '2014-12-18 18:12:58', 1, 1, 'Y'),
(39, 2, 38, 'hraa@netstratum.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-18 18:12:03', '2014-12-19 17:12:36', 1, 1, 'N'),
(40, 3, 39, 'info.vipinov@gmail.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-19 10:12:39', '2014-12-19 10:12:40', 1, 1, 'Y'),
(41, 3, 40, 'james@nte.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-19 17:12:44', '2014-12-19 17:12:44', 1, 1, 'N'),
(42, 3, 41, 'vipinov@netstratum.in', 'afIQXjgrJ/D/M', 'Y', '2014-12-19 17:12:24', '2014-12-19 17:12:24', 1, 1, 'N'),
(43, 2, 42, 'vipinov@dfdf.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-19 17:12:30', '2014-12-19 17:12:30', 1, 1, 'N'),
(44, 1, 45, 'vipinvijay@gmail.ccom', 'afIQXjgrJ/D/M', 'Y', '2014-12-22 11:12:49', '2014-12-22 11:12:49', 1, 1, 'N'),
(45, 3, 46, 'jamesaron@fg.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-22 11:12:18', '2014-12-22 11:12:18', 1, 1, 'N'),
(46, 3, 47, 'dsdsfdsf@sfsfs.com', 'afiIP2Qn2mWKE', 'Y', '2014-12-22 12:12:11', '2014-12-22 12:12:11', 1, 1, 'Y'),
(47, 3, 48, 'sdfs@sdfsf.com', 'afG/JxFsqHN.6', 'Y', '2014-12-22 12:12:35', '2014-12-22 12:12:35', 1, 1, 'Y'),
(48, 2, 49, 'sdfsfds@fsdf.com', 'afiIP2Qn2mWKE', 'Y', '2014-12-22 12:12:14', '2014-12-22 12:12:14', 1, 1, 'Y'),
(49, 3, 50, 'sdfsfd@sdfsdf.com', 'afiIP2Qn2mWKE', 'Y', '2014-12-22 12:12:03', '2014-12-22 12:12:03', 1, 1, 'Y'),
(50, 3, 51, 'sdfss@sdfd.com', 'afiIP2Qn2mWKE', 'Y', '2014-12-22 12:12:07', '2014-12-22 12:12:07', 1, 1, 'Y'),
(51, 1, 52, 'sdfdsfds@sfdsf.com', 'afiIP2Qn2mWKE', 'Y', '2014-12-22 12:12:24', '2014-12-22 12:12:24', 1, 1, 'Y'),
(52, 1, 53, 'info.vipinvijayan@gmail.com', 'afiIP2Qn2mWKE', 'Y', '2014-12-22 12:12:24', '2014-12-22 12:12:24', 1, 1, 'Y'),
(53, 1, 54, 'sdfsdff@sfsdf.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-22 12:12:23', '2014-12-22 12:12:23', 1, 1, 'Y'),
(54, 3, 55, 'sdfdsfd@fsfdd.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-22 12:12:30', '2014-12-22 12:12:30', 1, 1, 'Y'),
(55, 3, 56, 'sdfdsf@sdfsdf.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-22 12:12:06', '2014-12-22 12:12:06', 1, 1, 'N'),
(56, 3, 57, 'sdfdsfds@sdfdsf.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-22 12:12:52', '2014-12-22 12:12:52', 1, 1, 'Y'),
(57, 3, 58, 'adminsdfdsf@sfsf.com', 'afiIP2Qn2mWKE', 'Y', '2014-12-22 12:12:56', '2014-12-22 12:12:56', 1, 1, 'Y'),
(58, 3, 59, 'sdfsfs@sdfsdf.com', 'afiIP2Qn2mWKE', 'Y', '2014-12-22 12:12:02', '2014-12-22 12:12:02', 1, 1, 'Y'),
(59, 1, 60, 'jacks@gmail.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-22 13:12:46', '2014-12-22 14:12:00', 1, 1, 'Y'),
(60, 3, 61, 'suresh@gmail.com', 'afj/hsyOO5uVo', 'Y', '2014-12-23 16:12:38', '2014-12-10 17:12:00', 60, 1, 'N'),
(61, 3, 62, 'super1@gmail.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-24 11:12:42', '2014-12-24 11:12:17', 1, 1, 'N'),
(62, 3, 63, 'super2@gmail.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-24 11:12:14', '2014-12-24 11:12:14', 1, 1, 'N'),
(63, 3, 64, 'super3@gmail.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-24 11:12:57', '2014-12-24 11:12:57', 1, 1, 'N'),
(64, 1, 65, 'vipin@gmail.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-10 16:12:54', '2014-12-10 16:12:54', 1, 1, 'N'),
(65, 1, 66, 'abc@gmail.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-10 16:12:36', '2014-12-10 16:12:37', 1, 1, 'N'),
(66, 1, 67, 'sdfsf@sdfdfsd.com', 'afiIP2Qn2mWKE', 'Y', '2014-12-10 16:12:10', '2014-12-10 16:12:10', 1, 1, 'N'),
(67, 1, 68, 'fsdf@sfddfd.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-11 04:12:00', '2014-12-11 04:12:00', 1, 1, 'N'),
(68, 1, 69, 'sdfdf@fddsfs.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-11 09:12:55', '2014-12-11 09:12:55', 1, 1, 'N'),
(69, 3, 70, 'james123@gmail.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-11 14:12:20', '2014-12-11 14:12:20', 1, 1, 'N'),
(70, 3, 71, 'abc12345678@gmail.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-12 04:12:37', '2014-12-12 04:12:37', 1, 1, 'N'),
(71, 3, 72, 'admin23@netstratum.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-12 04:12:03', '2014-12-12 04:12:03', 1, 1, 'N'),
(72, 3, 73, 'sdfsdfsdfs@sdfdsf.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-12 15:12:00', '2014-12-12 15:12:00', 1, 1, 'N'),
(73, 3, 74, 'jeeeks@gsd.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-12 15:12:45', '2014-12-12 15:12:45', 1, 1, 'N'),
(74, 3, 75, 'jomon2@gmail.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-12 15:12:31', '2014-12-12 15:12:31', 1, 1, 'N'),
(75, 3, 76, 'james@netstratum.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-31 17:12:43', '2014-12-31 17:12:43', 1, 1, 'N'),
(76, 3, 77, 'vijeshks@gmail.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-30 17:12:38', '2014-12-30 17:12:38', 1, 1, 'N'),
(77, 3, 78, 'vipinvijayanov@gmail.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-30 17:12:54', '2014-12-30 17:12:54', 1, 1, 'N'),
(78, 3, 79, 'sendtovipin@gmail.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-31 17:12:10', '2014-12-31 17:12:10', 1, 1, 'N'),
(79, 3, 80, 'sdfdsf@fsf.com', 'afIQXjgrJ/D/M', 'Y', '2014-12-31 18:12:18', '2014-12-31 18:12:18', 1, 1, 'N'),
(80, 1, 81, 'sdsdffd@dfds.com', 'afIQXjgrJ/D/M', 'Y', '2014-11-01 14:11:31', '2014-11-01 14:11:31', 1, 1, 'N'),
(81, 3, 82, 'sujith.sopanam@gmail.com', 'afIQXjgrJ/D/M', 'Y', '2014-11-01 14:11:46', '2014-11-01 14:11:46', 1, 1, 'N'),
(82, 3, 83, 'isujithmu@gmail.com', 'afIQXjgrJ/D/M', 'Y', '2014-11-01 14:11:01', '2014-11-01 14:11:01', 1, 1, 'N');

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
