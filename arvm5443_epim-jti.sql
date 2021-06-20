/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `expos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` int(11) NOT NULL,
  `nama_ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim_ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` int(11) NOT NULL,
  `no_wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pendamping` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` int(11) NOT NULL,
  `no_wa_pendamping` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kartu_pelajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_peserta1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_peserta2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_peserta3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `tcp_it2s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perguruan_tinggi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_proposal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_anggota1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_anggota2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `tcp_its` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perguruan_tinggi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_proposal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_anggota1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_anggota2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_biodata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bmc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;







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
(7, '2021_06_17_180904_create_tcp_it2s_table', 1);







INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `event`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Stacy O\'Conner', 'xgottlieb@example.com', '2021-06-20 02:49:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6JzovyeEek', 'lomba', 'user', '2021-06-20 02:49:04', '2021-06-20 02:49:04');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `event`, `role`, `created_at`, `updated_at`) VALUES
(2, 'Jaren Hoeger', 'lowell19@example.com', '2021-06-20 02:49:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uePcZiykGT', 'lomba', 'user', '2021-06-20 02:49:04', '2021-06-20 02:49:04');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `event`, `role`, `created_at`, `updated_at`) VALUES
(3, 'Leonora Hills', 'margarete.parker@example.net', '2021-06-20 02:49:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YKkVj6FcBx', 'lomba', 'user', '2021-06-20 02:49:04', '2021-06-20 02:49:04');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `event`, `role`, `created_at`, `updated_at`) VALUES
(4, 'Bernadette Simonis', 'timmy22@example.org', '2021-06-20 02:49:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CdZoZ3CzSt', 'lomba', 'user', '2021-06-20 02:49:04', '2021-06-20 02:49:04'),
(5, 'Madyson Goyette', 'gottlieb.caden@example.org', '2021-06-20 02:49:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Hmq2RglGFp', 'lomba', 'user', '2021-06-20 02:49:04', '2021-06-20 02:49:04'),
(6, 'Dr. Rosario Mayer', 'blick.edgardo@example.org', '2021-06-20 02:49:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yjTpNrc31W', 'lomba', 'user', '2021-06-20 02:49:04', '2021-06-20 02:49:04'),
(7, 'Sam Ryan', 'uhettinger@example.org', '2021-06-20 02:49:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lVU4LgPNL8', 'lomba', 'user', '2021-06-20 02:49:04', '2021-06-20 02:49:04'),
(8, 'Tristin Daugherty', 'torp.jesus@example.org', '2021-06-20 02:49:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'G7YBoMrvxU', 'lomba', 'user', '2021-06-20 02:49:04', '2021-06-20 02:49:04'),
(9, 'Ms. Gia Koepp PhD', 'jhintz@example.com', '2021-06-20 02:49:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NaICP5bQB3', 'lomba', 'user', '2021-06-20 02:49:04', '2021-06-20 02:49:04'),
(10, 'Jerry Kuhlman', 'quentin27@example.net', '2021-06-20 02:49:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vPfyNnbnqa', 'lomba', 'user', '2021-06-20 02:49:04', '2021-06-20 02:49:04'),
(11, 'admin', 'admin@admin.com', NULL, '$2y$10$eeRDnkayJglT9PUrZaLvQ.B4SYu6uAUUfoGXvynri7EDPe0YHKW3a', NULL, 'admin', 'admin', '2021-06-20 03:01:56', '2021-06-20 03:01:56'),
(12, 'Admin2', 'admin2@admin.com', NULL, '$2y$10$t0SDM93.RYMWTCoHqNoxJ.u1f26hU82rn/R/etK3VfrToTMC/WzD.', NULL, 'admin', 'user', '2021-06-20 04:16:29', '2021-06-20 04:16:29'),
(13, 'Lukman Afandi', 'lukmanafandi10@gmail.com', NULL, '$2y$10$Kk7rTG4oFXbk2rViHmsMT.XvM9sC76ce9mnxkt4OEecGdHVyBTgka', NULL, 'admin', 'user', '2021-06-20 04:53:58', '2021-06-20 04:53:58'),
(14, '123123123', '12313@sdafasdf.com', NULL, '$2y$10$cKaijixMy9zp84i0qFkPxOHh8NYyf0s9ux/XkbNUi5qbKgxLEh0yy', NULL, 'admin', 'user', '2021-06-20 04:55:32', '2021-06-20 04:55:32'),
(16, 'admin3', 'admin3@admin.com', NULL, '$2y$10$.78u8qJd2mHEfP3hBIpfoeIbDGVE8sC/gM6ro07QtBL8yXk8ir6Be', NULL, 'admin', 'user', '2021-06-20 06:28:36', '2021-06-20 06:28:36'),
(17, 'adf', 'sadfsadf@dasfasd.com', NULL, '$2y$10$6swYhis9sw8DETLwPa1h7.J9OlwNA7cRALnO50RAihue6gI9BNVaa', NULL, 'admin', 'user', '2021-06-20 06:30:31', '2021-06-20 06:30:31');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;