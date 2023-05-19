-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 22, 2021 at 04:15 PM
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
-- Database: `pingala10`
--

-- --------------------------------------------------------

--
-- Table structure for table `eyes`
--

DROP TABLE IF EXISTS `eyes`;
CREATE TABLE IF NOT EXISTS `eyes` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `eyes`
--

INSERT INTO `eyes` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Vision Express 12033 AF (including lens with Anti-reflective coating) - Matt Black', 'UA95', 'product-images/Vision Express 12033 AF (including lens with Anti-reflective coating) - Matt Black.jpg', 1099.50),
(2, 'Renu Advanced Formula Multi-Purpose Contact Lens Solution 355 ml', 'IN96', 'product-images/Renu Advanced Formula Multi-Purpose Contact Lens Solution 355 ml.jpg', 530.00),
(3, 'Vision Express 12053 Gold Gold Aviator Sunglasses 1s', 'IN27', 'product-images/Vision Express 12053 Gold Gold Aviator Sunglasses 1s.jpg', 1499.25),
(4, 'Vision Express Contact Lens Monthly Disposable Silicon Hydrogel Premium - (-1.25) Spherical', 'UG27', 'product-images/Vision Express Contact Lens Monthly Disposable Silicon Hydrogel Premium - (-1.25) Spherical.jpg', 2899.00),
(5, 'Vision Express Ready Reader - Black (+1.50)', 'WA74', 'product-images/Vision Express Ready Reader - Black (+1.50).jpg', 599.00),
(6, 'Vision Express UV Block Ready Reader - Red (+2.00)', 'QR42', 'product-images/Vision Express UV Block Ready Reader - Red (+2.00).jpg', 899.10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
