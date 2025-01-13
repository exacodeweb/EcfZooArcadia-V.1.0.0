<?php
$dsn = 'mysql:host=localhost;dbname=zoo_arcadia;charset=utf8mb4';
$user = 'root';
$password = 'G1i9e6t3';

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>