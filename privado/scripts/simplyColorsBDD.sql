SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `simplyColors` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `simplyColors` ;

-- -----------------------------------------------------
-- Table `simplyColors`.`USUARIO`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `simplyColors`.`USUARIO` (
  `idusuario` INT NOT NULL AUTO_INCREMENT ,
  `usuario` VARCHAR(20) NOT NULL ,
  `password` VARCHAR(50) NOT NULL ,
  `nombre` VARCHAR(20) NOT NULL ,
  `apellido` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`idusuario`, `usuario`) )
ENGINE = InnoDB;

INSERT INTO `usuario` (`idusuario`, `usuario`, `password`, `nombre`, `apellido`) VALUES
(1, 'ddiazj', 'a189c633d9995e11bf8607170ec9a4b8', 'Diego', 'Diaz');


-- -----------------------------------------------------
-- Table `simplyColors`.`CATEGORIA`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `simplyColors`.`CATEGORIA` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT ,
  `tipoProducto` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`idCategoria`, `tipoProducto`) )
ENGINE = InnoDB;

INSERT INTO `categoria` (`idCategoria`, `tipoProducto`) VALUES
(1, 'Ropa'),
(2, 'Calzado');

-- -----------------------------------------------------
-- Table `simplyColors`.`DISENNO`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `simplyColors`.`DISENNO` (
  `idDisenno` INT NOT NULL AUTO_INCREMENT ,
  `color` VARCHAR(45) NULL ,
  `talla` VARCHAR(45) NULL ,
  `tipoLetra` VARCHAR(45) NULL ,
  `dibujo` CHAR(1) NULL ,
  PRIMARY KEY (`idDisenno`) )
ENGINE = InnoDB;

INSERT INTO `disenno` (`idDisenno`, `color`, `talla`, `tipoLetra`, `dibujo`) VALUES
(1, 'Rojo', 'S', 'arial', 'N');

-- -----------------------------------------------------
-- Table `simplyColors`.`PRODUCTO`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `simplyColors`.`PRODUCTO` (
  `idProducto` INT NOT NULL AUTO_INCREMENT ,
  `idCategoria` INT NOT NULL ,
  `idDisenno` INT NOT NULL ,
  `nombreProducto` VARCHAR(45) NOT NULL ,
  `cantidadStock` INT NOT NULL ,
  `precio` INT NOT NULL ,
  `informacionProducto` VARCHAR(100) NULL ,
  PRIMARY KEY (`idProducto`) ,
  INDEX `Producto_FK_Categoria_idx` (`idCategoria` ASC) ,
  INDEX `Producto_FK_Disenno_idx` (`idDisenno` ASC) ,

  CONSTRAINT `Producto_FK_Categoria`
    FOREIGN KEY (`idCategoria` )
    REFERENCES `simplyColors`.`CATEGORIA` (`idCategoria` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Producto_FK_Disenno`
    FOREIGN KEY (`idDisenno` )
    REFERENCES `simplyColors`.`DISENNO` (`idDisenno` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

INSERT INTO `producto` (`idProducto`, `idCategoria`, `idDisenno`, `nombreProducto`, `cantidadStock`, `precio`, `informacionProducto`) VALUES
(1, 1, 1, 'Polera', 10, 10000, 'Polera Roja'),
(2, 1, 1, 'Pantalon', 20, 20000, 'Pantalon Rojo');

-- -----------------------------------------------------
-- Table `simplyColors`.`CLIENTE`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `simplyColors`.`CLIENTE` (
  `idCliente` INT NOT NULL AUTO_INCREMENT ,
  `dni` VARCHAR(11) NOT NULL ,
  `email` VARCHAR(20) NOT NULL ,
  `nombreCliente` VARCHAR(20) NOT NULL ,
  `apellidoCliente` VARCHAR(20) NOT NULL ,
  `pdwCliente` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`idCliente`, `dni`, `email`) )
ENGINE = InnoDB;

INSERT INTO `cliente` (`idCliente`, `dni`, `email`, `nombreCliente`, `apellidoCliente`, `pdwCliente`) VALUES
(1, '19585652-4', 'd.diazj@falso.com', 'Diego', 'Diaz', 'a189c633d9995e11bf8607170ec9a4b8'),
(2, '10746273-4', 'f.lopezj@falso.com', 'Federico', 'Lopez', 'a189c633d9995e11bf8607170ec9a4b8');


-- -----------------------------------------------------
-- Table `simplyColors`.`METODO_PAGO`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `simplyColors`.`METODO_PAGO` (
  `idMetodoPago` INT NOT NULL AUTO_INCREMENT ,
  `tipoPago` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`idMetodoPago`) )
ENGINE = InnoDB;

INSERT INTO `metodo_pago` (`idMetodoPago`, `tipoPago`) VALUES
(1, 'Tarjeta SimplyColors'),
(2, 'Master Card'),
(3, 'Tarjeta de Debito');


-- -----------------------------------------------------
-- Table `simplyColors`.`FACTURACION`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `simplyColors`.`FACTURACION` (
  `idFacturacion` INT NOT NULL AUTO_INCREMENT ,
  `idCliente` INT NOT NULL ,
  `dniCliente` VARCHAR(11) NOT NULL ,
  `emailCliente` VARCHAR(20) NOT NULL ,
  `idMetodoPago` INT NOT NULL ,
  `codigoPostal` INT NOT NULL ,
  `pais` VARCHAR(20) NOT NULL ,
  `ciudad` VARCHAR(20) NOT NULL ,
  `calle` VARCHAR(20) NOT NULL ,
  `numeroTarjeta` INT NULL ,
  PRIMARY KEY (`idFacturacion`) ,
  INDEX `Facturacion_FK_Cliente_idx` (`idCliente` ASC, `dniCliente` ASC, `emailCliente` ASC) ,
  INDEX `fk_FACTURACION_METODO_PAGO1_idx` (`idMetodoPago` ASC) ,
  CONSTRAINT `Facturacion_FK_Cliente`
    FOREIGN KEY (`idCliente` , `dniCliente` , `emailCliente` )
    REFERENCES `simplyColors`.`CLIENTE` (`idCliente` , `dni` , `email` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Facturacion_FK_MetodoPago`
    FOREIGN KEY (`idMetodoPago` )
    REFERENCES `simplyColors`.`METODO_PAGO` (`idMetodoPago` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

INSERT INTO `facturacion` (`idFacturacion`, `idCliente`, `dniCliente`, `emailCliente`, `idMetodoPago`, `codigoPostal`, `pais`, `ciudad`, `calle`, `numeroTarjeta`) VALUES
(1, 1, '19585652-4', 'd.diazj@falso.com', 2, 123456789, 'Chile', 'Santiago', 'Fake Street 123', 555123789),
(2, 2, '10746273-4', 'f.lopezj@falso.com', 2, 987654321, 'Chile', 'Santiago', 'Fake Street 1234', 555123789);


-- -----------------------------------------------------
-- Table `simplyColors`.`VENTA`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `simplyColors`.`VENTA` (
  `idVenta` INT NOT NULL AUTO_INCREMENT ,
  `idProducto` INT NOT NULL ,
  `idCliente` INT NOT NULL ,
  `dniCliente` VARCHAR(11) NOT NULL ,
  `emailCliente` VARCHAR(20) NOT NULL ,
  `idFacturacion` INT NOT NULL ,
  `total` INT NOT NULL ,
  PRIMARY KEY (`idVenta`) ,
  INDEX `Venta_FK_Producto_idx` (`idProducto` ASC) ,
  INDEX `Venta_FK_Cliente_idx` (`idCliente` ASC, `dniCliente` ASC, `emailCliente` ASC) ,
  INDEX `Venta_FK_Facturacion_idx` (`idFacturacion` ASC) ,
  CONSTRAINT `Venta_FK_Producto`
    FOREIGN KEY (`idProducto` )
    REFERENCES `simplyColors`.`PRODUCTO` (`idProducto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Venta_FK_Cliente`
    FOREIGN KEY (`idCliente` , `dniCliente` , `emailCliente` )
    REFERENCES `simplyColors`.`CLIENTE` (`idCliente` , `dni` , `email` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Venta_FK_Facturacion`
    FOREIGN KEY (`idFacturacion` )
    REFERENCES `simplyColors`.`FACTURACION` (`idFacturacion` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

INSERT INTO `venta` (`idVenta`, `idProducto`, `idCliente`, `dniCliente`, `emailCliente`, `idFacturacion`, `total`) VALUES
(1, 1, 1, '19585652-4', 'd.diazj@falso.com', 1, 1000);



-- -----------------------------------------------------
-- Table `simplyColors`.`ATENCION_AL_CLIENTE`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `simplyColors`.`ATENCION_AL_CLIENTE` (
  `idAtencion` INT NOT NULL AUTO_INCREMENT ,
  `idCliente` INT NOT NULL ,
  `dniCliente` VARCHAR(11) NOT NULL ,
  `email` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`idAtencion`) ,
  INDEX `Atencion_FK_Cliente_idx` (`idCliente` ASC, `dniCliente` ASC, `email` ASC) ,
  CONSTRAINT `Atencion_FK_Cliente`
    FOREIGN KEY (`idCliente` , `dniCliente` , `email` )
    REFERENCES `simplyColors`.`CLIENTE` (`idCliente` , `dni` , `email` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simplyColors`.`Registro_Detalle`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `simplyColors`.`Registro_Detalle` (
  `idRegistro` INT NOT NULL AUTO_INCREMENT ,
  `idusuario` INT NOT NULL ,
  `usuario` VARCHAR(20) NOT NULL ,
  `tipoModificacion` CHAR(1) NOT NULL ,
  `tablaAfectada` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`idRegistro`) ,
  INDEX `Registro_FK_Usuario_idx` (`idusuario` ASC, `usuario` ASC) ,
  CONSTRAINT `Registro_FK_Usuario`
    FOREIGN KEY (`idusuario` , `usuario` )
    REFERENCES `simplyColors`.`USUARIO` (`idusuario` , `usuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simplyColors`.`CONFIRMACION_VENTA`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `simplyColors`.`CONFIRMACION_VENTA` (
  `idConfirmacion` INT NOT NULL AUTO_INCREMENT ,
  `entregado` TINYINT(1) NOT NULL ,
  `idVenta` INT NOT NULL ,
  PRIMARY KEY (`idConfirmacion`) ,
  INDEX `fk_CONFIRMACION_VENTA_VENTA1_idx` (`idVenta` ASC) ,
  CONSTRAINT `Confirmacion_FK_Venta`
    FOREIGN KEY (`idVenta` )
    REFERENCES `simplyColors`.`VENTA` (`idVenta` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `simplyColors` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
