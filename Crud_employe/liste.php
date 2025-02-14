<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
  header("Location: ../config/login.php");
  exit;
}

require_once('../public/utilise.php'); // Connexion à la base de données

// Récupérer tous les employés
$sql = "SELECT * FROM utilisateurs WHERE role != 'admin'"; // Exclure l'admin
$stmt = $pdo->prepare($sql);
$stmt->execute();
$employes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion des employés</title>
  <link rel="stylesheet" href="../fonts/fonts-style-1.css" type="text/css">
  <link rel="stylesheet" href="../assets/style.css">  <!-- Ajout CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

  <style>
    /* Styles généraux */ 
    /*body {
      font-family: Arial, sans-serif;
      background-color: #F5F5DC;/*#f8f9fa*//*
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      /*justify-content: center;*//*
      align-items: center;
      /*border: 1px solid red;*//*
    }*/

    body {
        background: beige;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0; /* Évite les marges par défaut du body */
      }

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
  </style>

</head>

<body>
  <section class="content">
    <div class="container">

      <h2>Liste des employés</h2>

      <header>
        <div class="container">
          <a href="ajouter.php">Ajouter un employé</a>  <!-- ➕  -->  
        </div>
      </header>

      <table border-radius="1" class="table-bordered table-hover">  <!-- border -->
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Email</th>
          <th>Rôle</th>
          <th>Actions</th>
        </tr>
        <?php foreach ($employes as $employe): ?>
          <tr>
            <td><?= $employe['id'] ?></td>
            <td><?= htmlspecialchars($employe['nom']) ?></td>
            <td><?= htmlspecialchars($employe['prenom']) ?></td>
            <td><?= htmlspecialchars($employe['email']) ?></td>
            <td><?= htmlspecialchars($employe['role']) ?></td>
            <td>
              <!--<a href="modifier.php?id=<!?= $employe['id'] ?>">✏️ Modifier</a>-->
              <a href="modifier.php?id=<?= $employe['id'] ?>" class="btn btn-warning btn-sm">✏️ Modifier</a>
              <!--<a href="supprimer.php?id=<!?= $employe['id'] ?>" onclick="return confirm('Supprimer cet employé ?');">🗑 Supprimer</a>-->
              <a href="supprimer.php?id=<?= $employe['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer cet employé ?');">🗑 Supprimer</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>

    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> 




<!--?php
//session_start();
//if ($_SESSION['role'] !== 'admin') {
    //header("Location: ../../config/login.php");
    //exit;
//}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Employé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg p-4">
                    <h2 class="text-center">Ajouter un Employé</h2>
                    <form action="traitement-ajout-employe.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Prénom :</label>
                            <input type="text" name="prenom" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nom :</label>
                            <input type="text" name="nom" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email :</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mot de passe :</label>
                            <input type="password" name="mot_de_passe" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rôle :</label>
                            <select name="role" class="form-select" required>
                                <option value="employe">Employé</option>
                                <option value="veterinaire">Vétérinaire</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Ajouter l'employé</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>-->


<!--------------------------------------------------------------------------------------------------------------------->
<!--?php
/*session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../config/login.php");
    exit;
}*/

require_once('../public/utilise.php'); // Connexion à la base de données

// Récupérer tous les employés
$sql = "SELECT * FROM utilisateurs WHERE role != 'admin'"; // Exclure l'admin
$stmt = $pdo->prepare($sql);
$stmt->execute();
$employes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des employés</title>
    <link rel="stylesheet" href="../../assets/style.css"> --> <!-- Style externe -->   <!--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table th {
            background-color: #343a40;
            color: white;
        }

        .btn {
            margin-right: 5px;
        }
    </style>
</head>

<body>



    <section class="container mt-4">
        <h2 class="text-center">Gestion des employés</h2> --> <!-- Liste des employés --> <!--


    <header>
        <div class="container">
            <h1>Gestion des employés</h1>
            <a href="ajouter.php" class="btn btn-success">Ajouter un employé</a>
        </div>
    </header>        

        <div class="table-responsive">
            <table class="table  table-hover"> -->  <!-- table-striped -->  <!--
                <thead class="table-center"> --> <!-- table-dark -->  <!--
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!?php foreach ($employes as $employe): ?>
                    <tr>
                        <td><!?= $employe['id'] ?></td>
                        <td><!?= htmlspecialchars($employe['nom']) ?></td>
                        <td><!?= htmlspecialchars($employe['prenom']) ?></td>
                        <td><!?= htmlspecialchars($employe['email']) ?></td>
                        <td><!?= htmlspecialchars($employe['role']) ?></td>
                        <td>
                            <a href="modifier.php?id=<!?= $employe['id'] ?>" class="btn btn-warning btn-sm">✏️ Modifier</a>
                            <a href="supprimer.php?id=<!?= $employe['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer cet employé ?');">🗑 Supprimer</a>
                        </td>
                    </tr>
                    <!?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>-->
<!--------------------------------------------------------------------------------------------------------------------->











<!--------------------------------------------------------------------------------------------------------------------->
<!--?php
/*session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../config/login.php");
    exit;
}*/

require_once('../public/utilise.php'); // Connexion à la base de données

// Récupérer tous les employés sauf l'admin
$sql = "SELECT * FROM utilisateurs WHERE role != 'admin'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$employes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des employés</title> -->
    <!-- Bootstrap -->  <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table th {
           background-color: #343a40;
            color: white;
        }

        .btn {
            margin-right: 5px;
        }

    </style>
</head>

<body>
    <div class="container">  -->
        <!-- En-tête --> <!--
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-success">👥 Gestion des employés</h2>
            <a href="ajouter.php" class="btn btn-success">➕ Ajouter un employé</a>
        </div>  -->

        <!-- Tableau des employés -->  <!--
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="text-center">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>  
                    <!?php foreach ($employes as $employe): ?>
                        <tr class="text-center">
                            <td><!?= $employe['id'] ?></td>
                            <td><!?= htmlspecialchars($employe['nom']) ?></td>
                            <td><!?= htmlspecialchars($employe['prenom']) ?></td>
                            <td><!?= htmlspecialchars($employe['email']) ?></td> -->
                            <!--<td><span class="badge bg-info"><!?= htmlspecialchars($employe['role']) ?></span></td>-->
                            <!--<td><!?= htmlspecialchars($employe['role']) ?></td>
                            <td>
                                <a href="modifier.php?id=<!?= $employe['id'] ?>" class="btn btn-warning btn-sm">✏️ Modifier</a>
                                <a href="supprimer.php?id=<!?= $employe['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer cet employé ?');">🗑 Supprimer</a>
                            </td>
                        </tr>
                    <!?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html> -->
<!--------------------------------------------------------------------------------------------------------------------->
