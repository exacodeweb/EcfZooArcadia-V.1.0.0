<?php
$animal_id = $_GET['id'];
$query = $pdo->prepare("
    SELECT a.prenom, a.race, a.images, h.nom AS habitat_nom,
           r.etat, r.nourriture, r.grammage, r.date, r.detail_etat
    FROM animaux a
    LEFT JOIN habitats h ON a.habitat_id = h.id
    LEFT JOIN rapports_veterinaires r ON a.id = r.animal_id
    WHERE a.id = :id
");
$query->execute(['id' => $animal_id]);
$animal_details = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détail Animal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?= htmlspecialchars($animal_details[0]['prenom']) ?> (<?= htmlspecialchars($animal_details[0]['race']) ?>)</h1>
    <div class="animal-images">
        <?php foreach (json_decode($animal_details[0]['images']) as $image): ?>
            <img src="<?= $image ?>" alt="Image de l'animal">
        <?php endforeach; ?>
    </div>
    <p><strong>Habitat :</strong> <?= htmlspecialchars($animal_details[0]['habitat_nom']) ?></p>
    <h2>Rapports vétérinaires :</h2>
    <?php foreach ($animal_details as $detail): ?>
        <div class="veterinary-report">
            <p><strong>Date :</strong> <?= htmlspecialchars($detail['date']) ?></p>
            <p><strong>État :</strong> <?= htmlspecialchars($detail['etat']) ?></p>
            <p><strong>Nourriture :</strong> <?= htmlspecialchars($detail['nourriture']) ?> (<?= htmlspecialchars($detail['grammage']) ?> g)</p>
            <p><strong>Détail :</strong> <?= htmlspecialchars($detail['detail_etat'] ?: 'Non spécifié') ?></p>
        </div>
    <?php endforeach; ?>

<script>
  // Masquer/afficher les détails de l’état d’un animal
  document.querySelectorAll('.animal-state-toggle').forEach(button => {
    button.addEventListener('click', () => {
        const details = button.nextElementSibling;
        details.style.display = details.style.display === 'none' ? 'block' : 'none';
    });
});
</script>

<script>
  // Recherche et filtres dynamiques habitat par nom
  const searchInput = document.getElementById('search-habitat');
searchInput.addEventListener('input', () => {
    const query = searchInput.value.toLowerCase();
    document.querySelectorAll('.habitat-card').forEach(card => {
        const name = card.querySelector('h3').textContent.toLowerCase();
        card.style.display = name.includes(query) ? '' : 'none';
    });
});
</script>

</body>
</html>