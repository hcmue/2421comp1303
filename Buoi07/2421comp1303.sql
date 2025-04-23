-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2025 at 08:11 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2421comp1303`
--

-- --------------------------------------------------------

--
-- Table structure for table `lophocphan`
--

CREATE TABLE `lophocphan` (
  `MaLopHP` int(11) NOT NULL,
  `MaMon` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `NamHoc` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `HocKy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMon` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `TenMon` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SoTinChi` int(11) NOT NULL,
  `CTDT` int(11) DEFAULT NULL,
  `MonDieuKien` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lophocphan`
--
ALTER TABLE `lophocphan`
  ADD PRIMARY KEY (`MaLopHP`),
  ADD KEY `FK_LopHP_MonHoc` (`MaMon`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lophocphan`
--
ALTER TABLE `lophocphan`
  MODIFY `MaLopHP` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lophocphan`
--
ALTER TABLE `lophocphan`
  ADD CONSTRAINT `FK_LopHP_MonHoc` FOREIGN KEY (`MaMon`) REFERENCES `monhoc` (`MaMon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
