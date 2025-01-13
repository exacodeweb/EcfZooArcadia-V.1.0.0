<?php

die('Fichier chargé avec succès');

header('Content-Type: napplication/json');
require_once './config/config.php'; // Fichier de configuration pour la connexion à la base de données

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=$dbCharset", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les avis approuvés
    $stmt = $pdo->prepare("SELECT message, auteur, rating FROM avis WHERE approuve = TRUE ORDER BY date_creation DESC");
    $stmt->execute();

    $avis = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Retourner les avis en JSON
    echo json_encode($avis);

} catch (PDOException $e) {
    echo json_encode(['error' => 'Erreur lors de la récupération des avis']);
}
?>

