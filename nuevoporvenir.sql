-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2021 a las 18:21:53
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nuevoporvenir`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE `animales` (
  `a_id` int(11) NOT NULL,
  `a_nombre` varchar(100) NOT NULL,
  `a_edad` int(11) NOT NULL,
  `a_fotografia` varchar(200) NOT NULL,
  `a_descripcion` varchar(300) NOT NULL,
  `a_tipoAnimal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`a_id`, `a_nombre`, `a_edad`, `a_fotografia`, `a_descripcion`, `a_tipoAnimal`) VALUES
(1, 'Potro', 2, 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/animal4.jpg?alt=media&token=815b6289-aedc-4694-b762-57e48094fd5c', 'Caballo color negro brillante', 5),
(2, 'Kludd', 12, 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/animal2.jpg?alt=media&token=ee20d1cb-edfd-446e-88bb-15c1fadd97ae', 'Es una lechuza no un buho', 3),
(3, 'Bruce', 18, 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/animal1.jpg?alt=media&token=88dd7e28-17b8-428a-aab2-7ea603b88711', 'Es un pez espada ', 4),
(4, 'Kerro', 6, 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/animal3.jpg?alt=media&token=79a8fbbe-134e-4df3-9dfd-37ae64429051', 'Gato de rayas con ojos audaces ', 2),
(6, 'Rango', 15, 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/animal10.jpg?alt=media&token=10fb9b64-9457-4de1-be8d-c69572034c13', 'Soy una lagartija', 4),
(7, 'Gylfie', 8, 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/animal11.jpg?alt=media&token=a04f68cf-c76e-4a43-b9a9-412b659591df', 'Soy un aguila', 3),
(8, 'Crujiente', 15, 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/animal12.jpg?alt=media&token=8d3af1e0-b955-4617-961e-e5abaf331c3d', 'Somos una pareja de patos y nunca nos despatamos', 3),
(9, 'Pinky', 23, 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/animal6.jpg?alt=media&token=d301ea14-8181-4b07-9995-3ae90ab953de', 'Soy pinky y voy a dominar el mundo', 1),
(10, 'Señor Gato', 26, 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/animal7.jpg?alt=media&token=130c65ff-986a-49d2-8082-b1eed609a484', 'Soy el Señor gato y jamás me atraparas', 2),
(11, 'Cameleon', 19, 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/animal8.jpg?alt=media&token=dbe4244e-8f85-4b32-92f0-5a9db0fe1479', 'Soy un camaleón y me gusta camuflarme', 4),
(12, 'Lulu', 9, 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/animal9.jpg?alt=media&token=6b24e8aa-c412-4530-9ca7-7403f3f6311e', 'Soy una yegua con una mancha blanca y patas largas', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `p_id` int(11) NOT NULL,
  `p_producto` varchar(50) NOT NULL,
  `p_fotografia` varchar(200) NOT NULL,
  `p_precio` int(11) NOT NULL,
  `p_descripcion` varchar(200) NOT NULL,
  `p_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`p_id`, `p_producto`, `p_fotografia`, `p_precio`, `p_descripcion`, `p_tipo`) VALUES
(1, 'CipaCan Cachorros X 800', 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/cuido1.jpg?alt=media&token=c994aec3-db68-40f6-ba34-932842fc39cf', 2895, 'Cuido para cachorros ', 1),
(2, 'Gatsy X 500', 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/cuido2.jpg?alt=media&token=0c1b156c-8bfc-4be1-8c5e-b99ed726ce6a', 2450, 'Gatsy cuido para gatos adultos sabores caseros', 2),
(3, 'Pauche Felix X 85G', 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/cuido3.jpg?alt=media&token=e1c2c057-9389-4299-b343-3e13c31cfd05', 3500, 'Pauche Felix X 85G sabor salmón y pavo ahumado', 2),
(4, 'Chunky Delidog', 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/cuido4.jpg?alt=media&token=165dac4c-d003-472f-ab4e-1ab1df42aa8f', 7500, 'Enlatado Chunky Delidog X 800', 1),
(6, 'Cat Chow', 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/catChow.jpg?alt=media&token=2ffdf2a0-0d84-4e9f-aa85-c8088ba6ae5a', 9850, 'Cat Chow defense x 1000g', 2),
(7, 'Chunky Pollo', 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/chunkyPollo.jpg?alt=media&token=8c19224d-288b-45db-a6b4-ff8fde4cab40', 85500, 'Chunky Pollo para adultos x 25KG', 1),
(8, 'Ringo', 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/cuido6.jpg?alt=media&token=664cde0f-41f0-4a69-8785-3ee8d80f124a', 97500, 'Ringo Croquetas bulto x 30kg', 1),
(9, 'Cunipic', 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/cunipic.jpeg?alt=media&token=44fef747-7eee-45a4-9698-17094b8c74f2', 10350, 'Cunipic cuido para canto de aves', 3),
(10, 'Pavo', 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/piensoPavo.jpeg?alt=media&token=f42f93a7-9f1a-4cf7-a001-898c91158a57', 35800, 'Cuido para caballos complete x 10KG', 5),
(11, 'ReptiCalcium', 'https://firebasestorage.googleapis.com/v0/b/nuevoporvenirsebas.appspot.com/o/reptiCalcio.jpeg?alt=media&token=270cd4a5-d318-4ef2-8631-e865e4d4b179', 98750, 'Repticalcium calcio para reptiles', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`a_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animales`
--
ALTER TABLE `animales`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
