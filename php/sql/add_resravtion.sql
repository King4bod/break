-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 08:41 PM
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
-- Table structure for table `add_resravtion`
--

CREATE TABLE `add_resravtion` (
  `id` int(200) NOT NULL,
  `break_name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `phone_number` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_resravtion`
--

INSERT INTO `add_resravtion` (`id`, `break_name`, `location`, `price`, `phone_number`) VALUES
(0, 'Albduah', 'Albduah', 555, 32),
(11, 'Albduah23', '232', 12121, 12121),
(545, 'Albduah2', 'break4', 22321, 3215);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_resravtion`
--
ALTER TABLE `add_resravtion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
