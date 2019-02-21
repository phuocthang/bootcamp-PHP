-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 21, 2019 lúc 04:38 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mylibary`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `idbook` int(11) NOT NULL,
  `bookName` varchar(50) NOT NULL,
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `borrowed`
--

CREATE TABLE `borrowed` (
  `Idborrowed` int(10) NOT NULL,
  `Nameborrowed` varchar(100) NOT NULL,
  `Dateborrowed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Namebook` int(100) NOT NULL,
  `Idstudent` int(10) NOT NULL,
  `id_book` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `idcategory` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `studentId` int(10) NOT NULL,
  `studentName` varchar(100) DEFAULT NULL,
  `studentAddress` varchar(100) DEFAULT NULL,
  `studentEmail` varchar(100) DEFAULT NULL,
  `studentImager` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`studentId`, `studentName`, `studentAddress`, `studentEmail`, `studentImager`) VALUES
(2, 'Đặng Phước Thắng', 'trường chinh', 'dangphuocthang@gmail.com', 'thang.png'),
(3, 'Đặng Phước Thắng', 'trường chinh', 'dangphuocthang@gmail.com', 'thang.png'),
(4, 'Nguyễn Thế Hoàng', 'trường chinh', 'hoàng@gmail.com', 'hoàng.png'),
(5, 'thang', '20px', 'thang@gmail.com', 'thang.png'),
(16, 'Đặng Phước Thắng', 'trường chinh', 'dangphuocthang@gmail.com', 'thang.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`idbook`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Chỉ mục cho bảng `borrowed`
--
ALTER TABLE `borrowed`
  ADD PRIMARY KEY (`Idborrowed`),
  ADD KEY `FK_student` (`Idstudent`),
  ADD KEY `FK_book` (`id_book`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcategory`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `book`
--
ALTER TABLE `book`
  MODIFY `idbook` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `borrowed`
--
ALTER TABLE `borrowed`
  MODIFY `Idborrowed` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `idcategory` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `studentId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `category` (`idcategory`);

--
-- Các ràng buộc cho bảng `borrowed`
--
ALTER TABLE `borrowed`
  ADD CONSTRAINT `FK_book` FOREIGN KEY (`id_book`) REFERENCES `book` (`idbook`),
  ADD CONSTRAINT `FK_student` FOREIGN KEY (`Idstudent`) REFERENCES `student` (`studentId`);

--
-- Các ràng buộc cho bảng `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `book` FOREIGN KEY (`idcategory`) REFERENCES `book` (`idbook`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
