CREATE SCHEMA IF NOT EXISTS `kohana_blog`;
 
use `kohana_blog`;
  
CREATE TABLE IF NOT EXISTS `kohana_blog`.`articles` (
  	`id` int unsigned NOT NULL AUTO_INCREMENT,
  	`title` varchar(200) DEFAULT NULL,
  	`content` text,
  	 PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `article_id` int(10) NOT NULL,
	   `comment` varchar(45) NOT NULL,
		  `time` datetime NOT NULL,
		    `name` varchar(45) NOT NULL,
			   `email` varchar(45) NOT NULL,
				  PRIMARY KEY (`id`),
				    KEY `fk_comments_article` (`article_id`)
					 );
