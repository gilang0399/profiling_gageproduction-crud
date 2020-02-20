-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 06:31 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemesanan_gage`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'gilang0399', 'gilang123'),
(2, 'ginanjar99', 'ginanjar123');

-- --------------------------------------------------------

--
-- Table structure for table `desain`
--

CREATE TABLE `desain` (
  `id_desain` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_pesanan` varchar(15) NOT NULL,
  `tema` varchar(30) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `durasi` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desain`
--

INSERT INTO `desain` (`id_desain`, `username`, `nama`, `jenis_pesanan`, `tema`, `tanggal_masuk`, `nomor_hp`, `durasi`, `status`, `harga`) VALUES
(5, 'gilang0399', 'Gilang Aji Purnomo', 'Poster', 'Pahlawan', '2020-02-08', '083842135415', '2020-02-15', 'Selesai', '45000');

-- --------------------------------------------------------

--
-- Table structure for table `editing_video`
--

CREATE TABLE `editing_video` (
  `id_editing` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `bahan` varchar(15) NOT NULL,
  `pilihan_edit` varchar(10) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `durasi` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `editing_video`
--

INSERT INTO `editing_video` (`id_editing`, `username`, `nama`, `bahan`, `pilihan_edit`, `nomor_hp`, `tanggal_masuk`, `durasi`, `status`, `harga`) VALUES
(3, 'gilang0399', 'Gilang Aji Purnomo', 'Belum Ada', 'Istimewa', '091212333221', '2020-01-15', '15 hari', 'Selesai', '45000'),
(4, 'gilang0399', 'Gilang Aji Purnomo', 'Belum Ada', 'Istimewa', '091212333221', '2020-01-15', '15 hari', 'Belum Selesai', '0'),
(5, 'gilang0399', 'Gilang', 'Sudah', 'Standart', '091212333221', '2020-01-15', '15 hari', 'Belum Selesai', '0'),
(6, 'gilang0399', 'Gilang Aji Purnomo', 'Belum Ada', 'Istimewa', '083842135415', '2020-02-08', '2020-02-15', 'Belum Selesai', '0');

-- --------------------------------------------------------

--
-- Table structure for table `makalah`
--

CREATE TABLE `makalah` (
  `no` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `materi` varchar(30) NOT NULL,
  `jenis_kertas` varchar(5) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `durasi` varchar(30) NOT NULL,
  `status` varchar(15) DEFAULT NULL,
  `harga` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makalah`
--

INSERT INTO `makalah` (`no`, `username`, `nama`, `materi`, `jenis_kertas`, `tanggal_masuk`, `nomor_hp`, `durasi`, `status`, `harga`) VALUES
(6, 'gilang0399', 'Gilang Aji Purnomo', 'Sejarah Kebudayaan Islam', 'A4 = ', '2020-01-25', '098787878787', '5 Hari', 'Selesai', '25000'),
(8, 'gilang0399', 'Gilang Aji Purnomo', 'Sejarah Kebudayaan Islam', 'F4 = ', '2020-02-08', '083842135415', '2020-02-12', 'Selesai', '45000');

-- --------------------------------------------------------

--
-- Table structure for table `powerpoint`
--

CREATE TABLE `powerpoint` (
  `id_ppt` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `materi` varchar(30) NOT NULL,
  `editing` varchar(15) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `durasi` varchar(15) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `powerpoint`
--

INSERT INTO `powerpoint` (`id_ppt`, `username`, `nama`, `materi`, `editing`, `tanggal_masuk`, `durasi`, `nomor_hp`, `status`, `harga`) VALUES
(4, 'gilang0399', 'Gilang Aji Purnomo', 'Sejarah Kebudayaan Islam', 'Animasi = 2000/', '2020-02-08', '2020-02-15', '083842135415', 'Belum Selesai', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `alamat`, `email`) VALUES
(2, 'Gilang Aji Purnomo', 'gilang99', 'gilang123', 'Asal', 'Juga'),
(8, 'Gilang Aji Purnomo', 'root', '', 'Banjarmasin...', 'steveganteng@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `desain`
--
ALTER TABLE `desain`
  ADD PRIMARY KEY (`id_desain`);

--
-- Indexes for table `editing_video`
--
ALTER TABLE `editing_video`
  ADD PRIMARY KEY (`id_editing`);

--
-- Indexes for table `makalah`
--
ALTER TABLE `makalah`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `powerpoint`
--
ALTER TABLE `powerpoint`
  ADD PRIMARY KEY (`id_ppt`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `desain`
--
ALTER TABLE `desain`
  MODIFY `id_desain` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `editing_video`
--
ALTER TABLE `editing_video`
  MODIFY `id_editing` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `makalah`
--
ALTER TABLE `makalah`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `powerpoint`
--
ALTER TABLE `powerpoint`
  MODIFY `id_ppt` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
