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
(20, '5f393a9a1f3ea-1597586074.jpg', '13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `houseimage`
--
ALTER TABLE `houseimage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `houseimage`
--
ALTER TABLE `houseimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
