-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 05:20 AM
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
-- Database: `silajur`
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
  `id_jabatan` int(2) NOT NULL,
  `profil` varchar(225) NOT NULL DEFAULT 'default.PNG'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`nip`, `nama`, `email`, `password`, `id_jabatan`, `profil`) VALUES
('malasngoding', 'admin', 'admin@admin.com', '10406c1d7b7421b1a56f0d951e952a95', 1, 'default.PNG'),
('NP001', 'Direksi Shandy', 'direksi.shandy@gmail.com', '18a5726d8227b237064ecef7d1f4e634', 1, 'default.PNG'),
('NP002', 'Shandy Umum', 'umum.shandy@gmail.com', 'adfab9c56b8b16d6c067f8d3cff8818e', 2, 'default.PNG'),
('NP003', 'Shandy Keuangan', 'keuangan.shandy@gmail.com', 'a4151d4b2856ec63368a7c784b1f0a6e', 3, 'default.PNG'),
('NP004', 'Shandy IT', 'it.shandy@gmail.com', '0d149b90e7394297301c90191ae775f0', 4, 'default.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(3) NOT NULL,
  `nama_jabatan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Direksi'),
(2, 'Divisi Umum'),
(3, 'Divisi Keuangan'),
(4, 'Divisi IT');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `no_jurnal` varchar(30) NOT NULL,
  `no_proposal` varchar(30) NOT NULL,
  `judul_jurnal` tinytext NOT NULL,
  `tgl_up_jurnal` date NOT NULL,
  `file_jurnal` tinytext NOT NULL,
  `status_direksi` enum('0','1','2') NOT NULL,
  `tgl_direksi_jurnal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `catatan_jurnal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `no_proposal` varchar(30) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `judul_proposal` tinytext NOT NULL,
  `tgl_kegiatan` date NOT NULL,
  `file_proposal` tinytext NOT NULL,
  `tgl_up_proposal` datetime NOT NULL,
  `status_direksi` enum('0','1','2') NOT NULL,
  `tgl_direksi` datetime NOT NULL,
  `catatan_direksi` text NOT NULL,
  `status_keuangan` enum('0','1','2') NOT NULL,
  `tgl_keuangan` datetime NOT NULL,
  `catatan_keuangan` text NOT NULL,
  `pertanggung_jawaban` tinytext NOT NULL
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
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`no_jurnal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
