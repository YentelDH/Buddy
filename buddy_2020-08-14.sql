# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.26)
# Database: buddy
# Generation Time: 2020-08-14 15:52:28 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table animals
# ------------------------------------------------------------

DROP TABLE IF EXISTS `animals`;

CREATE TABLE `animals` (
  `animal_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kind_id` int(11) unsigned NOT NULL,
  `shelter_id` int(11) unsigned DEFAULT NULL,
  `name` varchar(20) NOT NULL DEFAULT '',
  `birth` date NOT NULL,
  `description` varchar(200) NOT NULL DEFAULT '',
  `src` varchar(200) NOT NULL DEFAULT '',
  `breed` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`animal_id`),
  KEY `kind_id` (`kind_id`),
  KEY `shelter_id` (`shelter_id`),
  CONSTRAINT `animals_ibfk_1` FOREIGN KEY (`kind_id`) REFERENCES `kinds` (`kind_id`),
  CONSTRAINT `animals_ibfk_2` FOREIGN KEY (`shelter_id`) REFERENCES `shelters` (`shelter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `animals` WRITE;
/*!40000 ALTER TABLE `animals` DISABLE KEYS */;

INSERT INTO `animals` (`animal_id`, `kind_id`, `shelter_id`, `name`, `birth`, `description`, `src`, `breed`)
VALUES
	(1,1,2,'Gismo','2014-03-02','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ','https://images.unsplash.com/photo-1537151608828-ea2b11777ee8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60','Corgi'),
	(2,1,1,'Lassie','2019-07-14','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ','https://images.unsplash.com/photo-1595247546406-c234977e68e5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60','Cavalier'),
	(3,1,3,'Bas','2018-04-23','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. ','https://images.unsplash.com/photo-1592074058902-e21380157d36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60','Labrador');

/*!40000 ALTER TABLE `animals` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table favorites
# ------------------------------------------------------------

DROP TABLE IF EXISTS `favorites`;

CREATE TABLE `favorites` (
  `animal_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  KEY `animal` (`animal_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`animal_id`),
  CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table kinds
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kinds`;

CREATE TABLE `kinds` (
  `kind_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(11) NOT NULL DEFAULT '',
  PRIMARY KEY (`kind_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `kinds` WRITE;
/*!40000 ALTER TABLE `kinds` DISABLE KEYS */;

INSERT INTO `kinds` (`kind_id`, `name`)
VALUES
	(1,'dogs'),
	(2,'cats'),
	(3,'birds');

/*!40000 ALTER TABLE `kinds` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shelters
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shelters`;

CREATE TABLE `shelters` (
  `shelter_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`shelter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `shelters` WRITE;
/*!40000 ALTER TABLE `shelters` DISABLE KEYS */;

INSERT INTO `shelters` (`shelter_id`, `name`)
VALUES
	(1,'Pretty Paws'),
	(2,'Pooch Parlor'),
	(3,'Puppy Love');

/*!40000 ALTER TABLE `shelters` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`user_id`, `fullname`, `email`, `password`)
VALUES
	(1,'Yentel De Hauwere','yentel.dh@hotmail.be','password');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
