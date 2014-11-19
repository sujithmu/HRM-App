-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2014 at 03:59 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hrm_netstratum_sujith`
--

-- --------------------------------------------------------

--
-- Table structure for table `hrm_employee_leave`
--

CREATE TABLE IF NOT EXISTS `hrm_employee_leave` (
  `id` int(11) NOT NULL,
  `emp_number` int(11) NOT NULL,
  `leave_type` int(11) NOT NULL,
  `leave_number` int(11) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_holidays`
--

CREATE TABLE IF NOT EXISTS `hrm_holidays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `holiday_date` datetime NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_leave_types`
--

CREATE TABLE IF NOT EXISTS `hrm_leave_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `leave_max_no` int(11) NOT NULL,
  `emp_appliable` enum('Y','N') NOT NULL DEFAULT 'Y',
  `probation_period` int(11) NOT NULL,
  `custom_leave_type` enum('Y','N') NOT NULL DEFAULT 'N',
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `hrm_leave_types`
--

INSERT INTO `hrm_leave_types` (`id`, `name`, `leave_max_no`, `emp_appliable`, `probation_period`, `custom_leave_type`, `active`) VALUES
(1, 'Casual leave (CL)', 6, 'Y', 6, 'N', 'Y'),
(2, 'Sick Leave (SL)', 6, 'Y', 0, 'N', 'Y'),
(3, 'Privileged Leave (Vacation) (PL)', 12, 'Y', 6, 'N', 'Y'),
(4, 'Maternity Leave (ML)', 0, 'Y', 3, 'N', 'Y'),
(6, 'Paternity Leave ', 0, 'Y', 3, 'N', 'Y'),
(8, 'Compassionate Leave', 0, 'N', 0, 'N', 'Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
