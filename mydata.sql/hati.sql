-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 11:15 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hati`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) NOT NULL,
  `banners_title` varchar(150) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `banners_subtitle` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `photo_location` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banners_title`, `banners_subtitle`, `photo_location`, `active_status`) VALUES
(3, 'hlw', 'sub ', 'uploads/banners/3.jpg', 2),
(4, 'Please enter the megabytes (MB) value to convert to megabits', '1 Megabyte is equal to 8 Ã— 106-6 Megabits. 1 Megabyte = 8 Ã— 100 Megabits. 1 Megabyte = 8 Ã— 1 Megabits. 1 MB = 8 Mbit.', 'uploads/banners/4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `guest_name` varchar(100) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `guest_email` varchar(100) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `guest_messages` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `read_sstatus` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `guest_name`, `guest_email`, `guest_messages`, `read_sstatus`) VALUES
(1, 'MD IMRAN HASAN', 'imranhasan015@gmail.com', 'The Challenges of Global Poverty -- A FREE online course from MIT for those who are interested in the challenge posed by massive and persistent world poverty.', 2),
(2, 'imran', 'hasn@hasan.com', 'The Challenges of Global Poverty -- A FREE online course from MIT for those who are interested ', 2),
(3, 'hasan', 'opu@live.com', ' the challenge posed by massive and persistent world poverty.', 2),
(4, 'opu', 'imranhasa123@imran.com', 'Address\r\n4321 California St,\r\nSan Francisco, CA 12345', 2),
(5, 'hridey', 'imranhasan@imran.com', 'Please fill out the form below to send us an email and we will get back to you as soon as possible.', 2),
(22, 'hridey', 'hasn@live.com', 'hi', 2),
(23, 'MD IMRAN HASAN', 'imranhasa015@imran.com', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.\"', 2),
(24, 'imran', 'imranhasa123@imran.com', 'ijuiu', 2),
(25, 'hridey', 'opu@live.com', '123', 2),
(35, 'hasan', 'hasn@hasan.com', 'hi', 2),
(36, 'MD IMRAN HASAN', 'imranhasa123@imran.com', 'Address\r\n4321 California St,\r\nSan Francisco, CA 12345\r\n\r\nPhone\r\n+1 123 456 1234\r\n\r\nEmail\r\ninfo@company.com', 1),
(37, 'MD IMRAN HASAN', 'imranhasa123@imran.com', 'Address\r\n4321 California St,\r\nSan Francisco, CA 12345\r\n\r\nPhone\r\n+1 123 456 1234\r\n\r\nEmail\r\ninfo@company.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `email`, `password`, `phone_number`) VALUES
(1, 'md imran hasan', 'imranhasan015@gmail.com', '1bf6717f338767ca7c67adfaa938ca77', '01833035638'),
(2, 'ADMIN', 'admin@admin.com', '1bf6717f338767ca7c67adfaa938ca77', '01833035638'),
(3, 'md imran hasan', 'imranhsan@live.com', '1bf6717f338767ca7c67adfaa938ca77', '01833035638'),
(4, 'md imran hasan', 'imranhsan12345@live.com', '1bf6717f338767ca7c67adfaa938ca77', '01833030000'),
(5, 'Imran ', 'imranhsan1234@live.com', '1bf6717f338767ca7c67adfaa938ca77', '01831618153');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
