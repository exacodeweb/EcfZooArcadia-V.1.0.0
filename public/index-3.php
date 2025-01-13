<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoo Arcadia - Accueil</title>

  <!-- Lien vers le fichier CSS principal -->
  <link rel="stylesheet" href="./asset/css/style-2.css">

  <!-- Lien vers Bootstrap pour le style et la mise en page responsive -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Styles internes pour des personnalisations spécifiques -->
  <style>
    /* Flexbox pour aligner les images et sections de présentation */
    .images-presentation, .animal-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      text-align: center;
    }

    /* Suppression de l'espace par défaut autour de la page */
    .container-fluid {
      padding: 0 !important;
    }

    /* Style des images de la grille pour qu'elles s'ajustent bien sur mobile */
    .animal-grid img {
      width: 100%;
      max-width: 150px;
      margin: 5px;
    }

    /* Style de la navigation pour les petits écrans */
    .menu ul {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    
    /* Ajustements du logo et menu sur petits écrans */
    .img-logo-1 img {
      max-width: 80px;
      margin: auto;
    }

    @media (max-width: 576px) {
      /* Ajustement des images de présentation */
      .images-presentation img {
        width: 100%;
        max-width: 120px;
        margin: 5px;
      }

      /* Ajustement du texte dans les sections */
      h1, h2 {
        font-size: 1.5em;
      }

      /* Pied de page pour les écrans étroits */
      footer ul {
        padding: 0;
        text-align: center;
      }

      /* Centrage des sections de footer */
      footer .col-md-4 {
        text-align: center;
        margin-bottom: 10px;
      }
    }
  </style>
</head>

<body>
  <!-- En-tête de la page avec la navigation -->
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <!-- Logo du zoo -->
        <div class="img-logo-1 rounded-3">
          <img src="../public/asset/images/logo.jpg" class="logo" alt="logo zoo">
        </div>

        <!-- Menu de navigation principal -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto text-center">
            <li class="nav-item"><a class="nav-link" href="#presentation">Présentation</a></li>
            <li class="nav-item"><a class="nav-link" href="#habitats">Habitats</a></li>
            <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#animaux">Animaux</a></li>
            <li class="nav-item"><a class="nav-link" href="#avis">Avis</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Contenu principal de la page -->
  <main class="container">
    <!-- Section Présentation -->
    <section id="presentation" class="text-center my-4">
      <h1>Bienvenue au Zoo Arcadia</h1>
      <p>Découvrez notre zoo, entièrement indépendant en matière d'énergie et engagé envers l'écologie.</p>
      <div class="images-presentation">
        <img src="../public/asset/images/image5.jfif" alt="Image du zoo" class="img-fluid rounded">
        <img src="../public/asset/images/image6.jfif" alt="Image des animaux" class="img-fluid rounded">
        <img src="../public/asset/images/images7.jfif" alt="Image d'habitat" class="img-fluid rounded">
      </div>
    </section>

    <!-- Section Habitats -->
    <section id="habitats" class="text-center my-4">
      <h2>Nos Habitats</h2>
      <ul class="list-unstyled">
        <li>🌿 Savane</li>
        <li>🌳 Forêt tropicale</li>
        <li>🏜️ Désert</li>
      </ul>
    </section>

    <!-- Section Services -->
    <section id="services" class="text-center my-4">
      <h2>Services Offerts</h2>
      <ul class="list-unstyled">
        <li>🍽️ Restauration</li>
        <li>🛍️ Boutique de souvenirs</li>
        <li>🧑‍🤝‍🧑 Visites guidées</li>
      </ul>
    </section>

    <!-- Section Animaux avec grille d'images -->
    <section id="animaux" class="text-center my-4">
      <h2>Nos Animaux</h2>
      <p>Venez rencontrer nos différentes espèces d'animaux, soigneusement sélectionnées pour leur bien-être.</p>
      <ul class="list-unstyled">
        <li>🦁 Lion</li>
        <li>🐘 Éléphant</li>
        <li>🦒 Girafe</li>
      </ul>
      <div class="animal-grid">
        <img src="../public/asset/images/image1.jpg" alt="Lion" class="img-fluid rounded">
        <img src="../public/asset/images/image2.jfif" alt="Éléphant" class="img-fluid rounded">
        <img src="../public/asset/images/image4.jfif" alt="Girafe" class="img-fluid rounded">
      </div>
    </section>

    <!-- Section Avis des visiteurs -->
    <section id="avis" class="text-center my-4">
      <h2>Avis des Visiteurs</h2>
      <div class="avis-container">
        <div class="avis">
          <p>“Une expérience incroyable ! Les habitats sont magnifiques.”</p>
          <cite>- Jean Dupont</cite>
        </div>
        <div class="avis">
          <p>“Le zoo est bien entretenu et les animaux sont bien traités.”</p>
          <cite>- Marie Curie</cite>
        </div>
      </div>
      <button onclick="window.location.href='avis.html'" class="btn btn-primary mt-3">Voir tous les avis</button>
    </section>
  </main>

  <!-- Pied de page avec liens de contact et réseaux sociaux -->
  <footer class="bg-dark text-white py-4">
    <div class="container">
      <div class="row text-center text-md-left">
        <!-- Contact du zoo -->
        <div class="col-12 col-md-4 mb-3">
          <section>
            <h5>Contact</h5>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Ailes Enchantées</a></li>
              <li>123 Rue Lepidoptère</li>
              <li>75001 Paris, France</li>
              <li>Téléphone : +33 1 23 45 67</li>
            </ul>
          </section>
        </div>

        <!-- Liens d'information -->
        <div class="col-12 col-md-4 mb-3">
          <section>
            <h5>Informations</h5>
            <ul class="list-unstyled">
              <li><a href="../index.html" class="text-white">Accueil</a></li>
              <li><a href="../rgpd/mentions_légales.html" class="text-white">Mentions légales</a></li>
              <li><a href="./a-propos-ecf.html" class="text-white">À propos de cette ECF</a></li>
            </ul>
          </section>
        </div>

        <!-- Liens vers les réseaux sociaux -->
        <div class="col-12 col-md-4 mb-3">
          <section>
            <h5>Suivez-nous</h5>
            <a href="http://www.facebook.fr" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
            <a href="http://www.twitter.fr" class="text-white me-3"><i class="fab fa-twitter"></i></a>
          </section>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts JavaScript nécessaires, y compris Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>