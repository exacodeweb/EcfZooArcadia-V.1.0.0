<?php
header('Content-Type: text/plain');

$db = new PDO('mysql:host=localhost;dbname=zoo_arcadia', 'utilisateur_zoo', 'Z00_Arcadia!2024');//garage_vincent_parrot  //root  //G1i9e6t3   //--------------< ! a modifier les identifiants
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['day_start']) && isset($data['night_start'])) {
    $stmt = $db->prepare("UPDATE settings SET value = :value WHERE `key` = :key");

    $stmt->execute(['value' => $data['day_start'], 'key' => 'day_start']);
    $stmt->execute(['value' => $data['night_start'], 'key' => 'night_start']);

    echo "Paramètres mis à jour avec succès !";
} else {
    echo "Données invalides.";
}
?>
