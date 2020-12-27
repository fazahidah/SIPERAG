-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 07:51 PM
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
(1, 'TRX820830', 5, 5, 25000),
(2, 'TRX859023', 6, 4, 2000),
(3, 'TRX859023', 3, 3, 15000),
(4, 'TRX859023', 5, 3, 15000),
(5, 'TRX132038', 3, 3, 15000),
(6, 'TRX887352', 3, 4, 20000),
(7, 'TRX887352', 5, 3, 15000),
(34, 'TRX361062', 8, 1, 12000),
(35, 'TRX361062', 9, 1, 17000),
(36, 'TRX361062', 11, 1, 20000),
(37, 'TRX863135', 3, 1, 5000),
(38, 'TRX863135', 10, 2, 10000),
(39, 'TRX863135', 11, 1, 20000),
(40, 'TRX753699', 3, 1, 5000),
(41, 'TRX753699', 8, 1, 12000),
(42, 'TRX753699', 9, 1, 17000),
(43, 'TRX869783', 3, 1, 5000),
(44, 'TRX869783', 9, 1, 17000),
(45, 'TRX869783', 11, 1, 20000),
(46, 'TRX542591', 3, 3, 15000),
(47, 'TRX542591', 7, 1, 7000),
(48, 'TRX715985', 8, 1, 12000),
(49, 'TRX715985', 9, 1, 17000),
(50, 'TRX715985', 11, 2, 40000),
(51, 'TRX859856', 7, 1, 7000),
(52, 'TRX859856', 10, 1, 5000),
(53, 'TRX859856', 11, 1, 20000),
(54, 'TRX902608', 3, 1, 5000),
(55, 'TRX902608', 9, 2, 34000),
(56, 'TRX352451', 5, 3, 15000),
(57, 'TRX352451', 11, 1, 20000),
(58, 'TRX306179', 3, 1, 5000),
(59, 'TRX306179', 7, 1, 7000),
(60, 'TRX805298', 3, 1, 5000),
(61, 'TRX805298', 9, 1, 17000),
(62, 'TRX805298', 10, 2, 10000),
(63, 'TRX422302', 5, 2, 10000),
(64, 'TRX445819', 6, 1, 500),
(65, 'TRX445819', 5, 2, 10000),
(66, 'TRX445819', 10, 1, 5000),
(67, 'TRX445819', 9, 1, 17000),
(68, 'TRX445819', 11, 1, 20000),
(69, 'TRX864098', 3, 1, 5000),
(70, 'TRX864098', 7, 1, 7000),
(71, 'TRX864098', 9, 1, 17000),
(72, 'TRX864098', 10, 1, 5000),
(73, 'TRX196605', 7, 4, 28000),
(74, 'TRX334614', 10, 1, 5000),
(75, 'TRX334614', 9, 1, 17000),
(76, 'TRX334614', 8, 1, 12000),
(77, 'TRX651269', 11, 1, 20000),
(78, 'TRX651269', 3, 1, 5000),
(79, 'TRX651269', 9, 1, 17000),
(80, 'TRX639692', 3, 1, 5000),
(81, 'TRX639692', 7, 1, 7000),
(82, 'TRX639692', 9, 2, 34000),
(83, 'TRX977332', 11, 1, 20000),
(84, 'TRX977332', 10, 1, 5000),
(85, 'TRX195262', 9, 2, 34000),
(86, 'TRX195262', 11, 1, 20000),
(87, 'TRX351830', 11, 1, 20000),
(88, 'TRX924294', 6, 2, 1000),
(89, 'TRX127100', 6, 4, 2000),
(90, 'TRX783262', 6, 2, 1000),
(91, 'TRX624619', 3, 3, 15000),
(92, 'TRX624619', 7, 1, 7000),
(93, 'TRX624619', 8, 2, 24000),
(94, 'TRX465472', 6, 2, 1000),
(95, 'TRX383901', 6, 2, 1000),
(96, 'TRX484679', 8, 1, 12000),
(97, 'TRX484679', 9, 1, 17000),
(98, 'TRX484679', 10, 1, 5000),
(99, 'TRX455997', 11, 4, 80000),
(100, 'TRX193658', 8, 1, 12000),
(101, 'TRX332391', 9, 1, 17000),
(102, 'TRX332391', 10, 1, 5000),
(103, 'TRX712063', 11, 2, 40000),
(104, 'TRX657180', 6, 3, 1500),
(105, 'TRX627140', 3, 4, 20000),
(106, 'TRX627140', 9, 1, 17000),
(107, 'TRX808876', 7, 1, 7000),
(108, 'TRX808876', 9, 1, 17000),
(109, 'TRX808876', 10, 1, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(3, 'Lain-lain'),
(1, 'Makanan'),
(2, 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `kode_user` varchar(10) NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah_pengeluaran` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `kode_user`, `keterangan`, `jumlah_pengeluaran`, `tanggal`, `log_time`) VALUES
(2, 'OWNER00001', 'Beli Margarin', 12000, '2020-12-27', '2020-12-27 05:06:34'),
(5, 'OWNER00001', 'beli susu', 10000, '2020-12-03', '2020-12-27 16:05:07'),
(6, 'OWNER00001', 'restok burger', 18000, '2020-12-06', '2020-12-27 16:05:24'),
(7, 'OWNER00001', 'restok patties', 40000, '2020-12-06', '2020-12-27 16:05:40'),
(8, 'OWNER00001', 'restok roti bakar', 67000, '2020-12-11', '2020-12-27 16:05:58'),
(9, 'OWNER00001', 'beli margarin', 12000, '2020-12-12', '2020-12-27 16:06:09'),
(10, 'OWNER00001', 'beri susu', 10000, '2020-12-13', '2020-12-27 16:06:19'),
(11, 'OWNER00001', 'beli kursi', 25000, '2020-12-16', '2020-12-27 16:06:30'),
(12, 'OWNER00001', 'restok selai', 60000, '2020-12-18', '2020-12-27 16:06:54'),
(13, 'OWNER00001', 'beli margarin', 12000, '2020-12-20', '2020-12-27 16:07:09'),
(14, 'OWNER00001', 'restok roti bakar', 40000, '2020-12-23', '2020-12-27 16:07:28'),
(15, 'OWNER00001', 'beli sosis bakar', 30000, '2020-12-25', '2020-12-27 16:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama`, `harga`) VALUES
(3, 1, 'Burger Sosis', 5000),
(5, 2, 'Caosu', 5000),
(6, 3, 'Gelas Tok', 500),
(7, 1, 'Burger telur', 7000),
(8, 1, 'Burger Daging', 12000),
(9, 1, 'Roti Jhon', 17000),
(10, 1, 'Sosis Bakar', 5000),
(11, 1, 'Roti Bakar Tiramisu + Kacang', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
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

INSERT INTO `transaksi` (`id_transaksi`, `kode_user`, `kode_transaksi`, `tanggal`, `grand_total`, `total_bayar`, `catatan`, `log_time`) VALUES
(1, 'OWNER00001', 'TRX000001', '2020-12-20', 20000, 20000, NULL, '2020-12-20 05:48:03'),
(2, 'OWNER00001', 'TRX820830', '2020-12-26', 25000, 0, '', '2020-12-26 15:28:25'),
(3, 'OWNER00001', 'TRX859023', '2020-12-26', 32000, 0, '', '2020-12-26 15:29:15'),
(4, 'OWNER00001', 'TRX132038', '2020-12-27', 15000, 0, '', '2020-12-27 09:07:39'),
(5, 'OWNER00001', 'TRX887352', '2020-12-27', 35000, 0, '', '2020-12-27 14:38:22'),
(16, 'OWNER00001', 'TRX361062', '2020-12-08', 49000, 0, '', '2020-12-27 15:31:06'),
(17, 'OWNER00001', 'TRX863135', '2020-12-09', 35000, 0, '', '2020-12-27 15:31:17'),
(18, 'OWNER00001', 'TRX753699', '2020-12-10', 34000, 0, '', '2020-12-27 15:31:30'),
(19, 'OWNER00001', 'TRX869783', '2020-12-11', 42000, 0, '', '2020-12-27 15:31:40'),
(20, 'OWNER00001', 'TRX542591', '2020-12-12', 22000, 0, '', '2020-12-27 15:31:49'),
(21, 'OWNER00001', 'TRX715985', '2020-12-12', 69000, 0, '', '2020-12-27 15:32:02'),
(22, 'OWNER00001', 'TRX859856', '2020-12-13', 32000, 0, '', '2020-12-27 15:32:15'),
(23, 'OWNER00001', 'TRX902608', '2020-12-14', 39000, 0, '', '2020-12-27 15:32:26'),
(24, 'OWNER00001', 'TRX352451', '2020-12-15', 35000, 0, '', '2020-12-27 15:32:37'),
(25, 'OWNER00001', 'TRX306179', '2020-12-16', 12000, 0, '', '2020-12-27 15:32:47'),
(26, 'OWNER00001', 'TRX805298', '2020-12-17', 32000, 0, '', '2020-12-27 15:32:57'),
(27, 'OWNER00001', 'TRX422302', '2020-12-18', 10000, 0, '', '2020-12-27 15:33:06'),
(28, 'OWNER00001', 'TRX445819', '2020-12-19', 52500, 0, '', '2020-12-27 15:33:21'),
(29, 'OWNER00001', 'TRX864098', '2020-12-20', 34000, 0, '', '2020-12-27 15:33:33'),
(30, 'OWNER00001', 'TRX196605', '2020-12-21', 28000, 0, '', '2020-12-27 15:33:42'),
(31, 'OWNER00001', 'TRX334614', '2020-12-22', 34000, 0, '', '2020-12-27 15:33:54'),
(32, 'OWNER00001', 'TRX651269', '2020-12-23', 42000, 0, '', '2020-12-27 15:34:04'),
(33, 'OWNER00001', 'TRX639692', '2020-12-24', 46000, 0, '', '2020-12-27 15:34:14'),
(34, 'OWNER00001', 'TRX977332', '2020-12-25', 25000, 0, '', '2020-12-27 15:34:44'),
(35, 'OWNER00001', 'TRX195262', '2020-12-26', 54000, 0, '', '2020-12-27 15:34:54'),
(36, 'OWNER00001', 'TRX351830', '2020-12-27', 20000, 0, '', '2020-12-27 15:35:03'),
(37, 'OWNER00001', 'TRX924294', '2020-12-27', 1000, 0, '', '2020-12-27 15:53:13'),
(38, 'OWNER00001', 'TRX127100', '2020-12-27', 2000, 0, '', '2020-12-27 15:53:17'),
(39, 'OWNER00001', 'TRX783262', '2020-12-27', 1000, 0, '', '2020-12-27 15:53:21'),
(40, 'OWNER00001', 'TRX624619', '2020-12-27', 46000, 0, '', '2020-12-27 15:53:37'),
(41, 'OWNER00001', 'TRX465472', '2020-12-27', 1000, 0, '', '2020-12-27 15:54:13'),
(42, 'OWNER00001', 'TRX383901', '2020-12-27', 1000, 0, '', '2020-12-27 15:54:20'),
(43, 'OWNER00001', 'TRX484679', '2020-12-03', 34000, 0, '', '2020-12-27 16:20:08'),
(44, 'OWNER00001', 'TRX455997', '2020-12-04', 80000, 0, '', '2020-12-27 16:20:19'),
(45, 'OWNER00001', 'TRX193658', '2020-12-05', 12000, 0, '', '2020-12-27 16:20:27'),
(46, 'OWNER00001', 'TRX332391', '2020-12-05', 22000, 0, '', '2020-12-27 16:20:34'),
(47, 'OWNER00001', 'TRX712063', '2020-12-06', 40000, 0, '', '2020-12-27 16:20:42'),
(48, 'OWNER00001', 'TRX657180', '2020-12-06', 1500, 0, '', '2020-12-27 16:20:46'),
(49, 'OWNER00001', 'TRX627140', '2020-12-06', 37000, 0, '', '2020-12-27 16:20:53'),
(50, 'OWNER00001', 'TRX808876', '2020-12-07', 29000, 0, '', '2020-12-27 16:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `kode_user` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(13) NOT NULL,
  `role` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `kode_user`, `nama`, `username`, `role`, `email`, `password`, `created_at`) VALUES
(1, 'OWNER00001', 'M Nur Fauzan W', 'admin', 'OWNER', 'fauzan.widyanto1@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2020-12-19 06:25:59');

--
-- Indexes for dumped tables
--

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
  ADD UNIQUE KEY `kategori` (`kategori`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`),
  ADD KEY `kode_user` (`kode_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `nama` (`nama`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `kode_transaksi` (`kode_transaksi`),
  ADD KEY `kode_user` (`kode_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `kode_user` (`kode_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Constraints for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `pengeluaran_ibfk_1` FOREIGN KEY (`kode_user`) REFERENCES `user` (`kode_user`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`kode_user`) REFERENCES `user` (`kode_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
