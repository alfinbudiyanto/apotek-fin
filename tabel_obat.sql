-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2024 pada 13.30
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek_fin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_obat`
--

CREATE TABLE `tabel_obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `harga_obat` int(11) NOT NULL,
  `stok_obat` int(11) NOT NULL,
  `expire_obat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_obat`
--

INSERT INTO `tabel_obat` (`id`, `nama_obat`, `harga_obat`, `stok_obat`, `expire_obat`) VALUES
(1, 'Paracetamol', 5000, 100, '2025-12-31'),
(2, 'Amoxicillin', 15000, 50, '2024-07-30'),
(3, 'Vitamin C', 10000, 200, '2026-05-15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_obat`
--
ALTER TABLE `tabel_obat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_obat`
--
ALTER TABLE `tabel_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
