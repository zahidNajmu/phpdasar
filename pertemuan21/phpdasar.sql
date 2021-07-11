-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2021 pada 02.57
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(3, 'Bimo Kartiko', '123456788', 'bimoaja@gmail.com', 'Teknik Industri', 'bimo.png'),
(4, 'Mirza Tsany', '123456785', 'mirza@gmail.com', 'Teknik Industri', 'mirza.png'),
(5, 'Fauzan Hidayat', '123456784', 'ojan@gmail.com', 'Teknik Industri', 'ojan.png'),
(6, 'Fauzan Alrafi', '123456780', 'fazafi@gmail.com', 'Teknik Informatika', 'fazafi.png'),
(7, 'Adyazzam Mumtaz Harits', '123456786', 'adyazzam@gmail.com', 'Teknik Kimia', 'adyazzam.png'),
(8, 'Nabil Dio', '123456783', 'bilbot@gmail.com', 'Arsitektur', 'bilbot.png'),
(9, 'Sabiq Fauzan', '123456798', 'bob@gmail.com', 'Arsitektur Landskap', 'bob.png'),
(10, 'Hilmi Adzkiya, S.Ar.', '123456768', 'hisol@gmail.com', 'Arsitektur', 'hisol.png'),
(15, 'Zahid Najmu Tsaqib', '123456789', 'zahidaja17@gmail.com', 'Pendidikan Dokter UNMUL', '60dfbd21564e2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$GCP/GJeDvPqEccbKy9NOCOP7VklG1vrFG6lgutXFQ93znyPWLBohO'),
(3, 'zahid najmu', '$2y$10$vJXYUQ7NRrPYc29kDvi1VutrU5PvN32pP6nr3BFZ.wzcfewmKY52C');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
