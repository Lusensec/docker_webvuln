# Host: localhost  (Version: 5.7.26)
# Date: 2024-05-15 22:01:53
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "home"
#

DROP TABLE IF EXISTS `home`;
CREATE TABLE `home` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `home_id` varchar(255) NOT NULL DEFAULT '',
  `home_pass` varchar(255) NOT NULL DEFAULT '',
  `home_username_one` varchar(255) NOT NULL DEFAULT '',
  `home_username_two` varchar(255) NOT NULL DEFAULT '',
  `yidong` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

#
# Data for table "home"
#

/*!40000 ALTER TABLE `home` DISABLE KEYS */;
/*!40000 ALTER TABLE `home` ENABLE KEYS */;
