-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 05:58 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr13_carina_bigevents`
--
CREATE DATABASE IF NOT EXISTS `cr13_carina_bigevents` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cr13_carina_bigevents`;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`address`, `capacity`, `date`, `description`, `email`, `id`, `image`, `name`, `phone`, `url`) VALUES
('Eventstraße 1, 1111 Eventtown', 200, '15. Oktober 2020, 20:00', 'Rockiges Rockkonzert', 'rock@rockkonzert.at', 1, 'https://images.pexels.com/photos/1916821/pexels-photo-1916821.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940', 'Rock1', 12365458, 'www.rockkonzert.at'),
('Eventvillage 5, 5555 Eventvillage', 150, '10. November 2020, 20:00', 'Lustiges Kabarett', 'lauralustig@kabaretts.at', 2, 'https://images.pexels.com/photos/3791983/pexels-photo-3791983.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940', 'Lisbeth Lustig', 65481235, 'www.lauralustig.at'),
('Violinstraße 4, 1547 Violinhausen', 50, '25. September 2020, 19:30', 'Mozartklänge', 'violine@violine.at', 3, 'https://images.pexels.com/photos/210854/pexels-photo-210854.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940', 'Violinkonzert', 459861234, 'www.violinenklaenge.at'),
('Sommerstraße 14, 4567 Sommerstadt', 300, '22. August 2020, 14:00', 'Große Sommerparty', 'sommerparty@sommer.at', 8, 'https://images.pexels.com/photos/219998/pexels-photo-219998.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940', 'Augustfest', 165489654, 'www.augustparty.at'),
('Gemüseweg 32, 12456 Gemüsestadt', 250, '30. August 2020, 11:00', 'Gemüsefest', 'gemuese@vitamine.at', 9, 'https://images.pexels.com/photos/1300972/pexels-photo-1300972.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940', 'Vitaminfest', 2147483647, 'www.vitaminfest.at'),
('Kinostraße 42, 84568 Filmhausen', 350, '21. August 2020, 20:30', 'Ein Kinoabend wie damals', 'filmliebe@film.at', 10, 'https://images.pexels.com/photos/713149/pexels-photo-713149.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260', 'Filmnacht', 2147483647, 'www.filmliebe.at'),
('Ausruhstraße 10, 6078 Ruhdorf', 60, '3.September 2020', 'Balance for your soul & life, lecture by Yoga coach Chirag', 'yogachirag@life.in', 11, 'https://images.pexels.com/photos/235990/pexels-photo-235990.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940', 'BALANCE - Vortrag', 2147483647, 'www.chiragbalance.in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
