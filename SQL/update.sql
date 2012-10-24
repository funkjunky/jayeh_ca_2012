CREATE TABLE IF NOT EXISTS updates (
	id INT PRIMARY KEY AUTO_INCREMENT,
	category_id INT,
	updatetype_id INT,
	foreign_id INT,
	dateadded datetime,
	key `fk_updates_categories` (`category_id`),
	key `fk_updates_updatetypes` (`updatetype_id`)
);

CREATE TABLE IF NOT EXISTS categories (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name varchar(50) UNIQUE,
	titlecolumn varchar(50)
);

CREATE TABLE IF NOT EXISTS updatetypes (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name varchar(50) UNIQUE
);

INSERT IGNORE INTO categories (name, titlecolumn) VALUES
	("article", "title");

INSERT IGNORE INTO updatetypes (name) VALUES
	("new"),
	("edit"),
	("comment");
