<?php
//include 'config.php';
include '../config/database.php';

// Récupérer l'animal à modifier
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $stmt = $pdo->prepare("SELECT * FROM animaux WHERE id = ?");
    $stmt->execute([$id]);
    $animal = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Récupérer la liste des habitats
$habitats = $pdo->query("SELECT id, nom FROM habitats")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST["prenom"];
    $race = $_POST["race"];
    $images = json_encode(explode(',', $_POST["images"]));
    $habitat_id = $_POST["habitat_id"];

    $stmt = $pdo->prepare("UPDATE animaux SET prenom = ?, race = ?, images = ?, habitat_id = ? WHERE id = ?");
    if ($stmt->execute([$prenom, $race, $images, $habitat_id, $id])) {
        echo "Animal modifié avec succès !";
    } else {
        echo "Erreur lors de la modification.";
    }
}
?>

<form method="post">
    <label>Prénom :</label>
    <input type="text" name="prenom" value="<?= htmlspecialchars($animal['prenom']) ?>" required><br>

    <label>Race :</label>
    <input type="text" name="race" value="<?= htmlspecialchars($animal['race']) ?>" required><br>

    <label>Images (séparées par des virgules) :</label>
    <input type="text" name="images" value="<?= implode(',', json_decode($animal['images'], true)) ?>" required><br>

    <label>Habitat :</label>
    <select name="habitat_id" required>
        <?php foreach ($habitats as $habitat): ?>
            <option value="<?= $habitat['id'] ?>" <?= ($habitat['id'] == $animal['habitat_id']) ? 'selected' : '' ?>>
                <?= htmlspecialchars($habitat['nom']) ?>
            </option>
        <?php endforeach; ?>
    </select><br>

    <button type="submit">Modifier Animal</button>
</form>
<a href="liste_animaux.php">Retour</a>