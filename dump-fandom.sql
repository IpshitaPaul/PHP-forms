-- MySQL dump 10.13  Distrib 5.6.28, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: trial_fandom
-- ------------------------------------------------------
-- Server version	5.6.28-0ubuntu0.15.04.1

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
-- Table structure for table `hp_all_ans`
--

DROP TABLE IF EXISTS `hp_all_ans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hp_all_ans` (
  `qno` int(11) DEFAULT NULL,
  `op1` varchar(50) DEFAULT NULL,
  `op2` varchar(50) DEFAULT NULL,
  `op3` varchar(50) DEFAULT NULL,
  `op4` varchar(50) DEFAULT NULL,
  `ans` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hp_all_ans`
--

LOCK TABLES `hp_all_ans` WRITE;
/*!40000 ALTER TABLE `hp_all_ans` DISABLE KEYS */;
INSERT INTO `hp_all_ans` VALUES (1,'gryffindor','slytherin','hufflepuff','ravenclaw','ravenclaw'),(2,'usa','australia','india','china','australia'),(3,'sword','diadem','diary','cup','sword');
/*!40000 ALTER TABLE `hp_all_ans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hp_in`
--

DROP TABLE IF EXISTS `hp_in`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hp_in` (
  `qno` int(11) DEFAULT NULL,
  `cor_ans` varchar(50) DEFAULT NULL,
  `in_ans` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hp_in`
--

LOCK TABLES `hp_in` WRITE;
/*!40000 ALTER TABLE `hp_in` DISABLE KEYS */;
INSERT INTO `hp_in` VALUES (1,'ravenclaw',NULL),(2,'australia',NULL),(3,'sword',NULL);
/*!40000 ALTER TABLE `hp_in` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lotr_all_ans`
--

DROP TABLE IF EXISTS `lotr_all_ans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lotr_all_ans` (
  `qno` int(11) DEFAULT NULL,
  `op1` varchar(50) DEFAULT NULL,
  `op2` varchar(50) DEFAULT NULL,
  `op3` varchar(50) DEFAULT NULL,
  `op4` varchar(50) DEFAULT NULL,
  `ans` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lotr_all_ans`
--

LOCK TABLES `lotr_all_ans` WRITE;
/*!40000 ALTER TABLE `lotr_all_ans` DISABLE KEYS */;
INSERT INTO `lotr_all_ans` VALUES (1,'peregrin took','philip took','peregrin brandybuck','peregrin baggins','peregrin took'),(2,'eomer','eowyn','galadriel','gandalf','eowyn'),(3,'7','9','1','3','3');
/*!40000 ALTER TABLE `lotr_all_ans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lotr_in`
--

DROP TABLE IF EXISTS `lotr_in`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lotr_in` (
  `qno` int(11) DEFAULT NULL,
  `cor_ans` varchar(50) DEFAULT NULL,
  `in_ans` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lotr_in`
--

LOCK TABLES `lotr_in` WRITE;
/*!40000 ALTER TABLE `lotr_in` DISABLE KEYS */;
INSERT INTO `lotr_in` VALUES (1,'peregrin took',NULL),(2,'eowyn',NULL),(3,'3',NULL);
/*!40000 ALTER TABLE `lotr_in` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `score`
--

DROP TABLE IF EXISTS `score`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `score` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `score` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `score`
--

LOCK TABLES `score` WRITE;
/*!40000 ALTER TABLE `score` DISABLE KEYS */;
INSERT INTO `score` VALUES (NULL,NULL,NULL),(NULL,NULL,0),('','',NULL),('','',NULL),(NULL,NULL,0),('Harshita','bewakoof@gmail.com',NULL),('Harshita','bewakoof@gmail.com',NULL),('Ipshita','xyx@kh.vom',NULL),('Ipshita','ipipaul.123@gmail.com',NULL),('Ipshita','ipipaul.123@gmail.com',NULL),('Ipshita','ipipaul.123@gmail.com',NULL);
/*!40000 ALTER TABLE `score` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-21 20:13:12
