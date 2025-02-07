-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2025 at 04:44 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(20) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `PassWord` varchar(25) NOT NULL,
  `Gmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `UserName`, `PassWord`, `Gmail`) VALUES
('Ali Paknejad', 'MorPhin', 'gss234f2!z', 'morphin@gmail.com'),
('Ali Namani', 'Tesla', 't3356gsf', 'tesla@gmail.com'),
('Sina Pooladian', 'Over2z', 'fgs543s', 'over2z@gmail.com'),
('Sina Pooladian', 'Over2z', 'fgs543s', 'over2z@gmail.com'),
('RaminReyhani', 'Ryno', '1414', 'ryno@gmail.com'),
('Jack', 'Joker', '2525', 'joker@gmail.com'),
('asdasd', 'asd', 'sss', 's'),
('asdasd', 'asd', 'sss', 's'),
('asdasd', 'asd', 'sss', 's'),
('asdasd', 'asd', 'sss', 's'),
('asdasd', 'asd', 'sss', 's'),
('asdasd', 'asd', 'sss', 's'),
('asdasd', 'asd', 'sss', 's');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
