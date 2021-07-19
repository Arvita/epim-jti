/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `expo_its` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `nama_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manfaat_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_aplikasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_produk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `twibbon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `lomba_its` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` int(11) NOT NULL,
  `no_wa_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pendamping` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_wa_pendamping` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kartu_pelajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_pernyataan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twibbon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) unsigned NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `tcp_its` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perguruan_tinggi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_proposal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_anggota1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_anggota2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proposal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biodata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twibbon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `temp_files` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fieldname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `temporary_files` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `folder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;







INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\TcpIt', 30, '537652c5-1bde-4a96-8d8f-8c2026fe33b4', 'proposal', 'Praktikum4_E31200844_LukmanAfandi', 'Praktikum4_E31200844_LukmanAfandi.pdf', 'application/pdf', 'public', 'public', 399679, '[]', '[]', '[]', '[]', 1, '2021-06-28 01:35:22', '2021-06-28 01:35:22');


INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2021_06_17_095244_create_expos_table', 1),
(5, '2021_06_17_173242_create_tcp_its_table', 1),
(6, '2021_06_17_173617_create_lomba_its_table', 1),
(10, '2021_06_24_013533_add_status_column_at_tcp_its_table', 2),
(11, '2021_06_24_013545_add_status_column_at_lomba_its_table', 2),
(12, '2021_06_25_234548_add_twibbon_field_at_lomba_its_and_tcp_its_table', 2),
(13, '2021_06_27_235021_create_media_table', 3),
(14, '2021_06_28_010025_create_temporary_files_table', 4),
(15, '2021_06_28_133958_create_temp_files_table', 5),
(20, '2021_07_17_064825_create_expo_its_table', 6);





INSERT INTO `temp_files` (`id`, `fieldname`, `filename`, `created_at`, `updated_at`) VALUES
(4, 'biodata_t', '1624890047.docx', '2021-06-28 14:20:47', '2021-06-28 14:20:47');
INSERT INTO `temp_files` (`id`, `fieldname`, `filename`, `created_at`, `updated_at`) VALUES
(5, 'biodata_t', '1624890662.png', '2021-06-28 14:31:02', '2021-06-28 14:31:02');
INSERT INTO `temp_files` (`id`, `fieldname`, `filename`, `created_at`, `updated_at`) VALUES
(6, 'biodata_t', '1624890961.jpg', '2021-06-28 14:36:01', '2021-06-28 14:36:01');

INSERT INTO `temporary_files` (`id`, `folder`, `filename`, `created_at`, `updated_at`) VALUES
(1, '60d9216d9747b-1624842605', 'Cuplikan layar 2021-04-29 211244.png', '2021-06-28 01:10:05', '2021-06-28 01:10:05');
INSERT INTO `temporary_files` (`id`, `folder`, `filename`, `created_at`, `updated_at`) VALUES
(2, '60d92200ab423-1624842752', 'Lukman Afnadi_0844.pdf', '2021-06-28 01:12:32', '2021-06-28 01:12:32');
INSERT INTO `temporary_files` (`id`, `folder`, `filename`, `created_at`, `updated_at`) VALUES
(3, '60d9255ec5eb8-1624843614', 'E31200880_Muhammad Rudy Darmawan.pdf', '2021-06-28 01:26:54', '2021-06-28 01:26:54');
INSERT INTO `temporary_files` (`id`, `folder`, `filename`, `created_at`, `updated_at`) VALUES
(5, '60d9293fed20c-1624844607', 'Lukman Afnadi_0844.pdf', '2021-06-28 01:43:28', '2021-06-28 01:43:28'),
(6, '60d92a0922cd6-1624844809', 'E31200880_Muhammad Rudy Darmawan.pdf', '2021-06-28 01:46:49', '2021-06-28 01:46:49'),
(7, '60d92a517037a-1624844881', '3l.jpg', '2021-06-28 01:48:01', '2021-06-28 01:48:01'),
(8, '60d92a6fd186c-1624844911', '3l.jpg', '2021-06-28 01:48:31', '2021-06-28 01:48:31');

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `event`, `role`, `created_at`, `updated_at`) VALUES
(11, 'Admin', 'admin@admin.com', NULL, '$2y$10$wF936Ji8D4zRqqOlgTYtkO5IiechPMU6HbmovzGuLHAxy.O7C5Vui', NULL, 'admin', 'admin', '2021-06-22 05:14:44', '2021-07-19 06:15:16');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;