<?php
//include '../includes/utilise.php';
include '../config/config.php';
header('Content-Type: application/json');

$sql = "SELECT * FROM Services";
$stmt = $pdo->query($sql);
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>




<?php
// require_once 'utilise.php'; // Configuration de la base de données
require_once 'config/config.php';

header('Content-Type: application/json');

$sql = "SELECT * FROM Services";
$result = $conn->query($sql);

$services = [];
while ($row = $result->fetch_assoc()) {
    $services[] = $row;
}

echo json_encode($services);
$conn->close();
?>
<!--Fichier pour: a. Afficher tous les services (get-services.php) -->




<!-- mise à jour -->
<?php
require_once '../config/config.php';

try {
    $stmt = $pdo->query("SELECT * FROM services");
    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($services);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Erreur lors de la récupération des services.']);
}
?>
