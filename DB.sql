CREATE DATABASE IF NOT EXISTS TDW;

CREATE TABLE IF NOT EXISTS FORMATIONS(
    Id INT UNIQUE NOT NULL AUTO_INCREMENT ,
    Categorie VARCHAR(255) NOT NULL,
    Ecole VARCHAR(255) NOT NULL,
    Domaine VARCHAR(255),
    Wilaya VARCHAR(50) NOT NULL,
    Commune VARCHAR(50) NOT NULL,
    Adresse VARCHAR(255) NOT NULL,
    Telephone VARCHAR(50) NOT NULL,
    Fax VARCHAR(50) NOT NULL,
    PRIMARY KEY (Id) 
);

INSERT INTO FORMATIONS (Categorie, Ecole, Domaine, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("universitaire", "Ecole Superieure de Commerce", "Commerce et finance", "Oran", "Es-Senia",
         "50 Rue des martyrs", "031 56 25 70", "031 56 30 50");

INSERT INTO FORMATIONS (Categorie, Ecole, Domaine, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("universitaire","Ecole Superieure d’Electronique", "Electronique", "Boumerdes.", "Boumerdes-centre",
         "3500 Rue de la liberté", "035 56 25 70", "035 56 30 50");

INSERT INTO FORMATIONS (Categorie, Ecole, Domaine, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("universitaire","Ecole Superieure d’Informatique", "Informatique", "Alger", "Oued Smar",
         "68 rue de la gare", "023 56 25 70", "023 56 30 50");

INSERT INTO FORMATIONS (Categorie, Ecole, Domaine, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("universitaire","Ecole Superieure d’Agronomie", "Agronomie", "El-Oued", "Djamaa",
         "30 Rue des dunes", "026 56 25 70", "026 56 30 50");

INSERT INTO FORMATIONS (Categorie, Ecole, Domaine, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("universitaire","Ecole Superieure de Vétérinaire", "Veternaire", "Tizi-ouzou", "Freha",
         "10 Rue des oliviers", "025 56 25 70", "025 56 30 50");

INSERT INTO FORMATIONS (Categorie, Ecole, Domaine, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("universitaire","Ecole Superieure de Commerce", "Commerce et finance", "Bejaia", "Akbou",
         "20 Rue de la montagne", "032 56 25 70", "032 56 30 50");



INSERT INTO FORMATIONS (Categorie, Ecole, Domaine, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("professionnelle", "Institue d’hotellerie et restauration", "Hotellerie", "Tizi-Ouzou", "Es-Senia",
         "0 Rue des martyrs", "021 56 25 70", "021 56 30 50 / 56 51 54");

INSERT INTO FORMATIONS (Categorie, Ecole, Domaine, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("professionnelle", "Institue des metiers de plomberie et chauffage", "Plomberie", "Satif", "El-Eulma",
         "50 Rue de la liberté", "021 56 25 70", "021 56 30 50 / 56 51 54");

INSERT INTO FORMATIONS (Categorie, Ecole, Domaine, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("professionnelle", "Institue de mecanique", "Macanique", "Blida", "Soumaa",
         "50 Rue de la gare", "021 56 25 70", "021 56 30 50 / 56 51 54");

INSERT INTO FORMATIONS (Categorie, Ecole, Domaine, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("professionnelle", "Institue d’hygiene et sécurite", "Commerce et finance", "Alger", "Rouiba",
         "50 Rue des dunes", "021 56 25 70", "021 56 30 50 / 56 51 54");

INSERT INTO FORMATIONS (Categorie, Ecole, Domaine, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("professionnelle", "Institue des metiers du batiments", "Batiment", "Bechar", "Saoura",
         "50 Rue des oliviers", "021 56 25 70", "021 56 30 50 / 56 51 54");




INSERT INTO FORMATIONS (Categorie, Ecole, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("secondaire", "Ecole El-Falah","Mostaganem", "Mansoura",
         "50 Rue de la liberte", "021 56 25 70", "021 56 30 50 / 56 51 54");

INSERT INTO FORMATIONS (Categorie, Ecole, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("secondaire", "Ecole El-Nadjah","Constantine", "Ibn-Badis",
         "50 Rue des martyrs", "021 56 25 70", "021 56 30 50 / 56 51 54");

INSERT INTO FORMATIONS (Categorie, Ecole, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("secondaire", "Ecole Les glycines","Alger", "Cheraga",
         "50 Rue de la gare", "021 56 25 70", "021 56 30 50 / 56 51 54");

INSERT INTO FORMATIONS (Categorie, Ecole, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("secondaire", "Ecole Madrassati","Alger", "Hussein-Dey",
         "50 Rue des oliviers", "021 56 25 70", "021 56 30 50 / 56 51 54");





INSERT INTO FORMATIONS (Categorie, Ecole, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("moyenne", "Ecole Madrassati","Alger", "Hussein-Dey",
         "50 Rue de la gare", "021 56 25 70", "021 56 30 50 / 56 51 54");

INSERT INTO FORMATIONS (Categorie, Ecole, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("moyenne", "Ecole El-Nadjah","Constantine", "Ibn-Badis",
         "50 Rue des oliviers", "021 56 25 70", "021 56 30 50 / 56 51 54");

INSERT INTO FORMATIONS (Categorie, Ecole, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("moyenne", "Ecole La reussite","Bechar", "Beni Abbes",
         "50 Rue des dunes", "021 56 25 70", "021 56 30 50 / 56 51 54");





INSERT INTO FORMATIONS (Categorie, Ecole, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("primaire", "Ecole El-Nadjihine","Bouira", "Lakhdaria",
         "50 Rue des dunes", "021 56 25 70", "021 56 30 50 / 56 51 54");

INSERT INTO FORMATIONS (Categorie, Ecole, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("primaire", "Ecole Madrassati","Alger", "Hussein-Dey",
         "50 Rue des oliviers", "021 56 25 70", "021 56 30 50 / 56 51 54");

INSERT INTO FORMATIONS (Categorie, Ecole, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("primaire", "Ecole El-Nadjah","Constantine", "Ibn-Badis",
         "50 Rue de la liberte", "021 56 25 70", "021 56 30 50 / 56 51 54");

INSERT INTO FORMATIONS (Categorie, Ecole, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("primaire", "Ecole La reussite","Bechar", "Beni Abbes",
         "50 Rue des dunes", "021 56 25 70", "021 56 30 50 / 56 51 54");



INSERT INTO FORMATIONS (Categorie, Ecole, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("maternelle", "Ecole El-Nadjah","Constantine", "Ibn-Badis",
         "50 Rue des oliviers", "021 56 25 70", "021 56 30 50 / 56 51 54");

INSERT INTO FORMATIONS (Categorie, Ecole, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("maternelle", "Ecole El-Oumma","Tipaza", "Cherchell",
         "50 Rue des dunes", "021 56 25 70", "021 56 30 50 / 56 51 54");

INSERT INTO FORMATIONS (Categorie, Ecole, Wilaya, Commune, Adresse, Telephone, Fax)
VALUES ("maternelle", "Ecole Les glycines","Alger", "Cheraga",
         "50 Rue de la gare", "021 56 25 70", "021 56 30 50 / 56 51 54");