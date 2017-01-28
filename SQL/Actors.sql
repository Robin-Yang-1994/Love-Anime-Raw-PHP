-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2014 at 08:34 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u1352883`
--

-- --------------------------------------------------------

--
-- Table structure for table `Actors`
--

CREATE TABLE IF NOT EXISTS `Actors` (
  `actors_id` int(10) NOT NULL AUTO_INCREMENT,
  `actor_name` varchar(50) NOT NULL,
  `age` int(100) NOT NULL,
  PRIMARY KEY (`actors_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `Actors`
--

INSERT INTO `Actors` (`actors_id`, `actor_name`, `age`) VALUES
(1, 'Junji Majima', 36),
(2, 'Yoshitsugu Matsuoka', 28),
(3, 'Haruka Tomatsu', 24),
(4, 'Kanae Itō', 27),
(5, 'Misuzu Togashi', 24),
(6, 'Tomosa Murata', 33),
(7, 'Norio Wakamoto', 69),
(8, 'Yoshimasa Hosoya', 32),
(9, 'Risa Taneda', 26),
(10, 'Asami Seto', 21),
(11, 'Yoshitsugu Matsuoka', 28),
(12, 'Iori Momizu', 29),
(13, 'Ai Kayano', 27),
(14, 'Rie Kugimiya', 35),
(15, 'Yūki Kaji', 29),
(16, 'Yōko Hikasa', 29),
(17, 'Azumi Asakura', 27),
(18, 'Atsushi Abe', 33);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
