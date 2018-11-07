-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 08 mars 2018 à 14:16
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kingoludo`
--

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

CREATE TABLE `jeux` (
  `id` int(24) NOT NULL,
  `nom_jeu` varchar(256) NOT NULL,
  `editeur` varchar(128) NOT NULL,
  `annee` year(4) NOT NULL,
  `photo` varchar(512) NOT NULL,
  `descriptif` varchar(2048) NOT NULL,
  `categorie` varchar(128) NOT NULL,
  `duree` varchar(128) NOT NULL,
  `nombre_joueur` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jeux`
--

INSERT INTO `jeux` (`id`, `nom_jeu`, `editeur`, `annee`, `photo`, `descriptif`, `categorie`, `duree`, `nombre_joueur`) VALUES
(1, 'Kingdomino', 'blue orange', 2017, 'img/kingdomino.jpg', 'Domino amélioré ', 'familiale', '15min', '2-4'),
(2, 'test', 'tes', 2012, 'img/test.jpg', 'test', 'gestion', '65min', '2-6'),
(3, ':nom_jeu', ':editeur', 0000, ':photo', ':descriptif', ':categorie', ':duree', ':nombre_joueur'),
(4, ':nom_jeu', ':editeur', 0000, ':photo', ':descriptif', ':categorie', ':duree', ':nombre_joueur'),
(5, 'Les colons de catane', 'fsgsf', 2012, 'img/Penguins.jpg', 'sfgqgsq', 'Gestion', '75min', '2-4');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `login` varchar(256) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `role` varchar(256) NOT NULL,
  `presentation` varchar(2048) NOT NULL,
  `avatar` varchar(1024) NOT NULL,
  `email` varchar(512) NOT NULL,
  `password` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `nom`, `prenom`, `role`, `presentation`, `avatar`, `email`, `password`) VALUES
(1, 'toto', 'Dupont', 'Jean-Bernard', 'membre', 'Moi c\'est toto', '/img/avatar/001.png', 'toto@dupont.com', 'password'),
(2, 'admin', 'Admini', 'Test', 'administrateur', 'Compte admin', '/img/avatar/admin.png', 'admin@test.com', 'motdepasse');

-- --------------------------------------------------------

--
-- Structure de la table `user_jeux`
--

CREATE TABLE `user_jeux` (
  `id_user` int(11) NOT NULL,
  `id_jeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jeux`
--
ALTER TABLE `jeux`
  ADD UNIQUE KEY `id_jeu` (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_jeux`
--
ALTER TABLE `user_jeux`
  ADD PRIMARY KEY (`id_jeu`) USING BTREE,
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `jeux`
--
ALTER TABLE `jeux`
  MODIFY `id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `user_jeux`
--
ALTER TABLE `user_jeux`
  ADD CONSTRAINT `user_jeux_ibfk_1` FOREIGN KEY (`id_jeu`) REFERENCES `jeux` (`id`),
  ADD CONSTRAINT `user_jeux_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
