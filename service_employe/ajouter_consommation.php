<?php
require '../config/database.php';

// Récupérer la liste des animaux
$animaux = $pdo->query("SELECT id, prenom, race FROM animaux ORDER BY prenom")->fetchAll(); // race
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Ajouter une consommation</title>
</head>

<body>
  <h2>Ajouter une consommation alimentaire</h2>

  <form action="traiter_consommation.php" method="POST">
    <label for="animal_id">Animal :</label>
    <select name="animal_id" required>
      <option value="">Sélectionner un animal</option>
      <?php foreach ($animaux as $animal) : ?>
        <option value="<?= $animal['id'] ?>"><?= $animal['prenom'] ?> (<?= $animal['race'] ?>)</option><!-- race -->
      <?php endforeach; ?>
    </select>
    <br><br>

    <label for="date">Date :</label>
    <input type="date" name="date" required>
    <br><br>

    <label for="heure">Heure :</label>
    <input type="time" name="heure" required>
    <br><br>

    <label for="nourriture">Nourriture :</label>
    <input type="text" name="nourriture" required>
    <br><br>

    <label for="quantite">Quantité (kg) :</label>
    <input type="number" name="quantite" step="0.1" required>
    <br><br>

    <button type="submit">Ajouter</button>
  </form>
</body>

</html>