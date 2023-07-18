# Host: localhost  (Version 5.5.5-10.4.24-MariaDB)
# Date: 2022-05-31 12:16:18
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "kullanici"
#

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE `kullanici` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(255) DEFAULT '',
  `kullanici_email` varchar(255) DEFAULT '',
  `kullanici_tel` varchar(255) DEFAULT '',
  `kayit_tarihi` timestamp NULL DEFAULT current_timestamp(),
  `kullanici_kart` int(2) DEFAULT 0,
  `kullanici_cvc` int(11) DEFAULT 0,
  `kullanici_son` varchar(255) DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4;

#
# Data for table "kullanici"
#

INSERT INTO `kullanici` VALUES (66,'Alperen','alperen-58300@hotmail.com','434323432','2022-05-31 11:22:53',2147483647,233,'11/25'),(67,'Ali Rıza Güleç','ali@gmail.com','43454654654665','2022-05-31 11:23:46',2147483647,455,'10/23');
