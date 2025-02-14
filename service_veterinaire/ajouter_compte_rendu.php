<?php
require '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $animal_id = $_POST['animal_id'];
    $veterinaire_id = $_POST['veterinaire_id'];
    $etat_animal = $_POST['etat_animal'];
    $nourriture_proposee = $_POST['nourriture_proposee'];
    $grammage = $_POST['grammage'];
    $date_passage = $_POST['date_passage'];
    $details_etat = $_POST['details_etat'];

    $stmt = $pdo->prepare("
        INSERT INTO comptes_rendus_veterinaires (animal_id, veterinaire_id, etat_animal, nourriture_proposee, grammage, date_passage, details_etat) 
        VALUES (?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt->execute([$animal_id, $veterinaire_id, $etat_animal, $nourriture_proposee, $grammage, $date_passage, $details_etat]);

    echo "Compte-rendu ajouté avec succès.";
}

$animal_id = $_GET['animal_id'] ?? '';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajout Compte-Rendu</title>
</head>
<body>
    <h2>Remplir un Compte-Rendu</h2>
    <form method="post">
        <input type="hidden" name="animal_id" value="<?= $animal_id ?>">
        <input type="hidden" name="veterinaire_id" value="1"> <!-- Remplacer par l'ID du vétérinaire connecté -->
        <label>État de l'Animal :</label>
        <input type="text" name="etat_animal" required><br>

        <label>Nourriture Proposée :</label>
        <input type="text" name="nourriture_proposee"><br>

        <label>Grammage (kg) :</label>
        <input type="number" step="0.01" name="grammage"><br>

        <label>Date de Passage :</label>
        <input type="date" name="date_passage" required><br>

        <label>Détails sur l'État :</label>
        <textarea name="details_etat"></textarea><br>

        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>