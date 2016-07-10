-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Dim 10 Juillet 2016 à 21:28
-- Version du serveur :  5.6.30-0ubuntu0.14.04.1
-- Version de PHP :  5.6.22-1+donate.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `citycom2`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` decimal(6,2) NOT NULL,
  `ref` bigint(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `img` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `couleur` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `nom`, `description`, `prix`, `ref`, `stock`, `img`, `created_at`, `updated_at`, `deleted_at`, `type`, `couleur`) VALUES
(73, 'Cailloux multicolor', 'Sachet de cailloux de 1kg naturellement poli par la mer. Exellent si vous souhaitez avoir des reflets au fond de vos bassins, piscine, aquarium.', 12.80, 453098, 450, 'caillou-multicolor.jpg', '2016-07-10 08:13:51', '2016-07-10 08:13:51', NULL, 'caillou', 'multicolor'),
(77, 'Menhir', 'Taillé à la main par Obélix lui-même, ce magnifique menhir comblera toute vos espérance de décortation', 4000.00, 111177665554, 80, 'menhir.jpg', '2016-07-10 13:21:11', '2016-07-10 13:21:11', NULL, 'autre', 'gris'),
(86, 'Galet divers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor felis ac sem molestie auctor. Aliquam eu ultricies urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In molestie dolor ut libero egestas cursu', 2.00, 2347448, 860, 'galet-multicolor-multitaille.jpg', '2016-07-10 16:12:12', '2016-07-10 16:12:12', NULL, 'galet', 'multicolor'),
(89, 'Galet noir', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor felis ac sem molestie auctor. Aliquam eu ultricies urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In molestie dolor ut libero egestas cursu', 3.00, 554345678, 340, 'galet-noir.jpg', '2016-07-10 16:14:21', '2016-07-10 16:14:21', NULL, 'galet', 'noir'),
(90, 'Gros galet noir', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor felis ac sem molestie auctor. Aliquam eu ultricies urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In molestie dolor ut libero egestas cursu', 5.00, 9934567, 230, 'galet-noir-gros.jpg', '2016-07-10 16:14:48', '2016-07-10 16:14:48', NULL, 'galet', 'noir'),
(91, 'Roche noire de Malaisie', 'Roche venue de loin pour vos beaux jardins.', 46.00, 45234567, 1200, 'roche-noir.jpg', '2016-07-10 16:15:55', '2016-07-10 16:15:55', NULL, 'roche', 'noir'),
(92, 'Roche rose de Malaisie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor felis ac sem molestie auctor. Aliquam eu ultricies urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In molestie dolor ut libero egestas cursu', 67.00, 563245678, 790, 'roche-blanche.jpg', '2016-07-10 16:16:49', '2016-07-10 16:16:49', NULL, 'roche', 'rose'),
(93, 'Roche multicolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor felis ac sem molestie auctor. Aliquam eu ultricies urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In molestie dolor ut libero egestas cursu', 130.00, 5534567, 670, 'roche-multicolor.jpg', '2016-07-10 16:18:04', '2016-07-10 16:18:04', NULL, 'roche', 'multicolor'),
(94, 'Galet rose', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor felis ac sem molestie auctor. Aliquam eu ultricies urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In molestie dolor ut libero egestas cursu', 23.00, 25475732, 320, 'galet-rose.jpg', '2016-07-10 16:19:30', '2016-07-10 16:19:30', NULL, 'galet', 'rose'),
(95, 'Roche plate grise', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor felis ac sem molestie auctor. Aliquam eu ultricies urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In molestie dolor ut libero egestas cursu', 78.00, 2345689, 230, 'roche-plate-grise.jpg', '2016-07-10 16:42:55', '2016-07-10 16:42:55', NULL, 'roche', 'gris'),
(96, 'Roche polie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor felis ac sem molestie auctor. Aliquam eu ultricies urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In molestie dolor ut libero egestas cursu', 67.00, 456944567, 345, 'roche-polie.jpg', '2016-07-10 16:44:20', '2016-07-10 16:44:20', NULL, 'roche', 'gris'),
(97, 'Galet gris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor felis ac sem molestie auctor. Aliquam eu ultricies urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In molestie dolor ut libero egestas cursu', 2.00, 6789043, 600, 'galet-gris.jpg', '2016-07-10 16:45:46', '2016-07-10 16:45:46', NULL, 'galet', 'gris'),
(98, 'Galet gris moyen', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor felis ac sem molestie auctor. Aliquam eu ultricies urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In molestie dolor ut libero egestas cursu', 6.00, 67433218, 780, 'galet-gris-gros.jpg', '2016-07-10 16:47:52', '2016-07-10 16:47:52', NULL, 'galet', 'gris'),
(99, 'Galet gris petit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor felis ac sem molestie auctor. Aliquam eu ultricies urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In molestie dolor ut libero egestas cursu', 4.50, 6759041, 570, 'galet-gris-petit.jpg', '2016-07-10 16:48:31', '2016-07-10 16:48:31', NULL, 'galet', 'gris'),
(100, 'Galet bleu', 'Sublime galet bleu, véritable camaïlleu surprenant vendu par sachet de 1kg.', 4.60, 45312090878, 400, 'galet-bleu.jpg', '2016-07-10 16:48:49', '2016-07-10 16:48:49', NULL, 'galet', 'bleu'),
(101, 'Galet marron', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor felis ac sem molestie auctor. Aliquam eu ultricies urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In molestie dolor ut libero egestas cursu', 13.20, 7654301, 300, 'galet-marron.jpg', '2016-07-10 16:49:17', '2016-07-10 16:49:17', NULL, 'galet', 'marron'),
(102, 'Galet gris clair', 'Galet gris exceptionnel...', 2.30, 43345678, 800, 'galet-gris-clair-petit.jpg', '2016-07-10 17:16:29', '2016-07-10 17:16:29', NULL, 'galet', 'gris'),
(103, 'Galet multicolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor felis ac sem molestie auctor. Aliquam eu ultricies urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In molestie dolor ut libero egestas cursu', 5.20, 3456789, 1000, 'galet-multicolor.jpg', '2016-07-10 17:18:20', '2016-07-10 17:18:20', NULL, 'galet', 'multicolor');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
