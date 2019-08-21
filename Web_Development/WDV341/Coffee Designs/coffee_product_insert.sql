-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 08:57 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdv341`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffee_product_insert`
--

CREATE TABLE `coffee_product_insert` (
  `coffee_product_id` int(11) NOT NULL,
  `coffee_product_name` varchar(50) NOT NULL,
  `coffee_product_price` decimal(15,0) NOT NULL,
  `coffee_product_quantity` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coffee_product_insert`
--

INSERT INTO `coffee_product_insert` (`coffee_product_id`, `coffee_product_name`, `coffee_product_price`, `coffee_product_quantity`) VALUES
(1, 'Clay Waffle', '5', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffee_product_insert`
--
ALTER TABLE `coffee_product_insert`
  ADD PRIMARY KEY (`coffee_product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coffee_product_insert`
--
ALTER TABLE `coffee_product_insert`
  MODIFY `coffee_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
