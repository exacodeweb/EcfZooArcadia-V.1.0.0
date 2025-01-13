<?php
// include '../includes/utilise.php';
include '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $description = $_POST['description'];

    $sql = "INSERT INTO Services (nom, description) VALUES (:nom, :description)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':nom' => $nom, ':description' => $description]);
    echo "Service ajouté avec succès !";
}
?>


<?php
// require_once 'utilise.php';
require_once '../config/config.php';

header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['nom'], $data['description'])) {
    $stmt = $conn->prepare("INSERT INTO Services (nom, description) VALUES (?, ?)");
    $stmt->bind_param("ss", $data['nom'], $data['description']);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "id" => $stmt->insert_id]);
    } else {
        echo json_encode(["success" => false, "error" => $stmt->error]);
    }
    $stmt->close();
} else {
    echo json_encode(["success" => false, "error" => "Invalid input"]);
}
$conn->close();
?>




<!-- mise a jour -->
<?php
require_once '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'] ?? '';
    $description = $_POST['description'] ?? '';

    if ($nom && $description) {
        try {
            $stmt = $pdo->prepare("INSERT INTO services (nom, description) VALUES (:nom, :description)");
            $stmt->execute(['nom' => $nom, 'description' => $description]);
            http_response_code(200);
            echo json_encode(['message' => 'Service ajouté avec succès.']);
        } catch (PDOException $e) {
            http_response_code(500);
            echo json_encode(['error' => 'Erreur lors de l\'ajout du service.']);
        }
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Nom et description sont requis.']);
    }
}
?>

