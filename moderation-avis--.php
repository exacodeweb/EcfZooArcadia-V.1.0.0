<?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "zoo_arcadia");

$result = $conn->query("SELECT * FROM Avis WHERE statut = 'en_attente'");

echo "<h2>Avis en attente</h2>";
while ($row = $result->fetch_assoc()) {
  echo "<div>
          <p><strong>{$row['auteur']}</strong> : {$row['message']}</p>
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
//require 'db_config.php';
require './config/config.php';

try {
    $pdo = new PDO("mysql:host=localhost;dbname=zoo_arcadia;charset=utf8mb4", "root", "G1i9e6t3");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT id, message, auteur FROM avis WHERE statut = 'en_attente' ORDER BY date_creation DESC");

    echo "<h2>Avis en attente de modération</h2>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = htmlspecialchars($row['id']);
        $message = htmlspecialchars($row['message']);
        $auteur = htmlspecialchars($row['auteur']);

        echo "<div>
                <p><strong>{$auteur}</strong> : {$message}</p>
                <form method='POST' action='traiter-avis.php'>
                    <input type='hidden' name='id' value='{$id}'>
                    <button name='action' value='approuver' class='btn btn-success'>Approuver</button>
                    <button name='action' value='rejeter' class='btn btn-danger'>Rejeter</button>
                </form>
              </div>";
    }
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
?>-->
