-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 04 juin 2018 à 17:58
-- Version du serveur :  5.7.12-log
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dotcode`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_album`
--

DROP TABLE IF EXISTS `tbl_album`;
CREATE TABLE IF NOT EXISTS `tbl_album` (
  `albumid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `adesc` varchar(1000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`albumid`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_album`
--

INSERT INTO `tbl_album` (`albumid`, `name`, `adesc`, `image`, `date`, `status`) VALUES
(1, 'Cars', 'My Cars Album', '13019lexus_lc_500_4k-HD.jpg', '2016-04-06 04:40:24', 'delete'),
(2, 'Pizza', 'Pizza 4 saisons', '21038british_virgin_islands_sunset-wide.jpg', '2016-04-06 04:52:04', 'delete'),
(3, '3d wallpaers', 'My 3d wallpaers', '22862solid_abstract_colors-HD.jpg', '2016-04-06 04:54:51', 'delete'),
(4, 'Heros', 'Mysuper heros', '4710iron_man_4k-HD.jpg', '2016-04-06 10:27:58', 'delete'),
(5, 'Ladscape', 'My extrem ', '6567construction-40.jpg', '2016-04-06 10:28:52', 'delete'),
(6, 'Café liégeoiss', 'fsdfds', '28456270202-coffee-splash.jpg', '2018-06-01 23:42:18', 'delete'),
(7, 'Croque Madame', 'Croque Madame', '8629croque-madame.jpg', '2018-06-02 15:20:35', 'process'),
(8, 'Croque Monsieur', 'Croque Monsieur', '23472croque-monsieur.jpg', '2018-06-02 15:21:19', 'process'),
(9, 'Mousse au chocolat', 'Mousse au chocolat', '23081Mousse-chocolat.jpg', '2018-06-02 15:21:47', 'process'),
(10, 'Mojitos Caféine', 'Mojitos Caféine', '4526mojito-caffeine.jpg', '2018-06-02 15:22:28', 'process'),
(11, 'Petit déjeuner grand-mère', 'Petit déjeuner grand-mère', '15183petit-dej-grand-mere.jpg', '2018-06-02 15:24:15', 'process'),
(12, 'Petit déjeuner continental', 'Petit déjeuner continental', '30918Petit_Déjeuner_Continental.jpg', '2018-06-02 15:27:25', 'delete'),
(13, 'granite au citron', 'granite au citron', '28807granite-au-citron.png', '2018-06-02 15:29:23', 'delete'),
(14, 'Granite au citron', 'Granite au citron', '15284granite-au-citron.png', '2018-06-02 15:31:23', 'delete'),
(15, 'dfdf', 'fdf', '14087granite-au-citron.png', '2018-06-02 15:38:08', 'delete'),
(16, 'Petit Déjeuner Continental', 'Petit Déjeuner Continental', '732Petit_Déjeuner_Continental.jpg', '2018-06-02 15:41:02', 'delete'),
(17, 'Gaufres', 'Gaufres', '28645Gaufre.jpg', '2018-06-02 15:41:28', 'process'),
(18, 'Cheesecake pistache', 'Cheesecake pistache', '12362cheese-cake.jpg', '2018-06-02 15:43:10', 'process'),
(19, 'Mojito Fraise', 'Mojito Fraise', '6842Mojito-fraise.jpg', '2018-06-02 15:46:53', 'delete'),
(20, 'petit dej diète', 'petit dej diète', '15723petit-dej-diète.jpg', '2018-06-02 15:47:49', 'delete'),
(21, 'fondant au chocolat', 'fondant au chocolat', '28872fondant-au-chocolat.png', '2018-06-02 15:48:49', 'delete'),
(22, 'petit dej', 'petit dej', '16436petit-déjeuner.jpg', '2018-06-02 15:51:00', 'delete'),
(23, 'petit dej', 'petit dej', '24157petit-dej2.jpg', '2018-06-02 15:51:16', 'process'),
(24, 'Cheesecake fraise', 'Cheesecake fraise', '19387cheese-cake-fraise.jpg', '2018-06-02 16:09:37', 'process'),
(25, 'crèpe chocolat', 'crèpe chocolat', '14794crèpe chocolat.jpg', '2018-06-02 16:12:36', 'delete'),
(26, 'pancake', 'pancake', '22331pancake.jpg', '2018-06-02 16:12:51', 'process'),
(27, 'sandwich', 'sandwich', '20056sandwich.jpg', '2018-06-02 16:13:03', 'process'),
(28, 'Gaufre chocolat fruit sec', 'Gaufre chocolat fruit sec', '23473Gaufre chocolat fruit sec.jpg', '2018-06-02 16:13:36', 'delete'),
(29, 'coupe de glace', 'coupe de glace', '10390coupe de glace.jpg', '2018-06-02 16:13:46', 'delete'),
(30, 'boule de glace', 'boule de glace', '26840boule de glace.jpg', '2018-06-02 16:14:43', 'delete'),
(31, 'crèpe chocolat', 'crèpe chocolat', '9265crèpe chocolat.jpg', '2018-06-02 16:14:57', 'delete'),
(32, 'cheese-cake', 'cheese-cake', '19766cheese-cake.jpg', '2018-06-02 16:15:40', 'process'),
(33, 'crèpe chocolat', 'crèpe chocolat', '4902crèpe chocolat.jpg', '2018-06-02 20:50:08', 'delete'),
(34, 'Gaufre chocolat fruit sec', 'Gaufre chocolat fruit sec', '27495Gaufre chocolat fruit sec.jpg', '2018-06-02 20:51:32', 'delete'),
(35, 'café-gourmand', 'café-gourmand', '29846café-gourmand.jpg', '2018-06-02 22:37:27', 'delete'),
(36, 'mojito-caffeine', 'mojito-caffeine', '2071mojito-caffeine.jpg', '2018-06-02 22:37:51', 'process'),
(37, 'aaa', 'aaaa', '186981.jpg', '2018-06-03 22:44:51', 'delete'),
(38, 'Gâteau fraise', 'Gâteau fraise', '1301811.jpg', '2018-06-04 03:29:38', 'process'),
(39, 'Chocolat', 'chocolat', '171829.jpg', '2018-06-04 03:47:48', 'process'),
(40, 'Mojito', 'Mojito fraise', '263526842Mojito-fraise.jpg', '2018-06-04 14:35:13', 'process'),
(41, 'Petit déjeuner', 'Petit déjeuner Grand-mère', '362915183petit-dej-grand-mere.jpg', '2018-06-04 14:37:16', 'process'),
(42, 'Petit déjeuner', 'Petit déjeuner Continenetal', '25101732Petit_DÃ©jeuner_Continental.jpg', '2018-06-04 14:38:04', 'delete'),
(43, 'Petit Déjeuner ', 'Petit Déjeuner Continental', '28514Ptit-dej-continental.jpg', '2018-06-04 14:40:02', 'process');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_gallery`
--

DROP TABLE IF EXISTS `tbl_gallery`;
CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `gid` int(10) NOT NULL AUTO_INCREMENT,
  `aid` int(10) NOT NULL,
  `gname` varchar(1000) NOT NULL,
  `gimages` varchar(1000) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gid`, `aid`, `gname`, `gimages`, `date`, `status`) VALUES
(1, 1, 'Cars', '0139052016_mclaren_570s_gt4-wide.jpg', '2016-04-06 04:41:00', 'delete'),
(2, 1, 'Cars', '1324382016_rolls_royce_ghost_eternal_love-wide.jpg', '2016-04-06 04:41:00', 'process'),
(3, 1, 'Cars', '260712016_rosso_mars_novara_edizione_lamborghini_huracan-wide.jpg', '2016-04-06 04:41:00', 'delete'),
(4, 1, 'Cars', '32852aston_martin_rapide.jpg', '2016-04-06 04:41:00', 'process'),
(5, 1, 'Cars', '426253bell_ross_design_aerogt_concept-wide.jpg', '2016-04-06 04:41:00', 'process'),
(6, 1, 'Cars', '520546mercedes_benz_glc_coupe_2017-HD.jpg', '2016-04-06 04:41:00', 'process'),
(7, 2, 'Sunset', '023803british_virgin_islands_sunset-wide.jpg', '2016-04-06 04:52:26', 'process'),
(8, 2, 'Sunset', '116664rocky_coastline_sunset-wide.jpg', '2016-04-06 04:52:26', 'process'),
(9, 2, 'Sunset', '214193sunrise_5k-wide.jpg', '2016-04-06 04:52:26', 'process'),
(10, 2, 'Sunset', '314678sunset_beach_mood-wide.jpg', '2016-04-06 04:52:26', 'process'),
(11, 3, '3d wallpaers', '08078aqua_abstract-HD.jpg', '2016-04-06 04:55:11', 'process'),
(12, 3, '3d wallpaers', '125519colorful_polygons-wide.jpg', '2016-04-06 04:55:11', 'process'),
(13, 3, '3d wallpaers', '229628glow_rays_abstract-HD.jpg', '2016-04-06 04:55:11', 'process'),
(14, 3, '3d wallpaers', '316197htc_one_m8_background-wide.jpg', '2016-04-06 04:55:11', 'process'),
(15, 3, '3d wallpaers', '49882the_great_race-wide.jpg', '2016-04-06 04:55:11', 'delete');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `lid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_login`
--

INSERT INTO `tbl_login` (`lid`, `username`, `password`, `type`) VALUES
(1, 'Cafeine', 'cafeine', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_menu`
--

DROP TABLE IF EXISTS `tbl_menu`;
CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `name`, `image`, `date`, `status`) VALUES
(60, 'Petit déjeuner', 'img_15.jpg', '2018-06-04', 'process'),
(61, 'Cafés', '027154img_2.jpg', '2018-06-04', 'process'),
(62, 'Chocolaterie', '027616img_3.jpg', '2018-06-04', 'process'),
(63, 'Thé', '05470img_16.jpg', '2018-06-04', 'process'),
(64, 'Jus', '026124img_13.jpg', '2018-06-04', 'process'),
(65, 'Boissons froides', '010602img_1.jpg', '2018-06-04', 'process'),
(66, 'Milkshake', '022264img_11.jpg', '2018-06-04', 'process'),
(67, 'Coktails', '029238img_4.jpg', '2018-06-04', 'process'),
(68, 'Gâteaux', '027300img_8.jpg', '2018-06-04', 'process'),
(69, 'Gaufres', '031682img_9.jpg', '2018-06-04', 'process'),
(70, 'Pancake', '03344img_14.jpg', '2018-06-04', 'process'),
(71, 'Crèpes', '04622img_5.jpg', '2018-06-04', 'process'),
(72, 'Croques', '027196img_6.jpg', '2018-06-04', 'process'),
(73, 'Omelettes', '016666img_12.jpg', '2018-06-04', 'process'),
(74, 'Glaces', '028200img_10.jpg', '2018-06-04', 'process'),
(75, 'Dessert', '021734img_7.jpg', '2018-06-04', 'process'),
(76, '', '02833', '2018-06-04', 'delete'),
(77, '', '023159', '2018-06-04', 'delete'),
(78, '', '07370', '2018-06-04', 'delete'),
(79, '', '026968', '2018-06-04', 'delete'),
(80, '', '017175', '2018-06-04', 'delete'),
(81, '', '028909', '2018-06-04', 'delete'),
(82, '', '031155', '2018-06-04', 'delete'),
(83, '', '012009', '2018-06-04', 'delete'),
(84, '', '032271', '2018-06-04', 'delete'),
(85, '', '020645', '2018-06-04', 'delete');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_message`
--

DROP TABLE IF EXISTS `tbl_message`;
CREATE TABLE IF NOT EXISTS `tbl_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tbl_message`
--

INSERT INTO `tbl_message` (`id`, `name`, `email`, `message`, `date`) VALUES
(1, 'Klabi Wafa', 'wafa.klabi1@gmail.com', 'bonjour', '2018-06-03 23:55:49'),
(2, 'wafakl', 'waaaa@gmail.com', 'szd', '2018-06-03 23:56:40'),
(3, 'Klabi Wafa', 'wafa.klabi1@gmail.com', 'efe', '2018-06-04 00:01:29'),
(4, 'Fedi Bouzazi', 'fedi.bz95@gmail.com', 'Bonsoir!', '2018-06-04 03:28:35'),
(5, 'emna ben ali', 'emna.benali.eba@gmail.com', 'Bonsoir,\r\ncordialement', '2018-06-04 03:46:09');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_slider`
--

DROP TABLE IF EXISTS `tbl_slider`;
CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `name`, `image`, `date`, `status`) VALUES
(1, 'croque-madame', '86201.jpg', '2018-06-03 23:05:07', 'delete'),
(2, 'aaa', '2188311.jpg', '2018-06-03 23:07:45', 'delete'),
(3, 'glace', '27394boule de glace.jpg', '2018-06-03 23:09:12', 'delete'),
(4, 'glace', '28277boule de glace.jpg', '2018-06-03 23:10:21', 'delete'),
(5, 'aaaa', '11170cheese-cake-fraise.jpg', '2018-06-03 23:12:36', 'delete'),
(6, '1', '240741.jpg', '2018-06-03 23:14:37', 'process'),
(7, '2', '180432.jpg', '2018-06-03 23:18:50', 'process'),
(8, '3', '114163.jpg', '2018-06-03 23:18:55', 'process'),
(9, '4', '319854.jpg', '2018-06-03 23:19:03', 'process'),
(10, '5', '206945.jpg', '2018-06-03 23:19:11', 'process'),
(11, '6', '203116.jpg', '2018-06-03 23:19:17', 'process'),
(12, '7', '313007.jpg', '2018-06-03 23:19:22', 'process'),
(13, '8', '305098.jpg', '2018-06-03 23:19:29', 'process'),
(14, '9', '93149.jpg', '2018-06-03 23:19:35', 'process'),
(15, '10', '254710.jpg', '2018-06-03 23:19:42', 'process'),
(16, '11', '3038411.jpg', '2018-06-03 23:19:49', 'process'),
(17, '12', '2282512.jpg', '2018-06-03 23:19:54', 'process'),
(18, '13', '939013.jpg', '2018-06-03 23:20:01', 'process'),
(19, '14', '2107114.jpg', '2018-06-03 23:20:06', 'process'),
(20, '15', '1993215.jpg', '2018-06-03 23:20:18', 'process'),
(21, 'café', '2005519.jpg', '2018-06-04 03:30:47', 'process'),
(22, 'Café', '17572ccccc.jpg', '2018-06-04 03:49:21', 'delete'),
(23, 'cc', '18253cc.jpg', '2018-06-04 15:45:07', 'process');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
