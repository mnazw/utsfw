-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 06:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utswf`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `model` enum('1','2','3') NOT NULL,
  `type` varchar(255) NOT NULL,
  `series` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `model`, `type`, `series`, `product`) VALUES
(1, '2', 'AMD Radeon™ RX 6000 Series', 'AMD Radeon™ RX 6900 Series', 'AMD Radeon™ RX 6800 Series'),
(2, '2', 'AMD Radeon™ RX 6800 XT', 'AMD Radeon™ RX 6800', 'AMD Radeon™ RX 6700 Series'),
(3, '2', 'AMD Radeon™ RX 6000 Series', 'AMD Radeon™ RX 6900 Series', 'AMD Radeon™ RX 6800 Series'),
(4, '2', 'AMD Radeon™ RX 6800 XT', 'AMD Radeon™ RX 6800', 'AMD Radeon™ RX 6700 Series'),
(5, '2', 'AMD Radeon™ RX 6000M Series', 'AMD Radeon™ RX 6000M Series', 'AMD Radeon™ RX 6800M'),
(6, '2', 'AMD Radeon™ 2nd generation Vega', 'AMD Radeon™ 2nd generation Vega', 'AMD Radeon™ VII'),
(7, '2', 'AMD Radeon™ HD', 'AMD Radeon™ HD 8000 Series (OEM)', 'AMD Radeon™ HD 8990'),
(8, '1', 'AMD Ryzen™ Processors', 'AMD Ryzen™ Threadripper™ Processors', 'AMD Ryzen™ Threadripper™ 3990X'),
(9, '1', 'AMD Ryzen™ Processors', 'AMD Ryzen™ Threadripper™ Processors', 'AMD Ryzen™ Threadripper™ 3970X'),
(10, '1', 'AMD Ryzen™ Processors', 'AMD Ryzen™ Threadripper™ Processors', 'AMD Ryzen™ Threadripper™ 3960X'),
(11, '1', 'AMD Ryzen™ Processors', 'AMD Ryzen™ Threadripper™ Processors', 'AMD Ryzen™ Threadripper™ 2990WX'),
(12, '1', 'AMD Ryzen™ Processors', 'AMD Ryzen™ Threadripper™ Processors', 'AMD Ryzen™ Threadripper™ 2970WX'),
(13, '3', 'AMD Instinct™', 'AMD Instinct™ MI Series', 'AMD Instinct™ MI250X'),
(14, '3', 'AMD Instinct™', 'AMD Instinct™ MI Series', 'AMD Instinct™ MI250'),
(15, '3', 'AMD Instinct™', 'AMD Instinct™ MI Series', 'AMD Instinct™ MI210'),
(16, '3', 'AMD Instinct™', 'AMD Instinct™ MI Series', 'Instinct™ MI100'),
(17, '3', 'AMD Instinct™', 'AMD Instinct™ MI Series', 'Instinct™ MI60');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `tipe` enum('1','2','3') NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `model`, `tipe`, `deskripsi`, `gambar`) VALUES
(1, 'AMD Ryzen™ 9 PRO 6950H', '1', 'Product Line AMD Ryzen™ 9 PRO 6000 Series Mobile Processors', 'amd-ryzen-9a-pro-6950h.jpg'),
(2, 'AMD Ryzen™ 7 PRO 6850H', '1', 'Product Line AMD Ryzen™ 7 PRO 6000 Series Mobile Processors', 'AMD-Ryzen-7-PRO6850H.jpg'),
(3, 'AMD Ryzen™ 5 PRO 6650H', '1', 'Product Line AMD Ryzen™ 5 PRO 6000 Series Mobile Processors', 'AMD-Ryzen-5-PRO6650H.jpg'),
(4, 'AMD Radeon™ RX 6850M XT', '2', 'Product Line AMD Radeon™ RX 6000M Series', 'AMDRadeonRX6850MXT.jpg'),
(5, 'AMD Radeon™ RX 6650M XT', '2', 'Product Line AMD Radeon™ RX 6000M Series', 'AMDRadeonRX6850MXT.jpg'),
(6, 'AMD Radeon™ RX 6500M', '2', 'Product Line AMD Radeon™ RX 6000M Series', 'AMDRadeonRX6850MXT.jpg'),
(7, 'AMD Instinct™ MI250X', '3', 'Product Line AMD Instinct™ MI Series', 'AMDInstinctMI250X.webp'),
(8, 'AMD Instinct™ MI250', '3', 'Product Line AMD Instinct™ MI Series', 'AMDInstinctMI250X.webp'),
(9, 'AMD Instinct™ MI210', '3', 'Product Line AMD Instinct™ MI Series', 'AMDInstinctMI250X.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
