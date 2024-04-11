-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 07 mars 2024 à 23:40
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `logsystem`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `CLIENT_ID` int(11) NOT NULL,
  `CLIENT_email` varchar(255) DEFAULT NULL,
  `CLIENT_password` varchar(255) DEFAULT NULL,
  `CLIENT_Nom` varchar(255) DEFAULT NULL,
  `CLIENT_Prenom` varchar(255) DEFAULT NULL,
  `CLIENT_DateCreation` date DEFAULT NULL,
  `CLIENT_TelFix` varchar(20) DEFAULT NULL,
  `CLIENT_Tel` varchar(20) DEFAULT NULL,
  `CLIENT_Adresse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `FORM_ID` int(11) NOT NULL,
  `FORMLibelle` varchar(255) DEFAULT NULL,
  `FORMDescription` varchar(255) DEFAULT NULL,
  `FORMDuree` time DEFAULT NULL,
  `SALLE_NUM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservation_externe`
--

CREATE TABLE `reservation_externe` (
  `RES_ID` int(11) NOT NULL,
  `RES_Motif` varchar(255) DEFAULT NULL,
  `RES_Horaire` datetime DEFAULT NULL,
  `RES_Date` date DEFAULT NULL,
  `CLIENT_ID` int(11) DEFAULT NULL,
  `SALLE_NUM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reunion_interne`
--

CREATE TABLE `reunion_interne` (
  `REU_ID` int(11) NOT NULL,
  `REU_libelle` varchar(255) DEFAULT NULL,
  `REU_heure` datetime DEFAULT NULL,
  `REU_date` date DEFAULT NULL,
  `REU_duree` time DEFAULT NULL,
  `SALLE_NUM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `SALLE_Num` int(11) NOT NULL,
  `SALLE_Nom` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CLIENT_ID`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`FORM_ID`),
  ADD KEY `SALLE_NUM` (`SALLE_NUM`);

--
-- Index pour la table `reservation_externe`
--
ALTER TABLE `reservation_externe`
  ADD PRIMARY KEY (`RES_ID`),
  ADD KEY `CLIENT_ID` (`CLIENT_ID`),
  ADD KEY `SALLE_NUM` (`SALLE_NUM`);

--
-- Index pour la table `reunion_interne`
--
ALTER TABLE `reunion_interne`
  ADD PRIMARY KEY (`REU_ID`),
  ADD KEY `SALLE_NUM` (`SALLE_NUM`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`SALLE_Num`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `CLIENT_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `formations`
--
ALTER TABLE `formations`
  ADD CONSTRAINT `formations_ibfk_1` FOREIGN KEY (`SALLE_NUM`) REFERENCES `salle` (`SALLE_Num`);

--
-- Contraintes pour la table `reservation_externe`
--
ALTER TABLE `reservation_externe`
  ADD CONSTRAINT `reservation_externe_ibfk_1` FOREIGN KEY (`CLIENT_ID`) REFERENCES `client` (`CLIENT_ID`),
  ADD CONSTRAINT `reservation_externe_ibfk_2` FOREIGN KEY (`SALLE_NUM`) REFERENCES `salle` (`SALLE_Num`);

--
-- Contraintes pour la table `reunion_interne`
--
ALTER TABLE `reunion_interne`
  ADD CONSTRAINT `reunion_interne_ibfk_1` FOREIGN KEY (`SALLE_NUM`) REFERENCES `salle` (`SALLE_Num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
