<!--<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier mon mot de passe</title>
    <style>
        .password-wrapper {
            position: relative;
            margin-bottom: 20px;
        }
        input[type="password"] {
            width: 100%;
            padding-right: 40px; /* Laisser de l'espace pour l'icône */
            box-sizing: border-box;
        }
        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <h1>Modifier mon mot de passe</h1>
    <form method="POST" action="">
        <div class="password-wrapper">
            <label for="ancien_mdp">Ancien mot de passe :</label>
            <input type="password" name="ancien_mdp" id="ancien_mdp" required>
            <span class="toggle-password" onclick="toggleVisibility('ancien_mdp')"></span>
        </div>
        <div class="password-wrapper">
            <label for="nouveau_mdp">Nouveau mot de passe :</label>
            <input type="password" name="nouveau_mdp" id="nouveau_mdp" required>
            <span class="toggle-password" onclick="toggleVisibility('nouveau_mdp')"></span>
        </div>
        <div class="password-wrapper">
            <label for="confirmation_mdp">Confirmez le nouveau mot de passe :</label>
            <input type="password" name="confirmation_mdp" id="confirmation_mdp" required>
            <span class="toggle-password" onclick="toggleVisibility('confirmation_mdp')"></span>
        </div>
        <button type="submit">Mettre à jour</button>
    </form>

    <script>
        function toggleVisibility(fieldId) {
            const field = document.getElementById(fieldId);
            const type = field.getAttribute('type') === 'password' ? 'text' : 'password';
            field.setAttribute('type', type);
        }
    </script>
</body>
</html>-->

<!-------------------------------------------------------------------------------------------------->

<?php
session_start();
require '../public/utilise.php'; // Connexion à la base de données

if (!isset($_SESSION['user_id'])) {
  header('Location: ../config/login.php');
  exit();
}


$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $ancien_mdp = trim($_POST['ancien_mdp']);
  $nouveau_mdp = trim($_POST['nouveau_mdp']);
  $confirmation_mdp = trim($_POST['confirmation_mdp']);

  // Vérifier que l'ancien mot de passe est correct
  $stmt = $pdo->prepare("SELECT mot_de_passe FROM utilisateurs WHERE id = ?");
  $stmt->execute([$user_id]);
  $user = $stmt->fetch();

  if ($user && password_verify($ancien_mdp, $user['mot_de_passe'])) {
    if ($nouveau_mdp === $confirmation_mdp) {
      $hashed_password = password_hash($nouveau_mdp, PASSWORD_DEFAULT);
      $update_stmt = $pdo->prepare("UPDATE utilisateurs SET mot_de_passe = ? WHERE id = ?");
      $update_stmt->execute([$hashed_password, $user_id]);

      echo "Mot de passe mis à jour avec succès.";
    } else {
      echo "Les nouveaux mots de passe ne correspondent pas.";
    }
  } else {
    echo "L'ancien mot de passe est incorrect.";
  }
}

?>

<!--?php if (isset($message)): ?>
  <p><!-?php echo htmlspecialchars($message); ?></p>
<!?php endif; 

$message = "L'ancien mot de passe est incorrect.";

header('Location: tableau_de_bord.php?message=success');
exit();
?> -->


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modifier mon mot de passe</title>
  <style>
    .toggle-password {
      cursor: pointer;
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
    }

    .password-wrapper {
      position: relative;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <h1>Modifier mon mot de passe</h1>
  <form method="POST" action="">
    <div class="password-wrapper">
      <label for="ancien_mdp">Ancien mot de passe :</label>
      <input type="password" name="ancien_mdp" id="ancien_mdp" required>
  <!--<input type="password" name="nouveau_mdp" id="nouveau_mdp" value="<!?php echo htmlspecialchars($nouveau_mdp ?? ''); ?>" required>-->
      <span class="toggle-password" onclick="toggleVisibility('ancien_mdp')"></span>
    </div>
    <div class="password-wrapper">
      <label for="nouveau_mdp">Nouveau mot de passe :</label>
      <input type="password" name="nouveau_mdp" id="nouveau_mdp" required>
      <!--<input type="password" name="nouveau_mdp" id="nouveau_mdp" value="<!?php echo htmlspecialchars($nouveau_mdp ?? ''); ?>" required>-->
      <span class="toggle-password" onclick="toggleVisibility('nouveau_mdp')"></span>
    </div>
    <div class="password-wrapper">
      <label for="confirmation_mdp">Confirmez le nouveau mot de passe :</label>
      <input type="password" name="confirmation_mdp" id="confirmation_mdp" required>
      <!--<input type="password" name="nouveau_mdp" id="nouveau_mdp" value="<!?php echo htmlspecialchars($nouveau_mdp ?? ''); ?>" required>-->
      <span class="toggle-password" onclick="toggleVisibility('confirmation_mdp')"></span>
    </div>
    <button type="submit">Mettre à jour</button>
  </form>

  <script>
    function toggleVisibility(fieldId) {
      const field = document.getElementById(fieldId);
      const type = field.getAttribute('type') === 'password' ? 'text' : 'password';
      field.setAttribute('type', type);
    }
  </script>

  <!----><script>
  document.querySelector('form').addEventListener('submit', function(e) {
    const nouveau = document.getElementById('nouveau_mdp').value;
    const confirmation = document.getElementById('confirmation_mdp').value;

    if (nouveau !== confirmation) {
      e.preventDefault();
      alert("Les nouveaux mots de passe ne correspondent pas.");
    }
  });
</script>-->

</body>

</html>



<!--------------------------------------------->

<!--?php
session_start();
require '../public/utilise.php'; // Connexion à la base de données

if (!isset($_SESSION['user_id'])) {
    header('Location: ../config/login.php');
  exit();
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ancien_mdp = trim($_POST['ancien_mdp']);
    $nouveau_mdp = trim($_POST['nouveau_mdp']);
    $confirmation_mdp = trim($_POST['confirmation_mdp']);

    // Vérifier que l'ancien mot de passe est correct
    $stmt = $pdo->prepare("SELECT mot_de_passe FROM utilisateurs WHERE id = ?");
    $stmt->execute([$user_id]);
    $user = $stmt->fetch();

    if ($user && password_verify($ancien_mdp, $user['mot_de_passe'])) {
        if ($nouveau_mdp === $confirmation_mdp) {
            $hashed_password = password_hash($nouveau_mdp, PASSWORD_DEFAULT);
            $update_stmt = $pdo->prepare("UPDATE utilisateurs SET mot_de_passe = ? WHERE id = ?");
            $update_stmt->execute([$hashed_password, $user_id]);

            echo "Mot de passe mis à jour avec succès.";
        } else {
            echo "Les nouveaux mots de passe ne correspondent pas.";
        }
    } else {
        echo "L'ancien mot de passe est incorrect.";
    }
}
?> -->
<!--
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier mon mot de passe</title>
</head>
<body>
    <h1>Modifier mon mot de passe</h1>
    <form method="POST" action="">
        <label for="ancien_mdp">Ancien mot de passe :</label>
        <input type="password" name="ancien_mdp" id="ancien_mdp" required>
     
        <br>
        <label for="nouveau_mdp">Nouveau mot de passe :</label>
        <input type="password" name="nouveau_mdp" id="nouveau_mdp" required>
   
        <br>
        <label for="confirmation_mdp">Confirmez le nouveau mot de passe :</label>
        <input type="password" name="confirmation_mdp" id="confirmation_mdp" required>
       
        <br>
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html> -->

<!-------------------------------------------------------------------------------->



<!--?php
session_start();
require '..public/utilise.php'; // Connexion à la base de données

if (!isset($_SESSION['user_id'])) {
    header('Location: ../config/login.php');
    exit();
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ancien_mdp = trim($_POST['ancien_mdp']);
    $nouveau_mdp = trim($_POST['nouveau_mdp']);
    $confirmation_mdp = trim($_POST['confirmation_mdp']);

    // Vérifier que l'ancien mot de passe est correct
    $stmt = $pdo->prepare("SELECT mot_de_passe FROM utilisateurs WHERE id = ?");
    $stmt->execute([$user_id]);
    $user = $stmt->fetch();

    if ($user && password_verify($ancien_mdp, $user['mot_de_passe'])) {
        if ($nouveau_mdp === $confirmation_mdp) {
            $hashed_password = password_hash($nouveau_mdp, PASSWORD_DEFAULT);
            $update_stmt = $pdo->prepare("UPDATE utilisateurs SET mot_de_passe = ? WHERE id = ?");
            $update_stmt->execute([$hashed_password, $user_id]);

            echo "Mot de passe mis à jour avec succès.";
        } else {
            echo "Les nouveaux mots de passe ne correspondent pas.";
        }
    } else {
        echo "L'ancien mot de passe est incorrect.";
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
    <form method="POST" action="">
        <label for="ancien_mdp">Ancien mot de passe :</label>
        <input type="password" name="ancien_mdp" id="ancien_mdp" required>
        <br>
        <label for="nouveau_mdp">Nouveau mot de passe :</label>
        <input type="password" name="nouveau_mdp" id="nouveau_mdp" required>
        <br>
        <label for="confirmation_mdp">Confirmez le nouveau mot de passe :</label>
        <input type="password" name="confirmation_mdp" id="confirmation_mdp" required>
        <br>
        <button type="submit">Mettre à jour</button>
    </form>


    <script>
        function toggleVisibility(fieldId) {
            const field = document.getElementById(fieldId);
            const type = field.getAttribute('type') === 'password' ? 'text' : 'password';
            field.setAttribute('type', type);
        }
    </script>

</body>
</html>



<!--
4. Résumé du fonctionnement
Le formulaire de connexion identifie l'utilisateur et son rôle.
L'utilisateur est redirigé vers le tableau de bord dynamique.
Chaque utilisateur peut accéder à un lien pour modifier son mot de passe de manière indépendante.
La gestion des mots de passe est sécurisée grâce à password_hash() et password_verify().
Cela garantit une solution robuste et adaptée pour tous les employés et les administrateurs. 😊
-->













<!--?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../config/login.php'); // Redirige si l'utilisateur n'est pas connecté
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier mot de passe</title>
</head>
<body>
    <h1>Modifier mon mot de passe</h1>
    <form action="traitement-modification-mdp.php" method="POST">
        <label for="current_password">Mot de passe actuel :</label>
        <input type="password" id="current_password" name="current_password" required>
        
        <label for="new_password">Nouveau mot de passe :</label>
        <input type="password" id="new_password" name="new_password" required>
        
        <label for="confirm_password">Confirmer le nouveau mot de passe :</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        
        <button type="submit">Modifier</button>
    </form>
</body>
</html>-->








<!--
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher/Masquer le mot de passe</title>
    <style>
        .password-container {
            position: relative;
            display: inline-block;
        }

        .password-container input {
            padding-right: 40px; /* Laisser de l'espace pour l'icône */
        }

        .password-container .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Afficher/Masquer le mot de passe</h1>
    <div class="password-container">
        <input type="password" id="password" name="password" placeholder="Mot de passe" required>
        <span class="toggle-password"></span>
    </div>

    <script>
        // Fonctionnalité pour basculer entre visible et masqué
        const togglePassword = document.querySelector('.toggle-password');
        const passwordField = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);

            // Change l'icône selon l'état
            this.textContent = type === 'password' ? '' : '';
        });
    </script>
</body>
</html>
-->






<?php
session_start();
require '../public/utilise.php'; // Connexion à la base de données

if (!isset($_SESSION['user_id'])) {
  header('Location: ../config/login.php');
  exit();
}

$user_id = $_SESSION['user_id'];// ID de l'utilisateur connecté
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $ancien_mdp = trim($_POST['ancien_mdp']);
  $nouveau_mdp = trim($_POST['nouveau_mdp']);
  $confirmation_mdp = trim($_POST['confirmation_mdp']);

  // Vérifier que l'ancien mot de passe est correct
  $stmt = $pdo->prepare("SELECT mot_de_passe FROM utilisateurs WHERE id = ?");
  $stmt->execute([$user_id]);
  $user = $stmt->fetch();

  if ($user && password_verify($ancien_mdp, $user['mot_de_passe'])) {
    if ($nouveau_mdp === $confirmation_mdp) {
      $hashed_password = password_hash($nouveau_mdp, PASSWORD_DEFAULT);
      $update_stmt = $pdo->prepare("UPDATE utilisateurs SET mot_de_passe = ? WHERE id = ?");
      $update_stmt->execute([$hashed_password, $user_id]);

      // Redirection avec message de succès
      header('Location: tableau_de_bord.php?message=success');
      exit();
    } else {
      $message = "Les nouveaux mots de passe ne correspondent pas.";
    }
  } else {
    $message = "L'ancien mot de passe est incorrect.";
  }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modifier mon mot de passe</title>
  <style>
    .toggle-password {
      cursor: pointer;
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
    }

    .password-wrapper {
      position: relative;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <h1>Modifier mon mot de passe</h1>
  <h1>Modifier mon mot de passe, <?php echo $_SESSION['nom']; ?> </h1><!-- (Administrateur) -->

  <?php if (!empty($message)): ?>
    <p style="color: red;"><?php echo htmlspecialchars($message); ?></p>
  <?php endif; ?>

  <form method="POST" action="">
    <div class="password-wrapper">
      <label for="ancien_mdp">Ancien mot de passe :</label>
      <input type="password" name="ancien_mdp" id="ancien_mdp" required>
      <span class="toggle-password" onclick="toggleVisibility('ancien_mdp')">oeil</span>
    </div>
    <div class="password-wrapper">
      <label for="nouveau_mdp">Nouveau mot de passe :</label>
      <input type="password" name="nouveau_mdp" id="nouveau_mdp" required>
      <span class="toggle-password" onclick="toggleVisibility('nouveau_mdp')">oeil</span>
    </div>
    <div class="password-wrapper">
      <label for="confirmation_mdp">Confirmez le nouveau mot de passe :</label>
      <input type="password" name="confirmation_mdp" id="confirmation_mdp" required>
      <span class="toggle-password" onclick="toggleVisibility('confirmation_mdp')">oeil</span>
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


<!------------------------------------------------------------------------------------------------>


<!--?php
//---session_start();
require '../public/utilise.php'; // Connexion à la base de données

if (!isset($_SESSION['user_id'])) {
  header('Location: ../config/login.php');
  exit();
}

$user_id = $_SESSION['user_id']; // ID de l'utilisateur connecté

// Récupérer les informations de l'utilisateur
//-----$stmt = $pdo->prepare("SELECT nom, prenom, email FROM utilisateurs WHERE id = ?")
$stmt = $pdo->prepare("SELECT nom, mot_de_passe FROM utilisateurs WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch();

if (!$user) {
  echo "Utilisateur non trouvé.";
  exit();
}

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $ancien_mdp = trim($_POST['ancien_mdp']);
  $nouveau_mdp = trim($_POST['nouveau_mdp']);
  $confirmation_mdp = trim($_POST['confirmation_mdp']);

  // Vérifier que l'ancien mot de passe est correct
  $stmt = $pdo->prepare("SELECT mot_de_passe FROM utilisateurs WHERE id = ?");
  $stmt->execute([$user_id]);
  $user_password = $stmt->fetch();

  if ($user_password && password_verify($ancien_mdp, $user_password['mot_de_passe'])) {
    if ($nouveau_mdp === $confirmation_mdp) {
      $hashed_password = password_hash($nouveau_mdp, PASSWORD_DEFAULT);
      $update_stmt = $pdo->prepare("UPDATE utilisateurs SET mot_de_passe = ? WHERE id = ?");
      $update_stmt->execute([$hashed_password, $user_id]);

      // Redirection avec message de succès
      header('Location: tableau_de_bord.php?message=success');
      exit();
    } else {
      $message = "Les nouveaux mots de passe ne correspondent pas.";
    }
  } else {
    $message = "L'ancien mot de passe est incorrect.";
  }
}
?> -->

<?php
session_start();
require '../public/utilise.php'; // Connexion à la base de données

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header('Location: ../config/login.php');
    exit();
}

// Récupérer les informations de la session
$user_nom = isset($_SESSION['nom']) ? $_SESSION['nom'] : 'Utilisateur';
$user_role = isset($_SESSION['role']) ? $_SESSION['role'] : 'Invité';

// Formater le rôle pour l'affichage
switch ($user_role) {
    case 'admin':
        $role_affiche = 'Administrateur';
        break;
    case 'employe':
        $role_affiche = 'Employé';
        break;
    case 'veterinaire':
        $role_affiche = 'Vétérinaire';
        break;
    default:
        $role_affiche = 'Utilisateur';
        break;
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modifier mon mot de passe</title>
  <style>
    .toggle-password {
      cursor: pointer;
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
    }

    .password-wrapper {
      position: relative;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <h1>Modifier mon mot de passe</h1>

    <!-- Message de bienvenue -->
    <h1>Bienvenue, <?php echo htmlspecialchars($user_nom); ?> (<?php echo htmlspecialchars($role_affiche); ?>)</h1>

  <!-- Message informatif sur l'utilisateur -->
  <p>Vous modifiez le mot de passe de : <strong><?php echo htmlspecialchars($user['prenom'] . ' ' . $user['nom']); ?></strong> (<?php echo htmlspecialchars($user['email']); ?>)</p>

  <?php if (!empty($message)): ?>
    <p style="color: red;"><?php echo htmlspecialchars($message); ?></p>
  <?php endif; ?>

  <form method="POST" action="">
    <div class="password-wrapper">
      <label for="ancien_mdp">Ancien mot de passe :</label>
      <input type="password" name="ancien_mdp" id="ancien_mdp" required>
      <span class="toggle-password" onclick="toggleVisibility('ancien_mdp')">oeil</span>
    </div>
    <div class="password-wrapper">
      <label for="nouveau_mdp">Nouveau mot de passe :</label>
      <input type="password" name="nouveau_mdp" id="nouveau_mdp" required>
      <span class="toggle-password" onclick="toggleVisibility('nouveau_mdp')">oeil</span>
    </div>
    <div class="password-wrapper">
      <label for="confirmation_mdp">Confirmez le nouveau mot de passe :</label>
      <input type="password" name="confirmation_mdp" id="confirmation_mdp" required>
      <span class="toggle-password" onclick="toggleVisibility('confirmation_mdp')">oeil</span>
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





