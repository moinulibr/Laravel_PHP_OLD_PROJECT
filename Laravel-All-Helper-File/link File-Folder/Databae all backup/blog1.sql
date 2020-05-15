-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 01:34 AM
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
-- Database: `blog1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `mobile`, `type`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Md. Moinul Islam', 'admin@gmail.com', '$2y$10$RPSHWG9i.2C87JZAbV1lredHfGud4hKb3fGwSRcxwcyxQEi6Ygq/2', '01712794033', 2, 1, '2019-01-26 01:21:35', NULL),
(6, 'Mahamudul Hasan', 'hasan@gmail.com', '$2y$10$yi9RpM.p9zpPJKseB/51iOybec4FQsU1b6Z9TTAIypqAX..zBydOO', '017127940337', 2, 1, '2019-01-22 18:00:00', NULL),
(7, 'Md. Mukter Hossain', 'mukter@gmail.com', '$2y$10$tIQ92wocmOmEvmCvoxC1J.kO5BgZSYbSGCUZVB9FTVTEZERxRNieW', '012783456', 2, 1, '2019-01-26 01:21:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alreadyreads`
--

CREATE TABLE `alreadyreads` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `already` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(6, 'Moinul Islam', '2019-01-17', '2019-01-23'),
(11, 'Moinul Islam 6', '2019-01-17', '2019-01-26'),
(12, 'Moinul Islam 3', '2019-01-17', NULL),
(13, 'Moinul Islam2', '2019-01-17', NULL),
(14, 'Man Can', '2019-01-26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `cname` varchar(100) NOT NULL,
  `comment` varchar(150) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  `varified` tinyint(4) DEFAULT '0',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `cname`, `comment`, `email`, `post_id`, `status`, `varified`, `created_at`, `updated_at`) VALUES
(1, 'Emdad', 'this is so nice post', 'emdad@gmail.com', 20, 1, 1, '2019-01-16', '2019-02-06'),
(4, 'Manik Ahmed', 'what a great post..!', 'manik@gmail.com', 13, 1, 1, '2019-01-17', '2019-02-06'),
(5, '', 'darun post.. ', 'kamrul@gmail.com', 15, 1, 1, '2019-01-22', '2019-02-06'),
(6, 'Hasna', 'tate ki.. ki kora.. jsut nice', NULL, 20, 1, 1, '2019-01-01', '2019-02-06'),
(7, 'Md. Moinul Islam', 'This is really nice post', 'moinul@gmail.com', 20, 1, 1, '2019-01-24', '2019-02-06'),
(8, 'Salman', 'this is really a nice post', 'salman@gmail.com', 13, 1, 1, '2019-01-24', '2019-02-06'),
(9, 'Moinul Islam', 'Wow.. this is nice post', 'moinulibr@gamil.com', 16, 1, 1, '2019-02-06', '2019-02-06'),
(10, 'Emdadul Haque', 'Darun. darun post', 'e@gmail.com', 13, 1, 1, '2019-02-06', '2019-02-06'),
(11, 'Emdadul Haque', 'Darun. darun post', 'e@gmail.com', 13, 1, 1, '2019-02-06', '2019-02-06'),
(12, 'Monjur Morshed', 'What is grate post', 'm@gmail.com', 15, 1, 1, '2019-02-06', '2019-02-06'),
(13, 'Robin', 'Nice Picture bro', NULL, 17, 1, 1, '2019-02-06', '2019-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `liked` int(11) DEFAULT NULL,
  `unliked` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`, `liked`, `unliked`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 20, 5, NULL, 1, '2019-01-23', NULL),
(2, 1, 21, 4, NULL, 1, '2019-01-16', NULL),
(3, 1, 20, 3, NULL, 1, '2019-01-23', NULL),
(4, 2, 13, NULL, NULL, 1, '2019-01-29', NULL),
(5, 2, 14, NULL, NULL, 1, '2019-01-29', NULL),
(62, 4, 14, NULL, NULL, 1, '2019-02-02', NULL),
(63, 4, 13, NULL, NULL, 1, '2019-02-02', NULL),
(64, 1, 15, NULL, NULL, 1, '2019-02-02', NULL),
(66, 1, 14, NULL, NULL, 1, '2019-02-02', NULL),
(69, 1, 13, NULL, NULL, 1, '2019-02-02', NULL),
(72, 7, 21, NULL, NULL, 1, '2019-02-02', NULL),
(84, 7, 15, NULL, NULL, 1, '2019-02-04', NULL),
(85, 7, 15, NULL, NULL, 1, '2019-02-04', NULL),
(90, 7, 14, NULL, NULL, 1, '2019-02-04', NULL),
(91, 8, 13, NULL, NULL, 1, '2019-02-06', NULL),
(93, 8, 15, NULL, NULL, 1, '2019-02-06', NULL),
(94, 8, 17, NULL, NULL, 1, '2019-02-06', NULL),
(95, 8, 20, NULL, NULL, 1, '2019-02-06', NULL),
(97, 7, 17, NULL, NULL, 1, '2019-02-12', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `postedtags`
--

CREATE TABLE `postedtags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postedtags`
--

INSERT INTO `postedtags` (`id`, `tag_id`, `post_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(93, 19, 15, NULL, 0, NULL, '2019-01-24'),
(94, 20, 15, NULL, 0, NULL, '2019-01-24'),
(95, 19, 16, NULL, 0, NULL, '2019-01-24'),
(96, 20, 16, NULL, 0, NULL, '2019-01-24'),
(100, 19, 14, NULL, 0, NULL, '2019-01-26'),
(101, 20, 14, NULL, 0, NULL, '2019-01-26'),
(102, 18, 13, NULL, 0, NULL, '2019-02-06'),
(117, 18, 18, NULL, 0, NULL, '2019-02-06'),
(118, 19, 18, NULL, 0, NULL, '2019-02-06'),
(119, 18, 17, NULL, 0, NULL, '2019-02-06'),
(120, 19, 17, NULL, 0, NULL, '2019-02-06'),
(121, 20, 17, NULL, 0, NULL, '2019-02-06'),
(122, 19, 19, NULL, 0, NULL, '2019-02-06'),
(123, 20, 19, NULL, 0, NULL, '2019-02-06'),
(124, 18, 20, NULL, 0, NULL, '2019-02-06'),
(125, 18, 21, NULL, 0, NULL, '2019-02-06'),
(126, 18, 21, NULL, 0, NULL, '2019-02-06'),
(127, 23, 22, NULL, 0, NULL, '2019-02-06'),
(128, 23, 23, NULL, 0, NULL, '2019-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) NOT NULL,
  `category_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `subcategory_id` int(10) UNSIGNED DEFAULT NULL,
  `tag_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `posted_tag_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `action` tinyint(4) DEFAULT '1',
  `picture1` varchar(4) DEFAULT NULL,
  `picture2` varchar(4) DEFAULT NULL,
  `picture3` varchar(4) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `category_id`, `subcategory_id`, `tag_id`, `posted_tag_id`, `status`, `action`, `picture1`, `picture2`, `picture3`, `created_at`, `updated_at`) VALUES
(13, 'This is first post', 6, 7, NULL, NULL, 1, 1, 'gif', '', '', '2019-01-18', '2019-02-06'),
(14, 'Second post', 6, 7, NULL, NULL, 1, 1, 'jpeg', '', '', '2019-01-18', '2019-01-26'),
(15, 'Third Post', 6, 3, NULL, NULL, 1, 1, 'png', 'png', '', '2019-01-18', '2019-01-24'),
(16, 'Fifth Post', 14, 7, NULL, NULL, 1, 1, 'png', 'jpg', 'gif', '2019-01-18', '2019-01-24'),
(17, 'This is sixth post', 11, 8, NULL, NULL, 1, 1, 'jpg', 'jpg', 'gif', '2019-01-18', '2019-02-06'),
(18, 'This is seventh Post', 6, 3, NULL, NULL, 1, 1, 'jpg', 'jpg', '', '2019-01-19', '2019-02-06'),
(19, 'This is Eight post', 6, 7, NULL, NULL, 1, 1, '', 'png', 'jpg', '2019-01-19', '2019-02-06'),
(20, 'This is Nine post', 11, 8, NULL, NULL, 1, 1, 'png', '', '', '2019-01-19', '2019-02-06'),
(21, 'This is Tenth post', 11, 8, NULL, NULL, 1, 1, 'gif', 'jpeg', 'jpg', '2019-01-20', '2019-02-06'),
(22, 'This is Eleventh Post', 6, 3, NULL, NULL, 1, 1, 'png', 'gif', 'jpg', '2019-01-20', '2019-02-06'),
(23, 'This is Twelve Post', 11, 7, NULL, NULL, 1, 1, 'jpeg', '', '', '2019-01-26', '2019-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `roleadds`
--

CREATE TABLE `roleadds` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `admin_type` tinyint(4) DEFAULT NULL,
  `permission_for` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission` varchar(100) DEFAULT NULL,
  `permission_for` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `permission`, `permission_for`, `status`, `created_at`, `updated_at`) VALUES
(4, 'create-user', 'user', 1, '2019-01-22', '2019-01-23'),
(5, 'User-Update', 'user', 1, '2019-01-22', NULL),
(6, 'Create-post', 'post', 2, '2019-01-22', NULL),
(7, 'Post Update', 'post', 2, '2019-01-22', NULL),
(8, 'Create Tag', 'other', 1, '2019-01-22', NULL),
(9, 'Create Tag', 'other', 3, '2019-01-22', NULL),
(10, 'Tag Update', 'other', 3, '2019-01-22', NULL),
(11, 'Category create', 'other', 3, '2019-01-22', NULL),
(12, 'Category-Update', 'other', 1, '2019-01-22', NULL),
(13, 'Sub-Category-Create', 'user', 1, '2019-01-22', '2019-01-26'),
(14, 'Sub-Category-Update', 'other', 1, '2019-01-22', NULL),
(15, 'Post-Delete', 'post', 1, '2019-01-26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `category_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 'moin kk', 6, '2019-01-17', '2019-01-26'),
(7, 'moinul Islam', 11, '2019-01-17', NULL),
(8, 'sbu category', 12, '2019-01-17', '2019-01-17'),
(9, 'moinul', 11, '2019-01-17', NULL),
(10, 'Linking with', 11, '2019-01-26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(18, 'Computer', '2019-01-17', '2019-01-26'),
(19, 'Mobile', '2019-01-17', '2019-01-22'),
(20, 'Tablet', '2019-01-18', '2019-01-20'),
(21, 'tag 2', '2019-01-18', '2019-01-23'),
(22, 'tag 3', '2019-01-18', NULL),
(23, 'tag 4', '2019-01-18', NULL),
(24, 'Tag out', '2019-01-26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Al Masud', 'u@gmail.com', '$2y$10$RPSHWG9i.2C87JZAbV1lredHfGud4hKb3fGwSRcxwcyxQEi6Ygq/2', 'VQ0D1VlKMuFnxW6cPSMf71jMemoixWr9yjnSUZrlud4IOf1E2QQ6px6y37mm', '2019-01-16 04:28:04', '2019-01-16 04:28:04'),
(2, 'Salman', 'salman@gmail.com', '$2y$10$aEYPNFS9.pY8R8HBdEnzz.XnIUL4fUlqP/PGVmvi2B9K3jKM20K3W', '3WEZET5VX8yG4GQ5IZt5MUfgSTkIsF8c72gLPoXrQYU1GWOwRsLVPDU4NNUG', '2019-01-24 08:46:45', '2019-01-24 08:46:45'),
(3, 'Al Masud', 'a@gmail.com', '$2y$10$xakmdrOvqRvwqOTyPocwoeGTgKKPTeB5byUCFymHdcA85XHM8P.qG', 'd1f5dB54fhymtn5JKuRPsWv2eFtP1MmiY20PhBCzz3Tp7myAuoJEeA9W0RPZ', '2019-02-01 10:09:39', '2019-02-01 10:09:39'),
(4, 'Babul', 'b@gmail.com', '$2y$10$pQ/V6L4AbV13JN9yAUSLqevYmRZ9k5eQXw/wjmopyyWRy1b09DB9e', 'GO16aNq1LY15OTcviRmLjdMEHvM0w75XbFHSWzVHirEVyXtG7u6GzYhUeoh3', '2019-02-01 10:10:49', '2019-02-01 10:10:49'),
(5, 'Chan Mia', 'c@gmail.com', '$2y$10$/r3qyxLNHqDF3oocChvL4u//xlILMGZOX7bwyjIJ39h/S4M5sZ09G', 'PCMVZ8PvzwGqZGQzf7taARvITKk2NqpYBfHKPLh8RCQUnDlALByzepuluV8Y', '2019-02-01 10:11:37', '2019-02-01 10:11:37'),
(6, 'Delowar Hossain', 'd@gmail.com', '$2y$10$E/ktN1ErnVwD1wDFljShy.1xu5ereEA9x9DqFMvuh7cRmIQ/GBe7K', 'LyhozhFxwdiClfLJWD7GVLvcONiO3DRUZs0FtI8QVgET6q6Is8MQMw3GXH81', '2019-02-02 04:53:49', '2019-02-02 04:53:49'),
(7, 'Farhad', 'f@gmail.com', '$2y$10$P/zn45oTShsSrZF8sCfoIexA6uWrq3fXrWADkKMBuuN1NlCp3uSna', '4EIIoeZyO1EpYNsvvJxE9L0BflonwmvdyPaOz4REa0VLyIDOn7LlAaLkfD7r', '2019-02-02 04:55:17', '2019-02-02 04:55:17'),
(8, 'Emdadul Haque', 'e@gmail.com', '$2y$10$Qm51YQvseRBs3nuKhTyxMuVMw5LII/n6rdiVXJrGs6QHVlrOGaPOG', 'wNmq7fw04pcMK9dQnt5yYm4MYE9u4YiLAuOCppaMTjUk3cmPhALnZAzHNh4z', '2019-02-06 01:14:29', '2019-02-06 01:14:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `alreadyreads`
--
ALTER TABLE `alreadyreads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

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
-- Indexes for table `postedtags`
--
ALTER TABLE `postedtags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag_id` (`tag_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `subcategory_id` (`subcategory_id`),
  ADD KEY `tag_id` (`tag_id`),
  ADD KEY `posted_tag_id` (`posted_tag_id`),
  ADD KEY `title` (`title`) USING BTREE;

--
-- Indexes for table `roleadds`
--
ALTER TABLE `roleadds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `alreadyreads`
--
ALTER TABLE `alreadyreads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `postedtags`
--
ALTER TABLE `postedtags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `roleadds`
--
ALTER TABLE `roleadds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alreadyreads`
--
ALTER TABLE `alreadyreads`
  ADD CONSTRAINT `alreadyreads_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `alreadyreads_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `postedtags`
--
ALTER TABLE `postedtags`
  ADD CONSTRAINT `postedtags_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  ADD CONSTRAINT `postedtags_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `postedtags_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`),
  ADD CONSTRAINT `posts_ibfk_3` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `roleadds`
--
ALTER TABLE `roleadds`
  ADD CONSTRAINT `roleadds_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `roleadds_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
