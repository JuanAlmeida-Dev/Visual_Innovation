-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Nov-2021 às 21:51
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `personalite_aruan`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `codServico` int(11) NOT NULL,
  `codFuncionario` int(11) DEFAULT NULL,
  `codUsuario` int(11) DEFAULT NULL,
  `nomeServico` varchar(255) DEFAULT NULL,
  `tempoEstimado` time DEFAULT NULL,
  `valor` varchar(255) DEFAULT NULL,
  `dataServico` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`codServico`, `codFuncionario`, `codUsuario`, `nomeServico`, `tempoEstimado`, `valor`, `dataServico`) VALUES
(23, NULL, NULL, 'Cabeleireiro ', '00:00:10', '25', '27/11/21'),
(24, NULL, NULL, 'Progressiva', '02:00:00', '200', '29/11/21');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`codServico`),
  ADD KEY `codFuncionario` (`codFuncionario`),
  ADD KEY `codUsuario` (`codUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `codServico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `servico_ibfk_1` FOREIGN KEY (`codFuncionario`) REFERENCES `funcionario` (`codFuncionario`),
  ADD CONSTRAINT `servico_ibfk_2` FOREIGN KEY (`codUsuario`) REFERENCES `tb_usuario` (`codUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
