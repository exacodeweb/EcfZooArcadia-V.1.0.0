<?php
require '../includes/db-connection.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $pdo->prepare("SELECT * FROM habitats WHERE id = ?");
    $stmt->execute([$id]);
    $habitat = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($habitat) {
        $stmt = $pdo->prepare("SELECT id, prenom, race, JSON_UNQUOTE(JSON_EXTRACT(images, '$[0]')) AS image FROM animaux WHERE habitat_id = ?");
        $stmt->execute([$id]);
        $animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $habitat['animaux'] = $animaux;

        header('Content-Type: application/json');
        echo json_encode($habitat);
        exit;
    }
}

http_response_code(404);
echo json_encode(['error' => 'Habitat not found']);
?>