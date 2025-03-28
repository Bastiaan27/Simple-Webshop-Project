-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Apr 08, 2022 at 02:56 PM
-- Server version: 10.6.5-MariaDB-1:10.6.5+maria~focal
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `developmentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `author` varchar(255) NOT NULL,
  `posted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `author`, `posted_at`) VALUES
(1, 'test title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porta mauris nisl, vel iaculis quam venenatis quis. Quisque id efficitur dui, eget tempor erat. Fusce hendrerit, sem non porttitor semper, nunc metus pharetra sem, a ultrices lorem leo nec arcu. Vestibulum at interdum velit. Suspendisse vulputate rutrum libero, id placerat ipsum lacinia eu. Fusce vel orci eget augue maximus rhoncus eu non nisl. Cras id sodales risus. Mauris sed ullamcorper lacus, a tempus orci. Donec dignissim ipsum at varius commodo. Nulla a sapien aliquam, maximus neque non, vehicula libero. Nulla a varius purus, at tincidunt diam. Morbi sed urna a diam pretium tincidunt nec at neque. Aliquam consectetur at turpis at consequat. Sed dapibus, quam vel faucibus malesuada, dui lectus lacinia felis, porta posuere dui odio id enim. Vivamus molestie pharetra leo, vitae mattis sapien congue non. Etiam dapibus, diam at interdum tempus, ligula augue commodo nulla, vel fermentum elit est vel justo.', 'test author', '2021-11-30 13:09:55'),
(2, 'test title', 'Donec fermentum porttitor metus, quis pulvinar elit ornare congue. Donec dapibus est ut metus fermentum ultricies. Ut eu turpis facilisis, dignissim sem porttitor, congue libero. Fusce volutpat facilisis interdum. Mauris vulputate ultricies mauris a facilisis. Maecenas tincidunt efficitur tincidunt. Etiam tempor maximus tincidunt.', 'test author', '2021-11-30 13:09:55'),
(3, 'test title', 'Mauris id feugiat lectus, ut efficitur tellus. Phasellus a arcu vel urna venenatis laoreet. Nullam congue sem ac erat aliquet, ac pulvinar felis fermentum. Sed rutrum nulla sit amet porta suscipit. Etiam consectetur mauris ac arcu scelerisque, ut blandit lectus porta. Pellentesque at ligula a lacus mattis laoreet. Nulla finibus volutpat velit a finibus. In nec condimentum erat. Aliquam erat volutpat. Vestibulum molestie finibus lorem quis egestas. Fusce id mi ac nisl vehicula laoreet. Cras molestie dolor eget nunc laoreet, et sodales velit mollis. Aliquam dignissim leo quis dolor varius, at molestie est hendrerit. Sed lorem tellus, rhoncus at dignissim ac, euismod id sem. Quisque facilisis felis eget ex mattis, sed pretium magna pulvinar. Etiam tincidunt sodales ultrices.', 'test author', '2021-11-30 13:09:55'),
(4, 'test title', 'Curabitur ultricies est malesuada ante laoreet condimentum. Nam ullamcorper, mi at dignissim dignissim, turpis tortor tristique ligula, sed rhoncus ipsum sapien sit amet lacus. Curabitur ligula risus, vulputate vel urna ac, gravida maximus erat. Nunc odio urna, sagittis non mi eu, semper tristique magna. Cras vitae mi nec ex sollicitudin hendrerit et vitae urna. Praesent posuere sem in lectus dignissim viverra. Vivamus neque metus, rhoncus ac arcu vel, eleifend molestie neque. Fusce eget varius massa. Praesent eleifend nunc leo, et pretium sapien volutpat a. Nulla consectetur facilisis sapien, at rhoncus nibh cursus maximus. Donec at eleifend lacus, quis mollis eros. Fusce dui augue, rutrum sit amet ipsum porttitor, convallis congue sapien.', 'test author', '2021-11-30 13:09:55');

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
(1, 'Switch OLED White - Used Condition', 'This model has a few scars but is in perfect working condition. ', '200', 5, 'https://i.ebayimg.com/00/s/OTAyWDEwMjQ=/z/aEcAAOSw~rhh1cEI/$_84.JPG', 'PAL'),
(2, 'Switch OLED White - Used Condition', 'This model has a few scars but is in perfect working condition. ', '200', 5, 'https://i.ebayimg.com/00/s/OTAyWDEwMjQ=/z/aEcAAOSw~rhh1cEI/$_84.JPG', 'PAL'),
(3, 'Switch OLED White - Used Condition', 'This model has a few scars but is in perfect working condition. ', '200', 5, 'https://i.ebayimg.com/00/s/OTAyWDEwMjQ=/z/aEcAAOSw~rhh1cEI/$_84.JPG', 'PAL');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `address`, `role`) VALUES
(2, 'test', '$2y$10$9qQ7QCYqItHGZRI2BrnZGOYfUXFVNyyJBmHfVj3Nfdm0EuOgG18yi', 'bastiaanverheul@gmail.com', 'Dijkwater, 9', 'user'),
(4, 'Mark', '$2y$10$iPtpQmghwVn5t0X3EQjeweZQQ7AHEICOnxHaogfF0KRhtYSMXEqGe', 'mark@mark.mark', 'Blijdorplaan 35', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `consoletable`
--
ALTER TABLE `consoletable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
