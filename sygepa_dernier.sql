-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 01 Juin 2016 à 17:50
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `sygepa`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie_mat`
--

CREATE TABLE IF NOT EXISTS `categorie_mat` (
`id` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `numero_nomenclature` int(11) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `categorie_mat`
--

INSERT INTO `categorie_mat` (`id`, `intitule`, `numero_nomenclature`, `date_creation`) VALUES
(1, 'ordinateur', 1, '2015-10-03 06:39:57'),
(2, 'souris', 2, '2015-10-03 06:39:57'),
(3, 'clavier', 1, '2015-10-03 15:23:48'),
(4, 'rallonge', 1, '2015-10-27 10:47:11'),
(5, 'imprimante', 2, '2015-10-27 10:47:11'),
(6, 'onduleur', 2, '2015-10-27 10:47:11'),
(7, 'projecteur', 3, '2015-10-27 10:47:11'),
(8, 'tableau de projection', 1, '2015-10-27 10:47:11');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE IF NOT EXISTS `demande` (
`id` int(11) NOT NULL,
  `statut` varchar(255) NOT NULL DEFAULT 'non traitée',
  `id_demandeur` int(11) NOT NULL,
  `motif` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code_demande` varchar(255) NOT NULL,
  `traite` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Contenu de la table `demande`
--

INSERT INTO `demande` (`id`, `statut`, `id_demandeur`, `motif`, `date_creation`, `code_demande`, `traite`) VALUES
(24, 'non traitée', 1, '', '2015-10-26 19:48:13', '03102015', 0),
(25, 'non traitée', 1, '', '2015-10-26 22:10:59', '03102015', 0),
(26, 'non traitée', 1, '', '2015-10-27 08:53:22', '03102015', 0),
(27, 'non traitée', 11, '', '2015-10-27 09:16:01', 'ce09/10/01', 0),
(28, 'non traitée', 11, '', '2015-10-27 10:11:09', 'ce10/10/09', 0),
(29, 'non traitée', 13, '', '2015-10-27 13:05:39', 'ce01/10/39', 0),
(30, 'non traitée', 1, '', '2015-11-12 10:49:11', 'ce10/11/11', 0),
(31, 'non traitée', 19, '', '2016-02-29 14:13:35', 'ce02/02/35', 0),
(32, 'non traitée', 19, '', '2016-03-03 17:25:40', 'ce05/03/40', 0),
(33, 'non traitée', 19, '', '2016-03-14 10:58:16', 'ce10/03/16', 0);

-- --------------------------------------------------------

--
-- Structure de la table `demande_materiel`
--

CREATE TABLE IF NOT EXISTS `demande_materiel` (
`id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `id_demande` int(11) NOT NULL,
  `caracteristiques` varchar(255) NOT NULL,
  `quantite_demande` int(11) NOT NULL DEFAULT '0',
  `quantite_disponible` int(11) NOT NULL DEFAULT '0',
  `quantite_accorde` int(11) NOT NULL DEFAULT '-1',
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Contenu de la table `demande_materiel`
--

INSERT INTO `demande_materiel` (`id`, `designation`, `id_demande`, `caracteristiques`, `quantite_demande`, `quantite_disponible`, `quantite_accorde`, `date_creation`) VALUES
(32, 'souris', 24, 'mollette, noir', 0, 0, -1, '2015-10-26 19:48:31'),
(33, 'clavier', 24, 'vert , azerty', 0, 0, -1, '2015-10-26 19:48:48'),
(34, 'souris', 25, 'molette, hp', 0, 0, -1, '2015-10-26 22:11:30'),
(35, 'ordinateur', 25, 'hp , ram 3gb', 0, 0, -1, '2015-10-26 22:11:59'),
(36, 'souris', 26, 'verte', 0, 0, -1, '2015-10-27 09:13:09'),
(37, 'ordinateur', 26, 'dell', 0, 0, -1, '2015-10-27 09:13:19'),
(38, 'souris', 27, 'fbgdbgbg', 0, 0, -1, '2015-10-27 09:16:11'),
(39, 'souris', 27, 'fbgnf,hg', 0, 0, -1, '2015-10-27 09:16:17'),
(40, 'ordinateur', 29, 'marque hp  ; 4 gb ram ', 0, 0, -1, '2015-10-27 13:06:04'),
(41, 'clavier', 29, 'type azerty', 0, 0, -1, '2015-10-27 13:06:18');

-- --------------------------------------------------------

--
-- Structure de la table `detention`
--

CREATE TABLE IF NOT EXISTS `detention` (
`id` int(11) NOT NULL,
  `id_detenteur` int(11) NOT NULL,
  `id_materiel` int(11) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=142 ;

--
-- Contenu de la table `detention`
--

INSERT INTO `detention` (`id`, `id_detenteur`, `id_materiel`, `date_creation`) VALUES
(128, 1, 132, '2016-06-01 12:34:11'),
(129, 1, 133, '2016-06-01 12:34:11'),
(130, 1, 134, '2016-06-01 12:34:11'),
(131, 1, 137, '2016-06-01 12:34:12'),
(132, 18, 135, '2016-06-01 12:35:58'),
(133, 18, 136, '2016-06-01 12:35:58'),
(134, 18, 26, '2016-06-01 14:19:00'),
(135, 18, 29, '2016-06-01 14:19:01'),
(136, 16, 123, '2016-06-01 15:32:05'),
(137, 19, 126, '2016-06-01 15:34:17'),
(138, 19, 130, '2016-06-01 15:34:17'),
(139, 17, 139, '2016-06-01 15:35:03'),
(140, 17, 134, '2016-06-01 15:35:03'),
(141, 16, 128, '2016-06-01 17:24:52');

-- --------------------------------------------------------

--
-- Structure de la table `entree`
--

CREATE TABLE IF NOT EXISTS `entree` (
`id` int(11) NOT NULL,
  `code_entree` varchar(255) NOT NULL,
  `user` int(11) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=118 ;

--
-- Contenu de la table `entree`
--

INSERT INTO `entree` (`id`, `code_entree`, `user`, `date_creation`) VALUES
(41, '03102015', 2, '2015-10-26 18:29:43'),
(42, '111222333', 10, '2015-10-26 18:34:56'),
(43, '111222333', 12, '2015-10-26 22:15:05'),
(44, '111222333', 16, '2016-01-12 08:36:56'),
(45, '111222333', 16, '2016-01-12 09:02:19'),
(46, '111222333', 16, '2016-01-12 09:04:26'),
(47, '111222333', 16, '2016-01-12 09:17:41'),
(48, '111222333', 16, '2016-01-12 09:30:55'),
(49, '111222333', 16, '2016-01-12 09:42:59'),
(50, '111222333', 16, '2016-01-12 09:57:03'),
(51, '111222333', 16, '2016-01-12 11:21:24'),
(52, '111222333', 18, '2016-01-12 11:39:52'),
(53, '111222333', 18, '2016-01-12 11:43:12'),
(54, '111222333', 19, '2016-01-12 13:33:08'),
(55, '111222333', 19, '2016-01-12 13:41:21'),
(56, '111222333', 19, '2016-01-13 11:02:34'),
(57, '111222333', 19, '2016-01-14 10:28:36'),
(58, '111222333', 19, '2016-01-17 22:48:42'),
(59, '111222333', 19, '2016-01-18 12:09:47'),
(60, '111222333', 19, '2016-01-19 09:01:22'),
(61, '111222333', 19, '2016-01-19 09:26:07'),
(62, '111222333', 19, '2016-01-19 09:53:33'),
(63, '111222333', 19, '2016-01-19 09:58:36'),
(64, '111222333', 19, '2016-01-19 10:22:57'),
(65, '111222333', 19, '2016-01-19 10:54:17'),
(66, '111222333', 19, '2016-01-19 10:57:27'),
(67, '111222333', 19, '2016-01-19 10:57:58'),
(68, '111222333', 19, '2016-01-19 10:58:58'),
(69, '111222333', 19, '2016-01-19 10:59:49'),
(70, '111222333', 19, '2016-01-19 11:01:28'),
(71, '111222333', 19, '2016-01-19 14:44:54'),
(72, '111222333', 19, '2016-01-19 15:11:24'),
(73, '111222333', 19, '2016-01-19 22:57:51'),
(74, '111222333', 19, '2016-01-20 07:27:15'),
(75, '111222333', 19, '2016-01-20 08:00:44'),
(76, '111222333', 19, '2016-01-21 14:02:56'),
(77, '111222333', 19, '2016-01-25 12:07:18'),
(78, '111222333', 19, '2016-01-25 13:09:14'),
(79, '111222333', 19, '2016-01-25 13:09:37'),
(80, '111222333', 19, '2016-01-25 18:09:46'),
(81, '111222333', 19, '2016-01-26 11:25:57'),
(82, '111222333', 19, '2016-01-28 10:10:39'),
(83, '111222333', 19, '2016-01-28 18:09:13'),
(84, '111222333', 19, '2016-02-02 10:09:26'),
(85, '111222333', 19, '2016-02-02 12:43:43'),
(86, '111222333', 19, '2016-02-03 12:08:08'),
(87, '111222333', 19, '2016-02-03 12:47:01'),
(88, '111222333', 19, '2016-02-04 09:19:33'),
(89, '111222333', 19, '2016-02-04 10:01:23'),
(90, '111222333', 19, '2016-02-04 11:37:54'),
(91, '111222333', 19, '2016-02-08 11:11:12'),
(92, '111222333', 19, '2016-02-09 23:11:42'),
(93, '111222333', 19, '2016-02-12 09:52:16'),
(94, '111222333', 19, '2016-02-14 07:32:06'),
(95, '111222333', 19, '2016-02-19 19:21:33'),
(96, '111222333', 19, '2016-02-23 01:36:41'),
(97, '111222333', 19, '2016-02-24 10:26:25'),
(98, '111222333', 19, '2016-02-24 11:51:28'),
(99, '111222333', 19, '2016-02-24 14:09:31'),
(100, '111222333', 19, '2016-02-24 14:14:16'),
(101, '111222333', 19, '2016-02-24 14:17:04'),
(102, '111222333', 19, '2016-02-24 14:21:01'),
(103, '111222333', 19, '2016-02-24 14:27:05'),
(104, '111222333', 19, '2016-02-24 14:33:57'),
(105, '111222333', 19, '2016-02-25 09:25:55'),
(106, '111222333', 19, '2016-02-25 12:26:35'),
(107, '111222333', 19, '2016-02-25 12:29:07'),
(108, '111222333', 19, '2016-02-25 12:38:14'),
(109, '111222333', 19, '2016-02-25 23:25:06'),
(110, '111222333', 19, '2016-02-26 10:47:55'),
(111, '111222333', 19, '2016-02-27 20:32:40'),
(112, '111222333', 19, '2016-02-29 13:10:06'),
(113, '111222333', 19, '2016-03-17 15:19:23'),
(114, '111222333', 19, '2016-03-21 14:03:45'),
(115, '111222333', 19, '2016-03-28 13:24:03'),
(116, '111222333', 19, '2016-05-18 13:33:33'),
(117, '111222333', 19, '2016-06-01 12:05:26');

-- --------------------------------------------------------

--
-- Structure de la table `entree_materiel`
--

CREATE TABLE IF NOT EXISTS `entree_materiel` (
`id` int(11) NOT NULL,
  `id_entree` int(11) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `designation` varchar(255) NOT NULL,
  `caracteristique` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=229 ;

--
-- Contenu de la table `entree_materiel`
--

INSERT INTO `entree_materiel` (`id`, `id_entree`, `date_creation`, `designation`, `caracteristique`) VALUES
(45, 42, '2015-10-26 18:36:12', 'souris', 'mollette'),
(46, 42, '2015-10-26 18:36:27', 'clavier', 'azerty'),
(47, 43, '2015-10-26 22:15:34', 'ordinateur', '4 gb de ram'),
(48, 44, '2016-01-12 08:37:51', 'ordinateur', 'disque dur : 20 gb , ram 2GB'),
(49, 44, '2016-01-12 08:38:18', 'souris', 'molette'),
(50, 45, '2016-01-12 09:02:39', 'ordinateur', 'rouge'),
(51, 46, '2016-01-12 09:07:20', 'ordinateur', 'DE2E2E2E2E2E2EDZDZDZDFEF'),
(52, 47, '2016-01-12 09:23:17', 'ordinateur', 'dd: 40 GB'),
(53, 47, '2016-01-12 09:30:46', 'ordinateur', 'dvdvr'),
(54, 48, '2016-01-12 09:36:16', 'ordinateur', 'HP'),
(55, 48, '2016-01-12 09:40:19', 'ordinateur', 'zezzrre'),
(56, 48, '2016-01-12 09:40:31', 'ordinateur', 'aaaaaa'),
(57, 49, '2016-01-12 09:55:33', 'nknkln', 'cool'),
(58, 52, '2016-01-12 11:41:29', 'imprimante', 'hp lazer'),
(59, 54, '2016-01-12 13:34:12', 'projecteur', 'Marque : HP ...'),
(60, 57, '2016-01-14 12:22:54', 'designation', 'caracteristique'),
(61, 57, '2016-01-14 12:24:41', 'designation', 'caracteristique'),
(62, 57, '2016-01-14 12:31:13', '', ''),
(63, 57, '2016-01-14 12:31:13', '', ''),
(64, 57, '2016-01-14 12:32:23', '', ''),
(65, 57, '2016-01-14 12:37:03', '                    ordinateur                                                                souris                                                                clavier                                                                rallonge    ', ''),
(66, 57, '2016-01-14 12:45:32', '', ''),
(67, 57, '2016-01-14 12:46:05', '', ''),
(68, 57, '2016-01-14 12:46:39', '', ''),
(69, 57, '2016-01-14 12:48:55', 'cool', 'cool'),
(70, 57, '2016-01-14 13:48:05', 'poulet', 'ffffaaaaarrrrd'),
(71, 57, '2016-01-14 13:51:55', 'camion', 'collllllll grosssssss'),
(72, 57, '2016-01-14 13:52:23', 'mama', 'belle et grande'),
(73, 57, '2016-01-14 13:52:47', 'table', 'RONDE BLANCHE'),
(74, 57, '2016-01-14 14:00:45', 'une materiel  informatique', 'le meilleur equipement'),
(75, 59, '2016-01-18 13:44:42', 'ordi', 'nouvelle machine'),
(76, 59, '2016-01-18 13:52:01', 'copieur', 'Noir / blanc'),
(77, 59, '2016-01-18 14:06:31', 'une voiture', 'long chassi'),
(78, 59, '2016-01-18 14:28:35', '', ''),
(79, 59, '2016-01-18 14:28:37', '', ''),
(80, 59, '2016-01-18 14:37:38', 'photocopieur', '3 en 1'),
(81, 59, '2016-01-18 14:37:52', 'photocopieur', '3 en 1'),
(82, 59, '2016-01-18 14:43:36', 'television', 'ecran plat'),
(83, 59, '2016-01-18 14:48:39', 'nnnn', 'nnnnn'),
(84, 59, '2016-01-18 14:50:00', 'nnnn', 'nnnnn'),
(85, 59, '2016-01-18 14:50:03', 'nnnn', 'nnnnn'),
(86, 59, '2016-01-18 14:50:24', 'zzzzzzza', 'zzzzzzzzzzzzza'),
(87, 59, '2016-01-18 14:50:26', 'zzzzzzza', 'zzzzzzzzzzzzza'),
(88, 59, '2016-01-18 14:50:26', 'zzzzzzza', 'zzzzzzzzzzzzza'),
(89, 59, '2016-01-18 14:50:27', 'zzzzzzza', 'zzzzzzzzzzzzza'),
(90, 59, '2016-01-18 14:50:27', 'zzzzzzza', 'zzzzzzzzzzzzza'),
(91, 59, '2016-01-18 15:05:17', 'azaazazaaza', 'azazzazazaaza'),
(92, 59, '2016-01-18 15:08:24', 'azaazazaaza', 'azazzazazaaza'),
(93, 59, '2016-01-18 15:09:42', 'dernier', 'dernier'),
(94, 59, '2016-01-18 15:10:03', 'dernier', 'dernier'),
(95, 59, '2016-01-18 15:10:05', 'dernier', 'dernier'),
(96, 59, '2016-01-18 15:15:58', 'iiiiiiiiiiii', 'iiiiiiiiiiiiiii'),
(97, 59, '2016-01-18 15:16:22', 'babababa', 'bababaab'),
(98, 59, '2016-01-18 15:16:56', 'ononon', 'ononon'),
(99, 59, '2016-01-18 15:18:11', 'ononon', 'ononon'),
(100, 59, '2016-01-18 15:18:16', 'ononon', 'ononon'),
(101, 59, '2016-01-18 15:20:10', 'vvvv', 'vvvv'),
(102, 59, '2016-01-18 15:20:17', 'vvvv', 'vvvv'),
(103, 59, '2016-01-18 15:20:50', 'vvvvaaaaa', 'aaaaaaaa'),
(104, 59, '2016-01-18 15:29:41', 'edededed', 'edededed'),
(105, 59, '2016-01-18 15:34:58', 'xxxxxx', 'JFHYJFHYJFHJFV'),
(106, 59, '2016-01-18 15:36:19', 'xxxxxx', 'JFHYJFHYJFHJFV'),
(107, 59, '2016-01-18 15:38:02', '', ''),
(108, 59, '2016-01-18 15:38:25', '', ''),
(109, 60, '2016-01-19 09:25:58', 'mercedece', 'long chassi , couleur verte'),
(110, 61, '2016-01-19 09:26:40', 'toyota', 'mal arriere bousié'),
(111, 61, '2016-01-19 09:27:12', 'lamborguini', 'cooooll'),
(112, 62, '2016-01-19 09:55:32', 'chahaha', 'rouge'),
(113, 63, '2016-01-19 09:58:53', 'machine', '1ZEDFFZE'),
(114, 63, '2016-01-19 10:01:29', 'corola', 'court chassi'),
(115, 63, '2016-01-19 10:13:43', '', ''),
(116, 63, '2016-01-19 10:19:55', '', ''),
(117, 63, '2016-01-19 10:21:28', '', ''),
(118, 63, '2016-01-19 10:22:22', '', ''),
(119, 64, '2016-01-19 10:24:33', '', ''),
(120, 64, '2016-01-19 10:27:12', 'nnn', 'trtdtdtydtrf'),
(121, 64, '2016-01-19 10:29:30', '', ''),
(122, 64, '2016-01-19 10:30:51', '', ''),
(123, 64, '2016-01-19 10:31:33', '', ''),
(124, 64, '2016-01-19 10:33:22', '', ''),
(125, 64, '2016-01-19 10:37:33', '', ''),
(126, 64, '2016-01-19 10:39:31', '', ''),
(127, 64, '2016-01-19 10:39:48', '', ''),
(128, 64, '2016-01-19 10:40:11', '', ''),
(129, 64, '2016-01-19 10:40:54', '', ''),
(130, 64, '2016-01-19 10:51:40', 'vl;nvlv!vfsb', 'scvnkswbnsfwl!b'),
(131, 64, '2016-01-19 10:52:02', 'x,blh?G', ',bplsfhbLM'),
(132, 65, '2016-01-19 10:56:45', '', ''),
(133, 66, '2016-01-19 10:57:32', '', ''),
(134, 66, '2016-01-19 10:57:39', '', ''),
(135, 67, '2016-01-19 10:58:06', '', ''),
(136, 68, '2016-01-19 10:59:04', '', ''),
(137, 68, '2016-01-19 10:59:13', '', ''),
(138, 69, '2016-01-19 11:00:16', 'unite centrale', 'dell , 3 cm'),
(139, 69, '2016-01-19 11:00:49', 'table ', 'ronde , basse'),
(140, 70, '2016-01-19 11:20:04', 'AAA', '{"chassi":"MEAZERTY","model":"mercedes","marque":"Mercedes","moteur":"Diesel","vitesse":"122 KM \\/H","couleur":"verte"}'),
(141, 71, '2016-01-19 15:10:23', 'AAZFhgui', '{"chassi":"MEAZERTY","model":"mercedes","marque":"Mercedes","moteur":"Diesel","vitesse":"122 KM \\/H","couleur":"verte"}'),
(142, 74, '2016-01-20 07:35:54', 'ordinateur', '{"model":"mercedes","marque":"Mercedes","moteur":"Diesel","vitesse":"122 KM \\/H","couleur":"verte"}'),
(143, 74, '2016-01-20 07:47:32', 'ordinateur', '{"marque":"","type":null,"marque_processeur":null,"frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}'),
(144, 74, '2016-01-20 07:51:27', 'ordinateur', '{"marque":"","type":null,"marque_processeur":null,"frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}'),
(145, 74, '2016-01-20 07:58:07', 'designation', 'carac'),
(146, 75, '2016-01-20 08:00:54', 'designation', 'carac'),
(147, 75, '2016-01-20 10:59:00', 'dddd', 'dddd'),
(148, 75, '2016-01-20 11:19:21', 'dddd', '{"model":"imprimante","type_format":"rien","type_couleur":"couleur"}'),
(149, 75, '2016-01-20 11:34:48', 'dddd', '{"model":"imprimante","type_format":null,"type_couleur":"Noir sur blanc"}'),
(150, 75, '2016-01-20 11:42:07', 'dddd', '{"model":"imprimante","type_format":"A3","type_couleur":"couleur"}'),
(151, 75, '2016-01-20 11:43:38', 'dddd', '{"model":"imprimante","type_format":"A3","type_couleur":"Noir sur blanc"}'),
(152, 75, '2016-01-20 11:53:17', 'imprimante', '{"model":"imprimante","type_format":"A3","type_couleur":"couleur","marque":"AZER"}'),
(153, 75, '2016-01-20 12:17:56', 'ordinateur', '{"marque":"jjjjjjjj","type":"laptop","marque_processeur":"nnnnnnnnnn","frequence":"mmmmmm","ram":"llllll","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}'),
(154, 75, '2016-01-20 12:18:57', 'ordinateur', '{"marque":"jjjjjjjj","type":"desktop","marque_processeur":"nnnnnnnnnn","frequence":"mmmmmm","ram":"llllll","disque_dur":"","num_serie_moniteur":"VGFGVCG","marque_moniteur":null}'),
(155, 75, '2016-01-20 12:22:22', 'ordinateur', '{"marque":"HPRRR","type":"desktop","marque_processeur":"intel","frequence":"11","ram":"11","disque_dur":"111","num_serie_moniteur":"CECER","marque_moniteur":"CECE"}'),
(156, 75, '2016-01-20 12:29:54', 'imprimante', 'null'),
(157, 75, '2016-01-20 12:36:08', 'ordinateur', '{"marque":"HP Pavillon g serie","type":"laptop","marque_processeur":"intel ","frequence":"2.27 GHZ","ram":"4 GB","disque_dur":"500 GB","num_serie_moniteur":"","marque_moniteur":""}'),
(158, 75, '2016-01-20 12:36:17', 'ordinateur', '{"marque":"HP Pavillon g serie","type":"laptop","marque_processeur":"intel ","frequence":"2.27 GHZ","ram":"4 GB","disque_dur":"500 GB","num_serie_moniteur":"","marque_moniteur":""}'),
(159, 75, '2016-01-20 12:38:22', 'ordinateur', '{"marque":"nnn","type":null,"marque_processeur":"artzr","frequence":"fdfg","ram":"fdgf","disque_dur":"fdgfg","num_serie_moniteur":"","marque_moniteur":""}'),
(160, 75, '2016-01-20 12:40:40', 'ordinateur', '{"marque":"SDF","type":null,"marque_processeur":"VCDVFD","frequence":"SFDF","ram":"DFDVF","disque_dur":"FBGG","num_serie_moniteur":"","marque_moniteur":""}'),
(161, 75, '2016-01-20 12:52:41', 'imprimante', '{"model":"imprimante","type_format":"A3","type_couleur":"Noir sur blanc","marque":"DZDEEFEF"}'),
(162, 75, '2016-01-20 12:54:21', 'ordinateur', '{"marque":"DERNIER","type":"desktop","marque_processeur":"DERNIET","frequence":"DERNIER","ram":"DERNIER","disque_dur":"DERNIER","num_serie_moniteur":"DERNIER","marque_moniteur":"DERNIER"}'),
(163, 75, '2016-01-20 12:58:48', 'imprimante', '{"model":"imprimante","type_format":null,"type_couleur":"Noir sur blanc","marque":"dernier"}'),
(164, 75, '2016-01-20 13:31:51', 'ordinateur', '{"marque":"xxhvgcg","type":"laptop","marque_processeur":"xxhvgcg","frequence":"xxhvgcg","ram":"xxhvgcg","disque_dur":"xxhvgcg","num_serie_moniteur":"","marque_moniteur":""}'),
(165, 76, '2016-01-21 14:06:04', 'ordinateur', '{"marque":"","type":null,"marque_processeur":"","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}'),
(166, 76, '2016-01-21 14:06:06', 'ordinateur', '{"marque":"","type":null,"marque_processeur":"","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}'),
(167, 76, '2016-01-21 14:06:34', 'ordinateur', '{"marque":"","type":null,"marque_processeur":"","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}'),
(168, 77, '2016-01-25 12:53:15', 'ordinateur', '{"marque":"","type":null,"marque_processeur":"","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}'),
(169, 77, '2016-01-25 13:05:45', 'ordinateur', '{"marque":"","type":null,"marque_processeur":"","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}'),
(170, 78, '2016-01-25 13:09:30', 'ordinateur', '{"marque":"","type":null,"marque_processeur":"","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}'),
(171, 79, '2016-01-25 13:10:29', 'ordinateur', '{"marque":"","type":null,"marque_processeur":"","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}'),
(172, 79, '2016-01-25 13:12:14', 'ordinateur', '{"marque":"","type":null,"marque_processeur":"","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}'),
(173, 79, '2016-01-25 13:12:27', 'imprimante', '{"model":"imprimante","type_format":null,"type_couleur":"Noir sur blanc","marque":""}'),
(174, 79, '2016-01-25 13:13:25', 'ordinateur', '{"marque":"vfb","type":null,"marque_processeur":"","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}'),
(175, 175, '2016-01-25 13:13:42', 'ordinateur', '{"marque":"dell","type":"laptop","marque_processeur":"2 GB","frequence":"4 GHZ","ram":"2 GB","disque_dur":"350 GB","num_serie_moniteur":"","marque_moniteur":""}'),
(176, 84, '2016-02-02 10:14:04', 'ordinateur', '{"marque":"DELL","type":"laptop","marque_processeur":"INTEL","frequence":"2 GZH","ram":"2 GB","disque_dur":"300 GB","num_serie_moniteur":"","marque_moniteur":""}'),
(177, 86, '2016-02-03 12:42:13', 'ordinateur', '{"marque":"HP AA","type":"desktop","marque_processeur":"INTEL CORE i3","frequence":"3 GB","ram":"2 GB","disque_dur":"100 GB","num_serie_moniteur":"DE123","marque_moniteur":"DELL"}'),
(178, 87, '2016-02-03 12:47:46', 'ordinateur', '{"marque":"GBJMNBOMBN","type":"desktop","marque_processeur":"VGFYT","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}'),
(179, 88, '2016-02-04 09:21:34', 'ordinateur', '{"marque":"HP","type":"desktop","marque_processeur":"INTEL ","frequence":"2 GHZ","ram":"4 GO","disque_dur":"250 GB","num_serie_moniteur":"TE123546","marque_moniteur":"TEG"}'),
(180, 89, '2016-02-04 11:36:46', 'ordinateur', '{"marque":"HP 12222","type":"desktop","marque_processeur":"3 GB","frequence":"4 GHZ","ram":"2 GHZ","disque_dur":"200 GB","num_serie_moniteur":"TE3333333","marque_moniteur":"TEG "}'),
(181, 90, '2016-02-04 11:38:27', 'ordinateur', '{"marque":"","type":null,"marque_processeur":"","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}'),
(182, 90, '2016-02-04 11:38:28', 'ordinateur', '{"marque":"","type":null,"marque_processeur":"","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}'),
(183, 90, '2016-02-04 11:44:23', 'ordinateur', '{"marque":"stef cool","type":"laptop","marque_processeur":"haha haha","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}'),
(184, 93, '2016-02-12 09:54:05', 'ordinateur', '{"marque":"hp","type":"desktop","marque_processeur":"intel","frequence":"30 GHZ","ram":"2 GB","disque_dur":"230 GB","num_serie_moniteur":"TE12345","marque_moniteur":"TEG"}'),
(185, 97, '2016-02-24 11:46:13', 'ordinateur', '{"marque":"vcvbfbf","type":"laptop","marque_processeur":"fvfvfvff","frequence":"vfvfvv","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}'),
(186, 2, '2016-02-24 12:18:17', 'fedeeee', 'null'),
(187, 2, '2016-02-24 12:18:31', 'fedeeee', 'null'),
(188, 2, '2016-02-24 12:21:03', 'fedeeee', 'null'),
(189, 2, '2016-02-24 12:21:45', 'fedeeee', 'null'),
(190, 2, '2016-02-24 12:21:51', 'fedeeee', 'null'),
(191, 2, '2016-02-24 12:27:13', 'fedeeee', 'null'),
(192, 98, '2016-02-24 12:43:31', 'automobile', 'null'),
(193, 98, '2016-02-24 13:10:31', 'automobile', 'null'),
(194, 98, '2016-02-24 13:12:07', 'automobile', 'null'),
(195, 98, '2016-02-24 13:13:11', 'automobile', 'null'),
(196, 98, '2016-02-24 13:13:51', 'automobile', 'null'),
(197, 98, '2016-02-24 13:15:57', 'automobile', 'null'),
(198, 98, '2016-02-24 13:36:30', 'automobile', '{"marque":"","num_chassi":null,"vitesse":"","nbr_place":"","type_moteur":"","couleur":""}'),
(199, 98, '2016-02-24 13:38:06', 'automobile', '{"marque":"lamborguini","num_chassi":null,"vitesse":"","nbr_place":"","type_moteur":"","couleur":""}'),
(200, 98, '2016-02-24 13:40:27', 'automobile', '{"marque":"","num_chassi":null,"vitesse":"","nbr_place":"","type_moteur":"","couleur":""}'),
(201, 98, '2016-02-24 13:40:55', 'automobile', '{"marque":"","num_chassi":null,"vitesse":"","nbr_place":"","type_moteur":"","couleur":""}'),
(202, 98, '2016-02-24 13:42:27', 'automobile', '{"marque":"","num_chassi":null,"vitesse":"","nbr_place":"","type_moteur":"diesel","couleur":""}'),
(203, 98, '2016-02-24 13:45:04', 'automobile', '{"marque":"","num_chassi":null,"vitesse":"","nbr_place":"","type_moteur":"","couleur":""}'),
(204, 98, '2016-02-24 13:45:49', 'automobile', '{"marque":"","num_chassi":null,"vitesse":"","nbr_place":"","type_moteur":"","couleur":""}'),
(205, 98, '2016-02-24 13:47:36', 'automobile', '{"marque":"","num_chassi":null,"vitesse":"","nbr_place":"","type_moteur":"","couleur":""}'),
(206, 98, '2016-02-24 13:48:40', 'automobile', '{"marque":"","num_chassi":null,"vitesse":"","nbr_place":"","type_moteur":"","couleur":""}'),
(207, 98, '2016-02-24 13:49:04', 'automobile', '{"marque":"","num_chassi":null,"vitesse":"","nbr_place":"","type_moteur":"","couleur":""}'),
(208, 98, '2016-02-24 13:49:39', 'automobile', '{"marque":"","num_chassi":null,"vitesse":"","nbr_place":"","type_moteur":"","couleur":""}'),
(209, 98, '2016-02-24 13:50:06', 'automobile', '{"marque":"","num_chassi":null,"vitesse":"","nbr_place":"","type_moteur":"","couleur":""}'),
(210, 98, '2016-02-24 13:51:36', 'automobile', '{"marque":"","num_chassi":null,"vitesse":"","nbr_place":"","type_moteur":"","couleur":""}'),
(211, 98, '2016-02-24 14:07:37', '', 'null'),
(212, 98, '2016-02-24 14:08:54', '', 'null'),
(213, 99, '2016-02-24 14:09:48', '', 'null'),
(214, 99, '2016-02-24 14:10:48', '', 'null'),
(215, 99, '2016-02-24 14:13:06', '', 'null'),
(216, 100, '2016-02-24 14:14:37', '', 'null'),
(217, 101, '2016-02-24 14:17:24', 'automobile', '{"marque":"","num_chassi":null,"vitesse":"","nbr_place":"","type_moteur":"","couleur":""}'),
(218, 102, '2016-02-24 14:21:33', 'automobile', '{"marque":"aaaaa","num_chassi":null,"vitesse":"","nbr_place":"","type_moteur":"","couleur":""}'),
(219, 103, '2016-02-24 14:27:25', 'automobile', '{"marque":"cddvfbghn","num_chassi":null,"vitesse":"1","nbr_place":"","type_moteur":"","couleur":""}'),
(220, 104, '2016-02-24 14:34:10', 'automobile', '{"marque":"","num_chassi":null,"vitesse":"","nbr_place":"","type_moteur":"","couleur":""}'),
(221, 105, '2016-02-25 10:54:45', 'bureau', '{"nbr_place":null,"type":"hj;k;yi","description":"hj;k;yi"}'),
(222, 105, '2016-02-25 11:02:06', 'bureau', '{"nbr_place":null,"type":null,"description":"hj;k;yi"}'),
(223, 105, '2016-02-25 11:04:34', 'bureau', '{"nbr_place":null,"type":null,"description":"ffhg"}'),
(224, 105, '2016-02-25 12:22:14', 'bureau', '{"nbr_place":null,"type":null,"description":"Ronde"}'),
(225, 106, '2016-02-25 12:27:34', 'bureau', '{"nbr_place":null,"type":null,"description":"tototot"}'),
(226, 107, '2016-02-25 12:29:47', 'bureau', '{"nbr_place":"2","type":null,"description":"c''est une grande table"}'),
(227, 108, '2016-02-25 12:39:33', 'bureau', '{"nbr_place":"3","type":"fauteuil","description":"mousse abondante","fabriquant":"mvog mbi"}'),
(228, 112, '2016-02-29 14:28:31', 'bureau', '{"nbr_place":"1","type":"Table","description":"cdv","fabriquant":"dddd"}');

-- --------------------------------------------------------

--
-- Structure de la table `groupe_mat`
--

CREATE TABLE IF NOT EXISTS `groupe_mat` (
`id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `groupe_mat`
--

INSERT INTO `groupe_mat` (`id`, `designation`, `description`, `date_creation`) VALUES
(1, 'parc informatique et bureautique', 'materiel informatique', '2016-01-12 08:15:34'),
(2, 'parc automobile', 'les vehicules', '2016-01-12 08:17:33'),
(3, 'mobilier de bureau', 'les meubles de bureau et autres...', '2016-01-12 08:17:33');

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Structure de la table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE IF NOT EXISTS `materiel` (
`id` int(11) NOT NULL,
  `num_serie` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `designation` varchar(255) NOT NULL,
  `caracteristique` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL DEFAULT 'entrée',
  `categorie` varchar(255) NOT NULL,
  `supprime` int(1) NOT NULL DEFAULT '0',
  `id_entree` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=176 ;

--
-- Contenu de la table `materiel`
--

INSERT INTO `materiel` (`id`, `num_serie`, `date_creation`, `designation`, `caracteristique`, `etat`, `categorie`, `supprime`, `id_entree`) VALUES
(26, '  11111111111', '2015-10-26 18:10:40', 'voiture', '{"chassi":"MEAZERTY","model":"mercedes","marque":"Mercedes","moteur":"Diesel","vitesse":"122 KM \\/H","couleur":"verte"}', 'affecté', 'ordinateurs de bureau', 1, 0),
(29, '  HP2345', '2015-10-26 22:15:34', 'ordinateur', '{"marque":"coooooooooo","type":"coooooooooo","marque_processeur":"","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}', 'affecté', 'ordinateurs de bureau', 0, 0),
(122, 'VA1234', '2016-01-19 11:20:04', 'AAA', '{"chassi":"MEAZERTY","model":"mercedes","marque":"Mercedes","moteur":"Diesel","vitesse":"122 KM \\/H","couleur":"verte"}', 'affecté', ' Materiel informatique en cour d''enregistrement', 0, 0),
(123, 'fdfv', '2016-01-19 15:10:23', 'AAZFhgui', '{"chassi":"MEAZERTY","model":"mercedes","marque":"Mercedes","moteur":"Diesel","vitesse":"122 KM \\/H","couleur":"verte"}', 'affecté', ' Materiel automobile en cour d''enregistrement', 1, 0),
(133, 'RRRRRRRRRR', '2016-01-20 12:22:22', 'ordinateur', '{"marque":"HPRRR","type":"desktop","marque_processeur":"intel","frequence":"11","ram":"11","disque_dur":"111","num_serie_moniteur":"CECER","marque_moniteur":"CECE"}', 'entrée', 'Materiel informatique', 0, 0),
(135, 'ZRTKJ?HGF', '2016-01-25 13:05:45', 'ordinateur', '{"marque":"","type":null,"marque_processeur":"","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}', 'entrée', 'Materiel informatique', 0, 0),
(136, 'RTTTTTTTT', '2016-01-25 13:09:30', 'ordinateur', '{"marque":"","type":null,"marque_processeur":"","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}', 'entrée', 'Materiel informatique', 0, 0),
(137, 'bhgj,y', '2016-01-25 13:10:29', 'ordinateur', '{"marque":"","type":null,"marque_processeur":"","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}', 'entrée', 'Materiel informatique', 0, 0),
(138, ' nnnnnnnnnnnnn', '2016-01-25 13:12:14', 'ordinateur', '{"marque":"HP pavillon","type":"desktop","marque_processeur":"Intel","frequence":"4 Ghz","ram":"2 GO","disque_dur":"200 GB","num_serie_moniteur":"te1234","marque_moniteur":"Teg "}', 'entrée', 'ordinateurs de bureau', 0, 0),
(139, ' 212121', '2016-01-25 13:12:28', 'ordinateur', '{"marque":"dell","type":"laptop","marque_processeur":"2 GB","frequence":"4 GHZ","ram":"2 GB","disque_dur":"350 GB","num_serie_moniteur":"","marque_moniteur":""}', 'affecté', 'ordinateurs de bureau', 0, 0),
(140, '11111111111', '2016-01-25 13:13:25', 'ordinateur', '{"marque":"HP pavillon","type":"Laptop","marque_processeur":"intel core i3","frequence":"2.75 * 3","ram":"4 GB","disque_dur":"500 GB","num_serie_moniteur":"","marque_moniteur":""}', 'entrée', 'ordinateur ______', 1, 0),
(141, '             11111111111', '2016-01-25 13:13:42', 'ordinateur', '{"marque":"HP Pavillon","type":"HP Pavillon","marque_processeur":"intel core i 7","frequence":"2.27 * 3 GHZ","ram":"4 GB","disque_dur":"500 GB","num_serie_moniteur":"","marque_moniteur":""}', 'affecté', 'ordinateurs de bureau', 1, 0),
(142, 'OR12333', '2016-02-02 10:14:05', 'ordinateur', '{"marque":"DELL","type":"laptop","marque_processeur":"INTEL","frequence":"2 GZH","ram":"2 GB","disque_dur":"300 GB","num_serie_moniteur":"","marque_moniteur":""}', 'affecté', 'Materiel informatique', 1, 0),
(143, ' ', '2016-02-03 12:42:13', 'ordinateur', '{"marque":"HP AA","type":"desktop","marque_processeur":"INTEL CORE i3","frequence":"3 GB","ram":"2 GB","disque_dur":"100 GB","num_serie_moniteur":"","marque_moniteur":""}', 'entrée', 'ordinateurs de bureau', 0, 0),
(144, '234567890', '2016-02-03 12:47:46', 'ordinateur', '{"marque":"GBJMNBOMBN","type":"desktop","marque_processeur":"VGFYT","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}', 'entrée', 'Materiel informatique', 1, 0),
(145, '  1234567', '2016-02-04 09:21:34', 'ordinateur', '{"marque":"HP","type":"DESKTOP","marque_processeur":"INTEL ","frequence":"2 GHZ","ram":"4 GO","disque_dur":"250 GB","num_serie_moniteur":"","marque_moniteur":""}', 'entrée', 'ordinateurs de bureau', 1, 0),
(146, 'AZER11111', '2016-02-04 11:36:46', 'ordinateur', '{"marque":"HP 12222","type":"desktop","marque_processeur":"3 GB","frequence":"4 GHZ","ram":"2 GHZ","disque_dur":"200 GB","num_serie_moniteur":"TE3333333","marque_moniteur":"TEG "}', 'affecté', 'Materiel informatique', 0, 0),
(147, '', '2016-02-04 11:38:27', 'ordinateur', '{"marque":"","type":null,"marque_processeur":"","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}', 'affecté', 'Materiel informatique', 0, 0),
(148, '', '2016-02-04 11:38:28', 'ordinateur', '{"marque":"","type":null,"marque_processeur":"","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}', 'affecté', 'Materiel informatique', 0, 0),
(149, 'Dieu est puissant', '2016-02-04 11:44:23', 'ordinateur', '{"marque":"stef cool","type":"laptop","marque_processeur":"haha haha","frequence":"","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}', 'affecté', 'Materiel informatique', 0, 0),
(150, '1212121', '2016-02-12 09:54:06', 'ordinateur', '{"marque":"hp","type":"desktop","marque_processeur":"intel","frequence":"30 GHZ","ram":"2 GB","disque_dur":"230 GB","num_serie_moniteur":"TE12345","marque_moniteur":"TEG"}', 'affecté', 'Materiel informatique', 0, 0),
(151, '2222', '2016-02-24 11:46:13', 'ordinateur', '{"marque":"vcvbfbf","type":"laptop","marque_processeur":"fvfvfvff","frequence":"vfvfvv","ram":"","disque_dur":"","num_serie_moniteur":"","marque_moniteur":""}', 'affecté', 'Materiel informatique', 0, 0),
(168, '18542', '2016-02-24 14:27:25', 'automobile', '{"marque":"cddvfbghn","num_chassi":null,"vitesse":"1","nbr_place":"","type_moteur":"","couleur":""}', 'affecté', 'parc automobile', 0, 0),
(169, '', '2016-02-24 14:34:10', 'automobile', '{"marque":"","num_chassi":null,"vitesse":"","nbr_place":"","type_moteur":"","couleur":""}', 'affecté', 'Parc automobile', 0, 0),
(170, '1212', '2016-02-25 11:04:34', 'bureau', '{"nbr_place":null,"type":null,"description":"ffhg"}', 'affecté', 'materiel de bureau', 0, 0),
(171, '123123', '2016-02-25 12:22:14', 'bureau', '{"nbr_place":null,"type":null,"description":"Ronde"}', 'affecté', 'materiel de bureau', 0, 0),
(172, '12345', '2016-02-25 12:27:35', 'bureau', '{"nbr_place":null,"type":null,"description":"tototot"}', 'affecté', 'materiel de bureau', 0, 0),
(173, '11111', '2016-02-25 12:29:47', 'bureau', '{"nbr_place":"2","type":null,"description":"c''est une grande table"}', 'affecté', 'materiel de bureau', 0, 0),
(174, '12312', '2016-02-25 12:39:33', 'bureau', '{"nbr_place":"3","type":"fauteuil","description":"mousse abondante","fabriquant":"mvog mbi"}', 'affecté', 'materiel de bureau', 0, 0),
(175, 'dgdgdgddgg', '2016-02-29 14:28:31', 'bureau', '{"nbr_place":"1","type":"Table","description":"cdv","fabriquant":"dddd"}', 'affecté', 'materiel de bureau', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `numero_nomenclature`
--

CREATE TABLE IF NOT EXISTS `numero_nomenclature` (
`id` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `numero_nomenclature`
--

INSERT INTO `numero_nomenclature` (`id`, `intitule`, `description`, `date_creation`) VALUES
(1, 'numero 1', 'materiel de Armee ', '2015-10-03 06:26:40'),
(2, 'numero 2', '', '2015-10-03 06:26:40'),
(3, 'numero 3', '', '2015-10-03 06:26:40'),
(4, 'numero trois', ' pour les civils ...', '2015-10-03 15:17:32');

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE IF NOT EXISTS `personnel` (
`id` int(11) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `personnel`
--

INSERT INTO `personnel` (`id`, `matricule`, `nom`, `poste`, `date_creation`) VALUES
(1, 'MINTP123', 'AMOGI PAUL', 'ASSISTANT D''etude de projet', '2016-03-10 11:09:16'),
(2, 'MINTP341', 'bayanki', 'assistant no 2', '2016-03-10 11:09:16');

-- --------------------------------------------------------

--
-- Structure de la table `p_designations`
--

CREATE TABLE IF NOT EXISTS `p_designations` (
`id` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `p_designations`
--

INSERT INTO `p_designations` (`id`, `intitule`, `slug`, `date_creation`) VALUES
(1, 'ordinateur', 'ordinateur', '2015-10-25 06:36:11'),
(2, 'souris', 'souris', '2015-10-25 06:36:11');

-- --------------------------------------------------------

--
-- Structure de la table `reponse_materiel`
--

CREATE TABLE IF NOT EXISTS `reponse_materiel` (
`id` int(11) NOT NULL,
  `num_serie` varchar(11) NOT NULL,
  `id_demande` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `caracteristiques` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_demandeur` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

--
-- Contenu de la table `reponse_materiel`
--

INSERT INTO `reponse_materiel` (`id`, `num_serie`, `id_demande`, `designation`, `caracteristiques`, `date_creation`, `id_demandeur`) VALUES
(107, 'SO123', 24, 'souris', 'A mollete', '2015-10-26 19:49:29', 11),
(108, 'cla1234', 24, 'clavier', 'Type Azerty', '2015-10-26 19:49:39', 11),
(109, 'SOAZERTY', 25, 'souris', 'mollette', '2015-10-26 22:14:13', 1),
(110, ' 212121', 25, 'ordinateur', '{', '2016-03-17 12:12:17', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sortie`
--

CREATE TABLE IF NOT EXISTS `sortie` (
`id` int(11) NOT NULL,
  `code_sortie` int(11) NOT NULL,
  `directeur` int(11) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `sortie`
--

INSERT INTO `sortie` (`id`, `code_sortie`, `directeur`, `date_creation`) VALUES
(1, 11111111, 1, '2015-10-27 09:36:20');

-- --------------------------------------------------------

--
-- Structure de la table `sortie_materiel`
--

CREATE TABLE IF NOT EXISTS `sortie_materiel` (
`id` int(11) NOT NULL,
  `id_sortie` int(11) NOT NULL,
  `id_materiel` int(11) NOT NULL,
  `motif` text NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mode` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `num_serie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `subscriber`
--

CREATE TABLE IF NOT EXISTS `subscriber` (
`id` int(11) NOT NULL,
  `first` varchar(100) DEFAULT NULL,
  `last` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `subscriber`
--

INSERT INTO `subscriber` (`id`, `first`, `last`, `email`, `date_created`) VALUES
(23, 'Ahmedd', 'samy', 'ahmed.samy.cs@gmail.com', '2013-03-11 22:11:40'),
(24, 'John', 'Carter', 'test@test.com', '2013-03-11 22:19:05'),
(25, 'Lina', 'Khaled', 'lina@hotmail.com', '2013-03-17 19:54:48');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `matricule`, `poste`, `fonction`, `division`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `role`) VALUES
(1, '127.0.0.1', 'Alamine', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '2015AD', 'Directeur', '', 'dir', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1452678909, 1, 'Admin', 'istrator', 'ADMIN', '0', 'admin'),
(16, '::1', 'agoume stephane', '$2y$08$/r.aFKrDjlsogH/hkoBsieRiIivE2L7uJDaxbJTA0zHmnMmhdsnlW', '12345', '', '', '', NULL, 'agoumekoufanas@gmail.com', NULL, NULL, NULL, NULL, 1452583286, 1452594073, 1, 'agoume', 'stephane', NULL, NULL, 'directeur'),
(17, '::1', 'test 2 test prenom', '$2y$08$wt5WMA20ZntxLsnx2dcXseEymsgi8Le4xfGavQk6hBwZ6998ed.ee', '123456', '', '', '', NULL, 'test@yahoo.fr', NULL, NULL, NULL, NULL, 1452594213, 1452594258, 1, 'test 2', 'test prenom', NULL, NULL, 'directeur'),
(18, '::1', 'serge serge', '$2y$08$AV04HAUxdsZabUZsse3LgeM5NEse2/.2EI6ufVoMnqYA2GqWd3fse', 'AZ123', '', '', '', NULL, 'serge@yaoo.fr', NULL, NULL, NULL, NULL, 1452595117, 1452596065, 1, 'serge', 'serge', NULL, NULL, 'directeur'),
(19, '192.168.43.4', 'stephane ingrid', '$2y$08$g.ujxGDYA7DcUNz5TGkUB.lEHxa2yUgj39AYmsiG5ty0LjL5aLyzi', '123456', '', '', '', NULL, 'aze@yahoo.com', NULL, NULL, NULL, NULL, 1452601933, 1464775430, 1, 'stephane', 'ingrid', NULL, NULL, 'directeur');

-- --------------------------------------------------------

--
-- Structure de la table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(17, 16, 2),
(18, 17, 2),
(19, 18, 2),
(20, 19, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie_mat`
--
ALTER TABLE `categorie_mat`
 ADD PRIMARY KEY (`id`), ADD KEY `numero_nomenclature` (`numero_nomenclature`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
 ADD PRIMARY KEY (`id`), ADD KEY `demandeur` (`id_demandeur`);

--
-- Index pour la table `demande_materiel`
--
ALTER TABLE `demande_materiel`
 ADD PRIMARY KEY (`id`), ADD KEY `demande` (`id_demande`);

--
-- Index pour la table `detention`
--
ALTER TABLE `detention`
 ADD PRIMARY KEY (`id`), ADD KEY `materiel` (`id_detenteur`), ADD KEY `detenteur` (`id_materiel`);

--
-- Index pour la table `entree`
--
ALTER TABLE `entree`
 ADD PRIMARY KEY (`id`), ADD KEY `user` (`user`);

--
-- Index pour la table `entree_materiel`
--
ALTER TABLE `entree_materiel`
 ADD PRIMARY KEY (`id`), ADD KEY `entree` (`id_entree`);

--
-- Index pour la table `groupe_mat`
--
ALTER TABLE `groupe_mat`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login_attempts`
--
ALTER TABLE `login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `materiel`
--
ALTER TABLE `materiel`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `numero_nomenclature`
--
ALTER TABLE `numero_nomenclature`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `p_designations`
--
ALTER TABLE `p_designations`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reponse_materiel`
--
ALTER TABLE `reponse_materiel`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sortie`
--
ALTER TABLE `sortie`
 ADD PRIMARY KEY (`id`), ADD KEY `directeur` (`directeur`), ADD KEY `code_sortie` (`code_sortie`);

--
-- Index pour la table `sortie_materiel`
--
ALTER TABLE `sortie_materiel`
 ADD PRIMARY KEY (`id`), ADD KEY `materiel` (`id_materiel`), ADD KEY `sortie` (`id_sortie`);

--
-- Index pour la table `subscriber`
--
ALTER TABLE `subscriber`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie_mat`
--
ALTER TABLE `categorie_mat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT pour la table `demande_materiel`
--
ALTER TABLE `demande_materiel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT pour la table `detention`
--
ALTER TABLE `detention`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT pour la table `entree`
--
ALTER TABLE `entree`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT pour la table `entree_materiel`
--
ALTER TABLE `entree_materiel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=229;
--
-- AUTO_INCREMENT pour la table `groupe_mat`
--
ALTER TABLE `groupe_mat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `groups`
--
ALTER TABLE `groups`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `login_attempts`
--
ALTER TABLE `login_attempts`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `materiel`
--
ALTER TABLE `materiel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=176;
--
-- AUTO_INCREMENT pour la table `numero_nomenclature`
--
ALTER TABLE `numero_nomenclature`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `personnel`
--
ALTER TABLE `personnel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `p_designations`
--
ALTER TABLE `p_designations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `reponse_materiel`
--
ALTER TABLE `reponse_materiel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT pour la table `sortie`
--
ALTER TABLE `sortie`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `sortie_materiel`
--
ALTER TABLE `sortie_materiel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `subscriber`
--
ALTER TABLE `subscriber`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `users_groups`
--
ALTER TABLE `users_groups`
ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
