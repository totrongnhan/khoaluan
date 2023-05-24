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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.danhgiacsvc: ~1 rows (approximately)
INSERT INTO `danhgiacsvc` (`id`, `mot`, `hai`, `ba`, `bon`, `nam`, `sau`, `bay`, `tam`, `chin`, `review`, `time`) VALUES
	(4, 1, 1, NULL, 1, 1, 1, 1, 1, 1, 'ddddd', '2023-05-09 11:25:15');

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

-- Dumping structure for table khoaluan.donvi
CREATE TABLE IF NOT EXISTS `donvi` (
  `id_donvi` int(11) NOT NULL AUTO_INCREMENT,
  `ma_donvi` varchar(50) NOT NULL,
  `tendonvi` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  PRIMARY KEY (`id_donvi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.donvi: ~3 rows (approximately)
INSERT INTO `donvi` (`id_donvi`, `ma_donvi`, `tendonvi`, `mota`) VALUES
	(1, 'DV1', 'Khoa', 'đơn vị chức năng chính trong trường đại học, có trách nhiệm về giảng dạy, nghiên cứu và đào tạo.'),
	(2, 'DV2', 'Phòng Kế hoạch Tài chính', 'đơn vị chịu trách nhiệm về quản lý tài chính và kế hoạch cho trường đại học.'),
	(3, 'DV3', 'Trung tâm Hỗ trợ sinh viên', 'đơn vị cung cấp các dịch vụ hỗ trợ sinh viên, bao gồm tư vấn tâm lý, hỗ trợ tài chính, hỗ trợ việc làm và sinh hoạt.');

-- Dumping structure for table khoaluan.dotkhaosat
CREATE TABLE IF NOT EXISTS `dotkhaosat` (
  `id_dot` int(11) NOT NULL AUTO_INCREMENT,
  `tendot` varchar(50) NOT NULL,
  `tgbatdau` datetime NOT NULL,
  `tgketthuc` datetime NOT NULL,
  PRIMARY KEY (`id_dot`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.dotkhaosat: ~0 rows (approximately)

-- Dumping structure for table khoaluan.giangvien
CREATE TABLE IF NOT EXISTS `giangvien` (
  `id_gv` int(11) NOT NULL AUTO_INCREMENT,
  `ma_gv` varchar(50) NOT NULL,
  `ten_gv` varchar(30) NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `ngaysinh` date NOT NULL,
  `email` varchar(10) DEFAULT NULL,
  `diachi_lienlac` text DEFAULT NULL,
  `sdt2` varchar(10) NOT NULL,
  `sdt1` varchar(10) NOT NULL,
  `diachi_lthuongtru` text NOT NULL,
  `id_donvi` int(11) NOT NULL,
  `id_trinhdo` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  PRIMARY KEY (`id_gv`),
  KEY `id_donvi` (`id_donvi`),
  KEY `id_taikhoan` (`id_taikhoan`),
  KEY `id_trinhdo` (`id_trinhdo`),
  CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`id_donvi`) REFERENCES `donvi` (`id_donvi`),
  CONSTRAINT `giangvien_ibfk_2` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id_taikhoan`),
  CONSTRAINT `giangvien_ibfk_3` FOREIGN KEY (`id_trinhdo`) REFERENCES `trinhdo` (`id_trinhdo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.giangvien: ~0 rows (approximately)

-- Dumping structure for table khoaluan.khoahoc
CREATE TABLE IF NOT EXISTS `khoahoc` (
  `id_khoahoc` int(11) NOT NULL AUTO_INCREMENT,
  `tenkhoahoc` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  PRIMARY KEY (`id_khoahoc`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.khoahoc: ~4 rows (approximately)
INSERT INTO `khoahoc` (`id_khoahoc`, `tenkhoahoc`, `mota`) VALUES
	(1, 'Khóa14', '2019'),
	(5, 'Khóa15', '2020'),
	(30, 'Khóa17', '2022'),
	(31, '123', 'nguyen nhan');

-- Dumping structure for table khoaluan.loaikhaosat
CREATE TABLE IF NOT EXISTS `loaikhaosat` (
  `id_loaiks` int(11) NOT NULL AUTO_INCREMENT,
  `tenloaiks` varchar(50) NOT NULL,
  PRIMARY KEY (`id_loaiks`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.loaikhaosat: ~0 rows (approximately)

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.lophoc: ~3 rows (approximately)
INSERT INTO `lophoc` (`id_lophoc`, `tenlophoc`, `mota`, `id_nganhhoc`, `id_khoahoc`) VALUES
	(1, 'CNTT14', 'aaaaa', 1, 1),
	(2, 'CNTT15', 'nguyen nhan nhan', 1, 1),
	(11, 'CNTT15', 'nguyen nhan', 1, 1);

-- Dumping structure for table khoaluan.nganhhoc
CREATE TABLE IF NOT EXISTS `nganhhoc` (
  `id_nganhhoc` int(11) NOT NULL AUTO_INCREMENT,
  `tennganhhoc` text NOT NULL,
  `mota` text NOT NULL,
  PRIMARY KEY (`id_nganhhoc`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.nganhhoc: ~8 rows (approximately)
INSERT INTO `nganhhoc` (`id_nganhhoc`, `tennganhhoc`, `mota`) VALUES
	(1, 'công nghệ thông tin', ''),
	(2, 'ddd', 'nguyen nhan'),
	(3, 'ddd', '123'),
	(4, 'ddd', '123'),
	(5, 'cntt', 'ffffffffffff'),
	(6, 'công nghệ thong tin 13', 'nguyen nhan'),
	(7, 'cntt', 'nguyen nhan'),
	(8, 'ddd', 'd');

-- Dumping structure for table khoaluan.phannhom
CREATE TABLE IF NOT EXISTS `phannhom` (
  `id_phannhom` int(11) NOT NULL AUTO_INCREMENT,
  `tenphannhom` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  PRIMARY KEY (`id_phannhom`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.phannhom: ~3 rows (approximately)
INSERT INTO `phannhom` (`id_phannhom`, `tenphannhom`, `mota`) VALUES
	(1, 'nhom admin', ''),
	(2, 'nhom canbo', ''),
	(3, 'nhom sinhvien', '');

-- Dumping structure for table khoaluan.phanquyen
CREATE TABLE IF NOT EXISTS `phanquyen` (
  `id_phanquyen` int(11) NOT NULL AUTO_INCREMENT,
  `tenphanquyen` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  PRIMARY KEY (`id_phanquyen`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.phanquyen: ~4 rows (approximately)
INSERT INTO `phanquyen` (`id_phanquyen`, `tenphanquyen`, `mota`) VALUES
	(0, 'admin', ''),
	(1, 'canbo', ''),
	(2, 'giangvien', ''),
	(3, 'sinhvien', '');

-- Dumping structure for table khoaluan.sinhvien
CREATE TABLE IF NOT EXISTS `sinhvien` (
  `id_sv` int(11) NOT NULL AUTO_INCREMENT,
  `ma_sv` varchar(50) NOT NULL,
  `ten_sv` varchar(50) NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `ngaysinh` date NOT NULL,
  `email` varchar(10) NOT NULL,
  `diachithuongtru` text NOT NULL,
  `diachilienlac` text NOT NULL,
  `sdt1` varchar(10) NOT NULL,
  `sdt2` varchar(10) NOT NULL,
  `id_lophoc` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  PRIMARY KEY (`id_sv`),
  KEY `id_lophoc` (`id_lophoc`),
  KEY `id_taikhoan` (`id_taikhoan`),
  CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`id_lophoc`) REFERENCES `lophoc` (`id_lophoc`),
  CONSTRAINT `sinhvien_ibfk_2` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id_taikhoan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.sinhvien: ~0 rows (approximately)
INSERT INTO `sinhvien` (`id_sv`, `ma_sv`, `ten_sv`, `gioitinh`, `ngaysinh`, `email`, `diachithuongtru`, `diachilienlac`, `sdt1`, `sdt2`, `id_lophoc`, `id_taikhoan`) VALUES
	(1, '197060009', 'Tô Trọng Nhân', 1, '2001-09-05', 'totrongnha', 'cần thơ', 'cần thơ', '0944322555', '0944321556', 1, 0);

-- Dumping structure for table khoaluan.taikhoan
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT,
  `tentaikhoan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  `id_phannhom` int(11) NOT NULL,
  `id_phanquyen` int(11) NOT NULL,
  PRIMARY KEY (`id_taikhoan`),
  KEY `id_phannhom` (`id_phannhom`),
  KEY `id_phanquyen` (`id_phanquyen`),
  CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`id_phannhom`) REFERENCES `phannhom` (`id_phannhom`),
  CONSTRAINT `taikhoan_ibfk_2` FOREIGN KEY (`id_phanquyen`) REFERENCES `phanquyen` (`id_phanquyen`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table khoaluan.taikhoan: ~3 rows (approximately)
INSERT INTO `taikhoan` (`id_taikhoan`, `tentaikhoan`, `email`, `matkhau`, `mota`, `id_phannhom`, `id_phanquyen`) VALUES
	(0, 'admin', 'admin@gmail.com', '123456', '0', 1, 0),
	(1, 'sinhvien', 'totrongnhan123@gmail.com', '123456', '1', 3, 3),
	(2, 'canbo', 'nhan@gmail.com', '123456', '', 2, 1);

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
