<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../config/login.php");
    exit();
}

$role = $_SESSION['role'];
$nom = htmlspecialchars($_SESSION['nom']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
</head>
<body>
    <h1>Bienvenue <?= $nom ?>, rôle : <?= $role ?></h1>
    
    <?php if ($role === 'admin'): ?>
        <a href="gestion-utilisateurs.php" class="btn">Gérer les utilisateurs</a>
    <?php endif; ?>

    <?php if ($role === 'employe' || $role === 'admin'): ?>
        <a href="modifier-mot-de-passe.php" class="btn">Modifier mon mot de passe</a>
    <?php endif; ?>

    <?php if ($role === 'veterinaire'): ?>
        <a href="veterinaire-actions.php" class="btn">Gestion vétérinaire</a>
    <?php endif; ?>

    <a href="../logout.php" class="btn">Déconnexion</a>
</body>
</html>