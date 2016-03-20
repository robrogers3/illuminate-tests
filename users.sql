DROP database illuminate;
CREATE DATABASE illuminate;
USE illuminate;

CREATE TABLE `users` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT into users (name, email) VALUES ('rob', 'rob@x.com');
INSERT into users (name, email) VALUES ('bob', 'bob@x.com');
INSERT into users (name, email) VALUES ('you', 'you@x.com');
