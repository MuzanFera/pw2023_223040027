-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2023 at 11:40 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemerintah bandung`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_logreg`
--

CREATE TABLE `tb_logreg` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(15) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_logreg`
--

INSERT INTO `tb_logreg` (`id`, `username`, `email`, `password`, `gambar`) VALUES
(13, 'Muhammad Fauzan Febrian Nugraha', 'fauzan.223040027@mail.unpas.ac.id', '123', 'WIN_20230520_12_06_11_Pro.jpg'),
(14, 'Muhammad', 'muhammad@gmail.com', '123', 'Victoria Ivanovna.jpg'),
(15, 'Fauzan', 'fauzan@gmail.com', '123', 'femi.jpeg'),
(16, 'Febrian', 'febrian@gmail.com', '123', 'default.png'),
(17, 'Nugraha', 'nugraha@gmail.com', '123', 'ysiv.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_logreg`
--
ALTER TABLE `tb_logreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_logreg`
--
ALTER TABLE `tb_logreg`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
