-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 28 fév. 2019 à 11:57
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbautofree`
--

-- --------------------------------------------------------

--
-- Structure de la table `autos`
--

CREATE TABLE `autos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `auto_marque` int(255) NOT NULL,
  `auto_model` int(255) NOT NULL,
  `new_modele` varchar(50) NOT NULL,
  `new_marque` varchar(50) NOT NULL,
  `existe` tinyint(4) NOT NULL,
  `validation` tinyint(11) NOT NULL,
  `enpublic` tinyint(20) NOT NULL,
  `magazine` int(11) NOT NULL,
  `autos_carrosserie` varchar(20) NOT NULL DEFAULT '1',
  `auto_categorie` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `auto_price` varchar(20) NOT NULL,
  `auto_carburan` varchar(50) DEFAULT NULL,
  `auto_km` varchar(12) NOT NULL,
  `auto_colorex` varchar(15) NOT NULL,
  `auto_coloren` varchar(50) DEFAULT NULL,
  `auto_siege` varchar(20) NOT NULL,
  `auto_year` varchar(4) NOT NULL,
  `auto_month` varchar(50) NOT NULL,
  `auto_vitesse` varchar(20) NOT NULL,
  `PoidsRemorque` varchar(15) NOT NULL,
  `Roues` varchar(50) NOT NULL,
  `auto_description` longtext NOT NULL,
  `cv` varchar(50) NOT NULL,
  `porte` varchar(50) NOT NULL,
  `metaliser` tinyint(4) NOT NULL,
  `image` varchar(3000) NOT NULL,
  `video` varchar(3000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `num_tel` int(11) NOT NULL,
  `acee_san_cle` int(11) NOT NULL,
  `chauffage` int(11) NOT NULL,
  `parcage` int(11) NOT NULL,
  `assistant` int(11) NOT NULL,
  `camera` int(11) NOT NULL,
  `capteur_arriere` int(11) NOT NULL,
  `capteur_avant1` int(11) NOT NULL,
  `capteur_avant` int(11) NOT NULL,
  `climatisation_automatique` int(11) NOT NULL,
  `climatisation_manuell` int(11) NOT NULL,
  `control_stabilite` int(11) NOT NULL,
  `crochet_atelage` int(11) NOT NULL,
  `dispositif_mail_libre` int(11) NOT NULL,
  `hard_top` int(11) NOT NULL,
  `bluetooth` int(11) NOT NULL,
  `isofix` int(11) NOT NULL,
  `jantes` int(11) NOT NULL,
  `phare_laser1` int(11) NOT NULL,
  `phare_laser` int(11) NOT NULL,
  `phare_xenon` int(11) NOT NULL,
  `phare_derectionnel` int(11) NOT NULL,
  `reglage_desiege_electrique` int(11) NOT NULL,
  `reglage_de_distance` int(11) NOT NULL,
  `regleur_vitesse` int(11) NOT NULL,
  `radio_DAB` int(11) NOT NULL,
  `sallerie_alcantara` int(11) NOT NULL,
  `sallerie_cuire` int(11) NOT NULL,
  `sallerie_partiellement_cuire` int(11) NOT NULL,
  `sallerie_tissu` int(11) NOT NULL,
  `siege_chauffant` int(11) NOT NULL,
  `siege_ventilite` int(11) NOT NULL,
  `Suspension_augmente` int(11) NOT NULL,
  `Suspension_pneumatique` int(11) NOT NULL,
  `Toit_ouvrant` int(11) NOT NULL,
  `Verrouillage_du_differentiel` int(11) NOT NULL,
  `Systeme_start_stop` int(11) NOT NULL,
  `jeux_de_pneus` int(11) NOT NULL,
  `Systeme_de_navigation_integrer` int(11) NOT NULL,
  `Systeme_de_navigation_Portable` int(11) NOT NULL,
  `Systeme_de_navigation_Systeme_de_suivi_de_voie` int(11) NOT NULL,
  `Autobus_scolaires` int(11) NOT NULL,
  `Autotransporter` int(11) NOT NULL,
  `Bache` int(11) NOT NULL,
  `Camion_de_meubles` int(11) NOT NULL,
  `Grue` int(11) NOT NULL,
  `Plateforme_de_levage` int(11) NOT NULL,
  `Porte_bagages` int(11) NOT NULL,
  `Transports_frigorlifique` int(11) NOT NULL,
  `Treuil` int(11) NOT NULL,
  `Pour_handicapes` int(11) NOT NULL,
  `Pour_lexportation` int(11) NOT NULL,
  `Vehicule_accidentee` int(11) NOT NULL,
  `Vehicule_non_accidentee` int(11) NOT NULL,
  `adresse` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `expertiser` int(11) NOT NULL,
  `garanti` int(11) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `rayon` varchar(50) NOT NULL,
  `Cylindree` varchar(50) NOT NULL,
  `Emission_CO2` varchar(50) NOT NULL,
  `consommations` varchar(50) NOT NULL,
  `normes` varchar(50) NOT NULL,
  `cathe_energeri` varchar(50) NOT NULL,
  `date_annonce` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `autos`
--

INSERT INTO `autos` (`id`, `user_id`, `auto_marque`, `auto_model`, `new_modele`, `new_marque`, `existe`, `validation`, `enpublic`, `magazine`, `autos_carrosserie`, `auto_categorie`, `type`, `transmission`, `auto_price`, `auto_carburan`, `auto_km`, `auto_colorex`, `auto_coloren`, `auto_siege`, `auto_year`, `auto_month`, `auto_vitesse`, `PoidsRemorque`, `Roues`, `auto_description`, `cv`, `porte`, `metaliser`, `image`, `video`, `created_at`, `updated_at`, `num_tel`, `acee_san_cle`, `chauffage`, `parcage`, `assistant`, `camera`, `capteur_arriere`, `capteur_avant1`, `capteur_avant`, `climatisation_automatique`, `climatisation_manuell`, `control_stabilite`, `crochet_atelage`, `dispositif_mail_libre`, `hard_top`, `bluetooth`, `isofix`, `jantes`, `phare_laser1`, `phare_laser`, `phare_xenon`, `phare_derectionnel`, `reglage_desiege_electrique`, `reglage_de_distance`, `regleur_vitesse`, `radio_DAB`, `sallerie_alcantara`, `sallerie_cuire`, `sallerie_partiellement_cuire`, `sallerie_tissu`, `siege_chauffant`, `siege_ventilite`, `Suspension_augmente`, `Suspension_pneumatique`, `Toit_ouvrant`, `Verrouillage_du_differentiel`, `Systeme_start_stop`, `jeux_de_pneus`, `Systeme_de_navigation_integrer`, `Systeme_de_navigation_Portable`, `Systeme_de_navigation_Systeme_de_suivi_de_voie`, `Autobus_scolaires`, `Autotransporter`, `Bache`, `Camion_de_meubles`, `Grue`, `Plateforme_de_levage`, `Porte_bagages`, `Transports_frigorlifique`, `Treuil`, `Pour_handicapes`, `Pour_lexportation`, `Vehicule_accidentee`, `Vehicule_non_accidentee`, `adresse`, `email`, `expertiser`, `garanti`, `ville`, `rayon`, `Cylindree`, `Emission_CO2`, `consommations`, `normes`, `cathe_energeri`, `date_annonce`) VALUES
(1, 1, 1, 1, 'A4', 'AUDI', 0, 1, 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '2019-01-20 15:43:59', '2019-01-20 14:43:59', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, '', '', '', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `autos_images`
--

CREATE TABLE `autos_images` (
  `id` int(10) NOT NULL,
  `path` varchar(255) NOT NULL,
  `auto_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `autos_marque`
--

CREATE TABLE `autos_marque` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `auto_marque` varchar(50) NOT NULL,
  `moto_marque` varchar(50) NOT NULL,
  `vehicule_marque` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `camion_marque` varchar(50) NOT NULL,
  `camping_marque` varchar(50) NOT NULL,
  `remorque_marque` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `autos_marque`
--

INSERT INTO `autos_marque` (`id`, `type`, `auto_marque`, `moto_marque`, `vehicule_marque`, `created_at`, `updated_at`, `camion_marque`, `camping_marque`, `remorque_marque`) VALUES
(1, 0, 'AUDI', '', '', '2019-01-20 15:32:21', '2019-01-20 14:30:46', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `autos_modele`
--

CREATE TABLE `autos_modele` (
  `id` int(11) NOT NULL,
  `autos_model` varchar(50) NOT NULL,
  `auto_marque_id` varchar(50) NOT NULL,
  `motos_model` varchar(50) NOT NULL,
  `moto_marque_id` varchar(50) NOT NULL,
  `vehicules_model` varchar(50) NOT NULL,
  `vehicule_marque_id` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `camions_model` varchar(50) NOT NULL,
  `camion_marque_id` varchar(50) NOT NULL,
  `campings_model` varchar(50) NOT NULL,
  `camping_marque_id` varchar(50) NOT NULL,
  `remorques_model` varchar(50) NOT NULL,
  `remorque_marque_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `autos_modele`
--

INSERT INTO `autos_modele` (`id`, `autos_model`, `auto_marque_id`, `motos_model`, `moto_marque_id`, `vehicules_model`, `vehicule_marque_id`, `created_at`, `updated_at`, `camions_model`, `camion_marque_id`, `campings_model`, `camping_marque_id`, `remorques_model`, `remorque_marque_id`) VALUES
(1, 'A4', '1', '', '', '', '', '2019-01-20 14:30:47', '2019-01-20 14:30:47', '', '', '', '', '', ''),
(2, 'test', '1', '', '', '', '', '2019-02-19 02:44:41', '2019-02-19 02:44:41', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `camions`
--

CREATE TABLE `camions` (
  `id` int(11) NOT NULL,
  `camion_marque` int(255) NOT NULL,
  `camion_model` int(255) NOT NULL,
  `new_marque` varchar(50) NOT NULL,
  `new_modele` varchar(50) NOT NULL,
  `existe` tinyint(4) NOT NULL,
  `validation` tinyint(11) NOT NULL,
  `enpublic` tinyint(20) NOT NULL,
  `autos_carrosserie` varchar(20) NOT NULL DEFAULT '1',
  `auto_categorie` varchar(20) NOT NULL,
  `auto_price` varchar(20) NOT NULL,
  `auto_carburan` varchar(10) NOT NULL,
  `auto_km` varchar(50) NOT NULL,
  `auto_colorex` varchar(15) NOT NULL,
  `auto_coloren` varchar(50) DEFAULT NULL,
  `auto_siege` varchar(20) NOT NULL,
  `auto_year` varchar(4) NOT NULL,
  `auto_month` varchar(50) NOT NULL,
  `auto_vitesse` varchar(20) NOT NULL,
  `PoidsRemorque` varchar(15) NOT NULL,
  `Roues` varchar(50) NOT NULL,
  `auto_description` longtext NOT NULL,
  `cv` varchar(50) NOT NULL,
  `porte` varchar(50) NOT NULL,
  `metaliser` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `num_tel` int(11) NOT NULL,
  `acee_san_cle` int(11) NOT NULL,
  `chauffage` int(11) NOT NULL,
  `parcage` int(11) NOT NULL,
  `assistant` int(11) NOT NULL,
  `camera` int(11) NOT NULL,
  `capteur_arriere` int(11) NOT NULL,
  `capteur_avant1` int(11) NOT NULL,
  `capteur_avant` int(11) NOT NULL,
  `climatisation_automatique` int(11) NOT NULL,
  `climatisation_manuell` int(11) NOT NULL,
  `control_stabilite` int(11) NOT NULL,
  `crochet_atelage` int(11) NOT NULL,
  `dispositif_mail_libre` int(11) NOT NULL,
  `hard_top` int(11) NOT NULL,
  `bluetooth` int(11) NOT NULL,
  `isofix` int(11) NOT NULL,
  `jantes` int(11) NOT NULL,
  `phare_laser1` int(11) NOT NULL,
  `phare_laser` int(11) NOT NULL,
  `phare_xenon` int(11) NOT NULL,
  `phare_derectionnel` int(11) NOT NULL,
  `reglage_desiege_electrique` int(11) NOT NULL,
  `reglage_de_distance` int(11) NOT NULL,
  `regleur_vitesse` int(11) NOT NULL,
  `radio_DAB` int(11) NOT NULL,
  `sallerie_alcantara` int(11) NOT NULL,
  `sallerie_cuire` int(11) NOT NULL,
  `sallerie_partiellement_cuire` int(11) NOT NULL,
  `sallerie_tissu` int(11) NOT NULL,
  `siege_chauffant` int(11) NOT NULL,
  `siege_ventilite` int(11) NOT NULL,
  `Suspension_augmente` int(11) NOT NULL,
  `Suspension_pneumatique` int(11) NOT NULL,
  `Toit_ouvrant` int(11) NOT NULL,
  `Verrouillage_du_differentiel` int(11) NOT NULL,
  `Systeme_start_stop` int(11) NOT NULL,
  `jeux_de_pneus` int(11) NOT NULL,
  `Systeme_de_navigation_integrer` int(11) NOT NULL,
  `Systeme_de_navigation_Portable` int(11) NOT NULL,
  `Systeme_de_navigation_Systeme_de_suivi_de_voie` int(11) NOT NULL,
  `Autobus_scolaires` int(11) NOT NULL,
  `Autotransporter` int(11) NOT NULL,
  `Bache` int(11) NOT NULL,
  `Camion_de_meubles` int(11) NOT NULL,
  `Grue` int(11) NOT NULL,
  `Plateforme_de_levage` int(11) NOT NULL,
  `Porte_bagages` int(11) NOT NULL,
  `Transports_frigorlifique` int(11) NOT NULL,
  `Treuil` int(11) NOT NULL,
  `Pour_handicapes` int(11) NOT NULL,
  `Pour_lexportation` int(11) NOT NULL,
  `Vehicule_accidentee` int(11) NOT NULL,
  `Vehicule_non_accidentee` int(11) NOT NULL,
  `adresse` varchar(300) NOT NULL,
  `rayon` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `expertiser` int(11) NOT NULL,
  `garanti` int(11) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `Cylindree` varchar(50) NOT NULL,
  `Emission_CO2` varchar(50) NOT NULL,
  `consommations` varchar(50) NOT NULL,
  `normes` varchar(50) NOT NULL,
  `cathe_energeri` varchar(50) NOT NULL,
  `auto_vehicule` int(11) NOT NULL,
  `video` varchar(3000) NOT NULL,
  `magazine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `camions`
--

INSERT INTO `camions` (`id`, `camion_marque`, `camion_model`, `new_marque`, `new_modele`, `existe`, `validation`, `enpublic`, `autos_carrosserie`, `auto_categorie`, `auto_price`, `auto_carburan`, `auto_km`, `auto_colorex`, `auto_coloren`, `auto_siege`, `auto_year`, `auto_month`, `auto_vitesse`, `PoidsRemorque`, `Roues`, `auto_description`, `cv`, `porte`, `metaliser`, `user_id`, `image`, `created_at`, `updated_at`, `num_tel`, `acee_san_cle`, `chauffage`, `parcage`, `assistant`, `camera`, `capteur_arriere`, `capteur_avant1`, `capteur_avant`, `climatisation_automatique`, `climatisation_manuell`, `control_stabilite`, `crochet_atelage`, `dispositif_mail_libre`, `hard_top`, `bluetooth`, `isofix`, `jantes`, `phare_laser1`, `phare_laser`, `phare_xenon`, `phare_derectionnel`, `reglage_desiege_electrique`, `reglage_de_distance`, `regleur_vitesse`, `radio_DAB`, `sallerie_alcantara`, `sallerie_cuire`, `sallerie_partiellement_cuire`, `sallerie_tissu`, `siege_chauffant`, `siege_ventilite`, `Suspension_augmente`, `Suspension_pneumatique`, `Toit_ouvrant`, `Verrouillage_du_differentiel`, `Systeme_start_stop`, `jeux_de_pneus`, `Systeme_de_navigation_integrer`, `Systeme_de_navigation_Portable`, `Systeme_de_navigation_Systeme_de_suivi_de_voie`, `Autobus_scolaires`, `Autotransporter`, `Bache`, `Camion_de_meubles`, `Grue`, `Plateforme_de_levage`, `Porte_bagages`, `Transports_frigorlifique`, `Treuil`, `Pour_handicapes`, `Pour_lexportation`, `Vehicule_accidentee`, `Vehicule_non_accidentee`, `adresse`, `rayon`, `email`, `expertiser`, `garanti`, `ville`, `Cylindree`, `Emission_CO2`, `consommations`, `normes`, `cathe_energeri`, `auto_vehicule`, `video`, `magazine`) VALUES
(1, 6, 31, 'camion', '2019', 0, 1, 0, '6', 'n-3', '6666666666', 'n-1', '70000', 'n-2', 'n-2', '5', '1956', '7', 'n-5', 'n-12', 'n-2', 'hjjkhkjhjhkjjhjhkjhkjhkjk', '', 'n-2', 0, 1, 'c4.jpg', '2017-12-19 20:42:53', '2017-12-19 19:42:53', 22345443, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'jjkjjkjjkkl', 0, 'hjhj@g.vom', 0, 0, '', '', '', '', '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `camion_images`
--

CREATE TABLE `camion_images` (
  `id` int(10) NOT NULL,
  `path` varchar(255) NOT NULL,
  `camion_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `camion_images`
--

INSERT INTO `camion_images` (`id`, `path`, `camion_id`, `created_at`, `updated_at`) VALUES
(8, '200050c.jpg', 1, '2017-12-13 19:00:50', '2017-12-13 19:00:50'),
(9, '200050c2.jpg', 1, '2017-12-13 19:00:50', '2017-12-13 19:00:50');

-- --------------------------------------------------------

--
-- Structure de la table `camping`
--

CREATE TABLE `camping` (
  `id` int(11) NOT NULL,
  `camping_marque` int(255) NOT NULL,
  `camping_model` int(255) NOT NULL,
  `new_marque` varchar(50) NOT NULL,
  `new_modele` varchar(50) NOT NULL,
  `existe` tinyint(4) NOT NULL,
  `validation` tinyint(11) NOT NULL,
  `enpublic` tinyint(20) NOT NULL,
  `autos_carrosserie` varchar(20) NOT NULL DEFAULT '1',
  `auto_categorie` varchar(20) NOT NULL,
  `auto_price` varchar(20) NOT NULL,
  `auto_carburan` varchar(10) NOT NULL,
  `auto_km` varchar(50) NOT NULL,
  `auto_colorex` varchar(15) NOT NULL,
  `auto_coloren` varchar(50) DEFAULT NULL,
  `auto_siege` varchar(20) NOT NULL,
  `auto_year` varchar(4) NOT NULL,
  `auto_month` varchar(50) NOT NULL,
  `auto_vitesse` varchar(20) NOT NULL,
  `PoidsRemorque` varchar(15) NOT NULL,
  `Roues` varchar(50) NOT NULL,
  `auto_description` longtext NOT NULL,
  `cv` varchar(50) NOT NULL,
  `porte` varchar(50) NOT NULL,
  `metaliser` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `video` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `num_tel` int(11) NOT NULL,
  `ABS` int(11) NOT NULL,
  `control_stabiliter` int(11) NOT NULL,
  `parcage` int(11) NOT NULL,
  `cuisine` int(11) NOT NULL,
  `anti_vole` int(11) NOT NULL,
  `douche` int(11) NOT NULL,
  `Regelateur_automatique` int(11) NOT NULL,
  `climatisation_automatique` int(11) NOT NULL,
  `climatisation_manuell` int(11) NOT NULL,
  `crochet_atelage` int(11) NOT NULL,
  `regulateur_vitesse` int(11) NOT NULL,
  `system_navigation_toilette` int(11) NOT NULL,
  `system_navigation_tv` int(11) NOT NULL,
  `Verrouillage_du_differentiel` int(11) NOT NULL,
  `Systeme_de_navigation_integrer` int(11) NOT NULL,
  `Systeme_de_navigation_Portable` int(11) NOT NULL,
  `Pour_handicapes` int(11) NOT NULL,
  `Vehicule_accidentee` int(11) NOT NULL,
  `Vehicule_non_accidentee` int(11) NOT NULL,
  `adresse` varchar(300) NOT NULL,
  `rayon` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `expertiser` int(11) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `Cylindree` varchar(50) NOT NULL,
  `Emission_CO2` varchar(50) NOT NULL,
  `consommations` varchar(50) NOT NULL,
  `normes` varchar(50) NOT NULL,
  `cathe_energeri` varchar(50) NOT NULL,
  `auto_vehicule` int(11) NOT NULL,
  `magazine` int(11) NOT NULL,
  `licence` int(11) NOT NULL,
  `longeur` int(11) NOT NULL,
  `lit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `camping`
--

INSERT INTO `camping` (`id`, `camping_marque`, `camping_model`, `new_marque`, `new_modele`, `existe`, `validation`, `enpublic`, `autos_carrosserie`, `auto_categorie`, `auto_price`, `auto_carburan`, `auto_km`, `auto_colorex`, `auto_coloren`, `auto_siege`, `auto_year`, `auto_month`, `auto_vitesse`, `PoidsRemorque`, `Roues`, `auto_description`, `cv`, `porte`, `metaliser`, `user_id`, `image`, `video`, `created_at`, `updated_at`, `num_tel`, `ABS`, `control_stabiliter`, `parcage`, `cuisine`, `anti_vole`, `douche`, `Regelateur_automatique`, `climatisation_automatique`, `climatisation_manuell`, `crochet_atelage`, `regulateur_vitesse`, `system_navigation_toilette`, `system_navigation_tv`, `Verrouillage_du_differentiel`, `Systeme_de_navigation_integrer`, `Systeme_de_navigation_Portable`, `Pour_handicapes`, `Vehicule_accidentee`, `Vehicule_non_accidentee`, `adresse`, `rayon`, `email`, `expertiser`, `ville`, `Cylindree`, `Emission_CO2`, `consommations`, `normes`, `cathe_energeri`, `auto_vehicule`, `magazine`, `licence`, `longeur`, `lit`) VALUES
(1, 4, 29, 'camping', 'camping2018', 0, 1, 0, '3', 'n-2', '220000000000', 'n-4', '7500', 'n-2', 'n-1', '4', '1962', '5', 'n-6', 'n-6', 'n-1', 'kjsjkjksd', '', 'n-1', 1, 1, 'renault-camping-car-master-matrix-supreme-008.jpg.ximg.l_12_m.smart.jpg', 'https://www.youtube.com/embed/yH46mtKn3', '2017-12-19 20:31:00', '2017-12-19 19:31:00', 234567, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'zjjfcksfk', 40, 'aa@kk.kl', 1, 'n-9', '5500', '170', '18', 'n-3', 'n-6', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `camping_images`
--

CREATE TABLE `camping_images` (
  `id` int(10) NOT NULL,
  `path` varchar(255) NOT NULL,
  `camping_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `camping_images`
--

INSERT INTO `camping_images` (`id`, `path`, `camping_id`, `created_at`, `updated_at`) VALUES
(3, '094359renault-camping-car-master-matrix-supreme-008.jpg.ximg.l_12_m.smart.jpg', 1, '2017-12-14 08:43:59', '2017-12-14 08:43:59'),
(4, '094359téléchargement.jpg', 1, '2017-12-14 08:43:59', '2017-12-14 08:43:59');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  `comment` longtext NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `auto_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `detailles`
--

CREATE TABLE `detailles` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `auto_carburan` varchar(50) NOT NULL,
  `carroserie` varchar(50) NOT NULL,
  `cv` varchar(50) NOT NULL,
  `porte` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `couleur_exterieur` varchar(50) NOT NULL,
  `couleur_enterieur` varchar(50) NOT NULL,
  `poid_remorque` varchar(50) NOT NULL,
  `km` varchar(50) NOT NULL,
  `consommations` varchar(50) NOT NULL,
  `emission` varchar(50) NOT NULL,
  `cylindre` varchar(50) NOT NULL,
  `cath_eneregi` varchar(50) NOT NULL,
  `vitesse` varchar(50) NOT NULL,
  `roue` varchar(50) NOT NULL,
  `siege` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `detailles`
--

INSERT INTO `detailles` (`id`, `type`, `categorie`, `auto_carburan`, `carroserie`, `cv`, `porte`, `ville`, `couleur_exterieur`, `couleur_enterieur`, `poid_remorque`, `km`, `consommations`, `emission`, `cylindre`, `cath_eneregi`, `vitesse`, `roue`, `siege`, `created_at`, `updated_at`) VALUES
(1, 'voiture', '', '', '', '40', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-12-12 09:04:20', '2017-12-12 09:04:20');

-- --------------------------------------------------------

--
-- Structure de la table `magazine`
--

CREATE TABLE `magazine` (
  `id` int(11) NOT NULL,
  `maque` varchar(50) NOT NULL,
  `modele` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `publier` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_07_02_200853_autos', 2),
('2017_07_02_210525_autos_images', 2);

-- --------------------------------------------------------

--
-- Structure de la table `moto`
--

CREATE TABLE `moto` (
  `id` int(11) NOT NULL,
  `moto_marque` int(255) NOT NULL,
  `moto_model` int(255) NOT NULL,
  `new_marque` varchar(50) NOT NULL,
  `new_modele` varchar(50) NOT NULL,
  `existe` tinyint(4) NOT NULL,
  `validation` tinyint(11) NOT NULL,
  `enpublic` tinyint(20) NOT NULL,
  `autos_carrosserie` varchar(20) NOT NULL DEFAULT '1',
  `auto_categorie` varchar(20) NOT NULL,
  `auto_price` varchar(20) NOT NULL,
  `auto_carburan` varchar(10) NOT NULL,
  `auto_km` varchar(50) NOT NULL,
  `auto_colorex` varchar(15) NOT NULL,
  `auto_siege` varchar(20) NOT NULL,
  `auto_year` varchar(4) NOT NULL,
  `auto_month` varchar(50) NOT NULL,
  `auto_vitesse` varchar(20) NOT NULL,
  `PoidsRemorque` varchar(15) NOT NULL,
  `Roues` varchar(50) NOT NULL,
  `auto_description` longtext NOT NULL,
  `cv` varchar(50) NOT NULL,
  `metaliser` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `video` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `num_tel` int(11) NOT NULL,
  `ABS` int(11) NOT NULL,
  `Carenage` int(11) NOT NULL,
  `Catalyseur` int(11) NOT NULL,
  `Coffre` int(11) NOT NULL,
  `autre_instrument` int(11) NOT NULL,
  `anti_vole` int(11) NOT NULL,
  `dosseret` int(11) NOT NULL,
  `double_frein_disque` int(11) NOT NULL,
  `double_siege` int(11) NOT NULL,
  `guidant_special` int(11) NOT NULL,
  `haut_parleur` int(11) NOT NULL,
  `housse_deprotection` int(11) NOT NULL,
  `marche_pieds` int(11) NOT NULL,
  `pare_brise` int(11) NOT NULL,
  `peinture_special` int(11) NOT NULL,
  `reglage_electrique` int(11) NOT NULL,
  `pieds_cromee` int(11) NOT NULL,
  `poigne_chaffante` int(11) NOT NULL,
  `porte_bagage` int(11) NOT NULL,
  `pot_echapement` int(11) NOT NULL,
  `protection` int(11) NOT NULL,
  `roue_rayon` int(11) NOT NULL,
  `sac_resevoir` int(11) NOT NULL,
  `sacoche` int(11) NOT NULL,
  `selle_monoplage` int(11) NOT NULL,
  `system_audio` int(11) NOT NULL,
  `systm_alarme` int(11) NOT NULL,
  `top_case` int(11) NOT NULL,
  `pneut_neuf` int(11) NOT NULL,
  `VS_disponible` int(11) NOT NULL,
  `VS_possible` int(11) NOT NULL,
  `TS_disponible` int(11) NOT NULL,
  `TS_possible` int(11) NOT NULL,
  `echange_possible` int(11) NOT NULL,
  `leasing_possible` int(11) NOT NULL,
  `moto_course` int(11) NOT NULL,
  `verrouillage_diferentiel` int(11) NOT NULL,
  `vehicule_accidente` int(11) NOT NULL,
  `Vehicule_non_accidentee` int(11) NOT NULL,
  `adresse` varchar(300) NOT NULL,
  `rayon` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `expertiser` int(11) NOT NULL,
  `garanti` int(11) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `Cylindree` varchar(50) NOT NULL,
  `Emission_CO2` varchar(50) NOT NULL,
  `consommations` varchar(50) NOT NULL,
  `normes` varchar(50) NOT NULL,
  `cathe_energeri` varchar(50) NOT NULL,
  `auto_vehicule` int(11) NOT NULL,
  `magazine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `moto`
--

INSERT INTO `moto` (`id`, `moto_marque`, `moto_model`, `new_marque`, `new_modele`, `existe`, `validation`, `enpublic`, `autos_carrosserie`, `auto_categorie`, `auto_price`, `auto_carburan`, `auto_km`, `auto_colorex`, `auto_siege`, `auto_year`, `auto_month`, `auto_vitesse`, `PoidsRemorque`, `Roues`, `auto_description`, `cv`, `metaliser`, `user_id`, `image`, `video`, `created_at`, `updated_at`, `num_tel`, `ABS`, `Carenage`, `Catalyseur`, `Coffre`, `autre_instrument`, `anti_vole`, `dosseret`, `double_frein_disque`, `double_siege`, `guidant_special`, `haut_parleur`, `housse_deprotection`, `marche_pieds`, `pare_brise`, `peinture_special`, `reglage_electrique`, `pieds_cromee`, `poigne_chaffante`, `porte_bagage`, `pot_echapement`, `protection`, `roue_rayon`, `sac_resevoir`, `sacoche`, `selle_monoplage`, `system_audio`, `systm_alarme`, `top_case`, `pneut_neuf`, `VS_disponible`, `VS_possible`, `TS_disponible`, `TS_possible`, `echange_possible`, `leasing_possible`, `moto_course`, `verrouillage_diferentiel`, `vehicule_accidente`, `Vehicule_non_accidentee`, `adresse`, `rayon`, `email`, `expertiser`, `garanti`, `ville`, `Cylindree`, `Emission_CO2`, `consommations`, `normes`, `cathe_energeri`, `auto_vehicule`, `magazine`) VALUES
(1, 2, 26, 'honda', '2019', 0, 1, 0, '0', 'n-1', '223455', 'n-3', '80000', 'n-2', '4', '2018', '7', 'n-1', 'n-5', 'n-2', 'jjkklkll', '110', 1, 1, '233605e814063bb961634acf72d8596e9bfd73.jpg', '', '2017-12-19 20:06:34', '2017-12-19 19:06:34', 2334456, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 'jklhhjkj', 0, 'aa@jkjjk.vom', 1, 1, 'n-10', '3000', '160', '17', 'n-5', 'n-7', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `moto_images`
--

CREATE TABLE `moto_images` (
  `id` int(11) NOT NULL,
  `path` varchar(300) NOT NULL,
  `moto_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `moto_images`
--

INSERT INTO `moto_images` (`id`, `path`, `moto_id`, `created_at`, `updated_at`) VALUES
(10, '072512e814063bb961634acf72d8596e9bfd73.jpg', 1, '2017-12-14 06:25:12', '2017-12-14 06:25:12'),
(11, '072512jkkjkk.jpg', 1, '2017-12-14 06:25:12', '2017-12-14 06:25:12'),
(12, '072512likkll.jpg', 1, '2017-12-14 06:25:12', '2017-12-14 06:25:12');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('monfacebook2018@gmail.com', '4b0ca51433ee16cbcc1060c41cd728f8dc00e56d004df3db8cdf329f5affde31', '2017-12-07 09:36:58'),
('3abir2010@gmail.com', 'fab476c36fba3b4c4c0a18f7ca5f9eab9416d5d3b4f4fd48cb2da0425c07a376', '2019-02-19 02:38:45');

-- --------------------------------------------------------

--
-- Structure de la table `pubh`
--

CREATE TABLE `pubh` (
  `id` int(11) NOT NULL,
  `pub` varchar(3000) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `ok` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pubh`
--

INSERT INTO `pubh` (`id`, `pub`, `description`, `ok`, `created_at`, `updated_at`) VALUES
(1, 'big-5.jpg', '', 0, '2017-12-14 11:04:56', '2017-12-14 10:04:57'),
(2, 'big-3.jpg', '', 0, '2017-12-14 11:07:35', '2017-12-14 10:07:35');

-- --------------------------------------------------------

--
-- Structure de la table `pubv`
--

CREATE TABLE `pubv` (
  `id` int(11) NOT NULL,
  `pub` varchar(3000) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `ok` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pubv`
--

INSERT INTO `pubv` (`id`, `pub`, `description`, `ok`, `created_at`, `updated_at`) VALUES
(1, 'big-3.jpg', '', 0, '2017-12-14 11:10:17', '2017-12-14 10:10:17'),
(2, '111149big-4.jpg', '', 0, '2017-12-14 10:11:49', '2017-12-14 10:11:49'),
(3, '111149big-6.jpg', '', 0, '2017-12-14 10:11:49', '2017-12-14 10:11:49');

-- --------------------------------------------------------

--
-- Structure de la table `remorques`
--

CREATE TABLE `remorques` (
  `id` int(11) NOT NULL,
  `remorque_marque` int(255) NOT NULL,
  `remorque_model` int(255) NOT NULL,
  `new_marque` varchar(50) NOT NULL,
  `new_modele` varchar(50) NOT NULL,
  `existe` tinyint(4) NOT NULL,
  `validation` tinyint(11) NOT NULL,
  `enpublic` tinyint(20) NOT NULL,
  `autos_carrosserie` varchar(20) NOT NULL DEFAULT '1',
  `auto_categorie` varchar(20) NOT NULL,
  `auto_price` varchar(20) NOT NULL,
  `auto_carburan` varchar(10) NOT NULL,
  `auto_km` varchar(50) NOT NULL,
  `auto_colorex` varchar(15) NOT NULL,
  `auto_coloren` varchar(50) DEFAULT NULL,
  `auto_siege` varchar(20) NOT NULL,
  `auto_year` varchar(4) NOT NULL,
  `auto_month` varchar(50) NOT NULL,
  `auto_vitesse` varchar(20) NOT NULL,
  `PoidsRemorque` varchar(15) NOT NULL,
  `Roues` varchar(50) NOT NULL,
  `auto_description` longtext NOT NULL,
  `cv` varchar(50) NOT NULL,
  `porte` varchar(50) NOT NULL,
  `metaliser` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `num_tel` int(11) NOT NULL,
  `ABS` int(11) NOT NULL,
  `frein_comprimer` int(11) NOT NULL,
  `frein_disque` int(11) NOT NULL,
  `hydrautique` int(11) NOT NULL,
  `pneumatique` int(11) NOT NULL,
  `referoidissement` int(11) NOT NULL,
  `Grue` int(11) NOT NULL,
  `Treuil` int(11) NOT NULL,
  `Vehicule_accidentee` int(11) NOT NULL,
  `adresse` varchar(300) NOT NULL,
  `rayon` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `expertiser` int(11) NOT NULL,
  `garanti` int(11) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `Cylindree` varchar(50) NOT NULL,
  `Emission_CO2` varchar(50) NOT NULL,
  `consommations` varchar(50) NOT NULL,
  `normes` varchar(50) NOT NULL,
  `cathe_energeri` varchar(50) NOT NULL,
  `auto_vehicule` int(11) NOT NULL,
  `video` varchar(3000) NOT NULL,
  `magazine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `remorques`
--

INSERT INTO `remorques` (`id`, `remorque_marque`, `remorque_model`, `new_marque`, `new_modele`, `existe`, `validation`, `enpublic`, `autos_carrosserie`, `auto_categorie`, `auto_price`, `auto_carburan`, `auto_km`, `auto_colorex`, `auto_coloren`, `auto_siege`, `auto_year`, `auto_month`, `auto_vitesse`, `PoidsRemorque`, `Roues`, `auto_description`, `cv`, `porte`, `metaliser`, `user_id`, `image`, `created_at`, `updated_at`, `num_tel`, `ABS`, `frein_comprimer`, `frein_disque`, `hydrautique`, `pneumatique`, `referoidissement`, `Grue`, `Treuil`, `Vehicule_accidentee`, `adresse`, `rayon`, `email`, `expertiser`, `garanti`, `ville`, `Cylindree`, `Emission_CO2`, `consommations`, `normes`, `cathe_energeri`, `auto_vehicule`, `video`, `magazine`) VALUES
(2, 5, 30, 'remorque', 'remorque', 0, 0, 0, '7', 'n-2', '220000', 'n-10', '20000', 'n-1', NULL, '9', '2008', '3', 'n-3', '', 'n-1', '', '', '', 0, 1, '', '2017-12-19 12:18:24', '2017-12-19 11:18:24', 0, 0, 1, 1, 1, 1, 1, 0, 1, 1, 'jkkkkkkkkkk', 0, '', 0, 0, 'n-9', '', '110', '11', '', '', 0, '', 0),
(3, 5, 30, 'rttuy', '2018', 0, 1, 0, '5', 'n-1', '2000', 'n-9', '90000', 'n-2', NULL, '2', '2005', '2', 'n-4', '', 'n-1', '', '', '', 0, 1, '', '2017-12-19 17:08:51', '2017-12-19 16:08:51', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', 30, '', 0, 0, 'n-2', '', '190', '15', '', '', 0, '', 0),
(4, 0, 0, '', '', 0, 0, 0, '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', 0, 1, '', '2017-12-18 23:15:52', '2017-12-18 23:15:52', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', '', '', '', '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `remorque_images`
--

CREATE TABLE `remorque_images` (
  `id` int(10) NOT NULL,
  `path` varchar(255) NOT NULL,
  `remorque_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sitesetting`
--

CREATE TABLE `sitesetting` (
  `id` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `namesetting` varchar(50) NOT NULL,
  `value` text NOT NULL,
  `type` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `sitesetting`
--

INSERT INTO `sitesetting` (`id`, `slug`, `namesetting`, `value`, `type`, `created_at`, `updated_at`) VALUES
(14, 'nom de site', 'sitename', 'Auto store', 0, '2019-02-19 03:38:00', '2019-02-19 02:38:00'),
(17, 'mobile', 'mobile', '077 507 11 42', 0, '2017-12-16 16:46:56', '2017-12-16 15:46:56'),
(18, 'facebook', 'facebook', 'https://www.facebook.com/', 0, '2017-11-09 08:31:31', '2017-11-09 07:31:31'),
(19, 'twitter', 'twitter', 'https://twitter.com/', 0, '2017-11-09 08:31:31', '2017-11-09 07:31:31'),
(20, 'youtube', 'youtube', 'https://www.youtube.com/embed/m5_AKjDdqaU', 0, '2017-12-16 22:21:33', '2017-12-16 21:21:33'),
(21, 'email', 'email', 'Contact@autostore.ch', 0, '2017-12-16 16:40:56', '2017-11-09 07:30:09'),
(23, 'Description', 'description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s printing and typesetting\r\n\r\n', 1, '2017-12-16 22:21:33', '2017-12-16 21:21:33'),
(24, 'Linkedin', 'linkedin', '', 0, '2017-12-14 11:17:17', '2017-12-14 10:17:17'),
(25, 'Default image', 'no_image', 'AUTO.png', 3, '2017-11-09 08:17:56', '2017-11-09 07:17:56'),
(27, 'droit de site', 'droitedesite', 'All rights reserved by: Auto-store', 0, '2017-11-09 08:28:02', '2017-11-09 07:28:02'),
(28, 'fax', 'fax', '077 507 11 42', 0, '2017-12-16 16:46:24', '2017-12-16 15:46:24'),
(29, 'titre_video', 'titre_video', 'Description de Video', 0, '2017-12-08 18:42:15', '2017-12-08 17:42:15'),
(30, 'description_vedio', 'description_vedio', 'Dolor sit amet auctor egestas libero is arcu. Wisi anteati lis pulvinar officiiss neque massa egestas', 1, '2017-12-08 18:45:40', '2017-12-08 17:45:40'),
(31, 'adresse', 'adresse', 'Rue Du Simplon 21, 1800 Vevey', 0, '2017-12-16 16:43:17', '2017-12-16 15:43:17');

-- --------------------------------------------------------

--
-- Structure de la table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `slider` varchar(3000) NOT NULL,
  `ok` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_expiration` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sliders`
--

INSERT INTO `sliders` (`id`, `slider`, `ok`, `created_at`, `updated_at`, `date_expiration`) VALUES
(7, '2.jpg', 0, '2017-12-14 11:58:00', '2017-12-14 10:58:00', '0000-00-00 00:00:00'),
(8, '1.jpg', 0, '2017-12-14 11:57:45', '2017-12-14 10:57:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` int(12) NOT NULL,
  `admin` tinyint(11) NOT NULL,
  `sex` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `admin`, `sex`) VALUES
(1, 'abir', '3abir2010@gmail.com', '$2y$10$IAL7PGPYYEfLlExOgBb60OyXGVE3WPlTNuZeoX3CQQSTciG4/DxKS', 'vuR6NZq7js2nt9F5bvBwX47i5TkYspIrrK5pe620p7doVcvHLfMvsReE8pnL', '2017-12-12 08:24:16', '2019-02-28 09:52:21', 21474836, 1, 0),
(2, 'admin', 'admin@admin.com', '$2y$10$QMTITuMHryB2ZmEYqyhPyOevd7/vqJbX5t3nuWuCQvBdXW6mvyCGq', '9h2NAHZFVjy9XAXWGDkG5xAv7B8cgZOHzwwRaQq7j4JjQ2Eb9JvZmpOD2KSg', '2017-12-12 09:13:07', '2017-12-20 06:56:05', 1234567, 1, 1),
(4, 'Jebali', 'jk.houssem@gmail.com', '$2y$10$RUgYFuqyLqJfuB9C/.2aC.J6POQo1OUNYqELb8ZJOo.vLZEdan6ZS', 'ENLmatAAhOWvI46MBR6ZPff6XhRNItEItMqrShrp4zfZOrtz0BEcSvzrlBAE', '2017-12-12 19:11:01', '2017-12-18 19:06:49', 0, 2, 1),
(7, 'SEOAbild', 'esgruffunchee1997@seocdvig.ru', '$2y$10$o5GD5YEHKJzDa4POLebpyOJRrCpWhLi3mCNixSF.VFTefdpxRm9he', NULL, '2017-12-21 17:53:32', '2017-12-21 17:53:32', 2147483647, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id` int(11) NOT NULL,
  `vehicule_marque` int(255) NOT NULL,
  `vehicule_model` int(255) NOT NULL,
  `new_modele` varchar(50) NOT NULL,
  `new_marque` varchar(50) NOT NULL,
  `existe` tinyint(4) NOT NULL,
  `validation` tinyint(11) NOT NULL,
  `enpublic` tinyint(20) NOT NULL,
  `autos_carrosserie` varchar(20) NOT NULL DEFAULT '1',
  `auto_categorie` varchar(20) NOT NULL,
  `auto_price` varchar(20) NOT NULL,
  `auto_carburan` varchar(10) NOT NULL,
  `auto_km` varchar(50) NOT NULL,
  `auto_colorex` varchar(15) NOT NULL,
  `auto_coloren` varchar(50) DEFAULT NULL,
  `auto_siege` varchar(20) NOT NULL,
  `auto_year` varchar(4) NOT NULL,
  `auto_month` varchar(50) NOT NULL,
  `auto_vitesse` varchar(20) NOT NULL,
  `PoidsRemorque` varchar(15) NOT NULL,
  `Roues` varchar(50) NOT NULL,
  `auto_description` longtext NOT NULL,
  `cv` varchar(50) NOT NULL,
  `porte` varchar(50) NOT NULL,
  `metaliser` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `video` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `num_tel` int(11) NOT NULL,
  `acee_san_cle` int(11) NOT NULL,
  `chauffage` int(11) NOT NULL,
  `parcage` int(11) NOT NULL,
  `assistant` int(11) NOT NULL,
  `camera` int(11) NOT NULL,
  `capteur_arriere` int(11) NOT NULL,
  `capteur_avant1` int(11) NOT NULL,
  `capteur_avant` int(11) NOT NULL,
  `climatisation_automatique` int(11) NOT NULL,
  `climatisation_manuell` int(11) NOT NULL,
  `control_stabilite` int(11) NOT NULL,
  `crochet_atelage` int(11) NOT NULL,
  `dispositif_mail_libre` int(11) NOT NULL,
  `hard_top` int(11) NOT NULL,
  `bluetooth` int(11) NOT NULL,
  `isofix` int(11) NOT NULL,
  `jantes` int(11) NOT NULL,
  `phare_laser1` int(11) NOT NULL,
  `phare_laser` int(11) NOT NULL,
  `phare_xenon` int(11) NOT NULL,
  `phare_derectionnel` int(11) NOT NULL,
  `reglage_desiege_electrique` int(11) NOT NULL,
  `reglage_de_distance` int(11) NOT NULL,
  `regleur_vitesse` int(11) NOT NULL,
  `radio_DAB` int(11) NOT NULL,
  `sallerie_alcantara` int(11) NOT NULL,
  `sallerie_cuire` int(11) NOT NULL,
  `sallerie_partiellement_cuire` int(11) NOT NULL,
  `sallerie_tissu` int(11) NOT NULL,
  `siege_chauffant` int(11) NOT NULL,
  `siege_ventilite` int(11) NOT NULL,
  `Suspension_augmente` int(11) NOT NULL,
  `Suspension_pneumatique` int(11) NOT NULL,
  `Toit_ouvrant` int(11) NOT NULL,
  `Verrouillage_du_differentiel` int(11) NOT NULL,
  `Systeme_start_stop` int(11) NOT NULL,
  `jeux_de_pneus` int(11) NOT NULL,
  `Systeme_de_navigation_integrer` int(11) NOT NULL,
  `Systeme_de_navigation_Portable` int(11) NOT NULL,
  `Systeme_de_navigation_Systeme_de_suivi_de_voie` int(11) NOT NULL,
  `Autobus_scolaires` int(11) NOT NULL,
  `Autotransporter` int(11) NOT NULL,
  `Bache` int(11) NOT NULL,
  `Camion_de_meubles` int(11) NOT NULL,
  `Grue` int(11) NOT NULL,
  `Plateforme_de_levage` int(11) NOT NULL,
  `Porte_bagages` int(11) NOT NULL,
  `Transports_frigorlifique` int(11) NOT NULL,
  `Treuil` int(11) NOT NULL,
  `Pour_handicapes` int(11) NOT NULL,
  `Pour_lexportation` int(11) NOT NULL,
  `Vehicule_accidentee` int(11) NOT NULL,
  `Vehicule_non_accidentee` int(11) NOT NULL,
  `adresse` varchar(300) NOT NULL,
  `rayon` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `expertiser` int(11) NOT NULL,
  `garanti` int(11) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `Cylindree` varchar(50) NOT NULL,
  `Emission_CO2` varchar(50) NOT NULL,
  `consommations` varchar(50) NOT NULL,
  `normes` varchar(50) NOT NULL,
  `cathe_energeri` varchar(50) NOT NULL,
  `auto_vehicule` int(11) NOT NULL,
  `magazine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `vehicule_marque`, `vehicule_model`, `new_modele`, `new_marque`, `existe`, `validation`, `enpublic`, `autos_carrosserie`, `auto_categorie`, `auto_price`, `auto_carburan`, `auto_km`, `auto_colorex`, `auto_coloren`, `auto_siege`, `auto_year`, `auto_month`, `auto_vitesse`, `PoidsRemorque`, `Roues`, `auto_description`, `cv`, `porte`, `metaliser`, `user_id`, `image`, `video`, `created_at`, `updated_at`, `num_tel`, `acee_san_cle`, `chauffage`, `parcage`, `assistant`, `camera`, `capteur_arriere`, `capteur_avant1`, `capteur_avant`, `climatisation_automatique`, `climatisation_manuell`, `control_stabilite`, `crochet_atelage`, `dispositif_mail_libre`, `hard_top`, `bluetooth`, `isofix`, `jantes`, `phare_laser1`, `phare_laser`, `phare_xenon`, `phare_derectionnel`, `reglage_desiege_electrique`, `reglage_de_distance`, `regleur_vitesse`, `radio_DAB`, `sallerie_alcantara`, `sallerie_cuire`, `sallerie_partiellement_cuire`, `sallerie_tissu`, `siege_chauffant`, `siege_ventilite`, `Suspension_augmente`, `Suspension_pneumatique`, `Toit_ouvrant`, `Verrouillage_du_differentiel`, `Systeme_start_stop`, `jeux_de_pneus`, `Systeme_de_navigation_integrer`, `Systeme_de_navigation_Portable`, `Systeme_de_navigation_Systeme_de_suivi_de_voie`, `Autobus_scolaires`, `Autotransporter`, `Bache`, `Camion_de_meubles`, `Grue`, `Plateforme_de_levage`, `Porte_bagages`, `Transports_frigorlifique`, `Treuil`, `Pour_handicapes`, `Pour_lexportation`, `Vehicule_accidentee`, `Vehicule_non_accidentee`, `adresse`, `rayon`, `email`, `expertiser`, `garanti`, `ville`, `Cylindree`, `Emission_CO2`, `consommations`, `normes`, `cathe_energeri`, `auto_vehicule`, `magazine`) VALUES
(1, 3, 27, 'vehicule 2018', 'vehicule', 0, 1, 0, '', 'n-2', '4400000000', 'n-4', '7500', 'n-2', 'n-2', '5', '1962', '5', 'n-4', 'n-7', 'n-2', 'jsdkjdjksdk', '', 'n-2', 1, 1, 'jkkss.jpg', '', '2017-12-19 20:18:58', '2017-12-19 19:18:58', 234566, 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'jjkdkdsksk', 0, 'a@a.a', 0, 0, 'n-15', '', '100', '4', '', '', 0, 0),
(2, 0, 0, 'ldfldf', 'djmkmdjks', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1, '', '', '2017-12-19 08:48:55', '2017-12-19 08:48:55', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', '', '', '', '', '', 0, 0),
(3, 0, 0, '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1, '', '', '2017-12-19 09:19:58', '2017-12-19 09:19:58', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', '', '', '', '', '', 0, 0),
(4, 0, 0, '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1, '', 'https://www.youtube.com/watch?v=fDu0DS-F5FQ', '2017-12-19 09:23:27', '2017-12-19 09:23:27', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule_images`
--

CREATE TABLE `vehicule_images` (
  `id` int(10) NOT NULL,
  `path` varchar(255) NOT NULL,
  `vehicule_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vehicule_images`
--

INSERT INTO `vehicule_images` (`id`, `path`, `vehicule_id`, `created_at`, `updated_at`) VALUES
(4, '103918hsdjsd.jpg', 1, '2017-12-14 09:39:18', '2017-12-14 09:39:18'),
(5, '103918iiiu.jpg', 1, '2017-12-14 09:39:18', '2017-12-14 09:39:18');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `autos_images`
--
ALTER TABLE `autos_images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `autos_marque`
--
ALTER TABLE `autos_marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `autos_modele`
--
ALTER TABLE `autos_modele`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `camions`
--
ALTER TABLE `camions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `camion_images`
--
ALTER TABLE `camion_images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `camping`
--
ALTER TABLE `camping`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `camping_images`
--
ALTER TABLE `camping_images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `detailles`
--
ALTER TABLE `detailles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `magazine`
--
ALTER TABLE `magazine`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `moto_images`
--
ALTER TABLE `moto_images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Index pour la table `pubh`
--
ALTER TABLE `pubh`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pubv`
--
ALTER TABLE `pubv`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `remorques`
--
ALTER TABLE `remorques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `remorque_images`
--
ALTER TABLE `remorque_images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sitesetting`
--
ALTER TABLE `sitesetting`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vehicule_images`
--
ALTER TABLE `vehicule_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `autos`
--
ALTER TABLE `autos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `autos_images`
--
ALTER TABLE `autos_images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `autos_marque`
--
ALTER TABLE `autos_marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `autos_modele`
--
ALTER TABLE `autos_modele`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `camions`
--
ALTER TABLE `camions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `camion_images`
--
ALTER TABLE `camion_images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `camping`
--
ALTER TABLE `camping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `camping_images`
--
ALTER TABLE `camping_images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `detailles`
--
ALTER TABLE `detailles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `magazine`
--
ALTER TABLE `magazine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `moto`
--
ALTER TABLE `moto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `moto_images`
--
ALTER TABLE `moto_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `pubh`
--
ALTER TABLE `pubh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `pubv`
--
ALTER TABLE `pubv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `remorques`
--
ALTER TABLE `remorques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `remorque_images`
--
ALTER TABLE `remorque_images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sitesetting`
--
ALTER TABLE `sitesetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `vehicule_images`
--
ALTER TABLE `vehicule_images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
