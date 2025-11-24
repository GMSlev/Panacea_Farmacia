CREATE TABLE CLIENTE (
    id_cliente int primary key auto_increment,
    nome VARCHAR(100) not null,
    cpf char(11) not null UNIQUE,
    dt_nasc date not null,
    telefone char(11) not null, 
    endereco VARCHAR(500) not null
);
