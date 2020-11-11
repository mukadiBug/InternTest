-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2020 at 09:29 PM
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
-- Database: `interntest`
--

-- --------------------------------------------------------

--
-- Table structure for table `surveydb`
--

DROP TABLE IF EXISTS `surveydb`;
CREATE TABLE IF NOT EXISTS `surveydb` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Surname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `date` varchar(50) NOT NULL,
  `Age` int(3) NOT NULL,
  `Food` varchar(100) NOT NULL,
  `choose` varchar(1) NOT NULL,
  `choose2` varchar(50) NOT NULL,
  `choose3` varchar(50) NOT NULL,
  `choose4` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surveydb`
--

INSERT INTO `surveydb` (`id`, `Surname`, `fname`, `Contact`, `date`, `Age`, `Food`, `choose`, `choose2`, `choose3`, `choose4`) VALUES
(1, 'frankie', 'bob', '0728523574', '2020-11-10', 22, 'pizza , pasta', '3', '4', '3', '4'),
(2, 'robert', 'fname', 'Cnum', 'date', 10, 'SinFood', '', 'choose2', 'choose3', 'choose4'),
(3, 'robertit', 'babadi', '0725823285', 'date', 10, 'Pizza,Chicken Stir Fry', '', '4', 'choose3', 'choose4'),
(4, 'jajaji', 'babadi', '0725823285', '2020-11-13', 23, 'Pap and Wors ,Beef Stir Fry,Other', '5', '4', '3', '2'),
(5, 'tshimanga', 'wa', '6505552582', '2020-11-05', 23, 'Pasta,Chicken Stir Fry', '5', '4', '3', '2'),
(6, 'joe', 'fox', '0117692852', '2020-11-20', 28, 'Pizza,Chicken Stir Fry,Beef Stir Fry', '5', '4', '3', '2'),
(7, 'joe', 'fox', '0117692852', '2020-11-20', 28, 'Pizza,Chicken Stir Fry,Beef Stir Fry', '5', '4', '3', '2'),
(8, 'fox', 'steve', '0114408585', '2020-11-06', 30, 'Chicken Stir Fry,Beef Stir Fry', '5', '4', '3', '2'),
(9, 'fox', 'steve', '0114408585', '2020-11-06', 30, 'Chicken Stir Fry,Beef Stir Fry', '5', '4', '3', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
