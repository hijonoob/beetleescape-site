-- MySQL dump 10.13  Distrib 5.1.69, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: beetleescape
-- ------------------------------------------------------
-- Server version	5.1.69-0ubuntu0.11.10.1

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
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticias` (
  `id` int(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descricao` varchar(600) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `texto` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (2,'Duis eleifend dui at mauris porttitor imperdiet aliquet ut eros','Duis eleifend dui at mauris porttitor imperdiet aliquet ut eros. Duis eleifend dui at mauris porttitor imperdiet aliquet ut eros.','MaurÃ­cio','10/05/2014','texto completo da notÃ­cia com id 2'),(3,'Nulla elementum eget ante et volutpat','Nulla elementum eget ante et volutpat Nulla elementum eget ante et volutpat','Lucas','15/05/2014','texto completo da notÃ­cia com id 3'),(1,'Duis eleifend dui at mauris porttitor imperdiet aliquet ut eros','Maecenas ante est, convallis eu lacus aliquam, laoreet pharetra nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae','Murilo','19/05/2014','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at consequat dolor. Cras id magna vitae felis consequat hendrerit pharetra in justo. Proin placerat mi quis ipsum tincidunt eleifend. Phasellus faucibus imperdiet pellentesque. Sed id ipsum orci. Mauris sed porttitor massa. Mauris scelerisque lectus sed tellus faucibus, pellentesque vehicula enim cursus.\r\n\r\nNunc ultrices leo et mi consequat convallis. Phasellus nec arcu massa. Donec semper vulputate ante, id hendrerit felis consequat vel. Morbi bibendum tortor vel lorem viverra laoreet. Donec tempus eleifend ultricies. Curabitur nec eleifend tortor. Morbi id sodales dolor, vitae placerat leo. Maecenas varius vulputate mauris, sit amet ullamcorper magna luctus at. Duis eu eros dictum, hendrerit tellus commodo, elementum neque. Suspendisse at euismod elit. Nam faucibus, metus nec aliquam sodales, orci erat aliquam orci, sit amet rutrum ipsum diam eu est. Nunc et aliquet est, in iaculis mi. Nam vel rhoncus magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;\r\n\r\nQuisque libero augue, convallis et commodo at, fermentum vitae enim. Duis viverra libero leo, et euismod tellus viverra id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus semper suscipit tellus, nec volutpat neque. In vulputate neque eu odio pharetra mollis. Fusce mollis a erat nec varius. Duis eleifend dui at mauris porttitor imperdiet aliquet ut eros. Nulla facilisi. Maecenas ante est, convallis eu lacus aliquam, laoreet pharetra nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi nec nibh ultricies, ultricies tellus vel, imperdiet odio.'),(4,'Pellentesque eget porttitor sem, ac lobortis sapien','Nunc ac posuere urna, quis pellentesque justo. Pellentesque faucibus eros ac leo suscipit ornare','MaurÃ­cio','20/05/2014','Quisque eu rutrum velit, non pharetra odio. Ut vitae arcu eu nunc fringilla mollis. Suspendisse et elit dapibus, feugiat turpis ut, bibendum libero. Cras non dapibus turpis. Vivamus molestie lobortis diam. Nulla elementum eget ante et volutpat. Aenean luctus augue velit, eu varius diam egestas at. Mauris eu ligula id metus faucibus sagittis. Nam ac gravida lorem, non mattis ipsum. Ut blandit commodo scelerisque.\r\n\r\nVestibulum ac dignissim lectus, vel semper ante. Pellentesque ultricies euismod eros ut gravida. Vestibulum elementum nec mi vitae laoreet. Proin sit amet consequat dolor, et convallis dolor. Pellentesque eget porttitor sem, ac lobortis sapien. Nunc ac posuere urna, quis pellentesque justo. Pellentesque faucibus eros ac leo suscipit ornare. Cras id diam sollicitudin augue iaculis imperdiet. Donec nec sapien euismod enim hendrerit congue.'),(6,'Nulla elementum eget ante et volutpat','Aenean luctus augue velit, eu varius diam egestas at. Mauris eu ligula id metus faucibus sagittis','Lucas','21/05/2014','Nunc ultrices leo et mi consequat convallis. Phasellus nec arcu massa. Donec semper vulputate ante, id hendrerit felis consequat vel. Morbi bibendum tortor vel lorem viverra laoreet. Donec tempus eleifend ultricies. Curabitur nec eleifend tortor. Morbi id sodales dolor, vitae placerat leo. Maecenas varius vulputate mauris, sit amet ullamcorper magna luctus at. Duis eu eros dictum, hendrerit tellus commodo, elementum neque. Suspendisse at euismod elit. Nam faucibus, metus nec aliquam sodales, orci erat aliquam orci, sit amet rutrum ipsum diam eu est. Nunc et aliquet est, in iaculis mi. Nam vel rhoncus magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;\r\n\r\nQuisque libero augue, convallis et commodo at, fermentum vitae enim. Duis viverra libero leo, et euismod tellus viverra id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus semper suscipit tellus, nec volutpat neque. In vulputate neque eu odio pharetra mollis. Fusce mollis a erat nec varius. Duis eleifend dui at mauris porttitor imperdiet aliquet ut eros. Nulla facilisi. Maecenas ante est, convallis eu lacus aliquam, laoreet pharetra nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi nec nibh ultricies, ultricies tellus vel, imperdiet odio.\r\n\r\nQuisque eu rutrum velit, non pharetra odio. Ut vitae arcu eu nunc fringilla mollis. Suspendisse et elit dapibus, feugiat turpis ut, bibendum libero. Cras non dapibus turpis. Vivamus molestie lobortis diam. Nulla elementum eget ante et volutpat. Aenean luctus augue velit, eu varius diam egestas at. Mauris eu ligula id metus faucibus sagittis. Nam ac gravida lorem, non mattis ipsum. Ut blandit commodo scelerisque.');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usuario` varchar(200) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `permissao` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('dadlo','Danilo Sartorelli Barbato','dadlobr@gmail.com','$6$lFcgIuDN$.EfDGHsyj/5yILTDuKksSiA36IC4gPI87N4Ne2c.kmq7hjMuJ/XN.fuxJzCOjRbVhQx84UDVd9Nwgbmf2flBw0',3),('lucasvbf','Lucas','lucasvbf@gmail.com','$6$jRwe5BdP$Ph5td4aS34OFN.mpP1sJIL4FpQDuwUvUH7yfA0wuaRL30Gc6VWNI7UUPkzRntyx5qZZHbmUPFrUgP6neXYy2P1',2),('batata','MaurÃ­cio','mauricio.garpard@me.com','$6$S2H7lFfq$TQQgjn8IrSkpJ3AThVdA9aLZMimh3fyyRD8svdMYWrxszKpOFRf2wf7729eTG6O9v8eLPZEAHejhVY/X8U4YK0',3),('murilo','Murilo','murilo@a.com','$6$WeFQScFw$9EP.fyp.DAR7c8vPI5UWWQRUgxxN.Z.wNuGKQbYFbpJGTeu8zw56BDFUPb8Lvit4qHf1Kvzz8Z0HqUZri1cfI/',1),('viewer','viewer','viewer@a.com','$6$wkcBO2dd$VfTGJxKMoK6RFq47kfRoBvOzlfwTuQQp.ad9Q/BgO4t38hbIk34B67DiLAB4metmlRAYlk/PFuDi69ofS1FNN0',0);
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

-- Dump completed on 2014-05-19 16:47:06
