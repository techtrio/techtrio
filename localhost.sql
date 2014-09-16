-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2013 at 07:02 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.6-1ubuntu1.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `employee`
--
CREATE DATABASE `employee` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `employee`;

-- --------------------------------------------------------

--
-- Table structure for table `Persons`
--

CREATE TABLE IF NOT EXISTS `Persons` (
  `FirstName` char(30) DEFAULT NULL,
  `MiddleName` char(30) DEFAULT NULL,
  `LastName` char(30) DEFAULT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Emptype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Persons`
--

INSERT INTO `Persons` (`FirstName`, `MiddleName`, `LastName`, `Address`, `Contact`, `Sex`, `Emptype`) VALUES
('karan', 'veer singh', 'Dogra', 'pathan kot', '9742162626', 'male', 'labour'),
('rakesh', 'kumar', 'gupta', 'siliguri', '7655252525', 'male', 'technical'),
('ravi', 'kumar', 'singha', '', '', '', 'skilled'),
('gopal', 'agarwal', 'kumar', 'siliguri', '88862662', 'female', 'technical'),
('piyush', 'kumar', 'singhal', 'siliguri', '765515151551', 'male', 'technical');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `USERNAME` int(3) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USERNAME`, `PASSWORD`) VALUES
(0, 'panda'),
(0, 'piyush'),
(701, 'piyush'),
(702, 'akshay');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
