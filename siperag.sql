-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2021 pada 13.24
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `akta_kelahiran`
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
  `berat_bayi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akta_kelahiran`
--

INSERT INTO `akta_kelahiran` (`id`, `no_permohonan`, `NIK_ayah`, `NIK_ibu`, `no_akta`, `nama`, `alamat`, `kota`, `tanggal`, `jenis_lahir`, `penolong_lahiran`, `panjang_bayi`, `jk`, `namatempat`, `harilahir`, `waktulahir`, `kelahiran_ke`, `berat_bayi`) VALUES
(3, 'KLHRN112858', NULL, '', 'AKTA112858', 'Comel', 'Gresik', 'Gresik', '2021-06-05', '1', '1', 150, '2', 'Bidan Bahagia', 'Sabtu', '13:27', 1, 45);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ortu`
--

CREATE TABLE `data_ortu` (
  `id` int(11) NOT NULL,
  `no_permohonan` varchar(10) NOT NULL,
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
  `alamat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_permohonan`
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
-- Struktur dari tabel `data_saksi`
--

CREATE TABLE `data_saksi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_saksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `kode_user`, `NIK`, `no_telp`, `nama`, `username`, `role`, `email`, `password`, `alamat`) VALUES
(9, 'USR1611365', '3525567891123456', '81615473321', 'Fatin Zahidah Mas\'ud', 'fatinzm', 'USER1', 'fatinzahidah0@gmail.com', '$2y$10$XOoHD.JxD264gcWScND1zeCciY5qotsI.AaWhk9u5RiUYHf3e4uFW', 'Jl. Raden Wijaya B2/24 Perum GWA, Sekarkurung, Kebomas, Gresik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akta_kelahiran`
--
ALTER TABLE `akta_kelahiran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_akta` (`no_akta`);

--
-- Indeks untuk tabel `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_permohonan`
--
ALTER TABLE `data_permohonan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_permohonan` (`no_permohonan`);

--
-- Indeks untuk tabel `data_saksi`
--
ALTER TABLE `data_saksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akta_kelahiran`
--
ALTER TABLE `akta_kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_ortu`
--
ALTER TABLE `data_ortu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_permohonan`
--
ALTER TABLE `data_permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_saksi`
--
ALTER TABLE `data_saksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
