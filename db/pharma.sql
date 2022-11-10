CREATE DATABASE  IF NOT EXISTS `pharma` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pharma`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: pharma
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `managerId` int DEFAULT NULL,
  `customerName` varchar(50) DEFAULT NULL,
  `billId` varchar(8) DEFAULT NULL,
  `billDate` varchar(20) DEFAULT NULL,
  `medicineName` varchar(50) DEFAULT NULL,
  `amountPaid` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,3,'Meet Prajapati','111','20-01-2003','abc',20,NULL);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `manager` (
  `id` int NOT NULL AUTO_INCREMENT,
  `managerName` varchar(50) DEFAULT NULL,
  `pharmaToken` varchar(10) DEFAULT NULL,
  `emailId` varchar(50) DEFAULT NULL,
  `passwd` varchar(12) DEFAULT NULL,
  `storeName` varchar(50) DEFAULT NULL,
  `contactNo` varchar(13) DEFAULT NULL,
  `profilePhoto` mediumblob,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emailId` (`emailId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manager`
--

LOCK TABLES `manager` WRITE;
/*!40000 ALTER TABLE `manager` DISABLE KEYS */;
INSERT INTO `manager` VALUES (3,'Meet Prajapati','12345','meetprajapati20@gnu.ac.in','Meet2003@',NULL,NULL,NULL);
/*!40000 ALTER TABLE `manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `medicineName` varchar(50) DEFAULT NULL,
  `genericName` varchar(50) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `medicineType` varchar(20) DEFAULT NULL,
  `strength` varchar(20) DEFAULT NULL,
  `unitCost` float DEFAULT NULL,
  `supplierCost` float DEFAULT NULL,
  `itemPrBox` int DEFAULT NULL,
  `details` text,
  `medicineImage` mediumblob,
  `status` varchar(10) DEFAULT 'inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (3,'Abaclor','Cefaclor Monohydrate','Capsule','','250 mg',0.42,0.37,NULL,NULL,NULL,'inactive'),(4,'Abecab','Amlodipine Besilate + Olmesartan Medoxomil','Tablet','','5 mg+20 mg',0.24,0.21,NULL,NULL,NULL,'inactive'),(5,'Abecab','Amlodipine Besilate + Olmesartan Medoxomil','Tablet','','5 mg+40 mg',0.38,0.33,NULL,NULL,NULL,'inactive'),(6,'Abetis','Olmesartan Medoxomil','Tablet','','40 mg',0.36,0.32,NULL,NULL,NULL,'inactive'),(7,'Abetis','Olmesartan Medoxomil','Tablet','','10 mg',0.12,0.11,NULL,NULL,NULL,'inactive'),(8,'Abetis','Olmesartan Medoxomil','Tablet','','20 mg',0.2,0.18,NULL,NULL,NULL,'inactive'),(9,'Abetis Plus','Olmesartan Medoxomil + Hydrochlorothiazide','Tablet','','20 mg+12.5 mg',0.2,0.18,NULL,NULL,NULL,'inactive'),(10,'Abetis Plus','Olmesartan Medoxomil + Hydrochlorothiazide','Tablet','','40 mg+12.5 mg',0.3,0.26,NULL,NULL,NULL,'inactive'),(11,'Abixa','Memantine Hydrochloride','Tablet','','10 mg',0.16,0.14,NULL,NULL,NULL,'inactive'),(12,'Accolate','Zafirlukast','Tablet','','20 mg',1,0.46,NULL,NULL,NULL,'inactive'),(13,'ACI ORS','Oral Rehydration Salt [Powder]','Powder','','10.25 gm',0.1,0.09,NULL,NULL,NULL,'inactive'),(14,'Acicaft','Alcaftadine','Drop','','0.0025',8,7.04,NULL,NULL,NULL,'inactive'),(15,'Acical','Calcium Carbonate [Elemental source]','Tablet','','500 mg',0.08,0.07,NULL,NULL,NULL,'inactive'),(16,'Acical JR','Calcium Carbonate [Elemental source]','Tablet','','250 mg',0.06,0.05,NULL,NULL,NULL,'inactive'),(18,'Acical-D','Calcium Carbonate [Elemental source] + Vitamin D3','Tablet','','500 mg+200 IU',0.14,0.12,NULL,NULL,NULL,'inactive'),(19,'Acical-DX','Calcium Carbonate [Elemental source] + Vitamin D3','Tablet','','600 mg+400 IU',0.3,0.26,NULL,NULL,NULL,'inactive'),(20,'Acicot','Dexamethasone (Ophthalmic)','Drop','','0.001',1.3,1.14,NULL,NULL,NULL,'inactive'),(21,'Acidron','Zoledronic Acid [For hypercalcemia]','Injection','','4 mg/5 ml',100,88,NULL,NULL,NULL,'inactive'),(22,'Aciflox','Sparfloxacin','Tablet','','200 mg',0.24,0.21,NULL,NULL,NULL,'inactive'),(23,'Acilog','Protamine Crystallised Insulin Aspart','Injection','','100 IU/ml',17,15,NULL,NULL,NULL,'inactive'),(24,'Acilog Mix','Biphasic Insulin Aspart','Injection','','30%+70%',17,15,NULL,NULL,NULL,'inactive'),(25,'Aciphin','Ceftriaxone Sodium','Injection','','1 gm/vial',3.83,3.37,NULL,NULL,NULL,'inactive'),(26,'Aciphin','Ceftriaxone Sodium','Injection','','2 gm/vial',6.04,5.32,NULL,NULL,NULL,'inactive'),(27,'Aciphin','Ceftriaxone Sodium','Injection','','250 mg/vial',2.01,2,NULL,NULL,NULL,'inactive'),(28,'Aciphin','Ceftriaxone Sodium','Injection','','500 mg/vial',3,2.29,NULL,NULL,NULL,'inactive'),(29,'Acitrin','Cetirizine Hydrochloride','Tablet','','10 mg',0.06,0.05,NULL,NULL,NULL,'inactive'),(30,'Acitrin','Cetirizine Hydrochloride','Syrup','','5 mg/5 ml',1,1,NULL,NULL,NULL,'inactive'),(31,'Acitrin','Cetirizine Hydrochloride','Drop','','2.5 mg/ml',1,0.44,NULL,NULL,NULL,'inactive'),(32,'Acitrin-L','Levocetirizine Dihydrochloride','Tablet','','5 mg',0.06,0.05,NULL,NULL,NULL,'inactive'),(33,'Acitrin-L','Levocetirizine Dihydrochloride','Solution','','2.5 mg/5 ml',1.1,1,NULL,NULL,NULL,'inactive'),(34,'Acora','Ticagrelor','Tablet','','90 mg',2,1.32,NULL,NULL,NULL,'inactive'),(35,'Adair','Roflumilast','Tablet','','500 mcg',0.3,0.26,NULL,NULL,NULL,'inactive'),(36,'Adegra','Sildenafil Citrate','Tablet','','25 mg',0.4,0.35,NULL,NULL,NULL,'inactive'),(37,'Adegra','Sildenafil Citrate','Tablet','','50 mg',1,1,NULL,NULL,NULL,'inactive'),(38,'Adegra','Sildenafil Citrate','Tablet','','100 mg',1,1,NULL,NULL,NULL,'inactive'),(39,'Adelax','Flupentixol + Melitracen','Tablet','','0.5 mg+10 mg',0.1,0.09,NULL,NULL,NULL,'inactive'),(40,'Adgar','Adapalene','Gel','','0.001',1.2,1.06,NULL,NULL,NULL,'inactive'),(41,'Adgar','Adapalene','Gel','','0.003',2,1.41,NULL,NULL,NULL,'inactive'),(42,'Alaclov','Valacyclovir','Tablet','','500 mg',1,1,NULL,NULL,NULL,'inactive'),(43,'Alaron','Loratadine','Tablet','','10 mg',0.05,0.04,NULL,NULL,NULL,'inactive'),(44,'Alaron','Loratadine','Suspension','','5 mg/5 ml',1,1,NULL,NULL,NULL,'inactive'),(45,'Almex','Paracitamol','Rokok','','400ml',1.2,7,NULL,NULL,NULL,'inactive'),(46,'Amantril','Amantadine Hydrochloride','Capsule','','100 mg',0.2,0.18,NULL,NULL,NULL,'inactive'),(47,'Ambrox','Paracitamol','Rokok','','500ml',75.15,50.15,NULL,NULL,NULL,'inactive'),(48,'Amlex','Amlexanox','Paste','','0.05',2,1.32,NULL,NULL,NULL,'inactive'),(49,'Amotrex','Metronidazole','Tablet','','400 mg',0.03,0.03,NULL,NULL,NULL,'inactive'),(50,'Amotrex','Metronidazole','Injection','','500 mg/100 ml',2,2,NULL,NULL,NULL,'inactive'),(51,'Amotrex','Metronidazole','Suspension','','200 mg/5 ml',1,1,NULL,NULL,NULL,'inactive'),(52,'Amotrex','Metronidazole','Tablet','','200 mg',0.02,0.02,NULL,NULL,NULL,'inactive'),(53,'Amotrex DS','Metronidazole','Tablet','','800 mg',0.04,0.04,NULL,NULL,NULL,'inactive'),(54,'Anaflex','Naproxen Sodium','Tablet','','500 mg',0.18,0.16,NULL,NULL,NULL,'inactive'),(55,'Anaflex','Naproxen Sodium','Gel','','10% w/w',1.25,1.1,NULL,NULL,NULL,'inactive'),(56,'Anaflex','Naproxen Sodium','Tablet','','250 mg',0.1,0.09,NULL,NULL,NULL,'inactive'),(57,'Anaflex Max','Naproxen Sodium + Esomeprazole Magnesium','Tablet','','500 mg+20 mg',0.23,0.2,NULL,NULL,NULL,'inactive'),(58,'Anaflex Max','Naproxen Sodium + Esomeprazole Magnesium','Tablet','','375 mg+20 mg',0.2,0.18,NULL,NULL,NULL,'inactive'),(59,'Anaflex SR','Naproxen Sodium','Tablet','','500 mg',0.28,0.25,NULL,NULL,NULL,'inactive'),(60,'Anaxyl','Tranexamic Acid','Tablet','','500 mg',0.4,0.35,NULL,NULL,NULL,'inactive'),(61,'Anaxyl','Tranexamic Acid','Injection','','500 mg/5 ml',1.01,1,NULL,NULL,NULL,'inactive'),(62,'Antiva','Paracitamol','Tablet','','500ml',13,10,NULL,NULL,NULL,'inactive'),(63,'Anzitor','Paracitamol','Cream','','200ml',3.33,3,NULL,NULL,NULL,'inactive'),(64,'Apsol','Apsoleric','Liquid','','200',23.33,20,NULL,NULL,NULL,'inactive'),(65,'Aptin','Vildagliptin','Tablet','','50 mg',0.4,0.35,NULL,NULL,NULL,'inactive'),(66,'Aptin M','Vildagliptin + Metformin Hydrochloride','Tablet','','50 mg+850 mg',0.46,0.4,NULL,NULL,NULL,'inactive'),(67,'Aptin M','Vildagliptin + Metformin Hydrochloride','Tablet','','50 mg+500 mg',0.44,0.39,NULL,NULL,NULL,'inactive'),(68,'Arbitel','Telmisartan','Tablet','','20 mg',0.14,0.12,NULL,NULL,NULL,'inactive'),(69,'Arbitel','Telmisartan','Tablet','','40 mg',0.25,0.22,NULL,NULL,NULL,'inactive'),(70,'Arbitel','Telmisartan','Tablet','','80 mg',0.4,0.35,NULL,NULL,NULL,'inactive'),(71,'Arbitel AM','Amlodipine Besilate + Telmisartan','Tablet','','5 mg+80 mg',0.36,0.32,NULL,NULL,NULL,'inactive'),(72,'Arbitel AM','Amlodipine Besilate + Telmisartan','Tablet','','5 mg+40 mg',0.25,0.22,NULL,NULL,NULL,'inactive'),(73,'Arbitel Plus','Telmisartan + Hydrochlorothiazide','Tablet','','40 mg+12.5 mg',0.25,0.22,NULL,NULL,NULL,'inactive'),(74,'Arbitel Plus','Telmisartan + Hydrochlorothiazide','Tablet','','80 mg+12.5 mg',0.4,0.35,NULL,NULL,NULL,'inactive'),(75,'arimedhadi thailam','','Rokok','','',73,50,NULL,NULL,NULL,'inactive'),(76,'Arimidex','Anastrozole','Tablet','','1 mg',1,1,NULL,NULL,NULL,'inactive'),(77,'Armoda','Armodafinil','Tablet','','250 mg',1,0.44,NULL,NULL,NULL,'inactive'),(78,'Armoda','Armodafinil','Tablet','','150 mg',0.3,0.26,NULL,NULL,NULL,'inactive'),(79,'Aronem','Meropenem Trihydrate','Injection','','1 gm/vial',24.16,21.26,NULL,NULL,NULL,'inactive'),(80,'Aronem','Meropenem Trihydrate','Injection','','500 mg/vial',13.09,12,NULL,NULL,NULL,'inactive'),(81,'Artica','Hydroxyzine Hydrochloride','Syrup','','10 mg/5 ml',1,1,NULL,NULL,NULL,'inactive'),(82,'Artica','Hydroxyzine Hydrochloride','Tablet','','25 mg',0.04,0.04,NULL,NULL,NULL,'inactive'),(83,'Artica','Hydroxyzine Hydrochloride','Tablet','','10 mg',0.03,0.02,NULL,NULL,NULL,'inactive'),(84,'Artigo','Cinnarizine + Dimenhydrinate','Tablet','','20 mg+40 mg',0.04,0.04,NULL,NULL,NULL,'inactive'),(85,'Atasin','Atorvastatin Calcium','Tablet','','10 mg',0.22,0.19,NULL,NULL,NULL,'inactive'),(86,'Atasin','Atorvastatin Calcium','Tablet','','80 mg',1,1,NULL,NULL,NULL,'inactive'),(87,'Atasin','Atorvastatin Calcium','Tablet','','40 mg',0.48,0.43,NULL,NULL,NULL,'inactive'),(88,'Atasin','Atorvastatin Calcium','Tablet','','20 mg',0.36,0.32,NULL,NULL,NULL,'inactive'),(89,'Atier','Hypromellose','Drop','','0.003',1.4,1.23,NULL,NULL,NULL,'inactive'),(90,'Avintol','Vinpocetine','Tablet','','5 mg',0.06,0.05,NULL,NULL,NULL,'inactive'),(91,'Avlocid','Aluminium Hydroxide + Magnesium Hydroxide','Suspension','','(250 mg+400 mg)/5 ml',1,1,NULL,NULL,NULL,'inactive'),(92,'Avlocid','Aluminium Hydroxide + Magnesium Hydroxide','Tablet','','175 mg+225 mg',0.01,0.01,NULL,NULL,NULL,'inactive'),(93,'Avlocid MS','Magaldrate + Simethicone','Suspension','','(480 mg+20 mg)/5 ml',2.01,2,NULL,NULL,NULL,'inactive'),(94,'Avlocid MS','Magaldrate + Simethicone','Tablet','','480 mg+20 mg',0.06,0.05,NULL,NULL,NULL,'inactive'),(98,'Avloclav','Amoxicillin + Clavulanic Acid','Tablet','','875 mg+125 mg',1,1,NULL,NULL,NULL,'inactive'),(99,'Avloclav','Amoxicillin + Clavulanic Acid','Tablet','','500 mg+125 mg',1,1,NULL,NULL,NULL,'inactive'),(100,'Avloclav','Amoxicillin + Clavulanic Acid','Tablet','','250 mg+125 mg',1,0.44,NULL,NULL,NULL,'inactive'),(102,'Avloclav','Amoxicillin + Clavulanic Acid','Injection','','(1 gm+200 mg)/20 ml',6,5.28,NULL,NULL,NULL,'inactive'),(104,'Avlomox','Amoxicillin Trihydrate','Injection','','500 mg/vial',1,1,NULL,NULL,NULL,'inactive'),(105,'Avlomox','Amoxicillin Trihydrate','Capsule','','250 mg',0.07,0.06,NULL,NULL,NULL,'inactive'),(106,'Avlomox','Amoxicillin Trihydrate','Suspension','','125 mg/5 ml',1,1,NULL,NULL,NULL,'inactive'),(107,'Avlomox','Amoxicillin Trihydrate','Capsule','','500 mg',0.15,0.13,NULL,NULL,NULL,'inactive'),(108,'Avlomox','Amoxicillin Trihydrate','Drop','','125 mg/1.25 ml',1,1,NULL,NULL,NULL,'inactive'),(109,'Avlomox DS','Amoxicillin Trihydrate','Suspension','','250 mg/5 ml',1.31,1.15,NULL,NULL,NULL,'inactive'),(110,'Avloquin','Chloroquine Phosphate','Syrup','','50 mg/5 ml',0.3,0.26,NULL,NULL,NULL,'inactive'),(111,'Avloquin','Chloroquine Phosphate','Tablet','','250 mg',0.03,0.02,NULL,NULL,NULL,'inactive'),(112,'Avlosef','Cephradine','Injection','','1 gm/vial',2,2,NULL,NULL,NULL,'inactive'),(113,'Avlosef','Cephradine','Suspension','','125 mg/5 ml',2,2,NULL,NULL,NULL,'inactive'),(114,'Avlosef','Cephradine','Drop','','125 mg/1.25 ml',1.3,1.15,NULL,NULL,NULL,'inactive'),(115,'Avlosef','Cephradine','Capsule','','250 mg',0.16,0.14,NULL,NULL,NULL,'inactive'),(116,'Avlosef','Cephradine','Capsule','','500 mg',0.3,0.26,NULL,NULL,NULL,'inactive'),(117,'Avlosef DS','Cephradine','Suspension','','250 mg/5 ml',3,2.38,NULL,NULL,NULL,'inactive'),(118,'Avlotrin','Sulphamethoxazole + Trimethoprim','Tablet','','400 mg+80 mg',0.03,0.03,NULL,NULL,NULL,'inactive'),(119,'Avlotrin','Sulphamethoxazole + Trimethoprim','Suspension','','(200 mg+40 mg)/5 ml',0.44,0.39,NULL,NULL,NULL,'inactive'),(120,'Avlotrin DS','Sulphamethoxazole + Trimethoprim','Tablet','','800 mg+160 mg',0.04,0.04,NULL,NULL,NULL,'inactive'),(121,'Bepost','Bepotastine Besilate','Drop','','0.015',6,5.28,NULL,NULL,NULL,'inactive'),(122,'Bet One','','Rokok','','',0.07,0.05,NULL,NULL,NULL,'inactive'),(123,'Betno N','Betamethasone + Neomycin Sulphate (Topical)','Cream','','0.1%+0.5%',1,1,NULL,NULL,NULL,'inactive'),(124,'Betno-CL','Betamethasone + Clotrimazole','Cream','','0.05%+1%',1,1,NULL,NULL,NULL,'inactive'),(125,'Bilicir','Ursodeoxycholic Acid','Tablet','','300 mg',0.4,0.35,NULL,NULL,NULL,'inactive'),(126,'Bilicir','Ursodeoxycholic Acid','Tablet','','150 mg',0.22,0.19,NULL,NULL,NULL,'inactive'),(127,'Bilista','Paracitamol','Rokok','','600ml',50.2,34,NULL,NULL,NULL,'inactive'),(128,'Bisocor 2.5','','Tablet','','',60.4,50,NULL,NULL,NULL,'inactive'),(129,'Boris','bortes','Liquid','','425',3,2.24,NULL,NULL,NULL,'inactive'),(130,'Calbo','Paracitamol','Rokok','','100ml',50.23,34,NULL,NULL,NULL,'inactive'),(131,'Carva','Paracitamol','Syrup','','400ml',15,10,NULL,NULL,NULL,'inactive'),(132,'Carva','Paracitamol','Tablet','','400ml',75.1,50.1,NULL,NULL,NULL,'inactive'),(133,'Ceevit 250 Mg','','Tablet','','',2,2,NULL,NULL,NULL,'inactive'),(134,'Coffix','Paracitamol','Tablet','','500mg',25,20,NULL,NULL,NULL,'inactive'),(135,'Dddd','Fvhj','Rokok','','D',3,2,NULL,NULL,NULL,'inactive'),(136,'Entacyd','Paracitamol','liqud','','20ml',50,33.33,NULL,NULL,NULL,'inactive'),(137,'Esloric','Eslorical','Rokok','','100',13.33,10,NULL,NULL,NULL,'inactive'),(138,'fauji','Ciprofloxacin','Cream','','',150,125,NULL,NULL,NULL,'inactive'),(139,'fexo','','Tablet','','',1.9,1,NULL,NULL,NULL,'inactive'),(140,'fexo','','Tablet','','',20,16,NULL,NULL,NULL,'inactive'),(141,'Flexo','Flexonical','Rokok','','400',20,17,NULL,NULL,NULL,'inactive'),(142,'Fona','Fonal','Liquid','','100',0.07,0,NULL,NULL,NULL,'inactive'),(143,'Fona','Branden Montgomery','INFUSION','','200',44,23,NULL,NULL,NULL,'inactive'),(144,'Fona plus','Paracitamol','Syrup','','300ml',5.33,5,NULL,NULL,NULL,'inactive'),(145,'Fona plus','','Antibiotic Eyedrops','','',7,5.33,NULL,NULL,NULL,'inactive'),(146,'Geldrin','isomipragol','Rokok','','20',50,0,NULL,NULL,NULL,'inactive'),(147,'ghjfghjg','test','Liquid','','20',1,0.25,NULL,NULL,NULL,'inactive'),(148,'Golos','golose','Rokok','','10',15,13,NULL,NULL,NULL,'inactive'),(149,'Lumertam','Paracitamol','Rokok','','600ml',75.05,50.05,NULL,NULL,NULL,'inactive'),(150,'Napa','Naparol','Rokok','','500',3.33,3,NULL,NULL,NULL,'inactive'),(151,'Napa','','Rokok','','',3.33,0,NULL,NULL,NULL,'inactive'),(152,'Napa','','Liquid','','',0.67,0,NULL,NULL,NULL,'inactive'),(153,'Normens','Normenel','Rokok','','300',20,17,NULL,NULL,NULL,'inactive'),(154,'Rex','Paracitamol','Tablet','','500ml',50.17,34,NULL,NULL,NULL,'inactive'),(155,'Rithmo','Clarithromycin','Rokok','','250',31.43,29,NULL,NULL,NULL,'inactive'),(156,'Robic','Robical','Rokok','','300',40,45,NULL,NULL,NULL,'inactive'),(157,'Rupa','Rupadinal','Rokok','','50',4,4,NULL,NULL,NULL,'inactive'),(158,'Sergel 20 Cap','Esomiprazol','Rokok','','',7,6,NULL,NULL,NULL,'inactive'),(159,'test','para','Rokok','','test',3.33,2.33,NULL,NULL,NULL,'inactive'),(160,'Virux','Viruxal','Syrup','','100',25,23,NULL,NULL,NULL,'inactive'),(161,'Zaart-50','Lo','Tablet','','50',81.07,80,NULL,NULL,NULL,'inactive'),(162,'Zanthin','Paracitamol','Rokok','','100ml',15,13,NULL,NULL,NULL,'inactive'),(163,'Zinc','Zinccal','Liquid','','200',18,16.25,NULL,NULL,NULL,'inactive');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `purchase` (
  `id` int NOT NULL AUTO_INCREMENT,
  `managerId` int DEFAULT NULL,
  `invoiceNo` varchar(12) DEFAULT NULL,
  `medicineName` varchar(50) DEFAULT NULL,
  `requestDate` varchar(20) DEFAULT NULL,
  `Qty` int DEFAULT NULL,
  `totalAmount` int DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Pending',
  `details` text,
  `paymentType` varchar(20) DEFAULT NULL,
  `bankName` varchar(50) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase`
--

LOCK TABLES `purchase` WRITE;
/*!40000 ALTER TABLE `purchase` DISABLE KEYS */;
INSERT INTO `purchase` VALUES (1,3,'111','Abaclor','2022-11-05',1,120,'Pending',NULL,'CASH',NULL,NULL),(2,3,'123','ACI ORS','2022-11-05',4,NULL,'Pending','detail 1','Credit','Canara Bank','Tablet'),(3,3,'123','Virux','2022-11-05',3,NULL,'Pending','detail 1','Credit','Canara Bank','Tablet'),(4,NULL,'213','Acical-D','2022-11-05',13,2,'Pending','detail 3','Credit','State Bank Of India','Tablet');
/*!40000 ALTER TABLE `purchase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stockreport`
--

DROP TABLE IF EXISTS `stockreport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stockreport` (
  `id` int NOT NULL AUTO_INCREMENT,
  `managerId` int DEFAULT NULL,
  `productId` int DEFAULT NULL,
  `productName` varchar(50) DEFAULT NULL,
  `unitCost` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `addDate` varchar(20) DEFAULT NULL,
  `manDate` varchar(20) DEFAULT NULL,
  `expDate` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stockreport`
--

LOCK TABLES `stockreport` WRITE;
/*!40000 ALTER TABLE `stockreport` DISABLE KEYS */;
INSERT INTO `stockreport` VALUES (1,3,2,'Abaclor',3,NULL,'20-01-2003','12-01-2003','20-01-2004');
/*!40000 ALTER TABLE `stockreport` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `token`
--

DROP TABLE IF EXISTS `token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `token` (
  `id` int NOT NULL AUTO_INCREMENT,
  `token` varchar(10) DEFAULT NULL,
  `status` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `token`
--

LOCK TABLES `token` WRITE;
/*!40000 ALTER TABLE `token` DISABLE KEYS */;
INSERT INTO `token` VALUES (1,'12345',1);
/*!40000 ALTER TABLE `token` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'pharma'
--

--
-- Dumping routines for database 'pharma'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-05 22:56:32