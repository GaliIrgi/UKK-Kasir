-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 03:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `iddetail` int(11) NOT NULL,
  `idpenjualan` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `jumlahproduk` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`iddetail`, `idpenjualan`, `idproduk`, `jumlahproduk`, `subtotal`) VALUES
(7, 1, 123, 10, 5000.00),
(8, 2, 123, 10, 5000.00),
(8, 3, 234, 2, 25000.00),
(9, 4, 123, 10, 5000.00),
(9, 5, 234, 2, 25000.00),
(11, 7, 123, 2, 5000.00),
(12, 8, 123, 2, 5000.00),
(13, 9, 234, 1, 25000.00),
(14, 10, 123, 2, 5000.00),
(17, 14, 123, 2, 5000.00),
(17, 15, 234, 1, 25000.00),
(18, 16, 0, 1, 25000.00),
(18, 17, 0, 1, 5000.00),
(19, 19, 0, 2, 25000.00);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `NoMeja` int(11) NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `NoMeja`, `tlp`) VALUES
(6, 'aziz', 2, ''),
(7, 'aziz', 2, ''),
(8, 'aziz', 2, ''),
(9, 'aziz', 2, ''),
(10, 'peler', 65, ''),
(11, 'yyy', 1, ''),
(12, 'aziz', 2, ''),
(13, 'bayu', 3, ''),
(14, 'aziz', 1, ''),
(15, 'dias', 20, ''),
(16, 'paul', 11, ''),
(17, 'zaki', 2, ''),
(18, 'riski', 0, ''),
(19, 'teguh', 0, ''),
(20, 'teguh', 0, ''),
(21, 'teguh', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `idpenjualan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `idpelanggan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`idpenjualan`, `tanggal`, `total`, `idpelanggan`) VALUES
(5, '2024-02-07', NULL, NULL),
(6, '2024-02-07', NULL, NULL),
(7, '2024-02-07', NULL, NULL),
(8, '2024-02-07', NULL, NULL),
(9, '2024-02-07', NULL, NULL),
(10, '2024-02-07', NULL, NULL),
(11, '2024-02-07', NULL, NULL),
(12, '2024-02-12', NULL, NULL),
(13, '2024-02-12', NULL, NULL),
(14, '2024-02-12', NULL, NULL),
(15, '2024-02-12', NULL, NULL),
(16, '2024-02-12', NULL, NULL),
(17, '2024-02-12', NULL, NULL),
(18, '2024-02-13', NULL, NULL),
(19, '2024-02-13', NULL, NULL),
(20, '2024-02-13', NULL, NULL),
(21, '2024-02-15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `stok` int(11) NOT NULL,
  `Terjual` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `nama`, `harga`, `stok`, `Terjual`, `foto`) VALUES
(123, 'nasi', 5000.00, 17, 31, '01022024075300.jpg'),
(234, 'ayam goreng', 25000.00, 92, 8, '01022024075611.jpeg'),
(321312412, 'es jeruk', 5000.00, 20, 0, '12022024082205.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Admin','Petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(0, 'lana', '202cb962ac59075b964b07152d234b70', 'Admin'),
(123, 'ambon', '202cb962ac59075b964b07152d234b70', 'Petugas'),
(8888, 'galiee', '202cb962ac59075b964b07152d234b70', 'Admin'),
(2147483647, 'bayu', '202cb962ac59075b964b07152d234b70', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`idpenjualan`),
  ADD KEY `idpenjualan` (`idpenjualan`,`idproduk`),
  ADD KEY `idproduk` (`idproduk`),
  ADD KEY `iddetail` (`iddetail`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`idpenjualan`),
  ADD KEY `idpelanggan` (`idpelanggan`),
  ADD KEY `idpenjualan` (`idpenjualan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `idpenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `idpenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`idpelanggan`) REFERENCES `pelanggan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
