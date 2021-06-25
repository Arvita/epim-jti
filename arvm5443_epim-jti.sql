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
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;





INSERT INTO `lomba_its` (`id`, `user_id`, `email`, `nama_peserta`, `nis`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `usia`, `no_wa_peserta`, `nama_pendamping`, `nip`, `no_wa_pendamping`, `foto_peserta`, `kartu_pelajar`, `surat_pernyataan`, `bukti_pembayaran`, `lampiran_guru`, `created_at`, `updated_at`, `status`) VALUES
(1, 12, 'fasdsdasadf@sfasd.com', 'sdfasdfasdfsadfsadf', 'sdfasdfsdafsd', 'afsadfasdfsadfsadfasfsa', '2021-06-10', 'laki-laki', 213, 'asdfsafdsafsafsda', 'dsfsadfd', 213, 'asdsafasdfas', 'lomba/lukmanafandi10@gmail.com/C:\\xampp\\tmp\\phpB9FE.tmp', 'lomba/lukmanafandi10@gmail.com/C:\\xampp\\tmp\\phpB9FF.tmp', 'lomba/lukmanafandi10@gmail.com/C:\\xampp\\tmp\\phpBA00.tmp', 'lomba/lukmanafandi10@gmail.com/C:\\xampp\\tmp\\phpBA10.tmp', 'lomba/lukmanafandi10@gmail.com/C:\\xampp\\tmp\\phpBA11.tmp', '2021-06-22 06:36:16', '2021-06-22 06:36:16', '');
INSERT INTO `lomba_its` (`id`, `user_id`, `email`, `nama_peserta`, `nis`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `usia`, `no_wa_peserta`, `nama_pendamping`, `nip`, `no_wa_pendamping`, `foto_peserta`, `kartu_pelajar`, `surat_pernyataan`, `bukti_pembayaran`, `lampiran_guru`, `created_at`, `updated_at`, `status`) VALUES
(2, 15, 'asdfsadfsadfsdafsdaf@sda.com', 'fsadfsdafsdfsdfdfas', 'fasdfasfasfsadfasdfsdfsdaf', 'sdafsdfsdfsadfasd', '2021-06-12', 'laki-laki', 123, '123123', 'sdfasfasdfasfasf', 12213, '12312', 'lomba/luksdjaflsjdf@sdfasdf.com/1624498189.jpg', 'lomba/luksdjaflsjdf@sdfasdf.com/1624498189.jpg', 'lomba/luksdjaflsjdf@sdfasdf.com/1624498189.jpg', 'lomba/luksdjaflsjdf@sdfasdf.com/1624498189.jpg', 'lomba/luksdjaflsjdf@sdfasdf.com/1624498189.jpg', '2021-06-24 01:29:49', '2021-06-24 01:29:49', '');
INSERT INTO `lomba_its` (`id`, `user_id`, `email`, `nama_peserta`, `nis`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `usia`, `no_wa_peserta`, `nama_pendamping`, `nip`, `no_wa_pendamping`, `foto_peserta`, `kartu_pelajar`, `surat_pernyataan`, `bukti_pembayaran`, `lampiran_guru`, `created_at`, `updated_at`, `status`) VALUES
(3, 15, 'Lukman@Afandi.com', 'Lukman Afandi', '65464646', 'sdkfljsadlfjasdlfjk', '2021-06-17', 'laki-laki', 213, '2138271837123', 'dfasfasdfsd', 123123, '123213123123', 'lomba/luksdjaflsjdf@sdfasdf.com/1624498401.jpg', 'lomba/luksdjaflsjdf@sdfasdf.com/1624498401.jpg', 'lomba/luksdjaflsjdf@sdfasdf.com/1624498401.jpg', 'lomba/luksdjaflsjdf@sdfasdf.com/1624498401.jpg', 'lomba/luksdjaflsjdf@sdfasdf.com/1624498401.jpg', '2021-06-24 01:33:21', '2021-06-24 01:33:21', '');
INSERT INTO `lomba_its` (`id`, `user_id`, `email`, `nama_peserta`, `nis`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `usia`, `no_wa_peserta`, `nama_pendamping`, `nip`, `no_wa_pendamping`, `foto_peserta`, `kartu_pelajar`, `surat_pernyataan`, `bukti_pembayaran`, `lampiran_guru`, `created_at`, `updated_at`, `status`) VALUES
(4, 15, 'dsafasdfsdfsdfasdf@asdfs.com', 'asdfsadfsdfasdf', 'sdfsdafsdfsd', 'fasdfsadfsdaf', '2021-06-26', 'laki-laki', 1231, 'sdfasassa', 'fsasafasdfasf', 123, 'asdfsdfadf', 'lomba/luksdjaflsjdf@sdfasdf.com/1624498962.jpg', 'lomba/luksdjaflsjdf@sdfasdf.com/1624498962.jpg', 'lomba/luksdjaflsjdf@sdfasdf.com/1624498962.jpg', 'lomba/luksdjaflsjdf@sdfasdf.com/1624498962.jpg', 'lomba/luksdjaflsjdf@sdfasdf.com/1624498962.jpg', '2021-06-24 01:42:42', '2021-06-24 01:42:42', 'not verified'),
(5, 17, 'lukmanafandi10@gmail.com', 'Lukman Afandi', 'E31200844', 'asfsfasfasfasfasdfsdafasfasf', '2021-06-08', 'laki-laki', 12, '21', 'sdfsadfasdfsdfasdasdfasdfsdfasfsadfasdfs', 2131312312, '123123123123123', 'lomba/afdasdfsadfs@ffsafasdf.com/1624582053.jpg', 'lomba/afdasdfsadfs@ffsafasdf.com/1624582053.jpg', 'lomba/afdasdfsadfs@ffsafasdf.com/1624582053.jpg', 'lomba/afdasdfsadfs@ffsafasdf.com/1624582053.jpg', 'lomba/afdasdfsadfs@ffsafasdf.com/1624582053.jpg', '2021-06-25 00:47:33', '2021-06-25 00:47:33', 'not verified'),
(6, 19, 'asdfasdfasdfasdfsdfa@dfasdfasd.com', 'fadsfasdfasdf', 'asdfasdfasdfasdfasdf', 'sadfasdfasdfasdfasdfasdfasdfasf', '2021-06-04', 'laki-laki', 213123123, 'asdfasdfasdfasdfasdfsadf', 'adfsadfsdafasdfsd', 123123, 'fsadfasdfasdfasdfasd', 'lomba/asfdhaskdjfa@afjkhsdfkj.com/1624594991.jpg', 'lomba/asfdhaskdjfa@afjkhsdfkj.com/1624594991.pdf', 'lomba/asfdhaskdjfa@afjkhsdfkj.com/1624594991.pdf', 'lomba/asfdhaskdjfa@afjkhsdfkj.com/1624594991.pdf', 'lomba/asfdhaskdjfa@afjkhsdfkj.com/1624594991.pdf', '2021-06-25 04:23:11', '2021-06-25 04:23:11', 'not verified'),
(7, 20, 'asdsffssadfsadfsa@asdfasdf.com', 'dfasdfasdfasdfsadf', 'asdfasdfasdfasdf', 'sdfasfsfsafasfasdfasdf', '2021-07-01', 'laki-laki', 123, 'asdfsadfsadfasdfasdf', 'asdfasdfasdfasfasdfasd', 213123123, 'dfasfasdfasdf', 'lomba/safsdkf@sdfasdf.com/1624597979.jpg', 'lomba/safsdkf@sdfasdf.com/1624597979.pdf', 'lomba/safsdkf@sdfasdf.com/1624597979.pdf', 'lomba/safsdkf@sdfasdf.com/1624597979.pdf', 'lomba/safsdkf@sdfasdf.com/1624597979.pdf', '2021-06-25 05:12:59', '2021-06-25 05:12:59', 'not verified');

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
(7, '2021_06_24_013533_add_status_column_at_tcp_its_table', 2),
(8, '2021_06_24_013545_add_status_column_at_lomba_its_table', 2);



INSERT INTO `tcp_its` (`id`, `user_id`, `email`, `nama_tim`, `perguruan_tinggi`, `judul_proposal`, `nama_ketua`, `nama_anggota1`, `nama_anggota2`, `ktm`, `proposal`, `biodata`, `created_at`, `updated_at`, `status`) VALUES
(7, 15, 'lukmanafandi10@gmail.com', 'test', 'test ui', 'test ui', 'test ui', 'test ui', 'test ui', 'tcp/luksdjaflsjdf@sdfasdf.com/1624497819.jpg', 'tcp/luksdjaflsjdf@sdfasdf.com/1624497819.jpg', 'tcp/luksdjaflsjdf@sdfasdf.com/1624497819.webp', '2021-06-24 01:23:39', '2021-06-24 01:23:39', '');
INSERT INTO `tcp_its` (`id`, `user_id`, `email`, `nama_tim`, `perguruan_tinggi`, `judul_proposal`, `nama_ketua`, `nama_anggota1`, `nama_anggota2`, `ktm`, `proposal`, `biodata`, `created_at`, `updated_at`, `status`) VALUES
(8, 15, 'lukmanafandi10@gmailfd.com', 'asdfasdf', 'sdf', 'sdfsdfsadfsafsadfsdafsadf', 'asdfasdfasdfasdf', 'sdfsdfasdfsdf', 'sdfsdfsdfsdfsdfsa', 'tcp/luksdjaflsjdf@sdfasdf.com/1624497861.webp', 'tcp/luksdjaflsjdf@sdfasdf.com/1624497861.jpg', 'tcp/luksdjaflsjdf@sdfasdf.com/1624497861.webp', '2021-06-24 01:24:21', '2021-06-24 01:24:21', '');
INSERT INTO `tcp_its` (`id`, `user_id`, `email`, `nama_tim`, `perguruan_tinggi`, `judul_proposal`, `nama_ketua`, `nama_anggota1`, `nama_anggota2`, `ktm`, `proposal`, `biodata`, `created_at`, `updated_at`, `status`) VALUES
(9, 15, 'asdfsadfasdfsadfsa@d.com', 'fsadfasdfasdf', 'sdfsdafsdfsfsdfsadf', 'sadfsdafsdfsd', 'fsdfsadfsadfsad', 'fsadfsafsadfsadf', 'asdfsdfsdafsdaf', 'tcp/luksdjaflsjdf@sdfasdf.com/1624497917.jpg', 'tcp/luksdjaflsjdf@sdfasdf.com/1624497917.jpg', 'tcp/luksdjaflsjdf@sdfasdf.com/1624497917.jpg', '2021-06-24 01:25:17', '2021-06-24 01:25:17', '');
INSERT INTO `tcp_its` (`id`, `user_id`, `email`, `nama_tim`, `perguruan_tinggi`, `judul_proposal`, `nama_ketua`, `nama_anggota1`, `nama_anggota2`, `ktm`, `proposal`, `biodata`, `created_at`, `updated_at`, `status`) VALUES
(10, 12, 'lukmanafandi10@gmail.com', 'Lukman Afandi', 'Test lagi', 'Test', 'Lukman Afandi', NULL, NULL, 'tcp/lukmanafandi10@gmail.com/1624508512.jpg', 'tcp/lukmanafandi10@gmail.com/1624508512.jpg', 'tcp/lukmanafandi10@gmail.com/1624508512.jpg', '2021-06-24 04:21:52', '2021-06-24 04:21:52', 'not verified'),
(11, 12, 'asdklfsadfjskfas@dsaf.com', 'sdafasdfasdfasd', 'asdfasdfasdfasf', 'sadfasfasdfasdf', 'sadfasdfasf', 'sdafasfasd', 'asdfsdafasdf', 'tcp/lukmanafandi10@gmail.com/1624508835.jpg', 'tcp/lukmanafandi10@gmail.com/1624508835.jpg', 'tcp/lukmanafandi10@gmail.com/1624508835.jpg', '2021-06-24 04:27:15', '2021-06-24 04:27:15', 'not verified'),
(12, 16, 'sdfsadfasdfsadfsdaf@asfdsd.com', 'sdfsadfsdafsadf', 'fsdafsadfsadfasfsadfsa', 'dfasdfasdf', 'asdfasdfasdfasdfasf', 'asdfasdfasdsadfasdf', 'sdfasdfasdfasdf', 'tcp/asdfsdaf@sdfasdf.com/1624508897.jpg', 'tcp/asdfsdaf@sdfasdf.com/1624508897.jpg', 'tcp/asdfsdaf@sdfasdf.com/1624508897.jpg', '2021-06-24 04:28:17', '2021-06-24 04:28:17', 'not verified'),
(13, 12, 'Lukmanand@asdfasdfa.com', 'Lukman Afandi', 'Universitas Negeri Jember', 'Test 123', 'Test 123', NULL, NULL, 'tcp/lukmanafandi10@gmail.com/1624518193.txt', 'tcp/lukmanafandi10@gmail.com/1624518193.txt', 'tcp/lukmanafandi10@gmail.com/1624518193.txt', '2021-06-24 07:03:13', '2021-06-24 07:03:13', 'not verified'),
(14, 12, 'sadfsadfasdfas@asdf.com', 'fsadfsafsadfsadfsdfsadf', 'asdfsadfsadf', 'sadfsadfsadf', 'asdfasdfasdfasdf', 'sdafasdfasdfsdafsadf', 'asdfsadfsadfasdfasdf', 'tcp/lukmanafandi10@gmail.com/1624543347.jpg', 'tcp/lukmanafandi10@gmail.com/1624543347.pdf', 'tcp/lukmanafandi10@gmail.com/1624543347.pdf', '2021-06-24 14:02:27', '2021-06-24 14:02:27', 'not verified'),
(15, 12, 'dfasdfasdf@afasdf.com', 'sdfkjasdkfhaskjh', 'sdjkafhasdkjfhasjkdfhaskjfh', 'sdjkfhasjkfhasjkdfhksadh', 'asdjkfhskdfhaskhfasdjfhaskd', 'ajkdfhaskjfhaskdjfhasdfasdfasf', NULL, '[\"tcp\\/lukmanafandi10@gmail.com\\/1624583489.jpg\",\"tcp\\/lukmanafandi10@gmail.com\\/1624583489.jpg\",\"tcp\\/lukmanafandi10@gmail.com\\/1624583489.jpg\"]', 'tcp/lukmanafandi10@gmail.com/1624583489.pdf', 'tcp/lukmanafandi10@gmail.com/1624583489.pdf', '2021-06-25 01:11:29', '2021-06-25 01:11:29', 'not verified'),
(16, 18, 'asdfasdfsdfsadfasfasdf@asdfasdf.com', 'sdafasdfasdfsadfasd', 'fasdfasdfasdfasdfasdfsadf', 'asdfsadfasdfasdfasd', 'fasdfasdfasdfasdfsda', 'fasdfasdfasdfasd', 'fasdfasdfasdfasdf', '[\"tcp\\/asdfasdfasdfasdfsdfa@dfasdfasd.com\\/1624594800.jpg\",\"tcp\\/asdfasdfasdfasdfsdfa@dfasdfasd.com\\/1624594800.jpg\",\"tcp\\/asdfasdfasdfasdfsdfa@dfasdfasd.com\\/1624594800.jpg\"]', 'tcp/asdfasdfasdfasdfsdfa@dfasdfasd.com/1624594800.pdf', 'tcp/asdfasdfasdfasdfsdfa@dfasdfasd.com/1624594800.pdf', '2021-06-25 04:20:00', '2021-06-25 04:20:00', 'not verified'),
(17, 21, 'luiasdmflkasdjfklas@sadfasd.com', 'sdfasdfasfsadfasf', 'asdfsadfsdfasdf', 'asdfsadfsadfsdfsd', 'fsdafsadfsadfsadf', 'fsadfasdfsadfasdfas', NULL, '[\"tcp\\/cvxcvzxcvzxcv@fsdffsadf.com\\/1624598300.png\",\"tcp\\/cvxcvzxcvzxcv@fsdffsadf.com\\/1624598300.png\",\"tcp\\/cvxcvzxcvzxcv@fsdffsadf.com\\/1624598300.png\"]', 'tcp/cvxcvzxcvzxcv@fsdffsadf.com/1624598300.pdf', 'tcp/cvxcvzxcvzxcv@fsdffsadf.com/1624598300.pdf', '2021-06-25 05:18:20', '2021-06-25 05:18:20', 'not verified');

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
(12, 'Lukman Afandi', 'lukmanafandi10@gmail.com', NULL, '$2y$10$MRKxehauKhuARp7.m6zz8uZAsz3ua74O5eqY1o127DX6XH72x/.9W', NULL, 'tcp_it', 'user', '2021-06-22 05:35:25', '2021-06-22 06:36:16'),
(13, 'admin', 'admin2@admin.com', NULL, '$2y$10$jTgeukr6uNELKcvo6yGMC.TeoDXvbut0ifYdaTEp31x4MVr7IKH1a', NULL, '', 'user', '2021-06-22 06:38:40', '2021-06-22 06:38:40'),
(14, 'Lukman Afandi', 'lukmanafandi11@gmail.com', NULL, '$2y$10$PJxDU8P0guL7EMJAx83pkO2uUj4uffIj4tAQEfxa5r0geeu4ZZ/BS', NULL, 'tcp_it', 'user', '2021-06-22 22:11:38', '2021-06-22 22:13:35'),
(15, 'lsdfkasfhaskjfh', 'luksdjaflsjdf@sdfasdf.com', NULL, '$2y$10$8e.oeRfim9l0Lv2GlaP7zuFV0OEyx8cuAVfNmxUxIcM0NC7Gw7slm', NULL, 'lomba_it', 'user', '2021-06-24 01:16:12', '2021-06-24 01:42:42'),
(16, 'safsadfasdf', 'asdfsdaf@sdfasdf.com', NULL, '$2y$10$oXA31FN9vGCWm1U8QjCks.Y6PNok73WQdCWUKtohyUfbLUARO4Xte', NULL, 'tcp_it', 'user', '2021-06-24 04:27:46', '2021-06-24 04:28:17'),
(17, 'Lukman Afandi', 'afdasdfsadfs@ffsafasdf.com', NULL, '$2y$10$PBnBI37q1CUaoZo2hdzr0.MAsYK3BNDarQcKagogLMpgJ4Jn.RvoG', NULL, 'lomba_it', 'user', '2021-06-24 22:33:58', '2021-06-25 00:47:33'),
(18, 'fadsfasdfasdf', 'asdfasdfasdfasdfsdfa@dfasdfasd.com', NULL, '$2y$10$1wEooQib.1cW0XTvP87c8eP0fbWQeg73PPo8DwpIUetict6RKc8EW', NULL, 'tcp_it', 'user', '2021-06-25 04:09:23', '2021-06-25 04:20:00'),
(19, 'kjhfjkashfkjasdfhkjasdfh', 'asfdhaskdjfa@afjkhsdfkj.com', NULL, '$2y$10$yo8KYU1b615Qybx8QWgswekhu2DwbH0ccQE8Gw2YKeO00jIQyofb6', NULL, 'lomba_it', 'user', '2021-06-25 04:20:43', '2021-06-25 04:23:11'),
(20, 'sadfsadfdsfs', 'safsdkf@sdfasdf.com', NULL, '$2y$10$BHIugFyPIeZS0wCaXZO1/uw/1TfK3XXV7eBFW4Ksoiw15BerU4ZL6', NULL, 'lomba_it', 'user', '2021-06-25 05:00:27', '2021-06-25 05:12:59'),
(21, 'sdfsdfasdfsdf', 'cvxcvzxcvzxcv@fsdffsadf.com', NULL, '$2y$10$lZT.x.bpjHx3cQFOH3GcG.d7SNOo/pivI2JuLWh0PduGDWg/cy.By', NULL, 'tcp_it', 'user', '2021-06-25 05:13:27', '2021-06-25 05:18:20');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;