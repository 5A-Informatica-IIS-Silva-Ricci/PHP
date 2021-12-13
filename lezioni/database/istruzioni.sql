CREATE DATABASE IF NOT EXISTS testSQL;
USE testSQL;


-- Create
CREATE TABLE IF NOT EXISTS Autore
(
    id      INT AUTO_INCREMENT PRIMARY KEY,
    nome    VARCHAR(30) NOT NULL,
    cognome VARCHAR(30) NOT NULL,
    nascita DATE        NOT NULL
);

CREATE TABLE IF NOT EXISTS Genere
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    nome        VARCHAR(30)  NOT NULL,
    descrizione VARCHAR(200) NOT NULL
);

CREATE TABLE IF NOT EXISTS Libro
(
    isbn         CHAR(10) PRIMARY KEY,
    titolo       VARCHAR(100) NOT NULL,
    descrizione  VARCHAR(200),
    numeroPagine INT(3),
    costo        INT(2),
    dataUscita   DATE,
    autore       INT REFERENCES Autore (id),
    genere       INT REFERENCES Genere (id)
);


-- Insert
INSERT INTO Libro (isbn, titolo, descrizione, numeroPagine, costo, dataUscita, autore, genere)
VALUES ('abcdefgh', 'Titolo', 'Descrizione', 34, 23, 12 - 2 - 2021, 0, 0),
       ('abadefgh', 'Titolo', 'Descrizione', 34, 23, 1 - 10 - 2010, 0, 1),
       ('ebcdefgh', 'Titolo', 'Descrizione', 34, 23, 12 - 1 - 2021, 1, 1),
       ('ibcdefgh', 'Titolo', 'Descrizione', 34, 23, 14 - 2 - 1994, 1, 0);


INSERT INTO Autore (nome, cognome, nascita)
VALUES ('Giulio', 'Pimenoff Verdolin', 29 - 9 - 2003),
       ('Pierlorenzo', 'Ambroso', 29 - 9 - 2003),
       ('Luca', 'Damaschetti', 29 - 9 - 2003),
       ('Francesco', 'Fragonas', 29 - 9 - 2003);


INSERT INTO Genere (nome, descrizione)
VALUES ('giallo', 'investigativo'),
       ('rosso', 'rosso'),
       ('nero', 'nero'),
       ('bianco', 'bianco');


-- Select
SELECT *
FROM Libro
WHERE dataUscita > 01 - 01 - 2020
ORDER BY dataUscita DESC;

SELECT *
FROM Autore
WHERE nome='Mario';

SELECT *
FROM Autore
WHERE nascita<01-01-1951
ORDER BY nascita;

SELECT *
FROM Libro
WHERE costo<10;


-- Update
UPDATE Genere
SET nome='verde'
WHERE id=0;

UPDATE Libro
SET numeroPagine=34
WHERE isbn='abcdef';

UPDATE Autore
SET nascita=01-12-2000
WHERE id=0;