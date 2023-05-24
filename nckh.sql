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


-- Dumping database structure for nckh
CREATE DATABASE IF NOT EXISTS `nckh` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `nckh`;

-- Dumping structure for table nckh.canbo
CREATE TABLE IF NOT EXISTS `canbo` (
  `id_can_bo` int(11) NOT NULL AUTO_INCREMENT,
  `ma_can_bo` varchar(50) NOT NULL,
  `ten_can_bo` text DEFAULT NULL,
  `gioi_tinh` tinyint(4) DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dia_chi_thuong_tru` text DEFAULT NULL,
  `dia_chi_lien_lac` text DEFAULT NULL,
  `so_dien_thoai_1` varchar(50) DEFAULT NULL,
  `so_dien_thoai_2` varchar(50) DEFAULT NULL,
  `so_cccd` varchar(50) DEFAULT NULL,
  `id_don_vi` int(11) DEFAULT NULL,
  `id_trinh_do` int(11) DEFAULT NULL,
  `id_tai_khoan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_can_bo`) USING BTREE,
  KEY `FK_canbo_donvi` (`id_don_vi`),
  KEY `FK_canbo_trinhdo` (`id_trinh_do`),
  KEY `FK_canbo_taikhoan` (`id_tai_khoan`),
  CONSTRAINT `FK_canbo_donvi` FOREIGN KEY (`id_don_vi`) REFERENCES `donvi` (`id_don_vi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_canbo_taikhoan` FOREIGN KEY (`id_tai_khoan`) REFERENCES `taikhoan` (`id_tai_khoan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_canbo_trinhdo` FOREIGN KEY (`id_trinh_do`) REFERENCES `trinhdo` (`id_trinh_do`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table nckh.canbo: ~0 rows (approximately)
INSERT INTO `canbo` (`id_can_bo`, `ma_can_bo`, `ten_can_bo`, `gioi_tinh`, `ngay_sinh`, `email`, `dia_chi_thuong_tru`, `dia_chi_lien_lac`, `so_dien_thoai_1`, `so_dien_thoai_2`, `so_cccd`, `id_don_vi`, `id_trinh_do`, `id_tai_khoan`) VALUES
	(1, '123123', 'Giảng viên 1', 0, '2023-03-23', 'gv1@gmail.com', 'a', 'd', '0923456789', '0923456789', '2131231231', 1, 1, NULL);

-- Dumping structure for table nckh.donvi
CREATE TABLE IF NOT EXISTS `donvi` (
  `id_don_vi` int(11) NOT NULL AUTO_INCREMENT,
  `ten_don_vi` varchar(50) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  PRIMARY KEY (`id_don_vi`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table nckh.donvi: ~0 rows (approximately)
INSERT INTO `donvi` (`id_don_vi`, `ten_don_vi`, `mo_ta`) VALUES
	(1, 'Khoa Kỹ Thuật Công nghệ', NULL);

-- Dumping structure for table nckh.giangvien
CREATE TABLE IF NOT EXISTS `giangvien` (
  `id_giang_vien` int(11) NOT NULL AUTO_INCREMENT,
  `ma_giang_vien` varchar(50) NOT NULL,
  `ten_giang_vien` text DEFAULT NULL,
  `gioi_tinh` tinyint(4) DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dia_chi_thuong_tru` text DEFAULT NULL,
  `dia_chi_lien_lac` text DEFAULT NULL,
  `so_dien_thoai_1` varchar(50) DEFAULT NULL,
  `so_dien_thoai_2` varchar(50) DEFAULT NULL,
  `so_cccd` varchar(50) DEFAULT NULL,
  `id_don_vi` int(11) DEFAULT NULL,
  `id_trinh_do` int(11) DEFAULT NULL,
  `id_tai_khoan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_giang_vien`) USING BTREE,
  KEY `FK_giangvien_donvi` (`id_don_vi`) USING BTREE,
  KEY `FK_giangvien_trinhdo` (`id_trinh_do`) USING BTREE,
  KEY `FK_giangvien_taikhoan` (`id_tai_khoan`) USING BTREE,
  CONSTRAINT `FK_giangvien_donvi` FOREIGN KEY (`id_don_vi`) REFERENCES `donvi` (`id_don_vi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_giangvien_taikhoan` FOREIGN KEY (`id_tai_khoan`) REFERENCES `taikhoan` (`id_tai_khoan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_giangvien_trinhdo` FOREIGN KEY (`id_trinh_do`) REFERENCES `trinhdo` (`id_trinh_do`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table nckh.giangvien: ~0 rows (approximately)

-- Dumping structure for table nckh.khoahoc
CREATE TABLE IF NOT EXISTS `khoahoc` (
  `id_khoa_hoc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khoa_hoc` varchar(50) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  PRIMARY KEY (`id_khoa_hoc`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table nckh.khoahoc: ~0 rows (approximately)

-- Dumping structure for table nckh.lophoc
CREATE TABLE IF NOT EXISTS `lophoc` (
  `id_lop_hoc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_lop_hoc` varchar(50) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  `id_khoa_hoc` int(11) DEFAULT NULL,
  `id_nganh_hoc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_lop_hoc`) USING BTREE,
  KEY `FK_lophoc_khoahoc` (`id_khoa_hoc`) USING BTREE,
  KEY `FK_lophoc_nganhhoc` (`id_nganh_hoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table nckh.lophoc: ~0 rows (approximately)

-- Dumping structure for table nckh.nganhhoc
CREATE TABLE IF NOT EXISTS `nganhhoc` (
  `id_nganh_hoc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nganh_hoc` varchar(50) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  PRIMARY KEY (`id_nganh_hoc`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table nckh.nganhhoc: ~0 rows (approximately)

-- Dumping structure for table nckh.phannhom
CREATE TABLE IF NOT EXISTS `phannhom` (
  `id_phan_nhom` int(11) NOT NULL AUTO_INCREMENT,
  `ten_phan_nhom` varchar(50) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  PRIMARY KEY (`id_phan_nhom`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table nckh.phannhom: ~0 rows (approximately)
INSERT INTO `phannhom` (`id_phan_nhom`, `ten_phan_nhom`, `mo_ta`) VALUES
	(1, 'admin', NULL);

-- Dumping structure for table nckh.phanquyen
CREATE TABLE IF NOT EXISTS `phanquyen` (
  `id_phan_quyen` int(11) NOT NULL AUTO_INCREMENT,
  `ten_phan_quyen` varchar(50) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  PRIMARY KEY (`id_phan_quyen`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table nckh.phanquyen: ~0 rows (approximately)
INSERT INTO `phanquyen` (`id_phan_quyen`, `ten_phan_quyen`, `mo_ta`) VALUES
	(1, 'admin', NULL);

-- Dumping structure for table nckh.sinhvien
CREATE TABLE IF NOT EXISTS `sinhvien` (
  `id_sinh_vien` int(11) NOT NULL AUTO_INCREMENT,
  `ma_sinh_vien` varchar(50) NOT NULL,
  `ten_sinh_vien` text DEFAULT NULL,
  `gioi_tinh` tinyint(4) DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dia_chi_thuong_tru` text DEFAULT NULL,
  `dia_chi_lien_lac` text DEFAULT NULL,
  `so_dien_thoai_1` varchar(50) DEFAULT NULL,
  `so_dien_thoai_2` varchar(50) DEFAULT NULL,
  `so_cccd` varchar(50) DEFAULT NULL,
  `id_lop_hoc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_sinh_vien`) USING BTREE,
  KEY `FK_sinhvien_lophoc` (`id_lop_hoc`),
  CONSTRAINT `FK_sinhvien_lophoc` FOREIGN KEY (`id_lop_hoc`) REFERENCES `lophoc` (`id_lop_hoc`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table nckh.sinhvien: ~0 rows (approximately)

-- Dumping structure for table nckh.taikhoan
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `id_tai_khoan` int(11) NOT NULL AUTO_INCREMENT,
  `ten_tai_khoan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `trang_thai` varchar(50) NOT NULL DEFAULT '0',
  `id_phan_quyen` int(11) DEFAULT NULL,
  `id_phan_nhom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tai_khoan`),
  KEY `FK_taikhoan_phanquyen` (`id_phan_quyen`),
  KEY `FK_taikhoan_phannhom` (`id_phan_nhom`),
  CONSTRAINT `FK_taikhoan_phannhom` FOREIGN KEY (`id_phan_nhom`) REFERENCES `phannhom` (`id_phan_nhom`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_taikhoan_phanquyen` FOREIGN KEY (`id_phan_quyen`) REFERENCES `phanquyen` (`id_phan_quyen`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nckh.taikhoan: ~0 rows (approximately)
INSERT INTO `taikhoan` (`id_tai_khoan`, `ten_tai_khoan`, `email`, `mat_khau`, `trang_thai`, `id_phan_quyen`, `id_phan_nhom`) VALUES
	(1, 'admin', 'admin@gmail.com', '123456', '1', 1, 1);

-- Dumping structure for table nckh.trinhdo
CREATE TABLE IF NOT EXISTS `trinhdo` (
  `id_trinh_do` int(11) NOT NULL AUTO_INCREMENT,
  `ten_trinh_do` varchar(50) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  PRIMARY KEY (`id_trinh_do`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table nckh.trinhdo: ~0 rows (approximately)
INSERT INTO `trinhdo` (`id_trinh_do`, `ten_trinh_do`, `mo_ta`) VALUES
	(1, 'Giảng viên', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
