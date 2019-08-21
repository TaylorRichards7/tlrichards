-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 08:56 PM
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
-- Table structure for table `coffee_designs_user`
--

CREATE TABLE `coffee_designs_user` (
  `coffee_user_id` int(11) NOT NULL,
  `coffee_user_name` varchar(50) NOT NULL,
  `coffee_user_password` varchar(50) NOT NULL,
  `coffee_user_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coffee_designs_user`
--

INSERT INTO `coffee_designs_user` (`coffee_user_id`, `coffee_user_name`, `coffee_user_password`, `coffee_user_type`) VALUES
(8, 'coffeeUser', 'coffee123', 'customer'),
(9, 'coffeeAdmin', 'admin456', 'administrator'),
(10, 'coffeeUser', 'cofee123', ''),
(11, 'coffeeAdmin', 'admin456', ''),
(12, 'coffeeUser', 'coffee123', ''),
(13, 'coffeeUser', 'coffee123', ''),
(14, 'coffeeUser', 'coffee123', ''),
(15, 'coffeeAdmin', 'admin456', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffee_designs_user`
--
ALTER TABLE `coffee_designs_user`
  ADD PRIMARY KEY (`coffee_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coffee_designs_user`
--
ALTER TABLE `coffee_designs_user`
  MODIFY `coffee_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
