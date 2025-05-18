-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2025 at 01:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik_haikhah`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_c`
--

CREATE TABLE `area_c` (
  `ruang_id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area_c`
--

INSERT INTO `area_c` (`ruang_id`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'Apotek', 'Apotek internal kami menyediakan obat resep, produk kesehatan umum, serta layanan konsultasi obat bagi pasien.', 'images/apotek.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `area_d`
--

CREATE TABLE `area_d` (
  `ruang_id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area_d`
--

INSERT INTO `area_d` (`ruang_id`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'Toilet Umum', 'Fasilitas toilet bersih dan mudah diakses yang tersedia di berbagai area klinik, termasuk fasilitas ramah pengguna kursi roda.', 'images/toilet-umum.jpg'),
(3, 'Tempat Parkir Kendaraan', 'Area parkir yang luas dan aman untuk kendaraan roda dua maupun roda empat, tersedia bagi pasien, pengunjung, dan staf, dengan akses yang mudah ke seluruh fasilitas klinik.', 'images/tempat-parkir.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `nama` varchar(50) NOT NULL,
  `spesialis` varchar(29) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`nama`, `spesialis`, `deskripsi`) VALUES
('Dr. Tirta Mandira Hudhi', 'Ortopedi', 'Lulusan Kedokteran UGM Cumlaude pengalaman lebih dari 10 tahun'),
('Dr. Djaja Surya Atmadja', 'Forensik', 'Dokter forensik DNA pertama di Indonesia merupakan dokter spesialis forensik dan medikolegal'),
('Dr. I Gede Andhika Wiratama', 'Kulit dan Kelamin', 'Lulusan Kedokteran UI dengan pengalaman lebih dari 5 tahun'),
('Dr. Qholdi Rheody', 'Kandungan', 'Dokter laki laki kandungan pertama di indonesia dengan pengalaman hampir 3 tahun');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fitur_b`
--

CREATE TABLE `fitur_b` (
  `id` int(11) NOT NULL,
  `ruang_id` int(11) DEFAULT NULL,
  `nama_fitur` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fitur_b`
--

INSERT INTO `fitur_b` (`id`, `ruang_id`, `nama_fitur`) VALUES
(1, 1, 'Peralatan diagnostik canggih'),
(2, 1, 'Ruang konsultasi kedap suara'),
(3, 1, 'Tempat periksa yang ergonomis'),
(4, 1, 'Komputer kerja untuk dokter'),
(5, 2, 'Area prosedur steril'),
(6, 2, 'Peralatan medis khusus'),
(7, 2, 'Sistem pencahayaan mutakhir'),
(8, 2, 'Fasilitas respons darurat'),
(13, 4, 'Tempat tidur rumah sakit yang dapat diatur'),
(14, 4, 'Sistem monitoring pasien'),
(15, 4, 'Kamar mandi pribadi'),
(16, 4, 'Fasilitas untuk keluarga'),
(17, 5, 'Kursi gigi modern dan nyaman'),
(18, 5, 'Peralatan x-ray digital'),
(19, 5, 'Area sterilisasi alat'),
(20, 5, 'Alat prosedur gigi lengkap'),
(21, 6, 'Tempat tidur dan perlengkapan persalinan'),
(22, 6, 'Sistem monitoring janin'),
(23, 6, 'Area pemeriksaan bayi baru lahir'),
(24, 6, 'Dukungan fasilitas operasi darurat'),
(25, 7, 'Kamar bersama ibu dan bayi'),
(26, 7, 'Area dukungan menyusui'),
(27, 7, 'Fasilitas perawatan bayi baru lahir'),
(28, 7, 'Ruang kunjungan keluarga');

-- --------------------------------------------------------

--
-- Table structure for table `fitur_c`
--

CREATE TABLE `fitur_c` (
  `id` int(11) NOT NULL,
  `ruang_id` int(11) NOT NULL,
  `nama_fitur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fitur_c`
--

INSERT INTO `fitur_c` (`id`, `ruang_id`, `nama_fitur`) VALUES
(1, 1, 'Stok obat yang lengkap'),
(2, 1, 'Sistem verifikasi resep'),
(3, 1, 'Area konsultasi obat'),
(4, 1, 'Penyimpanan suhu terkontrol');

-- --------------------------------------------------------

--
-- Table structure for table `fitur_d`
--

CREATE TABLE `fitur_d` (
  `id` int(11) NOT NULL,
  `ruang_id` int(11) NOT NULL,
  `nama_fitur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fitur_d`
--

INSERT INTO `fitur_d` (`id`, `ruang_id`, `nama_fitur`) VALUES
(1, 1, 'Akses kursi roda'),
(2, 1, 'Tempat ganti popok bayi'),
(3, 1, 'Perlengkapan kebersihan tersedia'),
(4, 1, 'Jadwal pembersihan rutin'),
(9, 3, 'Kapasitas memadai untuk mobil dan motor'),
(10, 3, 'Sistem keamanan 24 jam (CCTV & petugas keamanan)'),
(11, 3, 'Akses langsung ke pintu masuk klinik'),
(12, 3, 'Area parkir khusus untuk difabel');

-- --------------------------------------------------------

--
-- Table structure for table `fitur_penerimaan`
--

CREATE TABLE `fitur_penerimaan` (
  `id` int(11) NOT NULL,
  `ruang_id` int(11) DEFAULT NULL,
  `nama_fitur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fitur_penerimaan`
--

INSERT INTO `fitur_penerimaan` (`id`, `ruang_id`, `nama_fitur`) VALUES
(1, 1, 'Sistem pendaftaran digital'),
(2, 1, 'Pengelolaan rekam medis elektronik yang aman'),
(3, 1, 'Beragam metode pembayaran'),
(4, 1, 'Booth konsultasi pribadi'),
(5, 2, 'Tempat duduk yang nyaman dan tertata'),
(6, 2, 'Materi edukasi kesehatan'),
(7, 2, 'Layar informasi digital'),
(8, 2, 'Akses Wi-Fi gratis');

-- --------------------------------------------------------

--
-- Table structure for table `janji_temu`
--

CREATE TABLE `janji_temu` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(90) DEFAULT NULL,
  `nomor_telepon` varchar(15) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `layanan` enum('Konsultasi Umum','Konsultasi Spesialis','Perawatan Gigi','Kesehatan Anak','Medical Check-up') DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `Keluhan_Gejala` text DEFAULT NULL,
  `catatan_tambahan` text DEFAULT NULL,
  `status` enum('pending','confirmed','completed','cancelled') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `janji_temu`
--

INSERT INTO `janji_temu` (`id`, `nama_lengkap`, `nomor_telepon`, `email`, `layanan`, `tanggal`, `waktu`, `Keluhan_Gejala`, `catatan_tambahan`, `status`) VALUES
(19, 'wdw', '0912312', 'wdwd@gg.com', 'Konsultasi Spesialis', '2025-05-18', '21:00:00', 'fwrgteg', 'ergergre', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `alamat` text NOT NULL,
  `NoTlpn` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Jam` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`alamat`, `NoTlpn`, `email`, `Jam`) VALUES
('JL.Pramuka Gg.Rengas Sejahtera No.1, Sungai Rengas, Kecamatan Sungai Kakap, Kabupaten Kubu Raya, Kalimantan Barat 78381', '+62 812-5650-0204', 'klinikhaikhah@gmail.com', 'Buka 24 Jam');

-- --------------------------------------------------------

--
-- Table structure for table `list_misinilai`
--

CREATE TABLE `list_misinilai` (
  `id` int(11) NOT NULL,
  `id_misinilai` int(11) DEFAULT NULL,
  `List_item` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list_misinilai`
--

INSERT INTO `list_misinilai` (`id`, `id_misinilai`, `List_item`) VALUES
(1, 1, 'Mewujudkan pelayanan yang bermutu - Memberikan layanan kesehatan yang aman, efektif, dan berorientasi pasien.'),
(2, 1, 'Mewujudkan pelayanan yang profesional - Menyediakan tenaga medis terlatih dengan standar etika yang tinggi.'),
(3, 1, 'Mewujudkan pelayanan yang terjangkau - Memberikan akses layanan kesehatan berkualitas dengan biaya yang rasional.'),
(4, 2, 'Kepedulian & Empati - Kami menempatkan kesejahteraan pasien sebagai prioritas utama dalam setiap interaksi dan keputusan medis.'),
(5, 2, 'Profesionalisme - Kami menjunjung tinggi standar etika dan kompetensi medis dalam memberikan layanan kesehatan.'),
(6, 2, 'Inovasi - Kami terus mengembangkan metode perawatan dan layanan mengikuti perkembangan ilmu kedokteran.'),
(7, 2, 'Integritas - Kami menjalankan praktik dengan kejujuran dan transparansi dalam semua aspek layanan.');

-- --------------------------------------------------------

--
-- Table structure for table `mengapa_kami`
--

CREATE TABLE `mengapa_kami` (
  `title` text NOT NULL,
  `deskripsi` text NOT NULL,
  `icon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mengapa_kami`
--

INSERT INTO `mengapa_kami` (`title`, `deskripsi`, `icon`) VALUES
('Pengalaman Lebih dari 20 Tahun', 'Klinik kami telah berpengalaman dalam memberikan pelayanan kesehatan terpercaya sejak dua dekade lalu, didukung oleh reputasi yang kokoh di bidang medis.', 'fa-solid fa-award'),
('Tenaga Medis Profesional dan Berkompeten', 'Didukung oleh dokter, perawat, dan staf medis yang tersertifikasi, berdedikasi tinggi, serta terus mengikuti perkembangan ilmu kedokteran terkini.', 'fa-solid fa-user-doctor'),
('Fokus pada Kenyamanan Pasien', 'Kami memprioritaskan pelayanan ramah, proses yang efisien, serta pendekatan personal untuk menciptakan pengalaman terbaik bagi setiap pasien.', 'fas fa-heart'),
('Lingkungan Klinik yang Nyaman dan Hommy', 'Desain interior yang hangat dan fasilitas modern dirancang untuk mengurangi kesan kaku, sehingga pasien merasa rileks selama konsultasi atau perawatan.', 'fas fa-house-chimney-medical');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `misi_nilai`
--

CREATE TABLE `misi_nilai` (
  `id_misinilai` int(11) NOT NULL,
  `judul` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `misi_nilai`
--

INSERT INTO `misi_nilai` (`id_misinilai`, `judul`) VALUES
(1, 'Misi Kami'),
(2, 'Nilai-Nilai Kami');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `icon` varchar(256) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`icon`, `nama`, `deskripsi`) VALUES
('fa-solid fa-stethoscope', 'Rawat Jalan', 'Layanan kesehatan tanpa menginap meliputi konsultasi dokter, pemeriksaan medis, dan pengobatan rutin untuk pasien.'),
('fa-solid fa-bed-pulse', 'Rawat Inap', 'Perawatan medis intensif selama maksimal 5 hari dengan rujukan lanjutan bila diperlukan sesuai ketentuan berlaku.'),
('fa-solid fa-house-chimney-medical', 'Home Care', 'Layanan perawatan profesional di rumah khusus untuk pasien penyakit kronis berat dengan penanganan berkala oleh tim medis.');

-- --------------------------------------------------------

--
-- Table structure for table `pencapaian`
--

CREATE TABLE `pencapaian` (
  `tipe` varchar(100) NOT NULL,
  `value` varchar(50) NOT NULL,
  `unit` varchar(10) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pencapaian`
--

INSERT INTO `pencapaian` (`tipe`, `value`, `unit`, `icon`, `created_at`) VALUES
('Tahun Pengalaman', '20', '+', 'fa-solid fa-user-doctor', '2025-04-30 11:59:32'),
('Pasien Terlayani', '50000', '+', 'fa-solid fa-users', '2025-04-30 11:59:32'),
('Penghargaan & Sertifikasi', '15', '+', 'fa-solid fa-award', '2025-04-30 11:59:32'),
('Kepuasan Pasien', '98', '%', 'fa-solid fa-hand-holding-medical', '2025-04-30 11:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `perjalanan`
--

CREATE TABLE `perjalanan` (
  `tahun` smallint(6) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perjalanan`
--

INSERT INTO `perjalanan` (`tahun`, `judul`, `deskripsi`) VALUES
(2001, 'Awal Pendirian', 'Klinik Haikhah didirikan oleh Muhammad Khairun Anwar dan Dr. Nihayatus Solikhah sebagai klinik kecil dengan tiga ruang perawatan dan fokus pada layanan umum.'),
(2005, 'Perluasan Layanan', 'Penambahan layanan pediatri dan geriatri, serta meluncurkan program kemitraan dengan asuransi kesehatan pertama.'),
(2010, 'Renovasi Besar Pertama', 'Ekspansi fasilitas dan penambahan layanan rawat inap terbatas dengan kapasitas 10 tempat tidur.'),
(2015, 'Modernisasi Teknologi', 'Implementasi sistem rekam medis elektronik dan penambahan departemen gigi modern dengan teknologi terkini.'),
(2020, 'Layanan Home Care', 'Peluncuran program home care untuk pasien lanjut usia dan penderita penyakit kronis yang membutuhkan perawatan di rumah.'),
(2022, 'Integrasi Telemedicine', 'Pengembangan platform telemedicine untuk konsultasi jarak jauh, memudahkan akses layanan kesehatan bagi semua kalangan.');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_b`
--

CREATE TABLE `ruang_b` (
  `ruang_id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ruang_b`
--

INSERT INTO `ruang_b` (`ruang_id`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'Ruang Pemeriksaan Umum', 'Ruang privat untuk pemeriksaan umum, konsultasi, dan asesmen diagnostik, tempat dokter bertemu pasien untuk membahas keluhan kesehatan.', 'images/ruang-pemeriksaan-umum.jpg'),
(2, 'Ruang Tindakan Medis', 'Ruang khusus untuk tindakan medis ringan seperti injeksi, perawatan luka, dan prosedur lain yang membutuhkan lingkungan steril.', 'images/ruang-tindakan.jpg'),
(4, 'Ruang Rawat Inap', 'Ruang inap yang nyaman dan diawasi ketat untuk pasien yang membutuhkan perawatan lebih lanjut atau observasi medis jangka pendek.', 'images/ruang-rawat-inap.jpg'),
(5, 'Ruang Perawatan Gigi', 'Suite perawatan gigi modern yang mendukung layanan kesehatan mulut menyeluruh, mulai dari pencegahan hingga kosmetik.', 'images/ruang-perawatan-gigi.jpg'),
(6, 'Ruang Persalinan', 'Suite persalinan yang aman dan nyaman untuk proses melahirkan, dengan akses cepat ke layanan darurat jika diperlukan.', 'images/ruang-tindakan.jpg'),
(7, 'Ruang Nifas', 'Ruang rawat inap pascapersalinan yang nyaman, mendukung proses pemulihan ibu serta ikatan awal antara ibu dan bayi.', 'images/ruang-nifas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_penerimaan`
--

CREATE TABLE `ruang_penerimaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ruang_penerimaan`
--

INSERT INTO `ruang_penerimaan` (`id`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'Ruang Administrasi', 'Area administrasi terpusat kami menangani seluruh proses pendaftaran pasien, pembayaran, pengelolaan rekam medis, hingga operasional kantor umum.', 'images/ruang-administrasi.jpg'),
(2, 'Ruang Tunggu', 'Ruang tunggu kami didesain luas dan nyaman untuk membuat pengalaman menunggu lebih menyenangkan, dengan tetap menjaga jarak yang aman.', 'images/ruang-tunggu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('eSyLLuiAOxFI8xc3Zb9xCOaQPOfpei4gZB8wSlvw', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV0pid282NlBSVXhTMWg1dEk4SFZZcjZVczduRnYzV0ppRndQMmhUbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9qYW5qaS10ZW11Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1747566414),
('pkLTYowJWzYQKPy5iFX1mLLxCorSFKMXcz1TVWxK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiRUZNdHREdWJ4RzNlN3B6YXpqeFlPR1A2NGttNktDY1RSZ09SWG9TdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQvMTkvZWRpdCI7fXM6MTU6ImFkbWluX2xvZ2dlZF9pbiI7YjoxO3M6NzoidXNlcl9pZCI7Tjt9', 1747566507);

-- --------------------------------------------------------

--
-- Table structure for table `tim_manajemen`
--

CREATE TABLE `tim_manajemen` (
  `nama` varchar(50) DEFAULT NULL,
  `spesialis` varchar(29) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tim_manajemen`
--

INSERT INTO `tim_manajemen` (`nama`, `spesialis`, `deskripsi`) VALUES
('Muhammad Khairun Anwar', 'Pendiri', 'Dokter umum berpengalaman dengan spesialisasi di bidang kedokteran keluarga. Memimpin Klinik Haikhah dengan visi memberikan layanan kesehatan berkualitas tinggi yang terjangkau.'),
('Dr. Nihayatus Solikhah', 'Pendiri & Direktur Medis', 'Dokter spesialis penyakit dalam dengan pengalaman lebih dari 25 tahun. Bertanggung jawab atas standar medis dan pengembangan layanan kesehatan baru.'),
('Ayu', 'Manajer Operasional', 'Profesional berpengalaman di bidang manajemen kesehatan dengan fokus pada peningkatan efisiensi operasional dan kualitas layanan pasien.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `password`) VALUES
(1, 'andhika', 'qwertyuiop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_c`
--
ALTER TABLE `area_c`
  ADD PRIMARY KEY (`ruang_id`);

--
-- Indexes for table `area_d`
--
ALTER TABLE `area_d`
  ADD PRIMARY KEY (`ruang_id`);

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fitur_b`
--
ALTER TABLE `fitur_b`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ruang_id` (`ruang_id`);

--
-- Indexes for table `fitur_c`
--
ALTER TABLE `fitur_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ruang_id` (`ruang_id`);

--
-- Indexes for table `fitur_d`
--
ALTER TABLE `fitur_d`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ruang_id` (`ruang_id`);

--
-- Indexes for table `fitur_penerimaan`
--
ALTER TABLE `fitur_penerimaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ruang_id` (`ruang_id`);

--
-- Indexes for table `janji_temu`
--
ALTER TABLE `janji_temu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_misinilai`
--
ALTER TABLE `list_misinilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_misinilai` (`id_misinilai`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi_nilai`
--
ALTER TABLE `misi_nilai`
  ADD PRIMARY KEY (`id_misinilai`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `perjalanan`
--
ALTER TABLE `perjalanan`
  ADD PRIMARY KEY (`tahun`);

--
-- Indexes for table `ruang_b`
--
ALTER TABLE `ruang_b`
  ADD PRIMARY KEY (`ruang_id`);

--
-- Indexes for table `ruang_penerimaan`
--
ALTER TABLE `ruang_penerimaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fitur_penerimaan`
--
ALTER TABLE `fitur_penerimaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `janji_temu`
--
ALTER TABLE `janji_temu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fitur_b`
--
ALTER TABLE `fitur_b`
  ADD CONSTRAINT `fitur_b_ibfk_1` FOREIGN KEY (`ruang_id`) REFERENCES `ruang_b` (`ruang_id`);

--
-- Constraints for table `fitur_c`
--
ALTER TABLE `fitur_c`
  ADD CONSTRAINT `fitur_c_ibfk_1` FOREIGN KEY (`ruang_id`) REFERENCES `area_c` (`ruang_id`);

--
-- Constraints for table `fitur_d`
--
ALTER TABLE `fitur_d`
  ADD CONSTRAINT `fitur_d_ibfk_1` FOREIGN KEY (`ruang_id`) REFERENCES `area_d` (`ruang_id`);

--
-- Constraints for table `fitur_penerimaan`
--
ALTER TABLE `fitur_penerimaan`
  ADD CONSTRAINT `fitur_penerimaan_ibfk_1` FOREIGN KEY (`ruang_id`) REFERENCES `ruang_penerimaan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `list_misinilai`
--
ALTER TABLE `list_misinilai`
  ADD CONSTRAINT `list_misinilai_ibfk_1` FOREIGN KEY (`id_misinilai`) REFERENCES `misi_nilai` (`id_misinilai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
