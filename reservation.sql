-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 16 août 2018 à 16:30
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

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

CREATE TABLE `lieux` (
  `id` int(11) NOT NULL,
  `lb_Adresse` varchar(255) NOT NULL,
  `Is_public` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `trajet` (
  `id` int(11) NOT NULL,
  `link_lieux_depart` int(11) NOT NULL,
  `link_lieux_arrivee` int(11) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `arrivee` varchar(255) NOT NULL,
  `heure_depart` datetime NOT NULL,
  `heure_arrive` datetime NOT NULL,
  `prix` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` int(255) NOT NULL,
  `Nom` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `mdp`, `Nom`) VALUES
(1, 'Ivan', 12345, 'Ivan Taranov'),
(2, 'Paul', 123456, 'Paul paul'),
(4, 'Test2', 12345, 'Test2 Test'),
(6, 'Rpmain', 0, 'Romain Kiro');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `lieux`
--
ALTER TABLE `lieux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `lieux`
--
ALTER TABLE `lieux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `trajet`
--
ALTER TABLE `trajet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
