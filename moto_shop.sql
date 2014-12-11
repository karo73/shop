-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2014 at 06:01 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moto_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `alt` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `cat` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `image`, `title`, `alt`, `price`, `cat`) VALUES
(1, 'moto-1.jpg', 'BMW - SRR', 'standart-moto-1', '1500', 'standart'),
(2, 'moto-2.jpg', 'BMW - SRR1000', 'standart-moto-2', '1800', 'standart'),
(3, 'moto-3.jpg', 'BMW - 1200R', 'standart-moto-3', '1300', 'standart'),
(4, 'moto-4.jpg', 'BMW - GS', 'standart-moto-4', '2000', 'standart'),
(5, 'moto-5.jpg', 'BMW - FX', 'mountain-moto-1', '1700', 'mountain'),
(6, 'moto-6.jpg', 'BMW - F800', 'mountain-moto-2', '2200', 'mountain'),
(7, 'moto-7.jpg', 'BMW - GSX', 'mountain-moto-3', '2500', 'mountain'),
(8, 'moto-8.jpg', 'BMW - GS1000', 'mountain-moto-4', '3000', 'mountain'),
(9, 'moto-9.jpg', 'BMW - S1000RR', 'sport-moto-1', '4500', 'sport'),
(10, 'moto-10.jpg', 'BMW - S5000', 'sport-moto-2', '5450', 'sport'),
(11, 'moto-11.jpg', 'BMW - ESCALA112', 'sport-moto-3', '4300', 'sport'),
(12, 'moto-12.jpg', 'BMW - TORNADO1130', 'sport-moto-4', '4800', 'sport');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `post_index` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `order_name` varchar(50) NOT NULL,
  `order_price` varchar(10) NOT NULL,
  `order_quantity` varchar(3) CHARACTER SET utf8mb4 NOT NULL,
  `order_all_price` varchar(10) NOT NULL,
  `order_date` varchar(10) NOT NULL,
  `order_time` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `lastname`, `address`, `post_index`, `email`, `phone`, `order_name`, `order_price`, `order_quantity`, `order_all_price`, `order_date`, `order_time`) VALUES
(2, 'drsgedgdfg', 'dfgdfg', 'dfgdfg', 'dfgdfg', 'dfgdfgdf', 'gdfgdfg', 'BMW - S1000RR', '4500&euro;', '3', '13500&euro', '2014-09-06', '14:22:28'),
(3, 'drsgedgdfg', 'dfgdfg', 'dfgdfg', 'dfgdfg', 'dfgdfgdf', 'gdfgdfg', 'BMW - TORNADO1130', '4800&euro;', '1', '4800&euro;', '2014-09-06', '14:22:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
