-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 01 mai 2019 à 10:38
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projectweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheteur`
--

DROP TABLE IF EXISTS `acheteur`;
CREATE TABLE IF NOT EXISTS `acheteur` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `AdressePhoto` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Login` varchar(255) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  `Adresse1` varchar(255) NOT NULL,
  `Adresse2` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `CodePostale` int(11) NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `Tel` int(11) NOT NULL,
  `TypeCarte` varchar(255) NOT NULL,
  `NumCarte` varchar(255) NOT NULL,
  `NomCarte` varchar(255) NOT NULL,
  `DateExpi` varchar(255) NOT NULL,
  `CodeSecu` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acheteur`
--

INSERT INTO `acheteur` (`ID`, `Nom`, `Prenom`, `AdressePhoto`, `Email`, `Login`, `Mdp`, `Adresse1`, `Adresse2`, `Ville`, `CodePostale`, `Pays`, `Tel`, `TypeCarte`, `NumCarte`, `NomCarte`, `DateExpi`, `CodeSecu`) VALUES
(1, 'Dupont', 'Nicolas', 'Dupont_Nicolas.jpg', 'nicolas.dupont@gmail.com', 'Nico12', 'Nicooo', '13 avenue des peupliers', 'Pas', 'Antony', 92160, 'France', 645782347, 'Visa', '78624656652087214', 'Dupont Nicolas', '2024-02-09', 789),
(2, 'Forestu', 'Clara', 'clara.jpg', 'clara.forestu@gmail.com', 'clara29', 'Clarafo', '5 avenue des roses', '', 'Paris 5eme arrondissement', 75005, 'France', 745761214, 'Visa', '78628648901757', 'Clara Forestu', '2020-05-29', 142);

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prix` float NOT NULL,
  `AdressePhoto` varchar(255) NOT NULL,
  `AdresseVideo` varchar(255) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `Auteur` varchar(255) NOT NULL,
  `Editeur` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `IDvendeur` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`ID`, `Nom`, `Prix`, `AdressePhoto`, `AdresseVideo`, `Description`, `Auteur`, `Editeur`, `Date`, `IDvendeur`) VALUES
(1, 'L\'imagier a toucher de petit ours', 12, 'petitours.jpg', 'https://www.youtube.com/watch?v=Mh2ZUxBgBo8', 'Livre pour enfant', 'Louis Zalon', 'Bayard Edition', '2016-11-14', 1),
(2, 'Michel Strogoff', 20, 'jules-vernes.jpeg', 'https://www.youtube.com/watch?v=hkrqhv55pe4', 'Les provinces sibériennes de la Russie sont envahies par des hordes tartares dont Ivan Ogareff est l\'âme', 'Jules Verne', 'Le Livre de Poche', '1974-11-16', 2);

-- --------------------------------------------------------

--
-- Structure de la table `musiques`
--

DROP TABLE IF EXISTS `musiques`;
CREATE TABLE IF NOT EXISTS `musiques` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prix` float NOT NULL,
  `AdressePhoto` varchar(255) NOT NULL,
  `AdresseVideo` varchar(255) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `Artiste` varchar(255) NOT NULL,
  `Label` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `IDvendeur` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `musiques`
--

INSERT INTO `musiques` (`ID`, `Nom`, `Prix`, `AdressePhoto`, `AdresseVideo`, `Description`, `Artiste`, `Label`, `Date`, `IDvendeur`) VALUES
(1, 'Father of 4', 19, 'offset.jpg', 'https://www.youtube.com/watch?v=gvbmVRYq5U8', 'Offset grand rappeur americain sort son album attendu par tous Father of 4', 'Offset', 'NIST', '2019-03-11', 3),
(2, 'Destin', 9, 'destin.jpg', 'https://www.youtube.com/watch?v=0uLp-tejcSo', '3eme album de Ninho Rap', 'Ninho', 'Rec 118', '2019-02-12', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sportetloisir`
--

DROP TABLE IF EXISTS `sportetloisir`;
CREATE TABLE IF NOT EXISTS `sportetloisir` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prix` float NOT NULL,
  `AdressePhoto` varchar(255) NOT NULL,
  `AdresseVideo` varchar(255) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `IDvendeur` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sportetloisir`
--

INSERT INTO `sportetloisir` (`ID`, `Nom`, `Prix`, `AdressePhoto`, `AdresseVideo`, `Description`, `IDvendeur`) VALUES
(1, 'Neoness', 30, 'neoness.jpg', 'https://www.youtube.com/watch?v=Y3BeX21wago', '30 euros par mois et pour un abonnement annuel 2 mois d\'etes sont offerts!', 1),
(2, 'Le Misanthrope', 25, 'theatre.png', 'https://www.youtube.com/watch?v=3LlcRUoIpmY', 'Piece de theatre ecrite par le fabuleux Moliere. Se déroule le 20 mai 2019', 2);

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PdP` varchar(255) NOT NULL,
  `PdC` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`ID`, `Pseudo`, `Email`, `PdP`, `PdC`, `Nom`) VALUES
(2, 'RoRO', 'romain@orange.fr', 'ppromain.jpg', 'Dupont_Nicolas.jpg', 'Romain'),
(1, 'Lilia', 'lili@gmail.com', 'pplili.jpg', 'fondClara.jpg', 'Rimou');

-- --------------------------------------------------------

--
-- Structure de la table `vetement`
--

DROP TABLE IF EXISTS `vetement`;
CREATE TABLE IF NOT EXISTS `vetement` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prix` float NOT NULL,
  `AdressePhoto` varchar(255) NOT NULL,
  `AdresseVideo` varchar(255) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `Taille` float NOT NULL,
  `Sexe` varchar(255) NOT NULL,
  `Couleur` varchar(255) NOT NULL,
  `IDvendeur` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vetement`
--

INSERT INTO `vetement` (`ID`, `Nom`, `Prix`, `AdressePhoto`, `AdresseVideo`, `Description`, `Taille`, `Sexe`, `Couleur`, `IDvendeur`) VALUES
(1, 'Veste', 40, 'vesteh.png', NULL, 'Tres jolie veste pour homme ideale pour le printemps/automne', 3, 'Homme', 'Marron', 1),
(2, 'Stan', 60, 'stan.jpeg', 'https://www.youtube.com/watch?v=S8Gc-xE6GyU', 'Basket taille basse adidas pour femme ', 35, 'Homme', 'Blanche et noire', 2),
(3, 'Jupe a carreaux', 35, 'jupe.jpeg', NULL, 'Jupe a carreaux elegante ideale pour les occasions.', 36, 'Femme', 'Grise', 2),
(4, 'Louboutin', 500, 'Louboutin.jpeg', 'https://www.youtube.com/watch?v=-huND1xCm44', 'Louboutin talons aigue couleur noire', 39, 'Femme', 'Noir', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
