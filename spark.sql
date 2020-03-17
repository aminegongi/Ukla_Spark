-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 17 mars 2020 à 04:27
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `spark`
--

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `textDesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id`, `nom`, `textDesc`) VALUES
(1, 'hiii', 'hiiiiiiiiiiii'),
(2, 'hello', 'hellooooo');

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

DROP TABLE IF EXISTS `plat`;
CREATE TABLE IF NOT EXISTS `plat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image0` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `difficulte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tempsPrepa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tempsCuisson` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) DEFAULT NULL,
  `hfr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meteo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `humeur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preparation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aEviter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aReccomander` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nbrPortion` int(11) NOT NULL,
  `nomPortion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ingredients` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `specialite` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2038A2078CDE5729` (`type`),
  KEY `IDX_2038A207E7D6FCC1` (`specialite`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`id`, `nom`, `image0`, `image1`, `image2`, `image3`, `image4`, `image5`, `description`, `difficulte`, `tempsPrepa`, `tempsCuisson`, `type`, `hfr`, `meteo`, `humeur`, `preparation`, `aEviter`, `aReccomander`, `nbrPortion`, `nomPortion`, `ingredients`, `specialite`) VALUES
(1, 'spagetti', 'plat3_1.jpg', 'plat2_2.jpg', 'plat2_1.jpg', 'plat3_2.jpg', '', '', 'sauce hamra', 'facile', '10', '15', 1, '2', 'all', 'happy', 'azerty', 'azerty', 'azerty', 4, 'personnes', 'azerty', 2);

-- --------------------------------------------------------

--
-- Structure de la table `plats_notes`
--

DROP TABLE IF EXISTS `plats_notes`;
CREATE TABLE IF NOT EXISTS `plats_notes` (
  `notes_id` int(11) NOT NULL,
  `Plat_id` int(11) NOT NULL,
  PRIMARY KEY (`Plat_id`,`notes_id`),
  KEY `IDX_DA1D2C6918808CFC` (`Plat_id`),
  KEY `IDX_DA1D2C69FC56F556` (`notes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `plats_notes`
--

INSERT INTO `plats_notes` (`notes_id`, `Plat_id`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `plats_ustensilles`
--

DROP TABLE IF EXISTS `plats_ustensilles`;
CREATE TABLE IF NOT EXISTS `plats_ustensilles` (
  `Plat_id` int(11) NOT NULL,
  `Ustensilles_id` int(11) NOT NULL,
  PRIMARY KEY (`Plat_id`,`Ustensilles_id`),
  KEY `IDX_F60672BF18808CFC` (`Plat_id`),
  KEY `IDX_F60672BF383E3E12` (`Ustensilles_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `plats_ustensilles`
--

INSERT INTO `plats_ustensilles` (`Plat_id`, `Ustensilles_id`) VALUES
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

DROP TABLE IF EXISTS `specialite`;
CREATE TABLE IF NOT EXISTS `specialite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `specialite`
--

INSERT INTO `specialite` (`id`, `nom`, `image`, `description`) VALUES
(2, 'Tunisienne', 'plat3_1.jpg', 'tounsia');

-- --------------------------------------------------------

--
-- Structure de la table `typeplat`
--

DROP TABLE IF EXISTS `typeplat`;
CREATE TABLE IF NOT EXISTS `typeplat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `typeplat`
--

INSERT INTO `typeplat` (`id`, `nom`) VALUES
(1, 'plat'),
(2, 'entrée'),
(3, 'dessert'),
(4, 'jus');

-- --------------------------------------------------------

--
-- Structure de la table `type_plat`
--

DROP TABLE IF EXISTS `type_plat`;
CREATE TABLE IF NOT EXISTS `type_plat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_plat`
--

INSERT INTO `type_plat` (`id`, `nom`) VALUES
(1, 'plat'),
(2, 'entrée'),
(3, 'dessert'),
(4, 'jus');

-- --------------------------------------------------------

--
-- Structure de la table `ustensilles`
--

DROP TABLE IF EXISTS `ustensilles`;
CREATE TABLE IF NOT EXISTS `ustensilles` (
  `idUst` int(11) NOT NULL AUTO_INCREMENT,
  `nomUst` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idUst`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `ustensilles`
--

INSERT INTO `ustensilles` (`idUst`, `nomUst`, `lien`, `icone`) VALUES
(2, 'mgharfa', NULL, 'plat2_2.jpg'),
(3, 'farchita', NULL, 'plat2_2.jpg');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `plat`
--
ALTER TABLE `plat`
  ADD CONSTRAINT `FK_2038A2078CDE5729` FOREIGN KEY (`type`) REFERENCES `typeplat` (`id`),
  ADD CONSTRAINT `FK_2038A207E7D6FCC1` FOREIGN KEY (`specialite`) REFERENCES `specialite` (`id`);

--
-- Contraintes pour la table `plats_notes`
--
ALTER TABLE `plats_notes`
  ADD CONSTRAINT `FK_DA1D2C6918808CFC` FOREIGN KEY (`Plat_id`) REFERENCES `plat` (`id`),
  ADD CONSTRAINT `FK_DA1D2C69FC56F556` FOREIGN KEY (`notes_id`) REFERENCES `notes` (`id`);

--
-- Contraintes pour la table `plats_ustensilles`
--
ALTER TABLE `plats_ustensilles`
  ADD CONSTRAINT `FK_F60672BF18808CFC` FOREIGN KEY (`Plat_id`) REFERENCES `plat` (`id`),
  ADD CONSTRAINT `FK_F60672BF383E3E12` FOREIGN KEY (`Ustensilles_id`) REFERENCES `ustensilles` (`idUst`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
