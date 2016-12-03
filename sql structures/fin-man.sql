-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2016 at 10:57 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fin-man`
--

-- --------------------------------------------------------

--
-- Table structure for table `journal-entries`
--

CREATE TABLE IF NOT EXISTS `journal-entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(10) NOT NULL,
  `account` varchar(50) NOT NULL,
  `type` varchar(6) NOT NULL,
  `amount` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `journal-entries`
--

INSERT INTO `journal-entries` (`id`, `date`, `account`, `type`, `amount`) VALUES
(5, '06/21/2016', 'cash', 'credit', '15000'),
(6, '06/23/2016', 'cash', 'debit', '1000'),
(7, '06/24/2016', 'equipment', 'debit', '20000'),
(8, '06/24/2016', 'Accounts Payable', 'credit', '8000'),
(9, '06/24/2016', 'Accounts Payable', 'debit', '25000'),
(10, '06/24/2016', 'equipment', 'credit', '5000'),
(14, '06/24/2016', 'cash', 'debit', '1200'),
(15, '06/24/2016', 'cash', 'debit', '500'),
(16, '06/24/2016', 'electricity', 'credit', '300');

-- --------------------------------------------------------

--
-- Table structure for table `journal-transactions`
--

CREATE TABLE IF NOT EXISTS `journal-transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `journal-transactions`
--

INSERT INTO `journal-transactions` (`id`, `date`, `name`) VALUES
(4, 'asfefef', 'wefewfwe argnar gajehrgk rgajkrhg akjgh argkjahr g'),
(10, 'efw4g', 'g5t4h6'),
(11, '23f5g5', '23ffrg'),
(12, 'eeqf', 'afaef');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
