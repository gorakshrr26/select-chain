-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2012 at 05:54 AM
-- Server version: 5.1.56
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `netvishw_select_chain`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `district_name` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`, `state_id`) VALUES
(1, 'Mumbai', 1),
(2, 'Pune', 1),
(3, 'Nashik', 1),
(4, 'Aurangabad', 1),
(5, 'Panjim', 2),
(6, 'Dandeli', 2),
(7, 'Karwar', 2);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(100) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'Maharashtra'),
(2, 'Goa');

-- --------------------------------------------------------

--
-- Table structure for table `taluka`
--

CREATE TABLE IF NOT EXISTS `taluka` (
  `taluka_id` int(11) NOT NULL AUTO_INCREMENT,
  `taluka_name` varchar(100) NOT NULL,
  `district_id` int(11) NOT NULL,
  PRIMARY KEY (`taluka_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `taluka`
--

INSERT INTO `taluka` (`taluka_id`, `taluka_name`, `district_id`) VALUES
(1, 'Alibag', 1),
(2, 'Kalyan', 1),
(3, 'Matheran', 1),
(4, 'Vaijapur', 4),
(5, 'Gangapur', 4),
(6, 'Kannad', 4),
(7, 'Sillod', 4),
(8, 'Madgaon', 5),
(9, 'Vengurle', 5),
(10, 'Sawantwadi', 5);

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE IF NOT EXISTS `village` (
  `village_id` int(11) NOT NULL AUTO_INCREMENT,
  `village_name` varchar(100) NOT NULL,
  `taluka_id` int(11) NOT NULL,
  PRIMARY KEY (`village_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`village_id`, `village_name`, `taluka_id`) VALUES
(1, 'Ranjangaon', 5),
(2, 'Wadgaon', 5),
(3, 'Teesgaon', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
