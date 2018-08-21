-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2018 a las 05:09:15
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `medisys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `codigo` varchar(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `unidad` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`codigo`, `nombre`, `precio_compra`, `precio_venta`, `unidad`, `stock`, `created_user`, `created_date`, `updated_user`, `updated_date`) VALUES
('R00000001', 'Plutonio 236', 45000, 90000, 'Contenedor especial', 60, 1, '2018-07-19 23:12:04', 1, '2018-07-20 01:19:09'),
('R00000002', 'Francio', 35000, 56000, 'Reefer', 0, 1, '2018-07-19 23:12:34', 1, '2018-07-19 23:12:34'),
('R00000003', 'Arsenico', 3000, 9000, 'caja', 6, 1, '2018-07-19 23:14:12', 1, '2018-07-20 01:19:27'),
('R00000004', 'Paladio', 19350, 65320, 'tubo', 9, 1, '2018-07-19 23:15:33', 1, '2018-07-20 01:18:42'),
('R00000005', 'Uranio 235', 80000, 160000, 'Contenedor especial', 0, 1, '2018-07-19 23:18:21', 1, '2018-07-19 23:18:21'),
('R00000006', 'Colisionado de particulas', 5000000, 70000000, 'Contenedor especial', 15, 1, '2018-07-19 23:20:23', 1, '2018-07-20 01:04:15'),
('R00000007', 'Materia Oscura', 120000, 180000, 'tubo', 6, 1, '2018-07-19 23:21:00', 1, '2018-07-20 01:18:19'),
('R00000008', 'Condensador de Flujo', 350000, 900000, 'caja', 1, 1, '2018-07-19 23:22:03', 1, '2018-07-20 01:20:43'),
('R00000009', 'Quark  Cuantico', 600000, 1200000, 'caja', 2, 1, '2018-07-19 23:24:47', 1, '2018-07-20 01:20:25'),
('R00000010', 'Inteligencia Artificial', 300000, 9000000, 'Reefer', 15, 1, '2018-07-19 23:26:09', 1, '2018-07-20 01:20:09'),
('R00000011', 'Exoesqueleto V', 900000, 96058231, 'Contenedor especial', 99, 1, '2018-07-19 23:27:55', 1, '2018-07-20 01:17:23'),
('R00000012', 'puente de Einstein-Rosen', 23698542, 986752423, 'Reefer', 3, 1, '2018-07-19 23:29:50', 1, '2018-07-20 01:19:42'),
('R00000013', 'Singularidad', 96532, 1255638, 'bolsa', 6, 1, '2018-07-19 23:31:10', 1, '2018-07-20 01:19:19'),
('R00000014', 'Gemas del Infinito', 999999999, 2147483647, 'Contenedor especial', 2, 1, '2018-07-19 23:34:39', 1, '2018-07-20 01:17:42'),
('R00000015', 'Black Hole', 160, 69852314, 'caja', 1, 1, '2018-07-19 23:35:21', 1, '2018-07-20 00:42:49'),
('R00000016', 'Mercurio', 750, 3000, 'Reefer', 6, 1, '2018-07-20 02:21:26', 1, '2018-07-20 02:22:25'),
('R00000017', 'Cuantico', 562369, 13589364, 'Contenedor especial', 1, 1, '2018-07-20 02:37:15', 1, '2018-07-20 02:38:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete`
--

CREATE TABLE `paquete` (
  `codigo` varchar(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ubicacion` varchar(150) NOT NULL,
  `entregar` varchar(50) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paquete`
--

INSERT INTO `paquete` (`codigo`, `nombre`, `ubicacion`, `entregar`, `created_user`, `created_date`, `updated_user`, `updated_date`) VALUES
('711111111', 'SoraiMX', 'DirecciÃ³n General ISSSTE, JesÃºs GarcÃ­a Corona 140, Buenavista, CuauhtÃ©moc, CDMX', 'issste', 1, '2018-08-09 01:56:40', 1, '2018-08-09 01:57:55'),
('711111112', 'SoraiMX', 'Calle Dr Velasco 73, Doctores, 06720 Ciudad de MÃ©xico, CDMX', 'Universidad de Londres', 1, '2018-08-09 01:59:27', 1, '2018-08-09 01:59:27'),
('711111113', 'SoraiMX', 'Paseo de la Reforma 305, CuauhtÃ©moc, 06500 Ciudad de MÃ©xico, CDMX', 'Embajada de los Estados Unidos de AmÃ©rica', 1, '2018-08-09 02:03:07', 1, '2018-08-09 02:03:07'),
('711111114', 'ARSA', 'JoaquÃ­n Gallo, Santa Fe, Zedec Sta FÃ©, 01219 Ciudad de MÃ©xico, CDMX', 'IBM de MÃ©xico, S. de R.L. de C.V.', 1, '2018-08-09 02:05:06', 1, '2018-08-09 02:05:06'),
('711111115', 'ARSA', 'Guadalupe Victoria 15 Miguel Hidalgo 55490 Ecatepec de Morelos, MÃ©x.', 'Ing Akira Nakamure', 1, '2018-08-09 02:06:04', 1, '2018-08-09 02:06:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos`
--

CREATE TABLE `puntos` (
  `IdPunto` int(11) NOT NULL,
  `Titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `cx` text COLLATE utf8_spanish_ci NOT NULL,
  `cy` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_medicamentos`
--

CREATE TABLE `transaccion_medicamentos` (
  `codigo_transaccion` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `codigo` varchar(9) NOT NULL,
  `numero` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipo_transaccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transaccion_medicamentos`
--

INSERT INTO `transaccion_medicamentos` (`codigo_transaccion`, `fecha`, `codigo`, `numero`, `created_user`, `created_date`, `tipo_transaccion`) VALUES
('T-2018-000001', '2017-07-26', 'R00000015', 5, 1, '2017-07-26 07:09:06', 'Entrada'),
('T-2018-000002', '2017-07-26', 'R00000015', 10, 1, '2017-07-26 07:09:28', 'Entrada'),
('T-2018-000003', '2017-07-26', 'R00000015', 2, 1, '2017-07-26 07:09:36', 'Salida'),
('T-2018-000004', '2018-07-20', 'R00000011', 99, 1, '2018-07-20 01:17:23', 'Entrada'),
('T-2018-000005', '2018-07-20', 'R00000014', 2, 1, '2018-07-20 01:17:42', 'Entrada'),
('T-2018-000006', '2018-07-20', 'R00000010', 9, 1, '2018-07-20 01:18:03', 'Entrada'),
('T-2018-000007', '2018-07-20', 'R00000007', 6, 1, '2018-07-20 01:18:19', 'Entrada'),
('T-2018-000008', '2018-07-20', 'R00000004', 9, 1, '2018-07-20 01:18:42', 'Entrada'),
('T-2018-000009', '2018-07-20', 'R00000001', 60, 1, '2018-07-20 01:19:09', 'Entrada'),
('T-2018-000010', '2018-07-20', 'R00000013', 6, 1, '2018-07-20 01:19:19', 'Entrada'),
('T-2018-000011', '2018-07-20', 'R00000003', 6, 1, '2018-07-20 01:19:27', 'Entrada'),
('T-2018-000012', '2018-07-20', 'R00000012', 3, 1, '2018-07-20 01:19:42', 'Entrada'),
('T-2018-000013', '2018-07-20', 'R00000010', 6, 1, '2018-07-20 01:20:09', 'Entrada'),
('T-2018-000014', '2018-07-20', 'R00000009', 2, 1, '2018-07-20 01:20:25', 'Entrada'),
('T-2018-000015', '2018-07-20', 'R00000008', 1, 1, '2018-07-20 01:20:43', 'Entrada'),
('T-2018-000016', '2018-07-20', 'R00000016', 6, 1, '2018-07-20 02:22:25', 'Entrada'),
('T-2018-000017', '2018-07-20', 'R00000017', 60, 1, '2018-07-20 02:37:59', 'Entrada'),
('T-2018-000018', '2018-07-20', 'R00000017', 59, 1, '2018-07-20 02:38:32', 'Salida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_paquete`
--

CREATE TABLE `transaccion_paquete` (
  `codigo_transaccion` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `codigo` varchar(9) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `evento` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transaccion_paquete`
--

INSERT INTO `transaccion_paquete` (`codigo_transaccion`, `fecha`, `codigo`, `created_user`, `created_date`, `evento`) VALUES
('5-2018-000001', '2018-08-09', '711111114', 1, '2018-08-09 02:32:52', 'Carga'),
('5-2018-000002', '2018-08-09', '711111115', 1, '2018-08-09 02:33:06', 'Carga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_transporte`
--

CREATE TABLE `transaccion_transporte` (
  `codigo_transaccion` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `codigo` varchar(9) NOT NULL,
  `destino` varchar(150) NOT NULL,
  `numero` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipo_transaccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transaccion_transporte`
--

INSERT INTO `transaccion_transporte` (`codigo_transaccion`, `fecha`, `codigo`, `destino`, `numero`, `created_user`, `created_date`, `tipo_transaccion`) VALUES
('K-2018-000001', '2018-08-08', 'W00000002', 'Puerto de Algeciras, EspaÃ±a', 2, 1, '2018-08-08 14:20:10', 'Entrada'),
('K-2018-000002', '2018-08-08', 'W00000002', 'Muelle FernÃ¡ndez Ladreda, 5 Nave, 11005 CÃ¡diz, EspaÃ±a', 5, 1, '2018-08-08 14:23:43', 'Entrada'),
('K-2018-000003', '2018-08-08', 'W00000002', 'Zona Portuaria, 91891 Veracruz, Ver.', 4, 1, '2018-08-08 14:27:37', 'Entrada'),
('K-2018-000004', '2018-08-08', 'W00000002', 'Puerto de Shangai', 2, 1, '2018-08-08 14:31:11', 'Entrada'),
('K-2018-000005', '2018-08-08', 'W00000002', 'puerto de jebel ali dubai', 9, 1, '2018-08-08 14:32:31', 'Entrada'),
('K-2018-000006', '2018-08-08', 'W00000002', 'BahÃ­a de SÃºbic, Filipinas', 1, 1, '2018-08-08 14:35:23', 'Entrada'),
('K-2018-000007', '2018-08-08', 'W00000002', 'Puerto de Algeciras, EspaÃ±a', 2, 1, '2018-08-08 14:36:39', 'Salida'),
('K-2018-000008', '2018-08-08', 'W00000002', 'Muelle FernÃ¡ndez Ladreda, 5 Nave, 11005 CÃ¡diz, EspaÃ±a', 5, 1, '2018-08-08 14:37:07', 'Salida'),
('K-2018-000009', '2018-08-08', 'W00000002', 'Zona Portuaria, 91891 Veracruz, Ver.', 4, 1, '2018-08-08 14:37:56', 'Salida'),
('K-2018-000010', '2018-08-08', 'W00000002', 'puerto de jebel ali dubai', 9, 1, '2018-08-08 14:38:30', 'Salida'),
('K-2018-000011', '2018-08-08', 'W00000004', 'JesÃºs GarcÃ­a Corona 140, Buenavista, 06350 CuauhtÃ©moc, CDMX', 10, 1, '2018-08-08 14:40:36', 'Entrada'),
('K-2018-000012', '2018-08-08', 'W00000004', 'Paseo de la Reforma y Eje 2 PTE, JuÃ¡rez, CuauhtÃ©moc, Ciudad de MÃ©xico, CDMX', 9, 1, '2018-08-08 14:45:09', 'Entrada'),
('K-2018-000013', '2018-08-08', 'W00000004', 'Jaime Torres Bodet 176, Sta MarÃ­a la Ribera, 06400 Ciudad de MÃ©xico, CDMX', 18, 1, '2018-08-08 14:50:13', 'Entrada'),
('K-2018-000014', '2018-08-08', 'W00000004', 'Calle Dr. Enrique GonzÃ¡lez MartÃ­nez 10, Sta MarÃ­a la Ribera, 06400 Ciudad de MÃ©xico, CDMX', 15, 1, '2018-08-08 14:51:34', 'Entrada'),
('K-2018-000015', '2018-08-08', 'W00000004', 'Sadi Carnot 57, San Rafael, 06470 Ciudad de MÃ©xico, CDMX', 5, 1, '2018-08-08 14:52:31', 'Entrada'),
('K-2018-000016', '2018-08-08', 'W00000004', 'Calle Dr Velasco 73, Doctores, 06720 Ciudad de MÃ©xico, CDMX', 25, 1, '2018-08-08 14:53:34', 'Entrada'),
('K-2018-000017', '2018-08-08', 'W00000004', 'Claudio Bernard 85, Doctores, 06720 Ciudad de MÃ©xico, CDMX', 3, 1, '2018-08-08 14:54:15', 'Entrada'),
('K-2018-000018', '2018-08-08', 'W00000004', 'Dr JosÃ© MarÃ­a Vertiz 146, Doctores, 06720 Ciudad de MÃ©xico, CDMX', 5, 1, '2018-08-08 14:55:39', 'Entrada'),
('K-2018-000019', '2018-08-08', 'W00000004', 'Calle Dr Velasco 70, Doctores, 06720 Ciudad de MÃ©xico, CDMX', 6, 1, '2018-08-08 14:57:21', 'Entrada'),
('K-2018-000020', '2018-08-08', 'W00000004', 'Jaime Torres Bodet 176, Sta MarÃ­a la Ribera, 06400 Ciudad de MÃ©xico, CDMX', 18, 1, '2018-08-08 14:58:14', 'Salida'),
('K-2018-000021', '2018-08-08', 'W00000004', 'Calle Dr Velasco 73, Doctores, 06720 Ciudad de MÃ©xico, CDMX', 25, 1, '2018-08-08 14:58:39', 'Salida'),
('K-2018-000022', '2018-08-08', 'W00000004', 'Calle Dr. Enrique GonzÃ¡lez MartÃ­nez 10, Sta MarÃ­a la Ribera, 06400 Ciudad de MÃ©xico, CDMX', 15, 1, '2018-08-08 14:58:58', 'Salida'),
('K-2018-000023', '2018-08-08', 'W00000004', 'Dr JosÃ© MarÃ­a Vertiz 146, Doctores, 06720 Ciudad de MÃ©xico, CDMX', 5, 1, '2018-08-08 14:59:28', 'Salida'),
('K-2018-000024', '2018-08-08', 'W00000004', 'Claudio Bernard 85, Doctores, 06720 Ciudad de MÃ©xico, CDMX', 3, 1, '2018-08-08 15:00:52', 'Salida'),
('K-2018-000025', '2018-08-08', 'W00000003', 'Guadalupe Victoria 15, Miguel Hidalgo, Ecatepec de Morelos, Estado de MÃ©xico', 30, 1, '2018-08-08 15:03:09', 'Entrada'),
('K-2018-000026', '2018-08-08', 'W00000003', '15380 de, Av. Ing. Eduardo Molina 31b, Escuela de Tiro, 15390 Ciudad de MÃ©xico, CDMX', 15, 1, '2018-08-08 15:04:23', 'Entrada'),
('K-2018-000027', '2018-08-08', 'W00000003', 'Direccion General ISSSTE JesÃºs GarcÃ­a Corona 140, Buenavista, CDMX', 4, 1, '2018-08-08 15:05:58', 'Entrada'),
('K-2018-000028', '2018-08-08', 'W00000003', 'Guadalupe Victoria 15, Miguel Hidalgo, Ecatepec de Morelos, Estado de MÃ©xico', 30, 1, '2018-08-08 15:06:38', 'Salida'),
('K-2018-000029', '2018-08-08', 'W00000001', 'Osaka, Prefectura de Osaka, JapÃ³n', 9, 1, '2018-08-08 15:07:28', 'Entrada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_venta`
--

CREATE TABLE `transaccion_venta` (
  `codigo_transaccion` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `codigo` varchar(9) NOT NULL,
  `numero` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipo_transaccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transporte`
--

CREATE TABLE `transporte` (
  `codigo` varchar(9) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ubicacion` varchar(150) NOT NULL,
  `unidad` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transporte`
--

INSERT INTO `transporte` (`codigo`, `nombre`, `ubicacion`, `unidad`, `stock`, `created_user`, `created_date`, `updated_user`, `updated_date`) VALUES
('W00000001', 'Pegaso', 'Av Capitan Carlos LeÃ³n S/N, PeÃ±Ã³n de los BaÃ±os, Venustiano Carranza, 15620 Ciudad de MÃ©xico, CDMX', 'Aereo', 11, 1, '2018-08-07 01:54:31', 1, '2018-08-08 15:07:28'),
('W00000002', 'GrupoEI', 'AÃ±il 571, Granjas MÃ©xico, 08400 Ciudad de MÃ©xico, CDMX', 'Maritima', 3, 1, '2018-08-07 01:56:38', 1, '2018-08-08 14:38:30'),
('W00000003', 'ARSA', 'Ãlvaro ObregÃ³n, 09230 Ciudad de MÃ©xico, CDMX', 'Terrrestre', 21, 1, '2018-08-07 02:00:13', 1, '2018-08-08 15:06:38'),
('W00000004', 'SoraiMX', 'Col. Juarez, JuÃ¡rez, 06600 Ciudad de MÃ©xico, CDMX', 'Drone', 35, 1, '2018-08-07 02:06:15', 1, '2018-08-08 15:00:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` varchar(13) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `permisos_acceso` enum('Super Admin','Gerente','Almacenista','Visitante') NOT NULL,
  `status` enum('activo','bloqueado') NOT NULL DEFAULT 'activo',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `username`, `name_user`, `password`, `email`, `telefono`, `foto`, `permisos_acceso`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Sorai Mexico', '21232f297a57a5a743894a0e4a801fc3', 'sistemas@sorai.com', '7025', 'andres.jpg', 'Super Admin', 'activo', '2017-04-01 08:15:15', '2018-06-20 00:55:19'),
(5, 'gerente', 'gerete prueba', '1234', '', '', 'foto.jpg', 'Gerente', 'bloqueado', '2018-06-08 02:13:27', '2018-06-22 01:13:11'),
(6, 'pepito', 'Manuel Lopez Obrador', 'e10adc3949ba59abbe56e057f20f883e', '', '', 'visitante.jpg', 'Visitante', 'activo', '2018-06-08 23:17:48', '2018-06-20 00:54:48'),
(8, 'jefe', 'leticia cabeza', '827ccb0eea8a706c4c34a16891f84e7b', 'almacen@sorai.com.mx', '5475892359', 'almacen.jpg', 'Almacenista', 'activo', '2018-06-21 01:19:54', '2018-06-22 01:48:55'),
(11, 'generica', 'generica almacen', '827ccb0eea8a706c4c34a16891f84e7b', 'soytupapi@aol.com', '5525963521', 'IMG-20170315-WA0002.jpg', 'Almacenista', 'activo', '2018-06-21 01:45:55', '2018-06-21 01:48:49'),
(12, 'gerente01', 'Maria Jose de la Oya', 'e10adc3949ba59abbe56e057f20f883e', 'madelaoya@issste.gob.mx', '5585796532', 'IMG-20170315-WA0002.jpg', 'Gerente', 'activo', '2018-06-22 01:13:55', '2018-06-22 01:52:05'),
(13, 'almacenista02', 'prueba almacen', 'e10adc3949ba59abbe56e057f20f883e', 'fdsfjsd@sorai.com', '87454823894', 'IMG-20180208-WA0004.jpg', 'Almacenista', 'activo', '2018-06-22 01:18:54', '2018-06-22 01:49:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `codigo` varchar(7) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `unidad` varchar(20) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`codigo`, `nombre`, `precio_venta`, `unidad`, `created_user`, `created_date`, `updated_user`, `updated_date`) VALUES
('V000001', 'Gemas del Infinito', 2147483647, 'Contenedor especial', 1, '2018-07-20 01:32:27', 1, '2018-07-20 01:32:27'),
('V000002', 'Black Hole', 69852314, 'caja', 1, '2018-07-20 01:32:46', 1, '2018-07-20 01:32:46'),
('V000003', 'Singularidad', 1255638, 'bolsa', 1, '2018-07-20 01:33:00', 1, '2018-07-20 01:33:00'),
('V000004', 'puente de Einstein-Rosen', 986752423, 'Reefer', 1, '2018-07-20 01:33:20', 1, '2018-07-20 01:33:20'),
('V000005', 'Exoesqueleto V', 96058231, 'Contenedor especial', 1, '2018-07-20 01:33:40', 1, '2018-07-20 01:33:40'),
('V000006', 'Condensador de Flujo', 900000, 'caja', 1, '2018-07-20 01:34:00', 1, '2018-07-20 01:34:00'),
('V000007', 'Colisionado de particulas', 70000000, 'Contenedor especial', 1, '2018-07-20 01:34:23', 1, '2018-07-20 01:34:23'),
('V000008', 'Plutonio 236', 90000, 'Contenedor especial', 1, '2018-07-20 01:34:44', 1, '2018-07-20 01:34:44'),
('V000009', 'Uranio 235', 160000, 'Contenedor especial', 1, '2018-07-20 01:35:05', 1, '2018-07-20 01:35:05'),
('V000010', 'Quark Cuantico', 1200000, 'caja', 1, '2018-07-20 01:35:30', 1, '2018-07-20 01:35:30'),
('V000011', 'R00000004', 65320, 'tubo', 1, '2018-07-20 01:35:56', 1, '2018-07-20 01:35:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `created_user` (`created_user`),
  ADD KEY `updated_user` (`updated_user`);

--
-- Indices de la tabla `paquete`
--
ALTER TABLE `paquete`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `created_user` (`created_user`),
  ADD KEY `updated_user` (`updated_user`);

--
-- Indices de la tabla `puntos`
--
ALTER TABLE `puntos`
  ADD PRIMARY KEY (`IdPunto`);

--
-- Indices de la tabla `transaccion_medicamentos`
--
ALTER TABLE `transaccion_medicamentos`
  ADD PRIMARY KEY (`codigo_transaccion`),
  ADD KEY `id_barang` (`codigo`),
  ADD KEY `created_user` (`created_user`);

--
-- Indices de la tabla `transaccion_paquete`
--
ALTER TABLE `transaccion_paquete`
  ADD PRIMARY KEY (`codigo_transaccion`),
  ADD KEY `codigo` (`codigo`,`created_user`),
  ADD KEY `transaccion_paquete_ibfk_2` (`created_user`);

--
-- Indices de la tabla `transaccion_transporte`
--
ALTER TABLE `transaccion_transporte`
  ADD PRIMARY KEY (`codigo_transaccion`),
  ADD KEY `id_barang` (`codigo`),
  ADD KEY `created_user` (`created_user`);

--
-- Indices de la tabla `transaccion_venta`
--
ALTER TABLE `transaccion_venta`
  ADD PRIMARY KEY (`codigo_transaccion`),
  ADD KEY `codigo` (`codigo`,`created_user`);

--
-- Indices de la tabla `transporte`
--
ALTER TABLE `transporte`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `created_user` (`created_user`),
  ADD KEY `updated_user` (`updated_user`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `level` (`permisos_acceso`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD KEY `venta_ibfk_1` (`created_user`),
  ADD KEY `venta_ibfk_2` (`updated_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `puntos`
--
ALTER TABLE `puntos`
  MODIFY `IdPunto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD CONSTRAINT `medicamentos_ibfk_1` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medicamentos_ibfk_2` FOREIGN KEY (`updated_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `paquete`
--
ALTER TABLE `paquete`
  ADD CONSTRAINT `paquete_ibfk_1` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paquete_ibfk_2` FOREIGN KEY (`updated_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `transaccion_paquete`
--
ALTER TABLE `transaccion_paquete`
  ADD CONSTRAINT `transaccion_paquete_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `paquete` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaccion_paquete_ibfk_2` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `transaccion_transporte`
--
ALTER TABLE `transaccion_transporte`
  ADD CONSTRAINT `transaccion_transporte_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `transporte` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaccion_transporte_ibfk_2` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `transporte`
--
ALTER TABLE `transporte`
  ADD CONSTRAINT `transporte_ibfk_1` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transporte_ibfk_2` FOREIGN KEY (`updated_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`updated_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
