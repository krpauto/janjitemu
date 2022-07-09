-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 05:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jitu`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(11) NOT NULL,
  `no_berkas` int(11) NOT NULL,
  `nama_berkas` varchar(256) NOT NULL,
  `nama_pemohon` varchar(128) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `volume` decimal(10,2) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `tgl_terima` date DEFAULT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `no_berkas`, `nama_berkas`, `nama_pemohon`, `no_telp`, `volume`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `tgl_terima`, `alamat`) VALUES
(1, 1111, 'Permohonan pengukuran tanah', 'Kevin Rivaldo Penggabean', '081534343015', '5.00', 'Tiban Lama', 'Batam Center', 'Batam', 'Kepulauan Riau', '2022-08-03', 'Tiban Koperasi S 12'),
(1111, 101, 'Permohonan Pengukuran', 'Khairunnisa Ulmi', '08080909', '57.00', 'Tiban Baru', 'Sekupang', 'Batam', 'Kepulauan Riau', '2022-07-08', 'Tiban Bukit Permai F 11'),
(2227, 15152, '', 'Obed', '20215515051', '6.00', 'Kibing', 'Bt Aji', 'Batam', 'Kepulauan Riau', '2022-06-29', 'Batu Aji'),
(2228, 1111, '', 'Kevin Rivaldo Penggabean', '081534343015', '7.00', 'Tiban Lama', 'Batam Center', 'Batam', 'Kepulauan Riau', '2022-07-02', 'Tiban Koperasi S 12');

-- --------------------------------------------------------

--
-- Table structure for table `pemohon`
--

CREATE TABLE `pemohon` (
  `id_berkas` int(11) NOT NULL,
  `tgl_terima` date NOT NULL,
  `nomor_berkas` varchar(50) NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `volume` decimal(10,2) NOT NULL,
  `alamat_pemohon` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `no_wa` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemohon`
--

INSERT INTO `pemohon` (`id_berkas`, `tgl_terima`, `nomor_berkas`, `nama_pemohon`, `volume`, `alamat_pemohon`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `no_wa`) VALUES
(1, '0000-00-00', '1111', 'Firas Husa', '57.00', 'Tiban', 'Tiban Baru', 'Sekupang', 'Batam', 'Kepulauan Riau', '0808080808');

-- --------------------------------------------------------

--
-- Table structure for table `pengukuran`
--

CREATE TABLE `pengukuran` (
  `id_pengukuran` int(11) NOT NULL,
  `tgl_pengerjaan` date NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `nip_petugas` varchar(50) NOT NULL,
  `no_berkas` varchar(10) NOT NULL,
  `volume_awal` decimal(10,0) NOT NULL,
  `volume_akhir` decimal(10,0) NOT NULL,
  `status` char(1) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengukuran`
--

INSERT INTO `pengukuran` (`id_pengukuran`, `tgl_pengerjaan`, `no_surat`, `nip_petugas`, `no_berkas`, `volume_awal`, `volume_akhir`, `status`, `gambar`, `laporan`) VALUES
(2, '2022-06-29', '111123', '54343', '45353', '4', '15', '2', '', ''),
(3, '2022-06-29', '111123', '54343', '15152', '4', '16', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_ukur`
--

CREATE TABLE `petugas_ukur` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(128) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `id_berkas` int(11) NOT NULL,
  `nip_petugas` int(50) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas_ukur`
--

INSERT INTO `petugas_ukur` (`id_petugas`, `nama_petugas`, `no_telp`, `alamat`, `id_berkas`, `nip_petugas`, `jabatan`) VALUES
(3, 'Jufri', '08080808', 'Bengkong', 7777, 1961030219, 'Staf Pengukuran dan Pemetaan'),
(4, 'Firas Husamuddin', '0897867554', 'Tj.Piayu', 1111, 12433224, 'Staf Pengukuran dan Pemetaan'),
(5, 'Kevin', '081255773322', 'Tiban Koperasi', 2222, 565744, 'Staf Pengukuran dan Pemetaan'),
(6, 'Salma', '0822313234', 'Tj.Piayu', 5555, 4532256, 'Staf Pengukuran dan Pemetaan');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Selesai'),
(2, 'Belum Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `surat_tugas`
--

CREATE TABLE `surat_tugas` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tgl_surat` date NOT NULL,
  `no_berkas` varchar(20) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `tugas` text NOT NULL,
  `beban_biaya` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_tugas`
--

INSERT INTO `surat_tugas` (`id_surat`, `no_surat`, `tgl_surat`, `no_berkas`, `nip`, `tugas`, `beban_biaya`, `status`) VALUES
(1, '123456789', '2022-07-01', '1111', '19546872', 'Survei pengukuran tanah', 'DI 305 NO. 3004/2010', 1),
(2, '864778', '2022-07-02', '2222', '19546872', 'Survey Pengukuran Tanah', 'DI 305 NO. 3004/2010', 2),
(7, '11123123', '2022-07-02', '2227', '4532256', 'Ukur', 'Tes', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role_id`, `is_active`, `name`) VALUES
(3, 'nisa2', '123', 3, 1, 'nisa'),
(6, 'admin', '$2y$10$FqcLxr/ilMhEeunBsh7gWeFA2pHmV50kNwfC34ezRxhW3JT7bbW7W', 1, 1, 'Admin'),
(8, 'petugas', '$2y$10$Es3EQ.cUPh4TrXPDJotBK.vYsWC0JLxTWx1te70SqZorPwr2.kjFa', 3, 1, 'Petugas'),
(9, 'administrator', '$2y$10$KWcaSiWaIlVqqJ5mU8ZO8OpqVM0vp89BdvFs2iu5gjX.2/1q6L6GK', 2, 1, 'Administrator'),
(10, 'nisa', '$2y$10$mKettZ/mjGSUpy7CjWXNw.GOZhTi5EpKe0eXT1XZUO92a3WEFeGQm', 2, 1, 'Nisa'),
(11, 'firas', '$2y$10$uIzuYKOp3i.vmdoh2V6u0.AuIvMnm0QTixD11lffJP.5wIlTZAThi', 3, 1, 'Firas Husamuddin');

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
(1, 'Admin'),
(2, 'Administrator'),
(3, 'Petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `pemohon`
--
ALTER TABLE `pemohon`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `pengukuran`
--
ALTER TABLE `pengukuran`
  ADD PRIMARY KEY (`id_pengukuran`);

--
-- Indexes for table `petugas_ukur`
--
ALTER TABLE `petugas_ukur`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2230;

--
-- AUTO_INCREMENT for table `pengukuran`
--
ALTER TABLE `pengukuran`
  MODIFY `id_pengukuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `petugas_ukur`
--
ALTER TABLE `petugas_ukur`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
