-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2019 a las 06:17:57
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paglibros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_ad` varchar(10) NOT NULL,
  `nom_ad` varchar(50) NOT NULL,
  `ape_ad` varchar(50) NOT NULL,
  `con_ad` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_ad`, `nom_ad`, `ape_ad`, `con_ad`) VALUES
('ad1', 'Alex', 'Ramos ', 'ad1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escritor`
--

CREATE TABLE `escritor` (
  `id_es` varchar(10) NOT NULL,
  `con_es` varchar(10) DEFAULT NULL,
  `nom_es` varchar(50) DEFAULT NULL,
  `ape_es` varchar(50) DEFAULT NULL,
  `ced_es` varchar(10) DEFAULT NULL,
  `corr_es` varchar(30) DEFAULT NULL,
  `fec_nac_es` datetime DEFAULT NULL,
  `des_escritor` text,
  `tel_es` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `escritor`
--

INSERT INTO `escritor` (`id_es`, `con_es`, `nom_es`, `ape_es`, `ced_es`, `corr_es`, `fec_nac_es`, `des_escritor`, `tel_es`) VALUES
('es1', 'es1', 'Alex', 'Ramos', '1053765629', 'acramosf@unal.edu.co', '1986-03-05 00:00:00', 'Es un estudiante de la u Nacional, nada mas que decir.', 312908220),
('es10', 'es10', 'Victor', 'Saltero', '78865231', 'vsaltero@falso.com', '1978-03-13 00:00:00', 'Víctor Saltero Cárdenes es el seudónimo bajo el que se publicaron una serie de novelas en la editorial española Imser Siglo entre 2006 y 2008. La editorial ya no existe. Se desconoce su verdadera identidad. Además de novelas ha publicado múltiples ensayos y artículos, muchos de los cuales, además de inglés y español, han sido traducidos al francés, alemán, ruso y japonés.', 8908656),
('es11', 'es11', 'Sebastian', 'Saldarriaga', '75643543', 'ssaldirriaga@falso.com', '1983-11-12 00:00:00', 'Historiador egresado de la Universidad Javeriana y Master en Historia de la Universidad de Salamanca. Amplio conocimiento sobre la Antigüedad y Edad Media. Capaz de hacer bases de datos, manejo de archivos físicos, auditivos y visuales, investigación, catalogación y rectificación de información. En búsqueda de oportunidad laboral en el área de investigación histórica y cultura, o en la docencia en colegios y universidades en las áreas de Ciencias Sociales o en el área de archivos históricos, ya sea para archivar o crear bases de datos.', 8908734),
('es12', 'es12', 'E-Maro', NULL, 'N/A', 'emaro@falaso.co', '1986-03-28 00:00:00', 'Sin información ', 8765432),
('es2', 'es2', 'Nicolas', 'Ramos', '1053765524', 'nramosz@unal.edu.co', '2016-08-27 00:00:00', 'Es el hijo de Alex y es un hermoso niño.', NULL),
('es3', 'es3', 'Alfonso', 'Moreno', '75634432', 'amorenog@falso.com', '1965-03-03 00:00:00', 'Madrileño y de sangre andaluza, gracias a mis padres, hacen de mí una persona muy, muy impulsiva, sensible y sociable. Desde muy joven me interesó la ciencia y la tecnología en todas sus facetas lo que me llevó a estudiar ingeniería, y es a lo que me he dedicado hasta ahora. El hecho de no dejar de leer, casi de todo, quizás suscitó mi pasión por escribir y la tuviera oculta hasta ahora. Lo digo porque me he \'prejubilado\' y ahora tengo tiempo para que salga todo lo que tenía dentro, como aletargado. Fluye sin parar y sin control, lo que hace que, en muchos momentos, mi mente y mi corazón me dicten mucho más rápido de lo que puedo escribir.', 832600),
('es4', 'es4', 'Martha', 'Carpentier', '10654342', 'mcarpentier@falso.com', '1976-03-11 00:00:00', 'Marta Carpentier, nueva escritora española, con este relato pleno de fantasía y sensibilidad quedó en el segundo lugar del gusto de los lectores de todo el mundo en los Premios Literarios Freeditorial 2017. \r\nLa Ternura es un viaje al centro de nuestras emociones más hirientes, las que nos golpean convirtiéndonos en lo que somos. No es sino un gigante y crudo retrato sobre el poder de la entrega, la pérdida y de cómo nuestros deseos nos afectan hasta el punto de transformarnos por completo. En otras palabras, un certero y afilado dibujo del corazón humano, tan lleno siempre de miedos pero también de esperanzas.', 8854673),
('es5', 'es5', 'EM', 'Ariza', 'N/A', 'emariza@correofalso.cm', '1989-03-13 00:00:00', 'El escritor Eduardo María Ariza (EM Ariza) se ha ganado mi cariño con este relato corto. Él escribe de una forma tan agradable y sencilla que uno siente que está hablando con un amigo cercano, un amigo que además es divertido y escueto, uno de esos amigos que comete imprudencias que nos hacen reír.', 8978786),
('es6', 'es6', 'Francisco', 'Quevedi', '35285616', 'fquevdo@falso.com', '1982-03-30 00:00:00', '(Madrid, 14 de septiembre de 15801?-Villanueva de los Infantes, Ciudad Real, 8 de septiembre de 1645), conocido como Francisco de Quevedo, fue un escritor español del Siglo de Oro. Se trata de uno de los autores más destacados de la historia de la literatura española, conocido especialmente por su obra poética, aunque también escribió narrativa, teatro, y diversos opúsculos filosóficos, políticos, morales, ascéticos, humanísticos e históricos.\r\n\r\nOstentó los títulos de señor de Torre de Juan Abad y caballero de la Orden de Santiago (su ingreso se hizo oficial el 29 de diciembre de 1617).', 8876543),
('es7', 'es7', 'Gabrial', 'Miro', '9087763', 'gmiro@falso.com', '1972-03-17 00:00:00', ' (Alicante, 28 de julio de 1879-Madrid, 27 de mayo de 1930) fue un escritor español, encuadrado habitualmente en la llamada generación del 14 o el novecentismo.', 8766709),
('es8', 'es8', 'Ruben', 'Dario', '88777743', 'rdario@falso.com', '1867-01-18 00:00:00', 'Félix Rubén García Sarmiento, conocido como Rubén Darío (Metapa, hoy Ciudad Darío, Matagalpa, 18 de enero de 1867-León, 6 de febrero de 1916), fue un poeta, periodista y diplomático nicaragüense, máximo representante del modernismo literario en lengua española. Es, tal vez, el poeta que ha tenido mayor y más duradera influencia en la poesía del siglo XX en el ámbito hispánico. Es llamado príncipe de las letras castellanas.', 8766766),
('es9', 'es9', 'Mercedes Eliana', 'Gonzales ', '45367284', 'megonzales@falso.com', '0000-00-00 00:00:00', 'No disponible', 8708655);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lector`
--

CREATE TABLE `lector` (
  `id_le` varchar(10) CHARACTER SET latin1 NOT NULL,
  `con_le` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `nom_le` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ape_le` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `fec_nac_le` datetime DEFAULT NULL,
  `corr_le` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `tel_le` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lector`
--

INSERT INTO `lector` (`id_le`, `con_le`, `nom_le`, `ape_le`, `fec_nac_le`, `corr_le`, `tel_le`) VALUES
('le1', 'le1', 'Bibiana', 'Zuluaga', '0200-06-11 00:00:00', 'sbzuluagaa@unal.edu.co', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `isbn_li` varchar(13) CHARACTER SET latin1 NOT NULL,
  `tit_li` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `gen_li` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `pag_li` int(11) DEFAULT NULL,
  `est_li` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `sin_li` longtext CHARACTER SET latin1,
  `id_es1` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `nom_arc_li` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ext` varchar(10) CHARACTER SET latin1 NOT NULL,
  `archivo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`isbn_li`, `tit_li`, `gen_li`, `pag_li`, `est_li`, `sin_li`, `id_es1`, `nom_arc_li`, `ext`, `archivo`) VALUES
('', '', '', 0, '', '', 'es1', '', '', 0x4c6962726f732f),
('+++++++++++++', 'Probando dia 2', 'Cancion', 1, 'Aceptar', 'Mas verboo del normal ', 'es2', 'idioteces_de_los_idiotas_y_otras_tonterÃ­as.._.pdf', 'applicatio', 0x4c6962726f732f2b2b2b2b2b2b2b2b2b2b2b2b2b),
('1234-2324-412', 'SueÃ±o del infierno', 'Novela', 43, 'Pendiente', 'InvÃ­o a V. M. este discurso, tercero al SueÃ±o y al Alguacil, donde puedo decir que he rematado las pocas fuerzas de mi ingenio, no sÃ© si con alguna dicha. Quiera Dios halle algÃºn agradecimiento mi deseo, cuando no merezca alabanza mi trabajo, que con esto tendrÃ© algÃºn premio de los que da el vulgo con mano escasa, que no soy tan soberbio que me precie de tener envidiosos, pues de tenerlos tuviera por gloriosa recompensa el merecerlos tener. V. M. en Zaragoza comunique este papel, haciÃ©ndole la acogida que a todas mis cosas, mientras yo acÃ¡ esfuerzo la paciencia a maliciosas calumnias que al parto de mis obras (sea aborto) suelen anticipar mis enemigos. DÃ© Dios a V. M. paz y salud. Del Fresno y mayo 3 de 1608.', 'es6', 'sueÃ‘o_del_infierno.pdf', 'applicatio', 0x4c6962726f732f313233342d323332342d343132),
('1234-36545-12', 'Juguetes de la niÃ±ez', 'Novela', 181, 'Pendiente', 'Habiendo considerado que todos dedican sus libros con dos fines que pocas veces se apartan, el uno, de que la tal persona ayude para la impresiÃ³n con su bendita limosna; el otro, de que ampare la obra de los murmuradores; y considerando (por haber sido yo murmurador muchos aÃ±os) que esto no sirve sino de tener dos de quien murmurar, del necio que se persuade que hay autoridad de que los maldicientes hagan caso, y del presumido que paga con su dinero esta lisonja, me he determinado a escribille a trochimoche y a dedicalle a tontas y a locas, y suceda lo que sucediere, que el que le compra y murmura, primero hace burla de sÃ­, que gastÃ³ mal el dinero, que del autor, que se le hizo gastar mal. Y digan y hagan lo que quisieren los mecenas, que como nunca los he visto andar a cachetes con los murmuradores sobre si dijo o no dijo, y los veo muy pacÃ­ficos de amparo, desmentidos de todas las calumnias que hacen a sus encomendados, sin acordarse del libro del duelo, mÃ¡s he querido atreverme que engaÃ±arme. Hagan todos lo que quisieren de mi libro, pues yo he dicho lo que he querido de todos. AdiÃ³s, mecenas, que me despido de dedicatoria.', 'es6', 'juguetes_de_la_ninez.pdf', 'applicatio', 0x4c6962726f732f313233342d33363534352d3132),
('1234-36545-45', 'Execracion contra la blasfemia obstinacion', 'Novela', 58, 'Pendiente', 'EXECRACIÃ“N CONTRA LA BLASFEMA OBSTINACIÃ“N DE LOS JUDÃOS QUE HABLAN PORTUGUÃ‰S Y EN MADRID FIJARON LOS CARTELES SACRÃLEGOS Y HERÃ‰TICOS, ACONSEJANDO EL REMEDIO QUE ATAJE LO QUE, SUCEDIDO, EN ESTE MUNDO CON TODOS LOS TORMENTOS AÃšN NO SE PUEDE EMPEZAR A CASTIGAR. (1633)', 'es6', 'execracion_contra_la_blasfema_obstinacion.pdf', 'applicatio', 0x4c6962726f732f313233342d33363534352d3435),
('1234-43004-99', 'Â¿SOCIALISMO? NO, GRACIASâ€¦', 'Satira', 9, 'aceptar', 'En este comienzo del segundo decenio del siglo XXI se torna imprescindible hacer un alto en el camino de la sociedad espaÃ±ola, con el fin de reflexionar sobre lo que la ha llevado a una situaciÃ³n social y econÃ³mica que no tiene parangÃ³n en los Ãºltimos cincuenta aÃ±os. Por primera vez la joven generaciÃ³n actual vivirÃ¡ peor que las anteriores. DeberÃ­amos preguntarnos: Â¿cÃ³mo hemos llegado a esta situaciÃ³n?', 'es10', 'socialismo._no_gracias.pdf', 'applicatio', 0x4c6962726f732f313233342d34333030342d3939),
('1234-432-5548', 'Idioteces de los idiotas y otras tonterias', 'Drama', 6, 'Pendiente', 'Â¡Â¡Dios existe!! Probablemente, estimado lector, usted se estarÃ¡ preguntando como puedo llegar a esta conclusiÃ³n sobre un tema en el que filÃ³sofos, teÃ³logos y pensadores llevan siglos debatiendo y devanÃ¡ndose los sesos sin llegar a conclusiones definitivas. Pues sÃ­ seÃ±or, me reafirmo en ella, Â¡Dios existe!', 'es5', 'idioteces_de_los_idiotas_y_otras_tonterÃ­as.._.pdf', 'applicatio', 0x4c6962726f732f313233342d3433322d35353438),
('1234-432-5678', 'De verdad es un placer tener hijos', 'Novela', 11, 'Pendiente', 'Â¡Â¡Dios existe!! Probablemente, estimado lector, usted se estarÃ¡ preguntando como puedo llegar a esta conclusiÃ³n sobre un tema en el que filÃ³sofos, teÃ³logos y pensadores llevan siglos debatiendo y devanÃ¡ndose los sesos sin llegar a conclusiones definitivas. Pues sÃ­ seÃ±or, me reafirmo en ella, Â¡Dios existe!', 'es5', 'de_verdad_es_un_placer_tener_hijos.pdf', 'applicatio', 0x4c6962726f732f313233342d3433322d35363738),
('1234-543-2345', 'La ternura', 'Poema', 33, 'Publicado', 'Marta Carpentier, nueva escritora espaÃ±ola, con este relato pleno de fantasÃ­a y sensibilidad quedÃ³ en el segundo lugar del gusto de los lectores de todo el mundo en los Premios Literarios Freeditorial 2017.  La Ternura es un viaje al centro de nuestras emociones mÃ¡s hirientes, las que nos golpean convirtiÃ©ndonos en lo que somos. No es sino un gigante y crudo retrato sobre el poder de la entrega, la pÃ©rdida y de cÃ³mo nuestros deseos nos afectan hasta el punto de transformarnos por completo. En otras palabras, un certero y afilado dibujo del corazÃ³n humano, tan lleno siempre de miedos pero tambiÃ©n de esperanzas', 'es4', 'la_ternura.pdf', 'applicatio', 0x4c6962726f732f313233342d3534332d32333435),
('1234-55335-45', 'Discurso de todos los diablos', 'Novela', 53, 'Pendiente', 'Estos primeros renglones, que suelen, como alabarderos de los discursos, ir delante haciendo lugar con sus letores al hombro, pÃ­os, cÃ¡ndidos, benÃ©volos o benignos, aquÃ­ descansan deste trabajo, y dejan de ser lacayos de molde y remudan el apellido, que por lo menos es limpieza.', 'es6', 'discurso_de_todos_los_diablos.pdf', 'applicatio', 0x4c6962726f732f313233342d35353333352d3435),
('1234-55985-45', 'El mundo por dentro', 'Novela', 17, 'Pendiente', 'Estas son mis obras: claro estÃ¡ que juzgarÃ¡ V. Excelencia que siendo tales no me han de llevar al cielo; mas como yo no pretenda dellas mÃ¡s de que en este mundo me den nombre, y el que mÃ¡s estimo es de criado de V. Excelencia, se las invÃ­o para que, como tan gran prÃ­ncipe, las honre; lograrÃ¡n de paso la enmienda. DÃ© Dios a V. Excelencia su gracia y salud, que lo demÃ¡s merecido lo tiene al mundo su virtud y grandeza. En la aldea, abril 26 de 1612.', 'es6', 'el_mundo_por_dentro.pdf', 'applicatio', 0x4c6962726f732f313233342d35353938352d3435),
('1234-99048-12', 'Los sueÃ±os', 'Novela', 118, 'Pendiente', 'RefiÃ©rese, no sÃ© si por modo de cuento gratioso y ficticio, que estando una vez muy enfermo un soldado muy preciado de cortÃ©s y ladino, entre muchas de sus oraciones, pregarias y protestaciones que hacÃ­a, finalmente vino a rematarlas diciendo: -Y Dios me libre de las manos del seÃ±or Diablo-, tratÃ¡ndole siempre con esta cortesÃ­a todas las veces que le nombraba. ReparÃ³ en esto Ãºltimo uno de los circunstantes, preguntÃ¡ndole juntamente luego por quÃ© llamaba seÃ±or al diablo, siendo la mÃ¡s vil criatura del mundo. A que respondiÃ³ tan presto el enfermo diciendo: -Â¿QuÃ© pierde el hombre en ser bien criado? Â¿QuÃ© sÃ© yo a quiÃ©n habrÃ© de menester ni en quÃ© manos he de dar?', 'es6', 'los_sueÃ‘os.pdf', 'applicatio', 0x4c6962726f732f313233342d39393034382d3132),
('1453-543-6808', 'Lo que cambian los tiempos', 'Cuento', 5, 'Pendiente', 'Aquel dÃ­a me despertÃ© temprano â€“a eso de las diez y media de la maÃ±anaâ€“ inquieto por los pensamientos y reflexiones que me habÃ­a producido la lectura de la Biblia, que por insistente recomendaciÃ³n de Zoilo habÃ­a iniciado hacia poco, y que, para colmo, incluÃ­a el ejercicio lector de los dos Testamentos, el antiguo y el nuevo.', 'es5', 'lo_que_cambian_los_tiempos.pdf', 'applicatio', 0x4c6962726f732f313435332d3534332d36383038),
('1453-543-6897', 'La dicha incierta del amor', 'Poema', 11, 'Pendiente', 'Los hippies no tenÃ­an razÃ³n cuando decÃ­an aquello de â€œhaz el amor y no la guerraâ€. Â¡CrÃ©ame, no tenÃ­an razÃ³n! Estaban equivocados. PiÃ©nselo por un momento. Â¿No es verdad que al final â€”salvo honrosas excepcionesâ€” lo que comienza como amor termina frecuentemente en guerra para regocijo de abogados? Por tanto, la guerra es algo implÃ­cito en el amor, y viceversa. Espere, quizÃ¡ me estÃ© liando un poco.', 'es5', 'la_dicha_incierta_del_amor.pdf', 'applicatio', 0x4c6962726f732f313435332d3534332d36383937),
('2133-543-6808', 'Por Dios no te cases y otros relatos impudicos', 'Cuento', 69, 'Pendiente', 'Menos mal que estaba solo en el salÃ³n de mi apartamento, porque al terminar de ver aquella pelÃ­cula no pude evitar que una lÃ¡grima me cayera por el rostro embargado por la emociÃ³n del final.', 'es5', 'por_dios_no_te_cases!_y_otros_relatos_impÃºdicos.p', 'applicatio', 0x4c6962726f732f323133332d3534332d36383038),
('3113-34546-43', 'HILVÃN DE ESCENAS', 'Oda', 134, 'Pendiente', 'Entre dos estribaciones enormes y fragosas del Aylona, serpea el valle de Badaleste, hondo y vicioso. En el horcajo de tamaÃ±as sierras, en altitud bravÃ­a estÃ¡ Confines, viejo y parduzco pueblecillo sobre cuyo costroso hacinamiento de tejados verdinegros, eleva la decrÃ©pita AbadÃ­a su campanario estrecho, amarillento y alto, maculado junto a su cornisa por las rudas y ennegrecidas piedras que deja ver un desgarrÃ³n de la fachada.', 'es7', 'hilvÃ¡n_de_escenas.pdf', 'applicatio', 0x4c6962726f732f333131332d33343534362d3433),
('3113-34546-78', 'LOS AMIGOS, LOS AMANTES Y LA MUERTE', 'Oda', 62, 'Pendiente', 'Desde el vestÃ­bulo pasa la suave luz de una lÃ¡mpara escarchada al aposento paredaÃ±o donde estÃ¡ el tullido cercado de amigos. Hablan de proyectos logreros, de meriendas en heredades, de un sermÃ³n, de paseos bajo el refugio de los olmos del camino. Son viejos, como el enfermo, y tienen fortaleza, estrÃ©pito en la risa y fuman. Cuando le ayudan a variar de actitud o le acomodan la manta caÃ­da o arrastran su butaca de ruedas, siente Ã©l mÃ¡s su impotencia y le llora angustiadamente su alma, pero los ojos no. Â¡Oh, si le vieran llorar por fuera estos amigos viejos y alegres, que ni padecen el reuma senil!', 'es7', 'los_amigos.pdf', 'applicatio', 0x4c6962726f732f333131332d33343534362d3738),
('4345-45145-56', 'El Canto Errante', 'Cancion', 67, 'Pendiente', 'EL mayor elogio hecho recientemente a la PoesÃ­a y a los poetas ha sido expresado en lengua Â«anglosajonaÂ» por un nombre insospechable de extraordinarias complacencias con las nueve musas. Un yanqui. Se trata de Teodoro Roosevelt.', 'es8', 'el_canto_errante.pdf', 'applicatio', 0x4c6962726f732f343334352d34353134352d3536),
('4345-45436-56', 'Canto a la Argentina', 'Cancion', 63, 'Pendiente', 'N/A', 'es8', 'canto_a_la_argentina.pdf', 'applicatio', 0x4c6962726f732f343334352d34353433362d3536),
('4eeeeeeeeee33', '1111111111111111111111', 'Cancion', 111111111, 'Cancelar', '111111111111111', 'es1', 'adiÃ³s_espaÃ±a_adiÃ³s.pdf', 'applicatio', 0x4c6962726f732f34656565656565656565653333),
('5553-34546-43', 'EL ÃNGEL, EL MOLINO Y EL CARACOL DEL FARO', 'Oda', 74, 'Pendiente', 'La maÃ±ana es mÃ¡s clara y gozosa en torno del molino. Ruedan las velas henchidas, exhalando una corona de luz como la que tienen los santos. En el reposo caliente y duro parece que se oiga la senda rajÃ¡ndose de sol y hormigueros. El viento que bajÃ³ de la quebrada, y se durmiÃ³ en la pastura, y se puso a maldecir en los vallados y en el cornijal de las heredades, da un brinco y se sube al molino, y tiembla y bulle en las aspas de lona. Las seis alas se juntan en una para los ojos: la que estÃ¡ en lo alto y hace mÃ¡s jovial y mÃ¡s fresco el azul. Y desde arriba canta una tonada de brisa luminosa que dice: -Â¡Buen dÃ­a y pan!', 'es7', 'el_Ã¡ngel__el_molino_y_el_caracol_del_faro.pdf', 'applicatio', 0x4c6962726f732f353535332d33343534362d3433),
('5553-34546-56', 'Del huerto provincioano', 'Oda', 101, 'Pendiente', 'Caminando por las sendas de este huerto provinciano, me entrÃ© en las espesas y doradas mieses de la vida. De mis impresiones hice cuentos y crÃ³nicas de mucha simplicidad. No he podido guardarlo todo, que naturalmente soy abandonado y perezoso, y se me han caÃ­do muchas de las espigas segadas en las cÃ¡lidas tierrecitas de mi huerto. Dos manojos me quedaron, no sÃ© si de las mÃ¡s granadas y gustosas o si de las peores por vanas y desabridas. Con uno de', 'es7', 'del_huerto_provinciano.pdf', 'applicatio', 0x4c6962726f732f353535332d33343534362d3536),
('6004-43004-13', 'Desde la ventana', 'Oda', 124, 'aceptar', 'â€œY el hombre puso muros con vigilantes a sus pueblos y les llamÃ³ naciÃ³n. En la montaÃ±a mÃ¡s alta colocÃ³ una bandera y tras ella morÃ­an matando.â€ â€œY Autoridad derribÃ³ los muros y aboliÃ³ las banderas.â€ â€œY vio cÃ³mo los hombres hablaban distintas lenguas que los separaban.â€ â€œY Autoridad enseÃ±Ã³ un mismo idioma a todos los pueblos de la Tierra.â€', 'es10', 'desde_la_ventana.pdf', 'applicatio', 0x4c6962726f732f363030342d34333030342d3133),
('6004-43524-13', 'AdiÃ³s EspaÃ±a, adiÃ³s', 'Oda', 11, 'Publicado', 'EspaÃ±a estÃ¡ en un escenario de pÃ¡nico. Cuatro ciclones le asaltan y cada uno de ellos con una enorme capacidad destructiva: El primero: Un desempleo que sobrepasa el 25%, y continuarÃ¡ creciendo ya que la economÃ­a estÃ¡ en clara recesiÃ³n.', 'es10', 'adiÃ³s_espaÃ±a_adiÃ³s.pdf', 'applicatio', 0x4c6962726f732f363030342d34333532342d3133),
('6234-43004-13', 'El Amante de la Belleza', 'Oda', 68, 'Pendiente', 'El Ford azul estaba aparcado en baterÃ­a en la calle Juan de Mena. Dentro, un hombre solo, con sus dedos tamborileaba el volante. Sobre la ciudad de Barcelona caÃ­a un fuerte chaparrÃ³n primaveral y se habÃ­a levantado un molesto viento del oeste. Aunque era media tarde las calles estaban casi desiertas. Los pocos peatones que transitaban lo hacÃ­an con prisas, intentando protegerse de las inclemencias del tiempo. MÃ¡s de uno se refugiaba bajo los soportales, esperando que amainara la fuerza de la lluvia.', 'es10', 'el_amante_de_la_belleza.pdf', 'applicatio', 0x4c6962726f732f363233342d34333030342d3133),
('6234-43004-99', 'La EconomÃ­a de la Abundancia o el Fin de la Pobreza', 'Oda', 8, 'Pendiente', 'El nuevo marco econÃ³mico que naciÃ³ producto de la RevoluciÃ³n Industrial, y del abandono del patrÃ³n oro como referencia para fabricar dinero, tiene unas posibilidades que aÃºn no han sido desarrolladas en plenitud, porque todavÃ­a los responsables econÃ³micos no han', 'es10', 'la_economÃ­a_de_la_abundancia_o_el_final_de_la_pob', 'applicatio', 0x4c6962726f732f363233342d34333030342d3939),
('6354-43524-13', '3 Cartas a un americano: Â¿Por quÃ© os odian? Â¿Por quÃ© os aman?', 'Cancion', 18, 'Pendiente', 'Es posible americano que no seas totalmente consciente de que eres el resultado de la aventura social mÃ¡s peculiar y apasionante que jamÃ¡s vieron los siglos. De dicha aventura nacen las caracterÃ­sticas especiales que os hacen ser la sociedad mÃ¡s vital y energÃ©tica que existe en la actualidad. Aunque, curiosa y simultÃ¡neamente, tambiÃ©n la mÃ¡s odiada y amada.', 'es10', '3_cartas_a_un_americano.pdf', 'applicatio', 0x4c6962726f732f363335342d34333532342d3133),
('8457-45602-77', 'Nunca ConfÃ­es del Todo', 'Romance', 10, 'Pendiente', 'La vida, esa suerte de juego de azar donde unos ganan y otros pierden, o donde siempre se gana y siempre se pierde, nos pone en situaciones claves que nos obligan a sacar fuerzas de donde no imaginamos para enfrentar adversidades insospechadas que en otras circunstancias quizÃ¡s no podrÃ­amos enfrentar.', 'es9', 'nunca_confÃ­es_del_todo.pdf', 'applicatio', 0x4c6962726f732f383435372d34353630322d3737),
('8457-45656-77', 'El Sabor de la Nostalgia', 'Romance', 35, 'Pendiente', 'Por las noches, cuando subÃ­a a mi cuarto y ponÃ­a mi cabeza en la almohada, sentÃ­a deseos de echarme a correr y no parar hasta subir las escaleras de mi apartamento de la zona 12 en Alamar, La Habana, Cuba, peroâ€¦. me detenÃ­a el mar.', 'es9', 'el_sabor_de_la_nostalgia.pdf', 'applicatio', 0x4c6962726f732f383435372d34353635362d3737),
('8853-34476-78', 'NÃ“MADA (De la falta de amor)', 'Oda', 54, 'Pendiente', 'Despacio, y en coloquio piadoso con el ama Virtudes, ovillaba doÃ±a Elvira la recia madeja de lana azul, para seguir urdiendo los doce pares de medias que ofreciera en limosna. ServÃ­anle de devanadera las rollizas manos del ama.', 'es7', 'nÃ³mada.pdf', 'applicatio', 0x4c6962726f732f383835332d33343437362d3738),
('8853-34546-78', 'LAS CEREZAS DEL CEMENTERIO', 'Oda', 62, 'Pendiente', 'Desde el primer puente del buque contemplaba FÃ©lix la lenta ascensiÃ³n de la luna, luna enorme, ancha y encendida como el llameante ruedo de un horno. Y miraba con tan devoto recogimiento, que todo lo sentÃ­a en un santo remanso de silencio, todo quietecito y maravillado mientras emergÃ­a y se alzaba la roja luna. Y cuando ya estuvo alta, dorada, sola en el azul, y en las aguas temblaba gozosamente limpio, nuevo, el oro de su lumbre, aspirÃ³ FÃ©lix fragancia de mujer en la inmensidad, y luego le distrajo un fino rebullicio de risas. VolviÃ³se, y sus ojos recibieron la mirada de dos gentiles viajeras cuyos tules blancos, levÃ­simos, aleteaban sobre el pÃ¡lido cielo.', 'es7', 'miro_-_las_cerezas_del_cementerio.pdf', 'applicatio', 0x4c6962726f732f383835332d33343534362d3738),
('9065-45145-35', 'Prosa Dispersa', 'Satira', 76, 'Pendiente', 'Hace poco mÃ¡s de un aÃ±o nos hallÃ¡bamos en mi habitaciÃ³n, en un hotel de ParÃ­s, cerca de la Bolsa, el poeta Maurice Duplessis, porta-estandarte de la escuela romana; el simpÃ¡tico y sutil Kreutzberger, a la sazÃ³n crÃ­tico literario de La Cocarde, y Enrique', 'es8', 'prosa_dispersa.pdf', 'applicatio', 0x4c6962726f732f393036352d34353134352d3335),
('9065-45145-56', 'El oro de Mallorca', 'Satira', 5, 'Pendiente', 'El barco blanco de la CompaÃ±Ã­a IsleÃ±a MarÃ­tima se hallaba anclado cerca del muelle marsellÃ©s. El sol del mediodÃ­a estaba esquivo en la fresca maÃ±ana. AcompaÃ±ado de un amigo, BenjamÃ­n Itaspes fue a bordo, se posesionÃ³ de su camarote, entregÃ³ su equipaje. Como ya se iba a partir, se despidiÃ³ del amigo y se puso a pasear sobre cubierta. Ã‰l era el Ãºnico pasajero de primera. Por la proa, escasa gente, toda mallorquina y catalana, posiblemente del pequeÃ±o comercio, conversaban en su Ã¡spera lengua. El vapor era limpio y bien tenido; con todo, habÃ­a un vago olor muy madre-patria... La cocina estaba sobre el entrepuente y se veÃ­a a un cocinero sÃ³rdido manejar perniles y pescados. A un lado suyo, en una especie de jaula, habÃ­a cecinas; sobreasadas, cebollas, pimientos rojos y salchichones. De cuando en cuando salÃ­a un fogonero, todo negro, de una puerta lateral. CogÃ­a un botijo que habÃ­a al alcance de su mano, y bebÃ­a a chorro. Luego volvÃ­a a descender a su carbonera.', 'es8', 'el_oro_de_mallorca.pdf', 'applicatio', 0x4c6962726f732f393036352d34353134352d3536),
('9575-45145-56', 'El caso de la seÃ±orita Amelia', 'Satira', 5, 'Pendiente', 'Que el doctor Z es ilustre, elocuente, conquistador; que su voz es profunda y vibrante al mismo tiempo, y su gesto avasallador y misterioso, sobre todo despuÃ©s de la publicaciÃ³n de su obra sobre La plÃ¡stica de ensueÃ±o, quizÃ¡s podrÃ­ais negÃ¡rmelo o aceptÃ¡rmelo con restricciÃ³n; pero que su calva es Ãºnica, insigne, hermosa, solemne, lÃ­rica si gustÃ¡is, Â¡oh, eso nunca, estoy seguro! Â¿CÃ³mo negarÃ­ais la luz del sol, el aroma de las rosas y las propiedades narcÃ³ticas de ciertos versos? Pues bien; esta noche pasada poco despuÃ©s de que saludamos el toque de las doce con una salva de doce taponazos del mÃ¡s legÃ­timo Roederer, en el precioso comedor rococÃ³ de ese sibarita de judÃ­o que se llama Lowensteinger, la calva del doctor alzaba aureolada de orgullo, su bruÃ±ido orbe de marfil, sobre el cual, por un capricho de la luz, se veÃ­an sobre el cristal de un espejo las llamas de dos bujÃ­as que formaban, no sÃ© cÃ³mo, algo asÃ­ como los cuernos luminosos de MoisÃ©s. El doctor enderezaba hacia mÃ­ sus grandes gestos y sus sabias palabras. Yo habÃ­a soltado de mis labios, casi siempre silenciosos, una frase banal cualquiera. Por ejemplo, Ã©sta:', 'es8', 'El_caso_de_la_seÃ±orita_Amelia.pdf', 'applicatio', 0x4c6962726f732f393537352d34353134352d3536),
('9875-45145-35', 'Prosa PolÃ­tica Las RepÃºblicas Americanas', 'Satira', 76, 'Pendiente', 'Entre los acontecimientos que la historia ha de seÃ±alar de modo principal en los principios del siglo xx, estÃ¡ el surgir ante el mundo de la Â«nueva y gloriosa NaciÃ³nÂ» que se canta en el himno de los argentinos, no a la vida polÃ­tica, libre e independiente que se conquistara hace una centuria, sino a la vida de los pueblos superiores por el trabajo y la riqueza pacÃ­fica. En la balanza que forma el continente americano, es la RepÃºblica Argentina la que hace el contrapeso a la pujanza yanqui, la que salvarÃ¡ el espÃ­ritu de la raza y pondrÃ¡ coto a mÃ¡s que probables y aprobadas tentativas imperialistas. Y hoy, por eso el mundo fija la mirada en ese gran paÃ­s del Sur, de apenas siete millones de habitantes, que rivaliza en mÃ¡s de una empresa agraria, pecuniaria o financiera con el otro gran paÃ­s del Norte cuya poblaciÃ³n pasa de ochenta millones.', 'es8', 'prosa_dispersa.pdf', 'applicatio', 0x4c6962726f732f393837352d34353134352d3335),
('9999999999999', 'Probando modal', 'Cancion', 1, 'Publicado', 'Veamos si envia correctamente todo', 'es1', 'adiÃ³s_espaÃ±a_adiÃ³s.pdf', 'applicatio', 0x4c6962726f732f39393939393939393939393939),
('aaaaaaaaaaaaa', 'Primera prueba', 'Cancion', 50, 'Publicado', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 	  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 	  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 	  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 	  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 	  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'es2', 'carta asignacion.pdf', 'applicatio', 0x4c6962726f732f61616161616161616161616161),
('bbbbbbbbbbbbb', 'Otro lobro de prueba', 'Cancion', 1234, 'cancelar', 'Algo super largo ', 'es2', 'carta asignacion.pdf', 'applicatio', 0x4c6962726f732f62626262626262626262626262),
('CCCCCCCCCCCCC', 'Prueba del dia siguiente', 'Cancion', 80, 'Pendiente', 'MuchÃ­simo mas verbo para hoy', 'es2', 'carta asignacion.pdf', 'applicatio', 0x4c6962726f732f43434343434343434343434343),
('IIIIIIIIIIIII', 'No funiono prueba con usuario', 'Cancion', 1, 'Publicado', 'NNSUWBDBCWI UYW', 'es1', 'carta asignacion.pdf', 'applicatio', 0x4c6962726f732f49494949494949494949494949),
('No tiene', 'Tinta de lapiz', 'Novela', 46, 'Publicado', 'Â¿QuÃ© mundo estamos forjando? 62.000.000 de niÃ±as no tienen acceso a la educaciÃ³n y no pueden ir a la escuela. Lo cierto es que no tenemos que irnos muy lejos para conocer a muchas de ellas. Un poco mÃ¡s abajo hay una. Â¿Por quÃ© privamos de formaciÃ³n a ciertas personas? Â¿Pensamos que somos superiores o es que tememos que aprendan mÃ¡s que nosotros? Â¿Nos da pavor que se den cuenta de quiÃ©nes somos en realidad? Â¿Por quÃ© no le dedicamos el tiempo necesario para formar a quien es importante en nuestras vidas? Â¿QuiÃ©n no ha escrito a lo largo de su vida un diario o similar? Poca gente no ha plasmado en algÃºn momento de su vida algo que sentÃ­a en una hoja de papel, ya sea en prosa o en verso. Poca gente no ha manuscrito un sentir, experiencia o secreto. Â¿Por quÃ© lo hacemos? Â¿Para quÃ© o quiÃ©n lo escribimos?, Â¿para nosotros mismos o queremos que alguien lo lea? Â¿Queremos decirnos algo que, al leerlo despuÃ©s, nos resulte mÃ¡s real o irreal? Â¿Lo hacemos a modo de terapia o como vÃ¡lvula de escape? Â¿O es porque nos gusta o, simplemente, queremos dejar algo de manifiesto? Hoy en dÃ­a utilizamos muchas aplicaciones en las llamadas redes sociales a modo de diario. En el apartado â€˜estadoâ€™ decimos cÃ³mo nos sentimos y, despuÃ©s, a travÃ©s de fotos, vÃ­deos, frases, o comentarios, dÃ³nde estamos, hemos estado o dÃ³nde nos gustarÃ­a estar. Con ello transmitimos algo parecido a un diario. La diferencia es que todo esto lo gritamos en voz alta, y lo que escribimos en un diario lo susurramos en silencio. Â¿Se ha cumplido alguno de tus sueÃ±os? Â¿Te has preguntado por quÃ© algunos sueÃ±os se hacen realidad y otros no? No estamos hablando de ser premiados en la loterÃ­a o de tener esto o aquello, estamos hablando de los sueÃ±os relacionados a lo que queremos llegar a ser. Y, por Ãºltimo, Â¿quÃ© es la felicidad? Es una palabra con varias acepciones, Â¿tal vez muchas sensaciones yuxtapuestas que conforman una sola? AdÃ©ntrate conmigo en esta historia e intentaremos encontrar las respuestas.', 'es3', 'tinta_de_lÃ¡piz.pdf', 'applicatio', 0x4c6962726f732f4e6f207469656e65),
('wwwwwwwwwwwww', 'Pruea en la tarde', 'Cancion', 23, 'aceptar', 'lmpoinuibutcrut', 'es2', 'carta asignacion.pdf', 'applicatio', 0x4c6962726f732f77777777777777777777777777),
('YYVVVYVYYYV', 'VYVYUVUYVYU', 'Cancion', 87878778, 'aceptar', 'BHBHBHK', 'es1', '3_cartas_a_un_americano.pdf', 'applicatio', 0x4c6962726f732f5959565656595659595956),
('yyyyyyyyyyyyy', 'Pruea en la tarde', 'Cancion', 23, 'cancelar', 'lmpoinuibutcrut', 'es2', 'carta asignacion.pdf', 'applicatio', 0x4c6962726f732f79797979797979797979797979);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seleccion`
--

CREATE TABLE `seleccion` (
  `id_sel` varchar(10) CHARACTER SET latin1 NOT NULL,
  `fec_sel` datetime DEFAULT NULL,
  `isbn_li1` varchar(13) CHARACTER SET latin1 DEFAULT NULL,
  `id_le1` varchar(10) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `escritor`
--
ALTER TABLE `escritor`
  ADD PRIMARY KEY (`id_es`);

--
-- Indices de la tabla `lector`
--
ALTER TABLE `lector`
  ADD PRIMARY KEY (`id_le`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`isbn_li`),
  ADD KEY `fk_fl` (`id_es1`);

--
-- Indices de la tabla `seleccion`
--
ALTER TABLE `seleccion`
  ADD PRIMARY KEY (`id_sel`),
  ADD KEY `fk_fl1` (`isbn_li1`),
  ADD KEY `fk_fle1` (`id_le1`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `fk_fl` FOREIGN KEY (`id_es1`) REFERENCES `escritor` (`id_es`);

--
-- Filtros para la tabla `seleccion`
--
ALTER TABLE `seleccion`
  ADD CONSTRAINT `fk_fl1` FOREIGN KEY (`isbn_li1`) REFERENCES `libro` (`isbn_li`),
  ADD CONSTRAINT `fk_fle1` FOREIGN KEY (`id_le1`) REFERENCES `lector` (`id_le`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
