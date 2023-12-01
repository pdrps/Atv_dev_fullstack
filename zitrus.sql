-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Dez-2023 às 06:19
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `zitrus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autorizacoes`
--

CREATE TABLE `autorizacoes` (
  `id_autorizacao` int(11) NOT NULL,
  `procedimento` int(4) NOT NULL,
  `idade` int(3) NOT NULL,
  `sexo` char(1) NOT NULL,
  `permitido` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `autorizacoes`
--

INSERT INTO `autorizacoes` (`id_autorizacao`, `procedimento`, `idade`, `sexo`, `permitido`) VALUES
(1, 1234, 10, 'M', 'NÃO'),
(2, 4567, 20, 'M', 'SIM'),
(3, 6789, 10, 'F', 'NÃO'),
(4, 6789, 10, 'M', 'SIM'),
(5, 1234, 20, 'M', 'SIM'),
(6, 4567, 30, 'F', 'SIM'),
(7, 1234, 5, 'F', 'NÃO');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autorizacoes`
--
ALTER TABLE `autorizacoes`
  ADD PRIMARY KEY (`id_autorizacao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autorizacoes`
--
ALTER TABLE `autorizacoes`
  MODIFY `id_autorizacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
