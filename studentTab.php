-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 18, 2016 at 08:17 AM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ct6050`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentTab`
--

CREATE TABLE IF NOT EXISTS `studentTab` (
  `stuID` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `stuFirst` varchar(20) NOT NULL DEFAULT '',
  `stuLast` varchar(25) NOT NULL DEFAULT '',
  `stuAddress` varchar(35) NOT NULL DEFAULT '',
  `stuZip` varchar(5) NOT NULL DEFAULT '',
  `stuStatus` enum('f','p') NOT NULL DEFAULT 'f',
  `stuEnrollAge` int(2) DEFAULT NULL,
  `stuComment` text NOT NULL,
  `stuDateAdded` date NOT NULL DEFAULT '0000-00-00',
  `stuDateChanged` date DEFAULT NULL,
  PRIMARY KEY (`stuID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `studentTab`
--

INSERT INTO `studentTab` (`stuID`, `stuFirst`, `stuLast`, `stuAddress`, `stuZip`, `stuStatus`, `stuEnrollAge`, `stuComment`, `stuDateAdded`, `stuDateChanged`) VALUES
(1, 'Ravi', 'Anderson', '1 Pear St', '11111', 'f', 18, '', '2014-11-03', '2016-08-18'),
(2, 'Rob', 'Bonds', '2 Blue Way', '23546', 'p', 31, '', '2014-11-03', '2016-08-17'),
(3, 'Chuck', 'Clarkson', '3 Carrot Way', '34568', 'f', 42, '', '2014-11-03', '2016-05-10'),
(4, 'Dale', 'Douglas', '4 Dead End Lane', '44444', 'f', 39, 'Veteran', '2014-11-03', '2016-05-31'),
(24, 'Rick', 'Mitchell', '1 Main', '', 'f', 25, 'xxxxx', '2016-08-18', '2016-08-18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
