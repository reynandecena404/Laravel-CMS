-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 02:19 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Web Design and Development', '2020-05-07 17:34:57', '2020-05-08 00:27:24'),
(5, 'Laravel Web Development', '2020-05-08 01:16:13', '2020-05-09 15:21:13'),
(6, 'Full Stack Development', '2020-05-09 15:21:22', '2020-05-09 15:21:22');

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
(4, '2020_05_07_013328_create_posts_table', 2),
(5, '2020_05_07_013403_create_categories_table', 2),
(6, '2020_05_10_054549_add_soft_deletes_to_posts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `content`, `image`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Fusce et ex at tellus tincidunt tempor.', 'Etiam laoreet metus enim, nec volutpat odio malesuada eu. Phasellus eget molestie mi. Phasellus at nulla tincidunt, fermentum ante ac, condimentum neque.', '<div><strong>Fusce et ex at tellus tincidunt tempor. </strong>Etiam laoreet metus enim, nec volutpat odio malesuada eu. Phasellus eget molestie mi. Phasellus at nulla tincidunt, fermentum ante ac, condimentum neque. Ut elementum ornare sapien, vel elementum augue feugiat vel. Cras a massa tortor. Integer nec posuere nibh, in bibendum diam.&nbsp;<br><br></div><div><strong>Proin et urna eu nisl cursus ultrices ut ut neque. </strong>Pellentesque sit amet eros bibendum, varius sem id, porta metus. Etiam non sagittis urna. Vestibulum nibh ex, euismod vel imperdiet vel, aliquam a nisl. Quisque pulvinar libero nec turpis aliquam, nec pulvinar ex eleifend. Sed vel ex quam. Praesent sagittis nulla sed tempus ullamcorper.&nbsp;<br><br></div><div><strong>In hac habitasse platea dictumst.</strong> Maecenas tincidunt augue vel diam ultrices aliquet. Suspendisse nec dolor nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer malesuada magna nulla, nec rhoncus sem blandit sit amet. Suspendisse lacinia risus vitae blandit pharetra. Pellentesque augue turpis, commodo vel euismod at, dictum faucibus sem. Morbi porta justo diam, in sollicitudin leo aliquet quis. Curabitur sollicitudin posuere posuere. Quisque feugiat neque ut varius sagittis. Quisque massa dui, ornare a pellentesque ut, mollis vel tortor. Suspendisse fringilla justo a elit congue, sed finibus magna porta. Sed ac luctus enim. Nam fringilla aliquam libero nec tincidunt.&nbsp;</div><div><br></div>', 'posts/GzXD2JXZ9fzpNCGXyB8FuSZhDlpJVeP2W66QaakE.jpeg', NULL, '2020-05-09 23:33:46', '2020-05-10 16:15:36', '2020-05-10 16:15:36'),
(7, 'Nunc purus orci', 'Pellentesque in leo eu nisl facilisis commodo tincidunt at felis. Donec nec metus orci. Morbi sit amet neque tincidunt, tincidunt mi lobortis, mattis velit.', '<div><strong><em>&nbsp;Pellentesque in leo eu </em></strong>nisl facilisis commodo tincidunt at felis. Donec nec metus orci. Morbi sit amet neque tincidunt, tincidunt mi lobortis, mattis velit. Sed aliquet, neque sed molestie ultrices, turpis eros laoreet mi, ac mollis lacus nisi sit amet eros. Nunc tortor turpis, vestibulum at augue vel, viverra consequat quam. Donec condimentum tempus sapien, aliquam accumsan dolor vehicula in. Duis lobortis, augue eu interdum convallis, mi eros tincidunt odio, et convallis nunc est id nisl. Pellentesque eget pharetra massa, ac ullamcorper nisl. Donec diam nulla, vulputate sed diam eget, commodo volutpat libero. Duis orci mauris, lobortis at magna ut, sagittis dapibus eros. In hac habitasse platea dictumst. Aenean consectetur tincidunt tincidunt.&nbsp;<br><br></div><div><strong><em>&nbsp;Integer id arcu varius</em></strong>, rhoncus justo in, sagittis quam. Praesent purus velit, luctus id iaculis eu, luctus quis nisl. Donec dictum ipsum ut velit dapibus, tristique pretium leo aliquam. Fusce ac felis id orci vehicula lobortis sed ut turpis. Curabitur nec accumsan orci. Mauris porttitor sodales magna consectetur dapibus. Mauris fermentum lacinia risus quis varius. Mauris egestas ornare dolor, ac dictum mauris interdum vitae. Fusce ultrices rutrum dolor aliquet sodales. Donec et massa eu libero consectetur auctor et euismod mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi vel aliquet velit. Nunc placerat bibendum ornare. Sed vitae tortor mi. Nullam vel diam consequat, convallis nisi id, commodo augue.&nbsp;<br><br></div>', 'posts/FMhcbNomESZFf9JrFajIaD20qxh4O8hEKS1e0ykr.png', NULL, '2020-05-09 23:44:22', '2020-05-09 23:44:22', NULL),
(8, 'Proin aliquam euismod gravida.', 'Nulla sit amet quam at leo blandit vestibulum. Nulla bibendum, enim id vestibulum ultricies, magna quam tempor lacus, et malesuada nunc odio non massa.', '<div><strong><em>&nbsp;Proin aliquam euismod gravida</em></strong>. Nulla sit amet quam at leo blandit vestibulum. Nulla bibendum, enim id vestibulum ultricies, magna quam tempor lacus, et malesuada nunc odio non massa. Morbi quis sodales neque. Sed fermentum consequat ligula ut aliquam. Phasellus eget tortor ut enim condimentum venenatis vel ac justo. Sed convallis magna id lacus rhoncus accumsan. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur sed lectus vestibulum, posuere nibh sit amet, maximus purus. In at rhoncus lectus, vitae venenatis dui. Donec diam libero, condimentum id elit id, blandit porttitor ex.&nbsp;<br><br></div><div><strong><em>&nbsp;Lorem ipsum dolor sit amet,</em></strong> consectetur adipiscing elit. Praesent sed massa id elit tristique imperdiet eget id justo. Vivamus magna ex, pharetra vel eros quis, convallis vestibulum enim. Maecenas bibendum purus ac elit pellentesque, in commodo nisi tristique. Vivamus a vulputate est, in pellentesque dolor. Nunc vitae auctor nisi. Nullam viverra tempor rhoncus. Duis et ex elementum, viverra dolor at, ornare lacus. Vivamus vitae fermentum lacus, vulputate molestie libero.&nbsp;<br><br></div><div><strong><em>&nbsp;Duis sit amet sagittis mi.</em></strong> In accumsan pulvinar scelerisque. Ut sit amet neque ut enim tristique condimentum. Curabitur volutpat justo orci, a rhoncus metus tristique ac. Sed sed dui sapien. Nulla eu diam dolor. Donec porttitor velit magna, vel rutrum odio commodo quis. Aenean dictum, felis auctor malesuada gravida, lectus enim mattis nulla, nec fermentum urna quam a massa. Praesent et felis pulvinar, venenatis nulla sit amet, venenatis lorem. Proin viverra nec augue ac pulvinar. Maecenas vitae ligula vel massa dapibus condimentum. Nam porttitor porttitor libero, commodo commodo diam dictum vitae. Quisque sed cursus ipsum. Fusce vel sem a nulla lacinia fermentum.&nbsp;<br><br></div>', 'posts/6gBY3aFTMtV03AE1OXdLuoB6dKZR4KSGvldqxHSc.jpeg', '2020-05-10 07:45:00', '2020-05-09 23:46:02', '2020-05-09 23:46:02', NULL);

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
(1, 'Reynan Decena', 'ryndecena@gmail.com', NULL, '$2y$10$1sSRPFNKZmvWDCy4tPNAh.kjkNhmYn4lKYFs1C1aoZ59csQU6fU9a', NULL, '2020-05-06 17:24:04', '2020-05-06 17:24:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
