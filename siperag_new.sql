-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 10:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siperag`
--

-- --------------------------------------------------------

--
-- Table structure for table `akta_kelahiran`
--

CREATE TABLE `akta_kelahiran` (
  `id` int(11) NOT NULL,
  `no_permohonan` varchar(11) NOT NULL,
  `NIK_ayah` varchar(16) DEFAULT NULL,
  `NIK_ibu` varchar(16) NOT NULL,
  `no_akta` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(8) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_lahir` varchar(20) NOT NULL,
  `penolong_lahiran` varchar(10) NOT NULL,
  `panjang_bayi` int(11) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `namatempat` varchar(20) NOT NULL,
  `harilahir` varchar(6) NOT NULL,
  `waktulahir` varchar(5) NOT NULL,
  `kelahiran_ke` int(11) NOT NULL,
  `berat_bayi` int(11) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `berkas_hasil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akta_kelahiran`
--

INSERT INTO `akta_kelahiran` (`id`, `no_permohonan`, `NIK_ayah`, `NIK_ibu`, `no_akta`, `nama`, `alamat`, `kota`, `tanggal`, `jenis_lahir`, `penolong_lahiran`, `panjang_bayi`, `jk`, `namatempat`, `harilahir`, `waktulahir`, `kelahiran_ke`, `berat_bayi`, `date_create`, `berkas_hasil`) VALUES
(4, 'KLHRN122144', '1234567890123456', '3525567890123457', 'AKTA122144', 'Comel', 'Gresik', 'Gresik', '2021-06-21', '1', '1', 160, '2', 'Bidan Bahagia', 'Sabtu', '14:21', 1, 45, '2021-06-24 03:41:39', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_ortu`
--

CREATE TABLE `data_ortu` (
  `id` int(11) NOT NULL,
  `jenis_ortu` varchar(4) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `kab` varchar(20) NOT NULL,
  `tgl_nikah` date NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_ortu`
--

INSERT INTO `data_ortu` (`id`, `jenis_ortu`, `NIK`, `nama`, `pekerjaan`, `provinsi`, `kecamatan`, `rt`, `rw`, `kab`, `tgl_nikah`, `kelurahan`, `alamat`, `tgl_lahir`) VALUES
(11, 'ibu', '3525567890123457', 'Sutiyem', 'guru', 'jatim', 'hhh', 9, 9, 'Gresik', '2021-06-20', 'jjjjjj', 'llll', '2021-06-04'),
(12, 'ayah', '1234567890123456', 'sumanto', 'guru', 'iiiii', 'llll', 9, 7, 'kkk', '2021-06-20', 'yyyyy', 'lll', '2021-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `data_permohonan`
--

CREATE TABLE `data_permohonan` (
  `id` int(11) NOT NULL,
  `jenis_permohonan` varchar(20) NOT NULL,
  `NIK_pemohon` varchar(16) NOT NULL,
  `berkas1` varchar(100) NOT NULL,
  `berkas2` varchar(100) NOT NULL,
  `berkas3` varchar(100) NOT NULL,
  `berkas_hasil` varchar(100) NOT NULL,
  `no_permohonan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_saksi`
--

CREATE TABLE `data_saksi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_saksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_saksi`
--

INSERT INTO `data_saksi` (`id`, `nama`, `NIK`, `alamat`, `agama`, `pekerjaan`, `tgl_lahir`, `tempat_saksi`) VALUES
(1, 'gani', '999', 'benjeng', 'islam', 'dukun', '2021-06-01', 'gresik'),
(2, 'opah', '888', 'pangkah', 'islam', 'irt', '2021-05-31', 'gresik');

-- --------------------------------------------------------

--
-- Table structure for table `persetujuan`
--

CREATE TABLE `persetujuan` (
  `id_persetujuan` int(11) NOT NULL,
  `no_permohonan` varchar(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tgl_disetujui` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persetujuan`
--

INSERT INTO `persetujuan` (`id_persetujuan`, `no_permohonan`, `id_user`, `status`, `tgl_disetujui`, `keterangan`) VALUES
(1, 'KLHRN122144', 0, '1', '2021-06-24 04:09:35', 'Namanya comel');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `kode_user` varchar(10) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(13) NOT NULL,
  `role` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(128) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `kode_user`, `NIK`, `no_telp`, `nama`, `username`, `role`, `email`, `password`, `alamat`) VALUES
(9, 'USR1611365', '3525567891123456', '81615473321', 'Fatin Zahidah Mas\'ud', 'fatinzm', 'USER', 'fatinzahidah0@gmail.com', '$2y$10$ZV4v1QYs.n26FB429tuQgOZuJpJPGY6wrrrAiEUzpU25cgvFDBY3G', 'Jl. Raden Wijaya B2/24 Perum GWA, Sekarkurung, Kebomas, Gresik'),
(10, 'USR2411132', '3578100206050006', '6283849575737', 'FAUZAN WIDYANTO', 'ojan', 'ADMIN', 'fauzan.widyanto1@gmail.com', '$2y$10$ZV4v1QYs.n26FB429tuQgOZuJpJPGY6wrrrAiEUzpU25cgvFDBY3G', 'KAPAS MADYA 3I/4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akta_kelahiran`
--
ALTER TABLE `akta_kelahiran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_akta` (`no_akta`);

--
-- Indexes for table `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_permohonan`
--
ALTER TABLE `data_permohonan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_permohonan` (`no_permohonan`);

--
-- Indexes for table `data_saksi`
--
ALTER TABLE `data_saksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persetujuan`
--
ALTER TABLE `persetujuan`
  ADD PRIMARY KEY (`id_persetujuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akta_kelahiran`
--
ALTER TABLE `akta_kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_ortu`
--
ALTER TABLE `data_ortu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_permohonan`
--
ALTER TABLE `data_permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_saksi`
--
ALTER TABLE `data_saksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `persetujuan`
--
ALTER TABLE `persetujuan`
  MODIFY `id_persetujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
