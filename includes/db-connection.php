<?php
$dsn = 'mysql:host=localhost;dbname=zoo_arcadia;charset=utf8mb4';
$username = 'utilisateur_zoo';//root
$password = 'Z00_Arcadia!2024';//G1i9e6t3
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>