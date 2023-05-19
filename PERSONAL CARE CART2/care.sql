-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 23, 2021 at 11:40 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbh`
--

-- --------------------------------------------------------

--
-- Table structure for table `care`
--

DROP TABLE IF EXISTS `care`;
CREATE TABLE IF NOT EXISTS `care` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `care`
--

INSERT INTO `care` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Sri Sri Tattva Body Butter 150 gm', 'WA47', 'Sri Sri Tattva Body Butter 150 gm.jpg', 237.50),
(2, 'Dettol Soap - Intense Cool 75 gm', 'WR97', 'Dettol Soap - Intense Cool 75 gm.jpg', 27.60),
(3, 'Lacto Calamine Oil Balance for Oily Skin Daily Face Care Lotion 60 ml', 'AS98', 'Lacto Calamine Oil Balance for Oily Skin Daily Face Care Lotion 60 ml.jpg', 115.20),
(4, 'Pantene Pro-V Advanced Hair Fall Solution+ Conditioner - Total Damage Care 180 ml', 'GF97', 'Pantene Pro-V Advanced Hair Fall Solution+ Conditioner - Total Damage Care 180 ml.jpg', 180.00),
(5, 'Lotus Herbals Cherry Lip Therapy SPF 15 4 gm ', 'GS97', 'Lotus Herbals Cherry Lip Therapy SPF 15 4 gm.jpg', 157.50),
(6, 'Dabur Red Gel Toothpaste 80 gm', 'GS99', 'Dabur Red Gel Toothpaste 80 gm.jpg', 40.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
