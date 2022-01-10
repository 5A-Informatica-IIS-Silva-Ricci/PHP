CREATE DATABASE IF NOT EXISTS Gestionale;

CREATE TABLE Cliente
(
    cf      CHAR(16) PRIMARY KEY,
    nome    VARCHAR(30) NOT NULL,
    cognome VARCHAR(30) NOT NULL,
    nascita DATE        NOT NULL
);

CREATE TABLE Dipendente
(
    cf           CHAR(16) PRIMARY KEY,
    nome         VARCHAR(30) NOT NULL,
    cognome      VARCHAR(30) NOT NULL,
    nascita      DATE        NOT NULL,
    costo_orario INT,
    mansione     VARCHAR(30) NOT NULL
);

CREATE TABLE Materiale
(
    id              INT AUTO_INCREMENT PRIMARY KEY,
    fornitore       VARCHAR(30),
    tipo            VARCHAR(20),
    deposito        INT NOT NULL DEFAULT 0,
    prezzo_acquisto INT NOT NULL,
    prezzo_proposto INT NOT NULL
);

CREATE TABLE Intervento
(
    id          INT AUTO_INCREMENT,
    cf          CHAR(16) REFERENCES Cliente (cf),
    data_inizio DATE NOT NULL DEFAULT GETDATE(),
    data_fine   DATE,
    PRIMARY KEY (id, cf)
);

CREATE TABLE Materiali
(
    idM      INT REFERENCES Materiale (id),
    idI      INT REFERENCES Intervento (id),
    quantità INT NOT NULL DEFAULT 0,
    PRIMARY KEY (idM, idI)
);

CREATE TABLE Impieghi
(
    id         INT REFERENCES Intervento (id),
    cf         CHAR(16) REFERENCES Dipendente (cf),
    ore        INT NOT NULL DEFAULT 0,
    rapportino TEXT,
    task       VARCHAR(30),
    PRIMARY KEY (id, cf)
);
