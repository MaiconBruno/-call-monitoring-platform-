CREATE DATABASE  IF NOT EXISTS `pfc_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `pfc_db`;
-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: pfc_db
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
INSERT INTO `funcionario` VALUES (1,'','','Valter','Junior','52952778019','1000','2',2),(2,'','','Mario','Marquers','49816250063','1001','1',2),(3,'','','Carlos','Ruane','64837599087','1002','2',2),(4,'','','Joao','Carlos','85159698078','1003','1',2),(5,'','','Lucas','Hav','16086386005','1004','2',2),(6,'','','Marcelo','Leoni','38787610078','1005','1',2),(7,'','','Marta',' Melli','85512109049','1006','1',2),(8,'','','Pedro','Lucas','74784351060','1007','2',2),(9,'','','Helvecio','neto','21687589054','1008','1',2);
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
  `ani` int(11) NOT NULL,
  `campanha` varchar(255) DEFAULT NULL,
  `equipe` varchar(255) DEFAULT NULL,
  `funcionario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ligacao`),
  KEY `fk_funcionario` (`funcionario`),
  CONSTRAINT `fk_funcionario` FOREIGN KEY (`funcionario`) REFERENCES `funcionario` (`id_funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ligacao`
--

LOCK TABLES `ligacao` WRITE;
/*!40000 ALTER TABLE `ligacao` DISABLE KEYS */;
INSERT INTO `ligacao` VALUES (1,'2019-01-05 00:00:00','N/a',638638235,'12','1',1),(2,'2019-01-15 00:00:00','N/a',452934068,'33','2',2),(3,'2019-02-23 00:00:00','N/a',437696382,'12','1',3),(4,'2019-02-18 00:00:00','N/a',582456270,'33','2',4),(5,'2019-03-11 00:00:00','N/a',243447844,'12','1',5),(6,'2019-03-17 00:00:00','N/a',681340989,'33','2',6),(7,'2019-04-25 00:00:00','N/a',850196824,'12','2',7),(8,'2019-04-04 00:00:00','N/a',63407191,'12','1',8),(9,'2019-05-01 00:00:00','N/a',684819818,'12','2',9),(10,'2019-05-18 00:00:00','n/a',874759175,'33','2',1),(11,'2019-05-22 00:00:00','n/a',784264248,'10','7',9);
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resposta`
--

LOCK TABLES `resposta` WRITE;
/*!40000 ALTER TABLE `resposta` DISABLE KEYS */;
INSERT INTO `resposta` VALUES (1,3,4,5,5,5,1),(2,3,3,4,NULL,NULL,2),(3,3,3,4,4,NULL,3),(4,4,5,2,NULL,NULL,4),(5,2,2,NULL,NULL,NULL,5),(6,3,NULL,NULL,NULL,NULL,6),(7,3,4,4,2,NULL,7),(8,0,NULL,NULL,NULL,NULL,8),(9,1,NULL,NULL,NULL,NULL,9),(10,2,4,1,NULL,NULL,10),(11,4,4,5,3,NULL,11);
/*!40000 ALTER TABLE `resposta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'pfc_db'
--

--
-- Dumping routines for database 'pfc_db'
--
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
	select b.matricula, b.nome, a.ani, d.descricao, a.data_hora, a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
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
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_tbl_ligacao_ani`(in ani int)
BEGIN
	select b.matricula, b.nome, a.ani, d.descricao, a.data_hora, a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
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
	select b.matricula, b.nome, a.ani, d.descricao, a.data_hora, a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
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
	select b.matricula, b.nome, a.ani, d.descricao, a.data_hora, a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
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
	select b.matricula, b.nome, a.ani, d.descricao, a.data_hora, a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
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
	select b.matricula, b.nome, a.ani, d.descricao, a.data_hora, a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
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
	select b.matricula, b.nome, a.ani, d.descricao, a.data_hora, a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
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
	select b.matricula, b.nome, a.ani, d.descricao, a.data_hora, a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-28 21:34:03
