<?php
//$conn = new mysqli("localhost", "root", "G1i9e6t3", "zoo_arcadia");
$conn = new mysqli("localhost", "utilisateur_zoo", "Z00_Arcadia!2024", "zoo_arcadia");

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



<!--?php
// Connexion à la base de données
// $conn = new mysqli("localhost", "root", "G1i9e6t3", "zoo_arcadia");
$conn = new mysqli("localhost", "utilisateur_zoo", "Z00_Arcadia!2024", "zoo-arcadia", );

// Récupère les avis en attente
$result = $conn->query("SELECT * FROM Avis WHERE statut = 'en_attente'");

echo "<h2>Avis en attente de modération</h2>";
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
?>