-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-05-2021 a las 02:26:08
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `crud2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_producto`
--

CREATE TABLE IF NOT EXISTS `tm_producto` (
  `id_Prod` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Prod` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `fec_crea` datetime NOT NULL,
  `fec_mod` datetime DEFAULT NULL,
  `fec_eli` datetime DEFAULT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_Prod`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tm_producto`
--

INSERT INTO `tm_producto` (`id_Prod`, `Nom_Prod`, `fec_crea`, `fec_mod`, `fec_eli`, `estado`) VALUES
(1, 'Dulce de Membrillo x 0,250 Gr', '2021-05-29 15:17:27', NULL, NULL, 1),
(2, 'Dulce de Membrillo x 0,500 Gr', '2021-05-29 15:17:27', NULL, NULL, 1),
(3, 'Dulce de Membrillo x 1,00 Gr', '2021-05-29 00:00:00', NULL, NULL, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
