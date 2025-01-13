<!--?php
// Autoload des dépendances (fournies par Composer)
require_once '../vendor/autoload.php';

// Charger la configuration (par exemple, pour la connexion à la base de données)
require_once '../config/config.php';

// Initialiser l'application
$app = new App();

// Démarrer le routage (gérer les requêtes HTTP et les rediriger vers les bons contrôleurs)
$app->run();

?> -->



<!--
Photo entré d'un zoo écologique, accueillant du public, 
pour présenter le zoo dans la page d'accueil de mon site web.

Photo de l'entré d'un zoo pour acceder au parc, accueillant du public, 
pour présenter le zoo dans la page d'accueil de mon site web.

Image qui présente habitat animaux "lion, girafe, éléphant, 
dans leur environnement type savane", pour une page site zoo.

Une icône pour le Zoo Arcadia, avec un titre du nom du zoo.

Un logo avec Une icône pour le Zoo Arcadia, 
avec un titre du nom du zoo, qui est un bio park, orienté écologie.

Un logo avec Une icône , avec un titre que je peut modifier, 
qui concerne un zoo qui est un bio park, orienté écologie.

image pour Un logo avec Une icône, avec un titre que je peux modifier, qui concerne un zoo qui est un bio park, orienté écologie, représentant les animaux, lion, girafe, éléphant, etc.



"Design a modern, eco-friendly logo for the Zoo Arcadia (Bio Park) to be used in the navbar menu of the homepage. The logo should feature a stylized combination of natural elements such as trees, animals (like a lion, bird, or elephant), and a leaf or globe to reflect the zoo’s environmental and educational mission. The color palette should incorporate earthy tones—greens, blues, and browns—to represent nature and sustainability. The design should be minimalist yet vibrant, suitable for a clean and responsive web layout, with clear and legible typography for the name 'Zoo Arcadia'."

This logo would fit well in a modern and nature-centric zoo website design.
-->

<!--
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
    </div>  -->
<!-- Ajouter d'autres avis si nécessaire --> <!--
  </div>
  <button onclick="window.location.href='avis.html'">Voir tous les avis</button>
</section>


<section id="avis">
  <h2>Avis des Visiteurs</h2>
  <div class="avis-container">     
    <!-?php foreach ($reviews as $review): ?>
      <div class="avis">
        <p>"<!-?php echo htmlspecialchars($review['commentaire']); ?>"</p>
        <cite>- <!-?php echo htmlspecialchars($review['nom']); ?>, le <!-?php echo date('d/m/Y', strtotime($review['date_publication'])); ?></cite>
      </div>
    <!-?php endforeach; ?>
  </div>
</section>
    -->


<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Metadonnées SEO et encodage -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoo Arcadia - Accueil</title>

  <!-- Lien vers le fichier CSS principal -->
  <link rel="stylesheet" href="./asset/css/style-2.css">

  <!-- Lien vers Bootstrap pour le style et la mise en page responsive -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
          <a class="nav-link" href="./php/login.php" title="Admin"><!--./pages/admin-form-index.html-->

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512" width="16" height="16" aria-hidden="true"
              fill="currentColor" class="bi bi-unlock-fill">
              <path
                d="M423 638H-9c-13.807 0-25-11.193-25-25 0-53.438 17.131-104.058 49.542-146.388 22.2-28.994 50.961-52.656 83.376-69.006C75.53 371.377 62 337.07 62 301c0-79.953 65.047-145 145-145s145 65.047 145 145c0 36.07-13.53 70.377-36.918 96.606 32.416 16.349 61.177 40.012 83.376 69.005C430.869 508.942 448 559.562 448 613c0 13.807-11.193 25-25 25zM17.657 588h378.687c-9.908-74.383-63.38-137.724-136.792-158.682a25 25 0 0 1-5.533-45.75C283.615 366.669 302 335.03 302 301c0-52.383-42.617-95-95-95s-95 42.617-95 95c0 34.03 18.386 65.668 47.981 82.568a25.003 25.003 0 0 1 12.423 24.712 25.003 25.003 0 0 1-17.956 21.038C81.037 450.276 27.564 513.617 17.657 588z">
              </path>
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
      <div class="images-presentation">
      <div class="animal-grid">
        <div class="grid">
          <img src="../public/asset/images/image1.jpg" alt="Lion">
          <img src="../public/asset/images/image2.jfif" alt="Éléphant">
          <img src="../public/asset/images/image4.jfif" alt="Girafe">
        </div>
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
          <section class="content">
            <h5>Contact</h5>
            <ul class="list-unstyled">
              <li class="li"><a href="#" class="text-white">Zoo Arcadia</a></li>
              <li class="li">123 Rue Arcadia</li>
              <li class="li"> class="li"75001 Paris, France</li>
              <li class="li">Téléphone : +33 1 23 45 67</li>
            </ul>
          </section>
        </div>

        <!-- Liens d'information -->
        <div class="col-md-4 mb-3">
          <section class="content">
            <h5>Informations</h5>
            <ul class="list-unstyled">
              <li class="li"><a href="../index.html" class="text-white">Accueil</a></li>
              <li class="li"><a href="../rgpd/mentions_légales.html" class="text-white">Mentions légales</a></li>
              <li class="li"><a href="./a-propos-ecf.html" class="text-white">À propos de cette ECF</a></li>
            </ul>
          </section>
        </div>

        <!-- Liens vers les réseaux sociaux -->
        <div class="col-md-4 mb-3">
          <section class="content">
            <h5>Suivez-nous</h5>
            <a href="http://www.facebook.fr" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
            <a href="http://www.twitter.fr" class="text-white me-3"><i class="fab fa-twitter"></i></a>
          </section>
        </div>


        <!-- Section Réseaux sociaux -->
        <div class="col-md-4 mb-3">
          <section class="content"><!-- contact-f -->
            <h5 class="text-uppercase text-white">Suivez-nous</h5>
            <ul class="list-unstyled">
              <a href="http://www.facebook.fr" class="text-white me-3 mr-3"><i class=" text-wite fab fa-facebook-f"></i></a>
              <a href="http://www.twitter.fr" class="text-white me-3 mr-3"><i class="fab fa-twitter"></i></a>
              <!--<a href="http://www.x.com" class="text-white me-3 mr-3"><i class="fab fa-x-twitter"></i></a>-->
              <a href="http://www.instagram.com" class="text-white me-3 mr-3"><i class="fab fa-instagram"></i></a>
              <a href="http://www.linkedin.fr" class="text-white"><i class="fab fa-linkedin-in"></i></a>
            </ul>
          </section>
        </div>

      </div>
    </div>
    <!-- Copyright -->
    <div class="text-center py-3 ">
      <small>&copy; 2024 Zoo Arcadia. Tous droits réservés.</small><!--Garage Vincent Parrot-->
    </div>
  </footer>

  <!-- Scripts JavaScript nécessaires, y compris Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>




<!--------------------------------------------------------------------------------------------------------------------->