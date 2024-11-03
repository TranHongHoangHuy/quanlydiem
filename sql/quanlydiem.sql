-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 03, 2024 lúc 09:10 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlydiem`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `day`
--

CREATE TABLE `day` (
  `MaDayHoc` varchar(5) NOT NULL,
  `MaMonHoc` varchar(5) NOT NULL,
  `Magv` int(6) NOT NULL,
  `MaLopHoc` varchar(10) NOT NULL,
  `MaHocKy` varchar(5) NOT NULL,
  `MoTaPhanCong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `day`
--

INSERT INTO `day` (`MaDayHoc`, `MaMonHoc`, `Magv`, `MaLopHoc`, `MaHocKy`, `MoTaPhanCong`) VALUES
('1', 'T', 1010, '10A1', '12016', 'test'),
('2', 'A', 1012, '10A2', '12016', 'Phân Công Môn Toán'),
('3', 'T', 1010, '10A2', '12016', 'sdsd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `MaDiem` int(6) NOT NULL,
  `MaHocKy` varchar(5) NOT NULL,
  `MaMonHoc` varchar(5) NOT NULL,
  `MaHS` int(6) NOT NULL,
  `MaLopHoc` varchar(10) NOT NULL,
  `DiemMieng` varchar(4) NOT NULL,
  `Diem15Phut1` varchar(4) NOT NULL,
  `Diem15Phut2` varchar(4) NOT NULL,
  `Diem1Tiet1` varchar(4) NOT NULL,
  `Diem1Tiet2` varchar(4) NOT NULL,
  `DiemThi` varchar(4) NOT NULL,
  `DiemTB` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`MaDiem`, `MaHocKy`, `MaMonHoc`, `MaHS`, `MaLopHoc`, `DiemMieng`, `Diem15Phut1`, `Diem15Phut2`, `Diem1Tiet1`, `Diem1Tiet2`, `DiemThi`, `DiemTB`) VALUES
(1, '12016', 'T', 100104, '10A2', '5', '6', '7', '8', '9', '10', 0),
(2, '12016', 'T', 100105, '10A2', '6', '5', '9', '8', '7', '6', 0),
(3, '12016', 'T', 100201, '10A2', '9', '10', '10', '9.', '8.', '9', 0),
(59, '12016', 'T', 100101, '10A1', '5', '6', '7', '9', '10', '10', 0),
(103, '12016', 'H', 100101, '10A1', '10', '9', '8', '7', '10', '7.5', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

CREATE TABLE `giaovien` (
  `Magv` int(4) NOT NULL,
  `MaMonHoc` varchar(5) NOT NULL,
  `Tengv` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `SDT` varchar(11) NOT NULL,
  `passwordgv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`Magv`, `MaMonHoc`, `Tengv`, `DiaChi`, `SDT`, `passwordgv`) VALUES
(1010, 'T', 'Lê Thị Ngọc Hoa', '285 Cao Lỗ Phường 4 Quận 8 Hồ Chí Minh        ', '01226156299', 'nhan'),
(1012, 'A', 'Đinh Thị Ngoc Diệp', '123 Bis Phạm Hùng Quận 8 Hồ Chí Minh      ', '0190919008', '123456'),
(1501, 'S', 'Trần Thị Ngọc Sử', '125 Nguyễn Tri Phương Quận 10\r\n  ', '05167654156', '123456'),
(6006, 'H', 'Tạ Minh Tâm', '84/2 Bình Hưng Hòa Bình Tân   ', '0846965632', '123456789'),
(9001, 'CN', 'Nguyễn Thị Nghệ', '65 Trần Hưng Đạo Quận 5  ', '0987654336', '123456'),
(9999, 'V', 'Ngô Minh Văn', '6 Đinh Bộ Lĩnh, TP Hồ Chí Minh', '0133615629', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocky`
--

CREATE TABLE `hocky` (
  `MaHocKy` varchar(5) NOT NULL,
  `TenHocKy` varchar(20) NOT NULL,
  `HeSoHK` int(1) NOT NULL,
  `NamHoc` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hocky`
--

INSERT INTO `hocky` (`MaHocKy`, `TenHocKy`, `HeSoHK`, `NamHoc`) VALUES
('12016', 'Học Kỳ 1', 1, '2024-2025'),
('22016', 'Học Kỳ 2', 2, '2024-2025');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocsinh`
--

CREATE TABLE `hocsinh` (
  `MaHS` int(6) NOT NULL,
  `MaLopHoc` varchar(10) NOT NULL,
  `TenHS` varchar(50) NOT NULL,
  `GioiTinh` varchar(5) NOT NULL,
  `NgaySinh` date NOT NULL,
  `noisinh` varchar(50) NOT NULL,
  `dantoc` varchar(10) NOT NULL,
  `hotencha` varchar(50) NOT NULL,
  `hotenme` varchar(50) NOT NULL,
  `passwordhs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hocsinh`
--

INSERT INTO `hocsinh` (`MaHS`, `MaLopHoc`, `TenHS`, `GioiTinh`, `NgaySinh`, `noisinh`, `dantoc`, `hotencha`, `hotenme`, `passwordhs`) VALUES
(100101, '10A1', 'Nguyễn Tấn Dũng', 'Nam', '2000-11-06', 'Cà Mau', 'Kinh', 'Nguyễn Tấn Phúc', 'Trần Thị Phượng', '123456789'),
(100102, '10A1', 'Nguyễn Thị Phương Anh', 'Nữ', '2000-11-02', 'Bình Phước', 'Kinh', 'Nguyễn Văn Anh', 'Nguyễn Thị Anh', '100102'),
(100103, '10A1', 'Trịnh Hữu Huy', 'Nữ', '2000-11-01', 'Thái Nguyên', 'Kinh', 'Trịnh Hữu Dụng', 'Nguyễn Thị Sĩ', '100103'),
(100104, '10A2', 'Trần Thiện Nhân', 'Nam', '2000-11-23', 'Trà Vinh', 'Kinh', 'Trần Minh Chiến', 'Nguyễn Thị Kim Ngân', '123456'),
(100105, '10A2', 'Lương Xuân Trường', 'Nam', '2001-11-09', 'Tuyên Quang', 'Kinh', 'Lương Bách Chiến', 'Lý Bách Niên', '100105'),
(100107, '10A1', 'Nguyễn Thị Bê', 'Nữ', '2000-12-06', 'Hải Phòng', 'Kinh', 'Nguyễn Văn Khá', 'Trần Thị Giỏi', '100107'),
(100111, '10A1', 'Nguyễn Trương Phong', 'Nam', '1999-12-05', 'Thái Bình', 'Kinh', 'Nguyễn Tuấn Tú', 'Mai Thị Thực', '123456'),
(100201, '10A2', 'Nguyễn Công Phượng', 'Nam', '2001-12-26', 'Nghệ An', 'kinh', 'Nguyễn Công An', 'Bùi Minh Tâm', '100201'),
(100505, '10A1', 'Trịnh Văn Tôn', 'Nam', '1999-02-22', 'Điện Biên Phủ', 'Kinh', 'Trịnh Văn Thất', 'Nguyễn Thị Học', '123456'),
(100605, '10A3', 'Nguyễn Trương Phong', 'Nam', '1999-12-05', 'Thái Bình', 'Kinh', 'Trịnh Hữu Dụng', 'Mai Thị Thực', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophoc`
--

CREATE TABLE `lophoc` (
  `MaLopHoc` varchar(10) NOT NULL,
  `Tenlophoc` varchar(20) NOT NULL,
  `KhoiHoc` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lophoc`
--

INSERT INTO `lophoc` (`MaLopHoc`, `Tenlophoc`, `KhoiHoc`) VALUES
('10A1', '10A1', '10'),
('10A2', '10A2', '10'),
('10A3', '10A3', '10'),
('10A4', '10A4', '10'),
('10A5', '10A5', '10'),
('10A6', '10A6', '10'),
('10A7', '10A7', '10'),
('10A8', '10A8', '10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMonHoc` varchar(5) NOT NULL,
  `TenMonHoc` varchar(20) NOT NULL,
  `SoTiet` int(20) NOT NULL,
  `HeSoMonHoc` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MaMonHoc`, `TenMonHoc`, `SoTiet`, `HeSoMonHoc`) VALUES
('A', 'Tiếng Anh', 105, 1),
('CN', 'Công Nghệ', 50, 1),
('GD', 'Giáo Dục Công Dân', 50, 1),
('H', 'Hóa Học', 70, 1),
('S', 'Lịch Sử', 100, 1),
('Si', 'Sinh Học', 75, 1),
('T', 'Toán', 100, 2),
('Ti', 'Tin Học', 100, 1),
('V', 'Văn', 120, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `userid` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `level`) VALUES
(5, 'huy', '12345678', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`MaDayHoc`),
  ADD KEY `fk_day_monhoc` (`MaMonHoc`),
  ADD KEY `fk_day_gv` (`Magv`),
  ADD KEY `fk_day_hocky` (`MaHocKy`),
  ADD KEY `fk_day_lophoc` (`MaLopHoc`);

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`MaDiem`),
  ADD KEY `fk_diem_mahk` (`MaHocKy`),
  ADD KEY `fk_diem_monhoc` (`MaMonHoc`),
  ADD KEY `fk_diem_hocsinh` (`MaHS`),
  ADD KEY `MaLopHoc` (`MaLopHoc`);

--
-- Chỉ mục cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`Magv`),
  ADD UNIQUE KEY `SDT` (`SDT`),
  ADD KEY `fk_gv_mh` (`MaMonHoc`);

--
-- Chỉ mục cho bảng `hocky`
--
ALTER TABLE `hocky`
  ADD PRIMARY KEY (`MaHocKy`);

--
-- Chỉ mục cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD PRIMARY KEY (`MaHS`),
  ADD KEY `fk_hs_lh` (`MaLopHoc`);

--
-- Chỉ mục cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`MaLopHoc`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMonHoc`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `diem`
--
ALTER TABLE `diem`
  MODIFY `MaDiem` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `day`
--
ALTER TABLE `day`
  ADD CONSTRAINT `fk_day_gv` FOREIGN KEY (`Magv`) REFERENCES `giaovien` (`Magv`),
  ADD CONSTRAINT `fk_day_hocky` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`),
  ADD CONSTRAINT `fk_day_lophoc` FOREIGN KEY (`MaLopHoc`) REFERENCES `lophoc` (`MaLopHoc`),
  ADD CONSTRAINT `fk_day_monhoc` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`);

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`MaLopHoc`) REFERENCES `lophoc` (`MaLopHoc`),
  ADD CONSTRAINT `fk_diem_hocsinh` FOREIGN KEY (`MaHS`) REFERENCES `hocsinh` (`MaHS`),
  ADD CONSTRAINT `fk_diem_mahk` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`),
  ADD CONSTRAINT `fk_diem_monhoc` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`);

--
-- Các ràng buộc cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD CONSTRAINT `fk_gv_mh` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`);

--
-- Các ràng buộc cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD CONSTRAINT `fk_hs_lh` FOREIGN KEY (`MaLopHoc`) REFERENCES `lophoc` (`MaLopHoc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
