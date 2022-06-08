-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2022 a las 03:05:31
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `products`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_codigo` int(11) NOT NULL,
  `nombreconta` varchar(50) NOT NULL,
  `apellidoconta` varchar(50) NOT NULL,
  `cedulaconta` varchar(10) NOT NULL,
  `direccionconta` varchar(100) NOT NULL,
  `emailconta` varchar(60) NOT NULL,
  `provinciaconta` varchar(50) NOT NULL,
  `ciudadconta` varchar(50) NOT NULL,
  `asuntoconta` varchar(150) NOT NULL,
  `comentarioasunto` varchar(300) NOT NULL,
  `telefonoconta` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_codigo`, `nombreconta`, `apellidoconta`, `cedulaconta`, `direccionconta`, `emailconta`, `provinciaconta`, `ciudadconta`, `asuntoconta`, `comentarioasunto`, `telefonoconta`) VALUES
(1, 'Jenniffer', 'Gomez', '0923668768', 'coop.ciudad nueva', 'jenniffer.jg59@gmail.com', 'Santo Domingo', 'Santo Domingo', 'reclamo', 'Mi dispositivo está en mal estado', ''),
(2, 'Jenniffer', 'Tuarez', '0923668768', 'coop. ciudad nueva', 'jenniffer.jg59@gmail.com', 'Quito', 'Quito', 'Reclamo', 'Mi dispositivo está en mal estado', '0988044963'),
(3, 'Jenniffer', 'Tuarez', '0923668768', 'coop. ciudad nueva', 'jenniffer.jg59@gmail.com', 'Quito', 'Quito', 'Reclamo', 'Mi dispositivo está en mal estado', '0988044963');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
