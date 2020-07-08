-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2019 at 03:22 AM
-- Server version: 5.7.22
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicalweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(100) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `doctor_id` int(10) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `doctor_ad` varchar(50) NOT NULL,
  `doctor_city` varchar(50) NOT NULL,
  `a_date` varchar(50) NOT NULL,
  `a_time` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_mobile` bigint(20) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `customer_id`, `doctor_id`, `doctor_name`, `doctor_ad`, `doctor_city`, `a_date`, `a_time`, `customer_name`, `customer_mobile`, `Status`) VALUES
(1, 1, 25, 'corinne', 'B-17', '', '2019-03-15', '09:34', 'abc', 5678655, 'CANCELLED BY CUSTOMER'),
(2, 1, 25, 'corinne', 'B-17', '', '2019-03-15', '09:34', 'abc', 5678655, 'Cancelled by customer'),
(3, 1, 25, 'corinne', 'B-17', '', '2019-03-06', '08:45', 'abc', 3782468, 'ACCEPTED'),
(4, 2, 25, 'corinne', 'B-17', '', '2019-03-06', '08:45', 'abc', 3782468, 'CANCELLED BY DOCTOR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `customer_id` (`customer_id`,`doctor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
