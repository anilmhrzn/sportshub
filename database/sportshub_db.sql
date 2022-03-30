-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 11:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportshub_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Anil Maharjan', 'anilmaharjan995@gmail.com', 'anilmaharjan995', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Football'),
(2, 'Cricket'),
(3, 'Basketball'),
(4, 'Table Tennis'),
(5, 'Volleyball'),
(6, 'Badminton');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Anil', 'anilmaharjan995@gmail.com', 'anilmaharjan995', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `total_price` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_categories_id` int(11) DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `popular` tinyint(1) DEFAULT 0,
  `image_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `sub_categories_id`, `price`, `description`, `popular`, `image_address`) VALUES
(1, 'football jersy realmadrid', 1, 1, 1000, 'football jersy of real madrid of high quality', 1, './../images/real_madrid_jersy.jpg'),
(2, 'football', 1, 6, 3000, 'football of high quality', 0, NULL),
(3, 'football shocks', 1, 4, 300, 'high quality of shocks with sweat absorbtion', NULL, NULL),
(4, 'football gloves', 1, 3, 900, 'high quality of gloves with sweat absorbtion', NULL, NULL),
(5, 'table tennis gloves', 4, 3, 2000, 'high quality of shocks with sweat absorbtion', NULL, NULL),
(6, 'table tennis shocks', 4, 4, 300, 'high quality of shocks with sweat absorbtion', 0, NULL),
(7, 'adidas predator', 1, 8, 900, NULL, 1, './../images/adidas predator.jpg'),
(8, 'adidas 19+', 1, 8, NULL, NULL, 1, './../images/adidas 19+.jpg'),
(9, 'adidas copa', 1, 8, NULL, NULL, 0, NULL),
(10, 'adidas X 506+', 1, NULL, NULL, NULL, 0, NULL),
(11, 'nike CZ', 1, NULL, NULL, NULL, 0, NULL),
(12, 'nike superfly 7', 1, 8, NULL, NULL, 0, NULL),
(13, 'nike tiempo legend', 1, 8, NULL, NULL, 0, NULL),
(14, 'soccer bible', 1, 8, NULL, NULL, 0, NULL),
(15, 'nike tiempo legend 8\'nouveau white\'', 1, 8, NULL, NULL, 0, NULL),
(16, 'nike magista obra', 1, 8, NULL, NULL, 0, NULL),
(17, 'adidas ball', 1, 6, NULL, NULL, 0, NULL),
(18, 'champion league ball', 1, 6, NULL, NULL, 0, NULL),
(19, 'europa league', 1, 6, NULL, NULL, 0, NULL),
(20, 'fifa world cup ball', 1, 6, NULL, NULL, 0, NULL),
(21, 'laliga santander', 1, 6, NULL, NULL, 0, NULL),
(22, 'Mr Yod ball', 1, 6, NULL, NULL, 0, NULL),
(23, 'premier league ball', 1, 6, NULL, NULL, 0, NULL),
(24, 'Argentina jersey', 1, 1, NULL, NULL, 0, NULL),
(25, 'manchester united', 1, 1, NULL, NULL, 0, NULL),
(26, 'barcelona ', 1, 1, NULL, NULL, 0, NULL),
(27, 'Brazil jersey', 1, 1, NULL, NULL, 0, NULL),
(28, 'nepal jersey', 1, 1, NULL, NULL, 0, NULL),
(29, 'manchester city', 1, 1, NULL, NULL, 0, NULL),
(30, 'skyblue sublimation', 1, 1, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `product_id` int(11) DEFAULT NULL,
  `stocks_left` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`) VALUES
(1, 'T-shirt'),
(2, 'shorts'),
(3, 'gloves'),
(4, 'shocks'),
(5, 'caps'),
(6, 'tools'),
(7, 'gaurds'),
(8, 'shoes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ordersNDcategory` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_categoryNDproducts` (`category_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD KEY `FK_stocksNDproducts` (`product_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_ordersNDcategory` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_categoryNDproducts` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `FK_stocksNDproducts` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
