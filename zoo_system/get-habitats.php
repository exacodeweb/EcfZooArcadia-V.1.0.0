<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Habitats</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Liste des Habitats</h1>
    <div class="habitats">
        <?php foreach ($habitats as $habitat): ?>
            <div class="habitat-card">
                <img src="<?= json_decode($habitat['images'])[0] ?>" alt="<?= htmlspecialchars($habitat['nom']) ?>">
                <h2><?= htmlspecialchars($habitat['nom']) ?></h2>
                <a href="details-habitat.php?id=<?= $habitat['id'] ?>">Voir les détails</a>
            </div>
        <?php endforeach; ?>
    </div>






    <?php
//include 'includes/db-connection.php';
include '../config/config.php';

// Récupérer tous les habitats
$sql = "SELECT id, nom, JSON_UNQUOTE(JSON_EXTRACT(images, '$[0]')) AS image FROM habitats";
$stmt = $pdo->query($sql);

echo '<div class="habitats-list">';
while ($habitat = $stmt->fetch()) {
    echo '<div class="habitat">';
    echo '<img src="assets/images/' . $habitat['image'] . '" alt="' . htmlspecialchars($habitat['nom']) . '">';
    echo '<h3>' . htmlspecialchars($habitat['nom']) . '</h3>';
    echo '<a href="details-habitat.php?id=' . $habitat['id'] . '">Voir détails</a>';
    echo '</div>';
}
echo '</div>';
?>










<script>
    // script.js Chargement dynamique des habitats (AJAX)
document.addEventListener('DOMContentLoaded', () => {
    const habitatContainer = document.getElementById('habitat-container');

    fetch('api/get-habitats.php')
        .then(response => response.json())
        .then(data => {
            data.forEach(habitat => {
                const habitatCard = document.createElement('div');
                habitatCard.classList.add('habitat-card');
                habitatCard.innerHTML = `
                    <img src="${habitat.images[0]}" alt="${habitat.nom}">
                    <h3>${habitat.nom}</h3>
                `;
                habitatCard.addEventListener('click', () => {
                    window.location.href = `details-habitat.php?id=${habitat.id}`;
                });
                habitatContainer.appendChild(habitatCard);
            });
        })
        .catch(error => console.error('Erreur lors du chargement des habitats:', error));
});
</script>

<script>
  // Effet au survol des cartes d’habitat 
  document.querySelectorAll('.habitat-card').forEach(card => {
    card.addEventListener('mouseover', () => {
        card.style.transform = 'scale(1.05)';
        card.style.transition = 'transform 0.3s';
    });
    card.addEventListener('mouseout', () => {
        card.style.transform = 'scale(1)';
    });
});
</script>

</body>
</html>

<!--
zoo/
│
├── index.php                 # Page d'accueil ou redirection vers `liste-habitats.php`
├── liste-habitats.php        # Page affichant tous les habitats (nom et image)
├── details-habitat.php       # Page affichant les détails d’un habitat (description et liste des animaux)
├── details-animal.php        # Page affichant les détails d’un animal (propriétés et rapports vétérinaires)
│
├── assets/
│   ├── css/
│   │   └── style.css         # Fichier CSS pour le style général du site
│   ├── images/
│   │   ├── habitats/         # Dossier pour les images des habitats
│   │   └── animaux/          # Dossier pour les images des animaux
│   └── js/
│       └── script.js         # Fichier JS si des fonctionnalités dynamiques sont ajoutées
│
├── includes/
│   ├── header.php            # En-tête du site (menu, logo, etc.)
│   ├── footer.php            # Pied de page du site
│   └── db-connection.php     # Fichier pour la connexion à la base de données
│
└── sql/
    └── create_tables.sql     # Script SQL pour créer les tables nécessaires




zoo_system/
├── api/
│   ├── get-habitats.php
│   ├── get-habitat-details.php
│   ├── get-animal-details.php
├── assets/
│   ├── css/
│   │   └── styles.css
│   ├── js/
│   │   └── script.js
│   └── images/
│       ├── habitat1.jpg
│       ├── habitat2.jpg
│       └── animal1.jpg
├── includes/
│   ├── db-connection.php
│   └── functions.php
├── index.php
├── liste-habitats.php
├── details-habitat.php
├── details-animal.php
└── README.md  
-->