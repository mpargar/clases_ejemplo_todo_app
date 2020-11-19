-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema TODO_APP
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema TODO_APP
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `TODO_APP` DEFAULT CHARACTER SET utf8 ;
USE `TODO_APP` ;

-- -----------------------------------------------------
-- Table `TODO_APP`.`Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TODO_APP`.`Usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(60) NOT NULL COMMENT 'Miguel',
  `apellidos` VARCHAR(60) NOT NULL,
  `fechaNacimiento` DATE NOT NULL,
  `email` VARCHAR(120) NOT NULL,
  `contrasena` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TODO_APP`.`Tareas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TODO_APP`.`Tareas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(120) NOT NULL,
  `descripcion` TEXT NULL,
  `fecha` DATE NULL,
  `status` INT NOT NULL,
  `idUsuario` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Lista_Usuarios`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `TODO_APP`.`Usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
