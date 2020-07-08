-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2019 at 11:44 PM
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
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(10) NOT NULL,
  `bill_date` date NOT NULL,
  `bill_amount` float NOT NULL,
  `customer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `bill_date`, `bill_amount`, `customer_id`) VALUES
(1, '2019-02-25', 122.54, 1),
(18, '2019-02-27', 233.35, 2),
(19, '2019-02-27', 175.6, 1),
(22, '2019-02-27', 5648.2, 2),
(23, '2019-02-27', 112.6, 1),
(24, '2019-02-27', 5648.2, 2),
(25, '2019-02-27', 5648.2, 2),
(26, '2019-02-27', 5648.2, 2),
(27, '2019-02-27', 850.75, 1),
(28, '2019-02-27', 303.7, 1),
(29, '2019-02-27', 850.75, 1),
(30, '2019-02-27', 359.35, 2),
(31, '2019-02-27', 359.35, 2),
(32, '2019-02-27', 359.35, 2),
(33, '2019-02-27', 359.35, 2),
(34, '2019-02-27', 283.75, 2),
(35, '2019-02-27', 283.75, 2),
(36, '2019-02-27', 303.7, 1),
(37, '2019-02-27', 303.7, 1),
(43, '2019-02-27', 222.85, 1),
(44, '2019-02-27', 220.75, 1),
(45, '2019-02-28', 283.75, 1),
(46, '2019-02-28', 283.75, 1),
(47, '2019-02-28', 283.75, 1),
(48, '2019-02-28', 283.75, 1),
(49, '2019-03-01', 359.35, 1),
(50, '2019-03-01', 411.85, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
