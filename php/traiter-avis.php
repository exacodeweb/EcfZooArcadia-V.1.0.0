<?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "zoo_arcadia");

if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

$id = intval($_POST['id']);
$action = $_POST['action'];

if ($action === 'approuver') {
  $conn->query("UPDATE Avis SET statut = 'approuve' WHERE id = $id");
} elseif ($action === 'rejeter') {
  $conn->query("DELETE FROM Avis WHERE id = $id");
}

$conn->close();
header("Location: moderate-avis.php");
exit;
?>