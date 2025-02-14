<?php
// Paramètres de la base de données
define('DB_HOST', 'localhost');
define('DB_NAME', 'zoo_arcadia');//teaxwxme_zoo_arcadia
define('DB_USER', 'utilisateur_zoo');//teaxwxme_utilisateur_
define('DB_PASS', 'Z00_Arcadia!2024');//Z00_Arcadia!2024
define('DB_CHARSET', 'utf8mb4');

try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}


// URL de base du site (utile pour les liens dynamiques)
define('BASE_URL', 'http://localhost/teaxwxme_zoo_arcadia/');

// Chemin vers les assets (images, CSS, JS)
define('ASSETS_PATH', BASE_URL . 'assets/');

// Configuration de l'application (ex: mode debug)
define('DEBUG_MODE', true);


// 🔹 Fonction pour afficher les erreurs en mode debug
if (DEBUG_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    error_reporting(0);
    ini_set('display_errors', '0');
}
?>


<!-- require_once __DIR__ . '/../config/config_unv.php'; -->
