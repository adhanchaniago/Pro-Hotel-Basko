-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Mar 2020 pada 23.34
-- Versi Server: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel_basko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_Kamar`
--

CREATE TABLE IF NOT EXISTS `tb_Kamar` (
  `kamar_id` int(11) NOT NULL,
  `tipe_kamar_id` int(11) NOT NULL,
  `kamar_no` int(11) NOT NULL,
  `kamar_harga` int(11) NOT NULL,
  `kamar_fasilitas` text NOT NULL,
  `kamar_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_Pembayaran`
--

CREATE TABLE IF NOT EXISTS `tb_Pembayaran` (
  `pembayaran_id` int(11) NOT NULL,
  `reservasi_id` int(11) NOT NULL,
  `pembayaran_tgl` date NOT NULL,
  `pembayaran_nominal` int(11) NOT NULL,
  `pembayaran_uang_bayar` int(11) NOT NULL,
  `pembayaran_kembalian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_Pengguna`
--

CREATE TABLE IF NOT EXISTS `tb_Pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_username` varchar(255) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_nama` varchar(255) NOT NULL,
  `pengguna_telp` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_Pengguna`
--

INSERT INTO `tb_Pengguna` (`pengguna_id`, `pengguna_username`, `pengguna_password`, `pengguna_nama`, `pengguna_telp`) VALUES
(1, 'admin', 'admin', 'admin', '0819629431'),
(6, 'qazicenody', 'Pa$$w0rd!', 'Laboriosam aut quo ', '47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_Reservasi`
--

CREATE TABLE IF NOT EXISTS `tb_Reservasi` (
  `reservasi_id` int(11) NOT NULL,
  `kamar_id` int(11) NOT NULL,
  `reservasi_nama` varchar(25) NOT NULL,
  `reservasi_tlp` varchar(12) NOT NULL,
  `reservasi_alamat` text NOT NULL,
  `reservasi_masuk` date NOT NULL,
  `reservasi_keluar` date NOT NULL,
  `reservasi_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_Tipe_kamar`
--

CREATE TABLE IF NOT EXISTS `tb_Tipe_kamar` (
  `tipe_kamar_id` int(11) NOT NULL,
  `tipe_kamar_nama` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_Tipe_kamar`
--

INSERT INTO `tb_Tipe_kamar` (`tipe_kamar_id`, `tipe_kamar_nama`) VALUES
(1, 'Autem iure quidem du'),
(2, 'Perferendis velit ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_Kamar`
--
ALTER TABLE `tb_Kamar`
  ADD PRIMARY KEY (`kamar_id`);

--
-- Indexes for table `tb_Pengguna`
--
ALTER TABLE `tb_Pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `tb_Reservasi`
--
ALTER TABLE `tb_Reservasi`
  ADD PRIMARY KEY (`reservasi_id`);

--
-- Indexes for table `tb_Tipe_kamar`
--
ALTER TABLE `tb_Tipe_kamar`
  ADD PRIMARY KEY (`tipe_kamar_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_Kamar`
--
ALTER TABLE `tb_Kamar`
  MODIFY `kamar_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_Pengguna`
--
ALTER TABLE `tb_Pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_Reservasi`
--
ALTER TABLE `tb_Reservasi`
  MODIFY `reservasi_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_Tipe_kamar`
--
ALTER TABLE `tb_Tipe_kamar`
  MODIFY `tipe_kamar_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
