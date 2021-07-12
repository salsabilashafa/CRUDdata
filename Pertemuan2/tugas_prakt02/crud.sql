-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 07:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(100) NOT NULL,
  `nim` varchar(20) CHARACTER SET utf8 NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8 NOT NULL,
  `jenis_kelamin` varchar(20) CHARACTER SET utf8 NOT NULL,
  `agama` varchar(20) CHARACTER SET utf8 NOT NULL,
  `olahraga_favorite` varchar(100) CHARACTER SET utf8 NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jenis_kelamin`, `agama`, `olahraga_favorite`, `foto`) VALUES
(1, 'J3C118888', 'Gareth Bale', 'Laki - laki', 'Hindu', 'Sepak Bola', 0x626f6c612e706e67),
(2, 'J3C118889', 'Muhammad Albagir', 'Laki - laki', 'Islam', 'Futsal', 0x66757473616c2e706e67),
(3, 'J3C118890', 'Kobe Bryant', 'Laki - laki', 'Kristen', 'Basket', 0x6261736b6574742e706e67),
(4, 'J3C118891', 'I Gede Siman Sudartawa', 'Laki - laki', 'Hindu', 'Renang', 0x72656e616e672e706e67),
(5, 'J3C118892', 'Taufik Hidayat', 'Laki - laki', 'Islam', 'Badminton', 0x6261646d696e2e706e67),
(6, 'J3C118893', 'Salsabila Shafa Audina', 'Perempuan', 'Islam', 'Sepak Bola', 0x736570616b2e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
