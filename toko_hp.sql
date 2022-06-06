-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 12:13 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_hp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ktp` varchar(16) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ktp`, `user_id`, `nama`, `telp`, `alamat`, `updated_at`, `created_at`) VALUES
('4321432143214321', 'admin', 'Admin', '0123456789', 'Admin', '2021-06-30 21:03:32', '2021-06-30 21:03:32');

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id` int(11) NOT NULL,
  `manajer_ktp` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id`, `manajer_ktp`, `nama`, `telp`, `alamat`, `updated_at`, `created_at`) VALUES
(1, '1111111111111111', 'Sumedang', '0812348123', 'Sumedang', NULL, NULL),
(3, '31', 'Solo', '0123456789', 'Solo', NULL, NULL),
(4, '31', 'Solo', '0123456789', 'Solo', NULL, NULL);

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
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `ktp` varchar(16) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `cabang_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`ktp`, `user_id`, `cabang_id`, `nama`, `telp`, `alamat`, `updated_at`, `created_at`) VALUES
('1234123412341234', '4545', 1, 'Will', '085860899677', 'Dusun Nagrak No. 32, Desa Nagrak', NULL, NULL),
('1234123412341266', 'kqewqje', 1, 'wjqekejk', '1293019230', 'jwqjekqwje', '2021-07-05 12:55:36', '2021-07-05 12:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `update_date` date NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `update_date`, `updated_at`, `created_at`) VALUES
(2, 'Will', '2021-07-02', NULL, NULL),
(3, 'A Series', '2021-07-02', NULL, NULL),
(4, 'S Series', '2021-07-02', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manajer`
--

CREATE TABLE `manajer` (
  `ktp` varchar(16) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manajer`
--

INSERT INTO `manajer` (`ktp`, `user_id`, `nama`, `telp`, `alamat`, `updated_at`, `created_at`) VALUES
('1111111111111111', 'admin', 'Admin', '081111111111', 'Solo', NULL, NULL),
('31', 'willy', 'willy', '0868', 'willy', NULL, NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_stok`
--

CREATE TABLE `order_stok` (
  `id` int(11) NOT NULL,
  `karyawan_ktp` varchar(16) NOT NULL,
  `admin_ktp` varchar(16) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `jumlah_item` int(11) NOT NULL,
  `harga_item` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_stok`
--

INSERT INTO `order_stok` (`id`, `karyawan_ktp`, `admin_ktp`, `produk_id`, `tanggal`, `keterangan`, `jumlah_item`, `harga_item`, `updated_at`, `created_at`) VALUES
(3, '1234123412341234', '4321432143214321', 13, '2021-07-05', 'Tes', 10, 2500000, '2021-07-05 14:48:08', '2021-07-05 14:48:08');

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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kategori_id`, `nama`, `stok`, `harga`) VALUES
(13, 3, 'Xiaomi A1991', 76, 28999099),
(14, 3, 'Will', 123, 123);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nama`, `updated_at`, `created_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'manajer', NULL, NULL),
(3, 'karyawan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `init_password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password_changed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `init_password`, `role_id`, `created_at`, `updated_at`, `password_changed`) VALUES
('123123', '21312@adas.com', 'XLxx83Rdes', '', 1, '2021-07-01 17:00:00', '2021-07-01 17:00:00', 0),
('12312@gtjaskd.com', '12312@gtjaskd.com', 'ZBy6UJlBjb', '', 1, '2021-07-04 17:00:00', '2021-07-04 17:00:00', 0),
('4545', 'wqeqw@asdkja.com', 'Yl298S84xA', '', 1, '2021-07-01 17:00:00', '2021-07-01 17:00:00', 0),
('admin', 'admin@admin.com', 'n4ratpDZL9', '', 1, '2021-07-01 17:00:00', '2021-07-01 17:00:00', 0),
('codingwill', '123j12k3@12k3lk12', '64BjrCfcOo', '', 1, '2021-07-04 17:00:00', '2021-07-04 17:00:00', 0),
('kqewqje', 'qwejwk@gmawkjwk', 'JTYhfUqtS1', '', 1, '2021-07-04 17:00:00', '2021-07-04 17:00:00', 0),
('qwe', 'qweqwe@awdqweqe', 'y7mLODCQbe', '', 1, '2021-07-04 17:00:00', '2021-07-04 17:00:00', 0),
('qweqe', 'wqewe@gaskdmk.com', 'ho8E6NYROB', '', 1, '2021-07-04 17:00:00', '2021-07-04 17:00:00', 0),
('qwewqeqewqeqwe', 'will.komara@student.uns.ac.id23', 'Vg2IRHWoHA', '', 1, '2021-07-04 17:00:00', '2021-07-04 17:00:00', 0),
('willy', 'willykomara@gmail.com', 'AUV8x53Z2X', '', 1, '2021-07-01 17:00:00', '2021-07-01 17:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ktp`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manajer_ktp_fk` (`manajer_ktp`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`ktp`),
  ADD KEY `cabang_id_fk` (`cabang_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manajer`
--
ALTER TABLE `manajer`
  ADD PRIMARY KEY (`ktp`),
  ADD KEY `user_id_fk` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_stok`
--
ALTER TABLE `order_stok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_stok_produk_id_fk` (`produk_id`),
  ADD KEY `karyawan_ktp_fk` (`karyawan_ktp`),
  ADD KEY `admin_ktp_fk` (`admin_ktp`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id_fk` (`kategori_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `role_id_fk` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_stok`
--
ALTER TABLE `order_stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cabang`
--
ALTER TABLE `cabang`
  ADD CONSTRAINT `manajer_ktp_fk` FOREIGN KEY (`manajer_ktp`) REFERENCES `manajer` (`ktp`);

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `cabang_id_fk` FOREIGN KEY (`cabang_id`) REFERENCES `cabang` (`id`),
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `manajer`
--
ALTER TABLE `manajer`
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_stok`
--
ALTER TABLE `order_stok`
  ADD CONSTRAINT `admin_ktp_fk` FOREIGN KEY (`admin_ktp`) REFERENCES `admin` (`ktp`),
  ADD CONSTRAINT `karyawan_ktp_fk` FOREIGN KEY (`karyawan_ktp`) REFERENCES `karyawan` (`ktp`),
  ADD CONSTRAINT `order_stok_produk_id_fk` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori_id_fk` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role_id_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
