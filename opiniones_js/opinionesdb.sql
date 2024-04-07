create database opinionesdb;

use database opinionesdb;

CREATE TABLE `opinionesdb`.`opinion` (
    `Nombre` VARCHAR(40) NOT NULL ,
    `Apellido` VARCHAR(40) NOT NULL ,
    `Email` VARCHAR(60) NOT NULL ,
    `Telefono` INT NOT NULL ,
    `Asunto` VARCHAR(30) NOT NULL ,
    `Mensaje` TEXT NOT NULL ,
    `Puntuaje` TINYINT NOT NULL 
    ) ENGINE = InnoDB;