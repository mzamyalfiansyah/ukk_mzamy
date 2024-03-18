-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2024 at 06:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `status` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_lengkap`, `username`, `password`, `no_telp`, `status`) VALUES
(1, 'Muhammad Zamy Alfiansyah', 'admin', '$2y$10$V7aEDAx58fMx0JOxFu0iAeUlqnXIlIu65ZJAI.wEtqztZKMzYhRgO', '08123456789', 'admin'),
(2, 'alfin ganteng', 'admin2', '$2y$12$xSnvue3hksSVvtto0HR98OM7Z7Uk7Z11N9imueBvKzJ9i4hV0ghdG', '23534535346', 'admin'),
(3, 'alfin dak pucung', 'penguasa_pucung', '$2y$12$r2D7bkMDM4Hfu/2d5ZVcnOzGo87AM8dvNy7KCTn2qBYGg4qEyxm0i', '23436346534', 'admin'),
(4, 'limbad sugiono', 'limbad', '$2y$12$3w6IVv0jBdZIXALjCal67OtEPAxRvS10WywwPh.uQ5/cjkJl5zyhS', '12345673432', 'admin'),
(5, 'm zamy a', 'zamy', '$2y$12$qu7onbBR7h7yBhlv1H4IVeQ4.fAkHiQ4kPsOKSgBF6diV8sUx9ckO', '085r4766769', 'admin'),
(6, 'faudzan lele gacor', 'ojan', '$2y$12$X6QhkjJ3WBqyDYb9QI/GKekl4OlmFsX24s2ja.x5Nduhqs4AxAMWC', '0843689123', 'petugas'),
(7, 'petugas', 'petugas', '$2y$12$jJUpBMbz3NpkXBCo8lb2puimjVVYuxvU0sI6bf5U4nhAhcjqx2KQm', '6785546123', 'petugas');

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
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(11) NOT NULL,
  `penjualan_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `penjualan_id`, `produk_id`, `qty`, `total_harga`) VALUES
(127, 1, 145327, 3, 30000),
(128, 1, 145326, 1, 5000),
(129, 2, 145326, 4, 20000),
(130, 3, 145326, 2, 10000),
(131, 4, 145326, 5, 25000),
(132, 4, 145327, 1, 10000),
(142, 5, 145328, 2, 10000),
(143, 6, 145329, 5, 12500),
(144, 7, 145329, 2, 5000),
(152, 8, 145332, 2, 2000),
(153, 9, 145330, 2, 4000),
(154, 10, 145331, 2, 10000),
(155, 11, 145331, 2, 10000),
(156, 12, 145331, 2, 10000),
(157, 13, 145331, 2, 10000),
(158, 14, 145331, 2, 10000),
(159, 15, 145330, 3, 6000),
(160, 16, 145336, 5, 25000),
(161, 17, 145336, 1, 5000),
(164, 18, 145335, 2, 2000),
(165, 18, 145336, 2, 10000),
(167, 19, 145333, 2, 2000),
(168, 19, 145335, 1, 1000),
(169, 20, 145334, 2, 2000),
(170, 21, 145332, 3, 3000),
(171, 22, 145333, 1, 1000),
(172, 23, 145333, 2, 2000),
(173, 24, 145332, 15, 15000),
(174, 24, 145333, 10, 10000),
(175, 25, 145332, 10, 10000),
(176, 26, 145333, 1, 1000),
(177, 27, 145332, 5, 5000),
(178, 27, 145333, 2, 2000);

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
  `pelanggan_id` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `nama_pelanggan`, `alamat`, `no_telepon`) VALUES
(2547, 'arrafi TOLE', 'BMI banjir', '124235234'),
(2548, 'Muhammad Zamy Alfiansyah', 'Pucung-Kota Baru-Karawang', '0895602856080'),
(2549, 'Luffy Taro', 'Wano kuni', '12345123456789'),
(2550, 'Rafi Ahmad', 'pucung, kotabaru, karawang', '08934634235'),
(2551, 'deri', 'pucung', '09865785657');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `penjualan_id` int(11) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `total_harga` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `status` enum('di proses','selesai') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`penjualan_id`, `tanggal_penjualan`, `total_harga`, `pelanggan_id`, `status`, `created_at`) VALUES
(1, '2024-01-31', 35000, 2548, 'selesai', '2024-01-31 03:37:43'),
(2, '2024-01-31', 20000, 2548, 'selesai', '2024-01-31 04:10:48'),
(3, '2024-01-31', 10000, 2548, 'selesai', '2024-01-31 04:26:50'),
(4, '2024-02-12', 35000, 2547, 'selesai', '2024-02-12 01:51:14'),
(5, '2024-02-12', 10000, 2548, 'selesai', '2024-02-17 00:33:02'),
(6, '2024-02-17', 12500, 2547, 'selesai', '2024-02-17 00:54:30'),
(7, '2024-02-17', 5000, 2547, 'selesai', '2024-02-17 00:58:55'),
(8, '2024-02-22', 2000, 2547, 'selesai', '2024-02-23 07:10:43'),
(9, '2024-02-23', 4000, 2547, 'selesai', '2024-02-23 07:11:39'),
(10, '2024-02-23', 10000, 2548, 'selesai', '2024-02-23 07:15:42'),
(11, '2024-02-23', 10000, 2548, 'selesai', '2024-02-23 07:19:47'),
(12, '2024-02-23', 10000, 2548, 'selesai', '2024-02-23 07:21:20'),
(13, '2024-02-23', 10000, 2547, 'selesai', '2024-02-23 07:21:49'),
(14, '2024-02-23', 10000, 2550, 'selesai', '2024-02-23 07:23:49'),
(15, '2024-02-23', 6000, 2550, 'selesai', '2024-02-23 07:24:51'),
(16, '2024-02-24', 25000, 2548, 'selesai', '2024-02-24 07:07:21'),
(17, '2024-02-24', 5000, 2548, 'selesai', '2024-02-24 07:07:39'),
(18, '2024-02-24', 12000, 2548, 'selesai', '2024-02-24 08:29:44'),
(19, '2024-02-24', 3000, 2550, 'selesai', '2024-03-04 06:27:54'),
(20, '2024-03-04', 2000, 2551, 'selesai', '2024-03-04 06:29:45'),
(21, '2024-03-04', 3000, 2550, 'selesai', '2024-03-04 06:42:05'),
(22, '2024-03-04', 1000, 2550, 'selesai', '2024-03-04 06:52:04'),
(23, '2024-03-04', 2000, 2547, 'selesai', '2024-03-04 07:08:43'),
(24, '2024-03-04', 25000, 2548, 'selesai', '2024-03-04 07:37:43'),
(25, '2024-03-04', 10000, 2551, 'selesai', '2024-03-04 07:54:50'),
(26, '2024-03-09', 1000, 2551, 'selesai', '2024-03-09 05:00:49'),
(27, '2024-03-16', 7000, 2550, 'selesai', '2024-03-16 07:25:31');

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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `status` enum('tersedia','dihapus') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produk_id`, `nama_produk`, `harga`, `stok`, `status`) VALUES
(145326, 'curos', 5000, 11, 'dihapus'),
(145327, 'Batagor', 10000, 13, 'dihapus'),
(145328, 'Air mineral berqualitas', 5000, 24, 'dihapus'),
(145329, 'singkong', 2500, 8, 'dihapus'),
(145330, 'Teh Gelas - asli teh alami', 2000, 43, 'dihapus'),
(145331, 'Teh Pucuk - Minuman segar penghilang dahaga', 5000, 75, 'dihapus'),
(145332, 'Sukro - Cemilan nikmat bareng keluarga', 1000, 85, 'tersedia'),
(145333, 'Kacang Dua Kelinci - Kacang tanah asli', 1000, 18, 'tersedia'),
(145334, 'Power F - Dengan Ginseng Berkualitas', 1000, 38, 'tersedia'),
(145335, 'Ale ale Jeruk', 1000, 36, 'tersedia'),
(145336, 'jus alpukat', 5000, 3, 'tersedia'),
(145337, 'tea jus manis', 2000, 5, 'tersedia'),
(145338, 'Iphone 20 pro max', 20500000, 23, 'tersedia');

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`),
  ADD KEY `produk_id` (`produk_id`),
  ADD KEY `penjualan_id` (`penjualan_id`);

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
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`penjualan_id`),
  ADD KEY `pelanggan_id` (`pelanggan_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2552;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `penjualan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145339;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`produk_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventory_ibfk_2` FOREIGN KEY (`penjualan_id`) REFERENCES `penjualan` (`penjualan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`pelanggan_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
