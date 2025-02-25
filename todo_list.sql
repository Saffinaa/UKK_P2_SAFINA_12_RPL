-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Feb 2025 pada 01.16
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo_list`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `todo_list`
--

CREATE TABLE `todo_list` (
  `id` int(11) NOT NULL,
  `namatugas` varchar(255) NOT NULL,
  `prioritas` enum('rendah','sedang','tinggi','') NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('selesai','belum selesai','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `todo_list`
--

INSERT INTO `todo_list` (`id`, `namatugas`, `prioritas`, `tanggal`, `status`) VALUES
(1, 'apa aja', 'sedang', '2025-02-14', 'selesai'),
(2, 'tesst', 'tinggi', '2025-02-05', 'belum selesai'),
(3, 'kuyyy', 'sedang', '2025-02-06', 'belum selesai'),
(4, 'jangan begitu', 'sedang', '2025-02-13', 'belum selesai'),
(5, 'siap', 'tinggi', '2025-02-27', 'belum selesai'),
(6, 'apa aja', 'tinggi', '2025-02-19', 'selesai'),
(7, 'cobaaa', 'tinggi', '2025-02-22', 'selesai'),
(8, 'oiiii', 'tinggi', '2025-02-15', 'selesai'),
(9, 'tess', 'sedang', '2025-02-13', 'selesai'),
(10, 'test biasa aja ', 'sedang', '2025-02-01', 'selesai'),
(11, 'apa saja', 'rendah', '2025-02-20', 'selesai'),
(12, 'percobaan ', 'rendah', '2025-02-12', 'belum selesai'),
(13, 'tututu', 'sedang', '2025-02-24', 'belum selesai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `todo_list`
--
ALTER TABLE `todo_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `todo_list`
--
ALTER TABLE `todo_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
