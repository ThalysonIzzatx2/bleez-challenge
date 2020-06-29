-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jun-2020 às 03:29
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pokedex`
--

CREATE TABLE `pokedex` (
  `id` int(11) NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(5) NOT NULL,
  `num` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pokedex`
--

INSERT INTO `pokedex` (`id`, `name`, `description`, `image`, `price`, `num`) VALUES
(3, 'Ivysaur', 'There is a bud on this Pokémon\'s back. To support its weight, Ivysaur\'s legs and trunk grow thick and strong. If it starts spending more time lying in the sunlight, it\'s a sign that the bud will bloom into a large flower soon.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/002.png', 30, 2),
(4, 'Venusaur', 'There is a large flower on Venusaur\'s back. The flower is said to take on vivid colors if it gets plenty of nutrition and sunlight. The flower\'s aroma soothes the emotions of people.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/003.png', 45, 3),
(5, 'Charmander', 'The flame that burns at the tip of its tail is an indication of its emotions. The flame wavers when Charmander is enjoying itself. If the Pokémon becomes enraged, the flame burns fiercely.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png', 12, 4),
(6, 'Charmeleon', 'Charmeleon mercilessly destroys its foes using its sharp claws. If it encounters a strong foe, it turns aggressive. In this excited state, the flame at the tip of its tail flares with a bluish white color.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/005.png', 30, 5),
(7, 'Bulbasaur', 'Bulbasaur can be seen napping in bright sunlight. There is a seed on its back. By soaking up the sun\'s rays, the seed grows progressively larger.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png', 15, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pokedex`
--
ALTER TABLE `pokedex`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pokedex`
--
ALTER TABLE `pokedex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
