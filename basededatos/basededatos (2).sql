-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2023 a las 17:46:57
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basededatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `admin_id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `puesto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`admin_id`, `usuario_id`, `puesto`) VALUES
(3, 7, 'Puesto predeterminado'),
(5, 3, 'Puesto predeterminado'),
(7, 15, 'Puesto predeterminado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `alumno_id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `carrera` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`alumno_id`, `usuario_id`, `carrera`) VALUES
(2, 12, 'mecanica'),
(6, 14, 'Carrera predeterminada'),
(12, 18, 'Carrera predeterminada'),
(13, 12, 'Carrera predeterminada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_maestros`
--

CREATE TABLE `asignacion_maestros` (
  `asignacion_id` int(11) NOT NULL,
  `maestro_id` int(11) DEFAULT NULL,
  `materia_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignacion_maestros`
--

INSERT INTO `asignacion_maestros` (`asignacion_id`, `maestro_id`, `materia_id`) VALUES
(1, 4, 2),
(2, 2, 3),
(4, 5, 2),
(5, 3, 5),
(6, 4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `img`
--

INSERT INTO `img` (`id`, `nombre`) VALUES
(4, '/src/img/que-es-ser-un-estudiante-universitario.jpeg'),
(5, '/src/img/retrato-joven-estudiante-observando-mientras-dos-hombres-usan-computadora-portatil-segundo-plano-cesped_650366-3900.avif'),
(6, '/src/img/tiempo-libre-estudiantes-ritmo-vida-campus-bachillerato-cinco-estudiantes-amigables-estan-caminando.jpg'),
(7, '/src/img/universidad-como-ingresar-peru.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_materias`
--

CREATE TABLE `inscripcion_materias` (
  `inscripcion_id` int(11) NOT NULL,
  `alumno_id` int(11) DEFAULT NULL,
  `materia_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inscripcion_materias`
--

INSERT INTO `inscripcion_materias` (`inscripcion_id`, `alumno_id`, `materia_id`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `maestro_id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `especialidad` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`maestro_id`, `usuario_id`, `especialidad`) VALUES
(1, 8, 'medicina'),
(2, 11, 'ciencias'),
(3, 2, 'biologia'),
(4, 1, 'matematicas'),
(5, 8, 'medicina'),
(10, 11, 'Especialidad predeterminada'),
(11, 1, 'Especialidad predeterminada'),
(12, 9, 'Especialidad predeterminada'),
(13, 8, 'Especialidad predeterminada'),
(14, 8, 'Especialidad predeterminada'),
(15, 8, 'Especialidad predeterminada'),
(16, 8, 'Especialidad predeterminada'),
(17, 8, 'Especialidad predeterminada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `materia_id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `codigo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`materia_id`, `nombre`, `codigo`) VALUES
(1, 'Matemáticas', 'MATH101'),
(2, 'Historia', 'HIST101'),
(3, 'Inglés', 'ENG101'),
(4, 'Física', 'PHYS101'),
(5, 'Psicología', 'PSYCH101');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salones`
--

CREATE TABLE `salones` (
  `salon_id` int(11) NOT NULL,
  `numero_salon` varchar(10) DEFAULT NULL,
  `capacidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(100) NOT NULL,
  `fec_nac` varchar(100) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `dni` int(100) NOT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `rol` enum('maestro','alumno','administrador') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `nombre`, `Apellido`, `fec_nac`, `direccion`, `dni`, `correo`, `contrasena`, `rol`) VALUES
(1, 'sabastian', 'perez', '2001-01-31', 'un cerro uan mas lejos', 0, 'sebastian@sebastian', 'sebastian', 'maestro'),
(2, 'maestro', '', '0', '0', 0, 'maestro@maestro', '$2y$10$DGc6Ob/v2VF3bVle9fZIhumbWwsRSt49n3976GVPA0SKqkAdKYkf2', 'maestro'),
(3, 'admin', '', '0', '0', 0, 'admin@admin', '$2y$10$KFMk26tPtLcpTiIWF2OCR.KWseEgSgosZILrkBRWdMYKQbUUMEXR6', 'administrador'),
(7, 'el jefe', '', '0', '0', 0, 'eljefe@eljefe', '$2y$10$PbZXvnsDvvDRcB3/PrxNAOAJfLH/U5/c6odvZv1Q0Cl/VpR/vDdI.', 'administrador'),
(8, 'luis', 'lurdes', '2023-10-06', 'ewf', 0, 'luis@luis', '$2y$10$P0GXXSJ7mZGoLQeFnj4Uu.XCVYTFQWgsZE3xTQoikRzNRSWIR4WwW', 'maestro'),
(9, 'sabastian', 'perez', '2001-01-31', 'un cerro uan mas lejos', 0, 'sebastian@sebastian', '$2y$10$7gfm9Pckxu3aZEfSiOwn4OhJIVB5xTYsQNJRsPOKBR6xwY6sANXjK', 'maestro'),
(11, 'pepe', 'juares', '2023-10-19', 'pituco tuco', 0, 'edwar@edwar', '$2y$10$NaZNnD2s633S8IYnpU8wquCN/H0j9DaqegMAwMSuSZRorXXQSb01W', 'maestro'),
(12, 'edwar', 'rejas', '2023-10-11', 'pituco tuco', 0, 'alumno@alumno', '$2y$10$Vq/1BgTXJ4imYGEQ.QDxwe1nUN.t8Q67UPUAaUJqcnPRESdHHR0U2', 'alumno'),
(14, 'marjorie', 'neira', '10/10/2004', 'av 23 cerca al farmacia', 423848235, 'marjorie@marjorie', '$2y$10$iG90cv7/Kv/EO.NQulyB.eldiBJXCMy0XQK47xc8K3aGpczAyvAsK', 'alumno'),
(15, 'mario', 'juacni', '2023-10-24', 'dsfsd', 73336151, 'mario@mario', '$2y$10$tc9rC0dnCH/KRH1C5UKEyehjbJZPaV5Ud3BJOxq8JqJanIVzxhBoa', 'administrador'),
(18, 'edwar', 'rejas', '2023-11-01', 'pituco tuco', 73336151, 'test@test', '$2y$10$N07G3cz8XpuVYDmtr7Yy9eJgWVg0hR0Bvfh5F41Ra.JbdNCW7jvYe', 'alumno');

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `ActualizarRoles` AFTER UPDATE ON `usuarios` FOR EACH ROW BEGIN
  IF NEW.rol = 'maestro' THEN
    INSERT INTO maestros (usuario_id, especialidad)
    VALUES (NEW.usuario_id, 'Especialidad predeterminada');
    DELETE FROM alumnos WHERE usuario_id = NEW.usuario_id;
    DELETE FROM administradores WHERE usuario_id = NEW.usuario_id;
  ELSEIF NEW.rol = 'alumno' THEN
    INSERT INTO alumnos (usuario_id, carrera)
    VALUES (NEW.usuario_id, 'Carrera predeterminada');
    DELETE FROM maestros WHERE usuario_id = NEW.usuario_id;
    DELETE FROM administradores WHERE usuario_id = NEW.usuario_id;
  ELSEIF NEW.rol = 'administrador' THEN
    INSERT INTO administradores (usuario_id, puesto)
    VALUES (NEW.usuario_id, 'Puesto predeterminado');
    DELETE FROM maestros WHERE usuario_id = NEW.usuario_id;
    DELETE FROM alumnos WHERE usuario_id = NEW.usuario_id;
  END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `InsertarEnTablasDeRoles` AFTER INSERT ON `usuarios` FOR EACH ROW BEGIN
  IF NEW.rol = 'maestro' THEN
    INSERT INTO maestros (usuario_id, especialidad)
    VALUES (NEW.usuario_id, 'Especialidad predeterminada');
  ELSEIF NEW.rol = 'alumno' THEN
    INSERT INTO alumnos (usuario_id, carrera)
    VALUES (NEW.usuario_id, 'Carrera predeterminada');
  ELSEIF NEW.rol = 'administrador' THEN
    INSERT INTO administradores (usuario_id, puesto)
    VALUES (NEW.usuario_id, 'Puesto predeterminado');
  END IF;
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`alumno_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `asignacion_maestros`
--
ALTER TABLE `asignacion_maestros`
  ADD PRIMARY KEY (`asignacion_id`),
  ADD KEY `asignacion_maestros_ibfk_2` (`materia_id`),
  ADD KEY `asignacion_maestros_FK` (`maestro_id`);

--
-- Indices de la tabla `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscripcion_materias`
--
ALTER TABLE `inscripcion_materias`
  ADD PRIMARY KEY (`inscripcion_id`),
  ADD KEY `inscripcion_materias_ibfk_2` (`materia_id`),
  ADD KEY `inscripcion_materias_ibfk_3` (`alumno_id`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`maestro_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`materia_id`);

--
-- Indices de la tabla `salones`
--
ALTER TABLE `salones`
  ADD PRIMARY KEY (`salon_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `alumno_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
  MODIFY `maestro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `administradores_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignacion_maestros`
--
ALTER TABLE `asignacion_maestros`
  ADD CONSTRAINT `asignacion_maestros_FK` FOREIGN KEY (`maestro_id`) REFERENCES `maestros` (`maestro_id`),
  ADD CONSTRAINT `asignacion_maestros_ibfk_2` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`materia_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `inscripcion_materias`
--
ALTER TABLE `inscripcion_materias`
  ADD CONSTRAINT `inscripcion_materias_ibfk_2` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`materia_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripcion_materias_ibfk_3` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`alumno_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD CONSTRAINT `maestros_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
