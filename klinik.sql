-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 07:16 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id_appointment` varchar(7) NOT NULL,
  `id_pasien` varchar(6) NOT NULL,
  `id_dokter` varchar(12) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id_appointment`, `id_pasien`, `id_dokter`, `tgl`) VALUES
('APPO001', 'Y10001', 'DKTPD001', '2010-03-22'),
('APPO002', 'Y10002', 'DKTPS002', '2009-10-01'),
('APPO003', 'Y10004', 'DKTPK002', '2012-08-09'),
('APPO004', 'Y10004', 'DKTDR002', '2013-04-10'),
('APPO007', 'Y10003', 'DKTDR001', '2017-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `id_person` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tempat_lhr` varchar(20) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `kontak` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`id_person`, `nama`, `alamat`, `tempat_lhr`, `tgl_lhr`, `kontak`) VALUES
('1100001', 'Ajeng', 'Bojongsoang', 'Surabaya', '1976-07-12', '0256625796'),
('1100002', 'Fahira', 'Sukawening', 'Garut', '1996-01-18', '02266524480'),
('1100003', 'Tono', 'Cicadas', 'Padang', '1982-04-10', '0236645678'),
('1100004', 'Olif', 'Bubat', 'Bandung', '1991-11-27', '0226617032'),
('1100005', 'Dini R', 'Melati', 'Jakarta', '1977-10-21', '0216647445'),
('1500131', 'Siti', 'Moh Toha', 'Gorontalo', '1959-05-03', '6612342'),
('1500132', 'Farah', 'Batu', 'Banyuwangi', '1959-05-03', '6612323'),
('1500133', 'Sam', 'Cijagra', 'Solo', '1970-07-02', '6612235'),
('1500134', 'Indra', 'Kuningan', 'Ambon', '1960-04-09', '6612355'),
('1500135', 'Maria', 'Moh Toha', 'Gorontalo', '1959-05-03', '6613345'),
('1500136', 'Syifa H', 'Cihanjuang', 'Bandung', '2017-04-06', '0226674471'),
('1800111', 'Fira', 'Panyileukan', 'Sumedang', '1986-11-22', '6612345'),
('1800112', 'Rafi', 'Sukasari', 'Yogyakarta', '1968-09-14', '6612346'),
('1800113', 'Aria', 'Ciujung', 'Pekanbaru', '1962-03-28', '6612366'),
('1800114', 'Ahmad', 'Ciseke', 'Medan', '1984-10-23', '6612367'),
('1800115', 'Arief', 'Djuanda', 'Bali', '1953-02-19', '6612324'),
('1800125', 'Angga', 'Hegarmanah', 'Makassar', '1953-02-19', '0226612345'),
('1800126', 'Fajar', 'Cigugur', 'Bukittingi', '1953-02-19', '0226612235'),
('1800127', 'Ghina', 'Cibabat', 'Semarang', '1953-02-19', '0226678345'),
('1800128', 'Shifa', 'Caringin', 'Malang', '1953-02-19', '0226611237'),
('1800129', 'Yusuf', 'Cimahi', 'Cibinong', '1953-02-19', '0226642448');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id_dept` varchar(7) NOT NULL,
  `id_kadept` varchar(6) NOT NULL,
  `nama_dept` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id_dept`, `id_kadept`, `nama_dept`) VALUES
('DDR1', 'KD001', 'Pernafasan'),
('DPD1', 'KD001', 'Penyakit Dalam'),
('DPD5', 'KD009', 'Spesialis THT'),
('DPK1', 'KD004', 'Kandungan');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` varchar(12) NOT NULL,
  `id_person` varchar(16) NOT NULL,
  `id_dept` varchar(7) NOT NULL,
  `tgl_kerja` date NOT NULL,
  `years_of_exp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `id_person`, `id_dept`, `tgl_kerja`, `years_of_exp`) VALUES
('DKTDR001', '1800112', 'DDR1', '2009-10-01', 8),
('DKTDR002', '1800126', 'DDR1', '2010-11-27', 7),
('DKTPD001', '1800111', 'DPD1', '2010-03-22', 7),
('DKTPD002', '1800125', 'DPD1', '2010-04-22', 7),
('DKTPK001', '1800114', 'DPK1', '2013-04-10', 4),
('DKTPK002', '1800128', 'DPK1', '2010-06-23', 7);

-- --------------------------------------------------------

--
-- Table structure for table `kadept`
--

CREATE TABLE `kadept` (
  `id_kadept` varchar(6) NOT NULL,
  `id_dokter` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kadept`
--

INSERT INTO `kadept` (`id_kadept`, `id_dokter`) VALUES
('KD002', 'DKTDR001'),
('KD004', 'DKTPD001'),
('KD001', 'DKTPK001'),
('KD007', 'DKTPK001'),
('KD006', 'DKTPK002'),
('KD003', 'DKTPS001'),
('KD005', 'DKTPU001'),
('KD008', 'DKTPU001'),
('KD009', 'DKTPU002'),
('KD010', 'DKTPU002');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(6) NOT NULL,
  `satuan` varchar(6) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `satuan`, `keterangan`, `harga`) VALUES
('MEDK01', 'strip', 'Obat kapsul merk A', 550),
('MEDK02', 'strip', 'Obat kapsul merk B', 600),
('MEDS01', 'pcs', 'Obat sirup merk A', 16000),
('MEDS04', 'botol', 'Obat Sirup Merk XY', 19000),
('MEDT01', 'strip', 'Obat tablet merk A', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` varchar(6) NOT NULL,
  `id_person` varchar(16) NOT NULL,
  `tgl_registrasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `id_person`, `tgl_registrasi`) VALUES
('Y10001', '1100001', '2016-01-04'),
('Y10002', '1100003', '2013-11-04'),
('Y10003', '1100004', '2014-04-04'),
('Y10004', '1100002', '2015-03-04'),
('Y10006', '1100005', '2010-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `perawatan`
--

CREATE TABLE `perawatan` (
  `id_perawatan` varchar(8) NOT NULL,
  `id_pasien` varchar(6) NOT NULL,
  `id_dokter` varchar(12) NOT NULL,
  `id_resep` varchar(7) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `biaya` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perawatan`
--

INSERT INTO `perawatan` (`id_perawatan`, `id_pasien`, `id_dokter`, `id_resep`, `keterangan`, `tgl`, `biaya`) VALUES
('NURSI001', 'Y10001', 'DKTPD002', 'NOTE001', 'Demam', '2010-03-22', 50000),
('NURSI002', 'Y10002', 'DKTDR002', 'NOTE002', 'Flu', '2009-10-01', 50000),
('NURSI003', 'Y10003', 'DKTDR001', 'NOTE003', 'Batuk pilek', '2012-08-09', 50000),
('NURSI004', 'Y10004', 'DKTPD001', 'NOTE004', 'Gejala tipes', '2013-04-10', 80000),
('NURSI005', 'Y10006', 'DKTPK002', 'NOTE005', 'Meriang', '2016-12-28', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` varchar(7) NOT NULL,
  `id_obat` varchar(6) NOT NULL,
  `id_perawatan` varchar(8) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `id_obat`, `id_perawatan`, `tgl`) VALUES
('NOTE001', 'MEDS01', 'NURSI001', '2010-03-22'),
('NOTE002', 'MEDS04', 'NURSI002', '2009-10-01'),
('NOTE003', 'MEDT01', 'NURSI003', '2012-08-09'),
('NOTE004', 'MEDK01', 'NURSI004', '2013-04-10'),
('NOTE005', 'MEDK02', 'NURSI005', '2016-12-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id_appointment`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id_person`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id_dept`),
  ADD KEY `id_kadept` (`id_kadept`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_person` (`id_person`),
  ADD KEY `id_dept` (`id_dept`);

--
-- Indexes for table `kadept`
--
ALTER TABLE `kadept`
  ADD PRIMARY KEY (`id_kadept`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `id_person` (`id_person`);

--
-- Indexes for table `perawatan`
--
ALTER TABLE `perawatan`
  ADD PRIMARY KEY (`id_perawatan`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_resep` (`id_resep`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_perawatan` (`id_perawatan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `data_diri` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dokter_ibfk_2` FOREIGN KEY (`id_dept`) REFERENCES `dept` (`id_dept`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `data_diri` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perawatan`
--
ALTER TABLE `perawatan`
  ADD CONSTRAINT `perawatan_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `perawatan_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
