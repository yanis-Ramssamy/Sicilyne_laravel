-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 01 mai 2025 à 23:22
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sicilybdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `bateaus`
--

CREATE TABLE `bateaus` (
  `id` bigint UNSIGNED NOT NULL,
  `nombateau` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longueur` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `largeur` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vitesse` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bateaus`
--

INSERT INTO `bateaus` (`id`, `nombateau`, `photo`, `longueur`, `largeur`, `vitesse`, `created_at`, `updated_at`) VALUES
(2, 'Magenta', 'ferry2.jpg', '72.5', '15', '23', NULL, NULL),
(13, 'Gran Navi', '1698393572.jpg', '45.6', '14.8', '12', '2023-10-27 03:59:32', '2023-10-27 03:59:32'),
(20, 'Vogue Merry', '1742553273.png', '5662', '586418', '64169', '2025-03-21 09:34:33', '2025-03-21 09:34:33'),
(21, 'BLACK PEARL', 'images/1742556032_MEGA FERRY.jpg', '12344563', '535648', '45678', '2025-03-21 10:20:32', '2025-03-21 10:20:32');

-- --------------------------------------------------------

--
-- Structure de la table `bateau_equipement`
--

CREATE TABLE `bateau_equipement` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bateau_id` bigint UNSIGNED NOT NULL,
  `equipement_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bateau_equipement`
--

INSERT INTO `bateau_equipement` (`id`, `created_at`, `updated_at`, `bateau_id`, `equipement_id`) VALUES
(11, NULL, NULL, 2, 3),
(18, NULL, NULL, 20, 1),
(19, NULL, NULL, 21, 1);

-- --------------------------------------------------------

--
-- Structure de la table `equipements`
--

CREATE TABLE `equipements` (
  `id` bigint UNSIGNED NOT NULL,
  `libelle` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipements`
--

INSERT INTO `equipements` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
(1, 'Accès handicapés', NULL, NULL),
(2, 'Bar', NULL, NULL),
(3, 'Pont promenade', NULL, NULL),
(4, 'Salon vidéo', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_03_18_165407_create_bateaus_table', 1),
(6, '2025_03_18_171322_create_equipements_table', 1),
(7, '2025_03_18_172633_create_bateau_equipement', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zeus', 'montolympe@gmail.com', NULL, '$2y$12$OpVrXz92.nhRPfRCMS9alOFSZSsxbsl8E142Y6kcVLd9sJpnrGHoS', NULL, '2025-03-19 06:49:05', '2025-03-19 06:49:05'),
(2, 'Thor', 'thor.hammer@gmail.com', NULL, '$2y$12$GSGH.G.U5hQFeuX6ZQ3ieOPLmd0VrPKQW6b0APT0DCdRigr3/P3fy', NULL, '2025-03-19 06:58:54', '2025-03-19 06:58:54'),
(3, 'Athena', 'athena.wisdom@gmail.com', NULL, '$2y$12$O5X49nqtyEhGdkl2ORHX/ecvMPpKoNL4uECUaPidC8za4KTTNWz2C', NULL, '2025-03-19 07:00:19', '2025-03-19 07:00:19'),
(4, 'Loki', 'loki.trickster@gmail.com', NULL, '$2y$12$AgpLgtUtzJWas2KstgjmJejnDu3688NeKuyRkOoZ/ygluWED4TRiy', NULL, '2025-03-19 07:01:28', '2025-03-19 07:01:28');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bateaus`
--
ALTER TABLE `bateaus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bateau_equipement`
--
ALTER TABLE `bateau_equipement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bateau` (`bateau_id`),
  ADD KEY `fk_equipement` (`equipement_id`);

--
-- Index pour la table `equipements`
--
ALTER TABLE `equipements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bateaus`
--
ALTER TABLE `bateaus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `bateau_equipement`
--
ALTER TABLE `bateau_equipement`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `equipements`
--
ALTER TABLE `equipements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bateau_equipement`
--
ALTER TABLE `bateau_equipement`
  ADD CONSTRAINT `fk_bateau` FOREIGN KEY (`bateau_id`) REFERENCES `bateaus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_equipement` FOREIGN KEY (`equipement_id`) REFERENCES `equipements` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
