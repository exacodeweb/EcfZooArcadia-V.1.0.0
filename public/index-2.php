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







    h5 {
  display: flex;
  flex-direction: row;
  text-align: left;
  justify-content: left;
  width: 100%;
}

  </style>

</head>

<body>
  <!-- En-tête de la page avec la navigation -->
  <header>
    <nav class="navbar navbar-expand-lg"><!--  -->
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
        <!--</div>-->

        <!-- Lien pour l'accès administrateur --> <!--  
        <div class="Navbar__Link">
          <a class="nav-link" href="./php/login.php" title="Admin">--><!--./pages/admin-form-index.html--><!--

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512" width="16" height="16" aria-hidden="true"
              fill="currentColor" class="bi bi-unlock-fill text-white">
              <path
                d="M423 638H-9c-13.807 0-25-11.193-25-25 0-53.438 17.131-104.058 49.542-146.388 22.2-28.994 50.961-52.656 83.376-69.006C75.53 371.377 62 337.07 62 301c0-79.953 65.047-145 145-145s145 65.047 145 145c0 36.07-13.53 70.377-36.918 96.606 32.416 16.349 61.177 40.012 83.376 69.005C430.869 508.942 448 559.562 448 613c0 13.807-11.193 25-25 25zM17.657 588h378.687c-9.908-74.383-63.38-137.724-136.792-158.682a25 25 0 0 1-5.533-45.75C283.615 366.669 302 335.03 302 301c0-52.383-42.617-95-95-95s-95 42.617-95 95c0 34.03 18.386 65.668 47.981 82.568a25.003 25.003 0 0 1 12.423 24.712 25.003 25.003 0 0 1-17.956 21.038C81.037 450.276 27.564 513.617 17.657 588z">
              </path>
            </svg>
          </a>
        </div>-->

        <!-- Lien pour l'accès administrateur -->
        <div class="Navbar__Link">
          <!--<a class="nav-link nav-admin-link" href="../public/login.php" title="Admin">-->
          <a class="nav-link nav-admin-link" href="../config/login.php">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512" width="16" height="16" aria-hidden="true"
              fill="currentColor" class="bi bi-unlock-fill">
              <path d="M423 638H-9c-13.807 0-25-11.193-25-25 0-53.438 17.131-104.058 49.542-146.388 22.2-28.994 50.961-52.656 83.376-69.006C75.53 371.377 62 337.07 62 301c0-79.953 65.047-145 145-145s145 65.047 145 145c0 36.07-13.53 70.377-36.918 96.606 32.416 16.349 61.177 40.012 83.376 69.005C430.869 508.942 448 559.562 448 613c0 13.807-11.193 25-25 25zM17.657 588h378.687c-9.908-74.383-63.38-137.724-136.792-158.682a25 25 0 0 1-5.533-45.75C283.615 366.669 302 335.03 302 301c0-52.383-42.617-95-95-95s-95 42.617-95 95c0 34.03 18.386 65.668 47.981 82.568a25.003 25.003 0 0 1 12.423 24.712 25.003 25.003 0 0 1-17.956 21.038C81.037 450.276 27.564 513.617 17.657 588z"></path>
            </svg>
          </a>
        </div>

        <!-- Lien pour l'accès administrateur -->
        <div class="Navbar__Link">
          <!--<a class="nav-link nav-admin-link" href="./php/login.php" title="Admin">-->
          <a class="nav-link nav-admin-link" href="../public/login.php">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512" width="16" height="16" aria-hidden="true"
              fill="currentColor" class="bi bi-unlock-fill">
              <path d="M423 638H-9c-13.807 0-25-11.193-25-25 0-53.438 17.131-104.058 49.542-146.388 22.2-28.994 50.961-52.656 83.376-69.006C75.53 371.377 62 337.07 62 301c0-79.953 65.047-145 145-145s145 65.047 145 145c0 36.07-13.53 70.377-36.918 96.606 32.416 16.349 61.177 40.012 83.376 69.005C430.869 508.942 448 559.562 448 613c0 13.807-11.193 25-25 25zM17.657 588h378.687c-9.908-74.383-63.38-137.724-136.792-158.682a25 25 0 0 1-5.533-45.75C283.615 366.669 302 335.03 302 301c0-52.383-42.617-95-95-95s-95 42.617-95 95c0 34.03 18.386 65.668 47.981 82.568a25.003 25.003 0 0 1 12.423 24.712 25.003 25.003 0 0 1-17.956 21.038C81.037 450.276 27.564 513.617 17.657 588z"></path>
            </svg>
          </a>
        </div>


        <!-- Lien pour l'accès administrateur -->
        <div class="Navbar__Link">
          <!--<a class="nav-link nav-admin-link" href="./php/login.php" title="Admin">-->
          <a class="nav-link nav-admin-link" href="../public/connexion.php">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512" width="16" height="16" aria-hidden="true"
              fill="currentColor" class="bi bi-unlock-fill">
              <path d="M423 638H-9c-13.807 0-25-11.193-25-25 0-53.438 17.131-104.058 49.542-146.388 22.2-28.994 50.961-52.656 83.376-69.006C75.53 371.377 62 337.07 62 301c0-79.953 65.047-145 145-145s145 65.047 145 145c0 36.07-13.53 70.377-36.918 96.606 32.416 16.349 61.177 40.012 83.376 69.005C430.869 508.942 448 559.562 448 613c0 13.807-11.193 25-25 25zM17.657 588h378.687c-9.908-74.383-63.38-137.724-136.792-158.682a25 25 0 0 1-5.533-45.75C283.615 366.669 302 335.03 302 301c0-52.383-42.617-95-95-95s-95 42.617-95 95c0 34.03 18.386 65.668 47.981 82.568a25.003 25.003 0 0 1 12.423 24.712 25.003 25.003 0 0 1-17.956 21.038C81.037 450.276 27.564 513.617 17.657 588z"></path>
            </svg>
          </a>
        </div>


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
    <section id="habitats" class="text-left my-4"><!--  --><!-- services -->
      <div class="block">
      <h2>Nos Habitats</h2>
      <ul class="list-unstyled">
        <li>🌿 Savane</li>
        <li>🌳 Forêt tropicale</li>
        <li>🏜️ Désert</li>
      </ul>
      </div>


    



    </section>

    <!-- Section Services -->
    <section id="services" class="text-left my-4">
    <div class="block">
      <h2>Services Offerts</h2>
      <ul class="list-unstyled">
        <li>🍽️ Restauration</li>
        <li>🛍️ Boutique de souvenirs</li>
        <li>🧑‍🤝‍🧑 Visites guidées</li>
      </ul>
    </div>
    </section>

    <!-- Section Animaux avec grille d'images -->
    <!--<section id="animaux" class="text-left my-4"> --> <!--  -->
    <!--<section id="habitats" class="text-left my-4">--> <!--
    <div class="block">
      <h2>Nos Animaux</h2>
      <p>Venez rencontrer nos différentes espèces d'animaux, soigneusement sélectionnées pour leur bien-être.</p>
      <ul class="list-unstyled">
        <li>🦁 Lion</li>
        <li>🐘 Éléphant</li>
        <li>🦒 Girafe</li>
      </ul>
    </div>
    </section>-->
     
    <section id="presentation" class="text-center my-4"><!--  -->
      <div class="images-presentation"><!--  --> <!-- class="animal-grid" -->
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
            <ul class="list-unstyled-footer">
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
            <ul class="list-unstyled-footer">
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

  <!-- Scripts JavaScript nécessaires, y compris Bootstrap --><!-- "lien bundle" -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
