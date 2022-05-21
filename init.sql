-- Table user
CREATE TABLE user (
	id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	firstname VARCHAR(255) NOT NULL,
	email VARCHAR(100) NOT NULL,
	sex CHAR(1),
	password VARCHAR(100) NOT NULL,
	birthday DATE,
	signday DATETIME NOT NULL,
	status TINYINT UNSIGNED NOT NULL
) ENGINE=INNODB;

-- insert admin account
INSERT INTO Animal 
VALUES (1, 'Adminstrator', 'Adminstrator', 'starsrepertory@gmail.com', 'M', '$2y$20$6TPAgUSXHaOPa0qhqlsAnuIueInG7domvxZALaIS1.kPdPwgtCsZi', "2006-02-22", "2022-05-21 10:49:00", "3");

