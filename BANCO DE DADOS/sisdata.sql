-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 26-Maio-2024 às 19:49
-- Versão do servidor: 8.0.36-0ubuntu0.22.04.1
-- versão do PHP: 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sisdata`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int NOT NULL,
  `nome` varchar(254) NOT NULL,
  `endereco` varchar(254) NOT NULL,
  `cpf` varchar(254) NOT NULL,
  `empresa` varchar(254) NOT NULL,
  `contato` varchar(254) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `endereco`, `cpf`, `empresa`, `contato`) VALUES
(9, 'Felipe Siqueira Jr', 'RUA Alagoinha ', '33988854999', 'GotaLube', '11 99999-9666'),
(10, 'Fernando Perdero', 'Rua Monte Claro', '333.999.666.11', 'FORTE_TRIX', '11 9 9888-5666'),
(21, 'Alex Sandro Silveste', 'Rua Sapopemba', '338.772.718-63', 'DevTec', '11 99885-44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compraequipamentos`
--

CREATE TABLE `compraequipamentos` (
  `id` int NOT NULL,
  `modelo` varchar(254) NOT NULL,
  `notafiscal` varchar(254) NOT NULL,
  `fornecedor` varchar(254) NOT NULL,
  `valor` varchar(254) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `compraequipamentos`
--

INSERT INTO `compraequipamentos` (`id`, `modelo`, `notafiscal`, `fornecedor`, `valor`) VALUES
(6, 'GotaLube', '11111111666', 'GotaLube', 'R$ 145,45'),
(4, 'MegaTrust', '11-00001/55', 'MegaDrive', 'R$ 700,00'),
(5, 'NOVO00', '11-00001/7777', 'Mercado LIVREEE', 'R$ 800,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int NOT NULL,
  `nome` varchar(254) NOT NULL,
  `endereco` varchar(254) NOT NULL,
  `cnpj` varchar(254) NOT NULL,
  `empresa` varchar(254) NOT NULL,
  `contato` varchar(254) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id`, `nome`, `endereco`, `cnpj`, `empresa`, `contato`) VALUES
(15, 'watec', 'Guadalajara', '25.248.755/37', 'watec', '(57)57575-3666'),
(12, 'casas bahia', 'rua silva', '25.248.755/37', 'casas bahia', '(12)57678-6666'),
(10, 'Magazine Luiza', 'R Afonso Bovero, 35', '25-1100001/55', 'Magazine Luiza', '11 913399-9646');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `nome` varchar(254) NOT NULL,
  `endereco` varchar(254) NOT NULL,
  `telefone` varchar(254) NOT NULL,
  `cpf` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `senha` varchar(254) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `endereco`, `telefone`, `cpf`, `email`, `senha`) VALUES
(1, 'Alex Sandro Silvestre de Souza', 'Rua Carlos Alberto Brada, 11285', '11 998839574', '33877271863', 'user33', '123'),
(2, 'Glauber Junior', 'Rua', '11', '338', 'cesar@celke.com.br', '123456'),
(3, 'Regiane de Souza', 'Rua Carlos ', '223344', '1122334455', 'regiane@gmail.com', 'asdasdasdasdasdasd'),
(4, 'Alex Sandro Silvester', 'R Carlos Algusto, 77', '11 91339-9646', '33877271863', 'alx.silvestre007@gmail.com', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `compraequipamentos`
--
ALTER TABLE `compraequipamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `compraequipamentos`
--
ALTER TABLE `compraequipamentos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
