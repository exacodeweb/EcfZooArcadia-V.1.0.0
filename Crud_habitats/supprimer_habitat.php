<?php
//include 'config.php';
include '../config/database.php';

if (isset($_GET["id"])) {
    $stmt = $pdo->prepare("DELETE FROM habitats WHERE id = ?");
    if ($stmt->execute([$_GET["id"]])) {
        echo "Habitat supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression.";
    }
}
?>
<a href="liste_habitats.php">Retour</a>