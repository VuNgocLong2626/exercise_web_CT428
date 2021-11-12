-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: quanlydathang1
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `chitietdathang`
--

DROP TABLE IF EXISTS `chitietdathang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chitietdathang` (
  `SoDonDH` int NOT NULL,
  `MSHH` varchar(11) NOT NULL,
  `SoLuong` int DEFAULT '1',
  `GiaDatHang` decimal(10,0) DEFAULT '0',
  `GiamGia` decimal(10,0) DEFAULT '0',
  PRIMARY KEY (`SoDonDH`,`MSHH`),
  KEY `fk_MSHH_HangHoa_ChiTiet` (`MSHH`),
  CONSTRAINT `fk_MSHH_HangHoa_ChiTiet` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_SoDonHH_DatHang_ChiTiet` FOREIGN KEY (`SoDonDH`) REFERENCES `dathang` (`SoDonDH`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chitietdathang`
--

LOCK TABLES `chitietdathang` WRITE;
/*!40000 ALTER TABLE `chitietdathang` DISABLE KEYS */;
INSERT INTO `chitietdathang` VALUES (1,'GT002',3,690000,0),(2,'TN001',1,123,0),(3,'VH001',5,700000,0),(4,'VH001',3,420000,0),(4,'VH002',4,560000,0),(5,'GT004',1,125000,0),(5,'VH001',1,140000,0);
/*!40000 ALTER TABLE `chitietdathang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dathang`
--

DROP TABLE IF EXISTS `dathang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dathang` (
  `SoDonDH` int NOT NULL AUTO_INCREMENT,
  `MSKH` int NOT NULL,
  `MSNV` varchar(11) DEFAULT NULL,
  `NgayDH` date DEFAULT NULL,
  `NgayGH` date DEFAULT NULL,
  `DiaChiGiao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TrangThaiDH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Chưa xử lý',
  PRIMARY KEY (`SoDonDH`),
  KEY `fk_MSKH_KhachHang_DatHang` (`MSKH`),
  KEY `fk_MSNV_NhanVien_DatHang` (`MSNV`),
  CONSTRAINT `fk_MSKH_KhachHang_DatHang` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_MSNV_NhanVien_DatHang` FOREIGN KEY (`MSNV`) REFERENCES `nhanvien` (`MSNV`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dathang`
--

LOCK TABLES `dathang` WRITE;
/*!40000 ALTER TABLE `dathang` DISABLE KEYS */;
INSERT INTO `dathang` VALUES (1,1,'B1805784','2021-10-30','2021-11-01','Bạc Liêu','Đang xử lý'),(2,1,NULL,'2021-10-30','2021-11-01','Bạc Liêu','Chưa xử lý'),(3,1,NULL,'2021-10-30','2021-11-01','Cần Thơ','Chưa xử lý'),(4,1,'B1805784','2021-10-30','2021-11-01','Cần Thơ','Đang xử lý'),(5,2,'B1805784','2021-11-11','2021-11-13','Cần thơ','Đang xử lý');
/*!40000 ALTER TABLE `dathang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diachikh`
--

DROP TABLE IF EXISTS `diachikh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `diachikh` (
  `MaDC` int NOT NULL AUTO_INCREMENT,
  `DiaChi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MSKH` int DEFAULT NULL,
  PRIMARY KEY (`MaDC`),
  KEY `fk_MSKH_KhachHang_DiaChi` (`MSKH`),
  CONSTRAINT `fk_MSKH_KhachHang_DiaChi` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diachikh`
--

LOCK TABLES `diachikh` WRITE;
/*!40000 ALTER TABLE `diachikh` DISABLE KEYS */;
INSERT INTO `diachikh` VALUES (1,'Cần Thơ',1),(2,'Bac Lieu',2);
/*!40000 ALTER TABLE `diachikh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hanghoa`
--

DROP TABLE IF EXISTS `hanghoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hanghoa` (
  `MSHH` varchar(11) NOT NULL,
  `TenHH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `QuyCach` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Gia` decimal(10,0) NOT NULL,
  `SoLuongHang` int NOT NULL,
  `MaLoaiHang` varchar(11) NOT NULL,
  PRIMARY KEY (`MSHH`),
  KEY `MaLoaiHang` (`MaLoaiHang`),
  CONSTRAINT `fk_MaLoaiHang_MaLoai_LoaiHang` FOREIGN KEY (`MaLoaiHang`) REFERENCES `loaihanghoa` (`MaLoaiHang`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hanghoa`
--

LOCK TABLES `hanghoa` WRITE;
/*!40000 ALTER TABLE `hanghoa` DISABLE KEYS */;
INSERT INTO `hanghoa` VALUES ('GT001','Python cơ bản','Python là ngôn ngữ mã nguồn mở và cho phép cộng đồng có thể đóng góp bằng cách bổ sung các module, các kho hàm số, thư viện thuật toán. Điều này làm cho Python phát triển BÙNG NỔ trong giới khoa học và giáo dục đại học. Đặc biệt trong một số ngành mũi nhọn của CNTT như IoT, trí tuệ nhân tạo (AI), dữ liệu lớn (big data) và CMCN 4.0, các phát triển rất nhanh thời gian gần đây của công nghệ đều gắn liền với Python.',125000,7,'MSL001'),('GT002','Lập trình hướng đối trong Java','Lập trình hướng đối tượng (Object Oriented Programming – OOP) là một trong những kỹ thuật lập trình rất quan trọng và sử dụng nhiều hiện nay. Hầu hết các ngôn ngữ lập trình hiện nay như Java, PHP, .NET, Ruby, Python… đều hỗ trợ OOP. Vậy lập trình hướng đối tượng là gì? Và các nguyên lý cơ bản trong OOP cần biết là gì?',230000,2,'MSL001'),('GT003','Lập trình C','Ngôn ngữ lập trình C là một ngôn ngữ mệnh lệnh được phát triển từ đầu thập niên 1970 bởi Dennis Ritchie để dùng trong hệ điều hành UNIX. Từ đó, ngôn ngữ này đã lan rộng ra nhiều hệ điều hành khác và trở thành một những ngôn ngữ phổ dụng nhất. C là ngôn ngữ rất có hiệu quả và được ưa chuộng nhất để viết các phần mềm hệ thống, mặc dù nó cũng được dùng cho việc viết các ứng dụng. Ngoài ra, C cũng thường được dùng làm phương tiện giảng dạy trong khoa học máy tính mặc dù ngôn ngữ này không được thiết kế dành cho người nhập môn.',125000,5,'MSL001'),('GT004','Lập trình web','Lập trình web là công việc với nhiệm vụ nhận tất cả dữ liệu từ các bộ phận thiết kế và chuyển thành một website hoàn chỉnh . Một khi xây dựng trang web xong thì lập trình viên sẽ phân chia công việc quản trị website',125000,3,'MSL001'),('TN001','Truyện tranh Conan - Tập 72','Truyện tranh Thám tử lừng danh Conan - NXB Kim Đồng\r\nNội dung: Mở đầu câu truyện, cậu học sinh trung học 16 tuổi Shinichi Kudo bị biến thành cậu bé Conan Edogawa. Shinichi trong phần đầu của Thám tử lừng danh Conan được miêu tả là một thám tử học đường. Trong một lần đi chơi công viên \"Miền Nhiệt đới\" với cô bạn từ thuở nhỏ (cũng là bạn gái) Ran Mori , cậu bị dính vào vụ án một hành khách trên Chuyến tàu tốc hành trong công viên, Kishida , bị giết trong một vụ án cắt đầu rùng rợn.',54000,6,'MSL002'),('VH001','THẾ GIỚI SẼ CHẲNG CÓ GÌ THAY ĐỔI KỂ CẢ KHI BẠN KHÓC','Khởi đầu và kết thúc của tình yêu không bao giờ rõ ràng. Ta có thể tổ chức kỉ niệm ngày bắt đầu tình yêu, một trăm ngày, một năm, hay một ngàn ngày, nhưng để ghi nhớ được ngày đầu tiên tình yêu chớm nở quả không phải việc dễ.',140000,6,'MSL003'),('VH002','TÔI VẪN SỐNG','Tôi Vẫn Sống - Jess hiện tại chỉ còn một thân một mình. Căn lều cô ở đã bị hủy hoại. Nếu không nhanh nhanh, cái lạnh sẽ giết chết cô trước khi cô có thời gian để lo lắng về thức ăn, chưa kể những kẻ rình rập với súng đạn và dã tâm.Tuy nhiên cô gái vẫn sống - tính đến thời điểm này.',140000,10,'MSL003');
/*!40000 ALTER TABLE `hanghoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hinhhanghoa`
--

DROP TABLE IF EXISTS `hinhhanghoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hinhhanghoa` (
  `MaHinh` int NOT NULL AUTO_INCREMENT,
  `TenHinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MSHH` varchar(11) NOT NULL,
  PRIMARY KEY (`MaHinh`),
  KEY `MSHH` (`MSHH`),
  CONSTRAINT `fk_MSHH_MSHH_hanghoa` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hinhhanghoa`
--

LOCK TABLES `hinhhanghoa` WRITE;
/*!40000 ALTER TABLE `hinhhanghoa` DISABLE KEYS */;
INSERT INTO `hinhhanghoa` VALUES (1,'GT001.jpg','GT001'),(2,'GT002.jpg','GT002'),(3,'GT003.jpg','GT003'),(4,'GT004.jpg','GT004'),(5,'TN001.jpg','TN001'),(6,'VH001.jpg','VH001'),(7,'VH002.jpg','VH002');
/*!40000 ALTER TABLE `hinhhanghoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `khachhang` (
  `MSKH` int NOT NULL AUTO_INCREMENT,
  `HoTenKH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TenCongTy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoDienThoai` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoFax` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MSKH`),
  UNIQUE KEY `SoDienThoai` (`SoDienThoai`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `khachhang`
--

LOCK TABLES `khachhang` WRITE;
/*!40000 ALTER TABLE `khachhang` DISABLE KEYS */;
INSERT INTO `khachhang` VALUES (1,'Vũ Ngọc Long','DH cần Thơ','0828764625','123456','123'),(2,'Vũ Ngọc Kiều Vy','bac lieu','0123456789','123','123');
/*!40000 ALTER TABLE `khachhang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loaihanghoa`
--

DROP TABLE IF EXISTS `loaihanghoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `loaihanghoa` (
  `MaLoaiHang` varchar(11) NOT NULL,
  `TenLoaiHang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MaLoaiHang`),
  UNIQUE KEY `MaLoaiHang` (`MaLoaiHang`),
  UNIQUE KEY `TenLoaiHang` (`TenLoaiHang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loaihanghoa`
--

LOCK TABLES `loaihanghoa` WRITE;
/*!40000 ALTER TABLE `loaihanghoa` DISABLE KEYS */;
INSERT INTO `loaihanghoa` VALUES ('MSL001','Giáo trình'),('MSL003','Sách Văn học'),('MSL002','Thiếu nhi');
/*!40000 ALTER TABLE `loaihanghoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nhanvien`
--

DROP TABLE IF EXISTS `nhanvien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nhanvien` (
  `MSNV` varchar(11) NOT NULL,
  `HoTenNV` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ChucVu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoDienThoai` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MSNV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nhanvien`
--

LOCK TABLES `nhanvien` WRITE;
/*!40000 ALTER TABLE `nhanvien` DISABLE KEYS */;
INSERT INTO `nhanvien` VALUES ('B1805784','Vũ Ngọc Long','Giám Đốc','0828764625','long2000');
/*!40000 ALTER TABLE `nhanvien` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-12 18:03:59
