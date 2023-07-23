-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2023 pada 10.47
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tubes_dpw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_air_terjun`
--

CREATE TABLE `tabel_air_terjun` (
  `air_terjun_id` int(11) NOT NULL,
  `img_air_terjun` text NOT NULL,
  `nama_air_terjun` varchar(255) NOT NULL,
  `deskripsi_air_terjun` text NOT NULL,
  `link_google_maps_air_terjun` varchar(500) NOT NULL,
  `ketinggian_air_terjun` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_danau`
--

CREATE TABLE `tabel_danau` (
  `danau_id` int(11) NOT NULL,
  `img_danau` text NOT NULL,
  `nama_danau` varchar(255) NOT NULL,
  `deskripsi_danau` text NOT NULL,
  `link_google_maps_danau` varchar(500) NOT NULL,
  `luas_danau` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_destinasi`
--

CREATE TABLE `tabel_destinasi` (
  `destinasi_id` int(11) NOT NULL,
  `nama_destinasi` varchar(255) NOT NULL,
  `img_destinasi` text NOT NULL,
  `deskripsi_destinasi` text NOT NULL,
  `link_google_maps_destinasi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_gunung`
--

CREATE TABLE `tabel_gunung` (
  `gunung_id` int(11) NOT NULL,
  `img_gunung` text NOT NULL,
  `nama_gunung` varchar(255) NOT NULL,
  `deskripsi_gunung` text NOT NULL,
  `ketinggian_gunung` int(10) NOT NULL,
  `link_google_maps_gunung` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kalender_event`
--

CREATE TABLE `tabel_kalender_event` (
  `kalender_event_id` int(11) NOT NULL,
  `img_kalender_event` text NOT NULL,
  `nama_event` varchar(255) NOT NULL,
  `deskripsi_event` text NOT NULL,
  `tempat_event` varchar(255) NOT NULL,
  `tanggal_event` date NOT NULL,
  `link_google_maps_event` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_makanan_khas`
--

CREATE TABLE `tabel_makanan_khas` (
  `makanan_khas_id` int(11) NOT NULL,
  `img_makanan_khas` text NOT NULL,
  `nama_makanan_khas` varchar(255) NOT NULL,
  `deskripsi_makanan_khas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_oleh_oleh`
--

CREATE TABLE `tabel_oleh_oleh` (
  `oleh_oleh_id` int(11) NOT NULL,
  `nama_oleh_oleh` varchar(255) NOT NULL,
  `img_oleh_oleh` text NOT NULL,
  `deskripsi_oleh_oleh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `user_id` int(11) NOT NULL,
  `nama_lengkap_user` varchar(255) NOT NULL,
  `no_hp_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`user_id`, `nama_lengkap_user`, `no_hp_user`, `email_user`, `password_user`) VALUES
(3, 'Ramdani', '085121104034', 'ramdani@gmail.com', 'password'),
(5, 'Fajar', '085121104012', 'fajar@gmail.com', 'password'),
(6, 'Diva', '085121104015', 'diva@gmail.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_air_terjun`
--
ALTER TABLE `tabel_air_terjun`
  ADD PRIMARY KEY (`air_terjun_id`);

--
-- Indeks untuk tabel `tabel_danau`
--
ALTER TABLE `tabel_danau`
  ADD PRIMARY KEY (`danau_id`);

--
-- Indeks untuk tabel `tabel_destinasi`
--
ALTER TABLE `tabel_destinasi`
  ADD PRIMARY KEY (`destinasi_id`);

--
-- Indeks untuk tabel `tabel_gunung`
--
ALTER TABLE `tabel_gunung`
  ADD PRIMARY KEY (`gunung_id`);

--
-- Indeks untuk tabel `tabel_kalender_event`
--
ALTER TABLE `tabel_kalender_event`
  ADD PRIMARY KEY (`kalender_event_id`);

--
-- Indeks untuk tabel `tabel_makanan_khas`
--
ALTER TABLE `tabel_makanan_khas`
  ADD PRIMARY KEY (`makanan_khas_id`);

--
-- Indeks untuk tabel `tabel_oleh_oleh`
--
ALTER TABLE `tabel_oleh_oleh`
  ADD PRIMARY KEY (`oleh_oleh_id`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_user` (`email_user`),
  ADD UNIQUE KEY `no_hp_user` (`no_hp_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_air_terjun`
--
ALTER TABLE `tabel_air_terjun`
  MODIFY `air_terjun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_danau`
--
ALTER TABLE `tabel_danau`
  MODIFY `danau_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tabel_destinasi`
--
ALTER TABLE `tabel_destinasi`
  MODIFY `destinasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tabel_gunung`
--
ALTER TABLE `tabel_gunung`
  MODIFY `gunung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tabel_kalender_event`
--
ALTER TABLE `tabel_kalender_event`
  MODIFY `kalender_event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tabel_makanan_khas`
--
ALTER TABLE `tabel_makanan_khas`
  MODIFY `makanan_khas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tabel_oleh_oleh`
--
ALTER TABLE `tabel_oleh_oleh`
  MODIFY `oleh_oleh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
