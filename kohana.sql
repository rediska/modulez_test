-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2003 at 10:11 AM
-- Server version: 5.1.40
-- PHP Version: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kohana`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ext` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `ext`, `text`) VALUES
(1, '.jpg', 'Image description'),
(2, '.jpg', 'Image description'),
(3, '.jpg', 'Image description'),
(4, '.jpg', 'Image description'),
(5, '.jpg', 'Image description'),
(6, '.jpg', 'Image description'),
(7, '.jpg', 'Image description'),
(8, '.jpg', 'Image description'),
(9, '.jpg', 'Image description'),
(10, '.jpg', 'Image description'),
(11, '.jpg', 'Image description'),
(12, '.jpg', 'Image description'),
(13, '.jpg', 'Image description'),
(14, '.jpg', 'Image description'),
(15, '.jpg', 'Image description'),
(16, '.jpg', 'Image description'),
(17, '.jpg', 'Image description'),
(18, '.jpg', 'Image description'),
(19, '.jpg', 'Image description'),
(20, '.jpg', 'Image description'),
(21, '.jpg', 'Image description'),
(22, '.jpg', 'Image description'),
(23, '.jpg', 'Image description'),
(24, '.jpg', 'Image description'),
(25, '.jpg', 'Image description');
