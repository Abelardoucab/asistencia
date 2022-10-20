-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2022 a las 20:52:15
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asistencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `fecha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `clave`, `usuario`, `fecha`) VALUES
(1, 'chapaleta', 'abe', '12-10-2022');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `ci` varchar(20) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `ape` varchar(60) NOT NULL,
  `sue` varchar(12) NOT NULL,
  `fechai` varchar(12) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `cel` varchar(20) NOT NULL,
  `correo` varchar(120) NOT NULL,
  `dire` varchar(200) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `emp`
--

INSERT INTO `emp` (`id`, `ci`, `nom`, `ape`, `sue`, `fechai`, `cargo`, `cel`, `correo`, `dire`, `foto`) VALUES
(1, '4436612', 'Abelardo Jesus', 'Pinedo Longa', '12000000', '12-10-2022', 'Docente', '04141057874', 'profabelardocolombia@gmail.com', 'La propia el paraiso', '4436612abelardo.jpg'),
(2, '6127818', 'Elsa ', 'Castillo', '5000000', '2022-10-13', 'Administrativo', '3235078627', 'pinedoqr@gmail.com', 'Av Teresa Carreño', '61278181elsa.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `ci` varchar(20) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `destino` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `ci`, `foto`, `destino`) VALUES
(1, '4436612', '4436612abelardo.jpg', '../file/4436612abelardo.jpg'),
(2, '6127818', '61278181elsa.jpg', '../file/61278181elsa.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id` int(11) NOT NULL,
  `ci` varchar(20) NOT NULL,
  `lunent` varchar(12) NOT NULL,
  `lunsal` varchar(12) NOT NULL,
  `marent` varchar(12) NOT NULL,
  `marsal` varchar(12) NOT NULL,
  `mieent` varchar(12) NOT NULL,
  `miesal` varchar(12) NOT NULL,
  `jueent` varchar(12) NOT NULL,
  `juesal` varchar(12) NOT NULL,
  `vieent` varchar(12) NOT NULL,
  `viesal` varchar(12) NOT NULL,
  `sabent` varchar(12) NOT NULL,
  `sabsal` varchar(12) NOT NULL,
  `doment` varchar(12) NOT NULL,
  `domsal` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id`, `ci`, `lunent`, `lunsal`, `marent`, `marsal`, `mieent`, `miesal`, `jueent`, `juesal`, `vieent`, `viesal`, `sabent`, `sabsal`, `doment`, `domsal`) VALUES
(2, '4436612', '07:00am', '02:15pm', '07:00am', '11:50am', '08:40am', '12:00m', '01:50pm', '06:15pm', '10:05am', '04:50pm', '09:00am', '11:00am', '03:00pm', '05:00pm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
