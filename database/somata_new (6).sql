-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2024 at 02:59 PM
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
-- Database: `somata_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `fakultas_id` int(11) NOT NULL,
  `Nama_Fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`fakultas_id`, `Nama_Fakultas`) VALUES
(1, 'Fakultas Hukum'),
(2, 'Fakultas Ekonomi'),
(3, 'Fakultas Pertanian'),
(4, 'Fakultas Teknik'),
(5, 'Fakultas Ilmu Sosial dan Politik'),
(6, 'Fakultas Keguruan dan Ilmu Pendidikan'),
(7, 'Fakultas Kehutanan'),
(8, 'Fakultas Matematika dan Ilmu Pengetahuan Alam'),
(9, 'Fakultas Kedokteran dan Ilmu Kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `Jurusan_id` int(11) NOT NULL,
  `Nama_Jurusan` varchar(100) NOT NULL,
  `Fakultas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`Jurusan_id`, `Nama_Jurusan`, `Fakultas_id`) VALUES
(1, 'Ilmu Hukum', 1),
(2, 'Akuntansi', 2),
(3, 'Ilmu Ekonomi dan Studi Pembangunan', 2),
(4, 'Manajemen', 2),
(5, 'Ekonomi Islam', 2),
(6, 'Agribisnis', 3),
(7, 'Agronomi', 3),
(8, 'Agroteknologi', 3),
(9, 'Manajemen Sumberdaya Perairan', 3),
(10, 'Ilmu Peternakan', 3),
(11, 'Ilmu dan Teknologi Pangan', 3),
(12, 'Ilmu Tanah', 3),
(13, 'Ilmu Administrasi Negara', 4),
(14, 'Ilmu Pemerintahan', 4),
(15, 'Ilmu Hubungan Internasional', 4),
(16, 'Antropologi Sosial', 4),
(17, 'Sosiologi', 4),
(18, 'Ilmu Politik', 4),
(19, 'Ilmu Komunikasi', 4),
(20, 'Ilmu Sosiatri', 4),
(21, 'Teknik Arsitektur', 5),
(22, 'Teknik Elektro', 5),
(23, 'Teknik Industri', 5),
(24, 'Teknik Informatika', 5),
(25, 'Teknik Lingkungan', 5),
(26, 'Teknik Kelautan', 5),
(27, 'Teknik Kimia', 5),
(28, 'Teknik Mesin', 5),
(29, 'Teknik Perencanaan Wilayah Dan Kota', 5),
(30, 'Teknik Pertambangan', 5),
(31, 'Teknik Sipil', 5),
(32, 'Kehutanan', 6),
(33, 'Pendidikan Bahasa dan Sastra Indonesia', 7),
(34, 'Pendidikan Bahasa Inggris', 7),
(35, 'Pendidikan Bahasa Mandarin', 7),
(36, 'Pendidikan Bimbingan Dan Konseling', 7),
(37, 'Pendidikan Biologi', 7),
(38, 'Pendidikan Ekonomi', 7),
(39, 'Pendidikan Fisika', 7),
(40, 'P A U D', 7),
(41, 'Pendidikan Guru Sekolah Dasar', 7),
(42, 'Pendidikan Jasmani Kes & Rekreasi', 7),
(43, 'Pendidikan Kimia', 7),
(44, 'Pendidikan Matematika', 7),
(45, 'Pendidikan Seni Tari Dan Musik', 7),
(46, 'Pendidikan Sosiologi', 7),
(47, 'Pendidikan Pancasila & Kewarganegaraan', 7),
(48, 'Pendidikan Sejarah', 7),
(49, 'Pendidikan Geografi', 7),
(50, 'Pendidikan Kepelatihan Olahraga', 7),
(51, 'Pendidikan IPS', 7),
(52, 'Biologi', 8),
(53, 'Fisika', 8),
(54, 'Geofisika', 8),
(55, 'Ilmu Kelautan', 8),
(56, 'Kimia', 8),
(57, 'Matematika', 8),
(58, 'Sistem Komputer', 8),
(59, 'Statistik', 8),
(60, 'Sistem Informasi', 8),
(61, 'Farmasi', 9),
(62, 'Pendidikan Dokter', 9),
(63, 'Ilmu Keperawatan', 9);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_organisasi`
--

CREATE TABLE `kegiatan_organisasi` (
  `Jadwal_id` int(11) NOT NULL,
  `Organisasi_id` int(11) NOT NULL,
  `Judul_Kegiatan` varchar(255) NOT NULL,
  `Deskripisi_Kegiatan` text NOT NULL,
  `Tanggal_Kegiatan` date NOT NULL,
  `Waktu_Mulai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan_organisasi`
--

INSERT INTO `kegiatan_organisasi` (`Jadwal_id`, `Organisasi_id`, `Judul_Kegiatan`, `Deskripisi_Kegiatan`, `Tanggal_Kegiatan`, `Waktu_Mulai`) VALUES
(1, 101, 'Seminar Teknologi', 'Seminar tentang perkembangan terbaru dalam teknologi informasi.', '2024-07-01', '10:00:00'),
(2, 102, 'Pelatihan Kepemimpinan', 'Pelatihan untuk meningkatkan kemampuan kepemimpinan anggota organisasi.', '2024-07-05', '09:00:00'),
(3, 201, 'Kajian Islam', 'Kajian rutin tentang pemahaman agama Islam.', '2024-07-07', '13:00:00'),
(4, 202, 'Misa Mahasiswa', 'Misa bulanan untuk mahasiswa Katolik.', '2024-07-10', '08:00:00'),
(5, 203, 'Meditasi Bersama', 'Sesi meditasi untuk meningkatkan ketenangan batin.', '2024-07-12', '07:00:00'),
(6, 301, 'Pertukaran Pelajar', 'Informasi dan persiapan untuk program pertukaran pelajar.', '2024-07-15', '11:00:00'),
(7, 302, 'Pelatihan Pertolongan Pertama', 'Pelatihan dasar pertolongan pertama bagi anggota KSR.', '2024-07-18', '10:00:00'),
(8, 303, 'Latihan Rutin Pramuka', 'Latihan rutin dan pembekalan keterampilan kepramukaan.', '2024-07-20', '15:00:00'),
(9, 304, 'Penyuluhan Anti Narkoba', 'Penyuluhan mengenai bahaya dan pencegahan penyalahgunaan narkoba.', '2024-07-22', '09:00:00'),
(10, 305, 'Latihan Bela Diri', 'Latihan rutin bela diri untuk anggota MENWA.', '2024-07-25', '17:00:00'),
(11, 306, 'Pendakian Gunung', 'Kegiatan pendakian gunung bersama untuk anggota MAPALA.', '2024-07-28', '05:00:00'),
(12, 401, 'Pelatihan Jurnalistik', 'Pelatihan dasar jurnalistik bagi anggota UKM PP LISMA.', '2024-07-30', '14:00:00'),
(13, 402, 'Diskusi Literasi', 'Diskusi bulanan mengenai topik-topik literasi terkini.', '2024-08-01', '16:00:00'),
(14, 501, 'Kegiatan Sosial', 'Kegiatan bakti sosial untuk membantu masyarakat sekitar.', '2024-08-03', '08:00:00'),
(15, 502, 'Latihan Marching Band', 'Latihan rutin untuk persiapan lomba marching band.', '2024-08-05', '18:00:00'),
(16, 601, 'Lomba Dayung', 'Persiapan dan partisipasi dalam lomba dayung nasional.', '2024-08-07', '06:00:00'),
(17, 602, 'Kejuaraan Beladiri', 'Partisipasi dalam kejuaraan beladiri tingkat nasional.', '2024-08-10', '07:00:00'),
(18, 603, 'Latihan Terjun Payung', 'Latihan rutin terjun payung bagi anggota.', '2024-08-12', '08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_pengajuan`
--

CREATE TABLE `kegiatan_pengajuan` (
  `Pengajuan_kegiatan` int(11) NOT NULL,
  `Judul_Kegiatan` varchar(255) NOT NULL,
  `Deskripsi` text DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  `Waktu` time DEFAULT NULL,
  `Status` enum('Pending','Disetujui','Ditolak') DEFAULT NULL,
  `diajukan_oleh` varchar(20) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `status_pengajuan` enum('Menunggu','Disetujui','Ditolak') NOT NULL,
  `Jadwal_Ajuan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan_pengajuan`
--

INSERT INTO `kegiatan_pengajuan` (`Pengajuan_kegiatan`, `Judul_Kegiatan`, `Deskripsi`, `Tanggal`, `Waktu`, `Status`, `diajukan_oleh`, `tanggal_pengajuan`, `status_pengajuan`, `Jadwal_Ajuan_id`) VALUES
(1, 'Workshop Pengembangan Soft Skills', 'Workshop ini akan membahas tentang pengembangan soft skills bagi mahasiswa', '2024-07-15', '09:00:00', 'Pending', 'A01234567', '2024-06-08', 'Menunggu', NULL),
(2, 'Seminar Kewirausahaan', 'Seminar ini akan membahas strategi dan kiat-kiat dalam memulai bisnis', '2024-08-20', '13:00:00', 'Pending', 'A01234567', '2024-06-08', 'Menunggu', NULL),
(3, 'Bakti Sosial Peduli Lingkungan', 'Kegiatan ini adalah bakti sosial membersihkan lingkungan sekitar kampus', '2024-09-10', '08:00:00', 'Pending', 'A12345678', '2024-06-08', 'Menunggu', NULL),
(4, 'Diskusi Rancangan Undang-Undang Mahasiswa', 'Diskusi ini bertujuan untuk merumuskan rancangan undang-undang mahasiswa', '2024-07-25', '10:00:00', 'Pending', 'A12345678', '2024-06-08', 'Menunggu', NULL),
(5, 'Penggalangan Dana Beasiswa Mahasiswa', 'Kegiatan ini bertujuan untuk menggalang dana guna memberikan beasiswa kepada mahasiswa', '2024-08-30', '14:00:00', 'Pending', 'A12345678', '2024-06-08', 'Menunggu', NULL),
(6, 'Kajian Islam tentang Ukhuwah Islamiyah', 'Kajian ini akan membahas tentang pentingnya ukhuwah Islamiyah dalam kehidupan', '2024-07-18', '18:00:00', 'Pending', 'A23456789', '2024-06-08', 'Menunggu', NULL),
(7, 'Khutbah Jumat Tema Ramadhan', 'Khutbah Jumat kali ini akan mengangkat tema tentang keutamaan beribadah di bulan Ramadhan', '2024-08-02', '12:00:00', 'Pending', 'A23456789', '2024-06-08', 'Menunggu', NULL),
(8, 'Kajian Kitab Kuning', 'Kajian ini akan membahas kitab kuning dalam kehidupan sehari-hari', '2024-09-05', '19:00:00', 'Pending', 'A23456789', '2024-06-08', 'Menunggu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_pribadi`
--

CREATE TABLE `kegiatan_pribadi` (
  `id_jadwal_kegiatan` int(11) NOT NULL,
  `id_pengguna` varchar(255) NOT NULL,
  `judul_kegiatan` varchar(255) NOT NULL,
  `deskripsi_kegiatan` text NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan_pribadi`
--

INSERT INTO `kegiatan_pribadi` (`id_jadwal_kegiatan`, `id_pengguna`, `judul_kegiatan`, `deskripsi_kegiatan`, `tanggal_mulai`, `tanggal_selesai`, `waktu_mulai`, `waktu_selesai`, `lokasi`) VALUES
(1, 'A12345678', 'Meeting Proyek', 'Diskusi mengenai perkembangan proyek tugas akhir.', '2024-06-10', '2024-06-10', '10:00:00', '12:00:00', 'Ruang 101, Gedung A'),
(2, 'A12345678', 'Praktikum Lab', 'Praktikum mingguan di laboratorium jaringan.', '2024-06-11', '2024-06-11', '08:00:00', '11:00:00', 'Lab Jaringan, Gedung B'),
(3, 'A12345678', 'Kelas Matematika', 'Kelas reguler mata kuliah Matematika Diskrit.', '2024-06-12', '2024-06-12', '13:00:00', '15:00:00', 'Ruang 204, Gedung C'),
(4, 'A12345678', 'Sesi Bimbingan', 'Bimbingan dengan dosen pembimbing terkait tugas akhir.', '2024-06-13', '2024-06-13', '09:00:00', '10:00:00', 'Ruang Dosen, Gedung D'),
(5, 'A12345678', 'Workshop Pemrograman', 'Workshop mengenai teknik pemrograman terbaru.', '2024-06-14', '2024-06-14', '14:00:00', '17:00:00', 'Aula Gedung E'),
(6, 'B23456789', 'Kelas Algoritma', 'Kelas reguler mata kuliah Algoritma dan Struktur Data.', '2024-06-10', '2024-06-10', '08:00:00', '10:00:00', 'Ruang 301, Gedung F'),
(7, 'B23456789', 'Praktikum Kimia', 'Praktikum mingguan di laboratorium kimia.', '2024-06-11', '2024-06-11', '09:00:00', '11:00:00', 'Lab Kimia, Gedung G'),
(8, 'B23456789', 'Pertemuan Kelompok Studi', 'Pertemuan kelompok studi untuk membahas tugas kelompok.', '2024-06-12', '2024-06-12', '13:00:00', '15:00:00', 'Ruang 305, Gedung H'),
(9, 'B23456789', 'Sesi Konsultasi', 'Konsultasi dengan dosen wali terkait rencana studi.', '2024-06-13', '2024-06-13', '10:00:00', '11:00:00', 'Ruang Dosen, Gedung I'),
(10, 'B23456789', 'Seminar Teknik Sipil', 'Seminar tentang inovasi terbaru di bidang teknik sipil.', '2024-06-14', '2024-06-14', '14:00:00', '17:00:00', 'Aula Gedung J'),
(11, 'C34567890', 'Kelas Biologi', 'Kelas reguler mata kuliah Biologi Umum.', '2024-06-10', '2024-06-10', '10:00:00', '12:00:00', 'Ruang 401, Gedung K'),
(12, 'C34567890', 'Praktikum Biologi', 'Praktikum mingguan di laboratorium biologi.', '2024-06-11', '2024-06-11', '13:00:00', '15:00:00', 'Lab Biologi, Gedung L'),
(13, 'C34567890', 'Pertemuan Organisasi', 'Rapat bulanan organisasi kemahasiswaan.', '2024-06-12', '2024-06-12', '15:00:00', '17:00:00', 'Ruang 402, Gedung M'),
(14, 'C34567890', 'Sesi Bimbingan', 'Bimbingan dengan dosen pembimbing terkait skripsi.', '2024-06-13', '2024-06-13', '09:00:00', '10:00:00', 'Ruang Dosen, Gedung N'),
(15, 'C34567890', 'Workshop Kewirausahaan', 'Workshop tentang peluang dan tantangan dalam berwirausaha.', '2024-06-14', '2024-06-14', '14:00:00', '17:00:00', 'Aula Gedung O'),
(16, 'D45678901', 'Kelas Fisika', 'Kelas reguler mata kuliah Fisika Dasar.', '2024-06-10', '2024-06-10', '08:00:00', '10:00:00', 'Ruang 501, Gedung P'),
(17, 'D45678901', 'Praktikum Fisika', 'Praktikum mingguan di laboratorium fisika.', '2024-06-11', '2024-06-11', '09:00:00', '11:00:00', 'Lab Fisika, Gedung Q'),
(18, 'D45678901', 'Diskusi Kelompok', 'Diskusi kelompok untuk proyek akhir semester.', '2024-06-12', '2024-06-12', '11:00:00', '13:00:00', 'Ruang 502, Gedung R'),
(19, 'D45678901', 'Sesi Konsultasi', 'Konsultasi dengan dosen wali mengenai prestasi akademik.', '2024-06-13', '2024-06-13', '10:00:00', '11:00:00', 'Ruang Dosen, Gedung S'),
(20, 'D45678901', 'Seminar Pendidikan', 'Seminar tentang inovasi dalam metode pengajaran.', '2024-06-14', '2024-06-14', '14:00:00', '17:00:00', 'Aula Gedung T'),
(21, 'E56789012', 'Kelas Kimia', 'Kelas reguler mata kuliah Kimia Dasar.', '2024-06-10', '2024-06-10', '10:00:00', '12:00:00', 'Ruang 601, Gedung U'),
(22, 'E56789012', 'Praktikum Kimia', 'Praktikum mingguan di laboratorium kimia.', '2024-06-11', '2024-06-11', '13:00:00', '15:00:00', 'Lab Kimia, Gedung V'),
(23, 'E56789012', 'Pertemuan Proyek', 'Pertemuan kelompok proyek kimia organik.', '2024-06-12', '2024-06-12', '15:00:00', '17:00:00', 'Ruang 602, Gedung W'),
(24, 'E56789012', 'Sesi Bimbingan', 'Bimbingan dengan dosen pembimbing terkait proyek penelitian.', '2024-06-13', '2024-06-13', '09:00:00', '10:00:00', 'Ruang Dosen, Gedung X'),
(25, 'E56789012', 'Workshop Lingkungan', 'Workshop tentang pengelolaan lingkungan dan sampah.', '2024-06-14', '2024-06-14', '14:00:00', '17:00:00', 'Aula Gedung Y');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi_kategori`
--

CREATE TABLE `organisasi_kategori` (
  `Kategori_id` int(11) NOT NULL,
  `Nama_Kategori` varchar(50) NOT NULL,
  `Deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organisasi_kategori`
--

INSERT INTO `organisasi_kategori` (`Kategori_id`, `Nama_Kategori`, `Deskripsi`) VALUES
(1, 'Pemerintahan', 'Organisasi yang bergerak di bidang pemerintahan dan politik'),
(2, 'Keagamaan', 'Organisasi yang bergerak di bidang keagamaan dan kerohanian'),
(3, 'Khusus', 'Organisasi dengan fokus pada bidang tertentu, seperti sains, teknologi, atau seni'),
(4, 'Penalaran', 'Organisasi yang fokus pada pengembangan penalaran dan logika'),
(5, 'Kesenian', 'Organisasi yang fokus pada pengembangan bakat seni dan budaya'),
(6, 'Olahraga', 'Organisasi yang fokus pada pengembangan bakat olahraga dan kebugaran');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi_tanggapan`
--

CREATE TABLE `organisasi_tanggapan` (
  `masukan_id` int(11) NOT NULL,
  `organisasi_id` int(11) NOT NULL,
  `masukan` text NOT NULL,
  `Kemahasiswaan_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar_anggota_ormawa`
--

CREATE TABLE `pendaftar_anggota_ormawa` (
  `Pendaftar_id` int(11) NOT NULL,
  `Mahasiswa_id` varchar(11) NOT NULL,
  `Organisasi_id` int(11) NOT NULL,
  `Tanggal_Pendaftaran` date NOT NULL,
  `Status_Verifikasi` enum('Menunggu','Disetujui','Ditolak','') NOT NULL,
  `Motivasi_Ikut_Organisasi` text NOT NULL,
  `Devisi_Dipilih` varchar(255) NOT NULL,
  `Sertifikat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftar_anggota_ormawa`
--

INSERT INTO `pendaftar_anggota_ormawa` (`Pendaftar_id`, `Mahasiswa_id`, `Organisasi_id`, `Tanggal_Pendaftaran`, `Status_Verifikasi`, `Motivasi_Ikut_Organisasi`, `Devisi_Dipilih`, `Sertifikat`) VALUES
(1, 'A23456789', 101, '2024-06-01', 'Menunggu', 'Saya tertarik dengan kegiatan BEM dan ingin berkontribusi dalam meningkatkan kualitas kehidupan kampus.', 'Biro Komunikasi', NULL),
(2, 'B34567890', 201, '2024-06-02', 'Menunggu', 'Saya ingin bergabung dengan BKMI karena ingin mendalami ilmu agama Islam dan berpartisipasi dalam kegiatan sosial.', 'Bidang Keilmuan', NULL),
(3, 'C45678901', 301, '2024-06-03', 'Menunggu', 'Saya tertarik dengan program AIESEC yang menawarkan kesempatan untuk mengembangkan kemampuan kepemimpinan dan keterampilan profesional.', 'Bidang Pemasaran', NULL),
(4, 'D56789012', 401, '2024-06-04', 'Menunggu', 'Saya ingin menjadi bagian dari UKM PP LISMA untuk mengasah kemampuan menulis dan berpartisipasi dalam pengembangan media kampus.', 'Redaksi', NULL),
(5, 'E67890123', 501, '2024-06-05', 'Menunggu', 'Saya memiliki minat dalam seni dan ingin bergabung dengan Sarang Semut untuk mengekspresikan diri melalui seni rupa.', 'Komite Seni Visual', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman_hasil`
--

CREATE TABLE `pengumuman_hasil` (
  `Pengumuman_id` int(11) NOT NULL,
  `Pendaftar_id` int(11) NOT NULL,
  `Isi_Pengumuman` text NOT NULL,
  `Organisasi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postingan_komentar`
--

CREATE TABLE `postingan_komentar` (
  `Komentar_id` int(11) NOT NULL,
  `Mahasiswa_id` varchar(20) NOT NULL,
  `Postingan_id` int(11) NOT NULL,
  `Isi_Komentar` text NOT NULL,
  `Tanggal_Komentar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postingan_komentar`
--

INSERT INTO `postingan_komentar` (`Komentar_id`, `Mahasiswa_id`, `Postingan_id`, `Isi_Komentar`, `Tanggal_Komentar`) VALUES
(1, 'A01234567', 1, 'Saya sangat tertarik untuk bergabung!', '2024-01-11'),
(2, 'A12345678', 1, 'Apakah ada persyaratan khusus?', '2024-01-12'),
(3, 'A12345679', 2, 'Informasi yang sangat membantu, terima kasih!', '2024-01-06'),
(4, 'A23456789', 3, 'Saya akan datang setiap Jumat!', '2024-02-02'),
(5, 'B23456789', 4, 'Acaranya sangat seru, saya akan ikut!', '2024-03-16'),
(6, 'B34567890', 5, 'Bagaimana cara mendaftar magang?', '2024-02-21'),
(7, 'C34567890', 6, 'Pelatihan yang sangat bagus untuk pemula.', '2024-01-26'),
(8, 'C45678901', 7, 'Saya ingin belajar menulis berita.', '2024-03-06'),
(9, 'D45678901', 8, 'Workshop ini sangat menarik!', '2024-03-01'),
(10, 'D56789012', 9, 'Saya akan mendaftar kejuaraan.', '2024-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `postingan_list`
--

CREATE TABLE `postingan_list` (
  `Postingan_id` int(11) NOT NULL,
  `Organisasi_id` int(11) NOT NULL,
  `Judul_Topik` varchar(255) NOT NULL,
  `Isi_Postingan` text NOT NULL,
  `tanggal_Pembuatan` datetime NOT NULL,
  `Status_Publikasi` enum('Terbit','Draft','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postingan_list`
--

INSERT INTO `postingan_list` (`Postingan_id`, `Organisasi_id`, `Judul_Topik`, `Isi_Postingan`, `tanggal_Pembuatan`, `Status_Publikasi`) VALUES
(1, 101, 'Pembukaan Penerimaan Anggota Baru', 'Kami membuka penerimaan anggota baru untuk periode 2024. Bergabunglah bersama kami untuk menjadi bagian dari perubahan!', '2024-01-10 00:00:00', 'Terbit'),
(2, 102, 'Sosialisasi Kebijakan Kampus', 'Ayo ikuti sosialisasi kebijakan baru kampus yang akan diselenggarakan pada tanggal 15 Januari 2024.', '2024-01-05 00:00:00', 'Terbit'),
(3, 201, 'Kajian Rutin BKMI', 'BKMI UNTAN mengadakan kajian rutin setiap hari Jumat. Yuk, kita tambah ilmu dan amal bersama-sama!', '2024-02-01 00:00:00', 'Terbit'),
(4, 202, 'Perayaan Paskah Bersama KMK', 'KMK UNTAN mengundang seluruh mahasiswa untuk merayakan Paskah bersama pada tanggal 10 April 2024.', '2024-03-15 00:00:00', 'Terbit'),
(5, 301, 'Program Magang Internasional', 'AISEC in UNTAN kembali membuka program magang internasional. Jangan lewatkan kesempatan ini!', '2024-02-20 00:00:00', 'Terbit'),
(6, 303, 'Pelatihan Dasar Pramuka', 'Pelatihan dasar untuk anggota baru Pramuka UNTAN akan dimulai bulan depan. Segera daftar!', '2024-01-25 00:00:00', 'Terbit'),
(7, 401, 'Pelatihan Jurnalistik', 'UKM PP LISMA UNTAN mengadakan pelatihan jurnalistik untuk anggota baru. Yuk, ikut belajar menulis berita!', '2024-03-05 00:00:00', 'Terbit'),
(8, 501, 'Workshop Teater Sarang Semut', 'Workshop teater akan diadakan oleh Sarang Semut UNTAN pada tanggal 20 Maret 2024. Ayo, ikut serta!', '2024-02-28 00:00:00', 'Terbit'),
(9, 602, 'Kejuaraan Beladiri Antar Kampus', 'Pobu UNTAN akan mengadakan kejuaraan beladiri antar kampus se-Indonesia. Jangan lewatkan!', '2024-04-01 00:00:00', 'Terbit'),
(10, 603, 'Latihan Terjun Payung', 'UKM Terjun Payung UNTAN mengajak seluruh mahasiswa untuk mencoba latihan terjun payung bulan depan.', '2024-03-20 00:00:00', 'Draft');

-- --------------------------------------------------------

--
-- Table structure for table `postingan_share`
--

CREATE TABLE `postingan_share` (
  `id_share` int(11) NOT NULL,
  `id_postingan` int(11) NOT NULL,
  `dibagikan_oleh` varchar(20) NOT NULL,
  `dibagikan_ke` varchar(255) NOT NULL,
  `tanggal_dibagikan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postingan_share`
--

INSERT INTO `postingan_share` (`id_share`, `id_postingan`, `dibagikan_oleh`, `dibagikan_ke`, `tanggal_dibagikan`) VALUES
(1, 1, 'A01234567', 'Teman-teman di grup WhatsApp', '2024-01-11 10:30:00'),
(2, 2, 'A12345678', 'Keluarga', '2024-01-06 14:20:00'),
(3, 3, 'A12345679', 'Grup Studi Kampus', '2024-02-02 08:15:00'),
(4, 4, 'A23456789', 'Komunitas Gereja', '2024-03-16 12:45:00'),
(5, 5, 'B23456789', 'Teman SMA', '2024-02-21 09:00:00'),
(6, 6, 'B34567890', 'Kelompok Hobi', '2024-01-26 11:30:00'),
(7, 7, 'C34567890', 'Grup Diskusi Akademik', '2024-03-06 16:50:00'),
(8, 8, 'C45678901', 'Teman-teman Teater', '2024-03-01 13:40:00'),
(9, 9, 'D45678901', 'Forum Beladiri', '2024-04-02 10:10:00'),
(10, 10, 'D56789012', 'Komunitas Olahraga', '2024-03-21 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `postingan_suka`
--

CREATE TABLE `postingan_suka` (
  `Like_id` int(11) NOT NULL,
  `Mahasiswa_id` varchar(20) NOT NULL,
  `Postingan_id` int(11) NOT NULL,
  `Tanggal_Like` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postingan_suka`
--

INSERT INTO `postingan_suka` (`Like_id`, `Mahasiswa_id`, `Postingan_id`, `Tanggal_Like`) VALUES
(1, 'A01234567', 1, '2024-01-11'),
(2, 'A12345678', 2, '2024-01-06'),
(3, 'A12345679', 3, '2024-02-02'),
(4, 'A23456789', 4, '2024-03-16'),
(5, 'B23456789', 5, '2024-02-21'),
(6, 'B34567890', 6, '2024-01-26'),
(7, 'C34567890', 7, '2024-03-06'),
(8, 'C45678901', 8, '2024-03-01'),
(9, 'D45678901', 9, '2024-04-02'),
(10, 'D56789012', 10, '2024-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `postingan_tanggapan`
--

CREATE TABLE `postingan_tanggapan` (
  `Tanggapan_id` int(11) NOT NULL,
  `postingan_id` int(11) NOT NULL,
  `Tanggapan` text NOT NULL,
  `Kemahasiswaan_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `progja_list`
--

CREATE TABLE `progja_list` (
  `Progja_id` int(11) NOT NULL,
  `Organisasi_id` int(11) NOT NULL,
  `Judul_Progja` varchar(255) NOT NULL,
  `Tujuan` text NOT NULL,
  `Sasaran` text NOT NULL,
  `Indikator pencapaian` text NOT NULL,
  `target` text NOT NULL,
  `Tanggal_Mulai` date NOT NULL,
  `Tanggal_Selesai` date NOT NULL,
  `Status` enum('Diajukan','Draft','Disetujui','Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `progja_list`
--

INSERT INTO `progja_list` (`Progja_id`, `Organisasi_id`, `Judul_Progja`, `Tujuan`, `Sasaran`, `Indikator pencapaian`, `target`, `Tanggal_Mulai`, `Tanggal_Selesai`, `Status`) VALUES
(1, 101, 'Pelatihan Kepemimpinan', 'Meningkatkan kemampuan kepemimpinan mahasiswa', 'Mahasiswa aktif UNTAN', 'Jumlah peserta yang lulus pelatihan', '100', '2024-07-01', '2024-07-07', ''),
(2, 102, 'Rapat Anggota', 'Membahas program kerja dan evaluasi', 'Pengurus dan anggota DPM', 'Jumlah peserta rapat dan hasil evaluasi', '50', '2024-06-15', '2024-06-15', ''),
(3, 201, 'Seminar Keagamaan', 'Meningkatkan pemahaman agama Islam', 'Mahasiswa Muslim UNTAN', 'Jumlah peserta dan feedback seminar', '200', '2024-08-10', '2024-08-10', ''),
(4, 202, 'Retret Mahasiswa Katolik', 'Menguatkan iman dan kebersamaan', 'Mahasiswa Katolik UNTAN', 'Jumlah peserta dan hasil retret', '150', '2024-09-05', '2024-09-07', ''),
(5, 203, 'Pelatihan Dhamma', 'Memperdalam ajaran Buddha', 'Mahasiswa Buddha UNTAN', 'Jumlah peserta dan tingkat pemahaman', '75', '2024-10-15', '2024-10-16', ''),
(6, 301, 'Global Volunteer Program', 'Mengirim mahasiswa untuk kegiatan sukarela internasional', 'Mahasiswa UNTAN', 'Jumlah mahasiswa yang berpartisipasi', '10', '2024-11-01', '2024-12-01', ''),
(7, 302, 'Donor Darah', 'Mengumpulkan darah untuk PMI', 'Mahasiswa dan masyarakat sekitar', 'Jumlah kantong darah terkumpul', '500', '2024-06-20', '2024-06-20', ''),
(8, 303, 'Kemah Bakti', 'Meningkatkan kepedulian sosial dan lingkungan', 'Anggota Pramuka UNTAN', 'Jumlah peserta dan proyek yang berhasil', '100', '2024-07-15', '2024-07-20', ''),
(9, 304, 'Kampanye Anti Narkoba', 'Menyadarkan bahaya narkoba', 'Mahasiswa UNTAN dan masyarakat', 'Jumlah peserta kampanye dan feedback', '1000', '2024-08-01', '2024-08-02', ''),
(10, 305, 'Latihan Bela Negara', 'Meningkatkan kedisiplinan dan cinta tanah air', 'Anggota MENWA UNTAN', 'Jumlah peserta dan hasil latihan', '50', '2024-09-10', '2024-09-15', ''),
(11, 306, 'Pendakian Gunung', 'Melatih fisik dan mental', 'Anggota MAPALA UNTAN', 'Jumlah peserta dan keberhasilan pendakian', '30', '2024-10-20', '2024-10-25', ''),
(12, 401, 'Pelatihan Jurnalistik', 'Mengasah keterampilan menulis dan liputan', 'Anggota LISMA UNTAN', 'Jumlah peserta dan karya jurnalistik', '25', '2024-06-25', '2024-06-27', ''),
(13, 402, 'Majalah Kampus', 'Menerbitkan majalah kampus UNTAN', 'Seluruh mahasiswa UNTAN', 'Jumlah eksemplar terbit dan feedback pembaca', '1000', '2024-07-01', '2024-12-31', ''),
(14, 501, 'Kompetisi Futsal', 'Mengembangkan bakat dan minat olahraga futsal', 'Mahasiswa UNTAN', 'Jumlah tim yang berpartisipasi dan hasil kompetisi', '16', '2024-08-05', '2024-08-10', ''),
(15, 502, 'Parade Musik', 'Menampilkan bakat musik mahasiswa', 'Mahasiswa UNTAN dan masyarakat umum', 'Jumlah peserta dan penonton', '20', '2024-09-15', '2024-09-15', ''),
(16, 601, 'Lomba Dayung', 'Mengasah keterampilan dan sportifitas', 'Anggota UKM Dayung dan mahasiswa lainnya', 'Jumlah peserta dan hasil lomba', '50', '2024-10-05', '2024-10-07', ''),
(17, 602, 'Seminar Bela Diri', 'Meningkatkan pengetahuan dan keterampilan bela diri', 'Mahasiswa UNTAN', 'Jumlah peserta dan feedback seminar', '100', '2024-11-01', '2024-11-01', ''),
(18, 603, 'Terjun Payung', 'Melatih keberanian dan keterampilan terjun payung', 'Mahasiswa UNTAN', 'Jumlah peserta dan keberhasilan penerjunan', '20', '2024-12-01', '2024-12-05', '');

-- --------------------------------------------------------

--
-- Table structure for table `progja_pengajuan`
--

CREATE TABLE `progja_pengajuan` (
  `Pengajuan_id` int(11) NOT NULL,
  `Mahasiswa_id` varchar(20) NOT NULL,
  `Program_Kerja_id` int(11) NOT NULL,
  `Tanggal_Pengajuan` date DEFAULT NULL,
  `Status` enum('Pending','Disetujui','Ditolak') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `progja_pengajuan`
--

INSERT INTO `progja_pengajuan` (`Pengajuan_id`, `Mahasiswa_id`, `Program_Kerja_id`, `Tanggal_Pengajuan`, `Status`) VALUES
(1, 'A01234567', 1, '2024-06-01', 'Pending'),
(3, 'A12345679', 3, '2024-06-05', 'Disetujui'),
(5, 'B23456789', 5, '2024-06-09', 'Pending'),
(7, 'C34567890', 7, '2024-06-13', 'Ditolak'),
(9, 'D45678901', 9, '2024-06-17', 'Pending'),
(10, 'D56789012', 10, '2024-06-19', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `progja_tanggapan`
--

CREATE TABLE `progja_tanggapan` (
  `Tanggapan_Progja_id` int(11) NOT NULL,
  `Progja_id` int(11) DEFAULT NULL,
  `organisasi_id` int(11) NOT NULL,
  `masukan` text NOT NULL,
  `Kemahasiswaan_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_kemahasiswaan`
--

CREATE TABLE `user_kemahasiswaan` (
  `Kemahasiswaan_id` varchar(20) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_kemahasiswaan`
--

INSERT INTO `user_kemahasiswaan` (`Kemahasiswaan_id`, `Password`) VALUES
('KMHUNTAN01', 'UNTANEMAS2045');

-- --------------------------------------------------------

--
-- Table structure for table `user_mahasiswa`
--

CREATE TABLE `user_mahasiswa` (
  `NIM` varchar(20) NOT NULL,
  `Nama_Lengkap` varchar(50) NOT NULL,
  `Jurusan_id` int(11) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_Kelamin` enum('L','P') NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `No_HP` varchar(20) NOT NULL,
  `Domisili` text NOT NULL,
  `Angkatan` int(11) NOT NULL,
  `Status_Mahasiswa` enum('Aktif','Cuti','Lulus','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_mahasiswa`
--

INSERT INTO `user_mahasiswa` (`NIM`, `Nama_Lengkap`, `Jurusan_id`, `Tanggal_Lahir`, `Jenis_Kelamin`, `Email`, `Password`, `No_HP`, `Domisili`, `Angkatan`, `Status_Mahasiswa`) VALUES
('A01234567', 'Ahmad Junaedi', 24, '1998-10-05', 'L', 'ahmad.junaedi@example.com', 'pass890', '080123456789', 'Palembang', 2018, 'Aktif'),
('A12345678', 'Adi Wijaya', 1, '2000-01-15', 'L', 'adi.wijaya@example.com', 'pass123', '081234567890', 'Jakarta', 2020, 'Aktif'),
('A12345679', 'Agus Wibowo', 29, '1999-06-15', 'L', 'agus.wibowo@example.com', 'pass890', '080123456780', 'Palembang', 2019, 'Aktif'),
('A23456789', 'Amanda Sari', 1, '2002-01-12', 'P', 'amanda.sari@example.com', 'pass123', '081234567891', 'Jakarta', 2021, 'Aktif'),
('B23456789', 'Budi Santoso', 2, '1999-02-20', 'L', 'budi.santoso@example.com', 'pass456', '082345678901', 'Bandung', 2020, 'Aktif'),
('B34567890', 'Bintang Mahardika', 3, '2001-03-22', 'L', 'bintang.mahardika@example.com', 'pass456', '082345678902', 'Bandung', 2020, 'Aktif'),
('C34567890', 'Citra Dewi', 6, '2001-03-25', 'P', 'citra.dewi@example.com', 'pass789', '083456789012', 'Surabaya', 2021, 'Aktif'),
('C45678901', 'Cahyani Putri', 8, '2002-05-15', 'P', 'cahyani.putri@example.com', 'pass789', '083456789013', 'Surabaya', 2021, 'Aktif'),
('D45678901', 'Dewi Lestari', 13, '2000-04-30', 'P', 'dewi.lestari@example.com', 'pass012', '084567890123', 'Yogyakarta', 2019, 'Aktif'),
('D56789012', 'Dwi Kusuma', 15, '2001-07-17', 'L', 'dwi.kusuma@example.com', 'pass012', '084567890124', 'Yogyakarta', 2020, 'Aktif'),
('E56789012', 'Eko Prasetyo', 21, '1998-05-10', 'L', 'eko.prasetyo@example.com', 'pass345', '085678901234', 'Malang', 2018, 'Aktif'),
('E67890123', 'Eka Putra', 24, '2000-09-19', 'L', 'eka.putra@example.com', 'pass345', '085678901235', 'Malang', 2019, 'Aktif'),
('F67890123', 'Fitri Handayani', 33, '2000-06-15', 'P', 'fitri.handayani@example.com', 'pass678', '086789012345', 'Semarang', 2020, 'Aktif'),
('F78901234', 'Fauzan Ramadhan', 34, '2003-11-21', 'L', 'fauzan.ramadhan@example.com', 'pass678', '086789012346', 'Semarang', 2022, 'Aktif'),
('G78901234', 'Gilang Saputra', 52, '2001-07-20', 'L', 'gilang.saputra@example.com', 'pass901', '087890123456', 'Makassar', 2021, 'Aktif'),
('G89012345', 'Gita Lestari', 56, '2002-12-25', 'P', 'gita.lestari@example.com', 'pass901', '087890123457', 'Makassar', 2021, 'Aktif'),
('H89012345', 'Hendra Kusuma', 61, '1999-08-25', 'L', 'hendra.kusuma@example.com', 'pass234', '088901234567', 'Medan', 2019, 'Aktif'),
('H90123456', 'Hadi Susanto', 60, '2001-02-28', 'L', 'hadi.susanto@example.com', 'pass234', '088901234568', 'Medan', 2020, 'Aktif'),
('I01234567', 'Indira Saraswati', 61, '2003-04-30', 'P', 'indira.saraswati@example.com', 'pass567', '089012345679', 'Denpasar', 2022, 'Aktif'),
('I90123456', 'Indah Permata', 62, '2000-09-30', 'P', 'indah.permata@example.com', 'pass567', '089012345678', 'Denpasar', 2020, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user_organisasi`
--

CREATE TABLE `user_organisasi` (
  `Organisasi_id` int(11) NOT NULL,
  `Nama_Organisasi` varchar(50) NOT NULL,
  `Nama_Lengkap_Organisasi` varchar(225) NOT NULL,
  `Ketua_Umum` varchar(255) NOT NULL,
  `Deskripsi_Organisasi` text NOT NULL,
  `Periode Kepengurusan` int(11) NOT NULL,
  `Instagram` varchar(255) NOT NULL,
  `Youtube` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Status_Organisasi` enum('Terdaftar','Nonaktif','','') NOT NULL,
  `Kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_organisasi`
--

INSERT INTO `user_organisasi` (`Organisasi_id`, `Nama_Organisasi`, `Nama_Lengkap_Organisasi`, `Ketua_Umum`, `Deskripsi_Organisasi`, `Periode Kepengurusan`, `Instagram`, `Youtube`, `Email`, `Status_Organisasi`, `Kategori_id`) VALUES
(101, 'BEM UNTAN', 'Badan Eksekutif Mahasiswa Universitas Tanjungpura', 'Nama Ketua BEM', 'Deskripsi singkat tentang BEM UNTAN', 2024, 'instagram_bem', 'youtube_bem', 'email_bem@example.com', 'Terdaftar', 1),
(102, 'DPM UNTAN', 'Dewan Perwakilan Mahasiswa Universitas Tanjungpura', 'Nama Ketua DPM', 'Deskripsi singkat tentang DPM UNTAN', 2024, 'instagram_dpm', 'youtube_dpm', 'email_dpm@example.com', 'Terdaftar', 1),
(201, 'BKMI UNTAN', 'Badan Kerohanian Mahasiswa Islam Universitas Tanjungpura', 'Nama Ketua BKMI', 'Deskripsi singkat tentang BKMI UNTAN', 2024, 'instagram_bkmi', 'youtube_bkmi', 'email_bkmi@example.com', 'Terdaftar', 2),
(202, 'KMK UNTAN', 'Keluarga Mahasiswa Katolik Universitas Tanjungpura', 'Nama Ketua KMK', 'Deskripsi singkat tentang KMK UNTAN', 2024, 'instagram_kmk', 'youtube_kmk', 'email_kmk@example.com', 'Terdaftar', 2),
(203, 'KBMB UNTAN', 'Keluarga Besar Mahasiswa Buddha Universitas Tanjungpura', 'Nama Ketua KBMB', 'Deskripsi singkat tentang KBMB UNTAN', 2024, 'instagram_kbmb', 'youtube_kbmb', 'email_kbmb@example.com', 'Terdaftar', 2),
(301, 'AISEC in UNTAN', 'AISEC in Universitas Tanjungpura', 'Nama Ketua AISEC', 'Deskripsi singkat tentang AISEC in UNTAN', 2024, 'instagram_aiesec', 'youtube_aiesec', 'email_aiesec@example.com', 'Terdaftar', 3),
(302, 'KSR PMI UNTAN', 'Korps Sukarela Palang Merah Indonesia Universitas Tanjungpura', 'Nama Ketua KSR', 'Deskripsi singkat tentang KSR PMI UNTAN', 2024, 'instagram_ksr', 'youtube_ksr', 'email_ksr@example.com', 'Terdaftar', 3),
(303, 'Pramuka UNTAN', 'Pramuka Universitas Tanjungpura', 'Nama Ketua Pramuka', 'Deskripsi singkat tentang Pramuka UNTAN', 2024, 'instagram_pramuka', 'youtube_pramuka', 'email_pramuka@example.com', 'Terdaftar', 3),
(304, 'GEMA PEDULI NAPZA', 'Gerakan Mahasiswa Peduli NAPZA Universitas Tanjungpura', 'Nama Ketua GEMA', 'Deskripsi singkat tentang GEMA PEDULI NAPZA', 2024, 'instagram_gema', 'youtube_gema', 'email_gema@example.com', 'Terdaftar', 3),
(305, 'MENWA UNTAN', 'Resimen Mahasiswa Universitas Tanjungpura', 'Nama Ketua MENWA', 'Deskripsi singkat tentang MENWA UNTAN', 2024, 'instagram_menwa', 'youtube_menwa', 'email_menwa@example.com', 'Terdaftar', 3),
(306, 'MAPALA UNTAN', 'Mahasiswa Pecinta Alam Universitas Tanjungpura', 'Nama Ketua MAPALA', 'Deskripsi singkat tentang MAPALA UNTAN', 2024, 'instagram_mapala', 'youtube_mapala', 'email_mapala@example.com', 'Terdaftar', 3),
(401, 'UKM PP LISMA UNTAN', 'Unit Kegiatan Mahasiswa Penerbitan dan Pers Lembaga Informasi Mahasiswa Universitas Tanjungpura', 'Nama Ketua LISMA', 'Deskripsi singkat tentang UKM PP LISMA UNTAN', 2024, 'instagram_lisma', 'youtube_lisma', 'email_lisma@example.com', 'Terdaftar', 4),
(402, 'LPM UNTAN', 'Lembaga Pers Mahasiswa Universitas Tanjungpura', 'Nama Ketua LPM', 'Deskripsi singkat tentang LPM UNTAN', 2024, 'instagram_lpm', 'youtube_lpm', 'email_lpm@example.com', 'Terdaftar', 4),
(501, 'Sarang Semut', 'UKM Sarang Semut Universitas Tanjungpura', 'Nama Ketua Sarang Semut', 'Deskripsi singkat tentang Sarang Semut', 2024, 'instagram_sarangsemut', 'youtube_sarangsemut', 'email_sarangsemut@example.com', 'Terdaftar', 5),
(502, 'Marching Band', 'Marching Band Universitas Tanjungpura', 'Nama Ketua Marching Band', 'Deskripsi singkat tentang Marching Band UNTAN', 2024, 'instagram_marchingband', 'youtube_marchingband', 'email_marchingband@example.com', 'Terdaftar', 5),
(601, 'UKM Dayung', 'Unit Kegiatan Mahasiswa Dayung Universitas Tanjungpura', 'Nama Ketua UKM Dayung', 'Deskripsi singkat tentang UKM Dayung UNTAN', 2024, 'instagram_dayung', 'youtube_dayung', 'email_dayung@example.com', 'Terdaftar', 6),
(602, 'Pobu UNTAN', 'Persatuan Olahraga Beladiri Universitas Tanjungpura', 'Nama Ketua Pobu', 'Deskripsi singkat tentang Pobu UNTAN', 2024, 'instagram_pobu', 'youtube_pobu', 'email_pobu@example.com', 'Terdaftar', 6),
(603, 'Terpa UNTAN', 'Terjun Payung Universitas Tanjungpura', 'Nama Ketua Terpa', 'Deskripsi singkat tentang Terpa UNTAN', 2024, 'instagram_terpa', 'youtube_terpa', 'email_terpa@example.com', 'Terdaftar', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`fakultas_id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`Jurusan_id`),
  ADD KEY `Fakultas_id` (`Fakultas_id`);

--
-- Indexes for table `kegiatan_organisasi`
--
ALTER TABLE `kegiatan_organisasi`
  ADD PRIMARY KEY (`Jadwal_id`),
  ADD KEY `Organisasi_id` (`Organisasi_id`);

--
-- Indexes for table `kegiatan_pengajuan`
--
ALTER TABLE `kegiatan_pengajuan`
  ADD PRIMARY KEY (`Pengajuan_kegiatan`),
  ADD KEY `diajukan_oleh` (`diajukan_oleh`),
  ADD KEY `Jadwal_Ajuan_id` (`Jadwal_Ajuan_id`);

--
-- Indexes for table `kegiatan_pribadi`
--
ALTER TABLE `kegiatan_pribadi`
  ADD PRIMARY KEY (`id_jadwal_kegiatan`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `organisasi_kategori`
--
ALTER TABLE `organisasi_kategori`
  ADD PRIMARY KEY (`Kategori_id`);

--
-- Indexes for table `organisasi_tanggapan`
--
ALTER TABLE `organisasi_tanggapan`
  ADD PRIMARY KEY (`masukan_id`),
  ADD KEY `Kemahasiswaan_id` (`Kemahasiswaan_id`),
  ADD KEY `organisasi_id` (`organisasi_id`);

--
-- Indexes for table `pendaftar_anggota_ormawa`
--
ALTER TABLE `pendaftar_anggota_ormawa`
  ADD PRIMARY KEY (`Pendaftar_id`),
  ADD KEY `Organisasi_id` (`Organisasi_id`),
  ADD KEY `Mahasiswa_id` (`Mahasiswa_id`);

--
-- Indexes for table `pengumuman_hasil`
--
ALTER TABLE `pengumuman_hasil`
  ADD PRIMARY KEY (`Pengumuman_id`),
  ADD KEY `Pendaftar_id` (`Pendaftar_id`),
  ADD KEY `Organisasi_id` (`Organisasi_id`);

--
-- Indexes for table `postingan_komentar`
--
ALTER TABLE `postingan_komentar`
  ADD PRIMARY KEY (`Komentar_id`),
  ADD KEY `Mahasiswa_id` (`Mahasiswa_id`),
  ADD KEY `Postingan_id` (`Postingan_id`);

--
-- Indexes for table `postingan_list`
--
ALTER TABLE `postingan_list`
  ADD PRIMARY KEY (`Postingan_id`),
  ADD KEY `Organisasi_id` (`Organisasi_id`);

--
-- Indexes for table `postingan_share`
--
ALTER TABLE `postingan_share`
  ADD PRIMARY KEY (`id_share`),
  ADD KEY `dibagikan_oleh` (`dibagikan_oleh`),
  ADD KEY `id_postingan` (`id_postingan`);

--
-- Indexes for table `postingan_suka`
--
ALTER TABLE `postingan_suka`
  ADD PRIMARY KEY (`Like_id`),
  ADD KEY `Mahasiswa_id` (`Mahasiswa_id`),
  ADD KEY `Postingan_id` (`Postingan_id`);

--
-- Indexes for table `postingan_tanggapan`
--
ALTER TABLE `postingan_tanggapan`
  ADD PRIMARY KEY (`Tanggapan_id`),
  ADD KEY `Kemahasiswaan_id` (`Kemahasiswaan_id`),
  ADD KEY `postingan_id` (`postingan_id`);

--
-- Indexes for table `progja_list`
--
ALTER TABLE `progja_list`
  ADD PRIMARY KEY (`Progja_id`),
  ADD KEY `Organisasi_id` (`Organisasi_id`);

--
-- Indexes for table `progja_pengajuan`
--
ALTER TABLE `progja_pengajuan`
  ADD PRIMARY KEY (`Pengajuan_id`),
  ADD KEY `Program_Kerja_id` (`Program_Kerja_id`),
  ADD KEY `Mahasiswa_id` (`Mahasiswa_id`);

--
-- Indexes for table `progja_tanggapan`
--
ALTER TABLE `progja_tanggapan`
  ADD PRIMARY KEY (`Tanggapan_Progja_id`),
  ADD KEY `Kemahasiswaan_id` (`Kemahasiswaan_id`),
  ADD KEY `Progja_id` (`Progja_id`),
  ADD KEY `organisasi_id` (`organisasi_id`);

--
-- Indexes for table `user_kemahasiswaan`
--
ALTER TABLE `user_kemahasiswaan`
  ADD PRIMARY KEY (`Kemahasiswaan_id`);

--
-- Indexes for table `user_mahasiswa`
--
ALTER TABLE `user_mahasiswa`
  ADD PRIMARY KEY (`NIM`),
  ADD KEY `Jurusan_id` (`Jurusan_id`);

--
-- Indexes for table `user_organisasi`
--
ALTER TABLE `user_organisasi`
  ADD PRIMARY KEY (`Organisasi_id`),
  ADD KEY `Kategori_id` (`Kategori_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `Jurusan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `kegiatan_pengajuan`
--
ALTER TABLE `kegiatan_pengajuan`
  MODIFY `Pengajuan_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `kegiatan_pribadi`
--
ALTER TABLE `kegiatan_pribadi`
  MODIFY `id_jadwal_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `organisasi_tanggapan`
--
ALTER TABLE `organisasi_tanggapan`
  MODIFY `masukan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengumuman_hasil`
--
ALTER TABLE `pengumuman_hasil`
  MODIFY `Pengumuman_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postingan_komentar`
--
ALTER TABLE `postingan_komentar`
  MODIFY `Komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `postingan_share`
--
ALTER TABLE `postingan_share`
  MODIFY `id_share` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `postingan_suka`
--
ALTER TABLE `postingan_suka`
  MODIFY `Like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `postingan_tanggapan`
--
ALTER TABLE `postingan_tanggapan`
  MODIFY `Tanggapan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `progja_tanggapan`
--
ALTER TABLE `progja_tanggapan`
  MODIFY `Tanggapan_Progja_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`Fakultas_id`) REFERENCES `fakultas` (`fakultas_id`);

--
-- Constraints for table `kegiatan_organisasi`
--
ALTER TABLE `kegiatan_organisasi`
  ADD CONSTRAINT `kegiatan_organisasi_ibfk_1` FOREIGN KEY (`Organisasi_id`) REFERENCES `user_organisasi` (`Organisasi_id`);

--
-- Constraints for table `kegiatan_pengajuan`
--
ALTER TABLE `kegiatan_pengajuan`
  ADD CONSTRAINT `kegiatan_pengajuan_ibfk_2` FOREIGN KEY (`diajukan_oleh`) REFERENCES `user_mahasiswa` (`NIM`),
  ADD CONSTRAINT `kegiatan_pengajuan_ibfk_3` FOREIGN KEY (`Jadwal_Ajuan_id`) REFERENCES `kegiatan_organisasi` (`Jadwal_id`);

--
-- Constraints for table `kegiatan_pribadi`
--
ALTER TABLE `kegiatan_pribadi`
  ADD CONSTRAINT `kegiatan_pribadi_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `user_mahasiswa` (`NIM`);

--
-- Constraints for table `organisasi_tanggapan`
--
ALTER TABLE `organisasi_tanggapan`
  ADD CONSTRAINT `organisasi_tanggapan_ibfk_1` FOREIGN KEY (`Kemahasiswaan_id`) REFERENCES `user_kemahasiswaan` (`Kemahasiswaan_id`),
  ADD CONSTRAINT `organisasi_tanggapan_ibfk_2` FOREIGN KEY (`organisasi_id`) REFERENCES `user_organisasi` (`Organisasi_id`);

--
-- Constraints for table `pendaftar_anggota_ormawa`
--
ALTER TABLE `pendaftar_anggota_ormawa`
  ADD CONSTRAINT `pendaftar_anggota_ormawa_ibfk_1` FOREIGN KEY (`Organisasi_id`) REFERENCES `user_organisasi` (`Organisasi_id`),
  ADD CONSTRAINT `pendaftar_anggota_ormawa_ibfk_2` FOREIGN KEY (`Mahasiswa_id`) REFERENCES `user_mahasiswa` (`NIM`);

--
-- Constraints for table `pengumuman_hasil`
--
ALTER TABLE `pengumuman_hasil`
  ADD CONSTRAINT `pengumuman_hasil_ibfk_1` FOREIGN KEY (`Pendaftar_id`) REFERENCES `pendaftar_anggota_ormawa` (`Pendaftar_id`),
  ADD CONSTRAINT `pengumuman_hasil_ibfk_2` FOREIGN KEY (`Organisasi_id`) REFERENCES `user_organisasi` (`Organisasi_id`);

--
-- Constraints for table `postingan_komentar`
--
ALTER TABLE `postingan_komentar`
  ADD CONSTRAINT `postingan_komentar_ibfk_1` FOREIGN KEY (`Mahasiswa_id`) REFERENCES `user_mahasiswa` (`NIM`),
  ADD CONSTRAINT `postingan_komentar_ibfk_2` FOREIGN KEY (`Postingan_id`) REFERENCES `postingan_list` (`Postingan_id`);

--
-- Constraints for table `postingan_list`
--
ALTER TABLE `postingan_list`
  ADD CONSTRAINT `postingan_list_ibfk_1` FOREIGN KEY (`Organisasi_id`) REFERENCES `user_organisasi` (`Organisasi_id`);

--
-- Constraints for table `postingan_share`
--
ALTER TABLE `postingan_share`
  ADD CONSTRAINT `postingan_share_ibfk_1` FOREIGN KEY (`dibagikan_oleh`) REFERENCES `user_mahasiswa` (`NIM`),
  ADD CONSTRAINT `postingan_share_ibfk_2` FOREIGN KEY (`id_postingan`) REFERENCES `postingan_list` (`Postingan_id`);

--
-- Constraints for table `postingan_suka`
--
ALTER TABLE `postingan_suka`
  ADD CONSTRAINT `postingan_suka_ibfk_1` FOREIGN KEY (`Mahasiswa_id`) REFERENCES `user_mahasiswa` (`NIM`),
  ADD CONSTRAINT `postingan_suka_ibfk_2` FOREIGN KEY (`Postingan_id`) REFERENCES `postingan_list` (`Postingan_id`);

--
-- Constraints for table `postingan_tanggapan`
--
ALTER TABLE `postingan_tanggapan`
  ADD CONSTRAINT `postingan_tanggapan_ibfk_1` FOREIGN KEY (`Kemahasiswaan_id`) REFERENCES `user_kemahasiswaan` (`Kemahasiswaan_id`),
  ADD CONSTRAINT `postingan_tanggapan_ibfk_2` FOREIGN KEY (`postingan_id`) REFERENCES `postingan_list` (`Postingan_id`);

--
-- Constraints for table `progja_list`
--
ALTER TABLE `progja_list`
  ADD CONSTRAINT `progja_list_ibfk_1` FOREIGN KEY (`Organisasi_id`) REFERENCES `user_organisasi` (`Organisasi_id`);

--
-- Constraints for table `progja_pengajuan`
--
ALTER TABLE `progja_pengajuan`
  ADD CONSTRAINT `progja_pengajuan_ibfk_1` FOREIGN KEY (`Program_Kerja_id`) REFERENCES `progja_list` (`Progja_id`),
  ADD CONSTRAINT `progja_pengajuan_ibfk_2` FOREIGN KEY (`Mahasiswa_id`) REFERENCES `user_mahasiswa` (`NIM`);

--
-- Constraints for table `progja_tanggapan`
--
ALTER TABLE `progja_tanggapan`
  ADD CONSTRAINT `progja_tanggapan_ibfk_1` FOREIGN KEY (`Kemahasiswaan_id`) REFERENCES `user_kemahasiswaan` (`Kemahasiswaan_id`),
  ADD CONSTRAINT `progja_tanggapan_ibfk_2` FOREIGN KEY (`Progja_id`) REFERENCES `progja_list` (`Progja_id`),
  ADD CONSTRAINT `progja_tanggapan_ibfk_3` FOREIGN KEY (`organisasi_id`) REFERENCES `user_organisasi` (`Organisasi_id`);

--
-- Constraints for table `user_mahasiswa`
--
ALTER TABLE `user_mahasiswa`
  ADD CONSTRAINT `user_mahasiswa_ibfk_1` FOREIGN KEY (`Jurusan_id`) REFERENCES `jurusan` (`Jurusan_id`);

--
-- Constraints for table `user_organisasi`
--
ALTER TABLE `user_organisasi`
  ADD CONSTRAINT `user_organisasi_ibfk_1` FOREIGN KEY (`Kategori_id`) REFERENCES `organisasi_kategori` (`Kategori_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
