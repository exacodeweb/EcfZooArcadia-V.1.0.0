<!--?php //formulaire pour ajouter un employé.
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../config/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un employé</title>
    <link rel="stylesheet" href="../../assets/style.css"> --> <!-- Ajoute ton CSS --> <!--
</head>
<body>
    <h2>Ajouter un employé</h2>
    <form action="traitement-ajout.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required>

        <label for="email">Email :</label>
        <input type="email" name="email" required>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="mot_de_passe" required>

        <label for="role">Rôle :</label>
        <select name="role" required>
            <option value="employe">Employé</option>
            <option value="veterinaire">Vétérinaire</option>
        </select>

        <button type="submit">Ajouter</button>
    </form>

    <a href="liste.php">🔙 Retour à la liste</a>
</body>
</html>
-->




<!--<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un employé</title>
    <link rel="stylesheet" href="../../assets/style.css"> 
    <style>
        /* Styles pour centrer et rendre le formulaire agréable */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f4f4f4;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .form-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            text-align: left;
            font-weight: bold;
            margin-top: 10px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: background 0.3s;
        }

        button:hover {
            background: #0056b3;
        }

        a {
            display: block;
            margin-top: 15px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Ajouter un employé</h2>
    <form action="traitement-ajout.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required>

        <label for="email">Email :</label>
        <input type="email" name="email" required>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="mot_de_passe" required>

        <label for="role">Rôle :</label>
        <select name="role" required>
            <option value="employe">Employé</option>
            <option value="veterinaire">Vétérinaire</option>
        </select>

        <button type="submit">Ajouter</button>
    </form>

    <a href="liste.php">🔙 Retour à la liste</a>
</div>

</body>
</html>
      -->



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un employé</title>
    <!-- Intégration de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h2 class="text-center mb-4">Ajouter un employé</h2>
                    
                    <form action="traitement-ajout.php" method="POST">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom :</label>
                            <input type="text" class="form-control" name="nom" required>
                        </div>

                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prénom :</label>
                            <input type="text" class="form-control" name="prenom" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email :</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="mot_de_passe" class="form-label">Mot de passe :</label>
                            <input type="password" class="form-control" name="mot_de_passe" required>
                        </div>

                        <div class="mb-3">
                            <label for="role" class="form-label">Rôle :</label>
                            <select class="form-select" name="role" required>
                                <option value="employe">Employé</option>
                                <option value="veterinaire">Vétérinaire</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Ajouter</button>
                    </form>

                    <div class="text-center mt-3">
                        <a href="liste.php" class="text-decoration-none btn btn-secondary w-100">🔙 Retour à la liste</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
