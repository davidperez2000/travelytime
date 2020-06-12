CREATE database travelytime;
use travelytime;

CREATE TABLE IF NOT EXISTS `usuariosreg` (
  `dni` varchar(9) NOT NULL DEFAULT '',
  `nombre` varchar(40) DEFAULT NULL,
  `apellidos` varchar(40) DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `codigopostal` int(11) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `usulog` (
  `usuario` varchar(40) NOT NULL DEFAULT '',
  `contrasena` varchar(40) DEFAULT NULL,
  `dni` varchar(9) DEFAULT NULL,
  `chat` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`usuario`),
  UNIQUE KEY `dni` (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `viajes` (
  `codviaje` int(11) NOT NULL AUTO_INCREMENT,
  `destino` varchar(40) DEFAULT NULL,
  `salida` varchar(40) DEFAULT NULL,
  `especificacion` text,
  `pago` varchar(40) DEFAULT NULL,
  `pasajeros` int(11) DEFAULT NULL,
  PRIMARY KEY (`codviaje`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `viajesusu` (
  `dni` varchar(9) NOT NULL DEFAULT '',
  `codviaje` int(11) NOT NULL DEFAULT '0',
  `fecha_ini` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fecha_fin` datetime DEFAULT NULL,
  PRIMARY KEY (`dni`,`codviaje`,`fecha_ini`),
  KEY `FK_viajesusu_cv` (`codviaje`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



ALTER TABLE `usulog`
  ADD CONSTRAINT `fk_dni` FOREIGN KEY (`dni`) REFERENCES `usuariosreg` (`dni`);

ALTER TABLE `viajesusu`
  ADD CONSTRAINT `FK_viajesusu_cv` FOREIGN KEY (`codviaje`) REFERENCES `viajes` (`codviaje`),
  ADD CONSTRAINT `fk_viajesusu_dni` FOREIGN KEY (`dni`) REFERENCES `usuariosreg` (`dni`);

INSERT into usuariosreg values("012345678","admin","admin","00-00-0000","28044","admin@gmail.com","madrid");

INSERT into usulog values("admin","admin","012345678","1");

INSERT into usuariosreg values("123456789","Pedro","Fernandez Garcia","1992-02-02","28054","pedrofg@gmail.com","Madrid");

INSERT into usulog values("pedrofg","pedro1234","123456789","1");