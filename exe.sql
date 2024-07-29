CREATE DATABASE exeForm;
USE exeForm;
CREATE TABLE usersdata (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    password INT(50) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    nationality VARCHAR(50) NOT NULL,
    mobile VARCHAR(10) NOT NULL,
    email VARCHAR(100) NOT NULL,
    address TEXT NOT NULL,
    photo VARCHAR(100) NOT NULL
);