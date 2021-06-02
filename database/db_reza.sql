-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2021 pada 00.45
-- Versi server: 5.7.21-log
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_reza`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `id_agenda` int(11) NOT NULL,
  `nama_agenda` varchar(50) NOT NULL,
  `waktu_agenda` varchar(15) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_aspirasi`
--

CREATE TABLE `tbl_aspirasi` (
  `id_aspirasi` int(11) NOT NULL,
  `judul_aspirasi` varchar(50) NOT NULL,
  `photo_aspirasi` varchar(128) NOT NULL,
  `aspirasi` varchar(256) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_aspirasi`
--

INSERT INTO `tbl_aspirasi` (`id_aspirasi`, `judul_aspirasi`, `photo_aspirasi`, `aspirasi`, `waktu`) VALUES
(18, 'Pelayanan Memuaskan', '20-208048_transparent-social-media-icons-vector-png-social-media.png', 'Pelayanan yang memuaskan', '2020-09-11 02:00:08'),
(19, 'Tindakan Cepat Guna', 'building-computer-icons-buildings-png-clip-art.png', 'Tindakan Cepat Guna', '2020-09-11 02:00:31'),
(20, 'Respon Pengaduan', '239-2394423_masyarakat-animasi-png-transparent-png1.png', 'Respon Pengaduan', '2020-09-11 02:00:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `kode_berita` varchar(5) NOT NULL,
  `kode_kecamatan` varchar(5) NOT NULL,
  `kode_desa` varchar(5) NOT NULL,
  `kode_wisata` varchar(5) NOT NULL,
  `kode_sarana` varchar(5) NOT NULL,
  `waktu_berita` varchar(15) NOT NULL,
  `judul_berita` varchar(128) NOT NULL,
  `photo_berita` varchar(256) NOT NULL,
  `deskripsiberita1` text NOT NULL,
  `deskripsiberita2` text NOT NULL,
  `deskripsiberita3` text NOT NULL,
  `status_berita` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_budaya`
--

CREATE TABLE `tbl_budaya` (
  `id_budaya` int(11) NOT NULL,
  `kode_budaya` varchar(5) NOT NULL,
  `nama_budaya` varchar(30) NOT NULL,
  `link_budaya` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_budaya`
--

INSERT INTO `tbl_budaya` (`id_budaya`, `kode_budaya`, `nama_budaya`, `link_budaya`) VALUES
(1, 'B1', 'Tradisi Lisan', 'TradisiLisan'),
(2, 'B2', 'Manuskrip', 'Manuskrip'),
(4, 'B3', 'Adat Istiadat', 'AdatIstiadat'),
(5, 'B4', 'Ritus', 'Ritus'),
(6, 'B5', 'Pengetahuan Tradisional', 'PengetahuanTradisional'),
(7, 'B6', 'Teknologi Tradisional', 'TeknologiTradisional'),
(8, 'B7', 'Seni', 'Seni'),
(9, 'B8', 'Bahasa', 'Bahasa'),
(10, 'B9', 'Permainan Rakyat', 'PermainanRakyat'),
(11, 'B10', 'Olahraga Tradisional', 'OlahragaTradisional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_desa`
--

CREATE TABLE `tbl_desa` (
  `id_desa` int(11) NOT NULL,
  `kode_desa` int(5) NOT NULL,
  `kode_kecamatan` varchar(5) NOT NULL,
  `nama_desa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_histori_data`
--

CREATE TABLE `tbl_histori_data` (
  `id_histori` int(11) NOT NULL,
  `jenis_histori` varchar(50) NOT NULL,
  `isi_histori` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_histori_data`
--

INSERT INTO `tbl_histori_data` (`id_histori`, `jenis_histori`, `isi_histori`) VALUES
(1, 'Agenda Kegiatan', 'peresmian arak pengantin pedamatan terhadap UNESCO-2020-10-11'),
(2, 'Penghargaan', 'ADSD-building-computer-icons-buildings-png-clip-art.png'),
(3, 'Data Akun', 'Dinas Kebudayaan dan Pariwisata-hmeileni@gmail.com-default.jpg'),
(4, 'Data Aspirasi', 'dfdf-Bukit-Batu.jpg-wew'),
(5, 'Data Kontak', 'dfgdfg-ihsan@gmail.com-fdgdfg'),
(6, 'Data Pengajuan', 'WIsata Bukit Lilin-Wisata Bukit Lilin Adalah puncak yang memilik tumbuhan yang seperti lilin-Desa Kota Bumi Kec Tanjun Lubuk Oki-082280524264'),
(7, 'Data Berita', '2020-10-01-DFSDF-dsfdsf-sdfdsfds-dfsdfsd'),
(8, 'Data Media Sosial', 'asda-asd'),
(9, 'Data Misi', 'asdasdasdsad'),
(10, 'Data Visi', 'ewrewrewrew'),
(11, 'Data Struktur', 'J3-'),
(12, 'Data Struktur', 'J2-wewewe'),
(13, 'Peta Aktif', 'Data Peta Aktif'),
(14, 'Peta Tidak Aktif', 'Data Peta Tida Aktif'),
(15, 'Data Ubah Handphone', '0813-0000-1111'),
(16, 'Data Ubah Alamat', 'Jl. Pahlawan Kayu Agung, Cintaraja, Kec. Kayu Agung\r\nKabupaten Ogan Komering Ilir<br>\r\nSumatera Selatan 30869-02-09-2020'),
(17, 'Data Akun', 'Okti Permata Sari-oktipermatasari00@gmail.com-download.png'),
(18, 'Data Peta Aktif', 'Peta Aktif'),
(19, 'Data Ubah Logo', 'Ubah Logo -10-05-2021'),
(20, 'Data Ubah Alamat', 'Pagar Wangi, Dempo Utara, Kota Pagar Alam, Sumatera Selatan 31581-10-05-2021'),
(21, 'Data Berita', '2020-09-24-PETANI OKI SIAP PANEN RAYA 26 RIBU HA TANAMAN PADI DI TENGAH PANDEMI CORONA-Liputan6.com, Ogan Komering Ilir Di tengah pandemi wabah virus Corona (Covid-19), tak menyurutkan semangat para petani di Kabupaten Ogan Komering Ilir (OKI), Sumatera Selatan (Sumsel), untuk melakukan panen raya. Hamparan tanaman padi seluas 26.633 hektar di OKI, siap untuk dipanen pada puncak panen raya bulan April ini.\r\n\r\nDari luasan tersebut, produktivitas lahan yang di target mencapai 135.056 ton gabah ker'),
(22, 'Data Berita', '2020-09-28-APA BENAR, SUKU KOMERING PALEMBANG, BERKAKAK-ADIK DENGAN BATAK?-PALEMBANG, SUMATRA SELATAN, NETRALNEWS.COM - Suku Komering dalam uraian Pulau Gemantung adalah satu klan dari Suku Lampung yang berasal dari Kepaksian Sekala Brak yang telah lama bermigrasi ke dataran Sumatera Selatan pada sekitar abad ke-7. Di situ mereka beranak-pinak dan membentuk suku atau marga.\r\n\r\nNama Komering diambil dari nama Way atau Sungai di dataran Sumatera Selatan yang menandai daerah kekuasaan Komering.-Seb'),
(23, 'Data Berita', '2020-09-30-HOME / DAERAH / LEMBAGA ADAT OKU TIMUR BERIKAN GELAR KEHORMATAN ADAT KOMERING KE KAPOLRES AKBP DALIZON   KETUA LEMBAGA ADAT OKU -Home / DAERAH / Lembaga Adat OKU Timur Berikan Gelar Kehormatan Adat Komering ke Kapolres AKBP Dalizon\r\n\r\n\r\nKetua Lembaga Adat OKU Timur H. Leo Budi Rachmadi, SE serta pengurus dan Bupati OKU Timur H.M Kholid MD saat menyerahkan piagam gelar adat atau adok Komering ke Kapolres OKU Timur yang baru AKBP Dalizon, S.I.K MH\r\nLembaga Adat OKU Timur Berikan Gelar K'),
(24, 'Data Pengajuan', 'Rumah Adat Belanda-Rumah Adat Belanda Adalah Rumah Bersejarah -rantau durian-081367073783'),
(25, 'Data Pengajuan', 'Masjid Jejawi-Masjid Jejawai Destinasi menarik bentuk masjid modern didaerah -jejawi-081328730046'),
(26, 'Data Kontak', 'Ikhlasul Amal-ikhlasul0507@gmail.com-Anda Hebat Yah'),
(27, 'Data Kontak', 'Hamid-ihsanuddin870@gmail.com-Terbaik'),
(28, 'Data Kontak', 'Amal-ikhlasul0507@gmail.com-Perbaiki Fasilitas Parkir'),
(29, 'Data Kontak', 'wawan-vxproductionofficial@gmail.com-perbaikan pelayanan'),
(30, 'Data Ubah Email', 'dispar@gmail.com-10-05-2021'),
(31, 'Penghargaan', 'PEMBINA SENI DAN PARIWISATA DAERAH-WhatsApp_Image_2020-05-14_at_20_44_52.jpeg'),
(32, 'Penghargaan', 'KARYA BUDAYA MIDANG-WhatsApp_Image_2020-05-13_at_10_24_43.jpeg'),
(33, 'Penghargaan', 'KARYA BUDAYA TIKAR PURUN PEDAMARAN-WhatsApp_Image_2020-05-13_at_10_24_42_(1).jpeg'),
(34, 'Penghargaan', 'KARYA BUDAYA TARI PENGUTON-WhatsApp_Image_2020-05-13_at_10_24_42.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_info`
--

CREATE TABLE `tbl_info` (
  `id_info` int(11) NOT NULL,
  `logo` varchar(64) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `handphone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_info`
--

INSERT INTO `tbl_info` (`id_info`, `logo`, `alamat`, `handphone`, `email`) VALUES
(1, 'logo.png', 'Pagar Wangi, Dempo Utara, Kota Pagar Alam, Sumatera Selatan 31581', '0813-0000-1111', 'dispar@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kecamatan`
--

CREATE TABLE `tbl_kecamatan` (
  `id` int(11) NOT NULL,
  `kode_kecamatan` varchar(5) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(20) NOT NULL,
  `email_kontak` varchar(30) NOT NULL,
  `judul_kontak` varchar(50) NOT NULL,
  `pesan_kontak` varchar(256) NOT NULL,
  `waktu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_budaya`
--

CREATE TABLE `tbl_master_budaya` (
  `id_master_budaya` int(11) NOT NULL,
  `kode_master_budaya` varchar(5) NOT NULL,
  `kode_budaya` varchar(5) NOT NULL,
  `kode_kecamatan` varchar(5) NOT NULL,
  `kode_desa` varchar(5) NOT NULL,
  `nama_master_budaya` varchar(50) NOT NULL,
  `deskripsi_budaya1` varchar(500) NOT NULL,
  `deskripsi_budaya2` varchar(500) NOT NULL,
  `deskripsi_budaya3` varchar(500) NOT NULL,
  `photo_budaya` varchar(128) NOT NULL,
  `link_video` varchar(64) NOT NULL,
  `link_google` varchar(64) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longtitude` varchar(20) NOT NULL,
  `status_video` int(1) NOT NULL,
  `status_budaya` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_jabatan`
--

CREATE TABLE `tbl_master_jabatan` (
  `id` int(11) NOT NULL,
  `kode_jabatan` varchar(5) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_master_jabatan`
--

INSERT INTO `tbl_master_jabatan` (`id`, `kode_jabatan`, `nama_jabatan`) VALUES
(1, '  J1 ', 'KEPALA DINAS'),
(5, 'J2', 'SEKRETARIS'),
(6, 'J3', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN'),
(7, 'J4', 'SUB BAGIAN KEUANGAN'),
(8, 'J5', 'SUB BAGIAN PERENCANAAN'),
(9, 'J6', 'BIDANG KEBUDAYAAN'),
(10, 'J7', 'BIDANG USAHA PARIWISATA'),
(11, 'J8', 'BIDANG PENGEMBANGAN SDM DAN KELEMBAGAAN'),
(12, 'J9', 'BIDANG PROMOSI DAN PEMBERDAYAAN OBJEK WISATA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_sarana`
--

CREATE TABLE `tbl_master_sarana` (
  `id_sarana` int(11) NOT NULL,
  `kode_master_sarana` varchar(5) NOT NULL,
  `kode_sarana` varchar(5) NOT NULL,
  `kode_kecamatan` varchar(5) NOT NULL,
  `kode_desa` varchar(5) NOT NULL,
  `nama_master_sarana` varchar(50) NOT NULL,
  `deskripsi_sarana1` varchar(500) NOT NULL,
  `deskripsi_sarana2` varchar(500) NOT NULL,
  `deskripsi_sarana3` varchar(500) NOT NULL,
  `photo_sarana` varchar(128) NOT NULL,
  `link_video` varchar(64) NOT NULL,
  `link_google` varchar(64) NOT NULL,
  `latitude` varchar(24) NOT NULL,
  `longtitude` varchar(24) NOT NULL,
  `status_sarana` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_wisata`
--

CREATE TABLE `tbl_master_wisata` (
  `id_master_wisata` int(11) NOT NULL,
  `kode_master_wisata` varchar(5) NOT NULL,
  `kode_wisata` varchar(5) NOT NULL,
  `kode_kecamatan` varchar(5) NOT NULL,
  `kode_desa` varchar(5) NOT NULL,
  `nama_master_wisata` varchar(128) NOT NULL,
  `deskripsi_wisata1` varchar(500) NOT NULL,
  `deskripsi_wisata2` varchar(500) NOT NULL,
  `deskripsi_wisata3` varchar(500) NOT NULL,
  `photo_wisata` varchar(500) NOT NULL,
  `link_video` varchar(60) NOT NULL,
  `link_google` varchar(60) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longtitude` varchar(20) NOT NULL,
  `status_video` int(1) NOT NULL,
  `status_wisata` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_media_sosial`
--

CREATE TABLE `tbl_media_sosial` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `icon` varchar(20) NOT NULL,
  `link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_media_sosial`
--

INSERT INTO `tbl_media_sosial` (`id`, `nama`, `icon`, `link`) VALUES
(1, '   Facebook ', '   ti-facebook   ', '.'),
(3, '  Instagram  ', '  fa fa-instagram  ', '.'),
(4, ' Youtube ', ' fa fa-youtube-play ', '.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_misi`
--

CREATE TABLE `tbl_misi` (
  `id_misi` varchar(5) NOT NULL,
  `misi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_misi`
--

INSERT INTO `tbl_misi` (`id_misi`, `misi`) VALUES
('M2', 'Mewujudkan pembangunan dari desa.'),
('M3', 'Meningkatkan kualitas dan profesionalisme aparatur pemerintah daerah\r\ndalam menyelenggarakan pemerintahan, pembangunan dan pelayanan\r\nmasyarakat.'),
('M4', 'Meningkatkan kesejahteraan rakyat.'),
('M5', 'Peningkatan pertumbuhan ekonomi.'),
('M6', 'Mewujudkan penataan pemanfaatan dan peruntukan ruang yang ramah\r\nlingkungan.'),
('M7', 'Menciptakan kehidupuan keagamaan, keimanan, dan social budaya.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengajuan`
--

CREATE TABLE `tbl_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `kode_pengajuan` varchar(10) NOT NULL,
  `kode_kecamatan` varchar(5) NOT NULL,
  `kode_desa` varchar(5) NOT NULL,
  `nama_pengajuan` varchar(64) NOT NULL,
  `photo_pengajuan` varchar(128) NOT NULL,
  `deskripsi_pengajuan` varchar(500) NOT NULL,
  `alamat_pengajuan` varchar(128) NOT NULL,
  `kontak_pengajuan` varchar(15) NOT NULL,
  `status_pengajuan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pengajuan`
--

INSERT INTO `tbl_pengajuan` (`id_pengajuan`, `kode_pengajuan`, `kode_kecamatan`, `kode_desa`, `nama_pengajuan`, `photo_pengajuan`, `deskripsi_pengajuan`, `alamat_pengajuan`, `kontak_pengajuan`, `status_pengajuan`) VALUES
(12, 'PEG004', 'CEL', '  RTS', 'Wisata Jalan Tol', 'amal.png', 'WIsata jalan tol', 'babataan', '083173370700', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penghargaan`
--

CREATE TABLE `tbl_penghargaan` (
  `id` int(11) NOT NULL,
  `nama_penghargaan` varchar(56) NOT NULL,
  `photo_penghargaan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peta`
--

CREATE TABLE `tbl_peta` (
  `id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `zoom` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_peta`
--

INSERT INTO `tbl_peta` (`id`, `is_active`, `zoom`) VALUES
(1, 1, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sarana`
--

CREATE TABLE `tbl_sarana` (
  `id` int(11) NOT NULL,
  `kode_sarana` varchar(5) NOT NULL,
  `nama_sarana` varchar(30) NOT NULL,
  `link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_sarana`
--

INSERT INTO `tbl_sarana` (`id`, `kode_sarana`, `nama_sarana`, `link`) VALUES
(1, 'S1', 'Hotel', 'Hotel'),
(2, 'S2', 'Media Massa', 'MediaMassa'),
(3, 'S3', 'Pasar Tradisional', 'PasarTradisional'),
(4, 'S4', 'Pusat Kerajinan', 'PusatKerajinan'),
(5, 'S5', 'Restoran/Rumah Makan', 'Restoran'),
(8, 'S6', 'Hiburan / Karoke', 'Karoke');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_struktur`
--

CREATE TABLE `tbl_struktur` (
  `id_struktur` int(11) NOT NULL,
  `kode_jabatan` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `photo` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_struktur`
--

INSERT INTO `tbl_struktur` (`id_struktur`, `kode_jabatan`, `nama`, `photo`) VALUES
(62, '  J1 ', 'Indesi Karyanto, SP', 'pria2.png'),
(63, 'J2', 'Indesi Karyanto, SP', 'pria3.png'),
(64, 'J3', 'Syukri', 'pria7.png'),
(65, 'J4', 'Leni Rismalinda, S.Sos', 'wanita4.jpeg'),
(66, 'J5', 'Diyana Yunita, SE', 'wanita5.jpeg'),
(67, 'J6', 'Nila Maryati, S.Pd, MM', 'wanita6.jpeg'),
(68, 'J7', 'Aswi Dimpo, S. Sos', 'pria8.png'),
(69, 'J8', 'Tarmizi, S.Sos', 'pria9.png'),
(70, 'J9', 'Dra. Nuraida, M.Si', 'wanita7.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `email`, `photo`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(13, 'Disparoki', 'disparoki@gmail.com', '20-208048_transparent-social-media-icons-vector-png-social-media.png', '$2y$10$2a3u6gt/zIZ1QUCH3p5Ln.sNTZgP5FJvVrmIPTRBJqlO0WShJGc22', 2, 1, 1589417756),
(20, 'Ikhlasul', 'ikhlasul@gmail.com', 'default.jpg', '$2y$10$TOmXgidSFZuql2kbWEoZLOpfkGDPGQUWV2OvpGJMRflLrVMYnoRl.', 3, 1, 1589634653),
(21, 'Amal', 'amal@gmail.com', 'default.jpg', '$2y$10$z5yZEsa9rboiOGe6O.j3IO1UACX339RK9SrWlKCs41FyGRFsXyRVm', 4, 1, 1589634669),
(32, 'Ikhlasul Amal', 'ikhlasul0507@gmail.com', 'IMG_57412.jpg', '$2y$10$FxDxIieLRK3ibc9X4GwQj.DL6.OoYpzi1VjruUwA4QUG9eBJagmi6', 1, 1, 1599788235);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_histori`
--

CREATE TABLE `tbl_user_histori` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role_id` int(1) NOT NULL,
  `date_created` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user_histori`
--

INSERT INTO `tbl_user_histori` (`id`, `email`, `role_id`, `date_created`) VALUES
(5, 'disparoki@gmail.com', 2, '2020-05-15 17:44:48'),
(6, 'disparoki@gmail.com', 2, '2020-05-15 22:48:10'),
(7, 'disparoki@gmail.com', 2, '2020-05-16 06:01:07'),
(8, 'ikhlasul0507@gmail.com', 1, '2020-05-16 06:01:47'),
(9, 'disparoki@gmail.com', 2, '2020-05-16 06:07:20'),
(10, 'disparoki@gmail.com', 2, '2020-05-16 09:47:57'),
(11, 'disparoki@gmail.com', 2, '2020-05-16 12:33:08'),
(12, 'disparoki@gmail.com', 2, '2020-05-16 13:42:54'),
(13, 'disparoki@gmail.com', 2, '2020-05-16 15:21:05'),
(14, 'disparoki@gmail.com', 2, '2020-05-16 17:43:29'),
(15, 'ikhlasul0507@gmail.com', 1, '2020-05-16 18:47:55'),
(16, 'ikhlasul0507@gmail.com', 1, '2020-05-16 18:52:27'),
(17, 'amal@gmail.com', 3, '2020-05-16 18:53:04'),
(18, 'ikhlasul0507@gmail.com', 1, '2020-05-16 18:57:32'),
(19, 'ikhlasul0507@gmail.com', 1, '2020-05-16 20:11:39'),
(20, 'ikhlasul@gmail.com', 3, '2020-05-16 20:12:25'),
(21, 'ikhlasul0507@gmail.com', 1, '2020-05-16 20:13:04'),
(22, 'ikhlasul0507@gmail.com', 1, '2020-05-17 14:07:06'),
(23, 'disparoki@gmail.com', 2, '2020-05-17 17:42:24'),
(24, 'disparoki@gmail.com', 2, '2020-05-17 17:49:21'),
(25, 'ikhlasul0507@gmail.com', 1, '2020-05-17 19:09:26'),
(26, 'disparoki@gmail.com', 2, '2020-05-17 19:36:24'),
(27, 'ikhlasul0507@gmail.com', 1, '2020-05-18 17:07:03'),
(28, 'ikhlasul0507@gmail.com', 1, '2020-05-19 08:07:11'),
(29, 'ikhlasul0507@gmail.com', 1, '2020-05-19 13:35:21'),
(30, 'ikhlasul0507@gmail.com', 1, '2020-05-20 07:35:08'),
(31, 'ikhlasul0507@gmail.com', 1, '2020-05-20 10:41:20'),
(32, 'ikhlasul0507@gmail.com', 1, '2020-05-20 11:16:00'),
(33, 'amal@gmail.com', 4, '2020-05-20 11:23:04'),
(34, 'disparoki@gmail.com', 2, '2020-05-20 11:27:11'),
(35, 'disparoki@gmail.com', 2, '2020-05-20 15:48:30'),
(36, 'ikhlasul0507@gmail.com', 1, '2020-05-23 16:29:09'),
(37, 'ikhlasul0507@gmail.com', 1, '2020-09-11 07:41:54'),
(38, 'ikhlasul0507@gmail.com', 1, '2020-09-11 07:44:34'),
(39, 'disparoki@gmail.com', 2, '2020-09-11 07:46:31'),
(40, 'ikhlasul0507@gmail.com', 1, '2020-09-11 08:00:44'),
(41, 'ikhlasul0507@gmail.com', 2, '2020-09-11 08:25:12'),
(42, 'ikhlasul0507@gmail.com', 1, '2020-09-11 08:26:03'),
(43, 'disparoki@gmail.com', 2, '2020-09-11 08:32:51'),
(44, 'ikhlasul0507@gmail.com', 2, '2020-09-11 08:37:47'),
(45, 'ikhlasul0507@gmail.com', 1, '2020-09-11 08:38:29'),
(46, 'disparoki@gmail.com', 2, '2020-09-11 08:42:14'),
(47, 'ikhlasul0507@gmail.com', 1, '2020-09-11 08:49:13'),
(48, 'ikhlasul0507@gmail.com', 1, '2020-09-11 12:54:59'),
(49, 'ikhlasul0507@gmail.com', 1, '2020-09-11 14:32:47'),
(50, 'ikhlasul0507@gmail.com', 1, '2020-09-11 16:17:41'),
(51, 'ikhlasul0507@gmail.com', 1, '2020-09-11 16:58:03'),
(52, 'oktipermatasari00@gmail.com', 2, '2020-09-11 19:40:39'),
(53, 'ikhlasul0507@gmail.com', 1, '2020-09-12 07:26:44'),
(54, 'ikhlasul0507@gmail.com', 1, '2020-09-12 10:42:08'),
(55, 'ikhlasul0507@gmail.com', 1, '2020-09-12 12:36:39'),
(56, 'ikhlasul0507@gmail.com', 1, '2020-09-12 13:14:00'),
(57, 'ikhlasul0507@gmail.com', 1, '2020-09-12 14:18:16'),
(58, 'ikhlasul0507@gmail.com', 1, '2020-09-12 14:28:55'),
(59, 'ikhlasul0507@gmail.com', 1, '2020-09-12 16:37:13'),
(60, 'ikhlasul0507@gmail.com', 1, '2020-09-13 06:05:04'),
(61, 'ikhlasul0507@gmail.com', 1, '2020-09-13 06:30:45'),
(62, 'ikhlasul0507@gmail.com', 1, '2020-09-13 08:54:11'),
(63, 'ikhlasul0507@gmail.com', 1, '2020-09-13 09:08:55'),
(64, 'ikhlasul0507@gmail.com', 1, '2020-09-13 09:14:00'),
(65, 'ikhlasul0507@gmail.com', 1, '2020-09-13 14:41:51'),
(66, 'ikhlasul0507@gmail.com', 1, '2020-09-13 16:50:32'),
(67, 'ikhlasul0507@gmail.com', 1, '2020-09-13 17:47:44'),
(68, 'ikhlasul0507@gmail.com', 1, '2020-09-13 21:02:18'),
(69, 'ikhlasul0507@gmail.com', 1, '2020-09-14 10:37:27'),
(70, 'ikhlasul0507@gmail.com', 1, '2020-09-14 19:38:10'),
(71, 'ikhlasul0507@gmail.com', 1, '2020-09-14 21:23:33'),
(72, 'ikhlasul0507@gmail.com', 1, '2020-09-15 05:49:07'),
(73, 'ikhlasul0507@gmail.com', 1, '2020-09-15 09:38:37'),
(74, 'ikhlasul0507@gmail.com', 1, '2020-09-15 10:21:25'),
(75, 'ikhlasul0507@gmail.com', 1, '2020-09-16 14:22:24'),
(76, 'ikhlasul0507@gmail.com', 1, '2020-09-16 14:29:57'),
(77, 'ikhlasul0507@gmail.com', 1, '2020-09-16 15:14:35'),
(78, 'ikhlasul0507@gmail.com', 1, '2020-10-12 17:14:37'),
(79, 'ikhlasul0507@gmail.com', 1, '2020-11-07 07:55:13'),
(80, 'ikhlasul0507@gmail.com', 1, '2020-12-09 21:21:36'),
(81, 'ikhlasul0507@gmail.com', 1, '2021-05-17 10:42:02'),
(82, 'ikhlasul0507@gmail.com', 1, '2021-05-17 10:56:05'),
(83, 'ikhlasul0507@gmail.com', 1, '2021-05-17 13:08:13'),
(84, 'ikhlasul0507@gmail.com', 1, '2021-05-17 13:09:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(10) NOT NULL,
  `nama_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`id`, `role`, `nama_role`) VALUES
(1, 'admin', 'Administrator'),
(2, 'kadin', 'Kepala Dinas'),
(3, 'kabag', 'Kepala Bagian'),
(4, 'pegawai', 'Pegawai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_token`
--

CREATE TABLE `tbl_user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(256) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user_token`
--

INSERT INTO `tbl_user_token` (`id`, `email`, `token`, `date_created`) VALUES
(32, 'hmeileni@gmail.com', '3ay+zUlvoTSGYAoqZDU7tNyZa9EZNYq20UKY1dN3V3g=', 1600241373);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_visi`
--

CREATE TABLE `tbl_visi` (
  `id_visi` varchar(5) NOT NULL,
  `visi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_visi`
--

INSERT INTO `tbl_visi` (`id_visi`, `visi`) VALUES
('V1', '“Terwujudnya masyarakat Pagaralam yang lebih maju, Mandiri,\r\ndan sejahtera berlandasan iman dan taqwa”.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_wisata`
--

CREATE TABLE `tbl_wisata` (
  `id` int(11) NOT NULL,
  `kode_wisata` varchar(5) NOT NULL,
  `nama_wisata` varchar(20) NOT NULL,
  `link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_wisata`
--

INSERT INTO `tbl_wisata` (`id`, `kode_wisata`, `nama_wisata`, `link`) VALUES
(1, '1', ' Wisata Alam ', 'WisataAlam '),
(2, '2', ' Wisata Buatan ', 'WisataBuatan '),
(3, '3', ' Wisata Budaya ', 'WisataBudaya '),
(4, '4', 'Wisata Religi ', 'WisataReligius '),
(5, '5', ' Wisata Kuliner ', 'WisataKuliner ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `tbl_aspirasi`
--
ALTER TABLE `tbl_aspirasi`
  ADD PRIMARY KEY (`id_aspirasi`);

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tbl_budaya`
--
ALTER TABLE `tbl_budaya`
  ADD PRIMARY KEY (`id_budaya`);

--
-- Indeks untuk tabel `tbl_desa`
--
ALTER TABLE `tbl_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `tbl_histori_data`
--
ALTER TABLE `tbl_histori_data`
  ADD PRIMARY KEY (`id_histori`);

--
-- Indeks untuk tabel `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indeks untuk tabel `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_kecamatan` (`kode_kecamatan`);

--
-- Indeks untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `tbl_master_budaya`
--
ALTER TABLE `tbl_master_budaya`
  ADD PRIMARY KEY (`id_master_budaya`);

--
-- Indeks untuk tabel `tbl_master_jabatan`
--
ALTER TABLE `tbl_master_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_master_sarana`
--
ALTER TABLE `tbl_master_sarana`
  ADD PRIMARY KEY (`id_sarana`);

--
-- Indeks untuk tabel `tbl_master_wisata`
--
ALTER TABLE `tbl_master_wisata`
  ADD PRIMARY KEY (`id_master_wisata`);

--
-- Indeks untuk tabel `tbl_media_sosial`
--
ALTER TABLE `tbl_media_sosial`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_misi`
--
ALTER TABLE `tbl_misi`
  ADD PRIMARY KEY (`id_misi`);

--
-- Indeks untuk tabel `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `tbl_penghargaan`
--
ALTER TABLE `tbl_penghargaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_peta`
--
ALTER TABLE `tbl_peta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_sarana`
--
ALTER TABLE `tbl_sarana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_struktur`
--
ALTER TABLE `tbl_struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user_histori`
--
ALTER TABLE `tbl_user_histori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user_token`
--
ALTER TABLE `tbl_user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_visi`
--
ALTER TABLE `tbl_visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- Indeks untuk tabel `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_aspirasi`
--
ALTER TABLE `tbl_aspirasi`
  MODIFY `id_aspirasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_budaya`
--
ALTER TABLE `tbl_budaya`
  MODIFY `id_budaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_desa`
--
ALTER TABLE `tbl_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=352;

--
-- AUTO_INCREMENT untuk tabel `tbl_histori_data`
--
ALTER TABLE `tbl_histori_data`
  MODIFY `id_histori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_master_budaya`
--
ALTER TABLE `tbl_master_budaya`
  MODIFY `id_master_budaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_master_jabatan`
--
ALTER TABLE `tbl_master_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_master_sarana`
--
ALTER TABLE `tbl_master_sarana`
  MODIFY `id_sarana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tbl_master_wisata`
--
ALTER TABLE `tbl_master_wisata`
  MODIFY `id_master_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tbl_media_sosial`
--
ALTER TABLE `tbl_media_sosial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_penghargaan`
--
ALTER TABLE `tbl_penghargaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_peta`
--
ALTER TABLE `tbl_peta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_sarana`
--
ALTER TABLE `tbl_sarana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_struktur`
--
ALTER TABLE `tbl_struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_histori`
--
ALTER TABLE `tbl_user_histori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_token`
--
ALTER TABLE `tbl_user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
