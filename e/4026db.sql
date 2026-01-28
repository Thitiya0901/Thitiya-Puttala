-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2025 at 10:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4026db`
--
CREATE DATABASE IF NOT EXISTS `4026db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4026db`;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `a_id` int(6) NOT NULL,
  `a_position` varchar(255) NOT NULL,
  `a_prefix` varchar(255) NOT NULL,
  `a_fullname` varchar(255) NOT NULL,
  `a_dob` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_education` varchar(255) NOT NULL,
  `a_skills` varchar(255) NOT NULL,
  `a_experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`a_id`, `a_position`, `a_prefix`, `a_fullname`, `a_dob`, `a_email`, `a_education`, `a_skills`, `a_experience`) VALUES
(1, 'ฐิติยา พุทธลา', '', '', '', '', '', '', ''),
(2, 'Digital Marketing Specialist', 'นาย', 'ฐิติยา พุทธลา', '2025-12-17', '66010914026@msu.ac.th', 'ปริญญาตรี', '', ''),
(3, 'Data Analyst', 'นางสาว', 'ฐิติยา พุทธลา', '2025-12-17', '66010914026@msu.ac.th', 'ปริญญาตรี', 'เตะบอล', '8ปี'),
(4, 'Data Analyst', 'นางสาว', 'ฐิติยา พุทธลา', '2025-12-17', '66010914026@msu.ac.th', 'ปริญญาตรี', 'เตะบอล', '8ปี'),
(5, 'Software Developer', 'นางสาว', 'ฐิติยา พุทธลา', '2025-12-17', '66010914026@msu.ac.th', 'ปริญญาตรี', '-+', '-+'),
(6, 'Software Developer', 'นางสาว', 'ฐิติยา พุทธลา', '2025-12-17', '66010914026@msu.ac.th', 'ปริญญาตรี', '-', '-'),
(7, 'Software Developer', 'นางสาว', 'ฐิติยา พุทธลา', '2025-12-17', '66010914026@msu.ac.th', 'ปริญญาตรี', '-+', '-+'),
(8, 'Software Developer', 'นางสาว', 'ฐิติยา พุทธลา', '2025-12-17', '66010914026@msu.ac.th', 'ปริญญาตรี', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(7) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_phone` varchar(255) NOT NULL,
  `r_height` varchar(255) NOT NULL,
  `r_address` varchar(255) NOT NULL,
  `r_birthday` varchar(255) NOT NULL,
  `r_color` varchar(255) NOT NULL,
  `r_major` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_name`, `r_phone`, `r_height`, `r_address`, `r_birthday`, `r_color`, `r_major`) VALUES
(1, 'ฐิติยา พุทธลา', '', '', '', '', '', ''),
(2, 'น.ส.ฐิติยา พุทธลา', '', '', '', '', '', ''),
(3, 'น.ส.ฐิติยา พุทธลา', '1234567899', '', '', '', '', ''),
(4, 'พรีม พุทธลา', '0932979885', '', '', '', '', ''),
(6, 'ลลิตา', '0816697855', '', '', '', '', ''),
(7, 'ลลิตา', '0816697855', '168', '', '', '', ''),
(8, 'พรีม ลลิตา', '0896299933', '180', '', '', '', ''),
(9, 'พรีม ลลิตา', '0896299933', '180', '-', '2025-12-17', '#ff527d', 'คอมพิวเตอร์ธุรกิจ'),
(10, 'พรีม ลลิตา', '0896299933', '180', '-', '2025-12-17', '#ff527d', 'คอมพิวเตอร์ธุรกิจ'),
(11, 'ฐิติยา พุทธลา', '0932979885', '165', 'ซอยวุ่นวาย', '2005-01-09', '#52c5ff', 'คอมพิวเตอร์ธุรกิจ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `a_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
