-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2021 at 06:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prac_espark`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate_educations`
--

CREATE TABLE `candidate_educations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_applications_id` int(10) UNSIGNED NOT NULL,
  `degree_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passing_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_educations`
--

INSERT INTO `candidate_educations` (`id`, `job_applications_id`, `degree_title`, `board_name`, `passing_year`, `percentage`, `created_at`, `updated_at`) VALUES
(17, 4, 'ssc', 'sdgs', 'sgra', 'sgr', '2021-02-04 07:41:35', '2021-02-04 08:26:52'),
(18, 4, 'hsc', 'rg', 'wrg', 'rg', '2021-02-04 07:41:35', '2021-02-04 08:26:52'),
(19, 4, 'be', 'rwg', 'srg', 'rg', '2021-02-04 07:41:36', '2021-02-04 08:26:52'),
(20, 4, 'me', 'rg', 'srg', 'srg', '2021-02-04 07:41:36', '2021-02-04 08:26:52'),
(21, 5, 'ssc', 'DVs', 'SDFs', 'sDFf', '2021-02-04 07:59:15', '2021-02-04 07:59:15'),
(22, 5, 'hsc', 'asdf', 'ASDF', 'SDF', '2021-02-04 07:59:15', '2021-02-04 07:59:15'),
(23, 5, 'be', 'aDF', 'DAF', 'SDF', '2021-02-04 07:59:16', '2021-02-04 07:59:16'),
(24, 5, 'me', 'sdfS', 'SDF', 'ASDF', '2021-02-04 07:59:16', '2021-02-04 07:59:16'),
(25, 6, 'ssc', 'aa aa', '2010', '10', '2021-02-04 10:06:52', '2021-02-04 10:17:50'),
(26, 6, 'hsc', 'aa aa', '10', '10', '2021-02-04 10:06:52', '2021-02-04 10:17:50'),
(27, 6, 'be', 'dafgad', '10', '10', '2021-02-04 10:06:52', '2021-02-04 10:17:50'),
(28, 6, 'me', 'GTU', '10', '10', '2021-02-04 10:06:52', '2021-02-04 10:17:50'),
(29, 7, 'ssc', 'SSC', '2010', '10', '2021-02-04 10:23:04', '2021-02-04 10:23:04'),
(30, 7, 'hsc', 'HSC', '2020', '20', '2021-02-04 10:23:04', '2021-02-04 10:23:04'),
(31, 7, 'be', 'BE', '2030', '20', '2021-02-04 10:23:04', '2021-02-04 10:23:04'),
(32, 7, 'me', 'ME', '2040', '30', '2021-02-04 10:23:04', '2021-02-04 10:23:04'),
(33, 8, 'ssc', 'aa aa', '1992', '20', '2021-02-04 11:53:43', '2021-02-04 11:53:43'),
(34, 8, 'hsc', 'aa aa', '2020', '12', '2021-02-04 11:53:43', '2021-02-04 11:53:43'),
(35, 8, 'be', 'sada', '2021', '12', '2021-02-04 11:53:43', '2021-02-04 11:53:43'),
(36, 8, 'me', 'sacas', '2022', '12', '2021-02-04 11:53:43', '2021-02-04 11:53:43'),
(37, 9, 'ssc', 'Gujarat', '2014', '80', '2021-02-04 11:59:36', '2021-02-04 11:59:36'),
(38, 9, 'hsc', 'Gujarat', '2016', '45', '2021-02-04 11:59:37', '2021-02-04 11:59:37'),
(39, 9, 'be', 'GTU', '2018', '50', '2021-02-04 11:59:37', '2021-02-04 11:59:37'),
(40, 9, 'me', 'GTU', '2020', '50', '2021-02-04 11:59:37', '2021-02-04 11:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_reference_details`
--

CREATE TABLE `candidate_reference_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_applications_id` int(10) UNSIGNED NOT NULL,
  `reference_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation_with` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_reference_details`
--

INSERT INTO `candidate_reference_details` (`id`, `job_applications_id`, `reference_name`, `reference_phone`, `relation_with`, `created_at`, `updated_at`) VALUES
(1, 4, 'aa aa', '01342435246', 'adfaef', '2021-02-04 07:42:02', '2021-02-04 07:42:02'),
(2, 5, 'DFS', 'SDF', 'SDFSd', '2021-02-04 07:59:39', '2021-02-04 07:59:39'),
(3, 4, 'dvdav', 'dvc', 'sdv', '2021-02-04 08:03:23', '2021-02-04 08:03:23'),
(4, 4, 'rgeqr', 'gqerg', 'qwergqwrg', '2021-02-04 08:27:09', '2021-02-04 08:27:09'),
(5, 6, 'aa aa', '01342435246', 'adfaef', '2021-02-04 10:07:15', '2021-02-04 10:07:15'),
(6, 7, 'Damini', '9265026932', 'Wife', '2021-02-04 10:25:27', '2021-02-04 10:25:27'),
(7, 7, 'FADF', '41717', 'fhad', '2021-02-04 11:30:52', '2021-02-04 11:30:52'),
(8, 7, 'SDA', '71777', 'sfgb', '2021-02-04 11:30:52', '2021-02-04 11:30:52'),
(9, 7, 'ASFAF', '74747', 'SGSRG', '2021-02-04 11:45:08', '2021-02-04 11:45:08'),
(10, 7, 'SRGSG', '7575', 'SGS', '2021-02-04 11:45:09', '2021-02-04 11:45:09'),
(11, 8, 'aa aa', '01342435246', 'aefqe', '2021-02-04 11:54:46', '2021-02-04 11:55:47'),
(12, 8, 'SC', '01342435246', 'SCsc', '2021-02-04 11:54:46', '2021-02-04 11:54:46'),
(13, 8, 'SSC', '9265026932', 'fqf', '2021-02-04 11:55:47', '2021-02-04 11:55:47'),
(14, 9, 'Ezad User', '9265026932', 'Friend', '2021-02-04 12:01:13', '2021-02-04 12:01:13'),
(15, 9, 'Ezad User 2', '9265026932', 'Test', '2021-02-04 12:01:13', '2021-02-04 12:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_work_experience`
--

CREATE TABLE `candidate_work_experience` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_applications_id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_work_experience`
--

INSERT INTO `candidate_work_experience` (`id`, `job_applications_id`, `company_name`, `designation`, `from`, `to`, `created_at`, `updated_at`) VALUES
(4, 4, 'ezad', 'PHPDeveloper', 'sfg', '20', '2021-02-04 07:41:42', '2021-02-04 08:03:07'),
(5, 5, 'DSDF', 'php', 'SDFS', 'DSD', '2021-02-04 07:59:20', '2021-02-04 07:59:20'),
(6, 4, 'ergeth', 'php', 'eethe', 'th', '2021-02-04 08:26:56', '2021-02-04 08:26:56'),
(7, 6, 'ezad', 'EZAD', 'sfg', 'sfg', '2021-02-04 10:06:57', '2021-02-04 10:20:54'),
(8, 7, 'Ezad Company', 'Php Developer', '30-06-1994', '30-06-1992', '2021-02-04 10:24:51', '2021-02-04 10:24:51'),
(9, 7, 'EZAD', 'EZAD', '30-06-1994', '30-06-1994', '2021-02-04 11:11:14', '2021-02-04 11:11:14'),
(10, 7, 'EZAD1', 'EZAD1', '30-06-1994', '30-06-1994', '2021-02-04 11:11:14', '2021-02-04 11:11:14'),
(11, 7, 'QWQW', 'WDQD', '12-02-2020', '12-12-1212', '2021-02-04 11:15:25', '2021-02-04 11:44:49'),
(12, 6, 'QWQW', 'ss', '12-06-2020', '12-06-2000', '2021-02-04 11:29:30', '2021-02-04 11:29:30'),
(13, 7, 'WDQWD', 'WDWD', '30-06-1994', '30-06-1994', '2021-02-04 11:30:32', '2021-02-04 11:30:32'),
(14, 7, 'asas', 'asas', '12-12-2020', '11-12-2020', '2021-02-04 11:50:14', '2021-02-04 11:50:14'),
(15, 7, 'sc', 'SASC', '12-12-1220', '12-10-1220', '2021-02-04 11:51:29', '2021-02-04 11:51:29'),
(16, 8, 'test', 'test', '12-02-2020', '12-12-2020', '2021-02-04 11:54:15', '2021-02-04 11:54:15'),
(17, 8, 'sfad', 'd', '12-02-2020', '12-12-2020', '2021-02-04 11:54:15', '2021-02-04 11:54:15'),
(18, 8, 'QWQW', 'afaf', '12-02-2020', '12-02-2020', '2021-02-04 11:55:32', '2021-02-04 11:55:32'),
(19, 8, 'scasc', 'ascas', '20-02-1996', '12-02-2020', '2021-02-04 11:55:32', '2021-02-04 11:55:32'),
(20, 9, 'Test Company', 'Rajkot', '30-06-1994', '30-06-1994', '2021-02-04 12:00:24', '2021-02-04 12:00:24'),
(21, 9, 'Test Company 2', 'Ahmedabad', '30-06-1994', '30-06-1994', '2021-02-04 12:00:24', '2021-02-04 12:00:24');

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
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `languages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technologies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prefered_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notice_period` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_ctc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_ctc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(4, '2021_02_04_055629_create_job_applications_table', 1),
(5, '2021_02_04_063522_create_candidate_educations_table', 2),
(6, '2021_02_04_063555_create_candidate_work_experience_table', 3),
(7, '2021_02_04_063617_create_candidate_reference_details_table', 3);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate_educations`
--
ALTER TABLE `candidate_educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_reference_details`
--
ALTER TABLE `candidate_reference_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_work_experience`
--
ALTER TABLE `candidate_work_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job_applications_email_unique` (`email`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate_educations`
--
ALTER TABLE `candidate_educations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `candidate_reference_details`
--
ALTER TABLE `candidate_reference_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `candidate_work_experience`
--
ALTER TABLE `candidate_work_experience`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
