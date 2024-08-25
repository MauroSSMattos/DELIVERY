-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/08/2024 às 05:25
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_login`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `informacoes`
--

CREATE TABLE `informacoes` (
  `id` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `informacoes`
--

INSERT INTO `informacoes` (`id`, `cpf`, `nome`, `telefone`, `cep`, `endereco`, `usuario_id`) VALUES
(3, '01918182040', 'Everton Reis ', '5198542222', '94480-104', 'Travessa dos Reis', NULL),
(5, '00523964020', 'maria de fatima', '51985422323', '94480-104', 'Travessa dos Reis', NULL),
(11, '005.239.640', 'MAURO SERGIO SILVA DE MATTOS', '51985422079', '94480-104', 'Travessa dos Réis, 30', NULL),
(13, '00523964000', 'MAURO SERGIO 0000', '51985422079', '94480-104', 'Travessa dos Réis, 30', NULL),
(19, '00523918033', 'Marcos Mattos', '51985422079', '94480-104', 'Travessa dos Réis, 30', NULL),
(20, '00523918000', 'Paulo Mattos', '51985422079', '94480-104', 'Travessa dos Réis, 30', NULL),
(21, '00523918034', 'Paulo Mattos', '51985422079', '94480-104', 'Travessa dos Réis, 30', NULL),
(23, '30330330330', 'Samuel da Rosa Silveira', '51985422079', '94480-104', 'Travessa dos Réis, 30', NULL),
(24, '30303030303', 'andré da silveira', '51985422079', '94480-104', 'Travessa dos Réis, 30', NULL),
(26, '00000000000', 'MAURO SERGIO SILVA DE MATTOS', '51985422079', '94480-104', 'Travessa dos Réis, 30', NULL),
(27, '00000000000', 'MAURO SERGIO SILVA D', '51985422079', '94480-104', 'Travessa dos Réis, 30', NULL),
(28, '00000000000', 'MAURO SERGIO SILVA D', '51985422079', '94480-104', 'Travessa dos Réis, 30', NULL),
(30, '08008030300', 'Fatima da Silva', '51985422079', '94480-104', 'Travessa dos Réis, 30, jari, Viamão', NULL),
(31, '07020797075', 'Jessica sarates', '51985422079', '94480-104', 'Travessa dos Reis, Viamao  n30', NULL),
(32, '00523964013', 'MAURO SERGIO SILVA DE MATTOS', '51985422079', '94480-100', 'Travessa dos Réis, 30', NULL),
(33, '78965432224', 'Hiago lindo', '519956888', '12468745', 'rua gostosao', NULL),
(34, '78965432224', 'Hiago lindo gostoso', '519956888', '12468745', 'rua gostosao', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(43, 'paulosergiopsrm@hotmail.com', '$2y$10$/Nz1UgnlVL2y0SFHuOpS4OwhhnwpT8AdWqCJQM0FI.ru7q1rsf7/O'),
(44, 'carlos@gmail.com', '$2y$10$HIAt63EYTaZ3Xxk1Z9d1uOIItL71Ya6en2dk2JkFKx0Wlm59kuPTC'),
(45, 'maurinhosempregremista@hotmail.com', '$2y$10$RWuNbn0kcVeHq1Z5ZMTjcOvbu2DMw0N/U0lh5iBgDDH1lyl4SLDE2'),
(47, 'luiza@gmail.com', '$2y$10$9QLBtjPqaynv.8srCDm6euDXC6UwYRQD40vTEgukcYZhxOiTIO.OG'),
(48, 'luiz@gmail.com', '$2y$10$pdl0AXkdabvBt/U7Bt4beOeFYsjfLT1Aav7j03EIbhNaDCwASDpVa'),
(49, 'professorluiz@gmail.com', '$2y$10$eM93pTYNXCgT8HwAvW2zk.1nD3hETOfW/NCho/AVMP9MCwHTOQb2u'),
(50, 'dasec@GMAIL.COM', '$2y$10$lYyfUPFc4/CtZQN7b5XFrOAUHAEYlRpzOxl9Gg4Gc3jh7DSjk3dri'),
(51, 'PAULINHO@GMAIL.COM', '$2y$10$DbL.jiXSN65xl43IsVzaAO9XuIIv8nC63RhRZJdOG9bDWQUYfg1xu'),
(55, 'samuel@gmail.com', '$2y$10$j7CBC7M6FQmLIPsvHKmufeGkUODGz6z9dbDCAL93rd1dphTONsXzG'),
(56, 'daniel@gmail.com', '$2y$10$vjVQMAhSNF.aJ7QclyqWmO/BY2KeMKZdC.8j6GtNyATp7nWA4JXji'),
(57, 'maria@gmail.com', '$2y$10$g5F999Afl9Ey/iFwhEm12ergVrWj.a6bd/Q54SxpF2EbARJlEJ.qS'),
(58, 'lara@gmail.com', '$2y$10$wEx/VJrSukZtnch4b6P0KODMEMHoLdrcJzBue7f7KlQN1BH4RU23e'),
(59, 'fatima@gmail.com', '$2y$10$Ga.2qe9MxM8RBCEieenJcedKQfMpvMZgp91S2ztS.D0HneNgpgDTW'),
(60, 'amanda.fraga@gmail.com', '$2y$10$IczXd.F3C.i.I72bDtYzT.nDtFBQ4LWeS9T6rnJJcohq8k/XLEcrq'),
(61, 'erick@gmail.com', '$2y$10$RAxYGUJ1bNCBUBrackqT0.uvUEgYI2WSdb8zbMjtOjWbQyqUrmc0O'),
(62, 'sany@gmail.com', '$2y$10$JhB97PzvvBHUY84mCuZTTuwZaPc95eciNvSWIAuAkFjsJLxxW266.'),
(63, 'DANIELA@GMAIL.COM', '$2y$10$YdLiLclIo.ptl6lGXcAZgeuyyjlFd6dwoIOeugRsK68FOrbSjZ5Rq'),
(64, 'gabriel@gmail.com', '$2y$10$Hw2J3ft8gd1uLJ.CbpOHV.8v0xD3zePwZjLpYYIAbtLnSq2h9a5tS'),
(65, 'jessica@gmail.com', '$2y$10$GlyR9C/i7fgtvY.5YZ3fp.ZaV8LNyYLD7DWHDwkJzU0450TDfuCXW'),
(66, 'castiel@gmail.com', '$2y$10$J3wN0gw5yuz6MRk9R/GRp.m3qCjK57zKnCYzuYpIG/ZNltt81XKue'),
(67, 'mariana@gmail.com', '$2y$10$6ZGTbtknHulScK7LA2wVhuW5hO5Cyb4bkvDg61w6wdYSK1INWQc1e'),
(69, 'hiagogatinho@gmail.com', '$2y$10$fEJOMOmg4gvTdFa0x88PFe.x2dgJ7Mnf4NOV1VrjoRdFhOD.CdIPy');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `informacoes`
--
ALTER TABLE `informacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `informacoes`
--
ALTER TABLE `informacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `informacoes`
--
ALTER TABLE `informacoes`
  ADD CONSTRAINT `informacoes_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
