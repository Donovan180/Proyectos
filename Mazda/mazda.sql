-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-01-2020 a las 17:57:48
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mazda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automovil`
--

CREATE TABLE `automovil` (
  `id_automovil` int(10) NOT NULL,
  `num_serie` int(11) NOT NULL,
  `num_motor` int(11) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `color` varchar(10) NOT NULL,
  `version` int(11) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `id_servicio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `automovil`
--

INSERT INTO `automovil` (`id_automovil`, `num_serie`, `num_motor`, `marca`, `modelo`, `color`, `version`, `id_cliente`, `id_servicio`) VALUES
(1, 63506053, 987456, 'Mazda', 'Mazda CX-3', 'Verde', 9874, 1234567, 456321);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido_p` varchar(20) NOT NULL,
  `apellido_m` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `edad` int(3) NOT NULL,
  `direccion` varchar(70) NOT NULL,
  `garantia` date NOT NULL,
  `id_mecanico` int(10) NOT NULL,
  `id_automovil` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido_p`, `apellido_m`, `correo`, `telefono`, `edad`, `direccion`, `garantia`, `id_mecanico`, `id_automovil`) VALUES
(7545853, 'MARTIN', 'RODRIGUEZ', 'JUAREZ', 'm.rodriguez@gmail.com', '2147483647', 46, 'Carranza 3', '2020-01-08', 642593, 98785996),
(7545854, 'OSCAR', 'RODRIGUEZ', 'FERNANDEZ', 'oscar.ro@gmail.com', '0', 0, 'Carranza 3', '2020-01-06', 642593, 98785565),
(7545855, 'BELINDA', 'ALMAGUER', 'JUAREZ', '', '0', 0, '', '0000-00-00', 642593, 98785928),
(7545856, 'MARIA', 'FERNANDEZ', 'RODRIGUEZ', 'm.fernandez@gmail.com', '0', 0, '', '0000-00-00', 642542, 98785787),
(7545857, 'ALFONSO', 'RODRIGUEZ', 'GALINDO', 'a.galindo@gmail.com', '2147483647', 54, 'Carranza 3', '0000-00-00', 642515, 98785224);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerente`
--

CREATE TABLE `gerente` (
  `id_gerente` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido_p` varchar(20) NOT NULL,
  `apellido_m` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `id_jefe_taller` int(10) NOT NULL,
  `id_servicio` int(10) NOT NULL,
  `tipo_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gerente`
--

INSERT INTO `gerente` (`id_gerente`, `nombre`, `apellido_p`, `apellido_m`, `correo`, `pass`, `telefono`, `id_jefe_taller`, `id_servicio`, `tipo_user`) VALUES
(42541236, 'JUAN CARLOS', 'SANCHEZ', 'GUTIERREZ', 'juan.sanchez@hotmail.com', '1234', '2147483647', 124614641, 995746, 'Gerente'),
(42541239, 'Carlos', 'Montes', 'Luna', 'carlos123@gmail.com', '12345', '2147483647', 74123, 4563212, 'Gerente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_taller`
--

CREATE TABLE `jefe_taller` (
  `id_jefe_taller` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido_p` varchar(20) NOT NULL,
  `apellido_m` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `id_gerente` int(10) NOT NULL,
  `id_mecanico` int(10) NOT NULL,
  `tipo_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jefe_taller`
--

INSERT INTO `jefe_taller` (`id_jefe_taller`, `nombre`, `apellido_p`, `apellido_m`, `correo`, `pass`, `telefono`, `id_gerente`, `id_mecanico`, `tipo_user`) VALUES
(124614641, 'JOSE JUAN', 'HERNANDEZ', 'ROMERO', 'gotiko.lda@yahoo.com', '12345', '5586987412', 42541236, 642542, 'Jefe de Taller'),
(124614643, 'Abraham', 'Guerra', 'Luna', 'abraham.g@gmail.com', '1234', '5574869545', 6548, 7531, 'Jefe de Taller'),
(124614644, 'Angel', 'Lopez', 'Aguilar', 'a.lopez@gmail.com', '1234', '5578964215', 6548, 7531, 'Jefe de Taller');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanico`
--

CREATE TABLE `mecanico` (
  `id_mecanico` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido_p` varchar(20) NOT NULL,
  `apellido_m` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `id_jefe_taller` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `tipo_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mecanico`
--

INSERT INTO `mecanico` (`id_mecanico`, `nombre`, `apellido_p`, `apellido_m`, `correo`, `pass`, `telefono`, `id_jefe_taller`, `id_cliente`, `tipo_user`) VALUES
(642515, 'ALEJANDRA', 'SUAREZ', 'MALDONADO', 'alehermosa@otmail.co', '1234', '5584796352', 124614641, 0, ''),
(642542, 'CARLOS', 'SANCHEZ', 'ALTAMIRANO', 'altamir54256@hotmail', '1234', '2147483647', 124614641, 0, ''),
(642593, 'MARIO', 'AGUILAR', 'FERNANDEZ', 'maders982@outlook.co', '1234', '2147483647', 124614641, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanico_actividad`
--

CREATE TABLE `mecanico_actividad` (
  `id_actividad` int(11) NOT NULL,
  `nombre_jefe` varchar(20) NOT NULL,
  `apellido_jefe` varchar(20) NOT NULL,
  `tarea` varchar(100) NOT NULL,
  `nombre_mec` varchar(20) NOT NULL,
  `apellido_mec` varchar(20) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mecanico_actividad`
--

INSERT INTO `mecanico_actividad` (`id_actividad`, `nombre_jefe`, `apellido_jefe`, `tarea`, `nombre_mec`, `apellido_mec`, `estado`, `fecha`) VALUES
(11, 'JOSE JUAN', 'HERNANDEZ', 'Chequeo general del carro ya que lleva tiempo sin ser usado ', 'CARLOS', 'SANCHEZ', 'Finalizado', '2020-01-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(10) NOT NULL,
  `tipo_servicio` varchar(20) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `fecha_salida` date NOT NULL,
  `factura` int(11) NOT NULL,
  `garantia` int(11) NOT NULL,
  `id_gerente` int(10) NOT NULL,
  `id_automovil` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servicio`, `tipo_servicio`, `descripcion`, `fecha_entrega`, `fecha_salida`, `factura`, `garantia`, `id_gerente`, `id_automovil`) VALUES
(1, 'Cambio de aceite', 'Derrama aceite', '2020-01-01', '2020-01-04', 78945, 65413, 6548, 789654),
(3, 'Chequeo General', 'Chequeo general del ', '2020-01-07', '2020-01-16', 78945, 65413, 6548, 789654);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `automovil`
--
ALTER TABLE `automovil`
  ADD PRIMARY KEY (`id_automovil`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `gerente`
--
ALTER TABLE `gerente`
  ADD PRIMARY KEY (`id_gerente`);

--
-- Indices de la tabla `jefe_taller`
--
ALTER TABLE `jefe_taller`
  ADD PRIMARY KEY (`id_jefe_taller`);

--
-- Indices de la tabla `mecanico`
--
ALTER TABLE `mecanico`
  ADD PRIMARY KEY (`id_mecanico`);

--
-- Indices de la tabla `mecanico_actividad`
--
ALTER TABLE `mecanico_actividad`
  ADD PRIMARY KEY (`id_actividad`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `automovil`
--
ALTER TABLE `automovil`
  MODIFY `id_automovil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7545858;

--
-- AUTO_INCREMENT de la tabla `gerente`
--
ALTER TABLE `gerente`
  MODIFY `id_gerente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42541240;

--
-- AUTO_INCREMENT de la tabla `jefe_taller`
--
ALTER TABLE `jefe_taller`
  MODIFY `id_jefe_taller` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124614645;

--
-- AUTO_INCREMENT de la tabla `mecanico`
--
ALTER TABLE `mecanico`
  MODIFY `id_mecanico` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=642594;

--
-- AUTO_INCREMENT de la tabla `mecanico_actividad`
--
ALTER TABLE `mecanico_actividad`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
