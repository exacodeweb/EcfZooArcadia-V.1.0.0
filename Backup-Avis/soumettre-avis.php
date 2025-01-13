<?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "zoo_arcadia");

if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

$nom = htmlspecialchars($_POST['nom']);
$message = htmlspecialchars($_POST['message']);

$sql = "INSERT INTO Avis (nom, message, statut) VALUES (?, ?, 'en_attente')";
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




<?php
// Connexion à la base de données
$conn = new mysqli("localhost", "root", "G1i9e6t3", "zoo_arcadia");

// Vérifie la connexion
if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

// Récupère les données du formulaire
$nom = htmlspecialchars($_POST['nom']);
$message = htmlspecialchars($_POST['message']);

// Insère l'avis dans la base de données
$sql = "INSERT INTO Avis (nom, message, statut) VALUES (?, ?, 'en_attente')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nom, $message);

if ($stmt->execute()) {
  echo "Merci pour votre avis ! Il sera modéré avant d'être publié.";
} else {
  echo "Erreur lors de l'envoi de votre avis : " . $conn->error;
}

$stmt->close();
$conn->close();
?>