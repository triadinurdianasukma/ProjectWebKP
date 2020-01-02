-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2015 pada 22.06
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `inventory_pln`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(255) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `computer`
--

CREATE TABLE IF NOT EXISTS `computer` (
  `id_computer` int(255) NOT NULL AUTO_INCREMENT,
  `username_computer` varchar(255) NOT NULL,
  `no_computer` int(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `keadaan` varchar(255) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `nama_owner` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  PRIMARY KEY (`id_computer`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `computer`
--

INSERT INTO `computer` (`id_computer`, `username_computer`, `no_computer`, `os`, `keadaan`, `gambar`, `nama_owner`, `lokasi`) VALUES
(10, 'admin1', 1, 'Kali Linux', 'Menyala', 'google1-1024x1024_png1.png', 'admin', 'A108');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hardware`
--

CREATE TABLE IF NOT EXISTS `hardware` (
  `id_hardware` int(255) NOT NULL AUTO_INCREMENT,
  `nama_hardware` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `tipe` varchar(255) DEFAULT NULL,
  `no_seri` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_computer` int(255) NOT NULL,
  PRIMARY KEY (`id_hardware`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Dumping data untuk tabel `hardware`
--

INSERT INTO `hardware` (`id_hardware`, `nama_hardware`, `merk`, `tipe`, `no_seri`, `keterangan`, `id_computer`) VALUES
(63, 'Processor', 'ATI', 'Radeon', '312', 'Menyala', 10),
(64, 'Motherboard', 'Sata', 'Boot', 'A121', 'Menyala', 10),
(65, 'RAM1', 'DDR4', 'DDR4', '121', 'Menyala', 10),
(66, 'RAM2', 'DDR3', 'DDR3', '121', 'Menyala', 10),
(67, 'VGA Card1', 'NVDIA', 'Geforce', '710', 'Menyala', 10),
(68, 'VGA Card2', 'ATI', 'Radeon', '710', 'Menyala', 10),
(69, 'Harddisk Drive1', 'Toshiba', 'e121', '120', 'Menyala', 10),
(70, 'Harddisk Drive2', 'Samsung', 'r688', '799', 'Menyala', 10),
(71, 'Optical Drive1', 'Sony', '12', '12', 'Menyala', 10),
(72, 'Optical Drive2', 'Samsung', '88', '77', 'Menyala', 10),
(73, 'Network Card', 'NIC', '123', '123', 'Menyala', 10),
(74, 'Sound Card', 'Dobly', '122', '144', 'Menyala', 10),
(75, 'Keyboard', 'Lenovo', '883', '883', 'Menyala', 10),
(76, 'Mouse', 'Giga', '123', '123', 'Menyala', 10),
(77, 'Monitor', 'LG', '1243', '121', 'Menyala', 10),
(78, 'Printer1', 'Epson', 'T120i', '1243', 'Menyala', 10),
(79, 'Printer2', '-', '-', '-', '-', 10),
(80, 'Printer3', '-', '-', '-', '-', 10),
(81, 'Scanner', 'Epson', 'k88', 'kk99', 'Menyala', 10),
(82, 'IP Address', '192.168.1.1', '0', '0', '0', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `inspection`
--

CREATE TABLE IF NOT EXISTS `inspection` (
  `id_inspection` int(255) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pemeriksa` varchar(255) NOT NULL,
  `id_computer` int(255) NOT NULL,
  UNIQUE KEY `id_computer` (`id_computer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inspection`
--

INSERT INTO `inspection` (`id_inspection`, `tanggal`, `nama_pemeriksa`, `id_computer`) VALUES
(1, '2015-06-10', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `software`
--

CREATE TABLE IF NOT EXISTS `software` (
  `id_software` int(255) NOT NULL AUTO_INCREMENT,
  `nama_software` varchar(255) NOT NULL,
  `installed` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `id_computer` int(255) NOT NULL,
  PRIMARY KEY (`id_software`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `software`
--

INSERT INTO `software` (`id_software`, `nama_software`, `installed`, `version`, `id_computer`) VALUES
(11, 'Microsoft Office', 'Ya', '2010', 10),
(12, 'Symantec', 'Ya', '18', 10),
(13, 'Radmin', 'Ya', '12', 10),
(14, 'Internet Explorer', 'No', '-', 10),
(15, 'Mozilla Firefox', 'Ya', '13', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
