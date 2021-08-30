-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2017 a las 18:41:56
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reclamo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `id` int(4) NOT NULL,
  `cuit` varchar(10) NOT NULL,
  `empresa` varchar(20) NOT NULL,
  `domicilio` varchar(30) NOT NULL,
  `domicilio2` varchar(25) NOT NULL,
  `nfantasia` varchar(30) NOT NULL,
  `rubro` varchar(20) NOT NULL,
  `expe` varchar(7) NOT NULL,
  `acta` varchar(7) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `hora` varchar(5) NOT NULL,
  `fechat` varchar(10) NOT NULL,
  `horat` varchar(5) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `persona` varchar(20) NOT NULL,
  `dni` int(10) NOT NULL,
  `domicilio3` varchar(30) NOT NULL,
  `nacion` varchar(20) NOT NULL,
  `delega` varchar(25) NOT NULL,
  `sueldo1` varchar(10) NOT NULL,
  `sueldo2` varchar(10) NOT NULL,
  `recibo1` varchar(10) NOT NULL,
  `recibo2` varchar(10) NOT NULL,
  `art` varchar(6) NOT NULL,
  `cctn` varchar(10) NOT NULL,
  `ropa` varchar(10) NOT NULL,
  `apor1` varchar(10) NOT NULL,
  `apor2` varchar(10) NOT NULL,
  `gre1` varchar(10) NOT NULL,
  `gre2` varchar(10) NOT NULL,
  `chora1` varchar(10) NOT NULL,
  `chora2` varchar(10) NOT NULL,
  `franco1` varchar(10) NOT NULL,
  `franco2` varchar(10) NOT NULL,
  `seguro1` varchar(10) NOT NULL,
  `seguro2` varchar(10) NOT NULL,
  `emp` varchar(4) NOT NULL,
  `texto` varchar(60) NOT NULL,
  `usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id`, `cuit`, `empresa`, `domicilio`, `domicilio2`, `nfantasia`, `rubro`, `expe`, `acta`, `fecha`, `hora`, `fechat`, `horat`, `cargo`, `persona`, `dni`, `domicilio3`, `nacion`, `delega`, `sueldo1`, `sueldo2`, `recibo1`, `recibo2`, `art`, `cctn`, `ropa`, `apor1`, `apor2`, `gre1`, `gre2`, `chora1`, `chora2`, `franco1`, `franco2`, `seguro1`, `seguro2`, `emp`, `texto`, `usuario`) VALUES
(67, '65456', 'mau', 'san martin', 'SAN MARTIN 555', 'CONSORCIOm', 'MECANICA', '5555', '3333', '25/06/2017', '10:12', '14/06/2017', '08:00', 'JEFE', 'JOSE PENAS', 22321321, 'CASTRO BARROS M1 C18', 'Alemania', 'Sede Central', '12/01/2017', '31/08/2017', '01/06/2017', '23/06/2017', '555', '1234', '2017', '09/09/2017', '15/09/2017', '17/09/2017', '22/09/2017', '09/09/2017', '08/09/2017', '15/09/2017', '08/09/2017', '15/09/2017', '09/09/2017', '11', ' jalkjasdjlaf asgf 4564132Ã±', ''),
(99, '65456', 'a', 'san martin', 'no tiene', 'El Emporio', 'Mantenimiento', '7896', '10', '15/09/2017', '10:10', '', '08:00', 'Gerente', 'Pedro Enriquez', 1063506610, 'Tierra del fuego M1 C7', 'Argentina', 'Sede Central', '16/09/2017', '22/09/2017', '16/09/2017', '21/09/2017', '15', '156', '2015', '22/09/2017', '16/09/2017', '17/09/2017', '21/09/2017', '23/09/2017', '14/09/2017', '15/09/2017', '21/09/2017', '15/09/2017', '14/09/2017', '12', ' 99', ''),
(102, '65456', 'a', 'san martin', '', '', '', '0', '0', '', '', '', '08:00', '', '', 0, '', 'Seleccione...', 'Sede Central', '15/09/2017', '20/09/2017', '09/09/2017', '27/09/2017', '0', '', '', '15/09/2017', '21/09/2017', '10/09/2017', '13/09/2017', '02/09/2017', '20/09/2017', '24/09/2017', '13/09/2017', '09/09/2017', '20/09/2017', '456', '12 lkjlkjlk', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `id` int(7) NOT NULL,
  `persona` varchar(20) NOT NULL,
  `oficina` varchar(30) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `detalle` varchar(100) NOT NULL,
  `fechat` varchar(10) NOT NULL,
  `horat` varchar(10) NOT NULL,
  `terminado` varchar(10) NOT NULL,
  `personal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabajo`
--

INSERT INTO `trabajo` (`id`, `persona`, `oficina`, `fecha`, `hora`, `detalle`, `fechat`, `horat`, `terminado`, `personal`) VALUES
(1, 'hola', 'mundo', '11/10/2017', '10:10', 'asdgsadfsa', '11/10/2017', '10:10', 'Pendiente', 'Jose Luis'),
(2, 'yo', 'computos', '04/10/2017', '1010', 'hola mundo', '13/10/2017', '10:10', 'SI', 'Mauricio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(130) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `last_session` datetime DEFAULT NULL,
  `activacion` int(11) NOT NULL DEFAULT '0',
  `token` varchar(40) NOT NULL,
  `token_password` varchar(100) DEFAULT NULL,
  `password_request` int(11) DEFAULT '0',
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `correo`, `last_session`, `activacion`, `token`, `token_password`, `password_request`, `id_tipo`) VALUES
(7, 'Mauricio', '$2y$10$lDnrZXUbKCH91.TrGYJ5cOqd5H0eMsT5p6t6oiL/cP1IFM2L5GZQi', 'm', 'maury32_12@hotmail.com', '2017-10-11 12:14:03', 1, '27d1523ee632a2af705a5ef448104319', '', 0, 2),
(8, 'mundo', '$2y$10$RgZgywPewslJZFsJdlXideLbPz/9R5wwYT4dOE3YUTXGoAex.ikBu', 'hola', 'malbornoz@mendoza.gov.ar', NULL, 0, '67059aee4f9ecbc614f80095bc1da533', NULL, 0, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
