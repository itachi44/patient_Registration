-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 14 juin 2021 à 11:01
-- Version du serveur :  5.7.30
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `BD`
--

-- --------------------------------------------------------

--
-- Structure de la table `PATIENT`
--

CREATE TABLE `PATIENT` (
  `id_patient` int(11) NOT NULL,
  `nom_patient` varchar(150) NOT NULL,
  `prenom_patient` varchar(150) NOT NULL,
  `age` int(2) NOT NULL,
  `sexe` enum('f','m') NOT NULL DEFAULT 'm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `PATIENT`
--
ALTER TABLE `PATIENT`
  ADD PRIMARY KEY (`id_patient`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `PATIENT`
--
ALTER TABLE `PATIENT`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT;
