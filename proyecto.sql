-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2022 a las 07:36:54
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.2.34

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
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `anio` int(4) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `idioma` varchar(50) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor`, `anio`, `pais`, `idioma`, `stock`) VALUES
(1, 'Divina comedia', 'Dante Alighieri', 1321, 'Italia', 'Italiano', 20),
(2, 'Orgullo y prejuicio', 'Jane Austen', 1813, 'Reino Unido', 'Inglés', 15),
(3, 'Papá Goriot', 'Honoré de Balzac', 1835, 'Francia', 'Francés', 15),
(4, 'El extranjero', 'Albert Camus', 1942, 'Argelia', '	Francés', 25),
(5, 'Don Quijote de la Mancha', 'Miguel de Cervantes', 1615, 'España', 'Español', 18),
(6, 'Ficciones', 'Jorge Luis Borges', 1986, 'Argentina', 'Español', 15),
(7, 'Grandes Esperanzas', 'Charles Dickens', 1861, 'Reino Unido', 'Inglés', 10),
(8, 'Cien años de soledad', 'Gabriel García Márquez', 1967, 'Colombia', 'Español', 22),
(9, 'El amor en los tiempos del cólera', 'Gabriel García Márquez', 1985, 'Colombia', 'Español', 12),
(10, 'La conciencia de Zeno', 'Italo Svevo', 1923, 'Italia', 'Italiano', 20),
(11, 'Hamlet', 'William Shakespeare', 1603, 'Inglaterra', 'Inglés', 15),
(12, 'El rey Lear', 'William Shakespeare', 1608, 'Inglaterra', 'Inglés', 21),
(13, 'Pedro Páramo', 'Juan Rulfo', 1955, 'México', 'Español', 10),
(14, 'Cuentos', 'Edgar Allan Poe', 1901, 'Estados Unidos', 'Inglés', 25),
(15, 'Hijos de la medianoche', 'Salman Rushdie', 1981, 'India', 'Inglés', 15),
(16, 'Ensayo sobre la ceguera', 'José Saramago', 1995, 'Portugal', 'Portugués', 10),
(17, 'Pippi Calzaslargas', 'Astrid Lindgren', 1945, 'Suecia', 'Sueco', 12),
(18, 'La señora Dalloway', 'Virginia Woolf', 1925, 'Reino Unido', 'Inglés', 5),
(19, 'Al faro', 'Virginia Woolf', 1925, 'Reino Unido', 'Inglés', 15),
(20, 'Hojas de hierba', 'Walt Whitman', 1855, '	Estados Unidos', 'Inglés', 10),
(21, 'Todo se desmorona', 'Chinua Achebe', 1958, 'Nigeria', 'Inglés', 27),
(23, 'Viaje al fin de la noche', 'Louis-Ferdinand Céline', 1932, 'Francia', 'Francés', 11),
(24, 'La barca sin pescador', 'Alejandro Casona', 1945, 'España', 'Español', 16),
(25, 'La dama del alba', 'Alejandro Casona', 1944, 'España', 'Español', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`) VALUES
(1, 'psuarez@gmail.com', '1234'),
(2, 'rperez@gmail.com', '1234'),
(3, 'osanchez@gmail.com', '1234'),
(4, 'martigas@gmail.com', '1234'),
(5, 'tisano@gmail.com', '1234'),
(6, 'valentina@gmail.com', '1234'),
(7, 'martin@gmail.com', '1111'),
(8, 'gonzalo@gmail.com', '2222'),
(9, 'miguel@gmail.com', 'b17g'),
(10, 'martina@gmail.com', '2345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
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
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
