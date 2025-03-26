CREATE DATABASE IF NOT EXISTS test;
 use test;
CREATE TABLE IF NOT EXISTS users (
 id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 firstname VARCHAR(30) NOT NULL,
 lastname VARCHAR(30) NOT NULL,
 email VARCHAR(50) NOT NULL,
 age INT(3),
 location VARCHAR(50),
`Date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP);


