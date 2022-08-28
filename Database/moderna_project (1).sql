-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 09:47 AM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `img` varchar(256) NOT NULL,
  `title` longtext NOT NULL,
  `title1` longtext NOT NULL,
  `details` longtext NOT NULL,
  `details1` longtext NOT NULL,
  `icon` varchar(256) NOT NULL,
  `icon2` varchar(256) NOT NULL,
  `anchor` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `img`, `title`, `title1`, `details`, `details1`, `icon`, `icon2`, `anchor`) VALUES
(19, 'about_Update63075c93e9e45.webp', ' Consectetur adipiscing', 'Sed ut perspiciatis', 'consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo', 'bi bi-globe', 'bi bi-file-earmark-person-fill', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `addfeatures`
--

CREATE TABLE `addfeatures` (
  `id` int(11) NOT NULL,
  `img` varchar(256) NOT NULL,
  `subHeading` longtext NOT NULL,
  `subHeading1` longtext NOT NULL,
  `list` longtext NOT NULL,
  `icon` varchar(256) NOT NULL,
  `active` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addfeatures`
--

INSERT INTO `addfeatures` (`id`, `img`, `subHeading`, `subHeading1`, `list`, `icon`, `active`) VALUES
(1, 'features_edit_63076a591c7a9.webp', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis', 'On the other hand, we denounce with righteous indignation and dislike men', '<ul><li>Eos er accuamus et</li><li>we denounce</li></ul>', 'bi bi-check', 1),
(12, 'features_edit_63076e5a5f069.jpeg', 'Lpsa aut necessitat', 'Rerum omnis sunt vo', '<div>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through&nbsp;<br></div>', '', 1),
(13, 'features_edit_63076a669530f.webp', 'On the other hand, we denounce with righteous indignation ', 'Perferendis tempor q', '<div>officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat<br></div>', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `tittle` varchar(256) NOT NULL,
  `details` longtext NOT NULL,
  `ButtonName` varchar(256) NOT NULL,
  `ButtonLink` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `tittle`, `details`, `ButtonName`, `ButtonLink`) VALUES
(5, 'Lorem Ipsum', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores', 'Read More', 'https://www.lipsum.com/'),
(6, 'Lorem ipsum dolor', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa', 'Read More', 'https://www.lipsum.com/'),
(7, 'H. Rackham', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete', 'Read More', 'https://www.lipsum.com/');

-- --------------------------------------------------------

--
-- Table structure for table `featuresheader`
--

CREATE TABLE `featuresheader` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featuresheader`
--

INSERT INTO `featuresheader` (`id`, `heading`, `details`) VALUES
(3, 'Nostrud exercitation ale', 'Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur');

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
(2, 'zabir raihan ', 'zabirraihan570@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '01833086035', '2022-08-03', 'user630860963eafc.JPG'),
(3, 'zabir Raihan', 'zabirraihan@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '01833086035', '2022-08-03', 'user_62e9f449ac40f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `details` longtext NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `details`, `time`) VALUES
(16, 'bi bi-facebook', 'Sed ut perspiciatis', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque', '2025-08-22'),
(17, 'bi bi-instagram', 'vero eos et accusamus', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium', '2025-08-22'),
(18, 'bi bi-twitter', 'righteous indignation', 'Sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserun', '2025-08-22'),
(19, 'bi bi-linkedin', 'de Finibus Bonorum', 'Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias', '2025-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(6, 'zabirraihan570@gmail.com'),
(7, 'zabirraihan@gmail.com'),
(8, 'rakib@gmail.com'),
(9, 'nexiw52308@hbehs.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addfeatures`
--
ALTER TABLE `addfeatures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featuresheader`
--
ALTER TABLE `featuresheader`
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
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `addfeatures`
--
ALTER TABLE `addfeatures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `featuresheader`
--
ALTER TABLE `featuresheader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registrar`
--
ALTER TABLE `registrar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
