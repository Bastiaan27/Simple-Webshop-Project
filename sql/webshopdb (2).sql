-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Mar 18, 2022 at 02:45 PM
-- Server version: 10.6.5-MariaDB-1:10.6.5+maria~focal
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `consoletable`
--

CREATE TABLE `consoletable` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `amount` int(11) NOT NULL,
  `photos` varchar(200) NOT NULL,
  `region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consoletable`
--

INSERT INTO `consoletable` (`id`, `name`, `description`, `price`, `amount`, `photos`, `region`) VALUES
(1, 'Switch OLED White - Used Condition', 'This model has a few scars but is in perfect working condition. ', '250', 5, 'https://i.ebayimg.com/00/s/OTAyWDEwMjQ=/z/aEcAAOSw~rhh1cEI/$_84.JPG', 'PAL'),
(2, 'Switch Red/Blue - New Condition', 'In perfect working condition. ', '200', 4, 'https://i.ebayimg.com/00/s/OTAyWDEwMjQ=/z/aEcAAOSw~rhh1cEI/$_84.JPG', 'PAL'),
(3, 'Switch Lite Blue - New Condition', 'In perfect working condition. ', '150', 20, 'https://i.ebayimg.com/00/s/OTAyWDEwMjQ=/z/aEcAAOSw~rhh1cEI/$_84.JPG', 'PAL');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `address`) VALUES
(2, 'test', '$2y$10$9qQ7QCYqItHGZRI2BrnZGOYfUXFVNyyJBmHfVj3Nfdm0EuOgG18yi', 'bastiaanverheul@gmail.com', 'Dijkwater, 9'),
(4, 'Mark', '$2y$10$iPtpQmghwVn5t0X3EQjeweZQQ7AHEICOnxHaogfF0KRhtYSMXEqGe', 'mark@mark.mark', 'Blijdorplaan 35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consoletable`
--
ALTER TABLE `consoletable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consoletable`
--
ALTER TABLE `consoletable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
