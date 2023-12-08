-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 18. Februari 2016 jam 08:41
-- Versi Server: 5.1.36
-- Versi PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jaka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisservice`
--

CREATE TABLE IF NOT EXISTS `jenisservice` (
  `idjenisservice` varchar(10) NOT NULL,
  `nmjenisservice` varchar(50) NOT NULL,
  PRIMARY KEY (`idjenisservice`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenisservice`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `nik` varchar(20) NOT NULL,
  `nmkaryawan` varchar(50) NOT NULL,
  `almtkaryawan` varchar(50) NOT NULL,
  `telpkaryawan` varchar(20) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nmkaryawan`, `almtkaryawan`, `telpkaryawan`) VALUES
('123', 'setiawan', 'Magelang', '085786678554');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE IF NOT EXISTS `kendaraan` (
  `noplat` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `tarifperjam` varchar(20) NOT NULL,
  `statusrental` varchar(10) NOT NULL,
  `idtype` varchar(10) NOT NULL,
  `kodepemilik` varchar(10) NOT NULL,
  PRIMARY KEY (`noplat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`noplat`, `foto`, `tahun`, `tarifperjam`, `statusrental`, `idtype`, `kodepemilik`) VALUES
('B 5012 HH', 'Dx1.jpeg', '2012', '15.000', 'ready', 'dh4', 'aku1'),
('H 2013 D', 'DAIHATSU-XENIA-TERBARU-2013.jpg', '2013', '15.000', 'ready', 'dh1', 'aku2'),
('H 8512 Y', 'harga-mobil-bekas-toyota-avanza-2015.jpg', '2009', '15.000', 'ready', 'ta3', 'aku2'),
('B 5512 CV', 'Dx2.jpeg', '2012', '20.000', 'ready', 'dx2', 'aku2'),
('H 212 H', 'Hj1.jpeg', '2014', '20.000', 'ready', 'hj1', 'aku1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `typeuser` varchar(20) NOT NULL,
  `nik` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`, `typeuser`, `nik`) VALUES
('setiawan', 'setia', 'karyawan', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE IF NOT EXISTS `merk` (
  `kodemerk` varchar(10) NOT NULL,
  `nmmerk` varchar(30) NOT NULL,
  PRIMARY KEY (`kodemerk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`kodemerk`, `nmmerk`) VALUES
('hj1', 'Jazz'),
('dh4', 'Xenia'),
('ta3', 'Avanza'),
('dx2', 'Xenia'),
('ta1', 'Avanza'),
('dh1', 'Xenia'),
('hj3', 'Jazz');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `noktp` varchar(16) NOT NULL,
  `namapel` varchar(50) NOT NULL,
  `alamatpel` varchar(50) NOT NULL,
  `telppel` varchar(20) NOT NULL,
  PRIMARY KEY (`noktp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`noktp`, `namapel`, `alamatpel`, `telppel`) VALUES
('900', 'adi', 'gunung tumpeng', '0817654321'),
('2233445566778899', 'Aku', 'jl. Mawar no.12 Semarang', '087700888665');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE IF NOT EXISTS `pemilik` (
  `kodepemilik` varchar(10) NOT NULL,
  `nmpemilik` varchar(30) NOT NULL,
  `almtpemilik` varchar(30) NOT NULL,
  `telppemilik` varchar(20) NOT NULL,
  PRIMARY KEY (`kodepemilik`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`kodepemilik`, `nmpemilik`, `almtpemilik`, `telppemilik`) VALUES
('aku1', 'Erwin', 'Semarang', '089786546233'),
('aku2', 'Johan', 'Salatiga', '081902808952');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `kodeservice` varchar(10) NOT NULL,
  `tglservice` date NOT NULL,
  `biayaservice` varchar(30) NOT NULL,
  `noplat` varchar(10) NOT NULL,
  `idjenisservice` varchar(10) NOT NULL,
  PRIMARY KEY (`kodeservice`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `service`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `setoran`
--

CREATE TABLE IF NOT EXISTS `setoran` (
  `nosetoran` int(11) NOT NULL AUTO_INCREMENT,
  `tglsetoran` date NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `kodepemilik` varchar(10) NOT NULL,
  PRIMARY KEY (`nosetoran`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `setoran`
--

INSERT INTO `setoran` (`nosetoran`, `tglsetoran`, `jumlah`, `nik`, `kodepemilik`) VALUES
(6, '2016-02-03', '360.000', '123', 'aku1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sopir`
--

CREATE TABLE IF NOT EXISTS `sopir` (
  `idsopir` varchar(10) NOT NULL,
  `nmsopir` varchar(50) NOT NULL,
  `almtsopir` text NOT NULL,
  `telpsopir` varchar(20) NOT NULL,
  `nosim` varchar(30) NOT NULL,
  `tarifperjam` int(30) unsigned NOT NULL,
  PRIMARY KEY (`idsopir`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sopir`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksisewa`
--

CREATE TABLE IF NOT EXISTS `transaksisewa` (
  `notransaksi` int(10) NOT NULL AUTO_INCREMENT,
  `tglpesan` date DEFAULT NULL,
  `tglpinjam` date DEFAULT NULL,
  `jampinjam` time DEFAULT NULL,
  `tglkembalirencana` date DEFAULT NULL,
  `jamkembalirencana` time DEFAULT NULL,
  `tglkembalirealisasi` date DEFAULT NULL,
  `jamkembalireal` time DEFAULT NULL,
  `denda` varchar(30) DEFAULT NULL,
  `kilometerpinjam` varchar(30) DEFAULT NULL,
  `kilometerkembali` varchar(30) DEFAULT NULL,
  `bbmpinjam` varchar(30) DEFAULT NULL,
  `bbmkembali` varchar(30) DEFAULT NULL,
  `kondisimobilpinjam` varchar(30) DEFAULT NULL,
  `kondisimobilkembali` varchar(30) DEFAULT NULL,
  `kerusakan` varchar(30) DEFAULT NULL,
  `biayakerusakan` varchar(30) DEFAULT NULL,
  `biayabbm` varchar(30) DEFAULT NULL,
  `noktp` varchar(20) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `noplat` varchar(20) DEFAULT NULL,
  `idsopir` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`notransaksi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `transaksisewa`
--

INSERT INTO `transaksisewa` (`notransaksi`, `tglpesan`, `tglpinjam`, `jampinjam`, `tglkembalirencana`, `jamkembalirencana`, `tglkembalirealisasi`, `jamkembalireal`, `denda`, `kilometerpinjam`, `kilometerkembali`, `bbmpinjam`, `bbmkembali`, `kondisimobilpinjam`, `kondisimobilkembali`, `kerusakan`, `biayakerusakan`, `biayabbm`, `noktp`, `nik`, `noplat`, `idsopir`) VALUES
(13, '2016-02-18', '2016-02-02', '13:00:00', '2016-02-03', '13:00:00', '2016-02-03', '13:00:00', '5000', '100', '110', '2', '1', 'baik', 'baik', 'normal', '5000', '8000', '900', NULL, 'B 5012 HH', NULL),
(12, '2016-02-18', '2016-02-19', '08:00:00', '2016-02-21', '10:00:00', '2016-02-23', '06:00:00', '100.000', '1022', '1034', '5 liter', '2 liter', 'baik', 'kurang baik', 'lecet', '25.000', '24.000', '2233445566778899', NULL, 'H 2013 D', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `idtype` varchar(10) NOT NULL,
  `nmtype` varchar(20) NOT NULL,
  `kodemerk` varchar(10) NOT NULL,
  PRIMARY KEY (`idtype`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `type`
--

INSERT INTO `type` (`idtype`, `nmtype`, `kodemerk`) VALUES
('hj1', 'Honda', 'hj1'),
('dh4', 'Daihatsu', 'dh4'),
('ta3', 'Toyota', 'ta3'),
('dx2', 'Daihatsu', 'dx2'),
('ta1', 'Toyota', 'ta1'),
('dh1', 'Daihatsu', 'dh1'),
('hj3', 'Honda', 'hj3');
