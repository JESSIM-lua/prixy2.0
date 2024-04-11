-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: logsystem
-- ------------------------------------------------------
-- Server version	8.0.36

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
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `client` (
  `CLIENT_ID` int NOT NULL AUTO_INCREMENT,
  `CLIENT_email` varchar(255) DEFAULT NULL,
  `CLIENT_password` varchar(255) DEFAULT NULL,
  `CLIENT_Nom` varchar(255) DEFAULT NULL,
  `CLIENT_Prenom` varchar(255) DEFAULT NULL,
  `CLIENT_DateCreation` date DEFAULT NULL,
  `CLIENT_TelFix` varchar(20) DEFAULT NULL,
  `CLIENT_Tel` varchar(20) DEFAULT NULL,
  `CLIENT_Adresse` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`CLIENT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (1,'test@test.fr','$2y$10$INjY1Na4F.xq1iuTUrpe3OIwBBo14wjMHHIcEVFzgitMYdVw.qYHW','El ','Gato',NULL,NULL,'105105105','adresse ICI',0),(2,'test@test.com','$2y$10$AGt8P/x5devtni4YTqYUY.6UWLXAlq9yfooZiDCXnWZAR.UG8aApy',NULL,NULL,NULL,NULL,NULL,NULL,0),(3,'test@test.test','$2y$10$8X/wlzgtxswb9om79CuUvuhCT8.cjGJxLZ.uPStEPrPzE17Pn5k6C',NULL,NULL,NULL,NULL,NULL,NULL,0),(4,'SDVsvdSSVSD@QSVd.fff','$2y$10$4L3Tri3zx170FCj3aFpdteQ95H3SN4No1yg2btMikeaqPrHuq9fmC',NULL,NULL,NULL,NULL,NULL,NULL,0),(5,'L.Schmitt@prixy.net','$2y$10$RRjR8t4iH7HqQ7I/O6lIyOKCRc69nh/nMFQucSjkRM.u.Y9jDC9Ki',NULL,NULL,NULL,NULL,NULL,NULL,1),(6,'S.Millot@prixy.ne','$2y$10$GP9Z10.4MqOgV/LHTBolU.sOaMdiDQiALT0Q8kGKN0c80WtTdvv1K',NULL,NULL,NULL,NULL,NULL,NULL,0),(7,'C.Joubert@prixy.net','$2y$10$dISDayX8eY.cDEBj9xN0pePYlMtSXEdsCM40bg.vxgo/K2QTqiu6m',NULL,NULL,NULL,NULL,NULL,NULL,1),(8,'nisa@nisa.com','$2y$10$6YKponj38EkenUv2trQmcO2Cu2McbKXCwxETG6ce62p0zZNJ9pUxK',NULL,NULL,NULL,NULL,NULL,NULL,0),(9,'v.ryckaert@eleve.leschartreux.net','$2y$10$b6k9a0krr8wThwduxJ9Rq.b4NalEYzhy1hnk6YMK212zpJoLv59W6',' Ryckaert ','Valentin',NULL,NULL,'0000000000','adresse',0);
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-29 14:56:19
