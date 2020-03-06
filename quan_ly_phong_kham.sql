-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 06, 2020 lúc 12:30 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quan_ly_phong_kham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `benh_nhan`
--

CREATE TABLE `benh_nhan` (
  `MaBN` int(100) NOT NULL,
  `TenBN` varchar(255) NOT NULL,
  `SDT` int(9) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` int(2) NOT NULL,
  `DiaChi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `benh_nhan`
--

INSERT INTO `benh_nhan` (`MaBN`, `TenBN`, `SDT`, `NgaySinh`, `GioiTinh`, `DiaChi`) VALUES
(1, 'nguyen thi hang', 98762345, '2020-03-03', 1, '07 nguyen van troi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvucon`
--

CREATE TABLE `dichvucon` (
  `id` int(100) NOT NULL,
  `TenDVCon` varchar(255) NOT NULL,
  `MaDV` varchar(255) NOT NULL,
  `MaDVCon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dichvucon`
--

INSERT INTO `dichvucon` (`id`, `TenDVCon`, `MaDV`, `MaDVCon`) VALUES
(1, 'Khám Ở Nhà', 'A01', 'A01_1'),
(2, 'Khám Ở Phòng Khám', 'A01', 'A01_2'),
(3, 'Thẩm Mỹ', 'A02', 'A02_1'),
(4, 'Thuốc', 'A03', 'A03_1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dich_vu`
--

CREATE TABLE `dich_vu` (
  `id` int(100) NOT NULL,
  `MaDV` varchar(255) NOT NULL,
  `TenDV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dich_vu`
--

INSERT INTO `dich_vu` (`id`, `MaDV`, `TenDV`) VALUES
(1, 'A01', 'Khám Bệnh'),
(2, 'A02', 'Thủ Thuật'),
(3, 'A04', 'Thuốc'),
(4, 'A04', 'Kính');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_thuoc`
--

CREATE TABLE `don_thuoc` (
  `id` int(100) NOT NULL,
  `TenThuoc` varchar(255) NOT NULL,
  `GiaBan` int(15) NOT NULL,
  `SoLuong` int(100) NOT NULL,
  `CachDung` text NOT NULL,
  `DonVi` varchar(255) NOT NULL,
  `GhiChu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user_name`, `password`) VALUES
(1, 'Cuong01', '12345'),
(2, 'cuong02', '12345');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `benh_nhan`
--
ALTER TABLE `benh_nhan`
  ADD PRIMARY KEY (`MaBN`);

--
-- Chỉ mục cho bảng `dichvucon`
--
ALTER TABLE `dichvucon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dich_vu`
--
ALTER TABLE `dich_vu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `don_thuoc`
--
ALTER TABLE `don_thuoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
