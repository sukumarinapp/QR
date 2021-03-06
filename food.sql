-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 06:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `category_description` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_description`, `status`) VALUES
(1, 'Starters', 'Starters', 'Active'),
(2, 'Beverages', 'Beverages', 'Active'),
(3, 'Soup', 'Soup', 'Active'),
(4, 'Kebabs', 'Kebabs', 'Active'),
(5, 'Noodles', 'Noodles', 'Active'),
(6, 'Dips', 'Dips', 'Active'),
(7, 'Veg main course', 'Veg main course', 'Active'),
(8, 'Non veg main course', 'Non veg main course', 'Active'),
(9, 'Rice', 'Rice', 'Active'),
(10, 'Biryani', 'Biryani', 'Active'),
(11, 'Mutton', 'Mutton', 'Active'),
(12, 'Beef', 'Starters', 'Active'),
(13, 'Sea food', 'ea food', 'Active'),
(14, 'North indian', 'North indian', 'Active'),
(15, 'South indian', 'South indian', 'Active'),
(16, 'Salads', 'Salads', 'Active'),
(17, 'Deserts', 'Deserts', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_table`
--

CREATE TABLE `hotel_table` (
  `id` int(10) NOT NULL,
  `center_id` int(10) NOT NULL,
  `table_name` varchar(10) NOT NULL,
  `table_description` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `website` varchar(100) NOT NULL,
  `file` varchar(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_table`
--

INSERT INTO `hotel_table` (`id`, `center_id`, `table_name`, `table_description`, `status`, `website`, `file`, `user_id`) VALUES
(1, 2, '1A', 'd', 'Active', 'https://rndhub.in/hotels/menu.php?table_id=1&center_id=2', 'qr/1.png', 1),
(2, 2, '2', 'd', 'Active', 'http://demo.galaxytechnologypark.com/hotels/menu.php?table_id=2&center_id=2', 'qr/2.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(50) DEFAULT NULL,
  `order_id` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `poskot`
--

CREATE TABLE `poskot` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `kotnub` int(11) NOT NULL,
  `tblnub` varchar(10) NOT NULL,
  `itmcod` int(11) NOT NULL,
  `itmnam` varchar(100) NOT NULL,
  `itmrat` decimal(10,0) NOT NULL,
  `itmqty` int(11) NOT NULL,
  `itmval` decimal(10,0) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posord`
--

CREATE TABLE `posord` (
  `order_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `kotnub` int(11) NOT NULL,
  `kotdat` int(11) NOT NULL,
  `kottim` decimal(5,2) NOT NULL,
  `tblnub` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `session_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `center_id` int(10) NOT NULL,
  `category_id` int(11) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `pricing` varchar(100) DEFAULT NULL,
  `status` varchar(1000) NOT NULL,
  `date` date DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  `photo` varchar(10) NOT NULL,
  `last_update` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `center_id`, `category_id`, `project_name`, `description`, `pricing`, `status`, `date`, `user_id`, `photo`, `last_update`) VALUES
(3, 2, 1, 'Dosa', 'A dosai or dosa or dose is a thin pancake or crepe, originating from South India, made from a fermen', '40', 'Out of Stock', NULL, 0, '3.jpg', '21/04/10'),
(4, 2, 3, 'Fried Rice', 'Fried rice is a dish of cooked rice that has been stir-fried in a wok or a frying pan and is usually', '120', 'In Stock', NULL, 0, '4.jpg', ''),
(5, 2, 2, 'Rice', 'Rice is the seed of the grass species Oryza sativa or less commonly Oryza glaberrima. As a cereal gr', '100', 'In Stock', NULL, 0, '5.jpg', ''),
(6, 2, 1, 'Idli', 'Idli or idly are a type of savoury rice cake, originating from the Indian subcontinent, popular as b', '20', 'In Stock', NULL, 0, '6.jpg', ''),
(7, 2, 1, 'Chapati', 'Chapati, also known as roti, rotli, safati, shabaati, phulka and roshi, is an unleavened flatbread o', '20', 'In Stock', NULL, 0, '7.jpg', ''),
(8, 2, 1, 'parotta', 'Paratha/Parotta or Porotta is an Subcontinental layered flatbread made from Maida or Atta, alternati', '20', 'In Stock', NULL, 0, '8.jpg', ''),
(11, 2, 3, 'Fried Rice', 'Fried rice is a dish of cooked rice that has been stir-fried in a wok or a frying pan and is usually', '120', 'In Stock', NULL, 0, '4.jpg', ''),
(12, 2, 3, 'Fried Rice', 'Fried rice is a dish of cooked rice that has been stir-fried in a wok or a frying pan and is usually', '120', 'In Stock', NULL, 0, '4.jpg', ''),
(13, 2, 3, 'Fried Rice', 'Fried rice is a dish of cooked rice that has been stir-fried in a wok or a frying pan and is usually', '120', 'In Stock', NULL, 0, '4.jpg', ''),
(14, 2, 3, 'Fried Rice', 'Fried rice is a dish of cooked rice that has been stir-fried in a wok or a frying pan and is usually', '120', 'In Stock', NULL, 0, '4.jpg', ''),
(15, 2, 3, 'Fried Rice', 'Fried rice is a dish of cooked rice that has been stir-fried in a wok or a frying pan and is usually', '120', 'In Stock', NULL, 0, '4.jpg', ''),
(16, 2, 2, 'Rice', 'Rice is the seed of the grass species Oryza sativa or less commonly Oryza glaberrima. As a cereal gr', '100', 'In Stock', NULL, 0, '5.jpg', ''),
(17, 2, 2, 'Rice', 'Rice is the seed of the grass species Oryza sativa or less commonly Oryza glaberrima. As a cereal gr', '100', 'In Stock', NULL, 0, '5.jpg', ''),
(18, 2, 2, 'Rice', 'Rice is the seed of the grass species Oryza sativa or less commonly Oryza glaberrima. As a cereal gr', '100', 'In Stock', NULL, 0, '5.jpg', ''),
(19, 2, 2, 'Rice', 'Rice is the seed of the grass species Oryza sativa or less commonly Oryza glaberrima. As a cereal gr', '100', 'In Stock', NULL, 0, '5.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `center_id` int(10) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `short_name` varchar(10) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `map` varchar(5000) NOT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  `payment_type` varchar(10) NOT NULL,
  `merchant_key` varchar(100) NOT NULL,
  `merchant_secret` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `photo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `center_id`, `full_name`, `short_name`, `project_name`, `email`, `password`, `mobile`, `address`, `map`, `user_type`, `role`, `payment_type`, `merchant_key`, `merchant_secret`, `status`, `photo`) VALUES
(1, 1, 'Galaxy Techno Park', '', '', ' eatersplate@gmail.com', '12345', '', '', '', 'Superadmin', 'Admin', '', '', '', 'Active', ''),
(2, 2, 'HILL TOP', 'HILL TOP', 'HILL TOP', 'hilltop@gmail.com', '12345', '+919443587282', 'aaa', '', 'Admin', '', '3', 'rzp_test_9ZlKlHAcHl3jKi', 'YKse758nLtqx3sxL66eb1ELH', 'Active', '69.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_table`
--
ALTER TABLE `hotel_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poskot`
--
ALTER TABLE `poskot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posord`
--
ALTER TABLE `posord`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hotel_table`
--
ALTER TABLE `hotel_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poskot`
--
ALTER TABLE `poskot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posord`
--
ALTER TABLE `posord`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
