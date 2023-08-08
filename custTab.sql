-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2016 at 01:16 PM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

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
-- Table structure for table `custTab`
--

CREATE TABLE IF NOT EXISTS `custTab` (
  `custNo` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `custLast` varchar(25) NOT NULL,
  `custFirst` varchar(20) NOT NULL,
  `custAddress` varchar(40) NOT NULL,
  `custCity` varchar(15) NOT NULL,
  `custState` enum('MA','RI','NH') NOT NULL DEFAULT 'MA',
  `custZip` varchar(5) NOT NULL,
  `custEmail` varchar(40) DEFAULT NULL,
  `custPhone` varchar(10) DEFAULT NULL,
  `custAddDate` date NOT NULL,
  `custChangeDate` date DEFAULT NULL,
  PRIMARY KEY (`custNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `custTab`
--

INSERT INTO `custTab` (`custNo`, `custLast`, `custFirst`, `custAddress`, `custCity`, `custState`, `custZip`, `custEmail`, `custPhone`, `custAddDate`, `custChangeDate`) VALUES
(00001, 'Mouse', 'Mickey', '1 Disney Drive', 'Orlando', 'MA', '32985', 'mickey@disney.com', '7845841457', '2014-11-11', '2016-05-06'),
(00002, 'Duck', 'Daisy', '2 WB Way', 'New York', 'MA', '54785', 'quack@gmail.com', '5456225445', '2014-11-02', '2016-05-06'),
(00003, 'Bunny', 'Bugs', '4 Rabbit St', 'Akron', 'RI', '21455', 'carrot@hotmail.net', '9785124788', '2014-11-09', '2014-11-29'),
(00004, 'Boone', 'Daniel', '4 Bear Creek', 'Backwoods', 'RI', '12345', 'db@thewoods.net', '5084575428', '2014-11-03', '2014-11-03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
