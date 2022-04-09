-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 24 nov. 2021 à 11:30
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `awi1`
--

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id`, `nom`, `description`) VALUES
(1, 'awi1', 'plus plus +'),
(2, 'awi2', 'plus plus'),
(4, 'rech2', 'lkfz efkjzelkjfezkjfkezjfezfezf zefe g zrzr'),
(6, 'jhgkgh', 'kjgkghh');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(11) NOT NULL,
  `classe_id` int(11) DEFAULT NULL,
  `name` varchar(256) NOT NULL,
  `cin` varchar(30) NOT NULL,
  `bio` text NOT NULL,
  `photo` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `classe_id`, `name`, `cin`, `bio`, `photo`) VALUES
(1, 4, 'akram', '5646461324', 'kjlfh fkjzaekjlf zekjf zek zeklfzke fkhfk zelkf hzekjhlfkhflkzef', NULL),
(2, 2, 'ali', 'kjhk6657654654', ',fhez fhkezjh fkzelfezkjhzekhflzkjhf kze', NULL),
(3, 1, 'salah', 'lkjlkjlkj', 'lkj mlkjl ml ljhdfzme ezf zelmf', NULL),
(4, NULL, 'etudiant 55', 'jkhl jkhkjhk', 'kljhkhkl lkjhkjh', NULL),
(5, 4, 'testphoto2', '321321321', 'jhd lkejh ldkzejhdl kezjhdez', '1637746668.JPG'),
(6, NULL, 'akoooo', '13213', '5454654', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
