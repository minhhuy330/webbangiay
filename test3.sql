-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 04:40 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test3`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL DEFAULT '0',
  `DuongDan` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `DuongDan`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE IF NOT EXISTS `binhluan` (
  `NoiDung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ngay` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dmdactinhsp`
--

CREATE TABLE IF NOT EXISTS `dmdactinhsp` (
  `IdDacTinh` int(11) NOT NULL DEFAULT '0',
  `TenDacTinh` varchar(255) NOT NULL,
  PRIMARY KEY (`IdDacTinh`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dmdactinhsp`
--

INSERT INTO `dmdactinhsp` (`IdDacTinh`, `TenDacTinh`) VALUES
(1, 'San pham ban chay'),
(3, 'San pham moi nhat'),
(4, 'San pham hot');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE IF NOT EXISTS `giohang` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IdKhahcHang` int(11) NOT NULL,
  `IdSanPham` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `TongTien` int(100) NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `hinhcon`
--

CREATE TABLE IF NOT EXISTS `hinhcon` (
  `Idhinh_Con` int(11) NOT NULL AUTO_INCREMENT,
  `DuongDan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `IdSanPham` int(11) NOT NULL,
  PRIMARY KEY (`Idhinh_Con`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=151 ;

--
-- Dumping data for table `hinhcon`
--

INSERT INTO `hinhcon` (`Idhinh_Con`, `DuongDan`, `TrangThai`, `IdSanPham`) VALUES
(1, 'Images_Con\\1_1.jpg', '', 1),
(2, 'Images_Con\\1_2.jpg', '', 1),
(3, 'Images_Con\\1_3.jpg', '', 1),
(4, 'Images_Con\\2_1.jpg', '', 2),
(5, 'Images_Con\\2_2.jpg', '', 2),
(6, 'Images_Con\\2_3.jpg', '', 2),
(7, 'Images_Con\\3_1.jpg', '', 3),
(8, 'Images_Con\\3_2.jpg', '', 3),
(9, 'Images_Con\\3_3.jpg', '', 3),
(10, 'Images_Con\\4_1.jpg', '', 4),
(11, 'Images_Con\\4_2.jpg', '', 4),
(12, 'Images_Con\\4_3.jpg', '', 4),
(13, 'Images_Con\\5_1.jpg', '', 5),
(14, 'Images_Con\\5_2.jpg', '', 5),
(15, 'Images_Con\\5_3.jpg', '', 5),
(16, 'Images_Con\\6_1.jpg', '', 6),
(17, 'Images_Con\\6_2.jpg', '', 6),
(18, 'Images_Con\\6_3.jpg', '', 6),
(19, 'Images_Con\\7_1.jpg', '', 7),
(20, 'Images_Con\\7_2.jpg', '', 7),
(21, 'Images_Con\\7_3.jpg', '', 7),
(22, 'Images_Con\\8_1.jpg', '', 8),
(23, 'Images_Con\\8_2.jpg', '', 8),
(24, 'Images_Con\\8_3.jpg', '', 8),
(25, 'Images_Con\\9_1.jpg', '', 9),
(26, 'Images_Con\\9_2.jpg', '', 9),
(27, 'Images_Con\\9_3.jpg', '', 9),
(28, 'Images_Con\\10_1.jpg', '', 10),
(29, 'Images_Con\\10_2.jpg', '', 10),
(30, 'Images_Con\\10_3.jpg', '', 10),
(31, 'Images_Con\\11_1.jpg', '', 11),
(32, 'Images_Con\\11_2.jpg', '', 11),
(33, 'Images_Con\\11_3.jpg', '', 11),
(34, 'Images_Con\\12_1.jpg', '', 12),
(35, 'Images_Con\\12_2.jpg', '', 12),
(36, 'Images_Con\\12_3.jpg', '', 12),
(37, 'Images_Con\\13_1.jpg', '', 13),
(38, 'Images_Con\\13_2.jpg', '', 13),
(39, 'Images_Con\\13_3.jpg', '', 13),
(40, 'Images_Con\\14_1.jpg', '', 14),
(41, 'Images_Con\\14_2.jpg', '', 14),
(42, 'Images_Con\\14_3.jpg', '', 14),
(43, 'Images_Con\\15_1.jpg', '', 15),
(44, 'Images_Con\\15_2.jpg', '', 15),
(45, 'Images_Con\\15_3.jpg', '', 15),
(46, 'Images_Con\\16_1.jpg', '', 16),
(47, 'Images_Con\\16_2.jpg', '', 16),
(48, 'Images_Con\\16_3.jpg', '', 16),
(49, 'Images_Con\\17_1.jpg', '', 17),
(50, 'Images_Con\\17_2.jpg', '', 17),
(51, 'Images_Con\\17_3.jpg', '', 17),
(52, 'Images_Con\\18_1.jpg', '', 18),
(53, 'Images_Con\\18_2.jpg', '', 18),
(54, 'Images_Con\\18_3.jpg', '', 18),
(55, 'Images_Con\\19_1.jpg', '', 19),
(56, 'Images_Con\\19_2.jpg', '', 19),
(57, 'Images_Con\\19_3.jpg', '', 19),
(58, 'Images_Con\\20_1.jpg', '', 20),
(59, 'Images_Con\\20_2.jpg', '', 20),
(60, 'Images_Con\\20_3.jpg', '', 20),
(61, 'Images_Con\\21_1.jpg', '', 21),
(62, 'Images_Con\\21_2.jpg', '', 21),
(63, 'Images_Con\\21_3.jpg', '', 21),
(64, 'Images_Con\\22_1.jpg', '', 22),
(65, 'Images_Con\\22_2.jpg', '', 22),
(66, 'Images_Con\\22_3.jpg', '', 22),
(67, 'Images_Con\\23_1.jpg', '', 23),
(68, 'Images_Con\\23_2.jpg', '', 23),
(69, 'Images_Con\\23_3.jpg', '', 23),
(70, 'Images_Con\\24_1.jpg', '', 24),
(71, 'Images_Con\\24_2.jpg', '', 24),
(72, 'Images_Con\\24_3.jpg', '', 24),
(73, 'Images_Con\\25_1.jpg', '', 25),
(74, 'Images_Con\\25_2.jpg', '', 25),
(75, 'Images_Con\\25_3.jpg', '', 25),
(76, 'Images_Con\\26_1.jpg', '', 26),
(77, 'Images_Con\\26_2.jpg', '', 26),
(78, 'Images_Con\\26_3.jpg', '', 26),
(79, 'Images_Con\\27_1.jpg', '', 27),
(80, 'Images_Con\\27_2.jpg', '', 27),
(81, 'Images_Con\\27_3.jpg', '', 27),
(82, 'Images_Con\\28_1.jpg', '', 28),
(83, 'Images_Con\\28_2.jpg', '', 28),
(84, 'Images_Con\\28_3.jpg', '', 28),
(85, 'Images_Con\\29_1.jpg', '', 29),
(86, 'Images_Con\\29_2.jpg', '', 29),
(87, 'Images_Con\\29_3.jpg', '', 29),
(88, 'Images_Con\\30_1.jpg', '', 30),
(89, 'Images_Con\\30_2.jpg', '', 30),
(90, 'Images_Con\\30_3.jpg', '', 30),
(91, 'Images_Con\\31_1.jpg', '', 31),
(92, 'Images_Con\\31_2.jpg', '', 31),
(93, 'Images_Con\\31_3.jpg', '', 31),
(94, 'Images_Con\\32_1.jpg', '', 32),
(95, 'Images_Con\\32_2.jpg', '', 32),
(96, 'Images_Con\\32_3.jpg', '', 32),
(97, 'Images_Con\\33_1.jpg', '', 33),
(98, 'Images_Con\\33_2.jpg', '', 33),
(99, 'Images_Con\\33_3.jpg', '', 33),
(100, 'Images_Con\\34_1.jpg', '', 34),
(101, 'Images_Con\\34_2.jpg', '', 34),
(102, 'Images_Con\\34_3.jpg', '', 34),
(103, 'Images_Con\\35_1.jpg', '', 35),
(104, 'Images_Con\\35_2.jpg', '', 35),
(105, 'Images_Con\\35_3.jpg', '', 35),
(106, 'Images_Con\\36_1.jpg', '', 36),
(107, 'Images_Con\\36_2.jpg', '', 36),
(108, 'Images_Con\\36_3.jpg', '', 36),
(109, 'Images_Con\\37_1.jpg', '', 37),
(110, 'Images_Con\\37_2.jpg', '', 37),
(111, 'Images_Con\\37_3.jpg', '', 37),
(112, 'Images_Con\\38_1.jpg', '', 38),
(113, 'Images_Con\\38_2.jpg', '', 38),
(114, 'Images_Con\\38_3.jpg', '', 38),
(115, 'Images_Con\\39_1.jpg', '', 39),
(116, 'Images_Con\\39_2.jpg', '', 39),
(117, 'Images_Con\\39_3.jpg', '', 39),
(118, 'Images_Con\\40_1.jpg', '', 40),
(119, 'Images_Con\\40_2.jpg', '', 40),
(120, 'Images_Con\\40_3.jpg', '', 40),
(121, 'Images_Con\\41_1.jpg', '', 41),
(122, 'Images_Con\\41_2.jpg', '', 41),
(123, 'Images_Con\\41_3.jpg', '', 41),
(124, 'Images_Con\\42_1.jpg', '', 42),
(125, 'Images_Con\\42_2.jpg', '', 42),
(126, 'Images_Con\\42_3.jpg', '', 42),
(127, 'Images_Con\\43_1.jpg', '', 43),
(128, 'Images_Con\\43_2.jpg', '', 43),
(129, 'Images_Con\\43_3.jpg', '', 43),
(130, 'Images_Con\\44_1.jpg', '', 44),
(131, 'Images_Con\\44_2.jpg', '', 44),
(132, 'Images_Con\\44_3.jpg', '', 44),
(133, 'Images_Con\\45_1.jpg', '', 45),
(134, 'Images_Con\\45_2.jpg', '', 45),
(135, 'Images_Con\\45_3.jpg', '', 45),
(136, 'Images_Con\\46_1.jpg', '', 46),
(137, 'Images_Con\\46_2.jpg', '', 46),
(138, 'Images_Con\\46_3.jpg', '', 46),
(139, 'Images_Con\\47_1.jpg', '', 47),
(140, 'Images_Con\\47_2.jpg', '', 47),
(141, 'Images_Con\\47_3.jpg', '', 47),
(142, 'Images_Con\\48_1.jpg', '', 48),
(143, 'Images_Con\\48_2.jpg', '', 48),
(144, 'Images_Con\\48_3.jpg', '', 48),
(145, 'Images_Con\\49_1.jpg', '', 49),
(146, 'Images_Con\\49_2.jpg', '', 49),
(147, 'Images_Con\\49_3.jpg', '', 49),
(148, 'Images_Con\\50_1.jpg', '', 50),
(149, 'Images_Con\\50_2.jpg', '', 50),
(150, 'Images_Con\\50_3.jpg', '', 50);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `HoKH` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenKH` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `TrangThai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `IdLoai` int(11) NOT NULL AUTO_INCREMENT,
  `TenLoai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IdLoai`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`IdLoai`, `TenLoai`, `TrangThai`) VALUES
(1, 'CONVERSE', ''),
(2, 'VANS', ''),
(3, ' CONS - ONE STAR', ''),
(4, ' JACK PURCELL', ''),
(5, ' KID', ''),
(6, 'VANS-ABD', ''),
(7, 'PALIUM', '');

-- --------------------------------------------------------

--
-- Table structure for table `saleoff`
--

CREATE TABLE IF NOT EXISTS `saleoff` (
  `Id` int(11) NOT NULL,
  `Giagiam` int(11) NOT NULL,
  `IdSP` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `saleoff`
--

INSERT INTO `saleoff` (`Id`, `Giagiam`, `IdSP`) VALUES
(1, 50, 2),
(2, 45, 1),
(1, 50, 2),
(2, 45, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `parentID` int(2) NOT NULL,
  `TenSP` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `IdLoaiSP` int(11) NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  `SoLuong` int(100) NOT NULL,
  `Gia` float NOT NULL,
  `Size` varchar(11) NOT NULL,
  `MoTa` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GiamGia` float NOT NULL,
  `TrangThai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SLUG` varchar(255) DEFAULT NULL,
  `IdDacTinh` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`Id`, `parentID`, `TenSP`, `IdLoaiSP`, `HinhAnh`, `SoLuong`, `Gia`, `Size`, `MoTa`, `GiamGia`, `TrangThai`, `SLUG`, `IdDacTinh`) VALUES
(1, 0, 'Chuck Taylor All Star 1970s Vintage Canvas Mountaineering', 1, '1.jpg', 10, 1350000, '24cm', 'Gam màu tím nổi bật với dây thắt được phối màu sắc mới mẻ', 1500000, ' ', 'Chuck Taylor All Star 1970s Vintage Canvas Mountaineering0-1', 1),
(2, 22, 'Chuck Taylor All Star 1970s Vintage Canvas Mountaineering', 7, '2.jpg', 10, 1450000, '25cm', 'Mẫu 1970s có viền cao su cao hơn hẳn so với classic', 1600000, '', 'Chuck Taylor All Star 1970s Vintage Canvas Mountaineering-2', 1),
(3, 1, 'Chuck Taylor All Star 1970s Goretex', 1, '3.jpg', 10, 2100000, '27cm', 'Chất liệu vải Goretex tổng hợp giúp chống thấm nước, chống mài mòn cao, phần gót chân được cách điệu với dòng chữ "Goretex" lạ mắt, logo ở phần thân cùng dây giày màu đen kết hợp với màu cam nổi bật của đôi giày giúp bạn trở nên nổi bật hơn', 1950000, ' ', 'Chuck Taylor All Star 1970s Goretex-3', 3),
(4, 22, 'Chuck Taylor All Star 70s Full Gator', 7, '4.jpg', 10, 1950000, '28cm', 'Chất liệu da cao cấp kết hợp với da rắn được cách điệu trên thân giày và logo Chuck Taylor được in chìm, phần đế được làm mới với kiểu dáng da rắn tạo điểm thu hút cho sản phẩm', 2100000, ' ', 'Chuck Taylor All Star 70s Full Gator-4', 1),
(5, 1, 'Chuck Taylor All Star Leather Gator', 1, '5.jpg', 10, 1650000, '29cm', 'Chất liệu da cao cấp kết hợp với da rắn được cách điệu trên phần lưỡi gà cùng logo Chuck Taylor, khuyên xỏ kim loại màu vàng sang trọng, cổ cao hiện đại giúp bạn trẻ trung và năng động hơn', 1800000, ' ', 'Chuck Taylor All Star Leather Gator-5', 3),
(6, 22, 'Chuck Taylor All Star Wonderland', 7, '6.jpg', 10, 1450000, '28cm', 'Họa tiết đan dệt với các màu chủ đạo đen, xám, hồng cùng logo màu đen giúp phần thân giày nổi bật hơn, phần viền đế màu đen cùng logo thương hiệu ở gót chân', 1500000, ' ', 'Chuck Taylor All Star Wonderland-6', 3),
(7, 22, 'Chuck Taylor All Star Seasonal Canvas Color', 7, '7.jpg', 10, 950000, '29cm', 'Sử dụng chất liệu vải Canvas với kiểu dáng cổ điển kết hợp cùng với tông màu xanh sang trọng, tạo cảm giác thoải mái, nhẹ nhàng khi di chuyển', 1100000, ' ', 'Chuck Taylor All Star Seasonal Canvas Color-7', 4),
(8, 1, 'Chuck Taylor All Star Post Game Leather', 1, '8.jpg', 10, 1650000, '24cm', 'Với thiết kế cổ điển cùng chất liệu da cao cấp, phần logo được may trực tiếp vào thân giày với dòng chữ thương hiệu màu đen cùng khoen xỏ kim loại tạo nét sang trọng cho sản phẩm', 1800000, ' ', 'Chuck Taylor All Star Post Game Leather-8', 1),
(9, 0, 'Jack Purcell Jack Letterman', 4, '9.jpg', 10, 1800000, '28cm', 'Chất liệu da cao cấp cùng lớp da lộn được cách điệu ở phần viền thân giày, tông màu pastel nhẹ nhàng giúp các bạn phối đồ dễ dàng hơn, lót đệm EVA của dòng Jack Purcell tạo cảm giác thoải mái khi di chuyển', 2000000, ' ', 'Jack Purcell Jack Letterman-9', 4),
(10, 1, 'Chuck Taylor All Star 1970s', 1, '10.jpg', 10, 1600000, '27cm', 'Đế giày được làm cao hơn, phần cao su được phủ một lớp bóng tạo điểm nhấn riêng cho dòng 1970s, cùng với chất vải dày Canvas khiến cho dòng giày Chuck TayLor All Star 1970s được các bạn trẻ yêu mến và tìm kiếm.', 1800000, ' ', 'Chuck Taylor All Star 1970s-10', 3),
(11, 0, 'Vans Old Skool Pig Suede Scooter', 6, '11.jpg', 11, 2000000, '26cm', 'Chất liệu da lộn cao cấp toàn thân giày tạo cảm giác thoải mái khi di chuyển, họa tiết gợn sóng quen thuộc trên dòng Vans Old Skool, phần đế được làm cao hơn và không có viền xung quanh.', 2100000, ' ', 'Vans Old Skool Pig Suede Scooter-11', 3),
(12, 11, 'Vans Old Skool OTW Repeat', 6, '12.jpg', 10, 1600000, '26cm', 'Với các họa tiết chữ "Vans Off The Wall" được phân bố khắp thân giày, họa tiết gợn sóng được phối với chất liệu da cùng dây thắt đen giúp đôi giày trở nên mới mẻ và nổi bật hơn.', 1800000, ' ', 'Vans Old Skool OTW Repeat-12', 1),
(13, 11, 'Vans Authentic OTW Repeat', 6, '13.jpg', 10, 1600000, '26cm', 'Họa tiết Tiger trên phần thân giày, viền đế nổi bật với tông carô trắng đen kết hợp cùng logo Vans, dây xỏ được làm mới với các dòng chữ tạo cảm giác lạ mắt cho đôi giày', 1800000, ' ', 'Vans Authentic OTW Repeat-13', 3),
(14, 11, 'Vans Sk8-Hi Tiger Check', 6, '14.jpg', 10, 1600000, '26cm', 'Họa tiết Tiger trên phần thân giày, viền đế nổi bật với tông carô trắng đen kết hợp cùng logo Vans, dây xỏ được làm mới với các dòng chữ tạo cảm giác lạ mắt cho đôi giày', 1800000, ' ', 'Vans Sk8-Hi Tiger Check-14', 3),
(15, 11, 'Vans Sk8-Hi Reissue', 6, '15.jpg', 10, 1600000, '26cm', 'Hoạ tiết carô nổi bật được khắc hoạ ở viền đế với dòng chữ Vans nổi bật và phần mũi giày được phối màu đen tạo điểm nhấn, các dòng được khắc hoạ ở phần lưỡi gà và dấu ngã được cách điệu bằng hoạ tiết đen nổi bật', 1700000, ' ', 'Vans Sk8-Hi Reissue-15', 1),
(16, 1, 'Chuck Taylor All Star Worn in', 1, '16.jpg', 10, 1300000, '26cm', 'Với chất liệu vải denim thời thượng, kết hợp cùng chất liệu da được phối sọc sau gót giày, bộ đệm OrthoLite giúp đôi chân vận động thoải mái suốt ngày dài', 1500000, ' ', 'Chuck Taylor All Star Worn in-16', 4),
(17, 0, 'Vans Old Skool', 3, '17.jpg', 10, 1600000, '26cm', 'Mẫu giày được cách điệu từ Vans Oldskool Classic với màu White/Black phối với hoạc tiết đầu lâu tạo nên phong cách mới mẻ nhưng vẫn rất dễ phối đồ.', 1750000, ' ', 'Vans Old Skool-17', 1),
(18, 9, 'Converse X Hello Kitty Chuck Taylor All Star', 4, '18.jpg', 10, 1600000, '26cm', 'Bộ sưu tập Hello Kitty x Converse với hình ảnh của cô mèo xứ Sanrio được phối nổi bật trên sản phẩm, Hello Kitty thực sự rất phù hợp và sẽ là điểm nhấn nổi bật khiến cho bộ đồng phục của bạn trở nên nổi bật hơn giữa đám đông.', 1850000, ' ', 'Converse X Hello Kitty Chuck Taylor All Star-18', 3),
(19, 9, 'Chuck Taylor All Star 1970s', 4, '19.jpg', 10, 1600000, '26cm', 'giày được làm cao hơn, phần cao su được phủ một lớp bóng tạo điểm nhấn riêng cho dòng 1970s, cùng với chất vải dày Canvas khiến cho dòng giày Chuck TayLor All Star 1970s được các bạn trẻ yêu mến và tìm kiếm.', 1950000, ' ', 'Chuck Taylor All Star 1970s-19', 1),
(20, 17, 'Vans UA Authentic Zebra', 3, '20.jpg', 10, 1600000, '26cm', 'Với những họa tiết sọc "ngựa vằn" bao gồm hết phần thân giày ,sản phẩm trở nên khá cá tính và phù hợp với mọi lứa tuổi', 1850000, ' ', 'Vans UA Authentic Zebra-20', 1),
(21, 17, 'Vans UA Classic Slip-On Off the Wall Check', 3, '21.jpg', 10, 1400000, '26cm', 'Với những họa tiết caro cùng biểu tượng "Vans off the wall" chủ đạo bao gồm hết phần thân giày ,sản phẩm trở nên khá cá tính và phù hợp với mọi lứa tuổi', 1450000, ' ', 'Vans UA Classic Slip-On Off the Wall Check-21', 3),
(22, 0, 'Palladium S_U_B Mid CVS', 7, '22.jpg', 10, 1300000, '26cm', 'Chất liệu Canvas quen thuộc nhưng được xử lý một cách mềm mại và tinh tế, kết hợp cùng sự tỉ mỉ trong từng đường kim mũi chỉ gọn gàng khiến cho S_U_B MID CVS mang một outlook bắt mắt, thanh lịch', 1450000, ' ', 'Palladium S_U_B Mid CVS-22', 3),
(23, 17, 'Vans ATCQ AUTHENTIC', 3, '23.jpg', 10, 1200000, '26cm', 'Với những họa tiết được lấy cảm hứng từ nhóm nhạc hiphop ATCQ ,sản phẩm trở nên khá cá tính và phù hợp với mọi lứa tuổi', 1450000, ' ', 'Vans ATCQ AUTHENTIC-23', 4),
(24, 1, 'Chuck Taylor All Star Ox x Nike Flyknit Multi', 1, '24.jpg', 10, 1100000, '26cm', 'Với chất liệu Flyknit từ Nike, công nghệ này sử dụng các loại sợi đặc biệt được đan một cách khoa học tạo nên một miếng vật liệu liền mạch mềm như len nhưng rất chắc chắn và đàn hồi tốt ', 1450000, ' ', 'Chuck Taylor All Star Ox x Nike Flyknit Multi-24', 4),
(25, 1, 'Chuck Taylor All Star Fashion Leather', 1, '25.jpg', 10, 1600000, '26cm', 'Chất liệu cao cấp, phối đơn giản, kiểu dáng thiết kế đẹp, dễ mix đồ là các đặc điểm để khiến mẫu giày này luôn được các bạn trẻ yêu mến dù bạn là học sinh hay giới văn phòng vẫn luôn đúng "style"', 1650000, ' ', 'Chuck Taylor All Star Fashion Leather-25', 1),
(26, 0, 'Palladium Blanc Ox', 5, '26.jpg', 10, 1260000, '26cm', 'Với kiến thức về chất liệu trong công nghiệp chế tạo bánh xe máy bay, đã tạo nên những chiếc đế bền bỉ, kết hợp với cách thiết kế độc đáo, dễ dàng phối hợp nhiều loại trang phục, giá bán lại hợp lý, đáp ứng mọi yêu cầu từ các bạn trẻ.', 1300000, ' ', 'Palladium Blanc Ox-26', 3),
(27, 17, 'Vans Authentic', 3, '27.jpg', 10, 1139000, '27cm', 'Với thiết kế đơn giản đi kèm với chất lượng, thiết kế phần đế cao su với độ bám tốt và bền thích hợp cho các bạn yêu bộ môn ván trượt, các mẫu Vans "classic" truyền thống luôn là những mẫu nhanh cháy hàng nhất.', 1300000, ' ', 'Vans Authentic-27', 3),
(28, 17, 'Vans Classic Slip On', 3, '28.jpg', 10, 1300000, '26cm', 'Giới thiết kế đơn giản đi kèm với chất lượng, thiết kế phần đế cao su với độ bám tốt và bền thích hợp cho các bạn yêu bộ môn ván trượt, các mẫu Vans "classic" truyền thống luôn là những mẫu nhanh cháy hàng nhất.', 1169000, ' ', 'Vans Classic Slip On-28', 4),
(29, 17, 'Vans Old Skool Zip Leather', 3, '29.jpg', 10, 20690000, '26cm', 'Với chất liệu bằng da màu trắng sang trọng cách điệu cùng khoá kéo, sản phẩm với thiết kế đơn giản phù hợp các bạn năng động yêu thích tông màu cơ bản, phần đế cao su với độ bám tốt và bền thích hợp cho các bạn yêu thể thao', 2300000, ' ', 'Vans Old Skool Zip Leather-29', 1),
(30, 17, 'Vans Authentic Classic Camo', 3, '30.jpg', 10, 1150000, '26cm', 'Với thiết kế mạnh mẽ phối màu Camo, mẫu giày khá hợp cho những bạn trẻ với cá tính manh, thiết kế phần đế cao su với độ bám tốt và bền thích hợp cho các bạn yêu bộ môn ván trượt cũng như đi chơi dạo phố.', 1300000, ' ', 'Vans Authentic Classic Camo-30', 1),
(31, 17, 'Vans Authentic', 3, '31.jpg', 10, 1150000, '26cm', 'Với thiết kế đơn giản đi kèm với chất lượng, thiết kế phần đế cao su với độ bám tốt và bền thích hợp cho các bạn yêu bộ môn ván trượt, các mẫu Vans "classic" truyền thống luôn là những mẫu nhanh cháy hàng nhất.', 1300000, ' ', 'Vans Authentic-31', 4),
(32, 1, ' Chuck Taylor All Star', 1, '32.jpg', 10, 450000, '26cm', 'Với chất liệu tốt từ Converse, mẫu mã vừa đơn giản, đẹp mà không gây hại, kích ứng bàn chân của bé. Các gam màu tươi sáng sẽ làm các bé trở nên sành điệu và ngầu hơn.', 600000, ' ', ' Chuck Taylor All Star-32', 4),
(33, 26, 'Converse Kids Chuck Taylor All Star', 5, '33.jpg', 10, 585000, '26cm', 'ới chất liệu tốt từ Converse, mẫu mã vừa đơn giản, đẹp mà không gây hại, kích ứng bàn chân của bé. Các gam màu tươi sáng sẽ làm các bé trở nên sành điệu và ngầu hơn.', 650000, ' ', 'Converse Kids Chuck Taylor All Star-33', 3),
(34, 1, 'Chuck Taylor One Star PL 76 Foundational Leather', 1, '34.jpg', 10, 1350000, '26cm', 'Với chất liệu da cao cấp cùng hai ngôi sao đặc trưng của dòng Cons - Onestar bên hai phần thân giày, kiểu dáng cổ điển tạo nét sang trọng cho sản phẩm', 1600000, ' ', 'Chuck Taylor One Star PL 76 Foundational Leather-34', 3),
(35, 1, 'Chuck Taylor One Star Player', 1, '25.jpg', 10, 1053000, '26cm', 'Với chất liệu vải Canvas cùng hai ngôi sao đặc trưng của dòng Cons - Onestar bên hai phần thân giày, kiểu dáng cổ điển tạo nét sang trọng cho sản phẩm "style"', 1300000, ' ', 'Chuck Taylor One Star Player-35', 3),
(36, 1, 'Chuck Taylor One Star Pro OG Update', 1, '36.jpg', 10, 1350000, '26cm', 'Vì là giày thể thao, lóp đệm ở gót giày One Star được hỗ trợ kỹ thuật tối ưu, góp phần gia tăng sự thoải mái khi sử dụng cho các hoạt động thể thao. ', 1500000, ' ', 'Chuck Taylor One Star Pro OG Update-36', 4),
(37, 0, 'Chuck Taylor All Star II Basket Weave Fuse', 2, '37.jpg', 10, 1530000, '27cm', 'Chuck Taylor All Star II Basket Weave Fuse sử dụng chất liệu vải Textile cao cấp với họa tiết dệt, tạo nên những ô hở nhỏ mang đến cảm giác thông thoáng, lót giày Lunarlon đến từ Nike tạo cảm giác êm chân suốt ngày dài.', 1700000, ' ', 'Chuck Taylor All Star II Basket Weave Fuse-37', 3),
(38, 37, 'Chuck Taylor All Star II Woven Low Top', 2, '38.jpg', 10, 1440000, '26cm', 'Chất liệu vải Textile cao cấp với họa tiết dệt, tạo nên những ô hở nhỏ mang đến cảm giác thông thoáng, lót giày Lunarlon đến từ Nike tạo cảm giác êm chân suốt ngày dài.', 1600000, ' ', 'Chuck Taylor All Star II Woven Low Top-38', 3),
(39, 37, 'Chuck Taylor All Star Snake Woven', 2, '39.jpg', 10, 10800000, '26cm', 'Lấy ý tưởng từ lớp da của loài rắn, sản phẩm với thiết kế họa tiết da rắn bắt mắt với tông trắng đen sang trọng cùng logo tròn với chất liệu da.', 1200000, ' ', 'Chuck Taylor All Star Snake Woven-39', 3),
(40, 26, 'Chuck Taylor All Star 1970s', 5, '40.jpg', 10, 1440000, '26cm', 'Đế giày được làm cao hơn, phần cao su được phủ một lớp bóng tạo điểm nhấn riêng cho dòng 1970s, cùng với chất vải dày Canvas khiến cho dòng giày Chuck TayLor All Star 1970s được các bạn trẻ yêu mến và tìm kiếm.', 1600000, ' ', 'Chuck Taylor All Star 1970s-40', 1),
(41, 1, 'Chuck Taylor All Star 1970s Vintage Canvas', 1, '41.jpg', 10, 1260000, '26cm', 'Đế giày được làm cao hơn, phần cao su được phủ một lớp bóng tạo điểm nhấn riêng cho dòng 1970s, cùng với chất vải dày Canvas khiến cho dòng giày Chuck TayLor All Star 1970s được các bạn trẻ yêu mến và tìm kiếm.', 1400000, ' ', 'Chuck Taylor All Star 1970s Vintage Canvas-41', 3),
(42, 37, 'Chuck Taylor All Star 1970s Vintage Canvas', 2, '42.jpg', 10, 1350000, '26cm', 'Đế giày được làm cao hơn, phần cao su được phủ một lớp bóng tạo điểm nhấn riêng cho dòng 1970s, cùng với chất vải dày Canvas khiến cho dòng giày Chuck TayLor All Star 1970s được các bạn trẻ yêu mến và tìm kiếm.', 1500000, ' ', 'Chuck Taylor All Star 1970s Vintage Canvas-42', 3),
(43, 17, '', 3, '43.jpg', 10, 1440000, '26cm', 'Đế giày được làm cao hơn, phần cao su được phủ một lớp bóng tạo điểm nhấn riêng cho dòng 1970s, cùng với chất vải dày Canvas khiến cho dòng giày Chuck TayLor All Star 1970s được các bạn trẻ yêu mến và tìm kiếm.', 1600000, ' ', 'Chuck Taylor All Star 70 Poplin Shirt-43', 3),
(44, 9, 'Chuck Taylor All Star II', 4, '44.jpg', 10, 1300000, '26cm', 'Converse Chuck Taylor II phiên bản cải tiến của mẫu giày Chuck Taylor All Star đình đám với thiết kế mẫu giày cổ điển mang đến biểu tượng của Converse.', 1600000, ' ', 'Chuck Taylor All Star II-44', 3),
(45, 26, 'Chuck Taylor All Star Seasonal Color', 5, '25.jpg', 10, 900000, '26cm', 'Chuck Taylor All Star Seasonal Color sử dụng chất liệu vải Canvas với kiểu dáng cổ điển đem đến sự thanh lịch, sang trọng mà còn tạo cảm giác thoải mái, nhẹ nhàng khi di chuyển.', 1000000, ' ', 'Chuck Taylor All Star Seasonal Color-45', 4),
(46, 1, 'Chuck Taylor All Star II Neon', 1, '46.jpg', 10, 500000, '26cm', 'Chuck II Neon với màu sắc bắt mắt, được thiết kế giành riêng cho phái nữ, bộ đệm Lurnalon giúp bạn thoải mái suốt ngày dài, sản phẩm được tặng kèm cặp dây trắng để thay đổi theo sở thích cá nhân', 1600000, ' ', 'Chuck Taylor All Star II Neon-46', 1),
(47, 37, 'Chuck Taylor All Star Gemma Mono Leather', 2, '47.jpg', 10, 1150000, '27cm', 'Chất liệu cao cấp, phối đơn giản, kiểu dáng thiết kế đẹp, dễ mix đồ là các đặc điểm để khiến mẫu giày này luôn được các bạn trẻ yêu mến dù bạn là học sinh hay giới văn phòng vẫn luôn đúng "style"', 1600000, ' ', 'Chuck Taylor All Star Gemma Mono Leather-47', 3),
(48, 1, 'Chuck Taylor All Star Dainty Engineered Lace Dots', 3, '48.jpg', 10, 990000, '26cm', 'Với kiểu dáng đế mỏng nữ tính tạo cảm giác nhẹ nhàng và thoái mái cho đôi bàn chân suốt ngày dài', 1100000, ' ', 'Chuck Taylor All Star Dainty Engineered Lace Dots-48', 3),
(49, 9, 'Chuck Taylor All Star II Basket Weave Fuse', 4, '49.jpg', 10, 1530000, '26cm', 'Chuck Taylor All Star II Basket Weave Fuse sử dụng chất liệu vải Textile cao cấp với họa tiết dệt, tạo nên những ô hở nhỏ mang đến cảm giác thông thoáng, lót giày Lunarlon đến từ Nike tạo cảm giác êm chân suốt ngày dài.', 1700000, ' ', 'Chuck Taylor All Star II Basket Weave Fuse-49', 3),
(50, 26, 'Chuck Taylor One Star Pro OG Update', 5, '50.jpg', 10, 1350000, '26cm', 'Vì là giày thể thao, lóp đệm ở gót giày One Star được hỗ trợ kỹ thuật tối ưu, góp phần gia tăng sự thoải mái khi sử dụng cho các hoạt động thể thao. ', 1500000, ' ', 'Chuck Taylor One Star Pro OG Update-50', 4);

-- --------------------------------------------------------

--
-- Table structure for table `slidehinh`
--

CREATE TABLE IF NOT EXISTS `slidehinh` (
  `id` int(11) NOT NULL,
  `DuongDan` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slidehinh`
--

INSERT INTO `slidehinh` (`id`, `DuongDan`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
