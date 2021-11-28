-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 06:45 PM
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
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `users_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `break`
--

INSERT INTO `break` (`break-id`, `break_name`, `location`, `price`, `phone_number`, `image`, `date`, `users_id`) VALUES
(1, 'Albduah', 'Albduah', 555, 32, 'break1.png', '2021-11-26 17:22:34', 1),
(2, 'Albduah2', 'break4', 22321, 3215, 'break2.jpg', '2021-11-26 17:23:18', 3),
(3, '2414121', '45grdsf', 1212, 68904, 'break3.jpg', '2021-11-26 17:23:46', 4),
(4, '2414121', '45grdsf', 1212, 689041, 'b2.jpg', '2021-11-26 17:24:26', 5),
(5, 'tariq_break2', 'aldmam', 111, 4500, 'b5.jpg', '2021-11-26 17:44:55', 2);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `break`
--
ALTER TABLE `break`
  MODIFY `break-id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3476;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `break`
--
ALTER TABLE `break`
  ADD CONSTRAINT `users` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
