<?php
//Inclusion du Fichier de Configuration
//require '../config/config.php';
require '../../../config/config_parrot.php';
//Fonction de Connexion à la Base de Données
function connectDB()
{
  //$config = require '../config/config.php';
  $config = require '../../../config/config_parrot.php';
  $db_config = $config['db'];
  try {
    $pdo = new PDO(
      "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}",
      $db_config['user'],
      $db_config['pass']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  } catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
  }
}
//Démarrage de la Session et Connexion à la Base de Données
session_start();
$pdo = connectDB();
//Vérification des Identifiants de Connexion
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $stmt = $pdo->prepare("SELECT * FROM avisusers WHERE email = :email");
  $stmt->execute([':email' => $email]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['user_type'] = $user['user_type'];

    if ($user['user_type'] == 'admin') {
      header('Location: admin_dashboard.php');
    } else {
      header('Location: employee_dashboard.php');
    }
    exit();
  } else {
    echo "Adresse e-mail ou mot de passe incorrect.";
  }
}
?>





<!--?php
require '../config/config.php';//config/config.php
require '../includes/functions.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Adresse e-mail invalide.";
    } elseif (empty($password)) {
        $error = "Mot de passe requis.";
    } else {
        $pdo = connectDB();

        $stmt = $pdo->prepare("SELECT id, password, user_type FROM users2 WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_type'] = $user['user_type'];
            header("Location: dashboard.php"); // Redirige vers le tableau de bord approprié
            exit;
        } else {
            $error = "Identifiants incorrects.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form method="post" action="">
        <label for="email">E-mail :</label>
        <input type="email" name="email" id="email" required><br>

        <label for="password">Mot de Passe :</label>
        <input type="password" name="password" id="password" required><br>

        <button type="submit">Se Connecter</button>
    </form>
    <!-?php if (isset($error)) echo "<p>$error</p>"; ?>
</body>
</html>