-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 09 mai 2022 à 16:50
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `immo`
--

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

DROP TABLE IF EXISTS `logement`;
CREATE TABLE IF NOT EXISTS `logement` (
  `id_logement` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `cp` int(5) NOT NULL,
  `surface` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `type` enum('location','achat') NOT NULL,
  `description` text,
  PRIMARY KEY (`id_logement`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`id_logement`, `titre`, `adresse`, `ville`, `cp`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
(1, 'Appartement Jean-Philippe\r\n', '30, Rue des Vergers', 'Molsheim', 67120, 90, 1200, './img/appartement1.jpg', 'location', 'NC'),
(2, 'Habitation Charlemagne', '400, Boulevard Saint-Martin', 'Laval (Quebec)', 8, 210, 650000, './img/appartement2.jpg', 'achat', 'NC'),
(3, 'Villa Restless', '1243, Beverly Green Dr', 'Beverly Hills', 90212, 15000, 6750000, './img/appartement3.jpg', 'achat', 'NC'),
(4, 'Bien Fossvogur', '7, Rue Laugavegur', 'Reykjavik', 103, 80, 1700, './img/appartement4.jpg', 'location', 'NC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
