-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 28 sep. 2018 à 10:59
-- Version du serveur :  10.1.35-MariaDB
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `p1701685`
--

-- --------------------------------------------------------

--
-- Structure de la table `Categorie`
--

CREATE TABLE `Categorie` (
  `catId` int(11) NOT NULL,
  `nomCat` varchar(256) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `Categorie`
--

INSERT INTO `Categorie` (`catId`, `nomCat`) VALUES
(1, 'Animaux'),
(2, 'Repas'),
(3, 'Monuments');

-- --------------------------------------------------------

--
-- Structure de la table `Photo`
--

CREATE TABLE `Photo` (
  `photoId` int(11) NOT NULL,
  `nomFich` varchar(256) CHARACTER SET utf8 NOT NULL,
  `description` varchar(256) CHARACTER SET utf8 NOT NULL,
  `catId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `Photo`
--

INSERT INTO `Photo` (`photoId`, `nomFich`, `description`, `catId`) VALUES
(1, 'DSC00011.jpg', 'Une perruche en cage', 1),
(2, 'DSC01212.jpg', 'Un chien en laisse', 1),
(3, 'DSC01422.jpg', 'Un canard dans l\'eau', 1),
(4, 'DSC01446.jpg', 'Une chèvre dans un pré', 1),
(5, 'DSC01040.jpg', 'Un plateau télé', 2),
(6, 'DSC01280.jpg', 'Quelque chose de sculpté', 3),
(7, 'DSC01436.jpg', 'Un monument lointain', 3),
(8, 'DSC01464.jpg', 'Un monument très très loin', 3),
(9, 'DSC02764.jpg', 'Un monument vu d\'en bas', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Categorie`
--
ALTER TABLE `Categorie`
  ADD PRIMARY KEY (`catId`);

--
-- Index pour la table `Photo`
--
ALTER TABLE `Photo`
  ADD PRIMARY KEY (`photoId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Categorie`
--
ALTER TABLE `Categorie`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Photo`
--
ALTER TABLE `Photo`
  MODIFY `photoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
