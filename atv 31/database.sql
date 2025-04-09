CREATE DATABASE IF NOT EXISTS login_dbd;
USE login_dbd;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR (50) NOT NULL UNIQUE,
    password VARCHAR (255) NOT NULL
);

INSERT INTO users (username,password) Values 
('bruna',123),
('daniele',123),
('julie',123);
