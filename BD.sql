-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-11-2020 a las 16:17:16
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogoproducto`
--

DROP TABLE IF EXISTS `catalogoproducto`;
CREATE TABLE IF NOT EXISTS `catalogoproducto` (
  `IdProducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  PRIMARY KEY (`IdProducto`),
  KEY `idCategoria` (`idCategoria`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `catalogoproducto`
--

INSERT INTO `catalogoproducto` (`IdProducto`, `nombre`, `idCategoria`) VALUES
(1, 'cilantro', 4),
(2, 'Calabacin', 4),
(3, 'Tomate', 4),
(4, 'Manzana', 3),
(5, 'Pera', 3),
(6, 'Banana', 3),
(7, 'Naranja', 3),
(8, 'Mandarina', 3),
(9, 'Kiwi', 3),
(10, 'Papaya', 3),
(11, 'Guanabana', 3),
(12, 'Atun', 5),
(13, 'Higo', 3),
(23, 'Uvas', 3),
(16, 'Guayaba', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(11) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `categoria`) VALUES
(2, 'Ropa'),
(3, 'Frutas'),
(4, 'Verduras'),
(5, 'Enlatados'),
(6, 'Miscelanea');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadistica`
--

DROP TABLE IF EXISTS `estadistica`;
CREATE TABLE IF NOT EXISTS `estadistica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCategoria` varchar(100) NOT NULL,
  `TDA` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadistica`
--

INSERT INTO `estadistica` (`id`, `NombreCategoria`, `TDA`) VALUES
(1, 'Frutas', 1),
(2, 'Verduras', 2),
(3, 'Ropa', 0),
(4, 'Enlatados', 1),
(5, 'Miscelaneo', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `Num_Pedido` int(11) NOT NULL AUTO_INCREMENT,
  `Cantidad` int(11) NOT NULL,
  `NombreDonante` varchar(100) NOT NULL,
  `NombreBeneficiario` varchar(100) NOT NULL,
  `idProducto` int(11) NOT NULL,
  PRIMARY KEY (`Num_Pedido`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`Num_Pedido`, `Cantidad`, `NombreDonante`, `NombreBeneficiario`, `idProducto`) VALUES
(3, 1, 'Ortiz', 'Jesus Omar', 1),
(4, 3, 'walmart', 'Jesus Omar', 5),
(5, 12, 'walmart', 'Jesus Omar', 4),
(6, 2, 'Ortiz', 'Jesus Omar', 2),
(7, 2, 'Ortiz', 'Jesus Omar', 1),
(8, 3, 'Walmart', 'Caritas', 6),
(9, 4, 'Walmart', 'Caritas', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicarproducto`
--

DROP TABLE IF EXISTS `publicarproducto`;
CREATE TABLE IF NOT EXISTS `publicarproducto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idProducto` int(11) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `CantidadDonada` int(11) NOT NULL,
  `correoDonante` varchar(100) NOT NULL,
  `medida` int(11) NOT NULL,
  `Disponibilidad` varchar(20) NOT NULL,
  `DiasVencimiento` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idProducto` (`idProducto`),
  KEY `correoDonante` (`correoDonante`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicarproducto`
--

INSERT INTO `publicarproducto` (`id`, `idProducto`, `Descripcion`, `CantidadDonada`, `correoDonante`, `medida`, `Disponibilidad`, `DiasVencimiento`) VALUES
(10, 4, 'Yes', 2, 'Walmart@gmail.com', 2, 'Si', 4),
(11, 3, 'Yes', 2, 'Walmart@gmail.com', 2, 'Si', 4),
(13, 4, 'Fruta', 5, '', 2, 'si', 4),
(14, 4, 'Fruta', 4, 'Walmart@gmail.com', 2, 'Si', 4),
(12, 4, 'Yes', 2, 'mejia10@hotmail.com', 2, 'Si', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `NombreEmpresa` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Ciudad` varchar(100) NOT NULL,
  `Estado` varchar(100) NOT NULL,
  `CP` varchar(100) NOT NULL,
  `Telefono` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Celular` varchar(100) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `TipoCuenta` varchar(12) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`NombreEmpresa`, `Direccion`, `Ciudad`, `Estado`, `CP`, `Telefono`, `Email`, `Celular`, `Contrasena`, `TipoCuenta`) VALUES
('Walmart', 'calle 3ra', 'Delicias', 'Campeche', '33101', '45235', 'Walmart@gmail.com', '6391346517', 'Locowaterdrop123', 'Usuario'),
('Sams Club', 'Ave Tecnologico', 'Delciias', 'MÃ©xico', '33101', '45235', 'mejia10@hotmail.com', '342342', '12345', 'Usuario'),
('Caritas', 'calle 3ra', 'Delciias', 'Chihuahua', '33101', '45235', 'Caritas@gmail.com', '6391346517', 'Locowater123', 'Usuario'),
('Buen Samaritano', 'calle 3ra', 'Delicias', 'Aguascalientes', '33101', '45235', 'mejia10cadena@hotmail.com', '6391346517', '12', 'Usuario'),
('Ortiz', 'Ave Tecnologico', 'Delicias', 'Chihuahua', '33101', '45235', 'Admin@gmail.com', '6391346517', '1234', 'Admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
