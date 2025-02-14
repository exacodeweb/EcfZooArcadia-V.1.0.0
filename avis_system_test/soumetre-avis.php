<?php
// Inclure la configuration de la base de données
require 'db_config.php';

// Vérifier que les données ont été soumises
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données soumises
    $nom = trim($_POST['auteur']);
    $message = trim($_POST['message']);

    // Vérifier que les champs ne sont pas vides
    if (!empty($nom) && !empty($message)) {
        try {
            // Préparer l'insertion dans la base de données  //Avis
            $stmt = $pdo->prepare("INSERT INTO avis (auteur, message, statut) VALUES (:auteur, :message, 'en_attente')");
            $stmt->execute([
                ':auteur' => htmlspecialchars($nom),
                ':message' => htmlspecialchars($message)
            ]);
            echo "Merci pour votre avis ! Il sera modéré avant publication.";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>








<!--?php

//include 'includes/db-connection.php';
include '../config/config.php';

$conn = new mysqli("localhost", "root", "G1i9e6t3", "zoo_arcadia");

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

$nom = htmlspecialchars($_POST['auteur']);
$message = htmlspecialchars($_POST['message']);

$sql = "INSERT INTO avis_2 (auteur, message, statut) VALUES (?, ?, 'en_attente')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nom, $message);

if ($stmt->execute()) {
    echo "Merci pour votre avis ! Il sera modéré avant d'être publié.";
} else {
    echo "Erreur : " . $stmt->error;
}

$stmt->close();
$conn->close();
?>