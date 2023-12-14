-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 09:58 AM
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
('agoykecil@gmail.com', 'Yoga Purwanto', 'Bandung, 3 Juni 2003', 'Kota Bekasi', 87672341, 'Mahasiswa', 'Gundar', 'Keamanan', 'wqeqeq'),
('agoyyyy@gmail.com', 'Yoga Rizky Adi P', 'Jakarta, 2 November ', 'Kota Bekasi', 85625132, 'Network Engineer', 'PT. Yamaha', 'Web Development', 'QEWQQEQ'),
('billyjoe@gmail.com', 'Billy Joe', 'Bogor, 2 Maret 1998', 'Kota Banjar', 912373134, 'Freelancer', ' ', 'Media Creative', 'contoh contohh'),
('bintang23@gmail.com', 'Bintang Rachditya', 'Bekasi, 5 Desember 2', 'Kota Bekasi', 8971632, 'Mahasiswa', 'Undip', 'Hubungan Masyarakat', 'anuuu'),
('daffasoleh@gmail.com', 'Daffa Maajid', 'Bali, 3 Mei 2003', 'Kaabupaten Bekasi', 13124141, 'Mahasiswa', 'Gunadarma', 'Social Media Specialist', 'cobaajalahh'),
('epenpalelu@gmail.com', 'Muhammad Faaiz', 'Jakarta, 3 Mei 2003', 'Kota Bekasi', 87816231, 'Mahasiswa', 'Unsri', 'Hubungan Masyarakat', 'naninu'),
('juniosoleh@gmail.com', 'Junio Siahaan', 'Bali, 3 April 2003', 'Kota bekasi', 93217391, 'Mahasiswa', 'Gunadarma', 'Medi', ''),
('kamuhamadirfan39@gmail.com', 'Muhamad Irfan', 'Tegal, 1 Juni 2003', 'Kota Bekasi', 628513099, 'CTO', 'Google Corp', 'Web Development', 'contoh aja inimah ya'),
('nabilaanjani@gmail.com', 'Nabila Anjani', 'UI, 25 Desember 2005', 'Kota Surabaya', 628314131, 'Mahasiswa', 'Brawijaya', 'Hubungan Masyarakat', 'sama aja inima contoh doang'),
('ncekkokk@gmail.com', 'Indra Fasya', 'Bekasi, 3 April 2003', 'Kota Bekasi', 8912313, 'Barista', 'Starbuck Coffee', 'Media Creative', 'cikiberlah'),
('pebolok@gmail.com', 'Muhammad Rizky', 'Bekasi, 3 Maret 2002', 'Kota Bekasi', 81231321, 'Pegawai', 'PT. Baud', 'Ambasador', 'asdadsa');

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
