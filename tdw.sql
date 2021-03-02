-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2021 at 12:52 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdw`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `Article`
--

CREATE TABLE `Article` (
  `id` int(16) NOT NULL,
  `title` varchar(32) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'default.png',
  `description` text NOT NULL,
  `tags` varchar(100) NOT NULL DEFAULT '#1#',
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Article`
--

INSERT INTO `Article` (`id`, `title`, `image`, `description`, `tags`, `created`) VALUES
(1, 'Article 1', 'image1.jpg', '    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquet lectus justo, id imperdiet neque ultrices eu. Phasellus imperdiet odio non dolor tempor lacinia. Donec faucibus sit amet arcu at sollicitudin. Aenean facilisis sed ante eu placerat. Morbi sollicitudin velit nisl, posuere viverra turpis volutpat vel. Maecenas aliquet tellus et libero scelerisque suscipit. Nunc eleifend, ante vitae ornare elementum, mauris nulla porttitor lectus, ut mollis purus mi vitae nulla. In hac habitasse platea dictumst.', '#2#5#', '2021-02-27 00:00:00'),
(2, 'Article 2', 'image2.jpg', 'Ut ut tortor ex. Pellentesque ultrices vel turpis et ultrices. Nunc venenatis nisl at posuere gravida. Curabitur ultrices dui turpis, non vehicula urna molestie quis. Donec vitae orci pulvinar, posuere ex sit amet, viverra purus. Phasellus a elit metus. Curabitur in molestie libero, quis facilisis mauris. Etiam viverra orci et ipsum pellentesque volutpat. Aliquam pretium turpis ac velit tempus, eu euismod lorem facilisis. Suspendisse ut venenatis lacus. In porta est lacinia dapibus faucibus. In mollis fermentum urna eu hendrerit.', '#1#', '2021-02-27 00:00:00'),
(12, 'Article 3', 'image3.jpg', 'Donec tincidunt finibus est eget eleifend. Duis condimentum non augue id iaculis. Integer quis tempor leo. Sed viverra gravida eros vitae imperdiet. Duis semper, sapien ut porta gravida, libero metus cursus neque, vel aliquet ante ex vel libero. Praesent lectus felis, pulvinar in sagittis a, aliquet sed augue. Duis vel diam fringilla neque dictum bibendum nec at magna. Pellentesque vehicula tellus eu condimentum gravida. Nullam pulvinar vel sapien sit amet pretium. Quisque quis neque a risus accumsan mattis. Nulla fermentum justo vitae ullamcorper cursus. Cras tincidunt mi non rutrum congue. Curabitur porttitor ipsum ligula, sed porta nunc ultricies quis. Quisque augue dolor, faucibus vitae gravida ac, porttitor iaculis orci. ', '#1#', '2021-02-27 00:00:00'),
(17, 'Article 4', 'image4.jpg', '    Ut ut tortor ex. Pellentesque ultrices vel turpis et ultrices. Nunc venenatis nisl at posuere gravida. Curabitur ultrices dui turpis, non vehicula urna molestie quis. Donec vitae orci pulvinar, posuere ex sit amet, viverra purus. Phasellus a elit metus. Curabitur in molestie libero, quis facilisis mauris. Etiam viverra orci et ipsum pellentesque volutpat. Aliquam pretium turpis ac velit tempus, eu euismod lorem facilisis. Suspendisse ut venenatis lacus. In porta est lacinia dapibus faucibus. In mollis fermentum urna eu hendrerit.', '#3#', '2021-02-27 00:00:00'),
(18, 'Article 5', 'default.png', '    Donec tincidunt finibus est eget eleifend. Duis condimentum non augue id iaculis. Integer quis tempor leo. Sed viverra gravida eros vitae imperdiet. Duis semper, sapien ut porta gravida, libero metus cursus neque, vel aliquet ante ex vel libero. Praesent lectus felis, pulvinar in sagittis a, aliquet sed augue. Duis vel diam fringilla neque dictum bibendum nec at magna. Pellentesque vehicula tellus eu condimentum gravida. Nullam pulvinar vel sapien sit amet pretium. Quisque quis neque a risus accumsan mattis. Nulla fermentum justo vitae ullamcorper cursus. Cras tincidunt mi non rutrum congue. Curabitur porttitor ipsum ligula, sed porta nunc ultricies quis. Quisque augue dolor, faucibus vitae gravida ac, porttitor iaculis orci. ', '#2#', '2021-02-27 00:00:00'),
(19, 'Article 6', 'default.png', '    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquet lectus justo, id imperdiet neque ultrices eu. Phasellus imperdiet odio non dolor tempor lacinia. Donec faucibus sit amet arcu at sollicitudin. Aenean facilisis sed ante eu placerat. Morbi sollicitudin velit nisl, posuere viverra turpis volutpat vel. Maecenas aliquet tellus et libero scelerisque suscipit. Nunc eleifend, ante vitae ornare elementum, mauris nulla porttitor lectus, ut mollis purus mi vitae nulla. In hac habitasse platea dictumst.', '#4#7#', '2021-02-27 00:00:00'),
(20, 'Reprise des cours', 'classroom.jpg', 'La reprise des cours est prévu pour le dimanche 20 septembre 2020. Morbi eu neque vitae nisl vehicula congue. Aliquam a ultricies dui. Nunc malesuada consectetur consequat. In varius metus a malesuada fermentum. Suspendisse vel mattis nulla, rhoncus iaculis turpis. Nullam orci ex, imperdiet quis sodales a, egestas blandit arcu. Etiam tincidunt euismod libero eget dapibus. Curabitur porta orci ut dolor eleifend, at blandit neque posuere. ', '#1#', '2021-02-27 20:00:00'),
(21, 'Mesures sanitaires', 'class1.webp', 'Maecenas porttitor felis nec nisl volutpat, ut efficitur ante efficitur. Praesent ultricies sodales interdum. Vestibulum eget lectus vitae lectus tristique dignissim. Sed eu fermentum ipsum. Aenean vel enim risus. Pellentesque varius nec mauris ac tincidunt. Nullam dictum, lacus cursus pulvinar congue, dui lacus rutrum lacus, vitae dapibus enim risus a lectus. Mauris eget tristique ex. ', '#1#', '2021-02-27 00:00:00'),
(22, 'Article 9', 'school1.png', 'Fusce vitae suscipit arcu. Phasellus rhoncus nulla lorem. Integer tristique, erat sed sagittis hendrerit, dui tellus fringilla ligula, quis tincidunt erat erat at ante. Nulla gravida vitae tortor sit amet aliquam. Maecenas ut neque mi. Proin ac dolor eget mi elementum venenatis blandit vel libero. Donec hendrerit metus ut egestas faucibus. Vestibulum pellentesque nibh eu magna tincidunt, in porttitor lacus sodales. Aenean imperdiet maximus dolor, eget blandit sem dictum eget. Suspendisse dapibus sit amet tellus in vehicula. Nullam rutrum quam non blandit bibendum. Nulla facilisi. Vestibulum malesuada bibendum quam ac accumsan. Aenean hendrerit dui ut lacus luctus, nec aliquet dolor feugiat. Nam sodales nulla sapien, in imperdiet ante euismod a. Quisque rhoncus egestas metus vitae luctus. ', '#1#', '2021-02-27 00:00:00'),
(23, 'Concernant les parents', '', 'Fusce vitae suscipit arcu. Phasellus rhoncus nulla lorem. Integer tristique, erat sed sagittis hendrerit, dui tellus fringilla ligula, quis tincidunt erat erat at ante. Nulla gravida vitae tortor sit amet aliquam. Maecenas ut neque mi. Proin ac dolor eget mi elementum venenatis blandit vel libero. Donec hendrerit metus ut egestas faucibus. Vestibulum pellentesque nibh eu magna tincidunt, in porttitor lacus sodales. Aenean imperdiet maximus dolor, eget blandit sem dictum eget. Suspendisse dapibus sit amet tellus in vehicula. Nullam rutrum quam non blandit bibendum. Nulla facilisi. Vestibulum malesuada bibendum quam ac accumsan. Aenean hendrerit dui ut lacus luctus, nec aliquet dolor feugiat. Nam sodales nulla sapien, in imperdiet ante euismod a. Quisque rhoncus egestas metus vitae luctus. \r\n\r\nFusce vitae suscipit arcu. Phasellus rhoncus nulla lorem. Integer tristique, erat sed sagittis hendrerit, dui tellus fringilla ligula, quis tincidunt erat erat at ante. Nulla gravida vitae tortor sit amet aliquam. Maecenas ut neque mi. Proin ac dolor eget mi elementum venenatis blandit vel libero. Donec hendrerit metus ut egestas faucibus. Vestibulum pellentesque nibh eu magna tincidunt, in porttitor lacus sodales. Aenean imperdiet maximus dolor, eget blandit sem dictum eget. Suspendisse dapibus sit amet tellus in vehicula. Nullam rutrum quam non blandit bibendum. Nulla facilisi. Vestibulum malesuada bibendum quam ac accumsan. Aenean hendrerit dui ut lacus luctus, nec aliquet dolor feugiat. Nam sodales nulla sapien, in imperdiet ante euismod a. Quisque rhoncus egestas metus vitae luctus. ', '#6#', '2021-02-27 23:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `Classroom`
--

CREATE TABLE `Classroom` (
  `id` int(16) NOT NULL,
  `name` varchar(10) NOT NULL,
  `school_year` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Classroom`
--

INSERT INTO `Classroom` (`id`, `name`, `school_year`) VALUES
(1, 'Groupe1', 1),
(2, 'Groupe2', 2),
(3, 'Groupe3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Cycle`
--

CREATE TABLE `Cycle` (
  `id` int(16) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Cycle`
--

INSERT INTO `Cycle` (`id`, `name`) VALUES
(1, 'Primary'),
(2, 'Secondary'),
(3, 'High');

-- --------------------------------------------------------

--
-- Table structure for table `Food`
--

CREATE TABLE `Food` (
  `id` int(16) NOT NULL,
  `day` date NOT NULL DEFAULT current_timestamp(),
  `menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Food`
--

INSERT INTO `Food` (`id`, `day`, `menu`) VALUES
(1, '2021-02-28', 'Poulet frites'),
(2, '2021-03-01', 'Soupe + Riz'),
(3, '2021-03-02', 'Haricot + Viande'),
(5, '2021-03-03', 'Pates + thon'),
(6, '2021-03-04', 'Lantilles + patté');

-- --------------------------------------------------------

--
-- Table structure for table `Paragraph`
--

CREATE TABLE `Paragraph` (
  `id` int(8) NOT NULL,
  `p_index` int(8) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Paragraph`
--

INSERT INTO `Paragraph` (`id`, `p_index`, `content`, `image`) VALUES
(1, 1, 'Praesent vel consequat turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus blandit diam sit amet dignissim. Proin sed tellus eu enim placerat pharetra. Sed quam dolor, imperdiet euismod porttitor a, tempus in risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque non nulla purus. Nam nec metus nibh. Fusce ante magna, sodales eu odio quis, fringilla tempor dolor. Nulla facilisi. Vestibulum dui dui, interdum sit amet condimentum sed, mattis sit amet nulla. Donec auctor quam eu dignissim bibendum. Sed id pretium erat. Duis sit amet velit tincidunt, porttitor dui a, mattis felis. ', 'classroom.jpg'),
(2, 2, 'Ut luctus, sem in tempor ornare, dolor massa lobortis mauris, eu consectetur dui tellus sit amet diam. Vestibulum vel tincidunt mi, id molestie orci. Nulla ullamcorper turpis fermentum posuere ullamcorper. Suspendisse sit amet pharetra nunc, et vehicula nibh. Curabitur eu dui sollicitudin, facilisis erat sed, facilisis ipsum. Nam porttitor mauris diam, ac imperdiet justo hendrerit eu. Sed ut augue ullamcorper, accumsan sapien mattis, ullamcorper orci. Maecenas vulputate facilisis mauris quis cursus. Sed ullamcorper volutpat sodales. In pellentesque eleifend orci eu elementum. ', NULL),
(3, 3, 'Praesent vel consequat turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus blandit diam sit amet dignissim. Proin sed tellus eu enim placerat pharetra. Sed quam dolor, imperdiet euismod porttitor a, tempus in risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque non nulla purus. Nam nec metus nibh. Fusce ante magna, sodales eu odio quis, fringilla tempor dolor. Nulla facilisi. Vestibulum dui dui, interdum sit amet condimentum sed, mattis sit amet nulla. Donec auctor quam eu dignissim bibendum. Sed id pretium erat. Duis sit amet velit tincidunt, porttitor dui a, mattis felis. ', NULL),
(6, 5, '     Cras eget dui dapibus, faucibus mi sit amet, iaculis ipsum. Ut ultrices quam quis purus viverra, vel blandit metus vehicula. Quisque faucibus lectus non mauris ullamcorper, sit amet elementum ante fermentum. Pellentesque id quam tortor. Sed tempus, ante sed vehicula ultricies, dolor dui imperdiet lectus, eu faucibus turpis lorem ut orci. Proin vestibulum id ligula ut aliquam. Aliquam malesuada tellus ligula, nec luctus sem tincidunt sit amet. Ut convallis tellus erat, condimentum congue tortor mattis sed. Suspendisse ut volutpat ante. Fusce in dui in libero tincidunt accumsan. Aliquam luctus ac lorem eget congue. Etiam tristique et enim in pulvinar. In blandit, mi in consequat congue, ante neque elementum arcu, ac sodales sem lectus vel est. In id augue quam. Vestibulum dapibus tortor ac quam laoreet fringilla. Morbi odio elit, accumsan ac nunc ac, tristique sollicitudin purus. ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Person`
--

CREATE TABLE `Person` (
  `id` int(16) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone1` varchar(16) NOT NULL,
  `phone2` varchar(16) DEFAULT NULL,
  `phone3` varchar(16) DEFAULT NULL,
  `mail` varchar(30) NOT NULL,
  `passwd_hash` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Person`
--

INSERT INTO `Person` (`id`, `last_name`, `first_name`, `address`, `phone1`, `phone2`, `phone3`, `mail`, `passwd_hash`) VALUES
(1, 'admin', 'admin', 'adresse', '0000000000', '0000000000', '0000000000', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Prof1', 'Ahmed', 'Alger', '0545346245', 'N/A', 'N/A', 'simoh@esi.dz', ''),
(3, 'Prof2', 'Mohamed', 'Alger', '0737827743', 'N/A', 'N/A', 'smahat@esi.dz', ''),
(4, 'Etudiant1', 'Reda', 'Alger', '0553492859', '0555493853', 'N/A', 'morsli@esi.dz', '3de86576bd3033b6d462cdd9e6c14c8a'),
(5, 'Etudiant2', 'Ilyes', 'Tizi', '0539483722', 'N/A', 'N/A', 'bacha@esi.dz', '2557d3311daf58f80ae6f0f2b6e07244'),
(6, 'Parent1', 'Hamid', 'home', '0539847384', 'N/A', 'N/A', 'hamid@gmail.com', ''),
(7, 'Parent2', 'Mustapha', 'Tizi', '0634245464', 'N/A', 'N/A', 'bacha@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `Program`
--

CREATE TABLE `Program` (
  `id` int(16) NOT NULL,
  `teacher` int(16) NOT NULL,
  `classroom` int(16) NOT NULL,
  `subject` int(16) NOT NULL,
  `day` int(1) NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Program`
--

INSERT INTO `Program` (`id`, `teacher`, `classroom`, `subject`, `day`, `start`, `end`) VALUES
(1, 2, 1, 1, 1, '08:00:00', '10:00:00'),
(2, 2, 1, 1, 4, '10:00:00', '12:00:00'),
(3, 3, 1, 2, 1, '10:05:00', '12:00:00'),
(4, 3, 1, 2, 2, '08:00:00', '10:00:00'),
(5, 2, 2, 3, 3, '08:00:00', '10:00:00'),
(6, 3, 2, 6, 5, '13:00:00', '15:00:00'),
(7, 2, 3, 3, 2, '08:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Reception`
--

CREATE TABLE `Reception` (
  `id` int(16) NOT NULL,
  `teacher` int(16) NOT NULL,
  `day` int(1) NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Reception`
--

INSERT INTO `Reception` (`id`, `teacher`, `day`, `start`, `end`) VALUES
(1, 2, 3, '14:00:00', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `SchoolYear`
--

CREATE TABLE `SchoolYear` (
  `id` int(16) NOT NULL,
  `year_index` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `cycle` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `SchoolYear`
--

INSERT INTO `SchoolYear` (`id`, `year_index`, `name`, `cycle`) VALUES
(1, 1, '1ere', 1),
(2, 1, '1am', 2),
(3, 1, '1st', 3);

-- --------------------------------------------------------

--
-- Table structure for table `String`
--

CREATE TABLE `String` (
  `id` varchar(20) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `String`
--

INSERT INTO `String` (`id`, `value`) VALUES
('site_title', 'MySchool');

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `id` int(16) NOT NULL,
  `classroom` int(16) DEFAULT NULL,
  `tutor` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`id`, `classroom`, `tutor`) VALUES
(4, 1, 6),
(5, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `Subject`
--

CREATE TABLE `Subject` (
  `id` int(16) NOT NULL,
  `name` varchar(16) NOT NULL,
  `year` int(16) NOT NULL,
  `coeff` int(2) NOT NULL DEFAULT 1,
  `color` varchar(10) NOT NULL DEFAULT '#ffffff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Subject`
--

INSERT INTO `Subject` (`id`, `name`, `year`, `coeff`, `color`) VALUES
(1, 'Arabe', 1, 1, '#ff000088'),
(2, 'Français', 1, 1, '#0000ff88'),
(3, 'Maths', 2, 1, '#00ffff88'),
(4, 'Physique', 2, 1, '#ffffff'),
(5, 'Science', 3, 1, '#ffffff'),
(6, 'Info', 3, 1, '#000000ee');

-- --------------------------------------------------------

--
-- Table structure for table `Tag`
--

CREATE TABLE `Tag` (
  `id` int(16) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Tag`
--

INSERT INTO `Tag` (`id`, `name`) VALUES
(1, 'Tous'),
(2, 'Primaire'),
(3, 'Secondaire'),
(4, 'Lycéé'),
(5, 'Pour élèves'),
(6, 'Pour parents'),
(7, 'Pour enseignants');

-- --------------------------------------------------------

--
-- Table structure for table `Teacher`
--

CREATE TABLE `Teacher` (
  `id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Teacher`
--

INSERT INTO `Teacher` (`id`) VALUES
(2),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `Tutor`
--

CREATE TABLE `Tutor` (
  `id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Tutor`
--

INSERT INTO `Tutor` (`id`) VALUES
(6),
(7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Article`
--
ALTER TABLE `Article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Classroom`
--
ALTER TABLE `Classroom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_year` (`school_year`);

--
-- Indexes for table `Cycle`
--
ALTER TABLE `Cycle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Food`
--
ALTER TABLE `Food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Paragraph`
--
ALTER TABLE `Paragraph`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Person`
--
ALTER TABLE `Person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Program`
--
ALTER TABLE `Program`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_teacher` (`teacher`),
  ADD KEY `program_classroom` (`classroom`),
  ADD KEY `program_subject` (`subject`);

--
-- Indexes for table `Reception`
--
ALTER TABLE `Reception`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reception_teacher` (`teacher`);

--
-- Indexes for table `SchoolYear`
--
ALTER TABLE `SchoolYear`
  ADD PRIMARY KEY (`id`),
  ADD KEY `year_cycle` (`cycle`);

--
-- Indexes for table `String`
--
ALTER TABLE `String`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_tutor` (`tutor`),
  ADD KEY `student_classroom` (`classroom`);

--
-- Indexes for table `Subject`
--
ALTER TABLE `Subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_year` (`year`);

--
-- Indexes for table `Tag`
--
ALTER TABLE `Tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Teacher`
--
ALTER TABLE `Teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Tutor`
--
ALTER TABLE `Tutor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Article`
--
ALTER TABLE `Article`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `Classroom`
--
ALTER TABLE `Classroom`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Cycle`
--
ALTER TABLE `Cycle`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Food`
--
ALTER TABLE `Food`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Paragraph`
--
ALTER TABLE `Paragraph`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Person`
--
ALTER TABLE `Person`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `Program`
--
ALTER TABLE `Program`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Reception`
--
ALTER TABLE `Reception`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `SchoolYear`
--
ALTER TABLE `SchoolYear`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Subject`
--
ALTER TABLE `Subject`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Tag`
--
ALTER TABLE `Tag`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Admin`
--
ALTER TABLE `Admin`
  ADD CONSTRAINT `admin_id` FOREIGN KEY (`id`) REFERENCES `Person` (`id`);

--
-- Constraints for table `Classroom`
--
ALTER TABLE `Classroom`
  ADD CONSTRAINT `class_year` FOREIGN KEY (`school_year`) REFERENCES `SchoolYear` (`id`);

--
-- Constraints for table `Program`
--
ALTER TABLE `Program`
  ADD CONSTRAINT `program_classroom` FOREIGN KEY (`classroom`) REFERENCES `Classroom` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `program_subject` FOREIGN KEY (`subject`) REFERENCES `Subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `program_teacher` FOREIGN KEY (`teacher`) REFERENCES `Teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Reception`
--
ALTER TABLE `Reception`
  ADD CONSTRAINT `reception_teacher` FOREIGN KEY (`teacher`) REFERENCES `Teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `SchoolYear`
--
ALTER TABLE `SchoolYear`
  ADD CONSTRAINT `year_cycle` FOREIGN KEY (`cycle`) REFERENCES `Cycle` (`id`);

--
-- Constraints for table `Student`
--
ALTER TABLE `Student`
  ADD CONSTRAINT `id_person` FOREIGN KEY (`id`) REFERENCES `Person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_classroom` FOREIGN KEY (`classroom`) REFERENCES `Classroom` (`id`),
  ADD CONSTRAINT `student_tutor` FOREIGN KEY (`tutor`) REFERENCES `Tutor` (`id`);

--
-- Constraints for table `Subject`
--
ALTER TABLE `Subject`
  ADD CONSTRAINT `subject_year` FOREIGN KEY (`year`) REFERENCES `SchoolYear` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Teacher`
--
ALTER TABLE `Teacher`
  ADD CONSTRAINT `id_person_teacher` FOREIGN KEY (`id`) REFERENCES `Person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Tutor`
--
ALTER TABLE `Tutor`
  ADD CONSTRAINT `id_person_tutor` FOREIGN KEY (`id`) REFERENCES `Person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
