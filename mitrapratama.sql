# Host: localhost  (Version 5.5.5-10.1.34-MariaDB)
# Date: 2019-06-14 11:54:43
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "tblcontact"
#

DROP TABLE IF EXISTS `tblcontact`;
CREATE TABLE `tblcontact` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` text,
  `no_telp` varchar(255) DEFAULT NULL,
  `no_ktp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tblcontact"
#

INSERT INTO `tblcontact` VALUES (1,'henry','hen_200133@yahoo.com','tes','728337','132332');

#
# Structure for table "tbluser"
#

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE `tbluser` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tbluser"
#

