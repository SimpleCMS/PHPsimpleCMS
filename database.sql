-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Gazda: 127.0.0.1
-- Timp de generare: 16 Feb 2014 la 13:28
-- Versiune server: 5.6.14
-- Versiune PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Bază de date: `cms`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `post_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Salvarea datelor din tabel `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `post_date`) VALUES
(1, 'Lorem ipsum', '<p><span style="font-family: Arial, Helvetica, sans; line-height: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum eros in leo suscipit aliquam. Nullam sed quam elit. Donec et lorem dapibus, interdum ipsum ut, bibendum justo. Suspendisse aliquet congue neque, id congue tellus pellentesque non. Nunc posuere hendrerit mi eget tincidunt. Aenean hendrerit, erat ac elementum euismod, lectus dolor pulvinar elit, a placerat libero nisl in nisi. Nam fermentum nec tortor vitae rhoncus. Phasellus rhoncus molestie congue. Sed malesuada suscipit fringilla. Ut in magna mi.</span></p>\r\n<p><span style="font-family: Arial, Helvetica, sans; line-height: 14px; text-align: justify;">Nunc vel tellus ac ligula suscipit pretium non rutrum urna. Donec eget tortor a ante tempor dignissim. Quisque fermentum fringilla quam, a ullamcorper nisl posuere eget. Donec at nulla vitae dui ultricies sollicitudin quis sed leo. Integer vulputate magna a felis mattis, tincidunt luctus sapien molestie. Donec molestie sed nisl vitae tristique. Fusce mi tortor, porta a eros at, vehicula mattis nulla. Integer in justo laoreet, varius sapien et, cursus ipsum. Suspendisse dapibus tristique ultricies. Nam tincidunt quam sit amet dictum egestas. Nunc id dapibus erat. Fusce sodales lectus quis dictum tincidunt. Cras a rhoncus urna. Nulla nunc neque, laoreet et ultrices id, malesuada ac quam.</span></p>\r\n<p><span style="font-family: Arial, Helvetica, sans; line-height: 14px; text-align: justify;">Etiam rutrum orci quis neque hendrerit, id volutpat mi pretium. Aliquam aliquet tempus lacus id sagittis. Nulla non interdum nulla. Sed auctor sem id dui molestie dictum at nec nibh. Donec at porta nunc. Ut est turpis, placerat a massa id, lobortis cursus mi. Pellentesque lobortis eros eget libero ultricies, quis facilisis justo lobortis. Nam et odio sed mauris tempus gravida. Suspendisse scelerisque massa ut eros fermentum, et venenatis tellus eleifend.</span></p>\r\n<p><span style="font-family: Arial, Helvetica, sans; line-height: 14px; text-align: justify;">Maecenas enim leo, aliquam a libero vel, tempus pretium lectus. Phasellus sagittis at nisi vel adipiscing. Phasellus risus nisi, volutpat vel luctus eget, vulputate vel mauris. Phasellus orci odio, ornare iaculis tellus ac, cursus condimentum neque. Morbi vel magna semper, vehicula augue vitae, feugiat magna. Donec varius lacus bibendum neque lacinia, eget euismod risus rhoncus. Vivamus porta placerat luctus. Mauris aliquet tempus lorem, ac dapibus massa venenatis ac. Nulla id lectus et est tempor feugiat non eget nulla. Maecenas iaculis purus tristique ipsum mattis, sed fermentum quam mollis. Duis aliquam porttitor volutpat.</span></p>\r\n<p><span style="font-family: Arial, Helvetica, sans; line-height: 14px; text-align: justify;">Curabitur quis sem fermentum, congue tortor at, fringilla leo. Nullam vel turpis odio. Sed vel enim condimentum, vulputate nunc condimentum, imperdiet neque. Etiam dapibus ipsum non erat convallis tempus. Morbi tempus varius tortor, vitae sodales velit feugiat aliquam. Nulla rutrum risus sit amet ornare venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</span></p>', '2014-02-16 09:36:50');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Salvarea datelor din tabel `config`
--

INSERT INTO `config` (`id`, `title`, `name`, `value`) VALUES
(1, 'Title', 'title', 'SimpleCMS'),
(2, 'Description', 'description', 'This is a simple CMS written in PHP');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `link` varchar(150) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Salvarea datelor din tabel `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`, `position`) VALUES
(1, 'Home', 'index.php', 1);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `access` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `email`, `password`, `access`) VALUES
(1, 'admin', 'Vasile Milea', 'milea.vasile959@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
