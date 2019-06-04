-- MySQL dump 10.13  Distrib 5.5.23, for Win32 (x86)
--
-- Host: localhost    Database: lecar
-- ------------------------------------------------------
-- Server version	5.5.23

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
-- Table structure for table `blud`
--

DROP TABLE IF EXISTS `blud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(255) DEFAULT NULL,
  `ing1` char(255) DEFAULT NULL,
  `ing2` char(255) DEFAULT NULL,
  `ing3` char(255) DEFAULT NULL,
  `ing4` char(255) DEFAULT NULL,
  `ing5` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blud`
--

LOCK TABLES `blud` WRITE;
/*!40000 ALTER TABLE `blud` DISABLE KEYS */;
INSERT INTO `blud` VALUES (13,'аспирин','ромашка','спирт','Ацетаминофен','Хлорамфеникол','Хлорпромазин сульфоксид'),(14,'пенталгин','Хлорпромазин сульфоксид','ромашка','Хлорпромазин сульфоксид','Напроксен','Ибупрофен'),(15,'нейромидин','спирт','Ацетаминофен','Хлорпромазин сульфоксид','меланин','Напроксен');
/*!40000 ALTER TABLE `blud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingrid`
--

DROP TABLE IF EXISTS `ingrid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingrid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingrid`
--

LOCK TABLES `ingrid` WRITE;
/*!40000 ALTER TABLE `ingrid` DISABLE KEYS */;
INSERT INTO `ingrid` VALUES (1,'ромашка'),(2,'спирт'),(3,'меланин'),(5,'Ацетаминофен'),(6,'Ибупрофен'),(7,'Хлорамфеникол'),(8,'Хлорпромазин сульфоксид'),(10,'Напроксен');
/*!40000 ALTER TABLE `ingrid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skr`
--

DROP TABLE IF EXISTS `skr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skr` (
  `name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skr`
--

LOCK TABLES `skr` WRITE;
/*!40000 ALTER TABLE `skr` DISABLE KEYS */;
/*!40000 ALTER TABLE `skr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','$2y$13$5ZiGLH2I28GZOeZgSwGz6uM9kOwgBgl.w6A4uo9LZpIPzAdJSZrMK','PKOIKTzUZKTsWWbo43BBrus7AnaaqHlb');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-04 11:25:28
