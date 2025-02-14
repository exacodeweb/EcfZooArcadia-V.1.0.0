<?php
session_start();
if ($_SESSION['role'] !== 'veterinaire') {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau de bord Docteur</title>
</head>

<body>
  <h1>Bienvenue, <?php echo $_SESSION['nom']; ?> (Roux)</h1>
  <a href="../config/logout.php">Déconnexion</a>


  <section>
    <a href="modifier-mot-de-passe.php" class="btn">Modifier mon mot de passe</a>
  </section>


  <!-- Section Docteur -->
  <div class="col-md-4">
    <div class="card border-info">
      <div class="card-header bg-info text-white">Docteur</div><!-- -->
      <div class="card-body">
        <a href="modifier-mot-de-passe.php" class="btn btn-warning w-100 mb-2">Modifier mon mot de passe</a><!-- modifier_mdp.php -->
        <a href="../service_veterinaire/ajouter_compte_rendu.php">Ajouter un compte rendue</a>
        <a href="../service_veterinaire/historique_comptes_rendus.php">Historique compte rendu</a>
        
        <a href="../config/logout.php" class="btn btn-danger w-100">Déconnexion</a><!-- logout.php -->
      </div>
    </div>
  </div>

</body>

</html>