<?php
require '../config/database.php';

$animal_id = $_GET['animal_id'] ?? '';
$comptes_rendus = $pdo->prepare("
    SELECT c.date_passage, c.etat_animal, c.nourriture_proposee, c.grammage, c.details_etat, u.nom AS veterinaire
    FROM comptes_rendus_veterinaires c
    JOIN users u ON c.veterinaire_id = u.id
    WHERE c.animal_id = ?
    ORDER BY c.date_passage DESC
");
$comptes_rendus->execute([$animal_id]);
$comptes_rendus = $comptes_rendus->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Historique des Comptes-Rendus</title>
</head>
<body>
    <h2>Historique des Comptes-Rendus</h2>
    <table border-radius="1">
        <tr>
            <th>Date</th>
            <th>État</th>
            <th>Nourriture</th>
            <th>Grammage (kg)</th>
            <th>Détails</th>
            <th>Vétérinaire</th>
        </tr>
        <?php foreach ($comptes_rendus as $c) : ?>
            <tr>
                <td><?= $c['date_passage'] ?></td>
                <td><?= $c['etat_animal'] ?></td>
                <td><?= $c['nourriture_proposee'] ?></td>
                <td><?= $c['grammage'] ?></td>
                <td><?= $c['details_etat'] ?></td>
                <td><?= $c['veterinaire'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>