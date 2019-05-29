-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 29 mai 2019 à 13:16
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
-- Base de données :  `affariet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomAdmin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailAdmin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_880E0D76F85E0677` (`username`),
  UNIQUE KEY `UNIQ_880E0D768BDC72EC` (`emailAdmin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nomAdmin`, `emailAdmin`) VALUES
(1, 'admin', '$2y$13$I3cWHkjB836ORPUZx5mtiOZ9S/U1iuJgmY6lXTt2af435TODQaVqi', 'Administrateur', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Structure de la table `annonceur`
--

DROP TABLE IF EXISTS `annonceur`;
CREATE TABLE IF NOT EXISTS `annonceur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_annonceur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num_annonceur` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_annonceur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomAnnonceur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenomAnnonceur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E795BC5EE89E2375` (`email_annonceur`),
  UNIQUE KEY `UNIQ_E795BC5EF85E0677` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `annonceur`
--

INSERT INTO `annonceur` (`id`, `username`, `email_annonceur`, `num_annonceur`, `password`, `image_annonceur`, `nomAnnonceur`, `prenomAnnonceur`, `confirmed`) VALUES
(37, 'ajelmohamed', 'ajel03@gmail.com', 55883992, '$2y$13$TGUUuuVzI7rNhlgeVC9xjOY1PE0oW7u5B1bMxPGYL3XyvM9wyVD92', 'a5158b3e302b1214c4ed4f2c27239481.jpeg', 'ajel', 'mohamed', 1),
(38, 'lamiaMessaoudi', 'Lamyyamessaoudi@gmail.com', 22347834, '$2y$13$PDbxw.J1xVEJbu7qrE/ehuF4p9dfXjGKsJBovVhblj0dlewAR9tZW', 'defaut.png', 'Messaoudi', 'Lamia', 1),
(39, 'amenichatti', 'ameni@gmail.com', 56535908, '$2y$13$JQGtirNSohl4DtsO25LfkOIj2NLxMFQUg1Q/j4ecb/JvwTcRzCo9a', '82329aba6dfec9d0e8c91fc6f505ac9c.jpeg', 'Chatti', 'Ameni', 1);

-- --------------------------------------------------------

--
-- Structure de la table `archive`
--

DROP TABLE IF EXISTS `archive`;
CREATE TABLE IF NOT EXISTS `archive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomprod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_suppression` datetime NOT NULL,
  `region` int(11) DEFAULT NULL,
  `id_annonceur` int(11) DEFAULT NULL,
  `categorie` int(11) DEFAULT NULL,
  `ville` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sousCategorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D5FC5D9CF62F176` (`region`),
  KEY `IDX_D5FC5D9C67A00079` (`id_annonceur`),
  KEY `IDX_D5FC5D9C497DD634` (`categorie`),
  KEY `IDX_D5FC5D9CED0225A2` (`sousCategorie`),
  KEY `IDX_D5FC5D9C43C3D9C3` (`ville`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomCategorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_497DD6347006D47E` (`nomCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nomCategorie`, `image`) VALUES
(0, 'Autre', 'autre.png'),
(1, 'Vêtements', 'Vetements.png'),
(6, 'Machines', 'machines.png'),
(7, 'Emploi', 'offre_emploi.png'),
(8, 'Outils', 'outils.png'),
(9, 'Usines', 'usines.png'),
(10, 'Fils', '7a09c0078a387d05dc5b7bf475d9d78c.png');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `produit` int(11) DEFAULT NULL,
  `archive` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkpi` (`produit`),
  KEY `fkai` (`archive`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `name`, `produit`, `archive`) VALUES
(11, 'b55ceb828f2e94beb2dc4cc686f92903.jpeg', 102, NULL),
(10, '6e999662407c8fc1d09e7c9548318bba.jpeg', 101, NULL),
(9, 'e619d1c802c4e193ec1dc6d226505b74.jpeg', 100, NULL),
(8, 'ba81ef056c590ae2ee3112937f3171a9.jpeg', 99, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20190414203440', '2019-04-14 20:35:30');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomprod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_annonceur` int(11) DEFAULT NULL,
  `categorie` int(11) DEFAULT NULL,
  `region` int(11) DEFAULT NULL,
  `date_ajout` datetime NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sousCategorie` int(11) DEFAULT NULL,
  `ville` int(11) DEFAULT NULL,
  `afficherNum` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_29A5EC2767A00079` (`id_annonceur`),
  KEY `IDX_29A5EC27497DD634` (`categorie`),
  KEY `IDX_29A5EC27F62F176` (`region`),
  KEY `IDX_29A5EC27ED0225A2` (`sousCategorie`),
  KEY `IDX_29A5EC2743C3D9C3` (`ville`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nomprod`, `prix`, `description`, `image`, `id_annonceur`, `categorie`, `region`, `date_ajout`, `type`, `sousCategorie`, `ville`, `afficherNum`) VALUES
(99, 'Pentalon homme', 50, 'pentalon', NULL, 37, 1, 20, '2019-05-29 11:52:20', 'Offre', 2, 241, 0),
(100, 'Pulle', 35, 'pulle homme', NULL, 37, 1, 14, '2019-05-29 12:08:59', 'Offre', 4, 132, 0),
(101, 'Robe', 150, 'Robe Soirée', NULL, 38, 1, 8, '2019-05-29 12:17:02', 'Offre', 3, 77, 0),
(102, 'Couture', 150, 'Couture', NULL, 39, 8, 4, '2019-05-29 12:58:51', 'Offre', 7, 24, 0);

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomRegion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F62F176280E8449` (`nomRegion`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`id`, `nomRegion`) VALUES
(1, 'Ariana'),
(2, 'Béja'),
(3, 'Ben Arous'),
(4, 'Bizerte'),
(5, 'Gabès'),
(6, 'Gafsa'),
(7, 'Jendouba'),
(8, 'Kairouan'),
(9, 'Kasserine'),
(10, 'Kébili'),
(13, 'La Manouba'),
(11, 'Le Kef'),
(12, 'Mahdia'),
(14, 'Médenine'),
(15, 'Monastir'),
(16, 'Nabeul'),
(17, 'Sfax'),
(18, 'Sidi Bouzid'),
(19, 'Siliana'),
(20, 'Sousse'),
(21, 'Tataouine'),
(22, 'Tozeur'),
(23, 'Tunis'),
(24, 'Zaghouan');

-- --------------------------------------------------------

--
-- Structure de la table `reglages`
--

DROP TABLE IF EXISTS `reglages`;
CREATE TABLE IF NOT EXISTS `reglages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publicite` tinyint(1) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_46E7DCF6C6E55B5` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `reglages`
--

INSERT INTO `reglages` (`id`, `publicite`, `nom`) VALUES
(2, 0, 'Horizentale'),
(3, 0, 'Verticale');

-- --------------------------------------------------------

--
-- Structure de la table `sous_categorie`
--

DROP TABLE IF EXISTS `sous_categorie`;
CREATE TABLE IF NOT EXISTS `sous_categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` int(11) DEFAULT NULL,
  `nomSousCategorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_52743D7B497DD634` (`categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `sous_categorie`
--

INSERT INTO `sous_categorie` (`id`, `categorie`, `nomSousCategorie`) VALUES
(1, 1, 'Chemise'),
(2, 1, 'Pantalon'),
(3, 1, 'Robe'),
(4, 1, 'T-Shirt'),
(6, 6, 'Machines'),
(7, 8, 'Outils'),
(8, 7, 'Emploi'),
(9, 9, 'Usines'),
(10, 10, 'Fils'),
(11, 0, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region` int(11) DEFAULT NULL,
  `nomVille` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_43C3D9C3F62F176` (`region`)
) ENGINE=InnoDB AUTO_INCREMENT=294 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `region`, `nomVille`) VALUES
(1, 2, 'Beja'),
(2, 2, 'Medjez el-Bab'),
(3, 2, 'Testour'),
(4, 2, 'Teboursouk'),
(5, 2, 'El Maagoula'),
(6, 2, 'Nefza'),
(7, 2, 'Amdoun'),
(8, 2, 'Goubellat'),
(9, 2, 'Thibar'),
(10, 3, 'Mohamedia-Fouchana'),
(11, 3, 'El Mourouj'),
(12, 3, 'Rades'),
(13, 3, 'Ben Arous'),
(14, 3, 'Hammam Lif'),
(15, 3, 'Bou Mhel el-Bassatine'),
(16, 3, 'Ezzahra'),
(17, 3, 'Hammam Chott'),
(18, 3, 'Mornag'),
(19, 3, 'Megrine'),
(20, 3, 'Khalidia'),
(21, 4, 'Bizerte'),
(22, 4, 'Menzel Bourguiba'),
(23, 4, 'Mateur'),
(24, 4, 'Ras Jebel'),
(25, 4, 'Menzel Jemil'),
(26, 4, 'Tinja'),
(27, 4, 'Menzel Abderrahmane'),
(28, 4, 'El Alia'),
(29, 4, 'Metline'),
(30, 4, 'Raf Raf'),
(31, 4, 'Sejnane'),
(32, 4, 'Ghar El Melh'),
(33, 4, 'Aousja'),
(34, 4, 'Ghezala'),
(35, 4, 'Joumine'),
(36, 4, 'Utique'),
(37, 5, 'Gabes'),
(38, 5, 'El Hamma'),
(39, 5, 'Ghannouch'),
(40, 5, 'Chenini Nahal'),
(41, 5, 'Mareth'),
(42, 5, 'Metouia'),
(43, 5, 'Oudhref'),
(44, 5, 'Nouvelle Matmata'),
(45, 5, 'Zarat'),
(46, 5, 'Matmata'),
(47, 5, 'Menzel El Habib'),
(48, 6, 'Gafsa'),
(49, 6, 'Metlaoui'),
(50, 6, 'El Ksar'),
(51, 6, 'Redeyef'),
(52, 6, 'Moulares'),
(53, 6, 'El Guettar'),
(54, 6, 'Mdhilla'),
(55, 6, 'Sened'),
(56, 6, 'Belkhir'),
(57, 6, 'Sidi Aich'),
(58, 7, 'Jendouba'),
(59, 7, 'Bou Salem'),
(60, 7, 'Tabarka'),
(61, 7, 'Ghardimaou'),
(62, 7, 'Ain Draham'),
(63, 7, 'Fernana'),
(64, 7, 'Oued Meliz'),
(65, 7, 'Beni MTir'),
(66, 8, 'Kairouan'),
(67, 8, 'Hajeb El Ayoun'),
(68, 8, 'Oueslatia'),
(69, 8, 'Haffouz'),
(70, 8, 'Sbikha'),
(71, 8, 'Bou Hajla'),
(72, 8, 'Nasrallah'),
(73, 8, 'Menzel Mehiri'),
(74, 8, 'El Alaa'),
(75, 8, 'Chebika'),
(76, 8, 'Ain Djeloula'),
(77, 8, 'Echrarda'),
(78, 9, 'Kasserine'),
(79, 9, 'Feriana'),
(80, 9, 'Sbeitla'),
(81, 9, 'Thala'),
(82, 9, 'Foussana'),
(83, 9, 'Thelepte'),
(84, 9, 'Sbiba'),
(85, 9, 'Majel Bel Abbes'),
(86, 9, 'Jedelienne'),
(87, 9, 'Haidra'),
(88, 9, 'El Ayoun'),
(89, 9, 'Ezzouhour'),
(90, 9, 'Hassi El Ferid'),
(91, 10, 'Kebili'),
(92, 10, 'Douz'),
(93, 10, 'Souk Lahad'),
(94, 10, 'Jemna'),
(95, 10, 'Faouar'),
(96, 1, 'Ettadhamen-Mnihla'),
(97, 1, 'Ariana'),
(98, 1, 'Raoued'),
(99, 1, 'Kalaat el-Andalous'),
(100, 1, 'Sidi Thabet'),
(101, 13, 'Douar Hicher'),
(102, 13, 'Oued Ellil'),
(103, 13, 'Manouba'),
(104, 13, 'Djedeida'),
(105, 13, 'Tebourba'),
(106, 13, 'Den Den'),
(107, 13, 'Mornaguia'),
(108, 13, 'Borj El Amri'),
(109, 13, 'El Batan'),
(110, 12, 'Mahdia'),
(111, 12, 'Ksour Essef'),
(112, 12, 'Chebba'),
(113, 12, 'El Jem'),
(114, 12, 'Rejiche'),
(115, 12, 'Sidi Alouane'),
(116, 12, 'Kerker'),
(117, 12, 'El Bradaa'),
(118, 12, 'Mellouleche'),
(119, 12, 'Chorbane'),
(120, 12, 'Essouassi'),
(121, 12, 'Ouled Chamekh'),
(122, 12, 'Bou Merdes'),
(123, 12, 'Hebira'),
(124, 12, 'Hkaima'),
(125, 12, 'Hkaima'),
(126, 12, 'Sidi Zid'),
(127, 12, 'Tlelsa'),
(128, 12, 'Zelba'),
(129, 14, 'Djerba - Houmt Souk'),
(130, 14, 'Zarzis'),
(131, 14, 'Medenine'),
(132, 14, 'Ben Gardane'),
(133, 14, 'Djerba - Midoun'),
(134, 14, 'Djerba - Ajim'),
(135, 14, 'Sidi Makhlouf'),
(136, 14, 'Beni Khedache'),
(137, 15, 'Monastir'),
(138, 15, 'Moknine'),
(139, 15, 'Jemmal'),
(140, 15, 'Ksar Hellal'),
(141, 15, 'Teboulba'),
(142, 15, 'Ouerdanine'),
(143, 15, 'Sahline Mootmar'),
(144, 15, 'Bekalta'),
(145, 15, 'Zeramdine'),
(146, 15, 'Bembla'),
(147, 15, 'Bennane-Bodheur'),
(148, 15, 'Ksibet el-Mediouni'),
(149, 15, 'Sayada'),
(150, 15, 'Menzel Hayet'),
(151, 15, 'Menzel Ennour'),
(152, 15, 'Khniss'),
(153, 15, 'Beni Hassen'),
(154, 15, 'Menzel Kamel'),
(155, 15, 'Sidi Ameur'),
(156, 15, 'Amiret Hajjaj'),
(157, 15, 'Touza'),
(158, 15, 'Zaouiet Kontoch'),
(159, 15, 'Amiret Touazra'),
(160, 15, 'Bouhjar'),
(161, 15, 'Lamta'),
(162, 15, 'Amiret El Fhoul'),
(163, 15, 'El Ghnada'),
(164, 15, 'El Masdour'),
(165, 15, 'Sidi Bennour'),
(166, 15, 'Cherahil'),
(167, 15, 'Menzel Fersi'),
(168, 16, 'Nabeul'),
(169, 16, 'Hammamet'),
(170, 16, 'Kelibia'),
(171, 16, 'Dar Chaabane'),
(172, 16, 'Menzel Temime'),
(173, 16, 'Korba'),
(174, 16, 'Soliman	'),
(175, 16, 'Grombalia'),
(176, 16, 'Takelsa'),
(177, 16, 'Beni Khiar'),
(178, 16, 'Menzel Bouzelfa'),
(179, 16, 'Beni Khalled'),
(180, 16, 'Bou Argoub'),
(181, 16, 'El Haouaria'),
(182, 16, 'Tazarka'),
(183, 16, 'Hammam Ghezeze'),
(184, 16, 'El Maamoura'),
(185, 16, 'Zaouiet Djedidi	'),
(186, 16, 'Somaa'),
(187, 16, 'Menzel Horr'),
(188, 16, 'Azmour'),
(189, 16, 'Dar Allouch'),
(190, 16, 'El Mida'),
(191, 16, 'El Mida'),
(192, 16, 'Korbous'),
(193, 17, 'Sfax'),
(194, 17, 'Sakiet Ezzit'),
(195, 17, 'Sakiet Eddaier'),
(196, 17, 'El Ain'),
(197, 17, 'Gremda'),
(198, 17, 'Thyna'),
(199, 17, 'Chihia'),
(200, 17, 'Mahres'),
(201, 17, 'Kerkennah'),
(202, 17, 'Skhira'),
(203, 17, 'Agareb'),
(204, 17, 'El Hencha'),
(205, 17, 'Jebiniana'),
(206, 17, 'Bir Ali Ben Khalifa'),
(207, 17, 'Graiba'),
(208, 17, 'Menzel Chaker'),
(209, 17, 'El Amra'),
(210, 17, 'Aachech'),
(211, 17, 'Ennasr'),
(212, 17, 'Hadjeb'),
(213, 17, 'Hazeg Ellouza'),
(214, 17, 'Nadhour Sidi Ali Ben Abed'),
(215, 17, 'Ouabed Khazanet'),
(216, 18, 'Sidi Bouzid'),
(217, 18, 'Meknassy'),
(218, 18, 'Regueb'),
(219, 18, 'Sidi Ali Ben Aoun'),
(220, 18, 'Mezzouna'),
(221, 18, 'Menzel Bouzaiane'),
(222, 18, 'Bir El Hafey'),
(223, 18, 'Jilma'),
(224, 18, 'Cebbala Ouled Asker'),
(225, 18, 'Ouled Haffouz'),
(226, 18, 'Essaida'),
(227, 18, 'Souk Jedid'),
(228, 19, 'Siliana'),
(229, 19, 'Makthar'),
(230, 19, 'Bou Arada'),
(231, 19, 'Gaafour'),
(232, 19, 'El Krib'),
(233, 19, 'Bargou'),
(234, 19, 'Rouhia'),
(235, 19, 'Sidi Bou Rouis'),
(236, 19, 'El Aroussa'),
(237, 19, 'Kesra'),
(238, 20, 'Sousse'),
(239, 20, 'Msaken'),
(240, 20, 'Kalaa Kebira'),
(241, 20, 'Hammam Sousse'),
(242, 20, 'Kalaa Seghira'),
(243, 20, 'Akouda'),
(244, 20, 'Zaouiet Sousse'),
(245, 20, 'Ezzouhour'),
(246, 20, 'Messaadine'),
(247, 20, 'Ksibet Thrayet'),
(248, 20, 'Enfida'),
(249, 20, 'Sidi Bou Ali'),
(250, 20, 'Bouficha'),
(251, 20, 'Hergla'),
(252, 20, 'Kondar'),
(253, 20, 'Sidi El Hani'),
(254, 21, 'Tataouine'),
(255, 21, 'Ghomrassen'),
(256, 21, 'Bir Lahmar'),
(257, 21, 'Remada'),
(258, 21, 'Dehiba'),
(259, 21, 'Smar'),
(260, 22, 'Tozeur'),
(261, 22, 'Nefta'),
(262, 22, 'Degache'),
(263, 22, 'El Hamma du Jerid'),
(264, 22, 'Hazoua'),
(265, 22, 'Tamerza	'),
(266, 23, 'Tunis'),
(267, 23, 'Sidi Hassine'),
(268, 23, 'La Marsa'),
(269, 23, 'Le Kram'),
(270, 23, 'Le Bardo'),
(271, 23, 'La Goulette'),
(272, 23, 'Carthage'),
(273, 23, 'Sidi Bou Said'),
(274, 24, 'Zaghouan'),
(275, 24, 'El Fahs'),
(276, 24, 'Zriba'),
(277, 24, 'Bir Mcherga'),
(278, 24, 'Nadhour'),
(279, 24, 'Djebel Oust'),
(280, 24, 'Djebel Oust'),
(281, 24, 'Saouaf'),
(282, 11, 'Le Kef'),
(283, 11, 'Tajerouine'),
(284, 11, 'Dahmani'),
(285, 11, 'Sers'),
(286, 11, 'Jerissa'),
(287, 11, 'Kalaat Senan'),
(288, 11, 'Sakiet Sidi Youssef'),
(289, 11, 'El Ksour'),
(290, 11, 'Nebeur'),
(291, 11, 'Kalaat Khasba'),
(292, 11, 'Touiref'),
(293, 11, 'Menzel Salem');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `archive`
--
ALTER TABLE `archive`
  ADD CONSTRAINT `FK_D5FC5D9C43C3D9C3` FOREIGN KEY (`ville`) REFERENCES `ville` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D5FC5D9C497DD634` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`id`),
  ADD CONSTRAINT `FK_D5FC5D9C67A00079` FOREIGN KEY (`id_annonceur`) REFERENCES `annonceur` (`id`),
  ADD CONSTRAINT `FK_D5FC5D9CED0225A2` FOREIGN KEY (`sousCategorie`) REFERENCES `sous_categorie` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D5FC5D9CF62F176` FOREIGN KEY (`region`) REFERENCES `region` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_29A5EC2743C3D9C3` FOREIGN KEY (`ville`) REFERENCES `ville` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_29A5EC27497DD634` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_29A5EC2767A00079` FOREIGN KEY (`id_annonceur`) REFERENCES `annonceur` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_29A5EC27ED0225A2` FOREIGN KEY (`sousCategorie`) REFERENCES `sous_categorie` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_29A5EC27F62F176` FOREIGN KEY (`region`) REFERENCES `region` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  ADD CONSTRAINT `FK_52743D7B497DD634` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `FK_43C3D9C3F62F176` FOREIGN KEY (`region`) REFERENCES `region` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
