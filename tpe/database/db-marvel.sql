-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2022 a las 02:05:55
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db-marvel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `db_personajes`
--

CREATE TABLE `db_personajes` (
  `id` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `personaje` varchar(100) NOT NULL,
  `raza` varchar(100) NOT NULL,
  `afiliacion` varchar(100) DEFAULT NULL,
  `lgbt` tinyint(1) NOT NULL,
  `fem` tinyint(1) NOT NULL,
  `universo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `db_personajes`
--

INSERT INTO `db_personajes` (`id`, `imagen`, `personaje`, `raza`, `afiliacion`, `lgbt`, `fem`, `universo`) VALUES
(1, 'images/wiccan.png', 'wiccan (billy kaplan)', 'mutante', 'young avengers', 1, 0, 1),
(2, 'images/she-hulk.png', 'she-hulk (jeniffer walters)', 'humana con mutación gamma', 'fantastic four', 0, 1, 1),
(3, 'images/ms-marvel.png', 'ms. marvel (kamala khan)', 'inhumana', 'young avengers', 0, 1, 1),
(4, 'images/iceman.png', 'iceman (bobby drake)', 'mutante', 'x-men', 1, 0, 1),
(5, 'images/america-chavez.png', 'américa chavez', 'humana', 'young avengers', 1, 1, 2),
(7, 'images/loki.png', 'loki laufeyson', 'jotunn', 'revengers', 1, 1, 3),
(8, 'images/speed.png', 'speed (tommy shepard)', 'mutante', 'young avengers', 1, 0, 1),
(9, 'images/phastos.png', 'phastos', 'eterno', 'eternals', 1, 0, 3),
(10, 'images/noh-var.png', 'noh-var', 'kree súper-soldado', 'young avengers', 1, 0, 12),
(11, 'images/spider-gwen.png', 'ghost-spider (gwen stacy)', 'humana', 'mary janes', 0, 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `db_universos`
--

CREATE TABLE `db_universos` (
  `id` int(11) NOT NULL,
  `universo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `db_universos`
--

INSERT INTO `db_universos` (`id`, `universo`) VALUES
(1, 'Universo 616'),
(2, 'Paralelo Utópico'),
(3, 'Universo 19999'),
(4, 'Universo 65'),
(12, 'Universo 200080');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`) VALUES
(1, 'nick_fury@shield.strk', '$2y$10$LiE.h7HEo0/bdUZpaJCz0e9wqyPZD0T0nAsnOZbvEbd53KGYAoFl2'),
(5, 'fabrizioleali2205@gmail.com', '$2y$10$TTiVOSDge9kMdq3zVJiloulT5Y1BQ11O0lmecYaPnJAGTKQdIlMFW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `db_personajes`
--
ALTER TABLE `db_personajes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `universo` (`universo`) USING BTREE;

--
-- Indices de la tabla `db_universos`
--
ALTER TABLE `db_universos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `db_personajes`
--
ALTER TABLE `db_personajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `db_universos`
--
ALTER TABLE `db_universos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `db_personajes`
--
ALTER TABLE `db_personajes`
  ADD CONSTRAINT `fk-personajes-universos` FOREIGN KEY (`universo`) REFERENCES `db_universos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
