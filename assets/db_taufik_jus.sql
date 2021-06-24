-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 04:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_taufik_jus`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_akses`
--

CREATE TABLE `db_akses` (
  `id_akses` tinyint(1) UNSIGNED NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `db_barang_habis`
--

CREATE TABLE `db_barang_habis` (
  `id_barang` mediumint(1) UNSIGNED NOT NULL,
  `id_karyawan` mediumint(1) UNSIGNED NOT NULL,
  `tanggal` datetime NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga_beli` decimal(10,0) NOT NULL,
  `stok` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_barang_habis`
--

INSERT INTO `db_barang_habis` (`id_barang`, `id_karyawan`, `tanggal`, `nama_barang`, `harga_beli`, `stok`) VALUES
(1, 1, '2021-06-20 00:00:00', 'gula', '13000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `db_data_menu`
--

CREATE TABLE `db_data_menu` (
  `id_menu` mediumint(1) UNSIGNED NOT NULL,
  `kode_minuman` varchar(20) NOT NULL,
  `nama_minuman` varchar(20) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `id_kategori_jus` mediumint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_data_menu`
--

INSERT INTO `db_data_menu` (`id_menu`, `kode_minuman`, `nama_minuman`, `harga`, `id_kategori_jus`) VALUES
(1, '001', 'Jus Mangga', '7000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_detail_karyawan`
--

CREATE TABLE `db_detail_karyawan` (
  `id_karyawan` mediumint(8) UNSIGNED NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `cabang` varchar(20) NOT NULL,
  `gaji` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `db_detail_pembeli`
--

CREATE TABLE `db_detail_pembeli` (
  `id_pembeli` mediumint(1) UNSIGNED NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenkel` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `tanggal_lahir` datetime NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `db_kasbon`
--

CREATE TABLE `db_kasbon` (
  `id_kasbon` mediumint(1) UNSIGNED NOT NULL,
  `id_karyawan` mediumint(1) UNSIGNED NOT NULL,
  `tanggal` datetime NOT NULL,
  `jumlah_kasbon` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `db_kategori_jus`
--

CREATE TABLE `db_kategori_jus` (
  `id_kategori_jus` mediumint(1) UNSIGNED NOT NULL,
  `jenis_kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_kategori_jus`
--

INSERT INTO `db_kategori_jus` (`id_kategori_jus`, `jenis_kategori`) VALUES
(1, 'ORIGINAL'),
(2, 'MIX');

-- --------------------------------------------------------

--
-- Table structure for table `db_penjualan_detail`
--

CREATE TABLE `db_penjualan_detail` (
  `id_penjualan_d` int(1) UNSIGNED NOT NULL,
  `id_penjualan_m` int(1) UNSIGNED NOT NULL,
  `id_menu` int(1) NOT NULL,
  `jumlah_beli` smallint(1) UNSIGNED NOT NULL,
  `harga_satuan` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `db_penjualan_master`
--

CREATE TABLE `db_penjualan_master` (
  `id_penjualan_m` int(10) UNSIGNED NOT NULL,
  `nomor_nota` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `bayar` decimal(10,0) NOT NULL,
  `keterangan_lain` text NOT NULL,
  `id_pelanggan` mediumint(1) UNSIGNED NOT NULL,
  `id_user` mediumint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
  `id_user` mediumint(8) UNSIGNED NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `id_akses` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
