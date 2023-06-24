-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: guapayasos
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administradores`
--

DROP TABLE IF EXISTS `administradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administradores` (
  `ID_usuario` int(11) NOT NULL,
  `ID_foro` int(11) NOT NULL,
  KEY `ID_usuario` (`ID_usuario`),
  CONSTRAINT `administradores_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`ID_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administradores`
--

LOCK TABLES `administradores` WRITE;
/*!40000 ALTER TABLE `administradores` DISABLE KEYS */;
/*!40000 ALTER TABLE `administradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `multimedia`
--

DROP TABLE IF EXISTS `multimedia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `multimedia` (
  `ID_multimedia` int(11) NOT NULL AUTO_INCREMENT,
  `ID_publicacion` int(11) NOT NULL,
  `foto` char(1) DEFAULT NULL,
  PRIMARY KEY (`ID_multimedia`),
  KEY `ID_publicacion` (`ID_publicacion`),
  CONSTRAINT `multimedia_ibfk_1` FOREIGN KEY (`ID_publicacion`) REFERENCES `publicaciones` (`ID_publicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `multimedia`
--

LOCK TABLES `multimedia` WRITE;
/*!40000 ALTER TABLE `multimedia` DISABLE KEYS */;
/*!40000 ALTER TABLE `multimedia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publicaciones`
--

DROP TABLE IF EXISTS `publicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publicaciones` (
  `ID_publicacion` int(11) NOT NULL AUTO_INCREMENT,
  `ID_usuario` int(11) NOT NULL,
  `foro` int(11) NOT NULL,
  `texto` char(1) NOT NULL,
  `ID_multimedia` int(11) NOT NULL,
  `fecha` int(11) NOT NULL,
  `ubicacion` char(1) DEFAULT NULL,
  PRIMARY KEY (`ID_publicacion`),
  KEY `ID_usuario` (`ID_usuario`),
  KEY `ID_multimedia` (`ID_multimedia`),
  CONSTRAINT `ID_multimedia` FOREIGN KEY (`ID_multimedia`) REFERENCES `multimedia` (`ID_multimedia`),
  CONSTRAINT `publicaciones_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`ID_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicaciones`
--

LOCK TABLES `publicaciones` WRITE;
/*!40000 ALTER TABLE `publicaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `publicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `ID_usuario` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `numero_contacto` varchar(10) DEFAULT NULL,
  `foto_perfil` char(30) DEFAULT NULL,
  `apellidos` varchar(40) NOT NULL,
  `grupo` char(10) DEFAULT NULL,
  `turno` char(10) DEFAULT NULL,
  `rol` int(11) NOT NULL,
  PRIMARY KEY (`ID_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (0,'Kendra Regina','','0','C','Rauda Ramírez','q','v',0),(321184570,'Prueba','6694cc32d0c7ae8eeaf4','5575182296','fondofalcon.jpg','Hola Spoy','quinto','vespertino',1),(321234567,'Annie','269935db3772f699d32c','0','fondofalcon.jpg','Sánchez Hola','quinto','vespertino',1),(321234598,'Annie','f8a1509d84a89eb893b4','2147483647','fondofalcon.jpg','Sánchez Hola','quinto','vespertino',1),(322184570,'Prueba','1e86401177ffd46e140b','2147483647','fondofalcon.jpg','Hola Spoy','quinto','vespertino',1),(322185407,'Kendra Regina','ca2f2069ea0c6e465822','2147483647','Captura de pantalla 2023-06-21','Rauda Ramírez','cuarto','matutino',1),(322185470,'Annie','51f9f67c3ff39b7ea01e','2147483647','fondofalcon.jpg','Sánchez Hola','quinto','vespertino',1),(323186507,'','','0','','','','',0);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-23 17:53:40
