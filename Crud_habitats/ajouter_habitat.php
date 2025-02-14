<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Habitat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
        h2 {
            text-align: center;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .image-preview {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }
        .image-preview img {
            max-width: 100px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .btn {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><i class="fas fa-home"></i> Ajouter un Habitat</h2>
        <form method="post" enctype="multipart/form-data">
            <label>Nom de l'habitat :</label>
            <input type="text" name="nom" required>
            
            <label>Images :</label>
            <input type="file" name="images[]" id="images" accept="image/*" multiple required>
            <div class="image-preview" id="image-preview"></div>
            
            <label>Description :</label>
            <textarea name="description" required></textarea>
            
            <button type="submit" class="btn"><i class="fas fa-plus-circle"></i> Ajouter Habitat</button>
        </form>
    </div>
    
    <script>
    document.getElementById('images').addEventListener('change', function(event) {
        const previewContainer = document.getElementById('image-preview');
        previewContainer.innerHTML = '';

        const files = event.target.files;
        for (let i = 0; i < files.length; i++) {
            const file = files[i];

            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgElement = document.createElement('img');
                    imgElement.src = e.target.result;
                    previewContainer.appendChild(imgElement);
                }
                reader.readAsDataURL(file);
            }
        }
    });
    </script>
</body>
</html>
















<!--?php
//include 'config.php';
include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $description = $_POST["description"];
    //$images = json_encode(explode(',', $_POST["../assets/images"])); // Stockage en JSON
    $images = json_encode(explode(',', $_POST["images"])); 

    $stmt = $pdo->prepare("INSERT INTO habitats (nom, images, description) VALUES (?, ?, ?)");
    //$stmt = $pdo->prepare("INSERT INTO habitats SET nom = ?, images = ?, description = ? WHERE id = ?");
    if ($stmt->execute([$nom, $images, $description])) {
        echo "Habitat ajouté avec succès !";
    } else {
        echo "Erreur lors de l'ajout.";
    }
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<form method="post" enctype="multipart/form-data">
    <label>Nom de l'habitat :</label>
    <input type="text" name="nom" required><br>  -->


    <!--<label>Images :</label>-->
    <!--<input id="images" type="file" name="images" value="<!-?= implode(',', json_decode($habitat['images'], true)) ?>" accept="image/*" multiple  required><br>-->

    <!--
    <label>Images :</label>
    <input type="file" name="images[../assets/images/]" id="images" accept="image/*" multiple required><br>

    <div id="image-preview"></div> --> <!-- Section pour la prévisualisation des images --> <!--

    <label>Description :</label>
    <textarea name="description" required></textarea><br>

    <button type="submit">Ajouter Habitat</button>
</form>

<script>
// JavaScript pour prévisualiser les images avant de soumettre le formulaire
document.getElementById('images').addEventListener('change', function(event) {
    const previewContainer = document.getElementById('image-preview');
    previewContainer.innerHTML = ''; // Vider la zone de prévisualisation à chaque changement

    const files = event.target.files;
    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imgElement = document.createElement('img');
                imgElement.src = e.target.result;
                imgElement.style.maxWidth = '200px';
                imgElement.style.marginRight = '10px';
                previewContainer.appendChild(imgElement);
            }
            reader.readAsDataURL(file);
        }
    }
});
</script>

</body>
</html>

  -->







<!--?php 
include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $description = $_POST["description"];
    
    // Vérification si un fichier a été téléchargé
    if (isset($_FILES["images"]) && $_FILES["images"]["error"] == 0) {
        $dossierCible = "../assets/images/"; // Dossier de destination des images
        $nomFichier = basename($_FILES["images"]["name"]);
        $cheminFichier = $dossierCible . $nomFichier;

        // Vérifier si le fichier est une image
        $extensionsAutorisees = ["jpg", "jpeg", "png", "gif"];
        $extension = strtolower(pathinfo($nomFichier, PATHINFO_EXTENSION));

        if (in_array($extension, $extensionsAutorisees)) {
            // Déplacer le fichier vers le dossier cible
            if (move_uploaded_file($_FILES["images"]["tmp_name"], $cheminFichier)) {
                $images = json_encode([$cheminFichier]); // Stockage sous format JSON
            } else {
                echo "Erreur lors de l'upload de l'image.";
                exit;
            }
        } else {
            echo "Format d'image non autorisé.";
            exit;
        }
    } else {
        $images = json_encode([]); // Aucune image ajoutée
    }

    // Insertion dans la base de données
    $stmt = $pdo->prepare("INSERT INTO habitats (nom, images, description) VALUES (?, ?, ?)");
    if ($stmt->execute([$nom, $images, $description])) {
        echo "Habitat ajouté avec succès !";
    } else {
        echo "Erreur lors de l'ajout.";
    }
}
?> 

<form method="post" enctype="multipart/form-data">
  <h2>Ajouter un habitat</h2>
    <label>Nom de l'habitat :</label>
    <input type="text" name="nom" required><br>

    <label>Images :</label>
    <input type="file" name="images" accept="image/*" required><br>

    <label>Description :</label>
    <textarea name="description" required></textarea><br>

    <button type="submit">Ajouter Habitat</button>
</form>-->












<!--?php
//include 'config.php';
include '../config/database.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $stmt = $pdo->prepare("SELECT * FROM habitats WHERE id = ?");
    $stmt->execute([$id]);
    $habitat = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $description = $_POST["description"];
    $images = json_encode(explode(',', $_POST["images"]));

    $stmt = $pdo->prepare("INSERT INTO habitats SET nom = ?, images = ?, description = ? WHERE id = ?");
    if ($stmt->execute([$nom, $images, $description, $id])) {
        echo "Habitat modifié avec succès !";
    } else {
        echo "Erreur lors de la modification.";
    }
}
?>-->




<!--------------------------------------------------------------------------------------------------------------------->
<!--?php
//include 'config.php';
include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $description = $_POST["description"];
    //$images = json_encode(explode(',', $_POST["../assets/images"])); // Stockage en JSON
    $images = json_encode(explode(',', $_POST["images"])); 

    $stmt = $pdo->prepare("INSERT INTO habitats (nom, images, description) VALUES (?, ?, ?)");
    //$stmt = $pdo->prepare("INSERT INTO habitats SET nom = ?, images = ?, description = ? WHERE id = ?");
    if ($stmt->execute([$nom, $images, $description])) {
        echo "Habitat ajouté avec succès !";
    } else {
        echo "Erreur lors de l'ajout.";
    }
} 
?> -->
<!--------------------------------------------------------------------------------------------------------------------->
<!--<form method="post">
    <label>Nom de l'habitat :</label>
    <input type="text" name="nom" required><br>

    <label>Images (séparées par des virgules) :</label>
    <input type="text" name="images" required><br>

    <label>Description :</label>
    <textarea name="description" required></textarea><br>

    <button type="submit">Ajouter Habitat</button>
</form>-->



<!--?php 
//include 'config.php';
include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $description = $_POST["description"];
    $images = json_encode(explode(',', $_POST["images"])); // Stockage en JSON

    $stmt = $pdo->prepare("INSERT INTO habitats (nom, images, description) VALUES (?, ?, ?)");
    if ($stmt->execute([$nom, $images, $description])) {
        echo "Habitat ajouté avec succès !";
    } else {
        echo "Erreur lors de l'ajout.";
    }
}
?>-->
<!-------------------------------------------------------------------------------------------------------------------->
<!--<form method="post" enctype="multipart/form-data">
    <label>Nom de l'habitat :</label>
    <input type="text" name="nom" required><br> -->


    <!--<label>Images :</label>-->
    <!--<input id="images" type="file" name="images" value="<!-?= implode(',', json_decode($habitat['images'], true)) ?>" accept="image/*" multiple  required><br>-->

    <!--
    <label>Images :</label>
    <input type="file" name="images[../assets/images/]" id="images" accept="image/*" multiple required><br>

    <div id="image-preview"></div> --> <!-- Section pour la prévisualisation des images -->  <!--

    <label>Description :</label>
    <textarea name="description" required></textarea><br>

    <button type="submit">Ajouter Habitat</button>
</form>

<script>
// JavaScript pour prévisualiser les images avant de soumettre le formulaire
document.getElementById('images').addEventListener('change', function(event) {
    const previewContainer = document.getElementById('image-preview');
    previewContainer.innerHTML = ''; // Vider la zone de prévisualisation à chaque changement

    const files = event.target.files;
    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imgElement = document.createElement('img');
                imgElement.src = e.target.result;
                imgElement.style.maxWidth = '200px';
                imgElement.style.marginRight = '10px';
                previewContainer.appendChild(imgElement);
            }
            reader.readAsDataURL(file);
        }
    }
});
</script> -->
<!--------------------------------------------------------------------------------------------------------------------->

<!--<script>
// JavaScript pour prévisualisation des images avant de soumettre le formulaire
document.getElementById('images').addEventListener('change', function(event) {
    const previewContainer = document.getElementById('image-preview');
    previewContainer.innerHTML = ''; // Vider la zone de prévisualisation à chaque changement

    const files = event.target.files;
    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imgElement = document.createElement('img');
                imgElement.src = e.target.result;
                imgElement.style.maxWidth = '200px';
                imgElement.style.marginRight = '10px';
                previewContainer.appendChild(imgElement);
            }
            reader.readAsDataURL(file);
        }
    }
});
</script>-->



<!--?php
require_once '../config/database.php';//../config/config.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categorie = $_POST['categorie'];
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $photo_date = $_POST['photo_date'];
    
    // Gestion des fichiers
    $uploadDir = '../assets/images/';
    $uploadedFile = $uploadDir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFile);

    $images = json_encode([basename($_FILES['image']['name'])]);

    $sql = "INSERT INTO photos (categorie, nom, description, images, created_at, photo_date, approved) 
            VALUES (:categorie, :nom, :description, :images, NOW(), :photo_date, 0)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':categorie' => $categorie,
        ':nom' => $nom,
        ':description' => $description,
        ':images' => $images,
        ':photo_date' => $photo_date,
    ]);

    header('Location: read.php');
    exit;
}
?>
  -->








<!--?php 
//include 'config.php';
include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $description = $_POST["description"];

    // Vérification des fichiers d'images
    if (isset($_FILES['images'])) {
        $uploadedImages = [];
        foreach ($_FILES['images']['tmp_name'] as $index => $tmpName) {
            // Vérifier si un fichier a bien été téléchargé
            if ($_FILES['images']['error'][$index] === 0) {
                $fileName = $_FILES['images']['name'][$index];
                $fileTmp = $_FILES['images']['tmp_name'][$index];
                $filePath = '../uploads/' . $fileName;

                // Déplacer le fichier téléchargé
                if (move_uploaded_file($fileTmp, $filePath)) {
                    $uploadedImages[] = $filePath; // Ajouter le chemin de l'image
                } else {
                    echo "Erreur lors du téléchargement de l'image " . $fileName;
                }
            }
        }

        // Vérification que des images ont bien été ajoutées
        if (count($uploadedImages) > 0) {
            $images = json_encode($uploadedImages); // Stocker en JSON
        } else {
            $images = '[]'; // Si aucune image, on stocke un tableau vide
        }
    } else {
        $images = '[]'; // Si aucune image n'a été envoyée, stocker un tableau vide
    }

    // Insertion dans la base de données
    $stmt = $pdo->prepare("INSERT INTO habitats (nom, images, description) VALUES (?, ?, ?)");
    if ($stmt->execute([$nom, $images, $description])) {
        echo "Habitat ajouté avec succès !";
    } else {
        echo "Erreur lors de l'ajout.";
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <label>Nom de l'habitat :</label>
    <input type="text" name="nom" required><br>

    <label>Images :</label>
    <input type="file" name="images[]" id="images" accept="image/*" multiple><br>

    <div id="image-preview"></div> --><!-- Section pour prévisualisation --><!--

    <label>Description :</label>
    <textarea name="description" required></textarea><br>

    <button type="submit">Ajouter Habitat</button>
</form>

<script>
// JavaScript pour prévisualisation des images avant de soumettre le formulaire
document.getElementById('images').addEventListener('change', function(event) {
    const previewContainer = document.getElementById('image-preview');
    previewContainer.innerHTML = ''; // Vider la zone de prévisualisation à chaque changement

    const files = event.target.files;
    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imgElement = document.createElement('img');
                imgElement.src = e.target.result;
                imgElement.style.maxWidth = '200px';
                imgElement.style.marginRight = '10px';
                previewContainer.appendChild(imgElement);
            }
            reader.readAsDataURL(file);
        }
    }
});
</script>





Warning: move_uploaded_file(../uploads/savane1.jpg): Failed to open stream: No such file or directory in C:\xampp\htdocs\EcfZooArcadia-V.1.0.0\Crud_habitats\ajouter_habitat.php on line 123

Warning: move_uploaded_file(): Unable to move "C:\xampp\tmp\phpB68.tmp" to "../uploads/savane1.jpg" in C:\xampp\htdocs\EcfZooArcadia-V.1.0.0\Crud_habitats\ajouter_habitat.php on line 123
Erreur lors du téléchargement de l'image savane1.jpgHabitat ajouté avec succès !
Nom de l'habitat : 

Images : Aucun fichier choisi
Description : 

Ajouter Habitat
