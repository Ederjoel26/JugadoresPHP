CREATE DATABASE practica;

CREATE TABLE jugadores
(
    id int not null AUTO_INCREMENT,
    nombre varchar(50),
    puntos int,
    nivel_anotaciones varchar(20),
    PRIMARY KEY(id)
);