<?php
//include 'config.php';
include '../config/database.php';

if (isset($_GET["id"])) {
    $stmt = $pdo->prepare("DELETE FROM animaux WHERE id = ?");
    if ($stmt->execute([$_GET["id"]])) {
        echo "Animal supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression.";
    }
}
?>
<a href="liste_animaux.php">Retour</a>