-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2024 at 12:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE `tbl_data` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`id`, `nama`, `alamat`, `latitude`, `longitude`) VALUES
(3, 'Bank Sampah Walisongo', 'Jalan Raya, Tambakaji, Ngaliyan, Semarang City, Central Java 50185', '-6.985001142679329', '110.35394614131613'),
(4, 'Bank Sampah Resik Becik', 'Jl. Cokrokembang No.11, Krobokan, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50141', '-6.972392312128', '110.39926474305476'),
(5, 'Bank Sampah Kemijen', 'Kelurahan Kemijen Rt 04 Rw 03, Kemijen, Kec. Semarang Tim., Kota Semarang, Jawa Tengah 50228', '-6.949218441747939', '110.43291037161829'),
(6, 'Bank Sampah Guyub Rukun', 'Jl. Kp. Blusuk, Kemijen, Kec. Semarang Tim., Kota Semarang, Jawa Tengah 50228', '-6.953308031409137', '110.44012014916761'),
(7, 'Bank Sampah Makmur', 'Jl. Taman Sendangsari III, Kalicari, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50198', '-6.998040664433683', '110.45392879504618'),
(8, 'TPS Barusari', 'Jl. Barusari Baru, Barusari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50245', '-6.984788159374745', '110.40439094992801'),
(9, 'TPS Terpadu UNNES', 'Gg. Ki Ageng Gribik, Sekaran, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50299', '-7.0369237854041025', '110.38756813564625'),
(10, 'TPS Terpadu Diponegoro', 'Tembalang, Kec. Tembalang, Kota Semarang, Jawa Tengah 50275', '-7.041012607035363', '110.43426002834667'),
(11, 'TPS Kaspiah', 'Jl. Kasipah, Jatingaleh, Kec. Candisari, Kota Semarang, Jawa Tengah 50254', '-7.01579763363035', '110.42636360531644'),
(12, 'TPA Jatibarang', 'Kedungpane, Kec. Mijen, Kota Semarang, Jawa Tengah 50211', '-7.014519811174865', '110.35408257849818');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
