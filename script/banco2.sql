-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2017 at 11:21 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";



/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upeventos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `eventos`
--

CREATE TABLE `eventos` (
  `IDevento` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Descricao` varchar(255) NOT NULL,
  `DataInicio` varchar(255) NOT NULL,
  `DataFim` varchar(255) NOT NULL,
  `Custo` int(11) NOT NULL,
  `IDlocalizacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dados para tabela `eventos`
--

INSERT INTO `eventos` (`IDevento`, `Titulo`, `Descricao`, `DataInicio`, `DataFim`, `Custo`, `IDlocalizacao`) VALUES
(1, 'Aniversario de Casamento', '1a Celeb. de Aniversario', '10-Out-2015', '10-Out-2016', 25000, 1);

-- --------------------------------------------------------

--
-- Estrutura para a tabela `localizacoes`
--

CREATE TABLE `localizacoes` (
  `IDlocalizacao` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Endereco` varchar(255) NOT NULL,
  `NomeOrganizador` varchar(255) NOT NULL,
  `SobrenomeOrganizador` varchar(255) NOT NULL,
  `EmailOrganizador` varchar(255) NOT NULL,
  `ContatoOrganizador` int(11) NOT NULL,
  `CapacidadeMaxima` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dados para a tabela `localizacoes`
--

INSERT INTO `localizacoes` (`IDlocalizacao`, `Nome`, `Endereco`, `NomeOrganizador`, `SobrenomeOrganizador`, `EmailOrganizador`, `ContatoOrganizador`, `CapacidadeMaxima`) VALUES
(1, 'Hotel Real', 'Avenida dos Sonhos', 'John', 'Byrne', 'John@email.com', 123456, 100);

-- --------------------------------------------------------

--
-- estrutura da tabela para `usuarios`
--

CREATE TABLE `usuarios` (
  `nomeusuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `privilegio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`nomeusuario`, `senha`, `privilegio`) VALUES
('teste', '1234', 'usuario');

--
-- Indexes para as tabelas
--

--
-- Indexes para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`IDevento`),
  ADD KEY `IDlocalizacao` (`IDlocalizacao`);

--
-- Indexes para tabela `localizacoes`
--
ALTER TABLE `localizacoes`
  ADD PRIMARY KEY (`IDlocalizacao`);

--
-- AUTO_INCREMENT para as tabelas
--

--
-- AUTO_INCREMENT para tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `IDevento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT para tabela `localizacoes`
--
ALTER TABLE `localizacoes`
  MODIFY `IDlocalizacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
