-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 23, 2014 at 02:22 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `donation_cancel`
--

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(60) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `party_id` int(11) DEFAULT NULL,
  `election_id` int(11) DEFAULT NULL,
  `transaction_code` text,
  `success` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `timestamp`, `ip`, `amount`, `party_id`, `election_id`, `transaction_code`, `success`) VALUES
(1, '2014-06-22 21:48:16', '', 0, 0, 0, '', 0),
(2, '0000-00-00 00:00:00', '::1', 3000, 3, 45, 'fh378hfa', 1),
(3, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(4, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(5, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(6, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(7, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(8, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(9, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(10, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(11, '0000-00-00 00:00:00', '::1', 2000, 4, 45, 'fh378hfa', 1),
(12, '0000-00-00 00:00:00', '::1', 2000, 4, 45, 'fh378hfa', 1),
(13, '0000-00-00 00:00:00', '::1', 2000, 4, 45, 'fh378hfa', 1),
(14, '0000-00-00 00:00:00', '::1', 2000, 4, 45, 'fh378hfa', 1),
(15, '0000-00-00 00:00:00', '::1', 2000, 4, 45, 'fh378hfa', 1),
(16, '0000-00-00 00:00:00', '::1', 2000, 4, 45, 'fh378hfa', 1),
(17, '0000-00-00 00:00:00', '::1', 2000, 4, 4, 'fh378hfa', 1),
(18, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(19, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(20, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(21, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(22, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(23, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(24, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(25, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(26, '0000-00-00 00:00:00', '::1', 2000, 4, 4, 'fh378hfa', 1),
(27, '0000-00-00 00:00:00', '::1', 2000, 4, 4, 'fh378hfa', 1),
(28, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(29, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(30, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(31, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(32, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(33, '0000-00-00 00:00:00', '::1', 2000, 3, 45, 'fh378hfa', 1),
(34, '0000-00-00 00:00:00', '::1', 2000, 5, 45, 'fh378hfa', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
