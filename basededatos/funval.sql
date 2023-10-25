-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2023 a las 22:22:48
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
-- Base de datos: `funval`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos_clase`
--

CREATE TABLE `alumnos_clase` (
  `id` int(250) NOT NULL,
  `alumno_id` int(100) NOT NULL,
  `clase_id` int(100) NOT NULL,
  `nombre_alumno` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id` int(11) NOT NULL,
  `materia` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id`, `materia`) VALUES
(1, 'Ciencias ba'),
(2, 'Biomedicina'),
(3, 'Guarani'),
(4, 'Astronomia'),
(5, 'Biologia'),
(6, 'Matematica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases_maestros`
--

CREATE TABLE `clases_maestros` (
  `id` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `clase_id` int(11) NOT NULL,
  `maestro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frases`
--

CREATE TABLE `frases` (
  `id` int(200) NOT NULL,
  `frase_aleatoria` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `frases`
--

INSERT INTO `frases` (`id`, `frase_aleatoria`) VALUES
(1, 'As things get closer to the light, the shadows get darker.'),
(2, 'Respect your elders.'),
(3, 'If you need cheering up, try searching online for photos of kittens.'),
(4, 'Don\'t be afraid to ask questions.'),
(5, 'Stop procrastinating.'),
(6, 'To cleanly remove the seed from an Avocado, lay a knife firmly across it, and twist.'),
(7, 'Look people in the eye.'),
(8, 'Always the burrito.\"');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'administrador'),
(2, 'alumno'),
(3, 'maestro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Edad` int(11) DEFAULT NULL,
  `CorreoElectronico` varchar(100) DEFAULT NULL,
  `rol_id` int(11) NOT NULL,
  `clase_id` int(11) NOT NULL,
  `contrasena` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Apellido`, `Edad`, `CorreoElectronico`, `rol_id`, `clase_id`, `contrasena`) VALUES
(1, 'admin', 'admin', NULL, 'admin@admin', 1, 4, '$2y$10$5qgwx4q.JAEv8eTIwpumD.GBe3RnEPi1.6x1tmg7eSslFjjy99yO2'),
(2, 'juan ', 'perez', 23, 'maestro@maestro', 3, 3, '$2y$10$YFmRkEYffXdCHfvT3.l5MuB5LgbZk5L/sQHYo1p9n.LGl718wBD5S'),
(3, 'mario', 'martinez', 23, 'alumno@alumno', 2, 3, '$2y$10$zBJLg7etB8Wk8cqesYz2yOJPWVbuBcbmq7PJdj48.yNVaomHA1iyu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos_clase`
--
ALTER TABLE `alumnos_clase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumno_id` (`alumno_id`),
  ADD KEY `clase_id` (`clase_id`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clases_maestros`
--
ALTER TABLE `clases_maestros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clase_id` (`clase_id`),
  ADD KEY `maestro_id` (`maestro_id`);

--
-- Indices de la tabla `frases`
--
ALTER TABLE `frases`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `clase_id` (`clase_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos_clase`
--
ALTER TABLE `alumnos_clase`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clases_maestros`
--
ALTER TABLE `clases_maestros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `frases`
--
ALTER TABLE `frases`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos_clase`
--
ALTER TABLE `alumnos_clase`
  ADD CONSTRAINT `alumnos_clase_ibfk_1` FOREIGN KEY (`alumno_id`) REFERENCES `usuarios` (`ID`),
  ADD CONSTRAINT `alumnos_clase_ibfk_2` FOREIGN KEY (`clase_id`) REFERENCES `clases` (`id`);

--
-- Filtros para la tabla `clases_maestros`
--
ALTER TABLE `clases_maestros`
  ADD CONSTRAINT `clases_maestros_ibfk_1` FOREIGN KEY (`clase_id`) REFERENCES `clases` (`id`),
  ADD CONSTRAINT `clases_maestros_ibfk_2` FOREIGN KEY (`maestro_id`) REFERENCES `usuarios` (`ID`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`clase_id`) REFERENCES `clases` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
