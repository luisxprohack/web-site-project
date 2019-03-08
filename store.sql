-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2019 a las 06:24:06
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `producto_id` int(11) NOT NULL,
  `producto_codigo` varchar(20) NOT NULL,
  `producto_categoria` varchar(20) NOT NULL,
  `producto_nombre` varchar(100) NOT NULL,
  `producto_descripcion` varchar(200) NOT NULL,
  `producto_precio` decimal(9,2) NOT NULL,
  `producto_foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`producto_id`, `producto_codigo`, `producto_categoria`, `producto_nombre`, `producto_descripcion`, `producto_precio`, `producto_foto`) VALUES
(1, 'PRO1', 'Laptops', 'MSI GF63 8RC', 'Intel core I5 8Th Gen \r\n8Gb Ram DDR4 2600 Mhz\r\nGeForce® GTX 1050 4GB DDR5', '4499.99', 'img/pro1.png'),
(2, 'PRO2 ', 'Mouse', 'Logitech G502', 'SENSOR ÓPTICO\r\n11 BOTONES\r\n1 ms VELOCIDAD DE RESPUESTA\r\n12000 DPI', '179.99', 'img/pro2.png'),
(3, 'PRO3', 'Audífonos', 'RAZER kraken.v2', 'Potencia de entrada: 30 mW (Max)\r\nDispositivos con conector de audio de\r\n3,5 mm\r\nRueda de control analógico de volumen', '337.74', 'img/pro3.png'),
(4, 'PRO4', 'Keyboard', 'BLACKWIDOW X', 'Interruptores mecánicos de Razer™ con fuerza de accionamiento de 50 g\r\nVida útil de 80 millones de pulsaciones\r\nRetroiluminación Chroma personalizable con 16,8 millones de opciones de color', '620.95', 'img/pro4.png'),
(5, 'PRO5', 'Tarjetas Graficas', 'GeForce GTX 1080 Ti GAMING x11G', '11GB GDDR5X\r\nNVIDIA® GeForce® GTX 1080 Ti\r\nPCI Express x16 3.0\r\n', '3639.00', 'img/pro5.png'),
(6, 'PRO6', 'Celulares', 'SAMSUNG GALAXY S7 EDGE', 'NO SE Q PONER :V', '2578.75', 'img/pro6.png'),
(7, 'PRO7', 'Tablet', 'ADVANCE BLACK', 'WRRFSARFWAS', '1499.00', 'img/pro7.png'),
(8, 'PRO7', 'Audífonos', 'Logitech 543', 'WRRFSARFWAS', '59.99', 'img/pro8.png'),
(9, 'PRO9', 'celulares', 'iphone', 'sadsada', '1000.00', 'img/PRO9.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `user` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `privilegios` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `direccion`, `dni`, `user`, `password`, `privilegios`) VALUES
(1, 'luis enrique', 'salazar rengifo', 'av. aviacion mz b lt 8', '75140174', 'luisxprohack', 'luisenrique0', 1),
(2, 'cristhian leandro', 'martinez bardales', 'jr. 7 de junio 424', '71020133', 'cristhian', '123456789', 1),
(3, 'regina', 'rojas', 'av. qteimporta 250', '75692761', 'reginix', 'regina2001', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`producto_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `producto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
