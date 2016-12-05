-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2016 at 02:20 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `id_akses` int(11) NOT NULL,
  `nama_akses` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`id_akses`, `nama_akses`) VALUES
(1, 'Super User'),
(2, 'Simpanan dan Pinjaman'),
(3, 'Pembelian dan Penjualan'),
(4, 'Keanggotaan'),
(5, 'Pergudangan'),
(6, 'Pengawasan'),
(7, 'Pelaporan'),
(8, 'Distribusi Barang'),
(9, 'Tracking');

-- --------------------------------------------------------

--
-- Table structure for table `distribusi_barang`
--

CREATE TABLE `distribusi_barang` (
  `id_distribusi` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `nama_kp` varchar(100) NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribusi_barang`
--

INSERT INTO `distribusi_barang` (`id_distribusi`, `nama_barang`, `jumlah_barang`, `nama_kp`, `tanggal_kirim`, `status`) VALUES
(1, 'Baju Prajurit', 100, 'Koperasi Rindam V Brawijaya Malang', '2016-11-02', 1),
(2, 'LPG 3kg', 100, 'Koperasi Rindam V Brawijaya Pasuruan', '2016-11-01', 1),
(3, 'Kopi Luwak', 10, 'Koperasi Tentara Mendit', '2016-11-01', 1),
(4, 'Kopi Bubuk', 5, 'Koperasi Tentara Pujon', '2016-11-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama_koperasi` varchar(100) NOT NULL,
  `alamat_koperasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_koperasi`, `alamat_koperasi`) VALUES
(1, 'Koperasi Kripik Tempe Sanan', 'Sanan, Malang');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `id_akses`) VALUES
(1, 'distribusib', 'distribusib', 'Petugas Distribusi Barang', 8),
(2, 'superuser', 'superuser', 'Admin Aplikasi', 1),
(3, 'simpanpinjam', 'simpanpinjam', 'Admin Simpan Pinjam', 2),
(4, 'jualbeli', 'jualbeli', 'Admin Penjualan dan Pembelian', 3),
(5, 'distribusib2', 'distribusib2', 'Admin Distributor Ya 3', 8),
(6, 'adminanggota', 'adminanggota', 'Admin Keanggotaan', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `distribusi_barang`
--
ALTER TABLE `distribusi_barang`
  ADD PRIMARY KEY (`id_distribusi`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distribusi_barang`
--
ALTER TABLE `distribusi_barang`
  MODIFY `id_distribusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
