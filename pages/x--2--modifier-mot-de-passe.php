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



<!------------------------------------------------------------------------------------------->
<?php
session_start();
require '../public/utilise.php'; // Connexion à la base de données

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header('Location: ../config/login.php');
    exit();
}

// Récupérer les informations de l'utilisateur connecté
$user_id = $_SESSION['user_id'];

$stmt = $pdo->prepare("SELECT prenom, nom, email FROM utilisateurs WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    die("Utilisateur introuvable.");
}

// Récupérer le rôle depuis la session
$user_nom = $user['nom'];
$user_role = $_SESSION['role'];

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
  <h1>Bienvenue, <?php echo htmlspecialchars($user['prenom'] . ' ' . $user['nom']); ?> (<?php echo htmlspecialchars($role_affiche); ?>)</h1>

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

<!---------------------------------------------------------------------------------------------------------------->

<?php
session_start();
require '../public/utilise.php'; // Connexion à la base de données

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header('Location: ../config/login.php');
    exit();
}

// Récupérer l'ID utilisateur depuis la session
$user_id = $_SESSION['user_id'];

// Requête pour récupérer les informations de l'utilisateur
$stmt = $pdo->prepare("SELECT prenom, nom, email FROM utilisateurs WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Vérifiez si l'utilisateur existe
if (!$user) {
    die("Erreur : utilisateur introuvable dans la base de données.");
}

// Récupérer le rôle de l'utilisateur depuis la session
$user_role = $_SESSION['role'] ?? 'invité';

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
  <h1>Bienvenue, <?php echo htmlspecialchars($user['prenom'] . ' ' . $user['nom']); ?> (<?php echo htmlspecialchars($role_affiche); ?>)</h1>

  <!-- Message informatif sur l'utilisateur -->
  <p>Vous modifiez le mot de passe de : 
    <strong><?php echo htmlspecialchars($user['prenom'] . ' ' . $user['nom']); ?></strong> 
    (<?php echo htmlspecialchars($user['email']); ?>)
  </p>

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

<!----------------------------------------------------------------------------------------------------------->

<?php
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

// Requête pour récupérer les informations de l'utilisateur
$stmt = $pdo->prepare("SELECT prenom, nom, email FROM utilisateurs WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Vérifiez si l'utilisateur existe
if (!$user) {
    die("Erreur : utilisateur introuvable dans la base de données.");
}

// Récupérer le rôle de l'utilisateur depuis la session
$user_role = $_SESSION['role'] ?? 'invité';

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
</head>

<body>
  <h1>Bienvenue, <?php echo htmlspecialchars($user['prenom'] . ' ' . $user['nom']); ?> (<?php echo htmlspecialchars($role_affiche); ?>)</h1>



</body>
</html>


