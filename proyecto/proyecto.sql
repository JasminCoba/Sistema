-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2021 a las 02:12:15
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `nombre` varchar(1000) NOT NULL,
  `paterno` varchar(1000) NOT NULL,
  `materno` varchar(1000) NOT NULL,
  `edad` int(255) NOT NULL,
  `sexo` varchar(1000) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nombre`, `paterno`, `materno`, `edad`, `sexo`, `id`) VALUES
('Isaac', 'Perez', 'Amayo', 19, 'Hombre', 1),
('Jesus ', 'Can', 'Dominguez', 20, 'Hombre', 2),
('Walter', 'Castañeda', 'Miranda', 19, 'Hombre', 3),
('Jasmin', 'Coba', 'Candanedo', 20, 'Mujer', 4),
('Leonardo', 'Rosas ', 'Garcia', 21, 'Hombre', 5),
('Antonio', 'Perez', 'Amayo', 25, 'Hombre', 6),
('Imanol', 'Jaimez ', 'Juarez', 21, 'Hombre', 7),
('Braulio', 'Rodriguez', 'Perez', 34, 'Hombre', 8),
('Angel', 'David', 'Dzul', 21, 'Hombre', 9),
('Kevin ', 'Rodriguez', 'Hernandez', 17, 'Hombre', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `correo` varchar(1000) NOT NULL,
  `telefono` varchar(1000) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`correo`, `telefono`, `id`) VALUES
('isaacperezamayo@gmail.com', '9983219777', 1),
('jesuscandominguez@gmail.com', '998123456', 2),
('waltercuaoctemoc@gmail.com', '998654987', 3),
('jasmincoba17@gmail.com', '998789410', 4),
('leodanielgarcia@outlook.com', '999451002', 5),
('contra111@gmail.com', '9984045665', 6),
('imanoliscool@gmail.com', '998654987', 7),
('brauliorodriguez12@gmail.com', '9987845212', 8),
('angeldavid12@gmail.com', '998654789', 9),
('kevinhernandez111@gmail.com', '993211657', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `nativo` varchar(1000) NOT NULL,
  `idioma` varchar(1000) NOT NULL,
  `objetivo` varchar(1000) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`nativo`, `idioma`, `objetivo`, `id`) VALUES
('Español', 'japones', 'Viajar a otro pais', 1),
('Español', 'noruego', 'Quiero conocer mas personas', 2),
('Español', 'aleman', 'Saber mas idiomas', 3),
('Español', 'japones', 'Quiero ir a japon', 4),
('Español', 'chino', 'Quiero ir a conocer gente humilde', 5),
('Español', 'japones', 'Quiero conocer la cultura de japon', 6),
('Español', 'japones', 'Reforzar el conocimiento aprendido de antes', 7),
('Español', 'japones', 'es por motivo de trabajo', 8),
('Español', 'portugues', 'Tengo familia en brazil y quiero saber el idioma', 9),
('Español', 'aleman', 'namas por hooby', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `tipo` varchar(1000) NOT NULL,
  `turno` varchar(1000) NOT NULL,
  `curso` varchar(1000) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modalidad`
--

INSERT INTO `modalidad` (`tipo`, `turno`, `curso`, `id`) VALUES
('linea', 'Matutino', 'Regular', 1),
('presencial', 'Matutino', 'Intensivo', 2),
('presencial', 'Matutino', 'Regular', 3),
('presencial', 'Vespertino', 'Regular', 4),
('presencial', 'Vespertino', 'Regular', 5),
('presencial', 'Matutino', 'Regular', 6),
('linea', 'Vespertino', 'Regular', 7),
('presencial', 'Matutino', 'Regular', 8),
('presencial', 'Vespertino', 'Regular', 9),
('presencial', 'Vespertino', 'Regular', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `supo` varchar(1000) NOT NULL,
  `trabaja` varchar(1000) NOT NULL,
  `estudiado` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`supo`, `trabaja`, `estudiado`, `id`) VALUES
('Facebook', 'Si', 'No', 1),
('Amigos', 'Si', 'No', 2),
('Facebook', 'Si', 'Si', 3),
('Publicidad en facebook', 'No', 'No', 4),
('Por facebook', 'Si', 'Si', 5),
('Facebook', 'No', 'No', 6),
('Amigos', 'Si', 'Si', 7),
('internet', 'Si', 'Si', 8),
('Facebook', 'No', 'No', 9),
('Un amigo', 'Si', 'No', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
