-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 02:38 PM
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
-- Database: `madina_mall`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('Shop','Office') COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_detail` enum('Front Shop','Center Shop') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `type`, `type_detail`, `name`, `dimension`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Shop', 'Front Shop', 'Peggie Wehner', '87626 Daniela Turnpike Apt. 154\nEast Darien, MS 77496-5815', 1, '2022-07-08 07:43:29', '2022-07-08 07:43:29'),
(2, 'Shop', 'Front Shop', 'Prof. Hunter Stokes III', '9814 Keebler Rest Suite 147\nFernandoport, AK 25632', 1, '2022-07-08 07:43:29', '2022-07-08 07:43:29'),
(3, 'Shop', 'Front Shop', 'Prof. Clarissa Wolf Jr.', '72548 Gulgowski Ford\nRathville, OR 30274', 1, '2022-07-08 07:43:29', '2022-07-08 07:43:29'),
(4, 'Shop', 'Front Shop', 'Kasandra Treutel', '25798 Zieme Center\nPort Daxstad, NC 55136-8913', 1, '2022-07-08 07:43:29', '2022-07-08 07:43:29'),
(5, 'Shop', 'Front Shop', 'Audie Quitzon', '35431 Berenice Circles Apt. 417\nNew Edyth, CO 97082-2524', 1, '2022-07-08 07:43:29', '2022-07-08 07:43:29'),
(26, 'Shop', 'Center Shop', 'Anissa Rutherford', '2591 Mann Garden\nWisozkstad, ME 95174-0420', 1, '2022-07-08 07:44:21', '2022-07-08 07:44:21'),
(27, 'Shop', 'Center Shop', 'Leonardo Little', '896 Pfannerstill Ville Suite 525\nEast Kristofer, SD 81294', 1, '2022-07-08 07:44:21', '2022-07-08 07:44:21'),
(28, 'Shop', 'Center Shop', 'Eula Stracke DVM', '303 Winona Springs\nEast Leonardo, NM 81302-8817', 1, '2022-07-08 07:44:21', '2022-07-08 07:44:21'),
(29, 'Shop', 'Center Shop', 'Shanelle Hoppe', '42052 Pfannerstill Locks\nKrajcikmouth, WA 41069-3587', 1, '2022-07-08 07:44:21', '2022-07-08 07:44:21'),
(30, 'Shop', 'Center Shop', 'Mr. Kacey Treutel', '19002 Denesik Cape\nStrackeburgh, OK 04915-9241', 1, '2022-07-08 07:44:21', '2022-07-08 07:44:21'),
(51, 'Office', NULL, 'Laurence Lesch', '84239 Bertram Flat\nKerlukestad, CA 10294', 1, '2022-07-08 07:44:39', '2022-07-08 07:44:39'),
(52, 'Office', NULL, 'Sigrid Langosh', '36040 Wilkinson Crescent Suite 802\nEast Rachelville, NH 60166', 1, '2022-07-08 07:44:39', '2022-07-08 07:44:39'),
(53, 'Office', NULL, 'Lilliana Daugherty', '917 Ocie Inlet\nRueckerview, SC 50696-2428', 1, '2022-07-08 07:44:39', '2022-07-08 07:44:39'),
(54, 'Office', NULL, 'Yessenia Nader', '627 Donnelly Garden Apt. 749\nTremblayberg, AL 25054-6372', 1, '2022-07-08 07:44:39', '2022-07-08 07:44:39'),
(55, 'Office', NULL, 'Katrine Runolfsson', '842 Carroll Summit Suite 539\nReynoldsfurt, TN 80738-1165', 1, '2022-07-08 07:44:39', '2022-07-08 07:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `street`, `apt`, `zip`, `state`, `city`, `phone_number`, `email`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Madina Mall', 'street jere', 'apt', '12312', 'Arizona', 'Kaneohe Station', '123123', 'email@email.com', 'Descipitj here', NULL, '2022-07-08 19:00:00', '2022-07-09 16:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ec_id` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `expense_date` date NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expense_category`
--

CREATE TABLE `expense_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2022_06_18_150529_create_tenants_table', 1),
(6, '2022_06_22_192410_create_area_table', 1),
(7, '2022_06_22_200127_create_rent_table', 1),
(8, '2022_06_22_200155_create_expense_category_table', 1),
(9, '2022_06_22_200210_create_expense_table', 1),
(10, '2022_06_22_200236_create_company_table', 1),
(11, '2022_06_22_203649_alter_table_users', 2),
(14, '2022_07_10_162132_add_rent_table', 3);

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
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `rent` double(8,2) NOT NULL,
  `maintenance` double(8,2) NOT NULL,
  `total_amount` double(8,2) NOT NULL,
  `pay_amount` double(8,2) DEFAULT NULL,
  `pay_date` date DEFAULT NULL,
  `generation_date` date DEFAULT NULL,
  `next_generation_date` date DEFAULT NULL,
  `generated` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('paid','unpaid','partially_paid') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `invoice_no`, `t_id`, `a_id`, `rent`, `maintenance`, `total_amount`, `pay_amount`, `pay_date`, `generation_date`, `next_generation_date`, `generated`, `status`, `created_at`, `updated_at`) VALUES
(2, '1002', 27, 54, 12.00, 22.00, 34.00, NULL, NULL, '2022-04-11', '2022-05-11', '0', 'unpaid', '2022-07-11 03:43:26', '2022-07-11 03:43:26'),
(3, '1003', 30, 1, 700.00, 200.00, 900.00, 900.00, '2022-07-11', '2022-02-11', '2022-03-11', '0', 'paid', '2022-07-11 03:43:38', '2022-07-11 12:02:41'),
(4, '1004', 30, 1, 800.00, 200.00, 1000.00, 1000.00, '2022-03-22', '2022-03-11', '2022-04-11', '0', 'paid', '2022-07-11 03:43:38', '2022-07-11 03:43:38'),
(5, '1005', 27, 54, 12.00, 22.00, 34.00, 34.00, '2022-07-13', '2022-07-11', '2022-08-11', '0', 'paid', '2022-07-11 03:43:26', '2022-07-11 03:43:26'),
(6, '1006', 30, 1, 900.00, 200.00, 1100.00, 1100.00, '2022-04-18', '2022-04-11', '2022-05-11', '0', 'paid', '2022-07-11 03:43:38', '2022-07-11 03:43:38'),
(7, '1007', 30, 1, 1000.00, 200.00, 1200.00, NULL, NULL, '2022-05-11', '2022-06-11', '0', 'unpaid', '2022-07-11 03:43:38', '2022-07-11 03:43:38'),
(8, '1008', 30, 1, 1100.00, 200.00, 1300.00, 1300.00, '2022-07-11', '2022-06-11', '2022-07-11', '0', 'paid', '2022-07-11 03:43:38', '2022-07-11 14:32:36'),
(9, '1009', 30, 1, 1200.00, 200.00, 1400.00, 1400.00, '2022-07-11', '2022-07-11', '2022-08-11', '0', 'paid', '2022-07-11 03:43:38', '2022-07-11 03:43:38'),
(10, '1010', 32, 5, 1200.00, 200.00, 1400.00, NULL, NULL, '2022-07-11', '2022-08-11', '0', 'unpaid', '2022-07-11 13:18:57', '2022-07-11 13:18:57'),
(11, '1011', 33, 55, 1200.00, 150.00, 1350.00, NULL, NULL, '2022-07-20', '2022-08-20', '0', 'unpaid', '2022-07-11 13:21:58', '2022-07-11 13:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_alloted` int(11) DEFAULT NULL,
  `acquiring_date` date DEFAULT NULL,
  `rent` double(8,2) NOT NULL,
  `maintenance` double(8,2) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `first_name`, `last_name`, `phone_number`, `business_name`, `area_alloted`, `acquiring_date`, `rent`, `maintenance`, `photo`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Lauriane', 'Greenfelder', '631.349.3455', 'Von LLC', 1, '1974-06-30', 5000.00, 300.00, NULL, 0, '2022-07-08 07:43:29', '2022-07-09 17:20:20'),
(2, 'Jordane', 'Bruen', '205.932.4983', 'Leffler, Schroeder and Weissnat', 2, '1985-04-26', 5000.00, 300.00, NULL, 1, '2022-07-08 07:43:29', '2022-07-09 17:07:56'),
(3, 'Marcelina', 'Bahringer', '+19382023930', 'Kilback Inc', 3, '1986-04-20', 5000.00, 300.00, NULL, 1, '2022-07-08 07:43:29', '2022-07-09 17:08:00'),
(4, 'Forrest', 'Feil', '423.651.2985', 'Mitchell-Funk', 4, '1996-05-03', 5000.00, 300.00, NULL, 1, '2022-07-08 07:43:29', '2022-07-09 17:08:04'),
(5, 'Kane', 'Dietrich', '1-478-807-5265', 'McGlynn, Nikolaus and Kohler', 26, '2011-06-04', 5000.00, 300.00, 'avatar.jpg', 1, '2022-07-08 07:43:29', '2022-07-09 17:08:09'),
(6, 'Dovie', 'Harvey', '(551) 365-0901', 'Reichel Group', 27, '1972-07-03', 5000.00, 300.00, 'avatar.jpg', 1, '2022-07-08 07:43:29', '2022-07-09 17:08:13'),
(7, 'Raina', 'Bosco', '(325) 524-6936', 'D\'Amore, Borer and Johns', 28, '1973-05-07', 5000.00, 300.00, 'avatar.jpg', 1, '2022-07-08 07:43:29', '2022-07-09 17:08:20'),
(8, 'Emmy', 'Mertz', '1-662-422-4771', 'Hand-Koepp', 29, '1970-06-09', 5000.00, 300.00, 'avatar.jpg', 1, '2022-07-08 07:43:29', '2022-07-09 17:08:25'),
(9, 'Berenice', 'Aufderhar', '+16516524529', 'Feeney, Okuneva and Yundt', 51, '2021-03-29', 5000.00, 300.00, 'avatar.jpg', 1, '2022-07-08 07:43:29', '2022-07-08 07:43:29'),
(10, 'Reynold', 'Olson', '(541) 705-4162', 'Auer Group', 52, '1995-08-18', 5000.00, 300.00, 'avatar.jpg', 1, '2022-07-08 07:43:29', '2022-07-08 07:43:29'),
(26, 'Faraz2', 'Ahmed', '+923232588758', 'Softmatic Solution', 53, '2022-07-16', 200.00, 100.00, '87Screenshot_24.jpg', 1, '2022-07-08 12:14:14', '2022-07-08 14:17:14'),
(27, 'asdf', 'qwe', '123', 'asdfasdf', 54, '2022-08-04', 12.00, 22.00, 'avatar.jpg', 1, '2022-07-08 14:08:18', '2022-07-08 14:08:18'),
(30, 'First Name', 'Last name', '123123', 'Busines Name', 1, '2022-07-18', 1000.00, 200.00, 'avatar.jpg', 1, '2022-07-11 03:43:38', '2022-07-11 03:43:38'),
(32, 'Faraz2', 'Ahmed', '+923232588758', 'Softmatic Solution', 5, '2022-07-12', 1200.00, 200.00, 'avatar.jpg', 1, '2022-07-11 13:18:57', '2022-07-11 13:18:57'),
(33, 'Faraz3', 'Ahmed', '+92343434343434', 'sadfasdf', 55, '2022-07-20', 1200.00, 150.00, 'avatar.jpg', 1, '2022-07-11 13:21:58', '2022-07-11 13:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Admin','Cash Manager') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'avatar.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone_number`, `username`, `email`, `email_verified_at`, `password`, `type`, `is_active`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'faraz', 'ahmedaa', '12312322', 'test', 'test@email.com', NULL, '123', 'Admin', 1, '74Screenshot_2.jpg', NULL, '2022-07-08 07:34:05', '2022-07-09 16:51:27'),
(2, 'Faraz', 'Ahmed', '+923232588758', 'test2', 'farazahmed34296@gmail.com', NULL, '123123', 'Admin', 1, '73Screenshot_83.jpg', NULL, '2022-07-08 07:34:05', '2022-07-08 14:27:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_category`
--
ALTER TABLE `expense_category`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
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
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_category`
--
ALTER TABLE `expense_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
