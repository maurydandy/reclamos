-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2017 a las 16:52:26
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
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
  `nombre` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id`, `cuit`, `empresa`, `domicilio`, `domicilio2`, `nfantasia`, `rubro`, `expe`, `acta`, `fecha`, `hora`, `fechat`, `horat`, `cargo`, `persona`, `dni`, `domicilio3`, `nacion`, `delega`, `sueldo1`, `sueldo2`, `recibo1`, `recibo2`, `art`, `cctn`, `ropa`, `apor1`, `apor2`, `gre1`, `gre2`, `chora1`, `chora2`, `franco1`, `franco2`, `seguro1`, `seguro2`, `emp`, `texto`, `nombre`) VALUES
(67, '65456', 'SUPER VEA', 'san martin', 'SAN MARTIN 555', 'SUPER VEA', 'MECANICA', '5555', '3333', '25/06/2017', '10:12', '14/06/2017', '08:00', 'JEFE', 'JOSE PENAS', 22321321, 'CASTRO BARROS M1 C18', 'Alemania', 'Sede Central', '12/01/2017', '31/08/2017', '01/06/2017', '23/06/2017', '555', '1234', '2017', '09/09/2017', '15/09/2017', '17/09/2017', '22/09/2017', '09/09/2017', '08/09/2017', '15/09/2017', '08/09/2017', '15/09/2017', '09/09/2017', '11', ' jalkjasdjlaf asgf 4564132Ã±', ''),
(99, '65456', 'TADICOR', 'san martin', 'no tiene', 'TADIDOR', 'Mantenimiento', '7896', '10', '15/09/2017', '10:10', '', '08:00', 'Gerente', 'Pedro Enriquez', 1063506610, 'Tierra del fuego M1 C7', 'Argentina', 'Sede Central', '16/09/2017', '22/09/2017', '16/09/2017', '21/09/2017', '15', '156', '2015', '22/09/2017', '16/09/2017', '17/09/2017', '21/09/2017', '23/09/2017', '14/09/2017', '15/09/2017', '21/09/2017', '15/09/2017', '14/09/2017', '12', ' 99', ''),
(102, '65456', 'JUMBO', 'san martin', '', 'JUMBO', '', '0', '0', '', '', '', '08:00', '', '', 0, '', 'Seleccione...', 'Sede Central', '15/09/2017', '20/09/2017', '09/09/2017', '27/09/2017', '0', '', '', '15/09/2017', '21/09/2017', '10/09/2017', '13/09/2017', '02/09/2017', '20/09/2017', '24/09/2017', '13/09/2017', '09/09/2017', '20/09/2017', '456', '12 lkjlkjlk', ''),
(103, '132015', 'HIPER LIBERTAD', 'J.V.GONZALES', '', 'HIPER LIBERTAD', '', '', '', '21/10/2017', '', '', '08:00', '', '', 0, '', 'Seleccione... ', 'Sede Central', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas_medicas`
--

CREATE TABLE `consultas_medicas` (
  `id_consulta` bigint(20) UNSIGNED NOT NULL,
  `fecha_consulta` date NOT NULL,
  `id_paciente` int(5) NOT NULL,
  `id_medico` int(5) NOT NULL,
  `consultorio` varchar(20) NOT NULL,
  `diagnostico` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consultas_medicas`
--

INSERT INTO `consultas_medicas` (`id_consulta`, `fecha_consulta`, `id_paciente`, `id_medico`, `consultorio`, `diagnostico`) VALUES
(1, '2010-04-14', 1, 3, 'B-05', 'DIARREA CRONICA'),
(2, '2010-05-11', 1, 1, 'A-09', 'REVISION MENSUAL'),
(3, '2010-06-17', 2, 2, 'B-06', 'dfsdf fgdfg'),
(4, '2010-07-18', 1, 3, 'D90', 'dfsdf fgdfg'),
(5, '2010-08-19', 1, 2, 'Z11', 'dfsdf fgdfg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `id_medico` bigint(20) UNSIGNED NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `nombre_medico` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`id_medico`, `cedula`, `nombre_medico`) VALUES
(1, 'DJ123456', 'Dr. Damesio John'),
(2, 'DD654123', 'Dr. Dianey Martinez'),
(3, 'QG5MX4567', 'Dr. John Cena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` bigint(20) UNSIGNED NOT NULL,
  `clave` varchar(10) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `apellido_paterno` varchar(80) NOT NULL,
  `apellido_materno` varchar(80) NOT NULL,
  `sexo` varchar(2) NOT NULL,
  `domicilio` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `clave`, `nombre`, `apellido_paterno`, `apellido_materno`, `sexo`, `domicilio`) VALUES
(1, 'JULL2010AB', 'Juan', 'Lopez', 'Lopez', 'M', 'av. del lago #240'),
(2, 'OLPP2010AB', 'Olivia', 'Perez', 'Perez', 'F', 'Av. las rosas sin numero.');

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
(7, 'm', '$2y$10$lDnrZXUbKCH91.TrGYJ5cOqd5H0eMsT5p6t6oiL/cP1IFM2L5GZQi', 'm', 'maury32_12@hotmail.com', '2017-10-04 08:49:00', 1, '27d1523ee632a2af705a5ef448104319', '', 0, 2),
(8, 'mundo', '$2y$10$RgZgywPewslJZFsJdlXideLbPz/9R5wwYT4dOE3YUTXGoAex.ikBu', 'hola', 'malbornoz@mendoza.gov.ar', NULL, 0, '67059aee4f9ecbc614f80095bc1da533', NULL, 0, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `consultas_medicas`
--
ALTER TABLE `consultas_medicas`
  ADD PRIMARY KEY (`id_consulta`),
  ADD UNIQUE KEY `id_consulta` (`id_consulta`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id_medico`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT de la tabla `consultas_medicas`
--
ALTER TABLE `consultas_medicas`
  MODIFY `id_consulta` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id_medico` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
