-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 07:01 PM
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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `break-id` int(200) NOT NULL,
  `break_name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `phone_number` int(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`break-id`, `break_name`, `location`, `price`, `phone_number`, `date`) VALUES
(1, 'Albduah', 'Albduah', 555, 32, '2021-11-14 17:09:11'),
(11, 'Albduah23', '232', 12121, 12121, '2021-11-14 17:09:11'),
(545, 'Albduah2', 'break4', 22321, 3215, '2021-11-14 17:09:11'),
(3459, '2414121', '45grdsf', 1212, 68904, '2021-11-14 17:09:11'),
(3460, '2414121', '45grdsf', 1212, 689041, '2021-11-14 17:09:11'),
(3461, 'Albduah25', 'break35', 1241, 5737, '2021-11-14 17:09:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`break-id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `break-id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3462;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
