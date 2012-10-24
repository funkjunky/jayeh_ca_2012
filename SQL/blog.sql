create table if not exists articles (
	id int primary key AUTO_INCREMENT,
	title varchar(100),
	body text,
	dateadded datetime,
	datemodified timestamp
);

create table if not exists tags (
	id int primary key AUTO_INCREMENT,
	name varchar(50) unique key
);

create table if not exists article_tag (
	article_id int,
	tag_id int,
	primary key (`article_id`, `tag_id`)
);

create table if not exists comments (
	id int primary key AUTO_INCREMENT,
	article_id int,
	author varchar(50),
	body text,
	dateadded datetime,
	key `fk_comments_articles` (`article_id`)
);
