-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 09:01 AM
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
  `ttl` varchar(35) NOT NULL,
  `domisili` varchar(30) NOT NULL,
  `departemen` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reqruitment`
--

INSERT INTO `reqruitment` (`email`, `nama_lengkap`, `ttl`, `domisili`, `departemen`) VALUES
('gallagherfluffy@gmail.com', 'Fluffy Gallagher', 'Bandung, 18 Desember 1998', 'Amsterdam', 'Brand Ambassador'),
('kamuhamadirfan39@gmail.com', 'Muhamad Irfan', 'Tegal, 1 Juni 2003', 'Kota Bekasi', 'Web Development'),
('nabilaanjani@gmail.com', 'Nabila Anjani', 'Surabaya, 25 Desember 2004', 'Kota Surabaya', 'Media Kreatif'),
('yogarizki@gmail.com', 'Yoga Rizki Adi', 'Jakarta, 5 Agustus 2001', 'Kota Bekasi', 'Network Engineer');

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
