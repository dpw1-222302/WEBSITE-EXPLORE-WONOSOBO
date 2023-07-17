-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 11:10 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `tabel_gunung`
--

CREATE TABLE `tabel_gunung` (
  `gunung_id` int(11) NOT NULL,
  `nama_gunung` varchar(255) NOT NULL,
  `deskripsi_gunung` text NOT NULL,
  `kecamatan_gunung` int(11) NOT NULL,
  `ketinggian_gunung` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_gunung`
--

INSERT INTO `tabel_gunung` (`gunung_id`, `nama_gunung`, `deskripsi_gunung`, `kecamatan_gunung`, `ketinggian_gunung`) VALUES
(1, 'Gunung Slamet', 'Gunung Slamet yang tinggi', 1, 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_gunung`
--
ALTER TABLE `tabel_gunung`
  ADD PRIMARY KEY (`gunung_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_gunung`
--
ALTER TABLE `tabel_gunung`
  MODIFY `gunung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
