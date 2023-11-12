-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2023 lúc 06:06 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau2023`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(250) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(17, 'Anh iu em nhiều lắm', 1, 24, '11:46:43am 09/10/2023'),
(19, 'EM CŨNG IU ANH TÂM', 1, 24, '10:41:59pm 12/10/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Áo Collab OnePiece'),
(16, 'DirtyCoins x Bray'),
(20, 'ÁO CÁC LOẠI');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(10) NOT NULL,
  `idKH` int(10) NOT NULL,
  `madonhang` varchar(12) NOT NULL,
  `nameuser` varchar(255) NOT NULL,
  `namePD` varchar(255) NOT NULL,
  `pricePD` double NOT NULL,
  `phone` int(11) NOT NULL,
  `adr` varchar(255) NOT NULL,
  `timeDH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `idKH`, `madonhang`, `nameuser`, `namePD`, `pricePD`, `phone`, `adr`, `timeDH`) VALUES
(103, 1, 'DAM_f82caf9e', 'admin', 'LIL DINO WOMEN T-SHIRT - BLACK', 358000, 906487673, '63 Thi Sách', '2023-10-16 10:43:58'),
(104, 1, 'DAM_4f9a8d17', 'admin', 'CASUAL T-SHIRT', 358000, 906487673, '63 Thi Sách', '2023-10-16 10:46:22'),
(105, 1, 'DAM_845b8234', 'admin', 'CASUAL T-SHIRT', 358000, 906487673, '63 Thi Sách', '2023-10-16 11:07:41'),
(106, 1, 'DAM_6fb63486', 'admin', 'LIL DINO WOMEN T-SHIRT - BLACK', 358000, 906487673, '63 Thi Sách', '2023-10-16 11:21:20'),
(107, 1, 'DAM_cfc327df', 'admin', 'DC X BR THƯƠNG BẠN TRAI T-SHIRT', 358000, 906487673, '63 Thi Sách', '2023-10-16 11:21:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL DEFAULT 0,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `view` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `view`, `iddm`) VALUES
(1, 'DC X BR THƯƠNG BẠN TRAI T-SHIRT', 358000, 'anh_1.webp', '1', 123, 16),
(18, 'DC X OP CHOPPER FLY T-SHIRT ', 358000, 'anh_2.webp', 'KAKA', 23, 1),
(19, 'DC X OP CHOPPER T-SHIRT', 358000, 'anh_3.webp', '', 7, 1),
(20, 'DC X OP ACE T-SHIRT ', 358000, 'anh_4.webp', '', 65, 1),
(22, 'DC X OP SANJI CHIBI T-SHIRT ', 358000, 'anh_5.webp', '', 47, 1),
(23, 'DC X OP LUFFY T-SHIRT - CREAM', 358000, 'anh_6.webp', '', 111, 1),
(24, 'DC X OPF:R NAMI T-SHIRT - WHITE', 358000, 'anh_7.webp', '', 989, 1),
(26, 'DC X OP LUFFY RAGLAN HOODIE ', 358000, 'anh_9.webp', 'Bo cổ dày dặn hình in sắc nét co dãn hai chiều HAHAHA\r\nAnh Tâm Đẹp Trai', 128, 1),
(28, 'DC X OP LUFFY RAGLAN HOODIE - WHITE', 358000, 'anh_8.webp', '', 1, 1),
(34, 'LOGO WASHED HOODIE - GREEN', 358000, 'ACL 1.webp', '', 0, 20),
(35, 'LINEN CUBAN SHIRT - WHITE', 358000, 'ACL 2.webp', '', 0, 20),
(36, 'ROPE PRINT REGULAR T-SHIRT ', 358000, 'ACL 3.webp', '', 0, 20),
(37, 'ROPE PRINT REGULAR T-SHIRT ', 358000, 'ACL 4.webp', '', 0, 20),
(38, 'GRADIENT REGULAR T-SHIRT - WHITE', 358000, 'ACL 5.webp', '', 0, 20),
(39, 'ACADEMY RAGLAN REGULAR T', 358000, 'ACL 6.webp', '', 0, 20),
(40, 'ACADEMY RAGLAN WOMEN T', 358000, 'ACL 7.webp', '', 0, 20),
(41, 'ROPE PRINT REGULAR T-SHIRT ', 358000, 'ACL 8.webp', '', 0, 20),
(42, 'LIL DINO WOMEN T-SHIRT - BLACK', 358000, 'ACL 9.webp', '', 0, 20),
(43, 'TROMPE LOEIL RELAXED T-SHIRT', 358000, 'ACL 10.webp', '', 0, 20),
(44, 'CASUAL T-SHIRT', 358000, 'ACL 11.webp', '', 0, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'admin', '123123tam', 'baotam1911@gmail.com', '63 Thi Sách', '0906487673', 1),
(7, 'lnbtam', '2', 'tamlnbpd07768@fpt.edu.vn', '2', '2', 0),
(8, 'anhtam', '2', 'huuthang13062004@gmail.com', '63 thi sách', '0906487673', 0),
(15, 'tam2', '2', 'tam@gmail.com', '', '', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
