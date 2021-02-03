-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema fundacion
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `fundacion` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;
USE `fundacion` ;

-- -----------------------------------------------------
-- Table `fundacion`.`users`
-- -----------------------------------------------------
CREATE TABLE `fundacion`.`users` ( 
  `username` VARCHAR(50) NOT NULL , 
  `email` VARCHAR(50) NOT NULL , 
  `usertype` VARCHAR(50) NOT NULL , 
  `password` VARCHAR(50) NOT NULL ) 
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `fundacion`.`solicitud`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fundacion`.`solicitud` (
  `idsolicitud` VARCHAR(45) NOT NULL, -- idsolicitud = cedula del usuario
  `estado` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idsolicitud`),
  UNIQUE INDEX `idsolicitud_UNIQUE` (`idsolicitud` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `fundacion`.`mascotas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fundacion`.`mascotas` (
  `nombre` VARCHAR(155) CHARACTER SET 'utf8' COLLATE 'utf8_spanish_ci' NOT NULL,
  `edad` VARCHAR(155) CHARACTER SET 'utf8' COLLATE 'utf8_spanish_ci' NOT NULL,
  `animal` VARCHAR(155) CHARACTER SET 'utf8' COLLATE 'utf8_spanish_ci' NOT NULL,
  `raza` VARCHAR(155) CHARACTER SET 'utf8' COLLATE 'utf8_spanish_ci' NOT NULL,
  `color` VARCHAR(155) CHARACTER SET 'utf8' COLLATE 'utf8_spanish_ci' NOT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

SET SQL_MODE=@OLD_SQL_MODE;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;