-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 18, 2022 lúc 07:15 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB-log
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1150180`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `DKTH`
--

CREATE TABLE `DKTH` (
  `id` int(11) NOT NULL,
  `buoi` varchar(10) NOT NULL,
  `giao_vien` varchar(40) NOT NULL,
  `lop` varchar(6) NOT NULL,
  `phong` int(11) NOT NULL,
  `tiet` int(11) NOT NULL,
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
-- Cấu trúc bảng cho bảng `ktmbang`
--

CREATE TABLE `ktmbang` (
  `stat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ktmbang`
--

INSERT INTO `ktmbang` (`stat`) VALUES
(1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `LOGIN`
--

CREATE TABLE `LOGIN` (
  `id` varchar(10) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `pow` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `LOGIN`
--

INSERT INTO `LOGIN` (`id`, `username`, `pass`, `name`, `pow`, `email`) VALUES
('MainAdmin', 'Admin', 'mj1g3Tp4', 'Nguyễn Thanh Huy', 1, 'quanlyphongmay.huyn@gmail.com'),
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
  `ngay` date NOT NULL,
  `buoi` varchar(10) NOT NULL,
  `tiet` int(11) NOT NULL,
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

INSERT INTO `p1` (`ngay`, `buoi`, `tiet`, `chuot`, `bp`, `mh`, `mb`, `cppu`, `ram`, `dl`) VALUES
('2022-12-18', 'Sáng', 3, NULL, '3', '1 6', NULL, NULL, NULL, NULL),
('2022-12-14', 'Sáng', 1, '2', '5', '3', '4', '', '3', '1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `p2`
--

CREATE TABLE `p2` (
  `ngay` date NOT NULL,
  `buoi` varchar(10) NOT NULL,
  `tiet` int(11) NOT NULL,
  `chuot` varchar(200) NOT NULL,
  `bp` varchar(200) NOT NULL,
  `mh` varchar(200) NOT NULL,
  `mb` varchar(200) NOT NULL,
  `cppu` varchar(200) NOT NULL,
  `ram` varchar(200) NOT NULL,
  `dl` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `p2`
--

INSERT INTO `p2` (`ngay`, `buoi`, `tiet`, `chuot`, `bp`, `mh`, `mb`, `cppu`, `ram`, `dl`) VALUES
('2022-12-12', 'Sáng', 1, '', '', '', '', '', '', '1 2 6');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `DKTH`
--
ALTER TABLE `DKTH`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ktmbang`
--
ALTER TABLE `ktmbang`
  ADD PRIMARY KEY (`stat`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `DKTH`
--
ALTER TABLE `DKTH`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
