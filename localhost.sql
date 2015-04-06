-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 06-Abr-2015 às 08:32
-- Versão do servidor: 5.5.41-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `sistema_controle_gastos`
--
CREATE DATABASE IF NOT EXISTS `sistema_controle_gastos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistema_controle_gastos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `descricao`, `created`, `modified`) VALUES
(1, 'AlimentaÃ§Ã£o', '2015-03-31 22:45:05', '2015-03-31 22:45:05'),
(2, 'Aluguel', '2015-03-31 22:45:17', '2015-03-31 22:45:17'),
(3, 'Transporte', '2015-03-31 22:45:37', '2015-03-31 22:45:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesas`
--

CREATE TABLE IF NOT EXISTS `despesas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(10,2) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `receita_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria_id` (`categoria_id`),
  KEY `recurso_id` (`receita_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `despesas`
--

INSERT INTO `despesas` (`id`, `valor`, `descricao`, `categoria_id`, `receita_id`, `created`, `modified`) VALUES
(1, 530.00, 'Aluguel', 2, 1, '2015-03-31 22:59:06', '2015-03-31 22:59:06'),
(2, 300.00, 'AlmoÃ§o', 1, 1, '2015-03-31 22:59:41', '2015-03-31 22:59:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_orcamentos`
--

CREATE TABLE IF NOT EXISTS `item_orcamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(10,2) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `orcamento_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria_id` (`categoria_id`,`orcamento_id`),
  KEY `orcamento_id` (`orcamento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `item_orcamentos`
--

INSERT INTO `item_orcamentos` (`id`, `valor`, `categoria_id`, `orcamento_id`, `created`, `modified`) VALUES
(2, 200.00, 1, 3, '2015-04-05 16:17:13', '2015-04-05 16:17:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamentos`
--

CREATE TABLE IF NOT EXISTS `orcamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(10,2) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `orcamentos`
--

INSERT INTO `orcamentos` (`id`, `valor`, `user_id`, `created`, `modified`) VALUES
(3, 2000.00, 4, '2015-04-05 15:26:54', '2015-04-05 15:26:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE IF NOT EXISTS `receitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(10,2) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`id`, `valor`, `descricao`, `created`, `modified`) VALUES
(1, 2000.00, 'SalÃ¡rio', '2015-03-31 22:42:14', '2015-03-31 22:42:14'),
(2, 300.00, 'Vale AlimentaÃ§Ã£o', '2015-03-31 22:42:40', '2015-03-31 22:42:40'),
(3, 150.00, 'Vale transporte', '2015-03-31 22:43:01', '2015-03-31 22:43:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `role`, `email`, `phone`, `address`, `created`, `modified`) VALUES
(4, 'Admin', 'a1aa033c63599e38f6312d7937d9542b4e29347c', NULL, 'admin@admin.com', 'admin', 'EndereÃ§o do admin', '2015-04-05 15:19:48', '2015-04-05 15:19:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users2`
--

CREATE TABLE IF NOT EXISTS `users2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `despesas`
--
ALTER TABLE `despesas`
  ADD CONSTRAINT `despesas_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `despesas_ibfk_2` FOREIGN KEY (`receita_id`) REFERENCES `receitas` (`id`);

--
-- Limitadores para a tabela `item_orcamentos`
--
ALTER TABLE `item_orcamentos`
  ADD CONSTRAINT `item_orcamentos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `item_orcamentos_ibfk_2` FOREIGN KEY (`orcamento_id`) REFERENCES `orcamentos` (`id`);

--
-- Limitadores para a tabela `orcamentos`
--
ALTER TABLE `orcamentos`
  ADD CONSTRAINT `orcamentos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
