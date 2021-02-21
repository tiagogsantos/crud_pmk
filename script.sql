-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Fev-2021 às 21:46
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `doacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao`
--

CREATE TABLE `doacao` (
                          `id` int(11) NOT NULL,
                          `nome` varchar(255) NOT NULL,
                          `email` varchar(255) DEFAULT NULL,
                          `cpf` varchar(255) DEFAULT NULL,
                          `telefone` varchar(255) DEFAULT NULL,
                          `data_nascimento` varchar(255) DEFAULT NULL,
                          `data_cadastro` varchar(191) NOT NULL,
                          `intervalo_doacao` varchar(255) DEFAULT NULL,
                          `forma_pagamento` varchar(255) DEFAULT NULL,
                          `valor_doacao` varchar(255) DEFAULT NULL,
                          `cep` varchar(255) DEFAULT NULL,
                          `endereco` varchar(255) DEFAULT NULL,
                          `numero` varchar(255) DEFAULT NULL,
                          `complemento` varchar(255) DEFAULT NULL,
                          `estado` varchar(255) DEFAULT NULL,
                          `cidade` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `doacao`
--

INSERT INTO `doacao` (`id`, `nome`, `email`, `cpf`, `telefone`, `data_nascimento`, `data_cadastro`, `intervalo_doacao`, `forma_pagamento`, `valor_doacao`, `cep`, `endereco`, `numero`, `complemento`, `estado`, `cidade`) VALUES
(1, 'Tiago Gonçalves dos Santos Silva', 'tiagogoncalves044@gmail.com', '445.543.310-40', '(11) 98368-3004', '29/02/1996', '21/02/2021', 'unico', '2.500,00', 'Crédito', '05162130', 'Rua Eduardo de Capua', '07', 'Casa', 'São Paulo', NULL),
(2, 'Fabricia Santos Vasconselos', 'fabricia@teste.com.br', '250.473.190-67', '(11) 39024-964', '19/11/1992', '20/02/2021', 'bimestral', '1.045,23', 'Debito', '02675-031', 'Rua Silvestre Palma', '07', 'Casa 03', 'São Paulo', NULL),
(31, 'Maria Gonçalves', 'maria@teste.com.br', '494.680.560-58', '(11) 98365-4859', '29/06/1972', '19/02/2021', 'semestral', '600,00', 'Debito', '08051-660', 'Rua Diego de Calcedo ', '6', 'APT 224', 'São Paulo', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `doacao`
--
ALTER TABLE `doacao`
    ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `doacao`
--
ALTER TABLE `doacao`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
