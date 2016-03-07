-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2016 at 08:45 AM
-- Server version: 5.6.29
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `justinri_addressbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `home_phone` varchar(50) NOT NULL,
  `work_phone` varchar(50) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` int(30) NOT NULL,
  `dob` date NOT NULL,
  `comments` text NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `img_data` blob NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `home_phone`, `work_phone`, `address1`, `address2`, `city`, `state`, `zipcode`, `dob`, `comments`, `img_name`, `img_data`, `date_added`) VALUES
(2, 'Justin', 'Richard', 'montypython890@gmail.com', '7148879451', '7148879451', '564 New Britain Road', '', 'Doylestown', 'PA', 18901, '1995-12-17', 'php', '', '', '2016-03-05 20:54:08'),
(28, 'Test', 'Subject', 'asdf@email.com', '7144652823', '7144652823', '8201 Brixham Circle', '#E201', 'Huntington Beach', 'CA', 92646, '1999-11-11', 'This is a test contact.', '', '', '2016-03-07 16:34:46');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
