-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 09-Jan-2018 às 17:22
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
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome_prod` varchar(2500) NOT NULL,
  `descricao_prod` varchar(2500) NOT NULL,
  `sub_prod` varchar(2500) NOT NULL,
  `imagem_prod` varchar(2500) NOT NULL,
  `preco_prod` varchar(150) NOT NULL,
  `diretorio_prod` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome_prod`, `descricao_prod`, `sub_prod`, `imagem_prod`, `preco_prod`, `diretorio_prod`) VALUES
(17, 'Pc i7', 'Equipado com processador intel core i7-2620M, motherboard HM65MAL, 8Gb de ram, SSD 120 Gb e Windows 10 Pro. Este computador Ã© bom para quem procura um computador para jogar com uma boa taxa de fps e para trabalho com ediÃ§Ã£o de videos e imagem.', 'Intel core i7-2620M, 8Gb de ram, SSD 120 Gb', 'cd78762b35dbd150bfd5a865d49e5e35.jpg', '499', 'images/'),
(19, 'Pc i5', 'Equipado com processador intel core i5-2410M, motherboard HM65MAL, 8Gb de ram, SSD de 120 Gb e Windows 10 Pro. Este computador Ã© bom para quem procura um computador para entrar no mundo dos jogos.', 'Intel core i5-2410M, 8Gb de ram, SSD 120 Gb', '2671d223cfd9fea49ed5618d2593d23f.jpg', '415', 'images/');

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='Tabela de registo de utilizadores';

--
-- Extraindo dados da tabela `registo`
--

INSERT INTO `registo` (`id`, `nome`, `email`, `pass`, `permicao`) VALUES
(1, 'daniel', 'admin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 1),
(11, 'user', 'a@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
