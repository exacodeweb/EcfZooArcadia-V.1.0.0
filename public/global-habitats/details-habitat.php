<?php
$habitat_id = $_GET['id'];
$query = $pdo->prepare("
    SELECT h.nom AS habitat_nom, h.description, h.images AS habitat_images,
           a.id AS animal_id, a.prenom, a.race, a.images AS animal_images
    FROM habitats h
    LEFT JOIN animaux a ON h.id = a.habitat_id
    WHERE h.id = :id
");
$query->execute(['id' => $habitat_id]);
$habitat_details = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détail Habitat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?= htmlspecialchars($habitat_details[0]['habitat_nom']) ?></h1>
    <p><?= htmlspecialchars($habitat_details[0]['description']) ?></p>
    <div class="habitat-images">
        <?php foreach (json_decode($habitat_details[0]['habitat_images']) as $image): ?>
            <img src="<?= $image ?>" alt="Image de l'habitat">
        <?php endforeach; ?>
    </div>
    <h2>Animaux présents :</h2>
    <div class="animals">
        <?php foreach ($habitat_details as $detail): ?>
            <?php if ($detail['animal_id']): ?>
                <div class="animal-card">
                    <img src="<?= json_decode($detail['animal_images'])[0] ?>" alt="<?= htmlspecialchars($detail['prenom']) ?>">
                    <h3><?= htmlspecialchars($detail['prenom']) ?> (<?= htmlspecialchars($detail['race']) ?>)</h3>
                    <a href="details-animal.php?id=<?= $detail['animal_id'] ?>">Voir les détails</a>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

<script>
// script.js Chargement des détails d’un habitat
const urlParams = new URLSearchParams(window.location.search);
const habitatId = urlParams.get('id');

if (habitatId) {
    fetch(`api/get-habitat-details.php?id=${habitatId}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('habitat-name').textContent = data.nom;
            document.getElementById('habitat-description').textContent = data.description;

            const animalList = document.getElementById('animal-list');
            data.animaux.forEach(animal => {
                const animalItem = document.createElement('li');
                animalItem.textContent = `${animal.prenom} (${animal.race})`;
                animalItem.addEventListener('click', () => {
                    window.location.href = `details-animal.php?id=${animal.id}`;
                });
                animalList.appendChild(animalItem);
            });
        })
        .catch(error => console.error('Erreur lors du chargement des détails de l\'habitat:', error));
}
</script>

</body>
</html>