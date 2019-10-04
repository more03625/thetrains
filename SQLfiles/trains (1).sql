-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 04, 2019 at 12:41 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thetrainsrakesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `id` int(11) NOT NULL,
  `start` text NOT NULL,
  `destination` text NOT NULL,
  `start_time` time NOT NULL,
  `destination_time` time NOT NULL,
  `h` tinyint(1) NOT NULL DEFAULT '0',
  `c` tinyint(1) NOT NULL DEFAULT '0',
  `w` tinyint(1) NOT NULL DEFAULT '0',
  `th` tinyint(1) NOT NULL DEFAULT '0',
  `on_sunday` tinyint(1) NOT NULL DEFAULT '1',
  `source_rank` int(11) NOT NULL,
  `destination_rank` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`id`, `start`, `destination`, `start_time`, `destination_time`, `h`, `c`, `w`, `th`, `on_sunday`, `source_rank`, `destination_rank`) VALUES
(14, 'panvel', 'csmt', '04:29:00', '05:49:00', 1, 0, 0, 0, 1, 25, 1),
(13, 'panvel', 'csmt', '04:03:00', '05:22:00', 1, 0, 0, 0, 1, 25, 1),
(12, 'csmt', 'panvel', '04:32:00', '05:52:00', 1, 0, 0, 0, 1, 1, 25),
(15, 'csmt', 'panvel', '12:00:00', '14:00:00', 1, 0, 0, 0, 1, 1, 25),
(16, 'PANVEL', 'CSMT', '11:00:00', '00:00:00', 1, 0, 0, 0, 1, 25, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trains`
--
ALTER TABLE `trains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
