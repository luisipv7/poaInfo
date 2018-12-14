-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Dez-2018 às 01:47
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infopoa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acidente`
--

CREATE TABLE `acidente` (
  `id` int(11) NOT NULL,
  `endereco` varchar(80) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `acidente`
--

INSERT INTO `acidente` (`id`, `endereco`) VALUES
(1, 'pol'),
(2, '02'),
(3, 'qwe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `buraco`
--

CREATE TABLE `buraco` (
  `id` int(11) NOT NULL,
  `endereco` varchar(80) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `buraco`
--

INSERT INTO `buraco` (`id`, `endereco`) VALUES
(1, '5467');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecoalagamento`
--

CREATE TABLE `enderecoalagamento` (
  `id` int(11) NOT NULL,
  `endereco` varchar(80) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(15) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `enderecoalagamento`
--

INSERT INTO `enderecoalagamento` (`id`, `endereco`, `telefone`) VALUES
(1, 'liuis', NULL),
(2, 'kos', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecoassalto`
--

CREATE TABLE `enderecoassalto` (
  `endereco` varchar(10) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `enderecoassalto`
--

INSERT INTO `enderecoassalto` (`endereco`, `id`) VALUES
('kshsj', 1),
('Joao', 9),
('kss', 10),
(NULL, 11),
(NULL, 12),
(NULL, 13),
(NULL, 14),
('01', 15),
('sdf', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acidente`
--
ALTER TABLE `acidente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buraco`
--
ALTER TABLE `buraco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enderecoalagamento`
--
ALTER TABLE `enderecoalagamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enderecoassalto`
--
ALTER TABLE `enderecoassalto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acidente`
--
ALTER TABLE `acidente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `buraco`
--
ALTER TABLE `buraco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `enderecoalagamento`
--
ALTER TABLE `enderecoalagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `enderecoassalto`
--
ALTER TABLE `enderecoassalto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
