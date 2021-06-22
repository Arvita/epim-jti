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
  `user_id` bigint(20) unsigned NOT NULL,
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
  `nip` int(11) NOT NULL,
  `no_wa_pendamping` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kartu_pelajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_pernyataan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `ktm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biodata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




INSERT INTO `lomba_its` (`id`, `user_id`, `email`, `nama_peserta`, `nis`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `usia`, `no_wa_peserta`, `nama_pendamping`, `nip`, `no_wa_pendamping`, `foto_peserta`, `kartu_pelajar`, `surat_pernyataan`, `bukti_pembayaran`, `lampiran_guru`, `created_at`, `updated_at`) VALUES
(1, 12, 'fasdsdasadf@sfasd.com', 'sdfasdfasdfsadfsadf', 'sdfasdfsdafsd', 'afsadfasdfsadfsadfasfsa', '2021-06-10', 'laki-laki', 213, 'asdfsafdsafsafsda', 'dsfsadfd', 213, 'asdsafasdfas', 'lomba/lukmanafandi10@gmail.com/C:\\xampp\\tmp\\phpB9FE.tmp', 'lomba/lukmanafandi10@gmail.com/C:\\xampp\\tmp\\phpB9FF.tmp', 'lomba/lukmanafandi10@gmail.com/C:\\xampp\\tmp\\phpBA00.tmp', 'lomba/lukmanafandi10@gmail.com/C:\\xampp\\tmp\\phpBA10.tmp', 'lomba/lukmanafandi10@gmail.com/C:\\xampp\\tmp\\phpBA11.tmp', '2021-06-22 06:36:16', '2021-06-22 06:36:16');


INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2021_06_17_095244_create_expos_table', 1),
(5, '2021_06_17_173242_create_tcp_its_table', 1),
(6, '2021_06_17_173617_create_lomba_its_table', 1);





INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `event`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Vance Harvey', 'freynolds@example.org', '2021-06-22 05:13:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uJ0Gzbu4Nm', 'lomba', 'user', '2021-06-22 05:13:31', '2021-06-22 05:13:31');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `event`, `role`, `created_at`, `updated_at`) VALUES
(2, 'Gerardo Bashirian', 'telly.wintheiser@example.org', '2021-06-22 05:13:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IkLX4ClDQN', 'lomba', 'user', '2021-06-22 05:13:31', '2021-06-22 05:13:31');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `event`, `role`, `created_at`, `updated_at`) VALUES
(3, 'Shyanne West', 'twila.cole@example.org', '2021-06-22 05:13:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4dkGdetMDk', 'lomba', 'user', '2021-06-22 05:13:31', '2021-06-22 05:13:31');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `event`, `role`, `created_at`, `updated_at`) VALUES
(4, 'Cleta Ratke Jr.', 'gdietrich@example.com', '2021-06-22 05:13:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JZGTy0zGFF', 'lomba', 'user', '2021-06-22 05:13:31', '2021-06-22 05:13:31'),
(5, 'Kailee Langworth II', 'annamae.grimes@example.com', '2021-06-22 05:13:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GdxVUi2xLD', 'lomba', 'user', '2021-06-22 05:13:31', '2021-06-22 05:13:31'),
(6, 'Prof. Shanie Altenwerth Sr.', 'casper.randall@example.net', '2021-06-22 05:13:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SmwWEHgzFW', 'lomba', 'user', '2021-06-22 05:13:31', '2021-06-22 05:13:31'),
(7, 'Harry Carter', 'shegmann@example.com', '2021-06-22 05:13:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2eeE8a3Ptr', 'lomba', 'user', '2021-06-22 05:13:31', '2021-06-22 05:13:31'),
(8, 'Jewell Johnson', 'qkoss@example.org', '2021-06-22 05:13:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xFxcK9pSLC', 'lomba', 'user', '2021-06-22 05:13:31', '2021-06-22 05:13:31'),
(9, 'Prof. Jack Macejkovic I', 'deshawn.macejkovic@example.org', '2021-06-22 05:13:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nge2FVuY09', 'lomba', 'user', '2021-06-22 05:13:31', '2021-06-22 05:13:31'),
(10, 'Mr. Maximilian Cummerata', 'wzulauf@example.net', '2021-06-22 05:13:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WcJsnVKXqQ', 'lomba', 'user', '2021-06-22 05:13:31', '2021-06-22 05:13:31'),
(11, 'Admin', 'admin@admin.com', NULL, '$2y$10$I4.J5XBse9rLiROWc0vxjeU0jHiLLd9JZRJQdLhaVTZmkqXpInkxS', NULL, 'admin', 'admin', '2021-06-22 05:14:44', '2021-06-22 05:14:44'),
(12, 'Lukman Afandi', 'lukmanafandi10@gmail.com', NULL, '$2y$10$MRKxehauKhuARp7.m6zz8uZAsz3ua74O5eqY1o127DX6XH72x/.9W', NULL, 'lomba_it', 'user', '2021-06-22 05:35:25', '2021-06-22 06:36:16'),
(13, 'admin', 'admin2@admin.com', NULL, '$2y$10$jTgeukr6uNELKcvo6yGMC.TeoDXvbut0ifYdaTEp31x4MVr7IKH1a', NULL, '', 'user', '2021-06-22 06:38:40', '2021-06-22 06:38:40');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;