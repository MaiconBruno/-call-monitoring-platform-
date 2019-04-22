CREATE DATABASE  IF NOT EXISTS `pfc_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `pfc_db`;
-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: pfc_db
-- ------------------------------------------------------
-- Server version	10.1.38-MariaDB

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
  `login` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (1,'','','Valter','Junior','52952778019','11','2',1),(2,'','','Mario','Marquers','49816250063','33','1',1),(3,'','','Carlos','Ruane','64837599087','11','2',1),(4,'','','Joao','Carlos','85159698078','33','1',1),(5,'','','Lucas','Hav','16086386005','11','2',1),(6,'','','Marcelo','Leoni','38787610078','33','1',1),(7,'','','Marta',' Melli','85512109049','11','1',1),(8,'','','Pedro','Lucas','74784351060','33','2',1),(9,'','','Helvecio','neto','21687589054','33','1',1);
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
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
  `ani` varchar(255) NOT NULL,
  `campanha` varchar(255) DEFAULT NULL,
  `equipe` varchar(255) DEFAULT NULL,
  `funcionario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ligacao`),
  KEY `fk_funcionario` (`funcionario`),
  CONSTRAINT `fk_funcionario` FOREIGN KEY (`funcionario`) REFERENCES `funcionario` (`id_funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ligacao`
--

LOCK TABLES `ligacao` WRITE;
/*!40000 ALTER TABLE `ligacao` DISABLE KEYS */;
INSERT INTO `ligacao` VALUES (1,'0000-00-00 00:00:00','','1001','12','1',1),(2,'0000-00-00 00:00:00','','1002','12','1',2),(3,'0000-00-00 00:00:00','','1003','12','2',3),(4,'0000-00-00 00:00:00','','1004','12','1',4),(5,'0000-00-00 00:00:00','','1005','12','2',5),(6,'0000-00-00 00:00:00','','1006','23','1',6),(7,'0000-00-00 00:00:00','','1007','23','1',7),(8,'0000-00-00 00:00:00','','1008','23','1',8),(9,'0000-00-00 00:00:00','','1009','23','2',9),(10,'0000-00-00 00:00:00','','1010','12','1',1);
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resposta`
--

LOCK TABLES `resposta` WRITE;
/*!40000 ALTER TABLE `resposta` DISABLE KEYS */;
INSERT INTO `resposta` VALUES (1,0,3,3,3,4,1),(2,3,4,2,3,4,2),(3,4,5,3,3,4,3),(4,5,5,2,NULL,NULL,4),(5,5,5,2,NULL,NULL,5),(6,5,1,3,3,NULL,6),(7,2,2,4,NULL,NULL,7),(8,2,3,4,4,4,8),(9,3,4,4,NULL,NULL,9),(10,4,5,2,3,4,10);
/*!40000 ALTER TABLE `resposta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'pfc_db'
--

--
-- Dumping routines for database 'pfc_db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-22 19:40:30
