-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2020 a las 20:20:51
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `2021_pinzanoalex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_camareros`
--

CREATE TABLE `tbl_camareros` (
  `id_camarero` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Passwd` varchar(50) NOT NULL,
  `Status` enum('0','1') NOT NULL,
  `Profile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_camareros`
--

INSERT INTO `tbl_camareros` (`id_camarero`, `Name`, `Email`, `Passwd`, `Status`, `Profile`) VALUES
(1, 'Admin', 'admin@admin.com', '81dc9bdb52d04dc20036dbd8313ed055', '1', 3),
(2, 'Random', 'random@random.com', '81dc9bdb52d04dc20036dbd8313ed055', '1', 1),
(3, 'Alex', 'alex@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1', 3),
(4, 'Dani', 'dani@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1', 2),
(5, 'Carlos', 'carlos@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_incidencias`
--

CREATE TABLE `tbl_incidencias` (
  `id_inc` int(11) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `descrip` text NOT NULL,
  `dispo` enum('si','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_incidencias`
--

INSERT INTO `tbl_incidencias` (`id_inc`, `id_mesa`, `descrip`, `dispo`) VALUES
(1, 4, 'Esta mesa esta jodia', 'no'),
(2, 8, 'Esta mesa esta bien bellaca', 'si'),
(3, 3, 'Esta mesa esta para tirar', 'no'),
(4, 1, 'Esta mesa esta bien dura papi', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mesas`
--

CREATE TABLE `tbl_mesas` (
  `id_mesa` int(11) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `num_sillas_mesa` int(2) NOT NULL,
  `disponibilidad_mesa` enum('disponible','no disponible') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_mesas`
--

INSERT INTO `tbl_mesas` (`id_mesa`, `id_sala`, `num_sillas_mesa`, `disponibilidad_mesa`) VALUES
(1, 1, 2, 'disponible'),
(2, 1, 2, 'disponible'),
(3, 1, 4, 'disponible'),
(4, 1, 4, 'disponible'),
(5, 1, 6, 'disponible'),
(6, 1, 6, 'disponible'),
(7, 2, 2, 'disponible'),
(8, 2, 2, 'disponible'),
(9, 2, 4, 'disponible'),
(10, 2, 4, 'disponible'),
(11, 2, 6, 'disponible'),
(12, 2, 6, 'disponible'),
(13, 3, 2, 'disponible'),
(14, 3, 2, 'disponible'),
(15, 3, 4, 'disponible'),
(16, 3, 4, 'disponible'),
(17, 3, 6, 'disponible'),
(18, 3, 6, 'disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_perfil`
--

CREATE TABLE `tbl_perfil` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_perfil`
--

INSERT INTO `tbl_perfil` (`id`, `Name`) VALUES
(1, 'Camarero'),
(2, 'Mantenimiento'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reservas`
--

CREATE TABLE `tbl_reservas` (
  `id_reserva` int(11) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `dia_reserva` date NOT NULL,
  `hora_entrada_reserva` time NOT NULL,
  `hora_salida_reserva` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_salas`
--

CREATE TABLE `tbl_salas` (
  `id_sala` int(11) NOT NULL,
  `num_mesas` int(2) NOT NULL,
  `num_sillas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_salas`
--

INSERT INTO `tbl_salas` (`id_sala`, `num_mesas`, `num_sillas`) VALUES
(1, 6, 24),
(2, 6, 24),
(3, 6, 24);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_camareros`
--
ALTER TABLE `tbl_camareros`
  ADD PRIMARY KEY (`id_camarero`),
  ADD KEY `fk_id_perfil` (`Profile`);

--
-- Indices de la tabla `tbl_incidencias`
--
ALTER TABLE `tbl_incidencias`
  ADD PRIMARY KEY (`id_inc`),
  ADD KEY `fk_id_inc` (`id_mesa`);

--
-- Indices de la tabla `tbl_mesas`
--
ALTER TABLE `tbl_mesas`
  ADD PRIMARY KEY (`id_mesa`),
  ADD KEY `fk_id_sala` (`id_sala`);

--
-- Indices de la tabla `tbl_perfil`
--
ALTER TABLE `tbl_perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_reservas`
--
ALTER TABLE `tbl_reservas`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `fk_id_mesa` (`id_mesa`);

--
-- Indices de la tabla `tbl_salas`
--
ALTER TABLE `tbl_salas`
  ADD PRIMARY KEY (`id_sala`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_camareros`
--
ALTER TABLE `tbl_camareros`
  MODIFY `id_camarero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_incidencias`
--
ALTER TABLE `tbl_incidencias`
  MODIFY `id_inc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_mesas`
--
ALTER TABLE `tbl_mesas`
  MODIFY `id_mesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tbl_perfil`
--
ALTER TABLE `tbl_perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_reservas`
--
ALTER TABLE `tbl_reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_salas`
--
ALTER TABLE `tbl_salas`
  MODIFY `id_sala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_camareros`
--
ALTER TABLE `tbl_camareros`
  ADD CONSTRAINT `fk_id_perfil` FOREIGN KEY (`Profile`) REFERENCES `tbl_perfil` (`id`);

--
-- Filtros para la tabla `tbl_incidencias`
--
ALTER TABLE `tbl_incidencias`
  ADD CONSTRAINT `fk_id_inc` FOREIGN KEY (`id_mesa`) REFERENCES `tbl_mesas` (`id_mesa`);

--
-- Filtros para la tabla `tbl_mesas`
--
ALTER TABLE `tbl_mesas`
  ADD CONSTRAINT `fk_id_sala` FOREIGN KEY (`id_sala`) REFERENCES `tbl_salas` (`id_sala`);

--
-- Filtros para la tabla `tbl_reservas`
--
ALTER TABLE `tbl_reservas`
  ADD CONSTRAINT `fk_id_mesa` FOREIGN KEY (`id_mesa`) REFERENCES `tbl_mesas` (`id_mesa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
