-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla ventasapp.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_categoria` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ventasapp.categorias: ~4 rows (aproximadamente)
DELETE FROM `categorias`;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id_categoria`, `nom_categoria`) VALUES
	(1, 'Vehiculos'),
	(2, 'Hogar'),
	(3, 'Celulares'),
	(5, 'Papeleria');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla ventasapp.favoritos
CREATE TABLE IF NOT EXISTS `favoritos` (
  `id_compra` bigint(20) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(255) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_compra`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ventasapp.favoritos: ~1 rows (aproximadamente)
DELETE FROM `favoritos`;
/*!40000 ALTER TABLE `favoritos` DISABLE KEYS */;
INSERT INTO `favoritos` (`id_compra`, `email_id`, `producto_id`) VALUES
	(2, 'prueba@gmail.com', 1);
/*!40000 ALTER TABLE `favoritos` ENABLE KEYS */;

-- Volcando estructura para tabla ventasapp.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` bigint(20) NOT NULL AUTO_INCREMENT,
  `persona_email` varchar(255) DEFAULT NULL,
  `nom_producto` varchar(255) DEFAULT NULL,
  `des_producto` varchar(255) DEFAULT NULL,
  `precio` varchar(50) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `img_producto` varchar(50) DEFAULT NULL,
  `fecha_producto` date DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ventasapp.productos: ~4 rows (aproximadamente)
DELETE FROM `productos`;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id_producto`, `persona_email`, `nom_producto`, `des_producto`, `precio`, `categoria_id`, `img_producto`, `fecha_producto`) VALUES
	(1, 'stiven.cor2002@gmail.com', 'Esto es una prueba', 'ahsdahdgsagdhgahjghdjgagdjsgdhjgdhgahjdgsjadghjsagdjsgsjgdgagsa', '8.778', 3, NULL, '2020-06-01'),
	(3, 'stiven.cor2002@gmail.com', 'carlos documentos', 'Carlos archivos de trabajos', '2.600', 2, NULL, '2020-06-12'),
	(4, 'prueba@gmail.com', 'het', 'yehw', '6.461', 2, NULL, '2020-06-12'),
	(5, 'prueba6@gmail.com', 'carpeta de hoja de vida unidad', 'carpeta de hoja de vida unidad', '1.000', 5, NULL, '2020-06-12');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla ventasapp.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_usuario` varchar(100) DEFAULT NULL,
  `ape_usuario` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ventasapp.usuarios: ~4 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `nom_usuario`, `ape_usuario`, `telefono`, `email`, `password`) VALUES
	(1, 'Stiven', 'Cordoba', '3108189375', 'stiven.cor2002@gmail.com', '12345'),
	(2, 'Prueba', 'Prueba', '2131312161', 'prueba@gmail.com', '12345'),
	(3, 'prueba', 'prueba', '3169745', 'prueb2@gmail.com', '12345'),
	(4, 'duvan', 'rosero', '649466764', 'prueba6@gmail.com', '12345');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
