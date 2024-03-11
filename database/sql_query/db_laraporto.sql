-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 05:48 AM
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
-- Database: `db_laraporto`
--

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id` int(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Test1', '11111111111', '2024-03-03 01:06:15', '2024-03-03 01:06:15'),
(6, 'Test3', '<p><b>333333333</b><u>tttttttttttttt</u></p>', '2024-03-03 02:37:26', '2024-03-05 06:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `id_halaman` int(20) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `id_halaman`, `link`) VALUES
(1, 1, 'https://storage.googleapis.com/narasi-production.appspot.com/production/medium/1691999714615/metalhead-bring-me-the-horizon-konser-di-jakarta-10-november-2023-simak-harga-tiketnya-medium.jpeg'),
(2, 1, 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgVFhYYGRgaHBocHBoaGhoaIR4cGhwcGhocHBwcIS4lHB4rIRgaJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHjQhISQ0NDQxNDE0NDQ0NDQ0NDU0NDQ0NDE0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAAABwEBAAAAAAAAAAAAAAAAAQIDBAUGBwj/xAA8EAACAQIEBAQEBAQGAgMBAAABAhEAAwQSITEFQVFhBiJxgRMykaEHscHwQmLR4RQjUnKC8aKyM0OSFv/EABgBAQEBAQEAAAAAAAAAAAAAAAACAQME/8QAIREBAQACAgMAAgMAAAAAAAAAAAECEQMxEiFBEzIiUcH/2gAMAwEAAhEDEQA/AOQxQigKOqYBFACjoUCstBLWY5RvS8PbLMF2nn06mpV+wE2YE9u396jK6XjjsrA4BcrF2y6LEQZLER9tfaifhYUMSy7+Xoy9Z/etQnvMTHeatuFqHOUkgkRuQA+0noCOfImp9unpBwXBr15ittC8CSRtA3NWuLT/AA9oIyL8SfMSmsep3Gm/etF4f4hcsvDWgZOWVDgwNNxIPcRNWXizFWShS8GVjJUMJkGIKsd+kg1Fz96dJxetxzPFFZBywGkjQCNdv31FNZRQx10GFGyyPWYpFkyK7Y9PNlPZZFFFKig1UknLRlKOgaBOWhFKFAigSVpIFLNFFAtAKQQKcC0GWAKACOlAJRLQoElaEUoURFACKIrpR0ZNAXtRlRRRSlFAkr2ostLNIAoFADpQZfSiUUbUBRS4G8UFGk0mZoEMBSaW1FFA0KUKKKXQFR0RNHQTeFWGd8qmCVePUKSPy+1IxGFdVBJBG0gz7fvrSsAzI0hScwKg8hIgmeutO3nIGWRzBAg9NByG+9c8r'),
(3, 1, 'https://asset-a.grid.id/crop/0x0:0x0/750x500/photo/haifoto/original/53382_bring-me-the-horizon.jpg'),
(4, 6, 'https://asset-2.tstatic.net/tribunnewswiki/foto/bank/images/Neilson-Barnard-8-GETTY-IMAGES-AMERIKA-UTARA-Getty-Images-via-AFP.jpg'),
(5, 6, 'https://www.suarasurabaya.net/wp-content/uploads/2023/02/WhatsApp-Image-2023-02-26-at-4.24.48-PM-e1677404020689-840x493.jpeg'),
(6, 6, 'https://asset.kompas.com/crops/1Tcmphph1Gsp4hIHH6DoIXc9o3c=/0x0:708x472/375x240/data/photo/2022/07/08/62c797a258298.jpg');

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
(2, '2024_03_02_080703_table_users_add_column_google_id', 2),
(3, '2024_03_02_144721_user_add_column_avatar', 3),
(4, '2024_03_02_150618_create_halamen_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`, `avatar`) VALUES
(1, 'Radithya Ihza', 'ihzabowo96@gmail.com', NULL, NULL, NULL, '2024-03-02 03:31:05', '2024-03-02 08:00:03', '116411556215815722818', '116411556215815722818.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_halaman` (`id_halaman`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_halaman`) REFERENCES `halaman` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
