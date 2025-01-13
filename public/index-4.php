<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Metadonnées SEO et encodage -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoo Arcadia - Accueil</title>

  <!-- Lien vers le fichier CSS principal -->
  <link rel="stylesheet" href="./asset/css/style.css">

  <!-- Lien vers Bootstrap pour le style et la mise en page responsive -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Styles internes pour des personnalisations spécifiques -->
  <style>
    /* Flexbox pour aligner les images et sections de présentation */
    .images-presentation, .animal-grid {
      display: flex;
      justify-content: center;
      text-align: center;
    }

    /* Suppression de l'espace par défaut autour de la page */
    .container-fluid {
      padding: 0 !important;
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
        <div class="menu">
          <ul>
            <li><a class="nav-link" href="#presentation">Présentation</a></li>
            <li><a class="nav-link" href="#habitats">Habitats</a></li>
            <li><a class="nav-link" href="#services">Services</a></li>
            <li><a class="nav-link" href="#animaux">Animaux</a></li>
            <li><a class="nav-link" href="#avis">Avis</a></li>
          </ul>
        </div>

        <!-- Lien pour l'accès administrateur -->
        <div class="Navbar__Link">
          <a class="nav-link" href="./php/login.php" title="Admin">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512" width="16" height="16" aria-hidden="true"
              fill="currentColor" class="bi bi-unlock-fill">
              <path d="M423 638H-9c-13.807 0-25-11.193-25-25 0-53.438 17.131-104.058 49.542-146.388..."></path>
            </svg>
          </a>
        </div>
      </div>
    </nav>
  </header>

  <!-- Contenu principal de la page -->
  <main>
    <!-- Section Présentation -->
    <section id="presentation">
      <h1>Bienvenue au Zoo Arcadia</h1>
      <p>Découvrez notre zoo, entièrement indépendant en matière d'énergie et engagé envers l'écologie.</p>
      <div class="images-presentation">
        <div class="animal-grid">
          <!-- Images de présentation du zoo -->
          <div class="grid">
            <img src="../public/asset/images/image5.jfif" alt="Image du zoo" />
            <img src="../public/asset/images/image6.jfif" alt="Image des animaux" />
            <img src="../public/asset/images/images7.jfif" alt="Image d'habitat" />
          </div>
        </div>
      </div>
    </section>

    <!-- Section Habitats -->
    <section id="habitats">
      <h2>Nos Habitats</h2>
      <ul>
        <li>🌿 Savane</li>
        <li>🌳 Forêt tropicale</li>
        <li>🏜️ Désert</li>
      </ul>
    </section>

    <!-- Section Services -->
    <section id="services">
      <h2>Services Offerts</h2>
      <ul>
        <li>🍽️ Restauration</li>
        <li>🛍️ Boutique de souvenirs</li>
        <li>🧑‍🤝‍🧑 Visites guidées</li>
      </ul>
    </section>

    <!-- Section Animaux avec grille d'images -->
    <section id="animaux">
      <h2>Nos Animaux</h2>
      <p>Venez rencontrer nos différentes espèces d'animaux, soigneusement sélectionnées pour leur bien-être.</p>
      <ul>
        <li>🦁 Lion</li>
        <li>🐘 Éléphant</li>
        <li>🦒 Girafe</li>
      </ul>
      <div class="animal-grid">
        <div class="grid">
          <img src="../public/asset/images/image1.jpg" alt="Lion">
          <img src="../public/asset/images/image2.jfif" alt="Éléphant">
          <img src="../public/asset/images/image4.jfif" alt="Girafe">
        </div>
      </div>
    </section>

    <!-- Section Avis des visiteurs -->
    <section id="avis">
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
      <button onclick="window.location.href='avis.html'">Voir tous les avis</button>
    </section>
  </main>

  <!-- Pied de page avec liens de contact et réseaux sociaux -->
  <footer class="bg-dark text-white py-4">
    <div class="container">
      <div class="row text-center text-md-left">
        <!-- Contact du zoo -->
        <div class="col-md-4 mb-3">
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
        <div class="col-md-4 mb-3">
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
        <div class="col-md-4 mb-3">
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











<style>
/* Style général */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

body {
  background-color: #f5f5f5;
  color: #333;
}

/* Header et Menu */
header {
  background-color: #2b2b2b;
}

.navbar {
  padding: 1rem;
}

.navbar-nav .nav-link {
  color: #ffffff;
  font-weight: bold;
  padding: 0.5rem 1rem;
  transition: color 0.3s;
}

.navbar-nav .nav-link:hover {
  color: #f2a007;
}

/* Logo dans l'en-tête */
.img-logo-1 img {
  max-width: 100px;
  width: 100%;
}

/* Présentation */
#presentation h1 {
  font-size: 2.5rem;
  color: #2b2b2b;
  margin-bottom: 1rem;
}

#presentation p {
  font-size: 1.2rem;
  margin-bottom: 2rem;
  color: #555;
}

.images-presentation {
  display: flex;
  justify-content: center;
  gap: 1rem;
  flex-wrap: wrap;
}

.images-presentation img {
  max-width: 150px;
  width: 100%;
  height: auto;
  border-radius: 10px;
}

/* Habitats, Services, Animaux */
section {
  margin: 2rem 0;
  text-align: center;
}

section h2 {
  font-size: 2rem;
  color: #333;
  margin-bottom: 1rem;
}

section ul {
  list-style-type: none;
  padding: 0;
}

section ul li {
  font-size: 1.2rem;
  margin: 0.5rem 0;
}

/* Grille d'images pour les animaux */
.animal-grid {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 1rem;
}

.animal-grid img {
  max-width: 150px;
  width: 100%;
  height: auto;
  border-radius: 10px;
}

/* Avis des visiteurs */
#avis .avis-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 1rem;
}

#avis .avis {
  background-color: #f2f2f2;
  padding: 1rem;
  border-radius: 10px;
  max-width: 300px;
  width: 100%;
  font-style: italic;
}

#avis .avis cite {
  display: block;
  margin-top: 0.5rem;
  font-size: 0.9rem;
  color: #555;
}

/* Bouton Voir tous les avis */
#avis button {
  margin-top: 1rem;
  background-color: #f2a007;
  color: #fff;
  border: none;
  padding: 0.75rem 1.5rem;
  font-size: 1rem;
  cursor: pointer;
  transition: background-color 0.3s;
}

#avis button:hover {
  background-color: #d28b06;
}

/* Pied de page */
footer {
  background-color: #2b2b2b;
  color: #fff;
  padding: 2rem 0;
}

footer h5 {
  color: #f2a007;
  margin-bottom: 1rem;
}

footer ul {
  list-style-type: none;
  padding: 0;
}

footer ul li {
  margin: 0.5rem 0;
}

footer a {
  color: #f2a007;
  text-decoration: none;
  transition: color 0.3s;
}

footer a:hover {
  color: #fff;
}

/* Responsive Design */
@media (max-width: 768px) {
  /* Taille du texte réduite pour les petits écrans */
  #presentation h1 {
    font-size: 2rem;
  }

  #presentation p, section h2 {
    font-size: 1.5rem;
  }

  /* Ajustement des grilles d'images */
  .images-presentation img, .animal-grid img {
    max-width: 120px;
  }

  /* Centrage des éléments de navigation */
  .navbar-nav {
    flex-direction: column;
    align-items: center;
  }

  /* Pied de page en mode pile */
  footer .row {
    flex-direction: column;
    text-align: center;
  }
}

@media (max-width: 576px) {
  /* Logo et images encore plus réduits pour mobiles */
  .img-logo-1 img {
    max-width: 80px;
  }

  .images-presentation img, .animal-grid img {
    max-width: 100px;
  }

  /* Ajustement de la taille des sections de texte */
  #presentation h1 {
    font-size: 1.5rem;
  }

  #presentation p, section h2 {
    font-size: 1.2rem;
  }

  /* Footer centré */
  footer ul {
    padding: 0;
    text-align: center;
  }

  /* Sections du footer en colonne */
  footer .col-md-4 {
    text-align: center;
    margin-bottom: 10px;
  }
}
</style>
