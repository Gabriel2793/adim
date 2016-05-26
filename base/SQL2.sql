-- MySQL dump 10.16  Distrib 10.1.13-MariaDB, for osx10.6 (i386)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	10.1.13-MariaDB

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
-- Table structure for table `ARBITRO`
--

DROP TABLE IF EXISTS `ARBITRO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ARBITRO` (
  `idarbitro` int(11) NOT NULL AUTO_INCREMENT,
  `nombreA` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  PRIMARY KEY (`idarbitro`),
  UNIQUE KEY `nombreU_UNIQUE` (`nombreA`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ARBITRO`
--

LOCK TABLES `ARBITRO` WRITE;
/*!40000 ALTER TABLE `ARBITRO` DISABLE KEYS */;
INSERT INTO `ARBITRO` VALUES (4,'Gabriel','Villa de Guerrero 144 Atlacomulco','alan@live.com'),(5,'Laura','Lopez Mateos','lau@gmail.com'),(6,'6','sdf','');
/*!40000 ALTER TABLE `ARBITRO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EQUIPO`
--

DROP TABLE IF EXISTS `EQUIPO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EQUIPO` (
  `clvEquipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombreE` varchar(45) NOT NULL,
  `numIntegrantes` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  `UNIVERSIDAD_idUniversidad` int(11) NOT NULL,
  PRIMARY KEY (`clvEquipo`),
  UNIQUE KEY `status_UNIQUE` (`status`),
  UNIQUE KEY `clvEquipo_UNIQUE` (`clvEquipo`),
  KEY `fk_EQUIPO_UNIVERSIDAD_idx` (`UNIVERSIDAD_idUniversidad`),
  CONSTRAINT `fk_EQUIPO_UNIVERSIDAD` FOREIGN KEY (`UNIVERSIDAD_idUniversidad`) REFERENCES `UNIVERSIDAD` (`idUniversidad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EQUIPO`
--

LOCK TABLES `EQUIPO` WRITE;
/*!40000 ALTER TABLE `EQUIPO` DISABLE KEYS */;
INSERT INTO `EQUIPO` VALUES (3,'Universitarios',3,'Bien',1),(6,'BURRITOS',2,'ok',2),(7,'Pumistas',1,'Excelente',1),(8,'UAMS',2,'BREAK',3),(9,'Los uruguayos',3,'Online',3);
/*!40000 ALTER TABLE `EQUIPO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PACA`
--

DROP TABLE IF EXISTS `PACA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PACA` (
  `numPaca` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`numPaca`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PACA`
--

LOCK TABLES `PACA` WRITE;
/*!40000 ALTER TABLE `PACA` DISABLE KEYS */;
INSERT INTO `PACA` VALUES (2,'goo'),(3,'hola');
/*!40000 ALTER TABLE `PACA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PACAPARTIDO`
--

DROP TABLE IF EXISTS `PACAPARTIDO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PACAPARTIDO` (
  `PACA_numPaca` int(11) NOT NULL AUTO_INCREMENT,
  `PARTIDO_clvPartido` int(11) NOT NULL,
  PRIMARY KEY (`PACA_numPaca`,`PARTIDO_clvPartido`),
  KEY `fk_PACAPARTIDO_PARTIDO1_idx` (`PARTIDO_clvPartido`),
  CONSTRAINT `fk_PACAPARTIDO_PACA1` FOREIGN KEY (`PACA_numPaca`) REFERENCES `PACA` (`numPaca`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_PACAPARTIDO_PARTIDO1` FOREIGN KEY (`PARTIDO_clvPartido`) REFERENCES `PARTIDO` (`clvPartido`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PACAPARTIDO`
--

LOCK TABLES `PACAPARTIDO` WRITE;
/*!40000 ALTER TABLE `PACAPARTIDO` DISABLE KEYS */;
/*!40000 ALTER TABLE `PACAPARTIDO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PARTICIPANTE`
--

DROP TABLE IF EXISTS `PARTICIPANTE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PARTICIPANTE` (
  `EQUIPO_clvEquipo` int(11) NOT NULL AUTO_INCREMENT,
  `clvPart` int(11) NOT NULL,
  `nombrePila` varchar(45) NOT NULL,
  `apPatP` varchar(45) NOT NULL,
  `apMatP` varchar(45) NOT NULL,
  PRIMARY KEY (`EQUIPO_clvEquipo`,`clvPart`),
  KEY `fk_PARTICIPANTE_EQUIPO1_idx` (`EQUIPO_clvEquipo`),
  CONSTRAINT `fk_PARTICIPANTE_EQUIPO1` FOREIGN KEY (`EQUIPO_clvEquipo`) REFERENCES `EQUIPO` (`clvEquipo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PARTICIPANTE`
--

LOCK TABLES `PARTICIPANTE` WRITE;
/*!40000 ALTER TABLE `PARTICIPANTE` DISABLE KEYS */;
/*!40000 ALTER TABLE `PARTICIPANTE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PARTIDO`
--

DROP TABLE IF EXISTS `PARTIDO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PARTIDO` (
  `clvPartido` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(45) NOT NULL,
  `numPacas` int(11) NOT NULL,
  PRIMARY KEY (`clvPartido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PARTIDO`
--

LOCK TABLES `PARTIDO` WRITE;
/*!40000 ALTER TABLE `PARTIDO` DISABLE KEYS */;
/*!40000 ALTER TABLE `PARTIDO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RONDA`
--

DROP TABLE IF EXISTS `RONDA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RONDA` (
  `numRonda` int(11) NOT NULL AUTO_INCREMENT,
  `ubicacion` varchar(45) NOT NULL,
  `PARTIDO_clvPartido` int(11) NOT NULL,
  PRIMARY KEY (`numRonda`),
  KEY `fk_RONDA_PARTIDO1_idx` (`PARTIDO_clvPartido`),
  CONSTRAINT `fk_RONDA_PARTIDO1` FOREIGN KEY (`PARTIDO_clvPartido`) REFERENCES `PARTIDO` (`clvPartido`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RONDA`
--

LOCK TABLES `RONDA` WRITE;
/*!40000 ALTER TABLE `RONDA` DISABLE KEYS */;
/*!40000 ALTER TABLE `RONDA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TIRO`
--

DROP TABLE IF EXISTS `TIRO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TIRO` (
  `RONDA_numRonda` int(11) NOT NULL AUTO_INCREMENT,
  `PARTICIPANTE_EQUIPO_clvEquipo` int(11) NOT NULL,
  `PARTICIPANTE_clvPart` int(11) NOT NULL,
  `puntos` int(11) NOT NULL,
  `numTiro` int(11) NOT NULL,
  `empate` varchar(2) NOT NULL,
  PRIMARY KEY (`RONDA_numRonda`,`PARTICIPANTE_EQUIPO_clvEquipo`,`PARTICIPANTE_clvPart`),
  KEY `fk_TIRO_PARTICIPANTE1_idx` (`PARTICIPANTE_EQUIPO_clvEquipo`,`PARTICIPANTE_clvPart`),
  CONSTRAINT `fk_TIRO_PARTICIPANTE1` FOREIGN KEY (`PARTICIPANTE_EQUIPO_clvEquipo`, `PARTICIPANTE_clvPart`) REFERENCES `PARTICIPANTE` (`EQUIPO_clvEquipo`, `clvPart`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_TIRO_RONDA1` FOREIGN KEY (`RONDA_numRonda`) REFERENCES `RONDA` (`numRonda`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TIRO`
--

LOCK TABLES `TIRO` WRITE;
/*!40000 ALTER TABLE `TIRO` DISABLE KEYS */;
/*!40000 ALTER TABLE `TIRO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UNIVERSIDAD`
--

DROP TABLE IF EXISTS `UNIVERSIDAD`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UNIVERSIDAD` (
  `idUniversidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombreU` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `calleU` varchar(45) NOT NULL,
  `coloniaU` varchar(45) NOT NULL,
  `delegacionU` varchar(45) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`idUniversidad`),
  UNIQUE KEY `nombreU_UNIQUE` (`nombreU`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UNIVERSIDAD`
--

LOCK TABLES `UNIVERSIDAD` WRITE;
/*!40000 ALTER TABLE `UNIVERSIDAD` DISABLE KEYS */;
INSERT INTO `UNIVERSIDAD` VALUES (1,'UNAM','CDMX','Ciudad Universitaria','Iman','Copilco','123'),(2,'IPN','CDMX','UPIICSA','TLAHUAC','IZTAPALAPA','124'),(3,'UAM','CDMX','Hidalgo','Tlalpan','CDMX','125');
/*!40000 ALTER TABLE `UNIVERSIDAD` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrador`
--

LOCK TABLES `administrador` WRITE;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-26  9:06:00
