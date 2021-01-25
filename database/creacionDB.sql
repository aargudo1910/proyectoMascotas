-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema fundacion
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `fundacion` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `fundacion` ;

-- -----------------------------------------------------
-- Table `fundacion`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fundacion`.`usuario` (
  `cedula` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(100) NOT NULL,
  `num_telefono` VARCHAR(45) NOT NULL,
  `ciudad` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE INDEX `idusuario_UNIQUE` (`idusuario` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;

-- -----------------------------------------------------
-- Table `fundacion`.`solicitud`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fundacion`.`solicitud` (
  `idsolicitud` VARCHAR(45) NOT NULL, -- idsolicitud = cedula del usuario
  `estado` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idsolicitud`),
  UNIQUE INDEX `idsolicitud_UNIQUE` (`idsolicitud` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `fundacion`.`mascotas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fundacion`.`mascotas` (
  `nombre` VARCHAR(155) CHARACTER SET 'utf8' COLLATE 'utf8_spanish_ci' NOT NULL,
  `edad` VARCHAR(155) CHARACTER SET 'utf8' COLLATE 'utf8_spanish_ci' NOT NULL,
  `animal` VARCHAR(155) CHARACTER SET 'utf8' COLLATE 'utf8_spanish_ci' NOT NULL,
  `raza` VARCHAR(155) CHARACTER SET 'utf8' COLLATE 'utf8_spanish_ci' NOT NULL,
  `color` VARCHAR(155) CHARACTER SET 'utf8' COLLATE 'utf8_spanish_ci' NOT NULL
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `fundacion`.`administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fundacion`.`administrador` (
  `idadministrador` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idadministrador`),
  UNIQUE INDEX `idsolicitud_UNIQUE` (`idadministrador` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
