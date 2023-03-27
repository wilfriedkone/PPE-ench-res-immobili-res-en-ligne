-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : Dim 26 mars 2023 à 21:50
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `immobilier`
--

-- --------------------------------------------------------

--
-- Structure de la table `calendrier`
--

DROP TABLE IF EXISTS `calendrier`;
CREATE TABLE IF NOT EXISTS `calendrier` (
  `id` int(10) NOT NULL,
  `URLI` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `calendrier`
--

INSERT INTO `calendrier` (`id`, `URLI`) VALUES
(1, 'minuteur.html'),
(2, 'minuteur2.html'),
(3, 'minuteur3.html'),
(4, 'minuteur4.html'),
(5, 'minuteur5.html'),
(6, 'minuteur6.html'),
(7, 'minuteur7.html'),
(8, 'minuteur8.html'),
(9, 'minuteur9.html'),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, ''),
(26, ''),
(27, ''),
(28, ''),
(29, ''),
(30, ''),
(31, '');

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

DROP TABLE IF EXISTS `maison`;
CREATE TABLE IF NOT EXISTS `maison` (
  `nummaison` int(11) NOT NULL,
  `arrondissement` varchar(50) DEFAULT NULL,
  `tj` varchar(100) DEFAULT NULL,
  `ty` varchar(100) DEFAULT NULL,
  `rayon` varchar(50) DEFAULT NULL,
  `map` varchar(1000) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nummaison`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `maison`
--

INSERT INTO `maison` (`nummaison`, `arrondissement`, `tj`, `ty`, `rayon`, `map`, `photo`) VALUES
(1, '16ème arrondissement', 'Tribunal judiciaire de Paris - 16ème arrondissement', 'appartement', '10km', '400k', 'imagesad1/appart1.jpeg'),
(2, '16ème arrondissement', 'Tribunal judiciaire de Paris - 16ème arrondissement', 'apppartement', '5km', '600k', 'imagesad1/appart2.jpg'),
(3, '9ème arrondissement', 'Tribunal judiciaire de Paris - 9ème arrondissement', 'appartement', '20km', '400k', 'imagesad1/appart3.jpg'),
(4, '15ème arrondissement', 'Tribunal judiciaire de Paris - 15ème arrondissement', 'appartement', '20km', '450k', 'imagesad1/appart4.jpg'),
(5, '8ème arrondissement', 'Tribunal judiciaire de Paris - 8ème arrondissement', 'appartement', '25km', '380k', 'imagesad1/appart5.jpg'),
(6, '12ème arrondissement', 'Tribunal judiciaire de Paris - 12ème arrondissement', 'maison', '10km', '600k', 'imagesad1/maison1.jpg'),
(7, '1er arrondissement', 'Tribunal judiciaire de Paris - 1er arrondissement', 'maison', '5km', '700k', 'imagesad1/maison2.jpg'),
(8, '3ème arrondissement', 'Tribunal judiciaire de Paris - 3ème arrondissement', 'maison', '25km', '550k', 'imagesad1/maison3.jpg'),
(9, '10ème arrondissement', 'Tribunal judiciaire de Paris - 10ème arrondissement', 'maison', '10km', '530k', 'imagesad1/maison4.jpg'),
(10, '11ème arrondissement', 'Tribunal judiciaire de Paris - 11ème arrondissement', 'commerce', '10km', '400k', 'imagesad1/commerce1.jpg'),
(11, '13ème arrondissement', 'Tribunal judiciaire de Paris - 13ème arrondissement', 'commerce', '10km', '670K', 'imagesad1/commerce2.jpg'),
(12, '9ème arrondissement', 'Tribunal judiciaire de Paris - 9ème arrondissement', 'commerce', '10km', '650k', 'imagesad1/commerce3.jpg'),
(13, '4ème arrondissement', 'Tribunal judiciaire de Paris - 4ème arrondissement', 'commerce', '7km', '400k', 'imagesad1/commerce4.jpg'),
(14, '7ème arrondissement', 'Tribunal judiciaire de Paris - 7ème arrondissement', 'commerce', '6km', '700k', 'imagesad1/commerce5.jpg'),
(15, '16ème arrondissement', 'Tribunal judiciaire de Paris - 16ème arrondissement', 'villa', '9km', '1,4m', 'imagesad1/villa1.jpg'),
(16, '9ème arrondissement', 'Tribunal judiciaire de Paris - 9ème arrondissement', 'villa', '7km', '1,5m', 'imagesad1/villa2.jpg'),
(17, '11ème arrondissement', 'Tribunal judiciaire de Paris - 11ème arrondissement', 'villa', '20km', '1,9m', 'imagesad1/villa3.jpg'),
(18, '12ème arrondissement', 'Tribunal judiciaire de Paris - 12ème arrondissement', 'villa', '7km', '2m', 'imagesad1/villa4.jpg'),
(19, '6ème arrondissement', 'Tribunal judiciaire de Paris - 6ème arrondissement', 'villa', '20km', '2,2m', 'imagesad1/villa5.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `prices`
--

DROP TABLE IF EXISTS `prices`;
CREATE TABLE IF NOT EXISTS `prices` (
  `price` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `mdp`) VALUES
(1, 'wilfried', 'kone', 'mwil@gmail.com', '<?php    nj'),
(2, 'wilfried', 'kone', 'mwilfr@gmail.com', 'vcgfuhgyfyg'),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, 'momo', 'mimo', 'jhjjjjjjjj@jmkk', 'uhinuubub'),
(6, 'momo', 'mimo', 'jhjjjjjjjj@jmkk', 'ybyyy'),
(7, 'jnu', 'bbhbub', 'uubb@uhb', 'unuu'),
(8, 'hsqghcg', 'hdbhdb', 'euhud@hdby', 'dbdbdydbey'),
(9, 'xgfuydt', 'hvhuy', 'ydyttd@yfuy', 'hvcyfuy'),
(10, 'hwxgdsycg', 'jhdfsbchb', 'jhhjdh@dsij', 'jdshuhdu'),
(11, 'dfhfh', 'jhdzdh', 'dbdj@diudy', 'jdfhufyfgyfe'),
(12, 'hdcghdu', 'cndfh', 'dsds@djid', 'ihjdsidhf'),
(13, 'dzjf', 'erjre', 'jejrrj@fjdij', 'jejrzjrj'),
(14, 'hdfhf', 'jhffjhf', 'jbfdf@jfnef', 'hdfufh'),
(15, 'wilfried', 'kone', 'mwilfriedkone@gmail.com', '12345678'),
(16, 'yuva', 'alkama', 'yuvaalkama@gmail.com', '1234'),
(17, 'luk', 'luky', 'lukyluk@gmail.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
