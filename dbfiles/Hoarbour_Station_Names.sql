-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2019 at 08:30 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thetrains`
--

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `id` int(11) NOT NULL,
  `station_name` text NOT NULL,
  `h` tinyint(1) NOT NULL DEFAULT '0',
  `c` tinyint(1) NOT NULL DEFAULT '0',
  `w` tinyint(1) NOT NULL DEFAULT '0',
  `th` tinyint(1) NOT NULL DEFAULT '0',
  `rank` text NOT NULL,
  `intervaltime` time(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `station_name`, `h`, `c`, `w`, `th`, `rank`, `intervaltime`) VALUES
(1, 'CSMT', 1, 0, 0, 0, '1', '00:00:00.000000'),
(2, 'Masjid Bandar', 1, 0, 0, 0, '2', '00:03:00.000000'),
(3, 'Sandhurst Road', 1, 0, 0, 0, '3', '00:06:00.000000'),
(4, 'Dockyard Road', 1, 0, 0, 0, '4', '00:08:00.000000'),
(5, 'Reay Road', 1, 0, 0, 0, '5', '00:10:00.000000'),
(6, 'Cotteon Green', 1, 0, 0, 0, '6', '00:12:00.000000'),
(7, 'Sewri', 1, 0, 0, 0, '7', '00:15:00.000000'),
(8, 'Wadala Road', 1, 0, 0, 0, '8', '00:18:00.000000'),
(9, '(GTB) Guru Tegh Bahadur Nagar', 1, 0, 0, 0, '9', '00:23:00.000000'),
(10, 'Chunabhatti', 1, 0, 0, 0, '10', '00:26:00.000000'),
(11, 'Kurla', 1, 0, 0, 0, '11', '00:29:00.000000'),
(12, 'Tilak Nagar', 1, 0, 0, 0, '12', '00:32:00.000000'),
(13, 'Chembur', 1, 0, 0, 0, '13', '00:34:00.000000'),
(14, 'Govandi', 1, 0, 0, 0, '14', '00:37:00.000000'),
(15, 'Mankhurd', 1, 0, 0, 0, '15', '00:40:00.000000'),
(16, 'Vashi', 1, 0, 0, 0, '16', '00:49:00.000000'),
(17, 'Sanpada', 1, 0, 0, 0, '17', '00:51:00.000000'),
(18, 'Juinagar', 1, 0, 0, 0, '18', '00:54:00.000000'),
(19, 'Nerul', 1, 0, 0, 0, '19', '00:58:00.000000'),
(20, 'Seawoods Darave', 1, 0, 0, 0, '20', '01:01:00.000000'),
(21, 'CBD Belapur', 1, 0, 0, 0, '21', '01:05:00.000000'),
(22, 'Kharghar', 1, 0, 0, 0, '22', '01:09:00.000000'),
(23, 'Mansarovar', 1, 0, 0, 0, '23', '01:12:00.000000'),
(24, 'Khandeshwar', 1, 0, 0, 0, '24', '01:15:00.000000'),
(25, 'Panvel', 1, 0, 0, 0, '25', '01:20:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
