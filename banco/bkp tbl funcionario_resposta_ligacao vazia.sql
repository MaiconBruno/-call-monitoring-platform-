CREATE DATABASE  IF NOT EXISTS `pfc_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `pfc_db`;
-- MySQL dump 10.16  Distrib 10.1.40-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: pfc_db
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ligacao`
--

LOCK TABLES `ligacao` WRITE;
/*!40000 ALTER TABLE `ligacao` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resposta`
--

LOCK TABLES `resposta` WRITE;
/*!40000 ALTER TABLE `resposta` DISABLE KEYS */;
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_avalidas`(in dia_semana int)
BEGIN
	select count(a.id_ligacao) as 'qtd_ligacoes' from ligacao a 
    inner join resposta b on b.ligacao = a.id_ligacao
	where (DATE_FORMAT(a.data_hora, "%w") = dia_semana) and (b.resposta_1 is not null or b.resposta_2 is not null or b.resposta_3 is not null or b.resposta_4 is not null or b.resposta_5 is not null);
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_avalidas_agente`(in dia_semana int, in agente varchar(255))
BEGIN
	select count(a.id_ligacao) as 'qtd_ligacoes' from ligacao a 
    inner join resposta b on b.ligacao = a.id_ligacao
	inner join funcionario c on c.id_funcionario = a.funcionario
	where (DATE_FORMAT(a.data_hora, "%w") = dia_semana) and (b.resposta_1 is not null or b.resposta_2 is not null or b.resposta_3 is not null or b.resposta_4 is not null or b.resposta_5 is not null) and (c.nome = agente);
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_chamadas_recebidas_contar_ligacoes`(in mes varchar(100))
BEGIN
	select count(id_ligacao) as 'total_chamadas' from ligacao where month(data_hora) = mes;
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_chamadas_recebidas_contar_ligacoes_agente`(in mes varchar(100), in nome varchar(255))
BEGIN
	select count(a.id_ligacao) as 'total_chamadas' from ligacao a
	inner join funcionario b on b.id_funcionario = a.funcionario
	where month(data_hora) = mes and b.nome = nome;
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_naoavalidas`(in dia_semana int)
BEGIN
	select count(id_ligacao) as 'qtd_ligacoes' from ligacao a
	inner join resposta b on b.ligacao = a.id_ligacao
	where DATE_FORMAT(a.data_hora, "%w") = dia_semana and b.resposta_1 is null and b.resposta_2 is null and b.resposta_3 is null and b.resposta_4 is null and b.resposta_5 is null;
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_gr_naoavalidas_agente`(in dia_semana int, in agente varchar(255))
BEGIN
	select count(id_ligacao) as 'qtd_ligacoes' from ligacao a
	inner join resposta b on b.ligacao = a.id_ligacao
	inner join funcionario c on c.id_funcionario = a.funcionario
	where DATE_FORMAT(a.data_hora, "%w") = dia_semana and b.resposta_1 is null and b.resposta_2 is null and b.resposta_3 is null and b.resposta_4 is null and b.resposta_5 is null and c.nome = agente;
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

-- Dump completed on 2019-06-10 16:42:38
