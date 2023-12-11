-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 03:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oprec`
--

-- --------------------------------------------------------

--
-- Table structure for table `reqruitment`
--

CREATE TABLE `reqruitment` (
  `email` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `domisili` text NOT NULL,
  `no_wa` int(16) NOT NULL,
  `status` varchar(20) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `departemen` varchar(25) NOT NULL,
  `alasan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reqruitment`
--

INSERT INTO `reqruitment` (`email`, `nama_lengkap`, `ttl`, `domisili`, `no_wa`, `status`, `asal`, `departemen`, `alasan`) VALUES
('kamuhamadirfan39@gmail.com', 'Muhamad Irfan', 'Tegal, 1 Juni 2003', 'Kota Bekasi', 628513099, 'CTO', 'Google Corp', 'Web Development', 'contoh aja inimah ya'),
('nabilaanjani@gmail.com', 'Nabila Anjani', 'Kamboja, 25 Desember', 'Myanmar', 628314131, 'Mahasiswa', 'Brawijaya', 'Web Development', 'sama aja inima contoh doang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reqruitment`
--
ALTER TABLE `reqruitment`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
