-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 06 juin 2025 à 15:08
-- Version du serveur : 10.6.22-MariaDB
-- Version de PHP : 8.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cdce5547_2025_symphony`
--

-- --------------------------------------------------------

--
-- Structure de la table `biere`
--

CREATE TABLE `biere` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `gout` varchar(50) DEFAULT NULL,
  `prix` decimal(3,2) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `police` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `biere`
--

INSERT INTO `biere` (`id`, `nom`, `gout`, `prix`, `genre`, `description`, `police`) VALUES
(1, 'Dissonance', 'Vanille', 4.50, 'Jazz', 'Cette bière est dédiée aux fans de jazz qui aiment danser, chanter, s’amuser sur du jazz, alors n’hésitez pas et offrez-vous encore plus de plaisir avec notre bière à la vanille !!', 'HACKED'),
(2, 'Distorsion', 'Piment', 4.50, 'Rock', 'Cette bière est dédiée aux vrais fans de rock, ceux qui vivent fort, qui hurlent dans la foule et vibrent au son des guitares saturées. Si tu aimes quand ça envoie du lourd, laisse-toi emporter par la puissance épicée de notre bière au piment… DISTORSION, c’est le feu dans ton verre et le rock dans tes veines ! ', 'SIMBIOT'),
(3, 'Tinnitus', 'Citron', 4.50, 'Techno', 'Tinnitus, c’est la claque sonore d’une soirée techno capturée dans une bouteille. Avec un goût et une intensité citronnée presque électrique, qui pétille comme un gros beat à 130 BPM. Vive et tranchante, elle évoque les stroboscopes et l’écho des basses qui résonnent encore longtemps après la dernière note.\nSon acidité assumée titille les papilles comme un synthé saturé, et sa fraîcheur vive pulse au rythme des kicks. Avec Tinnitus, chaque gorgée est un drop, brut, vibrant, et inoubliable. C’est une bière pour les noctambules, les raveurs, celles et ceux qui dansent jusqu’à l’aube et aiment quand le goût reste en tête, comme un bon vieux bourdonnement.', 'ROG'),
(4, 'Harmony', 'Pomme', 4.50, 'Classique', 'Harmony, c’est une bière à la pomme qui se savoure comme une belle mélodie. Douce, fruitée et légèrement pétillante, elle accompagne parfaitement une écoute de musique classique, dans un moment de calme et de détente. Son goût raffiné évoque la simplicité élégante d’un air de violon ou d’un morceau de piano. Avec Harmony, chaque gorgée trouve sa note juste.', 'Montserrat'),
(5, 'Blues N Berry', 'Myrtille', 4.50, 'Rn\'b', 'Avec Blue’s & Berry, Symphony signe une bière où le groove rencontre la gourmandise. Imagine un solo de piano dans une cave enfumée, une myrtille juteuse entre les doigts. Cette bière, c’est ça : l’alliance suave de notes fruitées intenses et d’une base maltée tout en rondeur. Son visuel en dit long  un clavier soul, des baies bleues, et une promesse : chaque gorgée est une improvisation maîtrisée, un équilibre entre douceur et caractère.', 'Honey Salt'),
(6, 'Mango And Explosion', 'Mangue', 4.50, 'Pop', 'Mango and Explosion, c’est une bière à la mangue qui explose en bouche comme un solo de trompette dans un concert de jazz. Vive, fruitée et pleine d’énergie, elle est faite pour les moments de fête et de liberté. Chaque gorgée est une pulsation, un éclat, une note brillante qui réveille les sens. Sa fraîcheur exotique évoque l’improvisation audacieuse d’un cuivré bien senti, à la fois inattendu et jubilatoire. Avec Mango and Blast, la dégustation devient un feu d’artifice sonore et tropical.\nMango and Blast, c’est une bière à la mangue qui explose en bouche comme un solo de trompette dans un concert de jazz. Vive, fruitée et pleine d’énergie, elle est faite pour les moments de fête et de liberté. Chaque gorgée est une pulsation, un éclat, une note brillante qui réveille les sens. Sa fraîcheur exotique évoque l’improvisation audacieuse d’un cuivré bien senti, à la fois inattendu et jubilatoire. Avec Mango and Blast, la dégustation devient un feu d’artifice sonore et tropical.\nMango and Blast, c’est une bière à la mangue qui explose en bouche comme un solo de trompette dans un concert de jazz. Vive, fruitée et pleine d’énergie, elle est faite pour les moments de fête et de liberté. Chaque gorgée est une pulsation, un éclat, une note brillante qui réveille les sens. Sa fraîcheur exotique évoque l’improvisation audacieuse d’un cuivré bien senti, à la fois inattendu et jubilatoire. Avec Mango and Blast, la dégustation devient un feu d’artifice sonore et tropical.\n', 'Okay Jelly'),
(7, 'Beer\'oco', 'Cacao', 4.50, 'Hip Hop', 'Beer’oco est une bière au style hip-hop, avec un goût original de cacao.\nElle mêle douceur chocolatée et caractère, pour une expérience unique,idéale pour ceux qui aiment les saveurs surprenantes et l’univers urbain dans son style .Beer’oco est une bière qui sort du lot, à déguster en rythme.', 'Bernard Mt');

-- --------------------------------------------------------

--
-- Structure de la table `utilsateur`
--

CREATE TABLE `utilsateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `utilsateur`
--
ALTER TABLE `utilsateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
