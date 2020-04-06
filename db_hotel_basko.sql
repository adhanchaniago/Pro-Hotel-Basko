-- Adminer 4.7.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tb_Kamar`;
CREATE TABLE `tb_Kamar` (
  `kamar_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipe_kamar_id` int(11) NOT NULL,
  `kamar_no` varchar(11) NOT NULL,
  `kamar_harga` int(11) NOT NULL,
  `kamar_fasilitas` text NOT NULL,
  `kamar_status` varchar(100) NOT NULL,
  PRIMARY KEY (`kamar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO `tb_Kamar` (`kamar_id`, `tipe_kamar_id`, `kamar_no`, `kamar_harga`, `kamar_fasilitas`, `kamar_status`) VALUES
(4,	3,	'011',	250000,	'Makan Malam\r\nSelimut',	'Berisi'),
(5,	3,	'012',	250000,	'Makan Malam\r\nSelimut',	'Tersedia'),
(6,	3,	'013',	250000,	'Makan Malam\r\nSelimut',	'Tersedia'),
(7,	4,	'021',	300000,	'Makan Malam\r\nSelimut\r\nTV',	'Tersedia'),
(8,	4,	'022',	300000,	'Makan Malam\r\nSelimut\r\nTV',	'Tersedia'),
(9,	5,	'031',	300000,	'Makan Malam\r\nSelimut\r\nTV\r\nPijat',	'Tersedia'),
(10,	4,	'023',	350000,	'Makan Malam\r\nSelimut\r\nTV',	'Tersedia'),
(11,	5,	'032',	350000,	'Makan Malam\r\nSelimut\r\nTV\r\nPijat',	'Tersedia'),
(12,	5,	'033',	350000,	'Makan Malam\r\nSelimut\r\nTV\r\nPijat',	'Tersedia')
ON DUPLICATE KEY UPDATE `kamar_id` = VALUES(`kamar_id`), `tipe_kamar_id` = VALUES(`tipe_kamar_id`), `kamar_no` = VALUES(`kamar_no`), `kamar_harga` = VALUES(`kamar_harga`), `kamar_fasilitas` = VALUES(`kamar_fasilitas`), `kamar_status` = VALUES(`kamar_status`);

DROP TABLE IF EXISTS `tb_Pembayaran`;
CREATE TABLE `tb_Pembayaran` (
  `pembayaran_id` int(11) NOT NULL AUTO_INCREMENT,
  `reservasi_id` int(11) NOT NULL,
  `pembayaran_tgl` date NOT NULL,
  `pembayaran_nominal` int(11) NOT NULL,
  `pembayaran_uang_bayar` int(11) NOT NULL,
  `pembayaran_kembalian` int(11) NOT NULL,
  PRIMARY KEY (`pembayaran_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `tb_Pembayaran` (`pembayaran_id`, `reservasi_id`, `pembayaran_tgl`, `pembayaran_nominal`, `pembayaran_uang_bayar`, `pembayaran_kembalian`) VALUES
(4,	1,	'2020-03-21',	250000,	1000000,	750000),
(5,	1,	'2020-03-21',	250000,	2000000,	1750000)
ON DUPLICATE KEY UPDATE `pembayaran_id` = VALUES(`pembayaran_id`), `reservasi_id` = VALUES(`reservasi_id`), `pembayaran_tgl` = VALUES(`pembayaran_tgl`), `pembayaran_nominal` = VALUES(`pembayaran_nominal`), `pembayaran_uang_bayar` = VALUES(`pembayaran_uang_bayar`), `pembayaran_kembalian` = VALUES(`pembayaran_kembalian`);

DROP TABLE IF EXISTS `tb_Pengguna`;
CREATE TABLE `tb_Pengguna` (
  `pengguna_id` int(11) NOT NULL AUTO_INCREMENT,
  `pengguna_username` varchar(255) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_nama` varchar(255) NOT NULL,
  `pengguna_telp` varchar(20) NOT NULL,
  PRIMARY KEY (`pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `tb_Pengguna` (`pengguna_id`, `pengguna_username`, `pengguna_password`, `pengguna_nama`, `pengguna_telp`) VALUES
(1,	'admin',	'admin',	'admin',	'0819629431'),
(2,	'muxad',	'Pa$$w0rd!',	'Praesentium ullamco ',	'93'),
(3,	'jelyrymyxu',	'Pa$$w0rd!',	'Dicta rem repellendu',	'43')
ON DUPLICATE KEY UPDATE `pengguna_id` = VALUES(`pengguna_id`), `pengguna_username` = VALUES(`pengguna_username`), `pengguna_password` = VALUES(`pengguna_password`), `pengguna_nama` = VALUES(`pengguna_nama`), `pengguna_telp` = VALUES(`pengguna_telp`);

DROP TABLE IF EXISTS `tb_Reservasi`;
CREATE TABLE `tb_Reservasi` (
  `reservasi_id` int(11) NOT NULL AUTO_INCREMENT,
  `kamar_id` int(11) NOT NULL,
  `reservasi_nama` varchar(100) NOT NULL,
  `reservasi_tlp` varchar(12) NOT NULL,
  `reservasi_alamat` text NOT NULL,
  `reservasi_masuk` date NOT NULL,
  `reservasi_keluar` date NOT NULL,
  `reservasi_status` varchar(25) NOT NULL,
  PRIMARY KEY (`reservasi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `tb_Reservasi` (`reservasi_id`, `kamar_id`, `reservasi_nama`, `reservasi_tlp`, `reservasi_alamat`, `reservasi_masuk`, `reservasi_keluar`, `reservasi_status`) VALUES
(1,	5,	'Egova',	'081927321',	'Padang',	'2020-03-20',	'2020-03-25',	'Checkin')
ON DUPLICATE KEY UPDATE `reservasi_id` = VALUES(`reservasi_id`), `kamar_id` = VALUES(`kamar_id`), `reservasi_nama` = VALUES(`reservasi_nama`), `reservasi_tlp` = VALUES(`reservasi_tlp`), `reservasi_alamat` = VALUES(`reservasi_alamat`), `reservasi_masuk` = VALUES(`reservasi_masuk`), `reservasi_keluar` = VALUES(`reservasi_keluar`), `reservasi_status` = VALUES(`reservasi_status`);

DROP TABLE IF EXISTS `tb_Tipe_kamar`;
CREATE TABLE `tb_Tipe_kamar` (
  `tipe_kamar_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipe_kamar_nama` varchar(255) NOT NULL,
  PRIMARY KEY (`tipe_kamar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `tb_Tipe_kamar` (`tipe_kamar_id`, `tipe_kamar_nama`) VALUES
(3,	'Ekonomi'),
(4,	'Standart'),
(5,	'VIP')
ON DUPLICATE KEY UPDATE `tipe_kamar_id` = VALUES(`tipe_kamar_id`), `tipe_kamar_nama` = VALUES(`tipe_kamar_nama`);

-- 2020-04-06 02:50:41