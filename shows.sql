-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 09:25 PM
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
-- Database: `bookmyshow`
--

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `showname` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `seatno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`showname`, `uname`, `seatno`) VALUES
('Avatar', 'John', 1),
('Avatar', 'John', 2),
('Avatar', 'John', 3),
('Avatar', 'Kiran', 91),
('Avatar', 'Kiran', 92),
('Avatar', 'Kiran', 93),
('Avatar', 'Kiran', 94),
('Avatar', 'Kiran', 95),
('Avatar', 'Kiran', 96),
('Avatar', 'Kiran', 97),
('Avatar', 'Kiran', 98),
('Avatar', 'Kiran', 99),
('Avatar', 'Kiran', 100);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
