-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2015 a las 20:45:53
-- Versión del servidor: 5.6.11
-- Versión de PHP: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inmobiliariapriego`
--
CREATE DATABASE IF NOT EXISTS `inmobiliariapriego` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `inmobiliariapriego`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmueble`
--

CREATE TABLE IF NOT EXISTS `inmueble` (
  `ref` int(11) NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `zona` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `planta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `calle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `poblacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `terraza` tinyint(1) DEFAULT NULL,
  `metrosterraza` decimal(10,2) DEFAULT NULL,
  `jardin` tinyint(1) DEFAULT NULL,
  `metrosjardin` decimal(10,2) DEFAULT NULL,
  `habitacionesdobles` int(11) DEFAULT NULL,
  `habitacionessimples` int(11) DEFAULT NULL,
  `banyos` int(11) DEFAULT NULL,
  `superficie` decimal(10,2) DEFAULT NULL,
  `ascensor` tinyint(1) DEFAULT NULL,
  `garaje` tinyint(1) DEFAULT NULL,
  `trastero` tinyint(1) DEFAULT NULL,
  `metrostrastero` decimal(10,2) DEFAULT NULL,
  `obranueva` tinyint(1) DEFAULT NULL,
  `operacion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `destacado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ref`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inmueble`
--

INSERT INTO `inmueble` (`ref`, `tipo`, `descripcion`, `zona`, `planta`, `calle`, `poblacion`, `provincia`, `pais`, `terraza`, `metrosterraza`, `jardin`, `metrosjardin`, `habitacionesdobles`, `habitacionessimples`, `banyos`, `superficie`, `ascensor`, `garaje`, `trastero`, `metrostrastero`, `obranueva`, `operacion`, `precio`, `img`, `destacado`) VALUES
(1, 'chalet', 'Chalet a estrenar con piscina sistema de videovigilancia. Totalmente domotizada.', 'Santa Rosa', '0', 'c/Pescadores n', 'Alcoi', '03', 'ESP', 1, '30.00', 1, '60.00', 3, 2, 3, '220.00', 0, 1, 1, '20.00', 0, 'venta', '345000.00', '1.jpg', 1),
(2, 'piso', 'Piso totalmente amueblado con fantásticas vistas. Muy espacioso y luminoso', 'Zona Nord', '4', 'c/Pintor Cabrera', 'Alcoi', '03', 'ESP', 0, '0.00', 0, '0.00', 3, 0, 2, '90.00', 1, 1, 1, '10.00', 0, 'alquiler', '450.00', '2.jpg', 1),
(3, 'piso', 'Piso totalmente reformado con fantásticas vistas. Muy espacioso y luminoso', 'Centro', '3', 'c/ San Lorenzo', 'Ibi', '03', 'ESP', 1, '5.00', 0, '0.00', 3, 0, 2, '90.00', 1, 1, 1, '10.00', 1, 'venta', '80000.00', '3.jpg', 1),
(4, 'piso', '', 'Batoi', '1', 'c/ Naranjos 14', 'Alcoi', '03', 'ESP', 1, '15.00', 0, '0.00', 3, 0, 2, '100.00', 0, 0, 0, '0.00', 0, 'venta', '75.00', '4.jpg', 1),
(5, 'atico', '', 'Alta', '8', 'c/ Músico Carbonell 34', 'Alcoi', '03', 'ESP', 1, '25.00', 0, '0.00', 2, 2, 2, '120.00', 1, 1, 1, '14.00', 0, 'alquicompra', '450.00', '5.jpg', 0),
(6, 'piso', 'Piso céntrico con balcón a una de las calles principales del centro de la ciudad. Muy espacioso y luminoso', 'Centro', '3', 'c/ San Nicolas', 'Alcoi', '03', 'ESP', 0, '0.00', 0, '0.00', 2, 1, 1, '90.00', 0, 0, 0, '0.00', 0, 'venta', '95000.00', '6.jpg', 1),
(7, 'oficina', '', 'Ensanche', '5', 'c/ Gilabert', 'Alcoi', '03', 'ESP', 0, '0.00', 0, '0.00', 0, 0, 2, '325.00', 1, 1, 0, '0.00', 0, 'alquiler', '635.00', '7.jpg', 0),
(8, 'cas_camp', '', 'Alcoi', '', 'Carretera Banyeres', 'Alcoi', '03', 'ESP', 1, '20.00', 1, '50.00', 3, 2, 3, '210.00', 0, 1, 1, '20.00', 0, 'venta', '215.00', '8.jpg', 0),
(9, 'piso', 'Piso nuevo a estrenar con calefacción y preinstalación de aire acondicionado.', 'Norte', '7', 'c/ San Juan Bosco', 'Alcoi', '03', 'ESP', 1, '8.00', 0, '0.00', 2, 1, 2, '90.00', 1, 1, 1, '10.00', 1, 'alquicompra', '400.00', '9.jpg', 1),
(10, 'piso', 'Piso con buena ubicación con ventanas climalit.', 'Centro', '2', 'c/ El Tap', 'Alcoi', '03', 'ESP', 0, '0.00', 0, '0.00', 1, 2, 1, '80.00', 0, 0, 0, '0.00', 0, 'alquiler', '350.00', '10.jpg', 0),
(11, 'nave', 'Nave Industrial con buen acceso desde la autopista A7.', 'Cocentaina', '', 'Pol. El Colmenar', 'Cocentaina', '03', 'ESP', 0, '0.00', 0, '0.00', 0, 0, 0, '2.50', 0, 0, 0, '0.00', 0, 'alquiler', '1.20', '11.jpg', 0),
(12, 'duplex', 'Duplex seminuevo recién reformado.', 'Ensanche', '5', 'Avda. La Alameda', 'Alcoi', '03', 'ESP', 1, '14.00', 0, '0.00', 3, 1, 2, '115.00', 1, 1, 1, '15.00', 0, 'venta', '120.00', '12.jpg', 0),
(13, 'local_comer', 'Local Comercial en fabulosa ubicación en zona comercial de Alcoi.', 'Ensanche', 'Baja', 'Avda. La Alameda', 'Alcoi', '03', 'ESP', 0, '0.00', 0, '0.00', 0, 0, 1, '350.00', 0, 0, 0, '0.00', 0, 'alquiler', '750.00', '13.jpg', 0),
(15, 'piso', 'Piso en buen estado', NULL, NULL, 'c/ Pintor Cabrera, nº 24', 'Alcoy', 'Alicante', 'ESP', 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, 0, NULL, '75000.00', NULL, 0),
(1111, 'chalet', 'algorr', 'Baradello', '0', 'c/ Baradello Gelat nº 56', 'Alcoy', 'Alicante', 'ESP', 1, '50.00', 1, '150.00', 2, 3, 2, '250.00', 1, 1, 1, '60.00', 1, 'venta', '200.00', '1111.jpg', 1),
(2222, 'piso', 'prueba de edición 47', NULL, NULL, 'c/ Baradello Gelat nº 56', 'Alcoy', 'Alicante', 'ESP', 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, 0, NULL, '85555.00', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`userid`, `password`, `username`, `salt`, `roles`, `active`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrador Inmuebles', '', 'ROLE_ADMIN', 1),
('prueba', 'pruebga', 'Usuario de Prueba', '', '', 1),
('prueba2', 'passprueba2', 'Prueba 2', '', '', 1),
('pruebareg', 'pruebareg', 'Prueba Registro', 'salt', 'ROLE_USER', 1),
('pruebarol', 'd57f98136ca127e49e83891bec6bf7cda0858daa', 'Prueba Rol', 'salt', 'ROLE_USER', 1),
('pruebarol2', 'pruebarol2', 'Prueba Rol 2', 'salt', 'ROLE_USER', 1),
('pruebarol3', 'pruebarol3', 'Prueba Rol 3', 'salt', 'ROLE_USER', 1),
('user4', 'passuser4', 'Usuario 4', '', '', 1),
('usuario3', '3d0a999730fd942f605233894b7177902ebd5097', 'Usuario 3 de prueba', '', 'ROLE_USER', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
