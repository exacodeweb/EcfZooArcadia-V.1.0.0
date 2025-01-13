<?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "zoo_arcadia");

if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

$result = $conn->query("SELECT nom, message FROM Avis WHERE statut = 'approuve'");
$avis = $result->fetch_all(MYSQLI_ASSOC);

header("Content-Type: application/json");
echo json_encode($avis);

$conn->close();
?>





<?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "zoo_arcadia");
$result = $conn->query("SELECT nom, message FROM Avis WHERE statut = 'approuve'");
$avis = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($avis);
?>