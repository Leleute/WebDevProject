-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 30 avr. 2019 à 14:43
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
  `Email` varchar(255) NOT NULL,
  `Login` varchar(255) NOT NULL,
  `MdP` varchar(255) NOT NULL,
  `Adresse1` varchar(255) NOT NULL,
  `Adresse2` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `CodePostal` int(11) NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `Tel` int(11) NOT NULL,
  `TypeCarte` varchar(255) NOT NULL,
  `NumCarte` varchar(255) NOT NULL,
  `NomCarte` varchar(255) NOT NULL,
  `DateExpi` varchar(255) NOT NULL,
  `CodeSecu` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acheteur`
--

INSERT INTO `acheteur` (`ID`, `Nom`, `Prenom`, `Email`, `Login`, `MdP`, `Adresse1`, `Adresse2`, `Ville`, `CodePostal`, `Pays`, `Tel`, `TypeCarte`, `NumCarte`, `NomCarte`, `DateExpi`, `CodeSecu`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', '1', 1, '1', 1, '1', '1', '1', '2019-04-16', 1),
(2, '2', '2', '2', '2', '2', '2', '2', '2', 2, '2', 2, '2', '2', '2', '2019-04-16', 2),
(3, '3', '3', '3', '3', '3', '3', '3', '3', 3, '3', 3, '3', '3', '3', '3', 3),
(4, '3', '3', '4', '4', '3', '3', '3', '3', 3, '3', 3, '3', '3', '3', '3', 3),
(5, '3', '3', '5', '5', '3', '3', '3', '3', 3, '3', 3, '3', '3', '3', '3', 3),
(6, '3', '3', '6', '6', '3', '3', '3', '3', 3, '3', 3, '3', '3', '3', '3', 3),
(7, 'dsqdsqf', 'qsdsq', 'qsddsq', 'qsdsqd', 'qsdsqd', 'sqdqs', 'sdqsd', 'dsqdqs', 923, 'dsqdq', 123, 'fsqdqs', 'qsdsdq', 'qsdsdq', 'qdsdqsdsq', 1243),
(8, 'mart', 'dqs', 'dqsqsza', 'azeezza', 'azeaazea', 'azeaze', 'az', 'azeara', 132, 'dsqdsq', 1233, 'fds', '3221', 'qsdq', '2019-04-17', 123);

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
(1, 'a', 1, 'a', '', 'a', 'a', 'a', '2019-04-09', 0),
(2, 'b', 2, 'b', NULL, 'b', 'b', 'b', '2019-04-17', 0);

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
(1, 'a', 1, 'a', NULL, 'a', 'a', 'a', '2019-04-09', 0),
(2, 'b', 2, 'b', NULL, 'b', 'b', 'b', '2019-04-12', 0);

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
(1, '1', 1, '1', NULL, '1', 0),
(2, '2', 2, '2', NULL, '2', 0);

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
(12, 'Lili', 'lili@orange.fr', 'kriti-kharbanda-Hot-Photos-4.jpg', '16.jpg', 'Louise');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vetement`
--

INSERT INTO `vetement` (`ID`, `Nom`, `Prix`, `AdressePhoto`, `AdresseVideo`, `Description`, `Taille`, `Sexe`, `Couleur`, `IDvendeur`) VALUES
(1, '1', 1, '1', NULL, '1', 1, '1', '1', 0),
(2, '2', 2, '2', NULL, '2', 2, '2', '2', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
