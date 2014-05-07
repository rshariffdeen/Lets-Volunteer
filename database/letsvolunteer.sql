-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2014 at 09:04 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `letsvolunteer`
--
CREATE DATABASE IF NOT EXISTS `letsvolunteer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `letsvolunteer`;

-- --------------------------------------------------------

--
-- Table structure for table `causes`
--

CREATE TABLE IF NOT EXISTS `causes` (
  `cause_id` int(11) NOT NULL DEFAULT '0',
  `cause_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cause_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL DEFAULT '0',
  `event_name` varchar(30) DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE IF NOT EXISTS `organization` (
  `organization_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `details` text NOT NULL,
  `type` int(11) NOT NULL,
  `rating` float NOT NULL,
  `followers` varchar(1000) NOT NULL,
  `projects` varchar(1000) NOT NULL,
  PRIMARY KEY (`organization_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `organization_feedback`
--

CREATE TABLE IF NOT EXISTS `organization_feedback` (
  `ofeedback_id` int(11) NOT NULL,
  `volunteer_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `feedback` text,
  PRIMARY KEY (`ofeedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `project_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(30) DEFAULT NULL,
  `skilled_volunteers` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `volunteer_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `city` varchar(30) NOT NULL,
  `contact_number` int(10) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `organization` varchar(30) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `causes` varchar(100) NOT NULL,
  `feedbacks` varchar(1000) NOT NULL,
  `project` varchar(1000) NOT NULL,
  `following_organizations` varchar(1000) NOT NULL,
  `rating` float NOT NULL,
  PRIMARY KEY (`volunteer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_feedback`
--

CREATE TABLE IF NOT EXISTS `volunteer_feedback` (
  `vfeedback_id` int(11) NOT NULL,
  `volunteer_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `feedback` text,
  PRIMARY KEY (`vfeedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
