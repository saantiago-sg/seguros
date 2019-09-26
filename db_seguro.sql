-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2019 a las 21:08:25
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_seguro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precio`
--

CREATE TABLE `precio` (
  `id` int(11) NOT NULL,
  `precio_final` varchar(11) NOT NULL,
  `pagado` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `precio`
--

INSERT INTO `precio` (`id`, `precio_final`, `pagado`) VALUES
(1, '1', 0),
(2, '1', 0),
(3, '0', 0),
(4, '0', 0),
(5, '0', 0),
(6, '0', 0),
(7, '1', 0),
(8, '1', 0),
(9, '1', 0),
(10, '0', 0),
(11, '1', 0),
(12, 'sa', 1),
(13, 'pagooo', 1),
(14, '', 0),
(15, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id_cliente` int(11) NOT NULL,
  `nombreApellido` varchar(50) NOT NULL,
  `cuota` varchar(50) NOT NULL,
  `cuotaCapital` varchar(50) NOT NULL,
  `vencimiento` varchar(50) NOT NULL,
  `fechaPago` varchar(50) NOT NULL,
  `interes` varchar(50) NOT NULL,
  `pagado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id_cliente`, `nombreApellido`, `cuota`, `cuotaCapital`, `vencimiento`, `fechaPago`, `interes`, `pagado`) VALUES
(10, 'hector', '2', '3', '3', '3', '3', 0),
(11, 'pagados', '2', '2', '2', '22', '2', 1),
(12, 'hector gauna', '4', '44', '4', '44', '4', 1),
(13, 'sss', 's', 's', 's', 's', 's', 1),
(14, 'analia', '29', '29', '29', '29', '29', 1),
(15, 'graciela', '200', '20', '201212', '20', '200000', 0),
(16, '', '', '', '', '', '', 0),
(17, '', '', '', '', '', '', 0),
(18, 'sAAAANTIAGO', '2', '2', '2', '2', '2', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `precio`
--
ALTER TABLE `precio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `precio`
--
ALTER TABLE `precio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
