-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 08:31 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_paslon`
--

CREATE TABLE `data_paslon` (
  `id` int(11) NOT NULL,
  `nis_ketua` varchar(9) NOT NULL,
  `nm_calon_ketua` varchar(50) NOT NULL,
  `gambar1` varchar(100) NOT NULL,
  `no_urut` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_paslon`
--

INSERT INTO `data_paslon` (`id`, `nis_ketua`, `nm_calon_ketua`, `gambar1`, `no_urut`) VALUES
(39, '123', 'Mameng', 'Screenshot (131).png', 1),
(40, '321', 'Damarasu', 'Screenshot (129).png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akses`
--

CREATE TABLE `tbl_akses` (
  `nis` varchar(9) NOT NULL,
  `kode_akses` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_akses`
--

INSERT INTO `tbl_akses` (`nis`, `kode_akses`, `level`) VALUES
('F1A116001', 'F1A116001MANIS', 'admin'),
('F1A116002', 'F1A116002MANIS', 'user'),
('F1A116003', 'F1A116003MANIS', 'user'),
('F1A116004', 'F1A116004MANIS', 'user'),
('F1A116005', 'F1A116005MANIS', 'user'),
('F1A116006', 'F1A116006MANIS', 'user'),
('F1A116007', 'F1A116007MANIS', 'user'),
('F1A116008', 'F1A116008MANIS', 'user'),
('F1A116009', 'F1A116009MANIS', 'user'),
('F1A116010', 'F1A116010MANIS', 'user'),
('F1A116011', 'F1A116011MANIS', 'user'),
('F1A116012', 'F1A116012MANIS', 'user'),
('F1A116013', 'F1A116013MANIS', 'user'),
('F1A116014', 'F1A116014MANIS', 'user'),
('F1A116015', 'F1A116015MANIS', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dpt`
--

CREATE TABLE `tbl_dpt` (
  `nis` varchar(9) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `waktu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dpt`
--

INSERT INTO `tbl_dpt` (`nis`, `nama_siswa`, `status`, `waktu`) VALUES
('F1A116001', 'Riko andreas', 'Belum memilih', 'Belum memilih'),
('F1A116002', 'herlanto', 'Belum memilih', 'Belum memilih'),
('F1A116003', 'yuda pratama', 'Belum memilih', 'Belum memilih'),
('F1A116004', 'cico yeriko', 'Belum memilih', 'Belum memilih'),
('F1A116005', 'wamia', 'Belum memilih', 'Belum memilih'),
('F1A116006', 'erlangga', 'Belum memilih', 'Belum memilih'),
('F1A116007', 'diwana', 'Belum memilih', 'Belum memilih'),
('F1A116008', 'eriko', 'Belum memilih', 'Belum memilih'),
('F1A116009', 'alex febrian', 'Belum memilih', 'Belum memilih'),
('F1A116010', 'camtasia nilma', 'Belum memilih', 'Belum memilih'),
('F1A116011', 'putriyana', 'Belum memilih', 'Belum memilih'),
('F1A116012', 'samsudin', 'Belum memilih', 'Belum memilih'),
('F1A116013', 'karmila', 'Belum memilih', 'Belum memilih'),
('F1A116014', 'siti nur baya', 'Belum memilih', 'Belum memilih'),
('F1A116015', 'ipang bahri', 'Belum memilih', 'Belum memilih');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paslon`
--

CREATE TABLE `tbl_paslon` (
  `kode_akses` varchar(20) NOT NULL,
  `nomor_paslon` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_paslon`
--
ALTER TABLE `data_paslon`
  ADD PRIMARY KEY (`id`,`nis_ketua`);

--
-- Indexes for table `tbl_akses`
--
ALTER TABLE `tbl_akses`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbl_dpt`
--
ALTER TABLE `tbl_dpt`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbl_paslon`
--
ALTER TABLE `tbl_paslon`
  ADD PRIMARY KEY (`kode_akses`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_paslon`
--
ALTER TABLE `data_paslon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
