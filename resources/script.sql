create database prac_subir_fotos character set utf8 COLLATE utf8_general_ci;
use prac_subir_fotos;
create table fotos(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	titulo VARCHAR(200) NOT NULL,
	imagen_ruta VARCHAR(200) NOT NULL,
	texto TEXT NOT NULL
);

INSERT INTO fotos(titulo,imagen_ruta,texto) VALUES	('Fotografia 1','1.jpg','Pc Calendario'),
													('Fotografia 2','2.jpg','Puente en medio del mar'),
													('Fotografia 3','3.jpg','Programador System'),
													('Fotografia 4','4.jpg','Ciudad de Moscu'),
													('Fotografia 5','5.jpg','Camaras Fotograficas'),
													('Fotografia 7','7.jpg','Laptop vision Frontal'),
													('Fotografia 8','8.jpg','Casas cerca de la playa'),
													('Fotografia 9','9.jpg','Libros y cuadernos'),
													('Fotografia 10','10.jpg','El cielo y la nube'),
													('Fotografia 11','11.jpg','pequeño parlante'),
													('Fotografia 13','13.jpg','Buceadores'),
													('Fotografia 14','14.jpg','Montañas de nieve'),
													('Fotografia 15','15.jpg','Playas continental'),
													('Fotografia 16','16.jpg','Hojas de las plantas');