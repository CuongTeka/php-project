-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th4 10, 2023 lúc 05:43 PM
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
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id` int(4) NOT NULL,
  `tendm` varchar(50) NOT NULL,
  `uutien` int(4) NOT NULL DEFAULT 0,
  `hienthi` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id`, `tendm`, `uutien`, `hienthi`) VALUES
(1, 'cpu', 0, 1),
(2, 'vga', 0, 1),
(4, 'mainboard', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id` int(6) NOT NULL,
  `iddm` int(4) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `don_gia` double(10,0) NOT NULL,
  `gia_khuyen_mai` double(10,0) DEFAULT NULL,
  `bao_hanh` varchar(20) NOT NULL,
  `dvt` varchar(20) NOT NULL,
  `khuyen_mai` varchar(50) DEFAULT NULL,
  `qua_tang` varchar(50) DEFAULT NULL,
  `kho` int(11) NOT NULL,
  `tinh_trang` varchar(50) DEFAULT NULL,
  `img` varchar(50) NOT NULL,
  `soluong_img` int(2) NOT NULL,
  `ngay_edit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id`, `iddm`, `tensp`, `don_gia`, `gia_khuyen_mai`, `bao_hanh`, `dvt`, `khuyen_mai`, `qua_tang`, `kho`, `tinh_trang`, `img`, `soluong_img`, `ngay_edit`) VALUES
(1, 1, 'Intel Core i9 13900KS / 3.2GHz Turbo 6.0GHz / 24 Nhân 32 Luồng / 36MB / LGA 1700', 19990000, 18990000, '36 tháng', 'con', '', '', 10, 'New nguyên seal', 'i9_13900ks', 3, '2023-04-10 22:37:01');

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(4) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `ngay_tao` datetime DEFAULT NULL,
  `ngay_chinh_sua` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `address`, `email`, `user`, `pass`, `role`, `ngay_tao`, `ngay_chinh_sua`) VALUES
(1, 'tôi', 'quận 11', 'teka@gmail.com', 'admin', '123', 1, NULL, '2023-04-08 15:26:53'),
(2, NULL, NULL, NULL, 'thanhnam', '456', 0, NULL, NULL),
(3, NULL, NULL, NULL, 'admin1', '123456', 1, NULL, NULL),
(4, 'noman', 'Tân Phú', 'noman@gmail.com', 'nomanland', '123', 0, '0000-00-00 00:00:00', '2023-04-10 18:59:12'),
(5, NULL, NULL, NULL, 'heyn', '456', 0, NULL, NULL),
(6, NULL, NULL, NULL, 'huyhoang', '123456', 0, NULL, NULL),
(7, NULL, NULL, NULL, 'longsensei', '123456', 0, NULL, NULL),
(8, NULL, NULL, NULL, 'Huytanya', 'abcd123', 0, NULL, NULL),
(9, NULL, NULL, NULL, 'admin2', '123', 1, NULL, NULL),
(10, NULL, NULL, NULL, 'slava', '123456', 0, NULL, NULL),
(15, NULL, NULL, 'teka@gmail.com', 'erika', '123456', 0, '2023-04-07 22:19:47', NULL),
(16, NULL, NULL, 'teka@gmail.com', 'admin', '123456', 0, '2023-04-07 22:20:05', NULL),
(17, 'test', 'quận 10', 'test@gmail.com', 'test', '123456', 0, '0000-00-00 00:00:00', '2023-04-08 15:05:16');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `tbl_thong_tin_sp`
--
ALTER TABLE `tbl_thong_tin_sp`
  ADD KEY `fk_ttsp_sanpham` (`idsp`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `tbl_danhmuc` (`id`);

--
-- Các ràng buộc cho bảng `tbl_thong_tin_sp`
--
ALTER TABLE `tbl_thong_tin_sp`
  ADD CONSTRAINT `fk_ttsp_sanpham` FOREIGN KEY (`idsp`) REFERENCES `tbl_sanpham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
