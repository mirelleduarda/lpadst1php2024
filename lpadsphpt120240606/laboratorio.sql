-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/06/2024 às 17:47
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
-- Banco de dados: `laboratorio`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `descricao` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `departamento`
--

INSERT INTO `departamento` (`id`, `descricao`) VALUES
(1, 'Informatica'),
(2, 'Administrativo'),
(3, 'Teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipamento`
--

CREATE TABLE `equipamento` (
  `id` int(11) NOT NULL,
  `descricao` varchar(35) NOT NULL,
  `responsavel` varchar(35) NOT NULL,
  `departamento` int(11) NOT NULL,
  `compra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `equipamento`
--

INSERT INTO `equipamento` (`id`, `descricao`, `responsavel`, `departamento`, `compra`) VALUES
(1, 'Teste', 'Fulano', 2, '0000-00-00'),
(3, 'Impressora Jato Tinta', 'Fulano', 2, '2024-05-14'),
(4, 'Impressora Jato Tinta', 'Fulano', 2, '2024-05-14'),
(5, 'Monitor', 'Beltrano', 2, '2024-05-14'),
(6, 'Monitor 42 pol', 'Mirelle', 1, '2024-05-14'),
(7, 'Monitor 42 pol', 'Mirelle', 1, '2024-05-14'),
(8, 'Monitor 42 pol', 'Mirelle', 1, '2024-05-14'),
(9, 'Monitor 42 pol', 'Mirelle', 1, '2024-05-14'),
(10, 'Monitor 42 pol', 'Mirelle', 1, '2024-05-14'),
(11, 'Monitor 42 pol', 'Mirelle', 1, '2024-05-14'),
(12, 'Teste', 'Beltrano', 2, '2024-05-16'),
(13, 'Teste', 'Beltrano', 2, '2024-05-16'),
(15, 'chmcgm', 'cghm', 2, '2024-05-17'),
(16, 'chmcgm', 'cghm', 2, '2024-05-17');

-- --------------------------------------------------------

--
-- Estrutura para tabela `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `software` int(11) NOT NULL,
  `equipamento` int(11) NOT NULL,
  `instalacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `software`
--

CREATE TABLE `software` (
  `id` int(11) NOT NULL,
  `descricao` varchar(35) NOT NULL,
  `fabricante` varchar(25) NOT NULL,
  `tipo` int(11) NOT NULL,
  `valor` float NOT NULL,
  `qtdCopias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `software`
--

INSERT INTO `software` (`id`, `descricao`, `fabricante`, `tipo`, `valor`, `qtdCopias`) VALUES
(1, 'Teste', 'Fulano de Tal', 1, 120.9, 12);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tiposoftware`
--

CREATE TABLE `tiposoftware` (
  `id` int(11) NOT NULL,
  `descricao` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `tiposoftware`
--

INSERT INTO `tiposoftware` (`id`, `descricao`) VALUES
(1, 'ABCD');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(35) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `senha`) VALUES
(1, 'Mirelle', 'fema@2024');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departamento_equipamento` (`departamento`);

--
-- Índices de tabela `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipamento_inventario` (`equipamento`),
  ADD KEY `software_inventario` (`software`);

--
-- Índices de tabela `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tiposoftware_software` (`tipo`);

--
-- Índices de tabela `tiposoftware`
--
ALTER TABLE `tiposoftware`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `software`
--
ALTER TABLE `software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tiposoftware`
--
ALTER TABLE `tiposoftware`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `equipamento`
--
ALTER TABLE `equipamento`
  ADD CONSTRAINT `departamento_equipamento` FOREIGN KEY (`departamento`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `equipamento_inventario` FOREIGN KEY (`equipamento`) REFERENCES `equipamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `software_inventario` FOREIGN KEY (`software`) REFERENCES `software` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `software`
--
ALTER TABLE `software`
  ADD CONSTRAINT `tiposoftware_software` FOREIGN KEY (`tipo`) REFERENCES `tiposoftware` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
