-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 07:52 PM
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

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id_proposal`, `setujui_tgl`, `setujui_pukul`, `dok_proposal`, `nip_jurnal`, `dok_jurnal`, `record_tgl_jurnal`, `record_pukul_jurnal`, `status_jurnal`, `catatan_jurnal`) VALUES
('2021021614513994', '2021-02-28', '19:23:28', '1614513994-20210228-Meeting_Client_Gudang_Garam.docx', 'NP003', '1614518240-20210228-Jurnal-Meeting_Client_Gudang_Garam.docx', '2021-02-28', '19:23:28', '1', ''),
('2021021614514045', '2021-02-28', '19:23:38', '1614514045-20210228-Kunjungan_ke_PT_Jos_Gandos.docx', 'NP003', '1614518256-20210228-Jurnal-Kunjungan_ke_PT_Jos_Gandos.docx', '2021-02-28', '19:23:38', '0', 'apa nehh'),
('2021021614514106', '2021-02-28', '19:23:47', '1614514106-20210228-Party.docx', 'NP003', '1614518285-20210228-Jurnal-Party.docx', '2021-02-28', '19:23:47', '1', ''),
('2021021614514133', '2021-02-28', '19:25:14', '1614514133-20210228-Meeting.docx', '', NULL, '2021-02-28', '19:25:14', 'N/A', ''),
('202102281614530844', '2021-02-28', '23:50:11', '1614530844-20210228-Rapat_Tahunan.docx', 'NP003', '1614531060-20210228-Jurnal-Rapat_Tahunan.docx', '2021-02-28', '23:50:11', 'N/A', '');

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
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `nip`, `agenda`, `tgl_agenda`, `berita_acara`, `dok_proposal`, `record_tgl`, `record_pukul`, `status`, `catatan`, `tanggungan`) VALUES
('2021021614513994', 'NP002', 'Meeting Client Gudang Garam', '2021-02-21', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1614513994-20210228-Meeting_Client_Gudang_Garam.docx', '2021-02-28', '19:06:34', '1', '', 'Done'),
('2021021614514018', 'NP002', 'Meeting Client Vapor Pro Surabaya', '2021-02-22', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1614514018-20210228-Meeting_Client_Vapor_Pro_Surabaya.docx', '2021-02-28', '19:06:58', '0', 'jelek ah', NULL),
('2021021614514045', 'NP002', 'Kunjungan ke PT Jos Gandos', '2021-02-23', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1614514045-20210228-Kunjungan_ke_PT_Jos_Gandos.docx', '2021-02-28', '19:07:25', '1', '', 'Done'),
('2021021614514075', 'NP002', 'Sambutan Presiden Republik Indonesia', '2021-02-24', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1614514075-20210228-Sambutan_Presiden_Republik_Indonesia.docx', '2021-02-28', '19:07:55', '0', 'paan sih', 'Done'),
('2021021614514106', 'NP002', 'Party', '2021-03-01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1614514106-20210228-Party.docx', '2021-02-28', '19:08:26', '1', '', 'Done'),
('2021021614514133', 'NP002', 'Meeting', '2021-03-03', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1614514133-20210228-Meeting.docx', '2021-02-28', '19:08:53', '1', '', '1614535289-20210228-Tanggungan-2021021614514133.docx'),
('2021021614514158', 'NP002', 'Makan Makan', '2021-03-06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1614514158-20210228-Makan_Makan.docx', '2021-02-28', '19:09:18', 'N/A', '', NULL),
('202102281614530844', 'NP002', 'Rapat Tahunan', '2021-02-23', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1614530844-20210228-Rapat_Tahunan.docx', '2021-02-28', '23:47:24', '1', '', 'Done'),
('202102281614530876', 'NP002', 'Rapat Marketing', '2021-03-06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1614530876-20210228-Rapat_Marketing.docx', '2021-02-28', '23:47:56', 'N/A', '', NULL),
('202102281614530912', 'NP002', 'Kunjungan Menteri', '2021-02-06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1614530912-20210228-Kunjungan_Menteri.docx', '2021-02-28', '23:48:32', 'N/A', '', NULL),
('202102281614530955', 'NP002', 'Gajian', '2021-03-01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1614530955-20210228-Gajian.docx', '2021-02-28', '23:49:15', 'N/A', '', NULL);

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
