<?php
header('Content-Type: application/json');
$db = new PDO('mysql:host=localhost;dbname=zoo_arcadia', 'utilisateur_zoo', 'Z00_Arcadia!2024');//garage_vincent_parrot  //root  //G1i9e6t3  //

$query = $db->query("SELECT `key`, `value` FROM settings");
$settings = $query->fetchAll(PDO::FETCH_KEY_PAIR);

echo json_encode($settings);
?>

