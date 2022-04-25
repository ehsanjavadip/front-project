-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 10:05 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codearticle`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `articlecode` varchar(8) NOT NULL,
  `name` varchar(60) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `category` varchar(30) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `author` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `subject` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `version` varchar(30) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `articletext` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `picturename` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `articlecode`, `name`, `category`, `author`, `subject`, `version`, `articletext`, `picturename`) VALUES
(17, '2345', 'چگونه از ادیتور TinyMCE استفاده کنیم', 'نرم افزار های کاربردی تحت وب', 'احسان جوادی', 'تبدیل teaxtarea به چیز خفن در وب سایت', '1.0.0', 'این یک پیام تست می باشد', '../assets/uploads/articleimages/Image_default_generic.png');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `email` varchar(100) NOT NULL,
  `datetime` varchar(200) NOT NULL,
  `hostname` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`email`, `datetime`, `hostname`) VALUES
('ehsanjavadip@gmail.com', '2022-04-25/10:04:42am', 'ehsanjavadip');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `fullname` varchar(30) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(20) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `subject` varchar(25) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `important` varchar(3) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`fullname`, `email`, `subject`, `message`, `important`) VALUES
('Navid Imanit', 'navidimani.sisco@gms', 'پیام تست hl', 'سلام این یک پیام تست است ld', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `fullname` varchar(30) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `subject` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`fullname`, `username`, `email`, `subject`, `message`) VALUES
('احسان جوادی', 'ehsanjavadip', 'ehsanjavadip@gmail.com', 'مشکل تست در کد', 'این یک مشکل تست است زیاد آن را جدی نگیرید.....');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `familyname` varchar(30) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(300) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `career` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `emailpre` varchar(3) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `familyname`, `username`, `email`, `password`, `career`, `emailpre`) VALUES
('احسان ', 'جوادی', 'ehsanjavadip', 'ehsanjavadip@gmail.com', 'd16fa266734b1980a88e8402ca975f22', 'توسعه دهنده وب', 'yes'),
('نوید', 'ایمانی', 'navidimani', 'navidimani.sisco@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'استاد دانشگاه مهاجر اصفهان', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`hostname`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
