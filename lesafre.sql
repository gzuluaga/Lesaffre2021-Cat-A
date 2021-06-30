-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 30-06-2021 a las 03:04:46
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lesafre`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendars`
--

CREATE TABLE `calendars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `allDay` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_19_154148_create_tbl_puntuacions_table', 1),
(5, '2021_06_19_154149_create_tbl_aliases_table', 1),
(6, '2021_06_22_175629_create_event_lists_table', 2),
(7, '2021_06_22_193013_create_calendars_table', 3),
(8, '2021_06_23_024344_create_calendars_table', 4),
(9, '2021_06_24_003404_create_preguntas_table', 5),
(10, '2021_06_24_003405_create_opciones_preguntas_table', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones_preguntas`
--

CREATE TABLE `opciones_preguntas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pregunta` bigint(20) UNSIGNED NOT NULL,
  `nombrePregunta` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `criterio` tinyint(1) NOT NULL DEFAULT '0',
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pregunta` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `calificacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formtrivia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_star` datetime NOT NULL,
  `fecha_end` datetime NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_aliases`
--

CREATE TABLE `tbl_aliases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_aliases`
--

INSERT INTO `tbl_aliases` (`id`, `descripcion`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Acapulco', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(2, 'Aguascalientes', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(3, 'Apodaca', 1, '2020-07-19 19:56:15', '2020-07-20 19:45:53'),
(4, 'Buenavista', 1, '2020-07-19 19:56:15', '2020-07-20 20:35:53'),
(5, 'Campeche', 1, '2020-07-19 19:56:15', '2020-07-21 03:48:07'),
(6, 'Cancún', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(7, 'Celaya', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(8, 'Chalco', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(9, 'Chetumal', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(10, 'Chicoloapan', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(11, 'Chihuahua', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(12, 'Chilpancingo', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(13, 'Chimalhuacán', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(14, 'Ciudad Acuña', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(15, 'Ciudad de México DF (CDMX)', 1, '2020-07-19 19:56:15', '2020-07-24 04:05:20'),
(16, 'Ciudad del Carmen', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(17, 'Ciudad López Mateos', 1, '2020-07-19 19:56:15', '2020-07-20 20:35:17'),
(18, 'Ciudad Madero', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(19, 'Ciudad Obregón', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(20, 'Ciudad Valles', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(21, 'Ciudad Victoria', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(22, 'Coatzacoalcos', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(23, 'Colima', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(24, 'Córdoba', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(25, 'Cuauhtémoc', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(26, 'Cuautitlán', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(27, 'Cuautitlán Izcalli', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(28, 'Cuautla', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(29, 'Cuernavaca', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(30, 'Culiacán', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(31, 'Delicias', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(32, 'Durango', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(33, 'Ecatepec', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(34, 'Ensenada', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(35, 'Fresnillo', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(36, 'General Escobedo', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(37, 'Gómez Palacio', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(38, 'Guadalajara', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(39, 'Guadalupe', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(41, 'Guaymas', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(42, 'Hermosillo', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(43, 'Hidalgo del Parral', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(44, 'Iguala', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(45, 'Irapuato', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(46, 'Ixtapaluca', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(47, 'Jiutepec', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(48, 'Juárez', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(50, 'La Paz', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(51, 'León', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(52, 'Los Mochis', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(53, 'Manzanillo', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(54, 'Matamoros', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(55, 'Mazatlán', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(56, 'Mérida', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(57, 'Mexicali', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(58, 'Minatitlán', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(59, 'Miramar', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(60, 'Monclova', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(61, 'Monterrey', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(62, 'Morelia', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(63, 'Naucalpan', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(64, 'Naucalpan de Juárez', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(65, 'Navojoa', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(66, 'Nezahualcóyotl', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(67, 'Nogales', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(68, 'Nuevo Laredo', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(69, 'Oaxaca de Juárez', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(70, 'Ojo de Agua', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(71, 'Orizaba', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(72, 'Pachuca', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(73, 'Piedras Negras', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(74, 'Playa del Carmen', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(75, 'Poza Rica de Hidalgo', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(76, 'Puebla', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(77, 'Puerto Vallarta', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(78, 'Querétaro', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(79, 'Reynosa', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(80, 'Salamanca', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(81, 'Saltillo', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(82, 'San Cristóbal de las Casas', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(83, 'San Francisco Coacalco', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(84, 'San Juan Bautista Tuxtepec', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(85, 'San Juan del Río', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(86, 'San Luis Potosí', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(87, 'San Luis Río Colorado', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(88, 'San Miguel de Allende', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(89, 'San Nicolás de los Garza', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(90, 'San Pablo de las Salinas', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(91, 'San Pedro Garza García', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(92, 'Santa Catarina', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(93, 'Soledad de Graciano Sánchez', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(94, 'Tampico', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(95, 'Tapachula', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(96, 'Taxco', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(97, 'Tehuacán', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(98, 'Tepexpan', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(99, 'Tepic', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(100, 'Texcoco de Mora', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(101, 'Tijuana', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(102, 'Tlalnepantla', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(103, 'Tlaquepaque', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(104, 'Toluca', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(105, 'Tonalá', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(106, 'Torreón', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(107, 'Tulancingo de Bravo', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(108, 'Tuxtla', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(109, 'Uruapan', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(110, 'Veracruz', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(111, 'Villa de Álvarez', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(112, 'Villa Nicolás Romero', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(113, 'Villahermosa', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(114, 'Xalapa Enriquez', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(115, 'Xico', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(116, 'Zacatecas', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(117, 'Zamora', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15'),
(118, 'Zapopan', 1, '2020-07-19 19:56:15', '2020-07-19 19:56:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_puntuacions`
--

CREATE TABLE `tbl_puntuacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `puntuacion` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razon_social` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado_usr` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `alias`, `razon_social`, `tipo_user`, `email_verified_at`, `password`, `estado_usr`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Crhistian David Vargas', 'cristian-d-2@hotmail.com', 'Administrador', 'cyg colombia', 'Administrador', NULL, '$2y$10$lOoPgTlLfs8KGjWKGxRFV.H3WnaEcGL9BCzdtZPsrCF4q4Dycll6a', 1, NULL, '2021-06-20 01:08:55', '2021-06-22 22:42:54');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_pocision_mes`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_pocision_mes` (
`name` varchar(255)
,`alias` varchar(255)
,`id_user` bigint(20) unsigned
,`puntuacion` decimal(27,2)
,`fecha` varchar(7)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_posiscion`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_posiscion` (
`name` varchar(255)
,`alias` varchar(255)
,`id_user` bigint(20) unsigned
,`email` varchar(255)
,`puntuacion` decimal(27,2)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_pocision_mes`
--
DROP TABLE IF EXISTS `vw_pocision_mes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_pocision_mes`  AS SELECT `u`.`name` AS `name`, `u`.`alias` AS `alias`, `u`.`id` AS `id_user`, sum(`p`.`puntuacion`) AS `puntuacion`, date_format(`p`.`created_at`,'%m/%Y') AS `fecha` FROM (`tbl_puntuacions` `p` join `users` `u` on(((`p`.`user_id` = `u`.`id`) and (`u`.`tipo_user` = 'proveedor')))) GROUP BY `u`.`name`, `u`.`alias`, date_format(`p`.`created_at`,'%m/%Y') ORDER BY sum(`p`.`puntuacion`) DESC ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_posiscion`
--
DROP TABLE IF EXISTS `vw_posiscion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_posiscion`  AS SELECT `u`.`name` AS `name`, `u`.`alias` AS `alias`, `u`.`id` AS `id_user`, `u`.`email` AS `email`, sum(`p`.`puntuacion`) AS `puntuacion` FROM (`tbl_puntuacions` `p` join `users` `u` on(((`p`.`user_id` = `u`.`id`) and (`u`.`tipo_user` = 'proveedor')))) GROUP BY `u`.`name`, `u`.`alias` ORDER BY sum(`p`.`puntuacion`) DESC, `u`.`name` ASC ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calendars`
--
ALTER TABLE `calendars`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opciones_preguntas`
--
ALTER TABLE `opciones_preguntas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opciones_preguntas_id_pregunta_foreign` (`id_pregunta`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_aliases`
--
ALTER TABLE `tbl_aliases`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_puntuacions`
--
ALTER TABLE `tbl_puntuacions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_puntuacions_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_alias_unique` (`alias`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calendars`
--
ALTER TABLE `calendars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `opciones_preguntas`
--
ALTER TABLE `opciones_preguntas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_aliases`
--
ALTER TABLE `tbl_aliases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT de la tabla `tbl_puntuacions`
--
ALTER TABLE `tbl_puntuacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `opciones_preguntas`
--
ALTER TABLE `opciones_preguntas`
  ADD CONSTRAINT `opciones_preguntas_id_pregunta_foreign` FOREIGN KEY (`id_pregunta`) REFERENCES `id_preguntas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_puntuacions`
--
ALTER TABLE `tbl_puntuacions`
  ADD CONSTRAINT `tbl_puntuacions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
