-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2025 at 01:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars_info`
--

CREATE TABLE `cars_info` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Fuel` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `car_class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars_info`
--

INSERT INTO `cars_info` (`id`, `Name`, `Fuel`, `Price`, `Photo`, `car_class`) VALUES
(1, 'BMW 1 Series', 'Diesel/Petrol', 'From EUR 37 800', '1.jpg', '1'),
(2, 'BMW 1 Series M', 'Petrol', 'From EUR 60 500', '1m.jpg', '1'),
(3, 'BMW 2 Series', 'Diesel/Petrol', 'Upcoming', '2.jpg', '2'),
(4, 'BMW 2 Series M', 'Petrol', 'Upcoming', '2m.jpg', '2'),
(5, 'BMW 3 Series', 'Diesel/Petrol', 'From EUR 55 000', '3.png', '3'),
(6, 'BMW 3 Series Touring', 'Diesel/Petrol', 'From EUR 56 200', '3t.jpg', '3'),
(7, 'BMW 3 Series M', 'Petrol', 'From EUR 110 200', '3m.jpg', '3'),
(8, 'BMW 4 Series', 'Diesel/Petrol', 'From EUR 66 400', '4.jpg', '4'),
(9, 'BMW 4 Series M', 'Petrol', 'From EUR 81 800', '4m.jpg', '4'),
(10, 'BMW 5 Series', 'Diesel/Petrol/Plug-in Hybrid', 'From EUR 65 700', '5.jpg', '5'),
(11, 'BMW 5 Series Touring', 'Diesel/Petrol/Plug-in Hybrid', 'From EUR 70 000', '5t.jpg', '5'),
(12, 'BMW i5', 'Electric', 'From EUR 76 700', '5i.jpg', '5'),
(13, 'BMW i5 Touring', 'Electric', 'From EUR 80 000', '5it.jpg', '5'),
(14, 'BMW M5', 'Plug-in Hybrid', 'From EUR 150 800', '5m.png', '5'),
(15, 'BMW M5 Touring', 'Plug-in Hybrid', 'From EUR 157 800', 'm5t.jpg', '5'),
(16, 'BMW 7 Series', 'Diesel/Plug-in Hybrid', 'From EUR 143 200', '7.png', '7'),
(17, 'BMW i7', 'Electric', 'From EUR 140 500', '7i.png', '7'),
(18, 'BMW 8 Coupé', 'Diesel/Petrol', 'From EUR 130 800', '8.png', '8'),
(19, 'BMW 8 Cabriolet', 'Diesel/Petrol', 'From EUR 143 000', '8c.png', '8'),
(20, 'BMW 8 Series Gran Coupé', 'Diesel/Petrol', 'From EUR 132 700', '8g.png', '8'),
(21, 'BMW M8 Coupé', 'Petrol', 'From EUR 168 500', '8m.jpg', '8'),
(22, 'BMW M8 Cabriolet', 'Petrol', 'From EUR 178 600', '8mc.jpg', '8'),
(23, 'BMW M8 Gran Coupé', 'Petrol', 'From EUR 164 700', '8mg.jpg', '8'),
(24, 'BMW XM', 'Plug-in Hybrid', 'From EUR 135 800', 'xm.png', 'X'),
(25, 'BMW X7', 'Diesel/Petrol', 'From EUR 125 000', '7x.jpg', 'X'),
(26, 'BMW X6', 'Diesel/Petrol', 'From EUR 102 200', '6x.jpg', 'X'),
(27, 'BMW X6M', 'Petrol', 'From EUR 140 700', '6xm.jpg', 'X'),
(28, 'BMW X5', 'Diesel/Petrol', 'From EUR 100 100', '5x.jpg', 'X'),
(29, 'BMW X5M', 'Petrol', 'From EUR 138 600', '5xm.png', 'X'),
(30, 'BMW X4', 'Diesel/Petrol', 'From EUR 67 530', '4x.png', 'X'),
(31, 'BMW X4M', 'Petrol', 'From EUR 95 700', '4xm.png', 'X'),
(32, 'BMW X3', 'Diesel/Petrol', 'From EUR 65 000', '3x.jpg', 'X'),
(33, 'BMW X2', 'Diesel/Petrol', 'From EUR 53 200', '2x.png', 'X'),
(34, 'BMW X2 M35i xDrive', 'Petrol', 'From EUR 74 200', '2xm.jpg', 'X'),
(35, 'BMW X1', 'Diesel/Petrol', 'From EUR 48 300', '1x.jpg', 'X'),
(36, 'BMW X1 M35i xDrive', 'Petrol', 'From EUR 72 450', '1xm.jpg', 'X'),
(37, 'BMW iX', 'Electric', 'From EUR 94 500', 'iX.png', 'iX'),
(38, 'BMW iX3', 'Electric', 'From EUR 75 600', '3xi.jpg', 'iX'),
(39, 'BMW iX2', 'Electric', 'From EUR 53 200', '2xi.png', 'iX'),
(40, 'BMW iX1', 'Electric', 'From EUR 50 400', '1xi.jpg', 'iX');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars_info`
--
ALTER TABLE `cars_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars_info`
--
ALTER TABLE `cars_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
