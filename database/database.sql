CREATE DATABASE master;
USE master;

 CREATE TABLE users(
     id         int(255) auto_increment not null,
     name       varchar(100) not null,
     password   varchar(255) not null,
     rol        varchar(20),
     CONSTRAINT pk_users PRIMARY KEY (id),
     CONSTRAINT uq_name UNIQUE (name)

 )ENGINE=InnoDb;

 INSERT INTO users VALUES(NULL,'Admin', '1010','admin');