<?php
//include 'config.php';
include '../config/database.php';

$stmt = $pdo->query("SELECT * FROM habitats");
$habitats = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Liste des Habitats</h2>
<table border-radius="1">
  <tr>
    <th>Habitats</th><!-- Nom -->
    <th>Images</th>
    <th>Description</th>
    <th>Actions</th>
  </tr>
  <?php foreach ($habitats as $habitat): ?>
    <tr>
      <td><?= htmlspecialchars($habitat["nom"]) ?></td>
      <td>
        <?php
        $images = json_decode($habitat["images"], true);
        foreach ($images as $image) {
          echo "<img src='../assets/images/$image'width='80' height='50'>";
        }
        ?>
      </td>
      <td><?= htmlspecialchars($habitat["description"]) ?></td>
      <td>
        <a href="modifier_habitat.php?id=<?= $habitat['id'] ?>">Modifier</a> |
        <a href="supprimer_habitat.php?id=<?= $habitat['id'] ?>" onclick="return confirm('Supprimer cet habitat ?')">Supprimer</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>










<!--!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des Habitats</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 20px;
      text-align: center;
    }
    h2 {
      color: #333;
    }
    table {
      width: 100%;
      max-width: 1300px;
      margin: 20px auto;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
      border-radius: 8px;
      overflow: hidden;
    }
    th, td {
      padding: 12px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }
    th {
      background: #007bff;
      color: white;
      text-align: center;
    }

    /*td {
      display: inline;
    }*/

    tr:hover {
      background: #f1f1f1;
    }
    img {
      max-width: 100px;
      height: auto;
      border-radius: 5px;
    }
    .actions a {
      text-decoration: none;
      padding: 6px 12px;
      margin: 5px;
      border-radius: 5px;
      color: white;
      font-weight: bold;

    }
    .edit {
      background: #28a745;
    }
    .delete {
      background: #dc3545;
    }
    .actions a:hover {
      opacity: 0.8;
    }
  </style>
</head>

<body>
<!?php
include '../config/database.php';
$stmt = $pdo->query("SELECT * FROM habitats");
$habitats = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Liste des Habitats</h2>
<table>
    <tr>
        <th>Nom</th>
        <th>Images</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    <!?php foreach ($habitats as $habitat): ?>
        <tr>
            <td><!?= htmlspecialchars($habitat["nom"]) ?></td>
            <td>
                <!?php 
                $images = json_decode($habitat["images"], true);
                foreach ($images as $image) {
                    echo "<img src='../assets/images/$image' alt='Habitat'>";
                }
                ?>
            </td>
            <td><!?= htmlspecialchars($habitat["description"]) ?></td>
            <td class="actions">
                <a href="modifier_habitat.php?id=<!?= $habitat['id'] ?>" class="edit"><i class="fas fa-edit"></i> Modifier</a>
                <a href="supprimer_habitat.php?id=<!?= $habitat['id'] ?>" class="delete" onclick="return confirm('Supprimer cet habitat ?')"><i class="fas fa-trash"></i> Supprimer</a>
            </td>
        </tr>
    <!?php endforeach; ?>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>  -->





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- Ajoutez les styles de typographie ici -->
  <link rel="stylesheet" href="../fonts/fonts-style-1.css" type="text/css">

  <!--<style>
    /* Styles généraux */ 
    body {
      font-family: Arial, sans-serif;
      background-color: #F5F5DC;/*#f8f9fa*/
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      /*justify-content: center;*/
      align-items: center;
      /*border: 1px solid red;*/
    }*/

    /*body {
        background: beige;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0; /* Évite les marges par défaut du body *//*
      }*/

    /* Conteneur principal */
    .container {
      display: flex;
      flex-direction: column;
      /*justify-content: center; */
      /*border: 1px solid red;*/
    }

    /*.container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      
        max-width: 100%;
        width: 90%;
        background: #ffffff;
        /*border: 1px solid red;*//*

        padding: 20px; 
      }*/

      .content {
      /*max-width: 1000px;*/
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 100%;
      width: 90%;
      /*border: dashed orange 8px;*/
    }

    /* Titres */
    h2 {
      color: #343a40;
      text-align: center;
      margin-bottom: 20px;
    }

    /* Bouton ajouter */
    .btn-success {
      font-weight: bold;
      border-radius: 5px;
    }

    /* Table */
    .table {
      margin-top: 10px;
      border-collapse: collapse;
      width: 100%;
      background: white;
    }

    .table th {
      background-color: #343a40;
      color: white;
      text-align: center;
      padding: 10px;
    }

    .table, td {
      padding: 2px;/*10px*/
      text-align: center;
      border-bottom: 1px solid #dee2e6;
    }

    td th {
      border-collapse: collapse !important;
    }

    /* Actions */
    .btn-sm {
      margin-right: 5px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .container {
        padding: 10px;
      }

      .table-responsive {
        overflow-x: auto;
      }

      .btn-sm {
        display: block;
        margin-bottom: 5px;
      }
    }

    table tr td,
    th {
      border: 1px solid black;

    }

    th {
      background: lightgrey;
      text-align: center;
    }

    header {
      background-color: #007bff;
      color: white;
      padding: 0.5rem 0;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    header .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    header h1 {
      font-size: 1.5rem;
    }

    header a {
      background-color: white;
      color: #007bff;
      padding: 0.5rem 1rem;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
    }

    header a:hover {
      background-color: #e9ecef;
    }
  </style>-->


  <style>
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;

      max-width: 100%;
      width: 90%;
      background: #ffffff;
      /*border: 1px solid red;*/

      padding: 20px;
    }











    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      /**/
      /*#F5F5DC*/
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      /*justify-content: center;*/
      align-items: center;
      /*border: 1px solid red;*/
    }

    */
    /*body {
        background: beige;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0; /* Évite les marges par défaut du body */
    /*
      }*/


    /* body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 20px;
      text-align: center;
    }*/
    h2 {
      color: #333;
    }

    table {
      width: 100%;
      max-width: 1300px;
      margin: 20px auto;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
    }

    th,
    td {
      padding: 6px;
      /*12px*/
      border-bottom: 1px solid #ddd;
      text-align: left;

      width: auto;
    }

    th {
      background: #007bff;
      color: white;
      text-align: center;


    }

    /*td {
      display: inline;
    }*/

    tr:hover {
      background: #f1f1f1;
    }

    img {
      /*max-width: 100px;
      height: auto;
      border-radius: 5px;*/
      padding: 6px;
      /*8px*/
    }

    .actions a {
      text-decoration: none;
      padding: 6px 12px;
      margin: 5px;
      border-radius: 5px;
      color: white;
      font-weight: bold;
    }

    .edit {
      background: #28a745;

    }

    .delete {
      background: #dc3545;

    }

    .actions a:hover {
      opacity: 0.8;
    }
  </style>

</head>

<body>

  <?php
  //include 'config.php';
  include '../config/database.php';

  $stmt = $pdo->query("SELECT * FROM habitats");
  $habitats = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <h2>Liste des Habitats</h2>
  <section class="container">
    <table border-radius="1">
      <tr>
        <th>Habitats</th> <!-- Nom -->
        <th>Images</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
      <?php foreach ($habitats as $habitat): ?>
        <tr>
          <td><?= htmlspecialchars($habitat["nom"]) ?></td>
          <td>
            <?php
            $images = json_decode($habitat["images"], true);
            foreach ($images as $image) {
              echo "<img src='../assets/images/$image'width='80' height='50'>";
            }
            ?>
          </td>
          <td><?= htmlspecialchars($habitat["description"]) ?></td>
          <td class="actions">
            <!--<a href="../Crud_habitats/modifier_habitat.php?id=<!?= $habitat['id'] ?>" >Modifier</a>  |
                <a href="supprimer_habitat.php?id=<!?= $habitat['id'] ?>">Supprimer</a>-->

            <a href="modifier_habitat.php?id=<!?= $habitat['id'] ?>" class="edit"><i class="fas fa-edit"></i> Modifier</a>
            <a href="supprimer_habitat.php?id=<!?= $habitat['id'] ?>" class="delete" onclick="return confirm('Supprimer cet habitat ?')"><i class="fas fa-trash"></i> Supprimer</a>

          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </section>
  <!-- ../Crud_habitats/ -->
  <!-- class="edit" -->
  <!-- class="delete" onclick="return confirm('Supprimer cet habitat ?')" -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>



<!-- onclick="return confirm('Supprimer cet habitat ?') -->



<!--!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>
<body>
  
<!?php
//include 'config.php';
include '../config/database.php';

$stmt = $pdo->query("SELECT * FROM habitats");
$habitats = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Liste des Habitats</h2>
<table border-radius="1">
    <tr>
        <th>Habitats</th> --> <!-- Nom --> <!--
        <th>Images</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    <!?php foreach ($habitats as $habitat): ?>
        <tr>
            <td><!?= htmlspecialchars($habitat["nom"]) ?></td>
            <td>
                <!?php 
                $images = json_decode($habitat["images"], true);
                foreach ($images as $image) {
                    echo "<img src='../assets/images/$image'width='80' height='50'>";
                }
                ?>
            </td>
            <td><!?= htmlspecialchars($habitat["description"]) ?></td>
            <td>
                <a href="modifier_habitat.php?id=<!?= $habitat['id'] ?>">Modifier</a> | 
                <a href="supprimer_habitat.php?id=<!?= $habitat['id'] ?>" onclick="return confirm('Supprimer cet habitat ?')">Supprimer</a>
            </td>
        </tr>
    <!?php endforeach; ?>
</table>
</body>
</html>
    -->








<?php
//include 'config.php';
include '../config/database.php';

$stmt = $pdo->query("SELECT * FROM habitats");
$habitats = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Liste des Habitats</h2>
<table border-radius="1">
  <tr>
    <th>Habitats</th><!-- Nom -->
    <th>Images</th>
    <th>Description</th>
    <th>Actions</th>
  </tr>
  <?php foreach ($habitats as $habitat): ?>
    <tr>
      <td><?= htmlspecialchars($habitat["nom"]) ?></td>
      <td>
        <?php
        $images = json_decode($habitat["images"], true);
        foreach ($images as $image) {
          echo "<img src='../assets/images/$image'width='80' height='50'>";
        }
        ?>
      </td>
      <td><?= htmlspecialchars($habitat["description"]) ?></td>
      <td class="actions">
        <a class="edit" href="modifier_habitat.php?id=<?= $habitat['id'] ?>">Modifier</a> |
        <a class="delete" href="supprimer_habitat.php?id=<?= $habitat['id'] ?>" onclick="return confirm('Supprimer cet habitat ?')">Supprimer</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

















<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;

      max-width: 100%;
      width: 90%;
      background: #ffffff;
      /*border: 1px solid red;*/
      padding: 20px;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      /**/
      /*#F5F5DC*/
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      /*justify-content: center;*/
      align-items: center;
      /*border: 1px solid red;*/
    }

    h2 {
      color: #333;
    }

    table {
      width: 100%;
      max-width: 1300px;
      margin: 20px auto;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
    }

    th,
    td {
      padding: 6px;
      /*12px*/
      border-bottom: 1px solid #ddd;
      text-align: left;
      width: auto;
    }

    th {
      background: #007bff;
      color: white;
      text-align: center;
    }

    tr:hover {
      background: #f1f1f1;
    }

    img {
      padding: 6px;
      /*8px*/
    }

    .actions a {
      text-decoration: none;
      padding: 6px 12px;
      margin: 5px;
      border-radius: 5px;
      color: white;
      font-weight: bold;
    }

    .edit {
      background: #28a745;

    }

    .delete {
      background: #dc3545;

    }

    .actions a:hover {
      opacity: 0.8;
    }

    @media (max-width: 1024px) {
      .container {
        width: 95%;
      }

      table {
        width: 95%;
      }

      th,
      td {
        padding: 10px;
      }

      img {
        width: 70px;
        height: auto;
      }

      .actions a {
        padding: 5px 10px;
      }
    }

    @media (max-width: 768px) {
      table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
      }

      th,
      td {
        padding: 8px;
        font-size: 14px;
      }

      img {
        width: 60px;
        height: auto;
      }

      .actions a {
        padding: 5px 8px;
        font-size: 12px;
      }
    }

    @media (max-width: 480px) {
      h2 {
        font-size: 18px;
        text-align: center;
      }

      table {
        font-size: 12px;
      }

      th,
      td {
        padding: 5px;
      }

      img {
        width: 50px;
        height: auto;
      }

      .actions {
        display: flex;
        flex-direction: column;
        gap: 5px;
      }

      .actions a {
        display: block;
        text-align: center;
        width: 100%;
        padding: 5px;
      }
    }




    @media (max-width: 768px) {
  table {
    display: block;
    border: none;
  }

  thead {
    display: none;
  }

  tr {
    display: block;
    border: 1px solid #ddd;
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 8px;
    background: #fff;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
  }

  td {
    display: block;
    text-align: center;
    border: none;
    padding: 8px;
  }

  td:before {
    content: attr(data-label);
    font-weight: bold;
    display: block;
    color: #007bff;
    text-transform: uppercase;
    font-size: 14px;
  }

  img {
    width: 100%;
    max-width: 200px;
    height: auto;
  }

  .actions {
    display: flex;
    flex-direction: column;
    gap: 5px;
  }

  .actions a {
    display: block;
    text-align: center;
    width: 100%;
    padding: 8px;
  }

  /*.edit {
    width: 80%;
  }*/

}
  </style>
</head>

<body>
  <?php
  //include 'config.php';
  include '../config/database.php';

  $stmt = $pdo->query("SELECT * FROM habitats");
  $habitats = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <h2>Liste des Habitats</h2>
  <table border-radius="1">
    <tr>
      <th>Habitats</th><!-- Nom -->
      <th>Images</th>
      <th>Description</th>
      <th>Actions</th>
    </tr>
    <?php foreach ($habitats as $habitat): ?>
      <tr>
        <td><?= htmlspecialchars($habitat["nom"]) ?></td>
        <td>
          <?php
          $images = json_decode($habitat["images"], true);
          foreach ($images as $image) {
            echo "<img src='../assets/images/$image'width='80' height='50'>";
          }
          ?>
        </td>
        <td><?= htmlspecialchars($habitat["description"]) ?></td>
        <td class="actions">
          <a class="edit" href="modifier_habitat.php?id=<?= $habitat['id'] ?>">Modifier</a> |
          <a class="delete" href="supprimer_habitat.php?id=<?= $habitat['id'] ?>" onclick="return confirm('Supprimer cet habitat ?')">Supprimer</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>