<!--?php
include 'includes/db-connection.php';

// Récupérer tous les habitats
$sql = "SELECT id, nom, JSON_UNQUOTE(JSON_EXTRACT(images, '$[0]')) AS image FROM habitats";
$stmt = $pdo->query($sql);
?>-->
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des Habitats</title>
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="styles.css">




  <!--=============================================================================================================-->
  <!--<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" media="screen">-->
  <!--<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" media="screen"/>-->
  <!--<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
  <!--=============================================================================================================-->

  <!-- Ajoutez les styles de typographie ici -->
  <link rel="stylesheet" href="./fonts/fonts-style-1.css" type="text/css">
  <!-- Import des polices -->
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500&display=swap" rel="stylesheet">


  <!---------------------------------------------------------------------------------------------------->
  <!-- Lien vers Bootstrap pour le style et la mise en page responsive 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">-->

  <!--style de police d'ecriture--><!--
  <link href="https://fonts.cdnfonts.com/css/rajdhani" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">-->

  <!-- Ajoutez les styles de typographie ici -->
  <link rel="stylesheet" href="./fonts/fonts-style-1.css" type="text/css">
  <!-- Import des polices -->
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500&display=swap" rel="stylesheet">
  <!---------------------------------------------------------------------------------------------------->

<style>

    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }


/* Styles généraux */
body {
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
  color: #333;
  line-height: 1.6;
}

/* En-tête *//*
header {
  background-color: #2a7e50;
  color: white;
  padding: 10px 20px;
  /*box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);*//*
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  max-width: 120px;
  border-radius: 5px;
}*/

.menu-toggle {
  display: none;
  font-size: 1.8rem;
  cursor: pointer;
}/*

.nav-links {
  display: flex;
  gap: 15px;
  list-style: none;
}

.nav-links a {
  text-decoration: none;
  color: white;
  padding: 8px 15px;
  border-radius: 5px;
  transition: background-color 0.3s, color 0.3s;
}

.nav-links a:hover {
  background-color: #f2a007;
  color: white;
}*/

/* Contenu principal */
h1 {
  text-align: center;
  font-size: 2.5rem;
  color: #2c3e50;
  margin: 20px 0;
}

.habitats-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
  padding: 20px;
}

.habitat {
  background-color: white;
  border: 1px solid #ddd;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  text-align: center;
  width: 300px;
  transition: transform 0.3s, box-shadow 0.3s;
}

.habitat:hover {
  transform: translateY(-5px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.habitat img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.habitat h3 {
  font-size: 1.2rem;
  margin: 10px 0;
  color: #333;
}

.btn-details {
  display: inline-block;
  margin: 15px 0;
  padding: 10px 20px;
  background-color: #2a7e50;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s;
}

.btn-details:hover {
  background-color: #f2a007;
}

/* Pied de page */
footer {
  background-color: #2a7e50;
  color: white;
  text-align: center;
  padding: 10px;
  font-size: 0.9rem;
}

/* Responsive */
@media (max-width: 768px) {/*
  .menu-toggle {
    display: block;
  }

  .nav-links {
    display: none;
    flex-direction: column;
    background-color: #2a7e50;
    position: absolute;
    top: 60px;
    right: 20px;
    padding: 10px;
    border-radius: 5px;
  }

  .nav-links.active {
    display: flex;
  }*/

  .habitats-list {
    flex-direction: column;
    gap: 15px;
  }

  .habitat {
    width: 90%;
  }
}

@media (min-width: 769px) and (max-width: 1200px) {
  .habitats-list {
    gap: 15px;
  }

  .habitat {
    width: 45%;
  }
}
</style>











  <style>
    /* Styles généraux *//*
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }*/

    /*---------------------------------------*//*
    header {
      background-color: #2b2b2b;
      /**/
      /*#4CAF50*//*
    }*/
/*
    .navbar {
      padding: 1rem;
    }*/
/*
    .navbar-nav .nav-link {
      color: #ffffff;
      font-weight: bold;
      padding: 0.5rem 1rem;
      transition: color 0.3s;
    }

    .navbar-nav .nav-link:hover {
      color: #f2a007;
    }

    /* Logo dans l'en-tête *//*
    .img-logo-1 img {
      max-width: 100px;
      width: 100%;
    }*/

    /* Styles globaux *//*
    .nav-links {
      display: flex;
      gap: 20px;
      list-style: none;
      transition: transform 0.3s ease;

    }*/

    /* Alignement du logo et du bouton hamburger *//*
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: #2A7E50;
      /*#333*//*
      color: white;
      /*whhite*//*
    }*/

    /* Logo *//*
    .logo {
      height: 75px;
      /*50px*/
      /* Ajustez la taille selon votre logo *//*
      border-radius: 4px;
    }*/

    /* Bouton hamburger */
    .menu-toggle {
      font-size: 28px;
      cursor: pointer;
      display: none;
      /* Masquer par défaut sur les grands écrans */
    }

    /* Lien de navigation *//*
    .nav-links a {
      text-decoration: none;
      color: white;
      padding: 10px;
      text-align: center;


      transition: color 0.3s ease;
      /* Transition douce pour l'effet de survol *//*
    }*/

    /*----*//*
    .nav-links a:hover {
      color: #F2A007;
      /* Couleur au survol */
      /*#007BFF*//*
    }*/

    /*---------------------------------------*//*

    h1 {
      font-size: 32px;
      color: #2c3e50;
      margin-bottom: 10px;
      text-align: center;
    }*/

    /* Conteneur de la liste des habitats *//*
    .habitats-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      padding: 20px;
    }*/

    /* Carte individuelle d'habitat *//*
    .habitat {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      text-align: center;
      width: 300px;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .habitat:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }*/

    /* Image des habitats *//*
    .habitat img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }*/

    /* Titre de l'habitat *//*
    .habitat h3 {
      margin: 10px 0;
      font-size: 1.2em;
      color: #333;
    }*/

    /* Bouton de détails *//*
    .btn-details {
      display: inline-block;
      margin: 10px 0 20px;
      padding: 10px 15px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.2s;
    }

    .btn-details:hover {
      background-color: #0056b3;
    }*/

    /* Responsive *//*
    @media (max-width: 768px) {
      .habitats-list {
        flex-direction: column;
        align-items: center;
      }

      .habitat {
        width: 90%;
      }
    }

    @media (min-width: 769px) and (max-width: 1200px) {
      .habitats-list {
        gap: 15px;
      }

      .habitat {
        width: 45%;
      }
    }*/
  </style>




</head>

<body>

<?php include './includes/header.php'; ?>

  <!--<header>
    <nav class="navbar">
      <img src="./assets/logos/ZOO_ARCADIA.jpg" alt="Logo Zoo Arcadia" class="logo">--><!-- ../public/assets/images/Logo-Arcadia-(9).jpg -->
      <!-- Bouton Hamburger --> <!--
      <span class="menu-toggle" id="menuToggle">☰</span>

      <ul class="nav-links" id="navLinks">
        <li><a href="#hero">Accueil</a></li>
        <li><a href="#habitats">Habitats</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#about">À propos</a></li>
        <li><a href="./public/contact/contact.html">Contact</a></li>--><!-- #contact -->

        <!-- Lien pour l'accès administrateur -->
        <!--<div class="Navbar__Link">
            <a class="nav-link nav-admin-link" href="./public/login.php" title="Admin">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512" width="16" height="16" aria-hidden="true"
                fill="currentColor" class="bi bi-unlock-fill">
                <path d="M423 638H-9c-13.807 0-25-11.193-25-25 0-53.438 17.131-104.058 49.542-146.388 22.2-28.994 50.961-52.656 83.376-69.006C75.53 371.377 62 337.07 62 301c0-79.953 65.047-145 145-145s145 65.047 145 145c0 36.07-13.53 70.377-36.918 96.606 32.416 16.349 61.177 40.012 83.376 69.005C430.869 508.942 448 559.562 448 613c0 13.807-11.193 25-25 25zM17.657 588h378.687c-9.908-74.383-63.38-137.724-136.792-158.682a25 25 0 0 1-5.533-45.75C283.615 366.669 302 335.03 302 301c0-52.383-42.617-95-95-95s-95 42.617-95 95c0 34.03 18.386 65.668 47.981 82.568a25.003 25.003 0 0 1 12.423 24.712 25.003 25.003 0 0 1-17.956 21.038C81.037 450.276 27.564 513.617 17.657 588z"></path>
              </svg>
            </a>
          </div>--> <!--

        <li><a href="./public/login.php">Connexion</a></li>
        <li><a href="#reservation" class="cta-btn">Réserver</a></li>
      </ul>
    </nav>
  </header>-->

  <!-- Section Héros --><!--
  <section id="hero">
    <div class="hero-content">
      <h1>Bienvenue à Arcadia</h1>
      <p>Explorez un lieu où nature et bien-être animal cohabitent en harmonie.</p>
      <div class="hero-buttons"> -->
  <!--<a href="#habitats" class="btn">Découvrir les habitats</a>--> <!--
        <a href="#services" class="btn">Voir les horaires</a>
      </div>
    </div>
  </section>-->

  <!-- Section À propos --> <!--
  <section id="about">
    <h2>Arcadia, un zoo engagé pour la planète</h2>

    <img src="./assets/images/Forest wallpaper midday.jpg" alt="Forêt de Brocéliande" class="about-image mb-5">
    <p class="mt-5">Depuis 1960, nous nous engageons à protéger la biodiversité et à offrir un habitat naturel à nos animaux.</p>
   
  </section> -->

  <?php
include 'includes/db-connection.php';

// Récupérer tous les habitats
$sql = "SELECT id, nom, JSON_UNQUOTE(JSON_EXTRACT(images, '$[0]')) AS image FROM habitats";
$stmt = $pdo->query($sql);
?>




  <h1>Liste des Habitats</h1>
  <div class="habitats-list"></div>

  <div class="habitats-list">
    <?php while ($habitat = $stmt->fetch()): ?>
      <div class="habitat">
        <img src="assets/images/<?= htmlspecialchars($habitat['image']) ?>" alt="<?= htmlspecialchars($habitat['nom']) ?>">
        <h3><?= htmlspecialchars($habitat['nom']) ?></h3>
        <a href="details-habitat.php?id=<?= $habitat['id'] ?>" class="btn-details">Voir détails</a>
      </div>
    <?php endwhile; ?>
  </div>

  <!--<section class="footer">
    <footer class="bg-dark text-white py-4">
      <div class="container">
        <div class="row text-center text-md-left"> -->
          <!-- Contact du zoo --> <!--
          <div class="col-12 col-md-4 mb-3">
            <section>
              <h5>Contact</h5>
              <ul class="list-unstyled-footer">
                <li><a href="#" class="text-white"></a>Zoo Arcadia</li> -->  <!-- Ailes Enchantées --> <!--
                <li>Fôret de Brocéliande</li> --> <!-- 123 Rue Lepidoptère -->  <!--
                <li>35380 Paimpont, France</li> --> <!-- --> <!--
                <li>Téléphone : +33 1 23 45 67</li>
              </ul>
            </section>
          </div> -->

          <!-- Liens d'information -->  <!--
          <div class="col-12 col-md-4 mb-3">
            <section>
              <h5>Informations</h5>
              <ul class="list-unstyled-footer">
                <li><a href="../index.html" class="text-white">Accueil</a></li>
                <li><a href="../rgpd/mentions_légales.html" class="text-white">Mentions légales</a></li>
                <li><a href="./a-propos-ecf.html" class="text-white">À propos de cette ECF</a></li>
              </ul>
            </section>
          </div>  -->

          <!-- Liens vers les réseaux sociaux --> <!--
          <div class="col-12 col-md-4 mb-3">
            <section>
              <h5>Suivez-nous</h5>
              <ul class="list-unstyled-footer">
                <li><a href="http://www.facebook.fr" class="text-white me-3"><i class="fab fa-facebook-f">fa</i></a></li>
                <li><a href="http://www.twitter.fr" class="text-white me-3"><i class="fab fa-twitter"></i>tw</a></li>
              </ul>
            </section>
          </div>
        </div>

        <footer class="text-center py-4">
          <p>&copy; 2024 Zoo Arcadia. Tous droits réservés.</p>
        </footer>
      </div>
    </footer>  -->




<!--<style>
  /* Footer styles */
footer {
  /*background-color: #2b2b2b;*/
  background: #2c3e50;
  color: white;
  padding: 20px 10px;
}

.footer-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap; /* Pour s'assurer que le contenu se réorganise sur petits écrans */
  gap: 20px;

  padding: 10px 20px;
}

.footer-section {
  flex: 1; /* Chaque section prend une proportion égale de l'espace */
  min-width: 200px; /* Largeur minimale pour éviter que les sections soient trop étroites */

  padding-left: 20px;
}

.footer-section h4 {
  font-size: 1.2rem;
  margin-bottom: 10px;
  text-transform: uppercase;

  text-align: left;
}

.footer-section ul {
  list-style: none;
  padding: 0;
  margin: 0;

  text-align: left;
}

.footer-section ul li {
  margin-bottom: 10px;
}

.footer-section ul li a {
  color: white;
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-section ul li a:hover {
  color: #f2a007; /* Couleur au survol */
}

/* Responsive */
@media (max-width: 768px) {/*
  .footer-container {
    flex-direction: column; /* Les sections passent en colonne sur petit écran *//*
    align-items: center;
    text-align: center;
  }*/
}
</style>-->

  <!--<footer>
    <div> -->
          <!--<p>&copy; 2024 Zoo Arcadia. Tous droits réservés.</p>
        </class=>--> <!--
        <div class="footer-container"> -->

    <!-- Section 1 --> <!--
    <div class="footer-section">
      <h4>Contact</h4>
      <ul>
        <li><a href="tel:+33123456789">Téléphone : +33 1 23 45 67 89</a></li>
        <li><a href="mailto:info@arcadia.com">Email : info@arcadia.com</a></li>
        <li>Adresse : 123 Rue de la Nature, 75000 Paris</li>
      </ul>
    </div> -->

    <!-- Section 2 --> <!--
    <div class="footer-section">
      <h4>Liens rapides</h4>
      <ul>
        <li><a href="#hero">Accueil</a></li>
        <li><a href="#habitats">Habitats</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div> -->

    <!-- Section 3 --> <!--
    <div class="footer-section">
      <h4>Réseaux sociaux</h4>
      <ul>
        <li><a href="https://www.facebook.com">Facebook</a></li>
        <li><a href="https://www.twitter.com">Twitter</a></li>
        <li><a href="https://www.instagram.com">Instagram</a></li>
        <li><a href="https://www.linkedin.com">LinkedIn</a></li>
      </ul>
    </div>
        </div>



  <footer class="text-center py-4">
    <p>&copy; 2024 Zoo Arcadia. Tous droits réservés.</p>
  </footer>
  
    </div>
</footer>-->

  </section>

  <!--<style>
    /*-- Pied de page */
    .container-footer {
      border: 1px solid white;
    }

    footer {
      background-color: #2b2b2b;
      color: #fff;
      padding: 2rem 0;
    }

    footer h5 {
      color: #f2a007;
      margin-bottom: 1rem;

      text-align: left;
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

      #presentation p,
      section h2 {
        font-size: 1.5rem;
      }

      /* Ajustement des grilles d'images */
      .images-presentation img,
      .animal-grid img {
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
  </style>-->

  <!-- MENU HAMBURGER --><!-------------------------------------------------------------------------------------------->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const menuToggle = document.getElementById('menuToggle');
      const navLinks = document.getElementById('navLinks');

      menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('show');
      });
    });
  </script>



<section class="footer">
  <?php include './includes/footer.php'; ?>
</section>



</body>

</html>


<!--------------------------------------------------------------------------------------------------------------------->



