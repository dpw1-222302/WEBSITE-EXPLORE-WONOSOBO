-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 09:58 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

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
-- Table structure for table `tabel_makanan_khas`
--

CREATE TABLE `tabel_makanan_khas` (
  `makanan_khas_id` int(11) NOT NULL,
  `nama_makanan_khas` varchar(255) NOT NULL,
  `deskripsi_makanan_khas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_makanan_khas`
--

INSERT INTO `tabel_makanan_khas` (`makanan_khas_id`, `nama_makanan_khas`, `deskripsi_makanan_khas`) VALUES
(1, 'gudeg', 'deskripsi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_makanan_khas`
--
ALTER TABLE `tabel_makanan_khas`
  ADD PRIMARY KEY (`makanan_khas_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_makanan_khas`
--
ALTER TABLE `tabel_makanan_khas`
  MODIFY `makanan_khas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
