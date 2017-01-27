-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2017 a las 17:09:10
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_mycontacts`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_perfil`
--

CREATE TABLE `tbl_perfil` (
  `usu_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `per_id` int(2) NOT NULL,
  `per_nombre` varchar(15) CHARACTER SET latin1 NOT NULL,
  `per_apellido1` varchar(15) CHARACTER SET latin1 NOT NULL,
  `per_apellido2` varchar(15) CHARACTER SET latin1 NOT NULL,
  `per_mail` varchar(50) CHARACTER SET latin1 NOT NULL,
  `per_telf1` int(9) NOT NULL,
  `per_telf2` int(9) NOT NULL,
  `per_direc1` varchar(50) CHARACTER SET latin1 NOT NULL,
  `per_coord1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `per_direc2` varchar(50) CHARACTER SET latin1 NOT NULL,
  `per_coord2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `per_coment` int(25) NOT NULL,
  `per_foto` varchar(25) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_usuario` varchar(20) CHARACTER SET latin1 NOT NULL,
  `usu_password` varchar(15) CHARACTER SET latin1 NOT NULL,
  `usu_nombre` varchar(15) CHARACTER SET latin1 NOT NULL,
  `usu_apellido1` varchar(15) CHARACTER SET latin1 NOT NULL,
  `usu_apellido2` varchar(15) CHARACTER SET latin1 NOT NULL,
  `usu_direc1` varchar(50) CHARACTER SET latin1 NOT NULL,
  `usu_foto` varchar(25) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu_id`, `usu_usuario`, `usu_password`, `usu_nombre`, `usu_apellido1`, `usu_apellido2`, `usu_direc1`, `usu_foto`) VALUES
(0, 'david.marin', 'asdf', 'David', 'Marin', 'Salvador', 'calle horta ', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_perfil`
--
ALTER TABLE `tbl_perfil`
  ADD PRIMARY KEY (`per_id`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_perfil`
--
ALTER TABLE `tbl_perfil`
  MODIFY `per_id` int(2) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
