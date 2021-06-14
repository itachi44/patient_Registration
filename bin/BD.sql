-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 24 déc. 2020 à 10:27
-- Version du serveur :  5.7.30
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
--

-- --------------------------------------------------------

--
--

CREATE TABLE `client` (
  `id_patient` int(11) NOT NULL,
  `nom_patient` varchar(150) NOT NULL,
  `prenom_patient` varchar(150) NOT NULL,
  `age` int(2) NOT NULL,
  `sexe` enum('f','m'),

) ENGINE=MyISAM DEFAULT CHARSET=latin1;
