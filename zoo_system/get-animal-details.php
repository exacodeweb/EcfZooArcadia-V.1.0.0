<?php
require '../includes/db-connection.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $pdo->prepare("SELECT * FROM animaux WHERE id = ?");
    $stmt->execute([$id]);
    $animal = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($animal) {
        $stmt = $pdo->prepare("SELECT * FROM rapports_veterinaires WHERE animal_id = ?");
        $stmt->execute([$id]);
        $rapports = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $animal['rapports'] = $rapports;

        header('Content-Type: application/json');
        echo json_encode($animal);
        exit;
    }
}

http_response_code(404);
echo json_encode(['error' => 'Animal not found']);
?>
<!--?php
require '../includes/db-connection.php';

$stmt = $pdo->query("SELECT id, nom, JSON_UNQUOTE(JSON_EXTRACT(images, '$[0]')) AS image FROM habitats");
$habitats = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($habitats);
?>-->