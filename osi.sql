-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 01 juin 2018 à 16:04
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `osi`
--

-- --------------------------------------------------------

--
-- Structure de la table `osi_contract`
--

DROP TABLE IF EXISTS `osi_contract`;
CREATE TABLE IF NOT EXISTS `osi_contract` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `osi_contract`
--

INSERT INTO `osi_contract` (`id`, `name`) VALUES
(1, 'Stage'),
(2, 'Alternance'),
(3, 'Contrat pro');

-- --------------------------------------------------------

--
-- Structure de la table `osi_formation`
--

DROP TABLE IF EXISTS `osi_formation`;
CREATE TABLE IF NOT EXISTS `osi_formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `osi_formation`
--

INSERT INTO `osi_formation` (`id`, `name`) VALUES
(1, 'ingesup'),
(2, 'business'),
(3, 'audiovisuel'),
(4, 'jeux video'),
(5, 'graphic design');

-- --------------------------------------------------------

--
-- Structure de la table `osi_login`
--

DROP TABLE IF EXISTS `osi_login`;
CREATE TABLE IF NOT EXISTS `osi_login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `osi_login`
--

INSERT INTO `osi_login` (`id`, `username`, `password`) VALUES
(1, 'username', 'password');

-- --------------------------------------------------------

--
-- Structure de la table `osi_niveau_etude`
--

DROP TABLE IF EXISTS `osi_niveau_etude`;
CREATE TABLE IF NOT EXISTS `osi_niveau_etude` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `osi_niveau_etude`
--

INSERT INTO `osi_niveau_etude` (`id`, `name`) VALUES
(1, 'B1'),
(2, 'B2'),
(3, 'B3'),
(4, 'M1'),
(5, 'M2');

-- --------------------------------------------------------

--
-- Structure de la table `osi_offer`
--

DROP TABLE IF EXISTS `osi_offer`;
CREATE TABLE IF NOT EXISTS `osi_offer` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `year` int(10) NOT NULL,
  `formation` int(11) NOT NULL,
  `contract` int(11) NOT NULL,
  `description` text NOT NULL,
  `period` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `osi_offer`
--

INSERT INTO `osi_offer` (`id`, `title`, `year`, `formation`, `contract`, `description`, `period`) VALUES
(2, 'Dev Web en Alternance', 2, 1, 2, '## Description\n\nLes Ã©tudiants de deuxiÃ¨me annÃ©e cherchent une alternance. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat fermentum gravida. In eleifend venenatis dui, ut congue nisi ullamcorper ut. Nunc gravida rhoncus volutpat. In pharetra maximus purus quis elementum. Sed commodo auctor metus quis semper. Pellentesque sagittis condimentum massa ut rhoncus. Pellentesque luctus dignissim velit, eu malesuada tortor tristique eget. Fusce eget tempus orci.\n\n## CompÃ©tences acquises\n\nLes Ã©tudiants ont rÃ©alisÃ© un **projet Symfony**. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat fermentum gravida. In eleifend venenatis dui, ut congue nisi ullamcorper ut. Nunc gravida rhoncus volutpat. In pharetra maximus purus quis elementum. Sed commodo auctor metus quis semper. Pellentesque sagittis condimentum massa ut rhoncus. Pellentesque luctus dignissim velit, eu malesuada tortor tristique eget. Fusce eget tempus orci.', 'une semaine sur deux'),
(6, 'Marketing ', 2, 2, 1, '##Description\r\n\r\nCeci est la description de l\'offre', '2 mois'),
(7, 'Management  & finance en Alternance', 3, 2, 2, '##Description\r\n\r\nCeci est encore la description de l\'offre', '1 semaine sur 2 '),
(8, 'Stage Developpement Web', 1, 1, 1, '##Description\r\n\r\n#Description de l\'offre', '6 semaines'),
(9, 'Contrat pro Monteur', 5, 3, 3, '##Description\r\n\r\nCeci est toujours et encore la description de l\'offre.', '1 an'),
(10, 'Stage Capture Son', 2, 3, 1, '##Description\r\n\r\nLa description gÃ¨re le markdown !!', '6 semaines'),
(11, 'Stage Game Design', 2, 4, 1, '##Description\r\n\r\nToujours une petite description de l\'offre', '2 mois');

-- --------------------------------------------------------

--
-- Structure de la table `osi_offer_skill`
--

DROP TABLE IF EXISTS `osi_offer_skill`;
CREATE TABLE IF NOT EXISTS `osi_offer_skill` (
  `offer_id` int(11) UNSIGNED NOT NULL,
  `skill_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `osi_offer_skill`
--

INSERT INTO `osi_offer_skill` (`offer_id`, `skill_id`) VALUES
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(3, 2),
(3, 4),
(6, 10),
(7, 11),
(7, 12),
(8, 1),
(8, 2),
(8, 3),
(9, 14),
(10, 13),
(11, 19);

-- --------------------------------------------------------

--
-- Structure de la table `osi_skill`
--

DROP TABLE IF EXISTS `osi_skill`;
CREATE TABLE IF NOT EXISTS `osi_skill` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `formation` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `osi_skill`
--

INSERT INTO `osi_skill` (`id`, `name`, `formation`) VALUES
(1, 'PHP', 1),
(2, 'Ergonomie', 1),
(3, 'SEO', 1),
(4, 'Symfony', 1),
(5, 'Node.js', 1),
(10, 'Marketing', 2),
(11, 'Management', 2),
(12, 'Finance', 2),
(13, 'Son', 3),
(14, 'Video', 3),
(15, 'Level Design', 4),
(16, 'Animation 2D', 4),
(17, 'Graphisme 2D', 5),
(18, 'Graphisme 3D', 5),
(19, 'Game Design', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
