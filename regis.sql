-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2012 at 07:21 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE IF NOT EXISTS `regis` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phno` int(11) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`sno`, `fname`, `lname`, `uname`, `pass`, `address`, `email`, `phno`) VALUES
(1, 'ram', 'kumar', 'ram100', '123456', 'vizag', 'ram@gmail.com', 9999),
(2, 'shiv', 'rao', 'shiv100', '123456', 'vizag', 'shiv@gmail.com', 88888),
(3, 'sd', 'sdsd', 'ds', 'asasa', 'dsdsd', 'dsd', 93999),
(4, 'hjcdhjsh', 'xcxxc', 'dkp100', '123456', 'ghghgd', 'fdhsfdhsg', 55555),
(5, 'hjcdhjsh', 'ussr', 'mur100', '123456', 'dfshdfsd', 'lalithanhabxba', 66666);
