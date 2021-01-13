CREATE DATABASE jeep;
USE jeep;

CREATE TABLE consultas(
id				INT(10) AUTO_INCREMENT NOT NULL,
nombre			VARCHAR(100) NOT NULL,
telefono		INT(100) NOT NULL,
mensaje			varchar(255),
fecha			DATE,

CONSTRAINT pk_consultas PRIMARY KEY(id)
)ENGINE=InnoDB;

INSERT INTO consultas VALUES(null, 'nombre', 1234, 'email', 'mensaje', CURDATE());

SELECT * FROM consultas;

