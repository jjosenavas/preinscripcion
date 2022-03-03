-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-09-2021 a las 00:41:03
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seminario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id`, `nombre`, `descripcion`, `estado`) VALUES
(1, 'Propedéutico', 'Introducción al seminario', 1),
(2, 'I Filosofía ', '1er año de la etapa discipular', 1),
(3, '', '2do año de la etapa discipular', 1),
(4, 'III Filosofía', '3er año de la etapa de discipular', 1),
(5, 'I Teología', '1er año de la etapa configurativa', 1),
(6, 'II Teología', '2do año de la etapa configurativa', 1),
(7, 'III Teología', '3er año de la etapa de configurativa', 1),
(8, 'IV Teología', '4to año de la etapa configurativa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `curso_id` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `descripcion`, `curso_id`, `estado`) VALUES
(1, 'Latín I', 'Idiomas', 2, 1),
(2, 'Historia Universal', 'Historia Universa', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias_curso`
--

CREATE TABLE `materias_curso` (
  `id` int(11) NOT NULL,
  `materia_id` int(11) DEFAULT NULL,
  `curso_maetrias_id` int(11) DEFAULT NULL,
  `profesor_id` int(11) DEFAULT NULL,
  `seminarista_id` int(11) DEFAULT NULL,
  `importe` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `nota` tinyint(1) DEFAULT NULL,
  `aprobacion` int(11) DEFAULT NULL,
  `tipo_documento_id` int(11) DEFAULT NULL,
  `seminarista_ci` varchar(20) DEFAULT NULL,
  `profesor_nota_id` int(11) DEFAULT NULL,
  `num_documento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `materias_id` int(11) DEFAULT NULL,
  `usuarios_id` int(11) DEFAULT NULL,
  `notas_id` int(11) DEFAULT NULL,
  `documento_id` int(11) DEFAULT NULL,
  `curso_profesor_id` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Estructura de tabla para la tabla `seminarista`
--

CREATE TABLE `seminarista` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `cedula` varchar(45) NOT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `estado_origen` varchar(45) DEFAULT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `diocesis` varchar(45) DEFAULT NULL,
  `nivel_academico` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `curso_seminarista_id` int(11) DEFAULT NULL,
  `notas_id` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seminarista`
--

INSERT INTO `seminarista` (`id`, `nombres`, `apellidos`, `fecha_nacimiento`, `cedula`, `sexo`, `email`, `telefono`, `pais`, `estado_origen`, `municipio`, `direccion`, `diocesis`, `nivel_academico`, `tipo`, `curso_seminarista_id`, `notas_id`, `estado`) VALUES
(1, 'Osmin Elieser', 'Principal Gonzalez', '1990-01-04', 'V-19263736', 'masculino', 'osminprincipal@gmail.com', '04143733869', 'Venezuela', 'Lara', 'Iribarren', 'Barrio 5 de julio calle 2 con carrera 1A', 'Arquidiocesis de Barquisimeto', 'Ing en informática', 'interno', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
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
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `email`, `username`, `password`, `estado`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`),
  ADD KEY `fk_materia_curso_idx` (`curso_id`);

--
-- Indices de la tabla `materias_curso`
--
ALTER TABLE `materias_curso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_venta_detalle_idx` (`curso_maetrias_id`),
  ADD KEY `fk_producto_detalle_idx` (`materia_id`),
  ADD KEY `fk_seminarista_detalle_idx` (`seminarista_id`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `num_documento_UNIQUE` (`num_documento`),
  ADD KEY `fk_tipo_documento_venta_idx` (`tipo_documento_id`),
  ADD KEY `fk_usuario_nota_idx` (`profesor_nota_id`),
  ADD KEY `fk_seminarista_nota_idx` (`seminarista_ci`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_detalle_idx` (`usuarios_id`),
  ADD KEY `fk_materias_detalle_idx` (`materias_id`),
  ADD KEY `fk_notas_detalle_idx` (`notas_id`),
  ADD KEY `documento_detalle_idx` (`documento_id`),
  ADD KEY `fk_curso_detalle_idx` (`curso_profesor_id`);

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
-- Indices de la tabla `seminarista`
--
ALTER TABLE `seminarista`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula_UNIQUE` (`cedula`),
  ADD KEY `notas_detalle_idx` (`notas_id`),
  ADD KEY `fk_curso_sem_id_idx` (`curso_seminarista_id`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

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
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT de la tabla `seminarista`
--
ALTER TABLE `seminarista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `fk_materia_curso` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `materias_curso`
--
ALTER TABLE `materias_curso`
  ADD CONSTRAINT `fk_curso_detalle` FOREIGN KEY (`curso_maetrias_id`) REFERENCES `notas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_materias_detalle` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_seminarista_detalle` FOREIGN KEY (`seminarista_id`) REFERENCES `seminarista` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `fk_profesor_nota` FOREIGN KEY (`profesor_nota_id`) REFERENCES `profesor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_seminarista_nota` FOREIGN KEY (`seminarista_ci`) REFERENCES `seminarista` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tipo_documento` FOREIGN KEY (`tipo_documento_id`) REFERENCES `tipo_documento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `fk_curso__profesor_detalle` FOREIGN KEY (`curso_profesor_id`) REFERENCES `curso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_documento_profesor_detalle` FOREIGN KEY (`documento_id`) REFERENCES `tipo_documento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_materias_profesor_detalle` FOREIGN KEY (`materias_id`) REFERENCES `materias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_notas_profesor_detalle` FOREIGN KEY (`notas_id`) REFERENCES `notas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_profesor_detalle` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `fk_rol_id` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_id` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `seminarista`
--
ALTER TABLE `seminarista`
  ADD CONSTRAINT `fk_curso_sem_id` FOREIGN KEY (`curso_seminarista_id`) REFERENCES `curso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_notas_detalle` FOREIGN KEY (`notas_id`) REFERENCES `notas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
