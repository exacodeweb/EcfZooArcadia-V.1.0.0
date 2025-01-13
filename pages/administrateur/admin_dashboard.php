<?php

// Inclure le fichier de connexion à la base de données
//-----------include '../pages/utilise.php';

// Requête pour récupérer la liste des services
//-----------$stmt = $conn->prepare("SELECT * FROM services");
//-----------$stmt->execute();
//-----------$services = $stmt->fetchAll();




//-----------require './database.php'; // Inclusion du fichier de configuration de la base de données //config/database.php
//require 'database_parrot.php';
session_start();
// Vérification si l'utilisateur connecté est bien un administrateur
if ($_SESSION['user_type'] !== 'admin') { //admins
  header("Location: ../config/login.php");
  exit;
}

// Récupération des statistiques  <!--
   $sql_users = "SELECT COUNT(*) AS total_users FROM avisusers";//user_feedback //users // Assurez-vous que le nom de la table est correct
//$sql_comments = "SELECT COUNT(*) AS total_comments FROM comments";
   $sql_events = "SELECT COUNT(*) AS total_contacts FROM contacts";//AS total_events  FROM_events //inscriptions

   $result_users = $pdo->query($sql_users)->fetch(PDO::FETCH_ASSOC);
//$result_comments = $pdo->query($sql_comments)->fetch(PDO::FETCH_ASSOC);
  $result_events = $pdo->query($sql_events)->fetch(PDO::FETCH_ASSOC);

  $total_users = $result_users['total_users'];//
//$total_comments = $result_comments['total_comments'];
   $total_events = $result_events['total_contacts'];//events

// Code pour gérer les opérations sur les employés, comme afficher la liste des employés, supprimer des comptes, etc.

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Tableau de bord Admin</title>
  <style>
    .title {
      font-size: xx-large;
      color: #d94350;
    }

    h1 {
      text-align: center;
    }

    section {
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      width: 100%;
    }

    .box-1,
    .box-2,
    .box-3 {
      display: flex;
      flex-direction: column;
      width: 280px;
      padding: 5px;
    }

    .box-1 {
      background-color: greenyellow;
    }

    .box-2 {
      background-color: coral;
    }

    .box-3 {
      background-color: cornflowerblue;
      /*deeppink*/
    }
  </style>
</head>

<body>

  <!-- Contenu administratif -->
  <div class="title">Garage Vincent Parrot</div>
  <h1>Bienvenue Administrateur</h1><!--  -->
  <p>Gérez les utilisateurs, services, etc.</p>

  <!--Section des Liens de Gestion -->
  <section>
    <div class="box-1">
      <ul>
        <li><a href="change_password.php">Changer votre mot de passe</a></li>
      </ul>
      <ul>
        <!--<a href="./change_password.php">changer mon mot de passe</a>--><!-- ../admin-xxx/change_password.php -->
        <!--<li><a href="./change_admin_password.php">changer mon mot de passe</a></li>-->
        <!--<a href="change_admin_password.php">Changer mon mot de passe</a>-->
        <!--<h2>Gérer les mots de passe des employés</h2>-->
        <li><a href=" ./manage_employee_passwords.php">Gérer les mots de passe employé</a></li>
      </ul>
    </div>

    <div class="box-2">
      <ul>
        <!--<li><a class="nav-link" href="../php/moderate_comments.php">Modérer les avis</a></li>-->
        <!--<li><a class="nav-link" href="../php/admin_login.php">Gérer les avis</a></li>-->
        <!--<li><a class="nav-link" href="../horaires/update_hours.php">Gerer les horaires </a></li>-->
        <li><a class="nav-link" href="../horaires/update_hours.php">Gérer les horaires</a></li>
        <!--<li><a class="nav-link" href="../ratings_feedback/moderate_comments.php">moderer les avis utilisateur</a></li>-->
        <!--<li><a class="nav-link" href="../ratings_feedback/form_avis_ratings - Copie.php">moderer les avis utilisateur</a></li>-->
        <!-- Lien vers le script de vérification des images -->
        <!--<li><a href="../php/ratings_feedback/check_images.php">Vérifier les images de profil</a></li> --><!-- target="_blank" -->
        <!--<li><a class="nav-link" href="../ratings_feedback/check_images.php">Vérifier les images de profil</a></li>--> <!-- target="_blank" -->
        <li><a class="nav-link" href="../pages/prestations-index.php">prestations</a></li>
        <li><a class="nav-link" href="./admin_services.php">Gerer Ajouter un services</a></li>
        <li><a class="nav-link" href="./admin_services - copie.php">Gerer Ajouter un services - copie</a></li>
        <li><a class="nav-link" href="./admin_services-1.php">Gerer Ajouter un services 1</a></li>
        <li><a class="nav-link" href="./admin_services-test.php">Ajouter un services-test</a></li>
        <!--<li><a class="nav-link" href="./edit_service.php">Modifier les services</a></li>
        <li><a class="nav-link" href="./edit_service-test.php">Modifier les services-test</a></li>-->
        <li><a class="nav-link" href="./delete_service.php">suprimer un service</a></li>
        
        <!--<li><a class="nav-link" href="./edit_service-test.php?id=<!?= $service['id']; ?>">Modifier</a></li>
        <li><a class="nav-link" href="./edit_service-test.php?id=<!?= $service['id']; ?>">Modifier-test</a></li>
        <li><a class="nav-link" href="./edit_service-test.php?id=<!?= htmlspecialchars($service['id']); ?>">Modifier</a></li>
        <li><a class="nav-link" href="./edit_service-test.php?id=<!?= $service['id']; ?>">Modifier</a></li>
        

        <li><a class="nav-link" href="./edit_service-test.php?id=<!?= htmlspecialchars($service['id']); ?>">Modifier</a></li>

        <li><a class="nav-link" href="./edit_service-test.php?id=<!?= $service['id']; ?>">Modifier les services-test</a></li>-->

        <a href="nettoyage_images.php" onclick="return confirm('Êtes-vous sûr de vouloir effectuer le nettoyage des images ?');">Nettoyer les images inutilisées</a>

      </ul>




      <h2>Liste Gerer des services</h2>
    <ul>
        <?php foreach ($services as $service): ?>
            <li>
                <?= htmlspecialchars($service['titre']); ?>
                <a class="nav-link" href="./edit_service-test.php?id=<?= $service['id']; ?>">Modifier</a>
            </li>
        <?php endforeach; ?>
    </ul>
    </div>

    <div class="box-3">
      <ul>
        <li><a href="create_employee.php">Créer un nouveau compte employé</a></li>
        <li><a href="edit_employee.php">Modifier un compte employé</a></li>
        <li><a href="delete_employee.php">Supprimer un compte employé</a></li>
          <br>
        <li><a href="../pages/car_manage-6----x.php">Supprimer un compte employé</a></li>

      </ul>

      <h2>Liste des caracteristiques</h2>
    <ul>
        <?php foreach ($services as $services): ?>
            <li>
                <?= htmlspecialchars($services['titre']); ?>
                <a class="nav-link" href="../pages/car_manage-6----x.php?id=<?= $services['id']; ?>">Modifier</a>
            </li>
        <?php endforeach; ?>
    </ul>
    </div>

    <div class="box-4">
      <ul>
        <li><a class="nav-link" href="../php/view_contacts.php">Consulter les Contacts</a></li>
        <li><a class="nav-link" href="../php/view_feedback.php">Consulter les Avis Profil</a></li>
        <li><a class="nav-link" href="../php/view_employees.php">Consulter les Employés</a></li>
      </ul>


    </div>

  </section>

  <!--Section des Statistiques (commentée)--> <!-- Statistiques du site -->
  <section>
    <div class="statistics">
      <h2>Résumé des Activités</h2>
      <p>Nr total de d'avis clients : <?php echo $total_users; ?><!--Nombre total d'utilisateurs :-->
      </p>
      <!--<p>Nombre total de commentaires : <?php echo $total_comments; ?>
      </p>-->
      <p>Nr total de contacts atelier : <?php echo $total_events; ?><!--Nombre total d'événements :-->
      </p><!---->
    </div>
  </section>

  <br><!--Lien de Déconnexion-->
  <p><a href="logout.php">Déconnexion</a></p> <!-- lien de déconnexion -->
</body>

</html>

























<!--?php
require './database.php'; // Inclusion du fichier de configuration de la base de données //config/database.php
//require 'database_parrot.php';
session_start();
// Vérification si l'utilisateur connecté est bien un administrateur
if ($_SESSION['user_type'] !== 'admin') { //admins
  header("Location: login.php");
  exit;
}

// Récupération des statistiques
//$sql_users = "SELECT COUNT(*) AS total_users FROM avisusers";//user_feedback //users // Assurez-vous que le nom de la table est correct
//$sql_comments = "SELECT COUNT(*) AS total_comments FROM comments";
//$sql_events = "SELECT COUNT(*) AS total_contacts FROM contacts";//AS total_events  FROM_events //inscriptions

//$result_users = $pdo->query($sql_users)->fetch(PDO::FETCH_ASSOC);
//$result_comments = $pdo->query($sql_comments)->fetch(PDO::FETCH_ASSOC);
//$result_events = $pdo->query($sql_events)->fetch(PDO::FETCH_ASSOC);

//$total_users = $result_users['total_users'];//
//$total_comments = $result_comments['total_comments'];
//$total_events = $result_events['total_contacts'];//events

// Code pour gérer les opérations sur les employés, comme afficher la liste des employés, supprimer des comptes, etc.
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Tableau de bord Admin</title>
  <style>
    .title {
      font-size: xx-large;
      color: #d94350;
    }

    h1 {
      text-align: center;
    }

    section {
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      width: 100%;
    }

    .box-1,
    .box-2,
    .box-3 {
      display: flex;
      flex-direction: column;
      width: 280px;
      padding: 5px;
    }

    .box-1 {
      background-color: greenyellow;
    }

    .box-2 {
      background-color: coral;
    }

    .box-3 {
      background-color: cornflowerblue;
      /*deeppink*/
    }
  </style>
</head>

<body>  -->

  <!-- Contenu administratif -->  <!--
  <div class="title">Garage Vincent Parrot</div>
  <h1>Bienvenue Administrateur</h1> --> <!--  -->  <!--
  <p>Gérez les utilisateurs, services, etc.</p>  -->

  <!--Section des Liens de Gestion --> <!--
  <section>
    <div class="box-1">
      <ul>
        <li><a href="change_password.php">Changer votre mot de passe</a></li>
      </ul>
      <ul>  -->
        <!--<a href="./change_password.php">changer mon mot de passe</a>--><!-- ../admin-xxx/change_password.php -->
        <!--<li><a href="./change_admin_password.php">changer mon mot de passe</a></li>-->
        <!--<a href="change_admin_password.php">Changer mon mot de passe</a>-->
        <!--<h2>Gérer les mots de passe des employés</h2>-->  <!--
        <li><a href=" ./manage_employee_passwords.php">Gérer les mots de passe employé</a></li>
      </ul>
    </div>

    <div class="box-2">
      <ul>  -->
        <!--<li><a class="nav-link" href="../php/moderate_comments.php">Modérer les avis</a></li>-->
        <!--<li><a class="nav-link" href="../php/admin_login.php">Gérer les avis</a></li>-->
        <!--<li><a class="nav-link" href="../horaires/update_hours.php">Gerer les horaires </a></li>-->  <!--
        <li><a class="nav-link" href="../horaires/update_hours.php">Gérer les horaires</a></li>   -->
        <!--<li><a class="nav-link" href="../ratings_feedback/moderate_comments.php">moderer les avis utilisateur</a></li>-->
        <!--<li><a class="nav-link" href="../ratings_feedback/form_avis_ratings - Copie.php">moderer les avis utilisateur</a></li>-->
        <!-- Lien vers le script de vérification des images -->
        <!--<li><a href="../php/ratings_feedback/check_images.php">Vérifier les images de profil</a></li> --><!-- target="_blank" -->
        <!--<li><a class="nav-link" href="../ratings_feedback/check_images.php">Vérifier les images de profil</a></li>--> <!-- target="_blank" -->
        <!--
      </ul>
    </div>

    <div class="box-3">
      <ul>
        <li><a href="create_employee.php">Créer un nouveau compte employé</a></li>
        <li><a href="edit_employee.php">Modifier un compte employé</a></li>
        <li><a href="delete_employee.php">Supprimer un compte employé</a></li>
      </ul>
    </div>

    <div class="box-4">
      <ul>
        <li><a class="nav-link" href="../php/view_contacts.php">Consulter les Contacts</a></li>
        <li><a class="nav-link" href="../php/view_feedback.php">Consulter les Avis Profil</a></li>
        <li><a class="nav-link" href="view_employees.php">Consulter les Employés</a></li>
      </ul>
    </div>

  </section>  -->

  <!--Section des Statistiques (commentée)--> <!-- Statistiques du site -->  <!--
  <section>
    <div class="statistics">
      <h2>Résumé des Activités</h2>
      <p>Nr total de d'avis clients : <!?php echo $total_users; ?> -->  <!--Nombre total d'utilisateurs :-->
      <!--
    </p>  -->
      <!--<p>Nombre total de commentaires : <!?php echo $total_comments; ?>
      </p>-->  <!--
      <p>Nr total de contacts atelier : <!?php echo $total_events; ?> --> <!--Nombre total d'événements :-->
      <!--
    </p>  --><!----> <!--
    </div>
  </section>

  <br> -->  <!--Lien de Déconnexion-->  <!--
  <p><a href="./logout.php">Déconnexion</a></p>  --> <!-- lien de déconnexion -->  <!--
</body>

</html>  -->
