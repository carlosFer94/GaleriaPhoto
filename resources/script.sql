create database prac_subir_fotos character set utf8 COLLATE utf8_general_ci;
use prac_subir_fotos;
create table fotos(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	titulo VARCHAR(200) NOT NULL,
	imagen_ruta VARCHAR(200) NOT NULL,
	texto TEXT NOT NULL
);