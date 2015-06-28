create table users (
	user_id int auto_increment,
	user_name varchar(256),
	password varchar(256),
	index(user_id)
);

create table posts (
	post_id int auto_increment,
	user_id int,
	post_date datetime,
	body varchar(1024),
	index(post_id)
);
