CREATE TABLE IF NOT EXISTS projects (
	id INT PRIMARY KEY AUTO_INCREMENT,
	git_project_name VARCHAR(200),

	icon_path VARCHAR(100),
	product_url VARCHAR(100),

	dateadded DATETIME,
	datemodified TIMESTAMP
);

CREATE TABLE IF NOT EXISTS tags (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) UNIQUE KEY
);

CREATE TABLE IF NOT EXISTS project_tag (
	project_id INT,
	tag_id INT,
	PRIMARY KEY (`project_id`, `tag_id`)
);

CREATE TABLE IF NOT EXISTS screenshots (
	id INT PRIMARY KEY AUTO_INCREMENT,
	project_id INT,
	path VARCHAR(50),
	description TEXT,
	key `fk_screenshots_articles` (`project_id`)
);
