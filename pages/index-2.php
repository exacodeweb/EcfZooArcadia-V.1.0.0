<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoo Arcadia - Accueil</title>

  <!-- Lien vers le fichier CSS principal -->
  <link rel="stylesheet" href="../styles/style-2.css">
  <!-- Lien Test carousel avis -->
  <link rel="stylesheet" href="./Avis/style.css">

  <!-- Lien vers Bootstrap pour le style et la mise en page responsive -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!------------------------------------------------------------------>
  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!------------------------------------------------------------------>

  <!-- Styles internes pour des personnalisations spécifiques -->
  <style>
    /* Flexbox pour aligner les images et sections de présentation */
    .images-presentation,
    .animal-grid {
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
      h1,
      h2 {
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

  <style>
    .section {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.5s ease-in-out;
    }

    body {

      background: linear-gradient(to bottom, #a8dadc, #457b9d);
      font-family: 'Roboto', sans-serif;
      color: #1d3557;
      margin: 0;
    }

    .neon.night-mode {
      width: 100%;
      /*400px*/
      height: 80px;
      /*200px*/
      border: 4px solid #fff;
      /*border-radius: 12px;*/
      box-shadow:
        0 0 8px #fff,
        inset 0 0 8px #fff,
        0 0 16px #37f713,
        /*16px*/
        inset 0 0 16px #37f713,
        /*16px*/
        0 0 5px #37f713,
        /*32px*/
        inset 0 0 5px #37f713;
      /*32px*/
    }

    .card img {
      height: 200px;
      /* Ajustez cette hauteur selon vos besoins */
      width: 100%;
      object-fit: cover;
      /* Garde une mise à l'échelle correcte */
      border-radius: 8px;
    }

    .gallery-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      /* Espacement entre les cartes */
      justify-content: center;
      /* Centrer les cartes */
    }

    .gallery-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      /* Espacement entre les cartes */
      justify-content: center;
      /* Centrer les cartes */
    }

    .card {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 100%;
      /* Assure que toutes les cartes ont la même hauteur */
      border: 1px solid #ddd;
      /* Optionnel : bordure pour style */
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      /* Optionnel */
      border-radius: 8px;
      /* Coins arrondis */
      overflow: hidden;
    }

    .card-body {
      flex-grow: 1;
      /* Étire la section du corps pour uniformiser la hauteur */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .card-title,
    .card-text {
      margin: 0;
      /* Éviter les marges externes indésirables */
      text-align: center;
      /* Centrer le texte */
      padding: 10px;
      /* Optionnel : espacement intérieur */
    }

    .presentation img {
      width: 100%;
      /* Occupe toute la largeur du conteneur */
      height: 300px;
      /* Définissez une hauteur fixe (ajustez selon vos besoins) */
      object-fit: cover;
      /* Recadre pour remplir la zone sans déformation */
      border-radius: 8px;
      /* Optionnel : coins arrondis pour le style */
      display: block;
      /* Élimine les espaces blancs */
    }

    .presentation-container {
      display: flex;
      /* flex-wrap: wrap; /* Permet le retour à la ligne */
      gap: 20px;
      /* Espacement entre les images */
      justify-content: center;
      /* Centre les images horizontalement */
      align-items: stretch;
      /* Uniformise la hauteur */
    }

    .presentation img {
      width: 100%;
      /* Occupe toute la largeur du conteneur */
      height: 200px;
      /* Définissez une hauteur fixe (ajustez selon vos besoins) */
      object-fit: cover;
      /* Recadre pour remplir la zone sans déformation */
      border-radius: 8px;
      /* Optionnel : coins arrondis pour le style */
      display: block;
      /* Élimine les espaces blancs */
    }
  </style>

  <script>
    /*-- nav --*/
    document.addEventListener("DOMContentLoaded", () => {
      // Sélectionnez la balise <nav>
      const nav = document.querySelector("nav");

      // Configuration des heures
      const timeConfig = {
        dayStart: 6, // Début du jour
        nightStart: 14 // Début de la nuit
      };

      // Obtenez l'heure actuelle
      const now = new Date();
      const hour = now.getHours();

      // Appliquez les styles selon l'heure
      if (hour >= timeConfig.nightStart || hour < timeConfig.dayStart) {
        nav.classList.add("night-mode"); // Style nuit
      } else {
        nav.classList.remove("night-mode"); // Style jour
      }
    });

    /*-- neon --*/
    document.addEventListener("DOMContentLoaded", () => {
      // Sélectionnez l'élément avec la classe .neon
      const neonElement = document.querySelector(".neon");

      // Configuration des heures
      const timeConfig = {
        dayStart: 6, // Début du style jour
        nightStart: 19 // Début du style nuit
      };

      // Obtenez l'heure actuelle
      const now = new Date();
      const hour = now.getHours();

      // Appliquez les styles selon l'heure
      if (hour >= timeConfig.nightStart || hour < timeConfig.dayStart) {
        neonElement.classList.add("night-mode"); // Applique le style nuit
      } else {
        neonElement.classList.remove("night-mode"); // Applique le style jour
      }
    });
  </script>

  <!-- body -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const dayInput = document.getElementById("day-start");
      const nightInput = document.getElementById("night-start");
      const saveButton = document.getElementById("save-config");

      // Charger la configuration depuis le LocalStorage
      const loadConfig = () => {
        const config = JSON.parse(localStorage.getItem("timeConfig"));
        if (config) {
          dayInput.value = config.dayStart;
          nightInput.value = config.nightStart;
        }
      };

      const saveConfig = () => {
        const config = {
          dayStart: parseInt(dayInput.value, 10),
          nightStart: parseInt(nightInput.value, 10)
        };
        localStorage.setItem("timeConfig", JSON.stringify(config));
        alert("Configuration sauvegardée !");
        applyStyle(config);
      };

      const applyStyle = (config) => {
        const now = new Date();
        const hour = now.getHours();

        if (hour >= config.nightStart || hour < config.dayStart) {
          document.body.classList.add("night-mode");
        } else {
          document.body.classList.remove("night-mode");
        }
      };

      // Initialiser
      loadConfig();
      saveButton.addEventListener("click", saveConfig);

      // Appliquer les styles au chargement
      const config = JSON.parse(localStorage.getItem("timeConfig")) || {
        dayStart: 6,
        nightStart: 18
      };
      applyStyle(config);
    });
  </script>

  <script>
    document.addEventListener("scroll", function() {
      document.querySelectorAll('.section').forEach(function(el) {
        if (el.getBoundingClientRect().top < script window.innerHeight) {
          el.classList.add('visible');
        }
      });
    });
  </script>
  <!---->
</head>

<body>
  <!-- En-tête de la page avec la navigation -->
  <header>
    <nav class="navbar navbar-expand-lg neon"><!--  -->
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

          <!-- Lien pour l'accès administrateur -->
          <div class="Navbar__Link">
            <a class="nav-link nav-admin-link" href="../public/login.php" title="Admin">
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

  <!-- application des heure-->
  <div>
    <label for="day-start">Début du jour (h) :</label>
    <input type="number" id="day-start" min="0" max="23" value="6">
    <label for="night-start">Début de la nuit (h) :</label>
    <input type="number" id="night-start" min="0" max="23" value="18">
    <button id="save-config">Sauvegarder</button>
  </div>



  <!-- Contenu principal de la page -->
  <main class="container">
    <section id="presentation" class="container text-center py-5">
      <h1>Bienvenue au Zoo Arcadia</h1>
      <p>Découvrez notre zoo, entièrement indépendant en matière d'énergie et engagé envers l'écologie.</p>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <img src="../public/asset/images/image5.jfif" alt="Image du zoo" class="img-fluid rounded">
        </div>
        <div class="col-md-4">
          <img src="../public/asset/images/image6.jfif" alt="Image des animaux" class="img-fluid rounded">
        </div>
        <div class="col-md-4">
          <img src="../public/asset/images/images7.jfif" alt="Image d'habitat" class="img-fluid rounded">
        </div>
      </div>
    </section>

    <!---->
    <div class="presentation-container">
      <div class="presentation">
        <img src="../public/asset/images/image5.jfif" alt="Presentation Image 1">
      </div>
      <div class="presentation">
        <img src="../public/asset/images/image6.jfif" alt="Presentation Image 2">
      </div>
      <div class="presentation">
        <img src="../public/asset/images/images7.jfif" alt="Presentation Image 3">
      </div>
    </div>

    <section id="habitats" class="container py-5">
      <h2 class="text-center mb-4">Nos Habitats</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🌿 Savane</h5>
              <p class="card-text">Un espace ouvert pour les animaux de la savane.</p>

              <!--<div class="col-md-4">-->
              <img src="../assets/images/Bientot dispon.png" alt="Lion" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🌳 Forêt tropicale</h5>
              <p class="card-text">Découvrez la vie dans les forêts luxuriantes.</p>

              <!--<div class="col-md-4">-->
              <img src="../assets/images/Bientot dispon.png" alt="Lion" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🏜️ Désert</h5>
              <p class="card-text">Un habitat pour les animaux du désert.</p>

              <!--<div class="col-md-4">-->
              <img src="../assets/images/Bientot dispon.png" alt="Lion" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="container py-5">
      <h2 class="text-center mb-4">Services Offerts</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🍽️ Restauration</h5>
              <p class="card-text">Un espace pour dejeuner, une collation.</p>

              <!--<div class="col-md-4">-->
              <img src="../assets/images/Bientot dispon.png" alt="Lion" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🛍️ Boutique de souvenirs</h5>
              <p class="card-text">garder un souvenir, offrande.</p>

              <!--<div class="col-md-4">-->
              <img src="../assets/images/Bientot dispon.png" alt="Lion" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🧑‍🤝‍🧑 Visites guidées</h5>
              <p class="card-text">visite du zoo.</p>

              <!--<div class="col-md-4">-->
              <img src="../assets/images/Bientot dispon.png" alt="Lion" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="animaux" class="container py-5">
      <h2 class="text-center mb-4">Nos Animaux</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🦁 Lion</h5>
              <p class="card-text">Un espace ouvert pour les animaux de la savane.</p>

              <!--<div class="col-md-4">-->
              <img src="../public/asset/images/image1.jpg" alt="Lion" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🐘 Éléphant</h5>
              <p class="card-text">Découvrez la vie dans les forêts luxuriantes.</p>
              <!--<div class="col-md-4">-->
              <img src="../public/asset/images/image2.jfif" alt="Éléphant" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🦒 Girafe</h5>
              <p class="card-text">Un habitat pour les animaux du désert.</p>
              <!--<div class="col-md-4">-->
              <img src="../public/asset/images/image4.jfif" alt="Girafe" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="animaux" class="container py-5">
      <h2 class="text-center mb-4">Nos Animaux</h2>
      <div class="row">

        <div class="col-md-4 col-sm-12 mb-4">
          <div class="card">
            <img src="../public/asset/images/image1.jpg" alt="Lion" class="img-fluid">
            <div class="card-body text-center">
              <h5 class="card-title">🦁 Lion</h5>
              <p class="card-text">Un espace ouvert pour les animaux de la savane.</p>
            </div>
          </div>
        </div>
        <!-- Répétez les colonnes pour d'autres animaux -->
        <div class="col-md-4 col-sm-12 mb-4">
          <div class="card">
            <img src="../public/asset/images/image2.jfif" alt="Lion" class="img-fluid">
            <div class="card-body text-center">
              <h5 class="card-title">🐘 Éléphant</h5>
              <p class="card-text">Découvrez la vie dans les forêts luxuriantes.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 mb-4">
          <div class="card">
            <img src="../public/asset/images/image4.jfif" alt="Lion" class="img-fluid">
            <div class="card-body text-center">
              <h5 class="card-title">🦒 Girafe</h5>
              <p class="card-text">Un espace ouvert pour les animaux de la savane.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container py-5"><!-- id="animaux" -->
      <div class="row">
        <div class="col-md-4">
          <img src="../public/asset/images/image1.jpg" alt="Lion" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-4">
          <img src="../public/asset/images/image2.jfif" alt="Éléphant" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-4">
          <img src="../public/asset/images/image4.jfif" alt="Girafe" class="img-fluid rounded shadow">
        </div>
      </div>
    </section>

    <!-- Section Avis des visiteurs --><!--
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
    </section>-->


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
        <div class="avis">
          <p>“Un endroit parfait pour une sortie en famille !”</p>
          <cite>- Paul Durand</cite>
        </div>
      </div>
      <!-- Boutons de navigation -->
      <button class="carousel-btn prev">Précédent</button>
      <button class="carousel-btn next">Suivant</button>
      <button onclick="window.location.href='avis.html'" class="btn btn-primary mt-3">Voir tous les avis</button>
    </section>







    <!------------------------------------------------------------->

    <!--quement en récupérant les témoignages validés de la base de données.

php
Copier le code-->
    <!--?php
// Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;zoo_arcadia', 'utilisateur_zoo', 'Z00_Arcadia!2024');//

// Récupérer les témoignages validés
$query = $pdo->prepare("SELECT utilisateur_nom, message FROM temoignagesa WHERE valide = 1 ORDER BY date_creation DESC");//visusers
$query->execute();
$temoignages = $query->fetchAll(PDO::FETCH_ASSOC);// $avisusers
?>

<section id="avis" class="text-center my-4">
    <h2>Avis des Visiteurs</h2>
    <div class="avis-container">
        <!?php foreach ($temoignages as $temoignage): ?> --><!-- $avisusers as $avisusers --> <!--
        <div class="avis">
            <p>“<!-?= htmlspecialchars($temoignage['message']) ?>”</p>  --> <!-- $avisusers --> <!--
            <cite>- --><!--?= htmlspecialchars($avisusers['utilisateur_nom']) ?></cite> --> <!-- $temoignage --> <!--
        </div> -->
    <!--?php endforeach; ?>
    </div>  -->
    <!-- Boutons de navigation --> <!--
    <button class="carousel-btn prev">Précédent</button>
    <button class="carousel-btn next">Suivant</button>
    <button onclick="window.location.href='avis.html'" class="btn btn-primary mt-3">Voir tous les avis</button>
</section> -->
    <!--<style>
#avis .avis-container {
  display: flex;
  flex-wrap: nowrap;
  overflow: hidden;
  width: 100%;
  position: relative;
}

#avis .avis {
  flex: 0 0 100%;
  padding: 16px;
  text-align: center;
  background-color: #f8f9fa;
  border: 1px solid #ddd;
  border-radius: 8px;
  transition: transform 0.5s ease-in-out;
}

.carousel-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  border: none;
  padding: 10px 15px;
  cursor: pointer;
  z-index: 10;
}

.carousel-btn.prev {
  left: 10px;
}

.carousel-btn.next {
  right: 10px;
}
</style>-->
    <!--
<script>
//JavaScript pour le défilement
//Utilisez JavaScript pour gérer le défilement :

//javascript
//Copier le code
document.addEventListener("DOMContentLoaded", () => {
  const container = document.querySelector("#avis .avis-container");
  const avis = document.querySelectorAll("#avis .avis");
  const prevButton = document.querySelector(".carousel-btn.prev");
  const nextButton = document.querySelector(".carousel-btn.next");

  let index = 0;

  function updateCarousel() {
    const avisWidth = avis[0].offsetWidth;
    container.style.transform = `translateX(-${index * avisWidth}px)`;
  }

  prevButton.addEventListener("click", () => {
    index = (index - 1 + avis.length) % avis.length;
    updateCarousel();
  });

  nextButton.addEventListener("click", () => {
    index = (index + 1) % avis.length;
    updateCarousel();
  });

  // Défilement automatique toutes les 5 secondes
  setInterval(() => {
    index = (index + 1) % avis.length;
    updateCarousel();
  }, 5000);
});
</script>-->










    <!--------------------------------------------------------------------------------------------- CAROUSEL FONDU SLIDE -->
    <section class="carousel">
      <div class="container-A my-5">
      <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <!--?php include 'x../AvisUsers/get_reviews.php'; ?>  -->

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Suivant</span>
        </button>
      </div>
      </div> 

      <style>
        .carousel-item {
          height: 400px;
        }

        .carousel-item .content-Rating {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100%;
        }

        .carousel-item img {
          max-height: 100%;
          object-fit: cover;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
          background-color: blue;
          border-radius: 50%;
          padding: 10px;
          height: 35px;
          width: 35px;
        }

        .rating {
          border: 1px solid gray;
          border-radius: 15px;
          padding: 10px;
          height: 23.75em;
          width: 100%;
          background-color: #ffff;
          box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px,
            rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;
        }

        .profile-pic {
          border: 1px solid black;
          border-radius: 50%;
          width: 120px;
          height: 120px;
          object-fit: cover;
          display: block;
          margin: auto;
        }

        .profile-name {
          margin-top: 15px;
          margin-bottom: 0;
          font-size: 16px;
          font-weight: 600;
          text-align: center;
        }

        .art-rtn {
          height: auto;
          font-size: 16px;
          font-weight: normal;
          display: -webkit-box;
          -webkit-line-clamp: 3;
          -webkit-box-orient: vertical;
          overflow: hidden;
          text-overflow: ellipsis;
          text-align: center;
          /*margin-bottom: 20px;*/
        }

        .blockquote-footer {
          height: auto;
          width: 100%;
          padding: 5px;
          margin-top: 20px;
          margin-bottom: 10px;
          display: block;
          text-align: center;
        }

        .art-rtn-note {
          height: auto;
          font-size: 16px;
          font-weight: normal;
          display: -webkit-box;
          -webkit-line-clamp: 3;
          -webkit-box-orient: vertical;
          overflow: hidden;
          text-overflow: ellipsis;
          text-align: center;
          /*margin-bottom: 20px;*/
        }

        /**/

        .container-A {
          width: 30%;
        }

        /* Media query pour les petits écrans */
        @media only screen and (max-width: 768px) {
          .container-A {
            width: 100%;
          }
        }

        /* FIN DE CARROUSEL */
      </style>






      <!-- Bootstrap JS Bundle (includes Popper) -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          var carouselElement = document.querySelector('#carouselExampleFade');
          if (carouselElement) {
            var carousel = new bootstrap.Carousel(carouselElement, {
              interval: 3500, // 3.5 secondes
              ride: 'carousel',
              pause: false
            });
          }
        });
      </script>
    </section>
    <!-------------------------------------------------------------------------------------------------- FIN DE CAROUSEL -->

    <!------------------------------------------------------------------------------------------------- AVIS TEMOIGNAGES -->
    <?php
    $config = include('../config/config.php');

    try {
      $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // Récupérer la moyenne des notes des avis approuvés
      $stmt = $pdo->query("SELECT AVG(note) as average_rating FROM avisusers WHERE is_approved = 1");
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      $averageRating = round($result['average_rating'], 1); // Arrondir à une décimale

    } catch (PDOException $e) {
      echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
    }

    // Calcul pour afficher les étoiles remplies en fonction de la moyenne
    function displayStars($averageRating)
    {
      $starsHtml = '';
      for ($i = 1; $i <= 5; $i++) {
        if ($i <= $averageRating) {
          $starsHtml .= '<span class="star-2 filled">&#9733;</span>'; // Étoile remplie
        } else {
          $starsHtml .= '<span class="star-2">&#9733;</span>'; // Étoile non remplie
        }
      }
      return $starsHtml;
    }
    ?>

    <!-------------------------------------------------------->

    <div class="content-Rating-2">
      <div class="rating-avis-2">
        <!-- TITRE NOTES -->
        <section class="testimonial">
          <div class="title-note">
            <h4 class="title-rating-2">Votre votes sur les prestations</h4>
          </div>

          <!-- NOTES CLIENTS -->
          <span class="span-grid-2 text-center justify-content-center text-dark">
            Noté:
            <strong class="strong"> <?php echo $averageRating; ?>/5 </strong>
            par nos clients
          </span>

          <!-- BLOCK ETOILE -->
          <div class="content-box-stars-2">
            <div class="rating-box-stars-2">
              <?php echo displayStars($averageRating); ?>
            </div>
          </div>

          <!-- CERTIFICATION -->
          <div class="certif">
            <div class="span-box-2 text-center">Certifier </div>
          </div>


          <!-- BOUTON AVIS -->
          <div class="rating-box-2">
            <div class="link-btn-Rating-2 btn-primary"> <!---->
              <a href="../AvisUsers/ratings_feedback/form_avis_ratings - Copie.php" class="btn-Rating text-decoration-none text-white" title="avis">
                Donnez un avis
              </a>
            </div>
          </div>


          <!-------------------------------------------------------->
          <!-- STYLE TEMOIGNAGE FOOTER -->
          <style>
            .content-Rating-2 {
              display: flex;
              flex-direction: row;
              justify-content: space-around;
              padding: 0px;
              width: 100%;
            }

            .rating-avis-2 {
              display: flex;
              flex-direction: row !important;
              background: #ffff;
              width: 100%;
              height: auto;
              justify-content: space-around;
            }

            .title-note {
              display: flex;
              flex-direction: column;
              width: auto;
              text-align: center !important;
              justify-content: center;
              padding: 5px;
              color: black;
            }

            .content-box-stars-2 .star-2 {
              font-size: 2em;
              color: #ddd;
              /* Couleur des étoiles non remplies */
              display: inline-block;
            }

            .content-box-stars-2 .star-2.filled {
              color: #f39c12;
              /* Couleur des étoiles remplies */
            }

            .testimonial {
              display: flex;
              flex-direction: row !important;
              background: #ffff;
              width: 100%;
              height: auto;
              justify-content: space-between !important;
            }

            .certif {
              margin-left: 10px;
            }

            .link-btn-Rating-2 {
              display: flex;
              justify-content: center;
              align-items: center;
            }

            .btn-primary {
              background-color: #007bff;
              color: white;
              padding: 10px 15px;
              border-radius: 5px;
            }

            /* Media query pour les petits écrans */
            @media only screen and (max-width: 768px) {
              .content-Rating-2 {
                flex-direction: column;
                justify-content: center;
                align-items: center;
              }

              .rating-avis-2 {
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 10px;
              }

              .testimonial {
                flex-direction: column !important;
              }

              .title-note h4 {
                font-size: 1.2em;
              }

              .content-box-stars-2 .star-2 {
                font-size: 1.5em;
                /* Réduction de la taille des étoiles */
              }

              .certif {
                margin-top: 10px;
                text-align: center;
              }

              .btn-primary {
                padding: 8px 12px;
                font-size: 0.9em;
              }

              .testimonial {
                flex-direction: column;
                justify-content: center;
                align-items: center;
              }

              .title-rating-2 {
                font-size: 0.9em;
                /* Réduction de la taille de la note moyenne */
              }

              .span-grid-2 strong {
                font-size: 1.2em;
                /* Réduction de la taille de la note affichée */
              }

              .link-btn-Rating-2 {
                margin-top: 15px;
              }
            }
          </style>

          <style>
            .span-box-2 {
              color: red;
              font-family: "Tangerine", Arial, serif;
              font-size: 1.375em;
              font-weight: 700;
            }
          </style>


        </section>
      </div>
    </div>
    <!------------------------------------------------------------------------------------------- FIN AVIS TEMOIGNAGES -->

    <!------------------------------------------------------------->

  </main>



  <style>

  </style>

  <script>

  </script>

  <!---------------------------------------------------------------------------------------------------- Facts Start -->
  <div class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-4">
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
          <i class="fa fa-paw fa-3x text-primary mb-3"></i>
          <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
          <p class="text-white mb-0">Total Animal</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
          <i class="fa fa-users fa-3x text-primary mb-3"></i>
          <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
          <p class="text-white mb-0">Daily Vigitors</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
          <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
          <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
          <p class="text-white mb-0">Total Membership</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
          <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
          <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
          <p class="text-white mb-0">Save Wild Life</p>
        </div>
      </div>
    </div>
  </div>
  <!------------------------------------------------------------------------------------------------------ Facts End -->

  <!-- Pied de page avec liens de contact et réseaux sociaux -->
  <footer class="bg-dark text-white py-4">
    <div class="container">
      <div class="row text-center text-md-left">
        <!-- Contact du zoo -->
        <div class="col-12 col-md-4 mb-3">
          <section>
            <h5>Contact</h5>
            <ul class="list-unstyled-footer">
              <li><a href="#" class="text-white"></a>Zoo Arcadia</li><!-- Ailes Enchantées -->
              <li>Fôret de Brocéliande</li><!-- 123 Rue Lepidoptère -->
              <li>35380 Paimpont, France</li><!-- -->
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

  <!-- Scripts JavaScript nécessaires, y compris Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/lightbox/js/lightbox.min.js"></script>

  <!-- Template Javascript -->
  <script src="../js/main.js"></script>

  <!-- Lien Test carousel avis -->
  <script src="./Avis/script.js"></script>

</body>

</html>



<!-- Je n'arrive pas a integré certain éléments, tel le caroussel,dans cet page, -->
<!DOCTYPE html> 
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoo Arcadia - Accueil</title>

  <!-- Lien vers le fichier CSS principal -->
  <link rel="stylesheet" href="../styles/style-2.css">
  <!-- Lien Test carousel avis -->
  <link rel="stylesheet" href="./Avis/style.css">

  <!-- Lien vers Bootstrap pour le style et la mise en page responsive -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!---->
  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">


  <script>
    /*-- nav --*/
    document.addEventListener("DOMContentLoaded", () => {
      // Sélectionnez la balise <nav>
      const nav = document.querySelector("nav");

      // Configuration des heures
      const timeConfig = {
        dayStart: 6, // Début du jour
        nightStart: 14 // Début de la nuit
      };

      // Obtenez l'heure actuelle
      const now = new Date();
      const hour = now.getHours();

      // Appliquez les styles selon l'heure
      if (hour >= timeConfig.nightStart || hour < timeConfig.dayStart) {
        nav.classList.add("night-mode"); // Style nuit
      } else {
        nav.classList.remove("night-mode"); // Style jour
      }
    });

    /*-- neon --*/
    document.addEventListener("DOMContentLoaded", () => {
      // Sélectionnez l'élément avec la classe .neon
      const neonElement = document.querySelector(".neon");

      // Configuration des heures
      const timeConfig = {
        dayStart: 6, // Début du style jour
        nightStart: 19 // Début du style nuit
      };

      // Obtenez l'heure actuelle
      const now = new Date();
      const hour = now.getHours();

      // Appliquez les styles selon l'heure
      if (hour >= timeConfig.nightStart || hour < timeConfig.dayStart) {
        neonElement.classList.add("night-mode"); // Applique le style nuit
      } else {
        neonElement.classList.remove("night-mode"); // Applique le style jour
      }
    });
  </script>

  <!-- body -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const dayInput = document.getElementById("day-start");
      const nightInput = document.getElementById("night-start");
      const saveButton = document.getElementById("save-config");

      // Charger la configuration depuis le LocalStorage
      const loadConfig = () => {
        const config = JSON.parse(localStorage.getItem("timeConfig"));
        if (config) {
          dayInput.value = config.dayStart;
          nightInput.value = config.nightStart;
        }
      };

      const saveConfig = () => {
        const config = {
          dayStart: parseInt(dayInput.value, 10),
          nightStart: parseInt(nightInput.value, 10)
        };
        localStorage.setItem("timeConfig", JSON.stringify(config));
        alert("Configuration sauvegardée !");
        applyStyle(config);
      };

      const applyStyle = (config) => {
        const now = new Date();
        const hour = now.getHours();

        if (hour >= config.nightStart || hour < config.dayStart) {
          document.body.classList.add("night-mode");
        } else {
          document.body.classList.remove("night-mode");
        }
      };

      // Initialiser
      loadConfig();
      saveButton.addEventListener("click", saveConfig);

      // Appliquer les styles au chargement
      const config = JSON.parse(localStorage.getItem("timeConfig")) || {
        dayStart: 6,
        nightStart: 18
      };
      applyStyle(config);
    });
  </script>

  <script>
    document.addEventListener("scroll", function() {
      document.querySelectorAll('.section').forEach(function(el) {
        if (el.getBoundingClientRect().top < script window.innerHeight) {
          el.classList.add('visible');
        }
      });
    });
  </script>
  <!---->
</head>

<body>
  <!-- En-tête de la page avec la navigation -->
  <header>
    <nav class="navbar navbar-expand-lg neon"><!--  -->
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

          <!-- Lien pour l'accès administrateur -->
          <div class="Navbar__Link">
            <a class="nav-link nav-admin-link" href="../public/login.php" title="Admin">
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

  <!-- application des heure-->
  <div>
    <label for="day-start">Début du jour (h) :</label>
    <input type="number" id="day-start" min="0" max="23" value="6">
    <label for="night-start">Début de la nuit (h) :</label>
    <input type="number" id="night-start" min="0" max="23" value="18">
    <button id="save-config">Sauvegarder</button>
  </div>

  <!-- Contenu principal de la page -->
  <main class="container">
    <section id="presentation" class="container text-center py-5">
      <h1>Bienvenue au Zoo Arcadia</h1>
      <p>Découvrez notre zoo, entièrement indépendant en matière d'énergie et engagé envers l'écologie.</p>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <img src="../public/asset/images/image5.jfif" alt="Image du zoo" class="img-fluid rounded">
        </div>
        <div class="col-md-4">
          <img src="../public/asset/images/image6.jfif" alt="Image des animaux" class="img-fluid rounded">
        </div>
        <div class="col-md-4">
          <img src="../public/asset/images/images7.jfif" alt="Image d'habitat" class="img-fluid rounded">
        </div>
      </div>
    </section>

    <!---->
    <div class="presentation-container">
      <div class="presentation">
        <img src="../public/asset/images/image5.jfif" alt="Presentation Image 1">
      </div>
      <div class="presentation">
        <img src="../public/asset/images/image6.jfif" alt="Presentation Image 2">
      </div>
      <div class="presentation">
        <img src="../public/asset/images/images7.jfif" alt="Presentation Image 3">
      </div>
    </div>

    <section id="habitats" class="container py-5">
      <h2 class="text-center mb-4">Nos Habitats</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🌿 Savane</h5>
              <p class="card-text">Un espace ouvert pour les animaux de la savane.</p>

              <!--<div class="col-md-4">-->
              <img src="../assets/images/Bientot dispon.png" alt="Lion" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🌳 Forêt tropicale</h5>
              <p class="card-text">Découvrez la vie dans les forêts luxuriantes.</p>

              <!--<div class="col-md-4">-->
              <img src="../assets/images/Bientot dispon.png" alt="Lion" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🏜️ Désert</h5>
              <p class="card-text">Un habitat pour les animaux du désert.</p>

              <!--<div class="col-md-4">-->
              <img src="../assets/images/Bientot dispon.png" alt="Lion" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="container py-5">
      <h2 class="text-center mb-4">Services Offerts</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🍽️ Restauration</h5>
              <p class="card-text">Un espace pour dejeuner, une collation.</p>

              <!--<div class="col-md-4">-->
              <img src="../assets/images/Bientot dispon.png" alt="Lion" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🛍️ Boutique de souvenirs</h5>
              <p class="card-text">garder un souvenir, offrande.</p>

              <!--<div class="col-md-4">-->
              <img src="../assets/images/Bientot dispon.png" alt="Lion" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🧑‍🤝‍🧑 Visites guidées</h5>
              <p class="card-text">visite du zoo.</p>

              <!--<div class="col-md-4">-->
              <img src="../assets/images/Bientot dispon.png" alt="Lion" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="animaux" class="container py-5">
      <h2 class="text-center mb-4">Nos Animaux</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🦁 Lion</h5>
              <p class="card-text">Un espace ouvert pour les animaux de la savane.</p>

              <!--<div class="col-md-4">-->
              <img src="../public/asset/images/image1.jpg" alt="Lion" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🐘 Éléphant</h5>
              <p class="card-text">Découvrez la vie dans les forêts luxuriantes.</p>
              <!--<div class="col-md-4">-->
              <img src="../public/asset/images/image2.jfif" alt="Éléphant" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">🦒 Girafe</h5>
              <p class="card-text">Un habitat pour les animaux du désert.</p>
              <!--<div class="col-md-4">-->
              <img src="../public/asset/images/image4.jfif" alt="Girafe" class="img-fluid rounded shadow">
              <!--</div>-->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="animaux" class="container py-5">
      <h2 class="text-center mb-4">Nos Animaux</h2>
      <div class="row">

        <div class="col-md-4 col-sm-12 mb-4">
          <div class="card">
            <img src="../public/asset/images/image1.jpg" alt="Lion" class="img-fluid">
            <div class="card-body text-center">
              <h5 class="card-title">🦁 Lion</h5>
              <p class="card-text">Un espace ouvert pour les animaux de la savane.</p>
            </div>
          </div>
        </div>
        <!-- Répétez les colonnes pour d'autres animaux -->
        <div class="col-md-4 col-sm-12 mb-4">
          <div class="card">
            <img src="../public/asset/images/image2.jfif" alt="Lion" class="img-fluid">
            <div class="card-body text-center">
              <h5 class="card-title">🐘 Éléphant</h5>
              <p class="card-text">Découvrez la vie dans les forêts luxuriantes.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 mb-4">
          <div class="card">
            <img src="../public/asset/images/image4.jfif" alt="Lion" class="img-fluid">
            <div class="card-body text-center">
              <h5 class="card-title">🦒 Girafe</h5>
              <p class="card-text">Un espace ouvert pour les animaux de la savane.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container py-5"><!-- id="animaux" -->
      <div class="row">
        <div class="col-md-4">
          <img src="../public/asset/images/image1.jpg" alt="Lion" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-4">
          <img src="../public/asset/images/image2.jfif" alt="Éléphant" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-4">
          <img src="../public/asset/images/image4.jfif" alt="Girafe" class="img-fluid rounded shadow">
        </div>
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
        <div class="avis">
          <p>“Un endroit parfait pour une sortie en famille !”</p>
          <cite>- Paul Durand</cite>
        </div>
      </div>
      <!-- Boutons de navigation -->
      <button class="carousel-btn prev">Précédent</button>
      <button class="carousel-btn next">Suivant</button>
      <button onclick="window.location.href='avis.html'" class="btn btn-primary mt-3">Voir tous les avis</button>
    </section>

    <!-- CAROUSEL FONDU SLIDE -->
    <section class="carousel">
      <!--<div class="container-A my-5">
      <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <!?php include 'x../AvisUsers/get_reviews.php'; ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Suivant</span>
        </button>
      </div>
      </div> -->


      <!-- Bootstrap JS Bundle (includes Popper) -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          var carouselElement = document.querySelector('#carouselExampleFade');
          if (carouselElement) {
            var carousel = new bootstrap.Carousel(carouselElement, {
              interval: 3500, // 3.5 secondes
              ride: 'carousel',
              pause: false
            });
          }
        });
      </script>
    </section>
    <!-- FIN DE CAROUSEL -->

    <!-- AVIS TEMOIGNAGES -->
    <?php
    $config = include('../config/config.php');

    try {
      $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // Récupérer la moyenne des notes des avis approuvés
      $stmt = $pdo->query("SELECT AVG(note) as average_rating FROM avisusers WHERE is_approved = 1");
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      $averageRating = round($result['average_rating'], 1); // Arrondir à une décimale

    } catch (PDOException $e) {
      echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
    }

    // Calcul pour afficher les étoiles remplies en fonction de la moyenne
    function displayStars($averageRating)
    {
      $starsHtml = '';
      for ($i = 1; $i <= 5; $i++) {
        if ($i <= $averageRating) {
          $starsHtml .= '<span class="star-2 filled">&#9733;</span>'; // Étoile remplie
        } else {
          $starsHtml .= '<span class="star-2">&#9733;</span>'; // Étoile non remplie
        }
      }
      return $starsHtml;
    }
    ?>

    <div class="content-Rating-2">
      <div class="rating-avis-2">
        <!-- TITRE NOTES -->
        <section class="testimonial">
          <div class="title-note">
            <h4 class="title-rating-2">Votre votes sur les prestations</h4>
          </div>

          <!-- NOTES CLIENTS -->
          <span class="span-grid-2 text-center justify-content-center text-dark">
            Noté:
            <strong class="strong"> <?php echo $averageRating; ?>/5 </strong>
            par nos clients
          </span>

          <!-- BLOCK ETOILE -->
          <div class="content-box-stars-2">
            <div class="rating-box-stars-2">
              <?php echo displayStars($averageRating); ?>
            </div>
          </div>

          <!-- CERTIFICATION -->
          <div class="certif">
            <div class="span-box-2 text-center">Certifier </div>
          </div>

          <!-- BOUTON AVIS -->
          <div class="rating-box-2">
            <div class="link-btn-Rating-2 btn-primary"> <!---->
              <a href="../AvisUsers/ratings_feedback/form_avis_ratings - Copie.php" class="btn-Rating text-decoration-none text-white" title="avis">
                Donnez un avis
              </a>
            </div>
          </div>

  <!-- Facts Start -->
  <div class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-4">
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
          <i class="fa fa-paw fa-3x text-primary mb-3"></i>
          <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
          <p class="text-white mb-0">Total Animal</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
          <i class="fa fa-users fa-3x text-primary mb-3"></i>
          <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
          <p class="text-white mb-0">Daily Vigitors</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
          <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
          <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
          <p class="text-white mb-0">Total Membership</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
          <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
          <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
          <p class="text-white mb-0">Save Wild Life</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Facts End -->

  <!-- Pied de page avec liens de contact et réseaux sociaux -->
  <footer class="bg-dark text-white py-4">
    <div class="container">
      <div class="row text-center text-md-left">
        <!-- Contact du zoo -->
        <div class="col-12 col-md-4 mb-3">
          <section>
            <h5>Contact</h5>
            <ul class="list-unstyled-footer">
              <li><a href="#" class="text-white"></a>Zoo Arcadia</li><!-- Ailes Enchantées -->
              <li>Fôret de Brocéliande</li><!-- 123 Rue Lepidoptère -->
              <li>35380 Paimpont, France</li><!-- -->
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

  <!-- Scripts JavaScript nécessaires, y compris Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/lightbox/js/lightbox.min.js"></script>

  <!-- Template Javascript -->
  <script src="../js/main.js"></script>

  <!-- Lien Test carousel avis -->
  <script src="./Avis/script.js"></script>

</body>
</html>



















<!--
Est-ce que je dois séparer les fichiers de ma page d'accueil qui contient HTML, des script.js, des requêtes PHP, du CSS, peut être ajax ?.
ChatGPT a dit :
ChatGPT
Oui, il est recommandé de séparer les fichiers dans votre projet web pour les raisons suivantes :

Meilleure organisation : Séparer le code permet de maintenir un projet structuré, lisible et facile à comprendre.
Réutilisation : Vous pouvez réutiliser le même fichier CSS, JavaScript ou PHP sur plusieurs pages sans duplication.
Maintenance : Modifier un fichier spécifique (par exemple, style.css) est plus simple que de chercher du code dispersé dans une page.
Performances : Les navigateurs peuvent mettre en cache les fichiers CSS et JavaScript séparés, ce qui réduit le temps de chargement pour les utilisateurs.
Collaboration : Si plusieurs développeurs travaillent sur le projet, ils peuvent se concentrer sur leurs fichiers respectifs.
Organisation Recommandée des Fichiers
Voici comment structurer vos fichiers :

1. Dossier racine
Créez un dossier pour votre projet (ex. mon_projet).

2. Sous-dossiers
Organisez vos fichiers dans des sous-dossiers. Voici un exemple typique :
  -->

<!--
mon_projet/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── script.js
│   └── images/
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── db_connect.php
├── pages/
│   ├── accueil.php
│   ├── gestion_temoignages.php
│   └── avis.html
└── index.php

2. Organisation des fichiers
/zoo-arcadia
├── /public
│   ├── /assets
│   │   ├── /images          (Images de votre site)
│   │   ├── /css             (Fichiers CSS)
│   │   ├── /js              (Fichiers JavaScript)
│   │   └── /lib             (Bibliothèques externes comme Bootstrap, Owl Carousel, etc.)
│   ├── /php
│   │   ├── config.php       (Fichier de configuration PHP, ex. connexion DB)
│   │   └── functions.php    (Fonctions PHP communes)
│   ├── index.php            (Fichier principal de votre page d'accueil)
│   └── login.php            (Page de connexion admin)
└── .htaccess (pour une gestion des routes propre)


1. Structure suggérée pour votre projet
plaintext
Copier le code
zoo-arcadia/
│
├── index.html                # Fichier principal HTML
├── styles/
│   ├── style.css             # Feuille de style principale
│   ├── style-2.css           # Autres styles spécifiques
│   ├── avis/
│       └── style.css         # Style spécifique pour les avis
│
├── js/
│   ├── nav.js                # JavaScript pour la navigation
│   ├── neon.js               # JavaScript pour l'effet néon
│   ├── body-mode.js          # JavaScript pour les configurations jour/nuit
│   └── visibility.js         # JavaScript pour l'effet de visibilité des sections
│
├── images/                   # Dossier pour toutes les images (zoo, animaux, etc.)
├── lib/                      # Bibliothèques externes (animate, lightbox, etc.)
├── public/
│   ├── asset/
│   │   └── images/           # Images spécifiques au site
│   └── login.php             # Fichier de connexion admin
└── README.md                 # Documentation de votre projet

  -->
  <!-- Pour migrer votre code de la première partie de votre page d’accueil dans une structure organisée, 
   suivez ces étapes. Nous allons diviser votre code en différentes parties pour améliorer la maintenabilité, 
   la lisibilité et la réutilisabilité. Voici comment structurer votre projet : 
   --><!--
/zoo-arcadia/
|-- /public/
|   |-- index.php      --><!-- Page d'accueil --><!--
|   |-- login.php       --><!-- Page d'administration --><!--
|-- /templates/
|   |-- header.php      --><!-- En-tête (inclus le <head> et le menu) --><!--
|   |-- footer.php      --><!-- Pied de page --><!--
|-- /styles/
|   |-- style.css       --><!-- CSS principal --><!--
|   |-- bootstrap.min.css   --><!-- Fichier Bootstrap --><!--
|-- /scripts/
|   |-- main.js         --><!-- Scripts JavaScript --><!--
|-- /assets/
|   |-- /images/        --><!-- Images du projet --><!--
|-- /lib/
|   |-- owlcarousel/    --><!-- Plugins externes --><!--
|   |-- animate/        --><!-- Plugins externes --><!--

Voici une structure suggérée basée sur MVC pour votre projet :

--><!-- MVC Projet Parrot --><!--
bash
Copier le code
mon_projet/
├── /app/                    # Dossier principal pour le back-end
│   ├── /controllers/        # Contrôleurs (logique métier)
│   │   ├── VehicleController.php
│   │   └── UserController.php
│   ├── /models/             # Modèles (gestion des données)
│   │   ├── Vehicle.php
│   │   └── User.php
│   ├── /views/              # Vues (HTML/PHP pour l'affichage)
│   │   ├── vehicles/
│   │   │   ├── index.php    # Liste des véhicules
│   │   │   └── details.php  # Détails d'un véhicule
│   │   ├── users/
│   │   │   ├── login.php    # Page de connexion
│   │   │   └── dashboard.php # Tableau de bord
│   │   ├── header.php       # En-tête commun
│   │   └── footer.php       # Pied de page commun
│   └── config/              # Configuration de l'application
│       ├── database.php     # Connexion à la base de données
│       └── routes.php       # Gestion des routes
│
├── /public/                 # Contenu public accessible par le navigateur
│   ├── /assets/             # Ressources front-end (CSS, JS, images)
│   │   ├── /css/
│   │   │   └── style.css
│   │   ├── /js/
│   │   │   └── app.js
│   │   └── /images/
│   │       └── logo.png
│   ├── index.php            # Point d'entrée principal
│   └── .htaccess            # Configuration Apache pour les routes
│
└── README.md                # Documentation du projet
  -->
<!-- MVC Projet arcadia --><!--
zoo-arcadia/
├── /public/                 # Contenu accessible par le navigateur
│   ├── /assets/             # Ressources front-end (CSS, JS, images, etc.)
│   │   ├── /images/         # Images spécifiques au site
│   │   ├── /css/            # Styles CSS
│   │   │   └── style.css
│   │   ├── /js/             # Scripts JavaScript
│   │   │   ├── nav.js
│   │   │   ├── body-mode.js
│   │   │   └── visibility.js
│   │   └── /lib/            # Bibliothèques externes comme Bootstrap, Owl Carousel
│   ├── index.php            # Page d'accueil (Point d'entrée)
│   └── .htaccess            # Configuration Apache pour la gestion des routes
├── /app/                    # Dossier principal pour le back-end (logique métier)
│   ├── /controllers/        # Contrôleurs pour la logique de traitement
│   │   ├── AnimalController.php
│   │   ├── VisitController.php
│   │   └── AdminController.php
│   ├── /models/             # Modèles pour l'interaction avec la base de données
│   │   ├── Animal.php
│   │   ├── Visitor.php
│   │   └── Ticket.php
│   ├── /views/              # Vues pour l'affichage (HTML/PHP)
│   │   ├── animals/
│   │   │   ├── index.php    # Liste des animaux
│   │   │   └── details.php  # Détails d'un animal
│   │   ├── visits/
│   │   │   ├── schedule.php # Horaire des visites
│   │   │   └── tickets.php  # Billets pour les visiteurs
│   │   ├── admin/
│   │   │   └── dashboard.php # Tableau de bord administrateur
│   │   ├── header.php       # En-tête commun
│   │   └── footer.php       # Pied de page commun
│   ├── config/              # Configuration de l'application (connexion DB, routes)
│   │   ├── database.php     # Connexion à la base de données
│   │   └── routes.php       # Gestion des routes
├── /templates/              # Fichiers généraux pour les pages (header, footer, etc.)
│   ├── header.php           # Header commun pour toutes les pages
│   └── footer.php           # Footer commun pour toutes les pages
├── README.md                # Documentation du projet
└── /lib/                    # Bibliothèques externes ou outils supplémentaires (ex : OwlCarousel)
    └── owlcarousel/













zoo-arcadia/
├── /public/                 # Contenu accessible par le navigateur
│   ├── /assets/             # Ressources front-end (CSS, JS, images, etc.)
│   │   ├── /images/         # Images spécifiques au site
│   │   ├── /css/            # Styles CSS
│   │   │   └── style.css
│   │   ├── /js/             # Scripts JavaScript
│   │   │   ├── nav.js
│   │   │   ├── body-mode.js
│   │   │   └── visibility.js
│   │   └── /lib/            # Bibliothèques externes comme Bootstrap, Owl Carousel
│   ├── index.php            # Page d'accueil (Point d'entrée)
│   └── .htaccess            # Configuration Apache pour la gestion des routes
├── /app/                    # Dossier principal pour le back-end (logique métier)
│   ├── /controllers/        # Contrôleurs pour la logique de traitement
│   │   ├── AnimalController.php
│   │   ├── VisitController.php
│   │   └── AdminController.php
│   ├── /models/             # Modèles pour l'interaction avec la base de données
│   │   ├── Animal.php
│   │   ├── Visitor.php
│   │   └── Ticket.php
│   ├── /views/              # Vues pour l'affichage (HTML/PHP)
│   │   ├── animals/
│   │   │   ├── index.php    # Liste des animaux
│   │   │   └── details.php  # Détails d'un animal
│   │   ├── visits/
│   │   │   ├── schedule.php # Horaire des visites
│   │   │   └── tickets.php  # Billets pour les visiteurs
│   │   ├── admin/
│   │   │   └── dashboard.php # Tableau de bord administrateur
│   │   ├── header.php       # En-tête commun
│   │   └── footer.php       # Pied de page commun
│   ├── config/              # Configuration de l'application (connexion DB, routes)
│   │   ├── database.php     # Connexion à la base de données
│   │   └── routes.php       # Gestion des routes
├── /templates/              # Fichiers généraux pour les pages (header, footer, etc.)
│   ├── header.php           # Header commun pour toutes les pages
│   └── footer.php           # Footer commun pour toutes les pages
├── README.md                # Documentation du projet
└── /lib/                    # Bibliothèques externes ou outils supplémentaires (ex : OwlCarousel)
    └── owlcarousel/
  -->