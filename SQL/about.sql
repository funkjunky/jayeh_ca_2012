create table if not exists aboutdatas (
	id int primary key AUTO_INCREMENT,
	subject varchar(50),
	description varchar(200)
);

create table if not exists externalprofiles (
	id int primary key AUTO_INCREMENT,
	label varchar(50),
	link varchar(400)
);

create table if not exists selfimprovements (
	improv_id int primary key AUTO_INCREMENT,
	subject varchar(50) 
);

create table if not exists selfimprovementstats (
	stat_id int primary key AUTO_INCREMENT,
	improv_id int,
	value int,
	description varchar(200),
	datedone timestamp,
	key `fk_selfimprovementstats_selfimprovements` (`improv_id`)
);

