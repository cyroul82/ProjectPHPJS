-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 05 Juillet 2017 à 11:05
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db-cns`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `ID_CLIENT` int(11) NOT NULL,
  `CA` float DEFAULT NULL,
  `EFFECTIF` int(11) DEFAULT NULL,
  `RAISON_SOCIALE` varchar(32) NOT NULL,
  `CODE_POSTAL` char(5) NOT NULL,
  `TELEPHONE` varchar(30) NOT NULL,
  `NOM_NATURE` varchar(25) DEFAULT NULL,
  `TYPE_SOCIETE` varchar(25) NOT NULL,
  `ADRESSE_DU_CLIENT` varchar(255) DEFAULT NULL,
  `VILLE` varchar(255) DEFAULT NULL,
  `COMMENTAIRE` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`ID_CLIENT`, `CA`, `EFFECTIF`, `RAISON_SOCIALE`, `CODE_POSTAL`, `TELEPHONE`, `NOM_NATURE`, `TYPE_SOCIETE`, `ADRESSE_DU_CLIENT`, `VILLE`, `COMMENTAIRE`) VALUES
(64, 100000, 17, 'IBM', '44200', '06 06 06 31 41', 'ancienne', 'prive', '25 avenue du ruisseau', 'NANTES', 'Client a retravailler!'),
(63, 10000000, 2, 'AIRFRANCE', '06200', '06 45 24 84 03', 'principale', 'prive', 'Avenue de la Floride', 'SOPHIA ANTIPOLIS', 'Sans Commentaires'),
(67, 10000000, 4, 'MARLBORO', '06200', '05 87 65 98 54', 'principale', 'prive', '18 Rue de la californie', 'NICE', 'arrêter de fumer provoque notre faillite'),
(60, 530, 15, 'SAS LE PRINTEMPS', '06300', '04 92 25 25 85', 'secondaire', 'public', '150 Route des Alpes', 'BISCAROS', ''),
(59, 16542, 100, 'CLIENTA', '75001', '06 06 06 31 41', 'principale', 'prive', '12 rue du Printemps', 'PARIS', 'belle soci&eacute;t&eacute;, Client &agrave; travailler'),
(66, 12544.2, 17, 'SAS JOHNSON', '59500', '08 05 04 12 12', 'secondaire', 'prive', '150 rue de l\'église', 'DUNKERQUE', 'Futur Client'),
(126, 254669, 6, 'SARL AGMELEC', '83700', '06 45 24 84 03', 'principale', 'prive', '159 Avenue de verdun', 'SAINT RAPHAEL', ''),
(55, 1800000, 50, 'PARFUMERIE ROBERT', '83700', '06 45 24 84 05', 'principale', 'prive', '159 Avenue de verdun', 'GRASSE', ''),
(56, 20.5, 1, 'AFPA2', '06800', '06 42 48 44 55', 'principale', 'prive', '244 Route de Turin', 'NICE', ''),
(65, 2566980, 251, 'THALES', '06400', '06 45 24 84 03', 'principale', 'prive', '159 Avenue de verdun', 'CANNES', 'space time&quot;'),
(123, 254669, 6, 'SARL AGMELEC', '83700', '06 45 24 84 03', 'principale', 'prive', '159 Avenue de verdun', 'SAINT RAPHAEL', ''),
(124, 10000000, 6, 'RAISONSOCIALE', '04400', '06 06 06 31 41', 'principale', 'prive', '11 rue du Soleil', 'AVIGNON', ''),
(125, 211155, 6, 'À DÉTRUIRE', '83300', '06 68 17 41 33', 'principale', 'prive', '756 Quartier des Faïsses Orientales', 'DRAGUIGNAN', ''),
(99, 12546, 6, 'RATNCO', '83700', '06 45 24 84 03', 'principale', 'prive', '159 Avenue de verdun', 'SAINT RAPHAEL', ''),
(102, 211155, 6, 'VLAD &AMP; CO', '83300', '06 68 17 41 33', 'principale', 'prive', '756 Quartier des Faïsses Orientales', 'DRAGUIGNAN', 'sf'),
(97, 254669, 6, 'SARL AGMELEC', '83700', '06 45 24 84 03', 'principale', 'prive', '159 Avenue de verdun', 'SAINT RAPHAEL', '');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `ID_CONTACT_CLIENT` int(11) NOT NULL,
  `ID_CLIENT` int(11) NOT NULL,
  `NOM_CONTACT` varchar(32) NOT NULL,
  `PRENOM_CONTACT` varchar(32) NOT NULL,
  `TEL_CONTACT` varchar(15) NOT NULL,
  `FONCTION_CONTACT` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contacts`
--

INSERT INTO `contacts` (`ID_CONTACT_CLIENT`, `ID_CLIENT`, `NOM_CONTACT`, `PRENOM_CONTACT`, `TEL_CONTACT`, `FONCTION_CONTACT`) VALUES
(34, 56, 'HERBIÉ', 'Joseph', '02 56 85 42 36', 'RESPONSABLE MARKETING'),
(33, 56, 'GRINGER', 'Léa', '04 15 74 56 56', 'HÔTESSE D\'ACCEUIL'),
(37, 59, 'GODIN', 'Julie', '06 68 17 41 33 ', 'VICE-PRÉSIDENT DU CONSEIL'),
(48, 59, 'MINZANI', 'Julien', '05 23 69 87 71', 'DIRECTEUR PAO'),
(39, 63, 'RATEAU', 'Bernard', '07 56 96 32 52 ', 'AGENT COMMERCIAL'),
(40, 63, 'GRAND', 'Michel', '08 65 32 69 42 ', 'RESPONSABLE RH'),
(35, 56, 'GÉRARD-LAVOISIER', 'Francis', '04 94 01 54 78', 'VICE-PRÉSIDENT DU CONSEIL'),
(16, 51, 'WINTZ', 'BIBIANA', '08 50 60 70 17', 'CHEF DE PROJET'),
(17, 63, 'VIVIANI', 'JEREMI', '08 17 17 12 15', 'PROFESSEUR'),
(42, 75, 'KÉLÉTAONA', 'Nicolas', '06 06 06 31 41 ', 'BIG BOSS'),
(49, 56, 'MEVEL', 'Virginie', '06 50 50 50 50', 'PROF'),
(47, 69, 'KÉLÉTAONA', 'Sems', '06 68 17 41 33', 'VICE-PRÉSIDENT DU CONSEIL');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `MAIL_USER` varchar(30) CHARACTER SET utf8 NOT NULL,
  `PWD_USER` varchar(20) CHARACTER SET utf8 NOT NULL,
  `FIRSTNAME` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `USERGROUP` int(11) NOT NULL DEFAULT '0',
  `ID_USER` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`MAIL_USER`, `PWD_USER`, `FIRSTNAME`, `USERGROUP`, `ID_USER`) VALUES
('cyril.rat@gmail.com', 'cyril', 'Cyril', 1, 1),
('sems@live.fr', 'sems', 'keletaona', 2, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID_CLIENT`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`ID_CONTACT_CLIENT`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `ID_CLIENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `ID_CONTACT_CLIENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
