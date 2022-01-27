-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 07:41 PM
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
(3482, 'tariq__break', 'alriath', 400, 87979, '497505_quran-wallpapers-hd-in-urdu-gallery-iphhone-download-tumblr-desktop_2510x3000_h.jpg', 'add1.png', 'add2.png', 'add-but.png', '2021-12-08 17:33:54', 12),
(3488, 'tariq_break214', 'jazan', 131, 16283, 'b3.jpg', '', '', '', '2021-12-10 18:27:29', 12);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `break`
--
ALTER TABLE `break`
  MODIFY `break-id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3489;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `break`
--
ALTER TABLE `break`
  ADD CONSTRAINT `users-id` FOREIGN KEY (`owner_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
