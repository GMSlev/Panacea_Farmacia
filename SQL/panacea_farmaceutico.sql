CREATE DATABASE panacea_farmacia;
USE panacea_farmacia;

CREATE TABLE FARMACEUTICO (
    id int primary key not null auto_increment,
    matricula char(9) not null unique,
    nome VARCHAR(100) NOT NULL,
    sobrenome VARCHAR(100) NOT NULL,
    dt_cont DATE NOT NULL
);

