-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2015 at 04:24 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_selection`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `state_id` int(11) DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  `city_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`city_id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`state_id`, `city_id`, `city_name`) VALUES
(1, 1, 'Nashik'),
(1, 2, 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(20) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `school_info`
--

CREATE TABLE IF NOT EXISTS `school_info` (
  `city_id` int(11) DEFAULT NULL,
  `school_id` int(11) NOT NULL,
  `school_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`school_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_info`
--

INSERT INTO `school_info` (`city_id`, `school_id`, `school_name`) VALUES
(1, 1, 'Singhania School'),
(1, 2, 'KVP School'),
(1, 3, 'Mahendra Pratap Scho'),
(1, 4, 'KVP School'),
(1, 5, 'MVN School');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) NOT NULL,
  `state_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`state_id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`country_id`, `state_id`, `state_name`) VALUES
(1, 1, 'Maharashtra');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(20) DEFAULT NULL,
  `school_authority_support` int(11) DEFAULT NULL,
  `disaster_affected` int(11) DEFAULT NULL,
  `no_of_students` int(11) DEFAULT NULL,
  `student_population` int(11) DEFAULT NULL,
  `destruction_to_infrastructure` int(11) DEFAULT NULL,
  `community_proven_part` int(11) DEFAULT NULL,
  `construction_cost` int(11) DEFAULT NULL,
  `ability_of_new_resource_dev` int(11) DEFAULT NULL,
  `prone` int(11) DEFAULT NULL,
  `amount` int(20) NOT NULL,
  `calc_value` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`ID`, `school_name`, `school_authority_support`, `disaster_affected`, `no_of_students`, `student_population`, `destruction_to_infrastructure`, `community_proven_part`, `construction_cost`, `ability_of_new_resource_dev`, `prone`, `amount`, `calc_value`) VALUES
(10, 'Singhania School', 0, 1, 12434, 54534, 1, 0, 463334, 1, 1, 35454, 45.5),
(11, 'Singhania School', 0, 6, 343, 335, 4, 0, 6654935, 3, 8, 0, 60.09552238806),
(12, 'Singhania School', 0, 1, 0, 0, 1, 0, 0, 1, 1, 0, 11),
(13, 'Mahendra Pratap Scho', 1, 3, 50000, 54534, 5, 0, 270000, 1, 1, 30000, 36.667436828401),
(14, 'Mahendra Pratap Scho', 1, 3, 50000, 54534, 5, 0, 270000, 1, 1, 30000, 36.667436828401),
(15, 'Singhania School', 0, 1, 50000, 75000, 1, 0, 0, 1, 1, 50, 13.666666666667),
(16, 'Singhania School', 1, 4, 50000, 60000, 1, 0, 86095804, 5, 3, 0, 39.333333333333),
(17, 'Singhania School', 1, 4, 50000, 60000, 1, 0, 86095804, 5, 3, 0, 39.333333333333),
(18, 'Singhania School', 0, 1, 0, 0, 1, 0, 0, 1, 1, 0, 11),
(19, 'Singhania School', 0, 1, 0, 0, 1, 0, 0, 1, 1, 0, 11),
(20, 'Singhania School', 0, 1, 0, 0, 1, 0, 0, 1, 1, 0, 11),
(21, 'Singhania School', 0, 1, 0, 0, 1, 0, 0, 1, 1, 0, 11),
(22, 'Singhania School', 1, 1, 4, 233, 1, 0, 5456, 1, 1, 0, 11.068669527897);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `ngo` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `emailid`, `password`, `ngo`, `city`, `country`, `state`) VALUES
(17, 'aanchal', 'achal.dadlani@gmail.com', 'a', 'abcd', 'abcd', '', ''),
(4, 'aan', 'aanchal.dad@hml.com', '0cc175b9c0f1b6a831c399e2697726', '', 'Nashik', '', ''),
(5, 'a', 'aanchal.dadlani@gmail.com', '0cc175b9c0f1b6a831c399e2697726', '', 'Nashik', '', ''),
(6, 'kan', 'aanchal.adlani@gmail.com', '17540aef7b8470cc3ea8b2b9046af3', '', '', '', ''),
(24, 'hhhhh', 'admin@gmail.com', 'admin', 'hhhhh', 'hhhhh', '', ''),
(16, 'hhhh', 'jp@gmail.com', 'a', 'hhhh', '', '', ''),
(18, 'jhjhj', 'aa@ge.com', 'a', 'fkhbiuh', 'uohoij', '', ''),
(19, 'kjkjp', 'ttya@fkj.com', 'a', 'kjdnkl', 'klkjk', '', ''),
(20, 'pratik', 'gaitonde.saili@gmail.com', 'pratik', 'Pratik', 'Nashik', '', ''),
(21, 'Sura', 'sura.helpline@gmail.com', 'sura', 'abcd', 'Nashik', 'India', 'Maharashtra'),
(22, 'Philam Foundation', 'philam.helpline@gmail.com', 'philam', 'abdi', 'Nashik', 'India', 'Maharashtra'),
(23, 'IDB', 'rachitadevakumar@gmail.com', 'rachita', 'IDB', 'Nashik', 'India', 'Maharashtra');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`);

--
-- Constraints for table `school_info`
--
ALTER TABLE `school_info`
  ADD CONSTRAINT `school_info_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`);

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
