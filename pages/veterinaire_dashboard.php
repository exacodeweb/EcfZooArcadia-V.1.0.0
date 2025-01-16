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

</body>
</html>