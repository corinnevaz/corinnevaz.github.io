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
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
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
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`pharmacy_id`, `pharmacy_name`, `pharmacy_email`, `pharmacy_password`, `p_address`, `p_contact`, `p_store_reg_no`, `p_lic_no`, `pharmacy_image`) VALUES
(1, 'abc', 'abc@gmail.com', 'abc', NULL, NULL, NULL, NULL, NULL),
(2, 'xyz', 'xyz@gmail.com', 'xyz', NULL, NULL, NULL, NULL, NULL),
(3, 'corn', 'c@gmail.com', 'c', NULL, NULL, NULL, NULL, NULL),
(4, 'corn', 'cd@gmail.com', 'cd', NULL, NULL, NULL, NULL, '1METS-HDToContactUs.jpg'),
(6, 'corn', 'a@gmail.com', 'sd', NULL, NULL, NULL, NULL, 'alaspan-1406055052-10000021.JPG'),
(7, 'cgchg', 'hhbuy', 'jhjh', NULL, 9960644902, NULL, NULL, NULL),
(8, 'khyati', 'sikandar@gmail.com', 'a', 'flat b 3 durvankur 2\r\npanchwati pashan', 9999999999, '45354grgfv54', 'gfg45454vv', '476438670.jpg'),
(9, 'khyati', 'sikandar@gmail.com', 'a', 'flat b 3 durvankur 2\r\npanchwati pashan', 9999999999, '45354grgfv54', 'gfg45454vv', '476438670.jpg'),
(10, '', 'sikandar@gmail.com', 's', 'flat b 3 durvankur 2\r\npanchwati pashan', 9999999999, '45354grgfv54', 'gfg45454vv', '7d071085-dcd2-48e1-8a6a-50ec4469ed51_1.46d360f6c7bc2cdeb1a862b60155b3a1.jpeg'),
(11, '', 'sikandar@gmail.com', 's', 'flat b 3 durvankur 2\r\npanchwati pashan', 9999999999, '45354grgfv54', 'gfg45454vv', '7d071085-dcd2-48e1-8a6a-50ec4469ed51_1.46d360f6c7bc2cdeb1a862b60155b3a1.jpeg'),
(12, 'khyati', 'sikandar@gmail.com', 'siki', 'flat b 3 durvankur 2\r\npanchwati pashan', 9999999999, '45354grgfv54', 'gfg45454vv', '7d071085-dcd2-48e1-8a6a-50ec4469ed51_1.46d360f6c7bc2cdeb1a862b60155b3a1.jpeg'),
(13, 'khyati', 'sikandar@gmail.com', 'siki', 'flat b 3 durvankur 2\r\npanchwati pashan', 9999999999, '45354grgfv54', 'gfg45454vv', '7d071085-dcd2-48e1-8a6a-50ec4469ed51_1.46d360f6c7bc2cdeb1a862b60155b3a1.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`pharmacy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `pharmacy_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
