
<?php
// Inclusion de la configuration pour la base de données
$config = include('../config/config.php');//chemin/vers/votre/config.php

// Connexion à la base de données
$servername = $config['db']['host'];
$username = $config['db']['user'];
$password = $config['db']['pass'];
$dbname = $config['db']['dbname'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sélection des avis avec une limitation de 6 avis les plus récents approuvés
$sql = "SELECT id, nom AS username, message AS comment, note AS note, created_at AS timestamp, profile_pic FROM avisusers WHERE is_approved = 1 ORDER BY created_at DESC LIMIT 6";
$result = $conn->query($sql);

$avis = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $row['timestamp'] = (new DateTime($row['timestamp']))->format('d-m-Y H:i');
        $avis[] = $row;
    }
}

$conn->close();

// Générer le HTML pour chaque avis 
if (!empty($avis)) {
    foreach ($avis as $index => $av) {
        echo '<div class="carousel-item ' . ($index === 0 ? 'active' : '') . '">';
        echo '<div class="rating">';
        echo '<img class="profile-pic" src="./ratings_feedback/profile_pics/' . htmlspecialchars($av['profile_pic']) . '" alt="Profile Picture">';
        echo '<h3 class="profile-name">' . htmlspecialchars($av['username']) . '</h3>';
        echo '<p class="art-rtn">' . htmlspecialchars($av['comment']) . '</p>';
        echo '<div class="blockquote-footer">' . htmlspecialchars($av['timestamp']) . '</div>';
        echo '<p class="art-rtn">' . htmlspecialchars($av['note']) . '</p>';
        echo '</div>';
        echo '</div>';//chemin/vers/profile_pics/
    }
} else {
    echo '<p class="text-center">Aucun avis disponible pour le moment.</p>';
}
?>