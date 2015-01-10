/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.20 : Database - pro1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pro1` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `pro1`;

/*Table structure for table `tbl_category` */

DROP TABLE IF EXISTS `tbl_category`;

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `del_flg` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_category` */

insert  into `tbl_category`(`category_id`,`title`,`created_at`,`updated_at`,`del_flg`) values (1,'Phần mềm','2014-11-12 23:17:19','2014-11-12 23:17:19',0),(2,'Máy tính','2014-11-12 23:17:29','2014-11-12 23:17:29',0),(3,'Điện thoại','2014-11-12 23:17:35','2014-11-12 23:17:35',0);

/*Table structure for table `tbl_manufacturer` */

DROP TABLE IF EXISTS `tbl_manufacturer`;

CREATE TABLE `tbl_manufacturer` (
  `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `del_flg` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`manufacturer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_manufacturer` */

insert  into `tbl_manufacturer`(`manufacturer_id`,`title`,`created_at`,`updated_at`,`del_flg`) values (1,'Apple','2014-11-12 23:15:41','2014-11-12 23:15:41',0),(2,'Sony','2014-11-12 23:15:48','2014-11-12 23:15:48',0),(3,'Microsoft','2014-11-12 23:16:14','2014-11-12 23:16:14',0);

/*Table structure for table `tbl_product` */

DROP TABLE IF EXISTS `tbl_product`;

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `content` longtext NOT NULL,
  `price` float NOT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `is_public` tinyint(1) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `del_flg` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`product_id`),
  KEY `tbl_product_ibfk_1` (`manufacturer_id`),
  CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`manufacturer_id`) REFERENCES `tbl_manufacturer` (`manufacturer_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_product` */

/*Table structure for table `tbl_product_category` */

DROP TABLE IF EXISTS `tbl_product_category`;

CREATE TABLE `tbl_product_category` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`category_id`),
  KEY `tbl_product_category_ibfk_2` (`category_id`),
  CONSTRAINT `tbl_product_category_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`) ON DELETE CASCADE,
  CONSTRAINT `tbl_product_category_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`category_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_product_category` */

/*Table structure for table `tbl_staff` */

DROP TABLE IF EXISTS `tbl_staff`;

CREATE TABLE `tbl_staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_account` varchar(255) NOT NULL,
  `staff_pwd` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `del_flg` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_staff` */

insert  into `tbl_staff`(`staff_id`,`staff_account`,`staff_pwd`,`fullname`,`created_at`,`updated_at`,`del_flg`) values (1,'admin','123','Nguyễn Như Tuấn','2014-11-13 10:11:27','2014-11-13 10:11:27',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
