<?php
// contact.php - Page pour permettre aux visiteurs d'envoyer des messages ou des questions
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Zoo Arcadia</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
  <header>
    <h1>Contactez-nous</h1>
  </header>

  <main>
    <form action="contact_process.php" method="post">
      <label for="name">Nom :</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email :</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message :</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <button type="submit">Envoyer</button>
    </form>
  </main>

  <footer>
    <p>&copy; 2024 Zoo Arcadia. Tous droits réservés.</p>
  </footer>
</body>

</html>