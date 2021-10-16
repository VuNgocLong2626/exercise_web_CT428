use bookstore;
create database bookstore;
drop database bookstore;
show tables;

select * from loaihanghoa;
drop table loaihanghoa;
CREATE TABLE `loaihanghoa`  (
  `MaLoaiHang` varchar(11) NOT NULL unique,
  `TenLoaiHang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL unique,
  PRIMARY KEY (`MaLoaiHang`)
);

select * from nhanvien;
drop table nhanvien;
CREATE TABLE `nhanvien`  (
  `MSNV` varchar(11) NOT NULL,
  `HoTenNV` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ChucVu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `SoDienThoai` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`MSNV`)
);

select * from hanghoa;
drop table hanghoa;
CREATE TABLE `hanghoa`  (
  `MSHH` varchar(11) NOT NULL,
  `TenHH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `QuyCach` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `Gia` decimal(10, 0) NOT NULL,
  `SoLuongHang` int(11) NOT NULL,
  `MaLoaiHang` varchar(11) NOT NULL,
  PRIMARY KEY (`MSHH`),
  INDEX `MaLoaiHang`(`MaLoaiHang`),
  CONSTRAINT `fk_MaLoaiHang_MaLoai_LoaiHang` FOREIGN KEY (`MaLoaiHang`) REFERENCES `loaihanghoa` (`MaLoaiHang`) ON DELETE RESTRICT ON UPDATE CASCADE
);

select * from hinhminhhoa;
drop table hinhminhhoa;
CREATE TABLE `hinhminhhoa`(
	`MaHinh` int(11) NOT NULL AUTO_INCREMENT, 
    `TenHinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
    `MSHH` varchar(11) NOT NULL,
    PRIMARY KEY (`MaHinh`),
	INDEX `MSHH`(`MSHH`),
	CONSTRAINT `fk_MSHH_MSHH_hanghoa` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`) ON DELETE RESTRICT ON UPDATE CASCADE
);

select * from khachhang;
drop table khachhang;
delete from khachhang where MSKH=1;
CREATE TABLE `khachhang`  (
  `MSKH` int(11) NOT NULL AUTO_INCREMENT,
  `HoTenKH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `TenCongTy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `SoDienThoai` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `SoFax` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`MSKH`) ,
  UNIQUE INDEX `SoDienThoai`(`SoDienThoai`)
)

select * from khachhang;
select * from diachikh;
drop table diachikh;
CREATE TABLE `diachikh`  (
  `MaDC` int(11) NOT NULL AUTO_INCREMENT,
  `DiaChi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `MSKH` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`MaDC`),
  CONSTRAINT `fk_MSKH_KhachHang_DiaChi` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`) ON DELETE RESTRICT ON UPDATE RESTRICT
);

select * from dathang;
drop table dathang;
CREATE TABLE `dathang`  (
  `SoDonDH` int(11) NOT NULL AUTO_INCREMENT,
  `MSKH` int(11) NOT NULL,
  `MSNV` varchar(11) DEFAULT NULL,
  `NgayDH` date NULL DEFAULT NULL,
  `NgayGH` date NULL DEFAULT NULL,
  `DiaChiGiao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci  DEFAULT NULL,
  `TrangThai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'Chưa xử lý',
  PRIMARY KEY (`SoDonDH`) ,
  CONSTRAINT `fk_MSKH_KhachHang_DatHang` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_MSNV_NhanVien_DatHang` FOREIGN KEY (`MSNV`) REFERENCES `nhanvien` (`MSNV`) ON DELETE RESTRICT ON UPDATE RESTRICT
);

select * from chitietdathang;
drop table chitietdathang;
CREATE TABLE `chitietdathang`  (
  `SoDonDH` int(11) NOT NULL,
  `MSHH` varchar(11) NOT NULL,
  `SoLuong` int(11) NULL DEFAULT 1,
  `GiaDatHang` decimal(10) NULL DEFAULT 0,
  `GiamGia` decimal(10) NULL DEFAULT 0,
  PRIMARY KEY (`SoDonDH`, `MSHH`),
  CONSTRAINT `fk_MSHH_HangHoa_ChiTiet` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_SoDonHH_DatHang_ChiTiet` FOREIGN KEY (`SoDonDH`) REFERENCES `dathang` (`SoDonDH`) ON DELETE CASCADE ON UPDATE CASCADE
);
select * from `hanghoa` h join `hinhminhhoa` hh on hh.MSHH = h.MSHH;
select h.MSHH, h.TenHH, hh.TenHinh, lh.TenLoaiHang, h.QuyCach, h.Gia, h.SoluongHang from `hanghoa` h join `hinhminhhoa` hh on hh.MSHH = h.MSHH join `loaihanghoa` lh on h.MaLoaiHang = lh.MaLoaiHang;

SELECT MSNV,password FROM nhanvien WHERE MSNV = 'B1805784';

SELECT * FROM hanghoa hh JOIN hinhminhhoa hmh ON hh.MSHH = hmh.MSHH WHERE hh.MaLoaiHang = 'MSL001' ;

SELECT * FROM hanghoa hh JOIN hinhminhhoa hmh ON hh.MSHH = hmh.MSHH JOIN loaihanghoa lh ON lh.MaLoaiHang = hh.MaLoaiHang WHERE hh.MSHH='GT001';

SELECT * FROM khachhang kh JOIN diachikh dc ON kh.MSKH = dc.MSKH WHERE kh.MSKH = 2;

SELECT DATE(NOW()) today;
SELECT CURDATE() today;

SELECT * FROM dathang where MSKH = 2 ORDER BY SoDonDH DESC limit 1;

SELECT * FROM hanghoa WHERE MSHH = 'GT001';

SELECT * FROM dathang where MSKH = 2 ;

SELECT * FROM dathang WHERE TrangThai = 'Chưa xử lý'; 

SELECT * FROM dathang WHERE TrangThai != 'Chưa xử lý'; 

SELECT * FROM chitietdathang WHERE SoDonDH=2;