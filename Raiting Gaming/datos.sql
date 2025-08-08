-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2025 a las 21:44:17
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `midb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `Caratula` varchar(2000) NOT NULL,
  `Juego` varchar(50) NOT NULL,
  `Genero` varchar(20) NOT NULL,
  `Distribuidor` varchar(120) NOT NULL,
  `Desarrollador` varchar(50) NOT NULL,
  `Consolas` varchar(60) NOT NULL,
  `Lanzamiento` varchar(45) NOT NULL,
  `Valoracion` int(10) NOT NULL,
  `ValoracionPositiva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `Caratula`, `Juego`, `Genero`, `Distribuidor`, `Desarrollador`, `Consolas`, `Lanzamiento`, `Valoracion`, `ValoracionPositiva`) VALUES
(1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-sKiT6nzYx0D4sH55DjwY2EjRilwEodWE9w&s', 'Metal Slug X', 'Accion', 'SNK, Hamster Corporation, Agetec', 'SNK, DotEmu', ' Nintendo Switch, Android, Microsoft Windows, PSP, Videojueg', '1 de marzo de 1999', 0, 0),
(2, 'https://media.vandal.net/t200/58488/undertale-2018918124716_7.jpg', 'Undertale', 'Videojuego independi', '	Steam, GOG.com, Humble Store, PlayStation Store, Nintendo eShop y Microsoft Store', 'Toby Fox', 'Microsoft Windows, OS X Linux, PlayStation 4, PlayStation Vi', '15 de septiembre de 2015', 0, 0),
(3, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxeZsRpI_VTtlDmY2VtfKaKnQhDsONtvJPkQ&s', 'Aladdin', 'Videojuego de plataf', 'Virgin Interactive, The Walt Disney Company, Sega, Capcom, Ubisoft, Virgin Group', 'Virgin Interactive, NMS Software, Disney Interacti', 'Sega Genesis, DOS, Amiga, NES, Game Boy, Game Boy Color', '11 de noviembre de 1993', 0, 0),
(4, 'https://i.redd.it/michael-jackson-moonwalker-what-are-your-thoughts-on-this-v0-6kjhi33ezkpd1.jpg?width=748&format=pjpg&auto=webp&s=309462bc56b626d533d7e5d27e704956226bffc5', 'Michael Jacksons Moonwalker', 'Beat em up', 'Sega', 'Triumph, Sega', 'Arcade, Mega Drive, Master System, Amiga, Amstrad CPC, Atari', '24 de agosto de 1990', 0, 0),
(5, 'https://upload.wikimedia.org/wikipedia/en/5/5f/Tobal_No._1.jpg', 'Tobal No. 1', 'Videojuego de pelea,', 'Squaresoft, Sony Interactive Entertainment', 'DreamFactory, Squaresoft', 'PlayStation', '2 de agosto de 1996', 0, 0),
(6, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVXeTXnQHwIFn0aank93dYNcFZaVEDer_-WA&s', 'Doko Demo Issyo', 'Simulador de vida Ma', 'Sony Interactive Entertainment', 'Bexide', 'PlayStation', '22 de julio de 1999', 0, 0),
(7, 'https://upload.wikimedia.org/wikipedia/en/5/5f/Tf2_standalonebox.jpg', 'Team Fortress 2 ', 'Shooter en primera p', 'Valve Corporation', 'Valve Corporation', 'Ventanas Xbox 360 PlayStation 3 macOS Linux', '10 de octubre de 2007', 0, 0),
(8, 'https://2.bp.blogspot.com/--Q0ZsBPmPok/WMLrKP3fAII/AAAAAAABWgA/JRLn_jeiCSIMlg2BsC1JuoQec2kDQp8xwCLcB/s1600/quake-1-expansiones-1996-pc-full-portada.jpg', 'Quake', 'FPS', 'GT Interactive (PC) PXL computers (Amiga) MacSoft (Macintosh) Midway Games (N64) Sega (SS) Pulse Interactive (mobile)', 'id Software ClickBOOM (Amiga) Lobotomy Software (S', 'Amiga, Falcon, IRIX, Macintosh, PC (DOS, GNU/Linux, Windows)', '22 de junio de 1996', 0, 0),
(9, 'https://upload.wikimedia.org/wikipedia/en/f/f8/Etvideogamecover.jpg', 'ET el Extraterrestre', 'Aventura', 'Atari, Inc.', 'Atari, Inc.', 'Atari 2600', 'Diciembre de 1982', 0, 0),
(10, 'https://upload.wikimedia.org/wikipedia/en/9/99/Conkersbfdbox.jpg', 'Conkers Bad Fur Day ', 'Plataformas , acción', 'Rare', 'Rare', 'Nintendo 64', '5 de marzo de 2001', 0, 0),
(11, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJB4VNMphH6JnhyV74j-6G347gFYXQe8d79A&s', 'Super Mario 64', 'Plataformas Acción y', 'Nintendo', 'Nintendo', 'Nintendo 64', '23 de junio de 1996', 0, 0),
(12, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAqNwfUh8T9eyfmxXgpH-VQ-DUPoBKXVzPFg&s', 'ICO', 'Aventura', 'Sony Computer Entertainment', 'Team ICO', 'PlayStation 2 PlayStation 3', '24 de septiembre de 2001', 0, 0),
(13, 'https://i.pinimg.com/736x/20/54/b6/2054b617ac11f24e23d62e05f85303d4.jpg', 'League of Legends', 'Videojuego multijuga', 'Riot Games', 'Riot Games', 'Microsoft Windows, MacOS', '26 de octubre de 2009', 0, 0),
(14, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTR6JSTPOs4LYp9Dr9U81B2ae_DV6vgwI7hWA&s', 'Dance Dance Revolution V', 'Musica', 'Capcom', 'Sega', 'PC', '14 de mayo de 2020', 0, 0),
(15, 'https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/770810/capsule_616x353_latam.jpg?t=1746237894', 'Buena pizza, Gran pizza', 'Videojuego de simula', 'TapBlaze, PM Studios', 'TapBlaze', 'Nintendo Switch, Android, iOS, Microsoft Windows, macOS, Mac', '2 de diciembre de 2014', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
