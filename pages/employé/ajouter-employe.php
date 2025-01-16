<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../../config/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Employé</title>
</head>
<body>
    <h1>Ajouter un Employé</h1>
    <form action="./traitement-ajout-employe.php" method="POST">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>

        <label for="motDePasse">Mot de passe :</label>
        <input type="password" id="motDePasse" name="motDePasse" required><br>

        <label for="role">Rôle :</label>
        <select id="role" name="role" required>
            <option value="employe">Employé</option>
            <option value="admin">Administrateur</option>
            <option value="veterinaire">équipe-médicale</option>
        </select><br>

        <input type="submit" value="Ajouter l'Employé">
    </form>
</body>
</html>