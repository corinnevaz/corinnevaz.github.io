-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2019 at 11:45 PM
-- Server version: 5.7.20
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_product`
--

CREATE TABLE `bill_product` (
  `bill_prod` int(10) NOT NULL,
  `bill_id` int(10) NOT NULL,
  `prod_id` int(10) NOT NULL,
  `pharmacy_id` int(10) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill_product`
--

INSERT INTO `bill_product` (`bill_prod`, `bill_id`, `prod_id`, `pharmacy_id`, `status`) VALUES
(1, 1, 5, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 23, 20, NULL, NULL),
(4, 26, 8, NULL, NULL),
(5, 27, 5, NULL, NULL),
(6, 28, 4, NULL, NULL),
(7, 28, 3, NULL, NULL),
(8, 29, 5, NULL, NULL),
(9, 30, 1, NULL, NULL),
(10, 30, 2, NULL, NULL),
(11, 30, 4, NULL, NULL),
(12, 31, 1, NULL, NULL),
(13, 31, 2, NULL, NULL),
(14, 31, 4, NULL, NULL),
(15, 32, 1, NULL, NULL),
(26, 36, 3, NULL, NULL),
(27, 37, 4, NULL, NULL),
(28, 37, 3, NULL, NULL),
(39, 43, 4, NULL, NULL),
(40, 43, 1, NULL, NULL),
(41, 44, 19, NULL, NULL),
(42, 44, 18, NULL, NULL),
(43, 45, 1, NULL, NULL),
(44, 45, 2, NULL, NULL),
(45, 45, 1, NULL, NULL),
(46, 46, 1, NULL, NULL),
(47, 46, 2, NULL, NULL),
(48, 46, 1, NULL, NULL),
(49, 47, 1, NULL, NULL),
(50, 47, 2, NULL, NULL),
(51, 47, 1, NULL, NULL),
(52, 48, 1, NULL, NULL),
(53, 48, 2, NULL, NULL),
(54, 48, 1, NULL, NULL),
(55, 49, 1, 1, 'order accepted'),
(56, 49, 2, 2, 'order recieved'),
(57, 49, 4, 2, 'dispatched'),
(58, 50, 1, 1, 'cancelled'),
(59, 50, 2, 2, 'order recieved'),
(60, 50, 3, 1, 'accepted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_product`
--
ALTER TABLE `bill_product`
  ADD PRIMARY KEY (`bill_prod`),
  ADD KEY `bill-product_ibfk_2` (`bill_id`),
  ADD KEY `prod_id` (`prod_id`) USING BTREE,
  ADD KEY `pharmacy_id` (`pharmacy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_product`
--
ALTER TABLE `bill_product`
  MODIFY `bill_prod` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill_product`
--
ALTER TABLE `bill_product`
  ADD CONSTRAINT `bill_product_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `bill_product_ibfk_2` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`bill_id`),
  ADD CONSTRAINT `bill_product_ibfk_3` FOREIGN KEY (`pharmacy_id`) REFERENCES `pharmacy` (`pharmacy_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
