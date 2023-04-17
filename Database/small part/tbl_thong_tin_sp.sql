-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th4 10, 2023 lúc 05:42 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dtb_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thong_tin_sp`
--

CREATE TABLE `tbl_thong_tin_sp` (
  `idsp` int(6) NOT NULL,
  `socket` varchar(100) DEFAULT NULL,
  `dong` varchar(100) DEFAULT NULL,
  `so_nhan` varchar(100) DEFAULT NULL,
  `so_luong` varchar(100) DEFAULT NULL,
  `turbo_max` varchar(100) DEFAULT NULL,
  `tvb` varchar(100) DEFAULT NULL,
  `tbm` varchar(100) DEFAULT NULL,
  `turbo_p_core` varchar(100) DEFAULT NULL,
  `turbo_e_core` varchar(100) DEFAULT NULL,
  `p_core` varchar(100) DEFAULT NULL,
  `e_core` varchar(100) DEFAULT NULL,
  `tdp` varchar(100) DEFAULT NULL,
  `tech` varchar(100) DEFAULT NULL,
  `cache` varchar(100) DEFAULT NULL,
  `main_comp` varchar(100) DEFAULT NULL,
  `ram_sp` varchar(100) DEFAULT NULL,
  `ram_type` varchar(100) DEFAULT NULL,
  `egpu` varchar(100) DEFAULT NULL,
  `graphic_engine` varchar(100) DEFAULT NULL,
  `bus_standard` varchar(100) DEFAULT NULL,
  `opengl` varchar(100) DEFAULT NULL,
  `video_memory` varchar(100) DEFAULT NULL,
  `engine_clock` varchar(100) DEFAULT NULL,
  `cuba_core` varchar(100) DEFAULT NULL,
  `memory_speed` varchar(100) DEFAULT NULL,
  `memory_interface` varchar(100) DEFAULT NULL,
  `resolution` varchar(100) DEFAULT NULL,
  `interface` varchar(100) DEFAULT NULL,
  `maxium_display_support` varchar(100) DEFAULT NULL,
  `nvlink_crossfire` varchar(100) DEFAULT NULL,
  `dimension` varchar(100) DEFAULT NULL,
  `rec_psu` varchar(100) DEFAULT NULL,
  `power_connector` varchar(100) DEFAULT NULL,
  `slot` varchar(100) DEFAULT NULL,
  `phu_kien` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_thong_tin_sp`
--
ALTER TABLE `tbl_thong_tin_sp`
  ADD KEY `fk_ttsp_sanpham` (`idsp`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_thong_tin_sp`
--
ALTER TABLE `tbl_thong_tin_sp`
  ADD CONSTRAINT `fk_ttsp_sanpham` FOREIGN KEY (`idsp`) REFERENCES `tbl_sanpham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
