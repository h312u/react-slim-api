-- Adminer 4.2.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `mystore` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mystore`;

DROP TABLE IF EXISTS `api_users`;
CREATE TABLE `api_users` (
  `email` varchar(255) NOT NULL,
  `api_key` varchar(255) NOT NULL,
  `hit` int(11) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `api_key` (`api_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `api_users` (`email`, `api_key`, `hit`) VALUES
('h312u_kurniawan@yahoo.com',	'123456',	22);

DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `timeupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `goods` (`id`, `name`, `price`, `timeupdate`) VALUES
(1,	'sandal',	35000,	'2019-01-04 07:20:42'),
(2,	'sepatu',	125000,	'2019-01-04 07:20:58');

-- 2019-01-04 09:54:34
