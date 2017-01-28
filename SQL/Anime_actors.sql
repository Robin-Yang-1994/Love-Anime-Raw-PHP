-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2014 at 08:35 PM
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
-- Table structure for table `Anime_actors`
--

CREATE TABLE IF NOT EXISTS `Anime_actors` (
  `anime_id` int(10) NOT NULL,
  `actors_id` int(10) NOT NULL,
  PRIMARY KEY (`anime_id`,`actors_id`),
  KEY `actors_id` (`actors_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Anime_actors`
--

INSERT INTO `Anime_actors` (`anime_id`, `actors_id`) VALUES
(1, 1),
(2, 1),
(1, 2),
(2, 2),
(1, 3),
(2, 3),
(3, 4),
(3, 5),
(3, 6),
(4, 7),
(4, 8),
(4, 9),
(5, 10),
(5, 11),
(5, 12),
(6, 13),
(6, 14),
(6, 15),
(7, 16),
(7, 17),
(7, 18);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Anime_actors`
--
ALTER TABLE `Anime_actors`
  ADD CONSTRAINT `Anime_actors_ibfk_1` FOREIGN KEY (`anime_id`) REFERENCES `Anime` (`anime_id`),
  ADD CONSTRAINT `Anime_actors_ibfk_2` FOREIGN KEY (`actors_id`) REFERENCES `Actors` (`actors_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
