-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/11/2023 às 03:16
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
-- Banco de dados: `if0_34441522_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `comments` text NOT NULL,
  `stars` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `curtidos`
--

CREATE TABLE `curtidos` (
  `username` varchar(100) NOT NULL,
  `nomelocal` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `novolocal`
--

CREATE TABLE `novolocal` (
  `id_ngc` int(100) NOT NULL,
  `nomengc` varchar(100) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `email` varchar(75) NOT NULL,
  `site` varchar(300) NOT NULL,
  `pictureInput` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `novolocal`
--

INSERT INTO `novolocal` (`id_ngc`, `nomengc`, `descricao`, `cep`, `telefone`, `email`, `site`, `pictureInput`) VALUES
(1, 'Alexandria', 'Hamburgueria do lado do Mueller', '89213555', '4799675156', 'alexandria@gmail.com', 'alexandria.com.br', 'img/Fotos/Gutbrau/gutbrau (1).jpg'),
(3, 'Gutbrau', '', '', '', '', '', ''),
(4, 'Level Café', '', '', '', '', '', ''),
(5, 'Unalome', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `name`, `email`, `password`) VALUES
(1, 'Miguel Hort', 'miguel@gmail.com', 'e7d80ffeefa212b7c5c55700e4f7193e'),
(2, 'Victor Hugo', 'victor@gmail.com', 'e7d80ffeefa212b7c5c55700e4f7193e'),
(11, 'Professora', 'professora@gmail.com', '3f3bc92bbe16c394617a08334979130e'),
(12, 'Heitor', 'heitor@gmail.com', '6034f6487b61c87302f32ec3017973f3'),
(13, 'Robson', 'robsom@gmail.com', '3f3bc92bbe16c394617a08334979130e'),
(14, 'Miguel Henrique Thomassen', 'miguel_thomassen@gmail.com', 'e4f35b48d297b9101325e20b9aca7488');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `novolocal`
--
ALTER TABLE `novolocal`
  ADD PRIMARY KEY (`id_ngc`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `novolocal`
--
ALTER TABLE `novolocal`
  MODIFY `id_ngc` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
