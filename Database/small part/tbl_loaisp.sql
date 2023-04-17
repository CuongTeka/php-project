-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th4 17, 2023 lúc 06:19 PM
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
-- Cấu trúc bảng cho bảng `tbl_loaisp`
--

CREATE TABLE `tbl_loaisp` (
  `id` int(6) NOT NULL,
  `iddm` int(6) NOT NULL,
  `hienthi` tinyint(4) NOT NULL DEFAULT 1,
  `loai_sp` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loaisp`
--

INSERT INTO `tbl_loaisp` (`id`, `iddm`, `hienthi`, `loai_sp`) VALUES
(1, 1, 1, 'Intel Core i9'),
(2, 1, 1, 'Intel Core i7'),
(3, 1, 1, 'Intel Core i5'),
(4, 1, 1, 'Intel Core i3'),
(5, 1, 1, 'Intel Celeron - Pentium'),
(6, 1, 1, 'Intel Xeon'),
(7, 1, 1, 'AMD Ryzen 9'),
(8, 1, 1, 'AMD Ryzen 7'),
(9, 1, 1, 'AMD Ryzen 5'),
(10, 1, 1, 'AMD Ryzen 3'),
(11, 1, 1, 'AMD Threadripper'),
(12, 2, 1, 'RTX 4090');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_loaisp`
--
ALTER TABLE `tbl_loaisp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_loaisp_danhmuc` (`iddm`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_loaisp`
--
ALTER TABLE `tbl_loaisp`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_loaisp`
--
ALTER TABLE `tbl_loaisp`
  ADD CONSTRAINT `fk_loaisp_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `tbl_danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
