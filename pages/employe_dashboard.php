

<?php
session_start();

// Vérification si l'utilisateur est connecté et a le rôle d'employé
if ($_SESSION['role'] !== 'employe') {
    header("Location: ../config/login.php");
    exit;
}

// Connexion à la base de données
require '../public/utilise.php';

// Vérification de la connexion PDO
if (!isset($pdo)) {
    die("Erreur : La connexion à la base de données n'est pas disponible.");
}

// Vérification si l'utilisateur est connecté via session
if (!isset($_SESSION['user_id'])) {
    header('Location: ../config/login.php');
    exit();
}

// Récupérer l'ID utilisateur depuis la session
$user_id = $_SESSION['user_id'];

// Préparer et exécuter la requête pour récupérer les informations utilisateur
$stmt = $pdo->prepare("SELECT id, prenom, nom, email FROM utilisateurs WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Vérification si un utilisateur a été trouvé
if (!$user) {
    die("Erreur : utilisateur introuvable dans la base de données.");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Employé</title>
</head>
<body>
   <h1>Bienvenue <?php echo htmlspecialchars($user['prenom']) . ' ' . htmlspecialchars($user['nom']); ?></h1>
    <a href="../config/logout.php">Déconnexion</a>
    <section>
    <a href="modifier-mot-de-passe.php" class="btn">Modifier mon mot de passe</a>
    <!--<li><a class="nav-link" href="../AvisUsers/ratings_feedback/moderate_comments.php">moderer les avis utilisateur</a></li>-->
    <!--<li><a class="nav-link" href="../moderation-avis.php">moderer les avis utilisateur</a></li>-->
    <li><a class="nav-link" href="../avis_system_test/moderation-avis.php">moderer les avis </a></li>
    </section>

    <p>Bienvenue : 
        <strong><?php echo htmlspecialchars($user['prenom'] . ' ' . $user['nom']); ?></strong>
        (<?php echo htmlspecialchars($user['email']); ?>)
    </p>

</body>
</html>

