CREATE TABLE abonne (
  idAbonne INT PRIMARY KEY,
  nom VARCHAR(20) NOT NULL,
  prenom VARCHAR(20) NOT NULL,
  adresse VARCHAR(45) NOT NULL,
  telephone BIGINT(8) NOT NULL
);

CREATE TABLE livre (
  idLivre INT PRIMARY KEY,
  titre VARCHAR(100) NOT NULL,
  auteur VARCHAR(100) NOT NULL,
  editeur VARCHAR(100) NOT NULL,
  Livercol VARCHAR(45) NOT NULL
);

CREATE TABLE emprunt (
  idEmprunt INT PRIMARY KEY,
  idAbonne INT,
  idLivre INT,
  DateEmprunt DATE NOT NULL,
  DateRetour DATE,
  FOREIGN KEY (idAbonne) REFERENCES abonne(idAbonne),
  FOREIGN KEY (idLivre) REFERENCES livre(idLivre)
);