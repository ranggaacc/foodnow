-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2017 at 03:57 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `customs`
--

CREATE TABLE `customs` (
  `id_custom` int(11) NOT NULL,
  `nama_custom` varchar(32) NOT NULL,
  `harga_custom` int(20) NOT NULL,
  `kategori` text NOT NULL,
  `resto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customs`
--

INSERT INTO `customs` (`id_custom`, `nama_custom`, `harga_custom`, `kategori`, `resto_id`) VALUES
(1, 'nasi blue', 3000, 'nasi', 52),
(2, 'nasi kuning blue', 2000, 'nasi', 52),
(3, 'nasi goreng', 4000, 'nasi', 52),
(4, 'sayur asem', 3000, 'sayur', 52),
(5, 'sayur tumis', 2000, 'sayur', 52),
(6, 'sayur cincang', 3000, 'sayur', 52),
(7, 'ayam goreng', 8000, 'lauk', 52),
(8, 'ayam bakar', 10000, 'lauk', 52),
(9, 'yasmin', 500, 'minum', 52),
(10, 'es teh', 3000, 'minum', 52),
(11, 'apelllll', 4000, 'buah', 52),
(12, 'jeruk', 1500, 'buah', 52);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pakets`
--

CREATE TABLE `pakets` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(32) NOT NULL,
  `harga_paket` int(20) NOT NULL,
  `deskripsi_paket` text NOT NULL,
  `resto_id` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakets`
--

INSERT INTO `pakets` (`id_paket`, `nama_paket`, `harga_paket`, `deskripsi_paket`, `resto_id`, `gambar`) VALUES
(18, '23', 21, '123', 52, 'BARU1.png'),
(19, '3', 2, '123', 52, '1.png'),
(20, '6', 6, '6', 52, '3.png'),
(21, '11231', 1, '1', 52, '1.png'),
(22, '7', 7, '7', 52, 'harimau.jpg'),
(23, '8', 8, '8', 52, 'vanilla-forums.png'),
(24, '00', 0, '00', 52, 'pcd1.PNG'),
(25, '55', 55, '55', 52, 'pesan.png');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restos`
--

CREATE TABLE `restos` (
  `id_resto` int(11) NOT NULL,
  `nama_resto` varchar(32) NOT NULL,
  `alamat_resto` varchar(200) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restos`
--

INSERT INTO `restos` (`id_resto`, `nama_resto`, `alamat_resto`, `no_telp`, `deskripsi`, `gambar`) VALUES
(52, 'blue cornerr', 'deket dramaga ipb agrimart', '02802802', 'Seorang pengusaha Rumah Makan tak hanya ingin mengetahui wawasan kita, tapi juga ingin mengetahui karakter kita sebagai calon tenaga kerja ataupun sebagai mitra kerja, dalam hal ini kita juga harus penuh ke berhati hatian dalam memberikan diplomasi dan argumen yang tepat kemana arah yang dimaksud dari :', 'ayam_goreng_fatmawati_Food4.jpg'),
(53, 'yellow corner', 'deket ATM center depan ipb', '12312312', 'Seorang pengusaha Rumah Makan tak hanya ingin mengetahui wawasan kita, tapi juga ingin mengetahui karakter kita sebagai calon tenaga kerja ataupun sebagai mitra kerja, dalam hal ini kita juga harus penuh ke berhati hatian dalam memberikan diplomasi dan argumen yang tepat kemana arah yang dimaksud dari : qaaaaaaaaaaaaaaaaaaa', 'images (1).jpg'),
(71, '123', '234', '3', '2', 'images (2).jpg'),
(72, '3', '41244', '42', '4', '1.jpg'),
(73, '6', '6', '6', '6', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `namaRule` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `namaRule`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `saves`
--

CREATE TABLE `saves` (
  `id_save` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `nama_user` text NOT NULL,
  `restoran` text NOT NULL,
  `detail` text NOT NULL,
  `amount` int(11) NOT NULL,
  `type` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saves`
--

INSERT INTO `saves` (`id_save`, `user_id`, `nama_user`, `restoran`, `detail`, `amount`, `type`, `created_at`, `updated_at`) VALUES
(14, 5, 'rangga', 'blue corner', 'nasi blue, sayur cincang, ayam bakar, apel, es teh {quantity 22pcs}', 506000, 'custom', '2017-06-10 23:17:16', '2017-06-10 23:17:16'),
(15, 5, 'rangga', 'blue corner', 'paket hemat blue {12pcs}, paket asik blue {12pcs}, paket murah blue {10pcs}', 436000, 'paket', '2017-06-14 21:55:38', '2017-06-14 21:55:38'),
(16, 5, 'rangga', 'blue corner', 'nasi blue, sayur tumis, ayam goreng, yasmin {quantity 22pcs}', 297000, 'custom', '2017-06-15 20:49:09', '2017-06-15 20:49:09'),
(17, 5, 'rangga', 'blue cornerr', 'paket hemat blue {2pcs}', 26000, 'paket', '2017-06-22 14:35:05', '2017-06-22 14:35:05'),
(18, 5, 'rangga', 'blue cornerr', 'nasi blue, sayur tumis, ayam bakar {quantity 22pcs}', 330000, 'custom', '2017-06-22 14:35:19', '2017-06-22 14:35:19'),
(19, 5, 'rangga', 'blue cornerr', ' {quantity 100pcs}', 0, 'custom', '2017-06-22 14:36:28', '2017-06-22 14:36:28'),
(20, 5, 'rangga', 'blue cornerr', 'nasi blue, sayur tumis, ayam bakar, jeruk, es teh {quantity 2pcs}', 39000, 'custom', '2017-07-07 01:58:40', '2017-07-07 01:58:40'),
(21, 5, 'rangga', 'blue cornerr', 'paket hemat blue {3pcs}, paket asik blue {3pcs}, paket murah blue {3pcs}, 2 {3pcs}, 4 {3pcs}, 6 {123pcs}, l {123pcs}, 123 {231pcs}, 5 {23pcs}, 7 {123pcs}', 118561, 'paket', '2017-07-07 02:00:16', '2017-07-07 02:00:16'),
(22, 5, 'rangga', 'blue cornerr', 'paket hemat blue {2pcs}, paket asik blue {22pcs}, paket murah blue {22pcs}', 576000, 'paket', '2017-07-07 02:00:39', '2017-07-07 02:00:39'),
(24, 5, 'rangga', 'blue cornerr', 'paket hemat blue {23pcs}, paket asik blue {123pcs}, paket murah blue {123pcs}, 2 {123pcs}, 4 {123pcs}', 3374738, 'paket', '2017-07-07 02:01:02', '2017-07-07 02:01:02'),
(25, 5, 'rangga', 'blue cornerr', 'nasi blue, sayur tumis {quantity 2pcs}', 10000, 'custom', '2017-07-07 02:08:01', '2017-07-07 02:08:01'),
(26, 5, 'rangga', 'blue cornerr', 'paket hemat blue {2pcs}, paket asik blue {3pcs}', 71000, 'paket', '2017-07-07 02:14:10', '2017-07-07 02:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `roles_id` int(10) UNSIGNED DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `roles_id`, `username`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 2, 'admin', 'admin', 'admin@gmail.com', '$2y$10$P8KLIq1Z3gDXO2JtWGym8.AbroQy9OPwPxoTNq.J83aCSrqlFlu.q', 'xXRBNSbPf2e25VFtIX7KFNeqRxaPx6ZIUacGpkzsageRPZ0bkTvt5OiLjp3f', '2017-05-23 07:24:44', '2017-05-23 07:24:44'),
(3, 1, 'david', 'david', 'david@gmail.com', '$2y$10$KPympi3.Mc5/DgXKdyPatO53WRu8NV8e3CaRj4yRjmQ5oKa794TjO', 'bgzTrEUIl7cXYZF2jRmwyZaJoi3BwO4vDiBzYrNtcECvs6ZCqfCRQk4ZYlQW', '2017-06-05 01:06:23', '2017-06-10 22:42:17'),
(5, 1, 'rangga', 'rangga', 'rangga@gmail.com', '$2y$10$7A/WhpFiK9sVkFF.NUNLjOjibEBGN.jbwAWdq1Rarwi74it4ed72.', 'JtQspzFiH6fYp0cv12Ay8rsvd1Fztysepd2eEwQ9K3cGpUJ4gyXXhnfPaHG2', '2017-06-10 22:42:38', '2017-06-10 22:42:38'),
(6, 1, 'ranggabaru', 'ranggabaru', 'airlanggamurthi@gmail.com', '$2y$10$S4bCwnzCKFf/Yb64rwiNYejdbMdHbAqnT/MKFPstVJZZHMCaVsxsy', NULL, '2017-06-15 21:16:40', '2017-06-15 21:16:40'),
(7, 1, 'aa', 'aa', 'aaa@gmail.com', '$2y$10$fVympOsA6eRSMfHp24FHOuIAPn.wHVsxk0pPhJCcwD0zvgNSmeBx6', NULL, '2017-06-16 07:23:51', '2017-06-16 07:23:51'),
(8, 1, '123', '123', '123@gmail.com', '$2y$10$OciFzElmFEMk7a9ayn6Xh.VC28RJX.T10rVKSW4pydGYw6ThNkRsG', NULL, '2017-07-03 00:06:23', '2017-07-03 00:06:23'),
(9, 1, 'baru', 'baru', 'baru@gmail.com', '$2y$10$0zHwOuZVti95GF7iy8i/e.9fYo9TeBRgPsewQHS4Ld8lE8gIUuMiu', 'cUguo7LdAiOtj9bcW5Gzoe2kFTWO1xdEuOjnO5sUli7JuOhOVQUrRAhEtgIk', '2017-07-07 02:22:33', '2017-07-07 02:22:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customs`
--
ALTER TABLE `customs`
  ADD PRIMARY KEY (`id_custom`),
  ADD KEY `resto_id` (`resto_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `resto_id` (`resto_id`),
  ADD KEY `resto_id_2` (`resto_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `restos`
--
ALTER TABLE `restos`
  ADD PRIMARY KEY (`id_resto`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saves`
--
ALTER TABLE `saves`
  ADD PRIMARY KEY (`id_save`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_roles_id_foreign` (`roles_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customs`
--
ALTER TABLE `customs`
  MODIFY `id_custom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `restos`
--
ALTER TABLE `restos`
  MODIFY `id_resto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `saves`
--
ALTER TABLE `saves`
  MODIFY `id_save` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customs`
--
ALTER TABLE `customs`
  ADD CONSTRAINT `customs_ibfk_1` FOREIGN KEY (`resto_id`) REFERENCES `restos` (`id_resto`) ON DELETE CASCADE;

--
-- Constraints for table `pakets`
--
ALTER TABLE `pakets`
  ADD CONSTRAINT `pakets_ibfk_1` FOREIGN KEY (`resto_id`) REFERENCES `restos` (`id_resto`) ON DELETE CASCADE;

--
-- Constraints for table `saves`
--
ALTER TABLE `saves`
  ADD CONSTRAINT `saves_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_roles_id_foreign` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
