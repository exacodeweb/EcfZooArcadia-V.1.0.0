CREATE TABLE Avis (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(100) NOT NULL,
  message TEXT NOT NULL,
  dateSoumission DATETIME DEFAULT CURRENT_TIMESTAMP,
  statut ENUM('en_attente', 'approuve') DEFAULT 'en_attente'
);


CREATE TABLE avis (
    id INT PRIMARY KEY AUTO_INCREMENT,
    message TEXT NOT NULL,
    auteur VARCHAR(100) NOT NULL,
    statut ENUM('en_attente', 'approuve', 'refuse') DEFAULT 'en_attente',
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE avis (
  id INT PRIMARY KEY AUTO_INCREMENT,
    message TEXT NOT NULL,
    auteur VARCHAR(100) NOT NULL,
    statut ENUM('en_attente', 'approuve', 'refuse') DEFAULT 'en_attente',
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);