-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 24, 2023 at 02:54 AM
-- Server version: 5.7.39-42-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdag3aquenuqg`
--

-- --------------------------------------------------------

--
-- Table structure for table `cannibalisms`
--

CREATE TABLE `cannibalisms` (
  `cannibalism_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cannibalisms`
--

INSERT INTO `cannibalisms` (`cannibalism_id`, `name`) VALUES
(1, '1'),
(2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_player_id` bigint(20) UNSIGNED NOT NULL,
  `comment_user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `title`, `comment`, `comment_player_id`, `comment_user_id`, `created_at`, `updated_at`) VALUES
(1, 'nice guy', 'Don\'t touch evrima. Just play legacy', 1, 1, NULL, NULL),
(2, 'hi', 'Bro said only 750 hours lmao', 1, 1, NULL, NULL),
(3, 'Dude', 'This dude, not even joking I\'m being dead serious', 2, 2, NULL, NULL),
(4, '789', 'Everyone has caught on that the game is a scam except brand new players', 1, 2, NULL, NULL),
(20, 'Freak', 'Freak', 16, 3, '2023-05-13 04:37:20', '2023-05-13 04:37:20'),
(21, 'Nice guy', 'I enjoyed playing with him', 26, 3, '2023-05-13 04:42:48', '2023-05-13 04:42:48'),
(22, 'Hi Kittie', 'I enjoyed being on the team with her. A very good person.', 29, 3, '2023-05-13 04:44:42', '2023-05-13 04:44:42'),
(23, 'hi', 'I saw him very often in the game, especially on server 2', 30, 3, '2023-05-13 04:46:17', '2023-05-13 04:46:17'),
(24, 'hi hyper', 'Rocket', 5, 2, '2023-05-13 07:31:56', '2023-05-13 07:31:56'),
(26, 'Hi Iana', 'You are the best', 2, 2, '2023-05-13 18:22:52', '2023-05-13 18:22:52'),
(33, 'hi Sabrina', 'She’s very beautiful', 29, 1, '2023-05-13 22:59:45', '2023-05-13 22:59:45'),
(34, 'Freak', 'I\'ve never seen such freaks before. Kills everyone. Now GF is always empty.', 24, 1, '2023-05-14 00:08:50', '2023-05-14 00:08:50'),
(35, 'OwLTime', 'He told OwLTime that he was friendly (IM FRIENDLY) but wanted to eat him. funny.', 35, 1, '2023-05-14 01:51:08', '2023-05-14 01:51:08'),
(36, 'Friendly', 'He’s a nice guy. Friendly. We growth together. He was a diabloceraptor. I was a giga.', 36, 1, '2023-05-14 21:34:33', '2023-05-14 21:34:33'),
(37, 'hello', 'He\'s a nice guy.', 37, 1, '2023-05-14 22:48:21', '2023-05-14 22:48:21'),
(38, 'Good Carno!)', 'Good Carno!)', 38, 1, '2023-05-15 23:53:59', '2023-05-15 23:53:59'),
(39, 'hi', 'Sat together Pride rock. We were attacked by cera and killed another carno. Then we stayed with him. Then cera returned and he killed him. So we got another body. lol', 38, 1, '2023-05-16 00:02:12', '2023-05-16 00:02:12'),
(40, 'Hello freak', 'Piece of shit. kills juvi like it\'s normal.', 39, 1, '2023-05-16 00:05:34', '2023-05-16 00:05:34'),
(41, 'Sry', 'I\'m sorry I ate you. I was very hungry.', 40, 1, '2023-05-17 02:12:54', '2023-05-17 02:12:54'),
(42, 'asd', 'To be honest, I thought you were an adult', 40, 1, '2023-05-17 02:15:18', '2023-05-17 02:15:18'),
(43, 'UaskforIT', 'I was with Shant on GF server 2. UaskforIT with a Spino attacked me. I killed him. UaskforIT immediately spawned on another Spino to kill me. And killed.', 41, 1, '2023-05-19 15:59:39', '2023-05-19 15:59:39');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hellow evrione', '2023-05-07 09:42:16', '2023-05-07 09:42:16'),
(9, 3, 'i\'m first...', '2023-05-13 04:48:03', '2023-05-13 04:48:03'),
(11, 4, '123If I am given the option to rate somebody, I do. I feel like it could make somebody\'s day to do so, so I just rate everybody.', '2023-05-13 20:19:30', '2023-05-13 20:19:30');

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
(5, '2023_02_27_180528_create_messages_table', 1);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `player_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `steam_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_cannibalism_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `canibalism_points` int(11) DEFAULT NULL,
  `rate_points` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_id`, `name`, `steam_id`, `player_cannibalism_id`, `created_by`, `created_at`, `updated_at`, `canibalism_points`, `rate_points`) VALUES
(1, 'Tom', '76', 1, '1', '2023-05-12 20:38:57', '2023-05-13 23:26:05', 1, 28),
(2, 'Catycate012', '75', 1, '1', '2023-05-12 20:38:57', '2023-05-14 00:29:39', 0, 28),
(5, 'Hiper', '56756', 1, '1', '2023-05-12 20:38:57', '2023-05-13 09:43:25', 0, 20),
(14, 'Plorblus', NULL, 1, '3', '2023-05-13 04:35:15', '2023-06-01 23:09:35', 0, 21),
(15, 'Sonic_speed', NULL, 1, '3', '2023-05-13 04:35:47', '2023-05-13 09:39:27', 0, 14),
(16, 'JKN The Goober', NULL, 1, '3', '2023-05-13 04:36:27', '2023-05-13 04:36:27', 2, 20),
(17, 'xXFrostbite16', NULL, 1, '3', '2023-05-13 04:37:50', '2023-05-13 23:30:58', 2, 5),
(18, 'dawn', NULL, 1, '3', '2023-05-13 04:37:58', '2023-05-13 09:47:50', 0, 20),
(19, 'warpneon', NULL, 1, '3', '2023-05-13 04:38:16', '2023-05-13 04:38:16', 0, 20),
(20, 'Tinydino20', NULL, 1, '3', '2023-05-13 04:38:36', '2023-05-13 04:38:36', 0, 20),
(21, 'yasweenie', NULL, 1, '3', '2023-05-13 04:39:00', '2023-05-13 04:39:00', 0, 20),
(22, 'DB Enjoyer', NULL, 1, '3', '2023-05-13 04:39:33', '2023-05-13 04:39:33', 0, 20),
(23, '123', '76561198072030381', 1, '3', '2023-05-13 04:40:14', '2023-05-13 04:40:14', 1, 20),
(24, 'Dang', '76561198318131587', 1, '3', '2023-05-13 04:40:48', '2023-05-14 00:06:16', 2, 7),
(25, 'Ozis1', NULL, 1, '3', '2023-05-13 04:41:25', '2023-05-13 04:41:25', 0, 20),
(26, 'SpacePlanet', NULL, 1, '3', '2023-05-13 04:42:12', '2023-05-13 18:27:43', 0, 35),
(27, 'Shift', NULL, 1, '3', '2023-05-13 04:43:03', '2023-05-13 04:43:03', 0, 20),
(28, 'Mango', NULL, 1, '3', '2023-05-13 04:43:20', '2023-05-13 09:57:47', 0, 45),
(29, 'Clutch Kittie', NULL, 1, '3', '2023-05-13 04:43:42', '2023-05-17 03:47:41', 0, 48),
(30, 'hi guys', NULL, 1, '3', '2023-05-13 04:45:41', '2023-05-13 04:45:41', 0, 20),
(31, 'Bionic booger', '76561198142449032', 1, '4', '2023-05-14 00:36:43', '2023-05-14 00:36:43', 0, 20),
(32, 'Toast', NULL, 1, '1', '2023-05-14 00:48:03', '2023-05-14 00:48:03', 0, 20),
(33, 'Too', NULL, 1, '1', '2023-05-14 01:22:16', '2023-05-14 01:22:16', 0, 20),
(35, 'Stiopic khalabeeb', NULL, 1, '1', '2023-05-14 01:49:18', '2023-05-14 01:49:31', 3, 17),
(36, 'Jinxed', '76561199025461298', 1, '1', '2023-05-14 21:32:25', '2023-05-14 21:33:30', 0, 25),
(37, 'Myst', '76561199471470960', 1, '1', '2023-05-14 22:45:11', '2023-05-15 02:19:33', 0, 30),
(38, 'Kallionx', '76561199230262159', 1, '1', '2023-05-15 23:53:04', '2023-05-16 00:02:15', 0, 25),
(39, 'ImperialRecruiter', '76561198386198302', 1, '1', '2023-05-16 00:04:20', '2023-05-16 00:04:27', 0, 15),
(40, 'MiraIsUnstable', '76561199228472134', 1, '1', '2023-05-17 02:11:46', '2023-05-17 02:12:15', 0, 30),
(41, 'UaskforIT', '76561199071598113', 1, '1', '2023-05-19 15:57:41', '2023-05-19 15:59:53', 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `rate_id` bigint(20) NOT NULL,
  `rate` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`rate_id`, `rate`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `rates_has_players`
--

CREATE TABLE `rates_has_players` (
  `rates_rate_id` bigint(20) NOT NULL,
  `players_player_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rates_has_players`
--

INSERT INTO `rates_has_players` (`rates_rate_id`, `players_player_id`, `users_id`) VALUES
(4, 1, 1),
(5, 1, 1);

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
(1, 'Titan', 'candualexandru@gmail.com', NULL, '$2y$10$gjs3fx0woU9bDSt.7HUezexPIrRpEWQVmAJlROb37A9bm1T3RavQ.', 'IFko56hpV8Yn2hB7W6jgL2efynSaJX2enGGUV58jvUhZ6o6o5tBPfFHfe39K', '2023-05-07 09:41:44', '2023-05-07 09:41:44'),
(2, 'helloweee', 'ola@ola.com', NULL, '$2y$10$XplifFlQRknrPsa4GgejyushnrRnkPM8AP6chF2FAyRsn7tpjsMnq', 'yoPW0n64mAxPMgomh0DzBY34nXy7QRhL4oKNPilhM5hCXQeHAYzwclGOO9bZ', '2023-05-07 09:50:49', '2023-05-07 09:50:49'),
(3, 'omg', 'alex@gmail.com', NULL, '$2y$10$PWTKSPHWpVcU1d3QvjnbyukgyAaN0ycwhzsP1VF64QnkOSFNJK6/G', NULL, '2023-05-13 00:10:13', '2023-05-13 00:10:13'),
(4, 'TheRoun', 'TheRoun@TheRoun.com', NULL, '$2y$10$aoCJStymd9T64GEX8WEJH.27kLtrtPViH6zdV9T0sjXN69isM30Ae', '56BgY1qtg0zO4dr64PLZdHqVX5qRJh6ctYwAZj9KuY8ggFwYTKKikH0GHiXI', '2023-05-13 20:19:16', '2023-05-13 20:19:16'),
(5, 'Sabrina E Dowd', 'sabrinadowd01@gmail.com', NULL, '$2y$10$.I6NGJ/uCNeI4maz6DFU4uRBNMORzIQJcwvb0kIDtRNGBDCyemot2', '7gLJtu52SrU5n1JG9RrG0KnceoQpY3oxMmX7MFUsrJyh39Ei5ABmqAKPWjf7', '2023-05-15 03:00:40', '2023-05-15 03:00:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cannibalisms`
--
ALTER TABLE `cannibalisms`
  ADD PRIMARY KEY (`cannibalism_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `player_player_id_fk` (`comment_player_id`),
  ADD KEY `user_user_id_fk` (`comment_user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_foreign` (`user_id`);

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
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `cannibalism_cannibalism_id_fk` (`player_cannibalism_id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `rates_has_players`
--
ALTER TABLE `rates_has_players`
  ADD PRIMARY KEY (`rates_rate_id`,`players_player_id`),
  ADD KEY `fk_rates_has_players_players1_idx` (`players_player_id`),
  ADD KEY `fk_rates_has_players_rates_idx` (`rates_rate_id`),
  ADD KEY `fk_rates_has_players_users1_idx` (`users_id`);

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
-- AUTO_INCREMENT for table `cannibalisms`
--
ALTER TABLE `cannibalisms`
  MODIFY `cannibalism_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `player_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `rate_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rates_has_players`
--
ALTER TABLE `rates_has_players`
  ADD CONSTRAINT `fk_rates_has_players_players1` FOREIGN KEY (`players_player_id`) REFERENCES `players` (`player_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rates_has_players_rates` FOREIGN KEY (`rates_rate_id`) REFERENCES `rates` (`rate_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rates_has_players_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
