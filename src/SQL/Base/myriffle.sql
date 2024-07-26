-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: my_riffle
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_cadastro`
--

DROP TABLE IF EXISTS `admin_cadastro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_cadastro` (
  `id_admin_cadastro` int NOT NULL AUTO_INCREMENT,
  `nome_admin` varchar(45) NOT NULL,
  `sobre_nome_admin` varchar(45) NOT NULL,
  `tel_admin` varchar(45) NOT NULL,
  `email_admin` varchar(45) NOT NULL,
  `login_admin` varchar(45) NOT NULL,
  `senha_admin` varchar(45) NOT NULL,
  PRIMARY KEY (`id_admin_cadastro`),
  UNIQUE KEY `tel_admin` (`tel_admin`),
  UNIQUE KEY `email_admin` (`email_admin`),
  UNIQUE KEY `login_admin` (`login_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_cadastro`
--

LOCK TABLES `admin_cadastro` WRITE;
/*!40000 ALTER TABLE `admin_cadastro` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_cadastro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bilhete`
--

DROP TABLE IF EXISTS `bilhete`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bilhete` (
  `id_bilhete` int NOT NULL AUTO_INCREMENT,
  `numero_bilhete` int NOT NULL,
  `fk_comprador` int NOT NULL,
  `fk_sorteio` int NOT NULL,
  `data_compra` date NOT NULL,
  PRIMARY KEY (`id_bilhete`),
  KEY `fk_comprador` (`fk_comprador`),
  KEY `fk_sorteio` (`fk_sorteio`),
  CONSTRAINT `bilhete_ibfk_1` FOREIGN KEY (`fk_comprador`) REFERENCES `comprador_rifa` (`id_comprador`),
  CONSTRAINT `bilhete_ibfk_2` FOREIGN KEY (`fk_sorteio`) REFERENCES `sorteio` (`id_sorteio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bilhete`
--

LOCK TABLES `bilhete` WRITE;
/*!40000 ALTER TABLE `bilhete` DISABLE KEYS */;
/*!40000 ALTER TABLE `bilhete` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comprador_rifa`
--

DROP TABLE IF EXISTS `comprador_rifa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comprador_rifa` (
  `id_comprador` int NOT NULL AUTO_INCREMENT,
  `nome_comprador` varchar(45) NOT NULL,
  `sobre_nome_comprador` varchar(45) NOT NULL,
  `tel_comprador` varchar(45) NOT NULL,
  `email_comprador` varchar(45) DEFAULT NULL,
  `insta_comprador` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_comprador`),
  UNIQUE KEY `tel_comprador` (`tel_comprador`),
  UNIQUE KEY `sobre_nome_comprador` (`sobre_nome_comprador`),
  UNIQUE KEY `nome_comprador` (`nome_comprador`),
  UNIQUE KEY `email_comprador` (`email_comprador`),
  UNIQUE KEY `insta_comprador` (`insta_comprador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comprador_rifa`
--

LOCK TABLES `comprador_rifa` WRITE;
/*!40000 ALTER TABLE `comprador_rifa` DISABLE KEYS */;
/*!40000 ALTER TABLE `comprador_rifa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sorteio`
--

DROP TABLE IF EXISTS `sorteio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sorteio` (
  `id_sorteio` int NOT NULL AUTO_INCREMENT,
  `nome_sorteio` varchar(45) NOT NULL,
  `descricao_sorteio` varchar(200) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  `satus` varchar(45) NOT NULL,
  PRIMARY KEY (`id_sorteio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sorteio`
--

LOCK TABLES `sorteio` WRITE;
/*!40000 ALTER TABLE `sorteio` DISABLE KEYS */;
/*!40000 ALTER TABLE `sorteio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vencedor`
--

DROP TABLE IF EXISTS `vencedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vencedor` (
  `id_vencedor` int NOT NULL AUTO_INCREMENT,
  `fk_comprador_vencedor` int NOT NULL,
  `fk_sorteio` int NOT NULL,
  `fk_bilhete_sorteado` int NOT NULL,
  `fk_nome_vencedor` varchar(45) NOT NULL,
  `fk_sobre_nome_vencedor` varchar(45) NOT NULL,
  `fk_email_vencedor` varchar(45) DEFAULT NULL,
  `fk_insta_vencedor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_vencedor`),
  UNIQUE KEY `fk_email_vencedor` (`fk_email_vencedor`),
  UNIQUE KEY `fk_insta_vencedor` (`fk_insta_vencedor`),
  KEY `fk_comprador_vencedor` (`fk_comprador_vencedor`),
  KEY `fk_sorteio` (`fk_sorteio`),
  KEY `fk_bilhete_sorteado` (`fk_bilhete_sorteado`),
  KEY `fk_nome_vencedor` (`fk_nome_vencedor`),
  KEY `fk_sobre_nome_vencedor` (`fk_sobre_nome_vencedor`),
  CONSTRAINT `vencedor_ibfk_1` FOREIGN KEY (`fk_comprador_vencedor`) REFERENCES `comprador_rifa` (`id_comprador`),
  CONSTRAINT `vencedor_ibfk_2` FOREIGN KEY (`fk_sorteio`) REFERENCES `sorteio` (`id_sorteio`),
  CONSTRAINT `vencedor_ibfk_3` FOREIGN KEY (`fk_bilhete_sorteado`) REFERENCES `bilhete` (`id_bilhete`),
  CONSTRAINT `vencedor_ibfk_4` FOREIGN KEY (`fk_nome_vencedor`) REFERENCES `comprador_rifa` (`nome_comprador`),
  CONSTRAINT `vencedor_ibfk_5` FOREIGN KEY (`fk_sobre_nome_vencedor`) REFERENCES `comprador_rifa` (`sobre_nome_comprador`),
  CONSTRAINT `vencedor_ibfk_6` FOREIGN KEY (`fk_email_vencedor`) REFERENCES `comprador_rifa` (`email_comprador`),
  CONSTRAINT `vencedor_ibfk_7` FOREIGN KEY (`fk_insta_vencedor`) REFERENCES `comprador_rifa` (`insta_comprador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vencedor`
--

LOCK TABLES `vencedor` WRITE;
/*!40000 ALTER TABLE `vencedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `vencedor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-16 14:48:43
