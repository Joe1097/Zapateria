-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2019 a las 09:21:52
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zapateria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Num_cte` int(4) NOT NULL,
  `Nom_cte` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `App_cte` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Apm_cte` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Edo_cte` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Mun_cte` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Col_cte` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Call_cte` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Num` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Cp` int(5) NOT NULL,
  `Tel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Num_cte`, `Nom_cte`, `App_cte`, `Apm_cte`, `Edo_cte`, `Mun_cte`, `Col_cte`, `Call_cte`, `Num`, `Cp`, `Tel`) VALUES
(1, 'JosÃ©', 'Carrillo', 'Torres', 'Aguascalientes', 'Aguascalientes', 'Bonaterra', 'Mtro. Juan P.', '129', 20000, 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `numcpra` int(10) NOT NULL,
  `num_cte` int(4) NOT NULL,
  `tpago` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `total` float NOT NULL,
  `fecha_compra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`numcpra`, `num_cte`, `tpago`, `total`, `fecha_compra`) VALUES
(1, 1, 'credito', 899.99, '2019-01-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras_credito`
--

CREATE TABLE `compras_credito` (
  `id` int(11) NOT NULL,
  `numcpra` int(11) NOT NULL,
  `fecha_abono` date NOT NULL,
  `pago_mensual` float NOT NULL,
  `pagos_acums` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `compras_credito`
--

INSERT INTO `compras_credito` (`id`, `numcpra`, `fecha_abono`, `pago_mensual`, `pagos_acums`) VALUES
(1, 1, '2019-02-04', 299.997, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprazapato`
--

CREATE TABLE `comprazapato` (
  `numzpto` int(4) NOT NULL,
  `numcpra` int(10) NOT NULL,
  `cantidad` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `comprazapato`
--

INSERT INTO `comprazapato` (`numzpto`, `numcpra`, `cantidad`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devoluciones`
--

CREATE TABLE `devoluciones` (
  `numzpto` int(4) NOT NULL,
  `num_cte` int(4) NOT NULL,
  `id_devolucion` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `devoluciones`
--

INSERT INTO `devoluciones` (`numzpto`, `num_cte`, `id_devolucion`, `fecha`) VALUES
(1, 1, 1, '2019-01-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `numprov` int(4) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `edo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mun` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `col` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `calle` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `num` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cp` int(5) NOT NULL,
  `tel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`numprov`, `nombre`, `edo`, `mun`, `col`, `calle`, `num`, `cp`, `tel`) VALUES
(1, 'Adidas', 'Aguascalientes', 'Aguascalientes', 'Vistas del Ajedrez', 'Palma', '119', 20199, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `contrasena`, `tipo`) VALUES
('jose', '123', 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zapatos`
--

CREATE TABLE `zapatos` (
  `numzpto` int(4) NOT NULL,
  `marca` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` int(10) NOT NULL,
  `talla` int(2) NOT NULL,
  `descr` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `costo` float NOT NULL,
  `numprov` int(4) NOT NULL,
  `existencias` int(6) NOT NULL,
  `exis_actual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `zapatos`
--

INSERT INTO `zapatos` (`numzpto`, `marca`, `modelo`, `talla`, `descr`, `costo`, `numprov`, `existencias`, `exis_actual`) VALUES
(1, 'Addidas', 643, 29, 'Tennis deportivos blancos', 899.99, 1, 21, 9);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Num_cte`),
  ADD KEY `Num_cte` (`Num_cte`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`numcpra`),
  ADD KEY `numcpra` (`numcpra`),
  ADD KEY `num_cte` (`num_cte`);

--
-- Indices de la tabla `compras_credito`
--
ALTER TABLE `compras_credito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comprazapato`
--
ALTER TABLE `comprazapato`
  ADD KEY `numzpto` (`numzpto`),
  ADD KEY `numcpra` (`numcpra`);

--
-- Indices de la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  ADD PRIMARY KEY (`id_devolucion`),
  ADD KEY `numzpto` (`numzpto`,`num_cte`),
  ADD KEY `num_cte` (`num_cte`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`numprov`),
  ADD KEY `numproc` (`numprov`);

--
-- Indices de la tabla `zapatos`
--
ALTER TABLE `zapatos`
  ADD PRIMARY KEY (`numzpto`),
  ADD KEY `numzpto` (`numzpto`),
  ADD KEY `numprov` (`numprov`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Num_cte` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `numcpra` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compras_credito`
--
ALTER TABLE `compras_credito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  MODIFY `id_devolucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `numprov` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `zapatos`
--
ALTER TABLE `zapatos`
  MODIFY `numzpto` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`num_cte`) REFERENCES `cliente` (`Num_cte`);

--
-- Filtros para la tabla `comprazapato`
--
ALTER TABLE `comprazapato`
  ADD CONSTRAINT `comprazapato_ibfk_1` FOREIGN KEY (`numzpto`) REFERENCES `zapatos` (`numzpto`),
  ADD CONSTRAINT `comprazapato_ibfk_2` FOREIGN KEY (`numcpra`) REFERENCES `compras` (`numcpra`);

--
-- Filtros para la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  ADD CONSTRAINT `devoluciones_ibfk_1` FOREIGN KEY (`num_cte`) REFERENCES `cliente` (`Num_cte`),
  ADD CONSTRAINT `devoluciones_ibfk_2` FOREIGN KEY (`numzpto`) REFERENCES `zapatos` (`numzpto`);

--
-- Filtros para la tabla `zapatos`
--
ALTER TABLE `zapatos`
  ADD CONSTRAINT `zapatos_ibfk_1` FOREIGN KEY (`numprov`) REFERENCES `proveedores` (`numprov`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
