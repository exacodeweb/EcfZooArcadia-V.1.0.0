<?php
include './config/config.php';

if ($pdo) {
    echo "Connexion réussie !";
} else {
    echo "Erreur de connexion.";
}
?>