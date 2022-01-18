-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 08:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `martincatering`
--
CREATE DATABASE IF NOT EXISTS `martincatering` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `martincatering`;

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `no_penjualan` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`no_penjualan`, `id_user`, `id_makanan`, `jumlah`, `total`) VALUES
('PJ1627878585', 15, 11, 23, 644000),
('PJ1627878727', 15, 5, 3, 84000),
('PJ1627878768', 15, 11, 10, 280000),
('PJ1627883461', 15, 11, 10, 280000),
('PJ1628003924', 15, 5, 3, 84000),
('PJ1628004541', 15, 5, 7, 196000),
('PJ1628005033', 19, 5, 5, 140000),
('PJ1638074425', 21, 1, 1, 75000);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'martincatering_key', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `limits`
--

CREATE TABLE `limits` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `count` int(10) NOT NULL,
  `hour_started` int(11) NOT NULL,
  `api_key` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `limits`
--

INSERT INTO `limits` (`id`, `uri`, `count`, `hour_started`, `api_key`) VALUES
(1, 'uri:makanan/index:post', 2, 1628005316, 'martincatering_key'),
(2, 'uri:user/index:post', 1, 1638074400, 'martincatering_key'),
(3, 'uri:user/index:delete', 2, 1628004740, 'martincatering_key'),
(4, 'uri:makanan/index:delete', 4, 1628005363, 'martincatering_key'),
(5, 'uri:user/index:put', 1, 1628005265, 'martincatering_key');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `stok` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'makanan.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `nama`, `stok`, `harga`, `gambar`) VALUES
(1, 'Arsik Ikan Mas', 9, 75000, 'arsik.jpg'),
(5, 'Dendeng', 65, 28000, 'Dendeng.jpg'),
(11, 'Rendang', 80, 28000, 'logo genshin.png');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `no_penjualan` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_bayar` int(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Belum Dikirim'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `no_penjualan`, `id_user`, `total_bayar`, `tanggal`, `alamat`, `pembayaran`, `gambar`, `keterangan`, `status`) VALUES
(1, 'PJ1627877771', 15, 56000, '02/08/2021', 'Jl. Indrapuri No.50', 'BRI', 'ezgif-1-3dc59d5592432.png', 'Tolong Segera Dikirim', 'Dikirim'),
(5, 'PJ1627878585', 15, 644000, '02/08/2021', 'Jl. Indrapuri No.50', 'BRI', 'Ling1.png', 'Segerakan!', 'Belum Dikirim'),
(6, 'PJ1627878727', 15, 84000, '02/08/2021', 'pekanbaru', 'MANDIRI', 'Ling2.png', 'Tolong Dikirm', 'Belum Dikirim'),
(7, 'PJ1627878768', 15, 280000, '02/08/2021', 'Rumbai', 'BNI', 'unknown.png', 'Tolong Segera Dikirim', 'Belum Dikirim'),
(8, 'PJ1627883461', 15, 280000, '02/08/2021', 'Riau', 'BRI', 'logo_genshin.png', 'Tolong Segera Dikirim', 'Diterima'),
(9, 'PJ1628003924', 15, 84000, '03/08/2021', 'pekanbaru', 'BRI', 'kaedehara-kazuha.png', 'Tolong Segera Dikirim', 'Diterima'),
(10, 'PJ1628004541', 15, 196000, '03/08/2021', 'pekanbaru', 'MANDIRI', 'klee.png', 'Segera', 'Diterima'),
(11, 'PJ1628005033', 19, 140000, '03/08/2021', 'Jl. Indrapuri No.50', 'BNI', 'bukti.jpg', 'Tolong Segera Dikirim', 'Diterima'),
(12, 'PJ1638074425', 21, 75000, '28/11/2021', 'Jl. Indrapuri No.50', 'BRI', '', 'sdgdszfg', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'profile.jpg',
  `role` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `date_created`) VALUES
(1, 'Dwi Gunawan', 'dwigunawanlim@gmail.com', '$2y$10$kWdZT5Ws1aD1JX9gL6uBieeKrnaGEBpmXfI9HqJe97alfiH1ERaVm', 'cute_axolotl.jpg', 'Admin', 1627657937),
(6, 'Mukmin Arrijal', 'mukmin@gmail.com', '$2y$10$3z2qydXK3HUU3au20K3z3.A.faF75xKuPMEOgFycxbwcBEJnuJIVS', 'profile.jpg', 'User', 1627816226),
(15, 'Reza Fanfana Yulius', 'reza@gmail.com', '$2y$10$lT3zoTmL/hIFZs9.lRjZCuZvuZz/PcyxntG/lUWM2TwLGyQKqAHVe', 'half-moon.png', 'User', 1627856751),
(19, 'Aditya Akmal', 'adit@gmail.com', '$2y$10$WAyakzNxWsLvHK2t7eYvFu.e7Gog5O46m/BwqZcgltg9p7qre6w.G', 'profile.jpg', 'User', 1628004991),
(21, 'adit', 'aditdr@gmail.com', '$2y$10$dVnSaXg35rKhizT/ZkdxEOgEOI0GpkcT1Jsh5b0kGoNIXA04gd/Q2', 'profile.jpg', 'Admin', 1638074400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD KEY `user_detail_penjualan` (`id_user`),
  ADD KEY `makanan_detail_penjualan` (`id_makanan`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_keranjang` (`id_user`),
  ADD KEY `makanan_keranjang` (`id_makanan`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `limits`
--
ALTER TABLE `limits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keranjang_user` (`id_user`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `limits`
--
ALTER TABLE `limits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `makanan_detail_penjualan` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id`),
  ADD CONSTRAINT `user_detail_penjualan` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `makanan_keranjang` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id`),
  ADD CONSTRAINT `user_keranjang` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `keranjang_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
