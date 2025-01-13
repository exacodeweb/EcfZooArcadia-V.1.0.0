<?php
header('Content-Type: application/json');
require './config.php'; // Fichier de configuration pour la base de données

try {
    // Connexion à la base de données
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);

    // Requête pour récupérer les avis approuvés, triés par date décroissante
    $query = $db->prepare("
        SELECT message, auteur 
        FROM avis 
        WHERE statut = 'approuve' 
        ORDER BY date_creation DESC
    ");
    $query->execute();
    $avis = $query->fetchAll(PDO::FETCH_ASSOC);

    // Renvoyer les avis en JSON
    echo json_encode($avis);
} catch (Exception $e) {
    echo json_encode(['error' => 'Erreur lors de la récupération des avis : ' . $e->getMessage()]);
}
?>