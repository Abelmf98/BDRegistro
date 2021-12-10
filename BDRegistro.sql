/*Abel Mansilla Felipe*/

-- BASE DE DATOS
-- ELIMINAR BASE DE DATOS
DROP DATABASE IF EXISTS registro;
-- CREAR BASE DE DATOS
CREATE DATABASE registro DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
-- SELECCIONAR LA BASE DE DATOS
USE registro;

-- TABLAS
CREATE TABLE miniJuego(
  idMinijuego tinyint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Nombre varchar(20) NOT NULL,
  url varchar(100) NOT NULL
);

-- TABLAS
CREATE TABLE Usuario(
  idUsuario smallint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Nombre varchar(20) NOT NULL,
  Apellidos varchar(30) NOT NULL,
  nombreUsuario varchar(10) NOT NULL,
  Correo varchar(50) NOT NULL UNIQUE,
  Password varchar(20) NOT NULL
);

CREATE TABLE Preferencia(
  idUsuario smallint UNSIGNED NOT NULL,
  idMinijuego tinyint UNSIGNED NOT NULL,
  CONSTRAINT FK_idUsuario FOREIGN KEY (idUsario) REFERENCES usuario(idUsario),
  CONSTRAINT FK_idMinijuego FOREIGN KEY (idMinijuego) REFERENCES miniJuego(idMinijuego),
  CONSTRAINT PK_preferencia PRIMARY KEY (idUsario, idMinijuego)
);
