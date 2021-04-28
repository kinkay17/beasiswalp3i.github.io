-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 12:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `hp` varchar(50) NOT NULL,
  `wa` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `id_sekolah` varchar(50) NOT NULL,
  `prodi` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tahapan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `nisn`, `tmp_lahir`, `tgl_lahir`, `hp`, `wa`, `jk`, `jurusan`, `id_sekolah`, `prodi`, `alamat`, `tahapan`) VALUES
(5, 'Mumus Musbihin', 'kinkay17@gmail.com', 'logo_youtube.jpg', '$2y$10$F/NmCGbqqWJKJ6O.eCGUB.LSAeVsgEsZeDHQAJNXuDTk0FSYqPDsK', 1, 1, 1607165282, 'lp3i', '', '2021-01-27', '', '', '', '', 'lp3i', '', '', ''),
(10, 'Viggy', 'mumussaputra@gmail.com', '167810030017_Viggy_Ariesta_Stiawan.jpg', '$2y$10$ssvAYtONYXzKfS4ewBYmnudVFtoQpsG8zSYSbocwJH2.rRF9/T39u', 2, 1, 1610007466, '0022125346', 'Tasikmalaya', '2021-01-07', '082214895203', '082214895203', 'Laki-laki', 'RPL', '3', 'Office Management', 'DSN.RAUBOSOK RT.008/RW.003 DS. MUARA BARU KEC. CILAMAYA WETAN KAB. KARAWANG JAWA BARAT', 'Tahap 2'),
(15, 'Ainun Lestari', 'lp3ikarawang2@gmail.com', 'default.jpg', '$2y$10$UL4vDWxYQdtRt7kIRNeziu8I5x7niHVwLIA4Oif/h.D/nXmHiC.1W', 2, 1, 1612239966, '0022125345', 'Karawang', '1994-12-03', '082214895203', '082214895203', 'Perempuan', 'IPA', '4', 'Office Management', 'Gempol wetan', 'Tahap 2');

-- --------------------------------------------------------

--
-- Table structure for table `master_periode`
--

CREATE TABLE `master_periode` (
  `id_periode` int(11) NOT NULL,
  `tahun_pmb` varchar(128) NOT NULL,
  `ket` varchar(128) NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  `tgl_pengumuman` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `target` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_periode`
--

INSERT INTO `master_periode` (`id_periode`, `tahun_pmb`, `ket`, `tgl_pelaksanaan`, `tgl_pengumuman`, `status`, `target`) VALUES
(5, '2020/2021', 'Tahap 2', '2021-01-01', '2021-01-02', 'off', '30');

-- --------------------------------------------------------

--
-- Table structure for table `master_sekolah`
--

CREATE TABLE `master_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `kategori_sekolah` varchar(128) NOT NULL,
  `nama_sekolah` varchar(128) NOT NULL,
  `blokir` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_sekolah`
--

INSERT INTO `master_sekolah` (`id_sekolah`, `kategori_sekolah`, `nama_sekolah`, `blokir`) VALUES
(1, 'SMA', 'SMAN 1 KARAWANG', '1'),
(2, 'MA', 'MAN 1 KARAWANG', '1'),
(3, 'SMK', 'SMKN 2 KARAWANG', '1'),
(4, 'SMK', 'SMKN 1 KARAWANG', '1');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `score` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `hari` date NOT NULL,
  `jam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nisn`, `score`, `keterangan`, `hari`, `jam`) VALUES
(315, '0022125346', '78', 'LULUS KATEGORI 1', '2021-02-02', '08:00');

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `idperiode` int(11) NOT NULL,
  `tahun_pmb` varchar(128) NOT NULL,
  `ket` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`idperiode`, `tahun_pmb`, `ket`) VALUES
(1, '2017/2018', 'Tahap 1'),
(2, '2020/2021', 'Tahap 2'),
(3, '2021/2022', 'Tahap 2');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(18, 1, 3),
(22, 1, 2),
(26, 1, 7),
(27, 1, 8),
(28, 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(7, 'Master'),
(11, 'Hasil');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user-graduate', 1),
(3, 2, 'Edit Profile', 'user/edit_user', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu/', 'fas fa-fw fa-folder\"', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-w fa-users-cog ', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fa-fw fas fa-key', 1),
(9, 7, 'Sekolah', 'master', 'fas fa-fw fa-university', 1),
(10, 7, 'Siswa', 'master/siswa', 'fas fa-fw fa-user-graduate', 1),
(11, 7, 'Hasil Tes', 'master/hasil', 'fas fa-fw fa-clipboard-list', 1),
(12, 11, 'Hasil Tes Beasiswa', 'user/hasiltes', 'fas fa-fw fa-user-graduate', 1),
(13, 7, 'Periode', 'master/periode', 'far fa-fw fa-calendar-check', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_periode`
--
ALTER TABLE `master_periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indexes for table `master_sekolah`
--
ALTER TABLE `master_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`idperiode`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `master_periode`
--
ALTER TABLE `master_periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `master_sekolah`
--
ALTER TABLE `master_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `idperiode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
