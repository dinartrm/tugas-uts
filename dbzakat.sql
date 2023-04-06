-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2023 pada 07.25
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbzakat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_beras`
--

CREATE TABLE `harga_beras` (
  `id` int(3) NOT NULL,
  `harga_beras` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `harga_beras`
--

INSERT INTO `harga_beras` (`id`, `harga_beras`) VALUES
(1, 12000),
(2, 15000),
(3, 20000),
(4, 25000),
(5, 30000),
(6, 35000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_zakat`
--

CREATE TABLE `pembayaran_zakat` (
  `id` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggungan` int(2) NOT NULL,
  `harga_beras` int(50) NOT NULL,
  `total_bayar` int(50) NOT NULL,
  `nama_amil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `harga_beras`
--
ALTER TABLE `harga_beras`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran_zakat`
--
ALTER TABLE `pembayaran_zakat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `harga_beras`
--
ALTER TABLE `harga_beras`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_zakat`
--
ALTER TABLE `pembayaran_zakat`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
