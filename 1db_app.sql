-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Maio-2017 às 23:07
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_app`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_produtos`
--

CREATE TABLE `dados_produtos` (
  `codigo` int(6) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dados_produtos`
--

INSERT INTO `dados_produtos` (`codigo`, `descricao`) VALUES
(1, 'Banana'),
(2, 'Maçã'),
(4, 'Pêra'),
(5, 'Limão'),
(6, 'Melão'),
(7, 'Melancia'),
(8, 'Lima'),
(9, 'Maracujá'),
(10, 'Jaca'),
(13, 'Uva');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dados_produtos`
--
ALTER TABLE `dados_produtos`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dados_produtos`
--
ALTER TABLE `dados_produtos`
  MODIFY `codigo` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
