-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: vm17.db.swarm.test
-- Tiempo de generación: 01-06-2021 a las 08:31:02
-- Versión del servidor: 10.5.9-MariaDB-1:10.5.9+maria~focal
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iron`
--

-- --------------------------------------------------------


--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`) VALUES
(2, 'combate'),
(3, 'industria');

-- --------------------------------------------------------


--
-- Volcado de datos para la tabla `bloques`
--

INSERT INTO `bloques` (`id_hijo`, `id_padre`, `contenido`) VALUES
(264, 3, 'La industria. Este sector económico bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla'),
(265, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. '),
(266, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. '),
(267, 3, ' 2021 05 20 21 46 17.png'),
(268, 3, 'aaaaaa'),
(269, 3, 'prueba'),
(442, 2, 'Texto para rellenar'),
(443, 2, 'El combate'),
(444, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. '),
(445, 2, ' 2021 05 20 11 17 05.png'),
(446, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. '),
(447, 2, 'Un poco más de texto'),
(448, 2, ' 2021 05 20 13 26 04.png');

-- --------------------------------------------------------


--
-- Volcado de datos para la tabla `comentarios`
--
-- --------------------------------------------------------
INSERT INTO `comentarios` (`id`, `comentario`, `fecha`, `id_usuario`, `id_hilo`) VALUES
(1, 'Tengo un bug', '2021-05-20', 14, 2),
(2, 'este es un comentario de prueba', '2021-05-31', 22, 2);

--
-- Volcado de datos para la tabla `hilos`
--

INSERT INTO `hilos` (`id`, `titulo`, `fecha`, `mensaje`, `id_U`) VALUES
(1, ' ', '2021-05-20', '', 14),
(2, 'Hola tengo un bug', '2021-05-20', 'Bugs', 14),
(3, ' prueba 2', '2021-05-22', 'proof', 15),
(4, ' Opinion', '2021-05-30', 'resumire mis opiniones', 20),
(5, ' prueba  de hilo ', '2021-05-31', 'resumire mis opiniones', 22),
(6, ' prueba  de hilo ', '2021-05-31', 'proof', 22);

-- --------------------------------------------------------


--
-- Volcado de datos para la tabla `mapa`
--

INSERT INTO `mapa` (`id`, `nombre`, `ruta`) VALUES
(1, 'Mapete', 'Ambrosiete.boimap'),
(2, 'Mapita', 'Pepe.boimap'),
(3, 'capo', 'kingdra.boimap');

-- --------------------------------------------------------


--
-- Volcado de datos para la tabla `produtos`
--

INSERT INTO `produtos` (`id`, `nombre`, `descripcion`, `imagen`, `id_tipo`) VALUES
(1, 'tarjeta', 'tarjeta de puntos', 'img/tarteja.png', 3),
(2, 'camiseta', 'es una camisa azul', 'img/camisa.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--
--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `nombre`) VALUES
(1, 'ropa'),
(2, 'gorra'),
(3, 'otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--


-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `apellidos`, `correo`, `rol_id`) VALUES
(1, 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa@ucm.es', 1),
(9, 'chamako', '', '', '', '', 2),
(10, 'luis', '12345', 'luis11', 'montenegro', 'lmontene@ucm.es', 2),
(13, 'luis1', 'floriluz11', 'luis1', 'luis1', 'luis1@sd', 2),
(14, 'Ambrosiete', '$2y$10$tMLSpqBv2S2nzWLUFdV.K.gP/n3D9Z.OY1V77ZzRBpk', 'Ambrosio', 'Pérez', 'ambrosio@gmail.com', 2),
(15, 'Pepe', '$2y$10$NbDWl/5Wj1/Y2ijhoYfrIeTN4xqeI6woSxdbCAnjW53X9hNyMQt0.', 'Pepe', 'Pérez', 'pepe@ucm.com', 2),
(16, 'astarol', '$2y$10$kvbJmv4MR7hOGXGPmCqhneEolguJ8vgDeEhoQrx/Qh61.e75UyV6W', 'astral ', 'aster', 'a@ucm.es', 2),
(18, 'carlosmario', '$2y$10$jAgAsZSNKHsOO3QSlkGJte/f8ejQUkd7c.nJqEvXH3P56KBFJ4ogO', 'charles', 'martinez', 'q@ucm.es', 2),
(19, 'camus', '$2y$10$3jcM/7HGPqRbyBNomDbY5eAWTmSEw7ZqBaTU6AqwY4qdbi559lrgO', 'camposanto ', 'grus', 'b@ucm.es', 2),
(20, 'MAcaco', '$2y$10$xshp8ee.n2aRCT57uajrrOmeH4riqgRwaO6/1r9s2aHTR5wKJRGyK', 'camaaa', 'aster', 'rafaelhatercillo@gmail.com', 1),
(22, 'kingdra', '$2y$10$UgYSASOPS6AKct.M9b8SSeOYd12UZUKis9Yxr.b0iBqd1Ci6XnxWC', 'astral ', 'marquez', 'a@gmail.com', 2);

-- --------------------------------------------------------

ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titulo` (`titulo`);

--
-- Indices de la tabla `bloques`
--
ALTER TABLE `bloques`
  ADD PRIMARY KEY (`id_hijo`),
  ADD KEY `relacion_bloque_articulo` (`id_padre`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentario_fk_hilo` (`id_hilo`),
  ADD KEY `comentario_fk_usuario` (`id_usuario`);

--
-- Indices de la tabla `hilos`
--
ALTER TABLE `hilos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hilo_fk_usuario` (`id_U`);

--
-- Indices de la tabla `mapa`
--
ALTER TABLE `mapa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD UNIQUE KEY `ruta` (`ruta`);

--
-- Indices de la tabla `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `productos_fk_tipo` (`id_tipo`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `venta_fk_usuario` (`id_usuario`),
  ADD KEY `venta_fk_producto` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `bloques`
--
ALTER TABLE `bloques`
  MODIFY `id_hijo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=473;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `hilos`
--
ALTER TABLE `hilos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `mapa`
--
ALTER TABLE `mapa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bloques`
--
ALTER TABLE `bloques`
  ADD CONSTRAINT `relacion_bloque_articulo` FOREIGN KEY (`id_padre`) REFERENCES `articulos` (`id`);

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentario_fk_hilo` FOREIGN KEY (`id_hilo`) REFERENCES `hilos` (`id`),
  ADD CONSTRAINT `comentario_fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `hilos`
--
ALTER TABLE `hilos`
  ADD CONSTRAINT `hilo_fk_usuario` FOREIGN KEY (`id_U`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `productos_fk_tipo` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id`);

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuarios` (`rol_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_fk_producto` FOREIGN KEY (`id_producto`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `venta_fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
