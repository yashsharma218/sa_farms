-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 09:47 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sa_farms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin'),
(5, 'Yash', 'yash', 'yash');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `customer_category` varchar(15) DEFAULT NULL,
  `number` bigint(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `requirement` varchar(30) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` blob,
  `name` varchar(30) DEFAULT NULL,
  `category` varchar(40) DEFAULT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `name`, `category`, `description`) VALUES
(1, 0x696d616765732f62616e616e612e6a7067, 'Banana', 'dominant_fruits', ''),
(2, 0x696d616765732f6f6e696f6e2e6a7067, 'Onion', 'vegetable', ''),
(3, 0x696d616765732f6772617065732e6a7067, 'Grapes', 'dominant_fruits', ''),
(5, 0x696d616765732f63757374617265645f6170706c652e6a7067, 'Custared  Apple', 'dominant_fruits', ''),
(7, 0x696d616765732f706f6d6772616e6174652e6a7067, 'Pomgranate   ', 'dominant_fruits', ''),
(8, 0x696d616765732f67756176612e6a7067, 'Guava', 'dominant_fruits', ''),
(10, 0x696d616765732f6761726c69632e6a7067, 'Garlic', 'vegetable', ''),
(11, 0x696d616765732f746f6d6f74746f2e6a7067, 'Tomotto', 'vegetable', ''),
(12, 0x696d616765732f736f726768756d2e6a7067, 'Sorghum ', 'food_grain', ''),
(13, 0x696d616765732f77686561742e6a7067, 'Wheat', 'food_grain', ''),
(14, 0x696d616765732f706561726c5f6d696c6c65742e6a7067, 'Pearl Millet(Bajri)', 'food_grain', ''),
(15, 0x696d616765732f636f726e2e6a7067, 'Corn ( Maka)', 'food_grain', ''),
(16, 0x696d616765732f726963652e6a7067, 'Rice', 'food_grain', ''),
(17, 0x696d616765732f746f6f722e6a7067, 'Toor', 'pulses', ''),
(18, 0x696d616765732f6d6f6f6e672e6a7067, 'Moong', 'pulses', ''),
(19, 0x696d616765732f6368616e6e612e6a7067, 'Channa(Harbhara )    ', 'pulses', ''),
(20, 0x696d616765732f756469642e6a7067, 'Udid (Urad)', 'pulses', ''),
(21, 0x696d616765732f6368696c6c792e6a7067, 'Chilly', 'spices', '');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `offer` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `veg_name` varchar(100) DEFAULT NULL,
  `categories` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `photo` blob,
  `stock` varchar(15) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'New',
  `sale_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `veg_name`, `categories`, `price`, `photo`, `stock`, `description`, `status`, `sale_price`) VALUES
(16, 'product 4', 'Vegetable', 20, 0x696d616765732f696e7374616772616d2d696d672d30382e6a7067, 'In Stock', 'this is demo descriptionthis is demo descriptionthis is demo descriptionthis is demo descriptionthis is demo', 'Sale', 0),
(17, 'Product1', 'Fruit', 100, 0x696d616765732f736d702d696d672d30322e6a7067, 'In Stock', 'This IS Demo Description This IS Demo Description This IS Demo Description This IS Demo Description This IS Demo Description', 'New', 0),
(18, 'Product2', 'Fruit', 200, 0x696d616765732f696e7374616772616d2d696d672d30352e6a7067, 'In Stock', 'This IS Demo Description This IS Demo Description This IS Demo Description This IS Demo Description', 'New', 0),
(19, 'Product3', 'Fruit', 300, 0x696d616765732f696e7374616772616d2d696d672d30322e6a7067, 'In Stock', 'This IS Demo Description This IS Demo Description This IS Demo Description This IS Demo Description', 'New', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `product_name` varchar(30) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `payment_method` varchar(30) DEFAULT NULL,
  `shipping_method` varchar(70) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `grand_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(24) DEFAULT NULL,
  `photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `photo`) VALUES
(17, 'Yash Sharma', 'yashsharma@gmail.com', 'yashsharma', 0x696d616765732f);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `offer` (`offer`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
