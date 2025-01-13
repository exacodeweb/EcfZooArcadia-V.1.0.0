<?php
require_once '../config.php';

// Requête pour récupérer les animaux
$query = "SELECT nom, espece, age, description FROM animaux";
$stmt = $pdo->query($query);

$animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (empty($animaux)) {
    echo "Aucun animal trouvé.";
} else {
    foreach ($animaux as $animal) {
        echo "<h2>" . htmlspecialchars($animal['nom']) . "</h2>";
        echo "<p>Espèce : " . htmlspecialchars($animal['espece']) . "</p>";
        echo "<p>Âge : " . htmlspecialchars($animal['age']) . " ans</p>";
        echo "<p>Description : " . htmlspecialchars($animal['description']) . "</p>";
        echo "<hr>";

    //echo "<div style='border: 1px solid #ddd; margin-bottom: 10px; padding: 10px; border-radius: 5px;'>";
    //echo "<h2 style='color: #2c3e50;'>" . htmlspecialchars($animal['nom']) . "</h2>";
    //echo "<p><strong>Espèce :</strong> " . htmlspecialchars($animal['espece']) . "</p>";
    //echo "<p><strong>Âge :</strong> " . htmlspecialchars($animal['age']) . " ans</p>";
    //echo "<p><strong>Description :</strong> " . htmlspecialchars($animal['description']) . "</p>";
    //echo "</div>";

    }
}
?>

    <!--echo "<a href='animal_details.php?id=" . $animal['id'] . "' style='color: #2980b9;'>Voir les détails</a>";--> 

<!--?php
require_once '../config.php';

// Requête pour récupérer les animaux
$query = "SELECT nom, espece, age, description FROM animaux";
$result = $pdo->query($query);//$conn
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/animaux.css">
    <title>Liste des Animaux</title>
</head>
<body>
    <h1>Les Animaux du Zoo</h1>
    <div class="gallery">
        <!?php if ($result->num_rows > 0): ?>
            <!?php while ($row = $result->fetch_assoc()): ?>
                <div class="card">
                    <h2><!?= htmlspecialchars($row['nom']) ?></h2>
                    <p><strong>Espèce :</strong> <!?= htmlspecialchars($row['espece']) ?></p>
                    <p><strong>Âge :</strong> <!?= htmlspecialchars($row['age']) ?> ans</p>
                    <p><!?= htmlspecialchars($row['description']) ?></p>
                </div>
            <!?php endwhile; ?>
        <!?php else: ?>
            <p>Aucun animal trouvé.</p>
        <!?php endif; ?>
    </div>
</body>
</html>