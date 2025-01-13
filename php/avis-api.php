<?php
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




















