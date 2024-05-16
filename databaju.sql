-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 12:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baju_seragam`
--

-- --------------------------------------------------------

--
-- Table structure for table `databaju`
--

CREATE TABLE `databaju` (
  `NIS` int(25) NOT NULL,
  `Nama` varchar(225) NOT NULL,
  `Ukuran` varchar(26) NOT NULL,
  `Seragam` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `databaju`
--

INSERT INTO `databaju` (`NIS`, `Nama`, `Ukuran`, `Seragam`) VALUES
(0, 'ww', '', ''),
(88888, 'ww', 'l', 'batik'),
(424454, 'ww', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databaju`
--
ALTER TABLE `databaju`
  ADD PRIMARY KEY (`NIS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
