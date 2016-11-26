-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2016 at 12:59 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isspc_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `khabarnameh`
--

CREATE TABLE `khabarnameh` (
  `id` int(11) NOT NULL,
  `Email` varchar(60) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rezerv`
--

CREATE TABLE `rezerv` (
  `id` int(11) NOT NULL,
  `Name` varchar(60) COLLATE utf8_persian_ci NOT NULL,
  `Email` varchar(60) COLLATE utf8_persian_ci NOT NULL,
  `Time` varchar(60) COLLATE utf8_persian_ci NOT NULL,
  `Mobile` bigint(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `rezerv`
--

INSERT INTO `rezerv` (`id`, `Name`, `Email`, `Time`, `Mobile`) VALUES
(1, 'Ø³Ø¹ÛŒØ¯ Ø±Ø­ÛŒÙ…ÛŒ Ù…Ù†Ø´', 'rahimimanesh.saeeid@gmail.com', '2016-10-27 00:35:05', 9193350901),
(2, 'سعید رحیمی منش', 'Ahmad@gmail.com', '2016/17/18', 9193350901),
(3, 'ØµÙ†Ù…', 'Ravcb@sdfc.om', '2016-10-27 00:44:46', 546454),
(4, 'Ù†Ø§Ø²Ù†ÛŒÙ†', 'Xcvxcv@sdfc.om', '2016-10-27 00:45:40', 56),
(5, 'Ù…Ø­Ù…Ø¯', 'mamad@sdf.com', '2016-10-27 00:55:46', 584664);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `khabarnameh`
--
ALTER TABLE `khabarnameh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezerv`
--
ALTER TABLE `rezerv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khabarnameh`
--
ALTER TABLE `khabarnameh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rezerv`
--
ALTER TABLE `rezerv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
