# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.32)
# Database: transformers
# Generation Time: 2021-08-24 08:53:01 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table characters
# ------------------------------------------------------------

DROP TABLE IF EXISTS `characters`;

CREATE TABLE `characters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `speed` int(11) DEFAULT NULL,
  `power` int(11) DEFAULT NULL,
  `disguise` int(11) DEFAULT NULL,
  `top_trumps_rating` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `characters` WRITE;
/*!40000 ALTER TABLE `characters` DISABLE KEYS */;

INSERT INTO `characters` (`id`, `name`, `size`, `speed`, `power`, `disguise`, `top_trumps_rating`, `type`, `img_url`)
VALUES
	(1,'Astrotrain',5,3,45,5,10,'Insecticon','https://static.wikia.nocookie.net/transformers/images/2/29/G1_Astrotrain.jpg'),
	(2,'Barrage',1,2,35,20,6,'Insecticon','https://tfwiki.net/mediawiki/images2/2/28/DW_G1Barrage.jpg'),
	(3,'Blitzwing',4,8,45,10,8,'Insecticon','https://tfwiki.net/mediawiki/images2/f/f1/Blitzwingg1.jpg'),
	(4,'Bluestreak',3,6,25,14,4,'Autobot','https://tfwiki.net/mediawiki/images2/b/be/Anime_Bluestreak_boxart.jpg'),
	(5,'Brawn',2,3,32,19,7,'Autobot','https://tfwiki.net/mediawiki/images2/5/59/TFU_Brawn.jpg'),
	(6,'Bumblebee',2,5,15,16,14,'Autobot','https://tfwiki.net/mediawiki/images2/thumb/2/2b/Bumblebee_Leapfrog-AA.jpg/300px-Bumblebee_Leapfrog-AA.jpg'),
	(7,'Cliffjumper',1,6,30,16,7,'Autobot','https://tfwiki.net/mediawiki/images2/thumb/2/2a/PrimeCliffjumper.jpg/300px-PrimeCliffjumper.jpg'),
	(8,'Cosmos',6,1,50,1,5,'Autobot','https://static.wikia.nocookie.net/transformers/images/7/7c/Transformers_G1_Cosmos.jpg'),
	(9,'Devastator',5,4,50,20,14,'Insecticon','https://static.wikia.nocookie.net/transformers/images/5/5f/Generation_1_Devastator.jpg'),
	(10,'Frenzy',1,2,15,18,8,'Autobot','https://tfwiki.net/mediawiki/images2/thumb/7/77/G1_boxart_Frenzy.jpg/270px-G1_boxart_Frenzy.jpg'),
	(11,'Grapple',5,2,49,13,3,'Autobot','https://static.wikia.nocookie.net/transformers/images/1/10/Transformers_G1_Grapple.jpg'),
	(12,'Grimlock',4,5,49,1,15,'Autobot','https://static.wikia.nocookie.net/transformers/images/b/bb/Animated_Grimlock.jpg'),
	(13,'Hound',2,4,18,16,4,'Autobot','https://static.wikia.nocookie.net/transformers/images/b/b8/G1_Hound.jpg'),
	(14,'Huffer',2,3,15,11,3,'Autobot','https://static.wikia.nocookie.net/transformers/images/a/a8/Transformers_G1_Huffer.jpg'),
	(15,'Ironhide',3,4,32,20,13,'Autobot','https://static.wikia.nocookie.net/transformers/images/c/c6/Movie_Ironhide_promorender2.jpg'),
	(16,'Jazz',2,8,36,12,13,'Autobot','https://upload.wikimedia.org/wikipedia/en/3/37/Jazz-animated.jpg'),
	(17,'Laserbeak',1,5,25,18,12,'Decepticon','https://static.wikia.nocookie.net/transformers/images/5/53/Transformers_G1_Laserbeak.jpg'),
	(18,'Megatron',5,6,48,3,14,'Autobot','https://static.wikia.nocookie.net/transfanon/images/3/38/Megatron_%28TF2017%29.jpg'),
	(19,'Optimus Prime',4,8,50,11,15,'Autobot','https://tfwiki.net/mediawiki/images2/thumb/3/37/Optimusg1.jpg/350px-Optimusg1.jpg'),
	(20,'Ransack',1,4,28,20,6,'Insecticon','https://static.wikia.nocookie.net/transformers/images/3/3c/G1Ransack_MTMTE.JPG'),
	(21,'Ratchet',3,6,28,18,10,'Autobot','https://static.wikia.nocookie.net/transformers/images/5/5e/Movie_Ratchet_promorender.jpg'),
	(22,'Ravage',1,4,30,18,13,'Insecticon','https://tfwiki.net/mediawiki/images2/thumb/1/1e/ROTF_Ravage_promo.jpg/400px-ROTF_Ravage_promo.jpg'),
	(23,'Seaspray',2,4,20,6,2,'Autobot','https://tfwiki.net/mediawiki/images2/thumb/9/99/G1SeasprayColorModel.jpg/300px-G1SeasprayColorModel.jpg'),
	(24,'Shockwave',4,5,48,1,9,'Insecticon','https://tfwiki.net/mediawiki/images2/thumb/2/26/ShockwaveDOTMgamepromo.jpg/320px-ShockwaveDOTMgamepromo.jpg'),
	(25,'Skywarp',3,10,26,11,2,'Insecticon','https://static.wikia.nocookie.net/transformers/images/5/50/G1_Skywarp.jpg'),
	(26,'Soundwave',3,4,30,18,11,'Insecticon','https://static.wikia.nocookie.net/transformers/images/c/ce/Transformers_Generation_1_Soundwave.png'),
	(27,'Starscream',4,9,35,10,9,'Insecticon','https://static.wikia.nocookie.net/transformers/images/9/97/Transformers_G1_Starscream.jpg'),
	(28,'Thundercracker',4,8,36,11,5,'Insecticon','https://static.wikia.nocookie.net/transformers/images/2/2e/G1_Thundercracker.jpg'),
	(29,'Topspin',5,4,48,2,11,'Autobot','https://tfwiki.net/mediawiki/images2/thumb/6/6f/G1boxart-Topspin.jpg/250px-G1boxart-Topspin.jpg'),
	(30,'Windcharger',3,9,40,15,12,'Autobot','https://tfwiki.net/mediawiki/images2/thumb/5/50/WindchargerTFU.jpg/250px-WindchargerTFU.jpg');

/*!40000 ALTER TABLE `characters` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
