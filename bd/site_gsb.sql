-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 30 mars 2023 à 09:38
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site_gsb`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

DROP TABLE IF EXISTS `activite`;
CREATE TABLE IF NOT EXISTS `activite` (
  `id_activite` int(11) NOT NULL AUTO_INCREMENT,
  `nom_activite` varchar(50) NOT NULL,
  `description_activite` varchar(200) NOT NULL,
  `horodate_activite` varchar(20) NOT NULL,
  `nombre_participations` int(11) NOT NULL,
  PRIMARY KEY (`id_activite`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id_activite`, `nom_activite`, `description_activite`, `horodate_activite`, `nombre_participations`) VALUES
(1, 'Conférence Yves-Gontran', 'Le scientifique Yves-Gontran donne une conférence sur l\'impacte des effets placébos sur l\'avenir des étudiants Français.', '14/09/2023 14:00', 15),
(2, 'Débat sur d\'Archibald Plafond', 'Les déclarations d\'Archibald Plafond sur la situation des pharmaciens ont fais scandales dans toutes la France, venez vous exprimer sur le sujet.', '08/07/2023 21:30', 13);

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
--

DROP TABLE IF EXISTS `inscriptions`;
CREATE TABLE IF NOT EXISTS `inscriptions` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(80) NOT NULL,
  `id_activite` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscriptions`
--

INSERT INTO `inscriptions` (`nom`, `prenom`, `mail`, `id_activite`) VALUES
('Oui', 'Stiti', 'StitiOui@gmail.com', 1),
('Poir', 'Alo', 'Alo.Poir@gmail.com', 1),
('Pomme', 'Dapi', 'mak.sim@gmail.com', 2),
('a', 'b', 'a.b@gmail.com', 1),
('Oui', 'Stiti', 'StitiOui@gmail.com', 1),
('Oui', 'Stiti', 'StitiOui@gmail.com', 1),
('Oui', 'Stiti', 'StitiOui@gmail.com', 1),
('Bouba', 'Lourson', 'potdemiel@gmiel.com', 2),
('Bouba', 'Lourson', 'potdemiel@gmiel.com', 2),
('Pain', 'Brioché', 'AAA@gmA.AA', 2),
('Pain', 'Brioché', 'aaa@gma.aa', 2),
('Pain', 'Brioché', 'aaa@gma.aa', 2),
('aaa', 'ddadsqd', 'rzfeqd@gaf.ca', 2),
('aaa', 'ddadsqd', 'rzfeqd@gaf.ca', 2),
('aaa', 'ddadsqd', 'rzfeqd@gaf.ca', 2),
('piano', 'belge', 'eqsd@fsd.ca', 1),
('piano', 'belge', 'eqsd@fsd.ca', 1),
('aaad', 'qsdsqd', 'sqfd@bril.ca', 2),
('aaad', 'qsdsqd', 'sqfd@bril.ca', 2),
('AAA', 'BBB', 'zqdsd@da.ca', 1),
('AAA', 'BBB', 'zqdsd@da.ca', 1),
('W', 'AAK', 'a@ga.cax', 2),
('W', 'AAK', 'a@ga.cax', 2),
('yt', 'jnyhbtgvf', 'dqsd@va.aa', 1),
('yt', 'jnyhbtgvf', 'dqsd@va.aa', 1),
('thgr', 'thbgfv', 'dasq@fqsd.aa', 1),
('thgr', 'thbgfv', 'dasq@fqsd.aa', 1),
('uhtygrt', 'yhtrgf', 'rgvfc@gmail.com', 1);

--
-- Déclencheurs `inscriptions`
--
DROP TRIGGER IF EXISTS `add_participation`;
DELIMITER $$
CREATE TRIGGER `add_participation` AFTER INSERT ON `inscriptions` FOR EACH ROW UPDATE activite
SET nombre_participations = nombre_participations + 1
WHERE activite.id_activite = NEW.id_activite
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `delete_participation`;
DELIMITER $$
CREATE TRIGGER `delete_participation` AFTER DELETE ON `inscriptions` FOR EACH ROW UPDATE activite
SET nombre_participations = nombre_participations - 1
WHERE activite.id_activite = OLD.id_activite
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `medicaments`
--

DROP TABLE IF EXISTS `medicaments`;
CREATE TABLE IF NOT EXISTS `medicaments` (
  `id_medicament` int(11) NOT NULL AUTO_INCREMENT,
  `nom_medicament` varchar(30) NOT NULL,
  `effets_therapeutiques` varchar(500) NOT NULL,
  `effets_secondaires` varchar(500) NOT NULL,
  `interactions_medicaments` varchar(500) NOT NULL,
  `image_medicament` varchar(250) NOT NULL,
  PRIMARY KEY (`id_medicament`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `medicaments`
--

INSERT INTO `medicaments` (`id_medicament`, `nom_medicament`, `effets_therapeutiques`, `effets_secondaires`, `interactions_medicaments`, `image_medicament`) VALUES
(1, 'Doliprane', 'Utilisé pour traiter la douleur et/ou la fièvre par exemple en cas de maux de tête, d\'état grippal, de douleurs dentaires, de courbatures, de règles douloureuses.', 'Rare : érythème, urticaire, rash cutané ont été rapportés. Leur survenue impose l\'arrêt définitif de ce médicament et des médicaments apparentés.', 'En cas de traitement par un anticoagulant oral et par du paracétamol aux doses maximales (4 g par jour) pendant au moins 4 jours, une surveillance accrue du traitement anticoagulant sera nécessaire.', 'https://pharmacieclement.pharminfo.fr/static/thumbnail/images/cip/3400935955838/3595583-DOLIPRANE-1000mg-comprime.png'),
(2, 'Dectancyl', 'Anti-inflammatoire stéroïdien qui appartient à la famille des corticoïdes. Dérivé de la cortisone. Sous prescription médicale.', 'Ce médicament ne doit pas être utilisé dans les cas suivants : infection ou mycose non contrôlées par un traitement adapté, maladie virale en évolution, psychose non contrôlée par un traitement.', 'Ce médicament peut interagir avec les médicaments qui affectent le rythme cardiaque. En cas de vaccination, l\'utilisation d\'un vaccin vivant est déconseillée.\r\n\r\n', 'https://ds.static.rtbf.be/article/image/1920x1080/f/9/e/cb21c10d8d32fa8b9881d72c5fd36fc8-1599653668.jpg'),
(3, 'Dexeryl', 'C\'est une crème émolliente et hydratante. Elle est utilisée dans le traitement d\'appoint de la sécheresse de la peau (notamment en cas de psoriasis) et des brûlures superficielles peu étendues.', 'Peu fréquents : irritation, douleur, rougeur au site d\'application urticaire, eczéma, démangeaisons.\r\nFréquence indéterminée : sensation de brûlure.', 'Aucunes.', 'https://www.pharmashopi.com/images/Image/Creme-Secheresses-Cutannees-Dexeryl-tube-de-50-g-3577056.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
