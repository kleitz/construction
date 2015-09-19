-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2015 at 05:57 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vcp`
--
CREATE DATABASE IF NOT EXISTS `vcp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vcp`;

-- --------------------------------------------------------

--
-- Table structure for table `independent_monitoring`
--

CREATE TABLE IF NOT EXISTS `independent_monitoring` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project` varchar(100) NOT NULL,
  `scope_of_work` varchar(100) NOT NULL,
  `duration_time` varchar(100) NOT NULL,
  `possible_action` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scope_id` int(11) NOT NULL,
  `scope_of_work` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_cost` decimal(11,2) NOT NULL,
  `days` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `scope_id`, `scope_of_work`, `description`, `unit`, `quantity`, `unit_cost`, `days`) VALUES
(1, 0, '0', 'Materials', 'None', 0, '345.00', 23),
(2, 0, 'Excavation', 'Materials', 'None', 3, '2.00', 4),
(3, 1, 'Excavation', 'Materials', 'None', 3, '2.00', 4),
(4, 1, 'Excavation', 'Materials', 'None', 1241, '124.00', 14),
(5, 1, 'Excavation', 'Materials', 'None', 124, '234.00', 235),
(6, 1, 'Excavation', 'Materials', 'None', 2, '3.00', 3),
(7, 1, 'Excavation', 'Materials', 'None', 12, '12.00', 1),
(8, 1, 'Excavation', 'Materials', 'None', 12, '124.00', 123),
(9, 1, 'Excavation', 'Materials', 'None', 12, '124.00', 123),
(10, 1, 'Excavation', 'Materials', 'Kgs', 2, '2.00', 2),
(11, 1, 'Excavation', 'Materials', 'Kgs', 3, '3.00', 3),
(12, 1, '2', '2', 'Kgs', 234, '234.00', 24),
(13, 1, '2', '2', 'Kgs', 3, '4.00', 5),
(14, 1, '3', '1', 'Kgs', 2, '3.00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_site` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `cdtc` int(4) NOT NULL,
  `bid_price` int(15) NOT NULL,
  `files` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_site`, `location`, `cdtc`, `bid_price`, `files`) VALUES
(1, 'a', 'b', 2, 233, ''),
(2, 'ds', 'sff', 234, 34, ''),
(4, 'ryhfghfghf', 'gkgkg', 0, 222, ''),
(5, 'asd', 'asd', 123, 123, ''),
(6, 'ad', 'ad', 12, 12, ''),
(7, 'asd', 'asd', 2, 2, '69acc39b7ad484b6a391d6e895d04725.docx'),
(8, 'x', 'x', 2, 2, 'BANKING_MANAGEMENT_SYSTEM.docx');

-- --------------------------------------------------------

--
-- Table structure for table `scopework`
--

CREATE TABLE IF NOT EXISTS `scopework` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scopework` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `scopework`
--

INSERT INTO `scopework` (`id`, `scopework`) VALUES
(2, 'sdfsdf'),
(3, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `visual_monitoring`
--

CREATE TABLE IF NOT EXISTS `visual_monitoring` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project` varchar(100) NOT NULL,
  `scope_of_work` varchar(100) NOT NULL,
  `days` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `visual_monitoring`
--

INSERT INTO `visual_monitoring` (`id`, `project`, `scope_of_work`, `days`) VALUES
(2, '1', '2', 3),
(3, '3', '4', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
