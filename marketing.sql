-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2017 a las 02:33:13
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `marketing`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `nombre_evento` varchar(30) NOT NULL,
  `fecInicio` date NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `titImagen` varchar(50) NOT NULL,
  `fileImagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `idImagen` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `ruta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`idImagen`, `titulo`, `ruta`) VALUES
(15, 'Mi imagen', 'Captura.PNG'),
(18, 'Mi archivo', 'Pago_por_la_pagina_web.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `appaterno` varchar(30) DEFAULT NULL,
  `apmaterno` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fecnac` date DEFAULT NULL,
  `sitReg` int(1) DEFAULT NULL COMMENT '1 - Activo, 0 - Inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `nombre`, `appaterno`, `apmaterno`, `email`, `fecnac`, `sitReg`) VALUES
(1, 'Jorge Ali', 'Maldonado', 'R.', 'ali@gmail.com', '2017-11-04', 1),
(4, 'Cesar', 'Guzman', 'S.', 'cesar@gmail.com', '2017-11-04', 1),
(5, 'Alan', 'Magaña', '', 'alan@gmail.com', '2017-11-04', 1),
(6, 'Eduardo', 'Langarica', 'E.', 'edu@gmail.com', '2017-11-04', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nomUsuario` varchar(20) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `idPersona` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nomUsuario`, `clave`, `idPersona`) VALUES
(1, 'ajorge', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(2, 'cguzman', '7c4a8d09ca3762af61e59520943dc26494f8941b', 4),
(3, 'amagaña', '7c4a8d09ca3762af61e59520943dc26494f8941b', 5),
(4, 'elangarica', '7c4a8d09ca3762af61e59520943dc26494f8941b', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`idImagen`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idPersona` (`idPersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `idImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
