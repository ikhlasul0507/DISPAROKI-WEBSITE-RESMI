-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Bulan Mei 2020 pada 17.18
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_disparoki`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `id_agenda` int(11) NOT NULL,
  `nama_agenda` varchar(256) NOT NULL,
  `waktu_agenda` varchar(50) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`id_agenda`, `nama_agenda`, `waktu_agenda`, `created`) VALUES
(1, 'Merupakan hal yang tak terduga', '2020-05-02', '0000-00-00 00:00:00'),
(3, 'Semua kode di atas disatukan menjadi seperti ini:', '2020-07-05', '0000-00-00 00:00:00'),
(4, 'block nya suatu konten SMS yang dikirim client oleh operator GSM.', '2020-10-11', '0000-00-00 00:00:00'),
(5, 'Check your messages and notifications ', '2021-02-01', '0000-00-00 00:00:00'),
(6, ' atas semua isi konten SMS', '2020-05-22', '0000-00-00 00:00:00'),
(7, 'Pawai Hari Kemerdekaan Indonesia', '2020-05-20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_aspirasi`
--

CREATE TABLE `tbl_aspirasi` (
  `id_aspirasi` int(11) NOT NULL,
  `judul_aspirasi` varchar(128) NOT NULL,
  `photo_aspirasi` varchar(128) NOT NULL,
  `aspirasi` varchar(256) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_aspirasi`
--

INSERT INTO `tbl_aspirasi` (`id_aspirasi`, `judul_aspirasi`, `photo_aspirasi`, `aspirasi`, `waktu`) VALUES
(1, 'Kamu Hebat', 'musi.jpg', 'Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu', '2020-04-28 12:02:39'),
(3, 'Kamu Hebat', 'musi.jpg', 'Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu adalah Kamu', '2020-04-28 12:02:39'),
(5, 'dia adalahdia adalah', 'musi.jpg', 'dia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia ad', '2020-04-28 12:02:39'),
(6, 'iyoa ak', 'musi.jpg', 'iyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa', '2020-04-28 12:02:39'),
(7, 'dia adalahdia adalah', 'musi.jpg', 'dia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia adalahdia ad', '2020-04-28 12:02:39'),
(8, 'iyoa ak', 'musi.jpg', 'iyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa akiyoa', '2020-04-28 12:02:39'),
(9, 'aku adlaah', 'musi.jpg', 'aku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku ad', '2020-04-28 12:02:39'),
(10, 'ia dia', 'musi.jpg', 'aku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku ad', '2020-04-28 12:02:39'),
(11, 'aku adlaah', 'musi.jpg', 'aku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku ad', '2020-04-28 12:02:39'),
(12, 'ia dia', 'musi.jpg', 'aku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku adlaahaku ad', '2020-04-28 12:02:39'),
(13, 'KAMUUU', 'musi.jpg\r\n', 'KAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMU', '2020-04-28 12:03:26'),
(14, 'KAMUUU', 'musi.jpg\r\n', 'KAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMUUUKAMU', '2020-04-28 12:03:33'),
(15, 'Dispar Terbaik', 'WhatsApp_Image_2020-05-05_at_09_55_011.jpeg', 'Dispar Merupakan ', '2020-05-05 03:30:52'),
(16, 'Dispar', 'WhatsApp_Image_2020-04-21_at_10_05_29.jpeg', 'asdsdasdsadsa', '2020-05-05 03:37:54'),
(17, 'qwqwqwqw', 'IMG-20180307-WA0021.jpg', 'sadsadsadas', '2020-05-05 03:41:12');

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

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `kode_berita`, `kode_kecamatan`, `kode_desa`, `kode_wisata`, `kode_sarana`, `waktu_berita`, `judul_berita`, `photo_berita`, `deskripsiberita1`, `deskripsiberita2`, `deskripsiberita3`, `status_berita`) VALUES
(2, 'BRT24', 'JEJ', '  BNJ', 'W2', 'S2', '2020-04-07', 'GELAR FESTIVAL BUDAYA KABUPATEN OGAN KOMERING ILIR', 'Picture3.jpg', 'gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah \"\"\"', 'gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah \"\"\"', 'gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah gelar festival budaya adalah \"\"\"', 1),
(3, 'BRT3', 'CEL', '  BNJ', 'W2', 'S2', '2020-04-18', 'ARAK PENGANTIN DESA PEDAMARAN', 'IMG_20200126_104842.jpeg', 'ARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARAN\"', 'ARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARAN\"', 'ARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARANARAK PENGANTIN DESA PEDAMARAN\"', 1),
(5, 'BRT5', 'CEL', '  RTS', '3', 'S2', '2020-05-05', 'ADAT JAJULUK', '1505718614691_(1).jpg', ' adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah ', ' adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah ', ' adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah adat jajuluk adlah ', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_budaya`
--

CREATE TABLE `tbl_budaya` (
  `id_budaya` int(11) NOT NULL,
  `kode_budaya` varchar(256) NOT NULL,
  `nama_budaya` varchar(128) NOT NULL,
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
  `kode_desa` varchar(5) NOT NULL,
  `kode_kecamatan` varchar(5) NOT NULL,
  `nama_desa` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_desa`
--

INSERT INTO `tbl_desa` (`id_desa`, `kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES
(33, '  BNJ', ' ASU ', '  Bandar Jaya  '),
(34, 'BGH', ' ASU ', 'Bangun Harjo'),
(35, ' BNB ', ' ASU ', ' Banyu Biru     '),
(36, 'BKB', ' ASU ', 'Bukit Batu'),
(37, 'JMY', ' ASU ', 'Jadi Mulya'),
(38, 'KTM', ' ASU ', 'Kerta Mukti'),
(39, 'MGT', ' ASU ', 'Marga Tani'),
(40, 'MGM', ' ASU ', 'Margo Mulyo'),
(41, 'MKJ', ' ASU ', 'Mukti Jaya '),
(42, 'NGS', ' ASU ', 'Negeri Sakti'),
(43, 'NKT', ' ASU ', 'Nusa Kerta'),
(44, 'NTR', ' ASU ', 'Nusantara'),
(45, 'PGH', ' ASU ', 'Panggung Harjo'),
(46, 'PKD', ' ASU ', 'Pangkalan Damai'),
(47, 'PKS', ' ASU ', 'Pangkalan Sakti'),
(48, 'RTK', ' ASU ', 'Rantau Karya'),
(49, 'RGA', ' ASU ', 'Rengas Abang'),
(50, 'STH', ' ASU ', 'Sapta Harjo'),
(51, 'SJB', ' ASU ', 'Serijaya Batu'),
(52, 'SDM', ' ASU ', 'Sido Makmur'),
(53, 'SDR', ' ASU ', 'Sido Rahayu'),
(54, 'SPH', ' ASU ', 'Simpang Heran'),
(55, 'SJB', ' ASU ', 'Simpang Jaya Baru'),
(56, ' SKM ', 'TGL', ' Suka Mulya '),
(57, ' SGT', ' ASU ', ' Sungai Batang '),
(58, ' TBH ', 'TGL', 'Timbul Harjo '),
(59, 'TTM', ' ASU ', 'Tirta Mulya'),
(60, 'CGL', ' CEL ', 'Cengal'),
(61, 'KSJ', ' CEL ', 'Kuala Sungai Jeruju'),
(62, 'KSP', ' CEL ', 'Kuala Sungai Pasir'),
(63, 'PLB', ' CEL ', 'Pelimbangan'),
(64, 'SGJ', ' CEL ', 'Sungai Jeruju'),
(65, 'SGK', ' CEL ', 'Sungai Ketupak'),
(66, 'SGL', ' CEL ', 'Sungai Lumpur'),
(67, 'SGP', ' CEL ', 'Sungai Pasir'),
(68, 'SGS', ' CEL ', 'Sungai Somor'),
(69, 'TLR', ' CEL ', 'Talang Rimba'),
(70, 'ARH', ' JEJ ', 'Air HItam'),
(71, 'BBR', ' JEJ ', 'Bantun Baru'),
(72, 'BBS', ' JEJ ', 'Bubusan'),
(73, 'JJW', ' JEJ ', 'Jejawi'),
(74, 'KRG', ' JEJ ', 'Karang Agung'),
(75, 'LGS', ' JEJ ', 'Lengkis'),
(76, 'LBK', ' JEJ ', 'Lubuk Ketepeng'),
(77, 'MRB', ' JEJ ', 'Muara Batun'),
(78, 'PDB', ' JEJ ', 'Padang Bulan'),
(79, 'PDU', ' JEJ ', 'Pedu'),
(80, 'PMJ', ' JEJ ', 'Pematang Kijang'),
(81, 'SME', ' JEJ ', 'Simpang Empat'),
(82, 'SKR', ' JEJ ', 'Sukadarma'),
(83, 'TLC', ' JEJ ', 'Talang Cempedak'),
(84, 'TJA', ' JEJ ', 'Tanjung Ali'),
(85, 'TJR', ' JEJ ', 'Tanjung Aur'),
(86, 'TRJ', ' JEJ ', 'Terusan Jawa'),
(87, 'ULT', ' JEJ ', 'Ulak Tembaga'),
(88, 'CLK', ' KAG ', 'Celikah'),
(89, 'SKD', ' KAG ', 'Sukadana'),
(90, 'PKU', ' KAG ', 'Paku'),
(91, 'MGJ', ' KAG ', 'Mangun Jaya'),
(92, 'CNR', ' KAG ', 'Cinta Raja/Raya'),
(93, 'SDK', ' KAG ', 'Sidakersa'),
(94, 'JJU', ' KAG ', 'Jua-Jua'),
(95, 'KDN', ' KAG ', 'Kedaton'),
(96, 'KTR', ' KAG ', 'Kota Raya'),
(97, 'TLB', ' KAG ', 'Tanjung Lubuk'),
(98, 'ANY', ' KAG ', 'Anyar'),
(99, 'ARB', ' KAG ', 'Arisan Buntal'),
(100, 'BDA', ' KAG ', 'Banding Anyar'),
(101, 'BLC', ' KAG ', 'Buluh Cawang'),
(102, 'KYA', ' KAG ', 'Kayu Agung'),
(103, 'KJU', ' KAG ', 'Kijang Ulu'),
(104, 'LBD', ' KAG ', 'Lubuk Dalam'),
(105, 'MRB', ' KAG ', 'Muara Baru'),
(106, 'PRG', ' KAG ', 'Perigi'),
(107, 'SRB', ' KAG ', 'Serigeni Baru'),
(108, 'SGL', ' KAG ', 'Serigini Lama'),
(109, 'TJM', ' KAG ', 'Tanjung Menang'),
(110, 'TJR', ' KAG ', 'Tanjung Rancing'),
(111, 'TJS', ' KAG ', 'Tanjung Serang'),
(112, 'TLK', ' KAG ', 'Teloko'),
(113, 'BMI', ' LEM ', 'Bumi Agung'),
(114, 'BIA', ' LEM ', 'Bumi Arjo'),
(115, 'CHB', ' LEM ', 'Cahya Bumi'),
(116, 'CHM', ' LEM ', 'Cahya Maju'),
(117, 'DBR', ' LEM ', 'Dabuk Rejo'),
(118, 'KPY', ' LEM ', 'Kepahyang'),
(119, 'KTP', ' LEM ', 'Kuta Pandan'),
(120, 'MKJ', ' LEM ', 'Mekar Jaya'),
(121, 'SDS', ' LEM ', 'Sindang Sari'),
(122, 'SKM', ' LEM ', 'Sukamulya'),
(123, 'SBA', ' LEM ', 'Sumber Agung'),
(124, 'SBI', ' LEM ', 'Sungai Belida II'),
(125, 'TBS', ' LEM ', 'Tebing Suluh'),
(126, 'TGA', ' LEM ', 'Tugu Agung'),
(127, 'TGJ', ' LEM ', 'Tugu Jaya'),
(128, ' TGM ', 'LEJ', ' Tugumulyo '),
(129, 'TGH', ' LEM ', 'Tulung Harapan'),
(130, 'LPI', 'LEJ', 'Lempuing Indah'),
(131, 'LBM', 'LEJ', 'Lubuk Makmur'),
(132, 'LBS', 'LEJ', 'Lubuk Seberuk'),
(133, 'MBS', 'LEJ', 'Muara Burnai I'),
(134, 'MBD', 'LEJ', 'Muara Burnai II'),
(135, 'MKS', 'LEJ', 'Mukti Sari'),
(136, 'PWS', 'LEJ', 'Purwo Asri'),
(137, '  RTS', 'LEJ', '  Rantau Durian I '),
(138, 'RTD', 'LEJ', 'Rantau Durian II'),
(139, 'SKJ', 'LEJ', 'Sukajaya'),
(140, 'SMK', 'LEJ', 'Sukamaju'),
(141, 'SGB', 'LEJ', 'Sungai Belida'),
(142, 'TNM', 'LEJ', 'Tania Makmur'),
(143, 'TNS', 'LEJ', 'Tania Selatan'),
(144, 'TSS', 'LEJ', 'Tanjung Sari I'),
(145, 'TSD', 'LEJ', 'Tanjung Sari II'),
(146, 'JYB', 'MES', 'Jaya Bakti'),
(147, 'KLD', 'MES', 'Kali Deres'),
(148, 'KYM', 'MES', 'Karya Mukti'),
(149, 'KBJ', 'MES', 'Kembang Jajar'),
(150, 'KTB', 'MES', 'Kota Baru'),
(151, 'MKM', 'MES', '  Makarti Mulya  '),
(152, 'MGB', 'MES', 'Marga Bakti'),
(153, 'MRB', 'MES', 'Marga Bakti'),
(154, 'MRW', 'MES', 'Mekar Wangi'),
(155, 'PGD', 'MES', 'Pagar Dewa'),
(156, 'PTP', 'MES', 'Pematang Panggang'),
(157, 'SKM', 'MES', 'Suka Mukti'),
(158, 'SBD', 'MES', 'Sumber Deras'),
(159, 'SGS', 'MES', 'Sungai Sodong'),
(160, 'SYA', 'MES', 'Surya Adi'),
(161, 'BRJ', ' MEM ', 'Beringin Jaya'),
(162, 'BKS', ' MEM ', 'Binakarsa'),
(163, 'CHM', ' MEM ', 'Cahaya Mas'),
(164, 'CHU', ' MEM ', 'Cahaya Mulya'),
(165, 'CTL', ' MEM ', 'Catur Tunggal'),
(166, 'GDS', ' MEM ', 'Gading Sari'),
(167, 'KPB', ' MEM ', 'Kampung Baru'),
(168, 'KYJ', ' MEM ', 'karya Jaya'),
(169, 'KYU', ' MEM ', 'Karya Usaha'),
(170, 'LBJ', ' MEM ', 'Labuhan Jaya'),
(171, 'MJJ', ' MEM ', 'Mesuji Jaya'),
(172, 'MKK', ' MEM ', 'Mukti Karya '),
(173, 'PBT', ' MEM ', 'Pematang Bina Tani'),
(174, 'PMJ', ' MEM ', 'Pematang Jaya'),
(175, 'PMS', ' MEM ', 'Pematang Sari'),
(176, 'PMK', ' MEM ', 'Pematang Sukamarah'),
(177, 'PMT', ' MEM ', 'Pematang Sukatani'),
(178, 'SBM', ' MEM ', 'Sumber Mulya'),
(179, 'SYT', ' MEM ', 'Sumber Karta'),
(180, 'TGS', ' MEM ', 'Tegal Sari'),
(181, 'BLN', ' MER ', 'Balian'),
(182, 'BLM', ' MER ', 'Balian Makmur'),
(183, 'BMM', ' MER ', 'Bumi Makmur'),
(184, 'CPT', ' MER ', 'Cipta Sari'),
(185, 'DBM', ' MER ', 'Dabuk Makmur'),
(186, 'EMB', ' MER ', 'Embacang'),
(187, 'EMP', ' MER ', 'Embacang Permai'),
(188, 'DGR', ' MER ', 'Gedung Rejo'),
(189, 'KMI', ' MER ', 'Kemang Indah'),
(190, 'KRM', ' MER ', 'Kerta Mukti'),
(191, 'MTR', ' MER ', 'Mataram Jaya'),
(192, 'MLJ', ' MER ', 'Mulya Jaya'),
(193, 'RTM', ' MER ', 'Rotan Mulya'),
(194, 'SDM', ' MER ', 'Sedyo Mulya'),
(195, 'SKS', ' MER ', 'Suka Sari'),
(196, 'SMB', ' MER ', 'Sumber Baru'),
(197, 'SMS', ' MER ', 'Sumbu Sari'),
(198, 'BGS', ' PAM ', 'Bangsal'),
(199, 'JRM', ' PAM ', 'Jermun'),
(200, 'KDS', ' PAM ', 'Kandis'),
(201, 'KMN', ' PAM ', 'Keman'),
(202, 'KMB', ' PAM ', 'Keman Baru'),
(203, 'KUR', ' PAM ', 'Kuro'),
(204, 'MGG', ' PAM ', 'Manggaris'),
(205, 'PPG', ' PAM ', 'Pampangan'),
(206, 'PLB', ' PAM ', 'Pulau Betung'),
(207, 'PLY', ' PAM ', 'Pulau Layang'),
(208, 'SCD', ' PAM ', 'Secondong'),
(209, 'SPG', ' PAM ', 'Sepang'),
(210, 'SDG', ' PAM ', 'Serdang'),
(211, 'SRM', ' PAM ', 'Sari Menang'),
(212, 'TJM', ' PAM ', 'Tanjung Kemang'),
(213, 'TPS', ' PAM ', 'Tapus'),
(214, 'ULD', ' PAM ', 'Ulak Depati'),
(215, 'UKB', ' PAM ', 'Ulak Keman Baru'),
(216, 'ULA', ' PAM ', 'Ulak Kemang'),
(217, 'ULP', ' PAM ', 'Ulak Pianggu'),
(218, 'APR', 'PAL', 'Air Pedara'),
(219, 'ARR', 'PAL', 'Air Rumbai'),
(220, 'DRT', 'PAL', 'Darat'),
(221, 'DLG', 'PAL', 'Deling'),
(222, 'LBB', 'PAL', 'Lebung Batang'),
(223, 'LRK', 'PAL', 'Lirik'),
(224, 'PKL', 'PAL', 'Pangkalan Lampam'),
(225, 'PRG', 'PAL', 'Perigi'),
(226, 'PLU', 'PAL', 'Pulauan'),
(227, 'RMB', 'PAL', 'Rambai'),
(228, 'RDG', 'PAL', 'Riding'),
(229, 'RMS', 'PAL', 'Rimba Samak'),
(230, 'SKR', 'PAL', 'Suka Raja'),
(231, 'SKD', 'PAL', 'Sukadamai'),
(232, ' SGG ', 'PAL', ' Sungai Bungin '),
(233, 'SSG', 'PAL', 'Sunggutan'),
(234, 'TTD', 'PAL', 'Talang Jaya'),
(235, 'BRT', ' PED ', 'Burnai Timur'),
(236, 'CTJ', ' PED ', 'Cinta Jaya'),
(237, 'LBR', ' PED ', 'Lebuh Rarak'),
(238, 'MGJ', ' PED ', 'Menang Jaya'),
(239, 'PDS', ' PED ', 'Pedamaran I'),
(240, 'PDD', ' PED ', 'Pedamaran II'),
(241, ' PDT ', ' PED ', ' Pedamaran III'),
(242, 'PDE', ' PED ', 'Pedamaran IV'),
(243, 'PDL', ' PED ', 'Pedamaran V'),
(244, 'PDM', ' PED ', 'Pedamaran VI'),
(245, 'SRT', ' PED ', 'Serinanti'),
(246, 'SKD', ' PED ', 'Sukadamai'),
(247, 'SKP', ' PED ', 'Suka Pulih'),
(248, 'SKR', ' PED ', 'Suka Raja'),
(249, 'GDR', ' PER ', 'Gading Rejo'),
(250, 'KYL', ' PER ', 'Kayu Labu'),
(251, 'MRB', ' PER ', 'Mari Baya'),
(252, 'PCW', ' PER ', 'Pancawarna'),
(253, 'PGG', ' PER ', 'Pulau Geronggang'),
(254, ' SBH ', ' PER ', ' Sumber Hidup'),
(255, 'TJM', ' PER ', 'Tanjung Makmur'),
(256, 'AWT', ' SPP ', 'Awal Terusan'),
(257, 'BTA', ' SPP ', 'Batu Ampar'),
(258, 'BTB', ' SPP ', 'Batu Ampar Baru'),
(259, 'BLT', ' SPP ', 'Belanti'),
(260, 'BRK', ' SPP ', 'Berkat'),
(261, 'BGT', ' SPP ', 'Bungin Tinggi'),
(262, 'MGJ', ' SPP ', 'Mangun Jaya'),
(263, 'PTI', ' SPP ', 'Pantai'),
(264, 'PMB', ' SPP ', 'Pematang Buluran'),
(265, 'PNJ', ' SPP ', 'Penyandingan'),
(266, 'RWB', ' SPP ', 'Rawang Besar'),
(267, 'RSP', ' SPP ', 'Rengas Pitu'),
(268, 'SDM', ' SPP ', 'Serdang Menang'),
(269, 'SPP', ' SPP ', 'Sirah Pulau Padang'),
(270, 'SPP', ' SPP ', 'Sirah Pulau Padang'),
(271, 'SJA', ' SPP ', 'Sukaraja'),
(272, 'TJA', ' SPP ', 'Tanjung Alai'),
(273, 'TRT', ' SPP ', 'Terate'),
(274, 'TRL', ' SPP ', 'Terusan Laut'),
(275, 'TRM', ' SPP ', 'Terusan Menang'),
(276, 'UKJ', ' SPP ', 'Ulak Jermun'),
(277, 'BPM', ' SUM ', 'Bumi Pratama Mandiri'),
(278, ' GDA', ' SUM ', ' Gading Mas '),
(279, 'GJR', ' SUM ', 'Gajah Makmur'),
(280, 'GJM', ' SUM ', 'Gajah Mati'),
(281, 'GJK', ' SUM ', 'Gajah Mukti'),
(282, 'GJY', ' SUM ', 'Gajah Mulya'),
(283, 'HRJ', ' SUM ', 'Harapan Jaya'),
(284, 'KGS', ' SUM ', 'Karang Sia'),
(285, 'PNI', ' SUM ', 'Pinang Indah'),
(286, 'SDL', ' SUM ', 'Sidomulyo'),
(287, 'SRG', ' SUM ', 'Sri Gading'),
(288, 'SGC', ' SUM ', 'Sungai Ceper'),
(289, 'SGM', ' SUM ', 'Sungai Menang'),
(290, 'SPI', ' SUM ', 'Sungai Pinang Indah'),
(291, 'SGS', ' SUM ', 'Sungai Sibur'),
(292, 'SGT', ' SUM ', 'Sungai Tepuk'),
(293, 'TLJ', ' SUM ', 'Talang Jaya'),
(294, 'TLM', ' SUM ', 'Talang Makmur'),
(295, 'ATM', 'TGL', 'Atar Balam'),
(296, 'BMG', 'TGL', 'Bumi Agung'),
(297, 'CKD', 'TGL', 'Cuk Dadak'),
(298, 'JBI', 'TGL', 'Jambu Ilir'),
(299, 'KBM', 'TGL', 'Kota Bumi'),
(300, 'PGR', 'TGL', 'Pengarayan'),
(301, 'PGM', 'TGL', 'Pulau Gemantung'),
(302, 'PGD', 'TGL', 'Pulau Gemantung Darat'),
(303, 'PGI', 'TGL', 'Pulau Gemantung Ilir'),
(304, 'PGU', 'TGL', 'Pulau Gemantung Ulu'),
(305, 'SRT', 'TGL', 'Seri Tanjung'),
(306, 'SKM', 'TGL', 'Suka Mulya'),
(307, 'SRM', 'TGL', 'Sukarami'),
(308, 'TJB', 'TGL', 'Tanjung Baru'),
(309, 'TJR', 'TGL', 'Tanjung Beringin'),
(310, 'TJG', 'TGL', 'Tanjung Laga'),
(311, 'TJL', 'TGL', 'Tanjung Laut'),
(312, 'TJL', 'TGL', 'Tanjung Lubuk'),
(313, 'TJM', 'TGL', 'Tanjung Merindu'),
(314, 'UBL', 'TGL', 'Ulak Balam'),
(315, 'ULK', 'TGL', 'Ulak Kapal'),
(316, 'BNW', ' TEG ', 'Benawa'),
(317, 'BMH', ' TEG ', 'Bumi Harapan'),
(318, 'CNM', ' TEG ', 'Cinta Marga'),
(319, 'KRP', 'TGL', 'Kuripan'),
(320, 'MRT', ' TEG ', 'Muara Telang'),
(321, 'MLY', ' TEG ', 'Mulya Guna'),
(322, 'PTB', ' TEG ', 'Panca Tunggal Benawa'),
(323, 'PYG', ' TEG ', 'Penyandingan'),
(324, 'SRP', ' TEG ', 'Serapek'),
(325, 'SRG', ' TEG ', 'Seriguna'),
(326, 'SHM', ' TEG ', 'Sinar Harapan Mulya'),
(327, 'SGW', ' TEG ', 'Sugih Waras'),
(328, 'TLP', ' TEG ', 'Talang Pangeran'),
(329, 'ULK', ' TEG ', 'Ulak Ketapang'),
(330, 'CBM', ' TUS ', 'Cambai'),
(331, 'JRR', ' TUS ', 'Jerambah Rengas'),
(332, 'KYA', ' TUS ', 'Kayu Ara'),
(333, 'KLD', ' TUS ', 'Kuala Dua Belas'),
(334, 'LBG', ' TUS ', 'Lebung Gajah'),
(335, 'LBI', ' TUS ', 'Lebung Itam'),
(336, 'PNG', ' TUS ', 'Penanggoan Duren'),
(337, 'PYN', ' TUS ', 'Penyandingan'),
(338, 'PTL', ' TUS ', 'Petaling'),
(339, 'PLB', ' TUS ', 'Pulau Beruang'),
(340, 'RTL', ' TUS ', 'Rantai Lurus'),
(341, 'SMT', ' TUS ', 'Simpang Tiga'),
(342, 'STA', ' TUS ', 'Simpang Tiga Abadi'),
(343, 'STA', ' TUS ', 'Simpang Tiga Jaya'),
(344, 'STM', ' TUS ', 'Simpang Tiga Makmur'),
(345, 'STS', ' TUS ', 'Simpang Tiga Sakti'),
(346, 'TMN', ' TUS ', 'Toman'),
(347, 'TLI', ' TUS ', 'Tulung Selapan Ilir'),
(348, 'TLU', ' TUS ', 'Tulung Selapan Ulu'),
(349, 'TLS', ' TUS ', 'Tulung Seluang'),
(350, 'UJT', ' TUS ', 'Ujung Tanjung'),
(351, 'TJB', ' TUS ', 'Tanjung Batu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_info`
--

CREATE TABLE `tbl_info` (
  `id_info` int(11) NOT NULL,
  `logo` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `handphone` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_info`
--

INSERT INTO `tbl_info` (`id_info`, `logo`, `alamat`, `handphone`, `email`) VALUES
(1, 'logo.png', 'Jl. Pahlawan Kayu Agung, Cintaraja, Kec. Kayu Agung\r\nKabupaten Ogan Komering Ilir<br>\r\nSumatera Selatan 30867', '0813-0000-2222', 'disparoki@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kecamatan`
--

CREATE TABLE `tbl_kecamatan` (
  `id` int(11) NOT NULL,
  `kode_kecamatan` varchar(5) NOT NULL,
  `nama_kecamatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kecamatan`
--

INSERT INTO `tbl_kecamatan` (`id`, `kode_kecamatan`, `nama_kecamatan`) VALUES
(21, 'LEM', 'Lempuing '),
(22, 'LEJ', 'Lempuing Jaya'),
(23, 'MES', 'Mesuji'),
(24, 'SUM', ' Sungai Menang '),
(25, 'MEM', ' Mesuji Makmur '),
(26, 'MER', ' Mesuji Raya '),
(27, 'TUS', ' Tulung Selapan '),
(28, 'CEL', ' Cengal '),
(29, 'PED', ' Pedamaran '),
(30, 'PER', ' Pedamaran Timur '),
(31, 'TGL', 'Tanjung Lubuk'),
(32, 'TEG', ' Teluk Gelam '),
(33, 'KAG', ' Kayu Agung '),
(34, 'SPP', ' Sirah Pulau Padang '),
(35, 'JEJ', ' Jejawi '),
(36, 'PAM', ' Pampangan '),
(37, 'PAL', '  Pangkalan Lampam  '),
(38, 'ASU', 'Air Sugihan ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(128) NOT NULL,
  `email_kontak` varchar(128) NOT NULL,
  `judul_kontak` varchar(500) NOT NULL,
  `pesan_kontak` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id_kontak`, `nama_kontak`, `email_kontak`, `judul_kontak`, `pesan_kontak`) VALUES
(3, 'Ikhlasul Amal', 'ikhlasul0507@gmail.com', 'Wow Hebat', 'Anda Hebat Yah'),
(4, 'Kamu', 'Anda@gmail.com', 'sakasdl', 'aksdakdjs'),
(6, 'sadasd', 'sadsa@sdsd', 'adasd', 'sadsa'),
(7, 'Hamid', 'ihsanuddin870@gmail.com', 'Wak hamid ', 'Terbaik');

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
  `nama_master_budaya` varchar(256) NOT NULL,
  `deskripsi_budaya1` varchar(500) NOT NULL,
  `deskripsi_budaya2` varchar(500) NOT NULL,
  `deskripsi_budaya3` varchar(500) NOT NULL,
  `photo_budaya` varchar(256) NOT NULL,
  `link_video` varchar(256) NOT NULL,
  `link_google` varchar(256) NOT NULL,
  `latitude` varchar(128) NOT NULL,
  `longtitude` varchar(128) NOT NULL,
  `status_video` int(1) NOT NULL,
  `status_budaya` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_master_budaya`
--

INSERT INTO `tbl_master_budaya` (`id_master_budaya`, `kode_master_budaya`, `kode_budaya`, `kode_kecamatan`, `kode_desa`, `nama_master_budaya`, `deskripsi_budaya1`, `deskripsi_budaya2`, `deskripsi_budaya3`, `photo_budaya`, `link_video`, `link_google`, `latitude`, `longtitude`, `status_video`, `status_budaya`) VALUES
(1, 'BD1', 'B1', 'ASU', '  BNJ', 'ARAK ARAK', 'arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan ', 'arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan ', 'arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan arak arakmerupakan ', 'Picture3.jpg', 'http://localhost/disparoki/', 'http://localhost/disparoki/', '-3.389706', '104.843645', 0, 1),
(3, 'BD2', 'B10', 'JEJ', '  RTS', 'INCANG INCANG', 'incang incang adalah incang incang adalah incang incang adalah incang incang adalah incang incang adalah incang incang adalah incang incang adalah incang incang adalah ', 'incang incang adalah incang incang adalah incang incang adalah incang incang adalah incang incang adalah incang incang adalah incang incang adalah incang incang adalah ', 'incang incang adalah incang incang adalah incang incang adalah incang incang adalah incang incang adalah incang incang adalah incang incang adalah incang incang adalah ', 'IMG-20190404-WA0060.jpg', 'http://localhost/disparoki/TradisiLisan/cari', 'http://localhost/disparoki/TradisiLisan/cari', '-3.408042', '104.912653', 0, 1),
(4, 'BD3', 'B2', 'KAG', '  RTS', 'ADALAH', 'adalah merupakanadalah merupakanadalah merupakanadalah merupakanadalah merupakanadalah merupakanadalah merupakanadalah merupakan adalah merupakanadalah merupakanadalah merupakan', 'adalah merupakanadalah merupakanadalah merupakanadalah merupakanadalah merupakanadalah merupakanadalah merupakanadalah merupakan adalah merupakanadalah merupakanadalah merupakan', 'adalah merupakanadalah merupakanadalah merupakanadalah merupakanadalah merupakanadalah merupakanadalah merupakanadalah merupakan adalah merupakanadalah merupakanadalah merupakan', 'kemaro.jpg', 'http://localhost/disparoki/TradisiLisan', 'http://localhost/disparoki/TradisiLisan', '-3.440085', '104.806566', 0, 1),
(5, 'BD4', 'B3', 'JEJ', '  BNJ', 'JAJULUK', 'jajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalah', 'jajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalah', 'jajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalahjajuluka adalah', 'komputer_generasi_kedua.jpg', 'http://localhost/disparoki/TradisiLisan', 'http://localhost/disparoki/TradisiLisan', '-3.400331', '104.920378', 0, 0),
(6, 'BD5', 'B4', 'MES', '  RTS', 'NGARAK', 'narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah ', 'narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah ', 'narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah narak adlah ', 'Picture1.jpg', 'http://localhost/disparoki/TradisiLisan', 'http://localhost/disparoki/TradisiLisan', '-3.460819', '104.825277', 0, 0),
(7, 'BD6', 'B5', 'MEM', ' BNB ', 'PAMALI', 'pamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlaja', 'pamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlaja', 'pamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlajapamili adlaja', 'makrab_hima_oki_2019.jpg', 'http://localhost/disparoki/TradisiLisan', 'http://localhost/disparoki/TradisiLisan', '-3.330756', '104.889994', 0, 0),
(8, 'BD7', 'B6', 'CEL', '  BNJ', 'LOSUNG', 'losung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlah', 'losung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlah', 'losung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlahlosung adlah', 'Untitled.png', 'http://localhost/disparoki/TradisiLisan', 'http://localhost/disparoki/TradisiLisan', '-3.346522', ' 104.951105', 0, 0),
(9, 'BD8', 'B7', 'CEL', '  RTS', 'MONCAK', 'moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah ', 'moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah ', 'moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah moncak adlah ', 'Picture2.jpg', 'http://localhost/disparoki/TradisiLisan', 'http://localhost/disparoki/TradisiLisan', '-3.482922', '104.880209', 0, 0),
(10, 'BD9', 'B8', 'TGL', 'KBM', 'BAHASA KOMRING', 'bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah ', 'bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah ', 'bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah bahasa komring adlaah ', 'ampera.jpg', 'http://localhost/disparoki/TradisiLisan', 'http://localhost/disparoki/TradisiLisan', '-3.421065', '104.773779', 0, 0),
(11, 'BD10', 'B9', 'JEJ', '  RTS', 'GASING ', 'ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ', 'ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ', 'vghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ghasing ', 'IMG-20180307-WA0021.jpg', 'http://localhost/disparoki/TradisiLisan', 'http://localhost/disparoki/TradisiLisan', '-3.451394', '104.884329', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_jabatan`
--

CREATE TABLE `tbl_master_jabatan` (
  `id` int(11) NOT NULL,
  `kode_jabatan` varchar(5) NOT NULL,
  `nama_jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_master_jabatan`
--

INSERT INTO `tbl_master_jabatan` (`id`, `kode_jabatan`, `nama_jabatan`) VALUES
(1, ' J1 ', '  Kepala Bidang Kepariwisataan  '),
(3, 'J2', 'Wakil Dinas ku'),
(4, 'J3', 'Anggota promosi ');

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
  `nama_master_sarana` varchar(256) NOT NULL,
  `deskripsi_sarana1` varchar(500) NOT NULL,
  `deskripsi_sarana2` varchar(500) NOT NULL,
  `deskripsi_sarana3` varchar(500) NOT NULL,
  `photo_sarana` varchar(128) NOT NULL,
  `link_video` varchar(256) NOT NULL,
  `link_google` varchar(256) NOT NULL,
  `latitude` varchar(128) NOT NULL,
  `longtitude` varchar(128) NOT NULL,
  `status_sarana` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_master_sarana`
--

INSERT INTO `tbl_master_sarana` (`id_sarana`, `kode_master_sarana`, `kode_sarana`, `kode_kecamatan`, `kode_desa`, `nama_master_sarana`, `deskripsi_sarana1`, `deskripsi_sarana2`, `deskripsi_sarana3`, `photo_sarana`, `link_video`, `link_google`, `latitude`, `longtitude`, `status_sarana`) VALUES
(4, 'SRN11', 'S1', 'CEL', '  RTS', 'HOTEL DINASTI', 'Rumah Makan AdalahRumah Makan AdalahRumah Makan AdalahRumah Makan AdalahRumah Makan Ada\"', 'Rumah Makan AdalahRumah Makan AdalahRumah Makan AdalahRumah Makan AdalahRumah Makan AdalahRumah Makan AdalahRumah Makan AdalahRumah Makan Adalah\"\"\"\"', 'Rumah Makan AdalahRumah Makan AdalahRumah Makan AdalahRumah Makan AdalahRumah Makan AdalahRumah Makan AdalahRumah Makan AdalahRumah Makan Adalah\"\"\"\"', 'musi.jpg', 'https://www.youtube.com/?hl=id&gl=ID', 'http://localhost/tugasakhir/admin/pages/forms/advanced.html', '-3.403998', '104.8242323', 0),
(5, 'SRN23', 'S2', 'ASU', '  MKM', 'HOTEL DINASTI', 'HOTEL SINAS', 'HOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL ', 'HOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL SINASDIT DLAHHOTEL ', 'limas.jpg', 'http://localhost/tugasakhir/admin/pages/forms/advanced.html', 'http://localhost/tugasakhir/admin/pages/forms/advanced.html', '-3.399146', '104.825316', 0),
(6, 'RM1', 'S5', 'KAG', 'CNR', 'RM. PONDOK PINDANG MERANJAT ZIDANE', 'Pondok Pindang Meranjat Zidane Merupakan rumah makan yang dimiki oleh Ali Hapi Rido', 'Adapun untuk bisa ketempat tersebut cukup melalui jln.lintas timur kel. cintaraja kayu agung', 'Silahkan Dihubungi No : 0813 6867 5052', 'komputer_generasi_kedua.jpg', 'http://localhost/disparoki/#', 'http://localhost/disparoki/#', '-3.401695', '104.828792', 0),
(7, 'srn7', 'S2', 'KAG', ' PDT ', 'RADIO KAYU AGUNG', 'radio kayu agung adalah radio kayu agung adalah radio kayu agung adalah radio kayu agung adalah radio kayu agung adalah radio kayu agung adalah ', 'radio kayu agung adalah radio kayu agung adalah radio kayu agung adalah radio kayu agung adalah radio kayu agung adalah radio kayu agung adalah ', 'radio kayu agung adalah radio kayu agung adalah radio kayu agung adalah radio kayu agung adalah radio kayu agung adalah radio kayu agung adalah ', 'limas1.jpg', 'https://www.youtube.com/watch?v=gx4WV1iHadw', 'https://www.youtube.com/watch?v=gx4WV1iHadw', '-3.391763', '104.792318', 0),
(8, 'srn7', 'S3', 'TGL', 'TLB', 'KALANGAN TANJUNG LUBUK', 'kalangan tanjung lubuk merupkaan kalangan tanjung lubuk merupkaan kalangan tanjung lubuk merupkaan kalangan tanjung lubuk merupkaan kalangan tanjung lubuk merupkaan kalangan tanjung lubuk merupkaan ', 'kalangan tanjung lubuk merupkaan kalangan tanjung lubuk merupkaan kalangan tanjung lubuk merupkaan kalangan tanjung lubuk merupkaan kalangan tanjung lubuk merupkaan kalangan tanjung lubuk merupkaan ', 'kalangan tanjung lubuk merupkaan kalangan tanjung lubuk merupkaan kalangan tanjung lubuk merupkaan kalangan tanjung lubuk merupkaan kalangan tanjung lubuk merupkaan kalangan tanjung lubuk merupkaan ', '1504595683954_(1).jpg', 'http://dpmptsp.kaboki.go.id/', 'http://dpmptsp.kaboki.go.id/', '-3.404272', '104.9051', 0),
(9, 'srn8', 'S4', 'PED', ' PDT ', 'TIKAR PEDAMARAN', 'tikar pedamaran adalah tikar pedamaran adalah tikar pedamaran adalah tikar pedamaran adalah tikar pedamaran adalah tikar pedamaran adalah tikar pedamaran adalah ', 'tikar pedamaran adalah tikar pedamaran adalah tikar pedamaran adalah tikar pedamaran adalah tikar pedamaran adalah tikar pedamaran adalah tikar pedamaran adalah ', 'tikar pedamaran adalah tikar pedamaran adalah tikar pedamaran adalah tikar pedamaran adalah tikar pedamaran adalah tikar pedamaran adalah tikar pedamaran adalah ', '1504621167135.jpg', 'http://dpmptsp.kaboki.go.id/', 'http://dpmptsp.kaboki.go.id/', '-3.40787', '104.91128', 0),
(10, 'srn8', 'S6', 'ASU', '  BNJ', 'KAROKE MANG HOLAU', 'KAROKE MANG HOLAUKAROKE MANG HOLAUKAROKE MANG HOLAUKAROKE MANG HOLAUKAROKE MANG HOLAUKAROKE MANG HOLAU ', 'KAROKE MANG HOLAUKAROKE MANG HOLAUKAROKE MANG HOLAUKAROKE MANG HOLAUKAROKE MANG HOLAUKAROKE MANG HOLAU ', 'KAROKE MANG HOLAUKAROKE MANG HOLAUKAROKE MANG HOLAUKAROKE MANG HOLAUKAROKE MANG HOLAUKAROKE MANG HOLAU ', '1505136409256_(1).jpg', 'http://dpmptsp.kaboki.go.id/', 'http://dpmptsp.kaboki.go.id/', '-3.414553', '104.924154', 0);

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
  `nama_master_wisata` varchar(256) NOT NULL,
  `deskripsi_wisata1` varchar(500) NOT NULL,
  `deskripsi_wisata2` varchar(500) NOT NULL,
  `deskripsi_wisata3` varchar(500) NOT NULL,
  `photo_wisata` varchar(256) NOT NULL,
  `link_video` varchar(256) NOT NULL,
  `link_google` varchar(256) NOT NULL,
  `latitude` varchar(128) NOT NULL,
  `longtitude` varchar(128) NOT NULL,
  `status_video` int(1) NOT NULL,
  `status_wisata` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_master_wisata`
--

INSERT INTO `tbl_master_wisata` (`id_master_wisata`, `kode_master_wisata`, `kode_wisata`, `kode_kecamatan`, `kode_desa`, `nama_master_wisata`, `deskripsi_wisata1`, `deskripsi_wisata2`, `deskripsi_wisata3`, `photo_wisata`, `link_video`, `link_google`, `latitude`, `longtitude`, `status_video`, `status_wisata`) VALUES
(3, 'WST3', '1', 'JEJ', 'BNJ', 'RUMAH SERATUS TIANG', 'rumah seratus tiang adalah ', 'rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus ', 'rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus tiang adalah rumah seratus ', 'ampera.jpg', 'https://www.youtube.com/embed/0Mg6uM_nKEI', 'http://lms.polsri.ac.id/pluginfile.php/44119/mod_resource/content/1/Kewirausahaan%205%20PPT.pdf', '-3.371844', '104.8241933', 1, 1),
(4, 'WST3', '1', 'LEM', 'MKM', 'BUKIT BATU', 'buukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu ad', 'buukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu ad', 'buukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu adalahbuukit batu ad', 'bkb.jpg', 'https://web.whatsapp.com/', 'https://web.whatsapp.com/', '-3.392339', '104.828333', 0, 1),
(5, 'WST4', '3', 'LEM', 'RTS', 'PULAU MASPARI', 'pkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau as', 'pkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau as', 'pkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau aspkau as', 'jakabaring.jpg', 'https://www.youtube.com/watch?v=eDCJE5rTzwk', 'https://www.youtube.com/watch?v=eDCJE5rTzwk', '-3.392838', '104.831512', 0, 1),
(6, 'WST6', '4', 'JEJ', 'MKM', 'PANTAI TANJUNG MENJANGAN', 'pantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendangan', 'pantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendangan', 'pantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendanganpantai tanjung mendangan', '1505979531321_(1).jpg', 'https://www.skilvul.com/?utm_source=facebook&utm_medium=ad&utm_campaign=skilvul_launch', 'https://www.skilvul.com/?utm_source=facebook&utm_medium=ad&utm_campaign=skilvul_launch', '-3.391506', '104.828106', 0, 1),
(7, 'WST5', '2', 'TGL', 'KBM', 'RUMAH DEPATI BAHAR', 'Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn ', 'Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn ', 'Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn Merupakan Rumah yang merupaakn ', 'kemaro.jpg', 'http://localhost/disparoki/WisataAlam/cari', 'http://localhost/disparoki/WisataAlam/cari', '-3.394232', '104.828295', 0, 1),
(8, 'WST6', '5', 'JEJ', 'RTS', 'PINDANG BURUNG', 'Pindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makanan', 'Pindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makanan', 'Pindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makananPindang Burung Merupakan makanan', 'Picture3.jpg', 'http://localhost/disparoki/WisataAlam/cari', 'http://localhost/disparoki/WisataAlam/cari', '-3.369314', '104.833002', 0, 0),
(9, 'WS7', '2', 'CEL', 'BNJ', 'BUKIT BATU', 'bukit batu adalahbukit batu adalahbukit batu adalah', 'bukit batu adalahbukit batu adalahbukit batu adalah', 'bukit batu adalahbukit batu adalahbukit batu adalah', 'kemaro1.jpg', 'https://www.youtube.com/watch?v=kKGFhq758xk', 'https://www.google.com/search?q=koding+membuat+div+di+belakang+div+pada+html&rlz=1C1CHBF_enID880ID880&oq=koding+membuat+div+di+belakang+div+pada+html&aqs=chrome..69i57j33.11820j0j7&sourceid=chrome&ie=UTF-8', '-3.391934', '104.824591', 0, 1),
(10, 'WST9', '1', 'CEL', '  RTS', 'DANAU TELOKO', ' danau teloko adlah  danau teloko adlah danau teloko adlah danau teloko adlah danau teloko adlah danau teloko adlah danau teloko adlah danau teloko adlah danau teloko adlah ', ' danau teloko adlah  danau teloko adlah danau teloko adlah danau teloko adlah danau teloko adlah danau teloko adlah danau teloko adlah danau teloko adlah danau teloko adlah ', ' danau teloko adlah  danau teloko adlah danau teloko adlah danau teloko adlah danau teloko adlah danau teloko adlah danau teloko adlah danau teloko adlah danau teloko adlah ', '1505987716833.jpg', 'https://www.youtube.com/embed/hf0rNFbeSp4', 'https://www.youtube.com/embed/hf0rNFbeSp4', '-3.403758', '104.818411', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_media_sosial`
--

CREATE TABLE `tbl_media_sosial` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_media_sosial`
--

INSERT INTO `tbl_media_sosial` (`id`, `nama`, `icon`, `link`) VALUES
(1, '  Facebook', '  ti-facebook  ', '  http://localhost/disparoki/profil  '),
(2, 'Twitter', 'ti-twitter-alt', 'http://localhost/disparoki/profil'),
(3, 'Instagram', 'fa fa-instagram', 'http://localhost/disparoki/profil'),
(4, 'Youtube', 'fa fa-youtube-play', 'http://localhost/disparoki/profil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_misi`
--

CREATE TABLE `tbl_misi` (
  `id_misi` varchar(5) NOT NULL,
  `misi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_misi`
--

INSERT INTO `tbl_misi` (`id_misi`, `misi`) VALUES
('M2', ' Indonesia '),
('M3', 'Kamu Adalah trerbaik\r\nCinta Ku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengajuan`
--

CREATE TABLE `tbl_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `kode_pengajuan` varchar(10) NOT NULL,
  `kode_kecamatan` varchar(5) NOT NULL,
  `kode_desa` varchar(5) NOT NULL,
  `nama_pengajuan` varchar(128) NOT NULL,
  `photo_pengajuan` varchar(128) NOT NULL,
  `deskripsi_pengajuan` varchar(500) NOT NULL,
  `alamat_pengajuan` varchar(256) NOT NULL,
  `kontak_pengajuan` varchar(50) NOT NULL,
  `status_pengajuan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pengajuan`
--

INSERT INTO `tbl_pengajuan` (`id_pengajuan`, `kode_pengajuan`, `kode_kecamatan`, `kode_desa`, `nama_pengajuan`, `photo_pengajuan`, `deskripsi_pengajuan`, `alamat_pengajuan`, `kontak_pengajuan`, `status_pengajuan`) VALUES
(1, 'PGJ1', 'LEM', 'MKM', 'wISATA aLAM bUKIT iNDAH', 'amal.jpg', 'wISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT', 'qweqweqwe', '081328730046', 2),
(2, 'PGJ2', 'LEM', 'MKM', 'wISATA aLAM bUKIT iNDAH', 'amal.jpg', 'wISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT iNDAHwISATA aLAM bUKIT', 'dfgdfgdfg', '082278591608', 2),
(3, 'pgj3', 'LEM', 'MKM', 'WISTAA KOTA LAMPU', 'ampera.jpg', 'WISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA KOTA LAMPUWISTAA ', 'asdasdasd', '082280524264', 2),
(5, 'PEG50', 'ASU', ' BNB ', 'qwqw', 'masjid2.jpg', 'qwqwqw', 'qwqw', '081367073783', 1),
(6, 'PEG5001', 'CEL', ' PDT ', 'qeqew', 'Capture.PNG', 'wqewqe', 'wqeqwe', '081367073783', 0),
(7, 'PEG001', 'CEL', ' BNB ', 'qeqwe', 'IMG-20180307-WA0021.jpg', 'qwewq', 'qwewq', '081367073783', 1),
(8, 'PEG001', 'LEJ', ' BNB ', 'Wak Hamid', 'IMG-20190314-WA0039.jpg', 'Wak Hamid', 'Kota Bumi', '082282821225', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penghargaan`
--

CREATE TABLE `tbl_penghargaan` (
  `id` int(11) NOT NULL,
  `nama_penghargaan` varchar(256) NOT NULL,
  `photo_penghargaan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_penghargaan`
--

INSERT INTO `tbl_penghargaan` (`id`, `nama_penghargaan`, `photo_penghargaan`) VALUES
(6, 'PEMBINA SENI DAN PARIWISATA DAERAH', 'WhatsApp_Image_2020-05-14_at_20_44_52.jpeg'),
(7, 'KARYA BUDAYA MIDANG', 'WhatsApp_Image_2020-05-13_at_10_24_43.jpeg'),
(8, 'KARYA BUDAYA TIKAR PURUN PEDAMARAN', 'WhatsApp_Image_2020-05-13_at_10_24_42_(1).jpeg'),
(9, 'KARYA BUDAYA TARI PENGUTON', 'WhatsApp_Image_2020-05-13_at_10_24_42.jpeg');

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
(1, 1, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sarana`
--

CREATE TABLE `tbl_sarana` (
  `id` int(11) NOT NULL,
  `kode_sarana` varchar(5) NOT NULL,
  `nama_sarana` varchar(128) NOT NULL,
  `link` varchar(256) NOT NULL
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
  `nama` varchar(256) NOT NULL,
  `photo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_struktur`
--

INSERT INTO `tbl_struktur` (`id_struktur`, `kode_jabatan`, `nama`, `photo`) VALUES
(58, 'J2', 'www', 'IMG-20190404-WA0388.jpg'),
(59, 'J3', 'ttrrr  ', 'bkb.jpg'),
(60, 'J3', 'rr', 'komputer_generasi_kedua.jpg'),
(61, 'J3', 'ww', 'ktm_copy.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
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
(13, 'Disparoki', 'disparoki@gmail.com', 'kemaro.jpg', '$2y$10$2a3u6gt/zIZ1QUCH3p5Ln.sNTZgP5FJvVrmIPTRBJqlO0WShJGc22', 2, 1, 1589417756),
(19, 'Ikhlasul Amal', 'ikhlasul0507@gmail.com', 'jakabaring1.jpg', '$2y$10$CvcX.Ayt25ZPiGcmO5S6HeI7Ibbv3fKsdbnOs7jrjkkmkzIJY23z.', 1, 1, 1589629649),
(20, 'Ikhlasul', 'ikhlasul@gmail.com', 'default.jpg', '$2y$10$TOmXgidSFZuql2kbWEoZLOpfkGDPGQUWV2OvpGJMRflLrVMYnoRl.', 3, 0, 1589634653),
(21, 'Amal', 'amal@gmail.com', 'default.jpg', '$2y$10$z5yZEsa9rboiOGe6O.j3IO1UACX339RK9SrWlKCs41FyGRFsXyRVm', 4, 1, 1589634669);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_histori`
--

CREATE TABLE `tbl_user_histori` (
  `id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `role_id` int(128) NOT NULL,
  `date_created` varchar(128) NOT NULL
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
(36, 'ikhlasul0507@gmail.com', 1, '2020-05-23 16:29:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL,
  `nama_role` varchar(128) NOT NULL
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
  `email` varchar(128) NOT NULL,
  `token` varchar(256) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_visi`
--

CREATE TABLE `tbl_visi` (
  `id_visi` varchar(5) NOT NULL,
  `visi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_visi`
--

INSERT INTO `tbl_visi` (`id_visi`, `visi`) VALUES
('V1', ' Amal Adalah Anak rajin, sholeh, pintar, smart, berilmu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_wisata`
--

CREATE TABLE `tbl_wisata` (
  `id` int(11) NOT NULL,
  `kode_wisata` varchar(5) NOT NULL,
  `nama_wisata` varchar(128) NOT NULL,
  `link` varchar(256) NOT NULL
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
  MODIFY `id_aspirasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_master_budaya`
--
ALTER TABLE `tbl_master_budaya`
  MODIFY `id_master_budaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_master_jabatan`
--
ALTER TABLE `tbl_master_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_master_sarana`
--
ALTER TABLE `tbl_master_sarana`
  MODIFY `id_sarana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_master_wisata`
--
ALTER TABLE `tbl_master_wisata`
  MODIFY `id_master_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_media_sosial`
--
ALTER TABLE `tbl_media_sosial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_penghargaan`
--
ALTER TABLE `tbl_penghargaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_histori`
--
ALTER TABLE `tbl_user_histori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_token`
--
ALTER TABLE `tbl_user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
