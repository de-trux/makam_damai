-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 09:48 AM
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
-- Database: `makam`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_makam`
--

CREATE TABLE `daftar_makam` (
  `id` int(11) NOT NULL,
  `nama_daftar_makam` varchar(50) NOT NULL,
  `provinsi_daftar_makam` varchar(50) NOT NULL,
  `kabupaten_daftar_makam` varchar(50) NOT NULL,
  `kecamatan_daftar_makam` varchar(50) NOT NULL,
  `desa_daftar_makam` varchar(50) NOT NULL,
  `rt_rw_daftar_makam` varchar(50) NOT NULL,
  `luas_daftar_makam` varchar(10) NOT NULL,
  `tahun_daftar_makam` varchar(4) NOT NULL,
  `tampungan_daftar_makam` varchar(4) NOT NULL,
  `nama_pengurus_makam` varchar(50) NOT NULL,
  `no_hp_pengurus` varchar(50) NOT NULL,
  `alamat_pengurus` varchar(50) NOT NULL,
  `gambar_makam` varchar(50) NOT NULL,
  `gambar_pengurus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `daftar_makam`
--

INSERT INTO `daftar_makam` (`id`, `nama_daftar_makam`, `provinsi_daftar_makam`, `kabupaten_daftar_makam`, `kecamatan_daftar_makam`, `desa_daftar_makam`, `rt_rw_daftar_makam`, `luas_daftar_makam`, `tahun_daftar_makam`, `tampungan_daftar_makam`, `nama_pengurus_makam`, `no_hp_pengurus`, `alamat_pengurus`, `gambar_makam`, `gambar_pengurus`) VALUES
(14, 'Makam Pahlawan Medan', 'Sumatera Utara', 'none', 'Medan Kota', 'none', 'none', '1453 KM', '1939', '680', 'Muhammad Wazir', '087612124567', 'Jl. Cemara no. 17', '63cf99aa88909.jpg', '63cf99aa88910.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL DEFAULT 'null',
  `deskripsi` varchar(100) NOT NULL,
  `uang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `judul`, `author`, `deskripsi`, `uang`) VALUES
(13, 'Donasi Makam Suciasih', 'Joe Biden', 'donasi untuk makam abad ke 14', 115000);

-- --------------------------------------------------------

--
-- Table structure for table `forum_donatur`
--

CREATE TABLE `forum_donatur` (
  `id` int(11) NOT NULL,
  `donatur` varchar(32) NOT NULL,
  `increment` int(32) NOT NULL,
  `donatur_hp` varchar(32) NOT NULL,
  `donatur_email` varchar(32) NOT NULL,
  `donatur_method` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `forum_donatur`
--

INSERT INTO `forum_donatur` (`id`, `donatur`, `increment`, `donatur_hp`, `donatur_email`, `donatur_method`) VALUES
(6, 'Cecep SImatupang', 65000, '081260107491', 'cecepcoolz@gmail.com', 'ShopeePay'),
(7, 'Mika', 50000, '08123821392', 'ameame@gmail.com', 'BRI');

-- --------------------------------------------------------

--
-- Table structure for table `list_makam`
--

CREATE TABLE `list_makam` (
  `id` int(11) NOT NULL,
  `nama_makam` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `makam_keluarga`
--

CREATE TABLE `makam_keluarga` (
  `id` int(11) NOT NULL,
  `nama_daftar_keluarga` varchar(32) NOT NULL,
  `alamat_makam_keluarga` varchar(50) NOT NULL,
  `posisi_keluarga` varchar(16) NOT NULL,
  `keluarga_nik` varchar(20) NOT NULL,
  `keluarga_tanggal_lahir` date NOT NULL,
  `keluarga_tanggal_mati` date NOT NULL,
  `usia_keluarga_mati` varchar(3) NOT NULL,
  `alamat_rumah_keluarga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `makam_keluarga`
--

INSERT INTO `makam_keluarga` (`id`, `nama_daftar_keluarga`, `alamat_makam_keluarga`, `posisi_keluarga`, `keluarga_nik`, `keluarga_tanggal_lahir`, `keluarga_tanggal_mati`, `usia_keluarga_mati`, `alamat_rumah_keluarga`) VALUES
(18, 'Sheikh Kevin Tobing', 'Makam Pahlawan Medan', 'Ayah', '1356784313567843', '1919-11-09', '2002-10-08', '81', 'Jl. Bunga Terompet');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `nik`, `password`, `create_datetime`) VALUES
(15, 'First User', 'firstme@gmail.com', '1234567812345678', 'c20ad4d76fe97759aa27a0c99bff6710', '2023-01-24 09:37:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_makam`
--
ALTER TABLE `daftar_makam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_donatur`
--
ALTER TABLE `forum_donatur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_makam`
--
ALTER TABLE `list_makam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makam_keluarga`
--
ALTER TABLE `makam_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_makam`
--
ALTER TABLE `daftar_makam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `forum_donatur`
--
ALTER TABLE `forum_donatur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `list_makam`
--
ALTER TABLE `list_makam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=505;

--
-- AUTO_INCREMENT for table `makam_keluarga`
--
ALTER TABLE `makam_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
