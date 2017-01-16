-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 30, 2016 at 09:35 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cs353`
--

-- --------------------------------------------------------

--
-- Table structure for table `Achievments`
--

CREATE TABLE IF NOT EXISTS `Achievments` (
  `achievmentId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `points` int(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  PRIMARY KEY (`achievmentId`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Friend`
--

CREATE TABLE IF NOT EXISTS `Friend` (
  `userId` int(11) NOT NULL,
  `friendId` int(11) NOT NULL,
  PRIMARY KEY (`userId`,`friendId`),
  KEY `friendId` (`friendId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Friend`
--

INSERT INTO `Friend` (`userId`, `friendId`) VALUES
(4, 3),
(5, 3),
(3, 4),
(5, 4),
(6, 4),
(7, 4),
(3, 5),
(4, 5),
(6, 5),
(7, 5),
(4, 6),
(5, 6),
(4, 7),
(5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `Game`
--

CREATE TABLE IF NOT EXISTS `Game` (
  `gameId` int(11) NOT NULL AUTO_INCREMENT,
  `gamename` varchar(100) NOT NULL,
  `genre` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `averagerating` int(11) NOT NULL,
  `developer` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `picture` varchar(500) NOT NULL,
  PRIMARY KEY (`gameId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `Game`
--

INSERT INTO `Game` (`gameId`, `gamename`, `genre`, `type`, `averagerating`, `developer`, `price`, `description`, `picture`) VALUES
(1, 'DOTA', 'Adventure', 'Multiplayer', 0, 'xyz', 100, 'This is a cool game', 'https....'),
(2, 'Hello world', 'Indie   Games ', 'Singleplayer', 0, 'AmateurIndian', 20, 'The best game evaaaaa!!!!!!!', 'https/....'),
(3, 'Call of Duty', 'Action', 'Multiplayer', 0, 'Activision', 69, 'The best game of the wars of the world which was second.', 'https:\\\\...'),
(4, 'Gulce: The Hero', 'Strategy', 'Multiplayer', 0, 'CS353', 55, 'The adventures of one of the best TAs since her birth throughout her life.', 'https:\\\\...'),
(5, 'The Battle of Projects', 'Strategy', 'Multiplayer ', 0, 'CS353', 100, 'This is the epic game of the battle of the best projects of the best course ever built for computer engineers.', 'https:\\\\...'),
(6, 'Wrestle Computers', 'Sports', 'Multiplayer', 0, 'CompSci', 11, 'When computers wrestle, it is the best sight.', 'https:\\\\...'),
(7, 'Indiana Snake', 'Indie', 'Singleplayer', 0, 'Jones and Indiana', 44, 'When a snake bites the famous Indiana Jones, he becomes Indiana Snakes.', 'https:\\\\...'),
(8, 'Prince of Ankara', 'Adventure', 'Singleplayer', 0, 'Royals Co.', 44, 'The famous price of Persia married a Turkish women and became the prince of Ankara', 'https:\\\\...'),
(9, 'Need for Velocity', 'Simulation', 'Singleplayer', 0, 'Albert Einstein', 99, 'The perfect game for physicists and drivers that teacher a person to drive a car in reality but in the machine that''s why it is the best simulation racing game.', 'https:\\\\...'),
(10, 'Horse Rider', 'Sports', 'Singleplayer', 0, 'Electronic Display Sports', 50, 'The best horse riding racing game that will thrill you for life.', 'https:\\\\...'),
(11, 'Aang', 'Adventure', 'Singleplayer', 0, 'Nickolodean', 100, 'The legend of the great last airbender.', 'https:\\\\...'),
(12, 'Chang Lee', 'Action', 'Singleplayer', 0, 'Chung Law', 45, 'The stories of Chang Lee, the great kung fu master', 'https:\\\\...'),
(13, 'The Great Life of Elif', 'Casual', 'Singleplayer', 0, 'CS353', 55, 'The great life of the great CS TA who gives full points for even incomplete projects.', 'https:\\\\...'),
(14, 'Insanlar Hayvanlar', 'RPG', 'Multiplayer', 0, 'Turkce Bilmiyorum', 42, 'The wild battle of humans vs animals.', 'https:\\\\...'),
(15, 'Finding Lulli', 'Virtual Reality Game', 'Singleplayer', 0, 'Loru Gandu', 69, 'The challenge of finding the best Lulli in a virtual reality world that blow your mind away.', 'https:\\\\');

-- --------------------------------------------------------

--
-- Table structure for table `Gifts`
--

CREATE TABLE IF NOT EXISTS `Gifts` (
  `senderId` int(11) NOT NULL,
  `recieverId` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `giftId` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`giftId`),
  UNIQUE KEY `senderId` (`senderId`,`recieverId`,`gameId`),
  UNIQUE KEY `recieverId` (`recieverId`),
  UNIQUE KEY `gameId` (`gameId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Gives`
--

CREATE TABLE IF NOT EXISTS `Gives` (
  `ratingId` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `gameid` int(11) NOT NULL,
  PRIMARY KEY (`ratingId`,`userid`,`gameid`),
  KEY `userid` (`userid`),
  KEY `gameid` (`gameid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Gives`
--

INSERT INTO `Gives` (`ratingId`, `userid`, `gameid`) VALUES
(3, 4, 1),
(1, 5, 1),
(1, 5, 4),
(2, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `Has`
--

CREATE TABLE IF NOT EXISTS `Has` (
  `userId` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  PRIMARY KEY (`userId`,`gameId`),
  KEY `Has_ibfk_2` (`gameId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Has`
--

INSERT INTO `Has` (`userId`, `gameId`) VALUES
(3, 1),
(4, 1),
(5, 1),
(7, 1),
(3, 2),
(4, 2),
(3, 4),
(5, 4),
(4, 6),
(3, 14),
(5, 15);

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE IF NOT EXISTS `Login` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`username`,`password`,`userId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`userId`, `username`, `password`) VALUES
(3, 'Shiv', 'Sarjeel'),
(4, 'syedsarj', 'Sarjeel1234'),
(5, 'seven', 'qwerty'),
(6, 'dadajaani', '123'),
(7, 'GulceTA', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `Message`
--

CREATE TABLE IF NOT EXISTS `Message` (
  `messageid` int(11) NOT NULL AUTO_INCREMENT,
  `senderid` int(11) NOT NULL,
  `receiverid` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`messageid`),
  KEY `senderid` (`senderid`,`receiverid`),
  KEY `receiverid` (`receiverid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `Message`
--

INSERT INTO `Message` (`messageid`, `senderid`, `receiverid`, `content`) VALUES
(1, 5, 4, 'champak'),
(2, 3, 5, 'da'),
(3, 5, 4, 'sdf'),
(4, 4, 5, 'Best'),
(5, 5, 3, 'sdgfth'),
(6, 5, 3, 'hello shiv');

-- --------------------------------------------------------

--
-- Table structure for table `PaymentInfo`
--

CREATE TABLE IF NOT EXISTS `PaymentInfo` (
  `userId` int(11) NOT NULL,
  `cardno` int(255) NOT NULL,
  `holdername` varchar(100) NOT NULL,
  `billingaddress` varchar(500) NOT NULL,
  PRIMARY KEY (`cardno`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PaymentInfo`
--

INSERT INTO `PaymentInfo` (`userId`, `cardno`, `holdername`, `billingaddress`) VALUES
(3, 213, 'sad dsa', 'dsa'),
(7, 215, 'dsf', 'ewr'),
(4, 25482, 'Sarjeel', 'Hello'),
(5, 2147483647, 'Syed Sarjeel Yusuf', 'Merkez Kampus, Bilkent, Cankaya');

-- --------------------------------------------------------

--
-- Table structure for table `Review`
--

CREATE TABLE IF NOT EXISTS `Review` (
  `ratingId` int(11) NOT NULL AUTO_INCREMENT,
  `rating` int(5) NOT NULL,
  `content` varchar(1500) NOT NULL,
  PRIMARY KEY (`ratingId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Review`
--

INSERT INTO `Review` (`ratingId`, `rating`, `content`) VALUES
(1, 2, 'sad'),
(2, 4, 'Nice'),
(3, 7, 'adf');

-- --------------------------------------------------------

--
-- Table structure for table `Reviews`
--

CREATE TABLE IF NOT EXISTS `Reviews` (
  `ratingId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`ratingId`),
  UNIQUE KEY `userId` (`userId`),
  KEY `gameId` (`gameId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Unlock`
--

CREATE TABLE IF NOT EXISTS `Unlock` (
  `userId` int(11) NOT NULL,
  `achievmentId` int(11) NOT NULL,
  PRIMARY KEY (`userId`,`achievmentId`),
  KEY `achievmentId` (`achievmentId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country` text NOT NULL,
  `birth` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `username`, `name`, `country`, `birth`, `email`, `image`) VALUES
(3, 'Shiv', 'Shiv Tools', 'India', '2016-12-14', 'sarj93@gmail.com', 'minions-wallpaper-qsm6uhtv.jpg'),
(4, 'syedsarj', 'Sarjeel Yusuf', 'India', '1993-10-23', 'sarj93@gmail.com', 'minions-wallpaper-qsm6uhtv.jpg'),
(5, 'seven', 'Motani', 'Pakistan', '1996-06-11', 'matani@test.com', 'elephant-the-free-tattoo_108850.jpg'),
(6, 'dadajaani', 'Waqas Rehmani', 'Belarus', '0000-00-00', 'jaaniman@hotmail.com', 'minions-wallpaper-qsm6uhtv.jpg'),
(7, 'GulceTA', 'Gulce', 'Anguilla', '0000-00-00', 'dghhjfd@gmail.com', 'elephant-the-free-tattoo_108850.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Friend`
--
ALTER TABLE `Friend`
  ADD CONSTRAINT `Friend_ibfk_2` FOREIGN KEY (`friendId`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Friend_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Gifts`
--
ALTER TABLE `Gifts`
  ADD CONSTRAINT `Gifts_ibfk_3` FOREIGN KEY (`gameId`) REFERENCES `Game` (`gameId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Gives`
--
ALTER TABLE `Gives`
  ADD CONSTRAINT `Gives_ibfk_1` FOREIGN KEY (`ratingId`) REFERENCES `Review` (`ratingId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Gives_ibfk_3` FOREIGN KEY (`gameid`) REFERENCES `Game` (`gameId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Has`
--
ALTER TABLE `Has`
  ADD CONSTRAINT `Has_ibfk_3` FOREIGN KEY (`userId`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Has_ibfk_2` FOREIGN KEY (`gameId`) REFERENCES `Game` (`gameId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Login`
--
ALTER TABLE `Login`
  ADD CONSTRAINT `Login_ibfk_2` FOREIGN KEY (`username`) REFERENCES `User` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Login_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Message`
--
ALTER TABLE `Message`
  ADD CONSTRAINT `Message_ibfk_2` FOREIGN KEY (`receiverid`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Message_ibfk_1` FOREIGN KEY (`senderid`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Reviews`
--
ALTER TABLE `Reviews`
  ADD CONSTRAINT `Reviews_ibfk_2` FOREIGN KEY (`gameId`) REFERENCES `Game` (`gameId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Reviews_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Unlock`
--
ALTER TABLE `Unlock`
  ADD CONSTRAINT `Unlock_ibfk_2` FOREIGN KEY (`achievmentId`) REFERENCES `Achievments` (`achievmentId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
