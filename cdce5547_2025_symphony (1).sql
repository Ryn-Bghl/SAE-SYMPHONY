-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 06 juin 2025 à 22:56
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
(2, 'Tinnitus', 'Citron', 4.50, 'Techno', 'Citron électrique, acidité brute, fraîcheur rave.\nTinnitus, c’est une soirée techno dans chaque gorgée.\nUne bière qui résonne, même quand la musique s’arrête.', 'ROG'),
(3, 'Distorsion', 'Piment', 4.50, 'Rock', 'Cette bière est dédiée aux vrais fans de rock, ceux qui vivent fort, qui hurlent dans la foule et vibrent au son des guitares saturées.', 'SIMBIOT'),
(4, 'Mango And Explosion', 'Mangue', 4.50, 'Pop', 'Mango and Explosion, c’est une bière à la mangue qui explose en bouche comme un solo de trompette dans un concert de jazz. Vive, fruitée et pleine d’énergie, elle est faite pour les moments de fête et de liberté.', 'Okay Jelly'),
(5, 'Blues N Berry', 'Myrtille', 4.50, 'Rn\'b', 'Avec Blue’s & Berry, Symphony signe une bière où le groove rencontre la gourmandise.\nImagine un solo de piano dans une cave enfumée, une myrtille juteuse entre les doigts.', 'Honey Salt'),
(6, 'Harmony', 'Pomme', 4.50, 'Classique', 'Harmony, bière à la pomme douce et pétillante, accompagne parfaitement un moment de calme et de musique classique. Chaque gorgée en évoque la justesse et l’élégance.', 'Montserrat'),
(7, 'Beer\'oco', 'Cacao', 4.50, 'HipHop', 'Beer’oco est une bière au style hip-hop au goût cacao, mêlant douceur chocolatée et caractère. Idéale pour les amateurs de saveurs originales et d’univers urbain, elle se déguste en rythme.', 'Bernard Mt');

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `citation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `team`
--

INSERT INTO `team` (`id`, `name`, `citation`) VALUES
(1, 'Rayan', 'std::cout << \"Hello, World!\" << std::endl; - John Doe'),
(2, 'Clémence', 'Une journée sans rire est une journée gachée - Clémence'),
(3, 'Candice', 'Pas de tenders pas de travail - Candice'),
(4, 'Killian', 'Les gens ne cesseront jamais d’avoir des rêves ! - Killian'),
(5, 'Erwann', 'Tout est possible à celui qui croit - Erwann'),
(6, 'Maissa', 'Ne fais pas aux autres ce que tu ne voudrais pas qu\'on te fasse - Maissa'),
(7, 'Mathilde', 'La vie est un défi, relève-le ! - Mathilde'),
(8, 'Mattéo', 'Chaque jour est une nouvelle chance de changer ta vie. - Mattéo'),
(9, 'Tom', 'Le succès n\'est pas la clé du bonheur. Le bonheur est la clé du succès. - Tom'),
(10, 'Mabel', 'L\'avenir appartient à ceux qui croient à la beauté de leurs rêves. - Mabel');

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
-- Index pour la table `team`
--
ALTER TABLE `team`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `utilsateur`
--
ALTER TABLE `utilsateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
