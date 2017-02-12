-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 12 Février 2017 à 13:28
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gdg`
--

-- --------------------------------------------------------

--
-- Structure de la table `gouvernorat`
--

CREATE TABLE IF NOT EXISTS `gouvernorat` (
  `gouv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `gouvernorat`
--

INSERT INTO `gouvernorat` (`gouv`) VALUES
('Ariana'),
('Beja'),
('Ben Arous'),
('Bizerte'),
('Djerba'),
('Gabes'),
('Gafsa'),
('Jendouba'),
('Kairaouan'),
('Kasserine'),
('Kebili'),
('Kef'),
('Mahdia'),
('Mannouba'),
('M?denine'),
('Monastir'),
('Nabeul'),
('Sfax'),
('Sidi Bouzid'),
('Silliana'),
('Sousse'),
('Tataouine'),
('Tozeur'),
('Tunis'),
('Zaghouane'),
('Ariana'),
('Beja'),
('Ben Arous'),
('Bizerte'),
('Djerba'),
('Gabes'),
('Gafsa'),
('Jendouba'),
('Kairaouan'),
('Kasserine'),
('Kebili'),
('Kef'),
('Mahdia'),
('Mannouba'),
('M?denine'),
('Monastir'),
('Nabeul'),
('Sfax'),
('Sidi Bouzid'),
('Silliana'),
('Sousse'),
('Tataouine'),
('Tozeur'),
('Tunis'),
('Zaghouane'),
('Ariana'),
('Beja'),
('Ben Arous'),
('Bizerte'),
('Djerba'),
('Gabes'),
('Gafsa'),
('Jendouba'),
('Kairaouan'),
('Kasserine'),
('Kebili'),
('Kef'),
('Mahdia'),
('Mannouba'),
('M?denine'),
('Monastir'),
('Nabeul'),
('Sfax'),
('Sidi Bouzid'),
('Silliana'),
('Sousse'),
('Tataouine'),
('Tozeur'),
('Tunis'),
('Zaghouane');

-- --------------------------------------------------------

--
-- Structure de la table `hal`
--

CREATE TABLE IF NOT EXISTS `hal` (
  `id` int(11) NOT NULL,
  `hal` varchar(9000) NOT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `num` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`num`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Contenu de la table `hal`
--

INSERT INTO `hal` (`id`, `hal`, `likes`, `dislikes`, `date`, `num`) VALUES
(9, 'solution', 0, 0, '2017-02-12 11:44:05', 49),
(9, 'tghdfgwfdghhfgh', 0, 0, '2017-02-12 11:39:35', 48),
(2, 'ye 7asra 3la 9bal', 136, 5, '2017-02-12 11:28:39', 46),
(2, 'rabi m3akom', 50, 0, '2017-02-12 11:28:44', 47),
(2, 'w howa mazel fema ta3lim ', 65, 60, '2017-02-12 11:28:33', 45),
(18, 'je suis avec vous ', 100, 13, '2017-02-12 11:28:22', 44),
(18, 'mazel 3andna amel <3', 19, 96, '2017-02-12 11:28:15', 43),
(18, 'sayé mche el domaine mte3 santé', 60, 2, '2017-02-12 11:28:08', 42),
(18, 'santé madha !!', 3, 163, '2017-02-12 11:27:58', 41),
(9, 'hahahahhaha tdha7kou', 19, 278, '2017-02-12 11:26:55', 40),
(9, 'hahahahhaha tdha7kou', 0, 1503258, '2017-02-12 11:26:20', 39),
(9, 'lazemkom daf3ou aala 7a9kom ', 163, 0, '2017-02-12 11:26:11', 38),
(9, 'wa9teh el greve ????', 19864, 1, '2017-02-12 11:25:47', 37),
(9, '3andkom el 7a9 , je vous encourage', 1986, 0, '2017-02-12 11:25:14', 36);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE IF NOT EXISTS `reclamation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `objet` text NOT NULL,
  `gouvernorat` text NOT NULL,
  `domaine` text NOT NULL,
  `societe` text NOT NULL,
  `message` text NOT NULL,
  `preuve` text NOT NULL,
  `youtube` text NOT NULL,
  `picasa` text NOT NULL,
  `drive` text NOT NULL,
  `maps` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `reclamation`
--

INSERT INTO `reclamation` (`id`, `objet`, `gouvernorat`, `domaine`, `societe`, `message`, `preuve`, `youtube`, `picasa`, `drive`, `maps`) VALUES
(29, 'zaf', 'zf', 'zaf', 'fazf', 'fazf', 'la', '', '', '', ''),
(30, 'education', 'Nabeul', 'secondaire', 'blabla', 'blabla', 'la', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `reclamations`
--

CREATE TABLE IF NOT EXISTS `reclamations` (
  `id` int(11) NOT NULL,
  `objet` varchar(900) NOT NULL,
  `text` varchar(900) NOT NULL,
  `gov` varchar(900) NOT NULL,
  `maps` varchar(900) NOT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reclamations`
--

INSERT INTO `reclamations` (`id`, `objet`, `text`, `gov`, `maps`, `likes`, `dislikes`) VALUES
(2, 'El ta3lim', 'ena tawa na9ra f école .... , mafihesh krasi', 'Ariana', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51070.37289625566!2d10.135340428331647!3d36.8688529130752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb4e31471bf3%3A0x65bc5efbce842198!2sAriana!5e0!3m2!1sfr!2stn!4v1486894681345', 80, 58),
(18, 'La santé', 'eli ritou lyoum f charles nicoles chay ybaki', 'Tunis', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.227984838854!2d10.174058464829976!3d36.78908382995084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd3408dc7371ab%3A0xf288bbbada36a2b9!2sBab+Alioua%2C+Tunis!5e0!3m2!1sen!2stn!4v1486860373627', 40, 25),
(9, 'Ingénieurie', 'vraiment chay ynate9... :( ', 'Tunis', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6579.691964419973!2d10.194931127422828!3d36.76599778018958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd3408dc7371ab%3A0xf288bbbada36a2b9!2sBab+Alioua%2C+Tunis!5e0!3m2!1sen!2stn!4v1486861141895', 187, 30);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
