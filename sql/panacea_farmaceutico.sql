CREATE DATABASE panacea_farmacia;
USE panacea_farmacia;

CREATE TABLE FARMACEUTICO (
    id int primary key not null auto_increment,
    matricula char(9) not null unique,
    nome VARCHAR(100) NOT NULL,
    sobrenome VARCHAR(100) NOT NULL,
    dt_cont DATE NOT NULL
);

-- 01/11/2015 - criação da tabela "usuarios" , para efeito de conexão com php para estabelecer cadastro dos usuários.

create table usuarios (
id_user int primary key auto_increment,
nome varchar(100) not null,
usuario char (9) not null unique,
senha_hash varchar(50) not null,
email varchar(100) not null unique,
data_cadastro date not null
);
