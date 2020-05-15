-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 01:22 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `partnersid` int(10) UNSIGNED DEFAULT NULL,
  `bankid` tinyint(3) UNSIGNED DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `cityid` tinyint(3) UNSIGNED DEFAULT NULL,
  `countryid` tinyint(3) UNSIGNED DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `countryid` tinyint(3) UNSIGNED DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `reg_date`) VALUES
(1, 'bangladesh', '2018-11-10 06:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` double(8,2) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` datetime DEFAULT NULL,
  `gender` tinyint(2) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `cityid` tinyint(3) UNSIGNED DEFAULT NULL,
  `contact` varchar(20) NOT NULL,
  `verify` tinyint(2) DEFAULT NULL,
  `picture` tinyint(4) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `identity_type` tinyint(2) UNSIGNED DEFAULT NULL,
  `identity_number` tinyint(2) UNSIGNED DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `cityid` tinyint(3) UNSIGNED DEFAULT NULL,
  `contact` varchar(20) NOT NULL,
  `verify` tinyint(2) DEFAULT NULL,
  `picture` tinyint(4) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productcolors`
--

CREATE TABLE `productcolors` (
  `id` int(10) UNSIGNED NOT NULL,
  `colorid` tinyint(3) UNSIGNED DEFAULT NULL,
  `productid` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `vat` double(8,2) DEFAULT NULL,
  `discount` double(8,2) DEFAULT NULL,
  `video` varchar(50) DEFAULT NULL,
  `unitid` tinyint(3) UNSIGNED DEFAULT NULL,
  `subcategoryid` tinyint(3) UNSIGNED DEFAULT NULL,
  `stock` varchar(50) DEFAULT NULL,
  `partnersid` int(10) UNSIGNED DEFAULT NULL,
  `couponid` tinyint(3) UNSIGNED DEFAULT NULL,
  `picture1` varchar(4) DEFAULT NULL,
  `picture2` varchar(4) DEFAULT NULL,
  `picture3` varchar(4) DEFAULT NULL,
  `picture4` varchar(4) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productsizes`
--

CREATE TABLE `productsizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `sizeid` tinyint(3) UNSIGNED DEFAULT NULL,
  `productid` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `customerid` int(10) UNSIGNED DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `couponid` tinyint(3) UNSIGNED DEFAULT NULL,
  `shippingid` tinyint(3) UNSIGNED DEFAULT NULL,
  `paymentid` int(10) UNSIGNED DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salesdetails`
--

CREATE TABLE `salesdetails` (
  `id` int(10) UNSIGNED NOT NULL,
  `salesid` tinyint(3) UNSIGNED DEFAULT NULL,
  `productid` int(10) UNSIGNED DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `vat` double(8,2) DEFAULT NULL,
  `discount` double(8,2) DEFAULT NULL,
  `quantity` tinyint(3) UNSIGNED DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `Countryid` tinyint(3) UNSIGNED DEFAULT NULL,
  `amount` double(8,2) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `categoryid` tinyint(3) UNSIGNED DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `bankid` tinyint(3) UNSIGNED DEFAULT NULL,
  `amount` double(8,2) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `accounted` tinyint(3) UNSIGNED DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `productid` int(10) UNSIGNED DEFAULT NULL,
  `customersid` int(10) UNSIGNED DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partnersid` (`partnersid`),
  ADD KEY `bankid` (`bankid`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cityid` (`cityid`),
  ADD KEY `countryid` (`countryid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countryid` (`countryid`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cityid` (`cityid`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cityid` (`cityid`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcolors`
--
ALTER TABLE `productcolors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `colorid` (`colorid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unitid` (`unitid`),
  ADD KEY `subcategoryid` (`subcategoryid`),
  ADD KEY `partnersid` (`partnersid`);

--
-- Indexes for table `productsizes`
--
ALTER TABLE `productsizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sizeid` (`sizeid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerid` (`customerid`),
  ADD KEY `couponid` (`couponid`),
  ADD KEY `shippingid` (`shippingid`),
  ADD KEY `paymentid` (`paymentid`);

--
-- Indexes for table `salesdetails`
--
ALTER TABLE `salesdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salesid` (`salesid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Countryid` (`Countryid`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bankid` (`bankid`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productid` (`productid`),
  ADD KEY `customersid` (`customersid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productcolors`
--
ALTER TABLE `productcolors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productsizes`
--
ALTER TABLE `productsizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salesdetails`
--
ALTER TABLE `salesdetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`partnersid`) REFERENCES `partners` (`id`),
  ADD CONSTRAINT `accounts_ibfk_2` FOREIGN KEY (`bankid`) REFERENCES `banks` (`id`);

--
-- Constraints for table `banks`
--
ALTER TABLE `banks`
  ADD CONSTRAINT `banks_ibfk_1` FOREIGN KEY (`cityid`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `banks_ibfk_2` FOREIGN KEY (`countryid`) REFERENCES `countries` (`id`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`countryid`) REFERENCES `countries` (`id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`cityid`) REFERENCES `cities` (`id`);

--
-- Constraints for table `partners`
--
ALTER TABLE `partners`
  ADD CONSTRAINT `partners_ibfk_1` FOREIGN KEY (`cityid`) REFERENCES `cities` (`id`);

--
-- Constraints for table `productcolors`
--
ALTER TABLE `productcolors`
  ADD CONSTRAINT `productcolors_ibfk_1` FOREIGN KEY (`colorid`) REFERENCES `colors` (`id`),
  ADD CONSTRAINT `productcolors_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`unitid`) REFERENCES `units` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`subcategoryid`) REFERENCES `subcategories` (`id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`partnersid`) REFERENCES `partners` (`id`);

--
-- Constraints for table `productsizes`
--
ALTER TABLE `productsizes`
  ADD CONSTRAINT `productsizes_ibfk_1` FOREIGN KEY (`sizeid`) REFERENCES `sizes` (`id`),
  ADD CONSTRAINT `productsizes_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `products` (`id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`couponid`) REFERENCES `coupons` (`id`),
  ADD CONSTRAINT `sales_ibfk_3` FOREIGN KEY (`shippingid`) REFERENCES `shipping` (`id`),
  ADD CONSTRAINT `sales_ibfk_4` FOREIGN KEY (`paymentid`) REFERENCES `payments` (`id`);

--
-- Constraints for table `salesdetails`
--
ALTER TABLE `salesdetails`
  ADD CONSTRAINT `salesdetails_ibfk_1` FOREIGN KEY (`salesid`) REFERENCES `sales` (`id`),
  ADD CONSTRAINT `salesdetails_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `products` (`id`);

--
-- Constraints for table `shipping`
--
ALTER TABLE `shipping`
  ADD CONSTRAINT `shipping_ibfk_1` FOREIGN KEY (`Countryid`) REFERENCES `countries` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `categories` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`bankid`) REFERENCES `banks` (`id`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `wishlists_ibfk_2` FOREIGN KEY (`customersid`) REFERENCES `customers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
