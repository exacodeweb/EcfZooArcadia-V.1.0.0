<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Arcadia - Accueil</title>

    <!-- Lien vers le fichier CSS principal -->
    <link rel="stylesheet" href="../styles/style-2.css">

    <!-- Lien vers Bootstrap pour le style et la mise en page responsive -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <!------------------------------------------------------------------->
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
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

      /*.section.visible {
        opacity: 1;
        transform: translateY(0);
      }

      .navbar {
        position: sticky;
        top: 0;
        z-index: 1000;
        background-color: #fff;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      }*/

      /*--------------------------------------------------------------------------------------------------------------------*/
      body {
        /*
        background-image: url('../public/asset/images/nature-background.jpg');
        background-size: cover; /* L'image couvre tout l'écran */
            /*
        background-attachment: fixed; /* L'image reste en place quand on fait défiler */
            /*
        background-position: center;
        background-repeat: no-repeat;
        color: #333; /* Assurez un bon contraste avec le texte */
            /*
        */

            /*
        background: linear-gradient(to bottom, #a8dadc, #457b9d);
        font-family: 'Roboto', sans-serif;
        color: #1d3557;
        margin: 0;*/

        background: linear-gradient(to bottom, #a8dadc, #457b9d);
        font-family: 'Roboto', sans-serif;
        color: #1d3557;
        margin: 0;

        /*
        background-image: url('../public/asset/images/subtle-texture.png');
        background-size: 200px 200px;
        background-repeat: repeat;
        color: #333;
        */
      }





      /*

      html {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: #010101;  
      }*/
          /*nav {
        background: beige;
      }*/
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

      /*--------------------------------- Test --*/
      /*body {
      background-color: white;
      color: black;
      transition: all 0.5s ease;
      }

      body.night-mode {
          background-color: orange;/*#2c3e50*/
          /*
          color: white;
      }*/


      /*--------------------------------------------------------------------------------------------------------------------*/
      .card img {
        height: 200px;
        /* Ajustez cette hauteur selon vos besoins */
        width: 100%;
        object-fit: cover;
        /* Garde une mise à l'échelle correcte */
        border-radius: 8px;



      }

      /*.img-fluid {
      object-fit: cover; */
      /* Recadre pour remplir la zone sans déformation */
      /*
      }*/


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
      /*--------------------------------------------------------------------------------- nav --*/
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

      /*--------------------------------------------------------------------------------- neon --*/
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

    <!--------------------------------------------------------------------------------- body -->
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


    <!--------------------------------------------------------------------------------------------------------------------->

  </head>




  <body>


    <!--<section class="neon">
    </section>-->

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
            <!--</div>-->

            <!-- Lien pour l'accès administrateur --> <!--
          <div class="Navbar__Link">
            <a class="nav-link" href="./php/login.php" title="Admin"> --> <!--./pages/admin-form-index.html--> <!--

              <svg xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512" width="16" height="16" aria-hidden="true"
                fill="currentColor" class="bi bi-unlock-fill text-white">
                <path
                  d="M423 638H-9c-13.807 0-25-11.193-25-25 0-53.438 17.131-104.058 49.542-146.388 22.2-28.994 50.961-52.656 83.376-69.006C75.53 371.377 62 337.07 62 301c0-79.953 65.047-145 145-145s145 65.047 145 145c0 36.07-13.53 70.377-36.918 96.606 32.416 16.349 61.177 40.012 83.376 69.005C430.869 508.942 448 559.562 448 613c0 13.807-11.193 25-25 25zM17.657 588h378.687c-9.908-74.383-63.38-137.724-136.792-158.682a25 25 0 0 1-5.533-45.75C283.615 366.669 302 335.03 302 301c0-52.383-42.617-95-95-95s-95 42.617-95 95c0 34.03 18.386 65.668 47.981 82.568a25.003 25.003 0 0 1 12.423 24.712 25.003 25.003 0 0 1-17.956 21.038C81.037 450.276 27.564 513.617 17.657 588z">
                </path>
              </svg>
            </a>
          </div> -->

            <!-- Lien pour l'accès administrateur -->
            <div class="Navbar__Link">
              <a class="nav-link nav-admin-link" href="../public/login.php" title="Admin">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512" width="16" height="16" aria-hidden="true"
                  fill="currentColor" class="bi bi-unlock-fill">
                  <path d="M423 638H-9c-13.807 0-25-11.193-25-25 0-53.438 17.131-104.058 49.542-146.388 22.2-28.994 50.961-52.656 83.376-69.006C75.53 371.377 62 337.07 62 301c0-79.953 65.047-145 145-145s145 65.047 145 145c0 36.07-13.53 70.377-36.918 96.606 32.416 16.349 61.177 40.012 83.376 69.005C430.869 508.942 448 559.562 448 613c0 13.807-11.193 25-25 25zM17.657 588h378.687c-9.908-74.383-63.38-137.724-136.792-158.682a25 25 0 0 1-5.533-45.75C283.615 366.669 302 335.03 302 301c0-52.383-42.617-95-95-95s-95 42.617-95 95c0 34.03 18.386 65.668 47.981 82.568a25.003 25.003 0 0 1 12.423 24.712 25.003 25.003 0 0 1-17.956 21.038C81.037 450.276 27.564 513.617 17.657 588z"></path>
                </svg>
              </a>
            </div>

            <!-- Lien pour l'accès administrateur --> <!--
          <div class="Navbar__Link">
            <a class="nav-link nav-admin-link" href="./php/login.php" title="Admin">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512" width="16" height="16" aria-hidden="true"
                class="bi bi-unlock-fill">
                <path d="M423 638H-9c-13.807 0-25-11.193-25-25 0-53.438 17.131-104.058 49.542-146.388 22.2-28.994 50.961-52.656 83.376-69.006C75.53 371.377 62 337.07 62 301c0-79.953 65.047-145 145-145s145 65.047 145 145c0 36.07-13.53 70.377-36.918 96.606 32.416 16.349 61.177 40.012 83.376 69.005C430.869 508.942 448 559.562 448 613c0 13.807-11.193 25-25 25zM17.657 588h378.687c-9.908-74.383-63.38-137.724-136.792-158.682a25 25 0 0 1-5.533-45.75C283.615 366.669 302 335.03 302 301c0-52.383-42.617-95-95-95s-95 42.617-95 95c0 34.03 18.386 65.668 47.981 82.568a25.003 25.003 0 0 1 12.423 24.712 25.003 25.003 0 0 1-17.956 21.038C81.037 450.276 27.564 513.617 17.657 588z"></path>
              </svg>
            </a>
          </div>-->

          </div>

        </div>
      </nav>
    </header>

    <!------------------------------------------------------------------------------------------- application des heure-->
    <div>
      <label for="day-start">Début du jour (h) :</label>
      <input type="number" id="day-start" min="0" max="23" value="6">
      <label for="night-start">Début de la nuit (h) :</label>
      <input type="number" id="night-start" min="0" max="23" value="18">
      <button id="save-config">Sauvegarder</button>
    </div>



    <!-- Contenu principal de la page -->
    <main class="container">
      <!-- Section Présentation --><!--
      <section id="presentation" class="text-center my-4">
        <h1>Bienvenue au Zoo Arcadia</h1>
        <p>Découvrez notre zoo, entièrement indépendant en matière d'énergie et engagé envers l'écologie.</p>
        <div class="images-presentation">
          <img src="../public/asset/images/image5.jfif" alt="Image du zoo" class="img-fluid rounded">
          <img src="../public/asset/images/image6.jfif" alt="Image des animaux" class="img-fluid rounded">
          <img src="../public/asset/images/images7.jfif" alt="Image d'habitat" class="img-fluid rounded">
        </div>
      </section>-->

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

      <!----------------------------------------------------------------------------------------------------------------->

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



      <!-- Section Habitats --> <!--
      <section id="habitats" class="text-left my-4"> --> <!--  --><!-- services --> <!--
        <div class="block">
        <h2>Nos Habitats</h2>
        <ul class="list-unstyled">
          <li>🌿 Savane</li>
          <li>🌳 Forêt tropicale</li>
          <li>🏜️ Désert</li>
        </ul>
        </div>
      </section> -->

      <!-- Section Services --> <!--
      <section id="services" class="text-left my-4">
      <div class="block">
        <h2>Services Offerts</h2>
        <ul class="list-unstyled">
          <li>🍽️ Restauration</li>
          <li>🛍️ Boutique de souvenirs</li>
          <li>🧑‍🤝‍🧑 Visites guidées</li>
        </ul>
      </div>
      </section>-->

      <!-- Section Animaux avec grille d'images --> <!--
      <section id="animaux" class="text-left my-4"> --> <!--  -->
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
      </section> -->





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
                <!--<div class="col-md-4">-->
                <img src="../public/asset/images/image4.jfif" alt="Girafe" class="img-fluid rounded shadow">
                <!--</div>-->
                <h5 class="card-title">🦒 Girafe</h5>
                <p class="card-text">Un habitat pour les animaux du désert.</p>
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
        <!--<h2 class="text-center mb-4">Nos Animaux</h2>-->
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
      <!----------------------------------------------------------------------------------------------------------------->

      <!--<section id="presentation" class="text-center my-4"> --> <!--  --> <!--
      <h2 class="text-center mb-4">Nos Animaux</h2>
        <div class="images-presentation"> --> <!--  --> <!-- class="animal-grid" --> <!--
          <img src="../public/asset/images/image1.jpg" alt="Lion" class="img-fluid rounded">
          <img src="../public/asset/images/image2.jfif" alt="Éléphant" class="img-fluid rounded">
          <img src="../public/asset/images/image4.jfif" alt="Girafe" class="img-fluid rounded">
        </div>
      </section> -->

      <!-----------------<----------------------------------------------------------------------------------------------->

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

    <!------------------------------------------------------------------------------------------------------------------->



    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Our Clients Say!</h1>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
          <div class="testimonial-item text-center">
            <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;">
            <div class="testimonial-text rounded text-center p-4">
              <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
              <h5 class="mb-1">Patient Name</h5>
              <span class="fst-italic">Profession</span>
            </div>
          </div>
          <div class="testimonial-item text-center">
            <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;">
            <div class="testimonial-text rounded text-center p-4">
              <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
              <h5 class="mb-1">Patient Name</h5>
              <span class="fst-italic">Profession</span>
            </div>
          </div>
          <div class="testimonial-item text-center">
            <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;">
            <div class="testimonial-text rounded text-center p-4">
              <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
              <h5 class="mb-1">Patient Name</h5>
              <span class="fst-italic">Profession</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

      <style>

      </style>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">



    <!----------------------------------------------------------->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <!--------------------------------------------------------->

  </body>
</html>