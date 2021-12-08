-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 06:37 PM
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
  `owner_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `break`
--

INSERT INTO `break` (`break-id`, `break_name`, `location`, `price`, `phone_number`, `image`, `image2`, `image3`, `image4`, `date`, `owner_id`) VALUES
(1, 'Albduah', 'alriath', 555, 32, 'break1.png', '', '', '', '2021-12-01 17:35:45', 1),
(3, '2414121', 'jazan', 1212, 68904, 'break3.jpg', '', '', '', '2021-12-01 17:36:05', 4),
(4, '2414121', '45grdsf', 1212, 689041, 'b2.jpg', '', '', '', '2021-11-26 17:24:26', 5),
(3479, '148', 'aldmam', 0, 22141, 'b2.jpg', 'b2.jpg', 'b2.jpg', 'b2.jpg', '2021-12-05 18:50:16', 5),
(3482, 'tariq__break', 'alriath', 400, 87979, '497505_quran-wallpapers-hd-in-urdu-gallery-iphhone-download-tumblr-desktop_2510x3000_h.jpg', 'add1.png', 'add2.png', 'add-but.png', '2021-12-08 17:33:54', 12);

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
  `owner_id` int(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `phone_number_user` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`break_id`, `break_name`, `price`, `location`, `start_date`, `end_date`, `timestamp`, `owner_id`, `first_name`, `last_name`, `phone_number_user`) VALUES
(3482, 'tariq__break', 400, 'alriath', '2017-04-03', '2017-04-01', '2021-12-06 18:51:28', 12, 'Tariq', 'Tariq', 151515);

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
(1, 'Tariq', 'Aldailage ', 'Client', 'my email lol', '202cb962ac59075b964b07152d234b70', 5000000, '2021-12-06 18:26:45'),
(4, 'cj', 'Tariq', 'Client', 'c', '4a8a08f09d37b73795649038408b5f33', 531421052, '2021-12-06 18:26:45'),
(5, 'Tariq2', 'Tariq2', 'Client', '6', '1679091c5a880faf6fb5e6087eb1b2dc', 5314332105261, '2021-12-06 18:26:45'),
(12, 'Tariq', 'Tariq', 'Client', '2', 'c81e728d9d4c2f636f067f89cc14862c', 151515, '2021-12-06 18:26:45'),
(15, 'cj', 'cj', 'lessor', '4', '011ecee7d295c066ae68d4396215c3d0', 4679, '2021-12-06 18:26:45'),
(16, 'zz', 'zz', 'lessor', 'yy', '28dd2c7955ce926456240b2ff0100bde', 989997, '2021-12-06 19:34:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `break`
--
ALTER TABLE `break`
  ADD PRIMARY KEY (`break-id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD KEY `users_id` (`owner_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`start_date`),
  ADD KEY `v` (`owner_id`),
  ADD KEY `v2` (`break_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `break`
--
ALTER TABLE `break`
  MODIFY `break-id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3488;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `break`
--
ALTER TABLE `break`
  ADD CONSTRAINT `users-id` FOREIGN KEY (`owner_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `v` FOREIGN KEY (`owner_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `v2` FOREIGN KEY (`break_id`) REFERENCES `break` (`break-id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
