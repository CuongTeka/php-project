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
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
