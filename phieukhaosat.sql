-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for khoaluan
CREATE DATABASE IF NOT EXISTS `khoaluan` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `khoaluan`;

-- Dumping structure for table khoaluan.canbo
CREATE TABLE IF NOT EXISTS `canbo` (
  `id_canbo` int(11) NOT NULL AUTO_INCREMENT,
  `ma_canbo` varchar(50) NOT NULL,
  `ten_canbo` varchar(50) NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `ngaysinh` date NOT NULL,
  `email` varchar(10) NOT NULL,
  `sdt2` varchar(10) NOT NULL,
  `sdt1` varchar(10) NOT NULL,
  `diachi_lienlac` text NOT NULL,
  `diachi_thuongtru` text NOT NULL,
  `id_donvi` int(11) NOT NULL,
  `id_trinhdo` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  PRIMARY KEY (`id_canbo`),
  KEY `donvi` (`id_donvi`),
  KEY `trinhdo` (`id_trinhdo`),
  KEY `id_taikhoan` (`id_taikhoan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.canbo: ~0 rows (approximately)

-- Dumping structure for table khoaluan.cauhoi
CREATE TABLE IF NOT EXISTS `cauhoi` (
  `id_cauhoi` int(11) NOT NULL AUTO_INCREMENT,
  `tencauhoi` text NOT NULL,
  `mota` text NOT NULL,
  `thutu` int(11) NOT NULL,
  `id_nhom` int(11) NOT NULL,
  `is_text` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_cauhoi`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.cauhoi: ~15 rows (approximately)
INSERT INTO `cauhoi` (`id_cauhoi`, `tencauhoi`, `mota`, `thutu`, `id_nhom`, `is_text`) VALUES
	(1, 'Bạn có hài lòng với chương trình đào tạo tại trường đại học của mình không?', '', 1, 1, 0),
	(2, 'Bạn cảm thấy chương trình đào tạo của trường có đủ đa dạng để đáp ứng nhu cầu của bạn không?', '', 1, 1, 0),
	(3, 'Bạn có thấy chương trình đào tạo của trường đáp ứng được yêu cầu của thị trường lao động không?', '', 2, 1, 0),
	(4, 'Bạn có cảm thấy chương trình đào tạo của trường có đủ thực tiễn không? Hay nó chỉ tập trung vào lý thuyết mà ít có cơ hội để áp dụng trong thực tế?', '', 2, 2, 0),
	(5, 'Bạn có nhận được đủ hỗ trợ từ trường trong suốt quá trình học tập không?', '', 0, 2, 0),
	(6, 'Bạn có cảm thấy chương trình đào tạo của trường có đủ độ khó để thách thức bạn không?', '', 0, 2, 0),
	(7, 'Bạn có cảm thấy chương trình đào tạo của trường đã giúp bạn phát triển các kỹ năng cần thiết cho sự nghiệp của mình không?', '', 0, 3, 0),
	(8, 'Bạn có hài lòng với cách thức giảng dạy của các giảng viên trong trường không?', '', 0, 3, 0),
	(9, 'Bạn có nhận được đủ thông tin về các khóa học, chương trình học, và các hoạt động ngoại khóa của trường không?', '', 0, 3, 0),
	(10, 'Ý kiến riêng của bạn về chươn trình đào tạo.', '', 0, 4, 1),
	(11, 'Bạn có hài lòng về tình trạng tòa nhà giảng đường hiện tại của trường đại học không?', '', 0, 5, 0),
	(13, 'Có đáp ứng đủ về công nghệ, thiết bị giảng dạy, và không gian học tập trong các tòa nhà giảng đường không?', '', 0, 5, 0),
	(14, 'Thư viện của trường đại học có đáp ứng đủ về cơ sở vật chất, trang thiết bị, và dịch vụ hỗ trợ người dùng không? Bạn có hài lòng về dịch vụ thư viện hiện tại không?', '', 0, 5, 0),
	(15, 'Có đáp ứng đầy đủ về cơ sở vật chất, trang thiết bị, và tiện ích cần thiết trong ký túc xá của trường đại học không?', '', 0, 6, 0),
	(16, 'Sân thể thao và phòng tập gym của trường đại học có đáp ứng đủ về nhu cầu của sinh viên và nhân viên không?', '', 0, 6, 0),
	(17, 'Khuôn viên của trường đại học có đáp ứng đủ về không gian xanh, khu vực ngoài trời, và khu vực thể thao không?', '', 0, 6, 0),
	(18, 'Có đáp ứng đủ về số lượng và chất lượng phòng học, phòng thực hành, và phòng máy tính không?', '', 0, 7, 0),
	(19, 'Hệ thống điện, nước, wifi, và các dịch vụ công nghệ thông tin khác của trường đại học hoạt động ổn định và đáp ứng đủ nhu cầu của sinh viên và nhân viên không? Bạn có hài lòng về dịch vụ công nghệ thông tin hiện tại không?', '', 0, 7, 0),
	(20, 'Có đáp ứng đủ về nhu cầu về ăn uống và mua sắm trong khu vực của trường đại học không?', '', 0, 7, 0),
	(21, 'Ý kiến riêng của bạn về cơ sở vật chất.', '', 0, 8, 1);

-- Dumping structure for table khoaluan.danhgiacsvc
CREATE TABLE IF NOT EXISTS `danhgiacsvc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mot` int(11) DEFAULT NULL,
  `hai` int(11) DEFAULT NULL,
  `ba` int(11) DEFAULT NULL,
  `bon` int(11) DEFAULT NULL,
  `nam` int(11) DEFAULT NULL,
  `sau` int(11) DEFAULT NULL,
  `bay` int(11) DEFAULT NULL,
  `tam` int(11) DEFAULT NULL,
  `chin` int(11) DEFAULT NULL,
  `review` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.danhgiacsvc: ~1 rows (approximately)
INSERT INTO `danhgiacsvc` (`id`, `mot`, `hai`, `ba`, `bon`, `nam`, `sau`, `bay`, `tam`, `chin`, `review`, `time`) VALUES
	(4, 1, 1, NULL, 1, 1, 1, 1, 1, 1, 'ddddd', '2023-05-09 11:25:15'),
	(14, 1, 1, NULL, 1, 1, 1, 1, 1, 1, 'ddddd', '2023-05-09 11:25:15');

-- Dumping structure for table khoaluan.danhgiactdt
CREATE TABLE IF NOT EXISTS `danhgiactdt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mot` int(11) NOT NULL,
  `hai` int(11) NOT NULL,
  `ba` int(11) NOT NULL,
  `bon` int(11) NOT NULL,
  `nam` int(11) NOT NULL,
  `sau` int(11) NOT NULL,
  `bay` int(11) NOT NULL,
  `tam` int(11) NOT NULL,
  `chin` int(11) NOT NULL,
  `muoi` int(11) NOT NULL,
  `review` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.danhgiactdt: ~0 rows (approximately)

-- Dumping structure for table khoaluan.doituongapdung
CREATE TABLE IF NOT EXISTS `doituongapdung` (
  `id_apdung` int(11) NOT NULL AUTO_INCREMENT,
  `id_dot` int(11) NOT NULL,
  `id_tenkhaosat` int(11) NOT NULL,
  `id_phannhom` int(11) NOT NULL,
  PRIMARY KEY (`id_apdung`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.doituongapdung: ~4 rows (approximately)
INSERT INTO `doituongapdung` (`id_apdung`, `id_dot`, `id_tenkhaosat`, `id_phannhom`) VALUES
	(1, 1, 1, 3),
	(2, 2, 2, 3),
	(3, 1, 2, 3),
	(4, 2, 1, 3),
	(5, 2, 1, 3);

-- Dumping structure for table khoaluan.donvi
CREATE TABLE IF NOT EXISTS `donvi` (
  `id_donvi` int(11) NOT NULL AUTO_INCREMENT,
  `ma_donvi` varchar(50) NOT NULL,
  `tendonvi` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  `is_khoa` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_donvi`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.donvi: ~2 rows (approximately)
INSERT INTO `donvi` (`id_donvi`, `ma_donvi`, `tendonvi`, `mota`, `is_khoa`) VALUES
	(1, 'DV1', 'Khoa', 'đơn vị chức năng chính trong trường đại học, có trách nhiệm về giảng dạy, nghiên cứu và đào tạo.', 1);

-- Dumping structure for table khoaluan.dotkhaosat
CREATE TABLE IF NOT EXISTS `dotkhaosat` (
  `id_dot` int(11) NOT NULL AUTO_INCREMENT,
  `tendot` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  `thoigianbatdau` datetime NOT NULL,
  `thoigianketthuc` datetime NOT NULL,
  `id_hocky` int(11) NOT NULL,
  PRIMARY KEY (`id_dot`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.dotkhaosat: ~2 rows (approximately)
INSERT INTO `dotkhaosat` (`id_dot`, `tendot`, `mota`, `thoigianbatdau`, `thoigianketthuc`, `id_hocky`) VALUES
	(1, 'đợt một', '2023', '2023-06-09 12:48:00', '2023-06-11 12:48:00', 4),
	(2, 'đợt một', '2023', '2023-06-09 13:11:00', '2023-06-11 13:11:00', 4);

-- Dumping structure for table khoaluan.giangvien
CREATE TABLE IF NOT EXISTS `giangvien` (
  `id_giangvien` int(11) NOT NULL AUTO_INCREMENT,
  `ma_giangvien` varchar(50) NOT NULL,
  `tengiangvien` varchar(30) NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `ngaysinh` date NOT NULL,
  `email` varchar(10) DEFAULT NULL,
  `diachilienlac` text DEFAULT NULL,
  `diachithuongtru` text NOT NULL,
  `sdt2` varchar(10) NOT NULL,
  `sdt1` varchar(10) NOT NULL,
  `id_donvi` int(11) NOT NULL,
  `id_trinhdo` int(11) NOT NULL,
  PRIMARY KEY (`id_giangvien`),
  KEY `id_donvi` (`id_donvi`),
  KEY `id_trinhdo` (`id_trinhdo`),
  CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`id_donvi`) REFERENCES `donvi` (`id_donvi`),
  CONSTRAINT `giangvien_ibfk_3` FOREIGN KEY (`id_trinhdo`) REFERENCES `trinhdo` (`id_trinhdo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.giangvien: ~2 rows (approximately)
INSERT INTO `giangvien` (`id_giangvien`, `ma_giangvien`, `tengiangvien`, `gioitinh`, `ngaysinh`, `email`, `diachilienlac`, `diachithuongtru`, `sdt2`, `sdt1`, `id_donvi`, `id_trinhdo`) VALUES
	(1, 'GV01', 'Đỗ Đông Đầy', 1, '2023-05-03', 'ddd@gmail.', 'lieu', 'bac', '0912346555', '0944321535', 1, 1),
	(6, 'GV06', 'Ngô Minh Nhật', 1, '2001-05-12', 'nhat@gmail', 'long', 'vĩnh', '24546545', '0944321535', 1, 2);

-- Dumping structure for table khoaluan.hocky
CREATE TABLE IF NOT EXISTS `hocky` (
  `id_hocky` int(11) NOT NULL AUTO_INCREMENT,
  `tenhocky` text NOT NULL,
  `mota` text NOT NULL,
  `id_namhoc` int(11) NOT NULL,
  PRIMARY KEY (`id_hocky`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.hocky: ~3 rows (approximately)
INSERT INTO `hocky` (`id_hocky`, `tenhocky`, `mota`, `id_namhoc`) VALUES
	(4, 'hk1', '', 2),
	(6, 'hk2', '', 2);

-- Dumping structure for table khoaluan.khoahoc
CREATE TABLE IF NOT EXISTS `khoahoc` (
  `id_khoahoc` int(11) NOT NULL AUTO_INCREMENT,
  `tenkhoahoc` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  PRIMARY KEY (`id_khoahoc`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.khoahoc: ~5 rows (approximately)
INSERT INTO `khoahoc` (`id_khoahoc`, `tenkhoahoc`, `mota`) VALUES
	(1, 'Khóa14', '2019'),
	(2, 'Khóa15', '2020'),
	(3, 'Khóa16', '2021'),
	(4, 'Khóa17', '2022'),
	(5, 'Khóa18', '2023');

-- Dumping structure for table khoaluan.lophoc
CREATE TABLE IF NOT EXISTS `lophoc` (
  `id_lophoc` int(11) NOT NULL AUTO_INCREMENT,
  `tenlophoc` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  `id_nganhhoc` int(11) NOT NULL,
  `id_khoahoc` int(11) NOT NULL,
  PRIMARY KEY (`id_lophoc`),
  KEY `id_khoa` (`id_khoahoc`),
  KEY `id_nganh` (`id_nganhhoc`),
  CONSTRAINT `id_khoa` FOREIGN KEY (`id_khoahoc`) REFERENCES `khoahoc` (`id_khoahoc`),
  CONSTRAINT `id_nganh` FOREIGN KEY (`id_nganhhoc`) REFERENCES `nganhhoc` (`id_nganhhoc`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.lophoc: ~2 rows (approximately)
INSERT INTO `lophoc` (`id_lophoc`, `tenlophoc`, `mota`, `id_nganhhoc`, `id_khoahoc`) VALUES
	(1, 'CNTT14', '2019', 1, 1),
	(26, 'XD14', '2019', 3, 1);

-- Dumping structure for table khoaluan.namhoc
CREATE TABLE IF NOT EXISTS `namhoc` (
  `id_namhoc` int(11) NOT NULL AUTO_INCREMENT,
  `tennamhoc` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  PRIMARY KEY (`id_namhoc`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.namhoc: ~3 rows (approximately)
INSERT INTO `namhoc` (`id_namhoc`, `tennamhoc`, `mota`) VALUES
	(2, '2019', 'nguyen nhanaaa'),
	(3, '2020', 'nguyen nhan'),
	(4, '2021', '');

-- Dumping structure for table khoaluan.nganhhoc
CREATE TABLE IF NOT EXISTS `nganhhoc` (
  `id_nganhhoc` int(11) NOT NULL AUTO_INCREMENT,
  `tennganhhoc` text NOT NULL,
  `mota` text NOT NULL,
  `id_khoaa` int(11) NOT NULL,
  PRIMARY KEY (`id_nganhhoc`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.nganhhoc: ~4 rows (approximately)
INSERT INTO `nganhhoc` (`id_nganhhoc`, `tennganhhoc`, `mota`, `id_khoaa`) VALUES
	(1, 'Công nghệ thông tin', 'A', 1),
	(2, 'Điện tử', 'B', 1),
	(3, 'Xây dựng', 'C', 1);

-- Dumping structure for table khoaluan.nhomcauhoi
CREATE TABLE IF NOT EXISTS `nhomcauhoi` (
  `id_nhomcauhoi` int(11) NOT NULL AUTO_INCREMENT,
  `tennhomcauhoi` text NOT NULL,
  `mota` text NOT NULL,
  `thutu` int(11) NOT NULL,
  `id_tenkhaosat` int(11) NOT NULL,
  PRIMARY KEY (`id_nhomcauhoi`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.nhomcauhoi: ~5 rows (approximately)
INSERT INTO `nhomcauhoi` (`id_nhomcauhoi`, `tennhomcauhoi`, `mota`, `thutu`, `id_tenkhaosat`) VALUES
	(1, 'A', '2022', 1, 1),
	(2, 'B', '2022', 2, 1),
	(3, 'C', '2022', 3, 1),
	(4, 'D', '2022', 4, 1),
	(5, 'E', '2022', 5, 2),
	(6, 'F', '', 0, 2),
	(7, 'G', '', 0, 2),
	(8, 'H', '', 0, 2);

-- Dumping structure for table khoaluan.phannhom
CREATE TABLE IF NOT EXISTS `phannhom` (
  `id_phannhom` int(11) NOT NULL AUTO_INCREMENT,
  `tenphannhom` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  PRIMARY KEY (`id_phannhom`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.phannhom: ~3 rows (approximately)
INSERT INTO `phannhom` (`id_phannhom`, `tenphannhom`, `mota`) VALUES
	(1, 'nhóm admin', ''),
	(2, 'nhóm giảng viên', ''),
	(3, 'nhóm sinh viên', '');

-- Dumping structure for table khoaluan.phanquyen
CREATE TABLE IF NOT EXISTS `phanquyen` (
  `id_phanquyen` int(11) NOT NULL AUTO_INCREMENT,
  `tenphanquyen` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  PRIMARY KEY (`id_phanquyen`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.phanquyen: ~4 rows (approximately)
INSERT INTO `phanquyen` (`id_phanquyen`, `tenphanquyen`, `mota`) VALUES
	(0, 'admin', ''),
	(2, 'giangvien', ''),
	(3, 'sinhvien', '');

-- Dumping structure for table khoaluan.phieukhaosat
CREATE TABLE IF NOT EXISTS `phieukhaosat` (
  `id_phieu` int(11) NOT NULL AUTO_INCREMENT,
  `id_apdung` int(11) NOT NULL,
  `id_doituong` int(11) NOT NULL,
  `ketqua` text NOT NULL,
  `ngaythuchien` datetime NOT NULL,
  PRIMARY KEY (`id_phieu`)
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.phieukhaosat: ~110 rows (approximately)
INSERT INTO `phieukhaosat` (`id_phieu`, `id_apdung`, `id_doituong`, `ketqua`, `ngaythuchien`) VALUES
	(1, 1, 1, '', '0000-00-00 00:00:00'),
	(2, 1, 2, '', '0000-00-00 00:00:00'),
	(3, 1, 3, '', '0000-00-00 00:00:00'),
	(4, 1, 4, '', '0000-00-00 00:00:00'),
	(5, 1, 5, '', '0000-00-00 00:00:00'),
	(6, 1, 6, '', '0000-00-00 00:00:00'),
	(7, 1, 7, '', '0000-00-00 00:00:00'),
	(8, 1, 8, '', '0000-00-00 00:00:00'),
	(9, 1, 9, '', '0000-00-00 00:00:00'),
	(10, 1, 10, '', '0000-00-00 00:00:00'),
	(11, 1, 11, '', '0000-00-00 00:00:00'),
	(12, 1, 12, '', '0000-00-00 00:00:00'),
	(13, 1, 13, '', '0000-00-00 00:00:00'),
	(14, 1, 14, '', '0000-00-00 00:00:00'),
	(15, 1, 15, '', '0000-00-00 00:00:00'),
	(16, 1, 16, '', '0000-00-00 00:00:00'),
	(17, 1, 17, '', '0000-00-00 00:00:00'),
	(18, 1, 18, '', '0000-00-00 00:00:00'),
	(19, 1, 19, '', '0000-00-00 00:00:00'),
	(20, 1, 20, '', '0000-00-00 00:00:00'),
	(21, 1, 21, '', '0000-00-00 00:00:00'),
	(22, 1, 22, '', '0000-00-00 00:00:00'),
	(23, 1, 23, '', '0000-00-00 00:00:00'),
	(24, 1, 24, '', '0000-00-00 00:00:00'),
	(25, 1, 25, '', '0000-00-00 00:00:00'),
	(26, 1, 26, '', '0000-00-00 00:00:00'),
	(27, 1, 27, '', '0000-00-00 00:00:00'),
	(28, 1, 28, '', '0000-00-00 00:00:00'),
	(29, 1, 29, '', '0000-00-00 00:00:00'),
	(30, 1, 30, '', '0000-00-00 00:00:00'),
	(31, 1, 31, '', '0000-00-00 00:00:00'),
	(32, 1, 32, '', '0000-00-00 00:00:00'),
	(33, 1, 33, '', '0000-00-00 00:00:00'),
	(34, 1, 34, '', '0000-00-00 00:00:00'),
	(35, 1, 35, '', '0000-00-00 00:00:00'),
	(36, 1, 36, '', '0000-00-00 00:00:00'),
	(37, 1, 37, '', '0000-00-00 00:00:00'),
	(38, 1, 38, '', '0000-00-00 00:00:00'),
	(39, 1, 39, '', '0000-00-00 00:00:00'),
	(40, 1, 40, '', '0000-00-00 00:00:00'),
	(41, 1, 41, '', '0000-00-00 00:00:00'),
	(42, 1, 42, '', '0000-00-00 00:00:00'),
	(43, 1, 43, '', '0000-00-00 00:00:00'),
	(44, 1, 44, '', '0000-00-00 00:00:00'),
	(45, 1, 45, '', '0000-00-00 00:00:00'),
	(46, 1, 46, '', '0000-00-00 00:00:00'),
	(47, 1, 47, '', '0000-00-00 00:00:00'),
	(48, 1, 48, '', '0000-00-00 00:00:00'),
	(49, 1, 49, '', '0000-00-00 00:00:00'),
	(50, 1, 50, '', '0000-00-00 00:00:00'),
	(51, 1, 51, '', '0000-00-00 00:00:00'),
	(52, 1, 52, '', '0000-00-00 00:00:00'),
	(53, 1, 53, '', '0000-00-00 00:00:00'),
	(54, 1, 54, '', '0000-00-00 00:00:00'),
	(55, 1, 55, '', '0000-00-00 00:00:00'),
	(56, 2, 1, '', '0000-00-00 00:00:00'),
	(57, 2, 2, '', '0000-00-00 00:00:00'),
	(58, 2, 3, '', '0000-00-00 00:00:00'),
	(59, 2, 4, '', '0000-00-00 00:00:00'),
	(60, 2, 5, '', '0000-00-00 00:00:00'),
	(61, 2, 6, '', '0000-00-00 00:00:00'),
	(62, 2, 7, '', '0000-00-00 00:00:00'),
	(63, 2, 8, '', '0000-00-00 00:00:00'),
	(64, 2, 9, '', '0000-00-00 00:00:00'),
	(65, 2, 10, '', '0000-00-00 00:00:00'),
	(66, 2, 11, '', '0000-00-00 00:00:00'),
	(67, 2, 12, '', '0000-00-00 00:00:00'),
	(68, 2, 13, '', '0000-00-00 00:00:00'),
	(69, 2, 14, '', '0000-00-00 00:00:00'),
	(70, 2, 15, '', '0000-00-00 00:00:00'),
	(71, 2, 16, '', '0000-00-00 00:00:00'),
	(72, 2, 17, '', '0000-00-00 00:00:00'),
	(73, 2, 18, '', '0000-00-00 00:00:00'),
	(74, 2, 19, '', '0000-00-00 00:00:00'),
	(75, 2, 20, '', '0000-00-00 00:00:00'),
	(76, 2, 21, '', '0000-00-00 00:00:00'),
	(77, 2, 22, '', '0000-00-00 00:00:00'),
	(78, 2, 23, '', '0000-00-00 00:00:00'),
	(79, 2, 24, '', '0000-00-00 00:00:00'),
	(80, 2, 25, '', '0000-00-00 00:00:00'),
	(81, 2, 26, '', '0000-00-00 00:00:00'),
	(82, 2, 27, '', '0000-00-00 00:00:00'),
	(83, 2, 28, '', '0000-00-00 00:00:00'),
	(84, 2, 29, '', '0000-00-00 00:00:00'),
	(85, 2, 30, '', '0000-00-00 00:00:00'),
	(86, 2, 31, '', '0000-00-00 00:00:00'),
	(87, 2, 32, '', '0000-00-00 00:00:00'),
	(88, 2, 33, '', '0000-00-00 00:00:00'),
	(89, 2, 34, '', '0000-00-00 00:00:00'),
	(90, 2, 35, '', '0000-00-00 00:00:00'),
	(91, 2, 36, '', '0000-00-00 00:00:00'),
	(92, 2, 37, '', '0000-00-00 00:00:00'),
	(93, 2, 38, '', '0000-00-00 00:00:00'),
	(94, 2, 39, '', '0000-00-00 00:00:00'),
	(95, 2, 40, '', '0000-00-00 00:00:00'),
	(96, 2, 41, '', '0000-00-00 00:00:00'),
	(97, 2, 42, '', '0000-00-00 00:00:00'),
	(98, 2, 43, '', '0000-00-00 00:00:00'),
	(99, 2, 44, '', '0000-00-00 00:00:00'),
	(100, 2, 45, '', '0000-00-00 00:00:00'),
	(101, 2, 46, '', '0000-00-00 00:00:00'),
	(102, 2, 47, '', '0000-00-00 00:00:00'),
	(103, 2, 48, '', '0000-00-00 00:00:00'),
	(104, 2, 49, '', '0000-00-00 00:00:00'),
	(105, 2, 50, '', '0000-00-00 00:00:00'),
	(106, 2, 51, '', '0000-00-00 00:00:00'),
	(107, 2, 52, '', '0000-00-00 00:00:00'),
	(108, 2, 53, '', '0000-00-00 00:00:00'),
	(109, 2, 54, '', '0000-00-00 00:00:00'),
	(110, 2, 55, '', '0000-00-00 00:00:00'),
	(111, 5, 1, '', '0000-00-00 00:00:00'),
	(112, 5, 2, '', '0000-00-00 00:00:00'),
	(113, 5, 3, '', '0000-00-00 00:00:00'),
	(114, 5, 4, '', '0000-00-00 00:00:00'),
	(115, 5, 5, '', '0000-00-00 00:00:00'),
	(116, 5, 6, '', '0000-00-00 00:00:00'),
	(117, 5, 7, '', '0000-00-00 00:00:00'),
	(118, 5, 8, '', '0000-00-00 00:00:00'),
	(119, 5, 9, '', '0000-00-00 00:00:00'),
	(120, 5, 10, '', '0000-00-00 00:00:00'),
	(121, 5, 11, '', '0000-00-00 00:00:00'),
	(122, 5, 12, '', '0000-00-00 00:00:00'),
	(123, 5, 13, '', '0000-00-00 00:00:00'),
	(124, 5, 14, '', '0000-00-00 00:00:00'),
	(125, 5, 15, '', '0000-00-00 00:00:00'),
	(126, 5, 16, '', '0000-00-00 00:00:00'),
	(127, 5, 17, '', '0000-00-00 00:00:00'),
	(128, 5, 18, '', '0000-00-00 00:00:00'),
	(129, 5, 19, '', '0000-00-00 00:00:00'),
	(130, 5, 20, '', '0000-00-00 00:00:00'),
	(131, 5, 21, '', '0000-00-00 00:00:00'),
	(132, 5, 22, '', '0000-00-00 00:00:00'),
	(133, 5, 23, '', '0000-00-00 00:00:00'),
	(134, 5, 24, '', '0000-00-00 00:00:00'),
	(135, 5, 25, '', '0000-00-00 00:00:00'),
	(136, 5, 26, '', '0000-00-00 00:00:00'),
	(137, 5, 27, '', '0000-00-00 00:00:00'),
	(138, 5, 28, '', '0000-00-00 00:00:00'),
	(139, 5, 29, '', '0000-00-00 00:00:00'),
	(140, 5, 30, '', '0000-00-00 00:00:00'),
	(141, 5, 31, '', '0000-00-00 00:00:00'),
	(142, 5, 32, '', '0000-00-00 00:00:00'),
	(143, 5, 33, '', '0000-00-00 00:00:00'),
	(144, 5, 34, '', '0000-00-00 00:00:00'),
	(145, 5, 35, '', '0000-00-00 00:00:00'),
	(146, 5, 36, '', '0000-00-00 00:00:00'),
	(147, 5, 37, '', '0000-00-00 00:00:00'),
	(148, 5, 38, '', '0000-00-00 00:00:00'),
	(149, 5, 39, '', '0000-00-00 00:00:00'),
	(150, 5, 40, '', '0000-00-00 00:00:00'),
	(151, 5, 41, '', '0000-00-00 00:00:00'),
	(152, 5, 42, '', '0000-00-00 00:00:00'),
	(153, 5, 43, '', '0000-00-00 00:00:00'),
	(154, 5, 44, '', '0000-00-00 00:00:00'),
	(155, 5, 45, '', '0000-00-00 00:00:00'),
	(156, 5, 46, '', '0000-00-00 00:00:00'),
	(157, 5, 47, '', '0000-00-00 00:00:00'),
	(158, 5, 48, '', '0000-00-00 00:00:00'),
	(159, 5, 49, '', '0000-00-00 00:00:00'),
	(160, 5, 50, '', '0000-00-00 00:00:00'),
	(161, 5, 51, '', '0000-00-00 00:00:00'),
	(162, 5, 52, '', '0000-00-00 00:00:00'),
	(163, 5, 53, '', '0000-00-00 00:00:00'),
	(164, 5, 54, '', '0000-00-00 00:00:00'),
	(165, 5, 55, '', '0000-00-00 00:00:00');

-- Dumping structure for table khoaluan.phieukhaosatgv
CREATE TABLE IF NOT EXISTS `phieukhaosatgv` (
  `id_phieu` int(11) NOT NULL AUTO_INCREMENT,
  `id_apdung` int(11) NOT NULL,
  `id_doituong` int(11) NOT NULL,
  `ketqua` text NOT NULL,
  `ngaythuchien` datetime NOT NULL,
  PRIMARY KEY (`id_phieu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.phieukhaosatgv: ~0 rows (approximately)

-- Dumping structure for table khoaluan.sinhvien
CREATE TABLE IF NOT EXISTS `sinhvien` (
  `id_sinhvien` int(11) NOT NULL AUTO_INCREMENT,
  `ma_sinhvien` varchar(50) NOT NULL,
  `tensinhvien` varchar(50) NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `ngaysinh` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachithuongtru` text NOT NULL,
  `diachilienlac` text NOT NULL,
  `sdt1` varchar(10) NOT NULL,
  `sdt2` varchar(10) NOT NULL,
  `id_lophoc` int(11) NOT NULL,
  PRIMARY KEY (`id_sinhvien`),
  KEY `id_lophoc` (`id_lophoc`),
  CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`id_lophoc`) REFERENCES `lophoc` (`id_lophoc`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.sinhvien: ~55 rows (approximately)
INSERT INTO `sinhvien` (`id_sinhvien`, `ma_sinhvien`, `tensinhvien`, `gioitinh`, `ngaysinh`, `email`, `diachithuongtru`, `diachilienlac`, `sdt1`, `sdt2`, `id_lophoc`) VALUES
	(1, '197060055', 'Đặng Hoàng An', 1, '25/10/2001', 'dhan-cntt14@tdu.edu.vn', '0', '0', '', '', 1),
	(2, '197060069', 'Đào Bình An', 1, '26/08/2001', 'dban-cntt14@tdu.edu.vn', '0', '0', '0815907264', '0815907264', 1),
	(3, '197060021', 'Lê Hoàng Ân', 1, '25/04/2001', 'lhan-cntt14@tdu.edu.vn', '0', '0', '0356012330', '0356012330', 1),
	(4, '197060014', 'Phạm Nhựt Anh', 1, '03/03/2001', 'pnanh-cntt14@tdu.edu.vn', '0', '0', '0355721749', '0355721749', 1),
	(5, '197060001', 'Trần Tú Anh', 0, '08/09/2001', 'ttanh-cntt14@tdu.edu.vn', '0', '0', '0706341784', '0706341784', 1),
	(6, '197060045', 'Nguyễn Hoài Bảo', 1, '14/05/2000', 'nhbao-cntt14@tdu.edu.vn', '0', '0', '0834990255', '0834990255', 1),
	(7, '187060012', 'Thái Huỳnh Bảo', 1, '16/03/2000', 'thbao-cntt13@tdu.edu.vn', '0', '0', '0396439069', '0396439069', 1),
	(8, '197060024', 'Lê Thị Minh Châu', 0, '07/11/2000', 'ltmchau-cntt14@tdu.edu.vn', '0', '0', '0927315812', '0927315812', 1),
	(9, '197060054', 'Nguyễn Chí Công', 1, '24/5/2001', 'nccong-cntt14@tdu.edu.vn', '0', '0', '0836467812', '0836467812', 1),
	(10, '197060030', 'Nguyễn Hải Đăng', 1, '20/12/2001', 'nhdang-cntt14@tdu.edu.vn', '0', '0', '', '', 1),
	(11, '197060037', 'Bùi Hải Đăng', 1, '09/06/2000', 'bhdang-cntt14@tdu.edu.vn', '0', '0', '0366962727', '0366962727', 1),
	(12, '197060041', 'Nguyễn Quốc Đạt', 1, '08/01/2001', 'nqdat-cntt14@tdu.edu.vn', '0', '0', '0989397290', '0989397290', 1),
	(13, '197060008', 'Đỗ Đông Đầy', 1, '15/03/2000', 'ddday-cntt14@tdu.edu.vn', '0', '0', '0943158318', '0943158318', 1),
	(14, '197060043', 'Nguyễn Hữu Hậu', 1, '10/02/2001', 'nhhau-cntt14@tdu.edu.vn', '0', '0', '0366175434', '0366175434', 1),
	(15, '197060007', 'Trương Nguyễn Trung Hậu', 1, '04/06/2001', 'tnthau-cntt14@tdu.edu.vn', '0', '0', '0839751934', '0839751934', 1),
	(16, '197060018', 'Lê Thanh Hiệp', 1, '17/05/2001', 'lthiep-cntt14@tdu.edu.vn', '0', '0', '0794204960', '0794204960', 1),
	(17, '197060048', 'Nguyễn Trọng Hiếu', 1, '08/05/1999', 'nthieu-cntt14@tdu.edu.vn', '0', '0', '0915803705', '0915803705', 1),
	(18, '197060029', 'Nguyễn Văn Hồ', 1, '12/10/2000', 'nvho-cntt14@tdu.edu.vn', '0', '0', '0944320031', '0944320031', 1),
	(19, '197060044', 'Trần Thiện Hòa', 1, '07/05/2001', 'tthoa-cntt14@tdu.edu.vn', '0', '0', '0907826304', '0907826304', 1),
	(20, '197060063', 'Cam Tô Dương Hòa', 1, '20/04/2001', 'ctdhoa-cntt14@tdu.edu.vn', '0', '0', '0777725630', '0777725630', 1),
	(21, '197060005', 'Trần Nhựt Hòa', 1, '12/03/2001', 'tnhoa-cntt14@tdu.edu.vn', '0', '0', '0345534898', '0345534898', 1),
	(22, '197060032', 'Cao Quốc Huy', 1, '08/08/2001', 'cqhuy-cntt14@tdu.edu.vn', '0', '0', '0395935552', '0395935552', 1),
	(23, '197060052', 'Lê Nhật Huy', 1, '19/03/2001', 'lnhuy-cntt14@tdu.edu.vn', '0', '0', '0335798646', '0335798646', 1),
	(24, '197060059', 'Huỳnh Trường Huy', 1, '24/06/2001', 'hthuy-cntt14@tdu.edu.vn', '0', '0', '0389874326', '0389874326', 1),
	(25, '197060003', 'Lê Văn Tấn Khang', 1, '13/11/2001', 'lvtkhang-cntt14@tdu.edu.vn', '0', '0', '0981914296', '0981914296', 1),
	(26, '197060004', 'Lê Trọng Khang', 1, '09/10/2001', 'ltkhang-cntt14@tdu.edu.vn', '0', '0', '0941029402', '0941029402', 1),
	(27, '197060047', 'Nguyễn Đô La', 1, '20/09/2001', 'ndla-cntt14@tdu.edu.vn', '0', '0', '0916917092', '0916917092', 1),
	(28, '197060034', 'Nguyễn Thị Tiểu Mi', 0, '10/12/2001', 'nttmi-cntt14@tdu.edu.vn', '0', '0', '0949076408', '0949076408', 1),
	(29, '197060065', 'Lê Nguyễn Nhật Minh', 1, '10/05/2001', 'lnnminh-cntt14@tdu.edu.vn', '0', '0', '0338616088', '0338616088', 1),
	(30, '197060027', 'Phan Thị Kiều Mỵ', 0, '16/08/2001', 'ptkmy-cntt14@tdu.edu.vn', '0', '0', '0931029825', '0931029825', 1),
	(31, '197060026', 'Nguyễn Kim Ngân', 0, '15/12/2001', 'nkngan-cntt14@tdu.edu.vn', '0', '0', '0907430545', '0907430545', 1),
	(32, '197060042', 'Phạm Đức Nguyện', 1, '21/07/2001', 'pdnguyen-cntt14@tdu.edu.vn', '0', '0', '0358551814', '0358551814', 1),
	(33, '197060009', 'Tô Trọng Nhân', 1, '05/09/2001', 'ttnhan-cntt14@tdu.edu.vn', '0', '0', '0944321535', '0944321535', 1),
	(34, '197060062', 'Ngô Minh Nhật', 1, '12/05/2001', 'nmnhat-cntt14@tdu.edu.vn', '0', '0', '0706598681', '0706598681', 1),
	(35, '197060068', 'Nguyễn Thái Như', 0, '02/12/2000', 'ntnhu-cntt14@tdu.edu.vn', '0', '0', '0969682491', '0969682491', 1),
	(36, '197060038', 'Trần Thanh Niềm', 1, '18/02/2001', 'ttniem-cntt14@tdu.edu.vn', '0', '0', '0374755261', '0374755261', 1),
	(37, '197060012', 'Nguyễn Ngọc Phát', 1, '16/11/2001', 'nnphat-cntt14@tdu.edu.vn', '0', '0', '', '', 1),
	(38, '197060017', 'Phạm Trọng Phúc', 1, '19/02/2001', 'ptphuc-cntt14@tdu.edu.vn', '0', '0', '0971132108', '0971132108', 1),
	(39, '197060056', 'Nguyễn Triệu Phục', 1, '03/04/2001', 'ntphuc-cntt14@tdu.edu.vn', '0', '0', '0337547745', '0337547745', 1),
	(40, '197060057', 'Ngô Minh Quang', 1, '01/12/2001', 'nmquang-cntt14@tdu.edu.vn', '0', '0', '0397316141', '0397316141', 1),
	(41, '197060002', 'Trần Tú Quyên', 0, '08/09/2001', 'ttquyen-cntt14@tdu.edu.vn', '0', '0', '0703666480', '0703666480', 1),
	(42, '197060035', 'Phan Tấn Sang', 1, '24/12/2001', 'ptsang-cntt14@tdu.edu.vn', '0', '0', '0333164138', '0333164138', 1),
	(43, '197060006', 'Lê Tấn Sang', 1, '24/12/2001', 'ltsang-cntt14@tdu.edu.vn', '0', '0', '0842829908', '0842829908', 1),
	(44, '197060031', 'Nguyễn Huỳnh Tài', 1, '13/05/2001', 'nhtai-cntt14@tdu.edu.vn', '0', '0', '0813193503', '0813193503', 1),
	(45, '197060040', 'Nguyễn Quốc Thái', 1, '05/12/2000', 'nqthai-cntt14@tdu.edu.vn', '0', '0', '0368101000', '0368101000', 1),
	(46, '197060046', 'Đặng Thị Phương Thảo', 0, '28/11/2001', 'dtpthao-cntt14@tdu.edu.vn', '0', '0', '0907218240', '0907218240', 1),
	(47, '197060015', 'Võ Văn Thiện', 1, '03/09/2001', 'vvthien-cntt14@tdu.edu.vn', '0', '0', '+843524673', '+843524673', 1),
	(48, '197060053', 'Trần Phúc Thiện', 1, '21/06/2001', 'tpthien-cntt14@tdu.edu.vn', '0', '0', '0886712251', '0886712251', 1),
	(49, '197060019', 'Phạm Quốc Tính', 1, '07/02/2001', 'pqtinh-cntt14@tdu.edu.vn', '0', '0', '0948772142', '0948772142', 1),
	(50, '197060025', 'Hà Ngọc Trâm', 0, '08/09/2001', 'hntram-cntt14@tdu.edu.vn', '0', '0', '0948105242', '0948105242', 1),
	(51, '197060061', 'PHẠM KIỀU TRANG', 0, '18/05/2001', 'pktrang-cntt14@tdu.edu.vn', '0', '0', '0853599261', '0853599261', 1),
	(52, '197060051', 'Nguyễn Quốc Trung', 1, '26/09/1999', 'nqtrung-cntt14@tdu.edu.vn', '0', '0', '0836875749', '0836875749', 1),
	(53, '197060011', 'Trịnh Thanh Vẹn', 1, '10/10/2001', 'ttven-cntt14@tdu.edu.vn', '0', '0', '0948485660', '0948485660', 1),
	(54, '197060020', 'Nguyễn Hồ Triều Vĩ', 1, '07/08/2001', 'nhtvi-cntt14@tdu.edu.vn', '0', '0', '0372488077', '0372488077', 1),
	(55, '197060028', 'Cao Triệu Vĩ', 1, '14/11/2001', 'ctvi-cntt14@tdu.edu.vn', '0', '0', '0859400024', '0859400024', 1);

-- Dumping structure for table khoaluan.taikhoan
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT,
  `tentaikhoan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  `id_phannhom` int(11) NOT NULL,
  `id_phanquyen` int(11) NOT NULL,
  `id_nguoidung` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_taikhoan`),
  KEY `taikhoan_ibfk_1` (`id_phannhom`),
  KEY `taikhoan_ibfk_2` (`id_phanquyen`),
  CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`id_phannhom`) REFERENCES `phannhom` (`id_phannhom`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `taikhoan_ibfk_2` FOREIGN KEY (`id_phanquyen`) REFERENCES `phanquyen` (`id_phanquyen`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.taikhoan: ~55 rows (approximately)
INSERT INTO `taikhoan` (`id_taikhoan`, `tentaikhoan`, `email`, `matkhau`, `mota`, `id_phannhom`, `id_phanquyen`, `id_nguoidung`) VALUES
	(0, 'admin', 'admin@gmail.com', '123456', '', 1, 0, NULL),
	(1, 'Đặng Hoàng An', 'dhan-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 1),
	(2, 'Đào Bình An', 'dban-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 2),
	(3, 'Lê Hoàng Ân', 'lhan-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 3),
	(4, 'Phạm Nhựt Anh', 'pnanh-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 4),
	(5, 'Trần Tú Anh', 'ttanh-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 5),
	(6, 'Nguyễn Hoài Bảo', 'nhbao-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 6),
	(7, 'Thái Huỳnh Bảo', 'thbao-cntt13@tdu.edu.vn', '123456', 'sv', 3, 3, 7),
	(8, 'Lê Thị Minh Châu', 'ltmchau-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 8),
	(9, 'Nguyễn Chí Công', 'nccong-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 9),
	(10, 'Nguyễn Hải Đăng', 'nhdang-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 10),
	(11, 'Bùi Hải Đăng', 'bhdang-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 11),
	(12, 'Nguyễn Quốc Đạt', 'nqdat-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 12),
	(13, 'Đỗ Đông Đầy', 'ddday-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 13),
	(14, 'Nguyễn Hữu Hậu', 'nhhau-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 14),
	(15, 'Trương Nguyễn Trung Hậu', 'tnthau-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 15),
	(16, 'Lê Thanh Hiệp', 'lthiep-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 16),
	(17, 'Nguyễn Trọng Hiếu', 'nthieu-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 17),
	(18, 'Nguyễn Văn Hồ', 'nvho-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 18),
	(19, 'Trần Thiện Hòa', 'tthoa-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 19),
	(20, 'Cam Tô Dương Hòa', 'ctdhoa-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 20),
	(21, 'Trần Nhựt Hòa', 'tnhoa-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 21),
	(22, 'Cao Quốc Huy', 'cqhuy-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 22),
	(23, 'Lê Nhật Huy', 'lnhuy-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 23),
	(24, 'Huỳnh Trường Huy', 'hthuy-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 24),
	(25, 'Lê Văn Tấn Khang', 'lvtkhang-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 25),
	(26, 'Lê Trọng Khang', 'ltkhang-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 26),
	(27, 'Nguyễn Đô La', 'ndla-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 27),
	(28, 'Nguyễn Thị Tiểu Mi', 'nttmi-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 28),
	(29, 'Lê Nguyễn Nhật Minh', 'lnnminh-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 29),
	(30, 'Phan Thị Kiều Mỵ', 'ptkmy-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 30),
	(31, 'Nguyễn Kim Ngân', 'nkngan-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 31),
	(32, 'Phạm Đức Nguyện', 'pdnguyen-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 32),
	(33, 'Tô Trọng Nhân', 'ttnhan-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 33),
	(34, 'Ngô Minh Nhật', 'nmnhat-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 34),
	(35, 'Nguyễn Thái Như', 'ntnhu-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 35),
	(36, 'Trần Thanh Niềm', 'ttniem-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 36),
	(37, 'Nguyễn Ngọc Phát', 'nnphat-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 37),
	(38, 'Phạm Trọng Phúc', 'ptphuc-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 38),
	(39, 'Nguyễn Triệu Phục', 'ntphuc-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 39),
	(40, 'Ngô Minh Quang', 'nmquang-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 40),
	(41, 'Trần Tú Quyên', 'ttquyen-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 41),
	(42, 'Phan Tấn Sang', 'ptsang-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 42),
	(43, 'Lê Tấn Sang', 'ltsang-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 43),
	(44, 'Nguyễn Huỳnh Tài', 'nhtai-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 44),
	(45, 'Nguyễn Quốc Thái', 'nqthai-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 45),
	(46, 'Đặng Thị Phương Thảo', 'dtpthao-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 46),
	(47, 'Võ Văn Thiện', 'vvthien-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 47),
	(48, 'Trần Phúc Thiện', 'tpthien-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 48),
	(49, 'Phạm Quốc Tính', 'pqtinh-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 49),
	(50, 'Hà Ngọc Trâm', 'hntram-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 50),
	(51, 'PHẠM KIỀU TRANG', 'pktrang-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 51),
	(52, 'Nguyễn Quốc Trung', 'nqtrung-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 52),
	(53, 'Trịnh Thanh Vẹn', 'ttven-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 53),
	(54, 'Nguyễn Hồ Triều Vĩ', 'nhtvi-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 54),
	(55, 'Cao Triệu Vĩ', 'ctvi-cntt14@tdu.edu.vn', '123456', 'sv', 3, 3, 55);

-- Dumping structure for table khoaluan.tenkhaosat
CREATE TABLE IF NOT EXISTS `tenkhaosat` (
  `id_tenkhaosat` int(11) NOT NULL AUTO_INCREMENT,
  `tenkhaosat0` text NOT NULL,
  `mota` text NOT NULL,
  PRIMARY KEY (`id_tenkhaosat`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.tenkhaosat: ~2 rows (approximately)
INSERT INTO `tenkhaosat` (`id_tenkhaosat`, `tenkhaosat0`, `mota`) VALUES
	(1, 'Chương trình đào tạo', '2023'),
	(2, 'Cơ sở vật chất', '2023');

-- Dumping structure for table khoaluan.thong ke ket qua
CREATE TABLE IF NOT EXISTS `thong ke ket qua` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_dot` int(11) NOT NULL,
  `kohl` varchar(11) NOT NULL,
  `ithl` varchar(50) NOT NULL,
  `khahl` varchar(11) NOT NULL,
  `hl` varchar(10) NOT NULL,
  `rathl` varchar(11) NOT NULL,
  `per_kohl` varchar(11) NOT NULL,
  `per_ithl` varchar(11) NOT NULL,
  `per_khahl` varchar(11) NOT NULL,
  `per_hl` varchar(11) NOT NULL,
  `per_rathl` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.thong ke ket qua: ~0 rows (approximately)

-- Dumping structure for table khoaluan.thongke
CREATE TABLE IF NOT EXISTS `thongke` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kq1` int(11) NOT NULL,
  `kq2` int(11) NOT NULL,
  `kq3` int(11) NOT NULL,
  `kq4` int(11) NOT NULL,
  `kq5` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.thongke: ~3 rows (approximately)
INSERT INTO `thongke` (`id`, `kq1`, `kq2`, `kq3`, `kq4`, `kq5`) VALUES
	(1, 0, 0, 0, 0, 0),
	(2, 0, 0, 0, 0, 0),
	(3, 0, 0, 0, 0, 0);

-- Dumping structure for table khoaluan.trinhdo
CREATE TABLE IF NOT EXISTS `trinhdo` (
  `id_trinhdo` int(11) NOT NULL AUTO_INCREMENT,
  `ma_trinhdo` varchar(50) NOT NULL,
  `tentrinhdo` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  PRIMARY KEY (`id_trinhdo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.trinhdo: ~4 rows (approximately)
INSERT INTO `trinhdo` (`id_trinhdo`, `ma_trinhdo`, `tentrinhdo`, `mota`) VALUES
	(1, 'TD1', 'Tiến Sĩ', 'tiến sĩ'),
	(2, 'TD2', 'Thạc Sĩ', 'thạc sĩ'),
	(3, 'TD3', 'Giáo Sư', 'Giáo sư'),
	(4, 'TD4', 'Phó Giáo Sư', 'Phó giáo sư');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
