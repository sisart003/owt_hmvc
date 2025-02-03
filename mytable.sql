-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 03, 2025 at 06:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn_ci_hmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `numberrange` mediumint(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`id`, `name`, `phone`, `email`, `country`, `numberrange`) VALUES
(1, 'Lane Henry', '(824) 388-9850', 'eget@yahoo.couk', 'Peru', 25),
(2, 'Yuli Molina', '(317) 380-5656', 'molestie.in@protonmail.com', 'Vietnam', 11),
(3, 'Hyacinth Carson', '(251) 257-3425', 'rutrum@yahoo.ca', 'Ukraine', 42),
(4, 'Rahim Callahan', '1-477-101-9122', 'ut.aliquam.iaculis@protonmail.net', 'Germany', 16),
(5, 'Angela Brennan', '1-920-216-7543', 'nisi@protonmail.edu', 'New Zealand', 8),
(6, 'Ocean Floyd', '(443) 261-2684', 'tortor.integer@aol.ca', 'Belgium', 39),
(7, 'Lionel Rogers', '(685) 181-0382', 'ultricies@google.com', 'Austria', 25),
(8, 'Raphael Espinoza', '1-567-982-5044', 'placerat.augue.sed@outlook.org', 'Spain', 9),
(9, 'Murphy Franks', '1-675-722-0260', 'quam.curabitur@hotmail.couk', 'India', 20),
(10, 'Thaddeus Stephens', '1-590-399-8868', 'nunc.quis@yahoo.net', 'Brazil', 2),
(11, 'Jocelyn Daugherty', '(473) 856-6031', 'donec@protonmail.couk', 'Costa Rica', 39),
(12, 'Tad Harris', '1-734-631-4187', 'fermentum.metus@outlook.ca', 'Mexico', 31),
(13, 'Lewis Holman', '(543) 635-4336', 'sed@google.org', 'Turkey', 47),
(14, 'Forrest Hill', '1-502-327-7565', 'convallis@google.edu', 'Peru', 4),
(15, 'Mercedes Buck', '(239) 315-1255', 'arcu.vestibulum@yahoo.edu', 'United Kingdom', 29),
(16, 'Allen Mcfadden', '(282) 838-7164', 'dictum@hotmail.ca', 'China', 36),
(17, 'Jillian Garner', '1-526-624-1462', 'pretium.et.rutrum@icloud.edu', 'Turkey', 7),
(18, 'Larissa Ware', '1-253-660-9966', 'purus.maecenas.libero@protonmail.edu', 'Pakistan', 15),
(19, 'Lars Bean', '(843) 227-4350', 'eros.non@outlook.couk', 'Canada', 35),
(20, 'Kyla Martin', '1-316-721-2050', 'iaculis.aliquet.diam@yahoo.couk', 'Colombia', 15),
(21, 'Jonas Medina', '(243) 657-7684', 'id.ante@outlook.ca', 'Singapore', 8),
(22, 'Ginger Harmon', '1-437-726-1129', 'nec@yahoo.net', 'Brazil', 13),
(23, 'Hayes Mccullough', '(202) 913-5813', 'tristique@aol.net', 'Colombia', 3),
(24, 'Yael Kelley', '(139) 893-4868', 'sit.amet@aol.com', 'France', 18),
(25, 'Travis Day', '(529) 482-7531', 'malesuada@icloud.org', 'Peru', 5),
(26, 'Hashim Valencia', '1-357-517-3718', 'orci.luctus@icloud.couk', 'Netherlands', 1),
(27, 'Jesse Thomas', '(164) 422-3867', 'vitae.risus@yahoo.edu', 'Costa Rica', 14),
(28, 'Andrew Vega', '(616) 338-8870', 'magna.a@protonmail.edu', 'United Kingdom', 22),
(29, 'Amelia Barrett', '(467) 561-4512', 'posuere@google.ca', 'China', 31),
(30, 'Lillian Potts', '(174) 312-0260', 'ac.sem@protonmail.org', 'Singapore', 26),
(31, 'Derek Brady', '(284) 450-8575', 'ullamcorper.duis@hotmail.net', 'Costa Rica', 13),
(32, 'Ishmael Duncan', '(665) 551-8501', 'nibh@outlook.com', 'Turkey', 35),
(33, 'Upton Sampson', '(314) 882-3599', 'et.magna.praesent@google.ca', 'Russian Federation', 25),
(34, 'Nicole Cole', '(633) 542-9729', 'magna.sed.dui@protonmail.com', 'Sweden', 36),
(35, 'Walter Moses', '1-483-876-0532', 'elit.a@google.net', 'United Kingdom', 28),
(36, 'Abdul Rivera', '1-259-955-6340', 'placerat.augue@outlook.ca', 'New Zealand', 4),
(37, 'Kirsten Wheeler', '(823) 739-4897', 'tincidunt.congue@hotmail.net', 'Poland', 37),
(38, 'Kevin Cannon', '(393) 813-3238', 'augue.id.ante@hotmail.couk', 'Philippines', 15),
(39, 'Olivia Maldonado', '(629) 946-6311', 'erat.in@aol.edu', 'Austria', 3),
(40, 'Hilda Gill', '(530) 668-7650', 'iaculis.enim.sit@hotmail.net', 'Philippines', 37),
(41, 'Jacob French', '1-313-388-1214', 'elit.pharetra@protonmail.net', 'Philippines', 12),
(42, 'Sharon Conley', '1-522-449-1445', 'elementum.purus@google.ca', 'Canada', 4),
(43, 'Jocelyn Hull', '1-845-638-4657', 'scelerisque.mollis@icloud.com', 'Philippines', 38),
(44, 'McKenzie May', '(582) 722-8149', 'ac.mattis.ornare@outlook.edu', 'Philippines', 22),
(45, 'Helen Simon', '(611) 635-2164', 'dis.parturient@hotmail.edu', 'China', 32),
(46, 'Keelie Jones', '1-728-713-8043', 'id.sapien.cras@aol.couk', 'Netherlands', 42),
(47, 'Whilemina Mays', '(627) 592-8685', 'dis.parturient@google.edu', 'Germany', 35),
(48, 'Doris Macdonald', '(360) 762-6883', 'ut.odio.vel@outlook.net', 'Colombia', 30),
(49, 'Evangeline Hubbard', '1-112-551-5311', 'cursus@google.com', 'Vietnam', 38),
(50, 'Zephr Ortiz', '1-396-477-1623', 'neque.non@yahoo.ca', 'Spain', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mytable`
--
ALTER TABLE `mytable`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
