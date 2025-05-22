-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 22 mai 2025 à 07:07
-- Version du serveur : 8.4.3
-- Version de PHP : 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sae_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `biere`
--

CREATE TABLE `biere` (
  `id` int NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `gout` varchar(50) DEFAULT NULL,
  `prix` decimal(3,2) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `police` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `biere`
--

INSERT INTO `biere` (`id`, `nom`, `gout`, `prix`, `genre`, `description`, `police`) VALUES
(1, 'Dissonance', 'Vanille', 4.50, 'Jazz', 'Cette bière est dédiée aux fans de jazz qui aiment danser, chanter, s’amuser sur du jazz, alors n’hésitez pas et offrez-vous encore plus de plaisir avec notre bière à la vanille !!', 'HACKED'),
(2, 'Distorsion', 'Piment', 4.50, 'Rock', NULL, NULL),
(3, 'Tinnitus', 'Citron', 4.50, 'Techno', NULL, NULL),
(4, 'Harmony', 'Pomme', 4.50, 'Classique', NULL, NULL),
(5, 'Blues N Berry', 'Myrtille', 4.50, 'Rn\'b', NULL, NULL),
(6, 'Mango And Explosion', 'Mangue', 4.50, 'Pop', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilsateur`
--

CREATE TABLE `utilsateur` (
  `id` int NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `biere`
--
ALTER TABLE `biere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilsateur`
--
ALTER TABLE `utilsateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `biere`
--
ALTER TABLE `biere`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `utilsateur`
--
ALTER TABLE `utilsateur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
