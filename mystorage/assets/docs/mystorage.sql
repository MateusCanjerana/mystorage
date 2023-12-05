-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/11/2023 às 17:37
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mystorage`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `entrada`
--

CREATE TABLE `entrada` (
  `id_entrada` int(10) UNSIGNED NOT NULL,
  `geral_id_geral` int(10) UNSIGNED NOT NULL,
  `entrada_qtd` int(10) UNSIGNED DEFAULT NULL,
  `entrada_dt` datetime DEFAULT current_timestamp(),
  `entrada_descricao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `geral`
--

CREATE TABLE `geral` (
  `id_geral` int(10) UNSIGNED NOT NULL,
  `geral_item` varchar(45) DEFAULT NULL,
  `geral_qtd` int(10) UNSIGNED DEFAULT NULL,
  `geral_qtd_entrada` int(10) UNSIGNED DEFAULT NULL,
  `geral_qtd_saida` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `saida`
--

CREATE TABLE `saida` (
  `id_saida` int(10) UNSIGNED NOT NULL,
  `geral_id_geral` int(10) UNSIGNED NOT NULL,
  `saida_qtd` int(10) UNSIGNED DEFAULT NULL,
  `saida_dt` datetime DEFAULT current_timestamp(),
  `saida_descricao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id_entrada`),
  ADD KEY `entrada_FKIndex1` (`geral_id_geral`);

--
-- Índices de tabela `geral`
--
ALTER TABLE `geral`
  ADD PRIMARY KEY (`id_geral`);

--
-- Índices de tabela `saida`
--
ALTER TABLE `saida`
  ADD PRIMARY KEY (`id_saida`),
  ADD KEY `saida_FKIndex1` (`geral_id_geral`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id_entrada` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `geral`
--
ALTER TABLE `geral`
  MODIFY `id_geral` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `saida`
--
ALTER TABLE `saida`
  MODIFY `id_saida` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
