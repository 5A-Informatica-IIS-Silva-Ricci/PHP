/*
Si consideri una base di dati che rappresenta:
    le informazioni relative ai giocatori di basket (per ogni giocatore: cognome, data e luogo di nascita);
    le informazioni relative alle squadre che hanno giocato in serie A (per ogni squadra: nome e campionato);
    le informazioni relative ai ruoli dei cestisti (per ogni ruolo: numero e nome del ruolo);
    le informazioni relative alle presenze dei giocatori nei campionati e le informazioni relative ai canestri effettuati ;
    le informazioni relative alle squadre e campionati nei quali ogni giocatore ha giocato e le presenze e i canestri effettuati per quella squadra in quel campionato;
    le informazioni relative ai ruoli nei quali ciascun giocatore ha giocato nella sua carriera.
 */

CREATE DATABASE IF NOT EXISTS basket;

CREATE TABLE IF NOT EXISTS Giocatore
(
    id            INT AUTO_INCREMENT PRIMARY KEY,
    cognome       VARCHAR(30) NOT NULL,
    data_nascita  DATE        NOT NULL,
    luogo_nascita VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS Ruolo
(
    nome        VARCHAR(20) PRIMARY KEY,
    descrizione VARCHAR(200) NOT NULL
);

CREATE TABLE IF NOT EXISTS Campionato
(
    nome VARCHAR(20),
    anno INT(1),
    PRIMARY KEY (nome, anno)
);

CREATE TABLE IF NOT EXISTS Squadra
(
    nome           VARCHAR(20),
    nomeCampionato VARCHAR(20) REFERENCES Campionato (nome),
    anno           INT(1) REFERENCES Campionato (anno),
    PRIMARY KEY (nomeCampionato, anno)
);

CREATE TABLE IF NOT EXISTS appartenenza
(
    nome           VARCHAR(20) REFERENCES Squadra (nome),
    nomeCampionato VARCHAR(29) REFERENCES Squadra (nomeCampionato),
    anno           INT(1) REFERENCES Squadra (anno),
    id             INT REFERENCES Giocatore (id),
    presenze       INT          DEFAULT 0,
    numero         INT NOT NULL,
    canestri       INT NOT NULL DEFAULT 0,
    PRIMARY KEY (nome, nomeCampionato, anno, id)
);

CREATE TABLE IF NOT EXISTS ruoli
(
    nome VARCHAR(20) REFERENCES Ruolo (nome),
    id   INT REFERENCES Giocatore (id),
    da   DATE NOT NULL,
    a    DATE,
    PRIMARY KEY (nome, id, da)
);