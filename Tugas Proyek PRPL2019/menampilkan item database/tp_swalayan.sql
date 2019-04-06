-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2019 at 11:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp_swalayan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_brng` varchar(5) NOT NULL,
  `nm_brng` varchar(30) NOT NULL,
  `hrg_brng` int(8) NOT NULL,
  `stok_brng` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_brng`, `nm_brng`, `hrg_brng`, `stok_brng`) VALUES
('s1', 'susu dancaow', 15000, 50),
('s2', 'susu bendera (kaleng)', 6000, 75),
('s3', 'susu anlene', 50000, 45),
('s4', 'susu anmum', 25000, 60),
('s5', 'susu beruang', 9500, 75),
('r1', 'sari roti', 3000, 20),
('r2', 'roti gandum', 5000, 35),
('r3', 'roti whole wheat', 8000, 32),
('m1', 'mi samyang', 8000, 45),
('m2', 'mi indomi', 7500, 46),
('m3', 'mi sarimi', 2500, 44),
('m4', 'mi dok dok', 8000, 54),
('my1', 'minyak goreng bimoli', 17400, 55),
('my2', 'minyak goreng sanco', 12000, 54),
('my3', 'minyak goreng sunkis', 15000, 65),
('my4', 'minyak goreng joss', 23000, 34);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
