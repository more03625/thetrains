-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2019 at 12:43 PM
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
  `rank` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `station_name`, `h`, `c`, `w`, `th`, `rank`) VALUES
(1, '(CSMT) Chhatrapati Shivaji Maharaj Terminus', 1, 0, 0, 0, '1'),
(2, 'Masjid Bandar', 1, 0, 0, 0, '2'),
(3, 'Sandhurst Road', 1, 0, 0, 0, '3'),
(4, 'Dockyard Road', 1, 0, 0, 0, '4'),
(5, 'Reay Road', 1, 0, 0, 0, '5'),
(6, 'Cotteon Green', 1, 0, 0, 0, '6'),
(7, 'Sewri', 1, 0, 0, 0, '7'),
(8, 'Wadala Road', 1, 0, 0, 0, '8'),
(9, '(GTB) Guru Tegh Bahadur Nagar', 1, 0, 0, 0, '9'),
(10, 'Chunabhatti', 1, 0, 0, 0, '10'),
(11, 'Kurla', 1, 0, 0, 0, '11'),
(12, 'Tilak Nagar', 1, 0, 0, 0, '12'),
(13, 'Chembur', 1, 0, 0, 0, '13'),
(14, 'Govandi', 1, 0, 0, 0, '14'),
(15, 'Mankhurd', 1, 0, 0, 0, '15'),
(16, 'Vashi', 1, 0, 0, 0, '16'),
(17, 'Sanpada', 1, 0, 0, 0, '17'),
(18, 'Juinagar', 1, 0, 0, 0, '18'),
(19, 'Nerul', 1, 0, 0, 0, '19'),
(20, 'Seawoods Darave', 1, 0, 0, 0, '20'),
(21, 'CBD Belapur', 1, 0, 0, 0, '21'),
(22, 'Kharghar', 1, 0, 0, 0, '22'),
(23, 'Mansarovar', 1, 0, 0, 0, '23'),
(24, 'Khandeshwar', 1, 0, 0, 0, '24'),
(25, 'Panvel', 1, 0, 0, 0, '25');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
