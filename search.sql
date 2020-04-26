-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2020 at 05:20 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `search`
--

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

DROP TABLE IF EXISTS `sites`;
CREATE TABLE IF NOT EXISTS `sites` (
  `site_id` int(10) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(100) NOT NULL,
  `site_link` varchar(100) NOT NULL,
  `site_keywords` varchar(100) NOT NULL,
  `site_desc` text NOT NULL,
  `site_image` text NOT NULL,
  PRIMARY KEY (`site_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`site_id`, `site_title`, `site_link`, `site_keywords`, `site_desc`, `site_image`) VALUES
(1, 'google', 'google.com', 'google', 'google is a search engine.', '2.PNG'),
(2, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, 'sid', 'sod', ';sldk', 'aslkdma', ''),
(5, 'sid', 'sid.com', 'sid', 'sidnmn', '1.PNG'),
(6, 'sid', 'sid.com', 'sid', 'sidnmn', 'Array'),
(7, 'sid', 'sid.com', 'sid', 'sidnmn', ''),
(8, 'sid', 'sid.com', 'sid', 'sidnmn', '1.PNG'),
(9, 'sid', 'sid.com', 'sid', 'sidnmn', 'Array'),
(10, 'sid', 'sid.com', 'sid', 'sidnmn', ''),
(11, 'sid', 'sid.com', 'sid', 'sidnmn', '1.PNG'),
(12, 'siddy', 'sdidd', 'lknsalcnsa', 'lksajklcsakc', '1.PNG'),
(13, 'siddy', 'sdidd', 'lknsalcnsa', 'lksajklcsakc', '1.PNG'),
(14, 'pragati', 'pragati.ecellsfit.com', 'pragati', 'kncmancnamcnmnczxncnzxnxzcnxzmnmzxnmnxmnxz.nxzxzm,', 'ecellsfit.png'),
(15, 'ecellsfit', 'ecellsfit.com', 'ecellsfit', ';mckcmsamc;masl;jasjcpasjkjskjljlkjjxkcjjcjc', 'certificate template.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
