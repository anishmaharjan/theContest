-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2016 at 06:21 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contestantdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contestant`
--

CREATE TABLE IF NOT EXISTS `contestant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL,
  `isactive` bit(1) NOT NULL,
  `districtid` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `photourl` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `contestant`
--

INSERT INTO `contestant` (`id`, `firstname`, `lastname`, `dateofbirth`, `isactive`, `districtid`, `gender`, `photourl`, `address`) VALUES
(10, 'rat', 'rat', '1923-03-04', b'1', 1, 'male', '', 'asdf'),
(12, 'Nice', 'Mat', '2015-06-25', b'1', 2, 'male', '', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `contestantrating`
--

CREATE TABLE IF NOT EXISTS `contestantrating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contestantid` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `rateddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contestantrating`
--

INSERT INTO `contestantrating` (`id`, `contestantid`, `rating`, `rateddate`) VALUES
(2, 10, 4, '2016-03-04 00:00:00'),
(3, 12, 0, '2016-03-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`) VALUES
(1, 'Kathmandu'),
(2, 'Bhaktapur'),
(3, 'Lalitpur');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
