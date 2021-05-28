use exemplo;


drop table if exists users;



create table
if not exists users
(
id int
(11) not null auto_increment,
first_name varchar
(60) not null,
last_name varchar
(100) not null,
email varchar
(100) not null,
hierarchy varchar
(50) not null,
create_at timestamp default current_timestamp,
primary key
(id)
);



insert into users
    (first_name, last_name, email, hierarchy)
values
    ("João", "Gabriel de Souza", "joaog@emailfake.com", "admin");
insert into users
    (first_name, last_name, email, hierarchy)
values
    ("Manuel", "Oliveira", "manuel@emailfake.com", "admin");