-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Maio-2024 às 21:42
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
-- Banco de dados: `bicicleta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `nome` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` int(11) NOT NULL,
  `senha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`nome`, `email`, `cpf`, `senha`) VALUES
('joao', '', 12345, 123),
('joao', 'joao@gmail', 12345, 123),
('joazoin', '123', 0, 12),
('luiz', '1234', 0, 1234),
('rafael', '123', 0, 123),
('fun@admin.com', 'fun@admin.com', 1, 1),
('adminnn', 'ad@admin.com', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nome` TEXT NOT NULL,
  `valor` INT NOT NULL,
  `imagem` TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`nome`, `valor`, `imagem`) VALUES
('joao', 1, ''),
('skate', 11, ''),
('skatee fred', 21, '');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
