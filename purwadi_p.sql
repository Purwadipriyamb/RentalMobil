-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 19. Februari 2016 jam 23:26
-- Versi Server: 5.1.36
-- Versi PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `purwadi_p`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisservice`
--

CREATE TABLE IF NOT EXISTS `jenisservice` (
  `IDJenisService` varchar(5) NOT NULL,
  `NmJenisService` text NOT NULL,
  PRIMARY KEY (`IDJenisService`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenisservice`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `NIK` varchar(20) NOT NULL,
  `NmKaryawan` text NOT NULL,
  `AlmtKaryawan` text NOT NULL,
  `TelpKaryawan` text NOT NULL,
  PRIMARY KEY (`NIK`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`NIK`, `NmKaryawan`, `AlmtKaryawan`, `TelpKaryawan`) VALUES
('123', 'Adi', 'Suruh', '087834234567');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE IF NOT EXISTS `kendaraan` (
  `NoPlat` varchar(20) NOT NULL,
  `Tahun` text NOT NULL,
  `TarifPerJam` int(11) NOT NULL,
  `StatusRental` text NOT NULL,
  `IDType` varchar(5) NOT NULL,
  `KodePemilik` varchar(5) NOT NULL,
  PRIMARY KEY (`NoPlat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`NoPlat`, `Tahun`, `TarifPerJam`, `StatusRental`, `IDType`, `KodePemilik`) VALUES
('AD5678', '2006', 25000, 'siap', '0002', '0002'),
('AD343', '2016', 20000, 'Siap', '0002', '0002'),
('AD8756', '2001', 30000, 'Siap', '0003', '0001'),
('H 4343', '2014', 30000, 'Siap', '0004', '0003'),
('S 98785', '2016', 35000, 'Siap', '0003', '0001'),
('H 7654 I', '2014', 25000, 'Siap', '0004', '0002'),
('H 765432 I', '2014', 25000, 'Siap', '0001', '0001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `UserName` varchar(10) NOT NULL,
  `Password` text NOT NULL,
  `TypeUser` text NOT NULL,
  `NIK` varchar(20) NOT NULL,
  PRIMARY KEY (`UserName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`UserName`, `Password`, `TypeUser`, `NIK`) VALUES
('Adi', 'ganteng', 'karyawan', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE IF NOT EXISTS `merk` (
  `KodeMerk` varchar(5) NOT NULL,
  `NmMerk` text NOT NULL,
  PRIMARY KEY (`KodeMerk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`KodeMerk`, `NmMerk`) VALUES
('tyt', 'Toyota'),
('hnd', 'Honda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `NoKTP` varchar(20) NOT NULL,
  `NamaPel` text NOT NULL,
  `AlamatPel` text NOT NULL,
  `TelpPel` text NOT NULL,
  PRIMARY KEY (`NoKTP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`NoKTP`, `NamaPel`, `AlamatPel`, `TelpPel`) VALUES
('326743', 'Andira Rahmawati', 'Salatiga', '087654345234'),
('98765', 'Sopo', 'Kono', '085xxxxxxxxx'),
('0987', 'Bagas Safatur Rahman', 'Segiri', '087845765234'),
('5432', 'andi', 'suruh', '0817654321'),
('43210', 'ida', 'suruh', '0217654321'),
('', 'andi', 'suruh', '0817654321'),
('1', 'andi', 'suruh', '0817654321'),
('12345', 'andi', 'suruh', '0817654321'),
('2345', 'andi', 'suruh', '0817654321'),
('90', 'fika', 'sumber', '085712999'),
('80', 'anto', 'ngasinan', '089934567'),
('70', 'liya', 'sumber', '0857654321'),
('6', 'ani', 'kaligede', '0856654321');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE IF NOT EXISTS `pemilik` (
  `KodePemilik` varchar(5) NOT NULL,
  `NmPemilik` text NOT NULL,
  `AlmtPemilik` text NOT NULL,
  `TelpPemilik` text NOT NULL,
  PRIMARY KEY (`KodePemilik`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`KodePemilik`, `NmPemilik`, `AlmtPemilik`, `TelpPemilik`) VALUES
('0001', 'Alex', 'Salatiga', '087834234567'),
('0002', 'Adriana', 'Suruh', '087876765654'),
('0003', 'Karyadi', 'Salatiga', '087876765654');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `KodeService` varchar(5) NOT NULL,
  `TglService` date NOT NULL,
  `BiayaService` int(11) NOT NULL,
  `NoPlat` varchar(20) NOT NULL,
  `IDJenisService` varchar(5) NOT NULL,
  PRIMARY KEY (`KodeService`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `service`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `setoran`
--

CREATE TABLE IF NOT EXISTS `setoran` (
  `NoSetoran` varchar(5) NOT NULL,
  `TglSetoran` date NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `KodePemilik` varchar(5) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  PRIMARY KEY (`NoSetoran`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setoran`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `sopir`
--

CREATE TABLE IF NOT EXISTS `sopir` (
  `IDSopir` varchar(5) NOT NULL,
  `NmSopir` text NOT NULL,
  `AlmtSopir` text NOT NULL,
  `TelpSopir` text NOT NULL,
  `NoSIM` text NOT NULL,
  `TarifPerJam` int(11) NOT NULL,
  PRIMARY KEY (`IDSopir`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sopir`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksisewa`
--

CREATE TABLE IF NOT EXISTS `transaksisewa` (
  `NoTransaksi` varchar(5) NOT NULL,
  `TglPesan` date NOT NULL,
  `TglPinjam` date NOT NULL,
  `JamPinjam` time NOT NULL,
  `TglKembaliRencana` date NOT NULL,
  `JamKembaliRencana` time NOT NULL,
  `TglKembaliRealisasi` date NOT NULL,
  `JamKembaliReal` time NOT NULL,
  `Denda` int(11) NOT NULL,
  `KilometerPinjam` int(11) NOT NULL,
  `KilometerKembali` int(11) NOT NULL,
  `BBMPinjam` int(11) NOT NULL,
  `BBMKembali` int(11) NOT NULL,
  `KondisiMobilPinjam` text NOT NULL,
  `KondisiMobilKembali` text NOT NULL,
  `Kerusakan` text NOT NULL,
  `BiayaKerusakan` int(11) NOT NULL,
  `BiayaBBM` int(11) NOT NULL,
  `NoKTP` varchar(20) NOT NULL,
  `IDSopir` varchar(5) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `NoPlat` varchar(20) NOT NULL,
  PRIMARY KEY (`NoTransaksi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksisewa`
--

INSERT INTO `transaksisewa` (`NoTransaksi`, `TglPesan`, `TglPinjam`, `JamPinjam`, `TglKembaliRencana`, `JamKembaliRencana`, `TglKembaliRealisasi`, `JamKembaliReal`, `Denda`, `KilometerPinjam`, `KilometerKembali`, `BBMPinjam`, `BBMKembali`, `KondisiMobilPinjam`, `KondisiMobilKembali`, `Kerusakan`, `BiayaKerusakan`, `BiayaBBM`, `NoKTP`, `IDSopir`, `NIK`, `NoPlat`) VALUES
('98787', '2009-09-12', '2009-09-13', '12:35:09', '2009-09-15', '00:00:12', '2009-09-17', '13:00:00', 20000, 1200, 13000, 30, 25, 'mulus', 'baret sitik', '', 0, -40000, '34567', '', '', 'UD123'),
('3', '2016-02-18', '2016-02-18', '13:00:00', '2016-02-19', '13:00:00', '2016-02-20', '13:00:00', 240000, 100, 110, 2, 1, 'baik', 'baik', '', 0, 8000, '90', '', '', 'AD5678'),
('2', '2016-02-01', '2016-02-03', '14:00:00', '2016-02-04', '14:00:00', '2016-02-04', '14:00:00', 240000, 50, 60, 3, 2, 'baik', 'baik', '', 0, 8000, '80', '', '', 'AD8756'),
('4', '2016-02-18', '2016-02-19', '15:00:00', '2016-02-21', '15:00:00', '2016-02-21', '15:00:00', 240000, 10, 15, 2, 1, 'baik', 'baik', '', 0, 8000, '70', '', '', 'AD343'),
('5', '2016-02-18', '2016-02-19', '16:00:00', '2016-02-20', '14:00:00', '2016-02-20', '14:00:00', 200000, 120, 135, 6, 4, 'baik', 'baik', '', 0, 16000, '6', '', '', 'AD343');

-- --------------------------------------------------------

--
-- Struktur dari tabel `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `IDType` varchar(5) NOT NULL,
  `NmType` text NOT NULL,
  `KodeMerk` varchar(5) NOT NULL,
  PRIMARY KEY (`IDType`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `type`
--

INSERT INTO `type` (`IDType`, `NmType`, `KodeMerk`) VALUES
('0001', 'Brabus', 'brb'),
('0002', 'Inova', 'tyt'),
('0003', 'Jazz', 'hnd');
