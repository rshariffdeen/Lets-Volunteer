CREATE DATABASE  IF NOT EXISTS `letsvolunteer` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `letsvolunteer`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: letsvolunteer
-- ------------------------------------------------------
-- Server version	5.6.10-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `causes`
--

DROP TABLE IF EXISTS `causes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `causes` (
  `cause_id` int(11) NOT NULL DEFAULT '0',
  `cause_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cause_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `causes`
--

LOCK TABLES `causes` WRITE;
/*!40000 ALTER TABLE `causes` DISABLE KEYS */;
/*!40000 ALTER TABLE `causes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event` (
  `event_id` int(11) NOT NULL DEFAULT '0',
  `event_name` varchar(30) DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `details` text,
  PRIMARY KEY (`event_id`),
  KEY `c3_idx` (`project_id`),
  CONSTRAINT `c3` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organization`
--

DROP TABLE IF EXISTS `organization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organization` (
  `organization_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `details` text NOT NULL,
  `type` int(11) NOT NULL,
  `rating` float NOT NULL,
  `followers` varchar(1000) NOT NULL,
  `projects` varchar(1000) NOT NULL,
  PRIMARY KEY (`organization_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organization`
--

LOCK TABLES `organization` WRITE;
/*!40000 ALTER TABLE `organization` DISABLE KEYS */;
/*!40000 ALTER TABLE `organization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organization_feedback`
--

DROP TABLE IF EXISTS `organization_feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organization_feedback` (
  `ofeedback_id` int(11) NOT NULL,
  `volunteer_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `feedback` text,
  PRIMARY KEY (`ofeedback_id`),
  KEY `volunteer_id` (`volunteer_id`),
  KEY `organization_feedback_ibfk_2` (`organization_id`),
  KEY `organization_feedback_ibfk_3` (`event_id`),
  CONSTRAINT `organization_feedback_ibfk_2` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`),
  CONSTRAINT `organization_feedback_ibfk_3` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`),
  CONSTRAINT `organization_feedback_ibfk_1` FOREIGN KEY (`volunteer_id`) REFERENCES `volunteer` (`volunteer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organization_feedback`
--

LOCK TABLES `organization_feedback` WRITE;
/*!40000 ALTER TABLE `organization_feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `organization_feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `details` text,
  PRIMARY KEY (`project_id`),
  KEY `c2` (`organization_id`),
  CONSTRAINT `c2` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(30) DEFAULT NULL,
  `skilled_volunteers` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `volunteer_id` int(11) DEFAULT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`email`),
  KEY `c4_idx` (`volunteer_id`),
  KEY `c5_idx` (`organization_id`),
  CONSTRAINT `c4` FOREIGN KEY (`volunteer_id`) REFERENCES `volunteer` (`volunteer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `c5` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `volunteer` (
  `volunteer_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volunteer`
--

LOCK TABLES `volunteer` WRITE;
/*!40000 ALTER TABLE `volunteer` DISABLE KEYS */;
/*!40000 ALTER TABLE `volunteer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volunteer_feedback`
--

DROP TABLE IF EXISTS `volunteer_feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `volunteer_feedback` (
  `vfeedback_id` int(11) NOT NULL,
  `volunteer_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `feedback` text,
  PRIMARY KEY (`vfeedback_id`),
  KEY `c1` (`volunteer_id`),
  KEY `volunteer_feedback_ibfk_2` (`organization_id`),
  KEY `volunteer_feedback_ibfk_3` (`event_id`),
  CONSTRAINT `volunteer_feedback_ibfk_2` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`),
  CONSTRAINT `volunteer_feedback_ibfk_3` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`),
  CONSTRAINT `c1` FOREIGN KEY (`volunteer_id`) REFERENCES `volunteer` (`volunteer_id`),

) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volunteer_feedback`
--

LOCK TABLES `volunteer_feedback` WRITE;
/*!40000 ALTER TABLE `volunteer_feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `volunteer_feedback` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-08  2:56:54
