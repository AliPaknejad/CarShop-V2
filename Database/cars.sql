-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2025 at 02:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `CarName` varchar(30) NOT NULL,
  `EngineVolume` varchar(20) NOT NULL,
  `BodyClass` varchar(15) NOT NULL,
  `EngineType` varchar(30) NOT NULL,
  `NumberOfCylinders` varchar(10) NOT NULL,
  `GearBoxType` varchar(30) NOT NULL,
  `FuelConsumption` varchar(30) NOT NULL,
  `Acceleration` varchar(12) NOT NULL,
  `MaximumSpeed` int(3) NOT NULL,
  `imageurl` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `CarName`, `EngineVolume`, `BodyClass`, `EngineType`, `NumberOfCylinders`, `GearBoxType`, `FuelConsumption`, `Acceleration`, `MaximumSpeed`, `imageurl`) VALUES
(9, 'بی ام و i8', '1499 سی سی', 'کوپه', 'هیبرید', '3 سیلندر', 'اتوماتیک', '1.9 لیتر در 100 کیلومتر', '4.4 ثانیه', 250, 'images/1bmwi8.jpg'),
(10, 'بی ام و گرن کوپه 220i', '1997 سی سی', 'سدان', 'بنزینی دارای توربو', '4 سیلندر', 'اتوماتیک دوکلاچه', '6 لیتر در 100 کیلو متر', '7.1 ثانیه', 238, 'images/220i گرن کوپه - 1K JPEG.jpg'),
(11, 'ب ام و 640i کوپه', '2979 سی سی', 'کروک', 'بنزینی', '6 سیلندر', 'اتوماتیک تیپ ترونیک', '7.9 لیتر در 100 کیلو متر', '6 ثانیه', 250, 'images/f10.jpg'),
(12, 'بی ام و 20i x1', '1977 سی سی', 'شاسی بلند', 'بنزینی دارای توربو', '4 سیلندر', 'اتوماتیک تیپ ترونیک', ' 7.7 لیتر در 100 کیلو متر', '8 ثانیه', 215, 'images/20ix1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
