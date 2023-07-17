-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 12:04 PM
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
-- Table structure for table `tabel_air_terjun`
--

CREATE TABLE `tabel_air_terjun` (
  `air_terjun_id` int(11) NOT NULL,
  `nama_air_terjun` varchar(255) NOT NULL,
  `deskripsi_air_terjun` text NOT NULL,
  `kecamatan_air_terjun` varchar(255) NOT NULL,
  `ketinggian_air_terjun` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_air_terjun`
--

INSERT INTO `tabel_air_terjun` (`air_terjun_id`, `nama_air_terjun`, `deskripsi_air_terjun`, `kecamatan_air_terjun`, `ketinggian_air_terjun`) VALUES
(1, 'air terjun apa ya', 'air terjunnya tinggi', '2', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_air_terjun`
--
ALTER TABLE `tabel_air_terjun`
  ADD PRIMARY KEY (`air_terjun_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_air_terjun`
--
ALTER TABLE `tabel_air_terjun`
  MODIFY `air_terjun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
