-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 08:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyecto`
--

-- --------------------------------------------------------

--
-- Table structure for table `datos`
--

CREATE TABLE `datos` (
  `datos_id` int(3) NOT NULL,
  `datos_nombre` varchar(60) NOT NULL DEFAULT 'null',
  `datos_edad` int(3) NOT NULL DEFAULT 0,
  `datos_domicilio` varchar(80) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datos`
--

INSERT INTO `datos` (`datos_id`, `datos_nombre`, `datos_edad`, `datos_domicilio`) VALUES
(1, 'David GV', 26, 'Ecatepec'),
(2, 'Fernanda GR', 27, 'Aragon CDMX'),
(3, 'PEDRO ANTONIO', 28, 'Mexico'),
(4, 'Daniel', 28, 'Tultepec, Estado de Mxico'),
(5, 'Karen  VH', 29, 'San Juan, Acolman Estado de MExico'),
(6, 'Margarita  Ventura', 49, 'Miami Florida, Estados Unidos'),
(7, 'Daniela', 25, 'Tlatelolco, Cuidad de Mexico'),
(8, 'Abigail Arellano', 26, 'Jardines de Morelos'),
(9, 'Sergio Camacho', 53, 'San juan Solis Hidalgo'),
(10, 'Elizabeth Flores Guzman', 23, 'El salado, Acolman Esatdo de Mexico Ecatepec');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarios_id` int(3) NOT NULL,
  `usuarios_usuario` varchar(60) NOT NULL,
  `usuarios_contra` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usuarios_id`, `usuarios_usuario`, `usuarios_contra`) VALUES
(1, 'DavidG', 'cd027069371cdb4f80c68dcfb37e6f'),
(2, 'XavierS', 'c525e4cf653707dc26a5dc2db870a8'),
(3, 'JulioG', 'b482e2fc1d191a6803c2ac9dec0cfc'),
(4, 'Admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`datos_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarios_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datos`
--
ALTER TABLE `datos`
  MODIFY `datos_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarios_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
