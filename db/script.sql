-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Set-2019 às 05:15
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE `dados` (
  `id_dado` int(11) NOT NULL,
  `numero_exame` int(11) DEFAULT NULL,
  `nome_paciente` varchar(255) DEFAULT NULL,
  `data_nascimento` varchar(255) DEFAULT NULL,
  `data_exame` varchar(255) DEFAULT NULL,
  `data_estagiamento` varchar(255) DEFAULT NULL,
  `valor_analise` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id_dado`, `numero_exame`, `nome_paciente`, `data_nascimento`, `data_exame`, `data_estagiamento`, `valor_analise`) VALUES
(6, 327, 'Lina dos Santos', '1971-05-29', '2019-04-17', '2019-05-15', 30),
(7, 227, 'Elcio Tadeu de AraÃºjo', '1963-09-26', '2019-04-01', '2019-05-15', 30),
(9, 323, 'Maria da ConceiÃ§Ã£o M da Penha', '1971-04-05', '2019-04-16', '2019-05-15', 30),
(10, 335, 'Talles de Oliveira Braga', '1982-02-12', '2019-04-22', '2019-05-16', 30),
(11, 335, 'Talles de Oliveira Braga', '1982-02-12', '2019-04-22', '2019-05-16', 30),
(12, 351, 'Sonia Maria Pinto Barbosa ', '1951-02-03', '52019-06-15', '2019-05-17', 30),
(13, 339, 'Armenia Marra Quedes', '1935-11-07', '2019-04-26', '2019-05-18', 30),
(14, 343, 'Pedro Henrique Dias Lopes', '2010-06-01', '2019-05-01', '2019-05-18', 30),
(15, 320, 'Teresinha de Sousa Araujo', '1947-11-07', '2019-04-15', '2019-05-18', 30),
(16, 2825, 'Diva Henrique Dias ', '1936-12-23', '2019-05-08', '2019-05-19', 30),
(17, 355, 'JOSE ANTONIO DOS SANTOS ARAUJO', '1983-03-09', '2019-05-20', '2019-05-29', 30),
(18, 357, 'MARIA JONILIA DOS SANTOS CRUZ', '1952-06-15', '2019-07-07', '2019-07-21', 30),
(19, 364, 'VALDONESIO SOARES CLARO', '1959-12-09', '2019-07-18', '2019-07-21', 30),
(20, 366, 'AFONSO DOURADO NETO', '1990-01-01', '2019-07-18', '2019-07-21', 30),
(21, 384, 'SARA RODRIGUES DE SOUZA TMLS MÃšLTIPLAS LATÃŠNCIAS', '1989-08-22', '2019-08-12', '2019-08-25', 30),
(22, 383, 'SARA RODRIGUES DE SOUZA PSG', '1989-08-22', '2019-08-10', '2019-08-25', 30),
(23, 375, 'JOSEPH SAYAH', '1956-12-02', '1956-07-29', '2019-08-25', 30),
(24, 369, 'WESLEY CARVALHO PEREIRA ', '1984-09-30', '2019-07-29', '2019-08-25', 30),
(25, 372, 'WAGNER CORDEIRO DE OLIVEIRA', '1976-04-21', '2019-07-29', '2019-08-25', 30),
(27, 391, 'ANTONIO FERREIRA ALVES', '1947-02-18', '2019-08-16', '2019-08-25', 30),
(28, 394, 'ADRIANA DOS SANTOS CAMPOS', '1986-04-03', '2019-08-19', '2019-08-26', 30),
(30, 123, 'SARA RODRIGUES DE SOUZA TMLS MÃšLTIPLAS LATÃŠNCIAS', '1991-06-11', '1001-07-11', '2019-08-29', 30),
(31, 387, 'MEIRE ELLEM GOMES GOMES ', '1982-04-24', '2019-08-12', '2019-08-31', 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`, `nome`, `data_cadastro`) VALUES
(1, 'douglaslacerda2020@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'douglas Lacerda', '2019-09-12 15:49:06'),
(2, 'thais@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'thais', '2019-09-12 17:27:22'),
(3, 'oliveira@gmail', '827ccb0eea8a706c4c34a16891f84e7b', 'oliveira', '2019-09-12 18:26:53'),
(4, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '2019-09-12 22:39:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`id_dado`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dados`
--
ALTER TABLE `dados`
  MODIFY `id_dado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
