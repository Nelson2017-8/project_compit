/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE IF NOT EXISTS `compit_web` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `compit_web`;

CREATE TABLE IF NOT EXISTS `adm_notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `body` text NOT NULL,
  `link` text NOT NULL,
  `prioridad` int(1) NOT NULL DEFAULT '3',
  `user_id` varchar(50) NOT NULL,
  `leido` int(1) NOT NULL DEFAULT '0',
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `adm_notification` DISABLE KEYS */;
/*!40000 ALTER TABLE `adm_notification` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `carrito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productoNombre` varchar(100) NOT NULL,
  `productoId` varchar(100) NOT NULL,
  `productoItem` varchar(100) NOT NULL,
  `productoMonto` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `tipoServicio` varchar(50) NOT NULL,
  `productoDes` varchar(50) NOT NULL,
  `productoDate` datetime NOT NULL,
  `productoState` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `carrito` DISABLE KEYS */;
REPLACE INTO `carrito` (`id`, `productoNombre`, `productoId`, `productoItem`, `productoMonto`, `userId`, `tipoServicio`, `productoDes`, `productoDate`, `productoState`) VALUES
	(1, 'Banner', '1', '1', 100, 57, 'Developer Web', '', '2019-02-12 11:37:04', '');
/*!40000 ALTER TABLE `carrito` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `clientes` (
  `Id_clientes` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL DEFAULT '',
  `Apellido` varchar(100) DEFAULT '',
  `Correo` varchar(150) NOT NULL DEFAULT '',
  `Pass` varchar(150) NOT NULL DEFAULT '',
  `Pais` varchar(100) NOT NULL DEFAULT 'No has agregado una localidad',
  `Telefono` varchar(50) NOT NULL DEFAULT 'No has registrado uno',
  `CodEmail` varchar(50) NOT NULL DEFAULT '0',
  `fechaRegistro` datetime NOT NULL,
  `Activo` int(1) NOT NULL DEFAULT '0',
  `Idioma` varchar(3) NOT NULL DEFAULT 'es',
  `Comentario` text NOT NULL,
  PRIMARY KEY (`Id_clientes`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
REPLACE INTO `clientes` (`Id_clientes`, `Nombre`, `Apellido`, `Correo`, `Pass`, `Pais`, `Telefono`, `CodEmail`, `fechaRegistro`, `Activo`, `Idioma`, `Comentario`) VALUES
	(47, 'Nelson', 'Portillo', 'nelsonportillo988@gmail.com', '65d2deba7228ccc57928a5e65ac04a09', 'No has agregado una localidad', 'No has registrado uno', 'F2-5071', '2019-02-03 07:50:36', 1, 'es', 'nelsonportillo988'),
	(49, 'Nelson', 'Portillo', 'nelsonportillo444@gmail.com', '4cbb42a8e20a372716c88fb977feb98b', 'No has agregado una localidad', 'No has registrado uno', 'verificado', '2019-02-03 07:53:26', 0, 'es', 'nelsonportillo444'),
	(57, 'Nelson', 'Portillo', 'nelsonportillo982@gmail.com', '1aa76e9523dddf78fa5fccc97c9eac7a', 'Venezuela', '04164117637', 'EEB893D2EA67CAF1A4BCBF0739BC616', '2019-02-09 22:32:19', 1, 'es', '');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `cupodescuento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '0',
  `dateIni` datetime NOT NULL,
  `dateFinal` datetime NOT NULL,
  `userId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `cupodescuento` DISABLE KEYS */;
/*!40000 ALTER TABLE `cupodescuento` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `mantenimiento_web` (
  `Id_mantenimiento_web` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `duraction` varchar(100) NOT NULL,
  `monto` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_mantenimiento_web`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 CHECKSUM=1;

/*!40000 ALTER TABLE `mantenimiento_web` DISABLE KEYS */;
/*!40000 ALTER TABLE `mantenimiento_web` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `notificaciones_user` (
  `Id_notificaciones_user` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL DEFAULT '',
  `icono_font` varchar(20) DEFAULT '',
  `fecha` date NOT NULL,
  `user_id` varchar(100) NOT NULL DEFAULT '',
  `key_user` varchar(100) NOT NULL DEFAULT '',
  `leido` int(1) NOT NULL DEFAULT '0',
  `link` text,
  PRIMARY KEY (`Id_notificaciones_user`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `notificaciones_user` DISABLE KEYS */;
REPLACE INTO `notificaciones_user` (`Id_notificaciones_user`, `titulo`, `icono_font`, `fecha`, `user_id`, `key_user`, `leido`, `link`) VALUES
	(5, 'Alerta no se pudo enviar el mensaje a su Correo ElectrÃ³nico.', 'ti-alert', '2019-01-27', '39', '77FE05D3FCBB8C42', 0, NULL),
	(6, 'Alerta no se pudo enviar el mensaje a su Correo ElectrÃ³nico.', 'ti-alert', '2019-01-27', '40', '5487B7969EFF1C5F', 0, NULL),
	(7, 'Alerta no se pudo enviar el mensaje a su Correo ElectrÃ³nico.', 'ti-alert', '2019-02-03', '49', 'E3C386B1AD946120', 0, NULL),
	(8, 'ERROR no se pudo verificar su Email.', '', '2019-02-09', '54', '', 0, NULL),
	(9, 'ERROR no se pudo verificar su Email.', '', '2019-02-09', '55', '', 0, NULL),
	(10, 'ERROR no se pudo verificar su Email.', '', '2019-02-09', '56', '', 0, NULL),
	(11, 'ERROR no se pudo verificar su Email.', '', '2019-02-09', '57', '', 0, NULL);
/*!40000 ALTER TABLE `notificaciones_user` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `proyectos` (
  `Id_proyecto` int(11) NOT NULL AUTO_INCREMENT,
  `servicio` text NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `presupuesto_min` varchar(50) NOT NULL DEFAULT '0',
  `presupuesto_max` varchar(50) NOT NULL DEFAULT '0',
  `coste_real` varchar(50) NOT NULL DEFAULT '0',
  `analisis_estadistico` int(1) NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_lim` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `link_folder` text NOT NULL,
  `estado` varchar(80) NOT NULL,
  `id_user` int(11) NOT NULL,
  `key_user` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_proyecto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `proyectos` DISABLE KEYS */;
REPLACE INTO `proyectos` (`Id_proyecto`, `servicio`, `nombre`, `descripcion`, `presupuesto_min`, `presupuesto_max`, `coste_real`, `analisis_estadistico`, `fecha_ini`, `fecha_registro`, `fecha_lim`, `fecha_fin`, `link_folder`, `estado`, `id_user`, `key_user`) VALUES
	(1, 'Community Manager - Desarrollo Web - DiseÃ±o GrÃ¡fico - DiseÃ±o Web - ', 'nelson_portillo', 'proyecto', '100', '200', '0', 0, '0000-00-00', '2019-01-15', '0000-00-00', '0000-00-00', 'http://www.compitweb.com/datos_user/project/11/nelsonportillo988@gmail.com/folder_project/nelson_portillo/', 'Evaluando', 11, '270C7BB25C70B14C'),
	(2, 'DiseÃ±o Web - ', 'nelson_portillo', 'hola', '100', '1000', '0', 0, '0000-00-00', '2019-01-21', '0000-00-00', '0000-00-00', 'http://www.compitweb.com/datos_user/project/11/nelsonportillo988@gmail.com/folder_project/nelson_portillo/', 'Evaluando', 11, '270C7BB25C70B14C'),
	(3, 'ActualizaciÃ³n Web - ', 'kmdk', 'kadam', '10', '50', '0', 0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'http://www.compitweb.com/datos_user/project/11/nelsonportillo988@gmail.com/folder_project/kmdk/', 'Evaluando', 11, '270C7BB25C70B14C');
/*!40000 ALTER TABLE `proyectos` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `roots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `cedulaPasaporte` varchar(100) NOT NULL,
  `pais` text NOT NULL,
  `estado` text NOT NULL,
  `direccionResidencia` text NOT NULL,
  `password` varchar(250) NOT NULL,
  `dateNatalidad` date NOT NULL,
  `dateReg` datetime NOT NULL,
  `curriculo` text NOT NULL,
  `departamento` text NOT NULL,
  `cargo` text NOT NULL,
  `profesionalidad` text NOT NULL,
  `tipoEmpleo` text NOT NULL,
  `modalidad` text NOT NULL,
  `sueldo` double NOT NULL,
  `idName` varchar(50) NOT NULL,
  `habilidades` text NOT NULL,
  `stacte` int(1) NOT NULL DEFAULT '1',
  `stacteJob` int(1) NOT NULL DEFAULT '0',
  `stacteLogin` int(1) NOT NULL DEFAULT '0',
  `typeAsc` int(1) NOT NULL DEFAULT '3',
  `veryEmail` int(1) NOT NULL DEFAULT '0',
  `paypal` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `roots` DISABLE KEYS */;
REPLACE INTO `roots` (`id`, `nombre`, `apellido`, `correo`, `telefono`, `sexo`, `cedulaPasaporte`, `pais`, `estado`, `direccionResidencia`, `password`, `dateNatalidad`, `dateReg`, `curriculo`, `departamento`, `cargo`, `profesionalidad`, `tipoEmpleo`, `modalidad`, `sueldo`, `idName`, `habilidades`, `stacte`, `stacteJob`, `stacteLogin`, `typeAsc`, `veryEmail`, `paypal`) VALUES
	(31, 'Nelson', 'Portillo', 'nelsonportillo982@gmail.com', '04164117637', 'Maculino', '27686483', 'Venezuela', 'Miranda', 'Caucagua Venezuela', '2f507d88cad30759f39aa704203cdbda', '2000-04-12', '2019-02-04 05:34:41', 'http://www.compitweb.com/adm/nelsonportillo982@gmail.com/nelsonPortillo/curriculum+nelson.docx', 'AdministraciÃ³n', 'Estudiante Universitario', 'Full-stack', 'Fijo', 'Tiempo Completo', 12000, 'nelsonPortillo', 'www.compitweb.com/adm/nelsonportillo982@gmail.com/nelsonPortillo/skill.json', 1, 0, 0, 1, 0, 'nelsonportillo982@gmail.com'),
	(38, 'Nelson', 'Portillo', 'nelsonportillo988@gmail.com', '04164117637', '', '27686483', 'Venezuela', 'Miranda', ' NOAOA', '092abc9255bb475473dffb7237c8577c', '2000-04-12', '2019-02-05 01:02:30', '', 'AdministraciÃ³n', 'Iniciante', 'Administrador', 'Por Contracto', 'Tiempo Completo', 2000, 'nelsonPortillo', 'www.compitweb.com/adm/nelsonportillo988@gmail.com/nelsonPortillo/skill.json', 1, 0, 0, 3, 0, '');
/*!40000 ALTER TABLE `roots` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `servicios_precios` (
  `Id_servicios_precios` int(11) NOT NULL AUTO_INCREMENT,
  `servicio` varchar(50) NOT NULL DEFAULT '0',
  `detalle` text NOT NULL,
  `precio` int(30) NOT NULL DEFAULT '0',
  `fecha_e` varchar(20) NOT NULL DEFAULT '0',
  `divisa` varchar(10) NOT NULL DEFAULT '0',
  `link` text NOT NULL,
  PRIMARY KEY (`Id_servicios_precios`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `servicios_precios` DISABLE KEYS */;
REPLACE INTO `servicios_precios` (`Id_servicios_precios`, `servicio`, `detalle`, `precio`, `fecha_e`, `divisa`, `link`) VALUES
	(1, 'Desarrollo Web', 'Web Empresa', 300, '20', 'USA', '');
/*!40000 ALTER TABLE `servicios_precios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
