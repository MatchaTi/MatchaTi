CREATE DATABASE commit;

show databases;

use commit;

create table users (
	id int auto_increment primary key,
    username varchar(50) not null,
    email varchar(100) not null,
    password varchar(255) not null,
    created_at timestamp default current_timestamp
);

desc users;

select * from users;

create table posts (
	id int auto_increment primary key,
    user_id int,
    content text,
    created_at timestamp default current_timestamp,
    photo varchar(255),
    foreign key (user_id) references users(id)
);

desc posts;

select * from posts;

SELECT posts.*, users.username FROM posts JOIN users ON posts.user_id = users.id WHERE posts.id = 2 ORDER BY created_at DESC;

delete from posts where id = 5;