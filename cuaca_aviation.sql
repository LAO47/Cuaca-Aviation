-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 Jan 2019 pada 07.37
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aviationbmkg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuaca_aviation`
--

CREATE TABLE `cuaca_aviation` (
  `id` int(11) NOT NULL,
  `bandara` varchar(50) DEFAULT NULL,
  `kode_icao` char(4) DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `cuaca` char(50) DEFAULT NULL,
  `suhu` double DEFAULT NULL,
  `visibility` double DEFAULT NULL,
  `kecepatan_angin` double DEFAULT NULL,
  `arah_angin` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cuaca_aviation`
--

INSERT INTO `cuaca_aviation` (`id`, `bandara`, `kode_icao`, `latitude`, `longitude`, `waktu`, `cuaca`, `suhu`, `visibility`, `kecepatan_angin`, `arah_angin`) VALUES
(1, 'SOEKARNO-HATTA', 'WIII', -6.12049, 106.661, '13:18:51', 'Badai', 21.4, 9.6, 18.5, 'Tenggara'),
(2, 'SULTAN TAHA', 'WIJJ', -1.6362, 103.644, '21:23:21', 'Berawan', 28.6, 10, 15.6, 'Barat'),
(3, 'HALIM PERDANAKUSUMA', 'WIHH', -6.2666, 106.891, '06:22:41', 'Cerah', 31.2, 10, 17.5, 'Barat'),
(4, 'KUALA NAMU', 'WIMM', 3.635, 98.8791, '16:23:11', 'Cerah', 28.6, 10.5, 16.6, 'Timur'),
(5, 'NGURAH RAI', 'WADD', -8.7442, 115.168, '10:45:55', 'Hujan', 24.4, 7.6, 19.4, 'Selatan'),
(6, 'ADISTJIPTO', 'WAHH', -7.78541, 110.437, '09:34:47', 'Berawan', 27.5, 8.7, 16.7, 'Barat Daya'),
(7, 'SENTANI', 'WAJJ', -2.56989, 140.503, '04:39:12', 'Cerah', 22.4, 7.5, 18.3, 'Utara'),
(8, 'SEPINGGAN', 'WALL', -1.26827, 116.894, '19:39:33', 'Guntur-Hujan', 21.5, 4.2, 24.5, 'Timur'),
(9, 'SAM RATULANGI', 'WAMM', 1.54283, 124.922, '12:06:45', 'Hujan Ringan', 24.4, 6.5, 19.3, 'Selatan'),
(10, 'AHMAD YANI', 'WAHS', -6.97871, 110.379, '07:11:23', 'Cerah', 26.7, 10, 16.5, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuaca_aviation`
--
ALTER TABLE `cuaca_aviation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuaca_aviation`
--
ALTER TABLE `cuaca_aviation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
