-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 03:31 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `nip` varchar(12) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` enum('Direksi','Divisi Umum','Divisi Keuangan','Divisi IT') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`nip`, `nama`, `email`, `password`, `jabatan`) VALUES
('malasngoding', 'admin', 'admin@admin.com', '10406c1d7b7421b1a56f0d951e952a95', 'Direksi'),
('NP001', 'Direksi Shandy', 'direksi.shandy@gmail.com', '18a5726d8227b237064ecef7d1f4e634', 'Direksi'),
('NP002', 'Shandy Umum', 'umum.shandy@gmail.com', 'adfab9c56b8b16d6c067f8d3cff8818e', 'Divisi Umum'),
('NP003', 'Shandy Keuangan', 'keuangan.shandy@gmail.com', 'a4151d4b2856ec63368a7c784b1f0a6e', 'Divisi Keuangan'),
('NP004', 'Shandy IT', 'it.shandy@gmail.com', '0d149b90e7394297301c90191ae775f0', 'Divisi IT');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id_proposal` varchar(30) NOT NULL,
  `setujui_tgl` date NOT NULL DEFAULT current_timestamp(),
  `setujui_pukul` time NOT NULL DEFAULT current_timestamp(),
  `dok_proposal` tinytext DEFAULT NULL,
  `nip_jurnal` varchar(10) NOT NULL,
  `dok_jurnal` tinytext DEFAULT NULL,
  `record_tgl_jurnal` date NOT NULL DEFAULT current_timestamp(),
  `record_pukul_jurnal` time NOT NULL DEFAULT current_timestamp(),
  `status_jurnal` enum('N/A','0','1') NOT NULL DEFAULT 'N/A',
  `catatan_jurnal` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id_proposal` varchar(30) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `agenda` tinytext NOT NULL,
  `tgl_agenda` date NOT NULL,
  `berita_acara` mediumtext NOT NULL,
  `dok_proposal` tinytext NOT NULL,
  `record_tgl` date NOT NULL DEFAULT current_timestamp(),
  `record_pukul` time NOT NULL DEFAULT current_timestamp(),
  `status` enum('N/A','0','1') NOT NULL DEFAULT 'N/A',
  `catatan` tinytext NOT NULL,
  `tanggungan` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD UNIQUE KEY `id_proposal` (`id_proposal`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
