-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Ago-2017 às 23:07
-- Versão do servidor: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mps`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_atividade`
--

CREATE TABLE `tbl_atividade` (
  `id_asm` int(11) NOT NULL,
  `nome_asm` varchar(250) NOT NULL,
  `tempo_asm` varchar(150) NOT NULL,
  `pontuacao_asm` decimal(10,0) NOT NULL,
  `imagem_asm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_atividade`
--

INSERT INTO `tbl_atividade` (`id_asm`, `nome_asm`, `tempo_asm`, `pontuacao_asm`, `imagem_asm`) VALUES
(1, 'logistica', '200min', '12', 'sem imagem');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_item`
--

CREATE TABLE `tbl_item` (
  `id_ias` int(11) NOT NULL,
  `nome_ias` varchar(250) NOT NULL,
  `seguencia_ias` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_item`
--

INSERT INTO `tbl_item` (`id_ias`, `nome_ias`, `seguencia_ias`) VALUES
(200, 'pera', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_atividade`
--
ALTER TABLE `tbl_atividade`
  ADD PRIMARY KEY (`id_asm`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`id_ias`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_atividade`
--
ALTER TABLE `tbl_atividade`
  MODIFY `id_asm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23232;
--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `id_ias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
