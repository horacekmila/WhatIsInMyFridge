-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `Fridgerator`;
CREATE DATABASE `Fridgerator` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_czech_ci */;
USE `Fridgerator`;

DROP TABLE IF EXISTS `Food_recepture`;
CREATE TABLE `Food_recepture` (
  `name` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ingredients` text COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `Food_recepture` (`name`, `id`, `ingredients`) VALUES
('Kuřecí řízek',	1,	'Kuřecí maso, vejce');

DROP TABLE IF EXISTS `Food_values`;
CREATE TABLE `Food_values` (
  `name` varchar(1000) COLLATE utf8_czech_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proteins` int(11) NOT NULL DEFAULT '0',
  `fats` int(11) NOT NULL DEFAULT '0',
  `carbohydrates` int(11) NOT NULL DEFAULT '0',
  `minerals` int(11) NOT NULL DEFAULT '0',
  `calories` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `Food_values` (`name`, `id`, `proteins`, `fats`, `carbohydrates`, `minerals`, `calories`) VALUES
('Kuřecí řízek',	1,	10,	20,	50,	0,	200);

-- 2017-08-04 16:38:17