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
  Nombre varchar(20) NOT NULL
);

-- TABLAS
CREATE TABLE Usuario(
  idUsuario tinyint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Nombre varchar(20) NOT NULL,
  Correo varchar(50) NOT NULL
);
