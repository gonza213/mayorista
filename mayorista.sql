-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2021 a las 22:09:06
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mayorista`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text NOT NULL,
  `obs` text NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `obs`, `fecha`) VALUES
(2, 'Remeras', '', '2021-10-02 20:29:30'),
(3, 'Jeans', '', '2021-10-03 22:54:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `email` text NOT NULL,
  `asunto` text NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `email`, `asunto`, `mensaje`, `fecha`) VALUES
(1, 'Gonzalo', 'gonzaa.vidal.18@gmail.com', 'Bienvenida', 'dgdgdgd', '2021-10-05 03:12:16'),
(3, 'Gonzalo Vidal', 'gonzav.freelance@gmail.com', 'sdasd', 'asdasdas', '2021-10-19 19:16:54'),
(4, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', 'holaa', 'sasdasdas', '2021-10-19 19:19:15'),
(5, 'Gonzalo Vidal', 'gonzav.freelance@gmail.com', 'Holaa', 'Holaaa', '2021-10-19 19:21:50'),
(6, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', 'Holaa', 'Holaaa', '2021-10-19 19:23:45'),
(7, 'Gonzalo Vidal', 'gonzav.freelance@gmail.com', 'dasdas', 'dasdasdas', '2021-10-19 19:24:26'),
(8, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', 'Holaaa', 'Holaaaa', '2021-10-19 19:29:33'),
(9, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', 'dsada', 'dasdasdas', '2021-10-19 19:30:33'),
(10, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', 'Holaaa', 'Holaaaa', '2021-10-19 20:14:25'),
(11, 'Gonzalo Vidal', 'gonzav.freelance@gmail.com', 'holaa', 'Holaa', '2021-10-19 20:31:06'),
(12, 'Gonzalo Vidal', 'gonzav.freelance@gmail.com', 'Test1 ', 'Test prueba', '2021-10-20 14:40:58'),
(13, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', 'Test1', 'Si funciona mucho mejor', '2021-10-20 17:35:38'),
(14, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', 'Galletas', 'Hola estoy interesado en las galletas.', '2021-10-20 17:39:01'),
(15, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', 'Galletas', 'Hola estoy interesado en las galletas.', '2021-10-20 17:39:46'),
(16, 'Gonzalo Vidal', 'gonzav.freelance@gmail.com', 'Holaa', 'hOLAAAAA', '2021-10-20 18:19:10'),
(17, 'Gina', 'gina@gmail.com', 'Holaa', 'Holaaaa', '2021-10-20 18:34:07'),
(18, 'Gina', 'gina@gmail.com', 'Holaa', 'Holaaaa', '2021-10-20 18:34:59'),
(19, 'Gonzalo Vidal', 'gina@gmail.com', 'Holaa', 'Holaaaa', '2021-10-20 18:44:42'),
(20, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', 'Holaaa', 'Holaaaa', '2021-10-20 18:45:18'),
(21, 'Gonzalo', 'gina@gmail.com', 'sfsafs', 'dasdasda', '2021-10-20 18:46:14'),
(22, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', 'werwe', 'fsdfsd', '2021-10-20 18:46:49'),
(23, 'Gonzalo Vidal', 'gina@gmail.com', 'sdad', 'dasdasdas', '2021-10-20 18:48:06'),
(24, 'Gonzalo Vidal', 'info@transportepiro.com.ar', 'sfasf', 'fasfasfas', '2021-10-20 18:49:44'),
(25, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', 'sfasd', 'dasdasdas', '2021-10-20 18:50:57'),
(26, 'holaaa', 'gonzaa.vidal.18@gmail.com', 'jkbkj', 'kjbkj', '2021-10-20 18:53:46'),
(27, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', 'Galletas', 'dasdasdasdas', '2021-10-20 18:55:19'),
(28, 'Gonzalo Vidal', 'gonzav.freelance@gmail.com', 'SAS', 'DASDAS', '2021-10-20 19:06:50'),
(29, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', 'GSADAS', 'DASDAS', '2021-10-20 19:07:51'),
(30, 'Gonzalo Vidal', 'gonzav.freelance@gmail.com', 'Holaa', 'kkgukubuyhui', '2021-10-20 19:14:47'),
(31, 'Gonzalo Vidal', 'gonzav.freelance@gmail.com', 'kj', 'oikj', '2021-10-20 19:34:38'),
(32, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', 'ewee', 'dweww', '2021-10-20 19:59:50'),
(33, 'erwr', 'gonzaa.vidal.18@gmail.com', 'wdwe', 'adweaea', '2021-10-20 20:00:54'),
(34, 'Gonzalo', 'gonzav.freelance@gmail.com', 'Holaa', 'Holaaa', '2021-10-21 17:31:44'),
(35, 'Gonzalo Vidal', 'gonzav.freelance@gmail.com', 'holaa', 'holaaa', '2021-10-21 17:38:24'),
(36, 'Gonzalo', 'gonzav.freelance@gmail.com', 'okdasd', 'Holaaa', '2021-10-21 17:39:52'),
(37, 'Gonzalo Vidal', 'gonzav.freelance@gmail.com', 'dasdas', 'dasdasd', '2021-10-21 17:41:38'),
(38, 'Gonzalo Vidal', 'gonzav.freelance@gmail.com', 'Galletas', 'Holaa me interesa esas galletas.', '2021-10-22 01:34:14'),
(39, 'Gonzalo', 'gonzav.freelance@gmail.com', 'fssfsd', 'dasdasdas', '2021-10-22 01:37:17'),
(40, 'Gonzalo Vidal', 'gonzav.freelance@gmail.com', 'Galletas', 'Holaaaa', '2021-10-22 01:38:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `id_producto` text NOT NULL,
  `imagenes` text NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `id_producto`, `imagenes`, `fecha`) VALUES
(4, '2', 'views/images/productos/imagenes/1633247241_2_remera_verde_lisa_1.jpg', '0000-00-00 00:00:00'),
(5, '2', 'views/images/productos/imagenes/1633406772_2_puntofape_camiseta-verde.jpg', '2021-10-05 01:06:12'),
(6, '3', 'views/images/productos/imagenes/1633407119_3_whatsapp_image_2021-04-26_at_15-54-20-8e04dac8514be4b54716194701696150-640-0.jpeg', '2021-10-05 01:11:59'),
(7, '3', 'views/images/productos/imagenes/1633407119_3_jeans.jpg', '2021-10-05 01:11:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planilla`
--

CREATE TABLE `planilla` (
  `id` int(11) NOT NULL,
  `archivo` text NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `planilla`
--

INSERT INTO `planilla` (`id`, `archivo`, `fecha`) VALUES
(1, 'views/images/planilla/1634188019_CV VALERIA.pdf', '2021-10-14 02:06:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_p` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `info` text NOT NULL,
  `descripcion` text NOT NULL,
  `precio` text NOT NULL,
  `stock` int(11) NOT NULL,
  `imagen` text NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `recomendar` text NOT NULL,
  `fecha_p` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_p`, `nombre`, `info`, `descripcion`, `precio`, `stock`, `imagen`, `id_categoria`, `recomendar`, `fecha_p`) VALUES
(2, 'Remera verde', '<p>Remeras verdes</p>', '<p>Remeras verdes de la mejor calidad.</p>', '2.400', 50, 'views/images/productos/894.jpg', 2, '1', '2021-10-02 23:37:57'),
(3, 'Jean negro', '<p>Jean Negro</p>', '<p>Jean negros de la mejor calidad para hombres.</p>', '3.400', 50, 'views/images/productos/5456.jpg', 3, '1', '2021-10-03 22:57:04'),
(4, 'Jean común', '<p>Jean Comun.</p>', '<p>Jean común de gran calidad. Sexo mixto.</p>', '5.400', 47, 'views/images/productos/7698.jpg', 3, '0', '2021-10-04 00:40:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `email` text NOT NULL,
  `tel` text NOT NULL,
  `dni` text NOT NULL,
  `domicilio` text NOT NULL,
  `ciudad` text NOT NULL,
  `provincia` text NOT NULL,
  `lista` text NOT NULL,
  `total` text NOT NULL,
  `operacion` text NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id`, `nombre`, `email`, `tel`, `dni`, `domicilio`, `ciudad`, `provincia`, `lista`, `total`, `operacion`, `fecha`) VALUES
(2, 'Teresa Aguirre', 'tere.agui72@gmail.com', '296662932', '22.725.318', 'Rene Favaloro 612', 'Rio Gallegos', 'Santa Cruz', '[{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":13600,\"cantidad\":4,\"id\":3},{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":9600,\"cantidad\":4,\"id\":2}]', '23.200', '2519', '2021-10-05 02:48:29'),
(8, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', '2966607924', '36105733', 'Calle 50', 'La Plata', 'Buenos Aires', '[{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3},{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":9600,\"cantidad\":4,\"id\":2}]', '13.000', '3570', '2021-10-19 17:57:39'),
(9, 'Gonzalo', 'gonzav.freelance@gmail.com', '2966607924', '36105733', 'calle 234', 'La Plata', 'Buenos Aires', '[{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3},{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":9600,\"cantidad\":4,\"id\":2}]', '13.000', '9423', '2021-10-19 18:02:14'),
(10, 'Gonzalo Vidal', 'gonzav.freelance@gmail.com', '2966607924', '36105733', 'Calle 50', 'La Plata', 'Buenos Aires', '[{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3},{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":9600,\"cantidad\":4,\"id\":2}]', '13.000', '4820', '2021-10-19 18:23:46'),
(11, 'Valeria', 'vale@gmail.com', '2966607924', '423423', 'calle 234', 'Nueva York', 'Nueva York', '[{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3},{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":9600,\"cantidad\":4,\"id\":2}]', '13.000', '4038', '2021-10-19 18:27:17'),
(12, 'Valeria', 'vale@gmail.com', '2966607924', '36105733', 'calle 234', 'Nueva York', 'Nueva York', '[{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3},{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":9600,\"cantidad\":4,\"id\":2}]', '13.000', '2056', '2021-10-19 18:28:45'),
(13, 'Gonzalo', 'gonzaa.vidal.18@gmail.com', '2966607924', '36105733', 'calle 234', 'La Plata', 'Nueva York', '[{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3},{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":9600,\"cantidad\":4,\"id\":2}]', '13.000', '6747', '2021-10-19 18:30:47'),
(14, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', '2966607924', '36105733', 'Calle 50', 'La Plata', 'Buenos Aires', '[{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3},{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":9600,\"cantidad\":4,\"id\":2}]', '13.000', '6757', '2021-10-19 18:35:07'),
(15, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', '2966607924', '36105733', 'Calle 50', 'La Plata', 'Buenos Aires', '[{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3},{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":9600,\"cantidad\":4,\"id\":2}]', '13.000', '8665', '2021-10-19 18:37:04'),
(16, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', '2966607924', '36105733', 'Calle 50', 'La Plata', 'Buenos Aires', '[{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3},{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":9600,\"cantidad\":4,\"id\":2}]', '13.000', '7315', '2021-10-20 14:15:58'),
(17, 'Gonzalo Vidal', 'gonzav.freelance@gmail.com', '2966607924', '36105733', 'Calle 50', 'La Plata', 'Buenos Aires', '[{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3},{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":9600,\"cantidad\":4,\"id\":2}]', '13.000', '4773', '2021-10-20 16:51:01'),
(19, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', '2966607924', '36105733', 'Calle 50', 'La Plata', 'Buenos Aires', '[{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3},{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":9600,\"cantidad\":4,\"id\":2}]', '13.000', '6246', '2021-10-20 17:29:14'),
(20, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', '2966607924', '36105733', 'Calle 50', 'La Plata', 'Buenos Aires', '[{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":16800,\"cantidad\":7,\"id\":2},{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3}]', '20.200', '7968', '2021-10-20 17:51:28'),
(21, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', '2966607924', '36105733', 'Calle 50', 'La Plata', 'Buenos Aires', '[{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":16800,\"cantidad\":7,\"id\":2},{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3}]', '20.200', '9400', '2021-10-20 18:56:51'),
(22, 'Gonzalo Vidal', 'gonzav.freelance@gmail.com', '2966607924', '36105733', 'Calle 50', 'La Plata', 'Buenos Aires', '[{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":16800,\"cantidad\":7,\"id\":2},{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3}]', '20.200', '8561', '2021-10-20 18:58:40'),
(23, 'Gonzalo', 'gonzaa.vidal.18@gmail.com', '2966607924', '36105733', 'calle 234', 'La Plata', 'Buenos Aires', '[{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":16800,\"cantidad\":7,\"id\":2},{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3}]', '20.200', '6208', '2021-10-20 19:00:16'),
(24, 'Gonzalo', 'gonzav.freelance@gmail.com', '2966607924', '36105733', 'calle 234', 'La Plata', 'Buenos Aires', '[{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":16800,\"cantidad\":7,\"id\":2},{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3}]', '20.200', '4743', '2021-10-20 19:01:19'),
(25, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', '2966607924', '36105733', 'Calle 50', 'La Plata', 'Buenos Aires', '[{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3},{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":2400,\"cantidad\":1,\"id\":2}]', '5.800', '2664', '2021-10-22 01:08:32'),
(27, 'Gonzalo', 'gonzav.freelance@gmail.com', '2966607924', '36105733', 'Calle 50', 'La Plata', 'Buenos Aires', '[{\"nombre\":\"Jean negro\",\"imagen\":\"views/images/productos/5456.jpg\",\"precio\":3400,\"cantidad\":1,\"id\":3},{\"nombre\":\"Remera verde\",\"imagen\":\"views/images/productos/894.jpg\",\"precio\":2400,\"cantidad\":1,\"id\":2}]', '5.800', '8773', '2021-10-22 01:30:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripciones`
--

CREATE TABLE `suscripciones` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `email` text NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `suscripciones`
--

INSERT INTO `suscripciones` (`id`, `nombre`, `email`, `fecha`) VALUES
(3, '1', 'gonzaa.vidal.18@gmail.com', '2021-10-15 00:36:11'),
(4, '1', 'gina@gmail.com', '2021-10-19 16:08:16'),
(5, 'Gonzalo', 'gonzaa.vidal.18@gmail.com', '2021-10-19 17:33:15'),
(6, '1', 'ginaa@gmail.com', '2021-10-19 17:44:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `usuario` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `rol` text NOT NULL,
  `foto` text NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `email`, `password`, `rol`, `foto`, `fecha`) VALUES
(2, 'Administrador', 'admin', 'admin@correo.com', '$2y$05$2ihDv8vVf7QZ9BsaRrKyqeH5gKAC2X6K7MRsna2tL1qDBxZmvEhAO', 'administrador', 'views/src/images/person.svg', '2021-09-25 00:34:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `planilla`
--
ALTER TABLE `planilla`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_p`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `planilla`
--
ALTER TABLE `planilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
