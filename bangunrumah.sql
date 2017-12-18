-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2017 at 04:39 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bangunrumah`
--

-- --------------------------------------------------------

--
-- Table structure for table `desain`
--

CREATE TABLE `desain` (
  `idDesain` int(11) NOT NULL,
  `namaBangunan` varchar(60) NOT NULL,
  `tipe` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `pdf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desain`
--

INSERT INTO `desain` (`idDesain`, `namaBangunan`, `tipe`, `gambar`, `pdf`) VALUES
(1, 'Rumah Minimalis', 36, 'gambar/gambar20171217191918.jpg', 'pdf/1.docx'),
(2, 'Rumah Minimalis', 21, 'gambar/gambar20171218024123.jpg', 'pdf/2.docx'),
(3, 'Rumah Minimalis Modern', 30, 'gambar/gambar20171218033824.jpg', 'pdf/3.docx'),
(4, 'Rumah Minimalis', 45, 'gambar/gambar20171214103022.jpg', ''),
(5, 'Rumah Minimalis', 60, 'gambar/gambar20171214103048.jpg', ''),
(6, 'Rumah Minimalis', 70, 'gambar/gambar20171214103100.jpg', ''),
(7, 'Rumah Minimalis', 21, 'gambar/gambar20171214135102.jpg', ''),
(8, 'apa', 21, 'gambar/gambar20171215130710.jpg', ''),
(9, 'Rumah Minimalis', 36, 'gambar/gambar20171218033638.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `idmember` int(11) NOT NULL,
  `namamember` varchar(50) NOT NULL,
  `alamatmember` varchar(100) NOT NULL,
  `nomortelefon` varchar(15) NOT NULL,
  `user` varchar(15) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idmember`, `namamember`, `alamatmember`, `nomortelefon`, `user`, `pass`) VALUES
(1, 'beya', 'jalan seruni blok f.32', '092747019', 'beya', 'beya'),
(2, 'coba', 'coba lengkap', '08123398182', 'coba', 'coba'),
(3, 'w', 'w', 'w', 'w', 'w'),
(13, 'tika', 'tika', '12121', 'tika', 'tika'),
(14, 'beya', 'beya', '08172917281', 'coba', 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idDesain` int(11) NOT NULL,
  `tanggal_pemesanan` datetime NOT NULL,
  `statusvalidasi` enum('Validasi','Tidak Tervalidasi') NOT NULL DEFAULT 'Tidak Tervalidasi',
  `statuslunas` enum('Lunas','Tidak Lunas','','') NOT NULL DEFAULT 'Tidak Lunas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `iduser`, `idDesain`, `tanggal_pemesanan`, `statusvalidasi`, `statuslunas`) VALUES
(17, 3, 2, '2017-12-17 19:20:46', 'Validasi', 'Lunas'),
(20, 3, 2, '2017-12-18 03:41:02', 'Tidak Tervalidasi', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `user`, `pass`, `level`) VALUES
(1, 'admin', 'admin', 1),
(2, 'desain', 'desain', 2),
(3, 'beya', 'beya', 3),
(4, 'coba', 'coba', 3),
(14, 'tika', 'tika', 3),
(15, 'coba', 'coba', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desain`
--
ALTER TABLE `desain`
  ADD PRIMARY KEY (`idDesain`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idmember`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `iduser` (`iduser`,`idDesain`),
  ADD KEY `idDesain` (`idDesain`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desain`
--
ALTER TABLE `desain`
  MODIFY `idDesain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `idmember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`idDesain`) REFERENCES `desain` (`idDesain`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
