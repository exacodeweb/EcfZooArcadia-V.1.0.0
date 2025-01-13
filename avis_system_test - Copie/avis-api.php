<!--?php
require 'db_config.php';
// require '../config/config.php';

try {
    // Préparation et exécution de la requête 
    $stmt = $pdo->prepare("SELECT message, auteur FROM avis WHERE statut = 'valide' ORDER BY date_creation DESC");
    $stmt->execute();
    $avis = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Envoyer les avis au format JSON
    header('Content-Type: application/json');
    echo json_encode($avis);
} catch (PDOException $e) {
    // Gestion des erreurs
    http_response_code(500);
    echo json_encode(["error" => "Erreur lors de la récupération des avis."]);
}
?>
-->

<!-- avec l'anciene table -->
<!--?php
require 'db_config.php';

try {
    // $stmt = $pdo->prepare("SELECT message, nom FROM avis WHERE statut = 'valide' ORDER BY date_creation DESC");
    $stmt = $pdo->prepare("SELECT message, auteur FROM avis WHERE statut = 'valide' ORDER BY date_creation DESC");


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
--> 

<?php
require '../db_config.php';

die('Fichier chargé avec succès');

try {
    // Préparation et exécution de la requête
    $stmt = $pdo->prepare("SELECT message, auteur FROM avis WHERE statut = 'valide' ORDER BY date_creation DESC");
    $stmt->execute();
    $avis = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Envoyer les avis au format JSON
    header('Content-Type: application/json');
    echo json_encode($avis);
} catch (PDOException $e) {
    // Gestion des erreurs
    http_response_code(500);
    echo json_encode(["error" => "Erreur lors de la récupération des avis."]);
}

// Test
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>-->

 
<?php
header('Content-Type: application/json');
require '../config/config.php';

try {
    $db = new PDO('mysql:host=localhost;dbname=garage_vincent_parrot;charset=utf8mb4', 'root', 'G1i9e6t3');
    
    // Requête pour récupérer les avis approuvés
    $query = $db->prepare("SELECT auteur, message FROM avis WHERE statut = 'approuve'");
    $query->execute();
    $avis = $query->fetchAll(PDO::FETCH_ASSOC);

    // Retourne les avis au format JSON
    echo json_encode($avis);
} catch (Exception $e) {
    // Retourne une erreur en JSON si nécessaire
    echo json_encode(['error' => 'Erreur lors de la récupération des avis : ' . $e->getMessage()]);
}