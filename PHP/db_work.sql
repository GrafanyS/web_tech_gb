DROP DATABASE IF EXISTS db_work;
CREATE DATABASE db_work;
USE db_work;

DROP TABLE IF EXISTS users;
-- create
CREATE TABLE users (
id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(50) COMMENT 'Имя',
age INT NOT NULL,
address VARCHAR(150) NOT NULL
);
-- insert
INSERT INTO `users` (`firstname`, `age`, `address`) VALUES
('Иван', '18', 'Москва'),
('Петр', '22', 'Иваново'),
('Анна', '35', 'Питер'),
('Юлия', '18', 'Москва'),
('Николай', '36', 'Москва');

select *
from users;