-- create our database for this class
CREATE DATABASE cs_extras;

-- create a new user for the Web app
CREATE USER 'webuser'@'localhost' IDENTIFIED BY 'pizza';

-- grant only the necessary privileges to our new user
GRANT SELECT, INSERT, UPDATE, DELETE ON cs_extras.* TO 'webuser'@'localhost';

-- make this our active database
USE cs_extras;

-- create a table to store our favorites
CREATE TABLE IF NOT EXISTS `Favorite` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `reason` varchar(255),

  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- start with some data in the table
INSERT INTO Favorite (name, reason) VALUES ('Inception', 'Great mind-bending flick.');
INSERT INTO Favorite (name, reason) VALUES ('Amazing Race', 'Watching people get lost all over the world.');
INSERT INTO Favorite (name, reason) VALUES ('Soundgarden', 'Reliving the glory days of grunge.');

-- create a table to store our wish list
CREATE TABLE IF NOT EXISTS `WishList` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(64) NOT NULL,
  `description` varchar(255),

  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- start with some data in the table
INSERT INTO WishList (item, description) VALUES ('Inception DVD', 'Sort of self-explanatory.');
INSERT INTO WishList (item, description) VALUES ('Router', 'Not the one used to network computers. This one cuts wood.');
INSERT INTO WishList (item, description) VALUES ('Soccer cleats', 'For ultimate frisbee. Good luck finding a size 14.');
