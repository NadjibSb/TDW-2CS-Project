CREATE DATABASE IF NOT EXISTS TDW;

USE TDW;

CREATE TABLE IF NOT EXISTS User(
    id INT UNIQUE NOT NULL UNIQUE AUTO_INCREMENT ,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO User(username,password,type) VALUES ("admin","admin","super-admin");
INSERT INTO User(username,password,type) VALUES ("root","root","admin");
INSERT INTO User(username,password,type) VALUES ("user","user","user");

CREATE TABLE IF NOT EXISTS Categorie(
    id INT UNIQUE NOT NULL UNIQUE AUTO_INCREMENT ,
    nom VARCHAR(255) NOT NULL UNIQUE,
    PRIMARY KEY (id)
);

INSERT INTO Categorie(nom) VALUES ("universitaire");
INSERT INTO Categorie(nom) VALUES ("professionnelle");
INSERT INTO Categorie(nom) VALUES ("secondaire");
INSERT INTO Categorie(nom) VALUES ("moyenne");
INSERT INTO Categorie(nom) VALUES ("primaire");
INSERT INTO Categorie(nom) VALUES ("maternelle");


CREATE TABLE IF NOT EXISTS Ecole(
    id INT UNIQUE NOT NULL UNIQUE AUTO_INCREMENT ,
    nom VARCHAR(255) NOT NULL,
    categorieId INT NOT NULL,
    domaine VARCHAR(255),
    wilaya VARCHAR(50) NOT NULL,
    commune VARCHAR(50) NOT NULL,
    adresse VARCHAR(255) NOT NULL,
    telephone VARCHAR(50) NOT NULL,
    fax VARCHAR(50) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (CategorieId) REFERENCES Categorie(id)
);



INSERT INTO Ecole( nom, categorieId, domaine, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole Superieure de Commerce",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'universitaire' LIMIT 1),
            "Commerce et finance",
            "Oran", "Es-Senia",
            "50 Rue des martyrs",
            "031 56 25 70",
            "031 56 30 50");
INSERT INTO Ecole( nom, categorieId, domaine, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole Superieure d’Informatique",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'universitaire' LIMIT 1),
            "Informatique",
            "Alger", "Oued Smar",
            "68 rue de la gare",
            "031 56 25 70",
            "031 56 30 50");
INSERT INTO Ecole( nom, categorieId, domaine, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole Superieure d’Agronomie",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'universitaire' LIMIT 1),
            "Agronomie",
            "El-Oued", "Djamaa",
            "68 rue de la martyrs",
            "031 56 25 70",
            "031 56 30 50");
INSERT INTO Ecole( nom, categorieId, domaine, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole Superieure Vetérinaire",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'universitaire' LIMIT 1),
            "Veternaire",
            "Tizi-ouzou", "Freha",
            "68 rue de la dunes",
            "031 56 25 70",
            "031 56 30 50");



INSERT INTO Ecole( nom, categorieId, domaine, wilaya, commune, adresse, telephone, fax)
VALUES (    "Institue d’hotellerie et restauration",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'professionnelle' LIMIT 1),
            "Hotellerie",
            "Tizi-ouzou", "Freha",
            "68 rue de la martyrs",
            "031 56 25 70",
            "031 56 30 50");
INSERT INTO Ecole( nom, categorieId, domaine, wilaya, commune, adresse, telephone, fax)
VALUES (    "Institue de mecanique",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'professionnelle' LIMIT 1),
            "Macanique",
            "Blida", "Soumaa",
            "68 rue de la gare",
            "031 56 25 70",
            "031 56 30 50");
INSERT INTO Ecole( nom, categorieId, domaine, wilaya, commune, adresse, telephone, fax)
VALUES (    "Institue d’hygiene et securite",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'professionnelle' LIMIT 1),
            "Commerce et finance",
            "Alger", "Freha",
            "68 rue de la martyrs",
            "031 56 25 70",
            "031 56 30 50");
INSERT INTO Ecole( nom, categorieId, domaine, wilaya, commune, adresse, telephone, fax)
VALUES (    "Institue des metiers de plomberie et chauffage",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'professionnelle' LIMIT 1),
            "Plomberie",
            "Satif", "Eulma",
            "68 rue de la dunes",
            "031 56 25 70",
            "031 56 30 50");




INSERT INTO Ecole( nom, categorieId, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole El-Falah",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'secondaire' LIMIT 1),
            "Mostaganem", "Mostaganem",
            "68 rue de la dunes",
            "031 56 25 70",
            "021 56 30 50 / 56 51 54");
INSERT INTO Ecole( nom, categorieId, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole El-Nadjah",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'secondaire' LIMIT 1),
            "Constantine", "Mostaganem",
            "68 rue de la gare",
            "031 56 25 70",
            "021 56 30 50 / 56 51 54");
INSERT INTO Ecole( nom, categorieId, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole Les glycines",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'secondaire' LIMIT 1),
            "Alger", "Cheraga",
            "68 rue de la dunes",
            "031 56 25 70",
            "021 56 30 50 / 56 51 54");
INSERT INTO Ecole( nom, categorieId, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole Madrassati",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'secondaire' LIMIT 1),
            "Alger", "Hussein",
            "68 rue de la oliviers",
            "031 56 25 70",
            "021 56 30 50 / 56 51 54");




INSERT INTO Ecole( nom, categorieId, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole Madrassati",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'moyenne' LIMIT 1),
            "Alger", "Hussein",
            "68 rue de la oliviers",
            "031 56 25 70",
            "021 56 30 50 / 56 51 54");
INSERT INTO Ecole( nom, categorieId, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole El-Nadjah",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'moyenne' LIMIT 1),
            "Constantine", "Badis",
            "68 rue de la gare",
            "031 56 25 70",
            "021 56 30 50 / 56 51 54");
INSERT INTO Ecole( nom, categorieId, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole La reussite",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'moyenne' LIMIT 1),
            "Bechar", "Abbes",
            "68 rue de la oliviers",
            "031 56 25 70",
            "021 56 30 50 / 56 51 54");
INSERT INTO Ecole( nom, categorieId, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole Madrassati",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'moyenne' LIMIT 1),
            "Constantine", "Hussein",
            "68 rue de la dunes",
            "031 56 25 70",
            "021 56 30 50 / 56 51 54");


INSERT INTO Ecole( nom, categorieId, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole El-Nadjihine",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'primaire' LIMIT 1),
            "Bouira", "Lakhdaria",
            "68 rue de la oliviers",
            "031 56 25 70",
            "021 56 30 50 / 56 51 54");
INSERT INTO Ecole( nom, categorieId, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole El-Nadjah",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'primaire' LIMIT 1),
            "Constantine", "Badis",
            "68 rue de la dunes",
            "031 56 25 70",
            "021 56 30 50 / 56 51 54");
INSERT INTO Ecole( nom, categorieId, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole La reussite",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'primaire' LIMIT 1),
            "Bechar", "Abbes",
            "68 rue de la oliviers",
            "031 56 25 70",
            "021 56 30 50 / 56 51 54");
INSERT INTO Ecole( nom, categorieId, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole Les glycines",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'primaire' LIMIT 1),
            "Alger", "Cheraga",
            "68 rue de la dunes",
            "031 56 25 70",
            "021 56 30 50 / 56 51 54");



INSERT INTO Ecole( nom, categorieId, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole El-Nadjihine",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'maternelle' LIMIT 1),
            "Bouira", "Lakhdaria",
            "68 rue de la oliviers",
            "031 56 25 70",
            "021 56 30 50 / 56 51 54");
INSERT INTO Ecole( nom, categorieId, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole El-Nadjah",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'maternelle' LIMIT 1),
            "Constantine", "Badis",
            "68 rue de la dunes",
            "031 56 25 70",
            "021 56 30 50 / 56 51 54");
INSERT INTO Ecole( nom, categorieId, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole El-Oumma",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'maternelle' LIMIT 1),
            "Tipaza", "Cherchell",
            "68 rue de la oliviers",
            "031 56 25 70",
            "021 56 30 50 / 56 51 54");
INSERT INTO Ecole( nom, categorieId, wilaya, commune, adresse, telephone, fax)
VALUES (    "Ecole Madrassati",
            (SELECT id FROM Categorie WHERE Categorie.nom = 'maternelle' LIMIT 1),
            "Constantine", "Hussein",
            "68 rue de la dunes",
            "031 56 25 70",
            "021 56 30 50 / 56 51 54");


CREATE TABLE IF NOT EXISTS Commentaire(
    id INT UNIQUE NOT NULL UNIQUE AUTO_INCREMENT ,
    contenu VARCHAR(255) NOT NULL,
    ecoleId INT NOT NULL,
    userId INT NOT NULL,
    date DATETIME,
    PRIMARY KEY (id),
    FOREIGN KEY (ecoleId) REFERENCES Ecole(id),
    FOREIGN KEY (userId) REFERENCES User(id)
);

INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("ce ci est mon 1er commentaire", 1,1,NOW());
INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("Hello word", 2,2,NOW());
INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("Je suis un simple utilisateur et ce ci est mon 1er commentaire", 3,3,NOW());
INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("ce ci est mon 1er commentaire", 4,1,NOW());
INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("Hello word", 16,2,NOW());
INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("Je suis un simple utilisateur et ce ci est mon 1er commentaire", 12,3,NOW());
INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("ce ci est mon 1er commentaire", 8,1,NOW());
INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("Hello word", 20,2,NOW());
INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("Je suis un simple utilisateur et ce ci est mon 1er commentaire", 17,3,NOW());
INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("ce ci est mon 1er commentaire", 21,1,NOW());
INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("Hello word", 1,2,NOW());
INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("Je suis un simple utilisateur et ce ci est mon 1er commentaire", 2,3,NOW());
INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("ce ci est mon 1er commentaire", 16,1,NOW());
INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("Hello word", 3,2,NOW());
INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("Je suis un simple utilisateur et ce ci est mon 1er commentaire", 12,3,NOW());
INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("ce ci est mon 1er commentaire", 4,1,NOW());
INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("Hello word", 1,2,NOW());
INSERT INTO Commentaire(contenu,ecoleId,userId,date) VALUES ("Je suis un simple utilisateur et ce ci est mon 1er commentaire", 8,3,NOW());


CREATE TABLE IF NOT EXISTS TypeFormation(
    id INT UNIQUE NOT NULL UNIQUE AUTO_INCREMENT ,
    nom VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO TypeFormation(nom) VALUES ("Burautique");
INSERT INTO TypeFormation(nom) VALUES ("Langues");
INSERT INTO TypeFormation(nom) VALUES ("Gestion");
INSERT INTO TypeFormation(nom) VALUES ("Design");


CREATE TABLE IF NOT EXISTS Formation(
    id INT UNIQUE NOT NULL UNIQUE AUTO_INCREMENT ,
    nom VARCHAR(255) NOT NULL,
    typeId INT NOT NULL,
    ecoleId INT NOT NULL,
    volumeH INT NOT NULL,
    prix INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (ecoleId) REFERENCES Ecole(id),
    FOREIGN KEY (typeId) REFERENCES TypeFormation(id)
);


INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Anglais",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            1,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Photoshop",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Design' LIMIT 1),
            2,
            5,
            1500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            4,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Burautique' LIMIT 1),
            5,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            8,
            5,
            1500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Anglais",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            9,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            12,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            13,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Word",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Burautique' LIMIT 1),
            1,
            5,
            1500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            2,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Photoshop",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Design' LIMIT 1),
            3,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Francais",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            4,
            5,
            1500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Photoshop",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Design' LIMIT 1),
            5,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Francais",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            6,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            7,
            5,
            1500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            8,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Burautique' LIMIT 1),
            9,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Photoshop",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Design' LIMIT 1),
            10,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Francais",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            11,
            5,
            1500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            12,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Burautique' LIMIT 1),
            13,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Anglais",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            14,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            15,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Burautique' LIMIT 1),
            16,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Anglais",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            17,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Photoshop",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Design' LIMIT 1),
            18,
            5,
            1500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            19,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Burautique' LIMIT 1),
            20,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            21,
            5,
            1500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Anglais",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            22,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            23,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            24,
            5,
            3000);

INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Anglais",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            1,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Photoshop",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Design' LIMIT 1),
            2,
            5,
            1500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            4,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Burautique' LIMIT 1),
            5,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            8,
            5,
            1500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Anglais",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            9,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            12,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            13,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Word",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Burautique' LIMIT 1),
            1,
            5,
            1500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            2,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Photoshop",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Design' LIMIT 1),
            3,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Francais",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            4,
            5,
            1500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Photoshop",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Design' LIMIT 1),
            5,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Francais",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            6,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            7,
            5,
            1500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            8,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Burautique' LIMIT 1),
            9,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Photoshop",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Design' LIMIT 1),
            10,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Francais",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            11,
            5,
            1500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            12,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Burautique' LIMIT 1),
            13,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Anglais",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            14,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            15,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Burautique' LIMIT 1),
            16,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Anglais",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            17,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Photoshop",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Design' LIMIT 1),
            18,
            5,
            1500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            19,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Burautique' LIMIT 1),
            20,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            21,
            5,
            1500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Anglais",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            22,
            5,
            3000);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Gestion' LIMIT 1),
            23,
            5,
            2500);
INSERT INTO Formation(nom,typeId,ecoleId,volumeH,prix) 
VALUES (    "Excel",
            (SELECT id FROM TypeFormation WHERE TypeFormation.nom = 'Langues' LIMIT 1),
            24,
            5,
            3000);


