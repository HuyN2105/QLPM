-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 10.123.0.211:3306
-- Thời gian đã tạo: Th12 27, 2022 lúc 06:22 PM
-- Phiên bản máy phục vụ: 8.0.25
-- Phiên bản PHP: 7.0.33-0+deb9u9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `DKTH` (
  `id` int NOT NULL,
  `buoi` varchar(10) NOT NULL,
  `giao_vien` varchar(40) NOT NULL,
  `lop` varchar(6) NOT NULL,
  `phong` int NOT NULL,
  `tiet` int NOT NULL,
  `ngay` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `DKTH`
--

INSERT INTO `DKTH` (`id`, `buoi`, `giao_vien`, `lop`, `phong`, `tiet`, `ngay`) VALUES
(3, 'Sáng', 'Lê Huỳnh', '10A3', 2, 3, '2022-11-22'),
(4, 'Sáng', 'Trần Công Thắng', '12B3', 2, 1, '2022-12-08'),
(6, '4', 'Ff', '12A2', 2, 1, '2022-12-09'),
(8, 'Sáng', 'Lê Huỳnh', '10A3', 1, 4, '2022-12-14'),
(9, 'Sáng', 'Trần Công Thắng', '12B1', 2, 1, '2022-12-12'),
(11, 'Sáng', 'Trần Công Thắng', '12B1', 2, 2, '2022-12-12'),
(12, 'Sáng', 'Trần Công Thắng', '12B2', 2, 3, '2022-12-12'),
(13, 'Sáng', 'Trần Công Thắng', '12B2', 2, 4, '2022-12-12'),
(22, 'Sáng', 'Nguyễn Thị Bạch Mai', '12A4', 1, 1, '2022-12-14'),
(18, 'Sáng', 'Trần Hoàng Hải Hòa', '12b3', 2, 1, '2022-12-15'),
(25, 'chiều', 'Nguyễn Thị Bạch Mai', '12A1', 1, 1, '2022-12-16'),
(32, 'Sáng', 'Lê Huỳnh', '12B3', 2, 2, '2022-12-19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `LOGIN`
--

CREATE TABLE `LOGIN` (
  `id` varchar(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `pow` int NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `LOGIN`
--

INSERT INTO `LOGIN` (`id`, `username`, `pass`, `name`, `pow`, `email`) VALUES
('Admin', 'Admin', 'mReARnMQ', 'Nguyễn Thanh Huy', 1, 'quanlyphongmay.huyn@gmail.com'),
('Ti01', 'Ti01', 'qlpm', 'Nguyễn Thị Bạch Mai', 2, NULL),
('Ti02', 'Ti02', 'qlpm', 'Nguyễn Thị Bích Liên', 3, NULL),
('Ti03', 'Ti03', 'qlpm', 'Trần Công Thắng', 4, NULL),
('Ti04', 'Ti04', 'qlpm', 'Trần Hoàng Hải Hòa', 3, NULL),
('Ti05', 'Ti05', 'qlpm', 'Lê Huỳnh', 4, NULL),
('NONE', 'guest', 'guest', 'guest', 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `p1`
--

CREATE TABLE `p1` (
  `IDMay` int DEFAULT NULL,
  `gv` varchar(10) DEFAULT NULL,
  `ngay` date DEFAULT NULL,
  `buoi` varchar(10) DEFAULT NULL,
  `tiet` int DEFAULT NULL,
  `chuot` varchar(200) DEFAULT NULL,
  `bp` varchar(200) DEFAULT NULL,
  `mh` varchar(200) DEFAULT NULL,
  `mb` varchar(200) DEFAULT NULL,
  `cppu` varchar(200) DEFAULT NULL,
  `ram` varchar(200) DEFAULT NULL,
  `dl` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `p1`
--

INSERT INTO `p1` (`IDMay`, `gv`, `ngay`, `buoi`, `tiet`, `chuot`, `bp`, `mh`, `mb`, `cppu`, `ram`, `dl`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `p2`
--

CREATE TABLE `p2` (
  `IDMay` int DEFAULT NULL,
  `gv` varchar(10) DEFAULT NULL,
  `ngay` date DEFAULT NULL,
  `buoi` varchar(10) DEFAULT NULL,
  `tiet` int DEFAULT NULL,
  `chuot` varchar(200) DEFAULT NULL,
  `bp` varchar(200) DEFAULT NULL,
  `mh` varchar(200) DEFAULT NULL,
  `mb` varchar(200) DEFAULT NULL,
  `cppu` varchar(200) DEFAULT NULL,
  `ram` varchar(200) DEFAULT NULL,
  `dl` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `p2`
--

INSERT INTO `p2` (`IDMay`, `gv`, `ngay`, `buoi`, `tiet`, `chuot`, `bp`, `mh`, `mb`, `cppu`, `ram`, `dl`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vis`
--

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `DKTH`
--
ALTER TABLE `DKTH`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `DKTH`
--
ALTER TABLE `DKTH`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
