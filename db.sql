create database foodhub2 collate utf8_general_ci;

use foodhub2;

create table roles(
                      id int primary key auto_increment,
                      name varchar(50)
);

create table users(
                      id int primary key auto_increment,
                      name varchar(50),
                      email varchar(50),
                      password varchar(50),
                      role_id int,
                      foreign key (role_id) references roles(id)
);

create table stores(
                       id int primary key auto_increment,
                       name varchar(50),
                       image varchar(50) default 'default-store.jpg',
                       user_id int,
                       foreign key (user_id) references users(id)
);

create table foods(
                      id int primary key auto_increment,
                      name varchar(50),
                      image varchar(50) default 'default-food.jpg',
                      store_id int,
                      foreign key (store_id) references stores(id)
);

insert into roles(name) values ('Admin'), ('User'), ('Store');

insert into users(name, email, password, role_id) VALUES ('john', 'john@gmail.com', 123123, 2);
insert into users(name, email, password, role_id) VALUES ('store1', 'store1@gmail.com', 123123, 3);
insert into users(name, email, password, role_id) VALUES ('admin', 'admin@gmail.com', 123123, 1);

insert into stores(name, user_id) VALUES ('Pizza hut', 3);
insert into stores(name, user_id) VALUES ('Domino', 3);

insert into foods(name, store_id) VALUES ('xuc xich', 1);
insert into foods(name, store_id) VALUES ('khoai tay chien', 1);
insert into foods(name, store_id) VALUES ('nem chua ran', 1);
insert into foods(name, store_id) VALUES ('pizza', 2);
insert into foods(name, store_id) VALUES ('coke', 2);
insert into foods(name, store_id) VALUES ('steak', 2);
