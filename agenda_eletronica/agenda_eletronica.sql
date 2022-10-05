-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Out-2022 às 17:19
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda_eletronica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE `atividade` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` text DEFAULT NULL,
  `dt_inicio` date NOT NULL,
  `hr_inicio` time NOT NULL,
  `dt_fim` date NOT NULL,
  `hr_fim` time NOT NULL,
  `status` varchar(9) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atividade`
--

INSERT INTO `atividade` (`id`, `nome`, `descricao`, `dt_inicio`, `hr_inicio`, `dt_fim`, `hr_fim`, `status`, `usuario_id`) VALUES
(14, 'Jogar bola', 'Jogar bola por 30 min', '2022-09-29', '17:00:00', '2022-09-29', '17:30:00', 'CONCLUIDO', 3),
(17, 'Estudar', 'Estudar durante 2 dias', '2022-09-28', '05:00:00', '2022-09-28', '06:00:00', 'CONCLUIDO', 1),
(19, 'Caminhar', 'por 1 min', '2022-09-28', '11:00:00', '2022-09-28', '11:01:00', 'PENDENTE', 1),
(21, 'Cozinhar', 'Cozinhar uma sopa.', '2022-09-29', '22:04:00', '2022-09-29', '22:40:00', 'PENDENTE', 4),
(22, 'Discutir com a NET', 'Discutir por 6 horas', '2022-09-28', '10:00:00', '2022-09-28', '14:00:00', 'PENDENTE', 5),
(25, 'Comer Pizza', 'Comer uma pizza de calabresa.', '2022-09-28', '13:00:00', '2022-09-28', '14:00:00', 'CONCLUIDO', 6),
(26, 'Comer Pizza', 'Comer uma pizza de calabresa', '2022-09-29', '19:00:00', '2022-09-29', '19:30:00', 'PENDENTE', 2),
(28, 'Correr', 'Gastar energia', '2022-12-20', '12:00:00', '2022-12-20', '12:30:00', 'PENDENTE', 2),
(29, 'testar o projeto', 'testar por 10 min.', '2022-09-29', '21:00:00', '2022-09-29', '21:05:00', 'PENDENTE', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'julius', '202cb962ac59075b964b07152d234b70'),
(3, 'quiteria', '202cb962ac59075b964b07152d234b70'),
(4, 'sara', '202cb962ac59075b964b07152d234b70'),
(5, 'hector', '202cb962ac59075b964b07152d234b70'),
(6, 'natasha', '202cb962ac59075b964b07152d234b70'),
(7, 'brenda', '202cb962ac59075b964b07152d234b70'),
(8, 'daniel', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_atividade_usuario` (`usuario_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atividade`
--
ALTER TABLE `atividade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `atividade`
--
ALTER TABLE `atividade`
  ADD CONSTRAINT `fk_atividade_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
