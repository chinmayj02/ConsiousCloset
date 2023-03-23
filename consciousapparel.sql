-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2023 at 07:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consciousapparel`
--

-- --------------------------------------------------------

--
-- Table structure for table `Brands`
--

CREATE TABLE `Brands` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `nos_of_products` int(11) DEFAULT NULL,
  `gstno` varchar(50) DEFAULT NULL,
  `customer_count` int(11) DEFAULT NULL,
  `bid` int(11) NOT NULL,
  `CN1` varchar(255) DEFAULT NULL,
  `CN2` varchar(255) DEFAULT NULL,
  `CN3` varchar(255) DEFAULT NULL,
  `CN4` varchar(255) DEFAULT NULL,
  `CN5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Brands`
--

INSERT INTO `Brands` (`name`, `email`, `address`, `rank`, `nos_of_products`, `gstno`, `customer_count`, `bid`, `CN1`, `CN2`, `CN3`, `CN4`, `CN5`) VALUES
('Nike', 'abc@gmail.com', 'dhavali', NULL, NULL, '123av', NULL, 1, '', '', '', '', ''),
('Nike', 'vadirajinamdar6@gmail.com', 'Dhavali Ponda ', NULL, NULL, 'ABCD1234', NULL, 2, 'XYZ1', 'PQR1', '', '', ''),
('Nike', 'vadirajinamdar6@gmail.com', 'Dhavali Ponda ', NULL, NULL, 'ABCD1234', NULL, 3, 'XYZ1', 'PQR1', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `name` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `buylink` varchar(255) DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Brands`
--
ALTER TABLE `Brands`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Brands`
--
ALTER TABLE `Brands`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
