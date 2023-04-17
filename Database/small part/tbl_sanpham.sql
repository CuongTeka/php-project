-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th4 11, 2023 lúc 11:50 AM
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
(1, 1, 'Intel Core i9 13900KS / 3.2GHz Turbo 6.0GHz / 24 Nhân 32 Luồng / 36MB / LGA 1700', 19990000, 18990000, '36 tháng', 'con', '', '', 10, 'New nguyên seal', 'i9_13900ks', 3, '2023-04-10 22:37:01'),
(2, 1, 'Intel Core i9 13900 / 2.0GHz Turbo 5.6GHz / 24 Nhân 32 Luồng / 36MB / LGA 1700', 15490000, 14000000, '36 tháng', 'con', '', '', 6, 'New nguyên seal', 'i9_13900', 3, '2023-04-11 15:35:10'),
(3, 1, 'AMD Ryzen 7 7700X / 4.5GHz Boost 5.4GHz / 8 nhân 16 luồng / 40MB / AM5', 9390000, 9290000, '36 tháng', 'con', '', '', 21, 'New nguyên seal', 'r7_7700x', 5, '2023-04-11 16:22:42'),
(4, 2, 'ASUS ROG Strix GeForce RTX 4090 OC White Edition 24GB GDDR6X', 64990000, 63000000, '36 tháng', 'con', '', '', 5, 'New nguyên seal', 'rog_4090_white', 6, '2023-04-11 15:39:54'),
(5, 2, 'GIGABYTE AORUS GeForce RTX 4090 MASTER 24G', 58990000, 57990000, '36 tháng', 'con', '', '', 7, 'New nguyên seal', 'aorus_4090', 5, '2023-04-11 15:53:58');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_danhmuc` (`iddm`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `tbl_danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
