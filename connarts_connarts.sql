-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 10:47 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connarts_connarts`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `brandname` varchar(30) COLLATE utf8_bin NOT NULL,
  `email` varchar(40) COLLATE utf8_bin NOT NULL,
  `logo` varchar(40) COLLATE utf8_bin NOT NULL,
  `password` varchar(15) COLLATE utf8_bin NOT NULL,
  `location` text COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `phone` char(11) COLLATE utf8_bin NOT NULL,
  `brand_desc` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`brandname`, `email`, `logo`, `password`, `location`, `time`, `phone`, `brand_desc`) VALUES
('oh well', 'aw2jks@jk.lsd', 'oh well_logojpeg', 'pass', 'jsidn iwi wiewu', '2018-06-04 18:36:37', '09000773382', ''),
('elihs9ja', 'elihs9ja@yahoo.com', 'elihs logo.jpg', 'pobosky*#07707', '', '2018-03-14 10:42:32', '09055555255', ''),
('Hornix Apparels', 'hornixapparels@gmail.com', 'IMG_20171217_123143.jpg', 'h0r150nt3', '', '2017-12-17 11:33:00', '08090902210', ''),
('ElevenTwenty3', 'man4afo@yahoo.com', 'C110F546-73EF-4012-A3BA-2EB79B39BFD6.jpe', 'Afolabi12', '', '2017-11-13 18:11:26', '0', ''),
('Marc Ray', 'marcraycreations@gmail.com', 'IMG_20171217_195822_332.jpg', 'sphinx10', '', '2017-12-17 18:59:55', '08037775353', ''),
('asdqdqw', 'sade@gmail.com', '', 'pass', '', '2019-02-02 23:56:49', '', ''),
('Imprint Nigeria', 'vic3official@yahoo.com', 'IMG_20170825_123042_471.jpg', 'yhd763h', '', '2017-11-13 12:40:36', '0', ''),
('Iycraftit ', 'voke.kodje@gmail.com', 'IMG-20171107-WA0001.jpg', 'metalgear1', '', '2017-11-15 03:05:31', '2147483647', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `fullname` char(40) COLLATE utf8_bin NOT NULL,
  `password` char(20) COLLATE utf8_bin NOT NULL,
  `email` char(30) COLLATE utf8_bin NOT NULL,
  `ref` int(11) NOT NULL,
  `phone` char(11) COLLATE utf8_bin NOT NULL,
  `address` varchar(200) COLLATE utf8_bin NOT NULL,
  `city` varchar(30) COLLATE utf8_bin NOT NULL,
  `state` varchar(27) COLLATE utf8_bin NOT NULL,
  `tIme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sub_` mediumtext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`fullname`, `password`, `email`, `ref`, `phone`, `address`, `city`, `state`, `tIme`, `sub_`) VALUES
('Ajisafe zainab temitope', 'labake07', 'thelabake@gmail.com', 7, '', '', '', '', '2017-11-25 11:47:43', '');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `name` varchar(40) NOT NULL,
  `image` varchar(50) NOT NULL,
  `stock` int(12) NOT NULL,
  `brandname` varchar(30) NOT NULL,
  `input_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`name`, `image`, `stock`, `brandname`, `input_time`) VALUES
('ewihq8ih9 ui', 'image243.jpeg', 21, '', '0000-00-00 00:00:00'),
('wer weq', 'image270.jpeg', 112, 'oh well', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nil`
--

CREATE TABLE `nil` (
  `nil` linestring NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productname` char(50) COLLATE utf8_bin NOT NULL,
  `pic` char(120) COLLATE utf8_bin NOT NULL,
  `productprice` double NOT NULL,
  `ref` int(11) NOT NULL,
  `avaliable` char(5) COLLATE utf8_bin NOT NULL,
  `brandname` char(29) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat` char(20) COLLATE utf8_bin NOT NULL,
  `des` varchar(300) COLLATE utf8_bin NOT NULL,
  `size` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productname`, `pic`, `productprice`, `ref`, `avaliable`, `brandname`, `time`, `cat`, `des`, `size`) VALUES
('Imprint Stockie', 'IMG-20171110-WA0001.jpg', 8000, 1, 'True', 'Imprint Nigeria', '2017-11-13 06:37:50', 'shoe', '', ''),
('the', '74582928-8DBE-40D8-952C-EE5CED848156.jpeg', 120, 16, 'True', 'ElevenTwenty3', '2017-11-13 18:11:26', 'glasses', 'jhubyjatvwkydbawfawefaweeeeeeeeeeeeeee                                                   ', ''),
('', 'B20C8BB5-06A5-4B88-9AC0-0645143DC12B.jpeg', 0, 17, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('', '4494F7C4-3FF1-433B-80D0-1934BCBEC4A9.jpeg', 0, 18, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('', '50623755-1544-43C7-B106-1A4798F5EB2D.jpeg', 0, 19, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('', 'E5F04FF4-98BE-45C2-9E70-B91FC4AE7BB9.jpeg', 0, 20, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('', '75444277-9D4B-4B6C-955E-5B5EA5B3165A.jpeg', 0, 21, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('', '051AC526-B91C-4A1F-B900-33013738862C.jpeg', 0, 22, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('', 'BE3A147E-4F6A-43E1-893C-DFBD718EA283.jpeg', 0, 23, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('', '553710D5-77F6-403A-AB64-C9B7E9EE1FDE.jpeg', 0, 24, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('', 'D0FA7077-F90D-4309-8D56-F03189929651.jpeg', 0, 25, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('', 'B470AB7E-DF53-456D-88C8-4717B7831656.jpeg', 0, 26, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('', '47BDDD8B-D4D7-46E8-AD2E-34A95C0612DB.jpeg', 0, 27, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('', '33AAA2BA-905E-4901-9390-7F3B12B53036.jpeg', 0, 28, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('', 'C620F026-D765-4EBD-A333-46174C8FC579.jpeg', 0, 29, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('', '114F7884-F98F-42FA-967A-B8491D30413C.jpeg', 0, 30, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('', '1F2E5E47-0AF8-4952-A58E-6C60C9C19B7A.jpeg', 0, 31, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('', '2BE18D81-99A4-402F-8323-CB3C1F3BB6E5.jpeg', 0, 32, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('', '2E44682C-6A37-46EB-BFD6-CDADEC0842DD.jpeg', 0, 33, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('', '173CD821-F23A-4048-A088-1A92C5A6D64D.jpeg', 0, 34, 'True', 'ElevenTwenty3', '2017-11-13 18:11:28', '', '', ''),
('Imprint Stockie', 'IMG_20170825_122113_034.jpg', 8000, 37, 'True', 'Imprint Nigeria', '2017-11-13 23:44:44', 'shoe', '', ''),
('Imprint Stockie', 'IMG-20171011-WA0012.jpg', 8000, 39, 'True', 'Imprint Nigeria', '2017-11-13 23:47:40', 'shoe', '', ''),
('SMILE FACE SILVER SKULL BRACELET', 'IMG_20171109_200427_984.jpg', 2500, 65, 'True', 'Iycraftit', '2017-11-15 03:06:51', 'jewellery', '', ''),
('', 'IMG_20171120_071257_558.jpg', 0, 68, 'True', 'Hornix Apparels', '2017-11-20 06:28:11', '', '', ''),
('', 'IMG_20171120_071257_558.jpg', 0, 69, 'True', 'Hornix Apparels', '2017-11-20 06:36:22', '', '', ''),
('', 'DSC_0187.JPG', 0, 70, 'True', 'Hornix Apparels', '2017-12-13 05:43:33', '', '', ''),
('', 'IMG-20171020-WA0015.jpg', 0, 71, 'True', 'Hornix Apparels', '2017-12-17 11:33:00', '', '', ''),
('', 'hornixapparels-20171217-0006.jpg', 0, 72, 'True', 'Marc Ray', '2017-12-17 18:59:55', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ref`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ref`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ref` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ref` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
