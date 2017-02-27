-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 27 Février 2017 à 13:09
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fleurs`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `prix` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `name`, `description`, `category_id`, `image`, `prix`) VALUES
(1, 'Bouquet mariée', 'La mariée est en blanc', 1, 'mariage1.jpg', '250'),
(2, 'Bouquet mariée', 'La mariée est en blanc', 1, 'mariage2.jpg', '250'),
(3, 'Bouquet mariée', 'Uniquement en blanc ', 1, 'mariage3.jpg', '250'),
(4, 'Bouquet mariée', 'Uniquement en blanc ', 1, 'mariage4.jpg', '250'),
(5, 'Bouquet mariée', 'Uniquement en blanc ', 1, 'mariage5.jpg', '250'),
(6, 'Bouquet mariée', 'Uniquement en blanc ', 1, 'mariage6.jpg', '250'),
(7, 'Bouquet mariée', 'Uniquement en blanc ', 1, 'mariage7.jpg', '250'),
(8, 'Bouquet mariée', 'Uniquement en blanc ', 1, 'mariage8.jpg', '250'),
(9, 'Bouquet fiancée', 'Rayonner avec ce bouquet', 2, 'fiancailles1.jpg', '195'),
(10, 'Bouquet fiancée', 'Rayonner avec ce bouquet', 2, 'fiancailles2.jpg', '195'),
(11, 'Bouquet fiancée', 'Rayonner avec ce bouquet', 2, 'fiancailles3.jpg', '195'),
(12, 'Bouquet fiancée', 'Rayonner avec ce bouquet', 2, 'fiancailles4.jpg', '195'),
(13, 'Bouquet fiancée', 'Rayonner avec ce bouquet', 2, 'fiancailles5.jpg', '195'),
(14, 'Bouquet fiancée', 'Rayonner avec ce bouquet', 2, 'fiancailles6.jpg', '195'),
(15, 'Bouquet fiancée', 'Rayonner avec ce bouquet', 2, 'fiancailles7.jpg', '195'),
(16, 'Bouquet fiancée', 'Rayonner avec ce bouquet', 2, 'fiancailles8.jpg', '195'),
(17, 'Bouquet naissance', 'Un bouquet pour une maman comblée', 3, 'naissance1.jpg', '95'),
(18, 'Bouquet naissance', 'Un bouquet pour une maman comblée', 3, 'naissance2.jpg', '95'),
(19, 'Bouquet naissance', 'Un bouquet pour une maman comblée', 3, 'naissance3.jpg', '95'),
(20, 'Bouquet naissance', 'Un bouquet pour une maman comblée', 3, 'naissance4.jpg', '95'),
(21, 'Bouquet naissance', 'Un bouquet pour une maman comblée', 3, 'naissance5.jpg', '95'),
(22, 'Bouquet naissance', 'Un bouquet pour une maman comblée', 3, 'naissance6.jpg', '95'),
(23, 'Bouquet naissance', 'Un bouquet pour une maman comblée', 3, 'naissance7.jpg', '95'),
(24, 'Bouquet naissance', 'Un bouquet pour une maman comblée', 3, 'naissance8.jpg', '95'),
(25, 'Fêtes des mères', 'Le plus beau bouquet pour maman', 4, 'fetes-meres1.jpg', '65'),
(26, 'Fêtes des mères', 'Le plus beau bouquet pour maman', 4, 'fetes-meres2.jpg', '65'),
(27, 'Fêtes des mères', 'Le plus beau bouquet pour maman', 4, 'fetes-meres3.jpg', '65'),
(28, 'Fêtes des mères', 'Le plus beau bouquet pour maman', 4, 'fetes-meres4.jpg', '65'),
(29, 'Fêtes des mères', 'Le plus beau bouquet pour maman', 4, 'fetes-meres5.jpg', '65'),
(30, 'Fêtes des mères', 'Le plus beau bouquet pour maman', 4, 'fetes-meres6.jpg', '65'),
(31, 'Fêtes des mères', 'Le plus beau bouquet pour maman', 4, 'fetes-meres7.jpg', '65'),
(32, 'Fêtes des mères', 'Le plus beau bouquet pour maman', 4, 'fetes-meres8.jpg', '65'),
(33, 'Convalescence', 'Un prompt rétablissement', 5, 'convalescence1.jpg', '55'),
(34, 'Convalescence', 'Un prompt rétablissement', 5, 'convalescence2.jpg', '55'),
(35, 'Convalescence', 'Un prompt rétablissement', 5, 'convalescence3.jpg', '55'),
(36, 'Convalescence', 'Un prompt rétablissement', 5, 'convalescence4.jpg', '55'),
(37, 'Convalescence', 'Un prompt rétablissement', 5, 'convalescence5.jpg', '55'),
(38, 'Convalescence', 'Un prompt rétablissement', 5, 'convalescence6.jpg', '55'),
(39, 'Convalescence', 'Un prompt rétablissement', 5, 'convalescence7.jpg', '55'),
(40, 'Convalescence', 'Un prompt rétablissement', 5, 'convalescence8.jpg', '55'),
(41, 'Deuil', 'Un prompt rétablissement', 6, 'deuil1.jpg', '45'),
(42, 'Deuil', 'Un prompt rétablissement', 6, 'deuil2.jpg', '45'),
(43, 'Deuil', 'Un prompt rétablissement', 6, 'deuil3.jpg', '45'),
(44, 'Deuil', 'Un prompt rétablissement', 6, 'deuil4.jpg', '45'),
(45, 'Deuil', 'Un prompt rétablissement', 6, 'deuil5.jpg', '45'),
(46, 'Deuil', 'Un prompt rétablissement', 6, 'deuil7.jpg', '45'),
(47, 'Deuil', 'Un prompt rétablissement', 6, 'deuil8.jpg', '45'),
(48, 'Deuil', 'Un prompt rétablissement', 6, 'deuil6.jpg', '45'),
(49, 'Anniversaire', 'Vœux sincères et joyeux anniversaire', 7, 'anniversaire1.jpg', '75'),
(50, 'Anniversaire', 'Vœux sincères et joyeux anniversaire', 7, 'anniversaire2.jpg', '75'),
(51, 'Anniversaire', 'Vœux sincères et joyeux anniversaire', 7, 'anniversaire3.jpg', '75'),
(52, 'Anniversaire', 'Vœux sincères et joyeux anniversaire', 7, 'anniversaire4.jpg', '75'),
(53, 'Anniversaire', 'Vœux sincères et joyeux anniversaire', 7, 'anniversaire5.jpg', '75'),
(54, 'Anniversaire', 'Vœux sincères et joyeux anniversaire', 7, 'anniversaire6.jpg', '75'),
(55, 'Anniversaire', 'Vœux sincères et joyeux anniversaire', 7, 'anniversaire7.jpg', '75'),
(56, 'Anniversaire', 'Vœux sincères et joyeux anniversaire', 7, 'anniversaire8.jpg', '75'),
(58, 'Occasions spéciales', 'Un bouquet spécial pour une occasion spéciale', 8, 'special1.jpg', '75'),
(59, 'Occasions spéciales', 'Un bouquet spécial pour une occasion spéciale', 8, 'special2.jpg', '75'),
(60, 'Occasions spéciales', 'Un bouquet spécial pour une occasion spéciale', 8, 'special3.jpg', '75'),
(61, 'Occasions spéciales', 'Un bouquet spécial pour une occasion spéciale', 8, 'special4.jpg', '75'),
(62, 'Occasions spéciales', 'Un bouquet spécial pour une occasion spéciale', 8, 'special5.jpg', '75'),
(63, 'Occasions spéciales', 'Un bouquet spécial pour une occasion spéciale', 8, 'special6.jpg', '75'),
(64, 'Occasions spéciales', 'Un bouquet spécial pour une occasion spéciale', 8, 'special7.jpg', '75'),
(65, 'Occasions spéciales', 'Un bouquet spécial pour une occasion spéciale', 8, 'special8.jpg', '75'),
(66, 'Saint valentin', 'Bouquet passion pour la Saint valentin', 9, 'saint-valentin1.jpg', '85'),
(67, 'Saint valentin', 'Bouquet passion pour la Saint valentin', 9, 'saint-valentin2.jpg', '85'),
(68, 'Saint valentin', 'Bouquet passion pour la Saint valentin', 9, 'saint-valentin3.jpg', '85'),
(69, 'Saint valentin', 'Bouquet passion pour la Saint valentin', 9, 'saint-valentin4.jpg', '85'),
(70, 'Saint valentin', 'Bouquet passion pour la Saint valentin', 9, 'saint-valentin5.jpg', '85'),
(71, 'Saint valentin', 'Bouquet passion pour la Saint valentin', 9, 'saint-valentin6.jpg', '85'),
(72, 'Saint valentin', 'Bouquet passion pour la Saint valentin', 9, 'saint-valentin7.jpg', '85'),
(73, 'Saint valentin', 'Bouquet passion pour la Saint valentin', 9, 'saint-valentin8.jpg', '85');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `name`, `Description`) VALUES
(1, 'Mariage', 'Le bouquet assorti à votre robe'),
(2, 'fiancailles', 'Un bouquet spécial pour un jour spécial'),
(3, 'Naissance', 'Maman comblée grâce à ce bouquet'),
(4, 'Fêtes des mères', 'Le plus beau bouquet pour notre maman '),
(5, 'Convalescence', 'Prompt rétablissement'),
(6, 'Deuil', 'Un bouquet pour exprimer notre peine.'),
(7, 'Anniversaire', 'Joyeux anniversaire'),
(8, 'Occasions spéciales', 'Toutes les occasions sont bonnes pour offrir un bouquet'),
(9, 'Saint Valentin', 'Exprimez votre passion en ce jour spécial');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
