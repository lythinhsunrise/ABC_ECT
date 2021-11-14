-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 09:14 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc_en`
--

-- --------------------------------------------------------

--
-- Table structure for table `listening`
--

CREATE TABLE `listening` (
  `ID_listen` int(6) NOT NULL,
  `1` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `2` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `3` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `4` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `5` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `6` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `7` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `8` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `9` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `10` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `answer` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listening`
--
ALTER TABLE `listening`
  ADD PRIMARY KEY (`ID_listen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
