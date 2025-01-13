<?php
session_start();
require 'utilise.php'; // Inclure la connexion à la base de données

if (!isset($_SESSION['user_id'])) {
    header('Location: ../config/login.php');
    exit();
}

$user_id = $_SESSION['user_id'];
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

if ($new_password !== $confirm_password) {
    die("Les nouveaux mots de passe ne correspondent pas.");
}

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password, $options);

    // Récupérer le mot de passe actuel de l'utilisateur
    $stmt = $pdo->prepare("SELECT mot_de_passe FROM utilisateur WHERE id = :id");
    $stmt->execute(['id' => $user_id]);
    $user = $stmt->fetch();

    if (!$user || !password_verify($current_password, $user['mot_de_passe'])) {
        die("Mot de passe actuel incorrect.");
    }

    // Hacher le nouveau mot de passe
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Mettre à jour le mot de passe
    $update_stmt = $pdo->prepare("UPDATE utilisateur SET mot_de_passe = :new_password WHERE id = :id");
    $update_stmt->execute([
        'new_password' => $hashed_password,
        'id' => $user_id
    ]);

    echo "Mot de passe modifié avec succès.";
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>