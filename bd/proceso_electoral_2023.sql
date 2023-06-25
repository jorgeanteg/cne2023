-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2023 a las 06:51:23
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proceso_electoral_2023`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspirantes`
--

CREATE TABLE `aspirantes` (
  `id_asp` int(11) NOT NULL,
  `dignidad_asp` varchar(50) DEFAULT NULL,
  `cedula_asp` varchar(10) DEFAULT NULL,
  `apellidos_asp` varchar(100) DEFAULT NULL,
  `nombres_asp` varchar(100) DEFAULT NULL,
  `titulo_asp` varchar(100) DEFAULT NULL,
  `movimiento_asp` varchar(200) DEFAULT NULL,
  `latitud_asp` varchar(100) DEFAULT NULL,
  `longitud_asp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `aspirantes`
--

INSERT INTO `aspirantes` (`id_asp`, `dignidad_asp`, `cedula_asp`, `apellidos_asp`, `nombres_asp`, `titulo_asp`, `movimiento_asp`, `latitud_asp`, `longitud_asp`) VALUES
(13, 'Presidente', '0550241236', 'Noboa ', 'Daniel ', 'Magister en Administración Pública ', 'Movimiento Pueblo Igualdad Democracia (PID), lista 4.', '-2.183378180579061', '-79.90422647541354'),
(14, 'Presidente', '0550247896', 'Armijos ', 'Bolívar ', 'Abogado', 'Movimiento Acción Movilizadora (Amigo), lista 16.', '1.2714771860973693', '-78.84269713927921'),
(15, 'Presidente', '0880542456', 'Topic ', 'Jan ', 'Economista', 'Partido Social Cristiano (PSC), lista 6.', '-2.1490704411650006', '-79.893926793343'),
(16, 'Presidente', '0440253612', 'Sonnenholzner', 'Otto ', 'Economista', 'Partido Político Avanza, lista 8.', '-2.0894376086184736', '-79.95393933921085'),
(17, 'Presidente', '0550249817', 'Gonzáles ', 'Luisa ', 'Abogada', 'Movimiento Político Revolución Ciudadana (RC), lista 5.', '-0.6657162204840437', '-80.10108912384035'),
(18, 'Presidente', '0550123698', 'Villavicencio ', 'Fernando ', 'Periodista', 'Movimiento Construye, lista 25.', '-2.198506916011617', '-78.84660241903883'),
(19, 'Presidente', '0440120589', 'Pérez ', 'Yaku ', 'Abogado', 'Partido Unidad Popular (UP), lista 2.', '-2.8989547466178043', '-79.00225592702053'),
(20, 'Presidente', '0440551236', 'Hervas ', 'Xavier ', 'Empresario', 'Movimiento Renovación Total (RETO), lista 33.', '-2.2485607176207854', '-79.89461343881436'),
(21, 'Asambleísta Nacional', '0550210368', 'Tuala ', 'Eustaquio', 'Licenciado', 'Movimiento Político Revolución Ciudadana (RC), lista 5.', '-1.2539853069182776', '-78.62374519345443'),
(22, 'Asambleísta Nacional', '0550249817', 'Arotingo', 'Margarita', 'Abagada', 'Movimiento Político Revolución Ciudadana (RC), lista 5.', '0.33250618126978854', '-78.21679835933449'),
(23, 'Asambleísta Nacional', '0550247896', 'Correa', 'Pierina ', 'Arquitecta', 'Movimiento Político Revolución Ciudadana (RC), lista 5.', '-2.2238603047982015', '-79.9406186853962'),
(24, 'Asambleísta Nacional', '0880629582', 'Munizaga', 'Carlos', 'Abogado', 'Partido Político Avanza, lista 8.', '-3.934839247796999', '-79.18167845115278'),
(25, 'Asambleísta Nacional', '0980561478', 'Acaiturri', 'Jorge', 'Ingeniero', 'Partido Social Cristiano (PSC), lista 6.', '-0.9320341628460741', '-79.224839525333'),
(26, 'Asambleísta Nacional', '0550210369', 'Días', 'Marcela', 'Economista', 'Movimiento Centro Democrático Nacional', '-1.7935121136684666', '-79.54155968968254'),
(27, 'Asambleísta Nacional', '0780451289', 'Agualsaca ', 'José ', 'Ninguno', 'Partido Unidad Popular (UP), lista 2.', '-0.45708646098069117', '-76.99592113530507'),
(28, 'Asambleísta Nacional', '0880551245', 'Arias ', 'Nathalie ', 'Magister en Administración Pública ', 'Movimiento Creando Oportunidades (CREO), lista 21.', '-0.163721799144804', '-76.61792280331545'),
(29, 'Asambleísta Nacional', '0230365642', 'Corral ', 'Raisa ', 'Ingeniero', 'Movimiento Centro Democrático Nacional', '-2.305701345986954', '-78.12733031879597'),
(30, 'Asambleísta Nacional', '0445128745', 'Quishpe ', 'Salvador', 'Abogado', 'Movimiento Plurinacional Pachakutik (PK), lista 18.', '-1.0414960976630137', '-78.57599630871444'),
(31, 'Asambleísta Nacional', '0880451236', 'Vanegas ', 'Ricardo ', 'Ingeniero', 'Movimiento Político Revolución Ciudadana (RC), lista 5.', '-0.084388003119531', '-79.44803605735504'),
(32, 'Asambleísta Nacional', '0785201478', 'Viteri ', 'Nathalie ', 'Ingeniero', 'Movimiento Renovación Total (RETO), lista 33.', '-2.8846821765225794', '-79.01956928321975'),
(33, 'Asambleísta Nacional', '0369874512', 'Zambrano ', 'Eitel ', 'Abogada', 'Movimiento Acción Movilizadora (Amigo), lista 16.', '-2.397090608570677', '-80.36029141372644'),
(34, 'Asambleísta Nacional', '0887895612', 'Monge ', 'César ', 'Economista', 'Movimiento Creando Oportunidades (CREO), lista 21.', '1.0668500210526355', '-79.55989654717942'),
(35, 'Asambleísta Provincial', '0550248978', 'Segovia ', 'Luis ', 'Ingeniero', 'Movimiento Plurinacional Pachakutik (PK), lista 18.', '-3.225166733914988', '-79.49803082810867'),
(36, 'Asambleísta Provincial', '0450263987', 'Chimbo ', 'Segundo ', 'Economista', 'Movimiento Plurinacional Pachakutik (PK), lista 18.', '-2.6161525027311856', '-79.35030040739373'),
(37, 'Asambleísta Provincial', '0550214578', 'Luna ', 'Blasco ', 'Abogado', 'Partido Izquierda Democrática (ID), lista 12.', '-2.5435728242150053', '-78.9476952792944'),
(38, 'Asambleísta Provincial', '0897895612', 'Narváez ', 'Ramiro ', 'Ingeniero', 'Partido Izquierda Democrática (ID), lista 12.', '0.6253322626672423', '-77.95056456390269'),
(39, 'Asambleísta Provincial', '0784512458', 'Estrada ', 'Katherine ', 'Abogada', 'Partido Sociedad Unida Más Acción (SUMA), lista 23.', '-1.6171275557533975', '-78.59890671764609'),
(40, 'Asambleísta Provincial', '036987854', 'Molina ', 'Gissella ', 'Magister en Administración Pública ', 'Movimiento Creando Oportunidades (CREO), lista 21.', '-0.9305625270026329', '-78.60731710720864'),
(41, 'Asambleísta Provincial', '0123697845', 'Zambrano ', 'Carlos ', 'Economista', 'Movimiento Político Revolución Ciudadana (RC), lista 5.', '-3.268565105516963', '-79.94814420111045'),
(42, 'Asambleísta Provincial', '0555477845', 'Ortiz', 'Eduardo', 'Ingeniero', 'Movimiento Pueblo Igualdad Democracia (PID), lista 4.', '0.9744101199208278', '-79.6170401005538'),
(43, 'Asambleísta Provincial', '0880451247', 'Rojas ', 'Fredy ', 'Ingeniero', 'Partido Unidad Popular (UP), lista 2.', '-0.4929660016199509', '-90.33819041155004'),
(44, 'Asambleísta Provincial', '0223698778', 'Espín ', 'Sofía', 'Abogada', 'Movimiento Plurinacional Pachakutik (PK), lista 18.', '-2.0893731441151555', '-79.9193326757837'),
(45, 'Asambleísta Provincial', '0451236987', 'Ruiz ', 'Mario ', 'Economista', 'Movimiento Renovación Total (RETO), lista 33.', '0.7960311675508515', '-78.40115803289763'),
(46, 'Asambleísta Provincial', '0231232145', 'Placencia ', 'Lucía ', 'Economista', 'Movimiento Centro Democrático Nacional', '-4.014102355896388', '-79.20709128974117'),
(47, 'Asambleísta Provincial', '0450128974', 'Salazar ', 'Mónica ', 'Periodista', 'Partido Socialista Ecuatoriano, lista 17.', '-1.44042891552096', '-79.50669207791209'),
(48, 'Asambleísta Provincial', '0452698784', 'Barreto ', 'Lenin ', 'Abogado', 'Movimiento Plurinacional Pachakutik (PK), lista 18.', '-0.308674049294951', '-79.52430692788907'),
(49, 'Asambleísta Provincial', '0450697845', 'Chumpi ', 'José ', 'Ninguno', 'Movimiento Plurinacional Pachakutik (PK), lista 18.', '-2.3365068292671753', '-78.1611515719144'),
(50, 'Asambleísta Provincial', '0897845245', 'Cerda', 'Rosa ', 'Abogada', 'Partido Sociedad Unida Más Acción (SUMA), lista 23.', '-0.4504512917253985', '-77.88130784464427'),
(51, 'Asambleísta Provincial', '0120356987', 'Sánchez ', 'Mariuxi ', 'Ingeniero', 'Partido Unidad Popular (UP), lista 2.', '-0.9266010750179756', '-75.52570626476013'),
(52, 'Asambleísta Provincial', '0241235487', 'Jachero ', 'Washington ', 'Economista', 'Partido Sociedad Unida Más Acción (SUMA), lista 23.', '-1.636915434830197', '-76.06628336189718'),
(53, 'Asambleísta Provincial', '0890451236', 'Jaramillo ', 'César ', 'Ingeniero', 'Movimiento Centro Democrático Nacional', '-0.17492143470416333', '-78.47414018743201');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aspirantes`
--
ALTER TABLE `aspirantes`
  ADD PRIMARY KEY (`id_asp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aspirantes`
--
ALTER TABLE `aspirantes`
  MODIFY `id_asp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
