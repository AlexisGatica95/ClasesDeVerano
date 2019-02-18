-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2019 a las 04:09:44
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clase10`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales1`
--

CREATE TABLE `editoriales1` (
  `IDeditorial` int(44) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `editoriales1`
--

INSERT INTO `editoriales1` (`IDeditorial`, `nombre`, `direccion`, `telefono`) VALUES
(1, 'Paidos', 'av. libertador 234 ', '2345-2231'),
(2, 'Salamanca', 'Av. Directorio 343', '5445-2635'),
(3, 'Alfaguara', 'Medrano 951', '2645-4538'),
(4, 'Planeta', 'Liniers 1234', '1233-6666'),
(5, 'Terra', 'Fournier 600', '333-5567'),
(6, 'Perritis', 'Cabildo 4000', '5453-6787'),
(7, 'Joseluis', 'Santa FE 3400', '3990-3030');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `idlibro` int(44) NOT NULL,
  `autor` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `precio` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `IDeditorial` int(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`idlibro`, `autor`, `titulo`, `precio`, `IDeditorial`) VALUES
(1, 'Rowilng', 'HP 1', '1237', 2),
(2, 'Rowilng', 'HP 2', '554', 2),
(3, 'King', 'La Niebla', '35', 3),
(4, 'Conny Mendez', 'Metafisica 1', '333', 4),
(5, 'Conny Mendez', 'Metafisica 2', '444', 4),
(6, 'Conny Mendez', 'Metafisica 3', '555', 4),
(7, 'Flor Soares', 'Collage de hojas', '1000', 5),
(8, 'Jazmin Pastela', 'Rosas Rosas', '3000', 5),
(9, 'Ciro', 'Gua gua gua', '4000', 6),
(10, 'Lulu', 'Sad dog', '444', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `editoriales1`
--
ALTER TABLE `editoriales1`
  ADD PRIMARY KEY (`IDeditorial`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idlibro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `editoriales1`
--
ALTER TABLE `editoriales1`
  MODIFY `IDeditorial` int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idlibro` int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
