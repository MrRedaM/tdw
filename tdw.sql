-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2021 at 12:54 AM
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
-- Table structure for table `Activity`
--

CREATE TABLE `Activity` (
  `id` int(16) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Activity`
--

INSERT INTO `Activity` (`id`, `name`, `image`) VALUES
(1, 'Musique', 'music.jpg'),
(2, 'Dessin', 'paint.jpg'),
(3, 'Athlétisme', 'athletics.jpg'),
(4, 'Natation', 'swim.jpg');

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
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'default.png',
  `description` text NOT NULL,
  `tags` varchar(100) NOT NULL DEFAULT '#1#',
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Article`
--

INSERT INTO `Article` (`id`, `title`, `image`, `description`, `tags`, `created`) VALUES
(18, 'Examens second cycle', 'secondary1.jpg', '            Donec tincidunt finibus est eget eleifend. Duis condimentum non augue id iaculis. Integer quis tempor leo. Sed viverra gravida eros vitae imperdiet. Duis semper, sapien ut porta gravida, libero metus cursus neque, vel aliquet ante ex vel libero. Praesent lectus felis, pulvinar in sagittis a, aliquet sed augue. Duis vel diam fringilla neque dictum bibendum nec at magna. Pellentesque vehicula tellus eu condimentum gravida. Nullam pulvinar vel sapien sit amet pretium. Quisque quis neque a risus accumsan mattis. Nulla fermentum justo vitae ullamcorper cursus. Cras tincidunt mi non rutrum congue. Curabitur porttitor ipsum ligula, sed porta nunc ultricies quis. Quisque augue dolor, faucibus vitae gravida ac, porttitor iaculis orci. ', '#3#5#6#', '2021-02-27 00:00:00'),
(19, 'Inscriptions activités sportives', 'sports.jpg', '                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquet lectus justo, id imperdiet neque ultrices eu. Phasellus imperdiet odio non dolor tempor lacinia. Donec faucibus sit amet arcu at sollicitudin. Aenean facilisis sed ante eu placerat. Morbi sollicitudin velit nisl, posuere viverra turpis volutpat vel. Maecenas aliquet tellus et libero scelerisque suscipit. Nunc eleifend, ante vitae ornare elementum, mauris nulla porttitor lectus, ut mollis purus mi vitae nulla. In hac habitasse platea dictumst.', '#1#', '2021-02-27 00:00:00'),
(20, 'Reprise des cours moyen', 'classroom.jpg', '        La reprise des cours est prévu pour le dimanche 20 septembre 2020. Morbi eu neque vitae nisl vehicula congue. Aliquam a ultricies dui. Nunc malesuada consectetur consequat. In varius metus a malesuada fermentum. Suspendisse vel mattis nulla, rhoncus iaculis turpis. Nullam orci ex, imperdiet quis sodales a, egestas blandit arcu. Etiam tincidunt euismod libero eget dapibus. Curabitur porta orci ut dolor eleifend, at blandit neque posuere. ', '#3#', '2021-02-27 20:00:00'),
(21, 'Mesures sanitaires', 'class1.webp', 'Maecenas porttitor felis nec nisl volutpat, ut efficitur ante efficitur. Praesent ultricies sodales interdum. Vestibulum eget lectus vitae lectus tristique dignissim. Sed eu fermentum ipsum. Aenean vel enim risus. Pellentesque varius nec mauris ac tincidunt. Nullam dictum, lacus cursus pulvinar congue, dui lacus rutrum lacus, vitae dapibus enim risus a lectus. Mauris eget tristique ex. ', '#1#', '2021-02-27 00:00:00'),
(22, 'Annonce lycée', 'school1.png', '        Fusce vitae suscipit arcu. Phasellus rhoncus nulla lorem. Integer tristique, erat sed sagittis hendrerit, dui tellus fringilla ligula, quis tincidunt erat erat at ante. Nulla gravida vitae tortor sit amet aliquam. Maecenas ut neque mi. Proin ac dolor eget mi elementum venenatis blandit vel libero. Donec hendrerit metus ut egestas faucibus. Vestibulum pellentesque nibh eu magna tincidunt, in porttitor lacus sodales. Aenean imperdiet maximus dolor, eget blandit sem dictum eget. Suspendisse dapibus sit amet tellus in vehicula. Nullam rutrum quam non blandit bibendum. Nulla facilisi. Vestibulum malesuada bibendum quam ac accumsan. Aenean hendrerit dui ut lacus luctus, nec aliquet dolor feugiat. Nam sodales nulla sapien, in imperdiet ante euismod a. Quisque rhoncus egestas metus vitae luctus. ', '#4#', '2021-02-01 00:00:00'),
(23, 'Concernant les parents', 'parent.webp', '                Fusce vitae suscipit arcu. Phasellus rhoncus nulla lorem. Integer tristique, erat sed sagittis hendrerit, dui tellus fringilla ligula, quis tincidunt erat erat at ante. Nulla gravida vitae tortor sit amet aliquam. Maecenas ut neque mi. Proin ac dolor eget mi elementum venenatis blandit vel libero. Donec hendrerit metus ut egestas faucibus. Vestibulum pellentesque nibh eu magna tincidunt, in porttitor lacus sodales. Aenean imperdiet maximus dolor, eget blandit sem dictum eget. Suspendisse dapibus sit amet tellus in vehicula. Nullam rutrum quam non blandit bibendum. Nulla facilisi. Vestibulum malesuada bibendum quam ac accumsan. Aenean hendrerit dui ut lacus luctus, nec aliquet dolor feugiat. Nam sodales nulla sapien, in imperdiet ante euismod a. Quisque rhoncus egestas metus vitae luctus. \r\n\r\nFusce vitae suscipit arcu. Phasellus rhoncus nulla lorem. Integer tristique, erat sed sagittis hendrerit, dui tellus fringilla ligula, quis tincidunt erat erat at ante. Nulla gravida vitae tortor sit amet aliquam. Maecenas ut neque mi. Proin ac dolor eget mi elementum venenatis blandit vel libero. Donec hendrerit metus ut egestas faucibus. Vestibulum pellentesque nibh eu magna tincidunt, in porttitor lacus sodales. Aenean imperdiet maximus dolor, eget blandit sem dictum eget. Suspendisse dapibus sit amet tellus in vehicula. Nullam rutrum quam non blandit bibendum. Nulla facilisi. Vestibulum malesuada bibendum quam ac accumsan. Aenean hendrerit dui ut lacus luctus, nec aliquet dolor feugiat. Nam sodales nulla sapien, in imperdiet ante euismod a. Quisque rhoncus egestas metus vitae luctus. ', '#6#', '2021-02-27 23:07:31'),
(24, 'Inscriptions bibliothèque', 'books.webp', '                 Cras ac porta est. Vivamus nunc odio, egestas vitae orci vel, tincidunt pharetra dolor. Maecenas facilisis, lorem non egestas iaculis, dolor felis consectetur quam, nec pharetra magna mi eget dolor. Mauris fermentum quam id felis cursus cursus. Nullam placerat, nisl non pellentesque lobortis, nibh dui tempor quam, et convallis nunc ex nec nunc. Etiam ultricies sagittis nisi, at ullamcorper odio tristique ut. Nunc vitae molestie mauris. Donec pulvinar sed lorem eget posuere. Cras mattis mi nec felis vehicula, quis luctus lorem aliquet. Curabitur lacus arcu, vulputate id orci luctus, maximus rhoncus mi. Nulla ut velit ultrices dolor pretium commodo sed sed felis. Integer iaculis felis a dolor placerat tristique. Integer tempus sollicitudin dolor, sed molestie dolor porta non. Nulla aliquam vulputate imperdiet.\r\n\r\nSed ut venenatis sapien. Nunc sollicitudin tincidunt dui eget ultricies. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum lacinia lorem non ornare lacinia. Aliquam rutrum, ex at fermentum hendrerit, lacus turpis facilisis mauris, nec viverra mi justo efficitur justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti. Maecenas et viverra lacus. Mauris posuere ullamcorper leo, sit amet ullamcorper erat maximus a. Donec libero nisi, molestie ut augue ut, sollicitudin lobortis diam. Aliquam non arcu pellentesque nisl convallis blandit. Mauris viverra viverra nibh, vel fermentum massa congue quis. Pellentesque viverra sit amet nunc in elementum. Aenean nec quam at elit suscipit pretium. Morbi in leo et libero finibus varius non varius diam. Nulla nulla mi, tempor at lacus sit amet, gravida euismod est. ', '#1#', '2021-03-04 20:33:54'),
(25, 'Reprise des cours primaire', 'class2.jpg', '         Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet viverra arcu. Curabitur sed vestibulum arcu. Curabitur pulvinar lorem in lectus finibus, vel posuere mi luctus. Pellentesque dapibus turpis ut tortor lobortis molestie. Integer erat nunc, sollicitudin ac interdum in, pellentesque ut purus. Suspendisse pulvinar ipsum vel tortor luctus pretium. Mauris commodo elementum sem, nec aliquam enim congue eget. Suspendisse ac massa at risus pharetra suscipit.\r\n\r\nCras ac porta est. Vivamus nunc odio, egestas vitae orci vel, tincidunt pharetra dolor. Maecenas facilisis, lorem non egestas iaculis, dolor felis consectetur quam, nec pharetra magna mi eget dolor. Mauris fermentum quam id felis cursus cursus. Nullam placerat, nisl non pellentesque lobortis, nibh dui tempor quam, et convallis nunc ex nec nunc. Etiam ultricies sagittis nisi, at ullamcorper odio tristique ut. Nunc vitae molestie mauris. Donec pulvinar sed lorem eget posuere. Cras mattis mi nec felis vehicula, quis luctus lorem aliquet. Curabitur lacus arcu, vulputate id orci luctus, maximus rhoncus mi. Nulla ut velit ultrices dolor pretium commodo sed sed felis. Integer iaculis felis a dolor placerat tristique. Integer tempus sollicitudin dolor, sed molestie dolor porta non. Nulla aliquam vulputate imperdiet. ', '#2#', '2021-03-04 21:01:30'),
(26, 'Excursion scolaire musée', 'mus.jpeg', ' Duis quis auctor nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed pretium suscipit diam eu hendrerit. Sed ac urna nibh. Proin vel tincidunt velit. Vivamus pulvinar libero fermentum pharetra pellentesque. Vestibulum placerat velit nec blandit tempus. Curabitur et ultricies erat. Pellentesque ante leo, aliquam vitae turpis ac, congue elementum ex. Vestibulum tempus, augue et scelerisque dictum, ex sem euismod mi, sit amet placerat ex diam ac justo. Suspendisse mollis pellentesque velit, tincidunt facilisis odio rhoncus sed. Praesent a lectus sagittis, finibus diam vel, fermentum dui. Morbi eget tellus consequat, venenatis ante eu, tristique sem. Nullam ullamcorper lacinia pretium. Nulla sed rutrum lectus. In sit amet nisi cursus libero accumsan sodales sed maximus erat. \r\n\r\n Sed elementum mauris in eros pellentesque luctus. Cras ullamcorper posuere placerat. Phasellus at mollis nulla, non commodo risus. Sed hendrerit massa sed nunc ultrices, eget sagittis turpis porttitor. Cras ante odio, imperdiet sed blandit finibus, pellentesque vel ipsum. Phasellus aliquet scelerisque ante et euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Donec semper faucibus nisl, at scelerisque tellus volutpat et. Sed leo risus, ornare sit amet viverra vulputate, ornare vel metus. Mauris pharetra, justo ut commodo ornare, sapien purus tempor elit, eget euismod nisl arcu sit amet arcu. ', '#5#6#', '2021-03-12 22:55:18'),
(27, 'Planning 1er trimestre', 'planning.webp', ' Nulla facilisi. Fusce non volutpat turpis. Aenean quis neque id leo malesuada posuere id eget mi. Vivamus non placerat magna, vitae mattis quam. Cras vulputate posuere nisl ut sodales. Phasellus eu arcu libero. Pellentesque imperdiet nunc vel faucibus vehicula. In dignissim id felis quis ultrices.\r\n\r\nCras pulvinar nunc ac erat accumsan euismod. Mauris pulvinar ultricies suscipit. Phasellus ante mauris, facilisis at lacus a, euismod mollis dui. Etiam ipsum ex, ullamcorper vel imperdiet quis, rhoncus a arcu. In fermentum bibendum fringilla. Morbi erat ligula, condimentum vel est eget, facilisis malesuada mi. Aliquam mollis tincidunt nibh, volutpat vulputate odio fermentum id. Duis congue risus ac ligula facilisis ultricies. Sed convallis odio et metus porttitor, eu posuere lorem imperdiet. Donec et nunc ornare, imperdiet neque in, molestie libero. Suspendisse sed nunc quis leo lacinia varius a ut massa. Integer nec molestie lacus. Nullam viverra ligula in sagittis hendrerit. Vivamus id blandit neque. ', '#1#', '2021-01-12 23:03:53'),
(28, 'Lancement site web', 'image1.jpg', ' Sed elementum mauris in eros pellentesque luctus. Cras ullamcorper posuere placerat. Phasellus at mollis nulla, non commodo risus. Sed hendrerit massa sed nunc ultrices, eget sagittis turpis porttitor. Cras ante odio, imperdiet sed blandit finibus, pellentesque vel ipsum. Phasellus aliquet scelerisque ante et euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Donec semper faucibus nisl, at scelerisque tellus volutpat et. Sed leo risus, ornare sit amet viverra vulputate, ornare vel metus. Mauris pharetra, justo ut commodo ornare, sapien purus tempor elit, eget euismod nisl arcu sit amet arcu.\r\n\r\nNulla facilisi. Fusce non volutpat turpis. Aenean quis neque id leo malesuada posuere id eget mi. Vivamus non placerat magna, vitae mattis quam. Cras vulputate posuere nisl ut sodales. Phasellus eu arcu libero. Pellentesque imperdiet nunc vel faucibus vehicula. In dignissim id felis quis ultrices. ', '#1#', '2021-01-06 23:12:13');

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
-- Table structure for table `CycleInfo`
--

CREATE TABLE `CycleInfo` (
  `id` int(16) NOT NULL,
  `cycle` int(16) NOT NULL,
  `title` varchar(100) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CycleInfo`
--

INSERT INTO `CycleInfo` (`id`, `cycle`, `title`, `info`) VALUES
(1, 1, 'Info 1', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque bibendum nisi vel turpis auctor interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla aliquet egestas felis ut porta. Aenean eu malesuada orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis bibendum, massa quis commodo lobortis, arcu lacus interdum libero, vitae feugiat erat ipsum non libero. Suspendisse vitae tincidunt nibh. Nullam sit amet justo nunc. Suspendisse blandit massa id pellentesque sollicitudin. '),
(2, 1, 'Info 2', ' Integer nec ullamcorper quam, quis commodo dolor. Nullam vitae ipsum fringilla, sollicitudin lectus at, elementum eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce sit amet enim non urna gravida laoreet. Phasellus maximus nisl lacus, non hendrerit lectus vehicula iaculis. Pellentesque semper mi elit, in vestibulum velit vehicula id. Sed tempus ultricies est, quis imperdiet velit malesuada non. '),
(3, 2, 'Info 1', ' Etiam fringilla sapien quis massa placerat, et viverra dolor fermentum. Pellentesque ullamcorper odio id nulla semper viverra. Sed hendrerit elementum orci, a porta urna hendrerit id. Suspendisse at lectus tincidunt, luctus dui blandit, mollis massa. Nam metus lorem, vehicula sit amet arcu nec, vulputate dignissim quam. Aliquam fringilla facilisis efficitur. Phasellus pulvinar id urna laoreet scelerisque. Nulla at nulla vitae tellus consequat consequat. '),
(4, 2, 'Info 2', ' Quisque sed volutpat orci. Quisque ornare felis turpis, sit amet mollis odio imperdiet pellentesque. Pellentesque pulvinar et est nec hendrerit. Donec ornare nisi vitae arcu blandit euismod. Sed porttitor dolor vehicula, accumsan metus vel, condimentum ex. Nulla non congue orci. Nunc volutpat varius pharetra. Quisque vitae mauris ut felis interdum dapibus. Nam diam eros, finibus nec magna sed, aliquam tempor ante. Sed nisl nisi, eleifend ac nisl quis, sagittis placerat ligula. '),
(5, 3, 'Info 1', ' Etiam enim leo, vestibulum sit amet lorem non, ornare mattis diam. Proin nec maximus eros, at bibendum urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut fermentum augue in facilisis finibus. Curabitur consequat pretium velit vel egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque eu leo leo. '),
(6, 3, 'Info 2', ' Vivamus a convallis ex. Fusce iaculis mauris ligula, ut aliquam massa gravida a. Etiam pharetra pulvinar enim in eleifend. Aenean venenatis sem nec odio ornare, in vehicula ex sagittis. Duis lectus quam, dictum consectetur nisl sit amet, dictum euismod tellus. Ut ac nulla tempus, commodo dolor in, lacinia libero. Mauris fringilla auctor egestas. Nullam iaculis purus at nisl convallis lobortis. Cras hendrerit est eu urna viverra, ut ullamcorper tellus feugiat. Aliquam non ornare odio. Integer et libero eget arcu dictum porta. ');

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
(6, '2021-03-04', 'Lantilles + patté'),
(14, '2021-03-07', 'Riz + Poulet + Jus'),
(15, '2021-03-08', 'Lentilles +Thon + Yaourt'),
(16, '2021-03-09', 'Haricot + Viande + Tarte'),
(17, '2021-03-10', 'Couscous + Poulet + Dattes'),
(18, '2021-03-11', 'Pâtes + Viande + Yaourt');

-- --------------------------------------------------------

--
-- Table structure for table `Mark`
--

CREATE TABLE `Mark` (
  `id` int(16) NOT NULL,
  `student` int(16) NOT NULL,
  `subject` int(16) NOT NULL,
  `mark` int(4) NOT NULL,
  `note` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Mark`
--

INSERT INTO `Mark` (`id`, `student`, `subject`, `mark`, `note`) VALUES
(1, 4, 1, 14, 'تلميذ مجتهد'),
(2, 4, 2, 16, 'Très bon travail'),
(3, 5, 6, 16, 'Very good');

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
  `passwd_hash` varchar(32) NOT NULL DEFAULT 'd41d8cd98f00b204e9800998ecf8427e'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Person`
--

INSERT INTO `Person` (`id`, `last_name`, `first_name`, `address`, `phone1`, `phone2`, `phone3`, `mail`, `passwd_hash`) VALUES
(1, 'admin', 'admin', 'adresse', '0000000000', '0000000000', '0000000000', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Prof1', 'Ahmed', 'Alger', '0545346245', 'N/A', 'N/A', 'prof1@school.com', ''),
(3, 'Prof2', 'Mohamed', 'Alger', '0737827743', 'N/A', 'N/A', 'prof2@school.com', ''),
(4, 'Etudiant1', 'Reda', 'Alger', '0553492859', '0555493853', 'N/A', 'etudiant1@school.com', '8f829d59bb9378e0b10f1eb5779fb0f8'),
(5, 'Etudiant2', 'Ilyes', 'Tizi', '0539483722', 'N/A', 'N/A', 'etudiant2@school.com', '96e0ccf22f04131824b5c6a020d96d2e'),
(6, 'Parent1', 'Hamid', 'Alger', '0539847384', 'N/A', 'N/A', 'parent1@school.com', '34f83b4b453db075f374fa73365b8283'),
(7, 'Parent2', 'Mustapha', 'Tizi', '0634245464', 'N/A', 'N/A', 'parent2@school.com', 'df7d26c91d5b0b52c51f813d4f335833'),
(25, 'Etudiant3', 'Yacine', 'Alger', '0554960384', 'N/A', 'N/A', 'etudiant3@schoo.com', '0286c837a48dd30041fa8b2db7672660'),
(26, 'Prof3', 'Amina', 'Blida', '0556352535', 'N/A', 'N/A', 'prof3@school.com', ''),
(27, 'Prof4', 'Hakim', 'Alger', '06346434', 'N/A', 'N/A', 'prof4@school.com', '');

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
(2, 2, 1, 1, 4, '10:00:00', '12:00:00'),
(3, 3, 1, 2, 1, '15:05:00', '16:00:00'),
(4, 3, 1, 2, 2, '08:00:00', '10:00:00'),
(5, 27, 2, 3, 3, '08:00:00', '10:00:00'),
(8, 2, 1, 1, 3, '08:00:00', '00:00:00'),
(9, 3, 1, 2, 5, '08:00:00', '12:00:00'),
(10, 2, 3, 5, 4, '08:00:00', '10:00:00'),
(13, 2, 1, 1, 1, '08:00:00', '10:02:00'),
(14, 2, 1, 1, 1, '13:00:00', '15:00:00'),
(17, 26, 1, 7, 1, '10:05:00', '12:00:00'),
(18, 2, 1, 1, 2, '10:05:00', '12:00:00'),
(19, 2, 1, 1, 2, '13:00:00', '14:30:00'),
(20, 3, 1, 2, 3, '10:05:00', '12:00:00'),
(21, 3, 1, 2, 4, '10:00:00', '12:00:00'),
(22, 2, 1, 7, 4, '13:00:00', '15:00:00'),
(23, 2, 1, 1, 5, '10:05:00', '12:00:00'),
(24, 2, 1, 2, 5, '13:00:00', '14:00:00'),
(25, 2, 1, 1, 5, '14:05:00', '15:00:00'),
(26, 27, 2, 3, 1, '08:00:00', '10:00:00'),
(27, 2, 2, 11, 1, '10:05:00', '12:00:00'),
(28, 27, 2, 4, 1, '13:00:00', '15:00:00'),
(29, 2, 2, 8, 1, '15:05:00', '16:00:00'),
(30, 2, 2, 10, 2, '08:00:00', '10:00:00'),
(31, 2, 2, 9, 2, '10:05:00', '12:00:00'),
(32, 2, 2, 3, 2, '13:00:00', '15:00:00'),
(33, 2, 2, 11, 2, '15:05:00', '16:00:00'),
(34, 2, 2, 11, 3, '10:05:00', '12:00:00'),
(35, 2, 2, 4, 4, '08:00:00', '10:00:00'),
(36, 2, 2, 11, 4, '10:00:00', '12:00:00'),
(37, 2, 2, 8, 4, '13:00:00', '14:00:00'),
(38, 2, 2, 9, 5, '08:00:00', '10:05:00'),
(39, 27, 2, 3, 5, '10:05:00', '12:00:00'),
(40, 27, 2, 4, 5, '13:00:00', '15:00:00'),
(41, 27, 3, 12, 1, '08:00:00', '10:00:00'),
(42, 3, 3, 5, 1, '10:00:00', '12:00:00'),
(43, 26, 3, 6, 1, '13:00:00', '15:00:00'),
(44, 27, 3, 13, 2, '08:00:00', '10:05:00'),
(45, 2, 3, 14, 2, '10:00:00', '12:00:00'),
(46, 26, 3, 6, 3, '08:00:00', '12:00:00'),
(47, 27, 3, 13, 4, '10:05:00', '12:00:00'),
(48, 27, 3, 12, 4, '13:00:00', '15:00:00'),
(49, 3, 3, 14, 5, '08:00:00', '10:00:00'),
(50, 2, 3, 6, 5, '10:00:00', '12:00:00');

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
(1, 2, 3, '14:00:00', '16:00:00'),
(3, 26, 5, '13:00:00', '17:00:00'),
(4, 27, 3, '13:00:00', '15:00:00'),
(6, 3, 2, '15:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Registration`
--

CREATE TABLE `Registration` (
  `id` int(16) NOT NULL,
  `student` int(16) NOT NULL,
  `activity` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Registration`
--

INSERT INTO `Registration` (`id`, `student`, `activity`) VALUES
(1, 4, 3),
(2, 4, 4),
(3, 4, 1),
(4, 25, 2),
(5, 25, 4),
(6, 5, 1),
(7, 4, 2);

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
('contact_fax', '+44-208-1234580'),
('contact_mail', 'contact@my-school.dz'),
('contact_phone', '+213 232 24 65 90'),
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
(5, 3, 7),
(25, 2, 6);

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
(4, 'Physique', 2, 1, '#2A2E45'),
(5, 'Science', 3, 1, '#00FF00'),
(6, 'Info', 3, 1, '#000000ee'),
(7, 'Anglais', 1, 1, '#5D2A42'),
(8, 'Histoire', 2, 1, '#7A542E'),
(9, 'Géographie', 2, 1, '#9BA2FF'),
(10, 'Physique', 2, 1, '#2A2E45'),
(11, 'Arabe', 2, 1, '#9E8576'),
(12, 'Electricité', 3, 1, '#ffff3f'),
(13, 'Chimie', 3, 1, '#00509d'),
(14, 'Philosophie', 3, 1, '#ce4257');

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
(3),
(26),
(27);

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
-- Indexes for table `Activity`
--
ALTER TABLE `Activity`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `CycleInfo`
--
ALTER TABLE `CycleInfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Food`
--
ALTER TABLE `Food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Mark`
--
ALTER TABLE `Mark`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mark_student` (`student`),
  ADD KEY `mark_subject` (`subject`);

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
-- Indexes for table `Registration`
--
ALTER TABLE `Registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `register_student` (`student`),
  ADD KEY `register_activity` (`activity`);

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
-- AUTO_INCREMENT for table `Activity`
--
ALTER TABLE `Activity`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Article`
--
ALTER TABLE `Article`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
-- AUTO_INCREMENT for table `CycleInfo`
--
ALTER TABLE `CycleInfo`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Food`
--
ALTER TABLE `Food`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Mark`
--
ALTER TABLE `Mark`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Paragraph`
--
ALTER TABLE `Paragraph`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Person`
--
ALTER TABLE `Person`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `Program`
--
ALTER TABLE `Program`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `Reception`
--
ALTER TABLE `Reception`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Registration`
--
ALTER TABLE `Registration`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `SchoolYear`
--
ALTER TABLE `SchoolYear`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Subject`
--
ALTER TABLE `Subject`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
-- Constraints for table `Mark`
--
ALTER TABLE `Mark`
  ADD CONSTRAINT `mark_student` FOREIGN KEY (`student`) REFERENCES `Student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mark_subject` FOREIGN KEY (`subject`) REFERENCES `Subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `Registration`
--
ALTER TABLE `Registration`
  ADD CONSTRAINT `register_activity` FOREIGN KEY (`activity`) REFERENCES `Activity` (`id`),
  ADD CONSTRAINT `register_student` FOREIGN KEY (`student`) REFERENCES `Student` (`id`);

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
