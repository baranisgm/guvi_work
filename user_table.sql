CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255),
    password varchar(255),
    degree varchar(255),
    gender varchar(255),
    ph_number varchar(255),
    location varchar(255),
    age varchar(255),
    PRIMARY KEY (id)
);