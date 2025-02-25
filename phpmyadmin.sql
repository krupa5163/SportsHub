-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 25, 2025 at 04:53 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpadminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `description` longtext NOT NULL,
  `trending` tinyint NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `trending`, `status`, `created_at`) VALUES
(2, 't-shirt', 'football tshirt', 0, 0, '2025-02-20 03:43:05'),
(3, 'shoes', 'free size', 0, 0, '2025-02-24 03:02:26'),
(4, 'football', 'best play game', 0, 0, '2025-02-24 03:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `name` varchar(191) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `long_description` longtext NOT NULL,
  `price` varchar(191) NOT NULL,
  `offerprice` varchar(191) NOT NULL,
  `tax` varchar(191) NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` tinyint NOT NULL COMMENT '0=show, 1=hide',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `small_description`, `long_description`, `price`, `offerprice`, `tax`, `quantity`, `image`, `status`, `created_at`) VALUES
(1, 2, 'top', 'drgtdhgfnnhn', 'ererghgnnhfn', '300', '250', '5%', 2, '1740304877jpg', 0, '0000-00-00 00:00:00'),
(2, 2, 'top', 'hfdsdfghjkjhfg', 'hghfdfxfghjkhfgg', '500', '400', '5%', 1, '0', 127, '2025-02-22 08:54:16'),
(3, 4, 'football ', 'gjhghkjh', 'tfyguguh', '500', '400', '5', 1, '0', 127, '2025-02-24 03:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `role_as`, `created_at`) VALUES
(1, 'Pratikshya', '234234235556', 'gudi@gmail.com', '1234565', 1, NULL),
(2, 'pinku', '66547654654', 'pinku@gmail.com', '123456', 1, NULL),
(6, 'prince', '124325453', 'p@gmail.com', '1234', 1, NULL),
(7, 'Krushna Swain', '08780181191', 'krushnaswain607@gmail.com', '123456', 0, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
