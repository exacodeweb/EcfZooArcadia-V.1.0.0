<?php
$config = require '../../config/config.php'; // Inclut le fichier de configuration
//<a href="../../../config/config_parrot.php">

$dbConfig = $config['db'];
$dsn = "mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']};charset={$dbConfig['charset']}";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $dbConfig['user'], $dbConfig['pass'], $options);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>                                                                 

<!-- modifier pour teste le code ci-dessus -->

<!-- php/db_connect.php: Établit la connexion à la base de données. -->
<!--?php
//$config = include(__DIR__ . '/../config/config.php');
//$config = include(__DIR__ . '/../config/config.php');
$config = require '../config/config.php';
//$config = require '../config-b/config.php';



try {
    //echo "Point de débogage A: Tentative de connexion à la base de données.<br>";
    $pdo = new PDO("mysql:host={$config['db_host']};dbname={$config['db_name']}", $config['db_user'], $config['db_pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Point de débogage B: Connexion à la base de données réussie.<br>";
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
-->