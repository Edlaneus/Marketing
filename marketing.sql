-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2017 a las 01:14:36
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

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

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_evento`, `nombre_evento`, `fecInicio`, `descripcion`, `titImagen`, `fileImagen`) VALUES
(1, 'SI SE PUTO ', '2017-12-14', 'alan', 'alan', 'photo_2017-12-15_19-28-57.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `feed`
--

CREATE TABLE `feed` (
  `id` int(11) NOT NULL,
  `PageID` varchar(100) NOT NULL,
  `Date` datetime NOT NULL,
  `Post` text NOT NULL,
  `Picture` text NOT NULL,
  `Comments` varchar(10) NOT NULL,
  `Likes` varchar(10) NOT NULL,
  `Shares` varchar(10) NOT NULL,
  `PostID` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `feed`
--

INSERT INTO `feed` (`id`, `PageID`, `Date`, `Post`, `Picture`, `Comments`, `Likes`, `Shares`, `PostID`) VALUES
(89, '4', '2017-12-12 03:08:12', 'Fuerza G shared a link.', '', '0', '0', '', '344806002657871_353951331743338'),
(90, '4', '2017-12-12 01:31:56', 'Fuerza G added a new photo.', 'https://scontent.xx.fbcdn.net/v/t1.0-0/s130x130/24909738_353919171746554_6939244627963282141_n.jpg?oh=acf271abcd8e41e7902129349272c102&oe=5AB7728B', '0', '0', '', '344806002657871_353919171746554'),
(91, '4', '2017-12-11 09:15:40', 'Holap x4', '', '0', '0', '', '344806002657871_353642855107519'),
(92, '4', '2017-12-11 09:13:38', 'Holap x4', '', '0', '0', '', '344806002657871_353642528440885'),
(93, '4', '2017-12-11 09:08:05', 'Holap x3', 'https://scontent.xx.fbcdn.net/v/t1.0-0/s130x130/25289486_353641648440973_4502472650797628105_n.png?oh=f97acd899935867080260899ac28e28d&oe=5A8DB63D', '0', '0', '', '344806002657871_353641648440973'),
(94, '4', '2017-12-11 08:51:22', 'Mensaje', 'https://scontent.xx.fbcdn.net/v/t1.0-0/s130x130/24991116_353638208441317_6536064434097941961_n.jpg?oh=71754b6a5fa6efeb0be3bbd7be8f7bd3&oe=5AD1457A', '0', '0', '', '344806002657871_353638208441317'),
(95, '4', '2017-12-11 08:46:51', 'Holap x2', '', '0', '0', '', '344806002657871_353637391774732'),
(96, '4', '2017-12-11 08:43:44', 'Hellouyoutubex2', 'https://external.xx.fbcdn.net/safe_image.php?d=AQBwCSvRglY-iy7P&w=130&h=130&url=https%3A%2F%2Fpreviews.123rf.com%2Fimages%2Ftribalium123%2Ftribalium1231507%2Ftribalium123150700091%2F42087638-taco-comida-mexicana-Foto-de-archivo.jpg&cfs=1&_nc_hash=AQAOHwe5JJS08LKM', '0', '0', '', '344806002657871_353636651774806'),
(97, '4', '2017-12-11 08:39:41', 'Hellouyoutube', '', '0', '0', '', '344806002657871_353635968441541'),
(98, '4', '2017-12-11 08:32:55', 'Hello', '', '0', '0', '', '344806002657871_353634578441680'),
(99, '4', '2017-12-11 08:30:47', 'Holap x2', '', '0', '0', '', '344806002657871_353634128441725'),
(100, '4', '2017-12-11 08:29:00', 'Hello', 'https://scontent.xx.fbcdn.net/v/t1.0-0/s130x130/25289434_353633648441773_1740768158895096575_n.jpg?oh=c9214f2627a331e3f5aeec96cc5b4b52&oe=5AC8B105', '0', '0', '', '344806002657871_353633648441773'),
(86, '4', '2017-12-14 22:54:03', 'gg', '', '0', '0', '', '344806002657871_355114784960326'),
(87, '4', '2017-12-14 22:21:48', 'Holap x2', '', '0', '0', '', '344806002657871_355107198294418'),
(88, '4', '2017-12-14 22:21:10', 'Holap', 'https://external.xx.fbcdn.net/safe_image.php?d=AQCpBL9Uw2i-1YFZ&w=130&h=130&url=http%3A%2F%2Fres.cloudinary.com%2Fmuerto1211%2Fimage%2Fupload%2Fv1513051990%2Fsample.jpg&cfs=1&_nc_hash=AQA3Md8BFqbu1stx', '0', '0', '', '344806002657871_355107071627764'),
(84, '4', '2017-12-14 22:54:46', 'Holap x4', '', '0', '0', '', '344806002657871_355114924960312'),
(85, '4', '2017-12-14 22:54:13', 'holap', '', '0', '0', '', '344806002657871_355114824960322'),
(83, '4', '2017-12-14 22:57:16', 'Holap', 'https://external.xx.fbcdn.net/safe_image.php?d=AQA8Go_KReJCm0iz&w=130&h=130&url=https%3A%2F%2Fres.cloudinary.com%2Fmuerto1211%2Fimage%2Fupload%2Fv1513063364%2Fuzqoxcgywt4stlo4y2qd.jpg&cfs=1&_nc_hash=AQCczHiPAj2GCYRa', '20', '2', '', '344806002657871_355115304960274'),
(79, '4', '2017-12-15 01:27:59', 'Holap x81', '', '0', '0', '', '344806002657871_355153938289744'),
(80, '4', '2017-12-15 01:25:52', 'Holap x80', '', '1', '0', '', '344806002657871_355153368289801'),
(81, '4', '2017-12-15 01:21:07', 'Holap x79', '', '0', '0', '', '344806002657871_355151461623325'),
(82, '4', '2017-12-15 01:20:25', 'Holap x78', '', '0', '0', '', '344806002657871_355151324956672'),
(78, '4', '2017-12-15 01:46:02', 'Hey mama', 'https://external.xx.fbcdn.net/safe_image.php?d=AQBl9i7Wj9VgFNo2&w=130&h=130&url=https%3A%2F%2Fres.cloudinary.com%2Fmuerto1211%2Fimage%2Fupload%2Fv1513302287%2Fbpvhtxmttl3fvyhqeuqk.jpg&cfs=1&_nc_hash=AQCkAS4xxl1wk-m-', '0', '0', '', '344806002657871_355157861622685'),
(77, '4', '2017-12-15 02:10:03', 'Hey mama', 'https://external.xx.fbcdn.net/safe_image.php?d=AQBl9i7Wj9VgFNo2&w=130&h=130&url=https%3A%2F%2Fres.cloudinary.com%2Fmuerto1211%2Fimage%2Fupload%2Fv1513302287%2Fbpvhtxmttl3fvyhqeuqk.jpg&cfs=1&_nc_hash=AQCkAS4xxl1wk-m-', '0', '0', '', '344806002657871_355163434955461'),
(76, '4', '2017-12-15 02:29:26', 'Hey you', 'https://external.xx.fbcdn.net/safe_image.php?d=AQBuDSUWNXSWdSwh&w=130&h=130&url=https%3A%2F%2Fres.cloudinary.com%2Fmuerto1211%2Fimage%2Fupload%2Fv1513302273%2Frzvyx7f5pjyaljxlclaz.jpg&cfs=1&_nc_hash=AQBFB3RbyT6oIolF', '0', '0', '', '344806002657871_355167131621758');

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
-- Estructura de tabla para la tabla `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `PageID` varchar(100) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Likes` varchar(100) NOT NULL,
  `Talking` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pages`
--

INSERT INTO `pages` (`id`, `PageID`, `Name`, `Likes`, `Talking`) VALUES
(1, '123603761060511', 'JosÃ© Ignacio Peralta SÃ¡nchez', '77741', '5833'),
(2, '915520981811232', 'Coca-Cola', '106829126', '335761'),
(3, '1382613062045649', 'Facebook Mexico', '13469', '63'),
(4, '344806002657871', 'Fuerza G', '6', '6');

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
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo` int(11) NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `privilegios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo`, `descripcion`, `privilegios`) VALUES
(1, 'Administrador', 1),
(2, 'Generador contenido', 2),
(3, 'Community manager', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nomUsuario` varchar(20) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `idPersona` int(11) DEFAULT NULL,
  `idrol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nomUsuario`, `clave`, `idPersona`, `idrol`) VALUES
(1, 'ajorge', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 2),
(2, 'cguzman', '7c4a8d09ca3762af61e59520943dc26494f8941b', 4, 2),
(3, 'amagaña', '7c4a8d09ca3762af61e59520943dc26494f8941b', 5, 1),
(4, 'elangarica', '7c4a8d09ca3762af61e59520943dc26494f8941b', 6, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PostID` (`PostID`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`idImagen`);

--
-- Indices de la tabla `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idPersona` (`idPersona`),
  ADD KEY `idrol` (`idrol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `idImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
