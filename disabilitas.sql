-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 03:17 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disabilitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_disabilitas`
--

CREATE TABLE `data_disabilitas` (
  `nama` varchar(50) NOT NULL,
  `tempat_tanggal_lahir` varchar(100) NOT NULL,
  `nik` varchar(22) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `jenis_disabilitas` varchar(50) NOT NULL,
  `gambaran_disabilitas` int(11) NOT NULL,
  `sejak_kapan` date NOT NULL,
  `penyebab_disabilitas` varchar(50) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `program_pemerintah` varchar(50) NOT NULL,
  `no_hp` int(30) NOT NULL,
  `pekerjaan_disabilitas` varchar(30) NOT NULL,
  `pekerjaan_ayah` varchar(30) NOT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL,
  `penghasilan_disabilitas` int(50) NOT NULL,
  `penghasilan_orangtua` int(50) NOT NULL,
  `wali` varchar(30) NOT NULL,
  `pekerjaan_wali` varchar(30) NOT NULL,
  `bantuan_ygdibutuhkan` varchar(30) NOT NULL,
  `ppks_tinggal_bersama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_disabilitas`
--

INSERT INTO `data_disabilitas` (`nama`, `tempat_tanggal_lahir`, `nik`, `jenis_kelamin`, `jenis_disabilitas`, `gambaran_disabilitas`, `sejak_kapan`, `penyebab_disabilitas`, `agama`, `pendidikan`, `status`, `alamat`, `program_pemerintah`, `no_hp`, `pekerjaan_disabilitas`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_disabilitas`, `penghasilan_orangtua`, `wali`, `pekerjaan_wali`, `bantuan_ygdibutuhkan`, `ppks_tinggal_bersama`) VALUES
('Amanda Rauzah', 'kijang 6 desember 1999', '1097654335', 'Perempuan', 'Penyandang Disabilitas Sensorik', 0, '0000-00-00', 'jatuh', 'islam', 's1 teknik Informatika', 'belum menikah', 'Kp. Nosari Timur RT/RW 002/015, Kelurahan Kijang Kota, Kecamatan Bintan Timur, Kabupaten Bintan', 'mnbvcdrtyu', 2147483647, 'programer', 'buruh', 'irt', 6000, 1000, '-', '-', 'kursi ', 'orang tua'),
('DETY RAHAYU', 'kijang 6 desember 1999', '2101064612990001', 'Perempuan', 'jenis 7', 0, '0000-00-00', 'jatuh', 'islam', 's1 teknik Informatika', 'belum menikah', 'Kp. Nosari Timur RT/RW 002/015, Kelurahan Kijang Kota, Kecamatan Bintan Timur, Kabupaten Bintan', 'mnbvcdrtyu', 2147483647, 'programer', 'buruh', 'irt', 6000, 1000, '-', '-', 'kursi ', 'orang tua'),
('Dimas', 'Tanjungpinang, 25-02-2022', '2101076548', 'laki-laki', 'disabilitas fisik', 0, '2022-01-02', 'kecelakaan ', 'islam', 'SMA', 'Belum Menikah', 'jl. hang lekir no.10', 'tidak ada', 856742567, 'tidak  bekerja', 'buruh', 'ibu rumah tangga', 0, 2, 'tidak ada', 'tidak ada', 'kursi roda', 'orangtua'),
('Ani', 'kijang, 12 februari 2004', '21010765489765566', 'laki-laki', 'disabilitas fisik', 898, '2022-02-02', 'nfjfhffjbfhfgf', 'bdjhdjshddbdhj', 'vdhddgdhdh', 'dgdhdh', 'dbdhdgdhdgdgd', 'dvdbdbdb', 896785, 'dbddgdgdgd', 'dddd', 'eejhgfdiuyhgf', 5888, 2000, 'rbff', 'fbfhfh', 'fnfff', 'ffgggggggffddd'),
('Ani', 'kijang, 12 februari 2004', '21010765489765569', 'laki-laki', 'disabilitas fisik', 0, '2022-02-02', 'nfjfhffjbfhfgf', 'bdjhdjshddbdhj', 'vdhddgdhdh', 'dgdhdh', 'dbdhdgdhdgdgd', 'dvdbdbdb', 0, 'dbddgdgdgd', 'dddd', 'eejhgfdiuyhgf', 0, 0, 'rbff', 'fbfhfh', 'fnfff', 'ffgggggggffddd'),
('ari', 'Berakit 24 juni 1999', '2123456790976543', 'Laki-Laki', 'jenis 2', 0, '0000-00-00', 'jatuh', 'islam', 's1 teknik Elektro', 'belum menikah', 'Kp.Nosari Timur, Kijang RT 002/RW 015', 'mnbvcdrtyu', 2147483647, 'programer', 'buruh', 'irt', 6000, 1000, '-', '-', 'kursi ', 'orang tua'),
('Tika', 'Berakit 24 juni 1999', '43654567584', 'Perempuan', 'jenis 5', 0, '0000-00-00', 'jatuh', 'islam', 's1 teknik Elektro', 'belum menikah', 'Kp. Nosari Timur RT/RW 002/015, Kelurahan Kijang Kota, Kecamatan Bintan Timur, Kabupaten Bintan', 'mnbvcdrtyu', 2147483647, 'programer', 'buruh', 'irt', 6000, 1000, '-', '-', 'kursi ', 'orang tua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_disabilitas`
--
ALTER TABLE `data_disabilitas`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
