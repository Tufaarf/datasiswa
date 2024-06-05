-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 03:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_studentdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE `tb_student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `insta` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_student`
--

INSERT INTO `tb_student` (`id`, `name`, `email`, `age`, `class`, `insta`, `address`) VALUES
(9, 'SITI KHODIJAH ', 'halloijah17@gmail.com', '18', 'MP', 'halloijah._', 'Jalan Kelud no 3 kecamatan Kademangan kelurahan Ketapang kota Probolinggo '),
(10, 'VINDA APRILIA ', 'vindaaprilia99@gmail.com', '18', 'MP', 'vinda_pril', 'Jalan Basuki Rahmad no 24B'),
(11, 'Siti Salma Rizqi Febianti ', 'febi210207@gmail.com', '18', 'MP', 'srf_salma ', 'Jalan KH Abdul hamid '),
(12, 'AXELINO NITIAN BASKARA MANIBUY', 'axelinonitian755@gmail.com', '17', 'RPL', '@ric4xl', 'Jln Edelweis Raya no 1'),
(13, 'Afkarina febrizahirah ', 'Afkarina020408@gmail.com', '17', 'RPL', '@Afkarina_fbrzhrh', 'Jln sunan muria gg pisang'),
(14, 'Faiza Dewi Naifasya ', 'naifasyadewifaiza@gmail.com', '17', 'RPL', '@_abcdewengatasi', 'Jln Deandles Dringu GG ratu konde No 65 '),
(15, 'Uthulil jannah', 'Uthulil3408@gmail.com', '17', 'RPL', '@ngutsss_08', 'Dusun bintaos'),
(16, 'Mohammad Elief Nishfi Aviccena ', 'eelnishfi2007@gmail.com', '17', 'RPL', 'eel5175', 'JL Cempaka kelurahan Sukabumi '),
(17, 'siti fatimah', 'sitifatimah86204@gmail.com', '17', 'RPL', '@ya.iniimaa', 'jl. ky. syafii'),
(18, 'Septia Nur Ramadhani', 'septianurramadhani2909@gmail.com', '17', 'RPL', 'snr.ap9', 'Jln. Kaliciliwung Perum Green Madani 1 No.35'),
(19, 'Ramadhani Irawan Sutanto', 'ramairawan87@gmail.com', '17', 'RPL', 'iki.ramon', 'jl.Cokroaminoto gg istiharoh no 174'),
(20, 'Mohammad Hafid ', 'afid.prolink@gmail.com', '17', 'RPL', '@hafid.8606', 'JL IKAN BELANAK 07'),
(21, 'Eka Susanti Budiono', 'susantibudionoeka@gmail.com', '17', 'RPL', '@ekaaysiii_', 'Sumber Wetan'),
(22, 'Moh. Farrel Izulhaq Sabili', 'mochfarrelizulhaqsabili28@gmail.com', '17', 'RPL', '@zulllxxyy', 'dusun Krajan desa tegalrejo kecamatan Dringu kabupaten Probolinggo'),
(23, 'Raafi Achmad Ghani Alisahaq ', 'herobrnkng14@gmail.com', '17', 'RPL', '@neon7120', 'JL Hayam Wuruk gg3 blok d no 13'),
(24, 'Riska Nuraini ', 'rknrara3@gmail.com', '18', 'MP', '@rainnurofficial', 'Paras, Dusun Darungan Kulon Kecamatan Tegalsiwalan Kabupaten Probolinggo '),
(25, 'Jauzaa Alya Neuvarialda ', 'jauzaa111106@gmail.com', '18', 'MP', 'jauzaaalya_', 'Jl. Mangga, Perumahan Kademangan Permata Regency B5/03'),
(26, 'Intan Maharani ', 'intanrani58@gmail.com', '18', 'MP', 'inzcfratchy ', 'Jl Ikan Paus '),
(27, 'Laila Alpi Nurin ', 'laila030307@gmail.com', '18', 'MP', 'lailaalpnrn_', 'wonoasih'),
(28, 'Erisa Alvina Damayanti ', 'erisaalvinaa@gmail.com', '18', 'AK', 'erisaaalvina', 'Jl. hayam Wuruk GG 4 '),
(29, 'Eka Yuni Rahmawati ', 'reka41072@gmail.com', '18', 'AK', 'ra_rahmaaa_', 'Jln.satriyan GG buntu 1 rt07/rw03 desa Kedung dalem kecamatan dringu,kab. Probolinggo '),
(30, 'FRESILA NOVA TALIA ', 'fresila018@gmail.com', '18', 'AK', '@fresilaanova', 'Desa Jangur, Dusun Pacar, RT.005/RW.002, Kabupaten Probolinggo '),
(31, 'alya dwi septianingsih', 'alyadwi396@gmail.com', '18', 'AK', 'aalyadw._', 'jln pahlawan gg w no 114'),
(32, 'Dwi Ramadhani', 'dwiramadhani102006@gmail.com', '18', 'AK', '@dwiramadhani', 'sumberasih lemah kembar'),
(33, 'Cyindi Sri Wahyuni', 'cyindicyindi18@gmail.com', '18', 'AK', 'c.inndyyyy', 'Sumberasih');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_student`
--
ALTER TABLE `tb_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
