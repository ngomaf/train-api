-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 19-Jan-2025 às 14:43
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `users`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `email`) VALUES
(1, 'Ngoma Fortuna', 'ngoma.fortuna@mtec.ao'),
(2, 'Rosa Fortuna', 'rosa.fortuna@mtec.ao'),
(3, 'Lucrécia Fortuna', 'lucrecia.fortuna@mtec.ao'),
(4, 'Albertina Fortuna', 'albertina.fortuna@mtec.ao'),
(5, 'Zany Fortuna', 'zany.fortuna@mtec.ao'),
(6, 'Cecília Fortuna', 'cecilia.fortuna@mtec.ao'),
(7, 'Hermenegildo Fortuna de Oliveira', 'hermenegildo.oliveira@mtec.ao'),
(8, 'Casimiro de Albuquerque', 'casimiro.albuquerque@mtec.ao'),
(11, 'Gustavo', 'gustavo.albuquerque@mtec.ao'),
(12, 'Macalão', 'macalao.albuquerque@mtec.ao'),
(15, 'Ngoma Fortuna', 'ngomatec@gmail.com'),
(16, 'Arlindo da Fonseca', 'arlindo.fonseca@gmail.com'),
(17, 'Arlindo da Fonseca', 'arlindo.fonseca@gmail.com'),
(18, 'Arlindo da Fonseca', 'arlindo.fonseca@gmail.com'),
(19, 'Conso Sonhi', 'conso.sonhi@gmail.com'),
(20, 'Conso Sonhi', 'conso.sonhi@gmail.com'),
(21, 'Conso Sonhi', 'conso.sonhi@gmail.com'),
(22, 'Belarmina Lurdes', 'belarmina.lurdes@gmail.com'),
(23, '', ''),
(24, 'Catarina Caquelewa', 'catarina.caquelewa@outlook.com'),
(25, '', ''),
(26, '', ''),
(27, 'Bernardo Bermos', 'bernardo.lemos@mtec.ao'),
(28, '', ''),
(29, 'Alberto Mussili', 'alberto.mussili@gmail.com'),
(30, 'Alberto Mussili', 'alberto.mussili@gmail.com'),
(31, 'Alberto Mussili', 'alberto.mussili@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
