<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
  //header("Location: ../public/login.php");
  header("Location: ../config/login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau de bord Administrateur</title>
</head>

<body>

  <!-- Section Admin -->
  <div class="col-md-4">
    <div class="card border-primary">
      <h1>Bienvenue, <?php echo $_SESSION['nom']; ?> (Administrateur)</h1>
      <a href="../config/logout.php">Déconnexion</a>
      <div>
        <a href="modifier-mot-de-passe.php" class="btn">Modifier mon mot de passe</a>
      </div>      
      <div>
        <a href="../pages/employé/ajouter-employe.php">Ajouter un Employé</a>
      </div>
    </div>
  </div>

  <div> <br></div>

  <!-- Section Admin -->
  <div class="col-md-4">
    <div class="card border-primary">
      <div>
        <a class="nav-link" href="../avis_system_test/moderation-avis.php">Modérer les témoignages</a>
      </div>
    </div>
  </div>

<div>
<a href="../Crud_habitats/liste_habitats.php">liste des habitats</a>
<a href="../Crud_habitats/ajouter_habitat.php">Ajouter un habitat</a>
<a href="../Crud_habitats/modifier_habitat.php">mettre à jour un habitat</a>
<a href="../Crud_habitats/supprimer_habitat.php">suppression d'un habitat</a>
</div>

<ul>
  <li><a href="../pages/delete_employee.php">retiré uncompte</a></li>
</ul>

<ul>
  <li><a href="../Crud_employe/liste.php">manager employé</li>
</ul>

  </body>
  </html>

    <!-- REGLAGE DES HEURES DE STYLE --->
    <h1>Réglage des heures de style</h1>
    <form id="settings-form">
      <label for="day-start">Début du jour (h) :</label>
      <input type="number" id="day-start" name="day_start" min="0" max="23">
      <label for="night-start">Début de la nuit (h) :</label>
      <input type="number" id="night-start" name="night_start" min="0" max="23">
      <button type="submit">Enregistrer</button>
    </form>

    <p id="status-message"></p>

    <script>
      // Charger les valeurs existantes
      fetch("get_settings.php")
        .then(response => response.json())
        .then(data => {
          document.getElementById("day-start").value = data.day_start || 6;
          document.getElementById("night-start").value = data.night_start || 18;
        })
        .catch(error => console.error("Erreur de chargement des paramètres :", error));

      // Sauvegarder les nouvelles valeurs
      document.getElementById("settings-form").addEventListener("submit", function(e) {
        e.preventDefault();
        const dayStart = document.getElementById("day-start").value;
        const nightStart = document.getElementById("night-start").value;

        fetch("update_settings.php", {
            method: "POST",
            headers: {
              "Content-Type": "application/json"
            },
            body: JSON.stringify({
              day_start: dayStart,
              night_start: nightStart
            })
          })
          .then(response => response.text())
          .then(message => {
            document.getElementById("status-message").textContent = message;
          })
          .catch(error => console.error("Erreur de sauvegarde :", error));
      });
    </script>

</body>
</html>




<!-- Header -->
<!--?php include './includes/header.php'; ?>-->


<!--------------------------------------------------------------------------------------------------------------------->

<!-- version chatgpt pour m'aider à apprendre -->
<!--?php 
session_start();
if ($_SESSION['role'] !== 'admin') {
  header("Location: ../config/login.php");
  exit;
}
?>-->


<!--------------------------------------------------------------------------------------------------------------------->


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau de bord Administrateur</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css"> <!-- Fichier CSS pour styles personnalisés -->



</head>

<body>

<main>

</main>

<aside>
  <div class="container mt-4">
    <div class="row">
      <!-- Carte Bienvenue -->
      <div class="col-lg-6 col-md-12">
        <div class="card text-white bg-primary shadow">
          <div class="card-body text-center">
            <h3 class="card-title">Bienvenue, <?= $_SESSION['nom']; ?> 🎉</h3>
            <p class="card-text">Vous êtes connecté en tant qu'Administrateur.</p>
            <a href="../config/logout.php" class="btn btn-danger">Déconnexion</a>
          </div>
        </div>
      </div>

      <!-- Modifier mot de passe -->
      <div class="col-lg-6 col-md-12">
        <div class="card shadow">
          <div class="card-body text-center">
            <h5 class="card-title">Sécurité du compte</h5>
            <a href="modifier-mot-de-passe.php" class="btn btn-warning">Modifier mon mot de passe</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Gestion des employés -->
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-body text-center">
            <h5 class="card-title">Gestion des employés</h5>
            <!--<a href="../pages/employé/ajouter-employe.php" class="btn btn-success">Ajouter un Employé</a>-->
            <a href="../Crud_employe/liste.php" class="btn btn-info">Manager Employés</a>
            <!--<a href="../pages/delete_employee.php" class="btn btn-danger">Retirer un Compte</a>-->
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-body text-center">
            <h5 class="card-title">Gestion des avis</h5>
            <a href="../avis_system_test/moderation-avis.php" class="btn btn-primary">Modérer les Témoignages</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Gestion des habitats -->
    <div class="row mt-4">
      <div class="col-12">
        <div class="card shadow">
          <div class="card-body text-center">
            <h5 class="card-title">Gestion des Habitats</h5>
            <a href="../Crud_habitats/liste_habitats.php" class="btn btn-secondary">Liste des Habitats</a>
            <a href="../Crud_habitats/ajouter_habitat.php" class="btn btn-success">Ajouter un Habitat</a>
            <a href="../Crud_habitats/modifier_habitat.php" class="btn btn-warning">Mettre à Jour un Habitat</a>
            <a href="../Crud_habitats/supprimer_habitat.php" class="btn btn-danger">Supprimer un Habitat</a>
          </div>
        </div>
      </div>
    </div>

    <div class="card-body text-center">
    <h5 class="card-title">Ajouter un employer</h5>
    <a href="../pages/employé/ajouter-employe.php  btn btn-primary"><!--<i class="fas fa-user-plus"></i>--> Ajouter un employer</a>
    </div>
    </div>

    </aside>
    <!-- Réglage des heures de style --><!--
    <div class="row mt-4">
      <div class="col-12">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title">Réglage des Heures de Style</h5>
            <form id="settings-form">
              <div class="mb-3">
                <label for="day-start" class="form-label">Début du jour (h) :</label>
                <input type="number" class="form-control" id="day-start" name="day_start" min="0" max="23">
              </div>
              <div class="mb-3">
                <label for="night-start" class="form-label">Début de la nuit (h) :</label>
                <input type="number" class="form-control" id="night-start" name="night_start" min="0" max="23">
              </div>
              <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
            <p id="status-message" class="mt-2"></p>
          </div>
        </div>
      </div>
    </div>-->


    <a href="../pages/employé/ajouter-employe.php  btn btn-primary"><i class="fas fa-user-plus"></i> Ajouter un Utiliisateur</a>

  </div>

  <script>
    // Charger les valeurs existantes
    fetch("get_settings.php")
      .then(response => response.json())
      .then(data => {
        document.getElementById("day-start").value = data.day_start || 6;
        document.getElementById("night-start").value = data.night_start || 18;
      })
      .catch(error => console.error("Erreur de chargement des paramètres :", error));

    // Sauvegarder les nouvelles valeurs
    document.getElementById("settings-form").addEventListener("submit", function(e) {
      e.preventDefault();
      const dayStart = document.getElementById("day-start").value;
      const nightStart = document.getElementById("night-start").value;

      fetch("update_settings.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json"
          },
          body: JSON.stringify({
            day_start: dayStart,
            night_start: nightStart
          })
        })
        .then(response => response.text())
        .then(message => {
          document.getElementById("status-message").textContent = message;
        })
        .catch(error => console.error("Erreur de sauvegarde :", error));
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



<!--------------------------------------------------------------------------------------------------------------------->

<!--!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">  -->
        <!-- Sidebar -->  <!--
        <nav id="sidebar" class="bg-blue-900 text-white w-64 space-y-6 py-7 px-2 fixed inset-y-0 left-0 transform -translate-x-full md:translate-x-0 transition duration-200 ease-in-out">
            <div class="flex items-center space-x-3 px-4">
                <i class="fas fa-user-shield text-2xl"></i>
                <span class="text-xl font-semibold">Admin</span>
            </div>
            <hr class="border-gray-600">
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700"><i class="fas fa-user-plus mr-2"></i> Ajouter Employé</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700"><i class="fas fa-building mr-2"></i> Gérer Habitats</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700"><i class="fas fa-comments mr-2"></i> Modérer Avis</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700"><i class="fas fa-chart-line mr-2"></i> Statistiques</a>
            <hr class="border-gray-600">
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-red-600"><i class="fas fa-sign-out-alt mr-2"></i> Déconnexion</a>
        </nav>  -->

        <!-- Contenu principal -->  <!--
        <div class="flex-1 flex flex-col">  -->
            <!-- Header --> <!--
            <header class="bg-white shadow-md p-4 flex justify-between items-center">
                <button id="toggleSidebar" class="text-blue-900 text-2xl focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="text-xl font-bold">Bienvenue, Admin</h1>
                <button class="text-gray-700 hover:text-gray-900 focus:outline-none">
                    <i class="fas fa-moon text-xl"></i>
                </button>
            </header> -->

            <!-- Contenu principal --> <!--
            <main class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white p-4 shadow rounded-lg flex items-center space-x-4">
                        <i class="fas fa-user-plus text-3xl text-blue-900"></i>
                        <div>
                            <h3 class="text-lg font-semibold">Ajouter un Employé</h3>
                            <p class="text-gray-600">Créer un nouvel employé</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 shadow rounded-lg flex items-center space-x-4">
                        <i class="fas fa-building text-3xl text-blue-900"></i>
                        <div>
                            <h3 class="text-lg font-semibold">Gérer les Habitats</h3>
                            <p class="text-gray-600">Ajouter ou modifier un habitat</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 shadow rounded-lg flex items-center space-x-4">
                        <i class="fas fa-comments text-3xl text-blue-900"></i>
                        <div>
                            <h3 class="text-lg font-semibold">Modérer les Avis</h3>
                            <p class="text-gray-600">Approuver ou supprimer des avis</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Toggle Sidebar
        document.getElementById('toggleSidebar').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        });
    </script>
</body>
</html>


  -->




