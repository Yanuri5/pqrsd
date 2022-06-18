-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2022 a las 19:21:46
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pqrsd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `cedula` int(15) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(16) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`cedula`, `nombre`, `apellido`, `correo`, `celular`, `contrasena`) VALUES
(1006722046, 'Yanuri Camila', 'Moreno Rivas', 'yanuririvas@gmail.com', '3157663588', 'camila12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE `dependencias` (
  `id` int(2) NOT NULL,
  `nombre_dep` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `id_sec` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dependencias`
--

INSERT INTO `dependencias` (`id`, `nombre_dep`, `id_sec`) VALUES
(1, 'Almacen', 3),
(2, 'Archivo', 3),
(3, 'Despacho del Alcalde', 3),
(4, 'Salud Publica', 3),
(5, 'Comisaría de Familia', 3),
(6, 'Inspección de Policía', 3),
(7, 'SST', 3),
(8, 'Familias en Acción', 4),
(9, 'Biblioteca', 4),
(10, 'Hogar Geriátrico', 4),
(11, 'Enlace Jóvenes en Acción', 4),
(12, 'Enlace de la Mujer', 4),
(13, 'SISBEN', 5),
(14, 'Agricultura', 5),
(15, 'Prensa TIC', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidades_ext`
--

CREATE TABLE `entidades_ext` (
  `nit` int(15) NOT NULL,
  `nombre_ent` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `correo_ent` varchar(24) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id` int(4) NOT NULL,
  `municipio` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `municipio`) VALUES
(1, 'VILLAVICENCIO'),
(2, 'ACACIAS'),
(3, 'BARRANCA DE UPIA'),
(4, 'CABUYARO'),
(5, 'CASTILLA LA NUEVA'),
(6, 'SAN LUIS DE CUBARRAL'),
(7, 'CUMARAL'),
(8, 'EL CALVARIO'),
(9, 'EL CASTILLO'),
(10, 'EL DORADO'),
(11, 'FUENTE DE ORO'),
(12, 'GRANADA'),
(13, 'GUAMAL'),
(14, 'MAPIRIPAN'),
(15, 'MESETAS'),
(16, 'LA MACARENA'),
(17, 'LA URIBE'),
(18, 'LEJANIAS'),
(19, 'PUERTO CONCORDIA'),
(20, 'PUERTO GAITAN'),
(21, 'PUERTO LOPEZ'),
(22, 'PUERTO LLERAS'),
(23, 'PUERTO RICO'),
(24, 'RESTREPO'),
(25, 'SAN CARLOS DE GUAROA'),
(26, 'SAN JUAN DE ARAMA'),
(27, 'SAN JUANITO'),
(28, 'SAN MARTIN'),
(29, 'VISTAHERMOSA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretarias`
--

CREATE TABLE `secretarias` (
  `id` int(2) NOT NULL,
  `nombre_sec` varchar(35) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `secretarias`
--

INSERT INTO `secretarias` (`id`, `nombre_sec`) VALUES
(1, 'Control Interno'),
(2, 'Secretaría de hacienda'),
(3, 'Secretaría de Gobierno'),
(4, 'Secretaría Social'),
(5, 'Secretaría de Planeación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_tramites`
--

CREATE TABLE `tipo_tramites` (
  `id` int(2) NOT NULL,
  `tipo` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_tramites`
--

INSERT INTO `tipo_tramites` (`id`, `tipo`) VALUES
(1, 'Peticiones'),
(2, 'Quejas'),
(3, 'Reclamos'),
(4, 'Solicitudes'),
(5, 'Denuncias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramites_entidades`
--

CREATE TABLE `tramites_entidades` (
  `id` int(5) NOT NULL,
  `n_radicado` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `nit_env` int(15) NOT NULL,
  `sec_rec` int(2) NOT NULL,
  `titulo` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `id_tipo` int(2) NOT NULL,
  `C_admin` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramites_usuarios`
--

CREATE TABLE `tramites_usuarios` (
  `id` int(5) NOT NULL,
  `n_radicado` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `cedula_env` int(15) NOT NULL,
  `sec_rec` int(2) NOT NULL,
  `titulo` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `id_tipo` int(2) NOT NULL,
  `C_admin` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cedula` int(15) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `id_vereda` int(5) NOT NULL,
  `id_zona` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veredas`
--

CREATE TABLE `veredas` (
  `id` int(5) NOT NULL,
  `vereda` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_municipio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `veredas`
--

INSERT INTO `veredas` (`id`, `vereda`, `id_municipio`) VALUES
(1, 'Chichimene', 2),
(2, 'Dinamarca', 2),
(3, 'Manzanares', 2),
(4, 'Montelibano', 2),
(5, 'Santa Teresita', 2),
(6, 'Caño Hondo', 2),
(7, 'La María', 2),
(8, 'El Resguardo', 2),
(9, 'Cola de Pato', 2),
(10, 'El Pañuelo', 2),
(11, 'Loma De Tigre', 2),
(12, 'Las Negras', 2),
(13, 'Venecia', 2),
(14, 'El Playón', 2),
(15, 'Rancho Grande', 2),
(16, 'Alto Acacias', 2),
(17, 'La Esmeralda', 2),
(18, 'Santa Petra', 2),
(19, 'Palomas', 2),
(20, 'San Cayetano', 2),
(21, 'Las Margaritas', 2),
(22, 'San Juan', 2),
(23, 'San Pablo', 2),
(24, 'El Diamante', 2),
(25, 'La Esmeralda', 2),
(26, 'Esteros Altos', 14),
(27, 'Esteros bajos', 14),
(28, 'Caño Ovejas', 14),
(29, 'Caño Evaristo', 14),
(30, 'Caño minas', 14),
(31, 'Remolinos', 14),
(32, 'El Trín', 14),
(33, 'Cachivera', 14),
(34, 'La Esmeralda', 14),
(35, 'La Realidad', 14),
(36, 'Acacias', 2),
(37, 'Mapiripan', 14),
(38, 'Santa Lucia', 19),
(39, 'Bocas del Ariari', 19),
(40, 'Puerto Cacao', 19),
(41, 'Puerto Iris', 19),
(42, 'Caño Marimba', 19),
(43, 'Aguas Claras', 19),
(44, 'El Porvenir', 19),
(45, 'La Primavera', 19),
(46, 'Caño Ceiba', 19),
(47, 'Caño La Sal', 19),
(48, 'Playa Alta', 19),
(49, 'Lindenal', 19),
(50, 'Los Andes', 19),
(51, 'El Salitre', 19),
(52, 'Playa Nueva', 19),
(53, 'Playa de Piedra', 19),
(54, 'Puerto Colombia', 19),
(55, 'El Paraíso', 19),
(56, 'El Tesoro', 19),
(57, 'Pororio', 19),
(58, 'San Fernando', 19),
(59, 'La Cristalina', 19),
(60, 'Arenales', 19),
(61, 'Chaparrito', 19),
(62, 'Los Guayabos', 19),
(63, 'Puerto Concordia', 19),
(64, 'Guacamayas ', 23),
(65, 'La Lindoza', 23),
(66, 'Caño La Torre', 23),
(67, 'El Oasis', 23),
(68, 'Barranco Colorado', 23),
(69, 'La Unión', 23),
(70, 'Puerto Achispas', 23),
(71, 'Charco Danto', 23),
(72, 'Agualinda', 23),
(73, 'El Dorado', 23),
(74, 'La Hermita', 23),
(75, 'La Cascada', 23),
(76, 'La Victoria', 23),
(77, 'La Esperanza', 23),
(78, 'Monserrate', 23),
(79, 'Caño Ceiba', 23),
(80, 'La Reforma', 23),
(81, 'Charco Carbon', 23),
(82, 'Laguna Gringa', 23),
(83, 'La Tigra', 23),
(84, 'Brisas Del Cafre', 23),
(85, 'Bajo Fundadores', 23),
(86, 'Bajo Guaimaral', 23),
(87, 'Buena Vista', 23),
(88, 'Caño Blanco', 23),
(89, 'Caño Alfa', 23),
(90, 'Caños Negro', 23),
(91, 'Caño Raya', 23),
(92, 'Comuneros', 23),
(93, 'El Darien', 23),
(94, 'El Jordan', 23),
(95, 'La Primavera', 23),
(96, 'Las Colinas', 23),
(97, 'La Cabaña', 23),
(98, 'La Ye', 23),
(99, 'La Venada', 23),
(100, 'La Argelia', 23),
(101, 'Puerto Toledo', 23),
(102, 'Palmeras', 23),
(103, 'Santa Lucia', 23),
(104, 'San Pedro', 23),
(105, 'San Rafael', 23),
(106, 'Sausalito', 23),
(107, 'San Vicente Alto', 23),
(108, 'San Vicente Bajo', 23),
(109, 'Puerto Rico', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id` int(2) NOT NULL,
  `zona` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id`, `zona`) VALUES
(1, 'Rural'),
(2, 'Urbano');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sec` (`id_sec`);

--
-- Indices de la tabla `entidades_ext`
--
ALTER TABLE `entidades_ext`
  ADD PRIMARY KEY (`nit`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `secretarias`
--
ALTER TABLE `secretarias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_tramites`
--
ALTER TABLE `tipo_tramites`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tramites_entidades`
--
ALTER TABLE `tramites_entidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `C_admin` (`C_admin`),
  ADD KEY `nit_env` (`nit_env`),
  ADD KEY `sec_rec` (`sec_rec`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `tramites_usuarios`
--
ALTER TABLE `tramites_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cedula_env` (`cedula_env`),
  ADD KEY `sec_rec` (`sec_rec`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `C_admin` (`C_admin`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `id_vereda` (`id_vereda`),
  ADD KEY `id_zona` (`id_zona`);

--
-- Indices de la tabla `veredas`
--
ALTER TABLE `veredas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_municipio` (`id_municipio`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `secretarias`
--
ALTER TABLE `secretarias`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_tramites`
--
ALTER TABLE `tipo_tramites`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tramites_entidades`
--
ALTER TABLE `tramites_entidades`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tramites_usuarios`
--
ALTER TABLE `tramites_usuarios`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `veredas`
--
ALTER TABLE `veredas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD CONSTRAINT `dependencias_ibfk_1` FOREIGN KEY (`id_sec`) REFERENCES `secretarias` (`id`);

--
-- Filtros para la tabla `tramites_entidades`
--
ALTER TABLE `tramites_entidades`
  ADD CONSTRAINT `tramites_entidades_ibfk_1` FOREIGN KEY (`C_admin`) REFERENCES `admin` (`cedula`),
  ADD CONSTRAINT `tramites_entidades_ibfk_2` FOREIGN KEY (`nit_env`) REFERENCES `entidades_ext` (`nit`),
  ADD CONSTRAINT `tramites_entidades_ibfk_3` FOREIGN KEY (`sec_rec`) REFERENCES `secretarias` (`id`),
  ADD CONSTRAINT `tramites_entidades_ibfk_4` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_tramites` (`id`);

--
-- Filtros para la tabla `tramites_usuarios`
--
ALTER TABLE `tramites_usuarios`
  ADD CONSTRAINT `tramites_usuarios_ibfk_1` FOREIGN KEY (`cedula_env`) REFERENCES `usuarios` (`cedula`),
  ADD CONSTRAINT `tramites_usuarios_ibfk_2` FOREIGN KEY (`sec_rec`) REFERENCES `secretarias` (`id`),
  ADD CONSTRAINT `tramites_usuarios_ibfk_3` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_tramites` (`id`),
  ADD CONSTRAINT `tramites_usuarios_ibfk_4` FOREIGN KEY (`C_admin`) REFERENCES `admin` (`cedula`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_vereda`) REFERENCES `veredas` (`id`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_zona`) REFERENCES `zonas` (`id`);

--
-- Filtros para la tabla `veredas`
--
ALTER TABLE `veredas`
  ADD CONSTRAINT `veredas_ibfk_1` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
