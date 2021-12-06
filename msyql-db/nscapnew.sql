-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 11, 2021 at 04:45 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nscapnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Username` varchar(100) DEFAULT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('Admin', '123abc');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `venerologist_name` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `date_of` date NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `app_no` int(11) NOT NULL,
  `result` varchar(255) NOT NULL,
  `appkey` varchar(255) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`no`, `username`, `fullname`, `nic`, `venerologist_name`, `userid`, `date_of`, `timeslot`, `app_no`, `result`, `appkey`) VALUES
(84, 'test1', 'Sample User', '34313635v', 'Mike Henry', 'DC01', '2021-10-12', '10:30-12:30', 3, 'canceled', 'RG255638'),
(82, 'bbob1', 'Bob Bill', '54798124ed', 'Mike Henry', 'DC01', '2021-10-12', '10:30-12:30', 2, 'completed', 'RG795365'),
(83, 'BBob1', 'Bob Bill', '54798124ed', 'Tom Sam', 'DC02', '2021-10-12', '15:30-17:00', 1, 'booked', 'RG457255'),
(81, 'Alex1', 'Alex Jay', '34313635v', 'Mike Henry', 'DC01', '2021-10-12', '10:30-12:30', 1, 'completed', 'RG221677');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`no`, `firstname`, `lastname`, `username`, `email`, `nic`, `dob`, `password`) VALUES
(16, 'Sample', 'User', 'test1', 'test@test.com', '352353463v', '2001-09-08', 'test123'),
(15, 'Bob', 'Bill', 'bbob1', 'bob@gmail.com', '54798124ed', '1998-01-01', 'bob123'),
(14, 'Alex', 'Jay', 'Alex1', 'alex@alex.com', '34313635v', '1998-01-01', 'alex1234');

-- --------------------------------------------------------

--
-- Table structure for table `venerologists`
--

DROP TABLE IF EXISTS `venerologists`;
CREATE TABLE IF NOT EXISTS `venerologists` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `qualifications` varchar(50) NOT NULL,
  `exp` int(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `No` (`No`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venerologists`
--

INSERT INTO `venerologists` (`No`, `fullname`, `userid`, `nic`, `email`, `qualifications`, `exp`, `password`) VALUES
(19, 'Mike Henry', 'DC01', '123441314abc', 'mike@mike.com', 'Mbbs(USA)', 5, 'mike1234'),
(20, 'Tom Sam', 'DC02', '435156754vm12', 'tome@yahoo.com', 'Mbbs(USA)', 5, 'tom123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
