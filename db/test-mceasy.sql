-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 01:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test-mceasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_izin`
--

CREATE TABLE `tb_izin` (
  `id_izin` int(11) NOT NULL,
  `id_jenis_izin` int(11) NOT NULL,
  `nomor_induk` varchar(20) NOT NULL,
  `tanggal_mulai` int(11) NOT NULL,
  `lama_hari` int(11) NOT NULL,
  `registered` datetime NOT NULL DEFAULT current_timestamp(),
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_izin`
--

INSERT INTO `tb_izin` (`id_izin`, `id_jenis_izin`, `nomor_induk`, `tanggal_mulai`, `lama_hari`, `registered`, `keterangan`) VALUES
(7, 1, 'IP06001', 2022, 2, '2022-01-03 07:32:42', 'Acara Keluarga'),
(8, 1, 'IP06001', 2022, 2, '2022-01-03 07:33:09', 'Anak Sakit'),
(9, 1, 'IP06006', 2022, 1, '2022-01-03 07:33:49', 'Nenek Sakit'),
(10, 1, 'IP06007', 2022, 1, '2022-01-03 07:34:21', 'Sakit'),
(11, 1, 'IP06004', 2022, 5, '2022-01-03 07:34:50', 'Menikah\n'),
(12, 1, 'IP06003', 2022, 2, '2022-01-03 07:35:12', 'Acara Keluarga');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jatah_izin`
--

CREATE TABLE `tb_jatah_izin` (
  `id_jatah_izin` int(11) NOT NULL,
  `nomor_induk` varchar(25) NOT NULL,
  `id_jenis_izin` int(11) NOT NULL,
  `tahun` int(4) NOT NULL,
  `jatah_izin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jatah_izin`
--

INSERT INTO `tb_jatah_izin` (`id_jatah_izin`, `nomor_induk`, `id_jenis_izin`, `tahun`, `jatah_izin`) VALUES
(1, 'IP06001', 1, 2022, 12),
(2, 'IP06001', 2, 2022, 0),
(3, 'IP06001', 3, 2022, 10),
(4, 'IP066002', 1, 2022, 12),
(5, 'IP066002', 2, 2022, 0),
(6, 'IP066002', 3, 2022, 10),
(7, 'IP0666003', 1, 2022, 12),
(8, 'IP0666003', 2, 2022, 0),
(9, 'IP0666003', 3, 2022, 10),
(10, 'IP0666004', 1, 2022, 12),
(11, 'IP0666004', 2, 2022, 0),
(12, 'IP0666004', 3, 2022, 10),
(13, 'IP06001', 1, 2022, 12),
(14, 'IP06001', 2, 2022, 0),
(15, 'IP06001', 3, 2022, 10),
(16, 'IP06002', 1, 2022, 12),
(17, 'IP06002', 2, 2022, 0),
(18, 'IP06002', 3, 2022, 10),
(19, 'IP06001', 1, 2022, 12),
(20, 'IP06001', 2, 2022, 0),
(21, 'IP06001', 3, 2022, 10),
(22, 'IP06002', 1, 2022, 12),
(23, 'IP06002', 2, 2022, 0),
(24, 'IP06002', 3, 2022, 10),
(25, 'IP06003', 1, 2022, 12),
(26, 'IP06003', 2, 2022, 0),
(27, 'IP06003', 3, 2022, 10),
(28, 'IP06004', 1, 2022, 12),
(29, 'IP06004', 2, 2022, 0),
(30, 'IP06004', 3, 2022, 10),
(31, 'IP06005', 1, 2022, 12),
(32, 'IP06005', 2, 2022, 0),
(33, 'IP06005', 3, 2022, 10),
(34, 'IP06006', 1, 2022, 12),
(35, 'IP06006', 2, 2022, 0),
(36, 'IP06006', 3, 2022, 10),
(37, 'IP06007', 1, 2022, 12),
(38, 'IP06007', 2, 2022, 0),
(39, 'IP06007', 3, 2022, 10),
(40, 'IP06008', 1, 2022, 12),
(41, 'IP06008', 2, 2022, 0),
(42, 'IP06008', 3, 2022, 10),
(43, 'IP06009', 1, 2022, 12),
(44, 'IP06009', 2, 2022, 0),
(45, 'IP06009', 3, 2022, 10),
(46, 'IP06010', 1, 2022, 12),
(47, 'IP06010', 2, 2022, 0),
(48, 'IP06010', 3, 2022, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_izin`
--

CREATE TABLE `tb_jenis_izin` (
  `id_jenis_izin` int(11) NOT NULL,
  `nama_izin` varchar(30) NOT NULL,
  `jatah_izin` int(11) NOT NULL,
  `registered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis_izin`
--

INSERT INTO `tb_jenis_izin` (`id_jenis_izin`, `nama_izin`, `jatah_izin`, `registered`) VALUES
(1, 'Cuti', 12, '2022-01-01 22:40:33'),
(2, 'Sakit', 0, '2022-01-01 22:40:33'),
(3, 'Izin', 10, '2022-01-01 22:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `alamat` text DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `registered` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `nomor_induk` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `nama_karyawan`, `alamat`, `tanggal_lahir`, `registered`, `status`, `nomor_induk`) VALUES
(0, 'Agus', 'Jln Gaja Mada no 12, Surabaya', '1980-01-11', '2022-01-03 07:20:23', 1, 'IP06001'),
(0, 'Amin', 'Jln Imam Bonjol no 11, Mojokerto', '1977-09-07', '2022-01-03 07:20:53', 1, 'IP06002'),
(0, 'Yusuf', 'Jln A Yani Raya 15 No 14 Malang', '1975-08-09', '2022-01-03 07:21:25', 1, 'IP06003'),
(0, 'Alyssa', 'Jln Bungur Sari V no 166, Bandung', '1983-03-18', '2022-01-03 07:21:59', 1, 'IP06004'),
(0, 'Maulana', 'Jln Candi Agung, No 78 Gg 5, Jakarta', '1978-11-10', '2022-01-03 07:23:41', 1, 'IP06005'),
(0, 'Agfika', 'Jln Nangka, Jakarta Timur', '1979-02-07', '2022-01-03 07:24:06', 1, 'IP06006'),
(0, 'James', 'Jln Merpati, 8 Surabaya', '1989-05-18', '2022-01-03 07:24:47', 1, 'IP06007'),
(0, 'Octayanus', 'Jln A Yani 17, B 08 Sidoarjo', '1985-04-14', '2022-01-03 07:25:21', 1, 'IP06008'),
(0, 'Nugroho', 'Jln Duren tiga 167, Jakarta Selatan', '1984-01-01', '2022-01-03 07:25:51', 1, 'IP06009'),
(0, 'Raysa', 'Jln Kelapa Sawit, Jakarta Selatan', '1990-12-17', '2022-01-03 07:26:21', 1, 'IP06010');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_izin`
--
ALTER TABLE `tb_izin`
  ADD PRIMARY KEY (`id_izin`),
  ADD KEY `jenis_izin` (`id_jenis_izin`);

--
-- Indexes for table `tb_jatah_izin`
--
ALTER TABLE `tb_jatah_izin`
  ADD PRIMARY KEY (`id_jatah_izin`);

--
-- Indexes for table `tb_jenis_izin`
--
ALTER TABLE `tb_jenis_izin`
  ADD PRIMARY KEY (`id_jenis_izin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_izin`
--
ALTER TABLE `tb_izin`
  MODIFY `id_izin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_jatah_izin`
--
ALTER TABLE `tb_jatah_izin`
  MODIFY `id_jatah_izin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_jenis_izin`
--
ALTER TABLE `tb_jenis_izin`
  MODIFY `id_jenis_izin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_izin`
--
ALTER TABLE `tb_izin`
  ADD CONSTRAINT `jenis_izin` FOREIGN KEY (`id_jenis_izin`) REFERENCES `tb_jenis_izin` (`id_jenis_izin`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
