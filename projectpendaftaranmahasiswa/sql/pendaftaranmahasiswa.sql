-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 04:49 AM
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
-- Database: `pendaftaranmahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `name`) VALUES
(1, 'Admin', '20k10009@student.unika.ac.id', '$2y$10$AnkJ.U67LxBoF2GUlCcvWOmSXi3srNoD9Wg7cR4glqSp1EgZRDzdu', 'Jonathan Kevin Giustino'),
(2, 'admin2', 'b11200049@john.petra.ac.id', '$2y$10$Y514mEuf64CMBaybIqtExOMZ8GH9Ee58N6N/k4tSR7hDM1MKJ9Hnq', 'Blazer Amadeus'),
(3, 'admin3', 'yolowo1721@ineedsa.com', '$2y$10$g4tUfqC0/p0ACcT9GFzB9.coCKBiysqSZ2Lv8LqJvvhbd1kPA0DP2', 'Tiyaira Kirchner');

-- --------------------------------------------------------

--
-- Table structure for table `calon_mahasiswa`
--

CREATE TABLE `calon_mahasiswa` (
  `id` int(11) NOT NULL,
  `NIS` varchar(25) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `sekolah_asal` varchar(64) NOT NULL,
  `Jurusan_SMA` varchar(3) NOT NULL,
  `Kode_Prodi` int(11) NOT NULL,
  `Kode_Jalur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_mahasiswa`
--

INSERT INTO `calon_mahasiswa` (`id`, `NIS`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `Jurusan_SMA`, `Kode_Prodi`, `Kode_Jalur`) VALUES
(1, '1809599001', 'Lia Marlia', 'Jl.Soekarno-Hatta I/12', 'perempuan', 'Islam', 'SMA Negeri 2', 'IPA', 3, 1),
(2, '1809599045', 'Jonathan Hindarta', 'Jl Soekarno-Hatta 101', 'laki-laki', 'Kristen', 'SMA Sedes', 'IPS', 4, 2),
(3, '1980745011', 'Ghaliyati Safitri', 'Ki. Gotong Royong No. 27, Tarakan 19805, KalSel \r\n', 'perempuan', 'Islam', 'SMA Negeri 2', 'BHS', 3, 2),
(4, '1980564842', 'Andi Susilo', 'Jl Jati Gg 4/17 66144\r\n', 'laki-laki', 'Islam', 'SMA Kolese De Brito', 'BHS', 3, 1),
(5, '1980864667', 'Chantika Mutiara', 'Jl Sultan Agung 65', 'perempuan', 'Islam', 'SMA Nasima', 'IPS', 2, 2),
(6, '1980864678', 'Harta Benny Lie', 'Jl Pejompongan Raya Kompl Plaza,', 'perempuan', 'Kristen', 'SMA Sedes', 'IPA', 1, 1),
(7, '1980745012', 'Safina Widyastuti', 'Jl Stasiun 17', 'perempuan', 'Islam', 'SMA Negeri 24', 'IPS', 3, 2),
(8, '1980745065', 'Budi Utomo', 'Jl Psr Besar 65', 'laki-laki', 'Hindu', 'SMA Nasima', 'BHS', 1, 1),
(9, '1980745043', 'Shinta Sucianty Yuwono', 'Jl Mataram 908', 'perempuan', 'Katolik', 'SMA Karangturi', 'IPS', 1, 1),
(10, '1809599035', 'Galar Permadi', 'Jln. Umalas No. 10', 'laki-laki', 'Islam', 'SMA Sang Timur', 'IPS', 3, 1),
(11, '1809599156', 'Janet Purnawati', 'Ki. Kusmanto No. 645', 'perempuan', 'Katolik', 'SMA Sang Timur', 'IPA', 1, 2),
(12, '1980745458', 'Talia Yunitar', 'Ds. Babakan No. 533', 'perempuan', 'Hindu', 'SMA BPK Penabur', 'IPA', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jalur`
--

CREATE TABLE `jalur` (
  `Kode_Jalur` int(11) NOT NULL,
  `JalurPrestasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jalur`
--

INSERT INTO `jalur` (`Kode_Jalur`, `JalurPrestasi`) VALUES
(1, 'Jalur Prestasi Akademik'),
(2, 'Jalur Prestasi Olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `jurusansma`
--

CREATE TABLE `jurusansma` (
  `Jurusan_SMA` varchar(3) NOT NULL,
  `JurusanSekolahMenengah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusansma`
--

INSERT INTO `jurusansma` (`Jurusan_SMA`, `JurusanSekolahMenengah`) VALUES
('BHS', 'Jurusan SMA BHS'),
('IPA', 'Jurusan SMA IPA'),
('IPS', 'Jurusan SMA IPS'),
('SMK', 'Jurusan SMK');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `Kode_Prodi` int(11) NOT NULL,
  `ProdiPilihan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`Kode_Prodi`, `ProdiPilihan`) VALUES
(1, 'Teknik-Informatika-1'),
(2, 'Teknik-Elektro-2'),
(3, 'Teknik-Sipil-3'),
(4, 'Arsitektur-4'),
(5, 'Teknik-Pangan-5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `calon_mahasiswa`
--
ALTER TABLE `calon_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahasiswa_FK` (`Kode_Prodi`),
  ADD KEY `jalur_fk` (`Kode_Jalur`),
  ADD KEY `jurusan_fk` (`Jurusan_SMA`);

--
-- Indexes for table `jalur`
--
ALTER TABLE `jalur`
  ADD PRIMARY KEY (`Kode_Jalur`);

--
-- Indexes for table `jurusansma`
--
ALTER TABLE `jurusansma`
  ADD PRIMARY KEY (`Jurusan_SMA`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`Kode_Prodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `calon_mahasiswa`
--
ALTER TABLE `calon_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jalur`
--
ALTER TABLE `jalur`
  MODIFY `Kode_Jalur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `Kode_Prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calon_mahasiswa`
--
ALTER TABLE `calon_mahasiswa`
  ADD CONSTRAINT `jalur_fk` FOREIGN KEY (`Kode_Jalur`) REFERENCES `jalur` (`Kode_Jalur`),
  ADD CONSTRAINT `jurusan_fk` FOREIGN KEY (`Jurusan_SMA`) REFERENCES `jurusansma` (`Jurusan_SMA`),
  ADD CONSTRAINT `mahasiswa_FK` FOREIGN KEY (`Kode_Prodi`) REFERENCES `prodi` (`Kode_Prodi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
