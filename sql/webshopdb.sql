-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jan 30, 2022 at 11:12 AM
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
-- Table structure for table `gametable`
--

CREATE TABLE `gametable` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `amount` int(11) NOT NULL,
  `photos` varchar(200) NOT NULL,
  `region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gametable`
--

INSERT INTO `gametable` (`id`, `name`, `description`, `price`, `amount`, `photos`, `region`) VALUES
(4, 'The Legend of Zelda: Breath of the Wild', 'Breath of the Wild is an action-adventure game set in an open world where players are tasked with exploring the kingdom of Hyrule while controlling Link.', '60', 50, 'https://media.s-bol.com/R8og9o7nGGqE/76qP9DG/735x1200.jpg', 'PAL');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subtotal` double NOT NULL,
  `posted_at` datetime NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `items` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'admin', 'admin', 'admin@gmail.com', 'adminlaan 31'),
(2, 'test', '$2y$10$9qQ7QCYqItHGZRI2BrnZGOYfUXFVNyyJBmHfVj3Nfdm0EuOgG18yi', 'bastiaanverheul@gmail.com', 'Dijkwater, 9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consoletable`
--
ALTER TABLE `consoletable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gametable`
--
ALTER TABLE `gametable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `gametable`
--
ALTER TABLE `gametable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
