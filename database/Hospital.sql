-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Servidor: database-hospital.cizfakwts6is.us-east-1.rds.amazonaws.com
-- Tiempo de generación: 17-12-2022 a las 20:39:33
-- Versión del servidor: 8.0.28
-- Versión de PHP: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Hospital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id` int NOT NULL,
  `ID_Paciente` int NOT NULL,
  `ID_Medico` int NOT NULL,
  `ID_Horario` int NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Fecha_Creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id`, `ID_Paciente`, `ID_Medico`, `ID_Horario`, `Area`, `Estado`) VALUES
(45, 62, 21, 64, 'Médico General', 'Terminado'),
(47, 63, 22, 68, 'Médico General', 'Terminado'),
(50, 62, 22, 70, 'Médico General', 'Espera'),
(52, 62, 22, 73, 'Médico General', 'Espera'),
(55, 64, 22, 71, 'Médico General', 'Espera'),
(56, 64, 22, 72, 'Médico General', 'Espera'),
(57, 64, 22, 72, 'Médico General', 'Espera'),
(59, 65, 22, 69, 'Médico General', 'Espera'),
(60, 65, 23, 74, 'Médico General', 'Espera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallemedico`
--

CREATE TABLE `detallemedico` (
  `id` int NOT NULL,
  `ID_Cita` int NOT NULL,
  `Diagnostico` varchar(100) NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `detallemedico`
--

INSERT INTO `detallemedico` (`id`, `ID_Cita`, `Diagnostico`, `Descripcion`) VALUES
(10, 45, 'Sueño', 'Descripcion para el paciente'),
(11, 47, 'Gripe AH1N1', 'Tiene mucha fiebre y una gripe constante, no puede respirar con facilidad.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id` int NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id`, `Descripcion`, `Estado`) VALUES
(11, 'Médico General', 'Activo'),
(12, 'Cirugía', 'Suspendido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id` int NOT NULL,
  `ID_Medico` int NOT NULL,
  `Fecha` date NOT NULL,
  `Hora_Inicio` time NOT NULL,
  `Hora_Fin` time NOT NULL,
  `Intervalo` int NOT NULL,
  `Hora` time NOT NULL,
  `Fecha_Creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id`, `ID_Medico`, `Fecha`, `Hora_Inicio`, `Hora_Fin`, `Intervalo`, `Hora`, `Estado`) VALUES
(63, 21, '2022-12-16', '10:00:00', '12:30:00', 30, '10:00:00', 'Disponible'),
(64, 21, '2022-12-16', '10:00:00', '12:30:00', 30, '10:30:00', 'Ocupado'),
(65, 21, '2022-12-16', '10:00:00', '12:30:00', 30, '11:00:00', 'Disponible'),
(66, 21, '2022-12-16', '10:00:00', '12:30:00', 30, '11:30:00', 'Disponible'),
(67, 21, '2022-12-16', '10:00:00', '12:30:00', 30, '12:00:00', 'Disponible'),
(68, 22, '2022-12-30', '13:00:00', '16:00:00', 30, '13:00:00', 'Ocupado'),
(69, 22, '2022-12-30', '13:00:00', '16:00:00', 30, '13:30:00', 'Disponible'),
(70, 22, '2022-12-30', '13:00:00', '16:00:00', 30, '14:00:00', 'Ocupado'),
(71, 22, '2022-12-30', '13:00:00', '16:00:00', 30, '14:30:00', 'Ocupado'),
(72, 22, '2022-12-30', '13:00:00', '16:00:00', 30, '15:00:00', 'Ocupado'),
(73, 22, '2022-12-30', '13:00:00', '16:00:00', 30, '15:30:00', 'Ocupado'),
(74, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '18:30:00', 'Ocupado'),
(75, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '19:00:00', 'Disponible'),
(76, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '19:30:00', 'Disponible'),
(77, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '20:00:00', 'Disponible'),
(78, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '20:30:00', 'Disponible'),
(79, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '21:00:00', 'Disponible'),
(80, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '21:30:00', 'Disponible'),
(81, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '22:00:00', 'Disponible'),
(82, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '22:30:00', 'Disponible'),
(83, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '23:00:00', 'Disponible'),
(84, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '23:30:00', 'Disponible'),
(85, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '00:00:00', 'Disponible'),
(86, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '00:30:00', 'Disponible'),
(87, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '01:00:00', 'Disponible'),
(88, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '01:30:00', 'Disponible'),
(89, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '02:00:00', 'Disponible'),
(90, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '02:30:00', 'Disponible'),
(91, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '03:00:00', 'Disponible'),
(92, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '03:30:00', 'Disponible'),
(93, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '04:00:00', 'Disponible'),
(94, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '04:30:00', 'Disponible'),
(95, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '05:00:00', 'Disponible'),
(96, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '05:30:00', 'Disponible'),
(97, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '06:00:00', 'Disponible'),
(98, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '06:30:00', 'Disponible'),
(99, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '07:00:00', 'Disponible'),
(100, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '07:30:00', 'Disponible'),
(101, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '08:00:00', 'Disponible'),
(102, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '08:30:00', 'Disponible'),
(103, 23, '2022-12-18', '18:30:00', '09:30:00', 30, '09:00:00', 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(65) NOT NULL,
  `tipo_usuario` varchar(3) NOT NULL,
  `estado` varchar(15) NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `email`, `pass`, `tipo_usuario`, `estado`) VALUES
(1, 'admin@gmail.com', '$2y$10$pZKBZluMTS6g87h1feiUYetx/XgJWN77Vbz4EcRK6RMFgYqGrSNyy', '1', 'Activo'),
(44, 'jhordy@gmail.com', '$2y$10$qxhVEWaNuQbq0M4prvPmpOTHgiT.38.UZnXYOLfpbazKRA5E5rEai', '3', 'Activo'),
(45, 'renato@gmail.com', '$2y$10$fz7MUZlKxdRqRQerZ8tw5u0qmH/wfKjTVfv49udjsAwavUbx1ZNT.', '2', 'Activo'),
(46, 'luna@gmail.com', '$2y$10$ukAIPTT80MtZ3Vw1syYz7e6Wh2Gg2eTLR0FNnlpfLAAexqmxxCT.i', '3', 'Activo'),
(47, 'carmen@gmail.com', '$2y$10$u2DDz4fYsXY/py3yGMvqPekFt/7/IAASOkyDQm4Qbpi8iw7J751sS', '2', 'Activo'),
(48, 'juansuarezf16@gmail.com', '$2y$10$hXE84GundbLrWrsotkYZwO37x0gJW8rzdHoSAinyvwx.2isY0rDZu', '2', 'Activo'),
(49, 'eqm@gmail.com', '$2y$10$DSIg.dQYv53iNxO.QFeZFeYxPYTZd2RwCKiVlq1RCdgjzRyttBU9G', '3', 'Activo'),
(50, 'pablo@gmail.com', '$2y$10$tubPkpO12E0UG0hzO4pxweDzskviIHOP95GJVOdytfv3IMh/nYEo6', '2', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id` int NOT NULL,
  `ID_Especialidad` int NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Ape_Paterno` varchar(50) NOT NULL,
  `Ape_Materno` varchar(50) NOT NULL,
  `Genero` varchar(15) NOT NULL,
  `T_Doc` varchar(20) NOT NULL,
  `Nro_Doc` char(15) NOT NULL,
  `Telefono` char(9) NOT NULL,
  `Fecha_Creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Estado` varchar(15) NOT NULL DEFAULT 'Activo',
  `id_login` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id`, `ID_Especialidad`, `Nombre`, `Ape_Paterno`, `Ape_Materno`, `Genero`, `T_Doc`, `Nro_Doc`, `Telefono`, `Estado`, `id_login`) VALUES
(21, 11, 'Jhordy', 'prueba', '2do ape', 'Hombre', 'DNI', '12345678', '123456789', 'Activo', 44),
(22, 11, 'Luna Zaraa', 'Lunes', 'Martes', 'Mujer', 'DNI', '98765432', '976865675', 'Activo', 46),
(23, 11, 'Eduardo', 'Quiroz', 'Medina', 'Hombre', 'DNI', '72501435', '932012213', 'Activo', 49);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id` int NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Ape_Paterno` varchar(50) NOT NULL,
  `Ape_Materno` varchar(50) NOT NULL,
  `Edad` char(3) NOT NULL,
  `Genero` varchar(30) NOT NULL,
  `T_Doc` varchar(50) NOT NULL,
  `Nr_Doc` char(15) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Telefono` char(9) NOT NULL,
  `Fecha_Creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Estado` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Activo',
  `id_login` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `Nombre`, `Ape_Paterno`, `Ape_Materno`, `Edad`, `Genero`, `T_Doc`, `Nr_Doc`, `Fecha_Nacimiento`, `Telefono`, `Estado`, `id_login`) VALUES
(62, 'Renato', 'Soca', '2do ape', '', 'Hombre', 'DNI', '60188479', '1999-11-17', '977109379', 'Activo', 45),
(63, 'Carmen', 'Zarate', 'Carrion', '', 'Mujer', 'DNI', '75345355', '1996-06-20', '976556723', 'Activo', 47),
(64, 'Juan', 'Carrazco', 'Lopez', '', 'Hombre', 'DNI', '76345786', '2003-12-17', '4', 'Suspendido', 48),
(65, 'pablo', 'perez', 'fajir', '', 'Hombre', 'DNI', '888999111', '2017-02-17', '123456789', 'Activo', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetamedica`
--

CREATE TABLE `recetamedica` (
  `id` int NOT NULL,
  `ID_DetalleMedico` int NOT NULL,
  `Anotacion` varchar(100) NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `recetamedica`
--

INSERT INTO `recetamedica` (`id`, `ID_DetalleMedico`, `Anotacion`, `Descripcion`) VALUES
(5, 10, 'paracetamol', 'Tomar cada 8h'),
(6, 10, 'amoxicilina', 'cada 10h'),
(7, 11, 'Paracetamol', 'Una toma cada 12 horas.'),
(8, 11, 'Ibuprofeno', 'Una toma cada 3 horas.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Medico` (`ID_Medico`),
  ADD KEY `ID_Paciente` (`ID_Paciente`) USING BTREE,
  ADD KEY `ID_Horario` (`ID_Horario`);

--
-- Indices de la tabla `detallemedico`
--
ALTER TABLE `detallemedico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Cita` (`ID_Cita`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Medico` (`ID_Medico`) USING BTREE;

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `ID_Especialidad` (`ID_Especialidad`),
  ADD KEY `medico_login_1_idx` (`id_login`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paciente_ibfk_1_idx` (`id_login`);

--
-- Indices de la tabla `recetamedica`
--
ALTER TABLE `recetamedica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_DetalleMedico` (`ID_DetalleMedico`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT de la tabla `detallemedico`
--
ALTER TABLE `detallemedico`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT de la tabla `recetamedica`
--
ALTER TABLE `recetamedica`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`ID_Medico`) REFERENCES `medico` (`id`),
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`ID_Paciente`) REFERENCES `paciente` (`id`),
  ADD CONSTRAINT `cita_ibfk_3` FOREIGN KEY (`ID_Horario`) REFERENCES `horario` (`id`);

--
-- Filtros para la tabla `detallemedico`
--
ALTER TABLE `detallemedico`
  ADD CONSTRAINT `detallemedico_ibfk_1` FOREIGN KEY (`ID_Cita`) REFERENCES `cita` (`id`);

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`ID_Medico`) REFERENCES `medico` (`id`);

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `medico_ibfk_1` FOREIGN KEY (`ID_Especialidad`) REFERENCES `especialidad` (`id`),
  ADD CONSTRAINT `medico_ibfk_2` FOREIGN KEY (`id_login`) REFERENCES `login` (`id`);

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `recetamedica`
--
ALTER TABLE `recetamedica`
  ADD CONSTRAINT `recetamedica_ibfk_1` FOREIGN KEY (`ID_DetalleMedico`) REFERENCES `detallemedico` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
