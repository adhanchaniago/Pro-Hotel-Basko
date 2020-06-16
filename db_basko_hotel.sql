-- Adminer 4.6.1 MySQL dump

SET NAMES utf8;
SET time_zone
= '+00:00';
SET foreign_key_checks
= 0;
SET sql_mode
= 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tb_kamar`;
CREATE TABLE `tb_kamar`
(
  `kamar_id` int
(11) NOT NULL AUTO_INCREMENT,
  `tipe_kamar_id` int
(11) NOT NULL,
  `kamar_no` varchar
(11) NOT NULL,
  `kamar_harga` int
(11) NOT NULL,
  `kamar_fasilitas` text NOT NULL,
  `kamar_status` varchar
(100) NOT NULL,
  PRIMARY KEY
(`kamar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_kamar` (`
kamar_id`,
`tipe_kamar_id
`, `kamar_no`, `kamar_harga`, `kamar_fasilitas`, `kamar_status`) VALUES
(4,	3,	'011',	250000,	'Makan Malam\r\nSelimut',	'Berisi'),
(5,	3,	'012',	250000,	'Makan Malam\r\nSelimut',	'Tersedia'),
(6,	3,	'013',	250000,	'Makan Malam\r\nSelimut',	'Tersedia'),
(7,	4,	'021',	300000,	'Makan Malam\r\nSelimut\r\nTV',	'Tersedia'),
(8,	4,	'022',	300000,	'Makan Malam\r\nSelimut\r\nTV',	'Tersedia'),
(9,	5,	'031',	300000,	'Makan Malam\r\nSelimut\r\nTV\r\nPijat',	'Tersedia'),
(10,	4,	'023',	350000,	'Makan Malam\r\nSelimut\r\nTV',	'Tersedia'),
(11,	5,	'032',	350000,	'Makan Malam\r\nSelimut\r\nTV\r\nPijat',	'Tersedia'),
(13,	5,	'133',	90000000,	'Makan siang',	'Tersedia');

DROP TABLE IF EXISTS `tb_pembayaran`;
CREATE TABLE `tb_pembayaran`
(
  `pembayaran_id` int
(11) NOT NULL AUTO_INCREMENT,
  `reservasi_id` int
(11) NOT NULL,
  `pembayaran_tgl` date NOT NULL,
  `pembayaran_nominal` int
(11) NOT NULL,
  `pembayaran_uang_bayar` int
(11) NOT NULL,
  `pembayaran_kembalian` int
(11) NOT NULL,
  PRIMARY KEY
(`pembayaran_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_pembayaran` (`
pembayaran_id`,
`reservasi_id
`, `pembayaran_tgl`, `pembayaran_nominal`, `pembayaran_uang_bayar`, `pembayaran_kembalian`) VALUES
(8,	5,	'2020-04-09',	500000,	2000000,	1500000),
(9,	8,	'2020-06-19',	900000,	950000,	50000);

DROP TABLE IF EXISTS `tb_pengguna`;
CREATE TABLE `tb_pengguna`
(
  `pengguna_id` int
(11) NOT NULL AUTO_INCREMENT,
  `pengguna_username` varchar
(255) NOT NULL,
  `pengguna_password` varchar
(255) NOT NULL,
  `pengguna_nama` varchar
(255) NOT NULL,
  `pengguna_telp` varchar
(20) NOT NULL,
  `pengguna_level` varchar
(20) NOT NULL,
  PRIMARY KEY
(`pengguna_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_pengguna` (`
pengguna_id`,
`pengguna_username
`, `pengguna_password`, `pengguna_nama`, `pengguna_telp`, `pengguna_level`) VALUES
(1,	'Admin',	'Admin',	'Admin',	'0819629431',	'Admin'),
(4,	'Pimpinan',	'Pimpinan',	'Pimpinan',	'08229831902',	'Pimpinan'),
(6,	'Frontline',	'Frontline',	'Frontline',	'0812399123',	'Frontline');

DROP TABLE IF EXISTS `tb_reservasi`;
CREATE TABLE `tb_reservasi`
(
  `reservasi_id` int
(11) NOT NULL AUTO_INCREMENT,
  `kamar_id` int
(11) NOT NULL,
  `reservasi_nama` varchar
(100) NOT NULL,
  `reservasi_tlp` varchar
(12) NOT NULL,
  `reservasi_alamat` text NOT NULL,
  `reservasi_masuk` date NOT NULL,
  `reservasi_keluar` date NOT NULL,
  `reservasi_status` varchar
(25) NOT NULL,
  PRIMARY KEY
(`reservasi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_reservasi` (`
reservasi_id`,
`kamar_id
`, `reservasi_nama`, `reservasi_tlp`, `reservasi_alamat`, `reservasi_masuk`, `reservasi_keluar`, `reservasi_status`) VALUES
(8,	9,	'Ihsan',	'0819629431',	'Padang',	'2020-06-16',	'2020-06-19',	'Selesai'),
(9,	4,	'San Sazli',	'0823123',	'Padang',	'2020-06-16',	'2020-06-17',	'Booking');

DROP TABLE IF EXISTS `tb_tipe_kamar`;
CREATE TABLE `tb_tipe_kamar`
(
  `tipe_kamar_id` int
(11) NOT NULL AUTO_INCREMENT,
  `tipe_kamar_nama` varchar
(255) NOT NULL,
  PRIMARY KEY
(`tipe_kamar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_tipe_kamar` (`
tipe_kamar_id`,
`tipe_kamar_nama
`) VALUES
(3,	'Ekonomi'),
(4,	'Standart'),
(5,	'VIP');

-- 2020-06-16 14:01:46