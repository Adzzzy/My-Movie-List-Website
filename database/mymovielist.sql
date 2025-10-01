--
-- Database: `mymovielist`
--
CREATE DATABASE IF NOT EXISTS `mymovielist`;
USE `mymovielist`;

-- --------------------------------------------------------

--
-- Create table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int(11) NOT NULL UNIQUE AUTO_INCREMENT,
  `uidUsers` varchar(255) NOT NULL UNIQUE,
  `emailUsers` varchar(255) NOT NULL,
  `pwdUsers` varchar(255) NOT NULL,
  PRIMARY KEY (`idUsers`)
);

--
-- Create table `movielist`
--

CREATE TABLE IF NOT EXISTS `movielist` (
  `idList` int(11) NOT NULL UNIQUE AUTO_INCREMENT,
  `nameList` varchar(255) NOT NULL,
  `authorList` varchar(255) NOT NULL,
  `dateList` date NOT NULL,
  `moviesList` text NOT NULL,
  PRIMARY KEY (`idList`),
  FOREIGN KEY (`authorList`) REFERENCES `users` (`uidUsers`)
);