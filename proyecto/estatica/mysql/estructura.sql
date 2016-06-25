-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2016 a las 20:05:47
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `incommong`
--
CREATE DATABASE IF NOT EXISTS `incommong` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `incommong`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

DROP TABLE IF EXISTS `compras`;
CREATE TABLE `compras` (
  `idProducto` int(10) NOT NULL,
  `CIFOng` varchar(9) NOT NULL,
  `DNIUsuario` varchar(9) NOT NULL,
  `numProductos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donaciones`
--

DROP TABLE IF EXISTS `donaciones`;
CREATE TABLE `donaciones` (
  `donaciones_id` bigint(20) NOT NULL,
  `DNIUsuario` varchar(9) NOT NULL,
  `idProyecto` int(10) NOT NULL,
  `donacion` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

DROP TABLE IF EXISTS `noticia`;
CREATE TABLE `noticia` (
  `id` int(10) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `tipo` enum('primaria','secundaria','terciaria','otra') NOT NULL,
  `descripcionCorta` text,
  `descripcionLarga` text NOT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ong`
--

DROP TABLE IF EXISTS `ong`;
CREATE TABLE `ong` (
  `CIF` varchar(9) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `idProducto` int(10) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcionCorta` mediumtext NOT NULL,
  `descripcionLarga` longtext NOT NULL,
  `CIFOng` varchar(9) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

DROP TABLE IF EXISTS `proyecto`;
CREATE TABLE `proyecto` (
  `idProyecto` int(10) NOT NULL,
  `CIFOng` varchar(9) NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `dineroNecesario` int(11) NOT NULL,
  `dineroAcumulado` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(50) NOT NULL,
  `descripcionCorta` mediumtext NOT NULL,
  `descripcionLarga` longtext NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `numVoluntarios` int(11) NOT NULL,
  `fechaFin` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `DNI` varchar(9) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `cp` int(10) DEFAULT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `avatar` tinytext,
  `sexo` enum('Masculino','Femenino','','') NOT NULL,
  `telefono` int(11) NOT NULL,
  `tipo` enum('Admin','User','','') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntarios`
--

DROP TABLE IF EXISTS `voluntarios`;
CREATE TABLE `voluntarios` (
  `idVoluntariado` int(10) NOT NULL,
  `idProyecto` int(10) NOT NULL,
  `DNIUsuario` varchar(9) NOT NULL,
  `dia` date NOT NULL,
  `horaEntrada` int(4) NOT NULL,
  `horaSalida` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idProducto`,`CIFOng`,`DNIUsuario`),
  ADD KEY `DNIUsuario` (`DNIUsuario`),
  ADD KEY `CIFOng` (`CIFOng`);

--
-- Indices de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD PRIMARY KEY (`donaciones_id`),
  ADD KEY `idProyecto` (`idProyecto`),
  ADD KEY `DNIUsuario` (`DNIUsuario`,`idProyecto`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `ong`
--
ALTER TABLE `ong`
  ADD PRIMARY KEY (`CIF`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `CIF` (`CIF`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD UNIQUE KEY `idProducto` (`idProducto`,`CIFOng`),
  ADD KEY `CIFOng` (`CIFOng`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`idProyecto`),
  ADD UNIQUE KEY `idProyecto` (`idProyecto`,`CIFOng`),
  ADD KEY `CIFOng` (`CIFOng`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`DNI`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `DNI` (`DNI`);

--
-- Indices de la tabla `voluntarios`
--
ALTER TABLE `voluntarios`
  ADD PRIMARY KEY (`idVoluntariado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  MODIFY `donaciones_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `idProyecto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `voluntarios`
--
ALTER TABLE `voluntarios`
  MODIFY `idVoluntariado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`DNIUsuario`) REFERENCES `usuario` (`DNI`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`CIFOng`) REFERENCES `ong` (`CIF`),
  ADD CONSTRAINT `compras_ibfk_3` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`);

--
-- Filtros para la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD CONSTRAINT `Donaciones_ibfk_1` FOREIGN KEY (`DNIUsuario`) REFERENCES `usuario` (`DNI`),
  ADD CONSTRAINT `Donaciones_ibfk_2` FOREIGN KEY (`idProyecto`) REFERENCES `proyecto` (`idProyecto`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`CIFOng`) REFERENCES `ong` (`CIF`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`CIFOng`) REFERENCES `ong` (`CIF`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
