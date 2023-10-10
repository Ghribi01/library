-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 08 oct. 2023 à 21:23
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `testdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `cin` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`cin`, `nom`, `pass`) VALUES
(14284114, 'ghribi', '14141414'),
(14284545, 'Fedi', '12345678');

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `availibility` int(11) NOT NULL,
  `poster` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `name`, `author`, `year`, `availibility`, `poster`) VALUES
(1, 'THE RISING ORDER', 'CLAIRE ISENTHAL ', 2023, 3, 'https://m.media-amazon.com/images/I/91HySr8McbL._AC_UF1000,1000_QL80_.jpg'),
(2, 'THIS OTHER EDEN', 'Paul Harding', 2023, 5, 'https://m.media-amazon.com/images/I/712d32vCHXL._AC_UF1000,1000_QL80_.jpg'),
(3, 'TEMPLE FOLK', 'Aaliyah Bilal', 2023, 14, 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781982191818/temple-folk-9781982191818_hr.jpg'),
(4, 'THE BEE STING', 'Paul Murray', 2023, 30, 'https://m.media-amazon.com/images/I/71oXW5Wjh0L._AC_UF1000,1000_QL80_.jpg'),
(5, 'BLACKOUTS', 'Justin Torres', 2023, 10, 'https://m.media-amazon.com/images/I/61uBptwtr7L._SL1500_.jpg'),
(6, 'CURSED BUNNY', 'Bora Chung', 2022, 6, 'https://m.media-amazon.com/images/I/81qSnKkbxGL._AC_UF1000,1000_QL80_.jpg'),
(7, 'ORDINARY NOTES', 'Christina Sharpe', 2023, 22, 'https://m.media-amazon.com/images/I/71YQXT4tI0L._AC_UF1000,1000_QL80_.jpg'),
(8, 'FIRE WEATHER', ' John Vaillant', 2023, 0, 'https://m.media-amazon.com/images/I/81g4vo0vrdL._AC_UF1000,1000_QL80_.jpg'),
(9, 'BREATHLESS', 'BREATHLESS', 2023, 10, 'https://m.media-amazon.com/images/I/91+w-uMTn3L._AC_UF1000,1000_QL80_.jpg'),
(10, 'Quran', 'God', 632, 20, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWwnCWzBgJpX9Qd2peCGei7WqBjW7YTWBTWA&usqp=CAU');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `cin` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `groupe` varchar(6) NOT NULL,
  `img` longblob NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`cin`, `nom`, `prenom`, `email`, `groupe`, `img`, `username`, `password`) VALUES
(14147896, 'hedhli', 'youssef', 'youssef@gmail.com', 'L2CS02', 0x626f6f6b2e706e67, 'youssef', '12131415'),
(15223636, 'fedi', 'mohamed', 'fed@hotmail.com', 'L2CS03', 0x626f6f6b2e706e67, 'fed', '12345678');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `cin` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`cin`, `message`, `date`) VALUES
(14276689, 'welcome radhouen', '2023-10-08'),
(14284114, 'Hello ghribi Weclome to our library', '2023-10-04'),
(15223636, 'hello fedi welcome', '2023-10-08'),
(14284114, 'return the book 1 mrs.ghribi', '2023-10-08'),
(14284114, 'hey', '2023-10-08'),
(14284114, 'hey', '2023-10-08'),
(15223636, 'fedi thank you to join us ', '2023-10-08'),
(14284114, 'welcome radhouen', '2023-10-08'),
(14147896, 'Welcome to our New member Youssef', '2023-10-08');

-- --------------------------------------------------------

--
-- Structure de la table `recomands`
--

CREATE TABLE `recomands` (
  `idbook` int(11) NOT NULL,
  `namebook` varchar(100) NOT NULL,
  `cinetu` int(11) NOT NULL,
  `date` date NOT NULL,
  `dateretour` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `recomands`
--

INSERT INTO `recomands` (`idbook`, `namebook`, `cinetu`, `date`, `dateretour`) VALUES
(1, 'THE RISING ORDER', 14147896, '2023-10-08', '2023-11-08'),
(1, 'THE RISING ORDER', 15223636, '2023-10-08', '2023-11-08'),
(2, 'THIS OTHER EDEN', 14284114, '2023-10-08', '2023-11-08'),
(4, 'THE BEE STING', 14284114, '2023-10-08', '2023-11-08');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`cin`);

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`cin`);

--
-- Index pour la table `recomands`
--
ALTER TABLE `recomands`
  ADD PRIMARY KEY (`idbook`,`namebook`,`cinetu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
