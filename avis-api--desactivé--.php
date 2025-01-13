<!--?php
// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}

// Récupérer les avis validés
$avisValides = $pdo->query("SELECT message, auteur FROM avis WHERE statut = 'valide'")->fetchAll(PDO::FETCH_ASSOC);

// Retourner les avis sous forme de JSON
header('Content-Type: application/json');
echo json_encode($avisValides);
?>-->



<?php
// require 'db_config.php';
//require './config/config.php';
require './avis_system_controls/db_config.php';

try {
    //$stmt = $pdo->prepare("SELECT message, auteur FROM avis WHERE statut = 'valide' ORDER BY date_creation DESC");
    //$stmt = $pdo->prepare("SELECT nom, message, FROM avis WHERE ORDER BY date_creation DESC statut = 'valide' ");
    // $stmt = $pdo->prepare("SELECT nom, message FROM avis WHERE statut = 'valide' ORDER BY date_creation DESC");
    $stmt = $pdo->prepare("SELECT nom, message FROM avis WHERE statut = 'approuve' ORDER BY dateSoumission DESC");

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










<!--?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "zoo_arcadia");

if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

$result = $conn->query("SELECT nom, message FROM Avis WHERE statut = 'approuve'");
$avis = $result->fetch_all(MYSQLI_ASSOC);

header("Content-Type: application/json");
echo json_encode($avis);

$conn->close();
?>-->





