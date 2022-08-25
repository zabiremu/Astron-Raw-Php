-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 03:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moderna_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_details`
--

CREATE TABLE `banner_details` (
  `id` int(11) NOT NULL,
  `BannerTitle` varchar(256) NOT NULL,
  `Bannerdesc` varchar(10000) NOT NULL,
  `BannerButtonName` varchar(100) NOT NULL,
  `BannerButtonLink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_details`
--

INSERT INTO `banner_details` (`id`, `BannerTitle`, `Bannerdesc`, `BannerButtonName`, `BannerButtonLink`) VALUES
(9, 'Are cats evil?', 'If you read this column regularly, you probably already know the answer to that question is no. Cats are definitely not evil, mean, or vindictive by nature. And yet this seems to be a recurring theme.Mar 18, 2013\r\n', 'Read More', 'https://www.facebook.com/'),
(10, 'Is cat as a pet good?', 'Some people think cats are snobby or unfriendly. While cats are extremely hard to study, researchers are making progress. Recent studies suggest that cats make great companions and pets. Cats purr at a frequency that could benefit your health and love their owners just as much as dogs do.', 'Read More', 'https://www.facebook.com/'),
(11, 'Numquam ullam sed co', 'Beatae et illum con', 'Oliver Peterson', 'https://www.facebook.com/');

-- --------------------------------------------------------

--
-- Table structure for table `registrar`
--

CREATE TABLE `registrar` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `number` varchar(40) NOT NULL,
  `time` date NOT NULL,
  `files` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrar`
--

INSERT INTO `registrar` (`id`, `name`, `email`, `password`, `number`, `time`, `files`) VALUES
(2, 'Zabir Raihan ', 'zabirraihan570@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '01833086035', '2022-08-03', 'user62f895e08f4d9.JPG'),
(3, 'zabir Raihan', 'zabirraihan@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '01833086035', '2022-08-03', 'user_62e9f449ac40f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `tittle` varchar(256) NOT NULL,
  `desc` varchar(256) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_details`
--
ALTER TABLE `banner_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrar`
--
ALTER TABLE `registrar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_details`
--
ALTER TABLE `banner_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `registrar`
--
ALTER TABLE `registrar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
