-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2020 at 10:34 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `communication`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

DROP TABLE IF EXISTS `advertisement`;
CREATE TABLE IF NOT EXISTS `advertisement` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(30) NOT NULL,
  `body` varchar(225) NOT NULL,
  PRIMARY KEY (`ads_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sub` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `body` varchar(255) NOT NULL,
  `instructor` varchar(200) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `instructor` (`instructor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `instructer`
--

DROP TABLE IF EXISTS `instructer`;
CREATE TABLE IF NOT EXISTS `instructer` (
  `inst_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(225) NOT NULL,
  `lastName` varchar(225) NOT NULL,
  `fatherName` varchar(225) NOT NULL,
  `motherName` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `nationality` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `id_number` varchar(225) NOT NULL,
  PRIMARY KEY (`inst_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instructer`
--

INSERT INTO `instructer` (`inst_id`, `firstName`, `lastName`, `fatherName`, `motherName`, `phone`, `email`, `nationality`, `city`, `id_number`) VALUES
(1, 'Ali', 'Lasifer', 'Yousif', 'Zaineb', '0912764528', 'Ali.Yousif@gmail.com', 'libyan', 'Tripoli', '21345678900');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(225) NOT NULL,
  `receiver` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `subject` varchar(30) DEFAULT NULL,
  `body` text,
  PRIMARY KEY (`msg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `methodology`
--

DROP TABLE IF EXISTS `methodology`;
CREATE TABLE IF NOT EXISTS `methodology` (
  `meth_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(225) NOT NULL,
  `file` longtext NOT NULL,
  PRIMARY KEY (`meth_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `stu_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(225) NOT NULL,
  `lastName` varchar(225) NOT NULL,
  `fatherName` varchar(225) NOT NULL,
  `motherName` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `nationality` varchar(225) NOT NULL,
  `id_number` varchar(225) NOT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `units` int(11) NOT NULL,
  `prerequisites` varchar(225) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `name`, `units`, `prerequisites`) VALUES
(1, 'Ø¨Ø±Ù…Ø¬Ø© Ù…Ù†Ø·Ù‚', 3, 'Ø¬Ø§ÙØ§'),
(2, 'logic programming', 3, 'java');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`instructor`) REFERENCES `instructor` (`id_inst`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
