







/**1. Table habitats*/
CREATE TABLE habitats (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    images JSON NOT NULL,
    description TEXT NOT NULL
);

/*2. Table animaux*/
CREATE TABLE animaux (
    id INT PRIMARY KEY AUTO_INCREMENT,
    prenom VARCHAR(50) NOT NULL,
    race VARCHAR(50) NOT NULL,
    images JSON NOT NULL,
    habitat_id INT NOT NULL,
    FOREIGN KEY (habitat_id) REFERENCES habitats(id)
);

/*3. Table rapports_veterinaires*/
CREATE TABLE rapports_veterinaires (
    id INT PRIMARY KEY AUTO_INCREMENT,
    etat VARCHAR(50) NOT NULL,
    nourriture VARCHAR(100) NOT NULL,
    grammage DECIMAL(5,2) NOT NULL,
    date DATE NOT NULL,
    detail_etat TEXT,
    animal_id INT NOT NULL,
    FOREIGN KEY (animal_id) REFERENCES animaux(id)
);

INSERT INTO habitats (nom, images, description) VALUES
('Savane', '["savane1.jpg", "savane2.jpg"]', 'Un habitat spacieux qui imite les plaines africaines.'),
('Forêt tropicale', '["foret1.jpg", "foret2.jpg"]', 'Une forêt dense avec un environnement humide et chaud.'),
('Montagne', '["montagne1.jpg", "montagne2.jpg"]', 'Un habitat rocheux et frais pour les animaux de haute altitude.');

INSERT INTO animaux (prenom, race, images, habitat_id) VALUES
('Léo', 'Lion', '["leo1.jpg", "leo2.jpg"]', 1),
('Zara', 'Zèbre', '["zara1.jpg", "zara2.jpg"]', 1),
('Kiki', 'Perroquet', '["kiki1.jpg", "kiki2.jpg"]', 2),
('Luna', 'Lémurien', '["luna1.jpg", "luna2.jpg"]', 2),
('Rocky', 'Chèvre de montagne', '["rocky1.jpg", "rocky2.jpg"]', 3),
('Blizzard', 'Léopard des neiges', '["blizzard1.jpg", "blizzard2.jpg"]', 3);

INSERT INTO rapports_veterinaires (etat, nourriture, grammage, date, detail_etat, animal_id) VALUES
('Bonne santé', 'Viande', 5.00, '2024-12-01', 'Aucun problème détecté.', 1),
('Bonne santé', 'Herbes fraîches', 4.50, '2024-12-03', NULL, 2),
('Plume en bon état', 'Graines', 1.20, '2024-12-04', 'Léger stress détecté.', 3),
('Active', 'Fruits', 2.30, '2024-12-05', 'Poids légèrement en dessous de la moyenne.', 4),
('Robuste', 'Herbes sèches', 6.00, '2024-12-06', NULL, 5),
('Blessure soignée', 'Viande', 4.80, '2024-12-07', 'La patte arrière est en voie de guérison.', 6);




CREATE TABLE Services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE services (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(100) NOT NULL,
  description TEXT,
  image VARCHAR(255) DEFAULT NULL, -- chemin vers l'image si applicable
  categorie VARCHAR(50) DEFAULT NULL -- optionnel : pour organiser par catégories
);

/* avec image unique */
UPDATE services SET images = 'restauration.jpg' WHERE id = 1;
UPDATE services SET images = 'guide_habitats.jpg' WHERE id = 2;
UPDATE services SET images = 'petit_train.jpg' WHERE id = 3;

/* avec image multiple */
UPDATE services SET images = '["restauration1.jpg", "restauration2.jpg"]' WHERE id = 1;
UPDATE services SET images = '["guide1.jpg", "guide2.jpg"]' WHERE id = 2;
UPDATE services SET images = '["train1.jpg", "train2.jpg"]' WHERE id = 3;










CREATE TABLE Avis (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(100) NOT NULL,
  message TEXT NOT NULL,
  dateSoumission DATETIME DEFAULT CURRENT_TIMESTAMP,
  statut ENUM('en_attente', 'approuve') DEFAULT 'en_attente'
);


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
  date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
  statut ENUM('en_attente', 'valide') DEFAULT 'en_attente'
);

/*Pour tester le system*/
CREATE TABLE avis_2 (
    id INT PRIMARY KEY AUTO_INCREMENT,
    message TEXT NOT NULL,
    auteur VARCHAR(100) NOT NULL,
    statut ENUM('approuve', 'refuse', 'en_attente') DEFAULT 'en_attente',
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);



Pour tester ce système dans un dossier dédié, voici les étapes complètes pour configurer et tester ce système de gestion d'avis dynamiques :

1. Préparer le dossier dédié
Créer un dossier sur votre serveur ou votre machine locale, par exemple : avis_system_test.
Organiser les fichiers dans ce dossier :
index.html : Page principale pour afficher les avis.
avis-api.php : API pour récupérer les avis validés depuis la base de données.
styles.css : Feuille de style pour la mise en page (optionnel).
db_config.php : Fichier de configuration pour la connexion à la base de données.
submit-avis.php : Script pour soumettre un nouvel avis (facultatif).
2. Créer la base de données et les tables
Utilisez ce script SQL pour créer une table d'avis :

sql
Copier le code
CREATE DATABASE IF NOT EXISTS avis_system;
USE avis_system;

CREATE TABLE avis (
  id INT AUTO_INCREMENT PRIMARY KEY,
  message TEXT NOT NULL,
  auteur VARCHAR(255) NOT NULL,
  statut ENUM('en_attente', 'valide') DEFAULT 'en_attente',
  date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);


Ajoutez quelques avis manuellement pour tester :

sql
Copier le code
INSERT INTO avis (message, auteur, statut) VALUES
('Une expérience incroyable !', 'Jean Dupont-C', 'valide'),
('Le zoo est bien entretenu.', 'Marie Curie', 'valide'),
('Un endroit parfait pour la famille.', 'Albert Einstein', 'valide'),
('Un accueil chaleureux.', 'Isaac Newton', 'en_attente');







/* Création de Services US-3 */
CREATE TABLE Services (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    description TEXT NOT NULL
);

INSERT INTO Services (nom, description) VALUES
('Restauration', 'Découvrez une variété de plats et de snacks dans nos restaurants.'),
('Visite des habitats avec un guide', 'Explorez les habitats des animaux avec nos guides, gratuitement.'),
('Visite du zoo en petit train', 'Profitez d\'une balade en petit train pour découvrir tout le zoo.');
