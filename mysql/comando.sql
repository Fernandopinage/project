-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Out-2020 às 04:10
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.32

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
(11225, 'LUIZ EDUARDO SANTOS DE ARAÚJO', 'EDUARDO@EMAIL.COM', 'MTIz', '(092)983355447', '(092)983355447', 'ADM'),
(15225, 'LUIZ FERNANDO PINAGÉ COUTINHO', 'luiz.c@sonx.com.br', 'cm9vdA==', '(092)99336-5256', '(092)99336-5256', 'ADM'),
(58852, 'ADIELSON SOUSA DA COSTA', 'ADIELSON@EMAIL.COM', 'MzIx', '(092)98886656', '(092)98886656', 'ADM'),
(80022, 'FRODO BAGGINS', 'FRODO@EMAIL.COM', 'MTIz', '(092)955599599', '(092)955599599', 'OPERADOR'),
(88558, 'SONNY CORLEONE', 'SONNY@EMAIL.COM', 'MTIz', '(092)985632556', '(092)985632556', 'GERENTE'),
(115225, 'EMILIO BARZINIi', 'EMILIO@EMAIL.COM', 'MTIz', '(092)96363636', '(092)96363636', 'GERENTE'),
(696658, 'BILBO BAGGINS', 'BILBO@EMAIL.COM', 'MTIz', '(092)987745212', '(092)987745212', 'OPERADOR'),
(799565, 'GANDALF', 'GANDALF@EMAIL.COM', 'MTIz', '(092)88888899', '(092)88888899', 'OPERADOR'),
(922255, 'VITO CORLEONE', 'VITO@EMAIL.COM', 'MTIz', '(092)98745636', '(092)98745636', 'GERENTE');

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
  MODIFY `ID_USUARIO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=922256;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
