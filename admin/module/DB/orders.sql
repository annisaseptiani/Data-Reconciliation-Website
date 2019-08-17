-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2017 at 04:53 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tut`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_number` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `purchased_items` varchar(100) NOT NULL,
  `purchased_date` date NOT NULL,
  `price` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_number`, `customer_name`, `purchased_items`, `purchased_date`, `price`) VALUES
(1, 'MOhan raj', 'iPhone', '2016-11-23', 649.00),
(2, 'Siva', 'iMac', '2016-11-24', 1999.05),
(3, 'Harish', 'iPhone 5s', '2016-11-24', 299.09),
(4, 'Raja', 'Macbook Pro', '2016-11-26', 1799.50),
(5, 'Praveen', 'iPad Air 2', '2016-11-27', 479.00),
(6, 'Moni', 'Apple Watch', '2016-11-27', 269.00),
(7, 'Ranjith', 'iMac', '2016-11-28', 1999.05),
(8, 'Sathish', 'iMac', '2016-11-30', 1999.05),
(9, 'Suba', 'iPhone 7', '2016-12-07', 649.00),
(10, 'Ruben', 'Apple TV', '2016-12-14', 199.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
