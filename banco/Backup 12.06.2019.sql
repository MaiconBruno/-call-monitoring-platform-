CREATE DATABASE  IF NOT EXISTS `pfc_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `pfc_db`;
-- MySQL dump 10.16  Distrib 10.1.40-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: pfc_db
-- ------------------------------------------------------
-- Server version	10.1.40-MariaDB

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
-- Table structure for table `funcao`
--

DROP TABLE IF EXISTS `funcao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcao` (
  `id_funcao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  PRIMARY KEY (`id_funcao`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcao`
--

LOCK TABLES `funcao` WRITE;
/*!40000 ALTER TABLE `funcao` DISABLE KEYS */;
INSERT INTO `funcao` VALUES (1,'Administrador'),(2,'Agente'),(3,'Supervisor');
/*!40000 ALTER TABLE `funcao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionario` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `matricula` varchar(255) NOT NULL,
  `ramal` varchar(255) NOT NULL,
  `funcao` int(11) NOT NULL,
  PRIMARY KEY (`id_funcionario`),
  KEY `fk_funcao` (`funcao`),
  CONSTRAINT `fk_funcao` FOREIGN KEY (`funcao`) REFERENCES `funcao` (`id_funcao`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (0,'jcr','202cb962ac59075b964b07152d234b70','Joao Carlos','Ramos','','','',1),(1,'mario','202cb962ac59075b964b07152d234b70','henq','caldas','545.101.384-00','01','0101',3),(2,'carlos12','202cb962ac59075b964b07152d234b70','Mario','Marquers','924.880.745-20','02','0102',3),(3,'ze12','202cb962ac59075b964b07152d234b70','ze','jovenilson','774.880.745-50','03','0103',3),(4,'julio','202cb962ac59075b964b07152d234b70','jenilson','jenilson','444.880.745-10','04','0104',2),(5,'valter','202cb962ac59075b964b07152d234b70','marcelafreitas','ramos','324.320.745-30','05','0105',2),(6,'zeca','202cb962ac59075b964b07152d234b70','Mario','adelson','124.880.745-80','06','0120',2),(7,'bento3232','d9b1d7db4cd6e70935368a1efb10e377','bento',' Merli','127.157.275-34','07','0106',2),(8,'mari','202cb962ac59075b964b07152d234b70','mari','Lucas','729.331.345-43','08','0107',2),(9,'Giblon','202cb962ac59075b964b07152d234b70','Giblon','neto','092.559.035-51','09','0109',2),(10,'bea','202cb962ac59075b964b07152d234b70','bea','halves','142.013.695-01','010','0110',2),(11,'delvan','202cb962ac59075b964b07152d234b70','delvan','oliveira','283.121.395-91','011','0111',2),(12,'jony12','202cb962ac59075b964b07152d234b70','pedro henrique','cardoso','549.373.350-14','06','0105',2),(13,'joaoguilherme','202cb962ac59075b964b07152d234b70','joao guilherme','costa','239.752.110-59','013','0113',2),(14,'marcio','202cb962ac59075b964b07152d234b70','marcio','pavaneli','309.939.240-50','014','0114',2),(15,'bentovieira','202cb962ac59075b964b07152d234b70','bento vieira','joaquin','604.058.010-09','015','0115',2),(16,'pedroernam','202cb962ac59075b964b07152d234b70','pedro','ernam','444.013.670-22','016','0116',2),(17,'beatriz','202cb962ac59075b964b07152d234b70','beatriz','silva','729.330.840-07','017','0117',2),(18,'joaquin','202cb962ac59075b964b07152d234b70','joaquin','silva','257.324.510-13','018','0118',2),(19,'helvecio','202cb962ac59075b964b07152d234b70','helvecio','neto','418.194.540-53','019','0119',2),(20,'andrew','202cb962ac59075b964b07152d234b70','andrew','lima','229.553.990-00','020','0120',2),(21,'paulo','202cb962ac59075b964b07152d234b70','paulo','reis','948.808.450-27','021','0121',2),(22,'edlane','202cb962ac59075b964b07152d234b70','edlane','reis','679.688.280-66','022','0122',2),(23,'kaike','202cb962ac59075b964b07152d234b70','kaike','oliveira','264.462.040-60','023','0123',2),(24,'george','202cb962ac59075b964b07152d234b70','george','cardoso','693.843.740-83','024','0124',2),(25,'vitor','202cb962ac59075b964b07152d234b70','vitor','silva','279.122.600-13','025','0125',2),(26,'max','202cb962ac59075b964b07152d234b70','max','pereira','213.188.830-91','026','0126',2),(27,'lucas','202cb962ac59075b964b07152d234b70','lucas','araujo','954.820.490-86','027','0127',2),(28,'matheus','202cb962ac59075b964b07152d234b70','matheus','silva','661.165.110-15','028','0128',2),(29,'mustafar','202cb962ac59075b964b07152d234b70','mustafaabald','brotas','333.101.390-00','029','0129',2);
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `interacao`
--

DROP TABLE IF EXISTS `interacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interacao` (
  `idinteracao` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_interacao` varchar(60) NOT NULL,
  PRIMARY KEY (`idinteracao`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interacao`
--

LOCK TABLES `interacao` WRITE;
/*!40000 ALTER TABLE `interacao` DISABLE KEYS */;
INSERT INTO `interacao` VALUES (1,'Facebook'),(2,'WhatsApp'),(3,'Skype'),(4,'E-mail'),(5,'Telefone'),(6,'Chat');
/*!40000 ALTER TABLE `interacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ligacao`
--

DROP TABLE IF EXISTS `ligacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ligacao` (
  `id_ligacao` int(11) NOT NULL AUTO_INCREMENT,
  `data_hora` datetime NOT NULL,
  `motivo` varchar(255) NOT NULL,
  `ani` varchar(15) NOT NULL,
  `campanha` varchar(255) DEFAULT NULL,
  `equipe` varchar(255) DEFAULT NULL,
  `funcionario` int(11) DEFAULT NULL,
  `fk_interacao` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ligacao`),
  KEY `fk_funcionario` (`funcionario`),
  KEY `fk_interacao` (`fk_interacao`),
  CONSTRAINT `fk_funcionario` FOREIGN KEY (`funcionario`) REFERENCES `funcionario` (`id_funcionario`),
  CONSTRAINT `fk_interacao` FOREIGN KEY (`fk_interacao`) REFERENCES `interacao` (`idinteracao`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=233 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ligacao`
--

LOCK TABLES `ligacao` WRITE;
/*!40000 ALTER TABLE `ligacao` DISABLE KEYS */;
INSERT INTO `ligacao` VALUES (1,'2019-01-05 00:00:00','N/a','(83)117-2197','0122','Ninjas ',1,1),(2,'2019-01-15 00:00:00','N/a','(13)788-2792','0112','Ninjas ',2,1),(3,'2019-02-23 00:00:00','N/a','(27)517-6097','0112','Ninjas ',3,1),(4,'2019-02-18 00:00:00','N/a','(88)110-2510','0112','Ninjas ',4,1),(5,'2019-03-11 00:00:00','N/a','(95)587-2023','0112','Ninjas ',5,1),(6,'2019-03-17 00:00:00','N/a','(43)518-7399','0122','Ninjas ',6,2),(7,'2019-04-25 00:00:00','N/a','(03)249-7556','0112','Ninjas ',7,2),(8,'2019-04-04 00:00:00','N/a','(15)631-9260','0112','Ninjas ',8,2),(9,'2019-05-01 00:00:00','N/a','(18)845-3826','0133','Mestres ',9,2),(10,'2019-05-18 00:00:00','n/a','(58)845-3826','0112','Mestres ',10,2),(11,'2019-05-22 00:00:00','n/a','(58)845-3826','0133','Mestres ',11,3),(12,'2019-06-12 00:00:00','N/a','(83)930-3329','0144','Mestres ',12,3),(13,'2019-07-23 00:00:00','N/a','(58)845-3826','0122','Mestres ',13,3),(14,'2019-08-02 00:00:00','N/a','(83)930-3329','0133','Mestres ',14,3),(15,'2019-09-15 00:00:00','N/a','(83)930-3329','0112','Mestres ',15,3),(16,'2019-10-20 00:00:00','N/a','(18)845-38260','0155','Mestres ',16,4),(17,'2019-11-03 00:00:00','N/a','(83)930-3329','0144','Mestres ',17,4),(18,'2019-12-18 00:00:00','N/a','(18)845-3826','0112','Mestres ',18,4),(19,'2019-06-18 00:00:00','N/a','(18)845-8714','0144','Mestres ',19,4),(20,'2019-01-22 00:00:00','N/a','(18)845-8714','0155','Brasil',20,4),(21,'2019-06-09 00:00:00','N/a','(58)845-3826','0112','Brasil',21,5),(22,'2019-02-11 00:00:00','N/a','(15)631-9260','0133','Brasil',22,5),(23,'2018-02-11 00:00:00','N/a','(15)631-9260','0133','Brasil',23,5),(24,'2018-05-11 00:00:00','N/a','(15)631-9260','0133','Brasil',24,5),(25,'2018-05-11 00:00:00','N/a','(15)631-9260','0133','Brasil',25,5),(26,'2018-03-11 00:00:00','N/a','(15)631-9260','0133','Brasil',26,6),(27,'2018-04-11 00:00:00','N/a','(15)631-9260','0133','Brasil',27,6),(28,'2018-04-11 00:00:00','N/a','(15)631-9260','0134','Brasil',28,6),(29,'2018-04-11 00:00:00','N/a','(15)631-9260','0134','Brasil',29,6),(30,'2018-03-11 00:00:00','N/a','(15)631-9260','0134','Brasil',4,6),(31,'2018-03-11 00:00:00','N/a','(15)631-9260','0134','Brasil',3,4),(32,'2018-03-11 00:00:00','N/a','(15)631-9260','0135','Brasil',4,3),(33,'1969-12-31 16:00:00','N/A','(09) 6631 1102','137','Brasil',25,2),(34,'1969-12-31 16:00:00','N/A','(07) 9532 1760','135','Brasil',9,3),(35,'1969-12-31 16:00:00','N/A','(07) 5279 5510','135','Brasil',21,5),(36,'1969-12-31 16:00:00','N/A','(06) 2952 6546','137','Brasil',6,1),(37,'1969-12-31 16:00:00','N/A','(06) 1115 0634','137','Brasil',14,4),(38,'1969-12-31 16:00:00','N/A','(01) 0935 3457','135','Brasil',10,1),(39,'1969-12-31 16:00:00','N/A','(08) 4301 7884','137','Brasil',15,5),(40,'1969-12-31 16:00:00','N/A','(05) 9896 6444','135','Brasil',21,3),(41,'1969-12-31 16:00:00','N/A','(03) 4995 1433','136','Brasil',24,4),(42,'1969-12-31 16:00:00','N/A','(01) 0458 6607','137','Brasil',1,3),(43,'1969-12-31 16:00:00','N/A','(08) 4451 0052','135','Brasil',28,3),(44,'1969-12-31 16:00:00','N/A','(07) 2848 7117','137','Brasil',20,4),(45,'1969-12-31 16:00:00','N/A','(08) 3669 7976','136','Brasil',9,1),(46,'1969-12-31 16:00:00','N/A','(07) 5130 2141','137','Brasil',14,3),(47,'1969-12-31 16:00:00','N/A','(09) 8845 2453','135','Brasil',6,3),(48,'1969-12-31 16:00:00','N/A','(05) 9327 1460','137','Brasil',29,4),(49,'1969-12-31 16:00:00','N/A','(06) 3327 5519','135','Brasil',16,4),(50,'1969-12-31 16:00:00','N/A','(05) 4048 5804','136','Brasil',19,1),(51,'1969-12-31 16:00:00','N/A','(05) 8658 5251','136','Brasil',17,6),(52,'1969-12-31 16:00:00','N/A','(08) 0326 7292','137','Brasil',18,2),(53,'1969-12-31 16:00:00','N/A','(03) 6069 4869','136','Brasil',20,4),(54,'1969-12-31 16:00:00','N/A','(07) 7265 4386','135','Brasil',17,5),(55,'1969-12-31 16:00:00','N/A','(02) 4382 1905','135','Brasil',20,3),(56,'1969-12-31 16:00:00','N/A','(02) 0606 7995','136','Brasil',3,5),(57,'1969-12-31 16:00:00','N/A','(08) 5541 2397','137','Brasil',25,5),(58,'1969-12-31 16:00:00','N/A','(08) 6440 4181','135','Brasil',27,3),(59,'1969-12-31 16:00:00','N/A','(03) 8187 9955','136','Brasil',1,4),(60,'1969-12-31 16:00:00','N/A','(08) 5721 5868','135','Brasil',29,2),(61,'1969-12-31 16:00:00','N/A','(06) 7276 9690','136','Brasil',24,2),(62,'1969-12-31 16:00:00','N/A','(05) 6978 0321','137','Brasil',15,6),(63,'1969-12-31 16:00:00','N/A','(05) 0295 6219','137','Brasil',24,6),(64,'1969-12-31 16:00:00','N/A','(08) 7665 2351','135','Brasil',23,4),(65,'1969-12-31 16:00:00','N/A','(05) 3265 1834','135','Brasil',13,1),(66,'1969-12-31 16:00:00','N/A','(03) 6024 0612','137','Brasil',19,5),(67,'1969-12-31 16:00:00','N/A','(03) 1735 0871','135','Brasil',29,4),(68,'1969-12-31 16:00:00','N/A','(06) 4097 4529','137','Brasil',27,5),(69,'1969-12-31 16:00:00','N/A','(03) 3528 6599','135','Brasil',13,4),(70,'1969-12-31 16:00:00','N/A','(01) 2368 5069','135','Brasil',16,2),(71,'1969-12-31 16:00:00','N/A','(07) 9438 5709','135','Brasil',17,3),(72,'1969-12-31 16:00:00','N/A','(09) 8248 3181','137','Brasil',26,5),(73,'1969-12-31 16:00:00','N/A','(07) 4519 7473','137','Brasil',21,3),(74,'1969-12-31 16:00:00','N/A','(02) 9517 3178','136','Brasil',4,2),(75,'1969-12-31 16:00:00','N/A','(09) 0752 1785','135','Brasil',7,1),(76,'1969-12-31 16:00:00','N/A','(05) 3138 1739','137','Brasil',19,2),(77,'1969-12-31 16:00:00','N/A','(05) 0987 3940','136','Brasil',4,4),(78,'1969-12-31 16:00:00','N/A','(01) 0506 1675','136','Brasil',21,3),(79,'1969-12-31 16:00:00','N/A','(07) 0633 0525','136','Brasil',11,1),(80,'1969-12-31 16:00:00','N/A','(04) 9377 8244','136','Brasil',1,4),(81,'1969-12-31 16:00:00','N/A','(05) 0073 9787','136','Brasil',4,1),(82,'1969-12-31 16:00:00','N/A','(05) 2538 0852','136','Brasil',1,6),(83,'1969-12-31 16:00:00','N/A','(01) 2290 3300','137','Brasil',11,3),(84,'1969-12-31 16:00:00','N/A','(06) 0613 3498','135','Brasil',17,2),(85,'1969-12-31 16:00:00','N/A','(01) 2547 9770','137','Brasil',4,6),(86,'1969-12-31 16:00:00','N/A','(04) 3344 9543','135','Brasil',24,6),(87,'1969-12-31 16:00:00','N/A','(03) 3458 1844','136','Brasil',25,2),(88,'1969-12-31 16:00:00','N/A','(05) 9410 2558','137','Brasil',19,5),(89,'1969-12-31 16:00:00','N/A','(05) 4425 1585','136','Brasil',7,3),(90,'1969-12-31 16:00:00','N/A','(02) 9574 7787','137','Brasil',22,5),(91,'1969-12-31 16:00:00','N/A','(03) 7302 3051','135','Brasil',28,6),(92,'1969-12-31 16:00:00','N/A','(02) 0582 2237','137','Brasil',27,4),(93,'1969-12-31 16:00:00','N/A','(01) 9133 1158','137','Brasil',18,5),(94,'1969-12-31 16:00:00','N/A','(05) 2841 9799','136','Brasil',25,4),(95,'1969-12-31 16:00:00','N/A','(05) 9742 9834','137','Brasil',11,4),(96,'1969-12-31 16:00:00','N/A','(03) 9072 2714','135','Brasil',22,6),(97,'1969-12-31 16:00:00','N/A','(07) 0442 6914','135','Brasil',4,3),(98,'1969-12-31 16:00:00','N/A','(05) 7178 9429','135','Brasil',7,1),(99,'1969-12-31 16:00:00','N/A','(05) 6239 0767','137','Brasil',12,4),(100,'1969-12-31 16:00:00','N/A','(02) 1854 2874','135','Brasil',24,5),(101,'1969-12-31 16:00:00','N/A','(03) 3162 2683','135','Brasil',11,6),(102,'1969-12-31 16:00:00','N/A','(02) 1918 8345','137','Brasil',6,3),(103,'1969-12-31 16:00:00','N/A','(03) 7621 2463','135','Brasil',12,2),(104,'1969-12-31 16:00:00','N/A','(07) 2319 1178','135','Brasil',23,3),(105,'1969-12-31 16:00:00','N/A','(04) 1743 3337','137','Brasil',7,4),(106,'1969-12-31 16:00:00','N/A','(03) 9556 1759','136','Brasil',22,5),(107,'1969-12-31 16:00:00','N/A','(06) 2840 7481','136','Brasil',28,6),(108,'1969-12-31 16:00:00','N/A','(08) 1904 3563','136','Brasil',2,2),(109,'1969-12-31 16:00:00','N/A','(01) 2254 4557','136','Brasil',7,2),(110,'1969-12-31 16:00:00','N/A','(03) 3994 2194','135','Brasil',11,4),(111,'1969-12-31 16:00:00','N/A','(09) 8848 2481','136','Brasil',22,4),(112,'1969-12-31 16:00:00','N/A','(07) 3248 2466','136','Brasil',12,5),(113,'1969-12-31 16:00:00','N/A','(02) 9654 6948','135','Brasil',1,5),(114,'1969-12-31 16:00:00','N/A','(04) 9772 1198','137','Brasil',4,2),(115,'1969-12-31 16:00:00','N/A','(03) 7878 6334','136','Brasil',23,6),(116,'1969-12-31 16:00:00','N/A','(06) 1021 0830','137','Brasil',25,2),(117,'1969-12-31 16:00:00','N/A','(09) 2266 8128','137','Brasil',19,4),(118,'1969-12-31 16:00:00','N/A','(06) 5028 4825','136','Brasil',13,5),(119,'1969-12-31 16:00:00','N/A','(07) 9643 4639','137','Brasil',11,2),(120,'1969-12-31 16:00:00','N/A','(09) 4597 2957','136','Brasil',18,5),(121,'1969-12-31 16:00:00','N/A','(09) 9139 6405','135','Brasil',10,3),(122,'1969-12-31 16:00:00','N/A','(01) 5354 6883','135','Brasil',6,1),(123,'1969-12-31 16:00:00','N/A','(06) 0118 8378','136','Brasil',27,5),(124,'1969-12-31 16:00:00','N/A','(02) 9042 2651','136','Brasil',4,2),(125,'1969-12-31 16:00:00','N/A','(05) 7846 7328','136','Brasil',29,5),(126,'1969-12-31 16:00:00','N/A','(07) 7342 3381','135','Brasil',22,4),(127,'1969-12-31 16:00:00','N/A','(06) 3068 0484','136','Brasil',17,4),(128,'1969-12-31 16:00:00','N/A','(05) 8392 6745','137','Brasil',22,6),(129,'1969-12-31 16:00:00','N/A','(05) 1128 3616','136','Brasil',24,6),(130,'1969-12-31 16:00:00','N/A','(08) 0872 0662','137','Brasil',24,3),(131,'1969-12-31 16:00:00','N/A','(09) 5272 0700','137','Brasil',3,5),(132,'1969-12-31 16:00:00','N/A','(05) 9168 1887','137','Brasil',28,1),(133,'1969-12-31 16:00:00','N/A','(07) 0124 2520','135','Brasil',21,6),(134,'1969-12-31 16:00:00','N/A','(06) 1814 2457','136','Brasil',13,6),(135,'1969-12-31 16:00:00','N/A','(02) 4960 1472','136','Brasil',21,2),(136,'1969-12-31 16:00:00','N/A','(01) 3823 0154','135','Brasil',18,5),(137,'1969-12-31 16:00:00','N/A','(03) 8396 6822','137','Brasil',14,6),(138,'1969-12-31 16:00:00','N/A','(04) 0109 7809','135','Brasil',19,5),(139,'1969-12-31 16:00:00','N/A','(05) 2223 3101','135','Brasil',11,2),(140,'1969-12-31 16:00:00','N/A','(09) 7368 1819','137','Brasil',17,6),(141,'1969-12-31 16:00:00','N/A','(08) 2953 6440','135','Brasil',12,2),(142,'1969-12-31 16:00:00','N/A','(08) 1847 4483','136','Brasil',22,3),(143,'1969-12-31 16:00:00','N/A','(04) 6240 1041','137','Brasil',5,5),(144,'1969-12-31 16:00:00','N/A','(09) 1980 2047','136','Brasil',26,4),(145,'1969-12-31 16:00:00','N/A','(03) 1470 6272','135','Brasil',2,1),(146,'1969-12-31 16:00:00','N/A','(02) 8094 0458','136','Brasil',17,3),(147,'1969-12-31 16:00:00','N/A','(02) 6935 0986','137','Brasil',6,4),(148,'1969-12-31 16:00:00','N/A','(04) 3828 0963','137','Brasil',16,5),(149,'1969-12-31 16:00:00','N/A','(03) 0618 9767','135','Brasil',2,1),(150,'1969-12-31 16:00:00','N/A','(01) 4643 0252','137','Brasil',11,4),(151,'1969-12-31 16:00:00','N/A','(05) 9255 2686','136','Brasil',5,3),(152,'1969-12-31 16:00:00','N/A','(09) 9245 4258','137','Brasil',2,1),(153,'1969-12-31 16:00:00','N/A','(04) 8651 9538','137','Brasil',14,5),(154,'1969-12-31 16:00:00','N/A','(05) 4658 6865','137','Brasil',28,5),(155,'1969-12-31 16:00:00','N/A','(01) 4304 9134','136','Brasil',16,3),(156,'1969-12-31 16:00:00','N/A','(01) 8911 2133','135','Brasil',8,3),(157,'1969-12-31 16:00:00','N/A','(04) 3563 3301','136','Brasil',17,2),(158,'1969-12-31 16:00:00','N/A','(07) 8181 3330','135','Brasil',1,6),(159,'1969-12-31 16:00:00','N/A','(02) 9727 1998','136','Brasil',10,5),(160,'1969-12-31 16:00:00','N/A','(06) 4477 9805','136','Brasil',7,6),(161,'1969-12-31 16:00:00','N/A','(02) 3927 9447','136','Brasil',10,5),(162,'1969-12-31 16:00:00','N/A','(09) 4110 9702','137','Brasil',3,5),(163,'1969-12-31 16:00:00','N/A','(07) 2025 7640','135','Brasil',12,2),(164,'1969-12-31 16:00:00','N/A','(09) 6467 2856','137','Brasil',3,6),(165,'1969-12-31 16:00:00','N/A','(01) 0117 3951','137','Brasil',24,1),(166,'1969-12-31 16:00:00','N/A','(09) 5504 1439','135','Brasil',29,3),(167,'1969-12-31 16:00:00','N/A','(05) 2564 2437','137','Brasil',7,2),(168,'1969-12-31 16:00:00','N/A','(01) 1309 9113','137','Brasil',27,1),(169,'1969-12-31 16:00:00','N/A','(05) 5068 7975','137','Brasil',8,3),(170,'1969-12-31 16:00:00','N/A','(06) 9611 4496','135','Brasil',13,5),(171,'1969-12-31 16:00:00','N/A','(07) 1531 3526','136','Brasil',24,5),(172,'1969-12-31 16:00:00','N/A','(01) 7885 8256','136','Brasil',20,1),(173,'1969-12-31 16:00:00','N/A','(04) 7544 2645','135','Brasil',20,6),(174,'1969-12-31 16:00:00','N/A','(08) 7331 6636','135','Brasil',27,5),(175,'1969-12-31 16:00:00','N/A','(01) 3100 5441','137','Brasil',11,6),(176,'1969-12-31 16:00:00','N/A','(02) 5438 8815','136','Brasil',7,5),(177,'1969-12-31 16:00:00','N/A','(02) 7311 8161','136','Brasil',11,5),(178,'1969-12-31 16:00:00','N/A','(05) 0170 0146','135','Brasil',7,6),(179,'1969-12-31 16:00:00','N/A','(02) 1786 6238','136','Brasil',25,1),(180,'1969-12-31 16:00:00','N/A','(05) 2959 6246','135','Brasil',7,4),(181,'1969-12-31 16:00:00','N/A','(05) 2737 2671','135','Brasil',24,3),(182,'1969-12-31 16:00:00','N/A','(01) 0121 1449','137','Brasil',2,6),(183,'1969-12-31 16:00:00','N/A','(04) 0870 6897','137','Brasil',17,2),(184,'1969-12-31 16:00:00','N/A','(04) 9409 0421','135','Brasil',4,4),(185,'1969-12-31 16:00:00','N/A','(03) 4983 1273','137','Brasil',22,5),(186,'1969-12-31 16:00:00','N/A','(02) 3788 6868','135','Brasil',6,2),(187,'1969-12-31 16:00:00','N/A','(09) 9221 1378','137','Brasil',27,1),(188,'1969-12-31 16:00:00','N/A','(05) 5415 3819','136','Brasil',25,4),(189,'1969-12-31 16:00:00','N/A','(02) 8577 2461','137','Brasil',2,1),(190,'1969-12-31 16:00:00','N/A','(08) 3762 9664','135','Brasil',14,4),(191,'1969-12-31 16:00:00','N/A','(07) 4332 4850','136','Brasil',26,2),(192,'1969-12-31 16:00:00','N/A','(04) 1472 1867','135','Brasil',16,5),(193,'1969-12-31 16:00:00','N/A','(07) 3782 7944','135','Brasil',24,5),(194,'1969-12-31 16:00:00','N/A','(01) 3936 9837','135','Brasil',25,3),(195,'1969-12-31 16:00:00','N/A','(02) 0852 1748','135','Brasil',8,5),(196,'1969-12-31 16:00:00','N/A','(08) 2901 9421','136','Brasil',5,4),(197,'1969-12-31 16:00:00','N/A','(05) 2183 6025','137','Brasil',26,1),(198,'1969-12-31 16:00:00','N/A','(01) 8735 0503','136','Brasil',7,5),(199,'1969-12-31 16:00:00','N/A','(04) 3534 8098','135','Brasil',22,2),(200,'1969-12-31 16:00:00','N/A','(02) 3372 9062','137','Brasil',27,2),(201,'1969-12-31 16:00:00','N/A','(09) 0818 9659','137','Brasil',7,5),(202,'1969-12-31 16:00:00','N/A','(09) 8791 7754','137','Brasil',2,2),(203,'1969-12-31 16:00:00','N/A','(02) 7196 4312','137','Brasil',15,6),(204,'1969-12-31 16:00:00','N/A','(09) 7580 6552','135','Brasil',2,2),(205,'1969-12-31 16:00:00','N/A','(07) 7011 4352','137','Brasil',17,5),(206,'1969-12-31 16:00:00','N/A','(09) 4780 3634','135','Brasil',14,2),(207,'1969-12-31 16:00:00','N/A','(09) 8396 0372','137','Brasil',24,6),(208,'1969-12-31 16:00:00','N/A','(09) 5614 3932','136','Brasil',20,1),(209,'1969-12-31 16:00:00','N/A','(04) 0810 5329','136','Brasil',28,5),(210,'1969-12-31 16:00:00','N/A','(09) 5337 0256','137','Brasil',19,4),(211,'1969-12-31 16:00:00','N/A','(09) 7521 2578','135','Brasil',6,5),(212,'1969-12-31 16:00:00','N/A','(08) 0393 3363','135','Brasil',3,6),(213,'1969-12-31 16:00:00','N/A','(04) 7424 0435','136','Brasil',5,3),(214,'1969-12-31 16:00:00','N/A','(05) 9331 0803','137','Brasil',26,1),(215,'1969-12-31 16:00:00','N/A','(06) 7379 7680','137','Brasil',12,6),(216,'1969-12-31 16:00:00','N/A','(01) 7415 4529','135','Brasil',25,2),(217,'1969-12-31 16:00:00','N/A','(07) 2774 4255','137','Brasil',3,1),(218,'1969-12-31 16:00:00','N/A','(02) 3734 0225','137','Brasil',2,4),(219,'1969-12-31 16:00:00','N/A','(08) 9066 0460','137','Brasil',26,6),(220,'1969-12-31 16:00:00','N/A','(03) 2095 2115','137','Brasil',10,6),(221,'1969-12-31 16:00:00','N/A','(05) 1729 6725','137','Brasil',21,3),(222,'1969-12-31 16:00:00','N/A','(07) 0553 5461','137','Brasil',8,4),(223,'1969-12-31 16:00:00','N/A','(01) 1809 4409','136','Brasil',17,4),(224,'1969-12-31 16:00:00','N/A','(06) 1905 8476','135','Brasil',23,4),(225,'1969-12-31 16:00:00','N/A','(04) 3909 4108','137','Brasil',11,3),(226,'1969-12-31 16:00:00','N/A','(08) 1858 1284','136','Brasil',23,4),(227,'1969-12-31 16:00:00','N/A','(02) 3743 5757','136','Brasil',19,6),(228,'1969-12-31 16:00:00','N/A','(08) 9369 3788','136','Brasil',7,5),(229,'1969-12-31 16:00:00','N/A','(02) 3196 1194','137','Brasil',12,4),(230,'1969-12-31 16:00:00','N/A','(07) 3022 8592','137','Brasil',24,1),(231,'1969-12-31 16:00:00','N/A','(03) 9447 6220','135','Brasil',4,4),(232,'1969-12-31 16:00:00','N/A','(09) 3899 3881','136','Brasil',25,1);
/*!40000 ALTER TABLE `ligacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resposta`
--

DROP TABLE IF EXISTS `resposta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resposta` (
  `id_resposta` int(11) NOT NULL AUTO_INCREMENT,
  `resposta_1` int(11) DEFAULT NULL,
  `resposta_2` int(11) DEFAULT NULL,
  `resposta_3` int(11) DEFAULT NULL,
  `resposta_4` int(11) DEFAULT NULL,
  `resposta_5` int(11) DEFAULT NULL,
  `ligacao` int(11) NOT NULL,
  PRIMARY KEY (`id_resposta`),
  KEY `fk_ligacao` (`ligacao`),
  CONSTRAINT `fk_ligacao` FOREIGN KEY (`ligacao`) REFERENCES `ligacao` (`id_ligacao`)
) ENGINE=InnoDB AUTO_INCREMENT=233 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resposta`
--

LOCK TABLES `resposta` WRITE;
/*!40000 ALTER TABLE `resposta` DISABLE KEYS */;
INSERT INTO `resposta` VALUES (1,3,4,5,5,5,1),(2,3,3,4,NULL,NULL,2),(3,3,3,4,4,NULL,3),(4,4,5,2,NULL,NULL,4),(5,2,2,NULL,NULL,NULL,5),(6,3,NULL,NULL,NULL,NULL,6),(7,3,4,4,2,NULL,7),(8,1,3,NULL,NULL,NULL,8),(9,1,NULL,NULL,NULL,NULL,9),(10,2,4,1,NULL,NULL,10),(11,4,4,5,3,NULL,11),(12,3,2,4,NULL,NULL,12),(13,1,7,5,2,NULL,13),(14,2,1,NULL,NULL,NULL,14),(15,4,2,4,4,4,15),(16,NULL,NULL,NULL,NULL,NULL,16),(17,5,2,1,NULL,NULL,17),(18,4,4,4,5,3,18),(19,4,5,2,1,1,19),(20,3,2,4,2,4,20),(21,NULL,NULL,NULL,NULL,NULL,21),(22,1,2,NULL,NULL,NULL,22),(23,3,3,2,NULL,NULL,23),(24,3,2,NULL,NULL,NULL,24),(25,4,3,2,NULL,NULL,25),(26,4,4,NULL,NULL,2,26),(27,4,4,2,4,4,27),(28,4,2,NULL,NULL,NULL,28),(29,4,2,3,NULL,NULL,29),(30,4,2,NULL,NULL,NULL,30),(31,4,5,6,7,6,31),(32,3,3,NULL,NULL,NULL,32),(33,5,4,5,3,2,33),(34,3,4,3,1,5,34),(35,2,4,4,2,3,35),(36,4,3,2,5,1,36),(37,2,4,4,3,3,37),(38,2,4,3,5,3,38),(39,4,5,2,2,2,39),(40,3,5,2,3,2,40),(41,1,2,3,4,3,41),(42,3,2,4,5,3,42),(43,5,3,3,2,1,43),(44,5,5,4,5,2,44),(45,2,3,2,2,5,45),(46,2,5,2,1,3,46),(47,4,3,2,3,4,47),(48,2,5,1,1,1,48),(49,2,5,5,5,5,49),(50,1,1,1,2,1,50),(51,4,3,4,4,2,51),(52,1,3,4,5,2,52),(53,4,3,3,1,5,53),(54,2,1,2,3,3,54),(55,1,5,3,4,2,55),(56,2,3,1,5,4,56),(57,2,4,3,5,5,57),(58,4,1,2,1,2,58),(59,2,3,5,4,4,59),(60,5,5,5,2,2,60),(61,2,1,4,1,4,61),(62,1,2,3,1,1,62),(63,5,2,3,4,4,63),(64,2,2,5,5,3,64),(65,3,2,4,2,3,65),(66,4,5,4,3,3,66),(67,3,4,1,1,5,67),(68,5,1,5,2,5,68),(69,1,4,2,1,2,69),(70,5,5,2,3,1,70),(71,5,3,4,4,3,71),(72,3,3,3,1,2,72),(73,2,5,3,4,4,73),(74,3,3,4,1,4,74),(75,1,1,5,2,1,75),(76,1,3,5,4,3,76),(77,2,3,1,3,1,77),(78,3,2,2,5,1,78),(79,4,1,5,4,4,79),(80,5,3,3,5,1,80),(81,4,5,1,5,3,81),(82,5,4,2,3,5,82),(83,5,2,5,5,4,83),(84,3,3,3,3,2,84),(85,5,3,3,4,3,85),(86,4,3,1,1,2,86),(87,5,2,1,1,4,87),(88,5,5,2,1,4,88),(89,3,5,3,3,4,89),(90,4,1,5,1,2,90),(91,2,5,4,2,3,91),(92,1,4,3,3,3,92),(93,1,3,3,1,3,93),(94,2,2,1,2,3,94),(95,5,2,2,4,2,95),(96,1,2,3,5,3,96),(97,5,2,5,2,2,97),(98,5,4,4,2,2,98),(99,4,4,2,4,4,99),(100,5,5,5,3,4,100),(101,1,1,5,2,5,101),(102,5,5,3,2,5,102),(103,5,5,5,4,5,103),(104,3,1,1,2,5,104),(105,1,2,4,4,2,105),(106,2,2,3,4,1,106),(107,2,5,1,3,5,107),(108,1,1,3,1,1,108),(109,3,2,4,1,4,109),(110,5,3,2,5,5,110),(111,3,4,5,4,4,111),(112,2,3,1,2,5,112),(113,2,3,4,2,5,113),(114,4,2,3,5,1,114),(115,4,4,3,1,2,115),(116,2,3,2,4,5,116),(117,1,4,3,5,3,117),(118,1,4,2,4,4,118),(119,5,4,3,2,5,119),(120,4,4,5,1,3,120),(121,3,3,1,5,3,121),(122,2,3,1,4,4,122),(123,4,4,1,3,2,123),(124,4,3,4,5,2,124),(125,3,3,1,4,5,125),(126,4,4,3,5,4,126),(127,5,3,4,3,2,127),(128,4,1,1,5,3,128),(129,2,1,2,1,2,129),(130,4,5,5,5,2,130),(131,5,1,5,3,1,131),(132,3,3,3,2,1,132),(133,4,1,4,3,3,133),(134,2,4,3,2,1,134),(135,2,2,3,1,2,135),(136,3,3,3,1,5,136),(137,3,2,4,2,3,137),(138,1,4,4,2,3,138),(139,4,2,1,1,5,139),(140,1,1,2,5,1,140),(141,1,3,4,5,2,141),(142,5,4,3,3,1,142),(143,1,4,2,4,1,143),(144,3,4,1,3,1,144),(145,1,4,3,2,5,145),(146,3,4,1,1,1,146),(147,2,1,2,5,5,147),(148,2,2,3,3,4,148),(149,1,5,2,5,1,149),(150,2,2,4,1,1,150),(151,4,1,3,3,2,151),(152,2,5,5,4,4,152),(153,3,1,3,5,1,153),(154,1,1,4,2,2,154),(155,2,1,2,2,3,155),(156,1,4,1,3,4,156),(157,3,3,5,3,1,157),(158,1,2,2,2,2,158),(159,4,5,4,1,2,159),(160,1,5,1,5,5,160),(161,2,4,2,1,5,161),(162,1,3,4,5,5,162),(163,2,5,1,2,3,163),(164,5,1,2,1,2,164),(165,4,2,1,3,1,165),(166,1,2,2,3,3,166),(167,4,2,3,5,4,167),(168,5,2,3,5,4,168),(169,3,5,2,3,5,169),(170,1,2,5,5,2,170),(171,2,3,4,3,4,171),(172,2,5,2,3,3,172),(173,5,5,3,4,2,173),(174,3,4,4,4,1,174),(175,1,3,1,3,2,175),(176,1,5,1,5,4,176),(177,2,5,1,5,3,177),(178,3,5,4,1,4,178),(179,3,1,2,3,2,179),(180,3,5,3,4,3,180),(181,1,1,5,2,1,181),(182,2,1,2,2,4,182),(183,4,5,4,1,3,183),(184,4,4,1,4,1,184),(185,1,2,4,5,2,185),(186,1,3,5,5,2,186),(187,3,4,4,4,5,187),(188,2,1,5,5,3,188),(189,2,4,2,4,2,189),(190,4,3,2,1,3,190),(191,4,5,2,3,5,191),(192,2,2,5,4,5,192),(193,4,5,2,4,3,193),(194,4,1,5,1,2,194),(195,4,5,1,1,3,195),(196,3,4,3,5,1,196),(197,1,5,2,3,1,197),(198,1,2,4,1,5,198),(199,3,3,3,5,1,199),(200,3,2,4,4,2,200),(201,4,1,4,2,3,201),(202,4,3,4,2,3,202),(203,5,4,4,3,3,203),(204,4,1,4,1,4,204),(205,1,4,1,3,1,205),(206,1,1,5,4,3,206),(207,3,2,4,1,3,207),(208,5,2,2,1,4,208),(209,2,4,2,4,1,209),(210,5,2,3,1,1,210),(211,1,2,4,1,1,211),(212,2,2,3,3,1,212),(213,2,4,5,2,5,213),(214,5,3,1,3,4,214),(215,3,4,2,2,2,215),(216,5,4,5,2,4,216),(217,5,4,3,4,5,217),(218,3,4,5,4,3,218),(219,4,1,3,4,2,219),(220,3,3,4,1,4,220),(221,3,3,3,1,4,221),(222,3,4,2,3,3,222),(223,1,2,1,4,5,223),(224,4,2,3,4,5,224),(225,5,4,1,2,2,225),(226,1,3,3,3,4,226),(227,4,4,4,4,5,227),(228,5,3,1,2,1,228),(229,5,5,3,1,1,229),(230,5,4,5,2,2,230),(231,5,5,1,1,3,231),(232,3,2,1,4,5,232);
/*!40000 ALTER TABLE `resposta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'pfc_db'
--

--
-- Dumping routines for database 'pfc_db'
--
/*!50003 DROP PROCEDURE IF EXISTS `editar_cadastro` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_cadastro`(in usuarios varchar(255), in senhas varchar(255), in matriculas varchar(255), in ramals varchar(255), in ids int)
BEGIN
 UPDATE funcionario SET usuario=usuarios, senha=senhas, matricula =matriculas, ramal=ramals  WHERE id_funcionario =ids;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_agente_gr_pizza` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_agente_gr_pizza`(in agente varchar(255))
BEGIN
	SELECT count(resposta_1) as 'r1',count(resposta_2) as 'r2',count(resposta_3) as 'r3',count(resposta_4) as 'r4',count(resposta_5) as 'r5',c.nome FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	where c.nome = agente;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_campanha_gr_pizza` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_campanha_gr_pizza`(in campanha varchar(255))
BEGIN
	SELECT count(resposta_1) as 'r1',count(resposta_2) as 'r2',count(resposta_3) as 'r3',count(resposta_4) as 'r4',count(resposta_5) as 'r5',b.campanha FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	where b.campanha= campanha;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_deletar_funcionario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_deletar_funcionario`(in idfun int)
BEGIN
SET FOREIGN_KEY_CHECKS=0;
DELETE FROM funcionario 
WHERE id_funcionario = idfun;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_equipe_gr_pizza` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_equipe_gr_pizza`(in equipe varchar(255))
BEGIN
	SELECT count(resposta_1) as 'r1',count(resposta_2) as 'r2',count(resposta_3) as 'r3',count(resposta_4) as 'r4',count(resposta_5) as 'r5',b.equipe FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	where b.equipe = equipe;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_geral_gr_pizza` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_geral_gr_pizza`()
BEGIN
	SELECT count(resposta_1) as 'r1',count(resposta_2) as 'r2',count(resposta_3) as 'r3',count(resposta_4) as 'r4',count(resposta_5) as 'r5' from resposta;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_avalidas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_avalidas`(in dia_semana int, in mes int, in ano int)
BEGIN
	select count(a.id_ligacao) as 'qtd_ligacoes' from ligacao a 
    inner join resposta b on b.ligacao = a.id_ligacao
	where (DATE_FORMAT(a.data_hora, "%w") = dia_semana and month(data_hora) = mes and year(data_hora) = ano) and (b.resposta_1 is not null or b.resposta_2 is not null or b.resposta_3 is not null or b.resposta_4 is not null or b.resposta_5 is not null);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_avalidas_agente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_avalidas_agente`(in dia_semana int, in agente varchar(255), in mes int, in ano int)
BEGIN
	select count(a.id_ligacao) as 'qtd_ligacoes' from ligacao a 
    inner join resposta b on b.ligacao = a.id_ligacao
	inner join funcionario c on c.id_funcionario = a.funcionario
	where (DATE_FORMAT(a.data_hora, "%w") = dia_semana and month(data_hora) = mes and year(data_hora) = ano) and (b.resposta_1 is not null or b.resposta_2 is not null or b.resposta_3 is not null or b.resposta_4 is not null or b.resposta_5 is not null) and (c.nome = agente);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_chamadas_recebidas_ano` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_chamadas_recebidas_ano`()
BEGIN
	select DATE_FORMAT(data_hora, "%Y") as 'ano' from ligacao group by ano ORDER BY data_hora ASC;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_chamadas_recebidas_contar_ligacoes` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_chamadas_recebidas_contar_ligacoes`(in mes varchar(100), in ano int)
BEGIN
	select count(id_ligacao) as 'total_chamadas' from ligacao where month(data_hora) = mes and Year(data_hora) = ano;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_chamadas_recebidas_contar_ligacoes_agente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_chamadas_recebidas_contar_ligacoes_agente`(in mes varchar(100),in ano int, in nome varchar(255))
BEGIN
	select count(a.id_ligacao) as 'total_chamadas' from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	where month(data_hora) = mes and Year(data_hora) = ano and b.nome = nome;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_chamadas_recebidas_mes` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_chamadas_recebidas_mes`()
BEGIN
	select DATE_FORMAT(data_hora, "%b") as 'mes' from ligacao group by mes ORDER BY data_hora ASC;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_interacao_agente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_interacao_agente`(in tipo_interacao int, in agente varchar(255))
BEGIN
	select count(id_ligacao) as 'qtd_ligacoes' from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	where fk_interacao = tipo_interacao and b.nome = agente;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_interacao_campanha` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_interacao_campanha`(in tipo_interacao int, in campanha varchar(255))
BEGIN
	select count(id_ligacao) as 'qtd_ligacoes' from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	where fk_interacao = tipo_interacao and a.campanha = campanha;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_interacao_equipe` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_interacao_equipe`(in tipo_interacao int, in equipe varchar(255))
BEGIN
	select count(id_ligacao) as 'qtd_ligacoes' from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	where fk_interacao = tipo_interacao and a.equipe = equipe;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_interacao_geral` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_interacao_geral`(in tipo_interacao int)
BEGIN
	select count(id_ligacao) as 'qtd_ligacoes' from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	where fk_interacao = tipo_interacao;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_media_agente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_media_agente`(in agente varchar(255))
BEGIN
	SELECT AVG(resposta_1) as r1,AVG(resposta_2) as r2,AVG(resposta_3) as r3,AVG(resposta_4) as r4,AVG(resposta_5) as r5 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE c.nome = agente;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_media_campanha` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_media_campanha`(in campanha varchar(255))
BEGIN
	SELECT AVG(resposta_1) as r1,AVG(resposta_2) as r2,AVG(resposta_3) as r3,AVG(resposta_4) as r4,AVG(resposta_5) as r5 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE b.campanha = campanha;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_media_equipe` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_media_equipe`(in equipe varchar(255))
BEGIN
	SELECT AVG(resposta_1) as r1,AVG(resposta_2) as r2,AVG(resposta_3) as r3,AVG(resposta_4) as r4,AVG(resposta_5) as r5 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE b.equipe = equipe;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_media_geral` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_media_geral`()
BEGIN
	SELECT AVG(resposta_1) as r1,AVG(resposta_2) as r2,AVG(resposta_3) as r3,AVG(resposta_4) as r4,AVG(resposta_5) as r5 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_naoavalidas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_naoavalidas`(in dia_semana int, in mes int, in ano int)
BEGIN
	select count(id_ligacao) as 'qtd_ligacoes' from ligacao a
	inner join resposta b on b.ligacao = a.id_ligacao
	where (DATE_FORMAT(a.data_hora, "%w") = dia_semana and month(data_hora) = mes and year(data_hora) = ano) and b.resposta_1 is null and b.resposta_2 is null and b.resposta_3 is null and b.resposta_4 is null and b.resposta_5 is null;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_naoavalidas_agente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_naoavalidas_agente`(in dia_semana int, in agente varchar(255), in mes int, in ano int)
BEGIN
	select count(id_ligacao) as 'qtd_ligacoes' from ligacao a
	inner join resposta b on b.ligacao = a.id_ligacao
	inner join funcionario c on c.id_funcionario = a.funcionario
	where (DATE_FORMAT(a.data_hora, "%w") = dia_semana and month(data_hora) = mes and year(data_hora) = ano) and b.resposta_1 is null and b.resposta_2 is null and b.resposta_3 is null and b.resposta_4 is null and b.resposta_5 is null and c.nome = agente;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r1` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r1`()
BEGIN
	SELECT COUNT(*) as r1 FROM resposta WHERE (resposta_1 IS NULL or resposta_1 = '');
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r1_agente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r1_agente`(in agente varchar(255))
BEGIN
	SELECT COUNT(*) as r1 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE (resposta_1 IS NULL or resposta_1 = '') AND c.nome = agente;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r1_campanha` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r1_campanha`(in campanha varchar(255))
BEGIN
	SELECT COUNT(*) as r1 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE (resposta_1 IS NULL or resposta_1 = '') AND b.campanha = campanha;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r1_equipe` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r1_equipe`(in equipe varchar(255))
BEGIN
	SELECT COUNT(*) as r1 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE (resposta_1 IS NULL or resposta_1 = '') AND b.equipe = equipe;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r2` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r2`()
BEGIN
	SELECT COUNT(*) as r2 FROM resposta WHERE (resposta_2 IS NULL or resposta_2 = '');
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r2_agente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r2_agente`(in agente varchar(255))
BEGIN
	SELECT COUNT(*) as r2 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE (resposta_2 IS NULL or resposta_2 = '') AND c.nome = agente;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r2_campanha` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r2_campanha`(in campanha varchar(255))
BEGIN
	SELECT COUNT(*) as r2 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE (resposta_2 IS NULL or resposta_2 = '') AND b.campanha = campanha;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r2_equipe` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r2_equipe`(in equipe varchar(255))
BEGIN
	SELECT COUNT(*) as r2 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE (resposta_2 IS NULL or resposta_2 = '') AND b.equipe = equipe;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r3` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r3`()
BEGIN
	SELECT COUNT(*) as r3 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE (resposta_3 IS NULL or resposta_3 = '');

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r3_agente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r3_agente`(in agente varchar(255))
BEGIN
	SELECT COUNT(*) as r3 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE (resposta_3 IS NULL or resposta_3 = '') AND c.nome = agente;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r3_campanha` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r3_campanha`(in campanha varchar(255))
BEGIN
	SELECT COUNT(*) as r3 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE (resposta_3 IS NULL or resposta_3 = '') AND b.campanha = campanha;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r3_equipe` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r3_equipe`(in equipe varchar(255))
BEGIN
	SELECT COUNT(*) as r3 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE (resposta_3 IS NULL or resposta_3 = '') AND b.equipe = equipe;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r4` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r4`()
BEGIN
	SELECT COUNT(*) as r4 FROM resposta WHERE (resposta_4 IS NULL or resposta_4 = '');
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r4_agente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r4_agente`(in agente varchar(255))
BEGIN
	SELECT COUNT(*) as r4 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE (resposta_4 IS NULL or resposta_4 = '') AND c.nome = agente;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r4_campanha` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r4_campanha`(in campanha varchar(255))
BEGIN
	SELECT COUNT(*) as r4 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE (resposta_4 IS NULL or resposta_4 = '') AND b.campanha = campanha;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r4_equipe` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r4_equipe`(in equipe varchar(255))
BEGIN
	SELECT COUNT(*) as r4 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE (resposta_4 IS NULL or resposta_4 = '') AND b.equipe = equipe;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r5` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r5`()
BEGIN
	SELECT COUNT(*) as r5 FROM resposta WHERE (resposta_5 IS NULL or resposta_5 = '');
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r5_agente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r5_agente`(in agente varchar(255))
BEGIN
	SELECT COUNT(*) as r5 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE (resposta_5 IS NULL or resposta_5 = '') AND c.nome = agente;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r5_campanha` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r5_campanha`(in campanha varchar(255))
BEGIN
	SELECT COUNT(*) as r5 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE (resposta_5 IS NULL or resposta_5 = '') AND b.campanha = campanha;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_gr_na_r5_equipe` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_na_r5_equipe`(in equipe varchar(255))
BEGIN
	SELECT COUNT(*) as r5 FROM ligacao b
	INNER JOIN resposta a ON a.ligacao = b.id_ligacao
	INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
	WHERE (resposta_5 IS NULL or resposta_5 = '') AND b.equipe = equipe;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao`()
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_ani` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_ani`(in ani varchar(15))
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where a.ani=ani;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_ani_campanha` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_ani_campanha`(in ani varchar(15), in campanha varchar(255))
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where a.ani=ani and a.campanha=campanha;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_ani_campanha_data` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_ani_campanha_data`(in ani varchar(15), in campanha varchar(255), in dataInicial datetime, in dataFinal datetime)
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where a.ani=ani and a.campanha=campanha and data_hora between (dataInicial) and (dataFinal);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_ani_campanha_equipe` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_ani_campanha_equipe`(in ani varchar(15), in campanha varchar(255), in equipe varchar(255))
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where a.ani=ani and a.campanha=campanha and a.equipe=equipe;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_ani_campanha_equipe_data` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_ani_campanha_equipe_data`(in ani varchar(15), in campanha varchar(255), in equipe varchar(255), in dataInicial datetime, in dataFinal datetime)
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where a.ani=ani and a.campanha=campanha and a.equipe=equipe and data_hora between (dataInicial) and (dataFinal);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_ani_data` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_ani_data`(in ani varchar(15), in dataInicial datetime, in dataFinal datetime)
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where a.ani=ani and data_hora between (dataInicial) and (dataFinal);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_campanha_data` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_campanha_data`(in campanha varchar(255), in dataInicial datetime, in dataFinal datetime)
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
    where data_hora between (dataInicial) and (dataFinal) and a.campanha = campanha;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_campanha_equipe_data` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_campanha_equipe_data`(in campanha varchar(255), in equipe varchar(255), in dataInicial datetime, in dataFinal datetime)
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
    where data_hora between (dataInicial) and (dataFinal) and a.campanha = campanha and a.equipe=equipe;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_data` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_data`(in dataInicial datetime, in dataFinal datetime)
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
    where data_hora between (dataInicial) and (dataFinal);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_matricula` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_matricula`(in matricula varchar(255))
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where b.matricula=matricula;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_matricula_campanha` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_matricula_campanha`(in matricula varchar(255), in campanha varchar(255))
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where b.matricula=matricula and a.campanha=campanha;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_matricula_campanha_data` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_matricula_campanha_data`(in matricula varchar(255), in campanha varchar(255), in dataInicial datetime, in dataFinal datetime)
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where b.matricula=matricula and a.campanha=campanha and data_hora between (dataInicial) and (dataFinal);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_matricula_campanha_equipe` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_matricula_campanha_equipe`(in matricula varchar(255), in campanha varchar(255), in equipe varchar(255))
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where b.matricula=matricula and a.campanha=campanha and a.equipe=equipe;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_matricula_campanha_equipe_data` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_matricula_campanha_equipe_data`(in matricula varchar(255), in campanha varchar(255), in equipe varchar(255), in dataInicial datetime, in dataFinal datetime)
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where b.matricula=matricula and a.campanha=campanha and a.equipe=equipe and data_hora between (dataInicial) and (dataFinal);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_matricula_data` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_matricula_data`(in matricula varchar(255), in dataInicial datetime, in dataFinal datetime)
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where b.matricula=matricula and data_hora between (dataInicial) and (dataFinal);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_nome` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_nome`(in nome varchar(255))
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where b.nome=nome;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_nome_campanha` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_nome_campanha`(in nome varchar(255), in campanha varchar(255))
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where b.nome=nome and a.campanha=campanha;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_nome_campanha_data` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_nome_campanha_data`(in nome varchar(255), in campanha varchar(255), in dataInicial datetime, in dataFinal datetime)
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where b.nome=nome and a.campanha=campanha and data_hora between (dataInicial) and (dataFinal);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_nome_campanha_equipe` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_nome_campanha_equipe`(in nome varchar(255), in campanha varchar(255), in equipe varchar(255))
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where b.nome=nome and a.campanha=campanha and a.equipe=equipe;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_nome_campanha_equipe_data` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_nome_campanha_equipe_data`(in nome varchar(255), in campanha varchar(255), in equipe varchar(255), in dataInicial datetime, in dataFinal datetime)
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where b.nome=nome and a.campanha=campanha and a.equipe=equipe and data_hora between (dataInicial) and (dataFinal);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_tbl_ligacao_nome_data` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_nome_data`(in nome varchar(255), in dataInicial datetime, in dataFinal datetime)
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	inner join resposta c on c.ligacao = a.id_ligacao
	inner join funcao d  on d.id_funcao = b.funcao
	where b.nome=nome and data_hora between (dataInicial) and (dataFinal);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_valida_usuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_valida_usuario`(in usuario1 varchar(255), in senha1 varchar(255))
BEGIN
	SELECT * FROM funcionario WHERE usuario = usuario1 and senha = senha1; 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-12 15:57:55
