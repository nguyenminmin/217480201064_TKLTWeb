-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 03:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlybanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MaHang` varchar(4) NOT NULL COMMENT 'Mã hàng',
  `TenHang` varchar(40) NOT NULL COMMENT 'Tên hàng',
  `MaNSX` varchar(2) NOT NULL COMMENT 'Mã nhà SX',
  `NamSX` int(11) NOT NULL COMMENT 'Năm SX',
  `Gia` int(11) NOT NULL COMMENT 'Giá bán'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`MaHang`, `TenHang`, `MaNSX`, `NamSX`, `Gia`) VALUES
('AS01', 'ASUS V', 'AS', 2017, 750000),
('AS02', 'ASUS D', 'AS', 2012, 200000),
('D05', 'Dell 05', 'DE', 2020, 5000),
('DE01', 'DEV V', 'DE', 2015, 650000),
('DE02', 'DEV I', 'DE', 2015, 550000),
('LE01', 'Lenovo', 'LE', 2019, 500000),
('LE02', 'LENOVO 2D', 'LE', 2012, 300000),
('LE03', 'Lenovo Thinkpad', 'LE', 2020, 5000),
('LE04', 'Lenovo Thinkbook', 'LE', 2020, 5000),
('TO01', 'Toshiba', 'TO', 2015, 650000),
('TO02', 'TOSHIBA HAHA', 'TO', 2012, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` varchar(3) NOT NULL,
  `MaKH` varchar(4) NOT NULL,
  `MaHang` varchar(4) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ThanhTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaKH`, `MaHang`, `SoLuong`, `ThanhTien`) VALUES
('001', 'K001', 'DE01', 3, 0),
('001', 'K001', 'DE02', 1, 0),
('001', 'K001', 'DE02', 1, 0),
('002', 'K002', 'TO01', 5, 0),
('003', 'K003', 'LE01', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(4) NOT NULL,
  `TenKH` varchar(40) NOT NULL,
  `NamSinh` int(11) NOT NULL,
  `DienThoai` varchar(10) NOT NULL,
  `DiaChi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `NamSinh`, `DienThoai`, `DiaChi`) VALUES
('K001', 'Nguyễn Lan', 1990, '0352267771', 'Bạc liêu'),
('K002', 'Nguyễn Lâm', 1960, '0352267771', 'Cần Thơ'),
('K003', 'Ngô Minh Lan', 1995, '0352267771', 'Bạc liêu'),
('K005', 'Nguyễn Lan', 2003, '0352267771', 'Bạc liêu'),
('K006', 'Nguyễn Lan', 1985, '0352267771', 'Bạc liêu');

-- --------------------------------------------------------

--
-- Table structure for table `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `MaNSX` varchar(2) NOT NULL,
  `TenNSX` varchar(40) NOT NULL,
  `QuocGia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`MaNSX`, `TenNSX`, `QuocGia`) VALUES
('AS', 'ASUS', 'Hàn quốc'),
('DE', 'DELL', 'Mỹ'),
('LE', 'LENOVO', 'Trung quốc'),
('TO', 'TOSHIBA', 'Nhật bản');

-- --------------------------------------------------------

--
-- Table structure for table `tonkho`
--

CREATE TABLE `tonkho` (
  `mahang` varchar(4) NOT NULL,
  `tenhang` varchar(40) NOT NULL,
  `mansx` varchar(2) NOT NULL,
  `namsx` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tonkho`
--

INSERT INTO `tonkho` (`mahang`, `tenhang`, `mansx`, `namsx`, `gia`, `soluong`) VALUES
('DE01', 'Dell Vostro', 'DE', 2015, 650, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MaHang`),
  ADD KEY `MaNSX` (`MaNSX`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD KEY `MaHang` (`MaHang`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`MaNSX`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`MaNSX`) REFERENCES `nhasanxuat` (`MaNSX`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaHang`) REFERENCES `hanghoa` (`MaHang`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
