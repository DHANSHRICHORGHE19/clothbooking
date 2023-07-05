-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 04:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(5) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_add` varchar(255) NOT NULL,
  `a_phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(5) NOT NULL,
  `c_id` int(5) NOT NULL,
  `bookcloth_id` int(50) NOT NULL,
  `b_date` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `total_amt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `c_id`, `bookcloth_id`, `b_date`, `size`, `total_amt`) VALUES
(35, 13, 3, '2023-01-18', 'S', ''),
(36, 13, 3, '2023-01-10', 'S', ''),
(37, 13, 3, '2023-01-10', 'S', ''),
(38, 13, 3, '2023-01-26', 'S', ''),
(39, 13, 3, '2023-01-26', 'S', ''),
(40, 13, 3, '2023-01-26', 'S', ''),
(41, 13, 3, '2023-01-26', 'S', ''),
(42, 13, 3, '2023-01-26', 'S', ''),
(43, 13, 3, '2023-01-26', 'S', '400'),
(44, 13, 15, '2023-01-25', 'S', '2000'),
(45, 13, 4, '2023-01-26', 'S', '1000'),
(46, 13, 4, '2023-01-26', 'S', '1000'),
(47, 13, 4, '2023-01-26', 'S', '1000'),
(48, 13, 4, '2023-01-26', 'S', '1000'),
(49, 13, 4, '2023-01-26', 'S', '1000'),
(50, 13, 4, '2023-01-26', 'S', '1000'),
(51, 13, 4, '2023-01-26', 'S', '1000'),
(52, 13, 4, '2023-01-26', 'S', '1000'),
(53, 13, 4, '2023-01-26', 'S', '1000'),
(54, 13, 4, '2023-01-26', 'S', '1000'),
(55, 13, 4, '2023-01-26', 'S', '1000'),
(56, 13, 4, '2023-01-26', 'S', '1000'),
(57, 13, 4, '2023-01-26', 'S', '1000'),
(58, 13, 4, '2023-01-26', 'S', '1000'),
(59, 13, 4, '2023-01-26', 'S', '1000'),
(60, 13, 4, '2023-01-26', 'S', '1000'),
(61, 13, 4, '2023-01-26', 'S', '1000'),
(62, 13, 4, '2023-01-26', 'S', '1000'),
(63, 13, 4, '2023-01-26', 'S', '1000'),
(64, 13, 4, '2023-01-26', 'S', '1000'),
(65, 13, 4, '2023-01-26', 'S', '1000'),
(66, 13, 4, '2023-01-26', 'S', '1000'),
(67, 13, 4, '2023-01-26', 'S', '1000'),
(68, 13, 4, '2023-01-26', 'S', '1000'),
(69, 13, 4, '2023-01-26', 'S', '1000'),
(70, 13, 4, '2023-01-26', 'S', '1000'),
(71, 13, 4, '2023-01-26', 'S', '1000'),
(72, 13, 4, '2023-01-26', 'S', '1000'),
(73, 13, 4, '2023-01-26', 'S', '1000'),
(74, 13, 4, '2023-01-26', 'S', '1000'),
(75, 13, 4, '2023-01-26', 'S', '1000'),
(76, 13, 4, '2023-01-26', 'S', '1000'),
(77, 13, 4, '2023-01-26', 'S', '1000'),
(78, 13, 4, '2023-01-26', 'S', '1000'),
(79, 13, 4, '2023-01-26', 'S', '1000'),
(80, 13, 4, '2023-01-26', 'S', '1000'),
(81, 13, 4, '2023-01-26', 'S', '1000'),
(82, 13, 4, '2023-01-26', 'S', '1000'),
(83, 13, 4, '2023-01-26', 'S', '1000'),
(84, 13, 3, '2023-01-26', 'M', '400'),
(85, 13, 3, '2023-01-27', 'S', '400'),
(86, 13, 3, '2023-01-27', 'S', '400'),
(87, 13, 3, '2023-01-27', 'S', '400'),
(88, 13, 3, '2023-01-27', 'S', '400'),
(89, 13, 3, '2023-01-27', 'S', '400'),
(90, 13, 4, '2023-01-27', 'M', '500'),
(91, 13, 3, '2023-01-27', 'S', '1200');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `cloth_id` int(11) NOT NULL,
  `cloth_name` varchar(255) NOT NULL,
  `cloth_category` varchar(255) NOT NULL,
  `cloth_desc` text NOT NULL,
  `cloth_price` float(10,2) NOT NULL,
  `cloth_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`cloth_id`, `cloth_name`, `cloth_category`, `cloth_desc`, `cloth_price`, `cloth_img`) VALUES
(1, 'Lehanga', 'women', 'Women\'s Net Embroidered Semi-Stitched Lehenga Choli', 800.00, './images/lehanga/leh2.jpeg'),
(2, 'Men Kurti', 'men', 'Men\'s Solid Straight Cotton Kurta (Light Green) Straight Cotton Kurta', 450.00, './images/men/menkurti3.webp'),
(3, 'Anarkali Kurti', 'women', 'Women\'s Cotton Printed Anarkali Kurti with Palazzo Pants Set, Floral', 400.00, './images/dress/dress2.jpeg'),
(4, 'Bridal lehanga', 'women', 'Fast Fashions Women\'s Chain Stitch Semi-Stitched Net Lehenga Choli (Gold_Free Size)', 500.00, './images/lehanga/leh3.jpeg'),
(5, 'Partywear gowns', 'women', 'Embellished Sequin Slit Sleeve Bodycon Dress Lavender Solid Accordion Pleats', 700.00, './images/party2.webp'),
(6, 'Anarkali Kurta', 'women', 'Women\'s Cotton Green Embroidered Anarkali Kurta with Dupatta', 500.00, './images/dress/dress1.jpeg'),
(8, 'Bridal Lehanga', 'women', 'Womens Jacquard Semi-Stitched Lehenga choli', 1000.00, './images/lehanga/leh3.jpeg'),
(9, 'Bridal Lehanga', 'women', 'Womens Jacquard Semi-Stitched Lehenga choli', 1500.00, './images/lehanga/leh4.jpeg'),
(10, 'Bridal Lehanga', 'women', 'Womens Jacquard Semi-Stitched Lehenga choli', 2000.00, './images/lehanga/leh5.jpeg'),
(11, 'Bridal Lehanga', 'women', 'Womens Jacquard Semi-Stitched Lehenga choli', 2000.00, './images/lehanga/leh6.jpeg'),
(12, 'Men\'s Wear', 'men', 'Men\'s Solid Straight Cotton Shirt (Light Green) Straight Cotton Kurta', 855.00, './images/men/M1.jpg'),
(13, 'Men\'s Wear', 'men', 'Men\'s Solid Straight Cotton Shirt (Light Green) Straight Cotton Kurta', 1000.00, './images/men/M2.jpg'),
(14, 'Men\'s Wear', 'men', 'Men\'s Solid Straight Cotton (Light Green) Straight Cotton', 1500.00, './images/men/M3.jpg'),
(15, 'Men\'s Wear', 'men', 'Men\'s Solid Straight Cotton (Light Green) Straight Cotton', 2000.00, './images/men/M4.jpg'),
(16, 'Men\'s Wear', 'men', 'Men\'s Solid Straight Cotton (Light Green) Straight Cotton', 1000.00, './images/men/P1.jpg'),
(17, 'Men\'s Wear', 'men', 'Men\'s Solid Straight Cotton (Light Green) Straight Cotton', 1500.00, './images/men/P2.jpg'),
(18, 'Men\'s Wear', 'men', 'Men\'s Solid Straight Cotton Kurta (Light Green) Straight Cotton Kurta', 850.00, './images/men/P3.jpg'),
(19, 'Men\'s Wear', 'men', 'Men\'s Solid Straight Cotton (Light Green) Straight Cotton ', 1500.00, './images/men/P6.jpg'),
(20, 'Women\'s Partywear', 'womenparty', 'Embellished Sequin Slit Sleeve Bodycon Dress Lavender Solid Accordion Pleats', 1000.00, './images/PARTY/P1.jpg'),
(21, 'Women\'s Wear', 'womenparty', 'Embellished Sequin Slit Sleeve Bodycon Dress Lavender Solid Accordion Pleats', 1500.00, './images/PARTY/P2.jpg'),
(22, 'Women\'s Wear', 'womenparty', 'Embellished Sequin Slit Sleeve Bodycon Dress Lavender Solid Accordion Pleats', 2000.00, './images/PARTY/P3.jpg'),
(23, 'Women\'s Wear', 'womenparty', 'Embellished Sequin Slit Sleeve Bodycon Dress Lavender Solid Accordion Pleats', 1800.00, './images/PARTY/P4.jpg'),
(24, 'Women\'s Wear', 'womenparty', 'Embellished Sequin Slit Sleeve Bodycon Dress Lavender Solid Accordion Pleats', 2500.00, './images/PARTY/P8.jpg'),
(25, 'Women\'s wear', 'womenparty', 'Embellished Sequin Slit Sleeve Bodycon Dress Lavender Solid Accordion Pleats', 1866.00, './images/PARTY/P9.jpg'),
(26, 'lehanga', 'women', 'hagsdbkn', 5200.00, './images/lehanga/lehanga1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(5) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pass_word` varchar(255) NOT NULL,
  `phone_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `first_name`, `last_name`, `user_name`, `pass_word`, `phone_no`) VALUES
(13, 'Shrinivas', 'Hatte', 'shrihatte@gmail.com', 'BooZDeLtA', 8605048847),
(23, 'Manasi', 'Chorghe', 'manu23@gmail.com', 'manu#45', 85964125),
(24, 'madhav', 'jadhav', 'madhav23@gmail.com', 'madhu#45', 78451245785677),
(25, 'hjjhb', 'hjbkmn', 'shba,nm ', 'erijflkd,', 879645312222222222);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `b_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `p_amt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `booking_ibfk_1` (`c_id`);

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`cloth_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `pass_word` (`pass_word`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `b_id` (`b_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `cloth_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `booking` (`b_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
