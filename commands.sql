DROP TABLE  boletim;
DROP TABLE  aluno;
DROP TABLE  professor;

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
    senha VARCHAR(255)
);