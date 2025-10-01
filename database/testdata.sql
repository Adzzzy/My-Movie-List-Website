-- Test data for the mymovielist database

USE `mymovielist`;

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'Adzy', '150037@cardijn.catholic.edu.au', '$2y$10$HQsEOB2YLCCSmKG921dDP.to6XVDKLU/cH28btxBg3PIekf.tXs0K'),
(2, 'Bill', '150018@cardijn.catholic.edu.au', '$2y$10$y1/GbA.IQuFo6pU2NVzFteoiJ3Gi8ReG6yOV6wOsjoYHyuBti.Lcq');

INSERT INTO `movielist` (`idList`, `nameList`, `authorList`, `dateList`, `moviesList`) VALUES
(1, 'Fun Summer Flicks', 'Adzy', '2019-08-21', 'Yes Man, Die Hard, Jaws, Who Framed Roger Rabbit, The Dictator'),
(2, 'Action Movies', 'Adzy', '2019-08-21', 'Gladiator, The Running Man, The Terminator, Lethal Weapon, Commando'),
(3, 'Scary Movies', 'Adzy', '2019-08-21', 'Scream, Alien, Friday the 13th, Halloween, Texas Chainsaw Massacre'),
(4, 'Comedy Movies', 'Bill', '2019-08-21', 'The Mask, Rush Hour, Good Burger, The Ratings Game, Bird Cage'),
(5, 'Animated Films', 'Bill', '2019-08-21', 'Ice Age, Shrek, Up, Happy Feet, Frozen, Mulan, Despicable Me'),
(6, 'Star Wars Prequels', 'Bill', '2019-08-21', 'The Phantom Menace, Attack of the Clones, Revenge of the Sith'),
(7, 'Star Wars Originals', 'Bill', '2019-08-21', 'Rogue One, A New Hope, Empire Strikes Back, Return of the Jedi'),
(8, 'Star Wars New', 'Bill', '2019-08-21', 'The Force Awakens, The Last Jedi, The Rise of Skywalker');

-- Set AUTO_INCREMENT to start from next available index instead of 1

ALTER TABLE `users` AUTO_INCREMENT=3;

ALTER TABLE `movielist` AUTO_INCREMENT=9;

