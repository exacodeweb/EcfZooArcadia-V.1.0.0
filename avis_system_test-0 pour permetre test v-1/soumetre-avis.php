<?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "zoo_arcadia");

if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

$auteur = htmlspecialchars($_POST['auteur']); // Corrigé
$message = htmlspecialchars($_POST['message']);

$sql = "INSERT INTO Avis (auteur, message, statut) VALUES (?, ?, 'en_attente')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $auteur, $message); // Correspondance

if ($stmt->execute()) {
  echo "Merci pour votre avis ! Il sera modéré avant d'être publié.";
} else {
  echo "Erreur : " . $stmt->error;
}

$stmt->close();
$conn->close();
?>


<?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "zoo_arcadia");

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

$nom = htmlspecialchars($_POST['auteur']);
$message = htmlspecialchars($_POST['message']);

$sql = "INSERT INTO avis_2 (auteur, message, statut) VALUES (?, ?, 'en_attente')";
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