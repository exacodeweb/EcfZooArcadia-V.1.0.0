<?php
require '../db_config.php';

try {
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

<!--fichier avis_system_test/db_config.php-->
<?php
$host = "localhost";
$dbname = "zoo_arcadia";
$user = "root";
$password = "G1i9e6t3"; // Mettez le mot de passe si nécessaire

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>