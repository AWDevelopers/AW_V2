-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2016 a las 16:14:06
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

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
(2, '01234567A', 123456, 3),
(3, '01234567A', 123456, 5),
(4, '01234567A', 123456, 456),
(5, '01234567A', 123456, 54),
(6, '01234567A', 123456, 46),
(7, '01234567A', 123456, 34),
(8, '01234567A', 123456, 65),
(9, '01234567A', 123456, 65),
(10, '01234567A', 123456, 65),
(11, '01234567A', 123456, 65),
(12, '01234567A', 123456, 56),
(13, '01234567A', 123456, 56),
(14, '01234567A', 123456, 56),
(15, '01234567A', 123456, 56),
(16, '01234567A', 123456, 54),
(18, '01234567A', 123456, 345),
(19, '01234567A', 123456, 654),
(20, '01234567A', 123456, 654),
(21, '01234567A', 123456, 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id` int(10) NOT NULL,
  `titulo` varchar(20) NOT NULL,
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
(1, 'noticia1', 'primaria', 'descripcion corta', 'descripcion larga', '2016-06-22', 'img/imagen.png');

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
('000000000', ' World Wildlife Fund (WWF)', 'Gran Vía de San Francisco, 8', 'info@wwf.es', 'wwfSpain', 'wwfSpain', 913540578, ''),
('000000001', 'Cruz Roja', 'Avenida Reina Victoria, 26', 'informa@cruzroja.es', 'CruzRoja', 'CruzRojaEspaña', 902222292, ''),
('000000002', 'Save the Children', 'Calle Doctor Esquerdo, 138', 'online@savethechildren.es', 'SaveTheChildren', 'savethechildrenSpain', 915130500, ''),
('000000003', 'Aldeas Infantiles', 'Calle Angelita Cavero, 9', 'mpardal@aldeasinfantiles.es', 'AldeasInfantiles', 'aldeasInfantSpain', 902332222, ''),
('000000004', 'Amnistia Internacional', 'Fernando VI, 8', 'info@es.amnesty.org', 'AmnistiaInterSpain', 'amnistiaInterSpain', 913101277, ''),
('000000005', 'Caritas', 'San Bernardo, 99', 'correo@caritas.es', 'CaritasEspaña', 'caritasEspaña', 914441000, ''),
('123456789', 'nuevo', 'c/Juan de la Rosa, 1', 'prueba@prueba.com', 'newuser', 'hoola', 98765432, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(10) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcionCorta` mediumtext NOT NULL,
  `descripcionLarga` longtext NOT NULL,
  `CIFOng` varchar(9) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `stock`, `precio`, `nombre`, `descripcionCorta`, `descripcionLarga`, `CIFOng`, `imagen`) VALUES
(1, 12, 3, 'Pulseras estrellas', 'Hacer feliz cuesta muy poco.', 'Pulseritas en varios colores: azul, rosa o marrón con una estrella por cada persona a la que le hayas colocado una sonrisa.', '000000002', 'img/pulseras.jpg'),
(2, 33, 2, 'Pines solidarios', 'Pines solidarios de varios colores', 'Un pin carriñosón para ponerlo encima del corazón.', '000000000', 'img/pines.jpg'),
(3, 45, 5, 'Llaveros incripción', 'Un bonito llavero con una incripción', 'Recuerda cuantas sonrisas regalaste con este llavero que te compraste.', '000000003', 'img/llavero.jpg'),
(4, 20, 3, 'Bolígrafo solidario', 'Bolígrafo de colorines  solidario.', 'Con este boli alegre y alocado dibujarás sonrisas con el dinero proporcionado.', '000000002', 'img/boligrafo.jpg');
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `idProyecto` int(10) NOT NULL,
  `CIFOng` varchar(9) NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dineroNecesario` int(11) NOT NULL,
  `dineroAcumulado` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(50) NOT NULL,
  `descripcionCorta` mediumtext NOT NULL,
  `descripcionLarga` longtext NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `numVoluntarios` int(11) NOT NULL,
  `fechaFin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`idProyecto`, `CIFOng`, `fechaCreacion`, `dineroNecesario`, `dineroAcumulado`, `nombre`, `descripcionCorta`, `descripcionLarga`, `imagen`, `numVoluntarios`, `fechaFin`) VALUES
(9, '000000000', '2016-06-16 19:32:12', 15000, 0, 'Conservación del Ecosistema', 'World Wildlife Fund (WWF)', 'ILos ecosistemas forestales ocupan en la actualidad unos 3.866 millones de hectáreas, casi una tercera parte de las tierras emergidas del planeta, lo que equivale a la mitad de la superficie que ocupaban hace unos 8.000 años.De lo que nos queda de superficie forestal original, sólo la quinta parte ha llegado hasta nuestros días en un estado de conservación favorable, lo que podríamos denominar como fronteras forestales, últimos bosques sin alteración humana significativa.Solamente en la pasada década se produjo una pérdida neta de superficie forestal de 93,9 millones de hectáreas (5,6 millones de campos de fútbol al año). Durante este mismo periodo se transformaron bosques naturales en plantaciones agrícolas y forestales a un ritmo de 16,1 millones de hectáreas al año, el 94 % en zonas tropicales, siendo las plantaciones agrícolas las responsables del 70% de esta transformación.Para intentar detener su degradación y conservar los ecosistemas forestales el Programa de Bosques de WWF está tomando las siguientes medidas:  - Promueve el consumo legal y responsable de productos forestales.- Apoya la certificación forestal FSC que garantiza el uso sostenible de los bosques.- Incide en la necesidad de impulsar acciones técnicas y políticas claras y contundentes para recuperar bosques y mejorar la calidad de aquellos que aún perduran y que están alejados de su óptimo ecológico.- Realiza proyectos piloto de restauración de hábitats forestales en colaboración con diversas organizaciones, (empresas privadas, otras ONG, Administraciones Públicas…), en los que colaboran numerosos voluntarios.- Logra la protección de millones de hectáreas en los principales bosques desprotegidos del planeta, como los de la cuenca del Amazonas o Borneo.- Dentro de las áreas degradadas nos preocupan especialmente los incendios forestales, que atendemos a través de una línea de trabajo que incluye investigación, presión política y la restauración de zonas incendiadas.', 'img/panda.png', 50, '2016-06-17 17:09:24'),
(10, '000000000', '2016-06-16 19:36:48', 10000, 0, 'Biodiversidad Amenazada', 'World Wildlife Fund (WWF)', 'Si bien todavía no existe unanimidad entre los expertos sobre cuántas especies pueden existir en la tierra (se habla de entre 5 y 30 millones aunque algunos autores hablan de hasta cien millones) al menos 1,4 millones poseen una denominación específica. Aunque cada año se descubren nuevas especies particularmente en las zonas más remotas del planeta (la pantera nebulosa descubierta por un equipo de WWF es un buen ejemplo), lo cierto es que la velocidad a la que desaparecen es mucho mayor. Según la UICN cada año se extinguen en el planeta entre 10.000 y 50.000 especies. Tanto es así que los científicos hablan ya de una sexta extinción masiva de especies, la primera que se produciría en la tierra desde la desaparición de los dinosaurios. Las principales causas de este proceso están ligadas a la acción del ser humano: fragmentación y destrucción del hábitat, sobreexplotación de recursos y muerte directa (intencionada o no), introducción de especies invasoras, comercio de especies y cambio climático. La conservación de las grandes especies de fauna ha sido siempre una gran preocupación para WWF, que en la actualidad trabaja con más de un centenar especies y con proyectos en los cincos continentes. Especies como los grandes simios, los elefantes, el panda, el tigre, las tortugas marinas, los cetáceos o el lince ibérico son prioritarias para nuestra organización.', 'img/panda.png', 50, '2016-06-17 17:09:24'),
(11, '000000001', '2016-06-16 19:41:59', 10500, 650, 'Infancia Éxito Escolar', 'Cruz Roja', 'El fracaso escolar en España y la malnutrición de los escolares debido a la crisis económica hace que desde Cruz Roja dediquemos nuestros esfuerzos a contribuir al éxito escolar de niños y niñas en dificultad social, incidiendo en los factores de índole personal y social que lo favorecen. Más de 4.000 voluntarios de Cruz Roja acompañan todos los días a niños y niñas de familias con dificultades económicas, ayudándoles a que su rendimiento escolar no se resienta por la situación familiar.', 'img/layout_set_logo.png', 50, '2016-06-17 17:09:24'),
(12, '000000001', '2016-06-16 19:42:55', 8000, 0, 'Ayuda Terremoto Ecuador', 'Cruz Roja', 'La magnitud del terremoto en las costas de Ecuador exige actuar rapidamente, para llegar a todas las zonas afectadas, atender a los miles de heridos y de afectados que se han quedado en la calle.', 'img/layout_set_logo.png', 50, '2016-06-17 17:09:24'),
(13, '000000002', '2016-06-16 19:43:23', 13200, 0, 'No más muertes de niños', 'Save the Children', 'Europa está viviendo la peor crisis de refugiados desde la Segunda Guerra Mundial. Estamos siendo testigos del desplazamiento por mar y tierra de miles de personas, incluidos niños y niñas en condiciones extremadamente inseguras e inhumanas. En estos desplazamientos los niños y las niñas mueren ahogados en el mar o asfixiados en caminones, se ven sometidos a las mafias, a la explotación y la trata de personas, padecen hambre, frío, falta de sitios seguros donde dormir, falta de asistencia médica y situaciones de violencia. El final de esta crisis de refugiados tiene mucho que ver con la voluntad política que exista realmente por acabar con ella. Creemos que esta situación tiene solución y por eso hemos preparado un plan de acción con medidas concretas para: - Mantener las operaciones de búsqueda y rescate en el Mediterráneo: salvar vidas sigue siendo la prioridad. - Establecer y reforzar sistemas de acogida y apoyo adecuados, asegurando el respeto de los derechos humanos y la dignidad de las personas. - Políticas de reubicación y reasentamiento: los países europeos pueden y deben hacer mucho más para ofrecer refugio a la gente que necesita protección. Tienen la obligación legal, política y moral de hacerlo. - Mejorar las vías seguras y legales para solicitar asilo europeo en los países de origen o tránsito y asegurar unas políticas de retorno basadas en el respeto de los derechos humanos. - Atajar las causas de la migración en su origen, aumentar la respuesta regional y priorizar un acuerdo negociado para el fin de la crisis de Siria. ', 'img/STC.png', 50, '2016-06-17 17:09:24'),
(14, '000000003', '2016-06-16 19:44:16', 9000, 1650, 'El 35% de los adolescentes tienen claro su futuro', 'Aldeas Infantiles', 'De esta encuesta también se extrae el perfil del adolescente. La mayor parte de los participantes se ha definido como alegre, rebelde y con sentido del humor. La energía vital también ha estado presente en un gran número de encuestados. Con el fin de reflexionar sobre las conclusiones de este sondeo, Aldeas ha reunido a diecisiete alumnos de Secundaria, uno por Comunidad Autónoma, en las III Jornadas de Jóvenes “Los jóvenes nos paramos a pensar”, celebradas en Madrid, esta mañana.   Los objetivos de este encuentro son los de fomentar el derecho de participación de los adolescentes en la sociedad y propiciar que sus opiniones sean tenidas en cuenta. Hablamos de valores Además de analizar los resultados de la encuesta, los estudiantes han tenido la oportunidad de dialogar acerca de los valores protagonistas de la presente edición del programa educativo “Párate a pensar”: la prudencia, la audacia y la toma de decisiones.  Sobre la prudencia, los jóvenes han manifestado la importancia de ser prudentes, “sobre todo cuando lo que haces afecta a otras personas o está en juego algo importante, especialmente su seguridad”. También han reflexionado sobre la necesidad de diferenciar el ser prudente del miedo a asumir riesgos: “Tenemos que aprender los límites de la prudencia, ya que vemos que tampoco hay que serlo en exceso”.  Respecto a la audacia, los participantes han coincidido en que se trata de un término bastante confuso. Tienen claro, eso sí, que “es un valor que se aplica en la vida en general y que es importante para defender los intereses de los demás y no sólo los propios”. Lo han definido como “la forma de enfrentarse a las situaciones con inteligencia” y, aunque piensan que hay cierta predisposición a nacer audaz, lo consideran un valor que “puede desarrollarse a partir de experiencias o decisiones que tengamos que tomar”.  Por último, respecto a la toma de decisiones, todos admiten tomarlas a menudo, pero reconocen no hacerlo en aquellos asuntos que consideran más importantes. Les gustaría “participar más y ser escuchados” y reclaman “estar más informados”.  “Los adolescentes que estamos hoy aquí pedimos que nos motiven, que valoren nuestro esfuerzo y que nos dejen tomar decisiones desde la infancia, y no sólo cuando llega el momento de decidir nuestro futuro académico o laboral”, han concluido.   Los programas educativos de Aldeas Infantiles SOS para Primaria y Secundaria llegan a los colegios e institutos españoles gracias a la colaboración de ECOEMBES. En todas las ediciones, la organización ha invitado a alumnos, profesores y padres a reflexionar juntos en torno a diversos valores como el compromiso, la tolerancia, la inteligencia emocional o la solidaridad. Estos materiales han llegado, en el último curso escolar, a 202.700 alumnos de Infantil y Primaria (entre 4 y 12 años) y 150.000 de Secundaria (entre 12 y 16 años).', 'img/Logo_AldeasInfantilesSOS.jpg', 50, '2016-06-17 17:09:24'),
(15, '000000002', '2016-06-16 19:44:51', 9050, 250, 'No más muertes en el Mediterráneo', 'Save the Children', 'Muchas gracias por tu interés en esta campaña. Pese a que esta recogida de firmas ya está cerrada, nuestro trabajo para con los migrantes que están llegando por miles a las fronteras europeas continua, centrándonos especialmente en los más pequeños que son los más vulnerables. ¿Qué estamos haciendo? Estamos trabajando en toda la ruta que siguen los refugiados, y también en los países de los que están huyendo. Descubre más sobre el trabajo de Save the Children para ayudar a los refugiados.  Además de atender a los niños y sus familiares, también estamos trabajando a nivel estructural para ponerle una solución a esta crisis de refugiados. ¿Qué puedes hacer tú? En estos momentos estamos recogiendo donaciones para ofrecer a los niños y sus familiares atención, alimento y apoyo psicológico a su llegada tanto a las fronteras como las costas européas. Por eso te pedimos que, si puedes, hagas tu donación para ayudar a los niños refugiados. ', 'img/STC.png', 50, '2016-06-17 17:09:24'),
(16, '000000004', '2016-06-16 19:45:25', 6500, 240, 'Refugiados en España', 'Amnistia Internacional', 'Madrid.- Un sistema discriminatorio, arbitrario, obsoleto e ineficaz que puede llevar a las personas a la indigencia a medio plazo. Así describe Amnistía Internacional el sistema de acogida y asilo en España, que recibe estos días, a las primeras personas refugiadas procedentes de Grecia. La organización lanza un nuevo informe, “El asilo en España: un sistema poco acogedor” en la que pide al gobierno que tome medidas concretas para reformar el sistema, que no se adecua a los estándares internacionales ni al apoyo social a darles la bienvenida, tal y como demuestra la reciente encuesta de la organización, así como diversas iniciativas impulsadas por ayuntamientos y Comunidades autónomas. "España no está dando la bienvenida que se merecen a las personas que huyen de la guerra y la persecución, de manera que puedan acceder a una acogida digna, un procedimiento de asilo justo y efectivo y su plena integración", afirma Esteban Beltrán, director de Amnistía Internacional España. "Tanto las personas que llegan por Ceuta y Melilla, y que se encuentran con un limbo en el que su derecho a la libre circulación a la Península está limitado y restringido; como aquellas que llegan por otras vías de manera espontánea, o los pocos que el gobierno trae a través del reasentamiento y la reubicación, tienen algo en común: las dificultades que se encuentran para su acogida digna y su posterior integración en el país", añade. La nacionalidad, una cuestión de privilegio. La organización denuncia además como algunas nacionalidades tienen mayores dificultades para que sus peticiones de asilo sean estudiadas, así como para acceder a los procedimientos de asilo que otras. Recientemente, el Comité para la Eliminación de la Discriminación Racial de Naciones Unidas, en su último informe sobre España, ha mostrado preocupación por el hecho de que solicitudes de asilo de personas provenientes de países en conflicto, en particular de países de África subsahariana, suelen tomar más tiempo para ser resueltas.  A esto habría que añadir un “criterio de prudencia”, que no se atiene a normas internacionales de derechos humanos, y por el cual muchas peticiones no se estudian a la espera de que la situación de derechos humanos mejore en los países de origen. Así, personas procedentes de Mali, Ucrania o de Territorios Ocupados Palestinos, entre otras, pueden ver su petición de asilo paralizada. España da la espalda a la crisis: A pesar de encontrarnos ante la crisis más grave de personas refugiadas tras la 2ª Guerra Mundial, las autoridades españolas de diferentes gobiernos no han mostrado voluntad política para compartir su responsabilidad con el resto de miembros de la Unión Europea. La Ley de Asilo en España está obsoleta, y no ha incorporado las últimas Directivas Europeas en materia de asilo. Además, el reglamento de desarrollo de la Ley de asilo, seis años después, ni siquiera existe, por lo que las ayudas previstas para estas personas se están otorgando de manera desigual y arbitraria a través de normativa de menor rango. “Mientras las personas esperan, algunas durante años, a que se resuelva su solicitud, hemos visto cómo las ayudas previstas para su acogida son insuficientes y no se adaptan a sus necesidades, algo que puede finalmente llevar a muchas de ellas a la indigencia”, asegura Virginia Álvarez, responsable de Política Interior en Amnistía Internacional e investigadora del informe. Amira (nombre ficticio), de nacionalidad libia, tuvo que huir de su país por la persecución sufrida por sus creencias y activismo en favor de los derechos humanos de las mujeres. Solicitó asilo en marzo de 2014 y todavía sigue a la espera de una resolución. Durante los primeros seis meses obtuvo una ayuda, pero al cabo de ese tiempo se quedó en la calle sin más recurso que los 340 euros que se entrega en concepto de “ayuda de salida”. Por otra parte la falta de entrevistas sistematizadas que tengan en cuenta los criterios de vulnerabilidad provoca que algunas de ellas no reciban la ayuda específica que necesitan. Maryam es un ejemplo. De nacionalidad siria, huyó de la guerra y de la violencia y maltrato por parte de su pareja. Durante el camino fue víctima de un intento de agresión sexual. Llegó sola a España, en una situación especialmente vulnerable. A pesar de los problemas que presentaba, no ha sido debidamente identificada ni ha tenido acceso una atención especializada ni apoyo psicológico. En la actualidad vive en un recurso para personas sin hogar.    El informe documenta también como, tras los primeros meses de acogida, las personas solicitantes de asilo quedan abandonadas a su suerte, enfrentándose a múltiples obstáculos como, por ejemplo, en el acceso a la vivienda. Cuando Drias, (nombre ficticio) sirio solicitante de asilo, habló con Amnistía Internacional, llevaba 9 meses en un centro de acogida de la administración, junto a su mujer, su hijo de 12 años y su hija de 7 años. Les habían comunicado ya que debían abandonar el centro, y la búsqueda de piso estaba siendo tan complicada que finalmente habían acudido a una agencia inmobiliaria a la que habían pagado 600 €, el dinero que el centro había ofrecido en concepto de “ayuda de salida”. Contaron a Amnistía Internacional que a la hora de alquilar un piso todo el mundo le pedía contrato, y que estaba esperando que la ONG que les apoyaría por unos meses más para pagar la fianza y el primer mes. Finalmente, una vez acabada la segunda fase de acogida, las personas refugiadas quedan desamparadas, aun cuando siguen siendo solicitantes de protección internacional. Tampoco para las que la han obtenido existen ayudas específicas para su integración en el país.  Recursos desaprovechados: El laberinto al que se enfrentan las personas refugiadas y solicitantes de asilo se ve acrecentado por el hecho de que no existe una verdadera coordinación en el sistema de acogida en los niveles nacional, autonómico y regional, de manera que no se están utilizando de forma eficiente todos los recursos actualmente existentes, y que se han puesto a disposición de la administración central. La organización tiene en marcha un manifiesto en el que ya han firmado más de 50.000 personas y 900 organizaciones para recordar a las autoridades españolas que la gente quiere mostrar su solidaridad y exigir #YoAcojo.  Todo este apoyo social debe tener una respuesta por parte de las autoridades. Por un lado, el gobierno debe incrementar las cifras de acogida, agilizar el sistema de asilo y aprovechar los recursos que las Comunidades autónomas y entidades locales están ofreciendo. Por otro lado, las nuevas autoridades gubernamentales y parlamentarias que sean elegidas tras los comicios de junio deben evaluar y reformar en profundidad el sistema de asilo y acogida para que sea acorde con los estándares internacionales.', 'img/Logo Amnistía Internacional_2.jpg', 50, '2016-06-17 17:09:24'),
(17, '000000005', '2016-06-16 19:46:08', 500000, 125350, 'Plan de Reconstrucción', 'Caritas', 'Cáritas Ecuador ha impulsado una operación pastoral de hermanamiento nacional entre parroquias para acompañar el desarrollo del plan de reconstrucción tras el terremoto del 16 de abril. Bajo el lema “Organizar la Caridad – Iglesias Hermanas” este iniciativa quiere facilitar la “asociación” fraterna entre Diócesis no afectadas y parroquias afectadas por el seísmo. Esta propuesta pastoral se enmarca dentro de la estrategia de trabajo integral preparada por Cáritas Ecuador y la red internacional Cáritas para organizar durante los próximos tres años la atención y respuesta permanente a los territorios más golpeados por la emergencia. Con ese objetivo, se prevé que, a la hora de establecer asociaciones entre Diócesis “ayudantes” y las parroquias afectadas, unas 30 parroquias acompañen a una afectada. Cáritas Española aporta 500.000 euros al plan de emergencia. El plan de post-emergencia y reconstrucción (Emergency Appeal, EA) diseñado por Cáritas Ecuador cuenta con un presupuesto de 1,4 millones de euros, más de la tercera parte del cual será cubierto por Cáritas Española, que aportará al mismo 500.000 euros. Durante los próximos 12 meses, las acciones previstas se centrarán en la puesta en marcha de soluciones integrales, duraderas y dignas para 700 familias sin recursos (unas 3.500 personas) que fueron gravemente golpeadas por el seísmo del pasado 16 de abril. Colaboración entre entidades de Iglesia. Junto al hermanamiento de parroquias, la Cáritas Ecuatoriana, la Conferencia Ecuatoriana de Religiosos (CER) y la Provincia Jesuita del Ecuador han sumado sus capacidades y estructuras territoriales para trabajar de manera conjunta en las acciones de post-emergencia para los damnificados y comunidades más vulnerables. “Como Iglesia –se señala en un comunicado conjunto de las tres organizaciones—reiteramos nuestro compromiso y vocación por acompañar a nuestro pueblo en las situaciones de mayor dolor, con una presencia próxima y buscando una eficacia apostólica para responder a sus necesidades más urgentes”. La nota añade: “Ante esta realidad nos sentimos interpelados para dar un mensaje de genuina comunión generando los puentes necesarios para actuar como cuerpo eclesial, fortaleciendo nuestras capacidades, y dando mejores frutos de manera conjunta”. La colaboración de las tres entidades se centrará en tres de los ejes prioritarios incluidos en el plan de reconstrucción diseñado por Cáritas Ecuador: - Acompañamiento espiritual y psicológico a las víctimas. - Reconstrucción de vivienda digna y fortalecimiento del tejido social comunitario. - Generación de medios de vida para la autosuficiencia de familias y comunidades. Además, estas organizaciones contarán con el apoyo de la Pontificia Universidad Católica del Ecuador para brindar asesoramiento técnico de profesores y estudiantes especializados en las áreas de trabajo señaladas. Campaña de solidaridad. Cáritas Española mantiene activa su campaña de solidaridad con los damnificados bajo el lema “Cáritas con Ecuador”, a la que es posible hacer aportaciones a través del teléfono 900.33.99.99, de distintas cuentas corrientes abiertas y de la propia web de Cáritas Española.', 'img/09e48e4c.jpg', 50, '2016-06-17 17:09:24'),
(18, '000000002', '2016-06-16 19:46:27', 300000, 0, 'Prueba', 'Prueba', 'Introduce descripcion larga...', 'img/imagen.png', 50, '2016-06-17 17:09:24'),
(19, '000000002', '2016-06-16 19:47:43', 300000, 0, 'Prueba', 'Prueba', 'Introduce descripcion larga...', 'img/imagen.png', 50, '2016-06-17 17:09:24'),
(20, '000000002', '2016-06-16 19:50:28', 300000, 0, 'Prueba', 'Prueba', 'Introduce descripcion larga...', 'img/imagen.png', 50, '2016-06-17 17:09:24'),
(23, '000000001', '2016-06-16 20:23:27', 3000000, 0, 'Prueba', 'Introduce descripcion corta...', 'Introduce descripcion larga...', 'img/Thankyou.png', 50, '2016-06-17 17:09:24');

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
('000000000', 'WWF España', '', 'Gran Vía de San Francisco, 8', NULL, 'wwfSpain', 'wwfSpain', 'info@wwf.es', '0000-00-00', 'img/panda.png', '', 913540578, 'User'),
('000000001', 'Cruz Roja', '', 'Avenida Reina Victoria, 26', NULL, 'CruzRoja', 'CruzRojaEspaña', 'informa@cruzroja.es', '0000-00-00', 'img/layout_set_logo.png', '', 902222292, 'User'),
('000000002', 'Save the Children', '', 'Calle Doctor Esquerdo, 138', NULL, 'SaveTheChildren', 'savethechildrenSpain', 'online@savethechildren.es', '0000-00-00', 'img/STC.png', '', 915130500, 'User'),
('000000003', 'Aldeas Infantiles', '', 'Calle Angelita Cavero, 9', NULL, 'AldeasInfantiles', 'aldeasInfantSpain', 'mpardal@aldeasinfantiles.es', '0000-00-00', 'img/Logo_AldeasInfantilesSOS.jpg', '', 902332222, 'User'),
('000000004', 'Amnistia Internacion', '', 'Fernando VI, 8', NULL, 'AmnistiaInterSpain', 'amnistiaInterSpain', 'info@es.amnesty.org', '0000-00-00', 'img/Logo Amnistía Internacional_2.jpg', '', 913101277, 'User'),
('000000005', 'Caritas', '', 'San Bernardo, 99', NULL, 'CaritasEspaña', 'caritasEspaña', 'correo@caritas.es', '0000-00-00', 'img/09e48e4c.jpg', '', 914441000, 'User'),
('01234567A', 'pepe', 'pepe', 'c/holacaracola nÂº1', 12345, 'pepe', 'pepe', 'pepe@pepe.com', '1978-03-12', '', 'Masculino', 123456789, 'User'),
('123456789', 'nuevo', '', 'c/Juan de la Rosa, 1', NULL, 'newuser', 'hoola', 'prueba@prueba.com', '0000-00-00', NULL, '', 98765432, 'User'),
('3456789', 'dewfew', '', 'fregteh', NULL, 'wwfAdmin', 'holita', 'gregre@fegre,com', '0000-00-00', NULL, '', 987654321, 'User');

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
  MODIFY `donaciones_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `idProyecto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `voluntarios`
--
ALTER TABLE `voluntarios`
  MODIFY `idVoluntariado` int(10) NOT NULL AUTO_INCREMENT;
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
