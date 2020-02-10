-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 05:42 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akses`
--

CREATE TABLE `tbl_akses` (
  `id_user` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_akses`
--

INSERT INTO `tbl_akses` (`id_user`, `nip`, `nama_user`, `jabatan`, `jenis_kelamin`, `status`, `username`, `password`) VALUES
(1, '123456', 'admin', 'administrator', 'laki-laki', 'belum menikah', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(20) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'ANTIBAKTERI'),
(2, 'Tradisional'),
(5, 'Handsaplas'),
(20, 'Adenosin'),
(28, 'Adenosin'),
(29, 'ANTIBAKTERI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `id_obat` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `kode_obat` varchar(255) NOT NULL,
  `produsen` varchar(255) NOT NULL,
  `distributor` varchar(255) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `harga_beli` int(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `expired` date NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_obat`
--

INSERT INTO `tbl_obat` (`id_obat`, `kategori`, `nama_obat`, `kode_obat`, `produsen`, `distributor`, `satuan`, `harga_beli`, `harga`, `stok`, `expired`, `tgl_masuk`) VALUES
(7, 'Obat generik', 'IBUPROFEN  ', 'A001', 'Sidomuncul', 'Nyonyamenir', 'DUS', 3000, 200000, 10, '2020-01-15', '2020-01-01'),
(14, 'Obat generik', 'Pocarisweat ', 'ISOTO', 'Pocay', 'MSBS Pharmacy', 'Botol', 100000, 5000, 50, '2019-02-24', '2018-02-24'),
(16, 'Rririri', 'Handsaplas', 'A AOOO LN', 'Sidomuncul', 'GneSode', 'DUS', 5000, 500000, 100, '2022-01-31', '2020-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(20) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(20) NOT NULL,
  `id_obat` int(20) NOT NULL,
  `kodeObat` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `kategori`, `nama`, `lokasi`, `tanggal`, `jumlah`, `id_obat`, `kodeObat`, `harga`) VALUES
(5, 'Obat generik', 'IBUPROFEN ', 'Pustu 1', '2020-01-28', 10, 7, '', 0),
(6, 'Obat generik', 'IBUPROFEN ', 'Pustu 1', '2019-12-03', 20, 7, '', 0),
(9, 'Obat generik', 'Pocarisweat ', 'Pustu 1', '2020-01-28', 20, 14, '', 0),
(11, 'IBUPROFEN ', 'Obat generik', 'Pustu 1', '2020-01-28', 30, 7, 'A001', 3000),
(13, 'IBUPROFEN  ', 'Obat generik', 'Pustu 1', '2020-01-29', 10, 7, 'A001', 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
