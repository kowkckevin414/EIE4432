-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 04:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `gender` text NOT NULL,
  `brithday` date NOT NULL,
  `image_input` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `nickname`, `email`, `gender`, `brithday`, `image_input`) VALUES
('123', '123', '123', '123@gmail.com', 'Female', '2007-03-02', 'image/myTimg.png'),
('12345', '12345', '12345', '12345@gmail.com', 'Secret', '2022-12-01', 'image/test2.png'),
('kevin123', '741', 'Fat_Kwok', 'kevinn@gmail.com', 'Secret', '2001-04-14', 'image/ayayayaaa.png'),
('kevin2', '123', 'Snowkyy', 'bbkevin0414@gmail.com', 'Secret', '2022-09-15', 'image/latersayla.png'),
('kingbb', '123', 'kingbb<3', 'kingbb@gmail.com', 'Secret', '1988-06-14', 'image/kingbb.jpg'),
('thomas1', '3211', 'ometal_ayaya', 'thomas@gmail.com', 'Female', '2007-01-01', 'image/IMG_0928.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postid` int(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `item_photo` varchar(1000) NOT NULL,
  `username` varchar(100) NOT NULL,
  `create_time` datetime NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postid`, `title`, `description`, `item_photo`, `username`, `create_time`, `status`) VALUES
(3, 'my green papa lost', 'as photo', 'image/ee3a96d96ddb4b4b992a4fa9d3c9c069_6f8a574cd4584a3d9253cfbd786120c3_1_original.png', 'kevin3', '2022-12-05 15:39:39', 'pending'),
(4, 'bruh', 'This word (Acticle) may be misspelled. Below you can find the suggested words which we believe are the correct spellings for what you were searching for. If you click on the links, you can find more information about these words.', 'image/bruh.png', 'kevin4', '2022-12-05 15:56:24', 'pending'),
(6, '123', '123', 'image/unknown.png', 'thomas1', '2022-12-05 20:31:36', 'pending'),
(8, 'aaaaaaaaaa', 'wwwwwwwwww', 'image/0199.png', 'thomas1', '2022-12-06 04:30:20', 'pending'),
(10, '1233', '12333', 'image/endjor.png', 'thomas1', '2022-12-06 06:34:05', 'pending'),
(15, '6554', '6554', 'image/errr.png', 'kevin2', '2022-12-06 07:06:21', 'pending'),
(16, 'wwwwwwwwwww', 'wwwwwwwwwwwwwww', 'image/cutecuteboy.png', 'kevin2', '2022-12-06 07:24:07', 'completed'),
(17, 'ayayyaya', '1233333', 'image/all.png', 'thomas1', '2022-12-06 16:10:14', 'completed'),
(18, 'i lost gundam figure', 'as the photo shown', 'image/gundam.jpg', 'kevin123', '2022-12-06 23:10:45', 'pending'),
(19, 'i lost my cute doggy', 'as the photo shown', 'image/dog1.jpg', 'kevin123', '2022-12-06 23:12:03', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
