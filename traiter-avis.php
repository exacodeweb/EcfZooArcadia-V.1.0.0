<?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "zoo_arcadia");

$id = $_POST['id'];
$action = $_POST['action'];

if ($action === 'approuver') {
  $conn->query("UPDATE Avis SET statut = 'approuve' WHERE id = $id");
} elseif ($action === 'rejeter') {
  $conn->query("DELETE FROM Avis WHERE id = $id");
}

header("Location: moderation-avis.php");
exit;
?>
