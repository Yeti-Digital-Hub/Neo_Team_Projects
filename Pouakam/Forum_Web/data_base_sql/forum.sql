-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 28 août 2025 à 11:24
-- Version du serveur : 8.0.43-0ubuntu0.24.04.1
-- Version de PHP : 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

CREATE TABLE `answers` (
  `id` int NOT NULL,
  `id_author` int NOT NULL,
  `pseudo_author` varchar(255) DEFAULT NULL,
  `id_question` int NOT NULL,
  `content_answer` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `answers`
--

INSERT INTO `answers` (`id`, `id_author`, `pseudo_author`, `id_question`, `content_answer`) VALUES
(5, 6, 'john', 8, 'Moi je connais très bien comment sa marche, contacte moi en ib'),
(7, 11, 'martin', 8, 'd&#039;accord boss'),
(8, 5, 'nana', 8, 'Fait des recherches sur docker et trouveras la solution à ta question'),
(9, 11, 'martin', 2, 'Ton site web fait dans quoi exactement ?'),
(10, 11, 'martin', 11, 'Es-ce que tu as déjà eu travailler sur un projet sérieux ?'),
(11, 11, 'martin', 17, 'Je te conseiller Laravel il est très populaire pour les I-Tech Camerounaises'),
(12, 11, 'martin', 19, 'Enffet un backlog (Product Backlog) est un document contenant toute les exigences d&#039;un produit , rangées dans l&#039;ordre de priorité<br />\r\nil est gérer par le product Owner'),
(13, 11, 'martin', 16, 'Le Cloud computing est un service de stockage des données sur des serveurs à distance. '),
(14, 6, 'john', 16, 'Merci'),
(15, 5, 'nana', 11, 'Oui '),
(16, 5, 'nana', 19, 'Le Backlog est un artéfacte srcum'),
(17, 14, 'Backend_DevOps', 19, 'Merci');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int NOT NULL,
  `title` text,
  `description` text,
  `content` text,
  `id_author` int NOT NULL,
  `pseudo_author` varchar(255) DEFAULT NULL,
  `date_publish` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `title`, `description`, `content`, `id_author`, `pseudo_author`, `date_publish`) VALUES
(2, 'Comment améliorer le référencement (SEO) d’un site web ?', 'Avoir plus de visibilité sur Google.', 'J’ai un site vitrine en HTML/CSS/PHP, mais il n’apparaît pas bien dans Google. Quels sont les points essentiels pour optimiser le référencement naturel (SEO) sans passer par la publicité payante ?', 5, 'nana', '23/08/2025'),
(4, 'Quelle est la différence entre INNER JOIN et LEFT JOIN en SQL ?', 'Comprendre les différences entre jointures.', 'Je vois souvent des requêtes avec INNER JOIN et LEFT JOIN, mais je ne comprends pas bien dans quels cas utiliser l’un ou l’autre. Pouvez-vous m’expliquer avec un exemple simple de deux tables (utilisateurs et commandes) ?', 5, 'nana', '23/08/2025'),
(7, 'Comment fonctionne le modèle économique de plateformes comme Uber ?', 'Question sur le business model des startups numériques.', 'Je suis curieux de savoir comment Uber ou Bolt génèrent leurs revenus. Est-ce uniquement grâce aux commissions sur les courses, ou y a-t-il d’autres sources de revenus (publicité, données, abonnements) ?', 11, 'martin', '23/08/2025'),
(8, 'Comment déployer une application web sur un serveur Ubuntu ?', 'Hébergement d’un projet PHP/MySQL.', 'J’ai développé une application web en PHP/MySQL et je voudrais la mettre en ligne sur un serveur Ubuntu. Quels sont les étapes essentielles pour installer Apache, MySQL et PHP (LAMP) et configurer mon projet ?', 11, 'martin', '23/08/2025'),
(11, 'C’est quoi la méthodologie Agile Scrum ?', 'Organisation et gestion d’un projet numérique.', 'J’entends souvent parler d’Agile et Scrum, mais je ne comprends pas exactement en quoi ça consiste. Pouvez-vous m’expliquer simplement comment fonctionne Scrum (sprint, backlog, rôle du Scrum Master) ?', 5, 'nana', '24/08/2025'),
(12, 'Différence entre Git et GitHub', 'Confusion sur l’outil de versionning.<br />\r\n', 'Salut,<br />\r\nJe débute avec le développement collaboratif et je vois souvent Git et GitHub utilisés ensemble. Est-ce que ce sont la même chose ? Si non, quelles sont leurs différences principales et pourquoi a-t-on besoin des deux ?', 6, 'john', '24/08/2025'),
(13, 'Comment installer LAMP sur Ubuntu 24.04 ?', 'Problème d’installation de serveur local sous Ubuntu 24.04.', 'Bonjour à tous,<br />\r\nJ’essaie d’installer LAMP sur ma machine Ubuntu 24.04, mais je ne comprends pas bien la différence entre Apache, PHP et MySQL dans l’installation. Est-ce que quelqu’un peut m’expliquer la bonne démarche et si possible me donner les commandes précises à taper dans le terminal ?', 6, 'john', '24/08/2025'),
(14, 'Comment créer un système de login sécurisé en PHP sans base de données ?', 'Développement d’un système d’authentification avec fichiers JSON.', 'Bonjour,<br />\r\nJe développe un petit projet de gestion de tâches en PHP. Je voudrais ajouter un système de connexion mais sans utiliser de base de données, juste un fichier texte ou JSON. Comment gérer la sécurité pour éviter que n’importe qui puisse accéder sans mot de passe valide ?', 6, 'john', '24/08/2025'),
(16, 'Qu’est-ce que le cloud computing ?', 'Définition et exemples.', 'Hello ,<br />\r\nJ’entends souvent parler de “cloud computing” mais je n’ai pas bien saisi ce que ça signifie. Pouvez-vous m’expliquer en termes simples ce que c’est, avec quelques exemples concrets (Google Drive, AWS, etc.) ?', 6, 'john', '24/08/2025'),
(17, 'Laravel ou Symfony pour un projet web au Cameroun ?', 'Choix entre deux frameworks PHP.', 'Bonjour à tous,<br />\r\nJe voudrais développer une plateforme de mise en relation entre clients et prestataires au Cameroun. J’hésite entre Laravel et Symfony. Lequel serait le plus adapté en termes de rapidité, communauté locale et hébergement facile ?', 14, 'Backend_DevOps', '24/08/2025'),
(19, 'Comment fonctionne le système de backlog en Scrum ?', 'Méthodologie agile.', 'Bonjour la communauté,<br />\r\nJ’apprends actuellement la méthodologie agile Scrum. J’aimerais comprendre comment on gère un backlog produit et un backlog sprint. Avez-vous un exemple concret de tableau de backlog pour un projet simple ?', 14, 'Backend_DevOps', '24/08/2025'),
(20, 'Différence entre SaaS, PaaS et IaaS', 'Clarification des modèles de services Cloud computing.', 'Coucou,<br />\r\nDans mes cours on me parle souvent de SaaS, PaaS et IaaS, mais j’ai encore du mal à voir la différence. Pouvez-vous donner des exemples d’outils qui appartiennent à chaque catégorie ?', 14, 'Backend_DevOps', '24/08/2025'),
(21, 'Comment optimiser les performances d’un site WordPress ?', 'Améliorer la vitesse et le SEO.', 'Salut ,<br />\r\nJ’ai créé un site WordPress pour un projet, mais il est assez lent à charger. Quels sont les meilleurs plugins ou techniques pour améliorer la rapidité et optimiser le SEO du site ?', 11, 'martin', '24/08/2025');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `name`, `surname`, `password`) VALUES
(1, '@backend', 'Mamba', 'Germin', '$2y$12$rUpsVjjPD.0.pJeCyM7Ba.B2PmBqRdvU4WKZyKv6onhFhVpn0vZnS'),
(2, '@paulgiraud', 'Paul', 'Giraud', '$2y$12$/2XFQPefRkcS/Auv0OwjTewJEF06lMumo8uI02j1gGVjvT7DytFmy'),
(3, '@jack', 'jack', 'asso', '$2y$12$ntyhRQo3dNnHrupGfxjwCubmdxbWSApUPvVzYtIMpgSr3ioc2vrFa'),
(4, 'Admin', 'Admin', 'Admin', '$2y$12$Ul2MIMCpXAjObNahCtvTBu/6tB3vQmxLsvhtkU/ofcDsP1PxBTvG2'),
(5, 'nana', 'nana', 'nana', '$2y$12$Vdw7Brleztk62RmCUQf1luErKxTzkI.nUKxYrA0h07S4DVD2JKsaK'),
(6, 'john', 'john', 'john', '$2y$12$98ZA4U4Rcc04ygHuoYhxS.6mn7m1z/qPYDC2qN9tAUMqnk5Nar5wy'),
(7, 'VanelleBackend', 'Vanelle', 'Backend', '$2y$12$fw/G7SLh5Y13aCeXmGsoPuRTg8kVmBa7APnZLSmO2xqgsFZTS189.'),
(8, 'Darcelle', 'darcelle', 'darcelle', '$2y$12$tE2Drhk7OyH52RswG1C/H.J61TCjyTY1cd.CLkwVO.F7dRJV2vgVW'),
(9, 'mol', 'mol', 'mol', '$2y$12$aavzM7ihiwsb3pnxHqm.wOEY2OSR7MlK9PzTbya5y8U8exS7eh9gq'),
(10, 'dark', 'dark', 'dark', '$2y$12$bPFS73TerNV.kUFxJXnco.wDfH39eClZTnVILIyMMEmfXWWbu2QQS'),
(11, 'martin', 'martin', 'martin', '$2y$12$YCS3jMrPZKci2.V67B8XP.0Z9KljRoEg/cRJ1FUzW3dc8gVkp8hM6'),
(12, 'lopez', 'lopez', 'lopez', '$2y$12$z6N.k04vV3Qebe6aOML5TOU8k3lTzo8/oAdKqaKzvbJpxB9s9PxV6'),
(13, 'kala', 'kala', 'kala', '$2y$12$J0JdqrTJHtmu77YNYo5uh.kU3Dy85fgyFdribVdm18jOtTR.Ot2Ym'),
(14, 'Backend_DevOps', 'Backend', 'DevOps', '$2y$12$MGx2MX8JhdHLSIHs2As2l.uBZF8KdiJiFbFXmkISW9H9ehfUlHetW');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
