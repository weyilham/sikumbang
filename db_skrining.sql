-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 14, 2025 at 07:24 AM
-- Server version: 8.0.35
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skrining`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint UNSIGNED NOT NULL,
  `children_id` bigint UNSIGNED NOT NULL,
  `question_id` bigint UNSIGNED NOT NULL,
  `answer` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `children_id`, `question_id`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, 81, 'yes', '2025-02-13 11:01:44', '2025-02-13 11:01:44'),
(2, 1, 82, 'yes', '2025-02-13 11:01:44', '2025-02-13 11:01:44'),
(3, 1, 83, 'yes', '2025-02-13 11:01:44', '2025-02-13 11:01:44'),
(4, 1, 84, 'yes', '2025-02-13 11:01:44', '2025-02-13 11:01:44'),
(5, 1, 85, 'no', '2025-02-13 11:01:44', '2025-02-13 11:01:44'),
(6, 1, 86, 'no', '2025-02-13 11:01:44', '2025-02-13 11:01:44'),
(7, 1, 87, 'yes', '2025-02-13 11:01:44', '2025-02-13 11:01:44'),
(8, 1, 88, 'yes', '2025-02-13 11:01:44', '2025-02-13 11:01:44'),
(9, 1, 89, 'yes', '2025-02-13 11:01:44', '2025-02-13 11:01:44'),
(10, 1, 90, 'yes', '2025-02-13 11:01:44', '2025-02-13 11:01:44'),
(11, 2, 81, 'yes', '2025-02-13 11:05:09', '2025-02-13 11:05:09'),
(12, 2, 82, 'yes', '2025-02-13 11:05:09', '2025-02-13 11:05:09'),
(13, 2, 83, 'yes', '2025-02-13 11:05:09', '2025-02-13 11:05:09'),
(14, 2, 84, 'yes', '2025-02-13 11:05:09', '2025-02-13 11:05:09'),
(15, 2, 85, 'yes', '2025-02-13 11:05:09', '2025-02-13 11:05:09'),
(16, 2, 86, 'yes', '2025-02-13 11:05:09', '2025-02-13 11:05:09'),
(17, 2, 87, 'yes', '2025-02-13 11:05:09', '2025-02-13 11:05:09'),
(18, 2, 88, 'yes', '2025-02-13 11:05:09', '2025-02-13 11:05:09'),
(19, 2, 89, 'no', '2025-02-13 11:05:09', '2025-02-13 11:05:09'),
(20, 2, 90, 'yes', '2025-02-13 11:05:09', '2025-02-13 11:05:09'),
(21, 3, 81, 'yes', '2025-02-13 11:20:31', '2025-02-13 11:20:31'),
(22, 3, 82, 'yes', '2025-02-13 11:20:31', '2025-02-13 11:20:31'),
(23, 3, 83, 'yes', '2025-02-13 11:20:31', '2025-02-13 11:20:31'),
(24, 3, 84, 'no', '2025-02-13 11:20:31', '2025-02-13 11:20:31'),
(25, 3, 85, 'no', '2025-02-13 11:20:31', '2025-02-13 11:20:31'),
(26, 3, 86, 'no', '2025-02-13 11:20:31', '2025-02-13 11:20:31'),
(27, 3, 87, 'no', '2025-02-13 11:20:31', '2025-02-13 11:20:31'),
(28, 3, 88, 'yes', '2025-02-13 11:20:31', '2025-02-13 11:20:31'),
(29, 3, 89, 'yes', '2025-02-13 11:20:31', '2025-02-13 11:20:31'),
(30, 3, 90, 'yes', '2025-02-13 11:20:31', '2025-02-13 11:20:31'),
(31, 4, 81, 'yes', '2025-02-13 11:22:37', '2025-02-13 11:22:37'),
(32, 4, 82, 'yes', '2025-02-13 11:22:37', '2025-02-13 11:22:37'),
(33, 4, 83, 'yes', '2025-02-13 11:22:37', '2025-02-13 11:22:37'),
(34, 4, 84, 'no', '2025-02-13 11:22:37', '2025-02-13 11:22:37'),
(35, 4, 85, 'no', '2025-02-13 11:22:37', '2025-02-13 11:22:37'),
(36, 4, 86, 'no', '2025-02-13 11:22:37', '2025-02-13 11:22:37'),
(37, 4, 87, 'no', '2025-02-13 11:22:37', '2025-02-13 11:22:37'),
(38, 4, 88, 'no', '2025-02-13 11:22:37', '2025-02-13 11:22:37'),
(39, 4, 89, 'no', '2025-02-13 11:22:37', '2025-02-13 11:22:37'),
(40, 4, 90, 'no', '2025-02-13 11:22:37', '2025-02-13 11:22:37'),
(41, 5, 101, 'yes', '2025-02-13 11:25:08', '2025-02-13 11:25:08'),
(42, 5, 102, 'yes', '2025-02-13 11:25:08', '2025-02-13 11:25:08'),
(43, 5, 103, 'yes', '2025-02-13 11:25:08', '2025-02-13 11:25:08'),
(44, 5, 104, 'yes', '2025-02-13 11:25:08', '2025-02-13 11:25:08'),
(45, 5, 105, 'yes', '2025-02-13 11:25:08', '2025-02-13 11:25:08'),
(46, 5, 106, 'yes', '2025-02-13 11:25:08', '2025-02-13 11:25:08'),
(47, 5, 107, 'yes', '2025-02-13 11:25:08', '2025-02-13 11:25:08'),
(48, 5, 108, 'yes', '2025-02-13 11:25:08', '2025-02-13 11:25:08'),
(49, 5, 109, 'no', '2025-02-13 11:25:08', '2025-02-13 11:25:08'),
(50, 5, 110, 'yes', '2025-02-13 11:25:08', '2025-02-13 11:25:08'),
(51, 6, 81, 'yes', '2025-02-14 00:06:26', '2025-02-14 00:06:26'),
(52, 6, 82, 'yes', '2025-02-14 00:06:26', '2025-02-14 00:06:26'),
(53, 6, 83, 'yes', '2025-02-14 00:06:26', '2025-02-14 00:06:26'),
(54, 6, 84, 'yes', '2025-02-14 00:06:26', '2025-02-14 00:06:26'),
(55, 6, 85, 'yes', '2025-02-14 00:06:26', '2025-02-14 00:06:26'),
(56, 6, 86, 'yes', '2025-02-14 00:06:26', '2025-02-14 00:06:26'),
(57, 6, 87, 'no', '2025-02-14 00:06:26', '2025-02-14 00:06:26'),
(58, 6, 88, 'no', '2025-02-14 00:06:26', '2025-02-14 00:06:26'),
(59, 6, 89, 'no', '2025-02-14 00:06:26', '2025-02-14 00:06:26'),
(60, 6, 90, 'yes', '2025-02-14 00:06:26', '2025-02-14 00:06:26'),
(61, 7, 81, 'yes', '2025-02-14 00:23:00', '2025-02-14 00:23:00'),
(62, 7, 82, 'yes', '2025-02-14 00:23:00', '2025-02-14 00:23:00'),
(63, 7, 83, 'yes', '2025-02-14 00:23:00', '2025-02-14 00:23:00'),
(64, 7, 84, 'yes', '2025-02-14 00:23:00', '2025-02-14 00:23:00'),
(65, 7, 85, 'yes', '2025-02-14 00:23:00', '2025-02-14 00:23:00'),
(66, 7, 86, 'yes', '2025-02-14 00:23:00', '2025-02-14 00:23:00'),
(67, 7, 87, 'yes', '2025-02-14 00:23:00', '2025-02-14 00:23:00'),
(68, 7, 88, 'no', '2025-02-14 00:23:00', '2025-02-14 00:23:00'),
(69, 7, 89, 'no', '2025-02-14 00:23:00', '2025-02-14 00:23:00'),
(70, 7, 90, 'no', '2025-02-14 00:23:00', '2025-02-14 00:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1739517895),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1739517895;', 1739517895);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_age` int NOT NULL,
  `max_age` int NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `min_age`, `max_age`, `slug`, `created_at`, `updated_at`) VALUES
(1, '0 - 3 Bulan', 0, 3, '0-3-bulan', '2025-02-13 10:59:38', '2025-02-13 10:59:38'),
(2, '3 - 6 Bulan', 3, 6, '3-6-bulan', '2025-02-13 10:59:38', '2025-02-13 10:59:38'),
(3, '6 - 9 Bulan', 6, 9, '6-9-bulan', '2025-02-13 10:59:38', '2025-02-13 10:59:38'),
(4, '9 - 12 Bulan', 9, 12, '9-12-bulan', '2025-02-13 10:59:38', '2025-02-13 10:59:38'),
(5, '12 - 15 Bulan', 12, 15, '12-15-bulan', '2025-02-13 10:59:38', '2025-02-13 10:59:38'),
(6, '15 - 18 Bulan', 15, 18, '15-18-bulan', '2025-02-13 10:59:38', '2025-02-13 10:59:38'),
(7, '18 - 21 Bulan', 18, 21, '18-21-bulan', '2025-02-13 10:59:38', '2025-02-13 10:59:38'),
(8, '21 - 24 Bulan', 21, 24, '21-24-bulan', '2025-02-13 10:59:38', '2025-02-13 10:59:38'),
(9, '24 - 30 Bulan', 24, 30, '24-30-bulan', '2025-02-13 10:59:38', '2025-02-13 10:59:38'),
(10, '30 - 36 Bulan', 30, 36, '30-36-bulan', '2025-02-13 10:59:38', '2025-02-13 10:59:38'),
(11, '36 - 42 Bulan', 36, 42, '36-42-bulan', '2025-02-13 10:59:38', '2025-02-13 10:59:38'),
(12, '42 - 48 Bulan', 42, 48, '42-48-bulan', '2025-02-13 10:59:38', '2025-02-13 10:59:38'),
(13, '48 - 54 Bulan', 48, 54, '48-54-bulan', '2025-02-13 10:59:38', '2025-02-13 10:59:38'),
(14, '54 - 60 Bulan', 54, 60, '54-60-bulan', '2025-02-13 10:59:38', '2025-02-13 10:59:38'),
(15, '60 - 66 Bulan', 60, 66, '60-66-bulan', '2025-02-13 10:59:38', '2025-02-13 10:59:38'),
(16, '66 - 72 Bulan', 66, 72, '66-72-bulan', '2025-02-13 10:59:38', '2025-02-13 10:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `childrens`
--

CREATE TABLE `childrens` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `gender` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `height` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `childrens`
--

INSERT INTO `childrens` (`id`, `name`, `parent_name`, `birth_date`, `gender`, `address`, `phone_number`, `weight`, `height`, `created_at`, `updated_at`) VALUES
(1, 'rekha', 'reke', '2022-11-11', 'Perempuan', 'lampung', '087771628633', 5.00, 12.00, '2025-02-13 11:01:25', '2025-02-13 11:01:25'),
(2, 'emeng', 'reka', '2022-11-12', 'Laki-laki', 'reka', '087771627666', 6.00, 80.00, '2025-02-13 11:04:47', '2025-02-13 11:04:47'),
(3, 'Majid', 'ilham', '2022-10-22', 'Laki-laki', 'cinangka', '087771627666', 10.00, 20.00, '2025-02-13 11:20:07', '2025-02-13 11:20:07'),
(4, 'Habibi', 'ismet', '2022-11-11', 'Perempuan', 'serang', '0812345678', 8.00, 12.00, '2025-02-13 11:22:17', '2025-02-13 11:22:17'),
(5, 'reka', 'emeng', '2021-11-11', 'Laki-laki', 'serang', '087771252600', 8.00, 21.00, '2025-02-13 11:24:51', '2025-02-13 11:24:51'),
(6, 'nada', 'ipul', '2022-11-11', 'Perempuan', 'serang', '08112637677', 10.00, 90.00, '2025-02-14 00:04:51', '2025-02-14 00:04:51'),
(7, 'afif', 'riski', '2022-11-11', 'Laki-laki', 'test', '087771627677', 8.00, 30.00, '2025-02-14 00:22:30', '2025-02-14 00:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_11_155418_create_childrens_table', 1),
(5, '2025_02_11_160017_create_categories_table', 1),
(6, '2025_02_12_015451_create_questions_table', 1),
(7, '2025_02_13_172603_create_answers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `category_id`, `question`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pada saat bayi terlentang, apakah masing-masing lengan dan tungkai bergerak dengan mudah? Jawab Tidak bila salah satu atau kedua tungkai atau lengan bayi bergerak tak terarah atau tak terkendali.', 'Gerak kasar', NULL, NULL, NULL),
(2, 1, 'Jangan membuat suara apapun. Pada saat bayi terlentang apakah ia melihat dan menatap wajah Anda?', ' Sosialisasi dan kemandirian.', NULL, NULL, NULL),
(3, 1, 'Pada saat Anda mengajak bayi berbicara dan tersenyum, apakah ia tersenyum kembali kepada Anda? ', ' Sosialisasi dan kemandirian.', NULL, NULL, NULL),
(4, 1, 'Apakah bayi dapat mengeluarkan suara-suara lain (mengoceh) selain menangis?', 'Bicara dan bahasa.', NULL, NULL, NULL),
(5, 1, 'Apakah bayi suka tertawa keras walau tidak digelitik atau diraba-raba?', 'Bicara dan bahasa.', NULL, NULL, NULL),
(6, 1, 'Ambil gulungan wool merah, lalu letakkan di atas wajah di depan mata bayi. Gerakkan wool dari samping kiri ke kanan kepala atau sebaliknya. Apakah ia dapat mengikuti gerakan Anda dengan menggerakkan kepalanya dari kanan atau kiri ke tengah?', 'Gerak halus.', NULL, NULL, NULL),
(7, 1, 'Ambil gulungan wool merah, lalu letakkan di atas wajah di depan mata bayi. Gerakkan wool dari samping kiri ke kanan kepala atau sebaliknya. Apakah ia dapat mengikuti gerakan Anda dengan menggerakkan kepalanya dari satu sisi hampir sampai pada sisi yang lain?', 'Gerak halus.', NULL, NULL, NULL),
(8, 1, 'Pada saat bayi tengkurap di alas yang datar, apakah ia dapat mengangkat kepalanya seperti pada gambar?', 'Gerak kasar.', NULL, NULL, NULL),
(9, 1, 'Pada saat bayi tengkurap di alas yang datar, apakah ia dapat mengangkat kepalanya sehingga membentuk sudut 45˚ seperti pada gambar?', 'Gerak kasar.', NULL, NULL, NULL),
(10, 1, 'Pada saat bayi tengkurap di alas yang datar, apakah ia dapat mengangkat kepalanya dengan tegak seperti pada gambar?', 'Gerak kasar.', NULL, NULL, NULL),
(11, 2, 'Bayi diposisikan terlentang. Ambil gulungan wool merah, letakkan di atas wajah di depan mata bayi. Gerakkan wool dari samping kiri ke kanan kepala. Apakah ia dapat mengikuti gerakan Anda dengan menggerakkan kepala sepenuhnya dari satu ke sisi yang lain?', 'Gerak halus.', NULL, NULL, NULL),
(12, 2, 'Pada posisi bayi terlentang, pegang kedua tangannya lalu tarik perlahan ke posisi duduk. Dapatkah bayi mempertahankan lehernya secara kaku seperti pada gambar? Jawab Tidak bila kepala bayi jatuh kembali seperti gambar.', 'Gerak kasar.', NULL, NULL, NULL),
(13, 2, 'Ketika bayi tengkurap di alas yang datar, apakah ia dapat mengangkat dada dengan kedua lengannya sebagai penyangga seperti pada gambar?', 'Gerak kasar.', NULL, NULL, NULL),
(14, 2, 'Bayi dipangku orang tua atau pengasuh. Dapatkah bayi mempertahankan posisi kepala dalam keadaan tegak dan stabil? Jawab Tidak bila kepala bayi cenderung jatuh ke kanan, kiri, atau ke dadanya.', 'Gerak kasar.', NULL, NULL, NULL),
(15, 2, 'Bayi dipangku orang tua atau pengasuh. Sentuhkan pensil di punggung tangan atau ujung jari bayi (jangan meletakkan di atas telapak tangan bayi). Apakah bayi dapat menggenggam pensil itu selama beberapa detik?', 'Gerak halus.', NULL, NULL, NULL),
(16, 2, 'Bayi dipangku orang tua atau pengasuh. Dapatkah bayi mengarahkan matanya pada benda kecil sebesar kacang, kismis atau uang logam? Jawab Tidak jika ia tidak dapat mengarahkan matanya.', 'Gerak halus.', NULL, NULL, NULL),
(17, 2, 'Bayi dipangku orang tua atau pengasuh. Dapatkah bayi meraih mainan yang diletakkan agak jauh namun masih berada dalam jangkauan tangannya?', 'Gerak halus.', NULL, NULL, NULL),
(18, 2, 'Tanyakan kepada orang tua atau pengasuh, pernahkah bayi berbalik paling sedikit 2 kali, dari terlentang ke tengkurap atau sebaliknya?', 'Gerak kasar.', NULL, NULL, NULL),
(19, 2, 'Tanyakan kepada orang tua atau pengasuh, pernahkah bayi mengeluarkan suara gembira bernada tinggi atau memekik tetapi bukan menangis?', 'Bicara dan bahasa.', NULL, NULL, NULL),
(20, 2, 'Tanyakan kepada orang tua atau pengasuh, pernahkah orang tua atau pengasuh melihat bayi tersenyum ketika melihat mainan yang lucu, gambar, atau binatang peliharaan pada saat ia bermain sendiri?', 'Sosialisasi dan kemandirian.', NULL, NULL, NULL),
(21, 3, 'Bayi dipangku orang tua atau pengasuh, Taruh kismis di atas meja. Dapatkah bayi memungut dengan tangannya benda benda kecil seperti kismis, kacang-kacangan, potongan biskuit dengan gerakan miring atau menggerapai seperti gambar?', 'Gerak halus.', NULL, NULL, NULL),
(22, 3, 'Bayi dipangku orang tua atau pengasuh. Taruh 2 kubus di atas meja, buat agar bayi dapat memungut dan memegang kubus pada masing-masing tangannya. Dapatkah ia melakukannya?', 'Gerak halus.', NULL, NULL, NULL),
(23, 3, 'Bayi dipangku orang tua atau pengasuh. Tarik perhatian bayi dengan memperlihatkan gulungan wool merah, kemudian jatuhkan ke lantai. Apakah bayi mencoba mencari benda tersebut, misalnya mencari di bawah meja atau di belakang kursi?', 'Gerak halus.', NULL, NULL, NULL),
(24, 3, 'Bayi dipangku orang tua atau pengasuh. Letakkan suatu mainan yang diinginkan bayi di luar jangkauannya, apakah ia mencoba mendapatkan mainan dengan mengulurkan lengan atau badannya?', 'Sosialisasi dan kemandirian.', NULL, NULL, NULL),
(25, 3, 'Tanyakan kepada orang tua atau pengasuh, apakah bayi menengok ke belakang seperti mendengar kedatangan seseorang pada saat bayi sedang bermain sendiri dan seseorang diam-diam datang berdiri di belakangnya? Suara keras tidak ikut dihitung. Jawab Ya hanya jika melihat reaksinya terhadap suara yang perlahan atau bisikan.', 'Bicara dan bahasa.', NULL, NULL, NULL),
(26, 3, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat mengatakan 2 suku kata yang sama, misalnya: “Ma-ma”, “Da-da” atau “Pa-pa”? Jawab Ya bila ia dapat mengeluarkan salah 1 suara tersebut.', 'Bicara dan bahasa.', NULL, NULL, NULL),
(27, 3, 'Tanyakan kepada orang tua atau pengasuh, apakah bayi dapat makan kue kering sendiri?', 'Sosialisasi dan kemandirian.', NULL, NULL, NULL),
(28, 3, 'Tanyakan kepada orang tua atau pengasuh apakah pernah melihat bayi memindahkan mainan atau kue kering dari satu tangan ke tangan yang lain? Benda benda panjang seperti sendok atau kerincingan bertangkai tidak ikut dinilai.', 'Gerak halus.', NULL, NULL, NULL),
(29, 3, 'Tanpa disangga oleh bantal, kursi atau dinding, dapatkah bayi duduk sendiri selama 60 detik?', 'Gerak kasar.', NULL, NULL, NULL),
(30, 3, 'Jika Anda mengangkat bayi melalui ketiaknya ke posisi berdiri, dapatkah ia menyangga sebagian berat badan dengan kedua kakinya? Jawab Ya bila ia mencoba berdiri dan sebagian berat badan tertumpu pada kedua kakinya.', 'Gerak kasar.', NULL, NULL, NULL),
(31, 4, 'Bayi dipangku orang tua atau pengasuh. Letakkan pensil di telapak tangan anak. Coba ambil pensil tersebut dengan perlahan-lahan. Apakah anak menggenggam pensil dengan erat dan Anda merasa kesulitan mendapatkan pensil itu kembali?', 'Gerak halus.', NULL, NULL, NULL),
(32, 4, 'Bayi dipangku orang tua atau pengasuh. Letakkan kismis di atas meja. Dapatkah anak memungut dengan tangannya benda benda kecil seperti kismis, kacang kacangan, potongan biskuit dengan gerakan miring atau menggerapai seperti gambar?', 'Gerak halus.', NULL, NULL, NULL),
(33, 4, 'Bayi dipangku orang tua atau pengasuh. Berikan 2 kubus kepada bayi. Tanpa bantuan, apakah anak dapat mempertemukan 2 kubus kecil yang ia pegang?', 'Gerak halus.', NULL, NULL, NULL),
(34, 4, 'Sebut 2 s/d 3 kata yang dapat ditiru oleh anak (tidak perlu kata kata yang lengkap). Apakah ia mencoba meniru kata-kata tadi?', 'Bicara dan bahasa.', NULL, NULL, NULL),
(35, 4, 'Tanyakan kepada ibu atau pengasuh, apakah anak dapat mengangkat badannya ke posisi berdiri tanpa bantuan?', 'Gerak kasar.', NULL, NULL, NULL),
(36, 4, 'Tanyakan kepada ibu atau pengasuh, apakah anak dapat duduk sendiri tanpa bantuan dari posisi tidur atau tengkurap?', 'Gerak kasar.', NULL, NULL, NULL),
(37, 4, 'Tanyakan kepada ibu atau pengasuh, apakah anak dapat memahami makna kata \"jangan\"?', 'Bicara dan bahasa.', NULL, NULL, NULL),
(38, 4, 'Tanyakan kepada ibu atau pengasuh, apakah anak akan mencari atau terlihat mengharapkan muncul kembali jika ibu atau pengasuh bersembunyi di belakang sesuatu atau di pojok, kemudian muncul dan menghilang secara berulang-ulang di hadapan anak?', 'Sosialisasi dan kemandirian.', NULL, NULL, NULL),
(39, 4, 'Tanyakan kepada ibu atau pengasuh, apakah anak dapat membedakan ibu atau pengasuh dengan orang yang belum ia kenal? Ia akan menunjukkan sikap malu-malu atau ragu-ragu pada saat permulaan bertemu dengan orang yang belum dikenalnya.', 'Sosialisasi dan kemandirian.', NULL, NULL, NULL),
(40, 4, 'Berdirikan anak. Apakah anak dapat berdiri dengan berpegangan pada kursi atau meja selama 30 detik atau lebih?', 'Gerak kasar.', NULL, NULL, NULL),
(41, 5, 'Bayi dipangku orang tua atau pengasuh. Berikan 2 kubus kepada anak. Tanpa bantuan, apakah anak dapat mempertemukan 2 kubus kecil yang ia pegang?', 'Gerak halus.', NULL, NULL, NULL),
(42, 5, 'Bayi dipangku orang tua atau pengasuh. Berikan sebuah kubus dan cangkir. Apakah anak dapat memasukkan 1 kubus ke dalam cangkir?', 'Gerak halus.', NULL, NULL, NULL),
(43, 5, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat berjalan dengan berpegangan?', 'Gerak kasar.', NULL, NULL, NULL),
(44, 5, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat mengatakan \"papa\" ketika ia memanggil atau melihat ayahnya, atau mengatakan \"mama\" jika memanggil atau melihat ibunya? Jawab \"Ya\" bila anak mengatakan salah satu di antaranya.', 'Bicara dan bahasa.', NULL, NULL, NULL),
(45, 5, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat mengucapkan 1 kata yang bermakna selain \"mama\", \"papa\", atau nama panggilan orang?', 'Bicara dan bahasa.', NULL, NULL, NULL),
(46, 5, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat bertepuk tangan atau melambai-lambai tanpa bantuan? Jawab \"Tidak\" bila ia membutuhkan bantuan.', 'Sosialisasi dan kemandirian.', NULL, NULL, NULL),
(47, 5, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat menunjukkan apa yang diinginkannya tanpa menangis atau merengek? Jawab \"Ya\" bila ia menunjuk, menarik atau mengeluarkan suara yang menyenangkan.', 'Sosialisasi dan kemandirian.', NULL, NULL, NULL),
(48, 5, 'Coba berdirikan anak. Apakah anak dapat berdiri sendiri tanpa berpegangan selama 30 detik atau lebih?', 'Gerak kasar.', NULL, NULL, NULL),
(49, 5, 'Letakkan kubus di lantai, tanpa berpegangan atau menyentuh lantai, apakah anak dapat membungkuk untuk memungut kubus di lantai dan kemudian berdiri kembali?', 'Gerak kasar.', NULL, NULL, NULL),
(50, 5, 'Apakah anak dapat berjalan di sepanjang ruangan tanpa jatuh atau terhuyung-huyung?', 'Gerak kasar.', NULL, NULL, NULL),
(51, 6, 'Bayi dipangku orang tua atau pengasuh. Berikan anak sebuah pensil dan kertas. Apakah anak dapat mencoret-coret kertas tanpa bantuan atau petunjuk?', 'Gerak halus.', NULL, NULL, NULL),
(52, 6, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat menyebutkan sedikitnya 3 kata yang bermakna?', 'Bicara dan bahasa.', NULL, NULL, NULL),
(53, 6, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat menunjukkan apa yang diinginkannya tanpa menangis atau merengek?', 'Sosialisasi dan kemandirian.', NULL, NULL, NULL),
(54, 6, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat minum dari cangkir atau gelas sendiri tanpa banyak yang tumpah?', 'Sosialisasi dan kemandirian.', NULL, NULL, NULL),
(55, 6, 'Tanyakan kepada orang tua atau pengasuh, apakah anak suka meniru bila ibu atau pengasuh sedang melakukan pekerjaan rumah tangga (merapikan mainan, menyapu, dll)?', 'Sosialisasi dan kemandirian.', NULL, NULL, NULL),
(56, 6, 'Gelindingkan bola tenis ke arah anak. Apakah anak dapat menggelindingkan atau melempar bola tersebut kembali kepada Anda?', 'Gerak halus.', NULL, NULL, NULL),
(57, 6, 'Letakkan kubus di lantai, tanpa berpegangan atau menyentuh lantai, apakah anak dapat membungkuk untuk memungut kubus di lantai dan kemudian berdiri kembali?', 'Gerak kasar.', NULL, NULL, NULL),
(58, 6, 'Minta anak untuk berjalan sepanjang ruangan. Dapatkah ia berjalan tanpa terhuyung-huyung atau terjatuh?', 'Gerak kasar.', NULL, NULL, NULL),
(59, 6, 'Dapatkah anak berjalan mundur minimal 5 langkah tanpa kehilangan keseimbangan?', 'Gerak kasar.', NULL, NULL, NULL),
(60, 6, 'Berikan anak perintah berikut ini dengan bantuan telunjuk atau isyarat: \"Ambil kertas\", \"Ambil pensil\", \"Tutup pintu\". Dapatkah anak melakukan perintah tersebut dengan bantuan telunjuk atau isyarat?', 'Bicara dan bahasa.', NULL, NULL, NULL),
(61, 7, 'Bayi dipangku orang tua atau pengasuh. Berikan anak sebuah pensil dan kertas. Apakah anak dapat mencoret-coret kertas tanpa bantuan atau petunjuk?', 'Gerak halus', NULL, NULL, NULL),
(62, 7, 'Bayi dipangku orang tua atau pengasuh. Minta anak untuk menyusun kubus. Apakah anak dapat menyusun 2 kubus?', 'Gerak halus', NULL, NULL, NULL),
(63, 7, 'Bayi dipangku orang tua atau pengasuh. Tunjukkan gambar di bawah pada anak dan minta ia untuk menunjuk gambar sesuai dengan yang Anda sebutkan namanya. Apakah anak dapat menunjuk minimal 1 gambar?', 'Bicara dan bahasa', NULL, NULL, NULL),
(64, 7, 'Bayi dipangku orang tua atau pengasuh. Tanpa bimbingan, petunjuk, atau bantuan Anda, dapatkah anak menunjuk paling sedikit 1 bagian tubuhnya dengan benar (rambut, mata, hidung, mulut, atau bagian badan yang lain)?', 'Bicara dan bahasa', NULL, NULL, NULL),
(65, 7, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat mengucapkan minimal 7 kata yang mempunyai arti (selain kata \"mama\" dan \"papa\")?', 'Bicara dan bahasa', NULL, NULL, NULL),
(66, 7, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat minum dari cangkir atau gelas sendiri tanpa banyak yang tumpah?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(67, 7, 'Tanyakan kepada orang tua atau pengasuh, apakah anak suka meniru bila ibu atau pengasuh sedang melakukan pekerjaan rumah tangga (merapikan mainan, menyapu, dll)?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(68, 7, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat berlari tanpa terjatuh?', 'Gerak kasar', NULL, NULL, NULL),
(69, 7, 'Letakkan kubus di lantai, tanpa berpegangan atau menyentuh lantai, apakah anak dapat membungkuk untuk memungut kubus di lantai dan kemudian berdiri kembali?', 'Gerak kasar', NULL, NULL, NULL),
(70, 7, 'Dapatkah anak berjalan mundur minimal 5 langkah tanpa kehilangan keseimbangan?', 'Gerak kasar', NULL, NULL, NULL),
(71, 8, 'Bayi dipangku orang tua atau pengasuh. Berikan anak sebuah pensil dan kertas. Apakah anak dapat mencoret-coret kertas tanpa bantuan atau petunjuk?', 'Gerak halus', NULL, NULL, NULL),
(72, 8, 'Bayi dipangku orang tua atau pengasuh. Minta anak untuk menyusun kubus. Apakah anak dapat menyusun 4 kubus?', 'Gerak halus', NULL, NULL, NULL),
(73, 8, 'Bayi dipangku orang tua atau pengasuh. Tanpa bimbingan, petunjuk, atau bantuan Anda, dapatkah anak menunjuk paling sedikit 2 bagian tubuhnya dengan benar (rambut, mata, hidung, mulut, atau bagian badan yang lain)?', 'Bicara dan bahasa', NULL, NULL, NULL),
(74, 8, 'Tanyakan kepada orang tua atau pengasuh, apakah anak mampu menggabungkan 2 kata berbeda ketika berbicara, misalnya “Minum susu” atau “Main bola”? “Terima kasih” dan “Da-dah” tidak termasuk.', 'Bicara dan bahasa', NULL, NULL, NULL),
(75, 8, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat melepas pakaiannya seperti baju, rok, atau celana?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(76, 8, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat makan dengan menggunakan sendok sendiri tanpa banyak yang tumpah?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(77, 8, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat berlari tanpa terjatuh?', 'Gerak kasar', NULL, NULL, NULL),
(78, 8, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat berjalan naik tangga sendiri? Jawab \"Ya\" jika ia naik tangga dengan posisi tegak atau berpegangan pada dinding atau pegangan tangga. Jawab \"Tidak\" jika ia naik tangga dengan merangkak, orang tua tidak memperbolehkan anak naik tangga, atau anak harus berpegangan pada seseorang.', 'Gerak kasar', NULL, NULL, NULL),
(79, 8, 'Letakkan bola tenis di depan kaki anak. Apakah ia dapat menendang ke depan tanpa berpegangan pada apapun?', 'Gerak kasar', NULL, NULL, NULL),
(80, 8, 'Ikuti perintah dengan seksama. Jangan memberi isyarat dengan telunjuk atau mata pada saat memberikan perintah berikut ini: “Ambil kertas” “Ambil pensil” “Tutup pintu” Dapatkah anak melakukan perintah tersebut?', 'Bicara dan bahasa', NULL, NULL, NULL),
(81, 9, 'Cerobong asap (dicontohkan)?', 'Gerak halus', NULL, NULL, NULL),
(82, 9, 'Buat garis lurus ke bawah sepanjang sekurang-kurangnya 2,5 cm. Minta anak untuk menggambar garis lain di samping garis ini.', 'Gerak halus', NULL, NULL, NULL),
(83, 9, 'Tanpa bimbingan, petunjuk, atau bantuan Anda, dapatkah anak menyebut 2 gambar di antara gambar-gambar di bawah dengan benar?', 'Bicara dan bahasa', NULL, NULL, NULL),
(84, 9, 'Tanpa bimbingan, petunjuk, atau bantuan Anda, dapatkah anak menunjuk 4 gambar di antara gambar-gambar di atas ini dengan benar ketika Anda sebutkan namanya?', 'Bicara dan bahasa', NULL, NULL, NULL),
(85, 9, 'Tanpa bimbingan, petunjuk, atau bantuan Anda, dapatkah anak menunjuk paling sedikit 6 bagian tubuhnya?', 'Bicara dan bahasa', NULL, NULL, NULL),
(86, 9, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat memahami perintah yang terdiri dari 2 langkah, misalnya “Tolong ambil bola dan berikan kepada Ayah”?', 'Bicara dan bahasa', NULL, NULL, NULL),
(87, 9, 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak berpakaian sendiri seperti baju, rok, celana (topi dan kaos kaki tidak ikut dinilai)?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(88, 9, 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak bermain peran, misalnya menyuapi boneka?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(89, 9, 'Letakkan bola tenis di depan kaki anak. Dapatkah anak menendang ke depan tanpa berpegangan pada apapun? Mendorong bola tidak ikut dinilai.', 'Gerak kasar', NULL, NULL, NULL),
(90, 9, 'Minta anak untuk melompat atau mengangkat kedua kakinya pada saat bersamaan. Dapatkah ia melakukannya?', 'Gerak kasar', NULL, NULL, NULL),
(91, 10, 'Beri kubus di depan anak. Dapatkah anak menyusun 6 buah kubus satu persatu di atas kubus yang lain tanpa menjatuhkan kubus tersebut?', 'Gerak halus', NULL, NULL, NULL),
(92, 10, 'Buat garis lurus ke bawah sepanjang sekurang-kurangnya 2,5 cm. Minta anak untuk menggambar garis lain di samping garis ini.', 'Gerak halus', NULL, NULL, NULL),
(93, 10, 'Tanpa bimbingan, petunjuk, atau bantuan Anda, dapatkah anak menyebut 4 gambar di antara gambar-gambar di bawah ini dengan benar?', 'Bicara dan bahasa', NULL, NULL, NULL),
(94, 10, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat memahami perintah yang terdiri dari 2 langkah, misalnya “Tolong ambil bola dan berikan kepada Ayah”?', 'Bicara dan bahasa', NULL, NULL, NULL),
(95, 10, 'Tanyakan kepada orang tua atau pengasuh, apakah sebagian dari bicara anak dapat dipahami oleh orang asing (yang tidak bertemu setiap hari)?', 'Bicara dan bahasa', NULL, NULL, NULL),
(96, 10, 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak merangkai kalimat sederhana yang terdiri dari minimal 3 kata, misalnya “Aku makan roti” atau “Ibu minta susu”?', 'Bicara dan bahasa', NULL, NULL, NULL),
(97, 10, 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak menggosok gigi dengan bantuan?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(98, 10, 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak mengenakan baju, celana, atau sepatu sendiri (tidak termasuk mengancing dan menali)?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(99, 10, 'Berikan kepada anak sebuah bola tenis. Minta ia untuk melemparkan ke arah dada Anda. Dapatkah anak melempar bola dengan lurus ke arah perut atau dada Anda dari jarak 1,5 meter?', 'Gerak kasar', NULL, NULL, NULL),
(100, 10, 'Letakkan selembar kertas seukuran buku ini di atas lantai. Apakah anak dapat melompati bagian lebar kertas dengan mengangkat kedua kakinya secara bersamaan tanpa didahului lari?', 'Gerak kasar', NULL, NULL, NULL),
(101, 11, 'Buat garis lurus ke bawah sepanjang sekurang-kurangnya 2,5 cm. Minta anak untuk menggambar garis lain di samping garis ini.', 'Gerak halus', NULL, NULL, NULL),
(102, 11, 'Beri kubus di depan anak. Dapatkah anak menyusun 8 buah kubus satu persatu di atas kubus yang lain tanpa menjatuhkannya?', 'Gerak halus', NULL, NULL, NULL),
(103, 11, 'Tunjukkan anak gambar di bawah ini dan tanyakan: “Mana yang dapat terbang?” “Mana yang dapat mengeong?” “Mana yang dapat bicara?” “Mana yang dapat menggonggong?” “Mana yang dapat meringkik?” Apakah anak dapat menunjuk 2 kegiatan yang sesuai?', 'Bicara dan bahasa', NULL, NULL, NULL),
(104, 11, 'Tanyakan kepada anak pertanyaan berikut ini satu persatu: “Apa yang kamu lakukan bila kedinginan?” Jawaban: pakai jaket, pakai selimut “Apa yang kamu lakukan bila kamu kelelahan?” Jawaban: tidur, berbaring, istirahat “Apa yang kamu lakukan bila kamu merasa lapar?” Jawaban: makan “Apa yang kamu lakukan bila kamu merasa haus?” Jawaban: minum Apakah anak dapat menjawab 3 pertanyaan dengan benar tanpa gerakan dan isyarat?', 'Bicara dan bahasa', NULL, NULL, NULL),
(105, 11, 'Minta anak untuk menyebut 1 warna. Dapatkah anak menyebut 1 warna dengan benar?', 'Bicara dan bahasa', NULL, NULL, NULL),
(106, 11, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat mencuci tangannya sendiri dengan baik setelah makan?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(107, 11, 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak menyebut nama teman bermain di luar rumah atau saudara yang tidak tinggal serumah?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(108, 11, 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak mengenakan kaos (T-shirt) tanpa dibantu?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(109, 11, 'Letakkan selembar kertas seukuran buku ini di atas lantai. Apakah anak dapat melompati bagian lebar kertas dengan mengangkat kedua kakinya secara bersamaan tanpa didahului lari?', 'Gerak kasar', NULL, NULL, NULL),
(110, 11, 'Minta anak untuk berdiri 1 kaki tanpa berpegangan. Jika perlu tunjukkan caranya dan beri anak kesempatan sebanyak 3 kali. Dapatkah ia mempertahankan keseimbangan dalam waktu 1 detik atau lebih?', 'Gerak kasar', NULL, NULL, NULL),
(111, 12, 'Berikan contoh membuat jembatan dari 3 buah kubus, yaitu dengan meletakkan 2 kubus dengan sedikit jarak (kira-kira satu jari), lalu letakkan balok ketiga di atas kedua balok sehingga terbentuk seperti jembatan. Minta anak untuk melakukan. Dapatkan anak melakukannya?', 'Gerak halus', NULL, NULL, NULL),
(112, 12, 'Beri pensil dan kertas. Jangan membantu anak dan jangan menyebut lingkaran. Buatlah lingkaran di atas kertas tersebut. Minta anak menirunya. Dapatkah anak menggambar lingkaran?', 'Gerak halus', NULL, NULL, NULL),
(113, 12, 'Tunjukkan anak gambar di bawah ini dan tanyakan: - “Yang mana yang dapat terbang?” - “Yang mana yang dapat menggonggong?” - “Yang mana yang dapat mengeong?” - “Yang mana yang dapat meringkik?” - “Yang mana yang dapat bicara?” Apakah anak dapat menunjuk 2 kegiatan yang sesuai?', 'Bicara dan bahasa', NULL, NULL, NULL),
(114, 12, 'Dapatkah anak menyebut nama lengkapnya tanpa dibantu? Jawab ‘Tidak’ jika ia menyebut sebagian namanya atau ucapannya sulit dimengerti.', 'Bicara dan bahasa', NULL, NULL, NULL),
(115, 12, 'Mengenal konsep angka satu. Letakkan 5 kubus di atas meja dan selembar kertas di samping kubus. Katakan kepada anak “Ambil 1 kubus dan letakkan di atas kertas”. Setelah anak selesai meletakkan, tanyakan “Ada berapa banyak kubus di atas kertas?” Dapatkah anak melakukan dengan hanya mengambil satu kubus dan bisa menyebutkan “Satu”?', 'Bicara dan bahasa', NULL, NULL, NULL),
(116, 12, 'Tanyakan kepada anak pertanyaan di bawah satu persatu: “Apa kegunaan kursi?” Jawaban: untuk duduk “Apa kegunaan cangkir?” Jawaban: untuk minum “Apa kegunaan pensil?” Jawaban: untuk mencoret, menulis, menggambar Dapatkah anak menjawab ketiga pertanyaan terkait kegunaan benda tersebut dengan benar?', 'Bicara dan bahasa', NULL, NULL, NULL),
(117, 12, 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak mengikuti peraturan permainan saat bermain dengan teman-temannya (misal: ular tangga, petak umpet, dll)?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(118, 12, 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak mengenakan kaos (T-shirt) tanpa dibantu?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(119, 12, 'Letakkan selembar kertas seukuran buku ini di atas lantai. Apakah anak dapat melompati bagian lebar kertas dengan mengangkat kedua kakinya secara bersamaan tanpa didahului lari?', 'Gerak kasar', NULL, NULL, NULL),
(120, 12, 'Minta anak untuk berdiri 1 kaki tanpa berpegangan. Jika perlu tunjukkan caranya dan beri anak kesempatan sebanyak 3 kali. Dapatkah ia mempertahankan keseimbangan dalam waktu 2 detik atau lebih?', 'Gerak kasar', NULL, NULL, NULL),
(121, 13, 'Jangan mengoreksi atau membantu anak. Jangan menyebut kata “Lebih panjang”. Perlihatkan gambar kedua garis ini pada anak. Tanyakan: “Mana garis yang lebih panjang?” Minta anak menunjuk garis yang lebih panjang. Setelah anak menunjuk, putar lembar ini dan ulangi pertanyaan tersebut. Apakah anak dapat menunjuk garis yang lebih panjang sebanyak 3 kali dengan benar?', 'Gerak halus', NULL, NULL, NULL),
(122, 13, 'Jangan membantu anak dan jangan memberitahu nama gambar ini. Minta anak untuk menggambar seperti contoh di kertas kosong yang tersedia. Berikan 3 kali kesempatan. Apakah anak dapat menggambar + seperti contoh di bawah?', 'Gerak halus', NULL, NULL, NULL),
(123, 13, 'Berikan anak pensil dan kertas lalu katakan kepada anak “Buatlah gambar orang” (anak laki-laki, anak perempuan, papa, mama, dll). Jangan memberi perintah lebih dari itu. Jangan bertanya atau mengingatkan anak bila ada bagian yang belum tergambar. Dalam memberi nilai, hitunglah berapa bagian tubuh yang tergambar. Untuk bagian tubuh yang berpasangan seperti mata, telinga, lengan, dan kaki, setiap pasang dinilai 1 bagian. Pastikan anak telah menyelesaikan gambar sebelum memberikan penilaian. Dapatkah anak menggambar orang dengan sedikitnya 3 bagian tubuh?', 'Gerak halus', NULL, NULL, NULL),
(124, 13, 'Minta anak untuk menyebutkan 2 warna. Dapatkah anak menyebut 2 warna dengan benar?', 'Bicara dan bahasa', NULL, NULL, NULL),
(125, 13, 'Tanyakan kepada orang tua atau pengasuh, apakah bicara anak mampu dipahami seluruhnya oleh orang lain (yang tidak bertemu setiap hari)?', 'Bicara dan bahasa', NULL, NULL, NULL),
(126, 13, 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak mengikuti peraturan permainan saat bermain dengan teman-temannya (misal: ular tangga, petak umpet, dll)?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(127, 13, 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak menggosok gigi tanpa dibantu?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(128, 13, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat mengancingkan bajunya atau pakaian boneka?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(129, 13, 'Minta anak untuk mengikuti perintah di bawah, jangan memberi isyarat. “Ambil benda (misalnya kertas, balok) dan letakkan di atas meja” “Ambil benda (misalnya kertas, balok) dan letakkan di bawah meja” “Ambil benda (misalnya kertas, balok) dan letakkan di depan ibu” “Ambil benda (misalnya kertas, balok) dan letakkan di samping ibu” “Ambil benda (misalnya kertas, balok) dan letakkan di belakang ibu” Dapatkah anak melakukan sedikitnya 2 perintah (memahami 2 kata depan)?', 'Bicara dan bahasa', NULL, NULL, NULL),
(130, 13, 'Minta anak untuk berdiri 1 kaki tanpa berpegangan. Jika perlu tunjukkan caranya dan beri anak kesempatan sebanyak 3 kali. Dapatkah ia mempertahankan keseimbangan dalam waktu 2 detik atau lebih?', 'Gerak kasar', NULL, NULL, NULL),
(131, 14, 'Perlihatkan gambar kedua garis ini pada anak. Tanyakan: “Mana garis yang lebih panjang?” Minta anak menunjuk garis yang lebih panjang. Setelah anak menunjuk, putar lembar ini dan ulangi pertanyaan tersebut. Apakah anak dapat menunjuk garis yang lebih panjang sebanyak 3 kali dengan benar?', 'Gerak halus', NULL, NULL, NULL),
(132, 14, 'Berikan anak pensil dan kertas lalu katakan kepada anak “Buatlah gambar orang” (anak laki-laki, anak perempuan, papa, mama, dll). Jangan memberi perintah lebih dari itu. Jangan bertanya atau mengingatkan anak bila ada bagian yang belum tergambar. Dalam memberi nilai, hitunglah berapa bagian tubuh yang tergambar. Untuk bagian tubuh yang berpasangan seperti mata, telinga, lengan, dan kaki, setiap pasang dinilai 1 bagian. Pastikan anak telah menyelesaikan gambar sebelum memberikan penilaian. Dapatkah anak menggambar orang dengan sedikitnya 3 bagian tubuh?', 'Gerak halus', NULL, NULL, NULL),
(133, 14, 'Minta anak untuk menyebutkan 4 warna. Dapatkah anak menyebut keempat warna tersebut dengan benar?', 'Bicara dan bahasa', NULL, NULL, NULL),
(134, 14, 'Tanyakan kepada anak pertanyaan berikut ini satu per satu: “Apa yang kamu lakukan saat kedinginan?” Jawaban: pakai jaket, pakai selimut. “Apa yang kamu lakukan saat kelelahan?” Jawaban: tidur, berbaring, istirahat. “Apa yang kamu lakukan saat merasa lapar?” Jawaban: makan. “Apa yang kamu lakukan saat merasa haus?” Jawaban: minum. Dapatkah anak menjawab 3 pertanyaan terkait kata sifat tersebut dengan benar?', 'Bicara dan bahasa', NULL, NULL, NULL),
(135, 14, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat mengancingkan bajunya atau pakaian boneka?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(136, 14, 'Tanyakan kepada orang tua atau pengasuh, apakah anak bereaksi dengan tenang dan tidak rewel (tanpa menangis atau menggelayut) pada saat ditinggal oleh orang tua atau pengasuh?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(137, 14, 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak sepenuhnya berpakaian sendiri tanpa dibantu?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(138, 14, 'Minta anak untuk mengikuti perintah di bawah, jangan memberi isyarat: “Ambil benda (misalnya kertas, balok) dan letakkan di atas meja” “Ambil benda (misalnya kertas, balok) dan letakkan di bawah meja” “Ambil benda (misalnya kertas, balok) dan letakkan di depan ibu” “Ambil benda (misalnya kertas, balok) dan letakkan di samping ibu” “Ambil benda (misalnya kertas, balok) dan letakkan di belakang ibu” Dapatkah anak melakukan sedikitnya 4 perintah (memahami 4 kata depan)?', 'Bicara dan bahasa', NULL, NULL, NULL),
(139, 14, 'Minta anak untuk berdiri 1 kaki tanpa berpegangan. Jika perlu tunjukkan caranya dan beri anak kesempatan sebanyak 3 kali. Dapatkah ia mempertahankan keseimbangan dalam waktu 4 detik atau lebih?', 'Gerak kasar', NULL, NULL, NULL),
(140, 14, 'Minta anak untuk melompat dengan 1 kaki beberapa kali tanpa berpegangan (lompatan dengan 2 kaki tidak ikut dinilai). Dapatkah anak melompat 2-3 kali dengan 1 kaki?', 'Gerak kasar', NULL, NULL, NULL),
(141, 15, 'Jangan membantu anak dan jangan memberitahu nama gambar ini. Minta anak untuk menggambar seperti contoh di kertas kosong yang tersedia. Berikan 3 kali kesempatan. Apakah anak dapat menggambar + seperti contoh di bawah?', 'Gerak halus', NULL, NULL, NULL),
(142, 15, 'Berikan kepada anak pensil dan kertas. Tunjukkan kepada anak contoh gambar di bawah. Anda bisa mencontohkan cara membuat kotak. Dapatkah anak menggambar kotak seperti contoh di bawah?', 'Gerak halus', NULL, NULL, NULL),
(143, 15, 'Berikan anak pensil dan kertas lalu katakan kepada anak “Buatlah gambar orang” (anak laki-laki, anak perempuan, papa, mama, dll). Jangan memberi perintah lebih dari itu. Jangan bertanya atau mengingatkan anak bila ada bagian yang belum tergambar. Dalam memberi nilai, hitunglah berapa bagian tubuh yang tergambar. Untuk bagian tubuh yang berpasangan seperti mata, telinga, lengan dan kaki, setiap pasang dinilai 1 bagian. Pastikan anak telah menyelesaikan gambar sebelum memberikan penilaian. Dapatkah anak menggambar orang dengan sedikitnya 6 bagian tubuh?', 'Gerak halus', NULL, NULL, NULL),
(144, 15, 'Letakkan 8 kubus di atas meja dan selembar kertas di samping kubus. Katakan kepada anak “Ambil 5 kubus dan letakkan di atas kertas”. Setelah anak selesai meletakkan, tanyakan “Ada berapa banyak kubus di atas kertas?” Dapatkah anak melakukannya?', 'Bicara dan bahasa', NULL, NULL, NULL),
(145, 15, 'Pastikan anak mendengar pemeriksa lalu katakan “Saya akan mengucapkan 1 kata dan saya ingin kamu menyebutkan apa arti kata itu”. Setiap kata dapat diberikan sebanyak 3 kali bila perlu. Pemeriksa dapat mengatakan “Beritahu saya sesuatu tentang itu” tetapi jangan tanya apa kegunaannya. Tanyalah setiap kata dalam satu waktu. “Apakah bola itu?”, “Apakah sungai itu?”, “Apakah meja itu?”, “Apakah mobil/motor itu?”, “Apakah rumah itu?”, “Apakah pisang itu?”, “Apakah pintu itu?”, “Apakah atap itu?” Anak dikatakan dapat mengartikan jika anak mengartikan yang sesuai dalam istilah: 1) kegunaan, 2) bentuk, 3) terbuat dari apa, 4) kategori umum. Dapatkah anak mengartikan 5 kata yang sesuai?', 'Bicara dan bahasa', NULL, NULL, NULL),
(146, 15, 'Minta anak untuk melengkapi kalimat di bawah ini, jangan membantu kecuali mengulang pertanyaan: “Jika kuda besar, maka tikus...?” Jawaban: kecil. “Jika api panas, maka es...?” Jawaban: dingin. “Jika ibu seorang wanita, maka ayah seorang...” Jawaban: pria, laki-laki. Apakah anak menjawab ketiga pertanyaan dengan benar?', 'Bicara dan bahasa', NULL, NULL, NULL),
(147, 15, 'Tanyakan kepada orang tua atau pengasuh, apakah anak bereaksi dengan tenang dan tidak rewel (tanpa menangis atau menggelayut) pada saat ditinggal oleh orang tua atau pengasuh?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(148, 15, 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak sepenuhnya berpakaian sendiri tanpa dibantu?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(149, 15, 'Minta anak untuk berdiri 1 kaki tanpa berpegangan. Jika perlu tunjukkan caranya dan beri anak kesempatan sebanyak 3 kali. Dapatkah ia mempertahankan keseimbangan dalam waktu 6 detik atau lebih?', 'Gerak kasar', NULL, NULL, NULL),
(150, 15, 'Apakah anak dapat menangkap bola kecil sebesar bola tenis atau bola kasti hanya dengan menggunakan kedua tangannya?', 'Gerak kasar', NULL, NULL, NULL),
(151, 16, 'Menggambar kotak tanpa dicontohkan. Berikan kepada anak pensil dan kertas. Tunjukkan kepada anak contoh gambar di bawah. Tanpa menyebutkan nama dan tanpa mencontohkan atau menggerakkan jari telunjuk atau pensil untuk menunjukkan bagaimana cara menggambarnya, katakan kepada anak “Gambarlah yang seperti gambar ini”. Lihat contoh di bawah untuk menilai gambar anak. Dapatkah anak menggambar kotak seperti contoh di bawah?', 'Gerak halus', NULL, NULL, NULL),
(152, 16, 'Menggambar orang dengan sedikitnya 6 bagian tubuh. Berikan anak pensil dan kertas lalu katakan kepada anak “Buatlah gambar orang” (anak laki-laki, anak perempuan, papa, mama, dll). Jangan memberi perintah lebih dari itu. Jangan bertanya atau mengingatkan anak bila ada bagian yang belum tergambar. Dalam memberi nilai, hitunglah berapa bagian tubuh yang tergambar. Untuk bagian tubuh yang berpasangan seperti mata, telinga, lengan dan kaki, setiap pasang dinilai 1 bagian. Pastikan anak telah menyelesaikan gambar sebelum memberikan penilaian. Dapatkah anak menggambar orang dengan sedikitnya 6 bagian tubuh?', 'Gerak halus', NULL, NULL, NULL),
(153, 16, 'Mengetahui konsep analogi berlawanan. Minta anak untuk melengkapi kalimat di bawah ini, jangan membantu kecuali mengulang pertanyaan: “Jika kuda besar, maka tikus...?” Jawaban: kecil. “Jika api panas, maka es...?” Jawaban: dingin. “Jika ibu seorang wanita, maka ayah seorang...” Jawaban: pria, laki-laki. “Jika pagi ada matahari, malam ada...” Jawaban: bulan. Apakah anak menjawab ketiga pertanyaan dengan benar?', 'Bicara dan bahasa', NULL, NULL, NULL),
(154, 16, 'Memahami/mengartikan 7 kata. Pastikan anak mendengar pemeriksa lalu katakan “Saya akan mengucapkan 1 kata dan saya ingin kamu menyebutkan apa arti kata itu”. Setiap kata dapat diberikan sebanyak 3 kali bila perlu. Pemeriksa dapat mengatakan “Beritahu saya sesuatu tentang itu” tetapi jangan tanya apa kegunaannya. Tanyalah setiap kata dalam satu waktu. “Apakah bola itu?”, “Apakah sungai itu?”, “Apakah meja itu?”, “Apakah mobil/motor itu?”, “Apakah rumah itu?”, “Apakah pisang itu?”, “Apakah pintu itu?”, “Apakah atap itu?” Anak dikatakan dapat mengartikan jika anak mengartikan yang sesuai dalam istilah: 1) kegunaan, 2) bentuk, 3) terbuat dari apa, 4) kategori umum. Dapatkah anak mengartikan 7 kata yang sesuai?', 'Bicara dan bahasa', NULL, NULL, NULL),
(155, 16, 'Mengetahui komposisi benda. Isi titik−titik di bawah ini dengan jawaban anak. Jangan membantu kecuali mengulangi pertanyaan sampai 3 kali bila anak menanyakannya. \"Sendok dibuat dari apa?\" Jawaban: besi, baja, plastik, kayu. \"Sepatu dibuat dari apa?\" Jawaban: kulit, karet, kain, plastik, kayu. \"Pintu dibuat dari apa?\" Jawaban: kayu, besi, kaca. Apakah anak dapat menjawab ketiga pertanyaan di atas dengan benar?', 'Bicara dan bahasa', NULL, NULL, NULL),
(156, 16, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat menggosok giginya tanpa bantuan?', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(157, 16, 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat menyiapkan dan mengambil makanan tanpa bantuan, termasuk menggunakan mangkok, sendok, menuangkan makanan dan susu ke mangkok tanpa banyak tumpah? Jawab ‘Ya’ jika anak dapat melakukannya, termasuk menuangkan susu dari beberapa jenis kotak atau wadah makanan.', 'Sosialisasi dan kemandirian', NULL, NULL, NULL),
(158, 16, 'Apakah anak dapat menangkap bola kecil sebesar bola tenis atau bola kasti hanya dengan menggunakan kedua tangannya?', 'Gerak kasar', NULL, NULL, NULL),
(159, 16, 'Tunjukkan kepada anak bagaimana cara berjalan di garis lurus dengan menempatkan tumit dari 1 kaki di depan jari kaki lain. Berjalanlah 8 langkah, lalu minta anak untuk melakukannya. Berikan contoh dan kesempatan sebanyak 3 kali bila perlu. Dapatkah anak melakukannya sebanyak 4 langkah atau lebih dengan meletakkan tumit tidak lebih dari 2,5 cm dari jari kaki lain tanpa berpegangan?', 'Gerak kasar', NULL, NULL, NULL),
(160, 16, 'Minta anak untuk berdiri 1 kaki tanpa berpegangan. Jika perlu tunjukkan caranya dan beri anak kesempatan sebanyak 3 kali. Dapatkah ia mempertahankan keseimbangan dalam waktu 11 detik atau lebih?', 'Gerak kasar', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('hKO6MrDQWiN9jOiZg9FH8u5nkPKRVyaRZvObg77C', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMjQ2RGN6TkhuOG0ybjBSRzJ5QXE5N0NIdUpReHlieXFLRDFlNFExbSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkQ245QnB3eFZ0dlZoYThoaDY2NWVCdTJCS2JyWnM2c0hDR3NsbEtpNnhxWXVlOXAxWkNzWEMiO30=', 1739517856),
('jDzHmgbNSfAG00S7moPhNH0Pfr0sVsZn2PQoiXDr', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWnVZN1ZlRElUbjBWZ2hkZG8zVldKa0pxWTBJRkZNY1pqWTZHaHpKeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkQ245QnB3eFZ0dlZoYThoaDY2NWVCdTJCS2JyWnM2c0hDR3NsbEtpNnhxWXVlOXAxWkNzWEMiO30=', 1739474579);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'Test User', 'test@example.com', '2025-02-13 10:59:37', '$2y$12$Cn9BpwxVtvVha8hh665eBu2BKbrZs6sHCGsllKi6xqYue9p1ZCsXC', 'TUEfQd4sFD', '2025-02-13 10:59:38', '2025-02-13 10:59:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_children_id_foreign` (`children_id`),
  ADD KEY `answers_question_id_foreign` (`question_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `childrens`
--
ALTER TABLE `childrens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_category_id_foreign` (`category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `childrens`
--
ALTER TABLE `childrens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_children_id_foreign` FOREIGN KEY (`children_id`) REFERENCES `childrens` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
