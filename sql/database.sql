-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2025 at 04:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12


CREATE DATABASE IF NOT EXISTS `onlineshop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `onlineshop`;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `quantity`) VALUES
(9, 'Cooler Master Hyper 212', 39.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `client_id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `province` text NOT NULL,
  `postalcode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`client_id`, `email`, `password`, `address`, `city`, `province`, `postalcode`) VALUES
(1, 'pza@123', '123', '123', '123', 'Quebec', '123'),
(2, '1213@1212', '12121', '121212', '121212', 'Saskatchewan', '1212'),
(3, '12121@1212', '12122', '12121', '212', 'Saskatchewan', '1'),
(4, '12121@1212', '12122', '12121', '212', 'Saskatchewan', '1'),
(5, '1212121@121', '212121', '@12121', '1212', 'Quebec', '1'),
(6, 'pza@123', '123', '123', '123', 'Quebec', '123'),
(7, 'pza_1029@126.com', '123456', '1212', '1212', 'Yukon', '1121'),
(8, '12131@12121', '12121212121', '21212', '121', 'Saskatchewan', '21212');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `category`) VALUES
(1, 'Intel Core i5-14600K', 'cpu1.jpg', 350.00, 'cpu'),
(2, 'Intel Core i7-14700K', 'cpu2.jpg', 450.00, 'cpu'),
(3, 'Intel Core i9-14900K', 'cpu3.jpg', 650.00, 'cpu'),
(4, 'AMD Ryzen 7 9800X3D', 'cpu4.jpg', 700.00, 'cpu'),
(5, 'NVIDIA RTX 4060', 'gpu1.jpg', 399.00, 'videocard'),
(6, 'NVIDIA RTX 4070 Ti', 'gpu2.jpg', 599.00, 'videocard'),
(7, 'AMD Radeon RX 7900 XT', 'gpu3.jpg', 649.00, 'videocard'),
(8, 'Intel Arc A770', 'gpu4.jpg', 349.00, 'videocard'),
(9, 'MSI Z790 Tomahawk', 'mb1.jpg', 229.00, 'motherboard'),
(10, 'ASUS ROG Strix B650E', 'mb2.jpg', 249.00, 'motherboard'),
(11, 'Gigabyte X670 AORUS', 'mb3.jpg', 279.00, 'motherboard'),
(12, 'ASRock B550M Steel Legend', 'mb4.jpg', 159.00, 'motherboard'),
(13, 'Samsung 980 Pro 1TB SSD', 'storage1.jpg', 119.00, 'storage'),
(14, 'WD Blue SN570 1TB SSD', 'storage2.jpg', 79.00, 'storage'),
(15, 'Seagate Barracuda 2TB HDD', 'storage3.jpg', 59.00, 'storage'),
(16, 'Crucial MX500 500GB SSD', 'storage4.jpg', 49.00, 'storage'),
(17, 'NZXT H510 Mid Tower', 'case1.jpg', 89.00, 'case'),
(18, 'Corsair 4000D Airflow', 'case2.jpg', 99.00, 'case'),
(19, 'Fractal Design Meshify C', 'case3.jpg', 109.00, 'case'),
(20, 'Thermaltake V250 RGB', 'case4.jpg', 79.00, 'case'),
(21, 'Cooler Master Hyper 212', 'thermal1.jpg', 39.00, 'thermal'),
(22, 'Noctua NH-D15', 'thermal2.jpg', 89.00, 'thermal'),
(23, 'Arctic Freezer 34 eSports', 'thermal3.jpg', 49.00, 'thermal'),
(24, 'be quiet! Dark Rock Pro 4', 'thermal4.jpg', 89.00, 'thermal'),
(25, 'Dell 24\" IPS Monitor', 'monitor1.jpg', 149.00, 'monitor'),
(26, 'LG UltraGear 27\"', 'monitor2.jpg', 249.00, 'monitor'),
(27, 'ASUS TUF Gaming 32\"', 'monitor3.jpg', 279.00, 'monitor'),
(28, 'Samsung Smart Monitor M8', 'monitor4.jpg', 299.00, 'monitor'),
(29, 'Logitech MX Keys', 'keyboard1.jpg', 99.00, 'keyboard'),
(30, 'Razer Huntsman V2', 'keyboard2.jpg', 149.00, 'keyboard'),
(31, 'Keychron K2', 'keyboard3.jpg', 89.00, 'keyboard'),
(32, 'SteelSeries Apex Pro', 'keyboard4.jpg', 179.00, 'keyboard'),
(33, 'Logitech G502 X', 'mouse1.jpg', 69.00, 'mouse'),
(34, 'Razer DeathAdder V2', 'mouse2.jpg', 59.00, 'mouse'),
(35, 'Glorious Model O', 'mouse3.jpg', 79.00, 'mouse'),
(36, 'Corsair M65 RGB Elite', 'mouse4.jpg', 49.00, 'mouse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
