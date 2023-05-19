-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 16, 2021 at 02:35 PM
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
-- Database: `diabetic`
--

-- --------------------------------------------------------

--
-- Table structure for table `diabetes`
--

DROP TABLE IF EXISTS `diabetes`;
CREATE TABLE IF NOT EXISTS `diabetes` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `diabetes`
--

INSERT INTO `diabetes` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Accu-Chek Instant Test Strips', '3DcAM01', 'product-images/accucheck.jpg', 799.50),
(2, 'Sugar Free Natura Low Calorie Sweetener Powder', 'USB02', 'product-images/sugarfreenatura.jpg', 300.00),
(3, 'Pro360 Diabetic Nutritional Powder', 'LPN45', 'product-images/PRO360DIABETES.jpg', 266.40),
(4, 'Narbada Ayurveda Natural Flax Seeds', 'FP725', 'product-images/flaxseeds.jpg', 163.20),
(5, 'Ensure Diabetes Care Powder - 400 gm', 'EDC25', 'product-images/ensure.jpg', 634.80),
(6, 'Nestle Resource Diabetic Powder - 400 gm', 'NR775', 'product-images/NESTLERESOURCEDIABETICPOWDER.jpg', 895.80);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
