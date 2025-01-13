<?php
include 'includes/../zoo_system/db-connection.php';

// Récupérer l'ID depuis l'URL
$habitatId = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Récupérer les détails de l'habitat
$sql = "SELECT nom, description, images FROM habitats WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$habitatId]);
$habitat = $stmt->fetch();

if ($habitat) {
    echo '<h1>' . htmlspecialchars($habitat['nom']) . '</h1>';
    echo '<p>' . htmlspecialchars($habitat['description']) . '</p>';
    
    // Afficher les images
    $images = json_decode($habitat['images']);
    foreach ($images as $image) {
        echo '<img src="./assets/images/' . htmlspecialchars($image) . '" alt="' . htmlspecialchars($habitat['nom']) . '">';
    }

    // Afficher les animaux associés
    echo '<h2>Animaux dans cet habitat</h2>';
    $sqlAnimals = "SELECT id, prenom, race, JSON_UNQUOTE(JSON_EXTRACT(images, '$[0]')) AS image FROM animaux WHERE habitat_id = ?";
    $stmtAnimals = $pdo->prepare($sqlAnimals);
    $stmtAnimals->execute([$habitatId]);

    while ($animal = $stmtAnimals->fetch()) {
        echo '<div class="animal">';
        echo '<img src="./assets/images/' . $animal['image'] . '" alt="' . htmlspecialchars($animal['prenom']) . '">';
        echo '<h3>' . htmlspecialchars($animal['prenom']) . ' (' . htmlspecialchars($animal['race']) . ')</h3>';
        echo '<a href="details-animal.php?id=' . $animal['id'] . '">Voir détails</a>';
        echo '</div>';
    }
} else {
    echo '<p>Habitat non trouvé.</p>';
}
?>