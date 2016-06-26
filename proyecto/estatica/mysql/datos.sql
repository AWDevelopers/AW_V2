-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2016 a las 21:07:19
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `incommong`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `idProducto` int(10) NOT NULL,
  `CIFOng` varchar(9) NOT NULL,
  `DNIUsuario` varchar(9) NOT NULL,
  `numProductos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donaciones`
--

CREATE TABLE `donaciones` (
  `donaciones_id` bigint(20) NOT NULL,
  `DNIUsuario` varchar(9) NOT NULL,
  `idProyecto` int(10) NOT NULL,
  `donacion` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `donaciones`
--

INSERT INTO `donaciones` (`donaciones_id`, `DNIUsuario`, `idProyecto`, `donacion`) VALUES
(1, '73422420A', 41, 450),
(2, '73422420A', 42, 150),
(3, '45731662A', 41, 500),
(4, '45731662A', 48, 550),
(5, '45731661W', 42, 2500),
(6, '45731661W', 43, 5000),
(7, '50551762Q', 50, 10000),
(8, '50551762Q', 45, 1589),
(9, '72894735F', 50, 50000),
(10, '50551761S', 49, 15000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id` int(10) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `tipo` enum('primaria','secundaria','terciaria','otra') NOT NULL,
  `descripcionCorta` text,
  `descripcionLarga` text NOT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `tipo`, `descripcionCorta`, `descripcionLarga`, `fecha`, `imagen`) VALUES
(1, '24 horas conduciendo por una buena causa', 'primaria', 'Ford España organiza la XIII carrera benéfica, en la que diez ONG buscarán recaudar fondos para sus proyectos solidarios', 'Los días 24 y 25 de junio tendrá lugar la XIII edición de la Carrera Solidaria 24 Horas Ford, una competición que celebra anualmente la empresa de coches en el Circuito del Jarama (Madrid). Se trata de una prueba de eficiencia automovilística en la que diez vehi?culos parten con una cantidad limitada de combustible y ocho cubiertas, que deberán dosificar durante 24 horas, turna?ndose todos los conductores. La clasificacio?n final se establece por el nu?mero de vueltas que haya conseguido dar cada equipo.\r\n\r\nLa carrera tiene un carácter solidario y sus participantes serán diez organizaciones de diferentes a?mbitos, elegidas por un jurado asesorado por representantes de la Fundacio?n SERES, que competira?n por poner en marcha un proyecto relacionado con discapacidad, infancia y juventud, vi?ctimas de accidentes, enfermos, pai?ses en desarrollo o personas en riesgo de exclusio?n social.\r\n\r\nComo en las anteriores ediciones, cada ONG participante estara? representada por un equipo liderado por rostros populares que prestara?n su imagen de modo altruista. Completara?n la dotacio?n representantes de los patrocinadores, clientes, periodistas, asi? como empleados de Ford Espan?a. El vehi?culo de las 24 Horas Ford 2016 sera? el Ford Fiesta ST.', '2016-06-26', 'img/noticia1.jpg'),
(2, 'La Cruz Roja viajará a Malvinas', 'primaria', 'En el archipiélago hay 123 tumbas anónimas de argentinos fallecidos en la guerra de 1982\r\nOtros2', '&quot;Soldado argentino solo conocido por Dios&quot;, puede leerse en 123 de las 250 tumbas de combatientes argentinos enterrados en el cementerio de Darwin, en las islas Malvinas. Tras una larga espera de más de 30 años, esos epitafios de la guerra contra Reino Unido están ahora un poco más cerca de poderse cambiar. El Gobierno argentino ha anunciado que una misión técnica del Comité Internacional de la Cruz Roja viajará a fin de mes al archipiélago para evaluar aspectos prácticos de un &quot;eventual trabajo de identificación forense de los restos de los miembros de las Fuerzas Armadas inhumados&quot;.\r\n\r\nLa Cancillería autorizó la misión &quot;en atención a la naturaleza estrictamente humanitaria de la iniciativa y al compromiso asumido por el Gobierno argentino en llevar adelante el reconocimiento de los restos de los soldados caídos&quot;, señaló la cartera encabezada por Susana Malcorra en un comunicado. El viaje de la Cruz Roja es posible gracias a un principio de acuerdo alcanzado entre el Gobierno argentino y el británico, según confió una fuente oficial al diario La Nación', '2016-06-26', 'img/noticia2.jpg'),
(3, 'Médicos Sin Fronteras rechazará fondos de la UE', 'primaria', 'La ONG cree que el acuerdo con Turquía &quot;pone en peligro el propio concepto de refugiado&quot;', 'Médicos Sin Fronteras ha dado este jueves un golpe en la mesa. A partir de ahora esta ONG rechazará el dinero de la Unión Europea y de los 28 Gobiernos que la integran en protesta por una política que consideran centrada en “externalizar el control migratorio” y que “sienta un peligroso precedente”. Los fondos a los que renuncian supusieron el año pasado 63 millones de euros (19 millones de Bruselas y el resto de Ejecutivos comunitarios, incluidos 625.000 euros del español).', '2016-06-26', 'img/noticia3.jpg'),
(4, 'La ONG Remar pide voluntarios para ir a Lesbos', 'primaria', 'La ONG Remar pide voluntarios para ir a Lesbos y fondos para dar raciones de comida a refugiados', 'La ONG española Remar, ha lanzado un mensaje de alerta este viernes porque necesita voluntarios que quieran colaborar en sus programas en Lesbos y Atenas y donaciones para mantener las 6.000 raciones de comida diarias que reparte allí a más de 3.000 refugiados.\r\n&quot;Es urgente cerrar el envío de 15 voluntarios para la primera quincena del mes de Julio para el apoyo al trabajo misionero de la ONG en estos campamentos griegos&quot;, explica la ONG Remar.\r\n\r\nTanto para donaciones económicas como para formar parte del equipo de voluntarios, Remar ha habilitado una dirección de correo electrónico (info@remar.org) a la que los interesados pueden dirigirse.', '2016-06-26', 'img/noticia4.jpg'),
(5, 'Ayudamos a los 40.000 niños que huyen de la violencia', 'terciaria', 'Faluya: ayudamos a los 40.000 niños que huyen de la violencia', 'El incremento de la violencia en Faluya, Iraq, ha obligado a 85.000 familias a huir de sus casas para ponerse a salvo. En UNICEF calculamos que entre ellas se encuentran casi 40.000 niños que están llegando a los campamentos de desplazados de la zona.\r\nSalir de Faluya no es fácil, especialmente para los más de 8.200 hombres que han sido detenidos en los controles de seguridad y entre los que podría haber más de 1.200 menores de edad. El conflicto está provocando que muchas familias se separen sin saber cuándo volverán a verse. \r\n\r\nLos que consiguen llegar a los campamentos de refugiados se están encontrando con lugares al límite de su capacidad y donde tampoco es fácil conseguir alojamiento, agua y alimentos. Miles de niños pasan horas a pleno sol soportando las altas temperaturas.', '2016-06-26', 'img/noticia5.jpeg'),
(6, 'Demasiado delgados para ser vacunados', 'terciaria', '', 'Moyanesh Almerew es una trabajadora sanitaria de la región de Amahra, en Etiopía, que está viendo con sus propios ojos cómo la sequía, agravada por el fenómeno de El Niño está afectando a los niños en este país. \r\nMoyanesh forma parte de un programa sanitario que recorre las comunidades de todo el país para llevar servicios básicos de salud a toda la población de Etiopía, que es mayoritariamente rural. \r\n\r\nSegún esta trabajadora, se han encontrado con muchos más casos de niños con desnutrición aguda grave este año que en otras ocasiones y los casos que están atendiendo son mucho peores. Entre ellos destaca Fikir, una bebé de 6 meses que Moyanesh conoció durante una de sus visitas.', '2016-06-26', 'img/terciaria.jpg'),
(7, 'Conoce la historia de Mina', 'terciaria', 'Ayuda refugiados: conoce la historia de Mina', 'De todo lo que he escuchado durante el Día Mundial de los Refugiados, me quedo con una frase que nos ha dicho Mina durante nuestro primer Facebook Live: &quot;Con 15 años siento como que tengo muchos más, que he vivido muchos más&quot;. Y no miente.\r\nA su corta edad, Mina ya habla español, inglés, francés, algo de holandés y árabe, su lengua materna. Ha vivido en tres países incluido Iraq, donde nació y de donde huyó tras ver cómo mataban y mutilaban a vecinos y gente cercana.\r\n\r\nDesde la llegada de ISIS ya nadie de su círculo familiar, de religión cristiana, vive en Iraq. Están repartidos por distintos países y se ven poco. Los echa de menos.', '2016-06-26', 'img/noticia6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ong`
--

CREATE TABLE `ong` (
  `CIF` varchar(9) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ong`
--

INSERT INTO `ong` (`CIF`, `nombre`, `direccion`, `email`, `usuario`, `pass`, `telefono`, `imagen`) VALUES
('G28567790', 'Manos Unidas', 'alle Barquillo, 38', 'manosUnidas@hotmail.com', 'manosUnidas', '$2y$11$AWVhr52RsjCFy', 0, 'img/manosUnidas.jpg'),
('G28947653', 'GreenPeace', 'calle San. Bernardo, nº 107', 'greenpeace@gmail.com', 'greenpeace', '$2y$11$WDbLI0VSFQfz.', 0, 'img/greenpeace-logo.jpg'),
('G79362497', 'Save The Children', 'Calle de Mauricio Legendre, 36,', 'saveChildrens@hotmail.com', 'saveChildren', '$2y$11$ghKxbMnkKMJel', 0, 'img/STC.png'),
('G84451087', 'Unicef', 'C/ Barquillo, 38', 'unicef@hotmail.com', 'unicef', '$2y$11$nHO4cSFRtCSqa', 0, 'img/unicef.png'),
('Q2866001G', 'Cruz Roja', 'RAFAEL VILLA, S/N 28023', 'cruzRoja@hotmail.com', 'CruzRoja', '$2y$11$0NTx6pLsGUvV5', 0, 'img/layout_set_logo.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(10) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `descripcionCorta` mediumtext NOT NULL,
  `descripcionLarga` longtext NOT NULL,
  `CIFOng` varchar(9) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `stock`, `precio`, `nombre`, `descripcionCorta`, `descripcionLarga`, `CIFOng`, `imagen`) VALUES
(18, 500, 15, 'Pulsera solidaria', 'pulsera solidaria', 'pulsera solidaria', 'G28567790', 'img/pulseras.jpg'),
(19, 500, 25, 'Caja de experiencias', 'caja de experiencias', 'Greenpeace crea la caja de experiencias en la que puedes regalar a tus familiares y amigos la experiencia de proteger el Ártico y muchas experiencias más. Porque al proteger el Ártico protegerás las playas del Cantábrico, las montañas de Navacerrada y los osos polares o los osos pardos.  Regalarás un trozo de futuro al planeta.', 'G28947653', 'img/caja-de-experiencias.jpg'),
(20, 450, 22, 'Caja Especial Ballenas', 'caja especial de ballenas', 'Una caja perfecta para disfrutar, mejor en compañía o dedicándote un ratito especial para celebrar que la has recibido. Y si la regalas, sería genial. No hay nada como hacer feliz a alguien.', 'G28567790', 'img/caja-especial-ballenas.jpg'),
(21, 500, 4, 'Pulseras Unicef', 'pulsera solidaria', '3 modelos de pulsera de tela con colores vivos y diseños originales: motivos étnicos, infantiles o adornados con frases. Un regalo solidario perfecto para quien tú quieras, incluso para ti, porque te lo mereces.', 'G28567790', 'img/pulseras_solidarias_tres-600x600.jpg'),
(22, 250, 12, 'Taza Salvar a las ballenas', 'Taza', 'De las diferentes especies de ballenas que existen, casi todas sus poblaciones se encuentran reducidas, algunas al borde de la extinción. ¡Ayúdanos a protegerlas con nuestra taza!', 'G28947653', 'img/taza-ballenas.jpg'),
(23, 300, 3, 'Espejo Salvar a las ballenas', 'espejo', 'espejo para salvar a las ballenas', 'G28947653', 'img/espejo.jpg'),
(24, 350, 12, 'Abanico', 'abanico de la cruz roja', 'UN MOMENTO DE RESPIRO. Gracias por dar un poquito de aire a los que más lo necesitan. Abanico de madera y tela. Diseñado por Chus Burés, España', 'Q2866001G', 'img/abanico.jpg'),
(25, 650, 6, 'Bateria portatil', 'bateria portatil', 'Batería portátil para móvil. No te vuelvas a quedar con el móvil descargado por falta de encontrar un enchufe. Con esta batería podrás recargar tú móvil al menos una vez en cualquier lugar', 'Q2866001G', 'img/bateria.jpg'),
(26, 1000, 4, 'Boligrafo solidario', 'boligrafio', 'boligrafio solidario de unicef, compralo y ayuda a los niños', 'G84451087', 'img/boligrafo.jpg'),
(27, 400, 25, 'Camiseta Save the Childrens', 'camiseta ong', 'camiseta ong save the children', 'G79362497', 'img/safe the children camiseta.jpg'),
(28, 200, 20, 'Camiseta Cruz Roja', 'camiseta de la cruz roja', 'camiseta solidaria de la cruz roja', 'Q2866001G', 'img/camisacruz.jpg'),
(29, 300, 4, 'Bidon', 'bidon para agua', 'Bidón para agua que te servirá para tus actividades deportivas. Color rojo metalizado con logo Cruz Roja', 'Q2866001G', 'img/bidon.jpg'),
(30, 300, 6, 'Llavero Skipping', 'Llavero Skipping', 'Llavero solidario de aleación de Zinc, con tornillería y cable de acero recubierto de plástico para el cierre, con grabado láser de las letras UNICEF. Modelos niña y niño.', 'G84451087', 'img/llaveros_skipping-600x600.jpg'),
(31, 350, 7, 'Cuaderno Unicef', 'Cuaderno Unicef', 'Estos cuadernos solidarios tienen el tamaño ideal para llevarlos siempre contigo', 'G84451087', 'img/cuaderno_pequeno_flower_-600x600.jpg'),
(32, 200, 18, 'Paraguas', 'paraguas unicef', '¿Quién dijo que un paraguas no podría ser un buen regalo solidario? Este producto con logotipo de UNICEF lo es, y además te garantiza una buena protección para los días de lluvia. Material poliéster.', 'G84451087', 'img/paraguas_blanco-600x600.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `idProyecto` int(10) NOT NULL,
  `CIFOng` varchar(9) NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `dineroNecesario` int(11) NOT NULL,
  `dineroAcumulado` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(100) NOT NULL,
  `descripcionCorta` mediumtext NOT NULL,
  `descripcionLarga` longtext NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `numVoluntarios` int(11) NOT NULL,
  `fechaFin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`idProyecto`, `CIFOng`, `fechaCreacion`, `dineroNecesario`, `dineroAcumulado`, `nombre`, `descripcionCorta`, `descripcionLarga`, `imagen`, `numVoluntarios`, `fechaFin`) VALUES
(41, 'G28567790', '2016-06-26 19:49:53', 55000, 950, 'apoyo psicosocial en un campo de refugiados de Sudán', 'Damos apoyo psicosocial en un campo de refugiados de Sudán de Sur', 'El Servicio de Ayuda de los Jesuitas a los Refugiados -JRS-, realiza actividades de apoyo en los cuatro campos de refugiados de Maban County .El campode refugiados de Doro, al ser el más numeroso de los cuatro, no dispone de espacio suficiente para desarrollar actividades agrícolas o ganaderas. Además, por el hecho de ser aquel en el que más grupos étnicos conviven y el que está más próximo a la población local, es el que más conflictos internos tiene: familias desesctructuradas, abuso del alcohol, violencia de género y sexual...\r\n\r\nLas personas con discapacidad, los ancianos y las mujeres son los más vulnerables. Como en Maban no hay ningún organismo humanitario que de apoyo psicosocial, nuestro socio local, el JRS, que se está haciendo cargo de actividades educativas en los otros campos, además de correr con todos los gastos de mantenimiento, personal, infraestructuras, etc de los campos de refugiados, piden ayuda a Manos Unidas para dar apoyo psicosocial a los refugiados del campo de Doro.\r\n\r\nEl proyecto beneficia directamente a casi 5.000 personas', 'img/p2manosUnidas.jpg', 250, '2016-11-30 00:00:00'),
(42, 'G28947653', '2016-06-26 19:56:05', 60000, 2650, 'Salvar el Artico', 'Salvar el artico', 'El Ártico es hogar de una vida silvestre increíble, desde majestuosos osos polares hasta morsas y narvales. Pero todas estas especies del Ártico dependen del hielo marino para poder sobrevivir. Y el hielo está desapareciendo a una velocidad aterradora.\r\n\r\nSin hielo marino los osos polares no pueden cazar, descansar, cuidar sus crías. Su vida se ve amenazada. Las osas madre débiles y hambrientas tienen problemas para reproducirse. Sus cachorros deben luchar superando muchos obstáculos para poder sobrevivir hasta llegar a la edad adulta.\r\nA menos que tomemos medidas pronto, los expertos advierten que los osos polares podrían desaparecer por completo del Ártico en los próximos 100 años. Actúa ahora para proteger su hogar.', 'img/p1greenpeace.jpg', 200, '2016-09-30 00:00:00'),
(43, 'Q2866001G', '2016-06-26 20:00:32', 75000, 5000, 'Seguridad Alimentaria y Medios de Vida', '', 'Creemos que es necesario abordar las causas subyacentes de la inseguridad alimentaria, la pobreza y la desigualdad; trabajando para que las personas y comunidades puedan generar recursos e ingresos para satisfacer sus necesidades diarias (una alimentación sana y nutritiva en cantidad suficiente, vivienda, salud, educación...)   \r\n \r\nPara ello es necesario promover medios de vida sostenibles que permitan a las personas hacer frente y recuperarse de situaciones negativas (como desastres naturales y problemas económicos o sociales) mejorando su bienestar y el de las futuras generaciones, sin debilitar el medio ambiente o la base de recursos naturales.\r\n ', 'img/p1Cruzroja.png', 200, '2016-09-30 00:00:00'),
(44, 'G79362497', '2016-06-26 20:03:55', 500000, 0, 'No más muertes de niños', 'No más muertes de niños tratando de llegar a nuestras fronteras', 'uropa está viviendo la peor crisis de refugiados desde la Segunda Guerra Mundial.\r\n \r\nEstamos siendo testigos del desplazamiento por mar y tierra de miles de personas, incluidos niños y niñas en condiciones extremadamente inseguras e inhumanas.\r\n \r\nEn estos desplazamientos los niños y las niñas mueren ahogados en el mar o asfixiados en caminones, se ven sometidos a las mafias, a la explotación y la trata de personas, padecen hambre, frío, falta de sitios seguros donde dormir, falta de asistencia médica y situaciones de violencia.\r\n\r\nEl final de esta crisis de refugiados tiene mucho que ver con la voluntad política que exista realmente por acabar con ella. Creemos que esta situación tiene solución y por eso hemos preparado un plan de acción con medidas concretas', 'img/p1SaveChildren.JPG', 500, '2017-01-31 00:00:00'),
(45, 'G79362497', '2016-06-26 20:05:33', 150000, 1589, 'Ayuda a los niños de Etiopía', '', 'os niños y niñas en Etiopía están en riesgo de hambruna provocada por la sequía que sufre el país, la peor en los últimos 50 años. Muchos padres están llevando a sus hijos a los centros sanitarios y de alimentación en busca de ayuda, pero necesitamos medios para proteger a los niños contra el creciente riesgo de desnutrición y falta de agua.\r\n\r\nTrabajamos en Etiopía desde 1930 y estamos presentes en el 70% de las zonas más afectadas. Estamos suministrando agua, comida, medicinas y los elementos básicos a las familias que han perdido sus ingresos. \r\n\r\nYa estamos en terreno salvando vidas, nuestra experiencia y conocimientos hace que estemos preparados para marcar la diferencia en Etiopía. Pero no podemos hacer esto sin ti.', 'img/p2saveChildren.JPG', 350, '2016-10-31 00:00:00'),
(46, 'G79362497', '2016-06-26 20:06:55', 550000, 0, 'Ayúdanos a llevar agua potable a Humad', '', 'l acceso a agua potable es uno de los Derechos de la infancia, pero miles de niños como Humad solo tienen agua contaminada para beber. A consecuencia de ello, muchos niños enferman y su salud se deteriora.\r\n\r\nEvitarlo es posible, y con tu apoyo podemos hacerlo realidad. Haciéndote socio de Save the Children estarás ayudándonos a construir pozos y bombas de agua que proporcionen a estos niños y a sus comunidades el agua potable que necesitan para crecer sanos.\r\n\r\nHazte socio hoy de Save the Children y consigamos juntos que miles de niños como Humad puedan beber agua potable.', 'img/p3saveChildren.JPG', 450, '2016-11-28 00:00:00'),
(47, 'G84451087', '2016-06-26 20:12:52', 55000, 0, 'Terremoto en Ecuador', '', 'El terremoto de 7,8 grados del pasado día 16 y las réplicas que continúan asolando Ecuador han afectado a más de 250.000 niños y niñas.\r\n \r\nDesde el primer momento, UNICEF está distribuyendo suministros de emergencia para paliar las necesidades más urgentes de agua, saneamiento, protección y educación. Entre ellos, 20.000 pastillas potabilizadoras de agua para que los niños y sus familias puedan beber agua limpia, 4.800 mosquiteras tratadas con insecticida para evitar la picadura del mosquito que transmite el virus del Zika o 250.000 cápsulas de vitamina A para prevenir que los niños enfermen por desnutrición.\r\n \r\nPero hacen falta muchos más recursos para ayudar a todos los niños que lo necesitan. \r\n \r\nLos niños y niñas de Ecuador necesitan AYUDA URGENTE. Dona ahora. ', 'img/p1unicef.jpg', 100, '2017-01-19 00:00:00'),
(48, 'G84451087', '2016-06-26 20:13:43', 100000, 550, 'Terremoto de Nepal', '', 'Tras sufrir dos terremotos en un intervalo de 17 días, los niños de Nepal y sus familias siguen necesitando toda la ayuda posible.\r\n\r\nEn UNICEF estamos trabajando desde el primer día para que los millones de niños afectados por los terremotos sufran lo menos posible sus consecuencias. Nuestro objetivo es protegerlos en esta terrible situación y para conseguirlo tú eres imprescindible.\r\n\r\nNuestro equipo de más de 200 personas está trabajando en Katmandú y alrededores, para proporcionar atención médica, tiendas de campaña, agua potable y otros suministros vitales a los niños y sus familias.\r\n\r\nPor favor, dona ahora para ayudar a los niños que siguen en grave peligro. Te necesitan.  ', 'img/p2unicef.jpg', 200, '2016-12-15 00:00:00'),
(49, 'G84451087', '2016-06-26 20:14:49', 500500, 15000, 'Ayúdanos a vacunar al 100% de los niños', '', 'En el mundo, 1 de cada 5 niños no recibe las vacunas que podrían salvarle la vida. Y las consecuencias son terribles: cada 20 segundos muere un niño por enfermedades completamente prevenibles como el sarampión y tosferina. \r\n\r\nEn UNICEF creemos que todos los niños tienen derecho a ser vacunados y no pararemos hasta conseguirlo. Por ello, viajamos en barco, coche o burro a las zonas más remotas y pobres del mundo.\r\n\r\nTú puedes ser parte de este increíble trabajo. ¿Nos ayudas a vacunar al 100% de los niños ? \r\n\r\nPor favor, haz un donativo ahora.', 'img/unicefp4.jpg', 450, '2017-03-15 00:00:00'),
(50, 'G84451087', '2016-06-26 20:16:28', 85000, 60000, 'Fondo de emergencias', '', 'UNICEF actúa en más de 200 emergencias al año, en más de 90 países. Las primeras horas después de una emergencia son fundamentales para salvar vidas y garantizar la protección de los niños, el Fondo de emergencias nos permite tener recursos y poder actuar de manera rápida... \r\n\r\nCon tu contribución, podemos enviar recursos de forma inmediata ante  cualquier emergencia  o crisis humanitaria. Nuestro llamamiento de emergencias para 2016 es uno de los mayores de nuestra historia: necesitamos fondos para ayudar a 43 millones de niños en más de 70 países. Ayúdanos a ayudarles.', 'img/donacion-fondo-emergencias.jpg', 250, '2017-04-24 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `DNI` varchar(9) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `cp` int(10) DEFAULT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `avatar` tinytext,
  `sexo` enum('Masculino','Femenino','','') NOT NULL,
  `telefono` int(11) NOT NULL,
  `tipo` enum('Admin','User','','') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`DNI`, `nombre`, `apellidos`, `direccion`, `cp`, `usuario`, `pass`, `email`, `fechaNacimiento`, `avatar`, `sexo`, `telefono`, `tipo`) VALUES
('05448383M', 'Juan', 'Montiel', '', 0, 'admin2', '$2y$11$tu0h.LCowz7qMnL19T9yBe02h3aZFPRgDvdlqcOKRPaVYQ6y3.fkq', 'juanjo@ucm.es', '2016-06-15', 'img/usuarioSF.png', 'Masculino', 0, 'Admin'),
('45731661W', 'Juan Jose', 'Montiel', '', 0, 'juan', '$2y$11$oU/pEgps2n/nQkFWZY4HVeHXOiIWUbrypqlnr5zPscEU2EQj.lm4q', 'juanjo@gmail.com', '1993-06-23', 'img/usuarioSF.png', 'Masculino', 0, 'User'),
('45731662A', 'Silvia', 'Lendinez', '', 0, 'silvia', '$2y$11$PXu7CABYlgTXuf7SUCQBFusI/w50J0Z2pODD/Vl2rZBiBhhqCE7/2', 'silvialendinez@hotmail.com', '1992-10-15', 'img/adminNerea.jpg', 'Femenino', 0, 'User'),
('45731663G', 'Maria', 'Ruiz', '', 0, 'Maria', '$2y$11$yDnmx2eYOlhXcujsVCkpI..ODedfMnka8Uv/D4GhBP588yvxN/z3W', 'mariaruiz@ucm.es', '1993-06-17', 'img/imgSecundaria2.jpeg', 'Femenino', 0, 'User'),
('45731664M', 'Nerea', 'Gomez', 'gran via', 0, 'admin1', '$2y$11$QUlDMjuyaIqXxqhiabA6iu9/a/plrxhv9G8w0lTjNj28EASzVhqsu', 'nereagomez95@hotmail.com', '1995-03-27', 'img/adminNerea.jpg', 'Femenino', 0, 'Admin'),
('50551761S', 'Jorge', 'Gomez', '', 0, 'jorge', '$2y$11$ZAozUgJrJ6R0xHQp0Q2HROXqYjun9B.n2t7f83nkupwrUVW9OZ68K', 'jorgegomez@ucm.es', '1991-02-10', 'img/perfil.png', 'Masculino', 0, 'User'),
('50551762Q', 'Monica', 'Gonzalez', '', 0, 'monica', '$2y$11$w.iEhsWJIzBKX0SZfXJ0COwDF5QIgcrFx.QOWwaUS3P9QFmA95gP.', 'monica@ucm.es', '1995-06-14', 'img/adminNerea.jpg', 'Femenino', 0, 'User'),
('72894735F', 'Miriam', 'Ruiz', '', 0, 'miriam', '$2y$11$sAm7ECh4fN3c9ZUh1.rTzutjo9Lc.bTuiD/24FTUkCsFr6sqMU14u', 'miriam@ucm.es', '1997-06-11', 'img/adminNerea.jpg', 'Femenino', 0, 'User'),
('73422420A', 'Nerea', 'Gomez', '', 0, 'nerea', '$2y$11$s/71Td4Dc.VrJJHP6Zw2B.mp01EJrMp8HxITnUbF/uGIVzlBwMfne', 'nereagomez958@hotmail.com', '1992-03-27', 'img/adminNerea.jpg', 'Femenino', 0, 'User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntarios`
--

CREATE TABLE `voluntarios` (
  `idVoluntariado` int(10) NOT NULL,
  `idProyecto` int(10) NOT NULL,
  `DNIUsuario` varchar(9) NOT NULL,
  `dia` date NOT NULL,
  `horaEntrada` int(4) NOT NULL,
  `horaSalida` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `voluntarios`
--

INSERT INTO `voluntarios` (`idVoluntariado`, `idProyecto`, `DNIUsuario`, `dia`, `horaEntrada`, `horaSalida`) VALUES
(21, 42, '73422420A', '2016-06-30', 18, 21),
(22, 42, '73422420A', '2016-07-21', 15, 18),
(23, 42, '73422420A', '2016-08-18', 17, 21),
(24, 45, '73422420A', '2016-07-24', 14, 16),
(25, 45, '73422420A', '2016-08-26', 14, 16),
(26, 45, '73422420A', '2016-09-22', 14, 16),
(27, 50, '45731662A', '2016-07-22', 16, 19),
(28, 50, '45731662A', '2016-08-17', 16, 19),
(29, 50, '45731662A', '2016-08-31', 16, 19),
(30, 50, '45731662A', '2016-09-22', 16, 19),
(31, 43, '45731661W', '2016-07-15', 19, 21),
(32, 43, '45731661W', '2016-09-22', 19, 21),
(33, 43, '45731661W', '2016-09-16', 19, 21),
(34, 43, '45731661W', '2016-09-29', 19, 21),
(35, 45, '45731661W', '2016-07-22', 15, 16),
(36, 45, '45731661W', '2016-07-29', 15, 16),
(37, 45, '45731661W', '2016-07-31', 15, 16),
(38, 43, '50551762Q', '2016-06-30', 14, 15),
(39, 43, '50551762Q', '2016-07-23', 14, 15),
(40, 43, '50551762Q', '2016-07-30', 14, 15),
(41, 43, '50551762Q', '2016-07-27', 14, 15),
(42, 48, '50551762Q', '2016-06-30', 12, 15),
(43, 48, '50551762Q', '2016-07-16', 12, 15),
(44, 48, '50551762Q', '2016-07-19', 12, 15),
(45, 48, '50551762Q', '2016-07-26', 12, 15),
(46, 48, '50551762Q', '2016-07-29', 12, 15),
(47, 47, '72894735F', '2016-06-29', 15, 19),
(48, 47, '72894735F', '2016-07-23', 15, 19),
(49, 47, '72894735F', '2016-07-27', 15, 19),
(50, 47, '72894735F', '2016-07-30', 15, 19),
(51, 48, '50551761S', '2016-06-29', 18, 21),
(52, 48, '50551761S', '2016-07-21', 18, 21),
(53, 48, '50551761S', '2016-07-28', 18, 21);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idProducto`,`CIFOng`,`DNIUsuario`),
  ADD KEY `DNIUsuario` (`DNIUsuario`),
  ADD KEY `CIFOng` (`CIFOng`);

--
-- Indices de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD PRIMARY KEY (`donaciones_id`),
  ADD KEY `idProyecto` (`idProyecto`),
  ADD KEY `DNIUsuario` (`DNIUsuario`,`idProyecto`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `ong`
--
ALTER TABLE `ong`
  ADD PRIMARY KEY (`CIF`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `CIF` (`CIF`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD UNIQUE KEY `idProducto` (`idProducto`,`CIFOng`),
  ADD KEY `CIFOng` (`CIFOng`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`idProyecto`),
  ADD UNIQUE KEY `idProyecto` (`idProyecto`,`CIFOng`),
  ADD KEY `CIFOng` (`CIFOng`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`DNI`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `DNI` (`DNI`);

--
-- Indices de la tabla `voluntarios`
--
ALTER TABLE `voluntarios`
  ADD PRIMARY KEY (`idVoluntariado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  MODIFY `donaciones_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `idProyecto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `voluntarios`
--
ALTER TABLE `voluntarios`
  MODIFY `idVoluntariado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`DNIUsuario`) REFERENCES `usuario` (`DNI`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`CIFOng`) REFERENCES `ong` (`CIF`),
  ADD CONSTRAINT `compras_ibfk_3` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`);

--
-- Filtros para la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD CONSTRAINT `Donaciones_ibfk_1` FOREIGN KEY (`DNIUsuario`) REFERENCES `usuario` (`DNI`),
  ADD CONSTRAINT `Donaciones_ibfk_2` FOREIGN KEY (`idProyecto`) REFERENCES `proyecto` (`idProyecto`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`CIFOng`) REFERENCES `ong` (`CIF`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`CIFOng`) REFERENCES `ong` (`CIF`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
