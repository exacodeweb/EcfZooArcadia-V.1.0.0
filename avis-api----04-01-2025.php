<?php
require './db_config.php';
//require 'config/config.php';
try {
    $stmt = $pdo->prepare("SELECT message, auteur FROM avis WHERE statut = 'approuve' ORDER BY date_creation DESC LIMIT 10");//valide
    $stmt->execute();
    $avis = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Envoyer les avis au format JSON
    header('Content-Type: application/json');
    echo json_encode($avis);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(["error" => "Erreur lors de la récupération des avis."]);
}
?>

<!--?php //gestion des erreurs affichage
require './db_config.php';

try {
    // Modifier la requête pour chercher les avis avec statut 'approuve'
    $stmt = $pdo->prepare("SELECT message, auteur FROM avis WHERE statut = 'approuve' ORDER BY date_creation DESC LIMIT 10");
    $stmt->execute();
    $avis = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Envoyer les avis au format JSON
    header('Content-Type: application/json');
    echo json_encode($avis);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        "error" => "Erreur lors de la récupération des avis.",
        "message" => $e->getMessage() // Afficher le message de l'exception
    ]);
}
?>
  -->







<?php
// Inclure la configuration de la base de données
require './db_config.php';

try {
    // Préparer la requête pour récupérer les avis approuvés
    $stmt = $pdo->prepare("SELECT message, auteur FROM avis WHERE statut = 'approuve' ORDER BY date_creation DESC LIMIT 10");
    $stmt->execute();

    // Récupérer les résultats
    $avis = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Envoyer les avis au format JSON
    header('Content-Type: application/json');
    echo json_encode($avis);
} catch (PDOException $e) {
    // Gérer les erreurs en renvoyant une réponse JSON
    http_response_code(500);
    echo json_encode(["error" => "Erreur lors de la récupération des avis : " . $e->getMessage()]);
}
?>

<?php
require './db_config.php';

try {
    // Modifier la requête pour chercher les avis avec statut 'approuve'
    $stmt = $pdo->prepare("SELECT message, auteur FROM avis WHERE statut = 'approuve' ORDER BY date_creation DESC LIMIT 10");
    $stmt->execute();
    $avis = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Envoyer les avis au format JSON
    header('Content-Type: application/json');
    echo json_encode($avis);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(["error" => "Erreur lors de la récupération des avis."]);
}
?>
