-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 05:26 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basakhuji`
--

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `id` int(11) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `area` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `bedroom` int(11) DEFAULT NULL,
  `bathroom` int(11) DEFAULT NULL,
  `userId` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`id`, `address`, `area`, `status`, `type`, `amount`, `description`, `bedroom`, `bathroom`, `userId`) VALUES
(3, 'ka-22/2/A', 'Gulshan-2', 'Available', 'Rent', 60000, 'A Perfect house for family! Great space, great balcony view.', 4, 4, NULL),
(6, '5/5/2', 'Gulshan-1', 'Available', 'Rent', 18000, 'perfect', 4, 3, NULL),
(8, '40/5', 'Nikunjo', 'Available', 'Rent', 15000, 'Good one', 4, 3, NULL),
(9, '55/5/2', 'Banani', 'Available', 'Rent', 125000, 'Luxury home', 5, 5, NULL),
(10, 'ka-22/2/A', 'Kalachandpur', 'Available', 'Rent', 18000, 'A perfect rental home for small or medium family.', 4, 3, NULL),
(11, 'ka-22/2/A', 'Kalachandpur', 'Available', 'Rent', 25000, 'Perfect house for small family', 4, 4, ''),
(12, 'ka-22/2/A', 'Kalachandpur', 'Available', 'Rent', 26000, 'Perfect', 4, 3, ''),
(13, 'ka-22/2/A', 'Kalachandpur', 'Available', 'Sell', 25000, 'Perfect House For Small Family', 4, 3, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
