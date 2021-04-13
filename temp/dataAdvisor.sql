-- MySQL dump 10.13  Distrib 5.7.25, for osx10.9 (x86_64)
--
-- Host: localhost    Database: dataadvisor
-- ------------------------------------------------------
-- Server version	5.7.25

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
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'Sur la 5G, ce qui est vrai, ce qui est faux et ce qu’on ne sait pas encore\r\n','Le déploiement de la 5G, dont les premières fréquences sont activées mercredi 18 novembre en France, permettra d’avoir un débit Internet plus important, surtout utile pour les entreprises. ','2020-09-24 12:00:00','https://www.lemonde.fr/les-decodeurs/article/2020/09/24/5g-le-vrai-le-faux-et-ce-qu-on-ne-sait-pas-encore_6053447_4355770.html','uploads/article/monde.png'),(5,'Quel est le calendrier de la 5G en France ?','La construction du réseau 5G en France prendra dix ans. Depuis le 1er novembre, un premier réseau commercial, embryonnaire, est allumé en France. Numerama vous propose un récapitulatif des grandes échéances à venir pour l\'ultra haut débit mobile.','2020-11-20 00:00:00','https://www.numerama.com/politique/312368-deploiement-de-la-5g-quel-est-le-calendrier-defini-par-leurope.html','uploads/article/EAkjhEzXZFAhfQhzhSZV9yXUWRJ4h5MA.png'),(6,'À quoi sert la 5G ?','Alors que les opérateurs téléphoniques proposent les premiers forfaits 5G, Philippe Owezarski, directeur de recherche au CNRS, nous explique les enjeux du déploiement de ce nouveau standard de télécommunication, qui suscite encore interrogations et résistances.','2021-01-18 00:00:00','https://lejournal.cnrs.fr/articles/a-quoi-sert-la-5g','uploads/article/bKa8AuY5bdjE7qH6FJpTW6xHrPt4kyMm.jpeg'),(7,'Qu’est-ce que la 5G va changer pour les particuliers ?','La 5e génération de réseaux mobiles devrait permettre d’éviter la saturation dans des échanges, mais elle suscite aussi de nombreuses questions pratiques.','2020-09-19 03:40:00','https://www.lemonde.fr/les-decodeurs/article/2020/09/19/qu-est-ce-que-la-5g-va-changer-pour-les-particuliers_6052813_4355770.html','uploads/article/y2mzQUMU7mFNwXzfdB8kKCnqSQXzwwRw.png'),(8,'Parlons 5G : toutes vos questions sur la 5G','La « 5G » est la cinquième génération de réseaux mobiles, qui succède aux technologies 2G, 3G et 4G.\r\n\r\nComme les technologies précédentes, la 5G améliorera les services existants et favorisera le développement de nouveaux services. La 5G est une technologie évolutive qui va s’enrichir progressivement, au gré de l’évolution des standards au niveau mondial.','2021-03-29 00:00:00','https://www.arcep.fr/nos-sujets/parlons-5g-toutes-vos-questions-sur-la-5g.html','uploads/article/xKy8javksq1CRXUeoN5L8QtgrMoxjL2W.png'),(9,'Qu\'est-ce que la 5G ? Neuf réponses pour tout savoir','La 5G arrive ! Présente dans de nombreuses villes depuis la fin novembre, elle a été lancée à Paris ce 19 mars. Nice a été la première ville française couverte en 5G.... Mais au fait c\'est quoi la 5G? À quoi ça sert ? Comment l\'avoir ? Pour quoi faire ? Le Figaro vous répond.','2021-03-19 10:47:00','https://www.lefigaro.fr/secteur/high-tech/qu-est-ce-que-la-5g-neuf-reponses-pour-tout-savoir-20210319','uploads/article/VmWrD8D3rAvnQJJCg1GRFemYzgrCF94D.png'),(10,'Comment la 5G permet au port du Havre de se réinventer','La nouvelle génération de téléphonie mobile n\'en finit pas de soulever des interrogations. À quoi va-t-elle vraiment servir? Est-ce bien nécessaire? Pourtant, de nombreuses entreprises, industries, collectivités locales ont commencé à travailler sur le sujet, avec des cas concrets d\'utilisation. «Le Port du Havre offre des exemples concrets d\'utilisation de la 5G, loin des débats ésotériques sur le sujet», souligne Cédric O, secrétaire d\'État au numérique et aux télécoms.','2021-03-23 18:34:00','https://www.lefigaro.fr/secteur/high-tech/comment-la-5g-permet-au-port-du-havre-de-se-reinventer-20210323','uploads/article/APW8b9X17ZgEahhykzqUkVAEDQXPREPQ.png'),(11,'Les grandes villes françaises et la 5G: état des lieux','Prudence ou innovation technologique bienvenue ? De Lille, en faveur d\'un moratoire, à Nice, accueillante, les grandes villes françaises diffèrent sur le déploiement de la nouvelle génération de réseaux mobiles, qui permettra un débit internet décuplé.','2021-02-19 20:55:00','https://www.lefigaro.fr/flash-eco/les-grandes-villes-francaises-et-la-5g-etat-des-lieux-20210219','uploads/article/asPPJwEGYkoHXDXMmbfQqCKXRkjaPshU.png');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carte`
--

DROP TABLE IF EXISTS `carte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `json` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carte`
--

LOCK TABLES `carte` WRITE;
/*!40000 ALTER TABLE `carte` DISABLE KEYS */;
INSERT INTO `carte` VALUES (12,'uploads/cartes/EX7WcA8rQ4hCJrZQymKLD6UhkwsjqYRk.json','5G'),(13,'uploads/cartes/oiy9nzKpooQoX3VdGeKqYsY7zLGpJ87P.json','BOUY_2G'),(14,'uploads/cartes/hyaA2woBo4oQqccpLtpfZnnUAueh7eoD.json','BOUY_3G'),(15,'uploads/cartes/BHD2dckoGzgo4rHhjQaDMhh6jKTSmpi7.json','BOUY_4G'),(16,'uploads/cartes/H6h1cRmPjo2XK4m5rvUu37PZ3DCxPeqM.json','FREE_2G'),(17,'uploads/cartes/ZsFLfCzy9gqPCh7GtkW55Vm5uyZXnGNx.json','FREE_3G'),(18,'uploads/cartes/XeL4u7dTFxnJWYCAcGvnKXTQrNAQD2jU.json','FREE_4G'),(19,'uploads/cartes/gWRAPJFFg96aWeRVLtofDw7ZuRS7xsrK.json','ORANGE_4G'),(20,'uploads/cartes/osMMeEax3SDtTHS4FMwAXyxF4znpZL3d.json','ORANGE_2G'),(21,'uploads/cartes/nNuDbg1uw1g7wgHd3WaKogoSNaWXJyuV.json','ORANGE_3G'),(22,'uploads/cartes/iXhsu9QEmZXtP7FN87AMUmusqvE9yUu6.json','SFR_2G'),(23,'uploads/cartes/KMD7qDuvrLsX6TDSZY3pqEcJLYMWTuJJ.json','SFR_3G'),(24,'uploads/cartes/jes6oRQ74DSESKtHVBxbUEc154uPtqa5.json','SFR_4G'),(25,'uploads/cartes/HLxb8gSZJTZAJpHYBg9uqYyjVTaN9McB.json','FIBRE');
/*!40000 ALTER TABLE `carte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20210410125258','2021-04-10 12:53:14',134);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offre_box_internet`
--

DROP TABLE IF EXISTS `offre_box_internet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offre_box_internet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operateur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `has_tv` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offre_box_internet`
--

LOCK TABLES `offre_box_internet` WRITE;
/*!40000 ALTER TABLE `offre_box_internet` DISABLE KEYS */;
INSERT INTO `offre_box_internet` VALUES (1,'Offre Coup de Pouce Livebox','uploads/box-internet/ni3bUQmq6sFLZjwDKzexmnWdBArjaNX9.gif',19.99,'https://boutique.orange.fr/internet/offre-sociale','ORANGE','FIBRE',1),(4,'Red Box DSL Zone dégroupée','uploads/box-internet/7upZzq3oxHk72wDB3RoxDP63fL1bDUWz.jpeg',21,'https://www.red-by-sfr.fr/','SFR','ADSL',NULL),(5,'Bbox Fit Fibre','uploads/box-internet/GpWAb8ekDDis6WizaJH8e3cnzjbdcCwn.jpeg',29.99,'https://www.bouyguestelecom.fr/offres-internet','BOUY','FIBRE',NULL),(6,'Free Box 4G+','uploads/box-internet/78aM9MS6GjfU1gB5UJtVrrg87dDTCw2a.png',29.99,'https://www.free.fr/freebox/','FREE','4G',NULL),(7,'SFR ADSL Box 7','uploads/box-internet/5s8QUX4cdtXfEJXdEGYqwYcFPAQFB6Q1.png',33,'https://www.sfr.fr/offre-internet','SFR','ADSL',1),(9,'Free Mini 4K','uploads/box-internet/fwTSfa7GTHkvr4ESHr3CLZ1SBZbGNwjc.png',34.99,'https://www.free.fr/freebox/','FREE','FIBRE',1),(10,'Free Mini 4K','uploads/box-internet/s6zzCadHz8TUkLzdRmEg4fejGV7B2LAu.png',34.99,'https://www.free.fr/freebox/','FREE','ADSL',1),(11,'Red Box THD','uploads/box-internet/RMzvztFUv6j4jvQZvZxnQThwTjQfpL3p.png',27,'https://www.red-by-sfr.fr/','SFR','ADSL',1),(12,'Red Box Fibre','uploads/box-internet/jYqnACpE2CJjR2D6C35FdyFkqX95fP5v.png',27,'https://www.red-by-sfr.fr/','SFR','FIBRE',1),(14,'Red Box Fibre TV PLUS','uploads/box-internet/MmHptZ4eyVhDxzFyvtLu5HqttFNKqVXp.png',29,'https://www.red-by-sfr.fr/','SFR','FIBRE',1),(15,'Red Box THD TV PLUS','uploads/box-internet/s2UJCZURMpt5QaMFRH8gEdW2y9xisGrk.jpeg',29,'https://www.red-by-sfr.fr/','SFR','FIBRE',1),(17,'SFR Fibre Power 8 Box 8','uploads/box-internet/FoCmxPGUFyixejs1b9Ar4PLnRyuCQof6.jpeg',50,'https://www.sfr.fr/offre-internet','SFR','FIBRE',1),(18,'SFR Fibre Power 8 Box 7','uploads/box-internet/ZZ5zkWVoDcpugHjmrpzkZxT8XCRYVvZu.png',43,'https://www.sfr.fr/offre-internet','SFR','FIBRE',1),(19,'SFR Fibre Box 8','uploads/box-internet/s6vm91VTUzsmB4nw464KnQRovNDCyMso.jpeg',45,'https://www.sfr.fr/offre-internet','SFR','FIBRE',1),(20,'SFR Fibre Box 7','uploads/box-internet/9q1tN2sZP1jehEoNCZKrp6A3x5P2NV5e.png',38,'https://www.sfr.fr/offre-internet','SFR','FIBRE',1),(21,'SFR ADSL Power 8 Box 8','uploads/box-internet/XS5jRCAFQzTUSLJYXjYX2RrCPJkFDShw.jpeg',45,'https://www.sfr.fr/offre-internet','SFR','ADSL',1),(22,'SFR ADSL Power 8 Box 7','uploads/box-internet/Kyxp2oEKhbxTuKzjNCqX5TDTnTASgkdV.png',38,'https://www.sfr.fr/offre-internet','SFR','ADSL',1),(23,'SFR ADSL Box 8','uploads/box-internet/1ojKptgz4UgZEe6JrkDc4M2ENpVavAy8.jpeg',40,'https://www.sfr.fr/offre-internet','SFR','ADSL',1),(24,'SFR ADSL Box 7','uploads/box-internet/GayCtgt2DFq9STzZaxiVDUZzP2eykUH7.png',33,'https://www.sfr.fr/offre-internet','SFR','ADSL',1),(25,'SFR Box 4G+','uploads/box-internet/NmzPWazdvfrfpG7MDHdEZgmyMgeGv3k9.png',35,'https://www.sfr.fr/offre-internet','SFR','4G',0),(26,'Bbox Ultym Fibre','uploads/box-internet/Ti388yr2aDjghJ5NekuNpHHw7LLwBySR.png',45.99,'https://www.bouyguestelecom.fr/offres-internet','BOUY','FIBRE',1),(27,'Bbox Ultym','uploads/box-internet/gyNDGd9kbeNFt3wsrPUw4zmuBPemJX73.jpeg',40.99,'https://www.bouyguestelecom.fr/offres-internet','BOUY','ADSL',1),(28,'Bbox Must Fibre','uploads/box-internet/4ongwz8TwZhK4m8MrnEwutj7VUx5WQA1.jpeg',36.99,'https://www.bouyguestelecom.fr/offres-internet','BOUY','FIBRE',1),(29,'Bbox Must','uploads/box-internet/smWFr4ABAqbAQe6dw8xYDJ8DWoF1W5Fp.jpeg',33.99,'https://www.bouyguestelecom.fr/offres-internet','BOUY','ADSL',1),(30,'Bbox Fit','uploads/box-internet/jGjv92pbb1UHCczYbgXk82ZmfhkFpocP.jpeg',26.99,'https://www.bouyguestelecom.fr/offres-internet','BOUY','ADSL',0),(31,'4G Box','uploads/box-internet/HNTd2xWYRDQT3zF1nnosiASfd2ii8Bbx.jpeg',42.99,'https://www.bouyguestelecom.fr/offres-internet','BOUY','4G',0),(32,'Révolution avec TV by Canal','uploads/box-internet/icphX9xdzyY3FfbVP4WpVdSB2tikxDgf.png',44.99,'https://www.free.fr/freebox/','FREE','FIBRE',1),(33,'Révolution avec TV by Canal','uploads/box-internet/STC7AiwmxnAGVmLc8EjzWtiLfkv1JKk3.png',44.99,'https://www.free.fr/freebox/','FREE','ADSL',1),(34,'Freebox Pop','uploads/box-internet/pQqGXWyQNF8RHmMhMfwfUB3CyQi2eEEb.jpeg',39.99,'https://www.free.fr/freebox/','FREE','FIBRE',1),(35,'Freebox Pop','uploads/box-internet/z9GUxLmAbJF4ahiCiM3qajipZxB5cezV.jpeg',39.99,'https://www.free.fr/freebox/','FREE','ADSL',1),(36,'Freebox Delta S','uploads/box-internet/UPMKxgV1fjRSwjHJtYYvGbb6WCeHZEiK.jpeg',39.99,'https://www.free.fr/freebox/','FREE','FIBRE',0),(37,'Freebox Delta S','uploads/box-internet/NugtUmZGgqmtHvWk2ToEKbXtHYUWkxbx.jpeg',39.99,'https://www.free.fr/freebox/','FREE','ADSL',0),(38,'Freebox Delta','uploads/box-internet/9xvSHA9oAbzS2WGZFYh5pNUVdu7uTEgu.png',49.99,'https://www.free.fr/freebox/','FREE','FIBRE',1),(39,'Freebox Delta','uploads/box-internet/rDQrwG6xBAg9LCerA2foGzTHWieC9dFH.png',49.99,'https://www.free.fr/freebox/','FREE','ADSL',1),(40,'Livebox ADSL','uploads/box-internet/VsUfged8hQk4NpGt8Nhsd2kQVP8Fazbu.jpeg',22.99,'https://boutique.orange.fr/internet/offre-sociale','ORANGE','ADSL',1),(41,'Livebox Fibre','uploads/box-internet/hNmi6aEKXWZCTmaMPwqgvbB5cnn36paF.jpeg',22.99,'https://boutique.orange.fr/internet/offre-sociale','ORANGE','FIBRE',1),(42,'Livebox Up Fibre','uploads/box-internet/YwaYey7S3wCpWYRjePPScLYxbeMC3VLw.png',29.99,'https://boutique.orange.fr/internet/offre-sociale','ORANGE','FIBRE',1),(43,'Livebox Up ADSL','uploads/box-internet/9LeVeTvn85k1C8X4GhzsptChfchmbwfd.png',29.99,'https://boutique.orange.fr/internet/offre-sociale','ORANGE','ADSL',1),(44,'4G Home','uploads/box-internet/pioDZPofLiWkf9wnNFwzGjLksR2eSM9r.png',36.99,'https://boutique.orange.fr/internet/offre-sociale','ORANGE','4G',0);
/*!40000 ALTER TABLE `offre_box_internet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offre_mobile`
--

DROP TABLE IF EXISTS `offre_mobile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offre_mobile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operateur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offre_mobile`
--

LOCK TABLES `offre_mobile` WRITE;
/*!40000 ALTER TABLE `offre_mobile` DISABLE KEYS */;
INSERT INTO `offre_mobile` VALUES (1,'Free 50 Mo','uploads/mobile/cQp8q1djCwWJTqe7zUuQ5jzVvU88WgNp.png',2,'http://mobile.free.fr/fiche-forfait-2-euros.html','FREE','50 Go','4G'),(2,'SFR 100 Go 5G','uploads/mobile/2t8JNCcn6xW45mX3ekg5MzSMneH1Wffp.jpeg',50,'https://www.sfr.fr/offre-mobile','SFR','100 Go','5G'),(3,'Orange 2h 100 Mo','uploads/mobile/YLhJxkm4oX2vRgiNqgJkStwHe3FNQ41z.png',2.99,'https://m.boutique.orange.fr/mobile/offre/forfait-2h-100mo','ORANGE','100 Mo','4G'),(4,'Sensation 150go','uploads/mobile/udLEnzGnocpxawDebBv5vRvCpHTG76Vt.png',69.99,'https://www.bouyguestelecom.fr/forfaits-mobiles/avec-engagement/sensation-avantages-smartphone#Sensation%20150Go%20Avantages%20Smartphone','BOUY','150 Go','5G'),(5,'Sensation 90go','uploads/mobile/pu4C9irutvyRKer9hHtjoFW23CC3gint.png',48.99,'https://www.bouyguestelecom.fr/forfaits-mobiles/avec-engagement/sensation-avantages-smartphone#Sensation%20150Go%20Avantages%20Smartphone','BOUY','90 Go','5G'),(6,'Sensation 60go','uploads/mobile/3iCmsN4R99KCSKtPMh5JMFVL6tHJgUCN.png',41.99,'https://www.bouyguestelecom.fr/forfaits-mobiles/avec-engagement/sensation-avantages-smartphone#Sensation%20150Go%20Avantages%20Smartphone','BOUY','60 Go','5G'),(7,'Sensation 10go','uploads/mobile/TFZY7nNZqM4JW9dLbi2JPu3L2Jtkym6a.png',27.99,'https://www.bouyguestelecom.fr/forfaits-mobiles/avec-engagement/sensation-avantages-smartphone#Sensation%20150Go%20Avantages%20Smartphone','BOUY','10 Go','4G'),(8,'B&You 130g','uploads/mobile/2Hc74iD5MuAxVxPmYGj9F7XJV6w8jKCs.jpeg',24.99,'https://www.bouyguestelecom.fr/forfaits-mobiles/sans-engagement#S%C3%A9rie%20Speciale%20B&YOU%20130Go%205G','BOUY','130 Go','5G'),(9,'B&You 160g','uploads/mobile/mDiedswB64njKDip1FZ5Yk36MPxqPA8R.jpeg',19.99,'https://www.bouyguestelecom.fr/forfaits-mobiles/sans-engagement#S%C3%A9rie%20Speciale%20B&YOU%20130Go%205G','BOUY','160 Go','4G'),(10,'B&You 100g','uploads/mobile/TDXb1N6uKUwN5oXVis2Jzex6LZUMpRJn.jpeg',14.99,'https://www.bouyguestelecom.fr/forfaits-mobiles/sans-engagement#S%C3%A9rie%20Speciale%20B&YOU%20130Go%205G','BOUY','100 Go','4G'),(11,'B&You 60g','uploads/mobile/36nfeyCMPqVAWMjDnumn3BhVUYNbk32z.jpeg',12.99,'https://www.bouyguestelecom.fr/forfaits-mobiles/sans-engagement#S%C3%A9rie%20Speciale%20B&YOU%20130Go%205G','BOUY','60 Go','4G'),(12,'B&You 1g','uploads/mobile/VeEW9Ymd3PzVUrQaGC2wCbMzR6uQCLLv.jpeg',4.99,'https://www.bouyguestelecom.fr/forfaits-mobiles/sans-engagement#S%C3%A9rie%20Speciale%20B&YOU%20130Go%205G','BOUY','1 Go','4G'),(13,'Orange illimités 5G','uploads/mobile/8mN6boCqRLWkyMqQcahantWaWGAdxHb6.png',94.99,'https://m.boutique.orange.fr/mobile/offres','ORANGE','ILLIMITE','5G'),(14,'Orange 150 Go 5G','uploads/mobile/Q2gYrRJF8VjNuZc4tfezME92XoZ6ew2t.png',64.99,'https://m.boutique.orange.fr/mobile/offres','ORANGE','150 Go','5G'),(15,'Orange 100 Go 5G','uploads/mobile/zTCYyVKtYrF74Qrbhh6ihGz6At1sXinT.png',49.99,'https://m.boutique.orange.fr/mobile/offres','ORANGE','100 Go','5G'),(16,'Orange 70 Go 5G','uploads/mobile/jjacSTe4XGTHr7BMuBKfg3TFzpXVEuA5.png',39.99,'https://m.boutique.orange.fr/mobile/offres','ORANGE','70 Go','5G'),(17,'Orange 80 Go','uploads/mobile/ZJzjBwLMEWDh5FFwhpvnVkzaC8ec2ujy.png',44.99,'https://m.boutique.orange.fr/mobile/offres','ORANGE','80 Go','4G'),(18,'Orange 70 Go','uploads/mobile/and3kJ154w8cvKE1Yb444d7SG6yezJzC.png',34.99,'https://m.boutique.orange.fr/mobile/offres','ORANGE','70 Go','4G'),(19,'Orange 10 Go','uploads/mobile/XrZmJDbGm1sUTW2jKubXRnKV6sgJZHoy.png',26.99,'https://m.boutique.orange.fr/mobile/offres','ORANGE','10 Go','4G'),(20,'Orange 2h 5 Go','uploads/mobile/8GF1s5PPfeFfJLwn2gv7xbCzrkDvyR7v.png',16.99,'https://m.boutique.orange.fr/mobile/offres','ORANGE','5 Go','4G'),(21,'SFR illimités 5G','uploads/mobile/A2kq4sghgCWjw9EtLsRt2bnXLjx7fRi5.jpeg',80,'https://www.sfr.fr/offre-mobile','SFR','ILLIMITE','5G'),(22,'SFR 150 Go 5G','uploads/mobile/Bc5mf7jhx3GHTvjEtZZPN6mUbFzL55Wf.jpeg',65,'https://www.sfr.fr/offre-mobile','SFR','150 Go','5G'),(23,'SFR 80 Go 5G','uploads/mobile/J2SVCzJR6LjzPdtWk3eGyB8kD8wQ1zXL.jpeg',40,'https://www.sfr.fr/offre-mobile','SFR','80 Go','5G'),(24,'SFR 80 Go','uploads/mobile/YDE7Z2eUz1mKFUb1ex16BF8koAikDbRZ.jpeg',35,'https://www.sfr.fr/offre-mobile','SFR','80 Go','4G'),(25,'SFR 5 Go','uploads/mobile/aRDgx6C3FYhHw78zTJ36GqF3ynj7Hf1t.jpeg',17,'https://www.sfr.fr/offre-mobile','SFR','5 Go','4G'),(26,'SFR 2h 100 Mo','uploads/mobile/VnKjJWskEgfrxdWo33mxzcZbwtv258bJ.jpeg',8,'https://www.sfr.fr/offre-mobile','SFR','100 Mo','4G'),(27,'Free 150 Go 5G','uploads/mobile/fN5QyiLXUnmoyK66VNK72skV5MjHAVfJ.png',19.99,'http://mobile.free.fr/fiche-forfait-free.html','FREE','150 Go','5G');
/*!40000 ALTER TABLE `offre_mobile` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-13  6:06:37
