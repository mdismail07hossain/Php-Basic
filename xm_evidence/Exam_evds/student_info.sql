-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2024 at 07:26 AM
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
-- Database: `student_info`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `b_insert` (IN `n` VARCHAR(100), IN `c` VARCHAR(100))   BEGIN
INSERT INTO manufacturer SET id=null,name=n,contact_no=c;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_insert` (IN `na` VARCHAR(100), IN `p` INT(5), IN `m` INT(11))   BEGIN
INSERT INTO product (name,price,manufacturer_id)VALUES(na,p,m);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `r_insert` (IN `ns` VARCHAR(100), IN `p` DOUBLE(10,2), IN `si` INT(11))   BEGIN
INSERT INTO s_result (name_s,price,s_id)VALUES(ns,p,si);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `s_insert` (IN `n` VARCHAR(100), IN `a` VARCHAR(100), IN `c` VARCHAR(100))   BEGIN
INSERT INTO n_student SET id=null,s_name=n,address=a,s_contact=c;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `display_info`
-- (See below for the actual view)
--
CREATE TABLE `display_info` (
`s_name` varchar(100)
,`address` varchar(100)
,`s_contact` varchar(100)
,`name_s` varchar(100)
,`price` double(10,2)
);

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
(3, 'Md Rajib Hossain', 'mdragibhossain@example.com', '01752477208', 'Computer', 62, 'Web Appcation'),
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
(24, 'Xander Harris', 'xander.harris@example.com', '1234567893', 'Computer', 62, 'Software Engineering'),
(25, 'Yara Greyjoy', 'yara.greyjoy@example.com', '1234567894', 'Computer', 62, 'Database Management'),
(26, 'Zara Larsson', 'zara.larsson@example.com', '1234567895', 'Computer', 62, 'Operating Systems'),
(31, 'Md Rahat Hossain', 'rahathossain@gmail.com', '8742728947', 'Computer', 62, 'Web Application'),
(32, 'Md Ali Hossain', 'alihossain@gmail.com', '01646577854', 'Computer', 62, 'Web Application'),
(33, 'Mirza Hossain', 'mdismail@gmail.com', '564143213216415', 'Computer', 62, 'Web Appcation');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `contact_no`) VALUES
(1, 'BMW', '02316542'),
(3, 'oppo', '023465465'),
(4, 'Redmi', '032145643');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `delete_p` AFTER DELETE ON `manufacturer` FOR EACH ROW BEGIN
DELETE FROM product WHERE manufacturer_id=old.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `n_student`
--

CREATE TABLE `n_student` (
  `id` int(11) NOT NULL,
  `s_name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `s_contact` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `n_student`
--

INSERT INTO `n_student` (`id`, `s_name`, `address`, `s_contact`) VALUES
(12, 'Redmi', 'Dhaka', '021564'),
(14, 'A4tech', 'Dhaka', '0214574'),
(16, 'Hero ', 'Dhaka', '0211564'),
(17, 'BMW', 'Dhaka', '14207850256'),
(18, 'BMW', 'Dhaka', '14207850256');

--
-- Triggers `n_student`
--
DELIMITER $$
CREATE TRIGGER `delete_product` AFTER DELETE ON `n_student` FOR EACH ROW BEGIN
DELETE FROM s_result WHERE s_id=old.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` int(5) DEFAULT NULL,
  `manufacturer_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(1, 'Car', 200000, 1),
(4, 'Oppo C199', 20000, 3),
(5, 'Phone', 5001, 4),
(6, 'Phone', 2000, 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_v`
-- (See below for the actual view)
--
CREATE TABLE `product_v` (
`s_name` varchar(100)
,`address` varchar(100)
,`s_contact` varchar(100)
,`name_s` varchar(100)
,`price` double(10,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `p_display`
-- (See below for the actual view)
--
CREATE TABLE `p_display` (
`name` varchar(100)
,`contact_no` varchar(50)
,`p_name` varchar(50)
,`price` int(5)
);

-- --------------------------------------------------------

--
-- Table structure for table `s_result`
--

CREATE TABLE `s_result` (
  `id` int(11) NOT NULL,
  `name_s` varchar(100) DEFAULT NULL,
  `price` double(10,2) DEFAULT NULL,
  `s_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s_result`
--

INSERT INTO `s_result` (`id`, `name_s`, `price`, `s_id`) VALUES
(16, 'keyborde', 6000.00, 14),
(17, 'Mouse', 10000.00, 14),
(18, 'Bike', 2000.00, 12),
(19, 'Phone', 2000.00, 12),
(20, 'keyborde', 3000.00, 16),
(24, 'Bike', 200000.00, 16),
(25, 'Car', 20000000.00, 17);

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

-- --------------------------------------------------------

--
-- Stand-in structure for view `valid_p`
-- (See below for the actual view)
--
CREATE TABLE `valid_p` (
`name` varchar(100)
,`contact_no` varchar(50)
,`p_name` varchar(50)
,`price` int(5)
);

-- --------------------------------------------------------

--
-- Structure for view `display_info`
--
DROP TABLE IF EXISTS `display_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `display_info`  AS SELECT `n_student`.`s_name` AS `s_name`, `n_student`.`address` AS `address`, `n_student`.`s_contact` AS `s_contact`, `s_result`.`name_s` AS `name_s`, `s_result`.`price` AS `price` FROM (`n_student` join `s_result`) WHERE `n_student`.`id` = `s_result`.`s_id` ;

-- --------------------------------------------------------

--
-- Structure for view `product_v`
--
DROP TABLE IF EXISTS `product_v`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_v`  AS SELECT `display_info`.`s_name` AS `s_name`, `display_info`.`address` AS `address`, `display_info`.`s_contact` AS `s_contact`, `display_info`.`name_s` AS `name_s`, `display_info`.`price` AS `price` FROM `display_info` WHERE `display_info`.`price` > 5000 ORDER BY `display_info`.`s_name` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `p_display`
--
DROP TABLE IF EXISTS `p_display`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `p_display`  AS SELECT `manufacturer`.`name` AS `name`, `manufacturer`.`contact_no` AS `contact_no`, `product`.`name` AS `p_name`, `product`.`price` AS `price` FROM (`manufacturer` join `product`) WHERE `product`.`manufacturer_id` = `manufacturer`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `valid_p`
--
DROP TABLE IF EXISTS `valid_p`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `valid_p`  AS SELECT `p_display`.`name` AS `name`, `p_display`.`contact_no` AS `contact_no`, `p_display`.`p_name` AS `p_name`, `p_display`.`price` AS `price` FROM `p_display` WHERE `p_display`.`price` > 5000 ORDER BY `p_display`.`name` ASC ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `n_student`
--
ALTER TABLE `n_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_result`
--
ALTER TABLE `s_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traineer`
--
ALTER TABLE `traineer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `n_student`
--
ALTER TABLE `n_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `s_result`
--
ALTER TABLE `s_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
