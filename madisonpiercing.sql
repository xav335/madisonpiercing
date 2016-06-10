-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: madisonpiercing
-- ------------------------------------------------------
-- Server version	5.5.44-0+deb8u1

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'madison','madison33','administrateur'),(2,'admin','admin335','ico');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `adresse` varchar(250) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `message` text,
  `newsletter` tinyint(4) NOT NULL DEFAULT '0',
  `fromgoldbook` tinyint(4) NOT NULL DEFAULT '0',
  `fromcontact` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (12,'','sss','','','','sss@oo.fr','','sss',1,0,1),(13,'','test','','','','test@orange.fr','','test',0,1,0),(14,'','xavier','','','','fjavi.gonzalez@gmail.com','','Prise en charge super. Zéro douleur, super hygiène, très pro je recommande chaudement ! ',1,1,1),(15,'','xavier','','','','xavier.gonzalez@free.fr','','Un conseil top, très à l\'écoute, très satisfait.',1,1,1),(16,'','xav','','','','xavier@gonzalez.pm','','teste de message',1,0,1),(17,'','Mathilde Feutry ','','','','mfeutry@yahoo.com','','Bonjour, \r\nPour deux piercings hélix, il faut prendre rendez-vous ? ',0,0,1),(18,'','Constance','','','','constance.cugneau@live.fr','','En un seul mot: super! Tout y est l\'accueil agréable, le suivi, les bons conseils, le sourire, la passion visible... J\'adore et je ne vais me percer que la bas, j\'ai entièrement confiance et c\'est toujours mieux de faire un tel acte quand on a confiance et quand on sait qu\'on ne sera pas juger pour nos craintes ou autre. Merci à vous! :D',0,1,0),(19,'','Camille','','','','camouille4910@gmail.com','','Tres pro , accueillante , salon au top  hygiénique , aucun problème au niveau du perçage , rapide efficace aucune infection ou autre , les prix sont très attractif. ',0,1,0),(20,'','Leo','','','','leo.perny@hotmail.fr','','Accueil agréable, toujours une dose de sourire de bon conseil, le pressage ce passe très et l\'hygiène est au rendez-vous, un large choix de bijoux, les numéros 1 du piercing à Bordeaux!',1,1,0);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_categorie`
--

DROP TABLE IF EXISTS `contact_categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_categorie` (
  `id_contact` int(11) unsigned NOT NULL,
  `id_categorie` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_categorie`
--

LOCK TABLES `contact_categorie` WRITE;
/*!40000 ALTER TABLE `contact_categorie` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `divers`
--

DROP TABLE IF EXISTS `divers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `divers` (
  `num_divers` int(11) NOT NULL AUTO_INCREMENT,
  `pdf_methode_depilation` varchar(100) NOT NULL,
  `pdf_tarif_soin` varchar(100) NOT NULL,
  PRIMARY KEY (`num_divers`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `divers`
--

LOCK TABLES `divers` WRITE;
/*!40000 ALTER TABLE `divers` DISABLE KEYS */;
INSERT INTO `divers` VALUES (1,'epilaction_devis_infos_2016_04_13.pdf','');
/*!40000 ALTER TABLE `divers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goldbook`
--

DROP TABLE IF EXISTS `goldbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goldbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `nom` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text,
  `online` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goldbook`
--

LOCK TABLES `goldbook` WRITE;
/*!40000 ALTER TABLE `goldbook` DISABLE KEYS */;
INSERT INTO `goldbook` VALUES (2,'2016-06-07 00:00:00','Xavier Gonzalez','fjavi.gonzalez@gmail.com','Prise en charge super. Zéro douleur, super hygiène, très pro je recommande chaudement ! ',1),(3,'2016-06-07 00:00:00','Franck','xavier.gonzalez@free.fr','Un conseil top, très à l\'écoute, très satisfait.',1),(4,'2016-06-08 00:00:00','Constance','constance.cugneau@live.fr','En un seul mot: super! Tout y est l\'accueil agréable, le suivi, les bons conseils, le sourire, la passion visible... J\'adore et je ne vais me percer que la bas, j\'ai entièrement confiance et c\'est toujours mieux de faire un tel acte quand on a confiance et quand on sait qu\'on ne sera pas juger pour nos craintes ou autre. Merci à vous! :D',1),(5,'2016-06-08 00:00:00','Camille','camouille4910@gmail.com','Tres pro , accueillante , salon au top  hygiénique , aucun problème au niveau du perçage , rapide efficace aucune infection ou autre , les prix sont très attractif. ',1),(6,'2016-06-09 00:00:00','Leo','leo.perny@hotmail.fr','Accueil agréable, toujours une dose de sourire de bon conseil, le pressage ce passe très et l\'hygiène est au rendez-vous, un large choix de bijoux, les numéros 1 du piercing à Bordeaux!',1);
/*!40000 ALTER TABLE `goldbook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_news`
--

DROP TABLE IF EXISTS `media_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_news` int(11) NOT NULL,
  `url_media` varchar(250) NOT NULL,
  `url_apercu` varchar(250) NOT NULL,
  `type_media` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`id_news`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_news`
--

LOCK TABLES `media_news` WRITE;
/*!40000 ALTER TABLE `media_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `media_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `date_news` datetime NOT NULL,
  `titre` varchar(250) NOT NULL,
  `contenu` text,
  `image1` varchar(250) DEFAULT NULL,
  `online` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (32,'2016-04-07 00:00:00','Gamme complete des produits solaire','Longue vie soleil,\r\nUni bronze,\r\nGrand soin après soleil,\r\nSctik indice 50 visage,\r\nSpray protestion corps ','/images_4_-32.jpg',1),(33,'2016-03-31 00:00:00','Baume Nutri Logic douceur et confort pour le corps','Adoucit et réconforte la peau immédiatement,nourrit la peau durablement,protége la peau toute la journée','/568e48fcd199c-33.jpg',1),(34,'2016-03-05 00:00:00','Minceur Rapide','La solution simple rapide et efficace,\r\ndiminution de l\'aspect visible de la cellulite,\r\nAnti -gras bruleur de  graisses\r\nAnti-eau drainage minceur','/1618_66398c-34.png',1),(35,'2016-03-03 00:00:00','Poudre soleil et le Gloss été','Effet bronzé naturellement et le gloss pour apporter le coté glamour \r\n','/10093295_duo_poudre_teint_soleil-.jpg',1),(36,'2016-03-03 00:00:00','Sérum Bioxygene','Hydratation de la peau et  redonne de éclat du teint  pour une peau en pleine forme,défatigue les traits pour un teint frais et reposé\r\nConcentré éclat et vitalité','/1626_db7ff0-36.png',1),(37,'2016-03-01 00:00:00','400 ml PROMO Gommage facile et hydrazone corps','GOMMAGE EXFOLIANT ET LE LAIT HYDRAZONE ','/56c6f2c58fec3-37.jpg',1),(38,'2016-03-04 00:00:00','Hydraderm Energy Cellular','NOUVEL APPAREIL POUR LES SOINS STAR GUINOT','/images_1_-38.jpg',1);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `bas_page` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter`
--

LOCK TABLES `newsletter` WRITE;
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
INSERT INTO `newsletter` VALUES (12,'2015-01-01 00:00:00','Les nouveautés espace beauté','Contact@espac.fr'),(13,'2016-03-14 00:00:00','test de soin',' ');
/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter_detail`
--

DROP TABLE IF EXISTS `newsletter_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_newsletter` int(10) unsigned NOT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `texte` text,
  PRIMARY KEY (`id`,`id_newsletter`)
) ENGINE=InnoDB AUTO_INCREMENT=331 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter_detail`
--

LOCK TABLES `newsletter_detail` WRITE;
/*!40000 ALTER TABLE `newsletter_detail` DISABLE KEYS */;
INSERT INTO `newsletter_detail` VALUES (329,12,'Soin de la peau Grande Promo','/35e221e3ebd787de0636cac049b9461d-12.jpg','http://espacebeaute.iconeo.es','ce mois ci promotion sur le soin du visage'),(330,13,'Soin de la peau Grande Promo','/5496657cbfcac17aa12617a4ea6154ec-.jpg','http://www.institut-espace-beaute.com/','Le soleil arrive ');
/*!40000 ALTER TABLE `newsletter_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorie` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `legende` text NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo`
--

LOCK TABLES `photo` WRITE;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
INSERT INTO `photo` VALUES (19,2,'daith ( cartilage interne ) ','anneau gris','/1-.jpg'),(20,2,'surface de tragus','','/10003941_1045338828819667_300572-.jpg'),(21,2,'septum','circular gris','/1011583_1045339365486280_8237458-.jpg'),(22,2,'arcade horizontale','barbell courbe noire ','/11232271_1045338842152999_264295-.jpg'),(23,2,'surface de tragus','','/11838730_1045710172115866_207398-.jpg'),(24,2,'téton','barbell grise','/12063554_1045339238819626_878481-.jpg'),(25,2,'arcade verticale ','barbell courbe grise','/12079307_1045339345486282_727561-.jpg'),(26,2,'oeil de chat','barbell courbe grise','/12088390_1045339042152979_277717-.jpg'),(27,2,'double nez','stud brillant blanc','/12096229_1045339028819647_345104-.jpg'),(28,2,'microdermal poitriine','brillant blanc ','/12106908_1045339285486288_329662-.jpg'),(29,2,'téton','barbell grise','/12107196_1045338968819653_572853-.jpg'),(30,2,'double tragus','barbell grise','/12107791_1045338898819660_573970-.jpg'),(31,2,'duo d\'arcade ','barbell courbe noire ','/12107915_1045339262152957_745958-.jpg'),(32,2,'symétrie lèvre excentrée','bille noire','/12108228_1045339305486286_269001-.jpg'),(33,2,'arcade verticale ','barbell courbe verte','/12109209_1045338882152995_226176-.jpg'),(34,2,'nombril inversé','banane grise ','/12112029_1045338955486321_791149-.jpg'),(36,2,'surface lèvre centrée','barbell courbe noire ','/12115525_1045339135486303_704513-.jpg'),(37,2,'téton','barbell grise','/12115680_1045338902152993_131231-.jpg'),(38,2,'téton','barbell grise','/12115971_1045339062152977_864892-.jpg'),(39,2,'lèvre excentrée','circular gris','/12118608_1045339185486298_180501-.jpg'),(40,2,'septum','circular gris','/12118860_1045338998819650_850463-.jpg'),(41,2,'tragus','barbell grise','/12118892_1045339142152969_553387-.jpg'),(43,2,'nombril','banane noire','/12118989_1045338562153027_509579-.jpg'),(44,2,'Hélix - Anti Helix -Tragus','anneau gris - barbell grise','/12119195_1045338505486366_344911-.jpg'),(45,2,'septum','circular gris','/12119195_1045339342152949_906905-.jpg'),(46,2,'microdermal arrière oreille','brillant blanc ','/12122452_1045338832153000_227215-.jpg'),(47,2,'lobe & hélix','barbell grise','/12122554_1045339192152964_502184-.jpg'),(48,2,'rook','barbell courbe grise','/12187904_1054694261217457_302543-.jpg'),(49,2,'lèvre excentrée & troisième trou au lobe ','bille grise & anneau gris','/12208712_1054694394550777_492558-.jpg'),(50,2,'nombril','banane double brillant blanc','/12219414_1054694304550786_222470-.jpg'),(51,2,'surface de tragus','bille grise  ','/12227752_1054694467884103_741682-.jpg'),(53,2,'septum ','circular gris','/12322957_1067460023274214_525947-.jpg'),(55,2,'medusa','bille grise  ','/12465764_1079465635406986_705702-.jpg'),(56,2,'microdermal avant bras','disc doré brillant blanc','/12557728_754174158049074_9283620-.jpg'),(57,2,'symétrie téton','barbell grise','/12747988_1109106439109572_210780-57.jpg'),(58,2,'septum ','piercing cicatrisé - bijoux multi brillant','/12768128_1111393178880898_106432-.jpg'),(59,2,'double anti hélix','anneau gris','/4_2_-.jpg'),(60,5,'bridge','bille grise  ','/10308278_1079465358740347_506235-.jpg'),(61,5,'snug ','barbell courbe grise','/10376938_1045337948819755_209544-.jpg'),(62,5,'nuque','','/10407733_1045337902153093_412595-.jpg'),(63,5,'conch (fond d\'oreille)','barbell grise','/10425043_1045338192153064_807685-.jpg'),(64,5,'microdermal sternum','brillant blanc ','/10636619_1079465362073680_454520-.jpg'),(65,5,'nuque','piercing cicatrisé - bijoux epoxy','/11016955_1049447598408790_879384-.jpg'),(66,5,'double hélix','billes brillant blanc','/11047921_1045338272153056_579236-.jpg'),(67,5,'duo surface nombril','barbell courbe grise','/11224415_1045338252153058_291240-.jpg'),(68,5,'septum','circular gris','/11224421_1061314653888751_380418-.jpg'),(69,5,'surface poignet','bille grise  ','/11225230_1045337975486419_881107-.jpg'),(70,5,'duo lèvre excentrée','bille noire','/11225297_1045338058819744_515949-.jpg'),(71,5,'symétrie téton','barbell grise','/12063554_1045338378819712_839068-.jpg'),(72,5,'anti tragus','barbell courbe grise','/12096084_1045338522153031_257800-.jpg'),(73,5,'traversée - conch - tragus','barbell grise - anneau gris','/12096229_1045338438819706_136630-.jpg'),(74,5,'microdermal poitriine','disc noir','/12105753_1045338115486405_681264-.jpg'),(75,5,'microdermal sternum','disc gris','/12105890_1045338312153052_188210-.jpg'),(76,5,'nombril inversé','banane simple brillant','/12108159_1045338042153079_854873-.jpg'),(77,5,'téton','barbell grise','/12108214_1045337908819759_457443-77.jpg'),(78,5,'tragus gros diamètre','tunnel gris 2,5mm','/12108237_1045338145486402_725653-.jpg'),(79,5,'nuque','bille grise  ','/12108788_1045338205486396_516745-.jpg'),(80,5,'septum','circular gris','/12111947_1045338358819714_875517-.jpg'),(81,5,'anti helix','anneau noir','/12115572_1045338555486361_172577-.jpg'),(82,5,'nombril ','banane double brillant blanc','/12115984_1045338035486413_733642-.jpg'),(83,5,'lobe transversal','barbell courbe grise','/12118609_1045338075486409_259960-.jpg'),(84,5,'nuque','bille grise  ','/12118920_1045338112153072_484486-.jpg'),(85,5,'surface lèvre centrée','barbell courbe grise','/12140559_1045338442153039_290762-85.jpg'),(86,5,'microdermal pommette ','disc gris','/12143109_1045338508819699_161746-.jpg'),(87,5,'lobes stretchés','','/12143143_1045338335486383_750584-.jpg'),(88,5,'duo nombril & nombril inversé','banane double brillant blanc','/12144941_1045337998819750_773733-.jpg'),(89,5,'hélix ','barbell grise','/12182803_1049447608408789_177301-.jpg'),(90,5,'arcade horizontale','barbell courbe grise','/12191765_1049447605075456_218133-.jpg'),(91,5,'symétrie lèvre excentrée','bille grise  ','/12241304_1058565927496957_372430-.jpg'),(92,5,'hélix ','anneau noir','/12278963_1058563120830571_109265-.jpg'),(93,5,'medusa','bille noire','/12443442_777707415695748_4434357-.jpg'),(94,5,'septum','anneau clicker gris','/12606877_757297491070074_2112079-.jpg'),(95,5,'anti helix','anneau gris','/12630941_757383157728174_3080820-.jpg'),(96,5,'surface de tragus','bille grise  ','/12801274_1118394488180767_752137-.jpg'),(97,5,'duo surface nombril','barbell courbe grise','/12928295_1133929149960634_915902-.jpg'),(98,5,'medusa & septum','bille noire & circular gris','/12065503_1045338465486370_118971-.jpg'),(99,2,'double hélix','anneau noir','/11949405_116179722067998_2510975-.jpg'),(100,6,'banane acier playboy','','/12414424_740308842768939_1400503-.jpg'),(101,6,'faux bijou hélix motif fleur','','/12434177_740866969379793_1742513-.jpg'),(102,6,'plume acier / tragus','','/12465074_745808762218947_1124272-.jpg'),(103,6,'anneau acier brillant plat blanc','','/12483078_745808905552266_1680205-.jpg'),(104,6,'bijou multi strass porté sur hélix','','/13096292_1149910265029189_133114-.jpg'),(105,6,'banane acier doré éléphant','','/13217065_1163706006982948_150958-.jpg'),(106,6,'bijou pendant porté sur un hélix','','/13239298_1168642079822674_632226-.jpg'),(107,6,'bijou ethnique porté sur Septum','','/13248373_1166235433396672_345943-.jpg'),(108,6,'bijou fleur mult brillant porté sur un anti-hélix','','/20151215_171142-.jpg'),(109,6,'anneau acier doré ','','/anneau_nez_disque_dor_-.jpg'),(110,6,'banane acier hibou','','/bij_hibou-.jpg'),(111,6,'bijou multi strass porté sur un tragus','','/bjx-.jpg'),(112,6,'embout doré brillant blanc porté sur microdermal s','','/Embout_Dermal_contour_dor_stra-.jpg'),(114,6,'plug ethnique turquoise ','','/WP_20151219_18_31_25_Pro_2_-.jpg'),(116,6,'bijou fantaisie hélix','','/bjx_helix-.jpg'),(117,6,'Bijou nez en or 18 carats, goutte avec brillant','','/13401233_827627160703773_1908428-.jpg'),(119,6,'banane fleur bijou nombril','','/bjx_nombrl_fleur-.jpg');
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo_categorie`
--

DROP TABLE IF EXISTS `photo_categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo_categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo_categorie`
--

LOCK TABLES `photo_categorie` WRITE;
/*!40000 ALTER TABLE `photo_categorie` DISABLE KEYS */;
INSERT INTO `photo_categorie` VALUES (2,'piercing by Delphine'),(5,'piercing by Anne-Laure'),(6,'Nos bijoux sur vous ');
/*!40000 ALTER TABLE `photo_categorie` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-10 11:55:44
