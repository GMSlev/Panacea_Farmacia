CREATE DATABASE panacea_farmacia;
USE panacea_farmacia;

CREATE TABLE FARMACEUTICO (
    id int primary key not null auto_increment,
    matricula char(9) not null unique,
    nome VARCHAR(100) NOT NULL,
    sobrenome VARCHAR(100) NOT NULL,
    dt_cont DATE NOT NULL
);

CREATE USUARIOS (
    id_user int primary key auto_increment,
    nome varchar(100) not null,
    usuario char (9) not null unique,
    senha_hash varchar(50) not null,
    email varchar(100) not null unique,
    data_cadastro date not null
);

-- 23/11 
CREATE TABLE CLIENTE (
    id_cliente int primary key auto_increment,
    nome VARCHAR(100) not null,
    cpf char(11) not null UNIQUE,
    dt_nasc date not null,
    telefone char(11) not null, 
    endereco VARCHAR(500) not null
);

CREATE TABLE REMEDIO (
  id_rem int primary key auto_increment,
  nome varchar(100) not null,
  classe varchar(100) not null,
  tipo varchar(100) not null,
  fx_etaria varchar(100) not null,
  preco decimal(5,2) not null,
  concentracao varchar(100) not null,
  estoque int not null
  ); -- INSERTS DESTA TABELAS ESTÃO DESCRITOS NO ARQUIVO "queries.sql".



-- futura tabela para registro de retiradas
/*
Create Table RETIRADA (
    id_retirada INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    id_rem INT NOT NULL,
    id_user INT NOT NULL,
    quantidade INT NOT NULL,
    data_retirada DATETIME,
    receita_numero VARCHAR(50),
    observacoes TEXT,
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente) ON DELETE RESTRICT,
    FOREIGN KEY (id_rem) REFERENCES remedio(id_rem) ON DELETE RESTRICT,
    FOREIGN KEY (id_user) REFERENCES usuarios(id_user) ON DELETE RESTRICT

);

*/

