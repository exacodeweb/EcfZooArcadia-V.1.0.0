<?php
// Détails de connexion à la base de données
$host = 'localhost';         // Serveur de base de données (habituellement localhost)
$dbname = 'zoo_arcadia'; // Nom de la base de données
$username = 'utilisateur_zoo';          // Nom d'utilisateur MySQL
$password = 'Z00_Arcadia!2024';      // Mot de passe MySQL
$charset = 'utf8mb4';        // Jeu de caractères utilisé

// Configuration des options PDO pour une connexion sécurisée
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  // Gestion des erreurs avec exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,  // Mode de récupération par défaut : tableau associatif
    PDO::ATTR_EMULATE_PREPARES => false,  // Utilisation des requêtes préparées natives
];

try {
    // Création d'une nouvelle connexion PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password, $options);
} catch (PDOException $e) {
    // En cas d'erreur de connexion, on affiche un message d'erreur et on arrête l'exécution du script
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
?>

<!--------------------------------------------------------------------------------------------------------------------->
<?php
// Détails de connexion à la base de données
$host = 'localhost';
$dbname = 'zoo_arcadia';
$username = 'utilisateur_zoo';
$password = 'Z00_Arcadia!2024';
$charset = 'utf8mb4';

// Configuration des options PDO
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    // Remplacez $conn par $pdo
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password, $options);
} catch (PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
?>