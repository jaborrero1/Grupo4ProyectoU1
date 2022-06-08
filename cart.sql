-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2022 a las 14:23:12
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cart`
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL,
  `num_tarjeta` int(20) NOT NULL,
  `ven_tarjeta` date NOT NULL,
  `cod_tarjeta` varchar(3) NOT NULL,
  `país_pago` varchar(20) NOT NULL,
  `calle_prin` varchar(50) NOT NULL,
  `calle_sec` varchar(50) NOT NULL,
  `cod_post` varchar(5) NOT NULL,
  `telefono_pago` varchar(10) NOT NULL,
  `correo_pag` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id_pago`, `num_tarjeta`, `ven_tarjeta`, `cod_tarjeta`, `país_pago`, `calle_prin`, `calle_sec`, `cod_post`, `telefono_pago`, `correo_pag`) VALUES
(1, 7415296, '2026-02-02', '023', 'ecuador', 'Cuenca', 'Sola', '236', '032159484', 'khodihd@espe.edu.ec');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `image` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `product_name`, `image`, `price`) VALUES
(1, 'Indurama Cocina de 30\'\' Turín 5 Quemadores', 'images/cosina.jpg', 515),
(2, 'Indurama Microondas / MWI-20BL / 700W', 'images/micro.jpg', 140),
(3, 'Indurama Televisor Smart TV de 65\" / 65TISG3AUHD / UHD', 'images/TV.jpg', 890),
(4, 'Samsung Lavadora Secadora Inverter WD11T704DBX/ED 24 lb y 13 lb', 'images/Lav.jpg', 879),
(5, 'Samsung Celular / A12 AZUL / 64 GB', 'images/celular.jpg', 219),
(6, 'LG Refrigeradora LS66MXN 22 Pies Cúbicos', 'images/nevera.jpg', 1.799),
(7, 'JBL Audífonos TUNE 215 TRULY WIRELESS Blanco', 'images/Au.jpg', 93),
(8, 'Continental ventilador / OUIF-45-3-1 / 3 velocidades', 'images/Ai.jpg', 65.2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_codigo`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
