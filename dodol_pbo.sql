-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 04:46 AM
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
-- Database: `dodol_pbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` int(11) NOT NULL,
  `kode_usaha` varchar(10) NOT NULL,
  `kode_cabang` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `kode_usaha`, `kode_cabang`, `nama`, `alamat`, `created_at`) VALUES
(1, 'UMKM000001', '1', 'DODOLAN', 'kapas madya', '2021-04-19 16:07:05'),
(2, 'UMKM000002', '1', 'FZM PLASTIK', '', '2021-04-19 18:48:35'),
(3, 'UMKM000001', '2', 'Cabang Sidoarjo', 'Sidoarjo Gg Buntu', '2021-05-17 05:38:37');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `kode_transaksi` varchar(10) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `kode_transaksi`, `id_produk`, `jumlah_beli`, `subtotal`) VALUES
(1, 'TRX580882', 2, 3, 42000),
(2, 'TRX453613', 2, 1, 14000),
(3, 'TRX121657', 3, 2, 10000),
(4, 'TRX217722', 5, 3, 36000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kode_usaha` varchar(10) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kode_usaha`, `kategori`) VALUES
(2, 'UMKM000002', 'Makanan'),
(4, 'UMKM000001', 'Makanan'),
(5, 'UMKM000001', 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `kode_usaha` varchar(10) NOT NULL,
  `kode_cabang` varchar(10) NOT NULL,
  `kode_user` varchar(10) NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah_pengeluaran` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `kode_usaha`, `kode_cabang`, `kode_user`, `keterangan`, `jumlah_pengeluaran`, `tanggal`, `log_time`) VALUES
(3, 'UMKM000001', '1', 'OWNER00001', 'restok roti bakar', 20000, '2021-05-16', '2021-05-16 17:37:51'),
(4, 'UMKM000001', '1', 'OWNER00001', 'Beli Margarin', 12000, '2021-05-17', '2021-05-17 09:04:08'),
(5, 'UMKM000001', '2', 'OWNER00001', 'asd', 2000, '2021-05-17', '2021-05-17 11:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kode_usaha` varchar(10) NOT NULL,
  `kode_cabang` varchar(10) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_usaha`, `kode_cabang`, `id_kategori`, `nama`, `harga`) VALUES
(2, 'UMKM000002', '1', 2, 'Burger Daging', 14000),
(3, 'UMKM000001', '1', 5, 'Caosu', 5000),
(5, 'UMKM000001', '1', 4, 'Burger Daging', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_usaha` varchar(10) NOT NULL,
  `kode_cabang` varchar(10) NOT NULL,
  `kode_user` varchar(10) NOT NULL,
  `kode_transaksi` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `grand_total` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `catatan` text DEFAULT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kode_usaha`, `kode_cabang`, `kode_user`, `kode_transaksi`, `tanggal`, `grand_total`, `total_bayar`, `catatan`, `log_time`) VALUES
(5, 'UMKM000001', '1', 'OWNER00001', 'TRX580882', '2021-05-16', 42000, 0, '', '2021-05-16 16:54:19'),
(6, 'UMKM000001', '1', 'OWNER00001', 'TRX453613', '2021-05-07', 14000, 0, '', '2021-05-16 17:04:03'),
(7, 'UMKM000001', '2', 'EMPLOYE002', 'TRX121657', '2021-05-31', 10000, 0, '', '2021-05-30 23:46:28'),
(8, 'UMKM000001', '2', 'EMPLOYE002', 'TRX217722', '2021-05-31', 36000, 0, '', '2021-05-30 23:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `kode_user` varchar(10) NOT NULL,
  `kode_usaha` varchar(10) DEFAULT NULL,
  `kode_cabang` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(13) NOT NULL,
  `role` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `kode_user`, `kode_usaha`, `kode_cabang`, `nama`, `username`, `role`, `email`, `password`, `created_at`) VALUES
(2, 'OWNER00001', 'UMKM000001', '1', 'M Nur Fauzan W', 'admin', 'OWNER', 'fauzan.widyanto1@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2021-04-13 16:02:58'),
(3, 'OWNER00002', 'UMKM000002', '1', 'Fatin Zahidah Mas\'ud', 'fatinzm', 'OWNER', 'fatinzahidah0@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2021-04-19 18:50:36'),
(6, 'EMPLOYE001', 'UMKM000001', '1', 'ojan', 'ojan', 'KASIR', 'ojan@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2021-06-08 02:41:27'),
(7, 'EMPLOYE002', 'UMKM000001', '2', 'ikimanajer', 'manajer', 'MANAGER', 'test2@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2021-06-08 02:39:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`),
  ADD KEY `kode_usaha` (`kode_usaha`),
  ADD KEY `kode_cabang` (`kode_cabang`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `kode_transaksi` (`kode_transaksi`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `kode_cabang` (`kode_usaha`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`),
  ADD KEY `kode_user` (`kode_user`),
  ADD KEY `kode_cabang` (`kode_cabang`),
  ADD KEY `kode_usaha` (`kode_usaha`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `kode_cabang` (`kode_cabang`),
  ADD KEY `kode_usaha` (`kode_usaha`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `kode_transaksi` (`kode_transaksi`),
  ADD KEY `kode_user` (`kode_user`),
  ADD KEY `kode_cabang` (`kode_cabang`),
  ADD KEY `kode_usaha` (`kode_usaha`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `kode_user` (`kode_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `kode_cabang` (`kode_cabang`),
  ADD KEY `kode_usaha` (`kode_usaha`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`kode_transaksi`) REFERENCES `transaksi` (`kode_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`kode_usaha`) REFERENCES `user` (`kode_usaha`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `pengeluaran_ibfk_1` FOREIGN KEY (`kode_user`) REFERENCES `user` (`kode_user`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pengeluaran_ibfk_2` FOREIGN KEY (`kode_cabang`) REFERENCES `cabang` (`kode_cabang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengeluaran_ibfk_3` FOREIGN KEY (`kode_usaha`) REFERENCES `user` (`kode_usaha`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`kode_cabang`) REFERENCES `cabang` (`kode_cabang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_ibfk_3` FOREIGN KEY (`kode_usaha`) REFERENCES `user` (`kode_usaha`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`kode_user`) REFERENCES `user` (`kode_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kode_cabang`) REFERENCES `cabang` (`kode_cabang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`kode_usaha`) REFERENCES `user` (`kode_usaha`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`kode_usaha`) REFERENCES `cabang` (`kode_usaha`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`kode_cabang`) REFERENCES `cabang` (`kode_cabang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
