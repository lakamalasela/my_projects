-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 10, 2020 at 01:47 PM
-- Server version: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_carsale`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) DEFAULT NULL,
  `description` text,
  `price` double DEFAULT NULL,
  `fuel_type` varchar(50) DEFAULT NULL,
  `milage` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `sold` tinyint(1) DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `member_id` (`member_id`),
  KEY `model_id` (`model_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `title`, `description`, `price`, `fuel_type`, `milage`, `year`, `photo`, `location`, `member_id`, `model_id`, `date`, `sold`, `view_count`) VALUES
(1, 'Car', 'good', 250000, 'petrol', 4568, 2018, 'uploads/nissan.jpg', 'Kotte', 1, 2, '2019-07-04', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

DROP TABLE IF EXISTS `fuel`;
CREATE TABLE IF NOT EXISTS `fuel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fuel_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `role` varchar(1) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `mobile`, `password`, `address`, `role`, `reg_date`, `status`) VALUES
(1, 'lakmal Asela', 'lakmal@gmail.com', '0756273298', '202cb962ac59075b964b07152d234b70', '18/8 Dw,ruphasinghe mw, nugegoda.', 'u', '2019-07-04', 1),
(2, 'Kamal', 'kamal@gmail.com', '0774856238', '68053af2923e00204c3ca7c6a3150cf7', '25/4 railway rd,Nugegoda.', 'a', '2019-07-04', 1),
(3, 'Amal perera', 'amal@gmail.com', '0758945620', 'd6b7cc474be03dcc78faef0fa6ba51a4', '25/4 railway rd,Nugegoda.', 'u', '2019-08-12', 1),
(4, 'nirwan', 'niwa@gmail.com', '0756273298', 'e10adc3949ba59abbe56e057f20f883e', '256/ pw rd, nugdoda', 'u', '2020-02-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
CREATE TABLE IF NOT EXISTS `model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `brand_id` (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `name`, `brand_id`) VALUES
(1, 'Nissan_Ftz', 1),
(2, 'Nissan-GT-R', 2),
(3, 'Corolla', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
