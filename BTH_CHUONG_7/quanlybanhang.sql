-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 03, 2024 lúc 05:15 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlybanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MaHang` varchar(4) NOT NULL COMMENT 'Mã hàng',
  `TenHang` varchar(40) NOT NULL COMMENT 'Tên hàng',
  `MaNSX` varchar(2) NOT NULL COMMENT 'Mã nhà SX',
  `NamSX` int(11) NOT NULL COMMENT 'Năm SX',
  `Gia` int(11) NOT NULL COMMENT 'Giá bán'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`MaHang`, `TenHang`, `MaNSX`, `NamSX`, `Gia`) VALUES
('AS02', 'ASUS D', 'AS', 2006, 10000000),
('DE01', 'DEV V', 'DE', 2015, 650000),
('DE02', 'DEV 0000', 'DE', 2015, 550000),
('LE01', 'Lenovo', 'LE', 2019, 500000),
('LE02', 'TOSHIBA HAHAkfjty', 'AS', 2012, 300000),
('TO01', 'Toshiba', 'AS', 2015, 650000),
('TO02', 'TOSHIBA HAHA', 'TO', 2012, 100),
('TO07', 'TOSHIBA HAHAkfjty', 'AS', 2000, 200000),
('HH09', 'hihi', 'HH', 2020, 780);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` varchar(3) NOT NULL,
  `MaKH` varchar(4) NOT NULL,
  `MaHang` varchar(4) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ThanhTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaKH`, `MaHang`, `SoLuong`, `ThanhTien`) VALUES
('001', 'K001', 'DE01', 3, 0),
('001', 'K001', 'DE02', 1, 0),
('001', 'K001', 'DE02', 1, 0),
('002', 'K002', 'TO01', 5, 0),
('003', 'K003', 'LE01', 3, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(4) NOT NULL,
  `TenKH` varchar(40) NOT NULL,
  `NamSinh` int(11) NOT NULL,
  `DienThoai` varchar(10) NOT NULL,
  `DiaChi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `NamSinh`, `DienThoai`, `DiaChi`) VALUES
('K00', 'Nguyễn Lan', 1985, '0352267771', 'Bạc liêu'),
('K001', 'Nguyễn Lan', 1985, '0352267771', 'Bạc liêu'),
('K002', 'Nguyễn Lâm', 1965, '0352267771', 'Cần Thơ'),
('K004', 'Dương Thu Thủy', 2000, '0352267771', 'Bạc liêu'),
('K005', 'Nguyễn Lan', 2003, '0352267771', 'Bạc liêu'),
('K006', 'Nguyễn Lan', 1985, '0352267771', 'Bạc liêu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `MaNSX` varchar(2) NOT NULL,
  `TenNSX` varchar(40) NOT NULL,
  `QuocGia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`MaNSX`, `TenNSX`, `QuocGia`) VALUES
('AS', 'ASUS', 'Hàn quốc'),
('DE', 'DELL', 'Mỹ'),
('LE', 'LENOVO', 'Trung quốc'),
('TO', 'TOSHIBA', 'Nhật bản');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`MaNSX`) REFERENCES `nhasanxuat` (`MaNSX`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaHang`) REFERENCES `hanghoa` (`MaHang`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
