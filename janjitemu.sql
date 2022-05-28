-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2022 pada 15.59
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `janjitemu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `api_key` varchar(100) NOT NULL,
  `level` enum('1','2') NOT NULL DEFAULT '2' COMMENT '1 = ADMIN\r\n2 = CS',
  `chunk` int(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `api_key`, `level`, `chunk`) VALUES
(1, 'admin', 'd41d8cd98f00b204e9800998ecf8427e', 'b2d95af932eedb4de92b3496f338aa5f97b36ae0', '1', 0),
(4, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'f3065c079d20f930c569b61bd6250388', '2', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `all_contacts`
--

CREATE TABLE `all_contacts` (
  `id` int(11) NOT NULL,
  `sender` varchar(111) NOT NULL,
  `number` varchar(111) NOT NULL,
  `name` varchar(111) NOT NULL,
  `type` enum('Personal','Group') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `autoreply`
--

CREATE TABLE `autoreply` (
  `id` int(11) NOT NULL,
  `keyword` varchar(255) CHARACTER SET utf8 NOT NULL,
  `response` varchar(255) CHARACTER SET utf8 NOT NULL,
  `media` text DEFAULT NULL,
  `nomor` varchar(15) NOT NULL DEFAULT '0',
  `make_by` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `blast`
--

CREATE TABLE `blast` (
  `id` int(11) NOT NULL,
  `sender` varchar(15) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `pesan` longtext NOT NULL,
  `media` varchar(255) NOT NULL,
  `make_by` int(11) NOT NULL,
  `status` enum('pending','terkirim','gagal') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `broadcast`
--

CREATE TABLE `broadcast` (
  `id` int(11) NOT NULL,
  `pesan` longtext NOT NULL,
  `media` varchar(255) NOT NULL,
  `make_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `sender` varchar(111) NOT NULL,
  `number` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('Personal','Group','','') NOT NULL,
  `make_by` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `device`
--

CREATE TABLE `device` (
  `id` int(11) NOT NULL,
  `pemilik` varchar(111) NOT NULL,
  `nomor` varchar(14) NOT NULL,
  `link_webhook` varchar(100) NOT NULL,
  `chunk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `device`
--

INSERT INTO `device` (`id`, `pemilik`, `nomor`, `link_webhook`, `chunk`) VALUES
(6, '1', '6289667771377', '', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nomor`
--

CREATE TABLE `nomor` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `label` varchar(225) NOT NULL,
  `make_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `sender` varchar(15) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `pesan` text CHARACTER SET utf8 NOT NULL,
  `media` varchar(255) DEFAULT NULL,
  `status` enum('MENUNGGU JADWAL','GAGAL','TERKIRIM') NOT NULL DEFAULT 'MENUNGGU JADWAL',
  `jadwal` datetime NOT NULL,
  `make_by` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `receive_chat`
--

CREATE TABLE `receive_chat` (
  `id` int(11) NOT NULL,
  `id_pesan` varchar(200) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `from_me` enum('0','1') NOT NULL DEFAULT '0',
  `nomor_saya` varchar(255) DEFAULT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `base_node` varchar(255) NOT NULL,
  `install_in` int(11) NOT NULL COMMENT '1 = HOSTING 2 = LOCAL'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `base_node`, `install_in`) VALUES
(1, 'http://localhost:3000', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `storage`
--

CREATE TABLE `storage` (
  `id` int(11) NOT NULL,
  `namafile` varchar(255) NOT NULL,
  `nama_original` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `storage`
--

INSERT INTO `storage` (`id`, `namafile`, `nama_original`) VALUES
(2, 'e57893c38dd497aa831ef8f46bd547c0.jpg', '32d94162-cc90-4c70-9896-9d21022b94d6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `all_contacts`
--
ALTER TABLE `all_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `autoreply`
--
ALTER TABLE `autoreply`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `blast`
--
ALTER TABLE `blast`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `broadcast`
--
ALTER TABLE `broadcast`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nomor`
--
ALTER TABLE `nomor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `receive_chat`
--
ALTER TABLE `receive_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `all_contacts`
--
ALTER TABLE `all_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `autoreply`
--
ALTER TABLE `autoreply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `blast`
--
ALTER TABLE `blast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `broadcast`
--
ALTER TABLE `broadcast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `device`
--
ALTER TABLE `device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `nomor`
--
ALTER TABLE `nomor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `receive_chat`
--
ALTER TABLE `receive_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `storage`
--
ALTER TABLE `storage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
