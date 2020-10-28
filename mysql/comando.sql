-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Out-2020 às 17:49
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(10) NOT NULL,
  `NOME_USUARIO` varchar(100) NOT NULL,
  `EMAIL_USUARIO` varchar(100) NOT NULL,
  `PASS_USUARIO` varchar(100) NOT NULL,
  `TELEFONE_USUARIO` varchar(100) NOT NULL,
  `CELULAR_USUARIO` varchar(100) NOT NULL,
  `STATUS_USUARIO` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `NOME_USUARIO`, `EMAIL_USUARIO`, `PASS_USUARIO`, `TELEFONE_USUARIO`, `CELULAR_USUARIO`, `STATUS_USUARIO`) VALUES
(1, 'LUIZ FERNANDO ', 'luiz.c@sonx.com.br', 'Vm0wd2QyUXlWa2hWV0doVVYwZG9XRll3Wkc5V2JHeDBaVVYwVjAxV2JETlhhMXBQVm14S2MyTkVRbFZXYlUweFZtcEJlRmRIVmtW', '(92)99336-9999', '(92)99336-5256', 'OPERADOR'),
(2, 'paulo victor', 'paulo@email.com', 'MTIz', '(92)99336-5256', '(92)99336-5256', 'OPERADOR');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
