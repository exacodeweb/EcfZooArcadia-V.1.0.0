<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Zoo Arcadia - Accueil</title>
  <link rel="stylesheet" href="assets/css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&family=Rajdhani:wght@400;700&display=swap" rel="stylesheet">


  <!--style de police d'ecriture-->
  <link href="https://fonts.cdnfonts.com/css/rajdhani" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">

  <!-- ajouter au code le 09/10/2024 Test-->
  <title>Test Dropdown</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="#presentation">Présentation</a></li>
        <li><a href="#habitats">Habitats</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#animaux">Animaux</a></li>
        <li><a href="#avis">Avis</a></li>
      </ul>
    </nav>


    <!-- ajouter au code le 09/10/2024 Test -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>

  <main>
    <section id="presentation">
      <h1>Bienvenue au Zoo Arcadia</h1>
      <p>Découvrez notre zoo indépendant et écologique.</p>
    </section>
  </main>

  <footer>
    <p>&copy; 2024 Zoo Arcadia. Tous droits réservés.</p>
  </footer>
  <!-- ajouter au code le 09/10/2024 Test -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>







<?php include_once '../shared/header.php'; ?>
<?php include_once '../shared/navbar.php'; ?>

<main>
  <section id="presentation">
    <h1>Bienvenue au Zoo Arcadia</h1>
    <p>Découvrez notre zoo, entièrement indépendant en matière d'énergie et engagé envers l'écologie.</p>
    <div class="images-presentation">
      <img src="/public/assets/images/animal1.jpg" alt="Image du zoo" />
      <img src="/public/assets/images/animal2.jpg" alt="Image des animaux" />
      <img src="/public/assets/images/animal3.jpg" alt="Image des box" />
      <!-- Ajoutez d'autres images si nécessaire -->
    </div>
  </section>

  <section id="habitats">
    <h2>Nos Habitats</h2>
    <ul>
      <?php foreach ($habitats as $habitat): ?>
        <li><?= htmlspecialchars($habitat->name) ?></li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section id="services">
    <h2>Services Offerts</h2>
    <ul>
      <?php foreach ($services as $service): ?>
        <li><?= htmlspecialchars($service->name) ?></li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section id="animaux">
    <h2>Nos Animaux</h2>
    <ul>
      <?php foreach ($animals as $animal): ?>
        <li><?= htmlspecialchars($animal->name) ?></li>
      <?php endforeach; ?>
    </ul>
    <!--Photo de Andreas Schantl sur Unsplash 'Lion' -->

    <div class="animal-grid">
      <img src="/images/lion.jpg" alt="Lion" width="400" height="300">
      <img src="/images/elephant.jpg" alt="Éléphant" width="400" height="300">
      <img src="/images/giraffe.jpg" alt="Girafe" width="400" height="300">
    </div>


  </section>

  <section id="avis">
    <h2>Avis des Visiteurs</h2>
    <div class="avis-container">
      <?php foreach ($reviews as $review): ?>
        <div class="avis">
          <p><?= htmlspecialchars($review->content) ?></p>
          <cite>- <?= htmlspecialchars($review->visitor_name) ?></cite>
        </div>
      <?php endforeach; ?>
    </div>
    <button onclick="window.location.href='avis.php'">Voir tous les avis</button>
  </section>
</main>

<?php include_once '../shared/footer.php'; ?>