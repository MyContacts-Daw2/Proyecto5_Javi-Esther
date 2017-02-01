-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2017 a las 17:29:56
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.37

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
  `per_id` int(2) NOT NULL,
  `per_nombre` varchar(15) CHARACTER SET latin1 NOT NULL,
  `per_apellido1` varchar(15) CHARACTER SET latin1 NOT NULL,
  `per_apellido2` varchar(15) CHARACTER SET latin1 NOT NULL,
  `per_mail` varchar(50) CHARACTER SET latin1 NOT NULL,
  `per_telf1` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `per_telf2` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `per_direc1` text COLLATE utf8_unicode_ci NOT NULL,
  `per_cp1` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `per_coord1` text COLLATE utf8_unicode_ci NOT NULL,
  `per_direc2` varchar(50) CHARACTER SET latin1 NOT NULL,
  `per_cp2` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `per_coord2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `per_coment` text COLLATE utf8_unicode_ci NOT NULL,
  `per_foto` varchar(25) CHARACTER SET latin1 NOT NULL,
  `usu_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_perfil`
--

INSERT INTO `tbl_perfil` (`per_id`, `per_nombre`, `per_apellido1`, `per_apellido2`, `per_mail`, `per_telf1`, `per_telf2`, `per_direc1`, `per_cp1`, `per_coord1`, `per_direc2`, `per_cp2`, `per_coord2`, `per_coment`, `per_foto`, `usu_id`) VALUES
(1, 'Daniel', 'Suarez', 'Benítezz', '', '659083317', '924845041', 'Calle Valle del Jerte 4, villanueva de la Serena', '', 'mis coord', 'Calle Valle del Jerte 4, villanueva de la Serena', '0', '', 'Vivo contigo.', 'numerodefoto', 1),
(6, 'Antonio', 'Vargas', 'Benítez', 'danvabe@hotmail.com', '659083317', '924845041', 'Avinguda de gaud? 42, Barcelona, Spain', '8025', '', 'Valle del Jerte 4, Barcelona', '8025', '', 'Vivo contigo', '', 1),
(19, 'Daniel', 'Benítez', 'Benítez', '', '659083317', '924845041', 'Plaza de Catalu?a, Barcelona, Spain', '6700', '', 'Valle del Jerte 4, Barcelona', '6700', '', 'Vivo contigo', '', 1),
(20, 'Esther', 'Vargas', 'Benítez', 'danvabe@hotmail.com', '659083317', '924845041', 'b', '6700', '41.40056986029896,2.160615921020508', 'Valle del Jerte 4, Barcelona', '6700', '', 'Vivo contigo', '', 2),
(29, 'Javi', '', '', '', '66', '0', '', '0', '', '', '0', '', '', '', 2),
(30, 'Javi', '', '', '', '66', '0', '', '0', '', '', '0', '', '', '', 2),
(56, 'Borrar42', '', '', '', '1', '0', '', '0', '', '', '0', '', '', '', 2),
(57, 'Daniel', 'Leandro', 'adsfasdf', 'danvabe@hotmail.com', '65656', '0', 'Carrer de la Diputaci?, 39I, 08015 Barcelona, Espa', '0', '', '', '0', '', '', '', 3),
(58, 'Daniel111', 'Dvv', 'adsfasdf', 'danvabe@hotmail.com', '65656', '0', 'Carrer de la Diputaci?, 39I, 08015 Barcelona, Espa', '0', '', '', '0', '', '', '', 3),
(59, 'Daniel1112', 'Dvv', 'adsfasdf', 'danvabe@hotmail.com', '65656', '0', 'Carrer de la Diputaci?, 39I, 08015 Barcelona, Espa', '0', '', '', '0', '', '', '', 3),
(60, 'Daniel', '', '', '', '6855522', '0', '', '0', '', '', '0', '', '', '', 3),
(61, 'Daniel', '', '', '', '969', '0', '', '0', '', '', '0', '', 'asdfds', '', 0),
(62, 'Daniel', '', '', '', '969', '0', '', '0', '', '', '0', '', 'asdfds', '', 0),
(64, 'Damian', 'Vargas', '', '', '123213', '', 'Carrer Jerusalem, 18, 08902 L''Hospitalet de Llobregat, Barcelona, España', '', '', '', '0', '', '', '', 1),
(65, 'Esther', 'Rovira', '', '', '6666', '', 'Carrer de Viladomat, 289, 08029 Barcelona, Espa?a', '', '', '', '0', '', '', '', 1),
(66, 'Daniel', 'Vargas', '', '', '659083317', '924845041', 'Plaza de Catalu?a, Barcelona, Spain', '6700', '', 'Valle del Jerte 4, Barcelona', '6700', '', 'Vivo contigo', '', 1),
(67, 'Daniel', 'Vargas', '', '', '659083317', '924845041', 'Plaza de Catalu?a, Barcelona, Spain', '6700', '', 'Valle del Jerte 4, Barcelona', '6700', '', 'Vivo contigo', '', 1),
(69, 'Luis', 'Suarez', '', '', '123213', '0', 'Carrer Jerusalem, 18, 08902 L''Hospitalet de Llobre', '0', '', '', '0', '', '', '', 1),
(70, 'Ana', 'Rodriguez', 'Luis', '', '6666', '', 'Passeig Bellvitge, 82-88, 08907 L''Hospitalet de Llobregat, Barcelona, España', '', '', '', '0', '', '', '', 1),
(72, 'Noelia', 'Vargas', '', '', '123213', '0', '', '0', '', '', '0', '', '', '', 1);

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
(1, 'david.marin', 'asdf', 'David', 'Marin', 'Salvador', 'calle horta ', '');

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
  MODIFY `per_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
