CREATE TABLE alumnos (
	idAlumno INT AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(50) NOT NULL,
	contrasena VARCHAR(50) NOT NULL,
	nombreJesuita VARCHAR(100),
	imagen MEDIUMBLOB,
	informacionJesuita TEXT
);