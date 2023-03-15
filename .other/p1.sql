-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 19, 2022 lúc 12:27 AM
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
-- Cấu trúc bảng cho bảng `p1`
--

CREATE TABLE `p1` (
  `IDMay` int(11) DEFAULT NULL,
  `gv` varchar(10) DEFAULT NULL,
  `ngay` date DEFAULT NULL,
  `buoi` varchar(10) DEFAULT NULL,
  `tiet` int(11) DEFAULT NULL,
  `chuot` varchar(200) DEFAULT NULL,
  `bp` varchar(200) DEFAULT NULL,
  `mh` varchar(200) DEFAULT NULL,
  `mb` varchar(200) DEFAULT NULL,
  `cppu` varchar(200) DEFAULT NULL,
  `ram` varchar(200) DEFAULT NULL,
  `dl` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
