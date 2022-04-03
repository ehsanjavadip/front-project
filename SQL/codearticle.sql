-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 08:26 PM
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
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(8) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `career` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `emailpre` varchar(3) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `career`, `emailpre`) VALUES
('ehsanjavadip', 'ehsanjavadip@gmail.com', '2312e157', 'توسعه دهنده وب', 'yes');

--
-- Indexes for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
