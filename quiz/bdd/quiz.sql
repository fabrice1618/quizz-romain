-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 25 mai 2020 à 12:23
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
-- Base de données :  `quiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `label`) VALUES
(4, 'Que signifie PHP ? '),
(5, 'Quelle est l\'utilité de l\'opérateur || ?'),
(6, 'Quelle fonction permet d\'effacer un fichier ? '),
(7, 'Comment peut-on trier un tableau en ordre inverse ?'),
(8, 'Comment définit-on une constante ? '),
(9, 'Quelle instruction n\'est pas le nom d\'une fonction ? '),
(10, 'Quelle fonction retire un élément de la fin d\'un tableau ? '),
(11, 'Quelles valeurs peut prendre le type booléen ?'),
(12, 'La boucle for ($i=0 ; $i<=3 ; $i++ ) { echo $i; }.'),
(13, 'A quoi sert la fonction copy() ?'),
(14, 'Quelle fonction crée un cookie ?'),
(15, 'Comment supprimer un cookie ?'),
(16, 'Que contient __FILE__ pendant l\'exécution d\'un script PHP ?'),
(17, 'Que déduire si l\'on obtient l\'erreur 400 lors de l\'accès a un fichier php ?'),
(18, 'Que fait array_pop() ?'),
(19, 'Quelle fonction permet d\'écrire dans un fichier ?'),
(20, 'Que vaut la constante M_PI_2 ?'),
(21, 'Comment comparer deux tableaux ?'),
(22, 'Que fait array_push() ?'),
(23, 'Comment trouver une valeur dans un tableau ?');

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

DROP TABLE IF EXISTS `reponses`;
CREATE TABLE IF NOT EXISTS `reponses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_question` int(11) NOT NULL,
  `label` varchar(250) NOT NULL,
  KEY `id_question` (`id_question`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `bonnereponce_score` int(11) NOT NULL,
  `mauvaisereponse_score` int(11) DEFAULT NULL,
  PRIMARY KEY (`bonnereponce_score`),
  KEY `bonnereponce_score` (`bonnereponce_score`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(250) NOT NULL,
  `prenom_user` varchar(250) DEFAULT NULL,
  `login_user` varchar(250) DEFAULT NULL,
  `mdp_user` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom_user`, `prenom_user`, `login_user`, `mdp_user`) VALUES
(5, 'combet', 'karima', 'kary18', 'a36fb39c270273f57203e950029dc0b646b5c0e8'),
(6, 'lola', 'thomas', 'lol', '11b30348db5dca1cb46180ee7be76851dbe37007'),
(7, 'sana', 'sana', 'sousou', 'd9c764b6dd8cada23b94faf70818be74e3363deb'),
(8, 'samir', 'abdu', 'sousou', '5e1820d03e835d0450cc169fb349ffeeab6c9994'),
(9, 'samir', 'abdu', 'sousou', '5e1820d03e835d0450cc169fb349ffeeab6c9994'),
(10, 'sana', 'sana', 'sousou', '9e9dccc7a6921d3bacde582f50dcc97586bac3da'),
(12, 'wiam', 'wiam', 'wiwi', '1b36c1f5c33a4aa03983a2def9f34aa30465bc60'),
(13, 'wiam', 'wiam', 'wiwi', '1b36c1f5c33a4aa03983a2def9f34aa30465bc60'),
(14, 'wiam', 'wiam', 'wiwi', '1b36c1f5c33a4aa03983a2def9f34aa30465bc60'),
(15, 'wiam', 'wiam', 'wiwi', '1b36c1f5c33a4aa03983a2def9f34aa30465bc60'),
(16, 'wiam', 'wiam', 'wiwi', '1b36c1f5c33a4aa03983a2def9f34aa30465bc60'),
(17, 'manal', 'manal', 'manou', '78f1a22e3e61903a27b7ffaa84797e3369fef567'),
(18, 'abdu', 'abdu', 'abdu14', 'ef0405c02a5debcf1c6cb1ff07203ed26efe211c'),
(19, 'abdu', 'abdu', 'abdu14', 'ef0405c02a5debcf1c6cb1ff07203ed26efe211c'),
(20, 'adel', 'adel', 'adel11', 'b01db4693baa9a9b4db120b9ac7b9eeaf7231114'),
(21, 'adel', 'adel', 'adel11', 'b01db4693baa9a9b4db120b9ac7b9eeaf7231114'),
(22, 'karim', 'karim', 'karim22', 'b01db4693baa9a9b4db120b9ac7b9eeaf7231114'),
(23, 'laila', 'laila', 'laila45', 'b01db4693baa9a9b4db120b9ac7b9eeaf7231114'),
(24, 'sara', 'sara', 'sara12', '61934aba160715a981ecf1ca5bd23f2537f611e2'),
(30, 'adel', '', '', '6169576616773866eaa28065993664451515725f'),
(31, '', '', '', '6169576616773866eaa28065993664451515725f'),
(32, '', '', '', '6169576616773866eaa28065993664451515725f'),
(33, '', '', '', '6169576616773866eaa28065993664451515725f'),
(34, 'nn', 'nn', '', '6169576616773866eaa28065993664451515725f'),
(35, '', '', '', '6169576616773866eaa28065993664451515725f'),
(36, '', '', '', '6169576616773866eaa28065993664451515725f'),
(37, '', '', '', '6169576616773866eaa28065993664451515725f'),
(38, '', '', '', '6169576616773866eaa28065993664451515725f'),
(39, '', '', '', '6169576616773866eaa28065993664451515725f'),
(40, '', '', '', '6169576616773866eaa28065993664451515725f'),
(41, 'fatima', 'fatima', 'fati', '2fed7323905d59bd4bdda96b3de974b9c781d899'),
(42, 'saida', 'saida', 'soso', '2fed7323905d59bd4bdda96b3de974b9c781d899'),
(43, 'combet', 'karima combet', 'kary', '2fed7323905d59bd4bdda96b3de974b9c781d899'),
(44, 'adel', 'laila', 'adel11', '2fed7323905d59bd4bdda96b3de974b9c781d899'),
(45, 'david', 'davis', 'dd', '2fed7323905d59bd4bdda96b3de974b9c781d899'),
(46, 'combet', 'karima combet', 'mazen', '2fed7323905d59bd4bdda96b3de974b9c781d899'),
(47, 'lola', 'karima ', 'kary', '2fed7323905d59bd4bdda96b3de974b9c781d899'),
(48, 'coucou', 'coucou', 'coucou', '2fed7323905d59bd4bdda96b3de974b9c781d899'),
(49, 'coucou', 'coucou', 'coucou', '2fed7323905d59bd4bdda96b3de974b9c781d899'),
(50, '', '', '', '6169576616773866eaa28065993664451515725f'),
(51, '', '', '', '6169576616773866eaa28065993664451515725f'),
(52, '', '', '', '6169576616773866eaa28065993664451515725f'),
(53, 'combet', '', '', '6169576616773866eaa28065993664451515725f'),
(54, 'dd', 'dd', 'dd', '2fed7323905d59bd4bdda96b3de974b9c781d899'),
(55, 'ss', 'ss', 'ss', '2fed7323905d59bd4bdda96b3de974b9c781d899'),
(56, 'll', 'lll', 'll', '2fed7323905d59bd4bdda96b3de974b9c781d899'),
(57, 'kkk', 'kk', 'kk', '2fed7323905d59bd4bdda96b3de974b9c781d899'),
(58, 'cc', 'cc', 'cc', '2fed7323905d59bd4bdda96b3de974b9c781d899'),
(59, 'tt', 'tt', 'tt', '2fed7323905d59bd4bdda96b3de974b9c781d899'),
(60, 'karima', 'karima ', 'mazen12', '2fed7323905d59bd4bdda96b3de974b9c781d899'),
(61, 'nico', 'nico', 'nico12', '2fed7323905d59bd4bdda96b3de974b9c781d899');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD CONSTRAINT `reponses_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `score` (`bonnereponce_score`);

--
-- Contraintes pour la table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `fk_score1` FOREIGN KEY (`bonnereponce_score`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
