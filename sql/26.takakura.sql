-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2021 at 09:43 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Gs_accounting`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `title`, `type`, `amount`, `date`, `created_at`, `updated_at`) VALUES
(2, '豆', 1, 300, '2021-01-01', '2021-01-11 06:37:15', '2021-01-11 06:37:15'),
(3, 'たけのこ', 1, 300, '2021-01-01', '2021-01-11 06:37:39', '2021-01-11 06:37:39'),
(4, 'たけ', 1, 300, '2021-01-01', '2021-01-11 06:38:18', '2021-01-11 06:38:18'),
(6, '<p>hello</p>', 0, 342, '2021-01-04', '2021-01-11 06:57:23', '2021-01-11 06:57:23'),
(7, '<p>hello</p>', 0, 342, '2021-01-06', '2021-01-11 06:58:22', '2021-01-11 06:58:22'),
(8, '豆', 0, 4332, '2021-01-06', '2021-01-11 07:04:04', '2021-01-11 07:04:04'),
(9, '梅干し', 1, 500, '2021-01-09', '2021-01-16 00:39:20', '2021-01-16 00:39:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
