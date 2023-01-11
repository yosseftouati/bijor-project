-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 11 jan. 2023 à 22:40
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bijor`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `mail`, `pwd`) VALUES
(16, 'demo@demo.fr', 'demo');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `id` int(255) NOT NULL,
  `prenom` varchar(999) NOT NULL,
  `nom` varchar(999) NOT NULL,
  `tel` varchar(999) NOT NULL,
  `adresse` varchar(999) NOT NULL,
  `ville` varchar(999) NOT NULL,
  `pays` varchar(999) NOT NULL,
  `cp` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantite_selectionne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(100) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(999) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix` int(255) NOT NULL,
  `quantite` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `titre`, `description`, `image`, `prix`, `quantite`) VALUES
(1, 'Bracelet Tovia Argent Blanc Oxyde De Zirconium', 'Ce bracelet en argent 925/1000ème est caractérisé par sa maille forçat classique et intemporelle. Des pierres blanches serties barrettes apportent une touche de brillance au modèle. Ce joli bijou est paré d’oxydes de zirconium 0,035 carat. Un collier et des boucles d’oreilles du même modèle sont également disponibles.', 'https://www.histoiredor.com/dw/image/v2/BCQS_PRD/on/demandware.static/-/Sites-THOM_CATALOG/default/dw56f62219/images/FABFBZW07X-master.jpg?sw=268&sh=268', 150, 10),
(2, 'Bracelet Argent Blanc Laureto Oxyde De Zirconium', 'Bracelet Argent 925/1000 Solitaire Entourage Plein Et Sertis Griffes 1 Oxyde De Zirconium Maille Forçat 18cm', 'https://www.histoiredor.com/dw/image/v2/BCQS_PRD/on/demandware.static/-/Sites-THOM_CATALOG/default/dw3b5a278e/images/FABFBZW0VK-master.jpg?sw=268&sh=268', 250, 1),
(3, 'Bracelet Donatiane Argent Blanc Oxyde De Zirconium\r\n', 'Bracelet Argent 925/1000 Cœurs Ajourés Et Oxyde 18.5cm', 'https://www.histoiredor.com/dw/image/v2/BCQS_PRD/on/demandware.static/-/Sites-THOM_CATALOG/default/dw5cca07ca/images/FABFBZW805-master.jpg?sw=268&sh=268', 199, 0),
(4, 'Bracelet Bulle Argent Blanc Oxyde de Zirconium', 'Ce bracelet minimaliste en argent 925/1000ème est idéal pour un compléter un look chic et raffiné. Il est caractérisé par une délicate chaîne maille forçat de 18,5 cm de longueur, et se pare d’un motif double cercle entrelacé. Sobre et discret, ce bijou soulignera votre féminité', 'https://www.histoiredor.com/dw/image/v2/BCQS_PRD/on/demandware.static/-/Sites-THOM_CATALOG/default/dwb01956bf/images/FABFBW004Q-master.jpg?sw=268&sh=268', 180, 10),
(5, 'Collier Donatiane Argent Blanc Oxyde De Zirconium', 'Ce collier en argent 925/1000ème accessoirise toutes vos tenues. Il est fabriqué avec un pendentif double cœur ajouré entrelacé. L’un des deux cœurs bénéficie d’une finition polie très esthétique et l’autre est entouré d’oxyde de zirconium. Il existe aussi le bracelet du même modèle.', 'https://www.histoiredor.com/dw/image/v2/BCQS_PRD/on/demandware.static/-/Sites-THOM_CATALOG/default/dw9bbf9bdd/images/FACFBZW0DX-master.jpg?sw=268&sh=268', 219, 10),
(6, 'Collier Argent Blanc Lylwenn Oxydes De Zirconium', 'Collier Argent 925/1000 Solitaire Sertis Griffes 1 Oxyde De Zirconium 4mm Maille Forçat 45cm', 'https://www.histoiredor.com/dw/image/v2/BCQS_PRD/on/demandware.static/-/Sites-THOM_CATALOG/default/dw2ca47b6f/images/FACFBZW1QJ-master.jpg?sw=268&sh=268', 100, 10),
(7, 'Collier Sylvie Argent Blanc Oxyde De Zirconium', 'Simplicité et originalité sont les mots qui définissent ce collier. Il se démarque par son pendentif vague serti d’oxydes de zirconium. Avec sa chaîne à maille forçat, il habille votre décolleté de manière délicate. Ce ravissant collier se porte au quotidien pour parfaire votre allure.', 'https://www.histoiredor.com/dw/image/v2/BCQS_PRD/on/demandware.static/-/Sites-THOM_CATALOG/default/dwd51e5c30/images/FACFBZD111-master.jpg?sw=268&sh=268', 169, 0),
(8, 'Collier Giulya Argent Blanc Oxyde De Zirconium', 'Ce collier en argent 925/1000ème est un accessoire élégant et indémodable qui ira très bien avec vos tenues quotidiennes. Il séduit par son joli pendentif solitaire en oxyde de zirconium maintenu par des griffes. Le collier est réalisé avec une chaîne en maille vénitienne de 40 cm.', 'https://www.histoiredor.com/dw/image/v2/BCQS_PRD/on/demandware.static/-/Sites-THOM_CATALOG/default/dwf9cc706c/images/FACFBZW0OT-master.jpg?sw=268&sh=268', 139, 10),
(9, 'Bague Kassandra Argent Oxyde De Zirconium', 'Dotée d’un motif vagues entrelacées, cette bague en argent 925/1000ème ne manque pas d’originalité. Elle saura séduire les femmes à la recherche d’un bijou moderne. Agrémentée d’un pavage d’oxydes de zirconium blanc, cette bague aux lignes sophistiquées complète vos looks avec une subtile touche d’éclat.', 'https://www.histoiredor.com/dw/image/v2/BCQS_PRD/on/demandware.static/-/Sites-THOM_CATALOG/default/dw3f214bb9/images/FADFBZW13A-master.jpg?sw=268&sh=268', 289, 10),
(10, 'Bague Karin Argent Blanc Oxyde De Zirconium', 'Cette bague en argent 925/1000ème se démarque par la structure croisée de son anneau. Son charme est rehaussé par un pavage d’oxydes de zirconium. Ce modèle élégant et raffiné est également décoré d’une pierre centrale maintenue par 4 griffes qui lui confère de l’éclat.', 'https://www.histoiredor.com/dw/image/v2/BCQS_PRD/on/demandware.static/-/Sites-THOM_CATALOG/default/dwf77024ab/images/FADFBZW19S-master.jpg?sw=268&sh=268', 389, 10),
(11, 'Bague Solitaire Sade Argent Oxyde De Zirconium', 'Cette jolie bague solitaire en argent 925/1000ème complète votre look avec élégance et féminité. Elle saura vous séduire par son design intemporel et indémodable. Sa pierre principale sertie sur 4 griffes est sublimée par des oxydes de zirconium blancs incrustés sur le corps de bague.', 'https://www.histoiredor.com/dw/image/v2/BCQS_PRD/on/demandware.static/-/Sites-THOM_CATALOG/default/dwcdbe7c67/images/FADFBZW1EO-master.jpg?sw=268&sh=268', 269, 10),
(12, 'Bague Lysie Argent Blanc Oxyde De Zirconium', 'Cette bague en argent 925/1000ème vous fera craquer avec son design délicat et moderne. Elle vous accompagne en toutes occasions pour apporter un petit détail raffiné et glamour à votre look. Sertie d’un oxyde de zirconium blanc, elle sublime vos gestes avec un subtil éclat.', 'https://www.histoiredor.com/dw/image/v2/BCQS_PRD/on/demandware.static/-/Sites-THOM_CATALOG/default/dw55b6059d/images/FADFBZW13Y-master.jpg?sw=268&sh=268', 179, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
