-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Sep 2021 pada 03.47
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekci_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `umur` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pemrakarsa` varchar(100) NOT NULL,
  `penanggung_jawab` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama`, `email`, `umur`, `judul`, `pemrakarsa`, `penanggung_jawab`) VALUES
(1, 'agung', 'agungdwika99@gmail.com', '22', 'apa aja deh', 'banda aceh ', 'banda aceh'),
(3, 'rifki', 'agungdwika99@gmail.com', '22', 'sdsdsdsds', 'wdwdwdwdwd', 'ddggefd'),
(4, 'Agung Dwika Rudiyanto', 'agungdwika99@gmail.com', '22', 'sdsdsdsds', 'wdwdwdwdwd', 'ddggefd'),
(6, 'didik', 'adan@gmail.com', '22', 'sdsdsdsds', 'sasasasas', 'ddggefd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_instansi`
--

CREATE TABLE `tb_instansi` (
  `instansi_id` int(11) NOT NULL,
  `instansi_nama` varchar(100) NOT NULL,
  `instansi_jenis_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_instansi`
--

INSERT INTO `tb_instansi` (`instansi_id`, `instansi_nama`, `instansi_jenis_id`) VALUES
(2, 'kabupaten aceh tengah 4', 1),
(12, 'kabupaten aceh tengah', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_instansi`
--

CREATE TABLE `tb_jenis_instansi` (
  `jenis_id` int(11) NOT NULL,
  `jenis_nama` varchar(50) NOT NULL,
  `jenis_desk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jenis_instansi`
--

INSERT INTO `tb_jenis_instansi` (`jenis_id`, `jenis_nama`, `jenis_desk`) VALUES
(1, 'jakarta', '2'),
(2, 'jakarta barat', '3'),
(3, 'jakarta barat', '3'),
(5, 'jaksel', '1'),
(7, 'bogor', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_instansi`
--
ALTER TABLE `tb_instansi`
  ADD PRIMARY KEY (`instansi_id`);

--
-- Indeks untuk tabel `tb_jenis_instansi`
--
ALTER TABLE `tb_jenis_instansi`
  ADD PRIMARY KEY (`jenis_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_instansi`
--
ALTER TABLE `tb_instansi`
  MODIFY `instansi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_instansi`
--
ALTER TABLE `tb_jenis_instansi`
  MODIFY `jenis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
