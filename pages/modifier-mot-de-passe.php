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
    <title>Modifier mon mot de passe</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-semibold text-center text-gray-700">Modifier mon mot de passe</h1>
        <!--<p class="text-center text-gray-600 mb-4">Vous modifiez le mot de passe de : 
            <strong class="text-gray-800">{{user.nom}} {{user.prenom}}</strong> 
            ({{user.email}})-->
        <h2 class="text-center text-gray-600 mb-4">Vous modifiez le mot de passe : <?php echo $_SESSION['nom']; ?> (Administrateur)</h2>
        </p>

        <form method="POST" action="" class="space-y-4">
            <div class="relative">
                <label for="ancien_mdp" class="block text-gray-700">Ancien mot de passe :</label>
                <input type="password" name="ancien_mdp" id="ancien_mdp" required
                       class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="relative">
                <label for="nouveau_mdp" class="block text-gray-700">Nouveau mot de passe :</label>
                <input type="password" name="nouveau_mdp" id="nouveau_mdp" required
                       class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="relative">
                <label for="confirmation_mdp" class="block text-gray-700">Confirmez le nouveau mot de passe :</label>
                <input type="password" name="confirmation_mdp" id="confirmation_mdp" required
                       class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700 transition">Mettre à jour</button>
        </form>
    </div>
</body>
</html>
<!-------------------------------------------------------------------------------------------------------------------->

<!--?php
session_start();
require '../public/utilise.php'; // Connexion à la base de données

// Vérifiez que la connexion PDO est disponible
if (!isset($pdo)) {
    die("Erreur : La connexion à la base de données n'est pas disponible.");
}

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header('Location: ../config/login.php');
    exit();
}

// Récupérer l'ID utilisateur depuis la session
$user_id = $_SESSION['user_id'];

// Préparer et exécuter la requête pour récupérer les informations utilisateur
$stmt = $pdo->prepare("SELECT id, prenom, nom, email, mot_de_passe FROM utilisateurs WHERE id = ?");//mot_De_Passe
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Vérifiez si un utilisateur a été trouvé
if (!$user) {
    die("Erreur : utilisateur introuvable dans la base de données.");
}

// Gestion de la mise à jour du mot de passe
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ancien_mdp = $_POST['ancien_mdp'] ?? '';
    $nouveau_mdp = $_POST['nouveau_mdp'] ?? '';
    $confirmation_mdp = $_POST['confirmation_mdp'] ?? '';

    // Vérifiez que l'ancien mot de passe est correct
    if (password_verify($ancien_mdp, $user['mot_de_passe'])) {//mot_De_Passe
        // Vérifiez que les deux nouveaux mots de passe correspondent
        if ($nouveau_mdp === $confirmation_mdp) {
            // Hacher le nouveau mot de passe
            $nouveau_mdp_hache = password_hash($nouveau_mdp, PASSWORD_DEFAULT);

            // Mettre à jour le mot de passe dans la base de données
            $update_stmt = $pdo->prepare("UPDATE utilisateurs SET mot_de_passe = ? WHERE id = ?");//motDePasse
            if ($update_stmt->execute([$nouveau_mdp_hache, $user_id])) {
                echo "<p style='color: green;'>Mot de passe mis à jour avec succès.</p>";
            } else {
                echo "<p style='color: red;'>Erreur lors de la mise à jour du mot de passe.</p>";
            }
        } else {
            echo "<p style='color: red;'>Les nouveaux mots de passe ne correspondent pas.</p>";
        }
    } else {
        echo "<p style='color: red;'>L'ancien mot de passe est incorrect.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier mon mot de passe</title>
</head>
<body>
    <h1>Modifier mon mot de passe</h1>
    <p>Vous modifiez le mot de passe de : 
        <strong><!?php echo htmlspecialchars($user['nom'] . ' ' . $user['prenom']); ?></strong> 
        (<!?php echo htmlspecialchars($user['email']); ?>)
    </p>

    <form method="POST" action="">
        <div class="password-wrapper">
            <label for="ancien_mdp">Ancien mot de passe :</label>
            <input type="password" name="ancien_mdp" id="ancien_mdp" required>
            <span class="toggle-password" onclick="toggleVisibility('ancien_mdp')">👁️</span>
        </div>
        <div class="password-wrapper">
            <label for="nouveau_mdp">Nouveau mot de passe :</label>
            <input type="password" name="nouveau_mdp" id="nouveau_mdp" required>
            <span class="toggle-password" onclick="toggleVisibility('nouveau_mdp')">👁️</span>
        </div>
        <div class="password-wrapper">
            <label for="confirmation_mdp">Confirmez le nouveau mot de passe :</label>
            <input type="password" name="confirmation_mdp" id="confirmation_mdp" required>
            <span class="toggle-password" onclick="toggleVisibility('confirmation_mdp')">👁️</span>
        </div>
        <button type="submit">Mettre à jour</button>
    </form>

    <script>
        function toggleVisibility(fieldId) {
            const field = document.getElementById(fieldId);
            const type = field.getAttribute('type') === 'password' ? 'text' : 'password';
            field.setAttribute('type', type);
        }

        // Validation côté client
        document.querySelector('form').addEventListener('submit', function(e) {
            const nouveau = document.getElementById('nouveau_mdp').value;
            const confirmation = document.getElementById('confirmation_mdp').value;

            if (nouveau !== confirmation) {
                e.preventDefault();
                alert("Les nouveaux mots de passe ne correspondent pas.");
            }
        });
    </script>
</body>
</html>
