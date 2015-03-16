-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2014 at 03:11 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rail`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `admin_name`, `admin_password`) VALUES
(1, 'aditya', '6666');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'aditya', '6666'),
(2, 'ashutosh', '3434');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `name`, `age`, `city`, `sex`, `email`, `number`, `password`) VALUES
(10, 'aditya', 'adi', '18', 'agra', 'male', 'adityasikarwarcena@gmail.com', '7679898908', 'e9510081ac30ffa83f10b68cde1cac07'),
(11, 'ashutosh', 'ashu', '20', 'ajmer', 'male', 'ashu@gmail.com', '5758875758', '14c879f3f5d8ed93a09f6090d77c2cc3'),
(12, 'jay pandya', 'jay', '23', 'dungarpur', 'male', 'jay@gmail.com', '5768876896', '7b9dc501afe4ee11c56a4831e20cee71'),
(13, 'akansha', 'akansha', '18', 'bharatpur', 'female', 'akansha@gmail.com', '6467467474', 'dbc4d84bfcfe2284ba11beffb853a8c4'),
(14, 'vinay', 'vinay', '21', 'chittor', 'male', 'vinay@gmail.com', '4677676898', 'a01610228fe998f515a72dd730294d87'),
(15, 'ayush ', 'ayush', '19', 'karauli', 'male', 'ayush@gmail.com', '665768987', '14c879f3f5d8ed93a09f6090d77c2cc3');

-- --------------------------------------------------------

--
-- Table structure for table `traininfo`
--

CREATE TABLE IF NOT EXISTS `traininfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `train_no` varchar(255) NOT NULL,
  `train_name` varchar(255) NOT NULL,
  `station` varchar(255) NOT NULL,
  `1` varchar(255) NOT NULL,
  `2` varchar(255) NOT NULL,
  `3` varchar(255) NOT NULL,
  `4` varchar(255) NOT NULL,
  `stop` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `traininfo`
--

INSERT INTO `traininfo` (`id`, `train_no`, `train_name`, `station`, `1`, `2`, `3`, `4`, `stop`) VALUES
(1, '23456', 'agra fort intercity', 'agra', '', '11:00pm', '', '', '2'),
(3, '654446', 'ratlam express', 'mumbai', '2:00am', '', '', '', '1'),
(4, '4566578', 'avadh express', 'delhi', '', '', '', '5:00pm', '4'),
(5, '565768', 'toofan express', 'bharatpur', '', '3:00am', '', '', '2'),
(6, '455667', 'marudhar exp.', 'jodhpur', '', '', '3:00am', '', '3'),
(7, '676878', 'khaju rao', 'dungarpur', '', '', '5:00am', '', '3'),
(8, '7767655', 'jaipur superfast', 'jaipur', '9:00pm', '', '', '', '1'),
(9, '577575', 'chennai express', 'chennai', '5:00am', '', '', '', '1'),
(10, '454547', 'allahabad  express', 'allahabad', '', '', '3:00am', '', '3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
