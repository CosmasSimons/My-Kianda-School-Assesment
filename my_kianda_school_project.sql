-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 10:44 AM
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
-- Database: `my_kianda_school_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_profiles`
--

CREATE TABLE `admin_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_profiles`
--

INSERT INTO `admin_profiles` (`id`, `user_id`, `name`, `email`, `phone`, `dob`, `address`, `gender`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Noel Burns', 'kunami@mailinator.com', '+1 (961) 953-5011', '2004-02-26', 'Aut pariatur Dolori', 'female', 'uploads/ZyUDBuM5RPJ06jyhOkvE6zFMXSE0ZGQZzUGEQz61.jpg', '2022-10-23 20:13:07', '2022-10-23 20:13:07'),
(2, 5, 'Cosmas Simons', 'cosmas5232@gmail.com', '+1 (835) 828-6883', '1982-03-05', 'Quam repudiandae tem', 'male', 'uploads/UmVlV4ajDPbDMyjMBFxGLlEGYCOsb5JrNYCfmRYj.jpg', '2022-10-23 20:56:36', '2022-10-23 20:56:36');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_22_194509_laratrust_setup_tables', 1),
(6, '2022_10_23_063459_create_teacher_profiles_table', 1),
(7, '2022_10_23_081644_create_student_profiles_table', 1),
(8, '2022_10_23_091105_create_admin_profiles_table', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2022-10-23 20:11:53', '2022-10-23 20:11:53'),
(2, 'users-read', 'Read Users', 'Read Users', '2022-10-23 20:11:53', '2022-10-23 20:11:53'),
(3, 'users-update', 'Update Users', 'Update Users', '2022-10-23 20:11:53', '2022-10-23 20:11:53'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2022-10-23 20:11:53', '2022-10-23 20:11:53'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2022-10-23 20:11:53', '2022-10-23 20:11:53'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2022-10-23 20:11:53', '2022-10-23 20:11:53'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2022-10-23 20:11:54', '2022-10-23 20:11:54'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2022-10-23 20:11:54', '2022-10-23 20:11:54'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2022-10-23 20:11:54', '2022-10-23 20:11:54'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2022-10-23 20:11:54', '2022-10-23 20:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2022-10-23 20:11:53', '2022-10-23 20:11:53'),
(2, 'teacher', 'Teacher', 'Teacher', '2022-10-23 20:11:55', '2022-10-23 20:11:55'),
(3, 'student', 'Student', 'Student', '2022-10-23 20:11:55', '2022-10-23 20:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User'),
(3, 2, 'App\\Models\\User'),
(2, 3, 'App\\Models\\User'),
(2, 4, 'App\\Models\\User'),
(1, 5, 'App\\Models\\User'),
(2, 6, 'App\\Models\\User'),
(2, 7, 'App\\Models\\User'),
(3, 8, 'App\\Models\\User'),
(3, 9, 'App\\Models\\User'),
(3, 10, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `student_profiles`
--

CREATE TABLE `student_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`class`)),
  `subject1` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`subject1`)),
  `subject2` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`subject2`)),
  `subject3` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`subject3`)),
  `subject4` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`subject4`)),
  `subject5` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`subject5`)),
  `subject6` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`subject6`)),
  `subject7` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`subject7`)),
  `subject8` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`subject8`)),
  `subject9` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`subject9`)),
  `subject10` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`subject10`)),
  `subject11` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`subject11`)),
  `subject12` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`subject12`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_profiles`
--

INSERT INTO `student_profiles` (`id`, `user_id`, `name`, `email`, `dob`, `address`, `gender`, `parent_name`, `parent_phone`, `parent_email`, `image`, `class`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `subject9`, `subject10`, `subject11`, `subject12`, `created_at`, `updated_at`) VALUES
(1, 2, 'Alfreda Reynolds', 'jovyhojolu@mailinator.com', '1997-12-20', 'Sed amet eaque dolo', 'male', 'Slade Houston', '+1 (559) 765-1784', 'veqo@mailinator.com', 'uploads/4ripzm09mA1bYJcR6wmcXRsecI5xxg0IeSWExsEv.jpg', '\"3B\"', '\"maths\"', '\"english\"', '\"kiswahili\"', '\"chemistry\"', NULL, '\"biology\"', '\"history\"', NULL, '\"c.r.e\"', '\"computer studies\"', '\"german\"', NULL, '2022-10-23 20:15:27', '2022-10-23 20:15:27'),
(2, 8, 'Penelope Boyd', 'cuwit@mailinator.com', '1982-02-05', 'Consequatur in eaqu', 'male', 'Barrett Gray', '+1 (119) 328-8102', 'dape@mailinator.com', 'uploads/LV2JZXfAe6oV55ZPdkhffb8IDyqiabreOoRgt6GF.jpg', '\"3C\"', '\"maths\"', '\"english\"', '\"kiswahili\"', '\"chemistry\"', NULL, NULL, '\"history\"', NULL, '\"c.r.e\"', '\"bussines\"', '\"german\"', NULL, '2022-10-23 21:16:20', '2022-10-23 21:16:20'),
(3, 9, 'Macey Farrell', 'zipifevy@mailinator.com', '2007-11-26', 'Quia molestias vel u', 'female', 'Dylan House', '+1 (356) 704-8136', 'tonaraz@mailinator.com', 'uploads/COQykaXuvAcyeQqk8sgRBPHt3uTInnyw3N0ccVB1.jpg', '\"3C\"', '\"maths\"', '\"english\"', '\"kiswahili\"', '\"chemistry\"', NULL, NULL, NULL, '\"geography\"', '\"c.r.e\"', '\"agriculture\"', '\"french\"', NULL, '2022-10-23 21:17:01', '2022-10-23 21:17:01'),
(4, 10, 'Dean Brooks', 'gekokow@mailinator.com', '2021-08-25', 'Sequi esse suscipit', 'female', 'Lamar Campos', '+1 (871) 806-4227', 'cywomege@mailinator.com', 'uploads/q4TnNdQOugwhtfJKjAe4RlYR5rCbJuLiDmMn8eJf.jpg', '\"1A\"', '\"maths\"', '\"english\"', '\"kiswahili\"', '\"chemistry\"', NULL, '\"biology\"', NULL, NULL, NULL, '\"computer studies\"', NULL, '\"homescience\"', '2022-10-23 21:17:33', '2022-10-23 21:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_profiles`
--

CREATE TABLE `teacher_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tfaculty` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`tfaculty`)),
  `teaching1` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`teaching1`)),
  `teaching2` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`teaching2`)),
  `teaching3` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`teaching3`)),
  `teaching4` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`teaching4`)),
  `teaching5` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`teaching5`)),
  `classincharge` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`classincharge`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_profiles`
--

INSERT INTO `teacher_profiles` (`id`, `user_id`, `name`, `email`, `phone`, `dob`, `address`, `gender`, `image`, `tfaculty`, `teaching1`, `teaching2`, `teaching3`, `teaching4`, `teaching5`, `classincharge`, `created_at`, `updated_at`) VALUES
(1, 3, 'Paula Hays', 'pojukax@mailinator.com', '+1 (695) 652-9368', '1980-11-15', 'Ullamco omnis dolore', 'female', 'uploads/JpR56pGAnz8fewvarZhzyJSU4QMOntqGtwKkivYj.jpg', '\"science\"', '\"maths\"', NULL, '\"chemistry\"', NULL, '\"computer\"', '\"3B\"', '2022-10-23 20:17:40', '2022-10-23 20:17:40'),
(2, 4, 'Amity Bender', 'nesu@mailinator.com', '+1 (439) 114-4624', '1982-06-13', 'Ullam velit labore c', 'male', 'uploads/Y2lhtRQutuWljnlyqDzKimJiHDRtltZpzHRRi95F.jpg', '\"maths\"', '\"maths\"', '\"english\"', '\"biology\"', '\"biology\"', '\"woodwork\"', '\"3A\"', '2022-10-23 20:37:58', '2022-10-23 20:37:58'),
(3, 6, 'Sebastian Beasley', 'rasyp@mailinator.com', '+1 (325) 866-4416', '2009-10-18', 'Placeat maiores ver', 'female', 'uploads/veDkphWuawZr253RVCOwq0I0Fw8pbqRgoxN9DLQ0.jpg', '\"languages\"', '\"maths\"', '\"english\"', '\"biology\"', '\"chemistry\"', '\"woodwork\"', '\"1D\"', '2022-10-23 21:15:16', '2022-10-23 21:15:16'),
(4, 7, 'Charlotte Whitaker', 'lexetotivo@mailinator.com', '+1 (144) 631-1392', '2011-01-23', 'Velit ipsum consect', 'female', 'uploads/r8QPAXteQIh5KRTlyHDpE56BigA6c6JdDIuTzoV9.jpg', '\"languages\"', NULL, '\"english\"', '\"chemistry\"', '\"physics\"', '\"homescience\"', '\"4B\"', '2022-10-23 21:15:51', '2022-10-23 21:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` enum('teacher','student','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Noel Burns', 'kunami@mailinator.com', 'admin', NULL, '$2y$10$8IYJYdFVe5PAGbCy.andCenlzA6fwSu7/xSPWhGiw02T0.sP7Hwda', NULL, '2022-10-23 20:12:23', '2022-10-23 20:12:23'),
(2, 'Alfreda Reynolds', 'jovyhojolu@mailinator.com', 'student', NULL, '$2y$10$AWUOWW4BOzP9e0zqCEhNuu52fSc6BivMm2pmMqWJDcOzUJWDjUp1a', NULL, '2022-10-23 20:13:34', '2022-10-23 20:13:34'),
(3, 'Paula Hays', 'pojukax@mailinator.com', 'teacher', NULL, '$2y$10$JaI/2927BY34zK0vS329YuJVtuNEgh5/j2qNbk23cKbooAkGfR3Ye', NULL, '2022-10-23 20:17:03', '2022-10-23 20:17:03'),
(4, 'Amity Bender', 'nesu@mailinator.com', 'teacher', NULL, '$2y$10$fM0G5qLsEf5Agq8mABkbke70q.KQA51vLRwLzqbpMVSdZIJJzL9ya', NULL, '2022-10-23 20:34:30', '2022-10-23 20:34:30'),
(5, 'Cosmas Simons', 'cosmas5232@gmail.com', 'admin', NULL, '$2y$10$R5NZYTyKP3SNs0zoseGGDeKMVZc6e6hrrXV/376gzbWRpnSqLbYNO', NULL, '2022-10-23 20:56:01', '2022-10-23 20:56:01'),
(6, 'Sebastian Beasley', 'rasyp@mailinator.com', 'teacher', NULL, '$2y$10$kGemyMgESWX1jYP2ON2louXNlIik.i1EgW5kCRCB2MAnXm2jydDpS', NULL, '2022-10-23 21:14:54', '2022-10-23 21:14:54'),
(7, 'Charlotte Whitaker', 'lexetotivo@mailinator.com', 'teacher', NULL, '$2y$10$QZ3qTkAZTKp/vnA78irn7uGjrZj6EqeFQdvXZR.kfIWWJdYnzAJJ.', NULL, '2022-10-23 21:15:41', '2022-10-23 21:15:41'),
(8, 'Penelope Boyd', 'cuwit@mailinator.com', 'student', NULL, '$2y$10$QJ4fkfsO5mBIste.DFZZTukfA8tbivP5c6q8SoxhIBKoKd8JnLsLa', NULL, '2022-10-23 21:16:06', '2022-10-23 21:16:06'),
(9, 'Macey Farrell', 'zipifevy@mailinator.com', 'student', NULL, '$2y$10$EdnpNO8WBxUaZ2oI9TuPIOtvOvcHky4x0Pfs1Htw0pCcEa4fX2RWe', NULL, '2022-10-23 21:16:45', '2022-10-23 21:16:45'),
(10, 'Dean Brooks', 'gekokow@mailinator.com', 'student', NULL, '$2y$10$Ff40kGoS7etoxqxEj7CLnuFZ1UrL.TgFVCovHyl9YuZQTaIomIq3G', NULL, '2022-10-23 21:17:16', '2022-10-23 21:17:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `student_profiles`
--
ALTER TABLE `student_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_profiles_user_id_index` (`user_id`);

--
-- Indexes for table `teacher_profiles`
--
ALTER TABLE `teacher_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_profiles_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_profiles`
--
ALTER TABLE `student_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher_profiles`
--
ALTER TABLE `teacher_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
