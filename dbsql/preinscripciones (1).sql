-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2022 a las 20:45:47
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `preinscripciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admitidos`
--

CREATE TABLE `admitidos` (
  `id` int(45) NOT NULL,
  `fecha` date NOT NULL,
  `cedula` varchar(8) DEFAULT NULL,
  `nombre1` varchar(45) DEFAULT NULL,
  `nombre2` varchar(45) DEFAULT NULL,
  `apellido1` varchar(45) DEFAULT NULL,
  `apellido2` varchar(45) DEFAULT NULL,
  `telefono` varchar(11) DEFAULT NULL,
  `direccion` varchar(300) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `carrera` varchar(70) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `titulo_check` varchar(4) DEFAULT NULL,
  `cedula_check` varchar(4) DEFAULT NULL,
  `notas_check` varchar(4) DEFAULT NULL,
  `rusnies_check` varchar(4) DEFAULT NULL,
  `observaciones` varchar(300) DEFAULT NULL,
  `verificado_por` varchar(45) DEFAULT NULL,
  `lapso` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspirante`
--

CREATE TABLE `aspirante` (
  `id` int(45) NOT NULL,
  `cedula` varchar(8) CHARACTER SET utf8 NOT NULL,
  `nombre1` varchar(45) CHARACTER SET utf8 NOT NULL,
  `nombre2` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `apellido1` varchar(45) CHARACTER SET utf8 NOT NULL,
  `apellido2` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `telefono` varchar(11) CHARACTER SET utf8 NOT NULL,
  `direccion` varchar(300) CHARACTER SET utf8 NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL,
  `planilla` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `fechanac` date NOT NULL,
  `carrera` varchar(70) CHARACTER SET utf8 NOT NULL,
  `rusnies` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `serial_titulo` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(10) CHARACTER SET utf8 NOT NULL,
  `lugarnac` varchar(90) CHARACTER SET utf8 DEFAULT NULL,
  `estadocivil` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `plantel` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `egreso` varchar(30) CHARACTER SET utf8 NOT NULL,
  `etnia` int(11) DEFAULT 0,
  `computer` varchar(45) CHARACTER SET utf8 DEFAULT NULL COMMENT 'si tiene computador con conexion a internet',
  `porc_pago` varchar(7) COLLATE utf8_spanish_ci DEFAULT NULL,
  `justporcenta` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `medio` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL,
  `trabaja` varchar(7) COLLATE utf8_spanish_ci DEFAULT NULL,
  `prioridad` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL,
  `modalidad` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL,
  `habilidad` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Guarda los datos del preuniversitario';

--
-- Volcado de datos para la tabla `aspirante`
--

INSERT INTO `aspirante` (`id`, `cedula`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `telefono`, `direccion`, `email`, `status`, `planilla`, `fechanac`, `carrera`, `rusnies`, `serial_titulo`, `sexo`, `lugarnac`, `estadocivil`, `plantel`, `egreso`, `etnia`, `computer`, `porc_pago`, `justporcenta`, `medio`, `trabaja`, `prioridad`, `modalidad`, `habilidad`) VALUES
(1, '12020454', 'Jose', NULL, 'Navas', 'Peraza', '04245273263', 'Pilas de Montesuma dos carrera 1 entre 2 y 3', 'jjosenavasp@gmail.com', 1, '00001', '1973-06-09', 'Educación integral', '', '123456789qq11111', 'masculino', 'Barquisimeto', 'casado', 'Mario Briceño', '1989', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '20350294', 'Carolina', NULL, 'Viscaya', NULL, '04245273263', 'Pilas de Montesuma dos carrera 1 entre 2 y 3', 'jjosenavasp@gmail.com', 1, '00002', '1985-01-29', 'Educación integral', '', 'aa123456789', 'femenino', 'Barquisimeto', 'casado', 'Simin Bolivar', '2009', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '33666999', 'Jesus', NULL, 'Navas', '', '04245273263', 'Pilas de Montesuma dos carrera 1 entre 2 y 3', 'jjosenavasp@gmail.com', 1, '00003', '2009-01-14', 'Educación preescolar', '', '1234569811', 'masculino', 'Barquisimeto', 'soltero', 'Simin Bolivar', '2021', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `nombre`) VALUES
(1, 'Educación integral'),
(2, 'Educación preescolar'),
(3, 'Educación especial'),
(4, 'Informática'),
(5, 'Mecánica'),
(6, 'Electrónica'),
(7, 'Electrotecnia'),
(8, 'Administración de empresas'),
(9, 'Contaduría');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `email`, `username`, `password`, `estado`, `id_rol`) VALUES
(2, 'Jose', 'Navas', 'jjosenavasp@gmail.com', 'jjosenavas', 'a5d4a27ec39b9a91a6c48c07546e9a00b71684ae', 1, 1),
(3, 'Milangel ', 'Freitez ', 'milangelfreitez@iujo.edu.ve', 'milangelfreitez', 'a5d4a27ec39b9a91a6c48c07546e9a00b71684ae', 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admitidos`
--
ALTER TABLE `admitidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `aspirante`
--
ALTER TABLE `aspirante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`),
  ADD KEY `fk_rol_idx` (`id_rol`),
  ADD KEY `fk_usuario_id_idx` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admitidos`
--
ALTER TABLE `admitidos`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `aspirante`
--
ALTER TABLE `aspirante`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `fk_rol_id` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_id` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
