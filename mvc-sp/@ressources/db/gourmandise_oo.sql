-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 28 déc. 2020 à 18:29
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gourmandise_oo`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `codec` int(11) NOT NULL COMMENT 'Identifiant du client',
  `nom` varchar(35) NOT NULL COMMENT 'Nom et Prénom',
  `adresse` varchar(50) DEFAULT NULL COMMENT 'Adresse du client',
  `cp` varchar(5) NOT NULL COMMENT 'Code postal ',
  `ville` varchar(25) NOT NULL COMMENT 'Ville',
  `telephone` varchar(25) DEFAULT NULL COMMENT 'Téléphone principal du client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`codec`, `nom`, `adresse`, `cp`, `ville`, `telephone`) VALUES
(17, 'TARINAUX Lucien', '12 rue de la Justice', '51100', 'REIMS', '03.26.25.48.87'),
(46, 'MARTUSE Marie', '103 avenue Lear', '51100', 'REIMS', '03.26.03.25.26'),
(47, 'RABIN Sandrine', '21 rue de la Méditerranée', '51100', 'REIMS', '03.26.14.15.25'),
(48, 'SILLARD Laurence', '15 rue Pasentiers', '51100', 'REIMS', '03.26.11.11.25'),
(49, 'COTOY Sylvie', '12 rue des écus', '51100', 'REIMS', '03.26.10.25.75'),
(50, 'HELLOU Bernard', '21 rue de la Méditerranée', '51100', 'REIMS', '03.26.12.25.42'),
(51, 'HENTION Martine', '50 allÃ©e des bons enfants', '51100', 'REIMS', '03.26.12.25.86'),
(52, 'SIBAT Evelyne', '14 rue de la Baltique', '51100', 'REIMS', '03.26.12.23.33'),
(53, 'MARIN Dominique', '24 rue de la Baltique', '51100', 'REIMS', '03.26.10.10.23'),
(54, 'DURDUX Monique', '15 allée des Béarnais', '51150', 'VITRY LE FRANCOIS', '03.26.42.42.33'),
(55, 'CANILLE Walter', '14 rue Lanterneau', '51100', 'REIMS', '03.26.12.12.87'),
(56, 'BOUQUET Antoinette', '1, rue de la Méditerranée', '51140', 'ROMAIN', '03.26.78.89.54'),
(57, 'GAUTON Nadine', '5 place des Oiseaux', '51200', 'FISMES', '03.26.53.56.55'),
(58, 'LEGROS Christian', '18 place des Oiseaux', '51200', 'FISMES', '03.26.44.55.66'),
(59, 'DUMOITIERS Lucille', '12 place Centrale', '02320', 'LONGUEVAL', '03.26.86.43.25'),
(60, 'BOUCHE Carole', '4, rue Brulé', '51200', 'FISMES', '03.26.33.96.85');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `numero` int(11) NOT NULL COMMENT 'Num?ro de la commande',
  `codev` int(11) NOT NULL COMMENT 'Indiquer le vendeur',
  `codec` int(11) NOT NULL COMMENT 'Indiquer le client',
  `date_livraison` datetime DEFAULT NULL COMMENT 'Indiquer la date de livraison',
  `date_commande` datetime DEFAULT NULL COMMENT 'Indiquer la date de commande',
  `total_ht` double DEFAULT '0' COMMENT 'Total facture hors taxes',
  `total_tva` double DEFAULT '0' COMMENT 'Total tva',
  `etat` tinyint(3) UNSIGNED DEFAULT '0' COMMENT '0 stock non actualisé 1 stock MAJ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`numero`, `codev`, `codec`, `date_livraison`, `date_commande`, `total_ht`, `total_tva`, `etat`) VALUES
(10178, 15, 47, '1998-09-05 00:00:00', '2008-09-05 00:00:00', 177, 9.75, 1),
(10179, 15, 47, '1998-10-13 00:00:00', '2008-10-13 00:00:00', 192, 10.5, 1),
(10180, 15, 48, '1998-10-10 00:00:00', '2008-10-10 00:00:00', 98, 5.4, 1),
(10181, 15, 49, '1998-10-11 00:00:00', '2008-10-11 00:00:00', 175, 9.6, 1),
(10182, 15, 50, '1998-10-11 00:00:00', '2008-10-11 00:00:00', 116, 6.4, 1),
(10183, 15, 51, '1998-10-11 00:00:00', '2008-10-11 00:00:00', 118, 6.5, 1),
(10184, 15, 52, '1998-10-12 00:00:00', '2008-10-12 00:00:00', 102, 5.6, 1),
(10185, 15, 53, '1998-10-12 00:00:00', '2008-10-12 00:00:00', 19, 1.05, 1),
(10186, 15, 54, '1998-10-10 00:00:00', '2008-10-10 00:00:00', 101, 5.555, 1),
(10187, 15, 55, '1998-10-10 00:00:00', '2008-10-10 00:00:00', 65, 3.575, 1),
(10188, 17, 56, '1998-10-12 00:00:00', '2008-10-12 00:00:00', 121, 6.655, 1),
(10189, 17, 57, '1998-10-10 00:00:00', '2008-10-10 00:00:00', 110, 6.05, 1),
(10190, 17, 58, '1998-10-13 00:00:00', '2008-10-13 00:00:00', 123, 6.765, 1),
(10191, 17, 59, '1998-10-13 00:00:00', '2008-10-13 00:00:00', 107.5, 5.9125, 1),
(10192, 17, 60, '1998-11-10 00:00:00', '2008-11-10 00:00:00', 237, 13.035, 1);

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `numero` int(11) NOT NULL COMMENT 'Numéro de commande',
  `numero_ligne` smallint(6) NOT NULL COMMENT 'Numéro de ligne',
  `reference` int(11) NOT NULL COMMENT 'Référence du produit',
  `quantite_demandee` smallint(6) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`numero`, `numero_ligne`, `reference`, `quantite_demandee`) VALUES
(10178, 1, 84015, 1),
(10178, 2, 84025, 1),
(10178, 3, 84031, 1),
(10178, 4, 84036, 1),
(10178, 5, 84004, 1),
(10178, 6, 84053, 1),
(10178, 7, 84042, 1),
(10179, 1, 84031, 1),
(10179, 2, 84032, 1),
(10179, 3, 84037, 1),
(10179, 4, 84002, 1),
(10179, 5, 84054, 1),
(10179, 6, 84057, 1),
(10179, 7, 81007, 2),
(10180, 1, 84053, 1),
(10180, 2, 84055, 1),
(10180, 3, 83016, 1),
(10181, 1, 84020, 1),
(10181, 2, 84026, 1),
(10181, 3, 84045, 1),
(10181, 4, 84002, 2),
(10181, 5, 84012, 2),
(10181, 6, 84054, 1),
(10182, 1, 84034, 1),
(10182, 2, 84012, 1),
(10182, 3, 84055, 1),
(10182, 4, 84057, 1),
(10183, 1, 84025, 1),
(10183, 2, 84027, 1),
(10183, 3, 84029, 1),
(10183, 4, 84039, 1),
(10183, 5, 84013, 1),
(10184, 1, 84025, 1),
(10184, 2, 84031, 2),
(10184, 3, 84004, 1),
(10185, 1, 84002, 1),
(10186, 1, 81016, 1),
(10186, 2, 83002, 2),
(10187, 1, 84015, 1),
(10187, 2, 84010, 1),
(10187, 3, 84011, 1),
(10188, 1, 81016, 2),
(10188, 2, 84052, 1),
(10188, 3, 81004, 1),
(10189, 1, 81017, 1),
(10189, 2, 84016, 1),
(10189, 3, 84031, 1),
(10189, 4, 84033, 1),
(10190, 1, 83010, 1),
(10190, 2, 84015, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `reference` int(11) NOT NULL COMMENT 'Référence du produit',
  `designation` varchar(30) NOT NULL COMMENT 'Désignation du produit',
  `quantite` int(11) DEFAULT '0' COMMENT 'Poids du produit ou nombre de pièces',
  `descriptif` varchar(1) NOT NULL DEFAULT 'G' COMMENT 'Unité de mesure G pour gramme et P pour Pièce',
  `prix_unitaire_HT` double DEFAULT '0' COMMENT 'Prix unitaire hors taxes',
  `stock` smallint(6) DEFAULT '0' COMMENT 'Etat du stock',
  `poids_piece` int(11) DEFAULT '0' COMMENT 'Poids d''une pièce en grammes pour les articles vendus par pièce'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`reference`, `designation`, `quantite`, `descriptif`, `prix_unitaire_HT`, `stock`, `poids_piece`) VALUES
(81004, 'FEU DE JOIE LIQUEUR ASSORT.', 500, 'G', 23, 50, 0),
(81007, 'TENDRE FRUIT', 500, 'G', 18, 120, 0),
(81015, 'CARACAO', 500, 'G', 24.5, 50, 0),
(81016, 'COKTAIL', 500, 'G', 33, 40, 0),
(81017, 'ORFIN', 500, 'G', 32, 40, 0),
(83002, 'CARRE PECTO', 500, 'G', 29, 40, 0),
(83004, 'ZAN ALESAN', 25, 'P', 15, 50, 20),
(83010, 'PATES GRISES', 500, 'G', 35, 100, 0),
(83016, 'CARAMEL AU LAIT', 500, 'G', 20, 100, 0),
(83017, 'VIOLETTE TRADITION', 500, 'G', 25, 100, 0),
(84002, 'SUCETTE BOULE FRUIT', 25, 'P', 14, 100, 40),
(84004, 'SUCETTE BOULE POP', 25, 'P', 21, 50, 40),
(84010, 'CARAMBAR', 40, 'P', 18, 20, 15),
(84011, 'CARANOUGA', 40, 'P', 18, 100, 15),
(84012, 'CARAMBAR FRUIT', 40, 'P', 19.5, 100, 0),
(84013, 'CARAMBAR COLA', 40, 'P', 18, 50, 15),
(84015, 'SOURIS REGLISSE', 500, 'G', 24, 50, 0),
(84016, 'SOURIS CHOCO', 500, 'G', 24, 50, 0),
(84019, 'SCHTROUMPFS VERTS', 500, 'G', 24, 50, 0),
(84020, 'CROCODILE', 500, 'G', 21, 50, 0),
(84022, 'PERSICA', 500, 'G', 28, 20, 0),
(84025, 'COLA CITRIQUE', 500, 'G', 21, 50, 0),
(84026, 'COLA LISSE', 500, 'G', 25, 50, 0),
(84027, 'BANANE', 1000, 'G', 23, 20, 0),
(84029, 'OEUF SUR LE PLAT', 500, 'G', 25, 20, 0),
(84030, 'FRAISIBUS', 500, 'G', 25, 50, 0),
(84031, 'FRAISE TSOIN-TSOIN', 500, 'G', 25, 40, 0),
(84032, 'METRE REGLISSE ROULE', 500, 'G', 19, 50, 0),
(84033, 'MAXI COCOBAT', 1000, 'G', 19, 20, 0),
(84034, 'DENTS VAMPIRE', 500, 'G', 22, 50, 0),
(84036, 'LANGUE COLA CITRIQUE', 500, 'G', 21, 40, 0),
(84037, 'OURSON CANDI', 1000, 'G', 21, 50, 0),
(84039, 'SERPENT ACIDULE', 500, 'G', 21, 20, 0),
(84042, 'TETINE CANDI', 500, 'G', 20, 40, 0),
(84045, 'COLLIER PECCOS', 15, 'P', 21, 50, 50),
(84052, 'TWIST ASSORTIS', 500, 'G', 22, 50, 0),
(84053, 'OURSON GUIMAUVE', 500, 'G', 35, 10, 0),
(84054, 'BOULE COCO MULER', 500, 'G', 34, 10, 0),
(84055, 'COCOMALLOW', 500, 'G', 33, 10, 0),
(84057, 'CRIC-CRAC', 500, 'G', 33, 10, 0);

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

CREATE TABLE `vendeur` (
  `codev` int(11) NOT NULL COMMENT 'Identifiant du vendeur',
  `prenom` varchar(35) NOT NULL COMMENT 'Prénom du vendeur',
  `nom` varchar(35) NOT NULL COMMENT 'Nom et Prénom',
  `adresse` varchar(50) DEFAULT NULL COMMENT 'Adresse du vendeur',
  `cp` varchar(5) NOT NULL COMMENT 'Code postal',
  `ville` varchar(25) NOT NULL COMMENT 'Ville',
  `telephone` varchar(25) DEFAULT NULL COMMENT 'Téléphone principal du vendeur',
  `login` varchar(255) NOT NULL COMMENT 'Login du vendeur',
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`codev`, `prenom`, `nom`, `adresse`, `cp`, `ville`, `telephone`, `login`, `motdepasse`) VALUES
(15, 'Sylvain', 'FILLARD ', '77 rue du l\'Adriatique', '51100', 'REIMS', '03.26.12.25.25', 'sfillard', 'cbe7613845cfcd815bd481b8c625c7c8'),
(17, 'Marc', 'BAUDOT', '16 rue de Reims', '51000', 'CHALONS EN CHAMPAGNE', '03.26.10.58.59', 'mbaudot', 'cbe7613845cfcd815bd481b8c625c7c8');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`codec`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `clientcommande` (`codec`),
  ADD KEY `vendeurcommande` (`codev`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD PRIMARY KEY (`numero`,`numero_ligne`),
  ADD KEY `commandeligne_commande` (`numero`),
  ADD KEY `produitligne_commande` (`reference`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`reference`);

--
-- Index pour la table `vendeur`
--
ALTER TABLE `vendeur`
  ADD PRIMARY KEY (`codev`),
  ADD UNIQUE KEY `vendeur_login_uindex` (`login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `codec` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant du client', AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Num?ro de la commande', AUTO_INCREMENT=10193;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `reference` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Référence du produit', AUTO_INCREMENT=4058;

--
-- AUTO_INCREMENT pour la table `vendeur`
--
ALTER TABLE `vendeur`
  MODIFY `codev` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant du vendeur', AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`codec`) REFERENCES `client` (`codec`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`codev`) REFERENCES `vendeur` (`codev`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `ligne_commande_ibfk_1` FOREIGN KEY (`reference`) REFERENCES `produit` (`reference`),
  ADD CONSTRAINT `ligne_commande_ibfk_2` FOREIGN KEY (`numero`) REFERENCES `commande` (`numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
