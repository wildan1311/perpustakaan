-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 04:43 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: perpustakaan
--

-- --------------------------------------------------------

--
-- Table structure for table buku
--

CREATE TABLE buku (
  id_buku varchar(10) NOT NULL,
  judul varchar(20) DEFAULT NULL,
  penerbit varchar(20) DEFAULT NULL,
  pengarang varchar(100) DEFAULT NULL
) ;

--
-- Dumping data for table buku
--

INSERT INTO buku (id_buku, judul, penerbit, pengarang) VALUES
('K01', 'Pemrograman Web', 'Erlangga', 'Budi setianto');

-- --------------------------------------------------------

--
-- Table structure for table transaksi
--

CREATE TABLE transaksi (
  id_buku varchar(10) NOT NULL,
  id_anggota varchar(10) NOT NULL,
  tgl_pinjam date NOT NULL,
  tgl_kembali date NOT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table user
--

CREATE TABLE pengguna (
  nrp varchar(10) NOT NULL,
  nama varchar(100) NOT NULL,
  email varchar(20) NOT NULL,
  alamat varchar(100) NOT NULL,
  password varchar(20) DEFAULT NULL
) ;

--
-- Dumping data for table user
--

INSERT INTO pengguna (nrp, nama, email, alamat, password) VALUES
('3121500001', 'Ginzales Ahmad', 'gon@gmail.com', 'Jalan jalan pokok jalan', 'apapunpasswordnya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table buku
--
ALTER TABLE buku
  ADD PRIMARY KEY (id_buku);

--
-- Indexes for table transaksi
--
ALTER TABLE transaksi
  ADD PRIMARY KEY (id_buku,id_anggota);

--
-- Indexes for table user
--
ALTER TABLE pengguna
  ADD PRIMARY KEY (nrp(20));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
