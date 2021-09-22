SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00"

CREATE DATABASE IF NOT EXISTS `DBUsers` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`(
    `id_user` int NOT NULL ,
    `nome` varchar (100) NOT NULL,
    `nomeusu` varchar (100) NOT NULL,
    `senha` varchar  (50) NOT NULL,
    `consenha` varchar (50) NOT NULL,
    `cpf`  int (11) NOT NULL,
    `datan` int (8) NOT NULL,
    `celular` int (11) NOT NULL,
    `cep` int (8) NOT NULL,
    `rua` varchar (100) NOT NULL,
    `numero` int (8) NOT NULL,
    `comple` varchar(100) NOT NULL,
    `bairro`  varchar (50) NOT NULL,
    `cidade` varchar (50),
    PRIMARY KEY (id_user),
    UNIQUE KEY (nomeusu),
    UNIQUE KEY (cpf)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `usuario` 
    MODIFY `id_er` INT NOT NULL AUTO_INCREMENT;us