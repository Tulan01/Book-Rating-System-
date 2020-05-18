-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 04:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pritam', 'ppcctulan@gmail.com', NULL, '$2y$10$lN7TbfohiWX55fRJ.pD4Ze8UVjHvljnGH6hig5KkEv5FtEzN2jUqO', NULL, NULL, NULL),
(3, 'Pritam', 'pctulan@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL),
(5, 'Pritam', 'ptulan@gmail.com', NULL, '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL),
(6, 'Pritam Chowdhury', 'admin@gmail.com', NULL, '123456789', NULL, NULL, NULL),
(7, 'srizon', 'adminn@gmail.com', NULL, '$2y$10$a9NsE6BmUrd4fRIMd0Wk7eJye01CXUswZ2NyinocJ6o8j4c.7ymSq', NULL, NULL, NULL),
(8, 'Tanmoy', 'pulak@gmail.com', NULL, '$2y$10$Bw1L3hk4eZADpAzB3qkeZ.kgPBYow7kHtTp3V/2npdMTG7C4aNln.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `catagory_name`, `catagory_slug`, `created_at`, `updated_at`) VALUES
(1, 'Horror', 'Horror-1', NULL, NULL),
(2, 'Action', 'Action-a', NULL, NULL),
(3, 'Thriller', 'Thriller-a', NULL, NULL),
(5, 'Romance', 'Romance-a', NULL, NULL),
(35, 'Drama', 'Drama-a', NULL, NULL),
(36, 'Science Fiction', 'Science Fiction -1', NULL, NULL),
(38, 'Others', 'Others-A', '2020-05-10 15:25:52', '2020-05-10 15:25:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_03_144715_create_posts_table', 2),
(5, '2020_05_03_145210_create_catagories_table', 2),
(6, '2020_05_03_145245_create_rates_table', 2),
(7, '2020_05_05_110455_create_admins_table', 3),
(8, '2020_05_07_073830_create_ratings_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sazzad.hossen3196@gmail.com', '$2y$10$CeKDZY.BY8KZzNcpnUctHOylVElWkquihB27h5A.gh4.cHSyxBtma', '2020-05-09 12:02:43'),
('ppcctulan@gmail.com', '$2y$10$U7dqNrE1JXRLYVv1tYvgOuqNO.F1BqleNTQo0fv1VYFxoXAfBOn2G', '2020-05-09 12:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `catagory_id`, `title`, `author`, `image`, `details`, `created_at`, `updated_at`) VALUES
(7, 36, 'Harry Potter and the Order of the Phoenix', 'J.K. Rowling, Mary GrandPré', 'exx/images/1665845868520534.jpg', 'There is a door at the end of a silent corridor. And its haunting Harry Pottters dreams. Why else would he be waking in the middle of the night, screaming in terror?', NULL, NULL),
(8, 3, 'To Kill a Mockingbird', 'Harper Lee', 'exx/images/1665845924554693.jpg', 'The unforgettable novel of a childhood in a sleepy Southern town and the crisis of conscience that rocked it, To Kill A Mockingbird became both an instant bestseller and a critical success when it was first published in 1960.', NULL, NULL),
(9, 5, 'Pride and Prejudice', 'Jane Austen, Anna Quindlen', 'exx/images/1665845969026312.jpg', 'ince its immediate success in 1813, Pride and Prejudice has remained one of the most popular novels in the English language.', NULL, NULL),
(15, 1, 'HUI', 'Suzanne Collins', 'exx/images/1667030746053594.jpg', 'yughghk', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `user_id`, `post_id`, `rating`, `created_at`, `updated_at`) VALUES
(1, NULL, 6, 4, NULL, NULL),
(2, NULL, 6, 3, NULL, NULL),
(3, NULL, 6, 2, NULL, NULL),
(4, NULL, 6, 4, NULL, NULL),
(5, NULL, 6, 3, NULL, NULL),
(6, NULL, 6, 2, NULL, NULL),
(7, NULL, 7, 5, NULL, NULL),
(8, NULL, 7, 5, NULL, NULL),
(9, NULL, 7, 5, NULL, NULL),
(10, NULL, 7, 5, NULL, NULL),
(11, NULL, 7, 5, NULL, NULL),
(12, NULL, 7, 5, NULL, NULL),
(13, NULL, 6, 3, NULL, NULL),
(14, NULL, 6, 5, NULL, NULL),
(15, NULL, 6, 4, NULL, NULL),
(16, NULL, 6, 5, NULL, NULL),
(17, NULL, 6, 3, NULL, NULL),
(18, NULL, 9, 4, NULL, NULL),
(19, NULL, 9, 5, NULL, NULL),
(20, NULL, 8, 3, NULL, NULL),
(21, NULL, 8, 4, NULL, NULL),
(22, NULL, 6, 2, NULL, NULL),
(23, NULL, 6, 2, NULL, NULL),
(24, NULL, 6, 3, NULL, NULL),
(25, NULL, 6, 4, NULL, NULL),
(26, NULL, 6, 3, NULL, NULL),
(27, NULL, 7, 3, NULL, NULL),
(28, NULL, 8, 3, NULL, NULL),
(29, NULL, 9, 5, NULL, NULL),
(30, NULL, 10, 3, NULL, NULL),
(31, NULL, 11, 3, NULL, NULL),
(32, NULL, 7, 5, NULL, NULL),
(33, NULL, 10, 5, NULL, NULL),
(34, NULL, 10, 2, NULL, NULL),
(35, NULL, 11, 1, NULL, NULL),
(36, NULL, 6, 3, NULL, NULL),
(37, NULL, 9, 2, NULL, NULL),
(38, NULL, 6, 4, NULL, NULL),
(39, NULL, 12, 4, NULL, NULL),
(40, NULL, 8, 5, NULL, NULL),
(41, NULL, 15, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(25) NOT NULL,
  `catagory_id` int(25) DEFAULT NULL,
  `average` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `catagory_id`, `average`) VALUES
(1, 6, '3.3'),
(8, 7, '4.8'),
(9, 8, '3.8'),
(10, 9, '4'),
(11, 10, '3.3'),
(12, 11, '2'),
(13, 12, '4'),
(14, 15, '5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pritam Chowdhury', 'ppcctulan@gmail.com', NULL, '$2y$10$S/PloEne36q5tJ0SScLeVeWEOJh5NGYlPLnqwJuqb.P/ShnYB0GOW', 'hFKcSSHw5RNsn5zH2imZulqPbimRG76SF0uGUCngxGSf7AXxdWgiPeR7usUa', '2020-05-02 03:08:29', '2020-05-08 04:32:59'),
(2, 'PulaK Chowdhury', 'admin@gmail.com', NULL, '$2y$10$nMwCO1LgucJMyuX2I05zZO.q2iLT65V4pXxjckX.fT66pJc2zdKqG', NULL, '2020-05-03 05:06:44', '2020-05-03 05:06:44'),
(3, 'sazzad', 'sazzad.hossen3196@gmail.com', NULL, '$2y$10$kHheIhu4YT5.1436n3gQOOKaGZu8J.RrxHr0.XM4amCfLANc1Td3u', NULL, '2020-05-09 11:53:38', '2020-05-09 11:53:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
