-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 
Generation Time: Dec 04, 2015 at 11:51 AM
-- 
Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@
@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- ------------------------
--------------------------------

--
-- Table structure for table `books`
--


CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  
`Name` varchar(100) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=157 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `Name`) VALUES
(154, 'tom sawyer'),
(155, 'anna karenina'),
(156, '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--


CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) 
DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  
PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;


--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `surname`, `department`) 
VALUES
(5, 'rozeri', 'akta', 'cs'),
(7, 'rozer', 'ak', 'cs');


-- --------------------------------------------------------

--
-- Table structure for table 
`studentbook`
--


CREATE TABLE IF NOT EXISTS `studentbook` (
  `student_id` int(11) DEFAULT NULL,
 
 `book` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--
 Dumping data for table `studentbook`
--

INSERT
 INTO `studentbook` (`student_id`, `book`) VALUES
(NULL,
 '<option value = "tom sawyer">tom sawyer</option><option value = "
anna karenina">anna karenina</optio'),
(NULL, 'anna karenina'),
(5, NULL),

(7, NULL),
(NULL, 'anna karenina'),
(5, NULL),
(7, NULL),
(5, NULL),
(7, NULL),

(5, NULL),
(7, NULL),
(5, NULL),
(7, NULL),
(5, NULL),
(7, NULL),
(5, NULL),
(7, NULL),

(NULL, 'tom sawyer'),
(5, NULL),
(7, NULL),
(5, NULL),
(7, NULL),
(5, NULL),
(7, NULL),
(5, NULL),
(
7, NULL),
(NULL, 'anna karenina'),
(NULL, 'tom sawyer'),
(5, NULL),
(7, NULL),
(5, NULL),
(7, NULL),
(NUL
L, ''),
(NULL, ''),
(NULL, 'tom sawyer'),
(5, NULL),
(7, NULL),
(NULL, 'anna karenina'),
(N
ULL, 'anna karenina'),
(NULL, 'tom sawyer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARAC
TER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RES
ULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
