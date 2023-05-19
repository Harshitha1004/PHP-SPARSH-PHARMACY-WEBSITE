-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 23, 2021 at 11:43 AM
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
-- Database: `harshitha10`
--

-- --------------------------------------------------------

--
-- Table structure for table `fit`
--

DROP TABLE IF EXISTS `fit`;
CREATE TABLE IF NOT EXISTS `fit` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fit`
--

INSERT INTO `fit` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'CF Novasules Kids Multivitamins, Prebiotics and Superfood Vegetarian Gummies 90s', 'UA75', 'CF Novasules Kids Multivitamins, Prebiotics and Superfood Vegetarian Gummies 90s.jpg', 498.75),
(2, 'Dabur Chyawanprash Awaleha 1kg', 'GH98', 'Dabur Chyawanprash Awaleha 1kg.jpg', 340.00),
(3, 'Incredio Shake-A-Meal - Chocolate 500 gm', 'GH78', 'Incredio Shake-A-Meal - Chocolate 500 gm.jpg', 920.00),
(4, 'NutrActive Ashwagandha Powder 150 gm', 'JK76', 'NutrActive Ashwagandha Powder 150 gm.jpg', 319.20),
(5, 'Seacod Capsule 110 S', 'SP89', 'Seacod Capsule 110 S.jpg', 272.77),
(6, 'Zenith Nutrition Zenith Protein Pure Soy Powder 500 gm', 'SP92', 'Zenith Nutrition Zenith Protein Pure Soy Powder 500 gm.jpg', 592.80);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
