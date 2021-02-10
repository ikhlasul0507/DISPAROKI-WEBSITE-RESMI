-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 13 Sep 2020 pada 11.37
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
(1, 'event bujang gadis kabupaten ogan koemering ilir', '2020-05-02', '0000-00-00 00:00:00'),
(3, 'festival kriya sumatera selatan', '2020-07-05', '0000-00-00 00:00:00'),
(4, 'peresmian arak pengantin pedamatan terhadap UNESCO', '2020-10-11', '0000-00-00 00:00:00'),
(5, 'Pelantikan Kepala Dinas', '2021-02-01', '0000-00-00 00:00:00'),
(7, 'Pawai Hari Kemerdekaan Indonesia', '2020-09-03', '0000-00-00 00:00:00');

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

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `kode_berita`, `kode_kecamatan`, `kode_desa`, `kode_wisata`, `kode_sarana`, `waktu_berita`, `judul_berita`, `photo_berita`, `deskripsiberita1`, `deskripsiberita2`, `deskripsiberita3`, `status_berita`) VALUES
(6, 'brt3', '1', '63', '2', 'S2', '2020-09-24', 'PETANI OKI SIAP PANEN RAYA 26 RIBU HA TANAMAN PADI DI TENGAH PANDEMI CORONA', 'Screenshot_from_2020-09-11_07-32-24.png', 'Liputan6.com, Ogan Komering Ilir Di tengah pandemi wabah virus Corona (Covid-19), tak menyurutkan semangat para petani di Kabupaten Ogan Komering Ilir (OKI), Sumatera Selatan (Sumsel), untuk melakukan panen raya. Hamparan tanaman padi seluas 26.633 hektar di OKI, siap untuk dipanen pada puncak panen raya bulan April ini.\r\n\r\nDari luasan tersebut, produktivitas lahan yang di target mencapai 135.056 ton gabah kering (GKG) atau setara dengan 86.096 ton. Produksi beras di OKI surplus, bahkan siap untuk mensuplai keluar daerah.\r\n\r\nAda yang unik dalam panen raya kali ini. Panen dilaksanakan secara virtual serentak bersama 100 wilayah lain di Indonesia, disaksikan Kementerian Pertanian melalui video conference (vidcon).\r\n\r\nMenteri Pertanian (Mentan) Syahrul Yasin Limpo (SYL) memerintahkan jajaran Kementerian pertanian (Kementan) agar memantau produksi sektor pertanian selama masa pandemi Covid-19.', '&quot;Saat ini mulai masa panen raya Maret-April, petani harus dipastikan memperoleh juga harga jual yang layak, sehingga terjaga kesejahteraannya,&quot; ujar Mentan SYL.\r\n\r\nMentan SYL menambahkan, sektor pertanian menjadi harapan, tulang punggung di tengah upaya Pemerintah dalam menanggulangi Covid-19.\r\n\r\n“Tanggung jawab menyediakan pangan bagi 267 juta penduduk Indonesia merupakan spirit bagi keluarga besar Kementerian Pertanian dan semua pelaku pembangunan pertanian,” tegas Mentan SYL.\r\n\r\nUntuk itu, menurut Mentan SYL, berbagai skenario atas kemungkinan yang akan terjadi harus dipersiapkan terlebih bulan puasa dan lebaran sudah di depan mata.\r\n\r\n&quot;Kita tidak berhenti sampai menyediakan pangan saja. Bersama Kemendag, Bulog, dan yang lain, kita berusaha mengendalikan bahwa pangan itu tersedia di pasar dalam jumlah yang cukup sehingga stabilisasi harga terjaga,&quot; tegasnya.', 'Direktur Jenderal Prasarana dan Sarana Pertanian (PSP) Kementan Sarwo Edhy mengatakan, usai panen, pihaknya akan mengupayakan ketersediaan air melalui jaringan irigasi. Selain itu, juga akan dimaksimalkan penggunaan alat mesin pertanian (Alsintan) seperti traktor roda 2 dan roda 4 untuk pengolahan tanah persiapan musim tanam selanjutnya.', 1),
(7, 'brt4', '10', '1', '3', 'S3', '2020-09-30', 'HOME / DAERAH / LEMBAGA ADAT OKU TIMUR BERIKAN GELAR KEHORMATAN ADAT KOMERING KE KAPOLRES AKBP DALIZON   KETUA LEMBAGA ADAT OKU ', 'Screenshot_from_2020-09-11_09-28-201.png', 'Home / DAERAH / Lembaga Adat OKU Timur Berikan Gelar Kehormatan Adat Komering ke Kapolres AKBP Dalizon\r\n\r\n\r\nKetua Lembaga Adat OKU Timur H. Leo Budi Rachmadi, SE serta pengurus dan Bupati OKU Timur H.M Kholid MD saat menyerahkan piagam gelar adat atau adok Komering ke Kapolres OKU Timur yang baru AKBP Dalizon, S.I.K MH\r\nLembaga Adat OKU Timur Berikan Gelar Kehormatan Adat Komering ke Kapolres AKBP Dalizon\r\nPosted by: Fahmi in DAERAH, OKU TIMUR 19 Agustus 2020 198 Views\r\n\r\nOKU Timur, Pelita Sumsel – Lembaga Adat Kabupaten OKU Timur memberikan gelar adat masyarakat Komering atau yang biasa dikenal dengan Adok dan jajuluk, ke Kapolres OKU Timur yang baru AKBP Dalizon, S.I.K MH beserta istri Dwi Septiani Dalizon. Rabu (19/08/2020) di Balai Rakyat Pemkab OKUT.\r\n\r\nAdok atau jajuluk yang disematkan ke Kapolres OKU Timur ini dengan adok Perwira Mustika Bangsawan, sedangkan untuk Istri Kapolres Adoknya Ngeringgom Ratu.\r\n\r\nPemberian adok ini disaksikan langsung Bupati OKU Timur H.M Kholid MD beserta unsur Forkompida, kepala OPD, tokoh agama, tokoh adat.\r\n\r\n', 'Ketua lembaga Adat Kabupaten OKU Timur H. Leo Budi Rachmadi, SE mengatakan, dalam mekanisme pemberian nama adat adok atau gelaran dalam masyarakat adat komering, ada empat macam cara yakni, adok penyimbang, adok penyansan, adok pengangkonan dan adok penghormatan.\r\n\r\nPada siang ini, kami memberikan nama adok atau jajuluk kehormatan dengan asal usul adok dari keluarga besar H Ramli Mustika Ratu. Bapak Kapolres AKBP Dalizon diberi adok atau jajuluk atau gelaran Perwira Mustika Bangsawan, dan Ketua Bhayangkari Dwi Septiani Dalizon diberi adok atau jajuluk atau gelaran Ngeringgom Ratu.\r\n\r\n“Pemberian adok atau jajuluk ini juga sebagai simbol telah diangkat sebagai keluarga kehormatan dan bagian dari masyarakat Komering. Juga sebagai pesan, harapan, dan tanggung jawab untuk selalu mengangkat derajat adat Komering,” katanya.\r\n\r\n\r\n \r\n“Adok atau jajuluk ini juga sebagai harapan agar yang bersangkutan senantiasa menjaga nilai-nilai yang berlaku dan berkembang di masyarakat dalam kehidupan sehari-hari,” tambahnya.\r\n', '\r\n \r\nSementara itu Kapolres OKU Timur AKBP Dalizon, S.I.K MH mengaku bangga dan bersyukur atas pemberian gelar adat Komering ini. Kapolres yang merupakan kelahiran dari Provinsi Lampung ini juga ternyata pernah mendapatkan gelar pada saat pernikahan. Dan ketika pertama kali bertugas di OKU Timur kembali diberikan gelar penghormatan.\r\n\r\n“Gelar ini merupakan suatu kebanggaan dan berharga bagi saya, tentu ini harus ada timbal balik dari saya dalam melaksanakan tugas dan pengabdian sebaik-baiknya kepada masyarakat OKU Timur ini,” ujarnya. (*', 1),
(8, 'Apa B', '1', '1', '3', 'S2', '2020-09-28', 'APA BENAR, SUKU KOMERING PALEMBANG, BERKAKAK-ADIK DENGAN BATAK?', 'Screenshot_from_2020-09-11_09-36-28.png', 'PALEMBANG, SUMATRA SELATAN, NETRALNEWS.COM - Suku Komering dalam uraian Pulau Gemantung adalah satu klan dari Suku Lampung yang berasal dari Kepaksian Sekala Brak yang telah lama bermigrasi ke dataran Sumatera Selatan pada sekitar abad ke-7. Di situ mereka beranak-pinak dan membentuk suku atau marga.\r\n\r\nNama Komering diambil dari nama Way atau Sungai di dataran Sumatera Selatan yang menandai daerah kekuasaan Komering.', 'Sebagaimana juga ditulis Zawawi Kamil (Menggali Babad &amp; Sedjarah Lampung) disebutkan dalam sajak dialek Komering: &quot;Adat lembaga sai ti pakaisa buasal jak Belasa Kapampang, sajaman rik Tanoh Pagaruyung pemerintah Bunda Kandung, cakak di Gunung Pesagi rogoh di Sekala Berak, sangon kok turun-temurun jak ninik puyang paija, cambai urai ti usung dilom adat pusako&quot;.\r\n\r\nTerjemahannya berarti &quot;Adat Lembaga yang digunakan ini berasal dari Belasa Kepampang (Nangka Bercabang), sezaman dengan Ranah Pagaruyung pemerintah Bundo Kandung di Minang Kabau, Naik di Gunung Pesagi turun di Sekala Brak, Memang sudah turun temurun dari nenek moyang dahulu, Sirih pinang dibawa di dalam adat pusaka, Kalau tidak pandai tata tertib tanda tidak berbangsa&quot;.\r\n', 'Suku Komering, seperti diuraikan oleh Pulau Gemantung, yang tulisanya disarikan dan dielaborasi dalam tulisan ini, terbagi beberapa marga, di antaranya Marga Paku Sengkunyit, Marga Sosoh Buay Rayap, Marga Buay Pemuka Peliyung, Marga Buay Madang, Marga Semendawai (OKU) dan Marga Bengkulah (OKI).\r\n\r\nSejak abad pertengahan, lahirlah beberapa  hal seperti mitos. Mitos pertama, tentang seorang panglima dari bala tentara Fatahilah, Banten, bernama Tan Dipulau, yang menjadi tamu di daerah Marga Semendawai Suku III.\r\n\r\nIa datang menggunakan perahu menelusuri Sungai Komering. Tan Dipulau berlabuh dan menetap di daerah Marga Semendawai Suku III, tepatnya di Dusun Kuripan.\r\n\r\nKeturunan Tan Dipulau membuka permukiman baru di seberang sungai atau seberang dusun Kuripan, yang disebut Dusun Gunung Jati. Selanjutnya, Marga Semendawai disebut keturunan Tan Dipulau dari Dusun Kuripan. Sedangkan untuk di Marga Bengkulah, pembawa dan penyiar Islam adalah Moyang Tuan Syarif Ali dan Tuan Murarob yang berasal dari Banten dan dibantu oleh Tuan Tanjung Idrus Salam. \r\n\r\nTan Dipulau dalam Bahasa Komering berarti \'Tuan di Pulau\'. Makamnya, yang terletak di Dusun Kuripan, hingga kini masih terpelihara. Masyarakat Komering, khususnya marga Semendawai, sering berziarah kubur ke makam tersebut.\r\n\r\nMitos lain yang beredar dan merupakan sebuah kesalahan besar yang menyatakan bahwa asal-usul Suku Komering masih ada hubungannya dengan Suku Batak di Sumatera Utara, dimana dikatakan bahwa Suku Komering dengan Suku Batak Sumatera Utara dikisahkan masih bersaudara, kakak-beradik yang datang dari negeri seberang.\r\n\r\nSetelah sampai di Sumatra, mereka berpisah. Sang kakak pergi ke selatan menjadi puyang Suku Komering, dan sang adik ke utara menjadi nenek moyang Suku Batak.\r\n\r\nApa yang mendasari pendapat para penulis tersebut, apakah hanya sebatas dari sumber cerita rakyat yang tidak mempunyai bukti kongkrit dan kejelasan akan fakta tersebut. Bahkan cerita rakyat yang menyatakan mitos tersebut tidak diketahui secara menyeluruh oleh semua masyarakat Komering, dan hanya berkembang di daerah Ogan komering Ulu, itu pun tidak menyebar secara luas.\r\n\r\nKarena jika dilihat dari segi Adat Istiadat, mulai dari rumah dan pakaian adat, makanan tradisional, hukum, tatacara adat serta kebiasaan masyarakat, sama sekali tidak ditemukan kemiripan yang identik yang dapat mendifinisikan bahwa adanya hubungan asal-usul antara Suku Komering dengan Suku batak di Sumatera Utara.\r\n\r\nKemudian jika dilihat dari segi etnis atau ras, mulai dari bentuk wajah dan warna kulit, juga tidak ditemukan kemiripan yang identik, karena biasanya orang yang berasal dari Suku Batak memiliki rahang bawah yang lebih tegas dan cenderung membentuk segi dengan tulang alis dan tulang pipi yang sedikit lebih menonjol, berbeda dengan orang yang berasal dari Suku Komering yang memiliki ciri-ciri fisik yang lebih mirip dengan ras Melayu pada umumnya.\r\n\r\nApa yang melatar belakangi pendapat tersebut? Lagi-lagi pertanyaan ini sering terngiang pada pikiran kami, bahkan mungkin pada anda semua sebagai pembaca. Dilihat dari segi Bahasa, apakah hanya dikarenakan adanya beberapa kosa kata dari masyarakat Suku Komering ada kemiripannya dengan Suku Batak di Sumatera Utara, jika itu yang mendasari pendapat tersebut, seberapa banyak kemiripan kosa kata yang ada?\r\n\r\nTidak hanya dengan Suku Sunda, Bahasa Komering juga memiliki kesamaan kosa kata dengan Bahasa Melayu, baik itu Melayu Palembang maupun Melayu Piawai (Riau, Langkat, Serdang, Siak), Bahasa Aceh bahkan dengan Suku Jawa, di antara kesamaan kosa kata tersebut adalah: kawai (Melayu Piawai dan komering) yang berarti baju, sayu (Melayu Piawai dan Komering) yang berarti sedih atau pikiran jauh, biduk (Melayu Piawai dan Komering) yang berarti perahu, pinggan/pingan (Melayu Piawai dan Komering) yang berarti piring.\r\n\r\nKemiripan dengan bahasa Aceh diantaranya, Apui (Aceh dan Komering) yang berarti api, Kulat/Kulak (Aceh dan Komering) yang berarti jamur, Tanoh (Aceh dan Komering) yang berarti tanah, Asu (Jawa dan Komering) yang berarti anjing, Rawang/Lawang (Jawa dan Komering) yang berarti pintu, Sapa (Jawa) dengan Sopo (Komering) yang serarti siapa.\r\n\r\n Demikian beberapa fakta yang ada, dan sebenarnya mungkin masih terdapat banyak lagi kemiripan kosa kata lainnya, yang tentunya tidak dapat kita sajikan semuanya dalam artikel ini. Dengan beberapa kemiripan kosa kata yang ada antara bahasa komering dengan beberapa Suku di Indonesia tersebut, apakah asal-usul Suku Komering bisa dikatakan ada hubungannya dengan dengan beberapa suku tersebut?\r\n\r\nSeperti yang kita ketahui bersama, di dalam Suku Komering itu sendiri terdapat paling tidak dua ragam intonasi suara dalam berbahasa (Dialek/Logat), Dialek Suku Komering Marga Bengkulah akan terdengar cenderung berintonasi lebih datar, halus serta tidak mendayu jika dibandingkan dengan Bahasa Komering Ulu (mendiami bagian hulu Sungai Komering) yang intonasinya akan cenderung lebih tegas, tinggi dan mendayu.\r\n\r\nKemudian jika masalah intonasi suara (Dialek/Logat) antara Bahasa Komering pada umumnya (Komering OKU) dibandingkan dengan Bahasa Batak yang memiliki kemiripan, yaitu sama-sama berintonasi dialek/logat yang tinggi dan tegas (keras/lantang) menjadi latar belakang pendapat yang mengatakan bahwa asal usul Suku Komering masih ada hubungan yang erat dengan Suku Batak di Sumatera Utara.\r\n\r\nLalu bagaimana dengan kemiripan intonasi antara Bahasa Komering dengan Bahasa Bugis Sulawesi dan suku-suku di Indonesia timur di antaranya Flores, Maluku serta Timor. Dengan fakta tersebut apakah suku Komering bisa dikatakan ada hubungan asal usul yang sangat erat dengan suku-suku tersebut? \r\n\r\nArtinya, jelas bahwa ada beberapa hal seperti kosa kata atau adat istiadat yang mungkin mirip, tetpi dengan itu lalu kita serta merta menyimpulkan bahwa di antara suku-suku itu dulunya memiliki hubungan darah atau sejenis.\r\n\r\nKarena itu, sangat butuhkan penelitian yang lebih ke dalam dan lebih luas untuk membuktikan apakah suku Komering di Sumatra Selatan memiliki hubungan dengan suku Batak di Sumatra Utara.\r\n\r\nTentu saja, tidak dengan semudah itu kita dapat berargumentasi dan mengeluarkan pendapat, apalagi pendapat itu sangat terkait dengan sejarah dan asal-usul suatu suku bangsa, dengan sebuah argumentasi yang mungkin masih dangkal alias belum akurat.', 1);

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
  `kode_desa` int(5) NOT NULL,
  `kode_kecamatan` varchar(5) NOT NULL,
  `nama_desa` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_desa`
--

INSERT INTO `tbl_desa` (`id_desa`, `kode_desa`, `kode_kecamatan`, `nama_desa`) VALUES
(33, 0, '1', 'Bandar Jaya   '),
(34, 1, '1', 'Bangun Harjo'),
(35, 2, '1', ' Banyu Biru     '),
(36, 3, '1', 'Bukit Batu'),
(37, 4, '1', 'Jadi Mulya'),
(38, 5, '1', 'Kerta Mukti'),
(39, 6, '1', 'Marga Tani'),
(40, 7, '1', 'Margo Mulyo'),
(41, 8, '1', 'Mukti Jaya '),
(42, 9, '1', 'Negeri Sakti'),
(43, 10, '1', 'Nusa Kerta'),
(44, 11, '1', 'Nusantara'),
(45, 12, '1', 'Panggung Harjo'),
(46, 13, '1', 'Pangkalan Damai'),
(47, 14, '1', 'Pangkalan Sakti'),
(48, 15, '1', 'Rantau Karya'),
(49, 16, '1', 'Rengas Abang'),
(50, 17, '1', 'Sapta Harjo'),
(51, 18, '1', 'Serijaya Batu'),
(52, 19, '1', 'Sido Makmur'),
(53, 20, '1', 'Sido Rahayu'),
(54, 21, '1', 'Simpang Heran'),
(55, 22, '1', 'Simpang Jaya Baru'),
(56, 23, '2', ' Suka Mulya '),
(57, 24, '1', ' Sungai Batang '),
(58, 25, '2', 'Timbul Harjo '),
(59, 26, '1', 'Tirta Mulya'),
(60, 27, '3', 'Cengal'),
(61, 28, '3', 'Kuala Sungai Jeruju'),
(62, 29, '3', 'Kuala Sungai Pasir'),
(63, 30, '3', 'Pelimbangan'),
(64, 31, '3', 'Sungai Jeruju'),
(65, 32, ' CEL ', 'Sungai Ketupak'),
(66, 33, ' CEL ', 'Sungai Lumpur'),
(67, 34, ' CEL ', 'Sungai Pasir'),
(68, 35, ' CEL ', 'Sungai Somor'),
(69, 36, ' CEL ', 'Talang Rimba'),
(70, 37, ' JEJ ', 'Air HItam'),
(71, 38, ' JEJ ', 'Bantun Baru'),
(72, 39, ' JEJ ', 'Bubusan'),
(73, 40, ' JEJ ', 'Jejawi'),
(74, 41, ' JEJ ', 'Karang Agung'),
(75, 42, ' JEJ ', 'Lengkis'),
(76, 43, ' JEJ ', 'Lubuk Ketepeng'),
(77, 44, ' JEJ ', 'Muara Batun'),
(78, 45, ' JEJ ', 'Padang Bulan'),
(79, 46, ' JEJ ', 'Pedu'),
(80, 47, ' JEJ ', 'Pematang Kijang'),
(81, 48, ' JEJ ', 'Simpang Empat'),
(82, 49, ' JEJ ', 'Sukadarma'),
(83, 50, ' JEJ ', 'Talang Cempedak'),
(84, 51, ' JEJ ', 'Tanjung Ali'),
(85, 52, ' JEJ ', 'Tanjung Aur'),
(86, 53, ' JEJ ', 'Terusan Jawa'),
(87, 54, ' JEJ ', 'Ulak Tembaga'),
(88, 55, ' KAG ', 'Celikah'),
(89, 56, ' KAG ', 'Sukadana'),
(90, 57, ' KAG ', 'Paku'),
(91, 58, ' KAG ', 'Mangun Jaya'),
(92, 59, ' KAG ', 'Cinta Raja/Raya'),
(93, 60, ' KAG ', 'Sidakersa'),
(94, 61, ' KAG ', 'Jua-Jua'),
(95, 62, ' KAG ', 'Kedaton'),
(96, 63, ' KAG ', 'Kota Raya'),
(97, 64, ' KAG ', 'Tanjung Lubuk'),
(98, 65, ' KAG ', 'Anyar'),
(99, 66, ' KAG ', 'Arisan Buntal'),
(100, 67, ' KAG ', 'Banding Anyar'),
(101, 68, ' KAG ', 'Buluh Cawang'),
(102, 69, ' KAG ', 'Kayu Agung'),
(103, 70, ' KAG ', 'Kijang Ulu'),
(104, 71, ' KAG ', 'Lubuk Dalam'),
(105, 72, ' KAG ', 'Muara Baru'),
(106, 73, ' KAG ', 'Perigi'),
(107, 74, ' KAG ', 'Serigeni Baru'),
(108, 75, ' KAG ', 'Serigini Lama'),
(109, 76, ' KAG ', 'Tanjung Menang'),
(110, 77, ' KAG ', 'Tanjung Rancing'),
(111, 78, ' KAG ', 'Tanjung Serang'),
(112, 79, ' KAG ', 'Teloko'),
(113, 80, ' LEM ', 'Bumi Agung'),
(114, 81, ' LEM ', 'Bumi Arjo'),
(115, 82, ' LEM ', 'Cahya Bumi'),
(116, 83, ' LEM ', 'Cahya Maju'),
(117, 84, ' LEM ', 'Dabuk Rejo'),
(118, 85, ' LEM ', 'Kepahyang'),
(119, 86, ' LEM ', 'Kuta Pandan'),
(120, 87, ' LEM ', 'Mekar Jaya'),
(121, 88, ' LEM ', 'Sindang Sari'),
(122, 89, ' LEM ', 'Sukamulya'),
(123, 90, ' LEM ', 'Sumber Agung'),
(124, 91, ' LEM ', 'Sungai Belida II'),
(125, 92, ' LEM ', 'Tebing Suluh'),
(126, 93, ' LEM ', 'Tugu Agung'),
(127, 94, ' LEM ', 'Tugu Jaya'),
(128, 95, 'LEJ', ' Tugumulyo '),
(129, 96, ' LEM ', 'Tulung Harapan'),
(130, 97, 'LEJ', 'Lempuing Indah'),
(131, 98, 'LEJ', 'Lubuk Makmur'),
(132, 99, 'LEJ', 'Lubuk Seberuk'),
(133, 100, 'LEJ', 'Muara Burnai I'),
(134, 101, 'LEJ', 'Muara Burnai II'),
(135, 102, 'LEJ', 'Mukti Sari'),
(136, 103, 'LEJ', 'Purwo Asri'),
(137, 104, 'LEJ', '  Rantau Durian I '),
(138, 105, 'LEJ', 'Rantau Durian II'),
(139, 106, 'LEJ', 'Sukajaya'),
(140, 107, 'LEJ', 'Sukamaju'),
(141, 108, 'LEJ', 'Sungai Belida'),
(142, 109, 'LEJ', 'Tania Makmur'),
(143, 110, 'LEJ', 'Tania Selatan'),
(144, 111, 'LEJ', 'Tanjung Sari I'),
(145, 112, 'LEJ', 'Tanjung Sari II'),
(146, 113, 'MES', 'Jaya Bakti'),
(147, 114, 'MES', 'Kali Deres'),
(148, 115, 'MES', 'Karya Mukti'),
(149, 116, 'MES', 'Kembang Jajar'),
(150, 117, 'MES', 'Kota Baru'),
(151, 118, 'MES', '  Makarti Mulya  '),
(152, 119, 'MES', 'Marga Bakti'),
(153, 120, 'MES', 'Marga Bakti'),
(154, 121, 'MES', 'Mekar Wangi'),
(155, 122, 'MES', 'Pagar Dewa'),
(156, 123, 'MES', 'Pematang Panggang'),
(157, 124, 'MES', 'Suka Mukti'),
(158, 125, 'MES', 'Sumber Deras'),
(159, 126, 'MES', 'Sungai Sodong'),
(160, 127, 'MES', 'Surya Adi'),
(161, 128, ' MEM ', 'Beringin Jaya'),
(162, 129, ' MEM ', 'Binakarsa'),
(163, 130, ' MEM ', 'Cahaya Mas'),
(164, 131, ' MEM ', 'Cahaya Mulya'),
(165, 132, ' MEM ', 'Catur Tunggal'),
(166, 133, ' MEM ', 'Gading Sari'),
(167, 134, ' MEM ', 'Kampung Baru'),
(168, 135, ' MEM ', 'karya Jaya'),
(169, 136, ' MEM ', 'Karya Usaha'),
(170, 137, ' MEM ', 'Labuhan Jaya'),
(171, 138, ' MEM ', 'Mesuji Jaya'),
(172, 139, ' MEM ', 'Mukti Karya '),
(173, 140, ' MEM ', 'Pematang Bina Tani'),
(174, 141, ' MEM ', 'Pematang Jaya'),
(175, 142, ' MEM ', 'Pematang Sari'),
(176, 143, ' MEM ', 'Pematang Sukamarah'),
(177, 144, ' MEM ', 'Pematang Sukatani'),
(178, 145, ' MEM ', 'Sumber Mulya'),
(179, 146, ' MEM ', 'Sumber Karta'),
(180, 147, ' MEM ', 'Tegal Sari'),
(181, 148, ' MER ', 'Balian'),
(182, 149, ' MER ', 'Balian Makmur'),
(183, 150, ' MER ', 'Bumi Makmur'),
(184, 151, ' MER ', 'Cipta Sari'),
(185, 152, ' MER ', 'Dabuk Makmur'),
(186, 153, ' MER ', 'Embacang'),
(187, 154, ' MER ', 'Embacang Permai'),
(188, 155, ' MER ', 'Gedung Rejo'),
(189, 156, ' MER ', 'Kemang Indah'),
(190, 157, ' MER ', 'Kerta Mukti'),
(191, 158, ' MER ', 'Mataram Jaya'),
(192, 159, ' MER ', 'Mulya Jaya'),
(193, 160, ' MER ', 'Rotan Mulya'),
(194, 161, ' MER ', 'Sedyo Mulya'),
(195, 162, ' MER ', 'Suka Sari'),
(196, 163, ' MER ', 'Sumber Baru'),
(197, 164, ' MER ', 'Sumbu Sari'),
(198, 165, ' PAM ', 'Bangsal'),
(199, 166, ' PAM ', 'Jermun'),
(200, 167, ' PAM ', 'Kandis'),
(201, 168, ' PAM ', 'Keman'),
(202, 169, ' PAM ', 'Keman Baru'),
(203, 170, ' PAM ', 'Kuro'),
(204, 171, ' PAM ', 'Manggaris'),
(205, 172, ' PAM ', 'Pampangan'),
(206, 173, ' PAM ', 'Pulau Betung'),
(207, 174, ' PAM ', 'Pulau Layang'),
(208, 175, ' PAM ', 'Secondong'),
(209, 176, ' PAM ', 'Sepang'),
(210, 177, ' PAM ', 'Serdang'),
(211, 178, ' PAM ', 'Sari Menang'),
(212, 179, ' PAM ', 'Tanjung Kemang'),
(213, 180, ' PAM ', 'Tapus'),
(214, 181, ' PAM ', 'Ulak Depati'),
(215, 182, ' PAM ', 'Ulak Keman Baru'),
(216, 183, ' PAM ', 'Ulak Kemang'),
(217, 184, ' PAM ', 'Ulak Pianggu'),
(218, 185, 'PAL', 'Air Pedara'),
(219, 186, 'PAL', 'Air Rumbai'),
(220, 187, 'PAL', 'Darat'),
(221, 188, 'PAL', 'Deling'),
(222, 189, 'PAL', 'Lebung Batang'),
(223, 190, 'PAL', 'Lirik'),
(224, 191, 'PAL', 'Pangkalan Lampam'),
(225, 192, 'PAL', 'Perigi'),
(226, 193, 'PAL', 'Pulauan'),
(227, 194, 'PAL', 'Rambai'),
(228, 195, 'PAL', 'Riding'),
(229, 196, 'PAL', 'Rimba Samak'),
(230, 197, 'PAL', 'Suka Raja'),
(231, 198, 'PAL', 'Sukadamai'),
(232, 199, 'PAL', ' Sungai Bungin '),
(233, 200, 'PAL', 'Sunggutan'),
(234, 201, 'PAL', 'Talang Jaya'),
(235, 202, ' PED ', 'Burnai Timur'),
(236, 203, ' PED ', 'Cinta Jaya'),
(237, 204, ' PED ', 'Lebuh Rarak'),
(238, 205, ' PED ', 'Menang Jaya'),
(239, 206, ' PED ', 'Pedamaran I'),
(240, 207, ' PED ', 'Pedamaran II'),
(241, 208, ' PED ', ' Pedamaran III'),
(242, 209, ' PED ', 'Pedamaran IV'),
(243, 210, ' PED ', 'Pedamaran V'),
(244, 211, ' PED ', 'Pedamaran VI'),
(245, 212, ' PED ', 'Serinanti'),
(246, 213, ' PED ', 'Sukadamai'),
(247, 214, ' PED ', 'Suka Pulih'),
(248, 215, ' PED ', 'Suka Raja'),
(249, 216, ' PER ', 'Gading Rejo'),
(250, 217, ' PER ', 'Kayu Labu'),
(251, 218, ' PER ', 'Mari Baya'),
(252, 219, ' PER ', 'Pancawarna'),
(253, 220, ' PER ', 'Pulau Geronggang'),
(254, 221, ' PER ', ' Sumber Hidup'),
(255, 222, ' PER ', 'Tanjung Makmur'),
(256, 223, ' SPP ', 'Awal Terusan'),
(257, 224, ' SPP ', 'Batu Ampar'),
(258, 225, ' SPP ', 'Batu Ampar Baru'),
(259, 226, ' SPP ', 'Belanti'),
(260, 227, ' SPP ', 'Berkat'),
(261, 228, ' SPP ', 'Bungin Tinggi'),
(262, 229, ' SPP ', 'Mangun Jaya'),
(263, 230, ' SPP ', 'Pantai'),
(264, 231, ' SPP ', 'Pematang Buluran'),
(265, 232, ' SPP ', 'Penyandingan'),
(266, 232, ' SPP ', 'Rawang Besar'),
(267, 233, ' SPP ', 'Rengas Pitu'),
(268, 234, ' SPP ', 'Serdang Menang'),
(269, 235, ' SPP ', 'Sirah Pulau Padang'),
(270, 236, ' SPP ', 'Sirah Pulau Padang'),
(271, 237, ' SPP ', 'Sukaraja'),
(272, 238, ' SPP ', 'Tanjung Alai'),
(273, 239, ' SPP ', 'Terate'),
(274, 240, ' SPP ', 'Terusan Laut'),
(275, 241, ' SPP ', 'Terusan Menang'),
(276, 242, ' SPP ', 'Ulak Jermun'),
(277, 243, ' SUM ', 'Bumi Pratama Mandiri'),
(278, 245, ' SUM ', ' Gading Mas '),
(279, 246, ' SUM ', 'Gajah Makmur'),
(280, 247, ' SUM ', 'Gajah Mati'),
(281, 248, ' SUM ', 'Gajah Mukti'),
(282, 249, ' SUM ', 'Gajah Mulya'),
(283, 250, ' SUM ', 'Harapan Jaya'),
(284, 251, ' SUM ', 'Karang Sia'),
(285, 252, ' SUM ', 'Pinang Indah'),
(286, 253, ' SUM ', 'Sidomulyo'),
(287, 254, ' SUM ', 'Sri Gading'),
(288, 255, ' SUM ', 'Sungai Ceper'),
(289, 256, ' SUM ', 'Sungai Menang'),
(290, 257, ' SUM ', 'Sungai Pinang Indah'),
(291, 258, ' SUM ', 'Sungai Sibur'),
(292, 259, ' SUM ', 'Sungai Tepuk'),
(293, 260, ' SUM ', 'Talang Jaya'),
(294, 261, ' SUM ', 'Talang Makmur'),
(295, 262, 'TGL', 'Atar Balam'),
(296, 263, 'TGL', 'Bumi Agung'),
(297, 264, 'TGL', 'Cuk Dadak'),
(298, 265, 'TGL', 'Jambu Ilir'),
(299, 266, 'TGL', 'Kota Bumi'),
(300, 267, 'TGL', 'Pengarayan'),
(301, 268, 'TGL', 'Pulau Gemantung'),
(302, 269, 'TGL', 'Pulau Gemantung Darat'),
(303, 270, 'TGL', 'Pulau Gemantung Ilir'),
(304, 271, 'TGL', 'Pulau Gemantung Ulu'),
(305, 272, 'TGL', 'Seri Tanjung'),
(306, 273, 'TGL', 'Suka Mulya'),
(307, 274, 'TGL', 'Sukarami'),
(308, 275, 'TGL', 'Tanjung Baru'),
(309, 276, 'TGL', 'Tanjung Beringin'),
(310, 277, 'TGL', 'Tanjung Laga'),
(311, 278, 'TGL', 'Tanjung Laut'),
(312, 279, 'TGL', 'Tanjung Lubuk'),
(313, 280, 'TGL', 'Tanjung Merindu'),
(314, 281, 'TGL', 'Ulak Balam'),
(315, 282, 'TGL', 'Ulak Kapal'),
(316, 283, ' TEG ', 'Benawa'),
(317, 284, ' TEG ', 'Bumi Harapan'),
(318, 285, ' TEG ', 'Cinta Marga'),
(319, 286, 'TGL', 'Kuripan'),
(320, 287, ' TEG ', 'Muara Telang'),
(321, 288, ' TEG ', 'Mulya Guna'),
(322, 289, ' TEG ', 'Panca Tunggal Benawa'),
(323, 290, ' TEG ', 'Penyandingan'),
(324, 291, ' TEG ', 'Serapek'),
(325, 292, ' TEG ', 'Seriguna'),
(326, 293, ' TEG ', 'Sinar Harapan Mulya'),
(327, 294, ' TEG ', 'Sugih Waras'),
(328, 295, ' TEG ', 'Talang Pangeran'),
(329, 296, ' TEG ', 'Ulak Ketapang'),
(330, 297, ' TUS ', 'Cambai'),
(331, 298, ' TUS ', 'Jerambah Rengas'),
(332, 299, ' TUS ', 'Kayu Ara'),
(333, 300, ' TUS ', 'Kuala Dua Belas'),
(334, 301, ' TUS ', 'Lebung Gajah'),
(335, 302, ' TUS ', 'Lebung Itam'),
(336, 303, ' TUS ', 'Penanggoan Duren'),
(337, 304, ' TUS ', 'Penyandingan'),
(338, 305, ' TUS ', 'Petaling'),
(339, 306, ' TUS ', 'Pulau Beruang'),
(340, 307, ' TUS ', 'Rantai Lurus'),
(341, 308, ' TUS ', 'Simpang Tiga'),
(342, 309, ' TUS ', 'Simpang Tiga Abadi'),
(343, 310, ' TUS ', 'Simpang Tiga Jaya'),
(344, 311, ' TUS ', 'Simpang Tiga Makmur'),
(345, 312, ' TUS ', 'Simpang Tiga Sakti'),
(346, 313, ' TUS ', 'Toman'),
(347, 314, ' TUS ', 'Tulung Selapan Ilir'),
(348, 315, ' TUS ', 'Tulung Selapan Ulu'),
(349, 316, ' TUS ', 'Tulung Seluang'),
(350, 317, ' TUS ', 'Ujung Tanjung'),
(351, 318, ' TUS ', 'Tanjung Batu');

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
(21, '1', 'Lempuing '),
(22, '2', 'Lempuing Jaya'),
(23, '3', 'Mesuji'),
(24, '4', ' Sungai Menang '),
(25, '5', ' Mesuji Makmur '),
(26, '6', ' Mesuji Raya '),
(27, '7', ' Tulung Selapan '),
(28, '8', ' Cengal '),
(29, '9', ' Pedamaran '),
(30, '10', ' Pedamaran Timur '),
(31, '11', 'Tanjung Lubuk'),
(32, '12', ' Teluk Gelam '),
(33, '13', ' Kayu Agung '),
(34, '14', ' Sirah Pulau Padang '),
(35, '15', ' Jejawi '),
(36, '16', ' Pampangan '),
(37, '17', '  Pangkalan Lampam  '),
(38, '18', 'Air Sugihan ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(128) NOT NULL,
  `email_kontak` varchar(128) NOT NULL,
  `judul_kontak` varchar(500) NOT NULL,
  `pesan_kontak` varchar(500) NOT NULL,
  `waktu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id_kontak`, `nama_kontak`, `email_kontak`, `judul_kontak`, `pesan_kontak`, `waktu`) VALUES
(3, 'Ikhlasul Amal', 'ikhlasul0507@gmail.com', 'Wow Hebat', 'Anda Hebat Yah', ''),
(7, 'Hamid', 'ihsanuddin870@gmail.com', 'Wak hamid ', 'Terbaik', ''),
(8, 'Amal', 'ikhlasul0507@gmail.com', 'perbaikan fasilitas', 'Perbaiki Fasilitas Parkir', '11-09-2020 09:15:49'),
(9, 'wawan', 'vxproductionofficial@gmail.com', 'Perbaikan', 'perbaikan pelayanan', '11-09-2020 12:54:40');

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
(12, 'srnh1', 'S1', '13', '56', 'HOTEL DINESTI KAYU AGUNG', 'Kayu Agung, SumatraSelatan, Indonesia', 'DINESTI HOTEL merupakan satu-satunya hotel berbintang yang ada di Kota Kayu Agung – OKI – Sumatera Selatan Terletak strategis di jantung Kota Kayu Agung, dan sebagai hotel berbintang 2 (dua), kami berupaya memberikan pelayanan yang terbaik. dengan berbagai fasilitas pada setiap kamar yang kami miliki, kami memberikannya dengan harga yang terjangkau.', '	JL.Letnan Muchtar Saleh No.42 Kayuagung OKI Telp. (0712) 322888 ( Hunting ) Fax (0712) 322691 ROOM RATE ACCOMODATION SINGLE/ DOUBLE BED INCLUDED SUITE Rp. 450.000, - B’FAST FAMILY EXECUTIVE Rp. 385.000, - B’FAST EXECUTIVE Rp. 335.000, - B’FAST DELUXE Rp. 310.000, - B’FAST EXTRA BED Rp. 75.000, - B’FAST PILLOW Rp. 20.000, - ALL RATE ARE INCLUDED 21% GOVERNMENT TAX AND SERVICE FASILITIES AC MINI BAR TELEPHONE DOUBLE / TWIN BED FREE BREAKFAST ( 2 PERSON ) HOT AND COLD RUNNING WATER COFFEE SHOP RES', 'dinasti.jpg', 'https://www.youtube.com/embed/p6dHqD3pOj8', 'https://g.page/Dinesti?share', '-3.3900384', '104.8263975', 0),
(13, 'SRNH2', 'S1', '13', '212', 'OYO 3205 PENGINAPAN MIKIAL ISMI KAYUAGUNG', 'OYO 3205 Penginapan Mikial Ismi Kayuagung adalah akomodasi bintang 2 yang terletak di Palembang. Berbagai fasilitas akomodasi di antaranya adalah resepsionis 24 jam, dapur bersama, dan Wi-Fi gratis di seluruh areanya. Parkir pribadi dapat diatur dengan biaya tambahan.\r\n\r\nKamar-kamar di hotel ini memiliki meja kerja, TV, dan kamar mandi pribadi.', 'OYO 3205 Penginapan Mikial Ismi Kayuagung telah menyambut tamu Booking.com sejak 3 Mar 2020.\r\nJaringan/brand hotel: OYO Rooms\r\n\r\nFasilitas paling populer\r\n Termasuk Akses Wi-Fi Gratis', 'Anak-anak bisa menginap.\r\n\r\nAnak berusia 6 tahun ke atas dianggap sebagai orang dewasa di akomodasi ini.\r\n\r\nUntuk melihat informasi harga dan tingkat hunian yang tepat, mohon tambahkan jumlah dan usia anak dalam rombongan Anda di pencarian.\r\n\r\nKebijakan ranjang bayi dan tempat tidur ekstra\r\nTidak ada kapasitas untuk ranjang bayi di akomodasi ini.\r\n\r\nTidak ada kapasitas untuk tempat tidur ekstra di akomodasi ini.', 'oyo.jpg', 'https://www.youtube.com/embed/p6dHqD3pOj8', 'https://goo.gl/maps/bAjQSP2hrj2zTYwp9', '-3.3745997', '104.821879', 0),
(14, 'SRNM1', 'S2', '13', '69', 'RADIO KAYUAGUNG FM', 'Radio Kayuagung FM adalah satu-satunya radio Jaringan Etnikom di Kabupaten Ogan Komering Ilir yang mengemban kebudayaan OKI.\r\n\r\nRadio Kayuagung FM berdiri tanggal 23 Agustus 1997 ,  Saat Ini Kayuagung FM mengudara di gelombang FM 90.4 Mhz, dengan jangkauan Kabupaten OKI, OI sebagian Prabumulih dan OKU Timur.\r\n\r\nDi Kabupaten yang berdiri tanggal 11 Oktober 1945 ini Radio Kayuagung FM mengangkat potensi budaya lokal menjadi program radio agar pendengar dapat merasakan budayanya sendiri, berkesenia', 'Format Siaran Radio Kayuagung FM etnik Ogan Komering Ilir yang dikemas sedemikian rupa, program dengan balutan kreatifitas dan bermanfaat agar diminati semua usia  dan semua kalangan, Program Kayuagung FM bukan hanya sekedar hiburan tetapi di lengkapi dengan sajian informasi budaya lokal dan nasional yang mengandung unsur edukasi dalam rangka peningkatan wawasan masyarakat.\"\"\"\"\"', 'Kayuagung FM  terus menerus berupaya memberikan pelayanan terbaik untuk pendengar dan client kami, dengan menyediakan radio internet online/radio streaming Kayuagung FM.\"\"\"\"\"', 'radio.jpg', 'https://www.youtube.com/embed/ao3pN8gn7-0', 'https://goo.gl/maps/43S5rdy7Y9VYD7hd6', '-3.3774222', '104.8269037', 0),
(15, 'SRNP1', 'S3', '11', '288', 'PASAR TRADISIONAL TELUK GELAM', 'Jl. Lintas Sumatera No.16, Mulya Guna, Tlk. Gelam, Kabupaten Ogan Komering Ilir, Sumatera Selatan 30673\"\"', 'Minggu\r\n05.00–14.00\r\n\r\nSenin\r\n05.00–14.00\r\n\r\nSelasa\r\n05.00–14.00\r\n\r\nRabu\r\n05.00–14.00\r\n\r\nKamis\r\n05.00–14.00\r\n\r\nJumat\r\n05.00–14.00\r\n\r\nSabtu\r\n05.00–14.00\"\"', '.\"\"', 'pedagang-ayam-di-pasar-induk-kayuagung.jpg', 'https://www.youtube.com/embed/p6dHqD3pOj8', 'https://goo.gl/maps/FzE6dF28HVricjiJA', '-3.4276602', '104.6578349', 0),
(16, 'srnp2', 'S3', '13', '69', 'PASAR KAYU AGUNG', 'Nama Kayuagung secara umum berasal dari sebuah sejarah, dimana pada zaman dahulunya, daerah kota kayuagung terdapat pohon-pohon yang berukuran besar, bahkan ada yang sampai berdiameter 4 meter, kemudian disimpulkanlah oleh para petua Pohon itu berarti Kayu sedangkan Besar Itu Agung. mungkin andapun secara tidak sengaja pernah melihat pohon berukuran besar di kota anda, kemungkinannya itu merupakan pohon kayuagung, tetapi bukan berarti setiap pohon yang besar itu merupakan pohon kayuagung, ciri k', 'Di wilayah Kabupaten Ogan Komering Ilir (OKI) terdapat beberapa daerah, di antaranya adalah bahasa Kayuagung, Komering, Pedamaran, Melayu Palembang, Jawa, dan beberapa bahasa atau dialek lainya. Bahasa Indonesia juga dipergunakan secara luas, selain bahasa seperti bahasa Inggris dan Arab Yang penggunananya sangat terbatas. Kabupaten Ogan Komering Ilir ( OKI) beribu kota di Kayuagung. Berdasarkan sejarahnya, wilayah ini didukung oleh apa yang oleh masyarakat setempat disebut dengan morge siwe ( a', 'Kayuagung ibu kota dari Kabupaten Ogan Komering Ilir merupakan Pemerintah Daerah Tingkat II di Sumatra Selatan yang luasnya sekitar 21.469,90 kilometer persegi yang secara geografis terletak antara 104 2\'-106 o\' derajat Bujur Timur dan 4o 30\'-4o 15 derajat Lintang Selatan. jumlah penduduk dalam sensus 2010 mencapai kurang-lebih 71.667 ribu jiwa lebih, mayoritas penduduknya beragama Islam.\r\n\r\nIklim di Kayu Agung, Ibu Kota Kabupaten Ogan Komering Ilir tergolong dalam Tropik Basah dengan curah huja', 'kondisi-pasar-kayuagung-oki-h-2-idul-fitri-1441-h.jpg', 'https://www.youtube.com/embed/p6dHqD3pOj8', 'https://goo.gl/maps/6NydJTr4Fgum62Ea7', '-3.3576482', '104.7860333', 0),
(17, 'srnk1', 'S4', '13', '60', 'GERABAH KHAS KAYUAGUNG', 'Kenapa Bentuk/Tekstur Gerabah Kayuagung tidak berkembang, ke gaya modern mengenai bentuk dan teksturnya? Hal ini dikarenakan alasan yang sangat mendasar,karena keterkaitannya dengan nilai filosofisnya. Bahwa bentuk,bahan dan nama setiap jenis grabah dimaksud memiliki filosofis tersendiri.\r\n\r\nDengan alasan inilah maka bahan, cara membuat dan bentuknya tidak bisa di rekayasa sesuai perkembangan zaman. Sah-sah saja untuk membentuk motif/desain lain, namun karya pembaharuan itu tidak bisa di kategor', 'Bahan dan alat manual pembuatan grabah kayuagung, dari tanah liat dan pasir halus menjadi : Kowan, Anglu, Tungku, Singkup, Ponai, Cibik, Gontung, Pasu, Belange, Perondangan, Kibuk, Clingan dan Beragam Mainan Anak....\r\n', 'Sumber : Budayawan Yus Lizal', 'gerabah.jpg', 'https://www.youtube.com/embed/AHTbOZZzDGE', 'https://goo.gl/maps/7isT4cMvfscfnN6e7', '-3.391813', '104.7993124', 0),
(18, 'srnr1', 'S5', '13', '69', 'RM HIKMAH DUA', 'Baik (02/06/2019 18:47) Ada 3 manu utama di tempat itu sate (tusuk daging dengan saus kacang), martabak (telur dibungkus dengan adonan tipis lalu digoreng ditambah kuah kari) nasi bungkus (nasi dengan vegie dan aneka lauk yang bisa anda pilih seperti telur goreng, ayam bakar, ikan bakar, rendang, dll. Untuk rasa il beri 3,8 dari 5 untuk nasi bungkus, 3 untuk sate, dan 4 untuk martabak Dan untuk tempat saya kasih 2.5 karena agak kotor kalau ramai.Dan harga terakhir murah banget terakhir kali saya', '.', '.', 'hikamh.jpeg', 'https://www.youtube.com/embed/p6dHqD3pOj8', 'https://goo.gl/maps/hXkcThFsUGiTesMT9', '-3.3873666', '104.8259435', 0),
(19, 'srnr2', 'S5', '13', '77', 'RUMAH MAKAN SEDERHANA', 'Nama Tempat : RUMAH MAKAN SEDERHANA\r\nAlamat Tempat : Tj. Rancing, Kota Kayu Agung, Kabupaten Ogan Komering Ilir, Sumatera Selatan 30867, Indonesia', '.', '.', 'sederahan.jpg', 'https://www.youtube.com/embed/p6dHqD3pOj8', 'https://goo.gl/maps/hxPhyeKVkt1vkoNE9', '-3.3798042', '104.6922079', 0),
(20, 'srnk2', 'S4', '9', '206', 'TIKAR PURUN PEDAMARAN', 'Salah satu kerajinan anyaman tradisional yang masih banyak dipakai dikalangan masyarakat sumatra Selatan adalah Tikar Purun atau Tikar Pedamaran.\r\n\r\npada zaman Kolonial Belanda ,di OKI ( Ogan Kemering Ilir) pun sudah ada , yaitu pada abad ke-19 (1870).\r\n\r\nPada zaman dahulu belanada membagi wilayah OKI menjadi 9 Bagian Afdeeling ke -8 dengan nama Afdeeling Komering Ilir.\r\n\r\nSebagian besar tikar purun bermotif geometris dan memiliki daya tahan yang cukup tinggi ,karena dibuat dari tanaman purun ya', '.', '.', 'tikar_purun.jpg', 'https://www.youtube.com/embed/f2WN4KyIJ9w', 'https://goo.gl/maps/6vyPS444JhhSERfG9', '-3.4833328', '104.8158234', 1),
(21, 'srnk1', 'S6', '13', '69', 'BLITZ FAMILY KTV & RESTO', 'Alamat: Jl. Lintas Sumatera, Cintaraja, Kec. Kayu Agung, Kabupaten Ogan Komering Ilir, Sumatera Selatan 30867\r\nJam buka: \r\nTutup ⋅ Buka pukul 10.00\r\nTelepon: (0712) 321209', '.', '.', 'karoke.jpg', 'https://www.youtube.com/embed/dQhJI_-WIc0', 'https://goo.gl/maps/SsHopSuCpXC1ZwZa7', '-3.186424', '104.6173656', 0),
(22, 'srnk2', 'S6', '13', '69', 'HM 23 KARAOKE', 'Sidakersa, Kec. Kayu Agung, Kabupaten Ogan Komering Ilir, Sumatera Selatan 30867', 'Minggu\r\nBuka 24 jam\r\n\r\nSenin\r\nBuka 24 jam\r\n\r\nSelasa\r\nBuka 24 jam\r\n\r\nRabu\r\nBuka 24 jam\r\n\r\nKamis\r\nBuka 24 jam\r\n\r\nJumat\r\nBuka 24 jam\r\n\r\nSabtu\r\nBuka 24 jam', 'JR2H+R9 Sidakersa, Kabupaten Ogan Komering Ilir, Sumatera Selatan', 'hm_karoke.jpg', 'https://www.youtube.com/embed/p6dHqD3pOj8', 'https://goo.gl/maps/QqctsiTiWqjMJdzz9', '3.326441', '104.668864', 0);

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
  `photo_wisata` varchar(500) NOT NULL,
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
(13, 'WST1', '1', '1', '1', 'DANAU TELUK GELAM', 'Danau Teluk Gelam merupakan salah satu objek wisata andalan di Kabupaten Ogan Komering Ilir, Sumatera Selatan. Danau ini menawarkan pemandangan alam yang mempesona. Suasana danau yang begitu tenang dengan hembusan semilir angin memberikan kesejukan bagi para wisatawan yang berada di danau ini. Pepohonan hijau yang rindang memberi keteduhan dan kenyamanan para wisatawan yang ada dibawahnya.\r\n\r\nDanau ini dinamakan Danau Teluk Gelam karena di tengah-tengah danau terdapat daratan yang ditumbuhi oleh', 'Berbagai aktifitas bisa dilakukan di danau ini, seperti mandi dipinggir danau, berolahraga air, memancing, berenang, berjalan-jalan mengelilingi danau atau sekedar duduk-duduk dipinggir danau sambil menikmati indahnya pemandangan. Tidak hanya itu saja, para wisatawan juga bisa berkeliling dengan menggunakan perahu.\"', 'Untuk mencapai objek wisata Danau Teluk Gelam dapat dilalui dari jalan lintas timur Sumatera. Dari Kota Palembang yang berjarak 92 kilometer dapat melalui jalan raya yang menuju kearah Lampung dengan menggunakan kendaraan pribadi ataupun kendaraan umum.\r\n\r\nFoto : lemabang.wordpress\r\n\r\nLIHAT WISATA PROPINSI SUMATERA SELATAN\"', 'Danau-Teluk-Gelam.png', 'https://www.youtube.com/embed/-aN89WFnHYk', 'https://goo.gl/maps/PqhnxyM43znLnjE4A', '-3.5649822', '104.7906981', 1, 1),
(14, 'WST2', '1', '10', '206', 'DANAU TELUK RASAU', 'Masih di Kecamatan Pedamaran tepatnya di desa Sukapulih, danau Teluk Rasau menyajikan pemandangan yang masih alami dengan penuh ketenangan. Di tepi danau banyak pepohonan yang membuat danau nampak semakin rindang. Objek wisata ini sangat tepat dikunjungi dikala penat karena lokasinya jauh dari keramaian kota.', 'Di sekitar danau Teluk Rasau ini, pengunjung juga bisa beristirahat di beberapa camp yang ada dan berwisata kuliner ikan air tawar yang ditangkap langsung dari danau Teluk Rasau ini.', 'Lokasi: Menang Raya, Pedamaran, Kab. Ogan Komering Ilir.', 'Danau-Teluk-Rasau1.jpg', 'https://www.youtube.com/embed/hdhiYBmvYm4', 'https://goo.gl/maps/FFEH4P3hzSyu7RKr5', '-3.5214415', '104.847704', 0, 1),
(15, 'WST4', '1', '7', '33', 'PULAU MASPARI', 'Kaganga.com - Tidak banyak yang tahu kalau Sumatera Selatan memilik pantai yang eksotis. Pernah mendengar tentang Pulau Maspari ? mungkin sebagian dari kita pernah mendengar tentang pulau ini tapi masih belum tahu persis seperti apa dan dimana keberadaannya.\r\n\r\nBerada di wilayah Provinsi Sumatera Selatan, Kabupaten Ogan Komering Ilir (OKI) tepatnya di Desa Sungai Lumpur, Kecamatan Tulung Selapan, keberadaan pulau ini menguatkan fakta baru bahwa Sumatera Selatan punya pantai. Secara fisiografis b', 'Seperti kebanyakan sebuah pulau yang sepi, terdapat beberapa fakta unik sampai cerita mistis dari pulau ini. Yang pertama, bagi  yang menggunakan telepon genggam, saat berada di Pulau Maspari kita akan mengalami kesulitan memperoleh sinyal seluler. Namun, disalah satu sisi pulau terdapat pohon yang dipasang transmitter sederhana untuk bisa memperoleh sinyal. Alhasil, pohon ini diberi nama “Pohon Sinyal”. Saat ada rombongan pengunjung yang datang ke pulau ini, mereka akan berdiri atau duduk menge', 'Untuk kisah mistis, beredar diantara masyarakat Pantai Timur bahwa Pulau Maspari akan terasa “angker” sesaat setelah adzan magrib sampai menjelang adzan subuh. Menurut cerita masyarakat di desa Simpang Tiga Makmur, Kecamatan Tulung Selapan, pernah ada nelayan yang akan menepi di pantai ini saat malam, dikejauhan dipantai terlihat sangat ramai seperti ada “Fire Camp” namun saat kapal akan menepi terlihat tidak ada tanda-tanda kehidupan di pantai itu.Banyak sekali cerita serupa di pulau ini pada s', 'Maspari,-Sumatera-Selatan-Punya-Pantai-1.jpg', 'https://www.youtube.com/embed/ctIf6WJe2Ro', 'https://goo.gl/maps/tQioM81PgVK91DMq8', '-3.2166665', '106.1991571', 1, 1),
(16, 'WST4', '3', '18', '3', 'BUKIT BATU', 'Bukit batu merupakan tujuan wisata yang menyimpan cerita cukup unik. Terdapat dua sisi cerita yang memiliki perbedaan cukup jauh. Cerita pertama yang beredar, bahwa bukit batu merupakan sebuah peradapan kuno yang sudah ada ribuan tahun lamanya. Di tempat ini ditemukan berbagai macam batu yang bentuknya sangat mirip dengan mahluk hidup khususnya manusia dan hewan. Sedangkan cerita lainnya, berkisah tentang seorang yang pahit lidah. Apapun yang diucapkan, bisa mengubah berbagai macam hal menjadi s', 'Entah mana yang benar dari kedua cerita ini, namun yang jelas bukit batu yang letaknya ada di Desa Bukit Batu Kecamatan Pangkalan Lampang ini sangat menarik untuk menjadi tujuan berwisata. Dengan pemandangan alam perbukitan yang eksotik membuat tenang pengunjung lengkap dengan banyak pohon rindang yang menjadikan udara semakin segar.', 'Lokasi: Bukit Batu, Kec. Air Sugihan, Kab. Ogan Komering Ilir.', 'Bukit-Batu.jpg', 'https://www.youtube.com/embed/AtSWrePvahY', 'https://goo.gl/maps/uDP1rigqgA6sfCb56', '-2.709601', '105.1865567', 0, 0),
(17, 'WST4', '3', '13', '75', 'RUMAH ADAT DI KAYU AGUNG', 'Ternyata di Ogan Komering Ilir tidak hanya ada tempat wisata alam saja, namun juga ada destinasi wisata sejarah dan budaya. Salah satunya adalah Rumah Adat yang lokasinya tidak jauh dari pusat kota.', 'Rumah adat di Kayu Agung ini masih kokoh dan menampilkan keindahan budaya dari daerah Sumatra Selatan. Dilengkapi dengan ornament cantik dan menawan, tentunya rumah adat di kayu agung ini mampu menarik minat wisatawan.', 'Lokasi: Kab. Ogan Komering Ilir.', 'Rumah-Adat-di-Kayu-Agung.jpg', 'https://www.youtube.com/embed/Nii2JcprMOM', 'https://goo.gl/maps/Pwe1nFn6shA7Qasp7', '-3.391813', '104.7993124', 0, 1),
(18, 'WST6', '3', '12', '287', 'RUMAH LIMAS 100 TIANG', 'Salah satu cagar budaya yang dilestarikan di Kabupaten Ogan Komering Ilir ini adalah Rumah Limas 100 Tiang. Rumah yang didirikan oleh pangeran Redjed Wiralaksana ini sudah berusia lebih dari 200 tahun. Karena tempat ini syarat dengan sejarah dan budaya maka pemerintah menjadikannya sebagai tempat yang menarik untuk dikunjungi wisatawan. Ada banyak ukiran khas Arab dan Cina, menambah cantiknya tempat ini.', 'Rumah Limas dibangun berdasarkan permintaan dari calon mertua Redjed Wiralaksana, yang menginginkan sebuah rumah dengan 100 tiang. Lokasi rumah limas berada di Desa Sugih Warah tepatnya di Kecamatan Teluk Gelam atau hanya 20 meter saja dari Sungai Komering. Bahkan di depan rumah, para wisatawan bisa langsung menikmati sejuknya sungai Komering yang mengalir tepat di depan rumah limas 100 tiang.', 'Lokasi: Muara Telang, Kec. Teluk Gelam, Kab. Ogan Komering Ilir.', 'Rumah-Limas-100-Tiang.jpg', 'https://www.youtube.com/embed/w6nY7QfKKqc', 'https://goo.gl/maps/8JWepkBTtNHbaY428', '-3.5153412', '104.7604138', 0, 0),
(19, 'SWT7', '2', '13', '69', 'TAMAN SEGITIGA EMAS', 'TRIBUNTRAVEL.COM - Meski tidak terbilang besar, Kayuagung yang menjadi Ibu Kota Kabupaten Ogan Komering Ilir (OKI), Provinsi Sumatera Selatan (Sumsel), memiliki pesona tersendiri.\r\n\r\nKayuagung sudah dikenal dengan kawasan yang bersih dengan tatanan kota yang rapi.\r\n\r\n\r\n\r\nArtikel ini telah tayang di Tribuntravel.com dengan judul Taman Segitiga Mas - Mengenang Keperkasaan dan Kekokohan Perahu Kajang di Taman Kayuagung, https://travel.tribunnews.com/2016/09/21/taman-segitiga-mas-mengenang-keperkasa', 'Tak heran, jika beberapa waktu lalu kota yang hanya berjarak 65 KM dari pusat kota Palembang ini menyabet piala Adipura yang ketujuh kalinya.\r\n\r\nPenghargaan tersebut tak lepas dari keberadaan taman kota yang mempercantik tatanan kota yang dijuluki Bumi Bende Seguguk ini.\r\n\r\nSebut saja taman Segitiga Mas, sebuah taman kota yang dibangun pada era pemerintahan Bupati Ishak Mekki.\r\n\r\nMeskipun taman tersebut diberi nama taman Amri Yahya, namun masyarakat\r\n\r\nsudah terbiasa menyebutnya dengan taman Seg', 'Hal ini disebabkan letak taman yang terletak di kawasan segitiga emas dan berjarak dekat dengan lapangan bola segitiga emas.\r\n\r\nOtomotasi keberadaan taman cantik tersebut menjadi icon Kayuagung.\r\n\r\nLetaknya yang strategis yakni di tengah jalan lintas menuju Lampung dan Palembang, membuat taman ini merupakan tempat favorit untuk singgah bahkan sekedar mengambil foto.\r\n\r\nTatanan taman yang rapi, hijau, dan bersih membuat taman itu terlihat menarik dari sisi manapun.\r\n\r\nSatu objek menarik yang seri', 'kabupaten-ogan-komering-ilir_20160921_100320.jpg', 'https://www.youtube.com/embed/Y39sjeuNlEs', 'https://goo.gl/maps/fmtEUnPg217BikF18', '-3.4071134', '104.8221995', 0, 0),
(20, 'WST8', '2', '13', '75', 'PANTAI LOVE, TEMPAT WISATA DI KAYU AGUNG OKI YANG INDAH', 'Jika menyebut pantai, pasti yang terbesit di pikiran adalah sebuah tempat luas dengan air berwarna biru yang menari-nari, ombak dan hamparan pasir yang dihiasi pohon kelapa. Namun Pantai Love di Kota Kayu Agung ini sangat berbeda, karena ini adalah sungai yang luas dan digunakan sebagai sarana rekreasi bagi masyarakat sekitar.', 'Meski begitu, pemandangan di Pantai Love tak kalah eksotis, terutama saat sore ketika matahari tenggelam. Pantai Love bisa menjadi destinasi yang cocok untuk sekedar bersantai menikmati semilir angin sore di Kota Kayu Agung. Adanya fasilitas berupa gazebo dan juga cukup banyak penjual makanan', 'menjadikan tempat ini sangat cocok menjadi sarana berkumpul bersama keluarga ataupun teman.', 'kota-kayuagung-kabupaten-oki-sungai-komering-copy.jpg', 'https://www.youtube.com/embed/j7xegSLd46w', 'https://goo.gl/maps/6tJFKNhh2jfthtL68', '-3.3925342', '104.8317689', 0, 0),
(21, 'WST8', '2', '13', '69', 'GOR PERAHU KAJANG', 'KAYUAGUNG RADIO – Cerita tentangkeakraban masyarakat Ogan Komering Ilir, Kayuagung khususnya dengan sungai telah lama terdengar.  Kedekatan mereka pada arus sungai menjadikan perahu tak ubahnya adalah rumah. Konon, mereka jarang menjejak daratan. Mereka merasa lebih nyaman mengayuh perahu di sungai dan cepat letih jika berjalan di daratan.\r\nYosa Rizal, S. Pd budayawan Ogan Komering Ilir mengatakan Perahu kajang khas dari daerah Kayu Agung, Ogan Komering Ilir ini  ukurannya cukup besar. Dayungnya', 'Menurut Yosa Rizal, perahu kajang tak ubahnya rumah berjalan bagi masyarakat Kayuagung tempo dulu.  “di atas perahu kajang, mereka bisa tinggal di sungai selama berbulan-bulan hingga bertahun-tahun baru pulang ke rumah di kampung.” Karena fungsinya mirip “rumah”, penghuni perahu kajang bisa sebuah keluarga utuh. Sepasang suami-istri, dan anak-anak. Pungkasnya.\r\nPerahu kajang beratapkan daun nipah. Perahu ini terdiri dari tiga bagian. Bagian depan atap yang disorong (kajang tarik), bagian tengah ', 'Sejarah keperkasaan masyarakat Kayuagung di Sungai berupa perahu kajang sekarang sudah sukar ditemui. Namun dengan tangan dingin Bupati OKI saat ini, H. Ishak Mekki perahu kajang tetap dipertahankan sebagai ikon Bumi Bende Seguguk. Untuk melestarikan karya dan ketrampilan para pendahulu dalam membuat perahu, telah dibangun di Kabupaten OKItepatnya di Lapangan Segi tiga Emas Kayuagung, Sebuah gedung olahraga dengan bentuk menyerupai perahu Kajang. Gedung ini merupakan gedung olahraga pertama di I', 'Gor-Kayuagung-Bangunan-Unik-Perahu-Kajang-.jpg', 'https://www.youtube.com/embed/pHVSJ0vW7cI', 'https://goo.gl/maps/VdScfbmKVAhqVYwWA', '3.4101309', '104.821942', 0, 0),
(22, 'WST9', '4', '13', '69', 'MASJID AGUNG SHOLIHIN KAYU AGUNG', 'Masjid Agung Sholihin Kayu Agung adalah masjid agung kabupaten Ogan Komering Ilir, provinsi Sumatera Selatan. Masjid ini berada di Kelurahan Sidakarsa, kota Kecamatan Kayu Agung ibukota Kabupaten Ogan Komering Ilir. Lokasi masjid ini persis bersebelahan dengan pendopo kabupaten sekaligus kediaman atau rumah dinas Bupati Kabupaten Ogan Komering Ilir.\r\n\r\nLokasi masjid ini juga berada ditepian sungai komering yang melintasi kota Kayu Agung, sebuah taman dibangun di tepi sungai ini tak jauh dari mas', 'Merujuk kepada data kementrian agama, masjid Agung Solihin Kayu Agung ini dibangun tahun 1948, diatas lahan wakaf seluas 1000 meter persegi dengan luas bangunan 500 meter persegi dan terdaftar dengan nomor induk masjid 01.2.06.02.04.000003.\r\n\r\nMasjid Agung Solihin merupakan masjid terbesar di Kayu Agung sekaligus menjadi pusat aktivitas Ke-Islaman tingkat kabupaten Ogan Komering Ilir. Selama bulan suci Romadhon masjid ini begitu meriah dengan beragam aktivitas ummat.\r\n\r\nSholat Tarawih di masjid ', '\r\nbagian atap masjid ini dihias beberapa bentuk kubah yang berdiri diatas tatakan kubah menyerupai menara menara pendek di atap masjid. Satu kubah dengan kerangka penopang yang cukup unik terlihat pada kubah di atas bangunan mihrab.\r\n\r\nHalaman parkir masjid ini cukup luas di dalam pagar masjid. hanya ada satu akses untuk kendaraan yakni dari pintu gerbang utama yang menghadap ke jalan raya di tepi sungai sementara akses untuk pejalan kaki juga tersedia di sisi ruas jalan yang menghadap ke pendop', 'MA_Sholihin_KayuAgung_(2).jpg', 'https://www.youtube.com/embed/m7ocVc_E5JM', 'https://goo.gl/maps/Q4myo19dvh3UpHreA', '-3.3931627', '104.8293274', 0, 1),
(23, 'WST9', '4', '15', '40', 'MASJID RAYA AT-TOHIRIN DI JEJAWI ', 'SRIPOKU.COM, KAYUAGUNG - Menteri Koordinator Bidang Perekonomian Republik Indonesia, Ir HM Hatta Rajasa, Minggu (19/1/2014) ini direncanakan akan meresmikan Masjid Raya At-Tohirin, Jejawi, Kabupaten Ogan Komering Ilir (OKI).\r\n\r\n\"Hari ini, Insya Allah Masjid ini akan diresmikan oleh Bapak Hatta Rajasa,\" kata Rohmat, perwakilan keluarga dan masyarakat Jejawi.\r\n\r\nMasjid megah berwarna biru ini akan menjadi kebanggaan masyarakat Kabupaten OKI terutama Kecamatan Jejawi.\r\n\r\n\r\n\r\nArtikel ini telah tayan', 'Pendirian masjid ini diprakarsai oleh Hatta Rajasa yang merupakan putra asli dari Kecamatan Jejawi.\r\n\r\nHatta dijadwalkan meresmikan masjid At-Tohirin pukul 09.30. Peresmian Masjid ini juga dirangkaikan dengan acara peringatan Maulid Nabi 1435 H.\r\n\r\n\r\n\r\nArtikel ini telah tayang di sripoku.com dengan judul Hatta Rajasa Resmikan Masjid Raya At-Tohirin di Jejawi, https://palembang.tribunnews.com/2014/01/19/hatta-rajasa-resmikan-masjid-raya-at-tohirin-di-jejawi.\r\nPenulis: Mat Bodok\r\nEditor: Soegeng H', 'Hatta dijadwalkan meresmikan masjid At-Tohirin pukul 09.30. Peresmian Masjid ini juga dirangkaikan dengan acara peringatan Maulid Nabi 1435 H.\r\n\r\n\r\nArtikel ini telah tayang di sripoku.com dengan judul Hatta Rajasa Resmikan Masjid Raya At-Tohirin di Jejawi, https://palembang.tribunnews.com/2014/01/19/hatta-rajasa-resmikan-masjid-raya-at-tohirin-di-jejawi.\r\nPenulis: Mat Bodok\r\nEditor: Soegeng Haryadi', 'download_(2).jpeg', 'https://www.youtube.com/embed/rDqH0uIgVk0', 'https://goo.gl/maps/AJa6VpFqGnuPQX7X9', '-3.0977528', '104.674621', 0, 0),
(24, 'WSTR1', '4', '2', '97', 'PURA RATU BUMI AYU TUGU MULYO,LEMPUING OKI', '.', '.', '.', 'wisata-religi-pura-jagatkarta.jpg', 'https://www.youtube.com/embed/5PKg_aZoCTM', 'https://goo.gl/maps/z8qK2q168B7vTHsq5', '-3.4032726', '104.2076315', 0, 0),
(25, 'WSTK1', '5', '13', '73', 'BOLU CUPU', 'Bolu Cupu khas Kayuagung adalah salah satu makan Tradisonal khas Kabupaten Ogan komering Ilir (OKI) Namanya Bolu Cupu terbuat dari Tiga Bahan yaitu Tepung terigu, telur dan gula tidak mengunakan bahan pegawet sehingga nikmat dimakan dan terjamin kesehatannya. Mungkin karena ukuran dan bentuknya kue ini dinamakan kue cupu. Apapun namanya yang penting rasa dari kue ini patut dicoba.', 'Berikut bahan dan cara pembuatan Bolu Cupu Khas Kayuagung yang bisa Anda coba buat di rumah.\r\n\r\nBahan – Bahan yang dibutuhkan\r\n\r\n1 takar telur bebek\r\n1 takar gula\r\n1 (1/2 takar) tepung terigu (saya pakai segitiga biru)\r\n1/2 sdt vanili bubuk\r\nGula secukupnya (sbg toping)', 'Cara Membuat\r\n\r\nKocok telur dan gula dengan mixer kecepatan tinggi sampai mengembang sampai adonan putih\r\nMasukan tepung terigu sedikit demi sedikit, masukan vanili aduk dengan mixer kecepatan terendah sampai adonan rata\r\nPanaskan oven dengan api atas bawah (saya pakai oven gas) sementara menunggu olesi loyang cupu (atau bisa menggunakan loyang kue pukis atau kue cubit) dengan minyak sayur sebanyak 1 sdm (supaya tidak lengket dan memudah membalik nya).\r\nTuang adonan kedalam loyang, lalu panggang', 'resep-membuat-kue-bolu-kering-mini-yang-enak.jpg', 'https://www.youtube.com/embed/tcjLmW4MEao', 'https://goo.gl/maps/3eh9X7q9mRj2LKzu8', '-3.3819626', '104.8335952', 0, 0),
(26, 'WSTK2', '5', '13', '18', 'KERUPUK & KEMPLANG KHAS KAYU AGUNG SARI', 'Krupuk kemplang asli ikan gabus, masih bertahan dan mudah didapat di Kota Kayuagung Kabupaten Ogan Komering Ilir, ', 'Bagi Anda yang hendak menikmati kerupuk ikan gabus ini, tidak sulit untuk mencarinya, ', 'hanya di kota kayuagung kerupuk kemplang ini bisa diperoleh. inilah proses pembuatan kerupuk kemplang khas kota Kayuagung', 'Point_Blur_Jul052018_104257.jpg', 'https://www.youtube.com/embed/m3ZJ_5fDGHo', 'https://goo.gl/maps/5Tmf1UfPNFYSBPRT9', '-3.1613826', '104.3405347', 0, 0),
(27, 'WSTK3', '5', '15', '166', 'RUMAH MAKAN PINDANG BURUNG BU\' ROMLAH', '.', '.', '.', 'unnamed_(1).png', 'https://www.youtube.com/embed/auvZeduQcNc', 'https://g.page/pindangbrg_buromlah?share', '-3.1822504', '104.847653', 0, 1),
(28, 'WSTA7', '1', '18', '0', 'SUAKA MARGASATWA PADANG SUGIHAN', 'Salah satu tempat konservasi gajah yang bisa Anda kunjungi di wilayah Sumatra Selatan adalah Suaka Margasatwa Padang Sugihan. Berbatasan langsung dengan kabupaten Banyuasin, Anda bisa mengunjungi langsung tempat ini sebagai salah satu cara untuk mendukung pelestarian hewan terutama gajah.', 'Tempatnya sangat sejuk dan alami sehingga membuat perasaan jadi lebih tenang. Beberapa aktifitas bisa Anda lakukan bersama gajah seperti memandikan gajah dan memberinya makan.', '.', 'Suaka-Margasatwa-Padang-Sugihan.jpg', 'https://www.youtube.com/embed/pVA9pyoV60k', 'https://goo.gl/maps/8835kiFjzFSv9HUj6', '-2.9659947', '104.6820682', 0, 0);

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
(3, ' Instagram ', ' fa fa-instagram ', 'https://www.instagram.com/disbudparoki/?igshid=us964hx865pi'),
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
(9, 'PEG001', '1', '1', 'WIsata Bukit Lilin', '20-208048_transparent-social-media-icons-vector-png-social-media.png', 'Wisata Bukit Lilin Adalah puncak yang memilik tumbuhan yang seperti lilin', 'Desa Kota Bumi Kec Tanjun Lubuk Oki', '082280524264', 2),
(10, 'PEG002', '2', '1', 'Rumah Adat Belanda', '239-2394423_masyarakat-animasi-png-transparent-png.png', 'Rumah Adat Belanda Adalah Rumah Bersejarah ', 'rantau durian', '081367073783', 0),
(11, 'PEG003', '3', '1', 'Masjid Jejawi', 'download.jpeg', 'Masjid Jejawai Destinasi menarik bentuk masjid modern didaerah ', 'jejawi', '081328730046', 1),
(12, 'PEG004', 'CEL', '  RTS', 'Wisata Jalan Tol', 'amal.png', 'WIsata jalan tol', 'babataan', '083173370700', 2);

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
(1, 1, 9);

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
(13, 'Disparoki', 'disparoki@gmail.com', '20-208048_transparent-social-media-icons-vector-png-social-media.png', '$2y$10$2a3u6gt/zIZ1QUCH3p5Ln.sNTZgP5FJvVrmIPTRBJqlO0WShJGc22', 2, 1, 1589417756),
(20, 'Ikhlasul', 'ikhlasul@gmail.com', 'default.jpg', '$2y$10$TOmXgidSFZuql2kbWEoZLOpfkGDPGQUWV2OvpGJMRflLrVMYnoRl.', 3, 1, 1589634653),
(21, 'Amal', 'amal@gmail.com', 'default.jpg', '$2y$10$z5yZEsa9rboiOGe6O.j3IO1UACX339RK9SrWlKCs41FyGRFsXyRVm', 4, 1, 1589634669),
(32, 'Ikhlasul Amal', 'ikhlasul0507@gmail.com', 'IMG_57412.jpg', '$2y$10$04OU019mxucUZ7EbBi4xXeGxWKapkc7JdSysyeQeXLU5yaG5U2kc2', 1, 1, 1599788235),
(33, 'Okti Permata Sari', 'oktipermatasari00@gmail.com', 'download.png', '$2y$10$w0Aca8GdpDyNKEY85gM34upmFu8lwRKdgow60VvZUc.2lNIhCvoQW', 2, 1, 1599827850);

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
(65, 'ikhlasul0507@gmail.com', 1, '2020-09-13 14:41:51');

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
('V1', '“Terwujudnya masyarakat Ogan Komering Ilir yang lebih maju, Mandiri,\r\ndan sejahtera berlandasan iman dan taqwa”.');

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
  MODIFY `id_aspirasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id_master_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tbl_media_sosial`
--
ALTER TABLE `tbl_media_sosial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_histori`
--
ALTER TABLE `tbl_user_histori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_token`
--
ALTER TABLE `tbl_user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
