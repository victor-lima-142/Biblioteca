USE `biblioteca` ;

-- -----------------------------------------------------
-- Table `biblioteca`.`estante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`estante` (
  `id` INT NOT NULL,
  `linha` INT(3) NOT NULL,
  `coluna` INT(3) NOT NULL,
  `setor` INT(3) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca`.`livro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`livro` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(255) NOT NULL,
  `autor` VARCHAR(255) NOT NULL,
  `paginas` INT(5) NOT NULL,
  `editora` VARCHAR(255) NOT NULL,
  `capa` VARCHAR(7) NOT NULL,
  `genero` VARCHAR(255) NOT NULL,
  `precoDia` DOUBLE(6,2) NOT NULL,
  `idEstante` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `idLivroEstante_idx` (`idEstante`),
  CONSTRAINT `idLivroEstante`
    FOREIGN KEY (`idEstante`)
    REFERENCES `biblioteca`.`estante` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`cliente` (
  `id` INT NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `cpf` INT(11) NOT NULL,
  `nascimento` DATE NOT NULL,
  `criado` DATE NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca`.`aluguel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`aluguel` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idCliente` INT NOT NULL,
  `dataSaida` DATE NOT NULL,
  `dataDevolucao` DATE NOT NULL,
  `preco` DOUBLE(7,2) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `idAluguelCliente_idx` (`idCliente`),
  CONSTRAINT `idAluguelCliente`
    FOREIGN KEY (`idCliente`)
    REFERENCES `biblioteca`.`cliente` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca`.`aluguelLivro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`aluguelLivro` (
  `id` INT NOT NULL,
  `idAluguel` INT NOT NULL,
  `idLivro` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `idAluguelLivroAluguel_idx` (`idAluguel`),
  INDEX `idAluguelLivroLivro_idx` (`idLivro`),
  CONSTRAINT `idAluguelLivroAluguel`
    FOREIGN KEY (`idAluguel`)
    REFERENCES `biblioteca`.`aluguel` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idAluguelLivroLivro`
    FOREIGN KEY (`idLivro`)
    REFERENCES `biblioteca`.`livro` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;