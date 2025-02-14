<?php
//include 'config.php';
include '../config/database.php';

// Récupérer les animaux avec leur habitat associé
$stmt = $pdo->query("
    SELECT a.id, a.prenom, a.race, a.images, h.nom AS habitat 
    FROM animaux a
    JOIN habitats h ON a.habitat_id = h.id
");
$animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Liste des Animaux</h2>
<table border-radius="1">
    <tr>
        <th>Prénom</th>
        <th>Race</th>
        <th>Images</th>
        <th>Habitat</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($animaux as $animal): ?>
        <tr>
            <td><?= htmlspecialchars($animal["prenom"]) ?></td> 
            <td><?= htmlspecialchars($animal["race"]) ?></td>
            <td>
                <?php 
                $images = json_decode($animal["images"], true);
                foreach ($images as $image) {
                    echo "<img src='../assets/images/$image' width='80' height'50'>";
                }
                ?>
            </td>
            <td><?= htmlspecialchars($animal["habitat"]) ?></td>
            <td>
                <a href="modifier_animal.php?id=<?= $animal['id'] ?>">Modifier</a> | 
                <a href="supprimer_animal.php?id=<?= $animal['id'] ?>" onclick="return confirm('Supprimer cet animal ?')">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="ajouter_animal.php">Ajouter un nouvel animal</a>