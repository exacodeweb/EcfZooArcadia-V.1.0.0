<!--?php
 include 'includes/db-connection.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    die("Habitat non trouvé.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'habitat</title>   -->
<!--<link rel="stylesheet" href="assets/css/styles.css">--> <!--
    <link rel="stylesheet" href="./zoo_system/assets/css/style.css">
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const habitatId = <!?= json_encode($id) ?>;
            //fetch(`api/get-habitat-details.php?id=${habitatId}`)
            fetch('./zoo_system/get-habitat.php?id=${habitatId}')
                .then(response => response.json())
                .then(data => {
                    document.querySelector("h1").textContent = data.nom;
                    document.querySelector(".description").textContent = data.description;

                    const animalsList = document.querySelector(".animals-list");
                    data.animaux.forEach(animal => {
                        const div = document.createElement("div");
                        div.className = "animal";
                        div.innerHTML = `
                            <img src="./assets/images/${animal.image}" alt="${animal.prenom}">
                            <h3>${animal.prenom} (${animal.race})</h3>
                            <a href="details-animal.php?id=${animal.id}">Voir détails</a>
                        `;
                        animalsList.appendChild(div);
                    });
                });
        });
    </script>
</head>
<body>
    <h1>Chargement...</h1>
    <p class="description"></p>
    <div class="animals-list"></div>

</body>
</html> -->

<!-- version 2 -->
<!--?php

include 'includes/db-connection.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    die("Habitat non trouvé.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'habitat</title>  
    <link rel="stylesheet" href="./zoo_system/assets/css/style.css">

    <style>

/* Global Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

/* Heading and Description */
h1 {
    text-align: center;
    color: #2c3e50;
    font-size: 2em;
    margin-bottom: 10px;
}

.description {
    text-align: center;
    font-size: 1.2em;
    color: #555;
    margin-bottom: 20px;
}

/* Animals List */
.animals-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    margin-top: 20px;
}

.animal-card {
    background: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    text-align: center;
    padding: 15px;
    max-width: 200px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s, box-shadow 0.2s;
}

.animal-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.animal-card img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    margin-bottom: 10px;
}

.animal-card h3 {
    font-size: 1.1em;
    color: #2c3e50;
    margin-bottom: 10px;
}

.animal-card .btn {
    display: inline-block;
    padding: 8px 12px;
    background: #3498db;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-size: 0.9em;
    transition: background 0.2s;
}

.animal-card .btn:hover {
    background: #2980b9;
}

/* Error Message */
.error {
    text-align: center;
    color: #e74c3c;
    font-size: 1.2em;
    margin-top: 20px;
}
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const habitatId = <-?= json_encode($id) ?>;
            fetch('./zoo_system/get-habitat.php?id=' + habitatId)
                .then(response => response.json())
                .then(data => {
                    document.querySelector("h1").textContent = data.nom;
                    document.querySelector(".description").textContent = data.description;

                    const animalsList = document.querySelector(".animals-list");
                    data.animaux.forEach(animal => {
                        const div = document.createElement("div");
                        div.className = "animal-card";
                        div.innerHTML = `
                            <img src="./assets/images/${animal.image}" alt="${animal.prenom}">
                            <h3>${animal.prenom} (${animal.race})</h3>
                            <a href="details-animal.php?id=${animal.id}" class="btn">Voir détails</a>
                        `;
                        animalsList.appendChild(div);
                    });
                })
                .catch(error => {
                    document.querySelector(".error").textContent = "Impossible de charger les données.";
                });
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>Chargement...</h1>
        <p class="description"></p>
        <div class="animals-list"></div>
        <p class="error"></p>
    </div>
</body>
</html> -->

<!-------------------------------------------------------------------------------- version 3 -->
<!--?php
include 'includes/db-connection.php';

$id = $_GET['id'] ?? null;
if (!$id) {
  die("Habitat non trouvé.");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Détails de l'habitat</title>
  <link rel="stylesheet" href="./zoo_system/assets/css/style.css">  -->


  <!---------------------------------------------------------->
  <!--------------------------------------------------------------- <style>
    /* Global Styles */ /*
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
      color: #333;
    }

    .container {
      max-width: 1200px;
      margin: 20px auto;
      padding: 20px;
      background: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }*/

    /* Heading and Description *//*
    h1 {
      text-align: center;
      color: #2c3e50;
      font-size: 2em;
      margin-bottom: 10px;
    }

    .description {
      text-align: center;
      font-size: 1.2em;
      color: #555;
      margin-bottom: 20px;
    }*/

    /* Animals List 
    .animals-list {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      margin-top: 20px;
    }

    .animal-card {
      background: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 8px;
      text-align: center;
      padding: 15px;
      max-width: 200px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .animal-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .animal-card img {
      width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .animal-card h3 {
      font-size: 1.1em;
      color: #2c3e50;
      margin-bottom: 10px;
    }*/
/*------------------------------------------------------------------------------
    .animal-card .btn {
      display: inline-block;
      padding: 8px 12px;
      background: #3498db;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      font-size: 0.9em;
      transition: background 0.2s;
    }

    .animal-card .btn:hover {
      background: #2980b9;
    }

    /* Error Message */
    .error {
      text-align: center;
      color: #e74c3c;
      font-size: 1.2em;
      margin-top: 20px;
    }
  </style> -->
  <!---------------------------------------------------------->

<!--

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const habitatId = <!?= json_encode($id) ?>;

      // Requête pour obtenir les détails de l'habitat
      fetch(`../zoo_system/api/get-habitat-details.php?id=${habitatId}`)
        .then(response => response.json())
        .then(data => {
          if (!data) {
            document.querySelector(".error").textContent = "Habitat non trouvé.";
            return;
          }

          // Affichage des détails de l'habitat
          document.querySelector("h1").textContent = data.nom;
          document.querySelector(".description").textContent = data.description;

          // Affichage des animaux associés
          const animalsList = document.querySelector(".animals-list");
          data.animaux.forEach(animal => {
            const div = document.createElement("div");
            div.className = "animal-card";
            div.innerHTML = `
                            <img src="./assets/images/${animal.image}" alt="${animal.prenom}" onerror="this.src='./assets/images/placeholder.jpg';">
                            <h3>${animal.prenom} (${animal.race})</h3>
                            <a href="details-animal.php?id=${animal.id}" class="btn">Voir détails</a>
                        `;
            animalsList.appendChild(div);
          });
        })
        .catch(error => {
          console.error("Erreur lors de la récupération des données :", error);
          document.querySelector(".error").textContent = "Impossible de charger les données.";
        });
    });
  </script>
</head>

<body>
  <div class="container">
    <h1>Chargement...</h1>
    <p class="description"></p>
    <div class="animals-list"></div>
    <p class="error"></p>
  </div>
</body>

</html>-->






<!--------------------------------------------------- version 3 ok ------------------------------------------------------------->

<!--?php
include './includes/db-connection.php';

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
  <h1><!?= htmlspecialchars($habitat_details[0]['habitat_nom']) ?></h1>
  <p><!?= htmlspecialchars($habitat_details[0]['description']) ?></p>
  <div class="habitat-images">
    <!?php foreach (json_decode($habitat_details[0]['habitat_images']) as $image): ?>
      <img src="<!?= $image ?>" alt="Image de l'habitat">
    <!?php endforeach; ?>
  </div>
  <h2>Animaux présents :</h2>
  <div class="animals">
    <!?php foreach ($habitat_details as $detail): ?>
      <!?php if ($detail['animal_id']): ?>
        <div class="animal-card">
          <img src="<!?= json_decode($detail['animal_images'])[0] ?>" alt="<!?= htmlspecialchars($detail['prenom']) ?>">
          <h3><!?= htmlspecialchars($detail['prenom']) ?> (<!?= htmlspecialchars($detail['race']) ?>)</h3>
          <a href="details-animal.php?id=<!?= $detail['animal_id'] ?>">Voir les détails</a>
        </div>
      <!?php endif; ?>
    <!?php endforeach; ?>
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

<br> --><!--------------------------------------------------------------------------------------------------------------->
<!--?php
include 'includes/db-connection.php';

// Récupérer l'ID depuis l'URL
$habitatId = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Récupérer les détails de l'habitat
$sql = "SELECT nom, description, images FROM habitats WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$habitatId]);
$habitat = $stmt->fetch();

if ($habitat) {
  echo '<h1>' . htmlspecialchars($habitat['nom']) . '</h1>';
  echo '<p>' . htmlspecialchars($habitat['description']) . '</p>';

  // Afficher les images
  $images = json_decode($habitat['images']);
  foreach ($images as $image) {
    echo '<img src="assets/images/' . htmlspecialchars($image) . '" alt="' . htmlspecialchars($habitat['nom']) . '">';
  }

  // Afficher les animaux associés
  echo '<h2>Animaux dans cet habitat</h2>';
  $sqlAnimals = "SELECT id, prenom, race, JSON_UNQUOTE(JSON_EXTRACT(images, '$[0]')) AS image FROM animaux WHERE habitat_id = ?";
  $stmtAnimals = $pdo->prepare($sqlAnimals);
  $stmtAnimals->execute([$habitatId]);

  while ($animal = $stmtAnimals->fetch()) {
    echo '<div class="animal">';
    echo '<img src="assets/images/' . $animal['image'] . '" alt="' . htmlspecialchars($animal['prenom']) . '">';
    echo '<h3>' . htmlspecialchars($animal['prenom']) . ' (' . htmlspecialchars($animal['race']) . ')</h3>';
    echo '<a href="details-animal.php?id=' . $animal['id'] . '">Voir détails</a>';
    echo '</div>';
  }
} else {
  echo '<p>Habitat non trouvé.</p>';
}
?>-->
<!------------------------------------------------------fonctionne ok-------------------------------------------------->
<!--!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Détails de l'Habitat</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
  <div class="container">
    <!?php
    include 'includes/db-connection.php';

    // Récupérer l'ID depuis l'URL
    $habitatId = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // Récupérer les détails de l'habitat
    $sql = "SELECT nom, description, images FROM habitats WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$habitatId]);
    $habitat = $stmt->fetch();

    if ($habitat) {
      echo '<div class="habitat-details">';
      echo '<h1>' . htmlspecialchars($habitat['nom']) . '</h1>';
      echo '<p>' . htmlspecialchars($habitat['description']) . '</p>';

      // Afficher les images
      $images = json_decode($habitat['images']);
      echo '<div class="images">';
      foreach ($images as $image) {
        echo '<img src="assets/images/' . htmlspecialchars($image) . '" alt="' . htmlspecialchars($habitat['nom']) . '">';
      }
      echo '</div>';
      echo '</div>';

      // Afficher les animaux associés
      echo '<h2>Animaux dans cet habitat</h2>';
      $sqlAnimals = "SELECT id, prenom, race, JSON_UNQUOTE(JSON_EXTRACT(images, '$[0]')) AS image FROM animaux WHERE habitat_id = ?";
      $stmtAnimals = $pdo->prepare($sqlAnimals);
      $stmtAnimals->execute([$habitatId]);

      echo '<div class="animal-list">';
      while ($animal = $stmtAnimals->fetch()) {
        echo '<div class="animal-card">';
        echo '<img src="assets/images/' . $animal['image'] . '" alt="' . htmlspecialchars($animal['prenom']) . '">';
        echo '<h3>' . htmlspecialchars($animal['prenom']) . ' (' . htmlspecialchars($animal['race']) . ')</h3>';
        echo '<a href="details-animal.php?id=' . $animal['id'] . '" class="btn">Voir détails</a>';
        echo '</div>';
      }
      echo '</div>';
    } else {
      echo '<p class="error">Habitat non trouvé.</p>';
    }
    ?>
  </div>
</body>

</html> -->

<!--------------------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'Habitat</title>
    <link rel="stylesheet" href="assets/css/styles.css">

  <style>
    /* Global Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
    color: #333;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

h1, h2, p {
    text-align: center;
    color: #2c3e50;
}

/* Habitat Details Section */
.habitat-details {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.habitat-details p {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
}

/* Images Section */
.images {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
    margin-top: 20px;


}

.images img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-height: 200px;
    /* ajouter par moi */
    height: 200px;
    object-fit: cover;
    width: 30%;
}

/* Animal List Section */
.animal-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.animal-card {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    max-width: 200px;
    text-align: center;
    padding: 15px;
}

.animal-card img {
    /*width: 100%;*/
    border-radius: 8px;
    /*height: auto;*/
    max-height: 150px;

        /* ajouter par moi */
        height: 150px;
        object-fit: cover;
        /*width: 100%;*/
        max-width: 200px;
        width: 200px;

}

.animal-card h3 {
    font-size: 18px;
    margin: 10px 0;
    color: #2c3e50;
}

.animal-card .btn {
    display: inline-block;
    padding: 10px 15px;
    background: #3498db;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 10px;
    font-size: 14px;
}

.animal-card .btn:hover {
    background: #2980b9;
}

/* Error Message */
.error {
    text-align: center;
    color: #e74c3c;
    font-size: 18px;
}


/*-- Responsive --*/
@media (max-width: 768px) {
.images {
  display: flex;
  flex-direction: column;
}

.images img {
  max-width: 500px !important;
  width: 100% !important;
}

.animal-card  {
  display: flex;
  flex-direction: column;
  max-width: 100%;
  width: 100%;
}

.img {
  display: flex;
  flex-direction: column;
  max-width: 500px;
  width: 100% !important;

}
}
  </style>

</head>
<body>
    <div class="container">
        <?php
        include 'includes/db-connection.php';

        // Récupérer l'ID depuis l'URL
        $habitatId = isset($_GET['id']) ? intval($_GET['id']) : 0;

        // Récupérer les détails de l'habitat
        $sql = "SELECT nom, description, images FROM habitats WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$habitatId]);
        $habitat = $stmt->fetch();

        if ($habitat) {
            echo '<div class="habitat-details">';
            echo '<h1>' . htmlspecialchars($habitat['nom']) . '</h1>';
            echo '<p>' . htmlspecialchars($habitat['description']) . '</p>';
            
            // Afficher les images
            $images = json_decode($habitat['images']);
            echo '<div class="images">';
            foreach ($images as $image) {
                echo '<img src="assets/images/' . htmlspecialchars($image) . '" alt="' . htmlspecialchars($habitat['nom']) . '">';             
              }
            
            echo '</div>';
            echo '</div>';

            // Afficher les animaux associés
            echo '<h2>Animaux dans cet habitat</h2>';
            $sqlAnimals = "SELECT id, prenom, race, JSON_UNQUOTE(JSON_EXTRACT(images, '$[0]')) AS image FROM animaux WHERE habitat_id = ?";
            $stmtAnimals = $pdo->prepare($sqlAnimals);
            $stmtAnimals->execute([$habitatId]);

            echo '<div class="animal-list">';
            while ($animal = $stmtAnimals->fetch()) {
                echo '<div class="animal-card">';
                echo '<img src="assets/images/' . $animal['image'] . '" alt="' . htmlspecialchars($animal['prenom']) . '">';
                echo '<h3>' . htmlspecialchars($animal['prenom']) . ' (' . htmlspecialchars($animal['race']) . ')</h3>';
                echo '<a href="details-animal.php?id=' . $animal['id'] . '" class="btn">Voir détails</a>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo '<p class="error">Habitat non trouvé.</p>';
        }
        ?>
    </div>
</body>
</html>