-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2022 pada 14.28
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_hp` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `alamat`, `no_hp`, `username`, `password`) VALUES
(1, 'putri regina', 'putri123@gmial.com', 'jember jawa timur', '089238943', 'putri', 'putri123'),
(2, 'YOGA SAPUTRA ', 'yogac49@gmail.com', 'Probolinggo', '0928293232', '', 'yoga123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `client_antrian`
--

CREATE TABLE `client_antrian` (
  `id` int(11) NOT NULL,
  `client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `client_antrian`
--

INSERT INTO `client_antrian` (`id`, `client`) VALUES
(133, 1),
(134, 2),
(135, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_antrian`
--

CREATE TABLE `data_antrian` (
  `id` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `waktu` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `NIK` varchar(70) NOT NULL,
  `BPJS` varchar(200) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(200) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `NIK`, `BPJS`, `nama`, `tanggal_lahir`, `no_hp`, `email`, `username`, `password`) VALUES
(11, '122232223', '326982832', 'zendila baswara', 'kediri,21-01-2001', '8089787', 'zendi@gmail.com', 'zendila', 'zendi123'),
(12, '', '', '', '', '', '', '', ''),
(13, '9090090909', '-', 'putri regina', 'jember 21-09-2009', '0928293232', 'putreg@gmil.com', 'putreg', 'putreg123'),
(14, '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `client_antrian`
--
ALTER TABLE `client_antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_antrian`
--
ALTER TABLE `data_antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `client_antrian`
--
ALTER TABLE `client_antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT untuk tabel `data_antrian`
--
ALTER TABLE `data_antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
