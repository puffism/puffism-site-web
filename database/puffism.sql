-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 11 mai 2019 à 20:47
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `puffism`
--

-- --------------------------------------------------------

--
-- Structure de la table `activity`
--

DROP TABLE IF EXISTS `activity`;
CREATE TABLE IF NOT EXISTS `activity` (
  `activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_description` text NOT NULL,
  `activity_title` varchar(50) NOT NULL,
  `activity_category` varchar(30) NOT NULL,
  `activity_city` varchar(45) NOT NULL,
  `activity_country` varchar(45) NOT NULL,
  `activity_photo` varchar(100) NOT NULL DEFAULT 'Erreur',
  `user_id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`activity_id`),
  KEY `user_id_constraint` (`user_id`),
  KEY `image_id` (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `activity`
--

INSERT INTO `activity` (`activity_id`, `activity_description`, `activity_title`, `activity_category`, `activity_city`, `activity_country`, `activity_photo`, `user_id`, `image_id`) VALUES
(1, 'Promenade et découverte du jardin du Luxembourg, du Louvre et de l’architecture parisienne', 'Découverte du quartier du Louvre', 'Sightseeing & Walks', 'Paris', 'France', 'quartierdulouvre', 2, NULL),
(2, 'Découvrir Paris en s\'élançant dans une chasse au trésor effrénée', 'Chasse au trésor', 'Fun', 'Paris', 'France', 'chasseautresorparis', 3, NULL),
(3, 'Le Barathon revient pour fêter son anniversaire ! Un année après son lancement, on ne pouvait pas faire autrement. Plusieurs établissements de Toulon s’associent et vous proposent des tarifs préférentiels tout au long de la soirée de ce samedi 20 octobre. Pour participer, c’est simple : vous achetez votre écocup (2€), récupérez le flyer à faire tamponner dans tous les établissements et vous baladez en profitant des tarifs partenaires.\r\n\r\nDurant toute la soirée, les déplacements sont libres : vous n’avez qu’à choisir votre itinéraire et découvrir chacun des bars partenaires sur votre chemin.\r\n\r\n \r\n\r\nVoici la liste des établissements participants : Joséphine, Le Brun Noir, El Paso, La Cale Sèche, Dany’s Pub, Pub Le Finnians, Bar Le Neptunia, Espit Chupitos, La Tribune, Le Corsaire, le Globe Trotteur (capacité d’accueil limitée) et Art & Brunch (capacité d’accueil limitée).\r\n\r\nL’organisateur tient toutefois à rappeler certains points :\r\n– L’abus d’alcool est dangereux pour la santé\r\n– Il s’agit d’un événement privé. Ce n’est pas un appel à rassemblement sur l’espace public.\r\n– Les établissements ouvrent et ferment à leurs horaires habituels. Merci de les respecter. De plus, respectez le voisinage pour qu’aucun établissement n’ait à subir des conséquences. Nous ne pouvons être tenus responsables de vos actes.', 'Barathon', 'Fun', 'Toulon', 'France', 'Barathon', 1, NULL),
(4, 'Rencontrez notre guide Benjamin autour de dégustations de spécialités franco-coréennes afin de découvrir l\'apport de l\'influence de la gastronomie française sur la gastronomie coréenne ', 'Dégustation de pâtisseries franco-coréennes', 'Gastronomy', 'Paris', 'France', 'plus82', 5, NULL),
(5, 'Découvrir l\'ambiance des matchs français avec Quentin qui vous fera passer un moment inoubliable autour d\'événements sportifs.', 'Assister à un match au célèbre parc des Princes', 'Sports', 'Paris', 'France', 'parcdesprinces', 4, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(100) NOT NULL DEFAULT 'profile_default',
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`image_id`, `image_name`) VALUES
(1, 'profile_default');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(30) NOT NULL,
  `reservation_date_time` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`reservation_id`),
  KEY `activity_id` (`activity_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `activity_id`, `reservation_date_time`, `user_id`) VALUES
(1, 4, '2019-05-10 10:34:09', 9),
(2, 4, '2019-05-10 10:34:09', 13),
(3, 4, '2019-05-10 10:34:09', 14);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(25) NOT NULL,
  `user_last_name` varchar(25) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_mail` varchar(30) NOT NULL,
  `user_password` varchar(25) NOT NULL,
  `user_phone` char(10) NOT NULL,
  `user_privilege` varchar(15) NOT NULL DEFAULT 'tourist',
  `image_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_image_avatar` (`image_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `user_first_name`, `user_last_name`, `user_gender`, `user_mail`, `user_password`, `user_phone`, `user_privilege`, `image_user_id`) VALUES
(1, 'Simon', 'Zhang', 'Male', 'aznzhang45@gmail.com', 'simsim02', '0611072045', 'Local guide', 1),
(2, 'Noor', 'Kardache', 'Female', 'noorkardache@gmail.com', 'Noona654', '0608162242', 'Local guide', 1),
(3, 'Ilan', 'Saidi', 'Male', 'Ilanouche999@gmail.com', 'Ilanouche201', '0687565179', 'Local guide', 1),
(4, 'Quentin', 'Lanot', 'Male', 'quentin.lanot@gmail.com', 'Tarantino723', '0651887892', 'Local guide', 1),
(5, 'Benjamin', 'Tan', 'Male', 'tanb01@yahoo.com', 'ben8902', '0783386477', 'Local guide', 1),
(6, 'Louise', 'DUBOIS', 'Female', 'louise.dubois@ece.fr', 'ery', '0120563594', 'tourist', 1),
(7, 'Mathilde', 'Buono', 'Female', 'mathilde.buono@edu.ece.fr', 'mathildelaplusbelle', '0120563594', 'tourist', 1),
(8, 'Souad', 'El-sayed', 'Female', 'elsayed.sou@gmail.com', 'sousou89', '0120563594', 'tourist', 1),
(9, 'Colin', 'Ferret', 'Male', 'ferret.colin@gmail.com', 'coline56', '0120563594', 'tourist', 1),
(11, 'Oscar', 'Marze', 'Other', 'oscar@marze.org', 'oscarou.com', '0632304199', 'tourist', 1),
(12, 'Hélène ', 'Zhang', 'Male', 'helenezhang98@hotmail.com', '0000', '222222323', 'tourist', 1),
(13, 'test', 'test', 'Male', 'test@test.com', 'test', '0611072045', 'tourist', 1),
(14, 'test1', 'test1', 'Male', 'tes1@test1.com', 'test1', '0611072045', 'tourist', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `image` (`image_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id_constraint` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`activity_id`) REFERENCES `activity` (`activity_id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_image_avatar` FOREIGN KEY (`image_user_id`) REFERENCES `image` (`image_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
