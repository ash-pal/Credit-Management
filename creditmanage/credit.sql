-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2020 at 08:57 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `credit`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `donor` varchar(50) NOT NULL,
  `recepient` varchar(50) NOT NULL,
  `creditamt` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `amt` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` int(10) NOT NULL,
  `adhaar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`uid`, `name`, `amt`, `email`, `mob`, `adhaar`) VALUES
(1, 'Joey Tribbiani', 100, 'joeyt@gmail.com', 1234567890, '2147 4836 4701'),
(2, 'Phoebe Buffay', 100, 'phoebeb@gmail.com', 2111222227, '2147 4836 4702'),
(3, 'Rachel Green', 100, 'rachelg@gmail.com', 1942365875, '2147 4836 4703'),
(4, 'Ross Geller', 100, 'rossg@gmail.com', 1645312336, '2147 4836 4704'),
(5, 'Chandler Bing', 100, 'chandlerhaha@gmail.com', 1641111336, '2147 4836 4705'),
(6, 'Monica Geller', 100, 'monicag@gmail.com', 1336441886, '2147 4836 4706'),
(7, 'Harvey Specter', 100, 'harveys@gmail.com', 1632632336, '2147 4836 4707'),
(8, 'Rachel Zane', 100, 'rachz@gmail.com', 1643626326, '2147 4836 4708'),
(9, 'Michael Ross', 100, 'michael@gmail.com', 1645312336, '2147 4836 4709'),
(10, 'Donna Paulsen', 100, 'donnap@gmail.com', 1145396256, '2147 4836 4710'),
(11, 'Louis Litt', 100, 'louisl@gmail.com', 1324697565, '2147 4836 4711');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
