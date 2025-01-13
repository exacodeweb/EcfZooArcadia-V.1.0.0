<?php 
// Configuration pour envoyer des données au format JSON
header('Content-Type: application/json');

// Configuration de la base de données
$host = "localhost";
$dbname = "zoo_arcadia";
$username = "root"; 
$password = "G1i9e6t3"; 

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête pour récupérer les avis valides
    $query = "SELECT auteur, message, date_creation FROM avis_2 WHERE statut = 'valide'";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    // Récupération des résultats
    $avis = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Envoi des données en format JSON
    echo json_encode($avis);

} catch (PDOException $e) {
    // En cas d'erreur, retourner un message JSON avec l'erreur
    echo json_encode(["error" => "Erreur de connexion : " . $e->getMessage()]);
}
?>


















<!--?php
// Configuration pour envoyer des données au format JSON
header('Content-Type: application/json');

// Configuration de la base de données
$host = "localhost";
$dbname = "zoo_arcadia";
$username = "root"; // Remplacez par le nom d'utilisateur MySQL
$password = "G1i9e6t3";     // Remplacez par le mot de passe MySQL (vide par défaut sous XAMPP)

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête pour récupérer les avis
    //$query = "SELECT nom, commentaire, note FROM avis";
    $query = "SELECT auteur, message, date_creation FROM Avis";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    // Récupération des résultats
    $avis = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Envoi des données en format JSON
    echo json_encode($avis);

} catch (PDOException $e) {
    // En cas d'erreur, retourner un message JSON avec l'erreur
    echo json_encode(["error" => "Erreur de connexion : " . $e->getMessage()]);
}
?>















<!--?php
// Configuration de l'en-tête HTTP pour renvoyer du JSON
header('Content-Type: application/json');

// Désactiver la mise en cache
header('Cache-Control: no-cache, must-revalidate');
header('Expires: 0');

// Exemple de données JSON (avis fictifs)
$avis = [
    ["nom" => "Vincent", "commentaire" => "Service parfait !", "note" => 5],
    ["nom" => "Marie", "commentaire" => "Accueil chaleureux, je recommande.", "note" => 4],
    ["nom" => "Jacques", "commentaire" => "Bonne expérience globale.", "note" => 4],
];

// Convertir le tableau PHP en JSON et l'envoyer au client
echo json_encode($avis);
?>