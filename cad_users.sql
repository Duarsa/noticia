-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/03/2024 às 21:11
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pk`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_users`
--

CREATE TABLE `cad_users` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(110) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `data_nasc` date NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `conf_senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `cad_users`
--

INSERT INTO `cad_users` (`id`, `nome`, `email`, `telefone`, `sexo`, `data_nasc`, `cidade`, `estado`, `endereco`, `senha`, `conf_senha`) VALUES
(1, 'fsdf', 'xfgvdfgz', '1111', '', '2024-03-19', 'dfgg', 'cvbgfdh', 'faefds', '', ''),
(2, 'maria', 'teste@teste.com', '5645', '', '2006-06-24', 'sp', 'sp', 'sp', '1234', '1234'),
(3, 'Luciana', 'TESTE@teste.com', '11966416862', 'feminino', '2024-03-14', 'Alagoas', 'Pará', 'Rua Sem Nome', 'duda1234', 'duda1234'),
(4, 'Luan', 'duarda2021@gmail.com', '111111111111', 'masculino', '2024-03-29', 'Alua', 'Joao', 'Lucio', '12345', '12345'),
(5, 'sla', 'sla@gmail.com', '00000', 'feminino', '2024-03-01', 'sp', 'sp', 'sla', '1234', '1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cad_users`
--
ALTER TABLE `cad_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_users`
--
ALTER TABLE `cad_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
