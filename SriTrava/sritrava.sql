-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: localhost    Database: sri_trava
-- ------------------------------------------------------
-- Server version	8.0.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `hotel_category`
--

DROP TABLE IF EXISTS `hotel_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hotel_category` (
  `id_hotel_category` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(45) NOT NULL,
  `category_desctiption` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_hotel_category`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel_category`
--

LOCK TABLES `hotel_category` WRITE;
/*!40000 ALTER TABLE `hotel_category` DISABLE KEYS */;
INSERT INTO `hotel_category` VALUES (1,'Five Stars',NULL),(2,'Four Stars',NULL),(3,'Three Stars',NULL),(4,'Resorts',NULL),(5,'Bunglows',NULL),(6,'Restaurents',NULL),(7,'Villa',NULL),(8,'Inn',NULL);
/*!40000 ALTER TABLE `hotel_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel_packages`
--

DROP TABLE IF EXISTS `hotel_packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hotel_packages` (
  `id_hotel_packages` int NOT NULL AUTO_INCREMENT,
  `package_name` varchar(45) DEFAULT NULL,
  `package_description` varchar(450) DEFAULT NULL,
  `package_images` varchar(450) NOT NULL,
  PRIMARY KEY (`id_hotel_packages`),
  CONSTRAINT `FK_id` FOREIGN KEY (`id_hotel_packages`) REFERENCES `hotels` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel_packages`
--

LOCK TABLES `hotel_packages` WRITE;
/*!40000 ALTER TABLE `hotel_packages` DISABLE KEYS */;
/*!40000 ALTER TABLE `hotel_packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hotels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hotel_name` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `hotel_disc` varchar(100) DEFAULT NULL,
  `imageurl` varchar(300) NOT NULL,
  `locationurl` varchar(600) NOT NULL,
  `hotel_contact_no` varchar(15) DEFAULT NULL,
  `hotel_email` varchar(100) DEFAULT NULL,
  `hotel_address` varchar(450) DEFAULT NULL,
  `hotel_price` double DEFAULT NULL,
  `hotel_category` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_hotel_category_idx` (`hotel_category`),
  CONSTRAINT `FK_hotel_category` FOREIGN KEY (`hotel_category`) REFERENCES `hotel_category` (`id_hotel_category`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotels`
--

LOCK TABLES `hotels` WRITE;
/*!40000 ALTER TABLE `hotels` DISABLE KEYS */;
INSERT INTO `hotels` VALUES (22,'Heritance','Negambo','5star hoteldfdsf','hotels/shangri_bd4.jpg','http://localhost/viva/hotelmanager.php?msg=product%20saved%20failed','01120214523','niluka@gmail.com','scsacsc',22000,1),(23,'Shrangilla','Colombo','5star hotel','hotels/shangri9.jpg','http://localhost/viva/hotelmanager.php?msg=product%20saved%20failed','xvcvcx','niluka@gmail.com','scsacsc',100000,1),(24,'Hilton','dhfhColombogsd','5star hotel','hotels/shangri8.jpg','http://localhost/viva/hotelmanager.php?msg=product%20saved%20failed','xvcvcx','niluka@gmail.com','scsacsc',125000,1),(25,'Kingsbury','colombo','5star hotel','hotels/shangri4.jpg','http://localhost/viva/hotelmanager.php','scsacsc','skmd@ss.jnd','scsacsc',301250,7),(26,'Galadari','Colombo','5star hotel','hotels/shangri3.jpg','http://localhost/viva/hotelmanager.php?msg=product%20saved%20failed','gfhgfh','sakuni.pathumi@gmail.com','scsacsc',102000,4),(27,'Blue Water','Colombo','4star hotel','hotels/shangri7.jpg','http://localhost/viva/hotelmanager.php','aff','sd@hbk.gh','scsacsc',356000,1),(28,'Avenra Garden','yjyj','3star hotel','hotels/shangrila1.jpg','https://maps.app.goo.gl/WhHdFWJzLhn8H2Sr8','hfjfj','fgjfj','fjfj',85000,5);
/*!40000 ALTER TABLE `hotels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invoice` (
  `id` int NOT NULL AUTO_INCREMENT,
  `amount` double NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint NOT NULL,
  `invoiced_to` int DEFAULT NULL,
  `invoice_checked_by` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_invoice_user1_idx` (`invoiced_to`),
  KEY `fk_invoice_customer1_idx` (`invoice_checked_by`),
  CONSTRAINT `fk_invoice_user1` FOREIGN KEY (`invoiced_to`) REFERENCES `user` (`id`),
  CONSTRAINT `fk_invoice_user2` FOREIGN KEY (`invoice_checked_by`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice`
--

LOCK TABLES `invoice` WRITE;
/*!40000 ALTER TABLE `invoice` DISABLE KEYS */;
INSERT INTO `invoice` VALUES (1,200000,'2021-05-01 02:44:08',0,NULL,2),(2,200000,'2021-05-01 02:50:34',9,NULL,2),(3,200000,'2021-05-01 11:21:36',0,NULL,2),(4,100000,'2021-05-01 12:48:43',16,NULL,2),(5,100000,'2021-05-01 13:20:49',9,NULL,2),(6,100000,'2021-05-01 13:35:21',9,NULL,2),(7,100000,'2021-05-01 13:40:12',9,NULL,2),(8,100000,'2021-05-01 13:50:07',0,NULL,2),(9,100000,'2021-05-01 13:57:25',9,NULL,2),(10,272000,'2021-05-01 14:22:38',9,NULL,2),(11,285000,'2021-05-01 18:30:42',9,NULL,2),(12,250000,'2021-05-01 22:31:11',9,NULL,2),(13,100000,'2021-05-02 20:37:20',9,NULL,2),(14,125000,'2021-05-03 14:27:11',19,NULL,2),(15,100000,'2021-05-03 22:55:09',9,NULL,2),(16,100000,'2021-05-04 22:55:09',9,NULL,2),(17,100000,'2021-06-04 22:55:09',9,NULL,2),(18,22000,'2021-10-10 20:10:05',5,NULL,2);
/*!40000 ALTER TABLE `invoice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice_item`
--

DROP TABLE IF EXISTS `invoice_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invoice_item` (
  `id_invoice_item` int NOT NULL AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `invoice_id` int DEFAULT NULL,
  `line_qty` int DEFAULT NULL,
  `line_unit_price` double DEFAULT NULL,
  PRIMARY KEY (`id_invoice_item`),
  KEY `fk_invoice_item_product1_idx` (`product_id`),
  KEY `fk_invoice_item_invoice1_idx` (`invoice_id`),
  CONSTRAINT `fk_invoice_item_invoice1` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`id`),
  CONSTRAINT `fk_invoice_item_product1` FOREIGN KEY (`product_id`) REFERENCES `hotels` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice_item`
--

LOCK TABLES `invoice_item` WRITE;
/*!40000 ALTER TABLE `invoice_item` DISABLE KEYS */;
INSERT INTO `invoice_item` VALUES (25,23,1,2,100000),(27,23,2,2,100000),(29,23,3,2,100000),(30,23,4,1,100000),(31,23,5,1,100000),(32,23,6,1,100000),(33,23,7,1,100000),(35,23,8,1,100000),(40,24,10,2,125000),(41,22,10,1,22000),(43,23,9,1,100000),(45,28,11,1,85000),(46,23,11,2,100000),(47,24,12,2,125000),(48,23,13,1,100000),(49,24,14,1,125000),(50,23,15,1,100000),(51,23,16,1,100000),(52,22,18,1,22000);
/*!40000 ALTER TABLE `invoice_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `user_type` tinyint DEFAULT NULL,
  `is_active` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `password_UNIQUE` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'fdsfd','mhjhg','vnvbn','xvcvcx','sakuni@gmail.com','102','dfdsfd',2,1),(2,'mnbm','nbmnbm','nmbnm','nbm','sd@hbk.gh','nbmnbm','nmbnm',1,1),(4,'ppp','pathumi','dfdsf','aff','sakuni.pathumi@gmail.com','111','ssadsadsa',1,1),(5,'tutu','tutu','fgfg','fdgfdgfd','tutu@gmail.com','1234','dffg',2,1),(9,'tiki','tiki','fdsf','fsdfds','tiki@gmail.com','tiki12','grgdf',2,1),(10,'ffe','','ertret','retert','we@gf.lk','1010','ertre',1,1),(16,'bv','bv','bv','bv','bv@bv.bv','bv','bv',2,1),(18,'ff','ff','ff','ff','ff@ff.ff','ff','ff',2,1),(19,'regergreg','ewdw','erreg','edwd','dsd@gh.hh','aaa','dwde',2,1);
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

-- Dump completed on 2021-10-10 20:37:16
