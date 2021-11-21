-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 07:28 PM
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
  `name` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `rental` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `users-id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `break`
--

INSERT INTO `break` (`break-id`, `name`, `price`, `location`, `rental`, `users-id`) VALUES
(1, 'Albduah', 200, 'go', '2021-11-14 17:49:36', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `break`
--
ALTER TABLE `break`
  ADD PRIMARY KEY (`break-id`),
  ADD KEY `v` (`users-id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `break`
--
ALTER TABLE `break`
  ADD CONSTRAINT `a` FOREIGN KEY (`break-id`) REFERENCES `reservations` (`break-id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `v` FOREIGN KEY (`users-id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
