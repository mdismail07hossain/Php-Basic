-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2024 at 05:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `number` varchar(15) DEFAULT NULL,
  `department` varchar(20) DEFAULT 'Computer',
  `round` int(11) DEFAULT 62,
  `coursename` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `email`, `number`, `department`, `round`, `coursename`) VALUES
(1, 'Md Ismail hossain', 'mdismailhossain@example.com', '1234567890', 'Computer', 62, 'Web Application'),
(2, 'Md Munna HOssain', 'mdmrmrunna@example.com', '1234567891', 'Computer', 62, 'Operating Systems'),
(3, 'Md Rajib Hossain', 'mdragibhossain@example.com', '1234567892', 'Computer', 62, 'Data Structures'),
(4, 'Md Rafi Hossain', 'rafiprince@example.com', '1234567893', 'Computer', 62, 'Algorithms'),
(5, 'Rukeya Hossain', 'ruka.hunt@example.com', '1234567894', 'Computer', 62, 'Web Application'),
(6, 'Fiona Gallagher', 'fiona.gallagher@example.com', '1234567895', 'Computer', 62, 'Software Engineering'),
(7, 'George Bailey', 'george.bailey@example.com', '1234567896', 'Computer', 62, 'Database Management'),
(8, 'Hannah Baker', 'hannah.baker@example.com', '1234567897', 'Computer', 62, 'Operating Systems'),
(9, 'Ian Malcolm', 'ian.malcolm@example.com', '1234567898', 'Computer', 62, 'Data Structures'),
(10, 'Jane Doe', 'jane.doe@example.com', '1234567899', 'Computer', 62, 'Algorithms'),
(11, 'Kevin Flynn', 'kevin.flynn@example.com', '1234567890', 'Computer', 62, 'Networking'),
(12, 'Laura Palmer', 'laura.palmer@example.com', '1234567891', 'Computer', 62, 'Software Engineering'),
(13, 'Michael Scott', 'michael.scott@example.com', '1234567892', 'Computer', 62, 'Database Management'),
(14, 'Nancy Drew', 'nancy.drew@example.com', '1234567893', 'Computer', 62, 'Operating Systems'),
(15, 'Oscar Wilde', 'oscar.wilde@example.com', '1234567894', 'Computer', 62, 'Data Structures'),
(16, 'Paul Atreides', 'paul.atreides@example.com', '1234567895', 'Computer', 62, 'Algorithms'),
(17, 'Quincy Adams', 'quincy.adams@example.com', '1234567896', 'Computer', 62, 'Networking'),
(18, 'Rachel Green', 'rachel.green@example.com', '1234567897', 'Computer', 62, 'Software Engineering'),
(19, 'Steve Rogers', 'steve.rogers@example.com', '1234567898', 'Computer', 62, 'Database Management'),
(20, 'Tina Turner', 'tina.turner@example.com', '1234567899', 'Computer', 62, 'Operating Systems'),
(21, 'Uma Thurman', 'uma.thurman@example.com', '1234567890', 'Computer', 62, 'Data Structures'),
(22, 'Victor Hugo', 'victor.hugo@example.com', '1234567891', 'Computer', 62, 'Algorithms'),
(23, 'Wanda Maximoff', 'wanda.maximoff@example.com', '1234567892', 'Computer', 62, 'Networking'),
(24, 'Xander Harris', 'xander.harris@example.com', '1234567893', 'Computer', 62, 'Software Engineering'),
(25, 'Yara Greyjoy', 'yara.greyjoy@example.com', '1234567894', 'Computer', 62, 'Database Management'),
(26, 'Zara Larsson', 'zara.larsson@example.com', '1234567895', 'Computer', 62, 'Operating Systems'),
(27, 'Alan Grant', 'alan.grant@example.com', '1234567896', 'Computer', 62, 'Data Structures'),
(31, 'Md Rahat Hossain', 'rahathossain@gmail.com', '8742728947', 'Computer', 62, 'Web Application'),
(32, 'Md Ali Hossain', 'alihossain@gmail.com', '874272676747', 'Computer', 62, 'Web Application');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
