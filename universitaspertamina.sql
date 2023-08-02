-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2023 pada 13.20
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitaspertamina`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cooperations`
--

CREATE TABLE `cooperations` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `industry_id` bigint(20) UNSIGNED NOT NULL,
  `organization_type_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cooperation_started_from` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cooperations`
--

INSERT INTO `cooperations` (`id`, `country_id`, `industry_id`, `organization_type_id`, `name`, `description`, `cooperation_started_from`, `created_at`, `updated_at`) VALUES
(25, 11, 2, 4, 'Aquamarine', 'Aquamarine', '2023-07-28', '2023-07-28 04:00:37', '2023-07-28 04:00:37'),
(26, 15, 2, 2, 'Proton Ventures', 'Proton Ventures', '2023-07-28', '2023-07-28 04:01:17', '2023-07-28 04:01:17'),
(27, 4, 2, 1, 'Yara and Nel', 'Yara and Nel', '2023-07-28', '2023-07-28 04:01:46', '2023-07-28 04:01:46'),
(28, 19, 10, 6, 'ABC Electronics', 'ABC Electronics', '2023-07-28', '2023-07-28 04:12:58', '2023-07-28 04:12:58'),
(29, 16, 11, 7, 'XYZ Motors', 'XYZ Motors', '2023-07-28', '2023-07-28 04:13:27', '2023-07-28 04:13:27'),
(30, 11, 12, 8, 'Global PharmaCorp', 'Global PharmaCorp', '2023-07-28', '2023-07-28 04:14:05', '2023-07-28 04:14:05'),
(31, 20, 13, 6, 'TechSolutions Ltd.', 'TechSolutions Ltd.', '2023-07-28', '2023-07-28 04:14:47', '2023-07-28 04:14:47'),
(32, 9, 14, 8, 'Fashion Forward Inc.', 'Fashion Forward Inc.', '2023-07-28', '2023-07-28 04:15:49', '2023-07-28 04:15:49'),
(33, 21, 15, 7, 'Green Agri Co.', 'Green Agri Co.', '2023-07-28', '2023-07-28 04:16:30', '2023-07-28 04:16:30'),
(34, 22, 16, 6, 'Medlife Healthcare', 'Medlife Healthcare', '2023-07-28', '2023-07-28 04:17:16', '2023-07-28 04:17:16'),
(35, 23, 17, 8, 'EnergyPower Ltd.', 'EnergyPower Ltd.', '2023-07-28', '2023-07-28 04:17:57', '2023-07-28 04:17:57'),
(36, 24, 18, 6, 'FoodDelight Inc.', 'FoodDelight Inc.', '2023-07-28', '2023-07-28 04:18:49', '2023-07-28 04:18:49'),
(37, 25, 19, 7, 'EcoTech Solutions', 'EcoTech Solutions', '2023-07-28', '2023-07-28 04:19:32', '2023-07-28 04:19:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Benelux', '2023-07-27 19:32:41', '2023-07-27 19:32:41'),
(2, 'New Zealand', '2023-07-27 19:32:52', '2023-07-27 19:32:52'),
(3, 'China', '2023-07-27 19:33:05', '2023-07-27 19:33:05'),
(4, 'Norway', '2023-07-27 19:33:15', '2023-07-27 19:33:15'),
(5, 'Denmark', '2023-07-27 19:33:23', '2023-07-27 19:33:23'),
(6, 'Saudi Arabia', '2023-07-27 19:33:34', '2023-07-27 19:33:34'),
(7, 'Finland', '2023-07-27 19:33:43', '2023-07-27 19:33:43'),
(8, 'South Korea', '2023-07-27 19:33:52', '2023-07-27 19:33:52'),
(9, 'France', '2023-07-27 19:34:00', '2023-07-27 19:34:00'),
(10, 'UAE', '2023-07-27 19:34:07', '2023-07-27 19:34:07'),
(11, 'Germany', '2023-07-27 19:34:15', '2023-07-27 19:34:15'),
(12, 'UK', '2023-07-27 19:34:22', '2023-07-27 19:34:22'),
(13, 'Japan', '2023-07-27 19:34:30', '2023-07-27 19:34:30'),
(14, 'Qatar', '2023-07-27 19:34:38', '2023-07-27 19:34:38'),
(15, 'Netherlands', '2023-07-27 22:00:37', '2023-07-27 22:00:37'),
(16, 'Indonesia', '2023-07-28 00:11:09', '2023-07-28 00:11:09'),
(17, 'Malaysian', '2023-07-28 00:13:57', '2023-07-28 00:13:57'),
(18, 'Thailand', '2023-07-28 00:17:19', '2023-07-28 00:17:19'),
(19, 'Amerika Serikat', '2023-07-28 04:10:05', '2023-07-28 04:10:05'),
(20, 'India', '2023-07-28 04:10:29', '2023-07-28 04:10:29'),
(21, 'Brazil', '2023-07-28 04:10:56', '2023-07-28 04:10:56'),
(22, 'Singapore', '2023-07-28 04:11:50', '2023-07-28 04:11:50'),
(23, 'Kanada', '2023-07-28 04:11:58', '2023-07-28 04:11:58'),
(24, 'Italia', '2023-07-28 04:12:05', '2023-07-28 04:12:05'),
(25, 'Australia', '2023-07-28 04:12:18', '2023-07-28 04:12:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `industries`
--

CREATE TABLE `industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `industries`
--

INSERT INTO `industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Renewable energy', '2023-07-27 19:36:52', '2023-07-27 19:36:52'),
(2, 'Hydrogen, ammonia', '2023-07-27 19:37:02', '2023-07-27 19:37:02'),
(3, 'Greenfuel, SAF', '2023-07-27 19:37:10', '2023-07-27 19:37:10'),
(4, 'CCS or CCUS', '2023-07-27 19:37:20', '2023-07-27 19:37:20'),
(5, 'EV&ESS', '2023-07-27 19:37:32', '2023-07-27 19:37:32'),
(6, 'Carbon Trading', '2023-07-27 19:37:45', '2023-07-27 19:37:45'),
(7, 'Petrochemical', '2023-07-27 19:37:55', '2023-07-27 19:37:55'),
(8, 'Others', '2023-07-27 19:38:04', '2023-07-27 19:38:04'),
(9, 'Keuangan', '2023-07-28 00:11:40', '2023-07-28 00:11:40'),
(10, 'Teknologi Elektronik', '2023-07-28 04:06:55', '2023-07-28 04:06:55'),
(11, 'Otomotif', '2023-07-28 04:07:05', '2023-07-28 04:07:05'),
(12, 'Farmasi', '2023-07-28 04:07:14', '2023-07-28 04:07:14'),
(13, 'Teknologi', '2023-07-28 04:07:47', '2023-07-28 04:07:47'),
(14, 'Fashion', '2023-07-28 04:08:02', '2023-07-28 04:08:02'),
(15, 'Pertanian', '2023-07-28 04:08:16', '2023-07-28 04:08:16'),
(16, 'Layanan Kesehatan', '2023-07-28 04:08:32', '2023-07-28 04:08:32'),
(17, 'Listrik', '2023-07-28 04:09:01', '2023-07-28 04:09:01'),
(18, 'Kuliner', '2023-07-28 04:09:14', '2023-07-28 04:09:14'),
(19, 'Lingkungan', '2023-07-28 04:09:40', '2023-07-28 04:09:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_23_041738_create_cooperations_table', 1),
(6, '2023_07_25_064522_create_industries_table', 1),
(7, '2023_07_25_064605_create_countries_table', 1),
(8, '2023_07_25_065126_create_organization_types_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `organization_types`
--

CREATE TABLE `organization_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `organization_types`
--

INSERT INTO `organization_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Research', '2023-07-27 19:35:11', '2023-07-27 19:35:11'),
(2, 'Development Agency', '2023-07-27 19:36:20', '2023-07-27 19:36:20'),
(3, 'Finance', '2023-07-27 19:36:30', '2023-07-27 19:36:30'),
(4, 'Commercial Company', '2023-07-27 19:36:39', '2023-07-27 19:36:39'),
(5, 'Banking', '2023-07-28 00:11:22', '2023-07-28 00:11:22'),
(6, 'Swasta', '2023-07-28 04:05:56', '2023-07-28 04:05:56'),
(7, 'Perseroan Terbatas', '2023-07-28 04:06:10', '2023-07-28 04:06:10'),
(8, 'Publik', '2023-07-28 04:06:25', '2023-07-28 04:06:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, '$2y$10$UYSfXeKgkR3jfp3rllOv9u.lBhszW9Fi1oHgSA87hdXjQIk3SqeA2', NULL, '2023-07-27 19:29:11', '2023-07-27 19:29:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cooperations`
--
ALTER TABLE `cooperations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cooperations_id_unique` (`id`);

--
-- Indeks untuk tabel `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `organization_types`
--
ALTER TABLE `organization_types`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cooperations`
--
ALTER TABLE `cooperations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `organization_types`
--
ALTER TABLE `organization_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
