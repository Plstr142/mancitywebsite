-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 6, 2025 at 16:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autocomplete_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `player_name` varchar(50) DEFAULT NULL,
  `player_number` int(2) DEFAULT NULL,
  `player_position` varchar(50) DEFAULT NULL,
  `club` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `player_name`, `player_number`, `player_position`, `club` ,`nationality`) VALUES
(0, 'Erling Haaland', '9', 'Striker', 'Manchester City', 'Norway'),
(1, 'Omar Marmoush', '7', 'Centre Forward', 'Manchester City', 'Egypt'),
(2, 'Oscar Bobb', '52', 'Right Winger', 'Manchester City', 'Norway'),
(3, 'Jeremy Doku', '11', 'Left Winger', 'Manchester City', 'Belgium'),
(4, 'Claudio Echeverri', '30', 'Attacking Midfielder', 'Manchester City', 'Argentina'),
(5, 'Phil Foden', '47', 'Right Winger', 'Manchester City', 'England'),
(6, 'Jack Grealish', '10', 'Left Winger', 'Manchester City', 'England'),
(7, 'Ilkay Gundogan', '19', 'Centre Midfielder', 'Manchester City', 'Germany'),
(8, 'Mateo Kovacic', '8', 'Centre Midfielder', 'Manchester City', 'Croatia'),
(9, 'James McAtee', '87', 'Attacking Midfielder', 'Manchester City', 'England'),
(10, 'Nico González', '14', 'Centre Midfielder', 'Manchester City', 'Spain'),
(11, 'Matheus Nunes', '27', 'Centre Midfielder', 'Manchester City', 'Portugal'),
(12, 'Nico O''Reilly', '75', 'Attacking Midfielder', 'Manchester City', 'England'),
(13, 'Rodrigo Hernández Cascante', '16', 'Defensive Midfielder', 'Manchester City', 'Spain'),
(14, 'Savinho', '26', 'Right Winger', 'Manchester City', 'Brazil'),
(15, 'Bernardo Silva', '20', 'Attacking Midfielder', 'Manchester City', 'Portugal'),
(16, 'Manuel Akanji', '25', 'Centre Back', 'Manchester City', 'Switzerland'),
(17, 'Nathan Ake', '6', 'Centre Back', 'Manchester City', 'Netherlands'),
(18, 'Ruben Dias', '3', 'Centre Back', 'Manchester City', 'Portugal'),
(19, 'Josko Gvardiol', '24', 'Centre Back', 'Manchester City', 'Croatia'),
(20, 'Abdukodir Khusanov', '45', 'Centre Back', 'Manchester City', 'Uzbekistan'),
(21, 'Rico Lewis', '82', 'Right Back', 'Manchester City', 'England'),
(22, 'Vitor Reis', '22', 'Centre Back', 'Manchester City', 'Brazil'),
(23, 'John Stones', '5', 'Centre Back', 'Manchester City', 'England'),
(24, 'Stefan Ortega Moreno', '18', 'Goalkeeper', 'Manchester City', 'Germany'),
(25, 'Scott Carson', '33', 'Goalkeeper', 'Manchester City', 'England'),
(26, 'Ederson Santana de Moraes', '31', 'Goalkeeper', 'Manchester City', 'Brazil');




--
-- Indexes for dumped tables
--

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;