-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 10:44 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `break`
--

CREATE TABLE `break` (
  `break-id` int(200) NOT NULL,
  `break_name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `phone_number` int(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(200) NOT NULL,
  `image4` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `users_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `break`
--

INSERT INTO `break` (`break-id`, `break_name`, `location`, `price`, `phone_number`, `image`, `image2`, `image3`, `image4`, `date`, `users_id`) VALUES
(1, 'Albduah', 'alriath', 555, 32, 'break1.png', '', '', '', '2021-12-01 17:35:45', 1),
(2, 'Albduah2', 'jaddh', 22321, 3215, 'break2.jpg', '', '', '', '2021-12-01 17:35:56', 3),
(3, '2414121', 'jazan', 1212, 68904, 'break3.jpg', '', '', '', '2021-12-01 17:36:05', 4),
(4, '2414121', '45grdsf', 1212, 689041, 'b2.jpg', '', '', '', '2021-11-26 17:24:26', 5),
(5, 'tariq_break2', 'aldmam', 111, 4500, 'b4.jpg', 'b1.jpg', 'b2.jpg', 'استراحة5.jpg', '2021-12-01 18:18:53', 2);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `break-id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `break-id`) VALUES
(1, 'استراحة5.jpg', 1),
(2, '460468.jpg', 2),
(3, '../php/sql/497505_quran-wallpapers-hd-in-urdu-gallery-iphhone-download-tumblr-desktop_2510x3000_h.jpg', 3),
(4, '../php/sql/استراحة5.jpg', 4),
(5, 'استراحة5.jpg', 5),
(6, 'استراحة5.jpg', 3476);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `break_id` int(200) NOT NULL,
  `break_name` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `start_date` varchar(200) NOT NULL,
  `end_date` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `users_id` int(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `phone_number_user` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`break_id`, `break_name`, `price`, `location`, `start_date`, `end_date`, `timestamp`, `users_id`, `first_name`, `last_name`, `phone_number_user`) VALUES
(1, 'Albduah', 555, 'alriath', '2017-04-02', '2017-04-12', '2021-12-03 21:43:40', 1, 'Tariq', 'Tariq', 2),
(1, 'Albduah', 555, 'alriath', '2017-04-11', '2017-04-12', '2021-12-03 21:42:39', 1, 'Tariq', 'Tariq', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(111) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `type` enum('Client','lessor') NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `number` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `first_name`, `last_name`, `type`, `email`, `password`, `number`, `date`) VALUES
(1, 'Tariq', 'Aldailage ', 'Client', 'my email lol', '123', 5000000, '2021-11-07 19:57:05'),
(2, 'Tariq', 'Tariq', 'Client', '2', '2', 2, '2021-11-07 19:57:05'),
(3, 'Tariq', 'Tariq', 'Client', '4', '4', 531421052, '2021-11-07 19:57:05'),
(4, 'cj', 'Tariq', 'Client', 'c', 'c', 531421052, '2021-11-07 19:57:05'),
(5, 'Tariq2', 'Tariq2', 'Client', '6', '6', 5314332105261, '2021-11-14 16:47:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `break`
--
ALTER TABLE `break`
  ADD PRIMARY KEY (`break-id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `break` (`break-id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`start_date`),
  ADD KEY `v` (`users_id`),
  ADD KEY `v2` (`break_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `break`
--
ALTER TABLE `break`
  MODIFY `break-id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3477;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `break`
--
ALTER TABLE `break`
  ADD CONSTRAINT `users` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `v` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `v2` FOREIGN KEY (`break_id`) REFERENCES `break` (`break-id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
