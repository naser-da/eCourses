-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 01:17 PM
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
-- Database: `ecourses`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.jpg',
  `activated` tinyint(1) NOT NULL DEFAULT 0,
  `n_weeks` int(11) NOT NULL,
  `tutor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `user_id`, `title`, `subtitle`, `description`, `thumbnail`, `activated`, `n_weeks`, `tutor`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, '12345', '12345', '1234123412341234', 'msedge_cOKRMXMWgk.png', 0, 5, 'Naser', NULL, '2022-08-02 02:31:10', '2022-08-02 02:31:10'),
(2, 1, 'Laravel basics', 'Laravel basics', 'Tell your students about the courseTell your students about the course', 'msedge_cOKRMXMWgk.png', 0, 5, 'Naser', NULL, '2022-08-02 02:37:41', '2022-08-02 02:37:41'),
(3, 5, 'Testing', 'course test', 'Tell your students about the course', 'msedge_cOKRMXMWgk.png', 0, 5, 'user3', NULL, '2022-08-03 06:42:45', '2022-08-03 06:42:45'),
(4, 7, 'Laravel', 'LaravelLaravel', 'Tell your students about the course', '289634941_1201074764061724_2388215144708234529_n2.jpg', 0, 5, 'Naser', NULL, '2022-08-03 11:17:37', '2022-08-03 11:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(30, '2014_10_12_000000_create_users_table', 1),
(31, '2014_10_12_100000_create_password_resets_table', 1),
(32, '2019_08_19_000000_create_failed_jobs_table', 1),
(33, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(34, '2022_07_31_141149_create_courses_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pfp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default-avatar.png',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pfp`, `email`, `twitter`, `facebook`, `linkedin`, `email_verified_at`, `password`, `bio`, `occupation`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Naser', '289634941_1201074764061724_2388215144708234529_n2.jpg', 'naser.dakhel@raizer.tech', 'naser_dakhel', 'naser.dakhel.3', 'naser-dakhel', NULL, '$2y$10$dXwKP0iu1PEgS2eO9KtX9.WbaugujWsf3eVlp7It9YBm4DDHj8lfG', 'To be added..', 'eCourses Founder', NULL, '2022-08-02 02:19:24', '2022-08-02 03:12:32'),
(2, 'Admin', 'default-avatar.png', 'admin@ecourses.com', NULL, NULL, NULL, NULL, '$2y$10$ex6911j2VUVsFShVa2a94.2kZYe2iYCILYptUyJ7TBZ4Ph78Kp6fK', NULL, NULL, NULL, '2022-08-02 03:14:09', '2022-08-02 03:14:09'),
(3, 'User1', 'default-avatar.png', 'user1@ecourses.com', NULL, NULL, NULL, NULL, '$2y$10$1kyqQz0XkKlv.eEDABXsIunm7jTiPoAJ.Hw6s8VtFA7lb6lpksNcG', NULL, NULL, NULL, '2022-08-03 06:16:11', '2022-08-03 06:16:11'),
(4, 'user2', 'default-avatar.png', 'naser.dakhel2@raizer.tech', NULL, NULL, NULL, NULL, '$2y$10$/ydQ/jUC2GP1DrJTI0Dl5.hg/2Rc/VJ3o/kqEUHnxsT.M434HEzqS', NULL, NULL, NULL, '2022-08-03 06:28:30', '2022-08-03 06:28:30'),
(5, 'user3', 'default-avatar.png', 'naser.dakhel3@raizer.tech', NULL, NULL, NULL, NULL, '$2y$10$sVXO4s/kxGVa7yxqf7igLOVbdIbg/eRuZfhRxGLEIXbA.ElcSnP4u', NULL, NULL, NULL, '2022-08-03 06:29:38', '2022-08-03 06:29:38'),
(6, 'sawsan', 'default-avatar.png', 'sawsan@email.com', NULL, NULL, NULL, NULL, '$2y$10$A17s9P5XUOpEE/fskFmUWeMBQ/UKCHrxOOdjmT5MAMLDRPJRQ2UU2', NULL, NULL, NULL, '2022-08-03 07:28:54', '2022-08-03 07:28:54'),
(7, 'Naser', '289634941_1201074764061724_2388215144708234529_n2.jpg', 'user4@ecourse.com', 'naser_dakhel', 'naser.dakhel.3', 'naser-dakhel', NULL, '$2y$10$Qd/a7c7nrckoikmoEh2WteLHrFzQh0Uad15dnog1ikst0fVBoTpya', 'Laravel Teacher Laravel TeacherLaravel Teacher Laravel Teacher', 'Laravel Teacher', NULL, '2022-08-03 11:14:05', '2022-08-03 11:15:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
