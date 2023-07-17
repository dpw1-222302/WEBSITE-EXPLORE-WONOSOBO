-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 12:41 PM
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
-- Table structure for table `tabel_danau`
--

CREATE TABLE `tabel_danau` (
  `danau_id` int(11) NOT NULL,
  `nama_danau` varchar(255) NOT NULL,
  `deskripsi_danau` text NOT NULL,
  `kecamatan_danau` varchar(255) NOT NULL,
  `luas_danau` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_danau`
--

INSERT INTO `tabel_danau` (`danau_id`, `nama_danau`, `deskripsi_danau`, `kecamatan_danau`, `luas_danau`) VALUES
(2, 'danau toba', 'bjgukguhi', '2', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_danau`
--
ALTER TABLE `tabel_danau`
  ADD PRIMARY KEY (`danau_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_danau`
--
ALTER TABLE `tabel_danau`
  MODIFY `danau_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
