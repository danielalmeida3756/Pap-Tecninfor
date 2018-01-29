-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 29-Jan-2018 às 18:57
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tecninfor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE IF NOT EXISTS `carrinho` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod` int(11) NOT NULL,
  `nome_user` varchar(150) NOT NULL,
  `email_user` varchar(150) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `preco` double(10,2) NOT NULL,
  `qtd` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL DEFAULT 'Em Analise',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id`, `cod`, `nome_user`, `email_user`, `nome`, `preco`, `qtd`, `estado`) VALUES
(38, 1, 'administrador', 'almeida7.daniel.sousa@gmail.com', 'Pc Intel v1', 259.00, 1, 'Aceite');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome_prod` varchar(2500) NOT NULL,
  `descricao_prod` varchar(2500) NOT NULL,
  `sub_prod` varchar(2500) NOT NULL,
  `imagem_prod` varchar(2500) NOT NULL,
  `preco_prod` double(10,2) NOT NULL,
  `diretorio_prod` varchar(500) NOT NULL,
  `quantidade` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome_prod`, `descricao_prod`, `sub_prod`, `imagem_prod`, `preco_prod`, `diretorio_prod`, `quantidade`) VALUES
(2, 'Pc Intel v2', 'Equipado com processador intel core i3-330, motherboard HM65MAL, 4Gb de ram, SSD de 120 Gb e Windows 10 Pro. Este computador Ã© bom para quem procura um computador com um pouco mais de desempenho.', 'Intel core i3-330, 4Gb de ram, SSD 120 Gb', '5dd766abed1c1371c646f547130b4324.jpg', 335.00, 'images/', 1),
(3, 'Pc Intel v3', 'Equipado com processador intel core i5-2410M, motherboard HM65MAL, 8Gb de ram, SSD de 120 Gb e Windows 10 Pro. Este computador Ã© bom para quem procura um computador para entrar no mundo dos jogos.', 'Intel core i5-2410M, 8Gb de ram, SSD 120 Gb', 'e580a93ba164ed6def57798d54bec7f5.jpg', 415.00, 'images/', 1),
(1, 'Pc Intel v1', 'Equipado com processador intel core B940, motherboard HM65MAL, 4Gb de ram, SSD de 120 Gb e Windows 10 Pro. Este computador Ã© bom para quem procura um computador a baixo preÃ§o com bom desempenho.', 'Intel core B940, 4Gb de ram, SSD 120 Gb', '1dcad8115cecafe0ed408d244a7eb06d.jpg', 259.00, 'images/', 1),
(4, 'Pc Intel v4', 'Equipado com processador intel core i7-2620M, motherboard HM65MAL, 8Gb de ram, SSD 120 Gb e Windows 10 Pro. Este computador Ã© bom para quem procura um computador para jogar com uma boa taxa de fps e para trabalho com ediÃ§Ã£o de videos e imagem.', 'Intel core i7-2620M, 8Gb de ram, SSD 120 Gb', '4599b89c63faec268355444d6ecf0711.jpg', 499.00, 'images/', 1),
(5, 'Android Box', 'Modelo MXQ S805 Preta, equipada com processador Cortex A5, 1.5GHz Quad Core, GPU Mali-450, 1 Gb de ram, 8 Gb de Rom, Android 4.4, Wifi IEEE 802.11 b/g/n, Bluetooth 4.0. Interface: DC 5V, TF Card, USB 2.0, SPDIF, HDMI, OTG e AV.', 'Quad Core, 1 Gb de ram, 8 Gb de Rom, Android 4.4', '9c1d290abab33d726471a6f1b13a55c8.jpg', 50.00, 'images/', 1),
(6, 'Android Box', 'Modelo CS918 Preta, equipada com processador RK3188T, Quad Core, 2 Gb de ram, 8 Gb de Rom, Android 4.4, Wifi IEEE 802.11 b/g/n, . Interface: DC 5V, TF Card, 2x USB 2.0, SPDIF, HDMI, Ethernet Port, OTG e AV.', 'Quad Core, 2 Gb de ram, 8 Gb de Rom, Android 4.4', 'd97a32da46db783909200c0a250b7dd1.jpg', 65.00, 'images/', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `registo`
--

DROP TABLE IF EXISTS `registo`;
CREATE TABLE IF NOT EXISTS `registo` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `permicao` int(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `Registo` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COMMENT='Tabela de registo de utilizadores';

--
-- Extraindo dados da tabela `registo`
--

INSERT INTO `registo` (`id`, `nome`, `email`, `pass`, `permicao`) VALUES
(2, 'daniel', 'a99375@epinfante.com', 'a1dca7f37bbb2b2b5822270e3d9c410f', 0),
(1, 'Administrador', 'almeida7.daniel.sousa@gmail.com', 'a1dca7f37bbb2b2b5822270e3d9c410f', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
