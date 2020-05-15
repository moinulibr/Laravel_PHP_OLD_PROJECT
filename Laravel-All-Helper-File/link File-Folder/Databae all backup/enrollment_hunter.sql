-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 01:32 AM
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
-- Database: `enrollment_hunter`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `account_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brance_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `customer_ref` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `salary` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacation` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `user_roll` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `phone`, `nid_no`, `address`, `experience`, `photo`, `salary`, `vacation`, `city`, `status`, `user_roll`, `created_at`, `updated_at`) VALUES
(1, 'Moinul Islam', 'mukter@gmail.com', '0958083', '344580485398543', 'adjfkdjf djf', 'djakdsf', 'default.png', '134235', 'djlkfdajfs', 'djkfs', 0, 1, '2019-04-24 17:48:01', '2019-04-24 17:48:01'),
(2, 'SONIA AKTER', 'sonia@gmail.com', '5809863', '485984', 'dadjkf', 'kdjfajd', 'default.png', 'adjkfjsd', 'jfdkds', 'djfkd', 0, 1, '2019-04-24 23:51:48', '2019-04-24 23:51:48'),
(4, 'Hasina', 'hasina@gmail.com', '01215487996', '2588741223636', 'Dkhaka', '1 year', 'jpeg', '12000', '2', 'Dhaka', 0, 2, '2019-04-25 06:42:46', '2019-04-25 14:36:04'),
(5, 'Asad', 'asad@gmail.com', '017127940335', '258874112', 'Dkhaka, Mirpur,', '1 year', 'default.png', '6000', '14', 'Dhaka', 0, 2, '2019-04-25 06:47:18', '2019-04-25 12:56:41'),
(6, 'Akkas', 'akka@gmail.com', '12345678912', '025896314', 'Shaltha, Shaltha, Faridpur', '2 year', 'jpg', '8000', '15', 'Dhaka', 0, 2, '2019-04-25 06:49:38', '2019-04-25 13:13:15'),
(7, 'asdfd', 'adsfaa@kfgmai', '123456888912', '0258963142588', 'dfsdfgfd', 'jlkdjfkdsaj', 'default.png', '12000', 'dfdf', 'Dhaka', 0, 1, '2019-04-25 06:51:47', '2019-04-25 06:51:47'),
(8, 'SONIA AKTER', 'tan@gmail.com', '123456789852', '32168745456', 'dfasdfsdrfadf', 'sdfasdf', 'default.png', 'sdfsd', 'adfdsf', 'adfd', 0, 1, '2019-04-25 06:53:27', '2019-04-25 06:53:27'),
(9, 'Adbullah Al Masud', 'al@gmail.com', '012548795615', '1246578945645', 'Dhaka', '2 year', 'default.png', '1258', '24', 'Dhaka', 0, 1, '2019-04-25 06:56:42', '2019-04-25 06:56:42'),
(10, 'Kha', 'Khair', '012458796525', '1225885', 'dadfs', 'dfsd', 'jpg', 'sdfads', 'asdfd', 'dsfsf', 0, 1, '2019-04-25 07:01:06', '2019-04-25 07:01:06'),
(13, 'maha@gmail.com', NULL, '01254879545', '1212554878', 'Kallanpur , Dhaka', '1 year', 'jpeg', '6000', '15', 'Dhaka', 0, 1, '2019-04-25 14:17:55', '2019-04-25 14:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_04_24_203310_create_employees_table', 1),
(14, '2019_04_24_223305_create_designations_table', 1),
(15, '2019_04_24_223350_create_user_rolls_table', 1),
(16, '2019_04_25_193022_create_customers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `user_roll` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `user_roll`, `status`, `password`, `image`, `verified`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md. Moinul Islam', 'admin@gmail.com', NULL, 0, 0, '$2y$10$oIBLpxxiwY0FGuFz.y6JM.mIk1qBPpnyhyzO8JZuxI3lE0zmX9.8e', 'default.png', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_rolls`
--

CREATE TABLE `user_rolls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_phone_unique` (`phone`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_phone_unique` (`phone`),
  ADD UNIQUE KEY `employees_nid_no_unique` (`nid_no`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_rolls`
--
ALTER TABLE `user_rolls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_rolls`
--
ALTER TABLE `user_rolls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
