-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 26, 2018 at 04:15 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbeasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `idBeasiswa` int(11) NOT NULL,
  `namaBeasiswa` varchar(30) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `kuota` int(4) NOT NULL,
  `deadline` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`idBeasiswa`, `namaBeasiswa`, `periode`, `kuota`, `deadline`) VALUES
(1, 'Beasiswa Ceria', '6 bulan', 9, '2018-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `idLevel` int(11) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`idLevel`, `keterangan`) VALUES
(1, 'Admin'),
(2, 'Petugas'),
(3, 'Akademik'),
(4, 'Prestasi');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `tglMasuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id`, `nama`, `email`, `telp`, `username`, `password`, `level`, `tglMasuk`) VALUES
(1, 'Administrator', 'admin@gmail.com', '08123456789', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2018-06-19 13:02:43'),
(2, 'Alfinda Rahmadiarni', 'alfi@gmail.com', '08987654432', 'finda', '9b1de3ab70058b24e934b5ef5c3d62f2', 2, '2018-06-19 13:58:52'),
(4, 'yona narulita', 'yona@gmail.com', '0876785457', 'yona', '95488ef6daa5a49a38ea076c37ea3143', 2, '2018-06-20 02:02:26');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `idDaftar` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `jk` enum('Laki-laki','Perempuan','','') NOT NULL,
  `tempatLahir` varchar(20) NOT NULL,
  `tglLahir` varchar(20) NOT NULL,
  `alamatLengkap` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `ipk` float NOT NULL,
  `namaAyah` varchar(30) NOT NULL,
  `namaIbu` varchar(30) NOT NULL,
  `internasional` int(3) NOT NULL,
  `nasional` int(3) NOT NULL,
  `provinsi` int(3) NOT NULL,
  `kota` int(3) NOT NULL,
  `alasanBeasiswa` varchar(100) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `tglDaftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`idDaftar`, `nim`, `nama`, `jurusan`, `jk`, `tempatLahir`, `tglLahir`, `alamatLengkap`, `telp`, `foto`, `ipk`, `namaAyah`, `namaIbu`, `internasional`, `nasional`, `provinsi`, `kota`, `alasanBeasiswa`, `pwd`, `tglDaftar`, `level`) VALUES
(6, '1631710001', 'cinta laura', 'Teknologi Informasi', 'Perempuan', 'malang', '2008-07-16', 'Jalan cinta No 01 RT 01 RW 01 KEC BLIMBING KEL PURWANTORO', '0812345678', '1.jpg', 3.5, 'jhon cinta', 'jhin cinta', 1, 1, 1, 1, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', 'c3653e4408832e6611f37dcd90544de8', '2018-07-10 11:23:28', 4),
(7, '002', 'Adipati Dolken', 'Teknik Kimia', 'Laki-laki', 'Jakarta', '2018-06-25', 'Jalan adi No 02 RT 02 RW 02 KEC BLIMBING KEL PURWANTORO', '089567436774', '2.jpg', 3.25, 'ajipati', 'anipati', 0, 0, 0, 0, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', '0971ce98874030a1e6e514013f891db9', '2018-07-10 11:27:02', 3),
(8, '003', 'fedi nuril', 'Teknik Kimia', 'Laki-laki', 'Bandung', '2018-04-03', 'Jalan cinta No 03 RT 03 RW 03 KEC BLIMBING KEL PURWANTORO', '097567482563', '3.jpg', 3, 'feril agus', 'viera', 0, 0, 0, 0, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', '1333b34d2f3535873a55fab139e6fbd0', '2018-07-10 11:29:32', 3),
(9, '004', 'Sandra Dewi', 'Administrasi Bisnis', 'Perempuan', 'Jakarta', '2018-06-26', 'Jalan kedawung No 04 RT 04 RW 04 KEC BLIMBING KEL PURWANTORO', '08345675432456', '4.jpg', 3.33, 'sander dewa', 'sandri sinta', 0, 0, 0, 0, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', 'f40a37048732da05928c3d374549c832', '2018-07-10 11:31:48', 3),
(10, '005', 'Raline Shah', 'Akuntansi', 'Perempuan', 'Jakarta', '2018-07-03', 'Jalan ciliwung No 05 RT 05 RW 50 KEC BLIMBING KEL PURWANTORO', '08767564565', '51.jpg', 3, 'bowo', 'putri', 1, 2, 1, 1, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', '2e73ec0006c1b41465c5ac004b460ab5', '2018-07-10 11:35:43', 4),
(11, '006', 'Acha Septiarsyah', 'Bahasa Inggris', 'Perempuan', 'Semarang', '2018-07-19', 'Jalan Bauksit No 6 RT 6 RW 06 KEC BLIMBING KEL PURWANTORO', '0812345678', '6.jpg', 3.01, 'agus', 'putri', 1, 1, 1, 1, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', '70939863c4a305a909a982aa910657dd', '2018-07-10 11:38:39', 4),
(12, '007', 'Billy syahputra', 'Administrasi Bisnis', 'Perempuan', 'Malang', '2018-07-03', 'Jalan aluminium No 07 RT 07 RW 07 KEC BLIMBING KEL PURWANTORO', '0987645678', '7.jpg', 2.95, 'syahputra', 'syahputri', 0, 0, 0, 0, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', '89c246298be2b6113fb10ba80f3c6956', '2018-07-10 11:41:06', 3),
(13, '008', 'Ricky harun', 'Teknik Mesin', 'Laki-laki', 'Malang', '2018-07-04', 'Jalan pospat No 08 RT 08 RW 08 KEC BLIMBING KEL PURWANTORO', '0815647483736', '8.jpg', 2.9, 'harun', 'harum', 1, 1, 1, 1, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', '56ea8b83122449e814e0fd7bfb5f220a', '2018-07-10 11:44:53', 4),
(14, '009', 'Rizky febian', 'Teknik Sipil', 'Laki-laki', 'Lampung', '2018-06-28', 'Jalan emas No 09 RT 09 RW 09 KEC BLIMBING KEL PURWANTORO', '08976545678', '12.jpg', 3.39, 'sule', 'widya', 0, 0, 0, 0, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', '49d8712dd6ac9c3745d53cd4be48284c', '2018-07-10 11:49:15', 3),
(15, '010', 'Rizky tagor', 'Teknologi Informasi', 'Perempuan', 'Bogor', '2018-06-28', 'Jalan aluminium No 010 RT 010 RW 010 KEC BLIMBING KEL PURWANTORO', '085678432', '10.jpg', 2.85, 'doni', 'dona', 1, 1, 1, 1, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', 'e4c51775272b2a54a17cb05506d3f5fa', '2018-07-10 11:52:59', 4),
(16, '011', 'Iqbaal Ramadhan', 'Teknologi Informasi', 'Laki-laki', 'Surabaya', '2018-04-04', 'Jalan batubara No 011 RT 011 RW 011 KEC BLIMBING KEL PURWANTORO', '08545678754', '11.jpg', 3.95, 'hendri', 'rieke', 0, 0, 0, 0, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', '45225437e57cc2ac5a74bd44aea1ac7b', '2018-07-10 11:55:24', 3),
(17, '012', 'Verrel Bas', 'Teknologi Informasi', 'Laki-laki', 'Jakarta', '2018-07-04', 'Jalan sulfat No 012 RT 012 RW 012 KEC BLIMBING KEL PURWANTORO', '08543267', '13.jpg', 3.33, 'verill', 'vera', 1, 1, 1, 1, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', '4eeff955615499e0ff518573497b8f02', '2018-07-10 11:59:06', 4),
(18, '014', 'Putra Sihombing', 'Teknik Kimia', 'Laki-laki', 'Madura', '2018-06-26', 'Jalan titan No 014 RT 014 RW 014 KEC BLIMBING KEL PURWANTORO', '08976546474', '14.jpg', 3.95, 'bambang', 'siti', 1, 2, 1, 1, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', '5e0c5a0bf82decdd43b2150b622c66c5', '2018-07-10 12:01:29', 4),
(19, '015', 'Jefri nichol', 'Teknik Mesin', 'Laki-laki', 'Kediri', '2018-06-27', 'Jalan natrium No 015 RT 015 RW 015 KEC BLIMBING KEL PURWANTORO', '08647486455', '15.jpg', 3.5, 'jheff', 'frill', 0, 0, 0, 0, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', 'c710857e9b674843afc9b54b7ae2032d', '2018-07-10 12:05:02', 3),
(20, '016', 'Vanesha precsilia', 'Teknik Sipil', 'Perempuan', 'Batam', '2018-06-28', 'Jalan uranium No 016 RT 016 RW 016 KEC BLIMBING KEL PURWANTORO', '08754356', '16.jpg', 3.55, 'aji', 'anis', 1, 1, 1, 1, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', 'f45731e3d39a1b2330bbf93e9b3de59e', '2018-07-10 12:10:38', 4),
(21, '017', 'Raisa andriana', 'Administrasi Bisnis', 'Perempuan', 'Jakarta', '2018-06-28', 'Jalan buah batu No 017 RT 017 RW 017 KEC BLIMBING KEL PURWANTORO', '085643456', '17.jpg', 3.5, 'kevin', 'vina', 0, 0, 0, 0, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', '4b8ed057e4f0960d8413e37060d4c175', '2018-07-10 12:12:44', 3),
(22, '018', 'Isyana sarasvati', 'Teknik Kimia', 'Perempuan', 'Jakarta', '2018-06-27', 'Jalan buah batu No 018 RT 018 RW 018 KEC BLIMBING KEL PURWANTORO', '0879654567', '18.jpg', 4, 'syafril', 'wati', 1, 1, 1, 1, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', '195ee27e763e6860fca9646c5bfdce80', '2018-07-10 12:15:33', 4),
(23, '019', 'Pevita pearce', 'Teknik Kimia', 'Perempuan', 'Malang', '2018-06-29', 'Jalan cinta No 019 RT 019 RW 09 KEC BLIMBING KEL PURWANTORO', '087654356', '19.jpg', 3.12, 'ayah pearce', 'ibu pearce', 0, 0, 0, 0, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', 'c7f24f34d852ae9c33d50776f3241971', '2018-07-10 12:17:48', 3),
(24, '020', 'Yuki Kato', 'Teknik Mesin', 'Perempuan', 'Bandung', '2018-06-28', 'Jalan Buah batu No 20 RT 01 RW 01 KEC BLIMBING KEL PURWANTORO', '0876545678', '20.jpg', 3.15, 'lukik', 'leli', 1, 1, 1, 1, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', '8b72529ec356bfa60828b4da6c2cc610', '2018-07-10 12:21:12', 4),
(25, '021', 'Salsabilah', 'Administrasi Bisnis', 'Perempuan', 'Jakarta', '2018-06-27', 'Jalan Silikat No 21 RT 01 RW 01 KEC BLIMBING KEL PURWANTORO', '0876543456', '25.jpg', 3.54, 'yanto', 'yanti', 0, 0, 0, 0, 'Alasan saya mengajukan beasiswa  untuk memperoleh bantuan atau support biaya perkuliahan saya di per', '0143c1e8e97da861c623ff508a441c54', '2018-07-10 12:25:24', 3);

-- --------------------------------------------------------

--
-- Table structure for table `seleksi`
--

CREATE TABLE `seleksi` (
  `idSeleksi` int(11) NOT NULL,
  `idDaftar` int(11) NOT NULL,
  `poin` float NOT NULL,
  `keterangan` enum('LOLOS','TIDAK LOLOS','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seleksi`
--

INSERT INTO `seleksi` (`idSeleksi`, `idDaftar`, `poin`, `keterangan`) VALUES
(16, 6, 6, 'LOLOS'),
(17, 7, 3.25, 'TIDAK LOLOS'),
(18, 8, 3, 'TIDAK LOLOS'),
(19, 9, 3.33, 'TIDAK LOLOS'),
(20, 10, 6.25, 'LOLOS'),
(21, 11, 5.51, 'LOLOS'),
(22, 12, 2.95, 'TIDAK LOLOS'),
(23, 13, 5.4, 'LOLOS'),
(24, 14, 3.39, 'TIDAK LOLOS'),
(25, 15, 5.35, 'LOLOS'),
(26, 16, 3.95, 'LOLOS'),
(27, 17, 5.83, 'LOLOS'),
(28, 18, 7.2, 'LOLOS'),
(29, 19, 3.5, 'LOLOS'),
(30, 20, 6.05, 'LOLOS'),
(31, 21, 3.5, 'LOLOS'),
(32, 22, 6.5, 'LOLOS'),
(33, 23, 3.12, 'TIDAK LOLOS'),
(34, 24, 5.65, 'LOLOS'),
(35, 25, 3.54, 'LOLOS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`idBeasiswa`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`idLevel`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`idDaftar`),
  ADD KEY `level` (`level`);

--
-- Indexes for table `seleksi`
--
ALTER TABLE `seleksi`
  ADD PRIMARY KEY (`idSeleksi`),
  ADD KEY `idDaftar` (`idDaftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `idBeasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `idLevel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `idDaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `seleksi`
--
ALTER TABLE `seleksi`
  MODIFY `idSeleksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `operator`
--
ALTER TABLE `operator`
  ADD CONSTRAINT `operator_ibfk_1` FOREIGN KEY (`level`) REFERENCES `level` (`idLevel`);

--
-- Constraints for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `pendaftar_ibfk_1` FOREIGN KEY (`level`) REFERENCES `level` (`idLevel`);

--
-- Constraints for table `seleksi`
--
ALTER TABLE `seleksi`
  ADD CONSTRAINT `seleksi_ibfk_1` FOREIGN KEY (`idDaftar`) REFERENCES `pendaftar` (`idDaftar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
