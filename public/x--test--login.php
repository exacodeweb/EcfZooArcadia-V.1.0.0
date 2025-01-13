<?php 
// Inclure le fichier de configuration
$config = include('../config/config.php');

// Démarrer une session
session_start();

try {
    // Connexion à la base de données
    $pdo = new PDO(
        "mysql:host={$config['db']['host']};dbname={$config['db']['database']};charset={$config['db']['charset']}",
        $config['db']['username'],
        $config['db']['password']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        // Rechercher l'utilisateur dans la base de données
        $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['mot_de_passe'])) {
            // Stocker les informations de l'utilisateur dans la session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['nom'] = $user['nom'];

            // Rediriger en fonction du rôle
            switch ($user['role']) {
                case 'admin':
                    //header("Location: ../pages/admin_dashboard.php");
                    header("Location:../pages/dashboard.php");
                case 'employe':
                    header("Location: ../pages/employe_dashboard.php");
                    break;
                case 'veterinaire':
                    header("Location: ../pages/veterinaire_dashboard.php");
                    break;
                default:
                    header("Location: ../pages/employe_dashboard.php"); // Par défaut pour les autres rôles
                    break;
            }
            exit;
        } else {
            $error = "Email ou mot de passe incorrect.";
        }
    }
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>