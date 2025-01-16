a<?php
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
  <h1>Bienvenue, <?php echo $_SESSION['nom']; ?> (Administrateur)</h1>
  <a href="../config/logout.php">Déconnexion</a>

  <section>
    <a href="modifier-mot-de-passe.php" class="btn">Modifier mon mot de passe</a>
  </section>

  <a href="../pages/employé/ajouter-employe.php">Ajouter un Employé</a>




  <!----------------------------------------------------------------------------------- REGLAGE DES HEURES DE STYLE --->

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
  <!------------------------------------------------------------------------------------------------------------------->



  <!--<li><a class="nav-link" href="../moderate_avis.php">Modérer les témoignages</a></li>
  <li><a class="nav-link" href="../moderate_comments.php">Modérer les témoignages</a></li>-->
  <li><a class="nav-link" href="../avis_system_test/moderation-avis.php">Modérer les témoignages</a></li>

</body>

