-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 29 mai 2018 à 12:30
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
  `type` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `osi_contract`
--

INSERT INTO `osi_contract` (`id`, `type`) VALUES
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
-- Structure de la table `osi_niveau_etude`
--

DROP TABLE IF EXISTS `osi_niveau_etude`;
CREATE TABLE IF NOT EXISTS `osi_niveau_etude` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `niveau` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `osi_niveau_etude`
--

INSERT INTO `osi_niveau_etude` (`id`, `niveau`) VALUES
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
  `class` int(10) NOT NULL,
  `formation` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text NOT NULL,
  `period` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `osi_offer`
--

INSERT INTO `osi_offer` (`id`, `title`, `class`, `formation`, `type`, `description`, `period`) VALUES
(1, 'Dev Web', 1, 1, 1, '## Description\n\nLes Ã©tudiants de premiÃ¨re annÃ©e cherchent un stage. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat fermentum gravida. In eleifend venenatis dui, ut congue nisi ullamcorper ut. Nunc gravida rhoncus volutpat. In pharetra maximus purus quis elementum. Sed commodo auctor metus quis semper. Pellentesque sagittis condimentum massa ut rhoncus. Pellentesque luctus dignissim velit, eu malesuada tortor tristique eget. Fusce eget tempus orci.\n\n## CompÃ©tences acquises\n\nLes Ã©tudiants ont rÃ©alisÃ© un **projet transvesal**. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat fermentum gravida. In eleifend venenatis dui, ut congue nisi ullamcorper ut. Nunc gravida rhoncus volutpat. In pharetra maximus purus quis elementum. Sed commodo auctor metus quis semper. Pellentesque sagittis condimentum massa ut rhoncus. Pellentesque luctus dignissim velit, eu malesuada tortor tristique eget. Fusce eget tempus orci.', '4 semaines'),
(2, 'Dev Web en Alternance', 2, 1, 2, '## Description\n\nLes Ã©tudiants de deuxiÃ¨me annÃ©e cherchent une alternance. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat fermentum gravida. In eleifend venenatis dui, ut congue nisi ullamcorper ut. Nunc gravida rhoncus volutpat. In pharetra maximus purus quis elementum. Sed commodo auctor metus quis semper. Pellentesque sagittis condimentum massa ut rhoncus. Pellentesque luctus dignissim velit, eu malesuada tortor tristique eget. Fusce eget tempus orci.\n\n## CompÃ©tences acquises\n\nLes Ã©tudiants ont rÃ©alisÃ© un **projet Symfony**. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat fermentum gravida. In eleifend venenatis dui, ut congue nisi ullamcorper ut. Nunc gravida rhoncus volutpat. In pharetra maximus purus quis elementum. Sed commodo auctor metus quis semper. Pellentesque sagittis condimentum massa ut rhoncus. Pellentesque luctus dignissim velit, eu malesuada tortor tristique eget. Fusce eget tempus orci.', 'une semaine sur deux');

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
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `osi_skill`
--

DROP TABLE IF EXISTS `osi_skill`;
CREATE TABLE IF NOT EXISTS `osi_skill` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `formation` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `osi_skill`
--

INSERT INTO `osi_skill` (`id`, `title`, `formation`) VALUES
(1, 'PHP', 1),
(2, 'Ergonomie', 1),
(3, 'SEO', 1),
(4, 'Symfony', 1),
(5, 'Node.js', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
