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
-- Table structure for table `Anime_genre`
--

CREATE TABLE IF NOT EXISTS `Anime_genre` (
  `anime_id` int(10) NOT NULL,
  `genre_id` int(10) NOT NULL,
  PRIMARY KEY (`anime_id`,`genre_id`),
  KEY `genre_id` (`genre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Anime_genre`
--

INSERT INTO `Anime_genre` (`anime_id`, `genre_id`) VALUES
(3, 1),
(6, 1),
(3, 2),
(7, 2),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(1, 4),
(2, 4),
(5, 4),
(1, 5),
(2, 5),
(7, 5),
(1, 6),
(2, 6),
(4, 6),
(4, 7),
(1, 8),
(2, 8),
(5, 8),
(6, 8),
(5, 9);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Anime_genre`
--
ALTER TABLE `Anime_genre`
  ADD CONSTRAINT `Anime_genre_ibfk_1` FOREIGN KEY (`anime_id`) REFERENCES `Anime` (`anime_id`),
  ADD CONSTRAINT `Anime_genre_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `Genre` (`genre_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
