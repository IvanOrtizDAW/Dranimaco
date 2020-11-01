-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-11-2020 a las 22:38:43
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
-- Base de datos: `usuarios`
--

CREATE DATABASE 'usuarios';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrados`
--

DROP TABLE IF EXISTS `registrados`;
CREATE TABLE IF NOT EXISTS `registrados` (
  `usuario_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usuario_nombre` varchar(20) NOT NULL,
  `usuario_pass` varchar(100) NOT NULL,
  `usuario_email` varchar(40) NOT NULL,
  `usuario_tel` int(10) NOT NULL,
  `usuario_fecha` datetime NOT NULL,
  `token` varchar(100) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registrados`
-- Insert into de ejemplo
--

INSERT INTO `registrados` (`usuario_id`, `usuario_nombre`, `usuario_pass`, `usuario_email`, `usuario_tel`, `usuario_fecha`, `token`) VALUES
(18, 'Hola', '$2y$10$ecOCHxlQt6bIFnM8JtgAteP44f/H9ZtMIWR3sFazhN8YSeJ.m8DJS', 'hola.23@hotmail.com', 813722034, '2020-10-20 20:02:14', '');
COMMIT;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
CREATE TABLE IF NOT EXISTS `mensajes` (
  `usuario_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usuario_nombre` varchar(20) NOT NULL,
  `usuario_email` varchar(40) NOT NULL,
  `usuario_tel` int(10) NOT NULL,
  `usuario_mensaje` varchar(1000) NOT NULL,
  `usuario_fecha` datetime NOT NULL,
  `usuario_contestacion` varchar(2) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensajes`
-- Insert into de ejemplo
--

INSERT INTO `mensajes` (`usuario_id`, `usuario_nombre`, `usuario_email`, `usuario_tel`, `usuario_mensaje`, `usuario_fecha`, `usuario_contestacion`) VALUES
(58, 'Juan Lago Rodriguez', 'juan.94@hotmail.com', 817314021, 'lorem ipsum', '2020-10-23 09:55:50', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;