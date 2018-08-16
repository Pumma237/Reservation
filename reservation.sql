-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 16 août 2018 à 22:15
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `reservation`
--

-- --------------------------------------------------------

--
-- Structure de la table `lieux`
--

DROP TABLE IF EXISTS `lieux`;
CREATE TABLE IF NOT EXISTS `lieux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lb_Adresse` varchar(255) NOT NULL,
  `Is_public` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lieux`
--

INSERT INTO `lieux` (`id`, `lb_Adresse`, `Is_public`) VALUES
(1, 'Paris', 1),
(2, 'Limoges', 1),
(3, 'Marseille', 1);

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

DROP TABLE IF EXISTS `trajet`;
CREATE TABLE IF NOT EXISTS `trajet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link_lieux_depart` int(11) NOT NULL,
  `link_lieux_arrivee` int(11) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `arrivee` varchar(255) NOT NULL,
  `heure_depart` datetime NOT NULL,
  `heure_arrive` datetime NOT NULL,
  `prix` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `trajet`
--

INSERT INTO `trajet` (`id`, `link_lieux_depart`, `link_lieux_arrivee`, `depart`, `arrivee`, `heure_depart`, `heure_arrive`, `prix`) VALUES
(1, 1, 2, 'Bercy', 'Lycée turgot', '2018-08-08 18:00:00', '2018-07-29 22:00:00', 15),
(2, 1, 2, 'Bercy', 'Lycée turgot', '2018-08-29 23:00:00', '2018-07-30 01:00:00', 15),
(3, 3, 2, 'Bercy', 'Lycée turgot', '2018-07-29 23:00:00', '2018-07-30 01:00:00', 15),
(4, 1, 3, 'Bercy', 'Lycée turgot', '2018-07-29 23:00:00', '2018-07-30 01:00:00', 15),
(5, 2, 1, 'Turgot', 'Bercy', '2018-07-29 23:00:00', '2018-07-30 01:00:00', 15),
(6, 2, 3, 'Turgot', 'Quai', '2018-07-29 23:00:00', '2018-07-30 01:00:00', 15);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `mdp` int(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `isAdmin` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `mdp`, `Nom`, `isAdmin`) VALUES
(1, 'Ivan', 12345, 'Ivan Taranov', 1),
(2, 'Paul', 123456, 'Paul paul', 1),
(4, 'Test2', 12345, 'Test2 Test', 0),
(6, 'Rpmain', 0, 'Romain Kiro', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
