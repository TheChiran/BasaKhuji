-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2020 at 02:58 PM
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
(13, 'ka-22/2/A', 'Kalachandpur', 'Available', 'Sell', 25000, 'Perfect House For Small Family', 4, 3, '1'),
(14, 'alu/kumra-22', 'Dhanmondi', 'Available', 'Rent', 32000, 'Perfect', 4, 5, '1');

-- --------------------------------------------------------

--
-- Table structure for table `houseimage`
--

CREATE TABLE `houseimage` (
  `id` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `houseId` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houseimage`
--

INSERT INTO `houseimage` (`id`, `image`, `houseId`) VALUES
(13, '5f35627a8e94d-1597334138.jpg', '3'),
(14, '5f3562805d52b-1597334144.jpg', '3'),
(15, '5f35628632ea9-1597334150.jpg', '3'),
(16, '5f3576cd82f82-1597339341.jpg', '3'),
(17, '5f36089d751c9-1597376669.jpg', '6'),
(18, '5f364cc79b058-1597394119.jpg', '8'),
(19, '5f364d2ca213c-1597394220.jpg', '9'),
(20, '5f393a9a1f3ea-1597586074.jpg', '13'),
(21, '5f400130c5c08-1598030128.jpg', '14');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `content` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'chiran97', 'tonmoychiran449@gmail.com', '78423b1d23a8ffc489d7c8ba809bbcfdde3e508321046ba698f48f60c99a0c56', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houseimage`
--
ALTER TABLE `houseimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `houseimage`
--
ALTER TABLE `houseimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
