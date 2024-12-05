-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2021 a las 04:43:26
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_cinepolis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(11) NOT NULL,
  `documento_usuario` double NOT NULL,
  `tipo_documento` varchar(16) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombre_pelicula` varchar(100) NOT NULL,
  `tiempo_prestamo` int(11) NOT NULL,
  `valor_alquiler` double NOT NULL,
  `foto_usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id_reserva`, `documento_usuario`, `tipo_documento`, `nombre_usuario`, `telefono`, `direccion`, `email`, `nombre_pelicula`, `tiempo_prestamo`, `valor_alquiler`, `foto_usuario`) VALUES
(1, 1003720047, 'cedula', 'Ana Milena Corcho Madrid', 2147483647, 'Cra 4 #22-28 piso 2', 'anamadrid@gmail.com', 'Raya', 5, 2500, 'perfil/foto3.jpg'),
(2, 10897890, 'cedula', 'José Alejandro Alvarez Perez', 2147483647, 'Cra 4 #22-28 piso 2', 'jalejo1234@yahoo.com', 'Raya', 15, 7500, 'perfil/foto1.jpg'),
(3, 1003678934, 'cedula', 'Ian David Meriño González', 2147483647, 'Cra 4 #22-28 piso 2', 'inad@gmail.com', 'Raya', 15, 7500, 'perfil/foto1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `documento` double NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` double NOT NULL,
  `rol` int(11) NOT NULL,
  `clave` varchar(16) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `foto` varchar(1000) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`documento`, `nombre`, `correo`, `telefono`, `rol`, `clave`, `foto`) VALUES
(1234, 'Nana Martinez', 'nana@cinema.com', 3222132187, 1, '1234', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
