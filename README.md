# Zoo Arcadia
Zoo Arcadia est un projet web conçu pour offrir une expérience interactive autour d’un zoo fictif. Ce site suit une architecture MVC (Modèle-Vue-Contrôleur) et propose des fonctionnalités pour naviguer et explorer différentes zones et animaux du zoo.

# Table des matières
À propos du projet
Architecture MVC
Fonctionnalités
Diagrammes UML
Maquettes et charte graphique
Installation
Structure du projet
Technologies utilisées
Liens externes
Contribuer
Licence
<!--------------------------------------------------------------------------------------------------------------------->
# À propos du projet
Zoo Arcadia est développé avec une architecture MVC pour séparer la logique de l'application, la gestion des données et l'affichage des vues. Ce projet inclut une page d'accueil, un menu de navigation, et d'autres sections qui seront ajoutées au fur et à mesure de son développement.

# Architecture MVC
Le projet suit l'architecture MVC :

# Modèle (Model) : 
Gère les données de l'application et les règles métier.
# Vue (View) : 
Affiche les informations à l'utilisateur et les interfaces graphiques.
# Contrôleur (Controller) : 
Gère les requêtes de l'utilisateur, interagit avec le modèle et sélectionne la vue appropriée.
Fonctionnalités
Fonctionnalités prévues (à ajuster au fil de l'avancement) :
<!--------------------------------------------------------------------------------------------------------------------->
Page d'accueil : Présente les informations principales sur le zoo.
Menu de navigation : Permet d'accéder aux différentes sections du site.
Section Animaux : Affiche une liste d'animaux avec leurs informations.
Section Zones du zoo : Présente les différentes zones (forêt tropicale, savane, etc.).
Formulaire de contact : Permet aux utilisateurs de poser des questions ou de donner des avis.
Diagrammes UML
Les diagrammes UML permettent de visualiser la structure et le fonctionnement du projet.

1. Diagramme de Cas d'Utilisation
Décrit les différents scénarios d'interaction entre les utilisateurs et le système. Voir le diagramme dans docs/uml/use_case_diagram.png.

2. Diagramme de Séquence
Visualise l'ordre des interactions pour des fonctionnalités spécifiques. Voir le diagramme dans docs/uml/sequence_diagram.png.

3. Diagramme de Classes
Montre la structure des classes, leurs relations, et leurs attributs. Voir le diagramme dans docs/uml/class_diagram.png.

4. Modèles de Données (MCD, MLD, MPD)
MCD (Modèle Conceptuel de Données) : docs/uml/mcd.png
MLD (Modèle Logique de Données) : docs/uml/mld.png
MPD (Modèle Physique de Données) : docs/uml/mpd.png
Maquettes et charte graphique
Les maquettes fournissent une idée claire de l'interface utilisateur et de la navigation.

# Wireframe : 
Représentation simplifiée des pages, montrant la structure sans détails graphiques. Voir docs/wireframes/homepage_wireframe.png.
# Mockups : 
Modèles haute fidélité avec couleurs et typographies respectant la charte graphique. Voir docs/mockups/homepage_mockup.png.

# Charte Graphique : 
Couleurs, typographies et styles visuels de l'application. Voir docs/design/charte_graphique.pdf.

# Installation
Prérequis
PHP (8.0 ou supérieur)
Serveur web (Apache, Nginx, ou autre)
Base de données (MySQL, MariaDB, etc.)
Étapes

## Instructions d'installation
1. Clonez le dépôt : `git clone https://github.com/votre-utilisateur/EcfGarageParrot-V.03.github.io.git`
2. Configurez votre serveur web pour pointer vers le répertoire cloné.
3. Importez la base de données en utilisant le fichier `script.sql` situé dans `pages/`.

# Clonez le dépôt :
bash
Copier le code
git clone https://github.com/votre-compte/zoo-arcadia.git
Accédez au dossier du projet :

bash
Copier le code
cd zoo-arcadia
Configurez la base de données dans config/database.php.

Démarrez le serveur web et accédez à l'application.

# Structure du projet
La structure générale est la suivante :

plaintext
Copier le code
zoo-arcadia/
│
├── app/
│   ├── controllers/
│   ├── models/
│   └── views/
│
├── config/
│   └── database.php
│
├── public/
│   ├── assets/
│   ├── css/
│   ├── js/
│   └── index.php
│
├── docs/
│   ├── uml/
│   │   ├── use_case_diagram.png
│   │   ├── sequence_diagram.png
│   │   ├── class_diagram.png
│   │   ├── mcd.png
│   │   ├── mld.png
│   │   └── mpd.png
│   ├── wireframes/
│   ├── mockups/
│   └── design/
└── README.md

# Technologies utilisées
PHP : Langage de programmation pour le backend.
HTML/CSS/JavaScript : Pour la structure, le style et l'interactivité du frontend.
MySQL : Base de données pour stocker les informations du zoo.

# Liens externes
Figma : Pour les maquettes et les wireframes.
Draw.io : Pour la création des diagrammes UML.
[Autres outils de conception](ajouter d'autres liens ici si nécessaire).

# Contribuer
Fork le projet.
Créez une branche (git checkout -b feature/NouvelleFonctionnalite).
Committez vos modifications (git commit -m 'Ajout d'une nouvelle fonctionnalité').
Poussez vers la branche (git push origin feature/NouvelleFonctionnalite).
Créez une Pull Request.

# Licence
Ce projet est sous licence MIT.





<!---------------------------------------------------------------------------------------------------------->

# README - Zoo Arcadia

## 1. Présentation du Projet
Ce projet consiste en la création d'un site web pour **Zoo Arcadia**, permettant la gestion des animaux du zoo ainsi que la présentation des services et activités proposées. Le site inclut une galerie d'animaux, une interface de gestion pour les employés, et un système de réservation en ligne pour les visiteurs. Ce README décrit les étapes de développement, les compétences appliquées, et la documentation technique.

## 2. Objectifs et Contexte
L'objectif de ce projet est de fournir une plateforme intuitive et sécurisée pour :

- Présenter les animaux et services proposés.
- Permettre une gestion efficace des animaux et des réservations par les employés.
- Offrir aux visiteurs un moyen simple de découvrir le zoo et de planifier leur visite.

## 3. Structure du Projet
| Dossier/Fichier           | Description                                           |
|---------------------------|------------------------------------------------------|
| `/docs`                   | Contient les diagrammes UML et les modèles de données (MCD, MLD, MPD). |
| `/design`                 | Inclut les wireframes, mockups et charte graphique.  |
| `/src`                    | Code source (HTML, CSS, PHP, JavaScript) structuré par fonctionnalité. |
| `/assets/images`          | Dossier contenant les images des animaux.            |
| `README.md`               | Ce fichier, qui documente le projet.                 |

## 4. Compétences et Pratiques Appliquées
### 4.1 Analyse des Besoins
**Tâches :**
- Réalisation d’une analyse des besoins pour définir les fonctionnalités principales : gestion des animaux, système de réservation, accès au tableau de bord employé.
- Création des cas d'utilisation UML pour décrire les interactions principales (ex : ajout d'animal, réservation de visite).

**Compétences :**
- Communication avec le client pour déterminer les attentes.
- Transformation des besoins en fonctionnalités techniques détaillées.

### 4.2 Conception Technique
**Tâches :**
- Création des modèles de données (MCD, MLD, MPD) pour structurer la base de données.
- Élaboration des diagrammes de séquence pour représenter les flux de données entre les utilisateurs et le site.

**Compétences :**
- Structuration des données en tenant compte des relations et de la sécurité.
- Utilisation de modèles UML pour planifier les interactions et la structure des données.

### 4.3 Développement Front-End
**Tâches :**
- Création des interfaces utilisateur avec HTML et CSS, en respectant les wireframes et la charte graphique.
- Utilisation de JavaScript pour implémenter la réservation en ligne et les interactions (ex : redirection du bouton Détails vers la page spécifique de l'animal).

**Compétences :**
- Application des principes de responsive design pour garantir une expérience utilisateur optimale sur tous les appareils.
- Création de fonctionnalités interactives et dynamiques pour améliorer l'expérience utilisateur.

### 4.4 Développement Back-End
**Tâches :**
- Création de l'interface employé en PHP pour la gestion des animaux (ajout, modification, suppression).
- Implémentation de la base de données et connexion avec PHP pour rendre le contenu dynamique.

**Compétences :**
- Maîtrise des requêtes SQL et des clés étrangères pour maintenir l'intégrité des données.
- Sécurisation des connexions et du stockage des mots de passe avec des hachages.

### 4.5 Tests et Optimisation
**Tâches :**
- Tests d'intégration pour s'assurer du bon fonctionnement des interactions (ex : réservation, redirection vers la fiche de l'animal).
- Résolution des problèmes d'affichage des images et optimisation du code pour une performance maximale.

**Compétences :**
- Debugging et optimisation des performances pour garantir un site rapide et fiable.
- Validation des fonctionnalités par rapport aux besoins initiaux du client.

### 4.6 Documentation et Mise en Production
**Tâches :**
- Rédaction d'une documentation technique (README, commentaires de code) pour faciliter la maintenance et la prise en main du projet.
- Organisation et présentation des livrables pour une présentation professionnelle des compétences.

**Compétences :**
- Documentation détaillée pour assurer la pérennité et la facilité de maintenance du projet.
- Présentation structurée et professionnelle des compétences et des pratiques appliquées.

## 5. Instructions d’Installation et d’Utilisation
### Prérequis
- Serveur Web avec PHP 7.4+
- MySQL
- Navigateur Web moderne

### Installation
Clonez le dépôt :
bash
git clone https://github.com/votre_projet/zoo_arcadia.git
Importez la base de données (fichier zoo_arcadia.sql) dans MySQL.
Configurez le fichier src/utilise.php pour la connexion à la base de données :

php
Copier le code
'host' => 'localhost',
'db' => 'zoo_arcadia',
'user' => 'root',
'password' => 'votre_mot_de_passe',

# Utilisation
Accédez à la galerie d'animaux pour consulter les annonces.
Utilisez l’interface employé pour gérer les animaux et les réservations.

6. Diagrammes UML et Documentation Visuelle
Les diagrammes UML et autres documents de conception visuelle sont disponibles dans le dossier /docs et /design :

Diagrammes : cas d’utilisation, séquences, classes.
Modèles de données : MCD, MLD, MPD.
Wireframes et charte graphique pour référence visuelle.

7. Suivi des Prochaines Étapes
Amélioration des fonctionnalités de réservation et ajout de nouvelles options.
Optimisation du code PHP pour une gestion plus rapide de la base de données.
Éventuelle intégration d'une API pour des données sur les animaux en temps réel.

8. Gestion et Suivi de Projet
Le projet a été structuré et suivi via un backlog sur Trello, permettant d’organiser les tâches, de prioriser les fonctionnalités et de garantir une gestion itérative. Ce backlog inclut :

Les fonctionnalités à développer (avec leur priorité).
Les tâches en cours et terminées.
Les éventuelles améliorations et retours du client.
Le tableau Trello est accessible ici : Backlog Trello - Zoo Arcadia.

markdown
Copier le code

### Notes :

- Remplacez les liens et les noms de fichiers par ceux qui correspondent à votre projet.
- N'oubliez pas d'ajuster les sections si certaines compétences ou tâches spécifiques à votre projet ne figurent pas.
- Pour les diagrammes et la documentation visuelle, vous pouvez inclure des liens vers des outils comme Figma ou d'autres plateformes si vous avez choisi de les héberger en ligne plutôt que de stocker des fichiers locaux.

<!--------------------------------------------------------------------------------------------------------->

# Contenu Typique d'une Documentation Technique

# Introductio
Présentation générale du projet, de ses objectifs et de son contexte.
Informations sur l'équipe de développement et les parties prenantes.

# Installation
Prérequis : Liste des logiciels, versions de langage, bibliothèques nécessaires.
Étapes d'installation : Instructions détaillées pour installer le logiciel, y compris le clonage du dépôt, l'importation de la base de données, et la configuration.

# Configuration
Informations sur la configuration du projet (ex. : fichiers de configuration, paramètres à modifier).
Instructions sur la personnalisation des paramètres.

# Utilisation
Guide de l'utilisateur : Explication de l'interface utilisateur, des fonctionnalités principales et de la navigation.
Scénarios d'utilisation : Exemples pratiques de l'utilisation du logiciel, avec des captures d'écran si nécessaire.

# Architecture du Système
Description de l'architecture logicielle : Diagrammes montrant les composants principaux, les flux de données, et les interactions entre les différentes parties du système.
Détails des technologies utilisées (frameworks, langages, bibliothèques).

# Développement
Guide de contribution : Instructions pour les développeurs qui souhaitent contribuer au projet.
Normes de code : Bonnes pratiques de codage à suivre.
Tests : Explication des tests unitaires et d'intégration, avec des instructions pour les exécuter.

# Maintenance
Procédures pour la mise à jour du logiciel : Comment gérer les mises à jour et les corrections de bugs.
Gestion des erreurs : Comment identifier, signaler et résoudre les problèmes.

# Sécurité
Considérations de sécurité : Pratiques recommandées pour sécuriser le projet.
Gestion des données sensibles : Comment traiter les données utilisateur et les mots de passe.

# FAQ et Dépannage
Questions fréquentes : Réponses aux questions courantes que les utilisateurs pourraient avoir.
Résolution des problèmes : Conseils pour résoudre les problèmes courants.

# Liens Utiles
Liens vers des ressources supplémentaires, comme la documentation des bibliothèques utilisées, des forums d'entraide, ou des articles de blog pertinents.

<!--------------------------------------------------------------------------------------------------------->
Documentation Technique

# Introduction
Présentation générale du projet, de ses objectifs et de son contexte.
Informations sur l'équipe de développement et les parties prenantes.

# Installation
Prérequis : Liste des logiciels, versions de langage, bibliothèques nécessaires.
Étapes d'installation : Instructions détaillées pour installer le logiciel, y compris le clonage du dépôt, l'importation de la base de données, et la configuration.

# Configuration
Informations sur la configuration du projet (ex. : fichiers de configuration, paramètres à modifier).
Instructions sur la personnalisation des paramètres.

# Utilisation
Guide de l'utilisateur : Explication de l'interface utilisateur, des fonctionnalités principales et de la navigation.
Scénarios d'utilisation : Exemples pratiques de l'utilisation du logiciel, avec des captures d'écran si nécessaire.

# Architecture du Système
Description de l'architecture logicielle : Diagrammes montrant les composants principaux, les flux de données, et les interactions entre les différentes parties du système.
Détails des technologies utilisées (frameworks, langages, bibliothèques).

# Développement
Guide de contribution : Instructions pour les développeurs qui souhaitent contribuer au projet.
Normes de code : Bonnes pratiques de codage à suivre.
Tests : Explication des tests unitaires et d'intégration, avec des instructions pour les exécuter.

# Maintenance
Procédures pour la mise à jour du logiciel : Comment gérer les mises à jour et les corrections de bugs.
Gestion des erreurs : Comment identifier, signaler et résoudre les problèmes.

# Sécurité
Considérations de sécurité : Pratiques recommandées pour sécuriser le projet.
Gestion des données sensibles : Comment traiter les données utilisateur et les mots de passe.

# FAQ et Dépannage
Questions fréquentes : Réponses aux questions courantes que les utilisateurs pourraient avoir.
Résolution des problèmes : Conseils pour résoudre les problèmes courants.

# Liens Utiles
Liens vers des ressources supplémentaires, comme la documentation des bibliothèques utilisées, des forums d'entraide, ou des articles de blog pertinents.

<!--------------------------------------------------------------------------------------------------------->
Exemple de Structure de Documentation Technique
Voici un exemple simplifié de ce à quoi pourrait ressembler une documentation technique pour le projet Zoo Arcadia :

markdown
Copier le code
# Documentation Technique - Zoo Arcadia

1. # Introduction
Bienvenue dans la documentation technique de Zoo Arcadia, un site web dédié à la gestion des animaux et aux réservations des visiteurs. Ce projet a été développé par [Nom de l'équipe/developer].

2. # Installation

 Prérequis
- Serveur Web avec PHP 7.4+
- MySQL
- Navigateur Web moderne

Étapes d'installation
1. Clonez le dépôt :
   ```bash
   git clone https://github.com/votre_projet/zoo_arcadia.git
Importez la base de données (fichier zoo_arcadia.sql) dans MySQL.
Configurez le fichier src/utilise.php pour la connexion à la base de données.

3. # Configuration
Modifiez les paramètres de connexion dans src/utilise.php :
php
Copier le code
'host' => 'localhost',
'db' => 'zoo_arcadia',
'user' => 'root',
'password' => 'votre_mot_de_passe',
4. # Utilisation
Accédez à la galerie d'animaux pour consulter les annonces.
Utilisez l’interface employé pour gérer les animaux et les réservations.
5. # Architecture du Système
Diagramme de l'Architecture

Technologies Utilisées
Frontend : HTML, CSS, JavaScript
Backend : PHP
Base de données : MySQL
6. # Développement
Guide de contribution
Pour contribuer au projet, veuillez suivre les étapes suivantes :

Forkez le dépôt.
Créez une branche pour votre fonctionnalité.
Soumettez une pull request.
Normes de code
Adoptez des pratiques de codage claires et commentées.

Tests
Exécutez les tests unitaires avec :

bash
Copier le code
phpunit tests/
7. # Maintenance
Mettez à jour le système régulièrement.
Suivez les erreurs signalées dans le tableau Trello.
8. # Sécurité
Utilisez des connexions sécurisées (HTTPS).
Hachez les mots de passe avant de les stocker.
9. # FAQ et Dépannage
Q : Comment résoudre une erreur de connexion à la base de données ?
Assurez-vous que les paramètres de connexion dans src/utilise.php sont corrects.
10. # Liens Utiles
Documentation PHP
Documentation MySQL

<!---------------------------------------------------------------------------------------------------------->

README.md pour le projet Zoo Arcadia
markdown
Copier le code
# README - Zoo Arcadia

## 1. Présentation du Projet
Ce projet consiste en la création d'un site web pour "Zoo Arcadia", permettant aux visiteurs de découvrir les animaux, les expositions, et d'obtenir des informations pratiques sur le zoo. Le site inclut une interface pour gérer les informations des animaux, des expositions, ainsi qu'une galerie de photos. Ce README décrit les étapes de développement, les compétences appliquées, et la documentation technique.

## 2. Objectifs et Contexte
L'objectif de ce projet est de fournir une plateforme intuitive et attrayante pour :
- Présenter les animaux et les expositions du zoo.
- Permettre une gestion efficace des informations sur les animaux et les événements.
- Offrir aux visiteurs un moyen simple de consulter les horaires et les tarifs.

## 3. Structure du Projet
| Dossier/Fichier          | Description                                          |
|--------------------------|------------------------------------------------------|
| `/docs`                  | Contient les diagrammes UML et les modèles de données. |
| `/design`                | Inclut les wireframes, mockups et charte graphique. |
| `/src`                   | Code source (HTML, CSS, PHP, JavaScript) structuré par fonctionnalité. |
| `/assets/images`         | Dossier contenant les images des animaux.            |
| `README.md`              | Ce fichier, qui documente le projet.                |

## 4. Compétences et Pratiques Appliquées
### 4.1 Analyse des Besoins
- Réalisation d’une analyse des besoins pour définir les fonctionnalités principales.
- Création des cas d'utilisation UML pour décrire les interactions principales.

<!------------------------------------------------------------->
# Projet Exemple

## Diagramme de l'Architecture
Voici le diagramme de l'architecture du projet :

![Diagramme de l'architecture](Diagrammes/Ds-US2.2.jpg)

## Description
Ce projet est un exemple de documentation utilisant Markdown.
<!------------------------------------------------------------->

### 4.2 Conception Technique
- Création des modèles de données (MCD, MLD) pour structurer la base de données.
- Élaboration des diagrammes de séquence.

### 4.3 Développement Front-End
- Création des interfaces utilisateur avec HTML et CSS.
- Utilisation de JavaScript pour des interactions dynamiques.

### 4.4 Développement Back-End
- Création d'un système de gestion des animaux et des expositions en PHP.
- Implémentation de la base de données.

### 4.5 Tests et Optimisation
- Tests d'intégration pour s'assurer du bon fonctionnement des interactions.
- Résolution des problèmes d'affichage et optimisation du code.

### 4.6 Documentation et Mise en Production
- Rédaction d'une documentation technique pour faciliter la maintenance.
- Présentation des livrables.

## 5. Instructions d’Installation et d’Utilisation
### Prérequis
- Serveur Web avec PHP 7.4+
- MySQL
- Navigateur Web moderne

### Installation
Clonez le dépôt :
bash
git clone https://github.com/votre_projet/zoo-arcadia.git
Importez la base de données dans MySQL.

Configurez le fichier src/config.php pour la connexion à la base de données.

Utilisation
Accédez à la galerie des animaux pour consulter les informations.

6. Diagrammes UML et Documentation Visuelle
Les diagrammes UML et autres documents de conception visuelle sont disponibles dans le dossier /docs :

Diagrammes : cas d’utilisation, séquences.
Modèles de données.
7. Suivi des Prochaines Étapes
Amélioration de l'interface utilisateur.
Ajout de nouvelles fonctionnalités (réservation en ligne).
8. Gestion et Suivi de Projet
Le projet a été suivi via un backlog sur Trello, accessible ici : Backlog Trello - Zoo Arcadia.

shell
Copier le code

---

## Documentation Technique pour le projet Zoo Arcadia

```markdown
# Documentation Technique - Zoo Arcadia

## 1. Introduction
Cette documentation technique fournit une vue d'ensemble détaillée du projet Zoo Arcadia, y compris l'architecture, la configuration, et les fonctionnalités.

## 2. Architecture du Système
- **Front-End** : HTML, CSS, JavaScript
- **Back-End** : PHP, MySQL
- **Diagramme d'Architecture** : (à insérer ici)

## 3. Modèle de Données
- **MCD** : Modèle Conceptuel de Données (à insérer ici)
- **MLD** : Modèle Logique de Données (à insérer ici)

## 4. Instructions d'Installation
1. Clonez le dépôt.
2. Importez la base de données.
3. Configurez le fichier `config.php`.

## 5. Développement
### 5.1 Front-End
- Structure des fichiers HTML et CSS.
- Utilisation de JavaScript pour les interactions.

### 5.2 Back-End
- Structure de la base de données.
- Gestion des requêtes SQL.

## 6. Tests
- Méthodes de test utilisées.
- Scénarios de test.

## 7. Maintenance
- Instructions pour mettre à jour le système.
- Bonnes pratiques de sécurité.

## 8. Contact
Pour toute question ou assistance, contactez l'équipe de développement à [email@example.com].



<!--------------------------------------------------------------------------------------------------------------------->

<!--Voici une liste des éléments essentiels à inclure dans le fichier README.md de votre projet pour qu'il soit complet, structuré et utile :-->

1. Titre du Projet
Le nom du projet.
Une courte description du projet (ce qu'il fait et son objectif).
Exemple :

markdown
Copier
Modifier-->
# Application Zoo Arcadia
Application web permettant aux visiteurs et employés de gérer et visualiser les animaux, services, et habitats du zoo Arcadia.
2. Table des matières
Une section de navigation pour faciliter la lecture si le fichier devient long.
Optionnellement, des liens vers des sections clés du fichier.
Exemple :

markdown
Copier
Modifier
## Table des matières
1. [Prérequis](#prérequis)
2. [Installation](#installation)
3. [Utilisation](#utilisation)
4. [Contribuer](#contribuer)
5. [Licence](#licence)
3. Prérequis
Une liste des outils et logiciels nécessaires pour faire fonctionner le projet, par exemple : version de PHP, de la base de données, etc.
Exemple :

markdown
Copier
Modifier
## Prérequis
- PHP 7.4 ou version ultérieure
- MySQL/MariaDB ou PostgreSQL pour la base de données
- MongoDB pour les statistiques NoSQL
- Node.js et npm pour les outils de développement front-end (si nécessaire)
4. Installation
Explication détaillée pour installer et configurer le projet en local (par exemple, étapes pour cloner le repo, installer des dépendances, configurer les bases de données, etc.).
Inclure des commandes à exécuter dans le terminal.
Exemple :

markdown
Copier
Modifier
## Installation

1. Clonez le dépôt :
   ```bash
   git clone https://github.com/nom-utilisateur/zoo-arcadia.git
   cd zoo-arcadia
   ```

2. Installez les dépendances PHP :
   ```bash
   composer install
   ```

3. Configurez la base de données :
   - Créez une base de données MySQL et importez le schéma (fichier SQL fourni).
   - Configurez le fichier `.env` avec vos informations de connexion.

4. Lancez le serveur :
   ```bash
   php -S localhost:8000
   ```

5. Accédez à l'application via votre navigateur à `http://localhost:8000`.
5. Utilisation
Expliquez comment utiliser l'application une fois installée.
Précisez les différentes fonctionnalités que l'utilisateur peut tester (par exemple : se connecter, ajouter un avis, consulter les animaux, etc.).
Exemple :

markdown
Copier
Modifier
## Utilisation

- **Page d'accueil** : Affiche les habitats du zoo, les animaux, et les services disponibles.
- **Page des animaux** : Cliquez sur un animal pour voir son état, les avis des vétérinaires, et les statistiques de consultation.
- **Espace employé** : Permet de valider les avis des visiteurs et de saisir l'alimentation des animaux.
- **Espace administrateur** : Permet de gérer les comptes utilisateurs, les services, les horaires et les animaux.
6. Contribuer
Si vous voulez que d'autres personnes puissent contribuer au projet, précisez les règles et la méthodologie (branches, pull requests, etc.).
Ajoutez des informations pour cloner, modifier, et soumettre des améliorations.
Exemple :

markdown
Copier
Modifier
## Contribuer

Si vous souhaitez contribuer à ce projet, voici les étapes à suivre :

1. Forkez ce dépôt.
2. Créez une branche pour votre fonctionnalité (`git checkout -b feature/nom-fonctionnalité`).
3. Commitez vos changements (`git commit -am 'Ajout de nouvelle fonctionnalité'`).
4. Poussez votre branche (`git push origin feature/nom-fonctionnalité`).
5. Soumettez une pull request pour que vos changements soient révisés et intégrés.
7. Tests
Si des tests sont inclus dans le projet, mentionnez comment les exécuter.
Inclure des tests unitaires ou fonctionnels avec des outils comme PHPUnit.
Exemple :

markdown
Copier
Modifier
## Tests

Pour exécuter les tests du projet, vous pouvez utiliser PHPUnit :

```bash
php vendor/bin/phpunit
markdown
Copier
Modifier

### 8. **Licence**
- Indiquez la licence du projet (par exemple MIT, GPL, etc.).

**Exemple :**
```markdown
## Licence

Ce projet est sous licence MIT - voir le fichier [LICENSE](LICENSE) pour plus de détails.
9. Auteurs et Contact
Indiquez qui a développé le projet et comment les contacter.
Exemple :

markdown
Copier
Modifier
## Auteurs

Développé par [Votre Nom] - [Votre Email]
10. Schéma de la Base de Données
Incluez un schéma de la base de données pour aider à comprendre la structure des données utilisées par l'application.
Exemple :

markdown
Copier
Modifier
## Schéma de la base de données

Voici la structure de la base de données utilisée par le projet :

Utilisateurs (id, email, mot de passe, rôle) Animaux (id, prénom, race, habitat_id) Habitats (id, nom, description) Comptes_rendus (id, animal_id, état, nourriture, grammage, date)

yaml
Copier
Modifier

### 11. **Démarches supplémentaires**
- Si nécessaire, incluez des étapes supplémentaires (par exemple, configurations spécifiques, informations sur le déploiement).

---

Avec ces éléments bien structurés, votre fichier `README.md` offrira une documentation complète et claire qui pourra être utilisée par d'autres développeurs ou utilisateurs souhaitant comprendre ou contribuer au projet.


#-----------------------------------------------------------------------------------------------------------------------


# Zoo Arcadia - Documentation du Projet
1. Introduction
Le projet Zoo Arcadia consiste à créer un site web interactif pour un zoo fictif. Ce site a pour but de fournir des informations sur les animaux, les événements, et les services du zoo, tout en offrant une expérience utilisateur immersive.

2. Objectifs du Projet
Améliorer l’expérience utilisateur : fournir des informations claires et attractives sur le zoo et ses attractions.
Soutenir les opérations internes : offrir des outils pour gérer les événements et les informations sur les animaux.
Promouvoir le zoo : via des pages dynamiques et un design adapté.
3. Fonctionnalités
Frontend :
Page d’accueil : présentation générale, annonces des événements, et galerie des animaux.
Catalogue d’animaux : affichage des fiches animales avec des détails (nom, habitat, description, etc.).
Système de réservation : réservation de visites ou d’événements en ligne.
Contact : formulaire pour questions ou feedback.
Backend :
Tableau de bord administrateur : gestion des animaux, des événements, et des réservations.
Sécurité : authentification des administrateurs avec mots de passe hachés.
4. Gestion et Suivi de Projet
Le projet a été suivi sur Trello, permettant :

La gestion des tâches et des priorités.
Le suivi des étapes de développement.
L’intégration des retours utilisateurs et des itérations.
Lien Trello : Backlog Zoo Arcadia

5. Ressources du Projet
Maquettes et Design :
Maquettes Figma : Lien vers Figma
Diagrammes UML et Documents Techniques :
Diagrammes disponibles dans le dossier /docs :
Modèles de données (MCD, MLD, MPD)
Diagrammes de séquence et d’utilisation.
6. Instructions d’Installation et d’Utilisation
Prérequis
Serveur Web : Apache/Nginx avec PHP 7.4 ou supérieur.
Base de données : MySQL.
Navigateur : Chrome, Firefox ou tout navigateur moderne.
Installation
Clonez le dépôt :
bash
Copier
Modifier
git clone https://github.com/votre_projet/zoo_arcadia.git
Importez la base de données :
Utilisez le fichier zoo_arcadia.sql pour initialiser la base.
Configurez le fichier src/utilise.php :
php
Copier
Modifier
'host' => 'localhost',
'db' => 'zoo_arcadia',
'user' => 'root',
'password' => 'votre_mot_de_passe',
(Optionnel) Configurez les variables d’environnement pour la sécurité :
Installez vlucas/phpdotenv :
bash
Copier
Modifier
composer require vlucas/phpdotenv
Créez un fichier .env :
dotenv
Copier
Modifier
DB_HOST=localhost
DB_DATABASE=zoo_arcadia
DB_USERNAME=root
DB_PASSWORD=votre_mot_de_passe
Adaptez utilise.php pour charger ces variables.
Utilisation
Accédez à l’URL du site via votre serveur web local.
Parcourez les fonctionnalités pour tester le site.
7. Diagramme de l’Architecture
Un aperçu visuel de l'architecture globale est disponible dans le dossier /Diagrammes :

8. Suivi des Prochaines Étapes
Intégration d’un système de recherche avancée.
Ajout de nouvelles options de personnalisation pour les réservations.
Optimisation des performances et de la gestion des données.
Ce fichier README est conçu pour offrir un guide clair et structuré pour les utilisateurs, les développeurs, et toute autre personne travaillant sur le projet Zoo Arcadia. Si vous avez des questions ou des suggestions, elles peuvent être ajoutées dans une section FAQ ou être partagées sur le Trello.



























# 9. Gestion des Utilisateurs et Contributeurs
9.1 Liste des Contributeurs
Inclure une section dédiée aux contributeurs dans le fichier README montre une reconnaissance des efforts et permet au jury de voir l’équipe impliquée. Exemple :

Contributeurs :
Nom	Rôle	Contact
Votre Nom	Chef de projet, développeur principal	votre.email@example.com
Collaborateur A	Développeur Frontend	collaborateur.a@example.com
Collaborateur B	Développeur Backend	collaborateur.b@example.com


#----------------------------------------------------------------------------------------------------------------------

# Zoo Arcadia

Bienvenue dans le projet **Zoo Arcadia**, une plateforme interactive conçue pour gérer et explorer les données d'un parc zoologique. Ce document présente les fonctionnalités, l'installation, et les aspects techniques du projet.

---

## **Table des Matières**

1. [Description du Projet](#description-du-projet)
2. [Fonctionnalités](#fonctionnalités)
3. [Installation](#installation)
4. [Structure du Projet](#structure-du-projet)
5. [Utilisateurs et Privilèges](#utilisateurs-et-privilèges)
6. [Technologies Utilisées](#technologies-utilisées)
7. [Contributeurs](#contributeurs)
8. [Licence](#licence)

---

## **Description du Projet**

**Zoo Arcadia** est une application web permettant de gérer les données d'un zoo, notamment les informations sur les animaux, les événements, les réservations et les employés. Elle est conçue pour faciliter l'administration et améliorer l'expérience des visiteurs.

---

## **Fonctionnalités**

- **Gestion des Animaux** :
  - Ajouter, modifier, supprimer des fiches d'animaux.
  - Afficher des informations détaillées sur chaque animal.

- **Gestion des Événements** :
  - Planifier des événements interactifs.
  - Permettre aux visiteurs de s'inscrire.

- **Réservations** :
  - Système de réservation en ligne pour les visites guidées.

- **Gestion des Employés** :
  - Création et gestion des comptes utilisateurs.
  - Assignation des rôles avec des privilèges spécifiques.

- **Sécurité** :
  - Hachage des mots de passe.
  - Validation des entrées pour éviter les injections SQL.

---

## **Installation**

1. **Cloner le Dépôt :**
   ```bash
   git clone https://github.com/votre-utilisateur/zoo_arcadia.git
   ```

2. **Configuration de la Base de Données :**
   - Importer le fichier `zoo_arcadia.sql` dans votre système de gestion de base de données.
   - Mettre à jour les informations de connexion dans `config.php`.

3. **Installation des Dépendances :**
   ```bash
   composer install
   npm install
   ```

4. **Lancer le Serveur Local :**
   ```bash
   php -S localhost:8000
   ```

5. **Accès au Site :**
   // Rendez-vous sur [http://localhost:8082/index.php]  Docker
   Rendez-vous sur (http://localhost/EcfZooArcadia-V.1.0.0/index.php#about) xampp

---

## **Structure du Projet**

- `index.php` : Page d'accueil.
- `admin/` : Tableau de bord pour les administrateurs.
- `public/` : Contient les fichiers accessibles publiquement (CSS, JS, images).
- `src/` : Fichiers principaux (contrôleurs, modèles, vues).
- `config/` : Fichiers de configuration.
- `database/` : Scripts SQL pour la base de données.

---

## **Utilisateurs et Privilèges**

### **Rôles Disponibles**

1. **Admin** :
   - Gestion complète (CRUD sur toutes les tables).
   - Gestion des utilisateurs.

2. **Employé** :
   - Gestion des animaux, événements et réservations.

3. **Visiteur** :
   - Consultation des informations publiques.
   - Réservation en ligne.

### **Exemple de Création d'Utilisateur :**

```sql
CREATE USER 'zoo_admin'@'localhost' IDENTIFIED BY 'securePassword123';
GRANT ALL PRIVILEGES ON zoo_arcadia.* TO 'zoo_admin'@'localhost';
FLUSH PRIVILEGES;
```

---

## **Technologies Utilisées**

- **Frontend** :
  - HTML5, CSS3, JavaScript.
  - Framework : Bootstrap.

- **Backend** :
  - PHP 8.2.
  - Framework : Laravel (optionnel).

- **Base de Données** :
  - MySQL.

- **Versionnement** :
  - Git.

---

## **Contributeurs**

| Nom               | Rôle                | Contact                     |
|--------------------|---------------------|-----------------------------|
| **Votre Nom**      | Chef de projet, développeur principal | votre.email@example.com |
| **Collaborateur A**| Développeur Frontend| collaborateur.a@example.com |
| **Collaborateur B**| Développeur Backend| collaborateur.b@example.com |

---

## **Licence**

Ce projet est sous licence [MIT](LICENSE). Vous êtes libre de l'utiliser, de le modifier et de le distribuer.

---



Technologies Utilisées.

Correspondance avec les Compétences du Titre Professionnel DWWM
Le projet Zoo Arcadia permet de valider plusieurs compétences du titre professionnel Développeur Web et Web Mobile, réparties selon les deux activités types (AT) principales :

AT1 : Développer la partie Front-End d'une application web ou web mobile en intégrant les recommandations de sécurité
Réalisation de maquettes fonctionnelles :
Création des interfaces utilisateur pour la gestion des animaux, événements et réservations.
Intégration responsive :
Utilisation de Bootstrap pour assurer une compatibilité multi-appareils.
Application des normes d'accessibilité et d'ergonomie :
Navigation intuitive et conformité avec les standards du web.
AT2 : Développer la partie Back-End d'une application web ou web mobile en intégrant les recommandations de sécurité
Création et gestion de la base de données :
Modélisation des données pour les animaux, événements, utilisateurs et réservations.
Mise en œuvre des fonctionnalités Back-End :
Implémentation des opérations CRUD sécurisées.
Sécurisation des données :
Hachage des mots de passe, validations des entrées utilisateur.
Gestion des utilisateurs et rôles :
Définition et contrôle des privilèges pour les administrateurs, employés et visiteurs.
Projets Professionnels Simulés
Le projet Zoo Arcadia a été développé dans un contexte réaliste simulant un environnement professionnel, répondant ainsi aux exigences des projets pratiques du titre professionnel.



Merci d'avoir consulté la documentation du projet **Zoo Arcadia**. Si vous avez des questions, n'hésitez pas à nous contacter !



<!--------------------------------------------------------------------------------------------------------------------->
# Zoo Arcadia

Bienvenue dans le projet **Zoo Arcadia**, une plateforme interactive conçue pour gérer et explorer les données d'un parc zoologique. Ce document présente les fonctionnalités, l'installation, et les aspects techniques du projet.

---

## **Table des Matières**

1. [Description du Projet](#description-du-projet)
2. [Fonctionnalités](#fonctionnalités)
3. [Installation](#installation)
4. [Structure du Projet](#structure-du-projet)
5. [Utilisateurs et Privilèges](#utilisateurs-et-privilèges)
6. [Technologies Utilisées](#technologies-utilisées)
7. [Contributeurs](#contributeurs)
8. [Licence](#licence)

---

## **Description du Projet**

**Zoo Arcadia** est une application web permettant de gérer les données d'un zoo, notamment les informations sur les animaux, les événements, les réservations et les employés. Elle est conçue pour faciliter l'administration et améliorer l'expérience des visiteurs.

---

## **Fonctionnalités**

- **Gestion des Animaux** :
  - Ajouter, modifier, supprimer des fiches d'animaux.
  - Afficher des informations détaillées sur chaque animal.

- **Gestion des Événements** :
  - Planifier des événements interactifs.
  - Permettre aux visiteurs de s'inscrire.

- **Réservations** :
  - Système de réservation en ligne pour les visites guidées.

- **Gestion des Employés** :
  - Création et gestion des comptes utilisateurs.
  - Assignation des rôles avec des privilèges spécifiques.

- **Sécurité** :
  - Hachage des mots de passe.
  - Validation des entrées pour éviter les injections SQL.

---

## **Installation**

1. **Cloner le Dépôt :**
   ```bash
   git clone https://github.com/votre-utilisateur/zoo_arcadia.git
   ```

2. **Configuration de la Base de Données :**
   - Importer le fichier `backup/zoo_arcadia.sql` dans votre système de gestion de base de données.
   - Mettre à jour les informations de connexion dans `config/config.php`.
   - Mettre à jour les informations de connexion dans `public/utilise.php`.
   - Mettre à jour les informations de connexion dans `includes/db-connection.php`.

    <?php
      return [
          'db' => [
              'host' => 'localhost',
              'database' => 'zoo_arcadia', //nom de votre base de données
              'username' => 'utilisateur_zoo', //le nom d'utilisateur MySQL
              'password' => 'Z00_Arcadia!2024', //le mot de passe
              'charset' => 'utf8mb4',
          ],
      ];
    ?>

3. **Installation des Dépendances :**
   ```bash
   composer install
   npm install
   ```

4. **Lancer le Serveur Local :**
   ```bash
   php -S localhost:8000
   ```

5. **Accès au Site :**
   Rendez-vous sur [http://localhost:8000](http://localhost:8000).

---

## **Structure du Projet**

- `index.php` : Page d'accueil.
- `admin/` : Tableau de bord pour les administrateurs.
- `public/` : Contient les fichiers accessibles publiquement (CSS, JS, images).
- `src/` : Fichiers principaux (contrôleurs, modèles, vues).
- `config/` : Fichiers de configuration.
- `database/` : Scripts SQL pour la base de données.

zoo-arcadia/
│
├── app/
│   ├── controllers/
│   ├── models/
│   └── views/
│
├── config/
│   └── database.php
│
├── public/
│   ├── assets/
│   ├── css/
│   ├── js/
│   └── index.php
│
├── docs/
│   ├── uml/
│   │   ├── use_case_diagram.png
│   │   ├── sequence_diagram.png
│   │   ├── class_diagram.png
│   │   ├── mcd.png
│   │   ├── mld.png
│   │   └── mpd.png
│   ├── wireframes/
│   ├── mockups/
│   └── design/
└── README.md

zoo-arcadia/ V.1.0.0
│
├── app/
│   ├── controllers/
│   ├── models/
│   └── views/
│
├── avis_system_test/
│   ├── ajout_avis.html
│   ├── ajout_avis.php
│   ├── avis_api.php
│   ├── db_config.php
│   ├── index.html
│   ├── index.php
│   ├── merci.html
│   ├── modeeration-avis.php
│   ├── scripts.js
│   ├── soumetre-avis.html
│   ├── soumetre-avis.php
│   └── styles.css
│
├── assets/
│   ├── css/
│   │   ├── service.css
│   │   ├── style.css
│   │   └── styles.css
│   ├── fonts/
│   ├── images/
│   │   ├── image.jpg
│   │   ├── image.jpg
│   │   └── image.jpg
│   ├── js/
│   │   └── image.jpg
│   └── logos/
│       └── zoo_arcadia.jpg
│
├── config/
│   ├── admin-2login.php/
│   ├── config.php
│   ├── logins.php
│   └── logout.php
│
├── css/
│   ├── bootstrap.min.css/
│   ├── style.css
│   └── style-avis.css
│
├── includes/
│   ├── db_connect.php
│   ├── db-connection.php
│   ├── footer.php
│   ├── functions.php
│   └── header.php
│
├── pages/
│   ├── employé/
│   │   ├── ajouter-emploté.php
│   │   └── traitement-ajout-employe.php
│   │  
│   ├── admin_dashboard.php
│   ├── employe_dashboard.php
│   ├── modifier-mot-de-passe.php
│   └── veterinaire_dashboard.php
│
├── public/
│   ├── assets/
│   │   ├── css
│   │   │   ├── contact_style.css
│   │   │   ├── style.css
│   │   │   ├── style-0.css
│   │   │   ├── style-2.css
│   │   │   ├── style-css.css
│   │   │   └── style-1.css
│   │   ├── images
│   │   │   ├── 2.jpg
│   │   │   ├── 2.jpg
│   │   │   └── 2.jpg
│   │   ├── js
│   │   │   ├── main.js
│   │   │   ├── script-js.js
│   │   │   └── script.js
│   │   │ 
│   │   └── lib
│   ├── login.php
│   └── utilise.php
│
├── services_system_test/
│   ├── admin-2login.php/
│   ├── config.php
│   ├── logins.php
│   └── logout.php
│
├── docs/
│   ├── uml/
│   │   ├── use_case_diagram.png
│   │   ├── sequence_diagram.png
│   │   ├── class_diagram.png
│   │   ├── mcd.png
│   │   ├── mld.png
│   │   └── mpd.png
│   ├── wireframes/
│   ├── mockups/
│   └── design/
└── README.md

---

## **Utilisateurs et Privilèges**

### **Rôles Disponibles**

1. **Admin** :
   - Gestion complète (CRUD sur toutes les tables).
   - Gestion des utilisateurs.

2. **Employé** :
   - Gestion des animaux, événements et réservations.

3. **Visiteur** :
   - Consultation des informations publiques.
   - Réservation en ligne.

### **Exemple de Création d'Utilisateur :**

```sql
CREATE USER 'zoo_admin'@'localhost' IDENTIFIED BY 'securePassword123';
GRANT ALL PRIVILEGES ON zoo_arcadia.* TO 'zoo_admin'@'localhost';
FLUSH PRIVILEGES;
```

---

## **Technologies Utilisées**

- **Frontend** :
  - HTML5, CSS3, JavaScript.
  - Framework : Bootstrap.

- **Backend** :
  - PHP 8.2.
  - Framework : Laravel (optionnel).

- **Base de Données** :
  - MySQL.

- **Versionnement** :
  - Git.

---

## **Contributeurs**

| Nom               | Rôle                | Contact                     |
|--------------------|---------------------|-----------------------------|
| **Votre Nom**      | Chef de projet, développeur principal | votre.email@example.com |
| **Collaborateur A**| Développeur Frontend| collaborateur.a@example.com |
| **Collaborateur B**| Développeur Backend| collaborateur.b@example.com |

---

## **Licence**

Ce projet est sous licence [MIT](LICENSE). Vous êtes libre de l'utiliser, de le modifier et de le distribuer.

---

Merci d'avoir consulté la documentation du projet **Zoo Arcadia**. Si vous avez des questions, n'hésitez pas à nous contacter !


