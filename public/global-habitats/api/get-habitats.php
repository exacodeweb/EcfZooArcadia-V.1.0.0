<?php
header('Content-Type: application/json');
// require_once '../includes/db-connection.php';
require_once '../../../config/config.php';

$stmt = $pdo->query('SELECT id, nom, images FROM habitats');
$habitats = $stmt->fetchAll();
echo json_encode($habitats);
?>