-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2025 at 02:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(10) NOT NULL,
  `nama_pelanggan` varchar(15) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `notelp_pelanggan` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `notelp_pelanggan`) VALUES
('PL30302', 'Robi', 'Jl.Riyadi', '827105'),
('PL30303', 'Ara', 'Jl.Sudirman', '831935'),
('PL30304', 'Lala', 'Jl.Katamso', '825137'),
('PL30305', 'Yazi', 'Jl.Juanda', '813031'),
('PL30306', 'Fiko', 'Jl.Muwardi', '820315'),
('PL30307', 'Ahmad', 'Jl.Rajiman', '815021'),
('PL30308', 'Afif', 'Jl.Yossudarso', '805013'),
('PL30309', 'Hamid', 'Jl.Sugiono', '821727'),
('PL30310', 'Imam', 'Jl.Kolonel', '8532610'),
('', '==zaraaa==', 'aduh mana ya bingung', '998877'),
('', 'ziriiii', 'idii minii yii binging', '99988'),
('', 'zuruuu', 'uduu munuu yuu bunguung', '8765');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
