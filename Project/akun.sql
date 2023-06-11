/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.25-MariaDB : Database - akun
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`akun` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `akun`;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`email`,`password`,`name`,`photo`) values (33,'Agung220903','agungofficialdev@gmail.com','$2y$10$3rXp2XIRFje.IwEajuy8puZ/EmTqQ.iACNywPduSGDbbVPsrj6/lC','Agung Developer','https://firebasestorage.googleapis.com/v0/b/blogs-233c7.appspot.com/o/images%2Fchannels4_profile.jpg?alt=media&token=97383655-7ca9-45c6-8669-6e94b08e8828');
insert  into `user`(`id`,`username`,`email`,`password`,`name`,`photo`) values (34,'Agung025','agungofficialdev@gmail.com','$2y$10$pcmcP9AhpnpvATo4eRglKuyBEhDUQ2QYmHx.s7pGT3o3ZeDa23Kru','Agung Eka','https://firebasestorage.googleapis.com/v0/b/blogs-233c7.appspot.com/o/images%2FKarrie.jpeg?alt=media&token=7863bc8b-4585-4a71-9bf6-40d642183e0c');
insert  into `user`(`id`,`username`,`email`,`password`,`name`,`photo`) values (35,'Putra220903','agungdev@gmail.com','$2y$10$Y3kIlt1YvAIiuVRIaYQoWeugAnai1WqCdqaIcgDWQniYbvAKNjSvW','Agung Putra','https://firebasestorage.googleapis.com/v0/b/blogs-233c7.appspot.com/o/images%2Fdownload.jpeg?alt=media&token=3ca97611-0c3b-46ec-9ccf-59b7e7866b2a');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
