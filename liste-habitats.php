<!--!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Habitats</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Liste des Habitats</h1>
    <div class="habitats">
        <!?php foreach ($habitats as $habitat): ?>
            <div class="habitat-card">
                <img src="<!?= json_decode($habitat['images'])[0] ?>" alt="<!?= htmlspecialchars($habitat['nom']) ?>">
                <h2><!?= htmlspecialchars($habitat['nom']) ?></h2>
                <a href="./details-habitat.php?id=<!?= $habitat['id'] ?>">Voir les détails</a>
            </div>
        <!?php endforeach; ?>
    </div>

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
</html>-->

<!--!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des habitats</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/script.js" defer></script>
</head>
<body>
    <h1>Liste des Habitats</h1>
    <div class="habitats-list"></div>
</body>
</html>

<!?php
include 'includes/db-connection.php';

// Récupérer tous les habitats
$sql = "SELECT id, nom, JSON_UNQUOTE(JSON_EXTRACT(images, '$[0]')) AS image FROM habitats";
$stmt = $pdo->query($sql);

echo '<div class="habitats-list">';
while ($habitat = $stmt->fetch()) {
    echo '<div class="habitat">';
    echo '<img src="./assets/images/' . $habitat['image'] . '" alt="' . htmlspecialchars($habitat['nom']) . '">';
    echo '<h3>' . htmlspecialchars($habitat['nom']) . '</h3>';
    echo '<a href="details-habitat.php?id=' . $habitat['id'] . '">Voir détails</a>';
    echo '</div>';
}
echo '</div>';
?>-->
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

<?php 
include 'includes/db-connection.php';

// Récupérer l'ID depuis l'URL
$animalId = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Récupérer les détails de l'animal
$sql = "SELECT prenom, race, images FROM animaux WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$animalId]);
$animal = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<style>
  body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
    color: #333;
}

.container {
    max-width: 900px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 32px;
    color: #2c3e50;
    margin-bottom: 10px;
    text-align: center;
}

.animal-images {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
    margin-top: 20px;
}

/*.animal-images img {
    width: 150px;
    height: auto;
    border-radius: 8px;
    border: 2px solid #ddd;
    transition: transform 0.3s ease;
}*/

/**/
.animal-images img {
    height: 150px; /* Fixez une hauteur pour uniformiser */
    width: auto;   /* Permet à la largeur de s'ajuster */
    object-fit: cover; /* Découpe l'image pour remplir les dimensions */
    border-radius: 8px;
    border: 2px solid #ddd;
    transition: transform 0.3s ease;
}
/**/

.animal-images img:hover {
    transform: scale(1.1);
    border-color: #3498db;
}

.reports-section {
    margin-top: 40px;
}

h2 {
    font-size: 28px;
    color: #34495e;
    margin-bottom: 20px;
}

.report-card {
    background-color: #f9f9f9;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    margin-bottom: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.report-card p {
    margin: 5px 0;
}

.report-card strong {
    color: #2c3e50;
}

.error {
    color: #e74c3c;
    font-weight: bold;
    text-align: center;
    margin-top: 30px;
}
</style>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'animal</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <?php if ($animal): ?>
            <div class="animal-details">
                <h1><?= htmlspecialchars($animal['prenom']) ?> (<?= htmlspecialchars($animal['race']) ?>)</h1>
                <div class="animal-images">
                    <?php
                    $images = json_decode($animal['images']);
                    foreach ($images as $image):
                    ?>
                        <img src="assets/images/<?= htmlspecialchars($image) ?>" alt="<?= htmlspecialchars($animal['prenom']) ?>" onerror="this.src='assets/images/placeholder.jpg';">
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class="reports-section">
                <h2>Rapports vétérinaires</h2>
                <?php
                $sqlReports = "SELECT etat, nourriture, grammage, date, detail_etat FROM rapports_veterinaires WHERE animal_id = ?";
                $stmtReports = $pdo->prepare($sqlReports);
                $stmtReports->execute([$animalId]);
                
                while ($report = $stmtReports->fetch()):
                ?>
                    <div class="report-card">
                        <p><strong>État :</strong> <?= htmlspecialchars($report['etat']) ?></p>
                        <p><strong>Nourriture :</strong> <?= htmlspecialchars($report['nourriture']) ?> (<?= $report['grammage'] ?> g)</p>
                        <p><strong>Date :</strong> <?= htmlspecialchars($report['date']) ?></p>
                        <?php if ($report['detail_etat']): ?>
                            <p><strong>Détails :</strong> <?= htmlspecialchars($report['detail_etat']) ?></p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <p class="error">Animal non trouvé.</p>
        <?php endif; ?>
    </div>
<!--</body>
</html>-->

<?php
include 'includes/db-connection.php';

try {
    // Récupérer tous les habitats
    $sql = "SELECT id, nom, JSON_UNQUOTE(JSON_EXTRACT(images, '$[0]')) AS image FROM habitats";
    $stmt = $pdo->query($sql);

    // Initialiser la variable $habitats en tant que tableau
    $habitats = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    // Gestion des erreurs de connexion ou d'exécution
    echo "<p>Erreur lors de la récupération des habitats : " . htmlspecialchars($e->getMessage()) . "</p>";
    $habitats = []; // Si erreur, $habitats est un tableau vide pour éviter des warnings
}

?>
<<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Habitats</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h1>Liste des Habitats</h1>
    <div class="habitats">
        <?php if (!empty($habitats)): ?>
            <?php foreach ($habitats as $habitat): ?>
                <div class="habitat-card">
                    <img src="./assets/images/<?= htmlspecialchars($habitat['image']) ?>" alt="<?= htmlspecialchars($habitat['nom']) ?>">
                    <h2><?= htmlspecialchars($habitat['nom']) ?></h2>
                    <a href="./details-habitat.php?id=<?= $habitat['id'] ?>">Voir les détails</a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun habitat trouvé.</p>
        <?php endif; ?>
    </div>
</body>
</html>












<!--------------------------------------------------------------------------------------------------------------------->

<?php
include 'includes/db-connection.php';

// Récupérer l'ID depuis l'URL
$animalId = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Récupérer les détails de l'animal
$sql = "SELECT prenom, race, images FROM animaux WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$animalId]);
$animal = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'animal</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 10px;
            text-align: center;
        }

        .animal-images {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }

        /*.animal-images img {
            width: 150px;
            height: auto;
            border-radius: 8px;
            border: 2px solid #ddd;
            transition: transform 0.3s ease;
        }*/



        .animal-images img {
    height: 150px; /* Fixez une hauteur pour uniformiser */
    width: auto;   /* Permet à la largeur de s'ajuster */
    object-fit: cover; /* Découpe l'image pour remplir les dimensions */
    border-radius: 8px;
    border: 2px solid #ddd;
    transition: transform 0.3s ease;
}





        .animal-images img:hover {
            transform: scale(1.1);
            border-color: #3498db;
        }

        .reports-section {
            margin-top: 40px;
        }

        h2 {
            font-size: 28px;
            color: #34495e;
            margin-bottom: 20px;
        }

        .report-card {
            background-color: #f9f9f9;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .report-card p {
            margin: 5px 0;
        }

        .report-card strong {
            color: #2c3e50;
        }

        .error {
            color: #e74c3c;
            font-weight: bold;
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if ($animal): ?>
            <div class="animal-details">
                <h1><?= htmlspecialchars($animal['prenom']) ?> (<?= htmlspecialchars($animal['race']) ?>)</h1>
                <div class="animal-images">
                    <?php
                    $images = json_decode($animal['images'], true);
                    if (!empty($images)) {
                        foreach ($images as $image) {
                            echo '<img src="assets/images/' . htmlspecialchars($image) . '" alt="' . htmlspecialchars($animal['prenom']) . '" onerror="this.src=\'assets/images/placeholder.jpg\';">';
                        }
                    } else {
                        echo '<img src="assets/images/placeholder.jpg" alt="Image par défaut">';
                    }
                    ?>
                </div>
            </div>
            
            <div class="reports-section">
                <h2>Rapports vétérinaires</h2>
                <?php
                $sqlReports = "SELECT etat, nourriture, grammage, date, detail_etat FROM rapports_veterinaires WHERE animal_id = ?";
                $stmtReports = $pdo->prepare($sqlReports);
                $stmtReports->execute([$animalId]);
                
                $reports = $stmtReports->fetchAll();
                if ($reports) {
                    foreach ($reports as $report) {
                        echo '<div class="report-card">';
                        echo '<p><strong>État :</strong> ' . htmlspecialchars($report['etat']) . '</p>';
                        echo '<p><strong>Nourriture :</strong> ' . htmlspecialchars($report['nourriture']) . ' (' . htmlspecialchars($report['grammage']) . ' g)</p>';
                        echo '<p><strong>Date :</strong> ' . htmlspecialchars($report['date']) . '</p>';
                        if (!empty($report['detail_etat'])) {
                            echo '<p><strong>Détails :</strong> ' . htmlspecialchars($report['detail_etat']) . '</p>';
                        }
                        echo '</div>';
                    }
                } else {
                    echo '<p>Aucun rapport vétérinaire trouvé.</p>';
                }
                ?>
            </div>
        <?php else: ?>
            <p class="error">Animal non trouvé.</p>
        <?php endif; ?>
    </div>
</body>
</html>


<?php
include 'includes/db-connection.php';

// Récupérer l'ID depuis l'URL
$animalId = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Récupérer les détails de l'animal
$sql = "SELECT prenom, race, images FROM animaux WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$animalId]);
$animal = $stmt->fetch();

if (!$animal) {
    echo "<p class='error'>Animal non trouvé.</p>";
    exit;
}

// Récupérer les rapports vétérinaires
//$sqlReports = "SELECT etat, nourriture, grammage, date, detail_etat FROM rapports_veterinaires WHERE animal_id = ?";
//$stmtReports = $pdo->prepare($sqlReports);
//$stmtReports->execute([$animalId]);
//$reports = $stmtReports->fetchAll();
//?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'animal</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Styles ici */
    </style>
</head>
<body>
    <div class="container">
        <!--<div class="animal-details">
            <h1><!?= htmlspecialchars($animal['prenom']) ?> (<!?= htmlspecialchars($animal['race']) ?>)</h1>
            <div class="animal-images">
                <!?php
                $images = json_decode($animal['images'], true);
                if (!empty($images)) {
                    foreach ($images as $image) {
                        echo '<img src="assets/images/' . htmlspecialchars($image) . '" alt="' . htmlspecialchars($animal['prenom']) . '" onerror="this.src=\'assets/images/placeholder.jpg\';">';
                    }
                } else {
                    echo '<img src="assets/images/placeholder.jpg" alt="Image par défaut">';
                }
                ?>
            </div>
        </div>-->

        <!--<div class="reports-section">
            <h2>Rapports vétérinaires</h2>
            <!?php if ($reports): ?>
                <!?php foreach ($reports as $report): ?>
                    <div class="report-card">
                        <p><strong>État :</strong> <!?= htmlspecialchars($report['etat']) ?></p>
                        <p><strong>Nourriture :</strong> <!?= htmlspecialchars($report['nourriture']) ?> (<!?= $report['grammage'] ?> g)</p>
                        <p><strong>Date :</strong> <!?= htmlspecialchars($report['date']) ?></p>
                        <!?php if ($report['detail_etat']): ?>
                            <p><strong>Détails :</strong> <!?= htmlspecialchars($report['detail_etat']) ?></p>
                        <!?php endif; ?>
                    </div>
                <!?php endforeach; ?>
            <!?php else: ?>
                <p>Aucun rapport vétérinaire disponible.</p>
            <!?php endif; ?>
        </div>-->
    </div>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des habitats</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/script.js" defer></script>
</head>
<body>
    <h1>Liste des Habitats</h1>
    <div class="habitats-list"></div>
</body>
</html>


<?php
include 'includes/db-connection.php';

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
