<?php
session_start();
require 'utilise.php'; // Connexion à la base de données

if (!isset($_SESSION['user_id'])) {
    header('Location: ../config/login.php');
    exit();
}

$user_id = $_SESSION['user_id'];

// Récupérer les informations de l'utilisateur
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password, $options);
    $stmt = $pdo->prepare("SELECT nom, prenom, email FROM utilisateur WHERE id = :id");
    $stmt->execute(['id' => $user_id]);
    $user = $stmt->fetch();
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
</head>
<body>
    <h1>Bienvenue, <?= htmlspecialchars($user['prenom']) ?> !</h1>
    <p>Email : <?= htmlspecialchars($user['email']) ?></p>
    
    <!-- Lien pour modifier le mot de passe -->
    <a href="../pages/modifier-mot-de-passe.php" class="btn">Modifier mon mot de passe</a>
</body>
</html>