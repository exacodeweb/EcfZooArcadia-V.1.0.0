<?php
// Récupérer tous les témoignages
$query = $pdo->prepare("SELECT * FROM avisusers ORDER BY date_creation DESC");//temoignages
$query->execute();
$temoignages = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($temoignages as $temoignage): ?>
        <tr>
            <td><?= htmlspecialchars($temoignage['utilisateur_nom']) ?></td>
            <td><?= htmlspecialchars($temoignage['message']) ?></td>
            <td>
                <?php if (!$temoignage['valide']): ?>
                <a href="valider_temoignage.php?id=<?= $temoignage['id'] ?>">Valider</a>
                <?php endif; ?>
                <a href="supprimer_temoignage.php?id=<?= $temoignage['id'] ?>">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
