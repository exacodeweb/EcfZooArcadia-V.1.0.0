<?php
// Connexion à la base de données
// include '../pages/utilise.php';
include '../config/config.php';

if ($conn) {
    echo "Connexion réussie !";
} else {
    echo "Échec de la connexion.";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion des services</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;/*1200px*/
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    form {
      margin-bottom: 40px;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    form label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    form input[type="text"],
    form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    form input[type="file"] {
      margin-bottom: 15px;
    }

    form input[type="submit"] {
      padding: 12px 20px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      display: block;
      margin: 0 auto;
      transition: background-color 0.3s;
    }

    form input[type="submit"]:hover {
      background-color: #218838;
    }

    .service-list {
      margin-top: 40px;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    ul li {
      background-color: #f9f9f9;
      padding: 15px;
      margin-bottom: 10px;
      border: 1px solid #ddd;
      border-radius: 8px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: background-color 0.3s;
    }

    ul li:hover {
      background-color: #f1f1f1;
    }

    ul li a {
      color: #007bff;
      text-decoration: none;
      margin-right: 15px;
    }

    ul li a:hover {
      text-decoration: underline;
    }

    ul li .actions {
      display: flex;
    }

    @media (max-width: 768px) {
      .container {
        padding: 10px;
      }

      form input[type="submit"] {
        width: 100%;
      }

      ul li {
        flex-direction: column;
        align-items: flex-start;
      }

      ul li .actions {
        margin-top: 10px;
        width: 100%;
        display: flex;
        justify-content: space-between;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <!-- Formulaire d'ajout d'un service -->

  <!-- pour éviter les doublons --><!--
  <form action="./admin_services.php" method="post" onsubmit="this.querySelector('input[type=submit]').disabled = true;">
  --><!-- Contenu du formulaire -->

   
  <!-- pour éviter d'insérer un service déjà présent --><!--
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $image_path = $_POST['image_path'];
    $lien_service = $_POST['lien_service'];

    // Vérifier si le service existe déjà
    $stmt = $conn->prepare("SELECT COUNT(*) FROM services WHERE titre = ?");
    $stmt->execute([$titre]);
    $count = $stmt->fetchColumn();

    if ($count == 0) {
        // Insertion du service si non existant
        $stmt = $conn->prepare("INSERT INTO services (titre, description, image_path, lien_service) VALUES (?, ?, ?, ?)");
        $stmt->execute([$titre, $description, $image_path, $lien_service]);
        echo "Service ajouté avec succès !";
    } else {
        echo "Ce service existe déjà.";
    }
  }-->
  
  <!--
    <input type="submit" value="Ajouter le service">
  </form>-->


<h2>Ajouter un nouveau service</h2>
<form action="./admin_services.php" method="post" enctype="multipart/form-data">
    <label for="titre">Titre du service :</label>
    <input type="text" name="titre" required><br>

    <label for="description">Description :</label>
    <textarea name="description" required></textarea><br>

    <label for="image">Image du service :</label>
    <input type="file" name="image" accept="image/*" required><br>

    <label for="lien_service">Lien vers la page du service (facultatif) :</label>
    <input type="text" name="lien_service"><br>

    <input type="submit" value="Ajouter le service">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $lien_service = $_POST['lien_service'];

    // Gestion du téléversement d'image
    $image_path = '';
    if (!empty($_FILES['image']['name'])) {
        $target_dir = "../images/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image_path = $target_file;
        } else {
            echo "Erreur lors du téléversement de l'image.";
            exit();
        }
    }

    // Requête d'insertion
    $stmt = $conn->prepare("INSERT INTO services (titre, description, image_path, lien_service) VALUES (?, ?, ?, ?)");
    $stmt->execute([$titre, $description, $image_path, $lien_service]);

    // Redirection après l'ajout du service
    header('Location: admin_services.php');
    exit();
}
?>

</div>
</body>

</html>