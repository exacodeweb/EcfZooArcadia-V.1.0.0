<?php
//$conn = new mysqli("localhost", "root", "G1i9e6t3", "zoo_arcadia");
$conn = new mysqli("localhost", "utilisateur_zoo", "Z00_Arcadia!2024", "zoo_arcadia");

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

// Vérifiez que les champs POST sont définis
if (isset($_POST['auteur']) && isset($_POST['message'])) {
    $auteur = htmlspecialchars($_POST['auteur']);
    $message = htmlspecialchars($_POST['message']);

    $sql = "INSERT INTO avis (message, auteur, statut) VALUES (?, ?, 'en_attente')";// Avis changer en avis
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $message, $auteur);

    if ($stmt->execute()) {
        echo "Merci pour votre avis ! Il sera modéré avant d'être publié.";
    } else {
        echo "Erreur : " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Erreur : Tous les champs sont requis.";
}

$conn->close();
?>




<!--?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "zoo_arcadia");

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

// Vérifiez que les champs POST sont définis
if (isset($_POST['nom']) && isset($_POST['message'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $message = htmlspecialchars($_POST['message']);

    $sql = "INSERT INTO Avis (message, auteur, statut) VALUES (?, ?, 'en_attente')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $message, $nom);

    if ($stmt->execute()) {
        echo "Merci pour votre avis ! Il sera modéré avant d'être publié.";
    } else {
        echo "Erreur : " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Erreur : Tous les champs sont requis.";
}

$conn->close();
?>




<!--?php // fichier soumetre-avis.php 
$conn = new mysqli("localhost", "root", "G1i9e6t3", "zoo_arcadia");

if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

$nom = htmlspecialchars($_POST['nom']);
$message = htmlspecialchars($_POST['message']);

$sql = "INSERT INTO Avis (message, auteur, statut) VALUES (?, ?, 'en_attente')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nom, $message);

if ($stmt->execute()) {
  echo "Merci pour votre avis ! Il sera modéré avant d'être publié.";
} else {
  echo "Erreur : " . $stmt->error;
}

$stmt->close();
$conn->close();
?>


