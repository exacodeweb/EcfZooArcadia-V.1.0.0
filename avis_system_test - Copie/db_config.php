<?php
$host = "localhost";
$dbname = "zoo_arcadia"; // avis_system  //
$user = "utilisateur_zoo"; //root
$password = "Z00_Arcadia!2024"; // Mettez le mot de passe si nécessaire //G1i9e6t3

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?> 
<!--
'database' => 'zoo_arcadia', //nom de votre base de données
'username' => 'utilisateur_zoo', //le nom d'utilisateur MySQL
'password' => 'Z00_Arcadia!2024', //le mot de passe
-->