-- MySQL dump 10.14  Distrib 5.5.60-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: ads
-- ------------------------------------------------------
-- Server version	5.5.60-MariaDB

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'A4L ACADEMY','admin','e10adc3949ba59abbe56e057f20f883e',1);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adplay`
--

DROP TABLE IF EXISTS `adplay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adplay` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `device_id` int(11) NOT NULL,
  `ads_id` int(11) NOT NULL,
  `count` bigint(20) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adplay`
--

LOCK TABLES `adplay` WRITE;
/*!40000 ALTER TABLE `adplay` DISABLE KEYS */;
/*!40000 ALTER TABLE `adplay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adTitle` varchar(255) NOT NULL,
  `adType` varchar(255) NOT NULL,
  `adDuration` int(11) NOT NULL,
  `add_locations` varchar(255) NOT NULL,
  `isLiveEnabled` varchar(255) NOT NULL,
  `imageDisplayDurationsplit` varchar(255) NOT NULL COMMENT '1-yes,2-no',
  `imageDisplayDuration` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` int(11) NOT NULL COMMENT '1-pending,2-active,3-inactive',
  `updated_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `adFile` text NOT NULL,
  `lshapedright` varchar(255) NOT NULL,
  `lshapedbottom` varchar(255) NOT NULL,
  `lshapedleft` varchar(255) NOT NULL,
  `devices_id` int(11) NOT NULL,
  `adCategory` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ads`
--

LOCK TABLES `ads` WRITE;
/*!40000 ALTER TABLE `ads` DISABLE KEYS */;
INSERT INTO `ads` VALUES (16,'nani','video',30,'pnp','true','false',0,'2019-06-27 21:21:22',3,'2019-06-29 21:20:10',0,'0be9fcc63995c88c0c936bd88bbcf846.mp4','','','',5,''),(31,'baba','video',120,'pnp','true','false',0,'2019-06-29 16:16:35',2,'2019-06-29 16:16:56',0,'fa50065885b0929f294b1b6cb1b82d38.mp4','','','',4,''),(32,'baba33333','image',30,'pnp','true','false',0,'2019-06-29 16:17:32',2,'0000-00-00 00:00:00',0,'f0ca7a39cce8ffdaa21cdfb854c2b30a.jpg','','','',4,''),(33,'mmmmm','video',30,'pnp','true','false',0,'2019-06-29 16:18:24',2,'0000-00-00 00:00:00',0,'0fe11a74f97159c0415ba88ef31ca213.mp4','','','',4,''),(34,'kk','video',60,'pnp','true','false',0,'2019-06-29 16:19:30',2,'0000-00-00 00:00:00',0,'54298591a61d58f501d195fd358ab938.mp4','','','',4,''),(46,'baba','image',10,'p','true','false',0,'2019-06-30 09:29:04',2,'0000-00-00 00:00:00',0,'b127ea0aeb22dec7496f579231510257.jpg','','','',5,''),(47,'b','image',15,'p','true','false',0,'2019-06-30 09:29:30',2,'2019-06-30 09:30:01',0,'4533555dac494a0bd424c0e854352630.jpg','','','',5,''),(48,'baba','video',30,'p','true','false',0,'2019-06-30 09:31:29',2,'0000-00-00 00:00:00',0,'800824a3dc2371f0a80501939d9e533e.mp4','','','',5,''),(49,'mmmmm','video',20,'ppp','true','false',0,'2019-06-30 09:40:39',2,'0000-00-00 00:00:00',0,'e1025335941aa27214cc89681023b55c.mp4','','','',5,'');
/*!40000 ALTER TABLE `ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `devices`
--

DROP TABLE IF EXISTS `devices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `devices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `device_id` text NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `device_name` varchar(255) NOT NULL,
  `device_location` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `devices`
--

LOCK TABLES `devices` WRITE;
/*!40000 ALTER TABLE `devices` DISABLE KEYS */;
INSERT INTO `devices` VALUES (1,'EMULATOR29X0X11X0','2019-06-28 21:31:18','2019-06-28 21:36:35','active','Ramaraj Device','hyderabad'),(2,'RZ8M22HQ64W','2019-06-28 22:19:40','2019-06-28 22:20:29','active','Kiran mobile','Pnp'),(3,'82dcd8f60304','2019-06-29 11:46:30','2019-06-29 11:46:53','active','nissar mobile','pnp'),(5,'0123456789abcdef','2019-06-29 20:34:24','2019-06-29 20:35:15','active','testing','testing');
/*!40000 ALTER TABLE `devices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serverrefreshtime` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1-active,2-inactive',
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `isBottom` varchar(255) NOT NULL,
  `isTop` varchar(255) NOT NULL,
  `isLeft` varchar(255) NOT NULL,
  `isRight` varchar(255) NOT NULL,
  `isFifty` varchar(255) NOT NULL,
  `isTwentyFive` varchar(255) NOT NULL,
  `isLshape` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` VALUES (1,5,1,'2019-06-16 12:34:42','2019-06-30 09:37:17','true','true','true','true','true','true','true');
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '1-adminuser,2-user',
  `status` int(11) NOT NULL COMMENT '1-pending,2-active,2-inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'gopal','krishna','gopalkrishna.nagu@gmail.com',7396640478,'gopalkrishna007','e10adc3949ba59abbe56e057f20f883e','miyapur','hyderabad','telangana',500048,'india','2019-06-15 19:26:17','2019-06-15 19:52:37',1,2);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-30 12:47:48
