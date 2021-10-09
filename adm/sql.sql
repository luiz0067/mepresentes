

CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `curtir` varchar(255) DEFAULT NULL,
  `data_evento` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `conteudo` blob,
  PRIMARY KEY (`id`)
) 
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) 
CREATE TABLE IF NOT EXISTS `albuns` (
  `id` int(11) NOT NULL AUTO_INCREMENT primary key,
  `titulo` varchar(255) DEFAULT NULL,
  `data_emissao` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) 

CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `obs` blob,
  PRIMARY KEY (`id`),
  KEY `fk_foto_imagem` (`id_categoria`)
) 
CREATE TABLE IF NOT EXISTS `cadastro_foto` (
  `id` int(11) NOT NULL AUTO_INCREMENT primary key,
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL

 
) 
CREATE TABLE IF NOT EXISTS `imagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `id_sub_categoria` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `obs` tinyblob,
  `valor` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `combustivel`  varchar(255) DEFAULT NULL,
  `cor`  varchar(255) DEFAULT NULL,
  `opcionais` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_imagem_sub_categoria` (`id_categoria`),
  KEY `fk_imagem_sub_categoria_sub` (`id_sub_categoria`)
) 




CREATE TABLE IF NOT EXISTS `marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) 



CREATE TABLE IF NOT EXISTS `obs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
)

CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) 


CREATE TABLE IF NOT EXISTS `sub_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sub_categoria_categoria` (`id_categoria`)
)

CREATE TABLE IF NOT EXISTS `usuario` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) 



INSERT INTO `usuario` (`codigo`, `usuario`, `senha`) VALUES
(1, 'midiamix', 'midiamix');


ALTER TABLE `foto`
  ADD CONSTRAINT `fk_foto_imagem` FOREIGN KEY (`id_categoria`) REFERENCES `imagem` (`id`);
 
 ALTER TABLE `cadastro_foto` 
  ADD CONSTRAINT `fk_cadastro_foto_albuns` FOREIGN KEY (`id_categoria`) REFERENCES `albuns` (`id`);


ALTER TABLE `imagem`
  ADD CONSTRAINT `fk_imagem_sub_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `fk_imagem_sub_categoria_sub` FOREIGN KEY (`id_sub_categoria`) REFERENCES `sub_categoria` (`id`);


ALTER TABLE `sub_categoria`
  ADD CONSTRAINT `fk_sub_categoria_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);

