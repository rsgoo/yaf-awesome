create table example2(
    id int,
    name varchar(20),
    sex boolean,
    primary key(id,name)
);

create database if not exist swartz default charset utf8mb4;

create table index2(
    id int UNIQUE,
    name varchar(20),
    sex boolean,
    UNIQUE index index2_id(id asc)
);
