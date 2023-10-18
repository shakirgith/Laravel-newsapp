-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2023 at 03:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `user_name`, `user_email`, `user_subject`, `user_message`, `created_at`, `updated_at`) VALUES
(1, 'Yahoo Baba', 'yahoobaba@gmail.com', 'yahoo test subject', 'Yahoo Baba message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(2, 'Shahrukh Khan', 'shahrukha@gmail.com', 'best test subject', 'this best option for database message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(3, 'Salman Khan', 'salman@gmail.com', 'runnin test subject', 'this dummy message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(4, 'Akshey Kumar', 'akshey@gmail.com', 'ak to test subject', 'message to akshye message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(5, 'Yahoo Baba', 'yahoobaba@gmail.com', 'yahoo test subject', 'Yahoo Baba message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(6, 'Shahrukh Khan', 'shahrukha@gmail.com', 'best test subject', 'this best option for database message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(7, 'Salman Khan', 'salman@gmail.com', 'runnin test subject', 'this dummy message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(8, 'Akshey Kumar', 'akshey@gmail.com', 'ak to test subject', 'message to akshye message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(9, 'Yahoo Baba', 'yahoobaba@gmail.com', 'yahoo test subject', 'Yahoo Baba message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(10, 'Shahrukh Khan', 'shahrukha@gmail.com', 'best test subject', 'this best option for database message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(11, 'Salman Khan', 'salman@gmail.com', 'runnin test subject', 'this dummy message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(12, 'Akshey Kumar', 'akshey@gmail.com', 'ak to test subject', 'message to akshye message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(13, 'Yahoo Baba', 'yahoobaba@gmail.com', 'yahoo test subject', 'Yahoo Baba message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(14, 'Shahrukh Khan', 'shahrukha@gmail.com', 'best test subject', 'this best option for database message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(15, 'Salman Khan', 'salman@gmail.com', 'runnin test subject', 'this dummy message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(16, 'Akshey Kumar', 'akshey@gmail.com', 'ak to test subject', 'message to akshye message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(17, 'Yahoo Baba', 'yahoobaba@gmail.com', 'yahoo test subject', 'Yahoo Baba message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(18, 'Shahrukh Khan', 'shahrukha@gmail.com', 'best test subject', 'this best option for database message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(19, 'Salman Khan', 'salman@gmail.com', 'runnin test subject', 'this dummy message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(20, 'Akshey Kumar', 'akshey@gmail.com', 'ak to test subject', 'message to akshye message', '2023-09-05 23:42:48', '2023-09-05 23:42:48'),
(21, 'sameer', 'sameer@gmail.com', 'test messga', 'asdfasd', '2023-09-06 04:45:48', '2023-09-06 04:45:48'),
(22, 'mukul sharma', 'mukul@webcontxt.com', 'test subject text', 'test message', '2023-09-06 04:47:58', '2023-09-06 04:47:58'),
(23, 'suresh', 'suresh@gmail.com', 'test subject text', 'asdfasd', '2023-09-06 05:21:32', '2023-09-06 05:21:32'),
(24, 'sameer', 'sameer@gmail.com', 'test messga', 'asfasdf', '2023-09-06 05:23:02', '2023-09-06 05:23:02'),
(25, 'sameer', 'sameer@gmail.com', 'test messga', 'asdfasd', '2023-09-06 05:23:53', '2023-09-06 05:23:53'),
(27, 'vinod Khanna', 'vinod@gmail.com', 'test subject text', 'message test', '2023-09-06 05:37:49', '2023-09-06 05:37:49'),
(29, 'mayank', 'mayankgupta@gmail.com', 'test subject text', 'test message', '2023-09-06 06:41:16', '2023-09-06 06:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_09_05_052758_create_contactus_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
