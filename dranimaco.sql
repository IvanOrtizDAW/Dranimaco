-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-11-2020 a las 23:12:15
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dranimaco`
--

DROP DATABASE IF EXISTS `mensajes`;
CREATE DATABASE IF NOT EXISTS `mensajes`;
 
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
CREATE TABLE IF NOT EXISTS `mensajes` (
  `mensaje_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usuario_id` int(255) UNSIGNED NOT NULL,
  `usuario_nombre` varchar(20) NOT NULL,
  `usuario_email` varchar(40) NOT NULL,
  `usuario_tel` int(10) NOT NULL,
  `usuario_mensaje` varchar(1000) NOT NULL,
  `usuario_fecha` datetime NOT NULL,
  `usuario_contestacion` varchar(2) NOT NULL,
  PRIMARY KEY (`mensaje_id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`mensaje_id`, `usuario_id`, `usuario_nombre`, `usuario_email`, `usuario_tel`, `usuario_mensaje`, `usuario_fecha`, `usuario_contestacion`) VALUES
(78, 29, 'Adios', 'cosotas@hotmail.com', 517413034, 'asdfzxcvqwert', '2020-11-14 22:58:40', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrados`
--

DROP TABLE IF EXISTS `registrados`;
CREATE TABLE IF NOT EXISTS `registrados` (
  `usuario_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usuario_nombre` varchar(20) NOT NULL,
  `usuario_pass` varchar(100) NOT NULL,
  `usuario_email` varchar(40) NOT NULL,
  `usuario_tel` int(10) NOT NULL,
  `usuario_fecha` datetime NOT NULL,
  `token` varchar(100) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registrados`
--

INSERT INTO `registrados` (`usuario_id`, `usuario_nombre`, `usuario_pass`, `usuario_email`, `usuario_tel`, `usuario_fecha`, `token`) VALUES
(29, 'Adios', '$2y$10$nveEjEbUHDLH6nEGx9FVMevviX1Ws3hrdMSzbm6eIOJCZbXMqxzgO', 'cosotas@hotmail.com', 517413034, '2020-11-14 22:58:03', ' ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencias`
--

DROP TABLE IF EXISTS `sugerencias`;
CREATE TABLE IF NOT EXISTS `sugerencias` (
  `sugerencia_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usuario_id` int(255) UNSIGNED NOT NULL,
  `usuario_nombre` varchar(20) NOT NULL,
  `usuario_email` varchar(40) NOT NULL,
  `usuario_tel` int(10) NOT NULL,
  `usuario_sugerencia` varchar(1000) NOT NULL,
  `usuario_fecha` datetime NOT NULL,
  `usuario_contestacion` varchar(2) NOT NULL,
  PRIMARY KEY (`sugerencia_id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sugerencias`
--

INSERT INTO `sugerencias` (`sugerencia_id`, `usuario_id`, `usuario_nombre`, `usuario_email`, `usuario_tel`, `usuario_sugerencia`, `usuario_fecha`, `usuario_contestacion`) VALUES
(2, 29, 'Adios', 'cosotas@hotmail.com', 517413034, '0987654321', '2020-11-14 23:05:04', 'no');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `mensajes_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `registrados` (`usuario_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  ADD CONSTRAINT `sugerencias_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `registrados` (`usuario_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
