-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 08:05 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(10) NOT NULL,
  `judul` text DEFAULT NULL,
  `penerbit` text DEFAULT NULL,
  `pengarang` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penerbit`, `pengarang`) VALUES
('K01', 'Pemrograman Web', 'Erlangga', 'Budi setianto'),
('K02', 'Pemograman Web', 'Erlangga', 'Sudini Ahmad'),
('K03', 'IOT', 'Yudhistira', 'Koko Admodjo'),
('K04', 'AI', 'Yudhistira', 'Koko Admodjo'),
('K05', 'Computer Vision', 'Yudhistira', 'Kiki Armala'),
('K06', 'Basis Data', 'Yudhistira', 'Siti Admo'),
('K07', 'Konsep Jaringan', 'Yudhistira', 'Koko Admodjo'),
('K08', 'Jaringan Nirkabel', 'Yudhistira', 'Koko Admodjo'),
('K09', 'Jaringan Wireless', 'Yudhistira', 'Koko Admodjo'),
('K10', 'Mikrotik', 'Yudhistira', 'Koko Admodjo'),
('K11', 'Cyber Security', 'Yudhistira', 'Koko Admodjo');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_buku` varchar(10) NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_buku`, `id_anggota`, `tgl_pinjam`, `tgl_kembali`) VALUES
('K01', '3121500001', '2022-05-26', '2022-05-31'),
('K02', '3121500001', '2022-05-29', '2022-05-29'),
('K03', '3121500001', '2022-05-26', '2022-05-31'),
('K04', '3121500001', '2022-05-26', '2022-05-31'),
('K05', '3121500001', '2022-05-26', '2022-05-31'),
('K06', '3121500001', '2022-05-26', '2022-05-31'),
('K07', '3121500001', '2022-05-26', '2022-05-31'),
('K08', '3121500001', '2022-05-26', '2022-05-31'),
('K09', '3121500001', '2022-05-26', '2022-05-31'),
('K10', '3121500001', '2022-05-26', '2022-05-29'),
('K11', '3121500001', '2022-05-26', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_anggota` varchar(10) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_anggota`, `nama`, `email`, `alamat`, `password`) VALUES
('3121500001', 'Gonzales', 'wmk@gmail.com', 'Kediri', 'apapunpasswordnya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_buku`,`id_anggota`),
  ADD KEY `transaksi_ibfk_2` (`id_anggota`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `user` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
