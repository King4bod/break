-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 06:29 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(111) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `type` enum('Client','Owner') NOT NULL,
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
(12, 'Tariq', 'Tariq', 'Owner', '2', 'c81e728d9d4c2f636f067f89cc14862c', 151515, '2021-12-11 18:28:47'),
(19, 'Tariq', 'Tariq', 'Client', '3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 5000000, '2021-12-11 18:30:34'),
(41, 'Tariq', 'Tariq2', 'Owner', 'my email lol242', 'b81280cd90bc1a6cfbb1183a61abc1d8', 242424, '2021-12-12 16:57:18');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
