-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 05:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trianeere_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `traineer`
--

CREATE TABLE `traineer` (
  `id` int(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `number` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `traineer`
--

INSERT INTO `traineer` (`id`, `name`, `email`, `number`) VALUES
(1, 'ismail', 'ismail@gamil.com', '+8803428757834782'),
(2, 'munna', 'munna@gmail.com', '+88012764872178'),
(3, 'ali', 'ali@gmail.com', '+88012346414676'),
(4, 'rajib', 'ragib@gmail.com', '+88012861487'),
(5, 'rafi', 'rafi@mail.com', '+880136476427641'),
(6, 'rahat', 'rahat@gmail.com', '+088013743985');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `traineer`
--
ALTER TABLE `traineer`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
