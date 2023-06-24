
CREATE DATABASE mydb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
DROP DATABASE mydb;

DROP TABLE  boletim;
DROP TABLE disciplina;
DROP TABLE  professor;
DROP TABLE  aluno;
DROP TABLE admin;

CREATE TABLE aluno(
    id int PRIMARY KEY AUTO_INCREMENT, 
    nome VARCHAR(255),
    email VARCHAR(255),
    senha VARCHAR(255)
);


CREATE TABLE boletim(
    id int PRIMARY KEY AUTO_INCREMENT,
    id_boletim int,
    FOREIGN KEY (id_boletim) REFERENCES aluno(id),
    materia VARCHAR(255),
    provaA1 float,
    provaA2 float,
    mediaPacial float,
    recuperacao float,
    notaFinal float,
    situacao VARCHAR(255)    
);

CREATE TABLE professor(
    id int PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255),
    email VARCHAR(255),
    senha VARCHAR(255),
    disciplina VARCHAR(255),
    turma VARCHAR(255)
);

CREATE TABLE disciplina(
    id int PRIMARY KEY AUTO_INCREMENT,
    id_disciplina int,
    FOREIGN KEY (id_disciplina) REFERENCES professor(id),
    nome VARCHAR(255)
);

CREATE TABLE admin(
    id int PRIMARY KEY AUTO_INCREMENT, 
    nome VARCHAR(255),
    senha VARCHAR(255)
);

INSERT INTO admin(nome, senha) values('root', '123@456');
INSERT INTO disciplina(nome) values('Programação Orientado à Objetos');
INSERT INTO aluno(nome, email, senha) values('Davi Sales Barcelos', 'manodada26@gmail.com', '123');
