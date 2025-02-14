<!--?php // formulaire de modification d’un employé.
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../config/login.php");
    exit;
}

require_once('../public/utilise.php'); // Connexion à la BDD

// Vérifier si un ID est présent dans l'URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID employé invalide !");
}

$id = intval($_GET['id']);

// Récupérer les infos de l’employé
$sql = "SELECT * FROM utilisateurs WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$employe = $stmt->fetch();

if (!$employe) {
    die("Employé non trouvé !");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un employé</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
    <h2>Modifier un employé</h2>
    <form action="traitement-modif.php" method="POST">
        <input type="hidden" name="id" value="<?= $employe['id'] ?>">

        <label for="nom">Nom :</label>
        <input type="text" name="nom" value="<?= htmlspecialchars($employe['nom']) ?>" required>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" value="<?= htmlspecialchars($employe['prenom']) ?>" required>

        <label for="email">Email :</label>
        <input type="email" name="email" value="<?= htmlspecialchars($employe['email']) ?>" required>

        <label for="role">Rôle :</label>
        <select name="role" required>
            <option value="employe" <?= $employe['role'] == 'employe' ? 'selected' : '' ?>>Employé</option>
            <option value="veterinaire" <?= $employe['role'] == 'veterinaire' ? 'selected' : '' ?>>Vétérinaire</option>
        </select>

        <button type="submit">Modifier</button>
    </form>

    <a href="liste.php">🔙 Retour à la liste</a>
</body>
</html>-->











<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../config/login.php");
    exit;
}

require_once('../public/utilise.php'); // Connexion à la BDD

// Vérifier si un ID est présent dans l'URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID employé invalide !");
}

$id = intval($_GET['id']);

// Récupérer les infos de l’employé
$sql = "SELECT * FROM utilisateurs WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$employe = $stmt->fetch();

if (!$employe) {
    die("Employé non trouvé !");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un employé</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="text-center mb-4">Modifier un employé</h2>
            <form action="traitement-modif.php" method="POST" class="row g-3">
                <input type="hidden" name="id" value="<?= $employe['id'] ?>">

                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom :</label>
                    <input type="text" name="nom" class="form-control" value="<?= htmlspecialchars($employe['nom']) ?>" required>
                </div>

                <div class="col-md-6">
                    <label for="prenom" class="form-label">Prénom :</label>
                    <input type="text" name="prenom" class="form-control" value="<?= htmlspecialchars($employe['prenom']) ?>" required>
                </div>

                <div class="col-12">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($employe['email']) ?>" required>
                </div>

                <div class="col-12">
                    <label for="role" class="form-label">Rôle :</label>
                    <select name="role" class="form-select" required>
                        <option value="employe" <?= $employe['role'] == 'employe' ? 'selected' : '' ?>>Employé</option>
                        <option value="veterinaire" <?= $employe['role'] == 'veterinaire' ? 'selected' : '' ?>>Vétérinaire</option>
                    </select>
                </div>

                <div class="col-12 d-flex justify-content-between">
                    <a href="liste.php" class="btn btn-secondary">🔙 Retour</a>
                    <button type="submit" class="btn btn-primary">💾 Modifier</button>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
