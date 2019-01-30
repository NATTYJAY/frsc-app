-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2019 at 01:58 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frsc_dbc`
--
CREATE DATABASE IF NOT EXISTS `frsc_dbc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `frsc_dbc`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin admin', 'admin@admin.com', '$2y$10$KIdxS3ibHvlyWTPRzXDw8eBupH1JKRejvEEKSmDtEw7.F1qHITj4O', NULL, '2019-01-28 20:40:05', '2019-01-28 20:40:05'),
(2, 'king king', 'king@king.com', '$2y$10$G0Wk2cBjrSaVr0N1Kip6k.Odu3JjNoLOwvaLIqQs4zTFYagPuyPTS', '8FXedO0beAOg1cgExUGXHhnfcdRTWXFSaErhMjinRrDLIDmluMCdDyebbyJx', '2019-01-29 04:19:57', '2019-01-29 04:19:57');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `admins_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `admins_id`, `name`, `description`, `image_path`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Jack', 'description1', '154863544449273045_2237972466442061_8491751248771416064_n.jpg', '2018-12-29 04:36:34', '2019-01-28 01:50:41'),
(3, NULL, 'Triangle', 'Use for', '1548633474atiku.jpg', '2018-12-29 05:06:34', '2019-01-28 08:52:33'),
(4, 1, 'Sprayer', 'I no know oohj', '1548633474atiku.jpg', '2019-01-04 16:56:10', '2019-01-28 08:52:15'),
(5, 1, 'triangles', 'yes', '154862028440858893_2121687524714908_6010565306345324544_n.jpg', '2019-01-28 04:18:04', '2019-01-28 04:18:04'),
(6, 1, 'okayna', 'udjj', '1548633474atiku.jpg', '2019-01-28 07:57:54', '2019-01-28 07:57:54'),
(7, 1, 'fire Extinguisher', 'ooooo', '154863544449273045_2237972466442061_8491751248771416064_n.jpg', '2019-01-28 08:30:44', '2019-01-28 20:47:39'),
(8, 2, 'correct', 'were', '1548677914_5597007350704635904_n.jpg', '2019-01-28 20:18:34', '2019-01-28 20:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
CREATE TABLE `driver` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nok` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_issue_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_expiry_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plate_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `fname`, `lname`, `height`, `dob`, `nok`, `gender`, `address`, `license_issue_date`, `license_expiry_date`, `image_path`, `plate_number`, `created_at`, `updated_at`) VALUES
(1, 'dfdf', 'dvvvv', 'x', '2018-12-24', '1222', 'MALE', 'ddd,wewe,wew', '2018-12-27', '2018-12-18', '1546053904_n.jpg', 'PLT9QOMN-NGR', '2018-12-29 11:25:04', '2018-12-29 11:25:04'),
(2, 'ffdfd', 'ssdsd', '23', '2018-12-24', '233232', 'FEMALE', 'ffffffffffffff,dfdfd,bbbb', '2018-12-06', '2018-12-16', '15460544361.JPG', 'PLTLBDP4-NGR', '2018-12-29 11:33:56', '2018-12-29 11:33:56'),
(3, 'sdsdsd', 'cccc', '343', '2018-12-26', '55', 'MALE', 'gggggggggggg,gv,ffff', '2018-12-05', '2018-12-10', '1546054513DSC_1145.JPG', 'PLTN9MOE-NGR', '2018-12-29 11:35:13', '2018-12-29 11:35:13'),
(4, 'somuchGod', 'Godnofitcarrylast', '12', '2018-12-05', '222222222', 'FEMALE', 'dddsds,ased,dcc', '2018-12-28', '2018-12-29', '154606434940858893_2121687524714908_6010565306345324544_n.jpg', 'PLTXKQIN-NGR', '2018-12-29 11:36:17', '2018-12-29 14:19:09'),
(5, 'JOSHUA', 'ISRAEL', '6 FEETS', '2018-12-26', '08060860316', 'MALE', 'Kingdom heritage,uyo,akwa ibom state', '2018-12-12', '2018-12-29', '154605517711EEFF888_pass.jpg', 'PLTIJV40-NGR', '2018-12-29 11:46:17', '2018-12-29 11:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE `item` (
  `id` int(10) UNSIGNED NOT NULL,
  `driver_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_reg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_expiry_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `driver_id`, `item_id`, `name`, `barcode`, `serial_number`, `date_reg`, `item_expiry_date`, `status`, `created_at`, `updated_at`) VALUES
(2, 5, 1, NULL, 'fdfdfd', 'sssss', '2020-11-24', '2020-03-12', NULL, '2019-01-02 20:21:17', '2019-01-04 16:35:15'),
(5, 5, 2, NULL, 'sdsd', 'sd', '2019-01-04', '2019-01-03', NULL, '2019-01-04 16:50:30', '2019-01-04 20:38:44'),
(6, 1, 7, NULL, 'sds', 'as', '2019-02-02', '2019-03-06', NULL, '2019-01-28 10:09:28', '2019-01-28 21:42:04'),
(8, 3, 5, NULL, 'xaaxax', 'sasas', '2019-01-09', '2019-01-03', NULL, '2019-01-28 11:04:12', '2019-01-28 11:04:12'),
(10, 5, 6, NULL, '-', '-', '2019-02-07', '2019-02-09', NULL, '2019-01-28 11:42:04', '2019-01-29 05:05:55'),
(11, 2, 6, NULL, '-', '-', '2019-01-08', '2019-01-30', NULL, '2019-01-28 11:55:41', '2019-01-28 11:55:41'),
(12, 5, 8, NULL, 'gf', 'fgg', '2019-01-22', '2019-01-31', NULL, '2019-01-28 20:19:00', '2019-01-28 20:19:00'),
(13, 4, 7, NULL, 'dds', 'sdsds', '2019-01-27', '2019-01-25', NULL, '2019-01-29 04:36:37', '2019-01-29 04:52:18'),
(14, 4, 6, NULL, 'sdsdsd', 'ssasa', '2019-01-30', '2019-02-02', NULL, '2019-01-29 04:37:15', '2019-01-29 04:37:15'),
(18, 5, 5, NULL, 'hhgg', 'ggcgvg', '2019-01-30', '2019-02-06', NULL, '2019-01-29 05:05:01', '2019-01-29 05:05:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2018_12_16_231126_create_categories_table', 2),
(14, '2014_10_12_000000_create_users_table', 3),
(15, '2014_10_12_100000_create_password_resets_table', 3),
(16, '2018_12_27_141420_create_category_table', 3),
(17, '2018_12_28_172001_create_driver_table', 3),
(18, '2018_12_28_172023_create_item_table', 3),
(19, '2018_12_28_172047_create_vehicle_reg_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'administrator'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'joshua', 'joeboy@yahoo.com', NULL, '$2y$10$a.a56gyRfxFZk/rShkI5AeMGe7tFzSnuF7MsfewQHbTUZRCMotW0G', 'HAbrIm4MrK4ePycCAKizlykUkmOjhuciGjCEl6RL1R8GVMOfDcgpFS4SfmXW', '2019-01-04 23:00:03', '2019-01-04 23:00:03'),
(2, 'king peace', 'king@yahoo.com', NULL, '$2y$10$s9w52NDC24NIcX0hSu2bE..YnJqatlP/vCj5Hq5zu2edo0f/p3tZe', NULL, '2019-01-26 16:15:50', '2019-01-26 16:15:50'),
(3, 'ab ab', 'ab@yahoo.com', NULL, '$2y$10$eaQpzgazIOI3ikSYUTsV9ufpjxiXzpsZhxnIpYk8rfPREPmU71Zqi', NULL, '2019-01-26 16:16:23', '2019-01-26 16:16:23'),
(4, 'isaiah', 'isaiah@yahoo.com', NULL, '$2y$10$IzG4xBlYcCjpQbOllqHNMuJjdrWFDZ0wsSQZEUqwGJYJuLpnM1SIG', 'BfDHLPKYe9Ht2G6RKVcnEKoFRg2Soguk3R46fg30NTNwJfF9ZmYyOXmnhU2g', '2019-01-28 12:07:23', '2019-01-28 12:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_reg`
--

DROP TABLE IF EXISTS `vehicle_reg`;
CREATE TABLE `vehicle_reg` (
  `id` int(10) UNSIGNED NOT NULL,
  `driver_id` int(11) NOT NULL,
  `engine_capacity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chasis_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_make` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_fee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_expiry_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_reg`
--

INSERT INTO `vehicle_reg` (`id`, `driver_id`, `engine_capacity`, `engine_number`, `chasis_number`, `vehicle_make`, `vehicle_color`, `license_fee`, `license_date`, `license_expiry_date`, `created_at`, `updated_at`) VALUES
(1, 1, '434', '3434', '343', 'KIA', 'BLUE', '455', '2019-01-10', '2019-01-17', '2019-01-02 15:18:51', '2019-01-02 15:18:51'),
(2, 5, '5TG', '555', '454', '54545', 'UUYUGH', '66', '2019-01-31', '2019-01-08', '2019-01-02 15:38:49', '2019-01-02 15:38:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `driver_plate_number_unique` (`plate_number`);
ALTER TABLE `driver` ADD FULLTEXT KEY `plate_number` (`plate_number`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicle_reg`
--
ALTER TABLE `vehicle_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_reg`
--
ALTER TABLE `vehicle_reg`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
