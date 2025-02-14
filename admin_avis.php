<?php
//require 'utilise.php'; // Fichier de connexion PDO
//require './public/utilise.php';

//require_once __DIR__ . '/../config/config_unv.php';
//require_once './config/config_unv.php';

require './config/utilise.php';

// Récupérer les avis en attente
$sql = "SELECT * FROM avis WHERE statut = 'en_attente' ORDER BY date_creation DESC";
$stmt = $conn->query($sql);
$avis_en_attente = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des avis</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        button { padding: 5px 10px; margin: 5px; cursor: pointer; }
        .approve { background-color: green; color: white; border: none; }
        .reject { background-color: red; color: white; border: none; }
    </style>
</head>
<body>

<h2>Gestion des avis</h2>

<?php if (count($avis_en_attente) > 0) : ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Auteur</th>
            <th>Message</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($avis_en_attente as $avis) : ?>
            <tr>
                <td><?= htmlspecialchars($avis['id']) ?></td>
                <td><?= htmlspecialchars($avis['auteur']) ?></td>
                <td><?= htmlspecialchars($avis['message']) ?></td>
                <td><?= $avis['date_creation'] ?></td>
                <td>
                    <form action="traiter_avis.php" method="post" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $avis['id'] ?>">
                        <button type="submit" name="action" value="approuve" class="approve">✅ Approuver</button>
                    </form>
                    <form action="traiter_avis.php" method="post" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $avis['id'] ?>">
                        <button type="submit" name="action" value="rejete" class="reject">❌ Rejeter</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else : ?>
    <p>Aucun avis en attente.</p>
<?php endif; ?>

</body>
</html>