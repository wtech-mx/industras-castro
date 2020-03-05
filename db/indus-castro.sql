-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2020 a las 23:18:59
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `indus-castro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `extracto` varchar(250) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `texto` text NOT NULL,
  `thumb` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `extracto`, `fecha`, `texto`, `thumb`) VALUES
(2, 'Titulo primer post', 'ï¿½Quï¿½ es Lorem Ipsum?Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de', '2020-02-03 23:01:30', 'ï¿½Quï¿½ es Lorem Ipsum?\r\nLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estï¿½ndar de las industrias desde el aï¿½o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usï¿½ una galerï¿½a de textos y los mezclï¿½ de tal manera que logrï¿½ hacer un libro de textos especimen', 'salon5.jpg'),
(3, 'Titulo tercer post', 'ï¿½Quï¿½ es Lorem Ipsum?Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de', '2020-01-31 02:30:37', 'ï¿½Quï¿½ es Lorem Ipsum?\r\nLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estï¿½ndar de las industrias desde el aï¿½o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usï¿½ una galerï¿½a de textos y los mezclï¿½ de tal manera que logrï¿½ hacer un libro de textos especimen', 'facial3.jpg'),
(8, 'prueba galy', 'prueba galyprueba galyprueba galyprueba galyprueba galyprueba galy', '2020-02-03 22:49:06', 'prueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galyprueba galy', 'facial2.jpg'),
(9, 'spa', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium ', '2020-01-31 05:11:37', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.', 'facial5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faciales`
--

CREATE TABLE `faciales` (
  `imagen_ID` int(11) NOT NULL,
  `imagen_Marca` varchar(200) CHARACTER SET ucs2 NOT NULL,
  `imagen_Tipo` varchar(200) NOT NULL,
  `imagen_Img` varchar(200) NOT NULL,
  `imagen_Img2` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Tabla de Imagenes';

--
-- Volcado de datos para la tabla `faciales`
--

INSERT INTO `faciales` (`imagen_ID`, `imagen_Marca`, `imagen_Tipo`, `imagen_Img`, `imagen_Img2`) VALUES
(17, 'Subir, Mostrar, Modificar y Eliminar una Imagen en MySQL desde PHP', '591216', '258573.jpg', '482585.jpg'),
(18, 'Prueba img', '591216', '940081.jpg', '390529.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manipedi`
--

CREATE TABLE `manipedi` (
  `imagen_ID` int(11) NOT NULL,
  `imagen_Marca` varchar(200) CHARACTER SET ucs2 NOT NULL,
  `imagen_Tipo` varchar(200) NOT NULL,
  `imagen_Img` varchar(200) NOT NULL,
  `imagen_Img2` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Tabla de Imagenes';

--
-- Volcado de datos para la tabla `manipedi`
--

INSERT INTO `manipedi` (`imagen_ID`, `imagen_Marca`, `imagen_Tipo`, `imagen_Img`, `imagen_Img2`) VALUES
(22, 'Prueba', 'Subi', '905006.jpg', '461852.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `masajes`
--

CREATE TABLE `masajes` (
  `imagen_ID` int(11) NOT NULL,
  `imagen_Marca` varchar(200) CHARACTER SET ucs2 NOT NULL,
  `imagen_Tipo` varchar(200) NOT NULL,
  `imagen_Img` varchar(200) NOT NULL,
  `imagen_Img2` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Tabla de Imagenes';

--
-- Volcado de datos para la tabla `masajes`
--

INSERT INTO `masajes` (`imagen_ID`, `imagen_Marca`, `imagen_Tipo`, `imagen_Img`, `imagen_Img2`) VALUES
(19, 'Prueba img', 'Mostrar', '810124.jpg', '550624.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `texto_boton` varchar(50) NOT NULL,
  `url_boton` text NOT NULL,
  `estilo_boton` varchar(30) NOT NULL,
  `estado` int(1) NOT NULL,
  `orden` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `titulo`, `descripcion`, `url_image`, `texto_boton`, `url_boton`, `estilo_boton`, `estado`, `orden`) VALUES
(1, 'Salon de Belleza', 'Tu estilo ,tu decides', 'mujer-salon.jpg', 'Ver Ahora', 'http://salongalyspa.com.mx/Salon-belleza', 'info', 1, 4),
(2, 'Tratamientos Faciales', 'Agenda tu Cita', 'facial.jpg', 'Ver mÃ¡s', 'http://salongalyspa.com.mx/Salon-belleza', 'warning', 1, 0),
(3, 'Masajes', 'Lo mejor', 'tc3.jpg', 'Leer mÃ¡s', 'http://salongalyspa.com.mx/Masajes', 'info', 1, 1),
(4, 'Tratamientos Corpotales', 'Agenda tu Cita\r\n ', 'masaje2.jpg', 'Agenda tu Cita  ', 'http://salongalyspa.com.mx/Tratamientos-Corporales', 'info', 1, 3),
(5, 'prueba', 'pruebapruebapruebaprueba', 'masaje3.jpg', 'Comprar ahora!', 'http://salongalyspa.com.mx/Salon-belleza', 'info', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_imagenes`
--

CREATE TABLE `tbl_imagenes` (
  `imagen_ID` int(11) NOT NULL,
  `imagen_Marca` varchar(200) CHARACTER SET ucs2 NOT NULL,
  `imagen_Tipo` varchar(200) NOT NULL,
  `imagen_Img` varchar(200) NOT NULL,
  `imagen_Img2` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Tabla de Imagenes';

--
-- Volcado de datos para la tabla `tbl_imagenes`
--

INSERT INTO `tbl_imagenes` (`imagen_ID`, `imagen_Marca`, `imagen_Tipo`, `imagen_Img`, `imagen_Img2`) VALUES
(19, 'Prueba', 'Subi', '436656.jpg', '792848.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `faciales`
--
ALTER TABLE `faciales`
  ADD PRIMARY KEY (`imagen_ID`);

--
-- Indices de la tabla `manipedi`
--
ALTER TABLE `manipedi`
  ADD PRIMARY KEY (`imagen_ID`);

--
-- Indices de la tabla `masajes`
--
ALTER TABLE `masajes`
  ADD PRIMARY KEY (`imagen_ID`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_imagenes`
--
ALTER TABLE `tbl_imagenes`
  ADD PRIMARY KEY (`imagen_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `faciales`
--
ALTER TABLE `faciales`
  MODIFY `imagen_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `manipedi`
--
ALTER TABLE `manipedi`
  MODIFY `imagen_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `masajes`
--
ALTER TABLE `masajes`
  MODIFY `imagen_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_imagenes`
--
ALTER TABLE `tbl_imagenes`
  MODIFY `imagen_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
