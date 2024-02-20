-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 02:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noithat`
--

-- --------------------------------------------------------

--
-- Table structure for table `bosuutap`
--

CREATE TABLE `bosuutap` (
  `id` int(3) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `hinh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bosuutap`
--

INSERT INTO `bosuutap` (`id`, `ten`, `hinh`) VALUES
(2, 'Mùa hè', 'about_us_slide2.jpg'),
(3, 'Giản dị', 'about_us_slide3.jpg'),
(4, 'Ấm cúng', 'about_us_slide1.jpg'),
(5, 'wefawef', 'g1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dienthoai` varchar(10) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `trangthai` int(3) NOT NULL,
  `hangduocmua` mediumtext NOT NULL,
  `loinhac` mediumtext NOT NULL,
  `tonggiatri` int(20) NOT NULL,
  `giamgia` int(3) NOT NULL,
  `thanhtien` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id`, `ten`, `email`, `dienthoai`, `diachi`, `trangthai`, `hangduocmua`, `loinhac`, `tonggiatri`, `giamgia`, `thanhtien`) VALUES
(18, 'wretrhs', 'vesna@hi.com', '1234567890', '3asetrytuhazed', 0, 'Sản phẩm thuộc id: 9 ,số lượng: 4. ', 'waretgnyars', 1600000, 0, 1600000),
(20, 'wretrhs', 'bestwaifu@cg.com', '1234567890', '3asetrytuhazed', 1, 'Sản phẩm thuộc id: 34 ,số lượng: 7. ', 'waretgnyars', 3269000, 0, 3269000),
(21, 'Hihi hehe', 'vesna@hi.com', '1234567890', '3asetrytuhazed', 1, 'Sản phẩm thuộc id: 12 ,số lượng: 4. Sản phẩm thuộc id: 15 ,số lượng: 5. Sản phẩm thuộc id: 13 ,số lượng: 5. ', 'nhanh', 13000000, 0, 13000000);

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `dienthoai` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mangxahoi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `diachi`, `dienthoai`, `email`, `mangxahoi`) VALUES
(1, '7064 Lorem Ipsum Vestibulum 666/13', '0853532853', 'maestrodeity@bw.com', 'facebook.com/hihihehe<br>\r\nhohohaha.com');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`id`, `ten`) VALUES
(16, 'Bàn'),
(17, 'Ghế'),
(18, 'Giường'),
(19, 'Đèn bàn'),
(20, 'Bình trang trí'),
(21, 'Gối'),
(22, 'Kệ'),
(23, 'Nến'),
(24, 'Tượng trang trí'),
(26, 'Vách ngăn');

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi`
--

CREATE TABLE `phanhoi` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dienthoai` varchar(10) NOT NULL,
  `loinhan` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `phanhoi`
--

INSERT INTO `phanhoi` (`id`, `ten`, `email`, `dienthoai`, `loinhan`) VALUES
(1, 'Dank Memes Vui Nhộn', 'vesna@hi.com', '0394763795', 'trang web đẹp');

-- --------------------------------------------------------

--
-- Table structure for table `quangcao`
--

CREATE TABLE `quangcao` (
  `id` int(11) NOT NULL,
  `hinh` varchar(30) NOT NULL,
  `vitri` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `quangcao`
--

INSERT INTO `quangcao` (`id`, `hinh`, `vitri`) VALUES
(4, 'h1.jpg', '1'),
(12, 'h2.jpg', '2'),
(13, 'h3.jpg', '2'),
(14, 'h4.jpg', '3'),
(16, 'menu-img3.jpg', '3'),
(17, 'daily-deal-bg.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `ten` varchar(70) NOT NULL,
  `gia` int(20) NOT NULL,
  `giakhuyenmai` int(20) NOT NULL,
  `soluong` int(5) NOT NULL,
  `noidung` mediumtext NOT NULL,
  `loai` int(20) NOT NULL,
  `bst` int(3) NOT NULL,
  `hinh` varchar(30) NOT NULL,
  `noibat` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `gia`, `giakhuyenmai`, `soluong`, `noidung`, `loai`, `bst`, `hinh`, `noibat`) VALUES
(6, 'Tủ đầu giường', 800000, 0, 65, 'sang trọng và độc đáo', 22, 3, 'img01.jpg', 1),
(7, 'Gối 3 tầng', 200000, 0, 24, 'êm và thoải mái', 21, 3, 'img02.jpg', 0),
(8, 'Ghế văn phòng', 500000, 0, 78, 'sang và trang trọng', 17, 2, 'img03.jpg', 0),
(9, 'Đèn ngủ', 400000, 0, 89, 'thích hợp cho người trưởng thành', 19, 4, 'img04.jpg', 1),
(10, 'Bình hoa văn đỏ', 1000000, 700000, 103, 'hàng dễ vỡ nhưng hợp với phong cảnh nhiều cây', 20, 4, 'img05.jpg', 0),
(11, 'Ghế hình trứng', 700000, 0, 23, 'độc đáo và hiện đại', 17, 2, 'img06.jpg', 0),
(12, 'Bàn Coffee', 2000000, 0, 65, 'nhỏ gọn', 16, 2, 'img07.jpg', 1),
(13, 'quả địa cầu trang trí', 900000, 400000, 45, 'hợp thời', 24, 4, 'img08.jpg', 1),
(14, 'Kệ trang trí', 400000, 0, 80, 'nhỏ gọn và tiện lợi', 22, 3, 'img09.jpg', 0),
(15, 'Nến hình sao', 600000, 0, 78, 'sáng và sang', 23, 4, 'img10.jpg', 0),
(16, 'Vách ngang soji', 700000, 0, 10, 'đơn giản hợp thời', 26, 3, 'img11.jpg', 0),
(17, 'Kệ nến cổ điển', 200000, 0, 52, 'hoài cổ và đơn giản', 23, 2, 'img12.jpg', 0),
(18, 'Đèn bàn', 500000, 0, 93, 'hiện đại và đơn giản', 19, 3, 'img13.jpg', 1),
(19, 'Bàn góc trang trí', 3000000, 900000, 71, 'kiểu cách và sang trọng', 16, 2, 'img14.jpg', 1),
(20, 'Ghế sofa dài', 1500000, 0, 3, 'êm và màu sắc sang trọng', 17, 3, 'img15.jpg', 0),
(22, 'Bàn ăn hiện đại', 500000, 0, 0, 'magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien. Donec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue. Quisque aliquam tempor magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc ac magna. Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis. Pellentesque cursus sagittis felis. Pellentesque porttitor, velit lacinia egestas auctor, diam eros tempus arcu, nec vulputate augue magna vel risus. Cras non magna vel ante adipiscing ', 16, 4, 'ban1.png', 1),
(23, 'Bàn học nhóm', 300000, 0, 0, 'in sapien eu purus dapibus commodo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras faucibus condimentum odio. Sed ac ligula. Aliquam at eros. Etiam at ligula et tellus ullamcorper ultrices. In fermentum, lorem non cursus porttitor, diam urna accumsan lacus, sed interdum wisi nibh nec nisl. Ut tincidunt volutpat urna. Mauris eleifend nulla eget mauris. Sed cursus quam id felis. Curabitur posuere quam vel nibh. Cras dapibus dapibus nisl. Vestibulum quis dolor a felis congue ', 16, 2, 'ban2.png', 0),
(24, 'Bình cổ điển', 800000, 0, 0, 'adipiscing augue. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem. In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus', 20, 3, 'b2.png', 1),
(26, 'Nhà họ bình', 7000000, 0, 0, ', in lacinia nulla nisl eget sapien. Donec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue. Quisque aliquam tempor magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc ac magna. Maecenas odio dolor', 20, 4, 'b3.png', 1),
(27, 'Bình trắng', 200000, 0, 0, ', in lacinia nulla nisl eget sapien. Donec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue. Quisque aliquam tempor magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc ac magna. Maecenas odio dolor', 20, 2, 'b1.png', 0),
(28, 'Ghế gỗ', 20000, 0, 0, 'ultrices. In fermentum, lorem non cursus porttitor, diam urna accumsan lacus, sed interdum wisi nibh nec nisl. Ut tincidunt volutpat urna. Mauris eleifend nulla eget mauris. Sed cursus quam ', 17, 3, 'ghe.png', 0),
(29, 'Gối hình hoa', 578000, 0, 0, 'commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem. In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. Fusce aliquet ', 21, 4, 'p3.png', 1),
(30, 'Gối hiện đại', 85440, 0, 0, 'cursus porttitor, diam urna accumsan lacus, sed interdum wisi nibh nec nisl. Ut tincidunt volutpat urna. Mauris eleifend nulla eget mauris. Sed cursus quam id felis. Curabitur posuere quam vel nibh. Cras dapibus dapibus nisl. Vestibulum quis dolor a felis congue vehicula. Ma', 21, 3, 'p1.png', 1),
(31, 'Gối hình cuộn len', 78900, 0, 0, 'quis dolor a felis congue vehicula. Maecenas pede purus, tristique ac, tempus eget, egestas quis, mauris. Curabitur non eros. Nullam hendrerit bibendum justo. Fusce iaculis, est quis lacinia pretium, pede metus molestie lacus, at gravida wisi ante at libero. Quisque ', 21, 2, 'p2.png', 0),
(32, 'Kệ tre', 763000, 500000, 0, 'pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien. Donec ut es', 22, 2, 'k2.png', 1),
(33, 'Kệ tam giác', 67800, 0, 0, 'nisl. Ut tincidunt volutpat urna. Mauris eleifend nulla eget mauris. Sed cursus quam id felis. Curabitur posuere quam vel nibh. Cras dapibus dapibus nisl. Vestibulum quis dolor a felis congue vehicula. Maecenas pede purus, tristique ac, tempus eget, egestas quis', 22, 4, 'k1.png', 1),
(34, 'Kệ để cây', 467000, 0, 0, 'magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra ', 22, 2, 'k3.png', 0),
(35, 'Giường hiện đại', 1000000, 0, 0, 'fames ac turpis egestas. Nunc ac magna. Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis. Pellentesque cursus sagittis felis. Pellentesque porttitor, velit lacinia egestas auctor, diam eros tempus arcu, nec vulputate augue magna vel risus. Cras non magna vel ante adipiscing rhoncus. Vivamus a mi. Morbi neque. Aliquam erat volutpat. Integer ultrices lobortis eros. Pellentesque habitant morbi ', 18, 4, 'g1.png', 1),
(36, 'Giường hoàng gia', 600000000, 30000000, 0, 'turpis egestas. Nunc ac magna. Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis. Pellentesque cursus sagittis felis. Pellentesque porttitor, velit lacinia ', 18, 4, 'g3.png', 0),
(37, 'Giường đa năng', 5000000, 0, 0, 'conubia nostra, per inceptos hymenaeos. Donec ullamcorper fringilla eros. Fusce in sapien eu purus dapibus commodo. Cum sociis natoque penatibus et magnis dis parturient ', 18, 2, 'g2.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `ten`) VALUES
(6, 'h1.png'),
(7, 'h2.png'),
(8, 'h3.png'),
(9, 'h4.png'),
(10, 'h5.png');

-- --------------------------------------------------------

--
-- Table structure for table `tonkho`
--

CREATE TABLE `tonkho` (
  `id` int(100) NOT NULL,
  `nhx` int(2) NOT NULL,
  `tensp` int(20) NOT NULL,
  `slnhap` int(50) NOT NULL,
  `ngaynhap` date NOT NULL,
  `slxuat` int(50) NOT NULL,
  `ngayxuat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tonkho`
--

INSERT INTO `tonkho` (`id`, `nhx`, `tensp`, `slnhap`, `ngaynhap`, `slxuat`, `ngayxuat`) VALUES
(2, 2, 34, 12, '2023-10-11', 45, '2023-10-04'),
(3, 1, 12, 200, '2023-10-18', 0, '2023-10-18'),
(4, 2, 28, 67, '2023-10-26', 67, '2023-10-26'),
(5, 2, 9, 0, '2023-10-18', 0, '2023-10-18'),
(6, 1, 32, 2, '2023-07-19', 0, '2023-07-19'),
(7, 1, 10, 56, '2022-12-15', 0, '2022-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `nhom` int(3) NOT NULL,
  `tongdamua` int(20) NOT NULL,
  `no` int(20) NOT NULL,
  `hinh` varchar(70) NOT NULL,
  `quyen` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ten`, `email`, `pass`, `nhom`, `tongdamua`, `no`, `hinh`, `quyen`) VALUES
(20, 'Xuân', 'xuan.tranvu52@gmail.com', '$2y$10$Uh6vHUOXSAFCPdCIsGHdE.f6z.MgFPDla43CS.ev.mDSs7Dx5DBqS', 0, 0, 0, 'avatar1.png', 1),
(29, 'Balan', 'maestrodeity@bw.com', '$2y$10$QH2eaPAKnD/LwlS8LnyG2OoKfv5D58YiPmv5rRSwY0euPr829nakW', 0, 0, 0, 'avatar2.png', 1),
(30, 'Carroc', 'captainnpc@ror.com', '$2y$10$1hlV8D2gC0Hlbf8t1pKCbeTVpM/.ArLqo.Y4gl1BUyPsIcAWWxR8O', 1, 0, 0, 'avatar3.png', 0),
(31, 'Clavell', 'directorpaldia@psav.com', '$2y$10$22MqLOi5i79EEgMZfeaq/eR8MIOCP.7YvBPjz7RYKJPvW66oh1FXW', 0, 0, 0, 'avatar4.png', 1),
(32, 'Ehekatl', 'godelemental@elona.com', '$2y$10$hokiMFB/bXCcmxRVERSiluZ//454NHB6bByrEZxUbAetp.8REaUpq', 1, 0, 0, 'avatar5.png', 0),
(33, 'Zios', 'guardianjamaa@ajpw.com', '$2y$10$EWAS1yHhJJtapLpv55NK1OdM3OKntbCM3CuKDo/AGgcb0RY5BUYUO', 2, 0, 0, 'avatar6.png', 0),
(34, 'XZCoRi', 'sunflowerndancingspring@gmail.com', '$2y$10$OPUhr0z.wvFC8.lKmNEvI.ofwiiCuO21b93oqVIY4HIMKj5Se1vTK', 0, 0, 0, 'avatar7.png', 1),
(35, 'Shirley', 'bestwaifu@cg.com', '$2y$10$ioJ1nod5XWvz2EwiA5.33e8Z.cN/jjxFKYcT83mPQT3Y0S2su9du.', 2, 0, 0, 'avatar8.png', 0),
(36, 'Susie', 'meangirl@dtf.com', '$2y$10$yK7t1LbGRwX8Hvsh/3gsJeVTivBVAiORoNhVwfmMUe7cl8icTNQpm', 1, 0, 0, 'avatar9.png', 0),
(37, 'Lily', 'flowerlady@sima.com', '$2y$10$U0jgLMbLgbgfbhSeqAHQh..CZ0XEyP9mGjGGe6NOOr0HKNdCJCHZC', 1, 0, 0, 'avatar10.png', 0),
(38, 'Lynx', 'beserker@mib.com', '$2y$10$j7W7WmT3lU.v6bqmUVztbukTAwmxzz88G7znK1IqurWYecjoiCo1K', 2, 0, 0, 'avatar11.png', 0),
(59, 'Dank Memes Vui Nhộn', 'vesna@hi.com', '$2y$10$uI73qv8iRv1fSPU1QZvQ3etRpriIXGGA5GPXsMijyUMNsfZG5S1De', 0, 0, 0, 'stack-of-three-black-hot-stones-spa-salon-vector-16122479.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bosuutap`
--
ALTER TABLE `bosuutap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tonkho`
--
ALTER TABLE `tonkho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bosuutap`
--
ALTER TABLE `bosuutap`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tonkho`
--
ALTER TABLE `tonkho`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
