-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 avr. 2021 à 23:31
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_pizza`
--

-- --------------------------------------------------------

--
-- Structure de la table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `viande` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ingredients`
--

INSERT INTO `ingredients` (`id`, `nom`, `prix`, `viande`) VALUES
(1, 'jambon', 0.9, 1),
(2, 'fromage', 0.4, 0),
(3, 'champignon', 0.7, 0),
(4, 'olive', 0.3, 0),
(5, 'poivron', 0.3, 0),
(6, 'chorizo', 1.2, 1),
(7, 'viande hachée', 1.1, 1),
(8, 'merguez', 1, 1),
(9, 'poulet', 1.3, 1),
(10, 'saumon', 3, 1),
(11, 'crevettes', 2, 1),
(12, 'oignons', 0.1, 0),
(13, 'anchois', 2, 1),
(14, 'pomme de terre', 0.5, 0),
(15, 'jambon de pays', 2.5, 1),
(16, 'tomate confite', 0.5, 0),
(17, 'tomate fraîche', 0.4, 0),
(18, 'oeuf', 0.6, 1),
(19, 'chèvre', 1.2, 0),
(20, 'gorgonzola', 1.5, 0),
(21, 'parmesan', 2, 0),
(22, 'lardons', 1.1, 1),
(23, 'viande kebab ', 2, 1),
(24, 'petite', 6, 0),
(25, 'moyenne', 8, 0),
(26, 'grande', 10, 0),
(28, 'miel', 0.3, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pizzas`
--

CREATE TABLE `pizzas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `taille` enum('petite','grande','moyenne','') NOT NULL,
  `base` enum('tomate','crème fraiche','','') NOT NULL,
  `ingredient_01` varchar(255) NOT NULL,
  `ingredient_02` varchar(255) DEFAULT NULL,
  `ingredient_03` varchar(255) DEFAULT NULL,
  `ingredient_04` varchar(255) DEFAULT NULL,
  `ingredient_05` varchar(255) DEFAULT NULL,
  `ingredient_06` varchar(255) DEFAULT NULL,
  `ingredient_07` varchar(255) DEFAULT NULL,
  `ingredient_08` varchar(255) DEFAULT NULL,
  `ingredient_09` varchar(255) DEFAULT NULL,
  `ingredient_10` varchar(255) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `vegetarien` enum('oui','non') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
