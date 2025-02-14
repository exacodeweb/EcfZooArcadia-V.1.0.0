<?php
require '../config/database.php';

$consommations = $pdo->query("
    SELECT c.id, a.prenom, a.race, c.date, c.heure, c.nourriture, c.quantite, u.nom AS employe
    FROM consommations c
    JOIN animaux a ON c.animal_id = a.id
    JOIN utilisateurs u ON c.employe_id = u.id
    ORDER BY c.date DESC, c.heure DESC
")->fetchAll();
?>
<!--users  -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Historique des consommations</title>
</head>
<body>
    <h2>Historique des consommations alimentaires</h2>
    <table border="1">
        <tr>
            <th>Animal</th>
            <th>Race</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Nourriture</th>
            <th>Quantité (kg)</th>
            <th>Employé</th>
        </tr>
        <?php foreach ($consommations as $c) : ?>
            <tr>
                <td><?= $c['prenom'] ?></td>
                <td><?= $c['race'] ?></td><!-- race en espece -->
                <td><?= $c['date'] ?></td>
                <td><?= $c['heure'] ?></td>
                <td><?= $c['nourriture'] ?></td>
                <td><?= $c['quantite'] ?> kg</td>
                <td><?= $c['employe'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>