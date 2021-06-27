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
  `twibbon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biodata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twibbon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;





INSERT INTO `lomba_its` (`id`, `user_id`, `email`, `nama_peserta`, `nis`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `usia`, `no_wa_peserta`, `nama_pendamping`, `nip`, `no_wa_pendamping`, `foto_peserta`, `kartu_pelajar`, `surat_pernyataan`, `bukti_pembayaran`, `lampiran_guru`, `twibbon`, `created_at`, `updated_at`, `status`) VALUES
(8, 25, 'pesertalombait@gmail.com', 'Peserta Lomba IT', '32423423423', 'Probolinggo', '2021-06-14', 'laki-laki', 12, '213123123123123123123', 'Lukman Afandi', 213123123, '123123123123123', 'lomba/pesertalombait@gmail.com/1624781696.jpg', 'lomba/pesertalombait@gmail.com/1624781696.pdf', 'lomba/pesertalombait@gmail.com/1624781696.pdf', 'lomba/pesertalombait@gmail.com/1624781696.pdf', 'lomba/pesertalombait@gmail.com/1624781696.pdf', 'lomba/pesertalombait@gmail.com/1624781696.png', '2021-06-27 08:14:56', '2021-06-27 08:14:56', 'pending');


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
(12, '2021_06_25_234548_add_twibbon_field_at_lomba_its_and_tcp_its_table', 2);



INSERT INTO `tcp_its` (`id`, `user_id`, `email`, `nama_tim`, `perguruan_tinggi`, `judul_proposal`, `nama_ketua`, `nama_anggota1`, `nama_anggota2`, `ktm`, `bukti_pembayaran`, `proposal`, `biodata`, `created_at`, `updated_at`, `status`, `twibbon`) VALUES
(22, 23, 'Lukmanafandi10@gmail.com', 'Lukman Afandi', 'Universitas Negeri Jember', 'Cara menanam padi', 'Lukman Afandi', 'Lukman Afandi', 'Lukman Afandi', '[\"tcp\\/lukmanafandi10@gmail.com\\/1624765859.jpg\",\"tcp\\/lukmanafandi10@gmail.com\\/1624765859.jpg\",\"tcp\\/lukmanafandi10@gmail.com\\/1624765859.jpg\"]', 'tcp/lukmanafandi10@gmail.com/1624765859.pdf', 'tcp/lukmanafandi10@gmail.com/1624765859.pdf', 'tcp/lukmanafandi10@gmail.com/1624765859.pdf', '2021-06-27 03:50:59', '2021-06-27 03:50:59', 'pending', 'tcp/lukmanafandi10@gmail.com/1624765859.png');
INSERT INTO `tcp_its` (`id`, `user_id`, `email`, `nama_tim`, `perguruan_tinggi`, `judul_proposal`, `nama_ketua`, `nama_anggota1`, `nama_anggota2`, `ktm`, `bukti_pembayaran`, `proposal`, `biodata`, `created_at`, `updated_at`, `status`, `twibbon`) VALUES
(23, 23, 'lukmanafandi10@gmail.com', 'Lukman Afandi', 'Universitas Negeri Jember', 'Cara menanak nasi', 'Lukman Afandi', 'Lukman Afandi', 'Lukman Afandi', '[\"tcp\\/lukmanafandi10@gmail.com\\/1624768991.jpg\",\"tcp\\/lukmanafandi10@gmail.com\\/1624768991.jpg\",\"tcp\\/lukmanafandi10@gmail.com\\/1624768991.jpg\"]', 'tcp/lukmanafandi10@gmail.com/1624768991.pdf', 'tcp/lukmanafandi10@gmail.com/1624768991.pdf', 'tcp/lukmanafandi10@gmail.com/1624768991.pdf', '2021-06-27 04:43:11', '2021-06-27 05:17:49', 'verified', 'tcp/lukmanafandi10@gmail.com/1624765859.png');


INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `event`, `role`, `created_at`, `updated_at`) VALUES
(11, 'Admin', 'admin@admin.com', NULL, '$2y$10$I4.J5XBse9rLiROWc0vxjeU0jHiLLd9JZRJQdLhaVTZmkqXpInkxS', NULL, 'admin', 'admin', '2021-06-22 05:14:44', '2021-06-22 05:14:44');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `event`, `role`, `created_at`, `updated_at`) VALUES
(22, 'iqbal', 'iqbaliamal@gmail.com', NULL, '$2y$10$26x3ZIBlTadMCVgO4uSfPuhmhjUJA9O/rtU964pJ.bXQT4GYbfZyG', NULL, 'tcp_it', 'user', '2021-06-26 09:55:47', '2021-06-26 11:30:46');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `event`, `role`, `created_at`, `updated_at`) VALUES
(23, 'Lukman Afandi', 'lukmanafandi10@gmail.com', NULL, '$2y$10$FLEQMyfjOGm2lJeSzUjNmuR1Yq1nhrvQ3ycQrZ4.RGv/2tse33uKG', NULL, 'tcp_it', 'user', '2021-06-27 03:17:51', '2021-06-27 03:50:59');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `event`, `role`, `created_at`, `updated_at`) VALUES
(24, 'Afandi Lukman', 'afandilukman10@gmail.com', NULL, '$2y$10$V61rfyO58IPa7uL6We/mNOq6p0dZhUzFOUL6nifaMN7NQYW4nOn0G', NULL, '', 'user', '2021-06-27 05:49:36', '2021-06-27 05:49:36'),
(25, 'Peserta Lomba IT', 'pesertalombait@gmail.com', NULL, '$2y$10$/48WrwXr7cgVwzsGY0HBr.6YSkzhPD2dBhd.wuUXckWVAlBTA2K5i', NULL, 'lomba_it', 'user', '2021-06-27 07:46:17', '2021-06-27 08:14:56');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;