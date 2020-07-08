-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2019 at 11:46 PM
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
-- Table structure for table `ver_pharmacy`
--

CREATE TABLE `ver_pharmacy` (
  `pharmacy_id` int(10) NOT NULL,
  `pharmacy_name` varchar(100) NOT NULL,
  `pharmacy_email` varchar(100) NOT NULL,
  `pharmacy_password` varchar(100) NOT NULL,
  `p_address` varchar(100) DEFAULT NULL,
  `p_contact` bigint(100) DEFAULT NULL,
  `p_store_reg_no` varchar(100) DEFAULT NULL,
  `p_lic_no` varchar(100) DEFAULT NULL,
  `pharmacy_image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ver_pharmacy`
--
ALTER TABLE `ver_pharmacy`
  ADD PRIMARY KEY (`pharmacy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ver_pharmacy`
--
ALTER TABLE `ver_pharmacy`
  MODIFY `pharmacy_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
