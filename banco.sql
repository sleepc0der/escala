-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 22/07/2015 às 15:50
-- Versão do servidor: 5.6.24
-- Versão do PHP: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `mdcescala`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `operacao`
--

CREATE TABLE IF NOT EXISTS `operacao` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `cor` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `operacao`
--

INSERT INTO `operacao` (`id`, `nome`, `pais`, `cor`) VALUES
(1, 'Rodrigo', 'Chipre', '#000000'),
(2, 'George Dias', 'Brasil', '#3cc41c'),
(3, 'Elton Felix', 'Espanha', '#e41a1a'),
(4, 'Bruno Rocha', 'Equador', '#a3ac40'),
(5, 'Priscila Nascimento', 'China', '#fafafa'),
(6, 'Pollyanna', 'Inglaterra', '#1a35b4');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `login`, `password`) VALUES
(1, 'Supervisao', 'Supervisao', 'super0785');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `operacao`
--
ALTER TABLE `operacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `operacao`
--
ALTER TABLE `operacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
