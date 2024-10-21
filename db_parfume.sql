-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 11:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_parfume`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb user`
--

CREATE TABLE `tb user` (
  `username` varchar(200) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb user`
--

INSERT INTO `tb user` (`username`, `password`) VALUES
('admin1', '0'),
('admin1', '0'),
('admin 1', 'password12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_brand`
--

CREATE TABLE `tb_brand` (
  `id` int(11) NOT NULL,
  `nama_brand` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_brand`
--

INSERT INTO `tb_brand` (`id`, `nama_brand`) VALUES
(1, 'HMNS'),
(2, 'Saff&Co'),
(3, 'MyKonos'),
(4, 'BOHE Bali'),
(5, 'Boura'),
(6, 'Readyset'),
(7, 'Alchemist'),
(8, 'HINT'),
(9, 'ALT'),
(10, 'MINE');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `kategori`) VALUES
(1, 'Extrait de Parfume'),
(2, 'Eau de Parfume'),
(3, 'Eau de Toilette'),
(4, 'Body Mist');

-- --------------------------------------------------------

--
-- Table structure for table `tb_notes_parfume`
--

CREATE TABLE `tb_notes_parfume` (
  `id` int(11) NOT NULL,
  `nama_notes_parfume` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_notes_parfume`
--

INSERT INTO `tb_notes_parfume` (`id`, `nama_notes_parfume`) VALUES
(1, 'Musk'),
(2, 'Woods'),
(3, 'Spices'),
(4, 'Floral'),
(5, 'Fruity'),
(6, 'Gourmand');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(11) NOT NULL,
  `gambar_product` varchar(200) NOT NULL,
  `nama_product` varchar(200) NOT NULL,
  `kategori_product` int(11) NOT NULL,
  `brand_product` int(11) NOT NULL,
  `Notes_Parfume` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `gambar_product`, `nama_product`, `kategori_product`, `brand_product`, `Notes_Parfume`) VALUES
(1, 'Alchemist_Galleria.png', 'Galleria', 2, 7, 6),
(2, 'ALT_Moroccansunset.jpg', 'Moroccan Sunset', 1, 9, 3),
(3, 'BOHE_Scentofheaven.jpg', 'Scent of Heaven', 1, 4, 4),
(4, 'Boura_Noisy.jpg', 'Noisy Bathroom', 1, 5, 1),
(5, 'HINT_Identity.jpg', 'Identity', 2, 8, 2),
(6, 'HMNS_Alpha.jpg', 'Alpha', 1, 1, 5),
(7, 'Mine_Luciddreams.png', 'Lucid Dreams', 2, 10, 6),
(8, 'MyKonos_Aphrodite.jpg', 'Aphrodite', 1, 3, 1),
(9, 'ReadySet_windrises.jpg', 'Windrises', 3, 6, 4),
(10, 'SaffnCo_SOTB.jpg', 'S.O.T.B', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_review`
--

CREATE TABLE `tb_review` (
  `id` int(11) NOT NULL,
  `Review` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_review`
--

INSERT INTO `tb_review` (`id`, `Review`) VALUES
(1, 'lorem ipsum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_brand`
--
ALTER TABLE `tb_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_notes_parfume`
--
ALTER TABLE `tb_notes_parfume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_review`
--
ALTER TABLE `tb_review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_brand`
--
ALTER TABLE `tb_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_notes_parfume`
--
ALTER TABLE `tb_notes_parfume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_review`
--
ALTER TABLE `tb_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
