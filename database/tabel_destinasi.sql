-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 02:02 PM
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
-- Table structure for table `tabel_destinasi`
--

CREATE TABLE `tabel_destinasi` (
  `destinasi_id` int(11) NOT NULL,
  `nama_destinasi` varchar(255) NOT NULL,
  `img_destinasi` text NOT NULL,
  `deskripsi_destinasi` text NOT NULL,
  `link_google_maps_destinasi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_destinasi`
--

INSERT INTO `tabel_destinasi` (`destinasi_id`, `nama_destinasi`, `img_destinasi`, `deskripsi_destinasi`, `link_google_maps_destinasi`) VALUES
(4, 'iiiiii', 'https://kominfo.jatimprov.go.id/uploads/images/4da80f4a-fe5e-4585-977d-5c3cae9e0ce2_169.jpg', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will ', 'https://www.google.com/maps/search/gunung+prau/@-7.2006297,109.8982013,13z/data=!3m1!4b1?entry=ttu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_destinasi`
--
ALTER TABLE `tabel_destinasi`
  ADD PRIMARY KEY (`destinasi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_destinasi`
--
ALTER TABLE `tabel_destinasi`
  MODIFY `destinasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
