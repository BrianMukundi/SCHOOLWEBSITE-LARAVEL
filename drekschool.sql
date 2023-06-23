-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 05:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drekschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_fname` varchar(255) NOT NULL,
  `student_mname` varchar(255) NOT NULL,
  `student_lname` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_tel` varchar(255) NOT NULL,
  `student_gender` varchar(255) NOT NULL,
  `student_dob` date NOT NULL,
  `application_level` varchar(255) NOT NULL,
  `gurdian_name` varchar(255) NOT NULL,
  `gurdian_tel` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `fname`, `lname`, `zipcode`, `country`, `subject`, `created_at`, `updated_at`) VALUES
(8, 'Brian', 'Mukundi', 'lg77777', 'canada', 'bbbfhf', '2023-06-01 12:55:14', '2023-06-01 12:55:14'),
(9, 'alex', 'bm', 'lg8888', 'australia', 'cgvvdgdj', '2023-06-03 16:59:23', '2023-06-03 16:59:23'),
(10, 'mark', 'gg', 'lg77890', 'australia', 'upgrade', '2023-06-05 03:27:13', '2023-06-05 03:27:13'),
(11, 'Brian', 'mhdhdhd', 'lg8888', 'australia', 'atatsts', '2023-06-06 16:17:01', '2023-06-06 16:17:01'),
(12, 'jong', 'kim', 'lg77777', 'usa', 'tttts', '2023-06-18 20:23:32', '2023-06-18 20:23:32'),
(13, 'EWIN', 'MM', 'lg77777', 'australia', 'UPGRADE', '2023-06-19 07:25:47', '2023-06-19 07:25:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_04_070319_create_flights_table', 1),
(6, '2023_05_25_094316_create_comments_table', 1),
(7, '2021_04_25_224042_create_user_activity_logs_table', 2),
(8, '2021_04_30_224320_create_activity_logs_table', 2),
(9, '2021_05_03_061844_create_user_types_table', 2),
(10, '2021_05_03_061918_create_role_type_users_table', 2),
(11, '2021_06_23_053657_create_students_table', 2),
(14, '2023_06_05_065946_create_users_table', 3),
(16, '2023_06_06_121856_create_applicants_table', 4),
(17, '2023_06_06_121856_create_newstudents_table', 5),
(18, '2023_06_07_174325_create_admin_table', 6),
(20, '2023_06_07_182635_create_admins_table', 7),
(21, '2023_06_13_181122_create_newstudents1_table', 8),
(23, '2023_06_13_182750_newstudents_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `newstudents`
--

CREATE TABLE `newstudents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_fname` varchar(255) NOT NULL,
  `student_mname` varchar(255) DEFAULT NULL,
  `student_lname` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_tel` varchar(255) NOT NULL,
  `student_gender` varchar(255) NOT NULL,
  `student_dob` date NOT NULL,
  `application_level` varchar(255) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `guardian_tel` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newstudents`
--

INSERT INTO `newstudents` (`id`, `student_fname`, `student_mname`, `student_lname`, `student_email`, `student_tel`, `student_gender`, `student_dob`, `application_level`, `guardian_name`, `guardian_tel`, `created_at`, `updated_at`) VALUES
(1, 'Brian', 'MUKUNDI', 'Mukundi', 'brianmukundi67@gmail.com', '+254710645806', 'male', '2023-06-21', 'primary', 'jen', '0710645806', '2023-06-18 15:23:08', '2023-06-18 15:23:08'),
(2, 'Brian', 'MUKUNDI', 'Mukundi', 'brianmukundi67@gmail.com', '+254710645806', 'male', '2023-06-28', 'primary', 'jen', '0710645806', '2023-06-18 15:30:29', '2023-06-18 15:30:29'),
(3, 'Brian', 'MUKUNDI', 'Mukundi', 'brianmukundi67@gmail.com', '+254710645806', 'male', '2023-06-27', 'primary', 'jen', '0710645806', '2023-06-18 15:31:29', '2023-06-18 15:31:29'),
(4, 'Brian', 'MUKUNDI', 'Mukundi', 'brianmukundi67@gmail.com', '+254710645806', 'male', '2023-06-28', 'primary', 'jen', '+254710645806', '2023-06-18 15:34:54', '2023-06-18 15:34:54'),
(5, 'Brian', 'MUKUNDI', 'Mukundi', 'brianmukundi67@gmail.com', '+254710645806', 'male', '2023-06-19', 'primary', 'jen', '0710645806', '2023-06-18 15:35:14', '2023-06-18 15:35:14'),
(6, 'Brian', 'MUKUNDI', 'Mukundi', 'brianmukundi67@gmail.com', '+254710645806', 'male', '2023-06-20', 'primary', 'jen', '0710645806', '2023-06-18 15:36:30', '2023-06-18 15:36:30'),
(7, 'Brian', 'MUKUNDI', 'Mukundi', 'brianmukundi67@gmail.com', '+254710645806', 'female', '2023-06-27', 'primary', 'jen', '0710645806', '2023-06-18 15:37:32', '2023-06-18 15:37:32'),
(8, 'Brian', 'MUKUNDI', 'Mukundi', 'brianmukundi67@gmail.com', '+254710645806', 'male', '2023-06-20', 'primary', 'jen', '0710645806', '2023-06-18 15:38:25', '2023-06-18 15:38:25'),
(9, 'Brian', 'MUKUNDI', 'Mukundi', 'brianmukundi67@gmail.com', '+254710645806', 'male', '2023-06-20', 'primary', 'jen', '0710645806', '2023-06-18 15:40:53', '2023-06-18 15:40:53'),
(10, 'ken', 'jo', 'kenz', 'brianmukundi67@gmail.com', '+254710645806', 'male', '2023-06-25', 'campus', 'jin', '0710645806', '2023-06-18 19:21:55', '2023-06-18 19:21:55'),
(11, 'Jannat', 'Siso', 'Nabukenya', 'jannatsiso@gmail.com', '+254712096745', 'male', '2023-06-15', 'primary', 'gedida', '0734645806', '2023-06-19 07:04:38', '2023-06-19 07:04:38'),
(12, 'Edwin', 'ngwane', 'alex', 'brianmukundi67@gmail.com', '+254710645806', 'male', '2023-06-17', 'primary', 'jen', '0710645806', '2023-06-19 07:18:12', '2023-06-19 07:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'ian', '12345', '2023-06-05 04:25:02', '2023-06-05 04:25:02'),
(2, 'alex', '1234', '2023-06-05 15:33:43', '2023-06-05 15:33:43'),
(4, 'jen', '1234', '2023-06-06 04:17:17', '2023-06-06 04:17:17'),
(5, 'yuza@gmail.com', '1235', '2023-06-06 04:23:34', '2023-06-06 04:23:34'),
(6, 'yeye@gmail.com', '789', '2023-06-06 04:32:24', '2023-06-06 04:32:24'),
(7, 'superadmitn@demo.co', '56784', '2023-06-06 04:44:44', '2023-06-06 04:44:44'),
(8, 'jin', '1234', '2023-06-06 04:47:53', '2023-06-06 04:47:53'),
(9, 'superyadmin@demo.com', '1234856', '2023-06-06 05:10:30', '2023-06-06 05:10:30'),
(10, 'superaudmin@demo.com', '1263456', '2023-06-06 05:12:00', '2023-06-06 05:12:00'),
(11, 'superadmin@demo.com', '123456', '2023-06-06 05:19:07', '2023-06-06 05:19:07'),
(12, 'superadmin@demo.com', '123456', '2023-06-06 05:24:19', '2023-06-06 05:24:19'),
(13, 'superadmin@demo.com', '123456', '2023-06-06 06:10:07', '2023-06-06 06:10:07'),
(14, 'gg', '1234', '2023-06-06 07:43:39', '2023-06-06 07:43:39'),
(15, 'gg', '1234', '2023-06-06 07:43:43', '2023-06-06 07:43:43'),
(16, 'Brian', '4444', '2023-06-08 10:06:30', '2023-06-08 10:06:30'),
(17, 'Jannat', 'Jannat', '2023-06-19 07:06:31', '2023-06-19 07:06:31'),
(18, 'edwin', '1234', '2023-06-19 07:21:37', '2023-06-19 07:21:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newstudents`
--
ALTER TABLE `newstudents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `newstudents`
--
ALTER TABLE `newstudents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
