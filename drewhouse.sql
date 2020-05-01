-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 04:05 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drewhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `idAkun` int(10) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`idAkun`, `firstname`, `lastname`, `email`, `password`) VALUES
(2, 'mazaya', 'sasa', 'sasa@gmail.com', 'sasa'),
(4, 'Ariq', 'Dhani', 'ariqmr123@gmail.com', 'ariq'),
(5, 'Ulya', 'Mahsa', 'ulyamahsa@gmail.com', 'ulya'),
(7, 'Asjat', 'Adna', 'asjat@gmail.com', 'asjat'),
(8, 'Azmi', 'Nuzulaz', 'azmi@gmail.com', 'azmi');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(10) NOT NULL,
  `namabarang` varchar(30) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idBarang`, `namabarang`, `harga`, `deskripsi`, `foto`) VALUES
(13, 'Skidoodle Hoodie', '$148', 'Nice', 0x312e6a7067),
(14, 'Skidoodle Sweatpants', '$148', 'Nice', 0x322e6a7067),
(15, 'Skidoodle Hoodie', '$148', 'Nice', 0x332e6a7067),
(16, 'Skidoodle Hoodie', '$148', 'Nice', 0x362e6a7067),
(17, 'Skidoodle Hoodie', '$148', 'Nice', 0x352e6a7067),
(18, 'Skidoodle Hat', '$140', 'Nice', 0x382e6a7067),
(19, 'Skidoodle Sweatpants', '$148', 'Nice', 0x392e6a7067),
(20, 'Skidoodle Hat', '$140', 'Nice', 0x31332e6a7067),
(21, 'Skidoodle Hoodie', '$148', 'Nice', 0x31302e6a7067),
(22, 'Skidoodle Sweatpants', '$148', 'Nice', 0x342e6a7067),
(23, 'Skidoodle Tee', '$150', 'Nice', 0x372e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`idAkun`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `idAkun` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
