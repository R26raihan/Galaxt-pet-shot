-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2024 at 11:26 AM
-- Server version: 5.7.39
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peetandgrooming`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `harga_grooming`
--

CREATE TABLE `harga_grooming` (
  `id` int(11) NOT NULL,
  `jenis_hewan` varchar(50) NOT NULL,
  `ukuran_hewan` enum('Kecil','Sedang','Besar') NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `promo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga_grooming`
--

INSERT INTO `harga_grooming` (`id`, `jenis_hewan`, `ukuran_hewan`, `harga`, `promo`, `created_at`, `updated_at`) VALUES
(3, 'Kucing', 'Kecil', '20000.00', '10%', '2024-11-23 01:22:06', '2024-11-23 01:22:06'),
(5, 'Kucing', 'Kecil', '100000.00', '10%', '2024-11-26 19:17:43', '2024-11-26 19:17:43'),
(6, 'gajah', 'Kecil', '100000.00', '10%', '2024-11-26 19:19:38', '2024-11-26 19:19:38');

-- --------------------------------------------------------

--
-- Table structure for table `harga_penitipan`
--

CREATE TABLE `harga_penitipan` (
  `id` int(11) NOT NULL,
  `jenis_hewan` varchar(50) NOT NULL,
  `harian` decimal(10,2) DEFAULT NULL,
  `mingguan` decimal(10,2) DEFAULT NULL,
  `bulanan` decimal(10,2) DEFAULT NULL,
  `paketan` decimal(10,2) DEFAULT NULL,
  `promo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga_penitipan`
--

INSERT INTO `harga_penitipan` (`id`, `jenis_hewan`, `harian`, `mingguan`, `bulanan`, `paketan`, `promo`, `created_at`, `updated_at`) VALUES
(2, 'jkebio4rhig4', '12000.00', '12000.00', '12000.00', '12000.00', '20%', '2024-11-23 01:37:26', '2024-11-26 10:25:20'),
(5, 'Kucing', '999.00', '999.00', '999.00', '999.00', '50%', '2024-11-23 03:20:18', '2024-11-23 03:20:18'),
(7, 'Anjing', '11111.00', '11111.00', '1111.00', '1111.00', '10%', '2024-11-23 05:00:47', '2024-11-23 05:00:47'),
(8, 'Kucing', '33434.00', '43434.00', '434.00', '4343.00', '10%', '2024-11-26 10:25:41', '2024-11-26 23:29:13'),
(9, 'Anjing', '12321.00', '121.00', '321321.00', '3123213.00', '1000%', '2024-11-26 23:28:54', '2024-11-26 23:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_layanan_grooming`
--

CREATE TABLE `jenis_layanan_grooming` (
  `id` int(11) NOT NULL,
  `nama_layanan` varchar(100) NOT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_layanan_grooming`
--

INSERT INTO `jenis_layanan_grooming` (`id`, `nama_layanan`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'mandiin hewan', 'Layanan mandi untuk membersihkan dan menyegarkan hewan peliharaan.', '2024-11-26 15:56:55', '2024-11-26 21:10:57'),
(8, 'Grooming', 'asik', '2024-11-27 04:12:36', '2024-11-27 04:12:36');

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
(4, '0001_01_01_000000_create_users_table', 1),
(5, '0001_01_01_000001_create_cache_table', 1),
(6, '0001_01_01_000002_create_jobs_table', 1),
(8, '2024_11_22_033146_create_pelanggan_table', 2),
(9, '2024_11_22_033146_create_Reservasi_Penitipan', 3),
(10, '2024_11_22_033146_create_Reservasi_Grooming', 4);

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
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `no_telp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `jenis_hewan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `no_telp`, `alamat`, `jenis_hewan`) VALUES
(1, 'salma', 'salama79@gmail.com', NULL, '$2y$12$NLTq0FY624uumFPhDWYPUOStsdMxKkV2IgLvap6.TauvPKYOtIrme', NULL, '2024-11-21 21:10:01', '2024-11-21 21:10:01', '089630241464', 'Jalan Meruya Selatan No.1, Joglo, Kembangan, RT.4/RW.1, Meruya Selatan, RT.4/RW.1, Meruya Sel., Kembangan', 'Kucing'),
(2, 'ANDYA RAIHAN SETIAWAN', 'raihansetiawan203@gmail.com', NULL, '$2y$12$TrDreCqt9fiu6b0xLjqNXu1So8ywyJsX4LpKPqC1WxTS8Kqb2G7Ou', NULL, '2024-11-21 21:36:08', '2024-11-21 21:36:08', '089630241464', 'Jalan Meruya Selatan No.1, Joglo, Kembangan, RT.4/RW.1, Meruya Selatan, RT.4/RW.1, Meruya Sel., Kembangan', 'Kucing'),
(3, 'Testing', 'testing123@gmail.com', NULL, '$2y$12$U7iLf.s27c440pYwUpV4T.6hfxKLP6z0WX7FDqvymeNBAw4ITUj9q', NULL, '2024-11-22 03:19:36', '2024-11-22 03:19:36', '089630241464', 'Jalan Meruya Selatan No.1, Joglo, Kembangan, RT.4/RW.1, Meruya Selatan, RT.4/RW.1, Meruya Sel., Kembangan', 'Anjing'),
(4, 'testing3', 'testing321@gmail.com', NULL, '$2y$12$shMJmcqBUTdG/ozORt4qeOJxXfdNDcgW5442W5.fGrez.eXDsLVYK', NULL, '2024-11-22 04:17:47', '2024-11-22 04:17:47', '089630241464', 'Jalan Meruya Selatan No.1, Joglo, Kembangan, RT.4/RW.1, Meruya Selatan, RT.4/RW.1, Meruya Sel., Kembangan', 'Anjing'),
(5, 'ANDYA RAIHAN SETIAWAN', '41522010157@student.mercubuana.ac.id', NULL, '$2y$12$.h/rv3dRRkcgGal051UVE.NsgQaZ2mYIH7nThyOUv.9amrZBintw.', NULL, '2024-11-27 02:46:13', '2024-11-27 02:46:13', '089630241464', 'Jalan Meruya Selatan No.1, Joglo, Kembangan, RT.4/RW.1, Meruya Selatan, RT.4/RW.1, Meruya Sel., Kembangan', 'Kucing');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi_grooming`
--

CREATE TABLE `reservasi_grooming` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_wa` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_hewan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_hewan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_layanan` date NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservasi_grooming`
--

INSERT INTO `reservasi_grooming` (`id`, `nama`, `alamat`, `no_wa`, `jenis_hewan`, `nama_hewan`, `jenis_layanan`, `tanggal_layanan`, `harga`, `created_at`, `updated_at`) VALUES
(30, 'ANDYA RAIHAN SETIAWAN', 'Jalan Meruya Selatan No.1, Joglo, Kembangan, RT.4/RW.1, Meruya Selatan, RT.4/RW.1, Meruya Sel., Kembangan', '09977007070', 'Hewan Lainnya', 'Anton', 'mandiin hewan', '2024-11-29', '100000.00', '2024-11-27 03:25:53', '2024-11-27 03:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi_penitipan`
--

CREATE TABLE `reservasi_penitipan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pelanggan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_wa` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_hewan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_hewan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lama_hari` int(11) NOT NULL,
  `paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservasi_penitipan`
--

INSERT INTO `reservasi_penitipan` (`id`, `pelanggan_id`, `alamat`, `no_wa`, `jenis_hewan`, `nama_hewan`, `lama_hari`, `paket`, `created_at`, `updated_at`, `nama`) VALUES
(11, NULL, 'Jalan Meruya Selatan No.1, Joglo, Kembangan, RT.4/RW.1, Meruya Selatan, RT.4/RW.1, Meruya Sel., Kembangan', '09977007070', 'Burung', 'niko', 1, 'Harian', '2024-11-23 04:47:56', '2024-11-23 04:47:56', 'hani'),
(12, NULL, 'Jalan Meruya Selatan No.1, Joglo, Kembangan, RT.4/RW.1, Meruya Selatan, RT.4/RW.1, Meruya Sel., Kembangan', '09977007070', 'Burung', 'niko', 1, 'Harian', '2024-11-23 04:49:26', '2024-11-23 04:49:26', 'hani'),
(13, NULL, 'Jalan Meruya Selatan No.1, Joglo, Kembangan, RT.4/RW.1, Meruya Selatan, RT.4/RW.1, Meruya Sel., Kembangan', '09977007070', 'Burung', 'niko', 1, 'Harian', '2024-11-23 04:50:50', '2024-11-23 04:50:50', 'hani'),
(15, NULL, 'Jalan Meruya Selatan No.1, Joglo, Kembangan, RT.4/RW.1, Meruya Selatan, RT.4/RW.1, Meruya Sel., Kembangan', '09977007070', 'Burung', 'niko', 1, 'Harian', '2024-11-23 04:51:58', '2024-11-23 04:51:58', 'hani'),
(17, NULL, 'Jalan Meruya Selatan No.1, Joglo, Kembangan, RT.4/RW.1, Meruya Selatan, RT.4/RW.1, Meruya Sel., Kembangan', '09977007070', 'Burung', 'niko', 1, 'Harian', '2024-11-23 04:55:22', '2024-11-23 04:55:22', 'hani'),
(18, NULL, 'Jalan Meruya Selatan No.1, Joglo, Kembangan, RT.4/RW.1, Meruya Selatan, RT.4/RW.1, Meruya Sel., Kembangan', '09977007070', 'Burung', 'niko', 1, 'Harian', '2024-11-23 04:55:26', '2024-11-23 04:55:26', 'hani'),
(19, NULL, 'Jalan Meruya Selatan No.1, Joglo, Kembangan, RT.4/RW.1, Meruya Selatan, RT.4/RW.1, Meruya Sel., Kembangan', '09977007070', 'Burung', 'niko', 1, 'Harian', '2024-11-23 04:55:32', '2024-11-23 04:55:32', 'hani'),
(22, NULL, 'Jalan Meruya Selatan No.1, Joglo, Kembangan, RT.4/RW.1, Meruya Selatan, RT.4/RW.1, Meruya Sel., Kembangan', '09977007070', 'Burung', 'niko', 1, 'Mingguan', '2024-11-23 05:00:12', '2024-11-23 05:00:12', 'ANDYA RAIHAN SETIAWAN');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Cwj5tRzIISpK9E3KSqEVqljXXPCkVcmfjrc7NqEG', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoic2FlbmlhaGNMZHBxaTFGamFBc0xwQjRRbWd2UjhlZUhUQzVGV1BLMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyOToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3NlcnZpY2UiO319', 1732273612),
('UycGiY3FaQbO37GPqRAFKD84dK9L51mTfDx8FBmg', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaU92R1QyeFdKWE9UNjZUQ0tGc2hub0JjRUVQZGpLWkExYTlpNmpJRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZXJ2aWNlIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1732273685);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `harga_grooming`
--
ALTER TABLE `harga_grooming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga_penitipan`
--
ALTER TABLE `harga_penitipan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_layanan_grooming`
--
ALTER TABLE `jenis_layanan_grooming`
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
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pelanggan_email_unique` (`email`);

--
-- Indexes for table `reservasi_grooming`
--
ALTER TABLE `reservasi_grooming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi_penitipan`
--
ALTER TABLE `reservasi_penitipan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservasi_penitipan_pelanggan_id_foreign` (`pelanggan_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harga_grooming`
--
ALTER TABLE `harga_grooming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `harga_penitipan`
--
ALTER TABLE `harga_penitipan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jenis_layanan_grooming`
--
ALTER TABLE `jenis_layanan_grooming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservasi_grooming`
--
ALTER TABLE `reservasi_grooming`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reservasi_penitipan`
--
ALTER TABLE `reservasi_penitipan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservasi_penitipan`
--
ALTER TABLE `reservasi_penitipan`
  ADD CONSTRAINT `reservasi_penitipan_pelanggan_id_foreign` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
