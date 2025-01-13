# Documentation Technique - Zoo Arcadia

## 1. Introduction
Ce document décrit l'architecture technique, les choix de conception et les détails d'implémentation du projet Zoo Arcadia.

## 2. Architecture du Système
### 2.1. Architecture Générale
- **Client** : Navigateur Web
- **Serveur** : Apache/Nginx
- **Base de données** : MySQL
- **Langages** : HTML, CSS, JavaScript, PHP

### 2.2. Diagramme d'Architecture
*(Insérez ici un diagramme illustrant l'architecture du système)*

## 3. Modèle de Données
### 3.1. Modèle Conceptuel de Données (MCD)
- Animaux (ID, Nom, Espèce, Âge, Habitat, Description, Images)
- Expositions (ID, Nom, Description, Date, Animaux associés)
- Utilisateurs (ID, Nom, Rôle, Email, Mot de passe)

### 3.2. Modèle Logique de Données (MLD)
*(Insérez ici un diagramme MLD détaillant les relations entre les tables)*

## 4. Technologies Utilisées
- **Front-End** : 
  - HTML5, CSS3 (Flexbox, Grid), JavaScript (jQuery)
- **Back-End** :
  - PHP (version 7.4 ou supérieure)
  - MySQL (version 5.7 ou supérieure)

## 5. Installation
### 5.1. Prérequis
- Serveur web (Apache ou Nginx)
- PHP 7.4 ou supérieur
- MySQL 5.7 ou supérieur

### 5.2. Étapes d'Installation
1. Cloner le dépôt :
   ```bash
   git clone https://github.com/votre_projet/zoo-arcadia.git
Importer la base de données :
Ouvrir phpMyAdmin et importer le fichier zoo_arcadia.sql.
Configurer le fichier de connexion src/config.php avec les informations de votre base de données.
6. Développement
# 6.1. Structure du Code
src/ : Contient tous les fichiers PHP
assets/ : Contient les fichiers CSS, JavaScript et images
docs/ : Contient la documentation
# 6.2. Gestion des Requêtes
Les requêtes SQL sont gérées via PDO pour éviter les injections SQL.
6.3. API (si applicable)
Aucune API externe utilisée pour ce projet, toutes les données sont gérées en interne.
7. Tests
# 7.1. Scénarios de Test
Vérification de l’affichage correct des pages.
Tests fonctionnels des formulaires (ajout, modification, suppression d’animaux et d’expositions).
8. Maintenance
Vérifiez régulièrement les mises à jour de PHP et MySQL pour assurer la sécurité.
Sauvegardez la base de données régulièrement.
9. Contact
Pour toute question, veuillez contacter l'équipe de développement à [email@example.com].
