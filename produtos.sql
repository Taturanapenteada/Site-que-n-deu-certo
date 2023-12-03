-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2023 às 00:17
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `produtos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque`
--

CREATE TABLE `estoque` (
  `frutas` int(200) NOT NULL,
  `verduras` int(11) NOT NULL,
  `leite` int(11) NOT NULL,
  `queijo` int(11) NOT NULL,
  `ovos` int(11) NOT NULL,
  `arroz` int(11) NOT NULL,
  `feijao` int(11) NOT NULL,
  `macarrao` int(11) NOT NULL,
  `enlatados` int(11) NOT NULL,
  `molhos` int(11) NOT NULL,
  `pizzas` int(11) NOT NULL,
  `sorvetes` int(11) NOT NULL,
  `carnes` int(11) NOT NULL,
  `refrigerantes` int(11) NOT NULL,
  `sucos` int(11) NOT NULL,
  `agua` int(11) NOT NULL,
  `cafe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `estoque`
--

INSERT INTO `estoque` (`frutas`, `verduras`, `leite`, `queijo`, `ovos`, `arroz`, `feijao`, `macarrao`, `enlatados`, `molhos`, `pizzas`, `sorvetes`, `carnes`, `refrigerantes`, `sucos`, `agua`, `cafe`) VALUES
(0, 0, 5, 0, 0, 55, 0, 55, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 0, 5, 0, 0, 5, 0, 0, 0, 5, 0, 0, 5, 0, 0, 0, 0),
(0, 0, 5, 0, 0, 5, 0, 0, 0, 5, 0, 0, 5, 0, 0, 0, 0),
(0, 0, 5, 0, 0, 5, 0, 0, 0, 5, 0, 0, 5, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 100000, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 100000, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 100000, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 100000, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0),
(4000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5200, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
