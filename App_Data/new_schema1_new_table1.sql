-- MySQL dump 10.13  Distrib 5.6.19, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: new_schema1
-- ------------------------------------------------------
-- Server version	5.6.19-0ubuntu0.14.04.1

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
-- Table structure for table `new_table1`
--

DROP TABLE IF EXISTS `new_table1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `new_table1` (
  `User_Name` varchar(20) NOT NULL,
  `Book_Name` varchar(100) NOT NULL,
  `Sharing_Status` varchar(10) DEFAULT 'Available',
  `ISBN_Number` varchar(13) DEFAULT NULL,
  `Days_Available` varchar(11) DEFAULT '7',
  `Phone_Number` varchar(10) NOT NULL,
  PRIMARY KEY (`User_Name`,`Book_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=big5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `new_table1`
--

LOCK TABLES `new_table1` WRITE;
/*!40000 ALTER TABLE `new_table1` DISABLE KEYS */;
INSERT INTO `new_table1` VALUES ('akib','DBMS RAGHURAMKRISHNAN','Available','','','9087653456'),('Akib','HCV','HCV','','6','0'),('akib','TENNIS MATCH','NOT','','4','93874564'),('Akib Khan','Irodov','Irodov','0','7','7896363663'),('anuj','h.c.verma','NOT','','7','28347'),('dheeraj','2','NOT','323','746483','1'),('dheeraj','AJDSKJN','NOT','213456678890','123','123'),('dheeraj','GAME OF THRONES','NOT','1203945876','02394857','89867523'),('dheeraj','HCV','Available','','5','9087653412'),('dheeraj','shncx','NOT','','746483','56374'),('Kishor','RAMESH','RAMESH',NULL,'7','7896363663'),('Ramesh Khanna','H.C.Verma','H.C.Verma','0','7','9860246795'),('richa','DAS','NOT','334','746483','12'),('richa','DRUMS OF HEAVEN','NOT','2365','12','1232');
/*!40000 ALTER TABLE `new_table1` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-11 11:37:58
