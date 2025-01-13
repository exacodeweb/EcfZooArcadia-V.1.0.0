<?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "zoo_arcadia");

if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM Avis WHERE statut = 'en_attente'");

echo "<h2>Avis en attente</h2>";
while ($row = $result->fetch_assoc()) {
  echo "<div>
          <p><strong>{$row['nom']}</strong> : {$row['message']}</p>
          <form method='POST' action='traiter-avis.php'>
            <input type='hidden' name='id' value='{$row['id']}'>
            <button name='action' value='approuver' class='btn btn-success'>Approuver</button>
            <button name='action' value='rejeter' class='btn btn-danger'>Rejeter</button>
          </form>
        </div>";
}
$conn->close();
?>