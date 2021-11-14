-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 05:32 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

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
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id_bai` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `noidung` longtext NOT NULL,
  `tieude` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id_bai`, `id_user`, `noidung`, `tieude`, `name`) VALUES
(1, 111111111, 'hoho', 'haha', 'name quan li'),
(2, 111111111, 'mlem\r\nhaha', 'mlem', 'name quan li'),
(3, 946241392, 'cac ban', 'helo', 'Thinha'),
(4, 946241392, 'haha', 'dep vay', 'Thinha'),
(5, 946241392, 'HAHA', 'KKK', 'Thinha');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(11) NOT NULL,
  `id_bai` int(11) NOT NULL,
  `id_user_bl` int(11) NOT NULL,
  `noidung_bl` longtext NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `id_bai`, `id_user_bl`, `noidung_bl`, `name`) VALUES
(1, 2, 111111111, 'wow', 'name quan li'),
(2, 2, 946241392, 'hehe', 'Thinha'),
(3, 2, 946241392, 'ngon', 'Thinha'),
(4, 5, 946241392, 'Mlem', 'Thinha');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `ID_lop` int(5) NOT NULL,
  `Name_class` varchar(11) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `cahoc` int(1) NOT NULL DEFAULT 1,
  `lophoc` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `lichhoc` int(1) NOT NULL DEFAULT 1,
  `ngaybatdau` date NOT NULL,
  `sobuoihoc` int(2) NOT NULL DEFAULT 24,
  `SDT_gv` int(10) NOT NULL,
  `SL_hocvien` int(20) NOT NULL DEFAULT 15,
  `ID_listen` int(6) NOT NULL,
  `ID_read` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`ID_lop`, `Name_class`, `cahoc`, `lophoc`, `lichhoc`, `ngaybatdau`, `sobuoihoc`, `SDT_gv`, `SL_hocvien`, `ID_listen`, `ID_read`) VALUES
(20001, 'class 1 ', 1, 'zoom2', 1, '2021-05-22', 24, 111111111, 15, 0, 0),
(20005, 'Class 5', 2, 'zoom1', 2, '2021-05-15', 24, 111111111, 15, 200051, 200052),
(20007, 'class01', 2, 'zoom1', 1, '2021-05-28', 72, 123456589, 20, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gv`
--

CREATE TABLE `gv` (
  `Name` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SDT` int(10) NOT NULL,
  `act` int(1) NOT NULL DEFAULT 2,
  `Gender` int(1) NOT NULL DEFAULT 0,
  `password` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Dateofbirth` date NOT NULL,
  `Address` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Avata` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `gv`
--

INSERT INTO `gv` (`Name`, `SDT`, `act`, `Gender`, `password`, `Email`, `Dateofbirth`, `Address`, `Avata`) VALUES
('name giảng viên', 111111111, 2, 0, 'giangvien', 'nguyenvannghi17062000@gmail.com', '2000-06-17', 'nguyen tri phuong Q1 ', 'user.png'),
('GV1', 123456589, 2, 0, 'GV1', 'gv1@mail.com', '2021-05-12', '', ''),
('GV1', 123456781, 2, 0, '123', 'GV1@gmail.com', '2000-05-09', 'abc', '');

-- --------------------------------------------------------

--
-- Table structure for table `hv`
--

CREATE TABLE `hv` (
  `Name` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SDT` int(10) NOT NULL,
  `act` int(1) NOT NULL DEFAULT 3,
  `Gender` int(1) NOT NULL DEFAULT 0,
  `password` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ID_Lop` int(5) NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Dateofbirth` date NOT NULL,
  `Address` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Avata` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Name_parent` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `hv`
--

INSERT INTO `hv` (`Name`, `SDT`, `act`, `Gender`, `password`, `ID_Lop`, `Email`, `Dateofbirth`, `Address`, `Avata`, `Name_parent`) VALUES
('Quynhcute', 123458, 3, 1, 'Qcute1', 1001, 'Qa@mail.com', '2000-06-27', 'Where...', '', 'Q parents'),
('name hoc viên', 111111111, 3, 0, 'hocvien', 20005, 'nguyenvannghi17062000@gmail.com', '2000-06-17', 'nguyen tri phuong Q1 ', 'user.png', 'Ba Nguyễn Văn Nghị'),
('Thinhday', 123456789, 3, 0, '123', 20005, 'T@mail.com', '2021-05-06', 'abc', '', 'Tparent'),
('Thinha', 946241392, 3, 0, 'password', 0, 'T@mail.com', '2021-05-17', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ketqua_listen`
--

CREATE TABLE `ketqua_listen` (
  `sdt_hv` int(10) NOT NULL,
  `id_listen` int(6) NOT NULL,
  `ketqua` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaykiemtra` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ketqua_read`
--

CREATE TABLE `ketqua_read` (
  `sdt_hv` int(10) NOT NULL,
  `id_read` int(6) NOT NULL,
  `ketqua` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaykiemtra` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `ketqua_read`
--

INSERT INTO `ketqua_read` (`sdt_hv`, `id_read`, `ketqua`, `ngaykiemtra`) VALUES
(123456789, 200052, 'A/A/0/0/0/0/0/0/0/0', '2021-May-25');

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

-- --------------------------------------------------------

--
-- Table structure for table `nv`
--

CREATE TABLE `nv` (
  `Name` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SDT` int(10) NOT NULL,
  `act` int(1) NOT NULL DEFAULT 1,
  `Gender` int(1) NOT NULL DEFAULT 0,
  `password` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Dateofbirth` date NOT NULL,
  `Address` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Avata` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `nv`
--

INSERT INTO `nv` (`Name`, `SDT`, `act`, `Gender`, `password`, `Email`, `Dateofbirth`, `Address`, `Avata`) VALUES
('name nhan viên', 111111111, 1, 0, 'nhanvien', 'nguyenvannghi17062000@gmail.com', '2000-06-17', 'nguyen tri phuong Q1 ', 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `ql`
--

CREATE TABLE `ql` (
  `Name` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SDT` int(10) NOT NULL,
  `act` int(1) NOT NULL DEFAULT 0,
  `Gender` int(1) NOT NULL DEFAULT 0,
  `password` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Dateofbirth` date NOT NULL,
  `Address` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Avata` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `ql`
--

INSERT INTO `ql` (`Name`, `SDT`, `act`, `Gender`, `password`, `Email`, `Dateofbirth`, `Address`, `Avata`) VALUES
('name quan li', 111111111, 0, 0, 'quanli', 'nguyenvannghi17062000@gmail.com', '2000-06-17', 'nguyen tri phuong Q1 ', 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `reading`
--

CREATE TABLE `reading` (
  `ID_read` int(6) NOT NULL,
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
-- Dumping data for table `reading`
--

INSERT INTO `reading` (`ID_read`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `answer`) VALUES
(200052, 'cau1/1/2/3/4', 'cau2/1/2/3/4', 'cau3/1/2/3/4', 'cau4/1/2/3/4', 'cau5/1/2/3/4', 'cau6/1/2/3/4', 'cau7/1/2/3/4', 'cau8/1/2/3/4', 'cau9/1/2/3/4', 'cau10/1/2/3/4', 'A/C/B/A/A/D/D/D/D/D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id_bai`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`ID_lop`);

--
-- Indexes for table `gv`
--
ALTER TABLE `gv`
  ADD PRIMARY KEY (`SDT`);

--
-- Indexes for table `hv`
--
ALTER TABLE `hv`
  ADD PRIMARY KEY (`SDT`);

--
-- Indexes for table `ketqua_listen`
--
ALTER TABLE `ketqua_listen`
  ADD PRIMARY KEY (`id_listen`);

--
-- Indexes for table `ketqua_read`
--
ALTER TABLE `ketqua_read`
  ADD PRIMARY KEY (`id_read`);

--
-- Indexes for table `listening`
--
ALTER TABLE `listening`
  ADD PRIMARY KEY (`ID_listen`);

--
-- Indexes for table `nv`
--
ALTER TABLE `nv`
  ADD PRIMARY KEY (`SDT`);

--
-- Indexes for table `ql`
--
ALTER TABLE `ql`
  ADD PRIMARY KEY (`SDT`);

--
-- Indexes for table `reading`
--
ALTER TABLE `reading`
  ADD PRIMARY KEY (`ID_read`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id_bai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `ID_lop` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20011;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
