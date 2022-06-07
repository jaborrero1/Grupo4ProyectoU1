-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2022 a las 04:17:04
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

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
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
