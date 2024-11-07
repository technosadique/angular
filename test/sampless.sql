-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 09:42 AM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `sampless`
--

CREATE TABLE `sampless` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `deleted_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sampless`
--

INSERT INTO `sampless` (`id`, `name`, `state`, `zip`, `amount`, `qty`, `item`, `deleted_at`) VALUES
(1, 'Liquid Saffon', 'NY', '08998', '25.43', '7', 'XCD4530', NULL),
(2, 'Mostly Slugss', 'PA', '19008', '13.30', '2', 'AAH6748', NULL),
(3, 'Jump Stain', 'CA', '99388', '56.00', '3', 'MKII4400', NULL),
(4, 'Scheckled Sherlock', 'WA', '88990', '987.56', '1', 'TR909', NULL),
(5, 'test', 'test', 'test', 'test', 'test', 'test', '2022-08-13 15:06:12'),
(6, 'test', 'test', 'test', 'test', 'test', 'test', '2022-08-13 15:05:58'),
(7, 'test', 'test', 'test', 'test', 'test', 'test', '2022-08-13 14:36:12'),
(8, 'gff', 'fg', 'fg', 'fgf', 'gf', 'gfg', '2022-08-13 15:05:42'),
(9, 'test', 'KA', '520222', '4500', '4', 'cd', '2022-08-13 15:02:46'),
(10, 'test', 'KA', '520222', '4500', '4', 'cd', '2022-08-13 15:04:38'),
(11, 'google', 'JH', '821005', '1500', '2', 'laptopppp', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sampless`
--
ALTER TABLE `sampless`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sampless`
--
ALTER TABLE `sampless`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
