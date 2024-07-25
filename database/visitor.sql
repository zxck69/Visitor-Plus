-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 04:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin', '1234', 'admin'),
(2, 'user', '1234', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `sno` int(3) NOT NULL,
  `VisitorName` text NOT NULL,
  `PhoneNumber` varchar(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `FlatNo` int(4) NOT NULL,
  `Wing` varchar(10) NOT NULL,
  `Whomtomeet` varchar(60) NOT NULL,
  `ReasonToMeet` varchar(60) NOT NULL,
  `CheckIn` datetime NOT NULL DEFAULT current_timestamp(),
  `Remark` varchar(255) DEFAULT NULL,
  `CheckOut` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`sno`, `VisitorName`, `PhoneNumber`, `Address`, `FlatNo`, `Wing`, `Whomtomeet`, `ReasonToMeet`, `CheckIn`, `Remark`, `CheckOut`) VALUES
(30, 'Jay', '123456', 'Khed', 301, 'B', 'Sam', 'Personal', '2022-04-18 14:20:54', 'out', '2023-08-10 15:14:50'),
(34, 'lal', '123', 'Dehu', 401, 'B', 'Jay', 'Personal', '2022-04-22 12:44:42', 'out', '2022-04-22 09:00:32'),
(36, 'John', ' 123', 'Alandi', 101, 'A ', 'xyz', 'meeting', '2022-04-22 17:24:25', 'out', '2022-05-14 11:25:06'),
(45, 'Jay', '123456789', 'Chikhali', 101, 'A', 'Nitin', 'Personal', '2022-05-13 14:34:19', 'out', '2022-05-13 09:06:34'),
(46, 'Ali', '123', 'Chikhali', 102, 'A', 'Nitin', 'Personal', '2022-05-14 16:56:31', 'out', '2022-05-15 05:40:47'),
(47, 'abe', '123', 'Chikhali', 101, 'A', 'Nitin', 'Personal', '2022-05-14 20:49:56', 'out', '2023-08-10 14:52:08'),
(60, 'Ankush', ' 878746546', 'Kalewadi', 101, 'A ', 'Jaysantosh Yadav', 'Personal', '2023-08-10 20:22:42', NULL, NULL),
(61, 'Ashish', ' 879789464', 'Kudalwadi', 306, 'C ', 'Arjun Nair', 'Personal', '2023-08-10 20:35:57', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
