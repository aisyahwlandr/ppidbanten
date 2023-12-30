-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 08:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'adminbanten', 'provinsiBANTEN');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `publish_at` date NOT NULL,
  `types` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `views` int(11) NOT NULL,
  `statuses` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `update_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `update_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `category_id`, `publish_at`, `types`, `author_id`, `content`, `photo`, `views`, `statuses`, `created_at`, `update_at`, `created_by`, `update_by`) VALUES
(1, 'Angka Kemiskinan di Banten Turun, BPS: Tingkat Keparahan Warga Miskin Naik', 1, '2023-07-17', 1, 1, 'Badan Pusat Statistik (BPS) mencatat ada penurunan angka kemiskinan di Provinsi Banten sebesar 0,07 persen. Rinciannya, pada September 2022 tercatat ada 829.660 orang sementara pada Maret 2023 sebanyak 826.130 orang. Meski turun, capaian indeks kedalaman dan keparahan kemiskinan justru mengalami kenaikan dibandingkan September 2022. \"Indeks kedalaman kemiskinan di Banten naik dari 0,790 persen pada September 2022 menjadi 1,204 persen pada Maret 2023. Indeks keparahan kemiskinan juga naik dari 0,157 persen menjadi 0,363 persen pada periode yang sama,\" kata Kepala BPS Provinsi Banten Faizal Anwar saat rilis secara daring melalui kanal youtube, Senin (17/7/2023). Dijelaskan Faizal, indeks kedalaman kemiskinan mengindikasikan jarak rata-rata pengeluaran penduduk miskin terhadap garis kemiskinan. Sementara untuk indeks keparahan kemiskinan mengindikasikan ketimpangan pengeluaran di antara penduduk miskin. \"Persoalan kemiskinan bukan hanya sekedar berapa jumlah dan persentase penduduk miskin. Dimensi lain yang perlu diperhatikan adalah tingkat kedalaman dan keparahan dari kemiskinan,\" ujar Faizal. Sementara itu, persentase penduduk miskin di perkotaan pada September 2022 sebesar 5,89 persen, naik menjadi 6,00 persen pada Maret 2023. Sedangkan penduduk miskin perdesaan pada September 2022 sebesar 7,29 persen, turun menjadi 6,79 persen pada Maret 2023. \"Dibanding September 2022, jumlah penduduk miskin Maret 2023 perkotaan naik sebanyak 36,990 orang dari 586,210 orang pada September 2022 menjadi 623,190 orang pada Maret 2023,\" ungkap Faizal. Di sisi lain, jumlah penduduk miskin pedesaan turun sebanyak 40,520 orang dari 243,450 orang pada September 2022 menjadi 202,930 orang. Faktor pemicu kemiskinan di perkotaan maupun di perdesaan pada umumnya hampir sama, antara lain komoditi beras dan rokok kretek filter.  Komoditi beras memberi sumbangan terbesar yakni sebesar 15,36 persen di perkotaan dan 21,75 persen di perdesaan. \"Rokok kretek filter memberikan sumbangan terbesar kedua terhadap GK baik di perkotaan yakni sebesar 14,92 persen maupun di perdesaan yakni sebesar 15,55 persen,\" kata dia.', 'img/berita1.jpg', 0, 0, 0, 0, 0, 0),
(2, 'Pendaftaran PPDB Ditutup Malam Ini, Pj Gubernur Banten: Banyak Titipan agar Anak Lolos', 1, '2023-07-06', 1, 1, 'Penjabat Gubernur Banten Al Muktabar mengungkapkan, dirinya banyak mendapatkan permintaan tolong dari warga untuk menitipkan anaknya masuk ke SMA/SMK Negeri. Diketahui proses Penerimaan Peserta Didik Baru (PPDB) untuk jenjang SMA jalur Zonasi, Perpindahan Tugas Orangtua, dan Prestasi ditutup Kamis (6/7/2023) malam ini. \"Ya banyak (minta tolong), tapi ya itu, biasa hubungan biasa ada yang nge-WA dan seterusnya. Ya kita menghormatinya,\" kata Al Muktabar kepada wartawan di gedung DPRD Banten, Kamis (6/7/2023). Meski banyak permintaan tersebut, Al tidak menanggapinya karena sudah ada prosedur dan sistem yang telah dibuat. Selain itu, Al Muktabar tidak menginginkan selama PPDB terjadi kecurangan dan penyimpangan termasuk praktik jual beli kursi atau titip menitip. \"Semua kita kembalikan pada prosedur dan sistem yang ada,\" ujar Al. Dalam PPDB tahun 2023, dibuka sistem penerimaan melalui empat jalur yang disediakan, yakni Afirmasi, Zonasi, Perpindahan Tugas Orangtua, dan Prestasi. Mantan Sekda Banten itu juga meminta kepada masyarakat yang nantinya tidak diterima di sekolah negeri agar tetap melanjutkan pendidikannya di sekolah swasta. Sebab, kata Al, sekolah swasta di daerahnya tidak kalah dengan sekolah negeri. Baik fasilitasnya, maupun kualitasnya. \"Karena jumlah kemampuan penerimaan siswa sekolah negeri cukup terbatas, dan pelamarnya luar biasa. Tentu ada yang diterima dan tidak terima perlu kesadaran dan kearifan bersama,\" kata dia. Al Muktabar juga mengklaim bahwa selama proses PPDB tahun 2023 sudah berjalan lancar sesuai aturan tanpa adanya kendala server down dan lainnya. \"Kendala sangat minim dalam perkembangan. Artinya kita jalankan sesuai dengan rencana yang kita targetkan,\" tandas dia.', 'img/berita2.jpg', 0, 0, 0, 0, 0, 0),
(3, 'Gempa Magnitudo 5,2 Guncang Bayah Banten, Terasa sampai Jakarta', 1, '2023-02-07', 1, 1, 'Gempa bermagnitudo 5,7 terjadi di wilayah Bayah, Banten, Selasa (7/2/2023). Berdasarkan akun Twitter BMKG, gempa bumi terjadi tepatnya pada pukul 07.35 WIB. Adapun pusat gempa berlokasi di 7,49 lintang selatan dan 105,95 bujur timur alias 70 kilometer sebelah barat daya daerah Bayah, Banten. Pusat gempa berada di kedalaman 24 kilometer di bawah permukaan laut BMKG mengatakan, informasi tersebut masih dinamis dan terus dikaji ulang. Kemungkinan akan berubah seiring kelengkapan data. Gempa bumi tersebut diketahui terasa sampai Jakarta. Sejumlah warga merasakan getaran beberapa saat pada tanah.  Hingga berita ini diturunkan, belum diketahui situasi dan kondisi permukiman terdekat dengan lokasi gempa. *Dalam perkembangannya, BMKG merevisi kekuatan gempa menjadi magnitudo 5,2 dan berlokasi di 7,43 Lintang Selatan 105,88 Bujur Timur alias 66 kilometer sebelah tenggara Muarabinuangeun, Banten. Pusat gempa juga direvisi, yakni terjadi pada kedalaman 10 kilometer di bawah permukaan laut dan tidak berpotensi tsunami.', 'img/berita3.jpg', 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
