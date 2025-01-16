<?php
include 'includes/db-connection.php';

// Récupérer tous les habitats
$sql = "SELECT id, nom, JSON_UNQUOTE(JSON_EXTRACT(images, '$[0]')) AS image FROM habitats";
$stmt = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Habitats</title>
    <link rel="stylesheet" href="assets/css/styles.css">

<style>
  /* Styles généraux */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

h1 {
    font-size: 32px;
    color: #2c3e50;
    margin-bottom: 10px;
    text-align: center;
}

/* Conteneur de la liste des habitats */
.habitats-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
}

/* Carte individuelle d'habitat */
.habitat {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    text-align: center;
    width: 300px;
    transition: transform 0.2s, box-shadow 0.2s;
}

.habitat:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

/* Image des habitats */
.habitat img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

/* Titre de l'habitat */
.habitat h3 {
    margin: 10px 0;
    font-size: 1.2em;
    color: #333;
}

/* Bouton de détails */
.btn-details {
    display: inline-block;
    margin: 10px 0 20px;
    padding: 10px 15px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.2s;
}

.btn-details:hover {
    background-color: #0056b3;
}

/* Responsive */
@media (max-width: 768px) {
    .habitats-list {
        flex-direction: column;
        align-items: center;
    }

    .habitat {
        width: 90%;
    }
}

@media (min-width: 769px) and (max-width: 1200px) {
    .habitats-list {
        gap: 15px;
    }

    .habitat {
        width: 45%;
    }
}

</style>

</head>
<body>
<h1>Liste des Habitats</h1>
<div class="habitats-list"></div>

    <div class="habitats-list">
        <?php while ($habitat = $stmt->fetch()): ?>
            <div class="habitat">
                <img src="assets/images/<?= htmlspecialchars($habitat['image']) ?>" alt="<?= htmlspecialchars($habitat['nom']) ?>">
                <h3><?= htmlspecialchars($habitat['nom']) ?></h3>
                <a href="details-habitat.php?id=<?= $habitat['id'] ?>" class="btn-details">Voir détails</a>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>

