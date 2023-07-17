-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2023 pada 10.11
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

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
-- Struktur dari tabel `tabel_kalender_event`
--

CREATE TABLE `tabel_kalender_event` (
  `kalender_event_id` int(11) NOT NULL,
  `nama_event` varchar(255) NOT NULL,
  `deskripsi_event` text NOT NULL,
  `kategori_event` int(11) NOT NULL,
  `tempat_event` varchar(255) NOT NULL,
  `kecamatan_event` int(11) NOT NULL,
  `tanggal_event` date NOT NULL,
  `link_google_maps_event` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_kalender_event`
--

INSERT INTO `tabel_kalender_event` (`kalender_event_id`, `nama_event`, `deskripsi_event`, `kategori_event`, `tempat_event`, `kecamatan_event`, `tanggal_event`, `link_google_maps_event`) VALUES
(1, 'Nama Event', 'Deskripsi Event', 1, 'Tempat Event', 1, '2023-07-17', 'https://goo.gl/maps/hncRiKGmE3f7sHXEA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_kalender_event`
--
ALTER TABLE `tabel_kalender_event`
  ADD PRIMARY KEY (`kalender_event_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_kalender_event`
--
ALTER TABLE `tabel_kalender_event`
  MODIFY `kalender_event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
