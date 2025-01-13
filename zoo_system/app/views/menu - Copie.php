<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="">



  <title>Zoo Arcadia - Accueil</title>
  <link rel="stylesheet" href="x--assets/css/styles.css">
  <!--<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&family=Rajdhani:wght@400;700&display=swap" rel="stylesheet">-->

  <!--style de police d'ecriture-->
  <link href="https://fonts.cdnfonts.com/css/rajdhani" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">

  <!-- ajouter au code le 09/10/2024 Test-->
  <title>Test Dropdown</title>
  <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">-->

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">  

  <style>
    nav {
      background-color: #333;
      padding: 10px;


      top: 0;
      /* Positionnée à 0 px du haut */
      position: fixed;
      /* Fixe la barre en haut */
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
      /* Ajoute une ombre subtile */
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: space-around;
    }

    nav ul li {
      display: inline;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      padding: 8px 16px;
      display: block;
    }

    nav ul li a:hover {
      background-color: orange;
      /*#555*/
    }

    a:hover {
      color: white;
    }

    /*--------------*/
    nav ul li a.active {
      border-bottom: 2px solid #fff;
    }
  </style>

  <style>
    h1 {
      font-size: 4vw;
      /* La taille dépend de la largeur de la fenêtre */
    }

    p {
      font-size: 1.2rem;
      /* Utilise des unités relatives à la racine */
      line-height: 1.5;
      /* Assure une bonne lisibilité */
    }

    a {
      font-size: 1.2rem;
      /* Utilise des unités relatives à la racine */
      line-height: 1.5;
      /* Assure une bonne lisibilité */
    }

    @media (max-width: 768px) {
      h1 {
        font-size: 2.5rem;
        /* Plus petit sur les tablettes */
      }

      p {
        font-size: 1rem;
        /* Réduction sur tablettes */
      }
    }

    @media (max-width: 480px) {
      h1 {
        font-size: 2rem;
        /* Plus petit sur mobiles */
      }

      p {
        font-size: 0.9rem;
        /* Adapté pour mobiles */
      }
    }
  </style>

  <style>
    body {
      /*background: url('https://images.unsplash.com/photo-1648432279804-ff4b31d77586?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center;
      background-size: cover;
      height: 100vh;*/
      color: white;
    }
  </style>

  <!----------------------------------------------------------------->
  <style>
    body {
      background: url('https://images.unsplash.com/photo-1648432279804-ff4b31d77586?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center;
      background-size: cover;
      min-height: 100vh;
      /* Remplacé par min-height pour éviter les coupures */
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 0 10px;
      box-sizing: border-box;

      margin: 0;
      /* Supprime les marges par défaut */
      padding-top: 60px;
      /* Ajoutez un espace en haut équivalent à la hauteur de la barre */
    }

    header,
    nav,
    section#presentation {
      max-width: 1200px;
      /* Limiter la largeur sur grands écrans */
      width: 100%;
      /* S'adapte à l'écran */
      margin: 0 auto;
    }

    h1 {
      font-size: 2rem;
      text-align: center;
    }

    .images-presentation img {
      max-width: 100%;
      /* Images flexibles */
      height: auto;
      /* Préserve le ratio */
      margin: 10px 0;
    }

    nav ul {
      flex-wrap: wrap;
      /* Les éléments passent à la ligne si nécessaire */
    }

    nav ul li {
      flex: 1 1 auto;
      text-align: center;
    }


    @media (max-width: 768px) {
      nav ul {
        flex-direction: column;
        /* Transforme en liste verticale */
        text-align: center;
      }

      h1 {
        font-size: 1.5rem;
        /* Texte plus petit */
      }

      .images-presentation img {
        width: 90%;
        /* Réduction des images pour petits écrans */
        margin: 5px auto;
      }
    }

    @media (max-width: 480px) {
      body {
        padding: 0 5px;
      }

      nav ul li a {
        font-size: 14px;
        /* Texte plus petit dans le menu */
      }
    }

    /* nav {
  position: fixed; /* Fixe la barre en haut */
    /*
  top: 0; /* Positionnée à 0 px du haut */
    /*
  left: 0; /* Alignée à gauche */
    /*
  width: 100%; /* Prend toute la largeur de la page */
    /*
  z-index: 1000; /* Superpose la barre à d'autres éléments */
    /*
  background-color: #333; /* Couleur de fond */
    /*
  padding: 10px 0;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5); /* Ajoute une ombre subtile */
    /*
}*/
    /*

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: space-around;
}

nav ul li {
  display: inline;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
  padding: 8px 16px;
  display: block;
}

nav ul li a:hover {
  background-color: #555;
}

nav ul li a.active {
  border-bottom: 2px solid #fff;
}*/

    /*--------------------------------------------------------------------------------------------------------------------*/
    /*
nav ul {
      flex-wrap: wrap;
      /* Les éléments passent à la ligne si nécessaire */
    /*
    }

    nav ul li {
      flex: 1 1 auto;
      text-align: center;
    }

/*                                                   
    @media (max-width: 768px) {
      nav ul {
        flex-direction: column;
        /* Transforme en liste verticale */
    /*
        text-align: center;
      }/**/
    /*
      h1 {
        font-size: 1.5rem;
        /* Texte plus petit */
    /*
      }/*

    .images-presentation img {
      width: 90%;
      /* Réduction des images pour petits écrans */
    /*
      margin: 5px auto;
    }

    
    }*/
    /*
    @media (max-width: 480px) {
      body {
        padding: 0 5px;
      }

      nav ul li a {
        font-size: 14px;
        /* Texte plus petit dans le menu */
    /*
      }
    }*/


    /*----------------------------------*/
    /*
    .navbar-toggler-icon {
      color: white;
    }*/
    /*------------------------------------------------*/

    .navbar-toggler {
      border: none;
      /* Retire la bordure par défaut */
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%28255, 255, 255, 1%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
      /* Icône en blanc */
      transition: background-color 0.3s ease;
    }

    .navbar-toggler:hover .navbar-toggler-icon {
      background-color: rgba(255, 255, 255, 0.1);
      /* Légère couleur de fond au survol */
    }

    .navbar-toggler:focus .navbar-toggler-icon,
    .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
      background-color: rgba(255, 255, 255, 0.2);
      /* Fond visible lorsque le menu est ouvert */
    }

    /*------------------------------------------------*/
  </style>

  <!------------------------------------------------------------------>


  <style>
    nav {
      background-color: #333;
      padding: 10px;
      top: 0;
      position: fixed;
      width: 100%;
      z-index: 1000;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: space-around;
    }

    nav ul li {
      display: inline;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      padding: 8px 16px;
      display: block;
    }

    nav ul li a:hover {
      background-color: orange;
    }

    nav ul li a.active {
      border-bottom: 2px solid #fff;
    }

    .navbar-toggler {
      border: none;
    }
  </style>
</head>

<body>

  <header> 

    <nav>

      <!-- Logo du zoo --> <!--
      <div class="img-logo-1 rounded-3">
        <img src="../../public/asset/images/logo.jpg" class="logo" alt="logo zoo">
      </div> -->

      <!-- Menu de navigation principal --> <!--
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->

      <ul>
        <!--<li><a href="../../public/index-2.php">Accueil</a></li>-->
        <li><a href="../../index-2.php">Accueil</a></li>
        <li><a href="../../public/services.php">Services</a></li>
        <li><a href="../../public/habitats.php">Habitats</a></li>
        <li><a href="../../public/contact/contact.html">Contact</a></li> 

        <?php if (isset($user) && $user): ?>
          <?php if (in_array($user['role'], ['veterinaire', 'employe', 'admin'])): ?>
            <li><a href="/dashboard.php">Tableau de bord</a></li>
          <?php endif; ?>
          <li><a href="/logout.php">Déconnexion</a></li>
        <?php else: ?> 
          <!--<li><a href="../public/admin-2login">Connexion</a></li>--><!-- /login.php -->
          <li><a href="../../public/login.php">Connexion</a></li>
        <?php endif; ?> 


    



        <!--
        <div class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" id="deroulanta" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lien</a>
          <div class="dropdown-menu" aria-labelledby="deroulanta">
            <a class="dropdown-item" href="#">Lien</a>
            <button class="dropdown-item" type="button">Bouton</button>
            <span class="dropdown-item-text">Texte</span>
          </div>
        </div>
          
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bouton</button>
          <div class="dropdown-menu" aria-labelledby="deroulantb">
            <a class="dropdown-item" href="#">Lien</a>
            <button class="dropdown-item" type="button">Bouton</button>
            <span class="dropdown-item-text">Texte</span>
          </div>
        </div>   


        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Bouton
          </button>
          <div class="dropdown-menu" aria-labelledby="deroulantb">
            <a class="dropdown-item" href="#">Lien</a>
            <button class="dropdown-item" type="button">Bouton</button>
            <span class="dropdown-item-text">Texte</span>
          </div>
        </div>
        -->

        <!-- celui est valide 
        <div class="dropdown">
          <button class="dropdown-btn">Bouton</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Lien</a>
            <button class="dropdown-item" type="button">Bouton</button>
            <span class="dropdown-item-text">Texte</span>
          </div>
        </div> -->

      



      </ul>

      
    </nav>





    <!----------------------------------------------------------------------------------------------------------------->
    <!--
    <nav class="navbar navbar-expand-lg neon"> --> <!--  -->  <!--
      <div class="container-fluid"> -->
        <!-- Logo du zoo --> <!--
        <div class="img-logo-1 rounded-3">
          <img src="../../public/asset/images/logo.jpg" class="logo" alt="logo zoo">
        </div> -->

        <!-- Menu de navigation principal --> <!--
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
          </ul> -->
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

        <!-- Lien pour l'accès administrateur --> <!--
        <div class="Navbar__Link">
          <a class="nav-link nav-admin-link" href="../public/login.php" title="Admin">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512" width="16" height="16" aria-hidden="true"
              fill="currentColor" class="bi bi-unlock-fill">
              <path d="M423 638H-9c-13.807 0-25-11.193-25-25 0-53.438 17.131-104.058 49.542-146.388 22.2-28.994 50.961-52.656 83.376-69.006C75.53 371.377 62 337.07 62 301c0-79.953 65.047-145 145-145s145 65.047 145 145c0 36.07-13.53 70.377-36.918 96.606 32.416 16.349 61.177 40.012 83.376 69.005C430.869 508.942 448 559.562 448 613c0 13.807-11.193 25-25 25zM17.657 588h378.687c-9.908-74.383-63.38-137.724-136.792-158.682a25 25 0 0 1-5.533-45.75C283.615 366.669 302 335.03 302 301c0-52.383-42.617-95-95-95s-95 42.617-95 95c0 34.03 18.386 65.668 47.981 82.568a25.003 25.003 0 0 1 12.423 24.712 25.003 25.003 0 0 1-17.956 21.038C81.037 450.276 27.564 513.617 17.657 588z"></path>
            </svg>
          </a>
        </div> -->

        <!-- Lien pour l'accès administrateur --> <!--
        <div class="Navbar__Link">
          <a class="nav-link nav-admin-link" href="./php/login.php" title="Admin">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512" width="16" height="16" aria-hidden="true"
              class="bi bi-unlock-fill">
              <path d="M423 638H-9c-13.807 0-25-11.193-25-25 0-53.438 17.131-104.058 49.542-146.388 22.2-28.994 50.961-52.656 83.376-69.006C75.53 371.377 62 337.07 62 301c0-79.953 65.047-145 145-145s145 65.047 145 145c0 36.07-13.53 70.377-36.918 96.606 32.416 16.349 61.177 40.012 83.376 69.005C430.869 508.942 448 559.562 448 613c0 13.807-11.193 25-25 25zM17.657 588h378.687c-9.908-74.383-63.38-137.724-136.792-158.682a25 25 0 0 1-5.533-45.75C283.615 366.669 302 335.03 302 301c0-52.383-42.617-95-95-95s-95 42.617-95 95c0 34.03 18.386 65.668 47.981 82.568a25.003 25.003 0 0 1 12.423 24.712 25.003 25.003 0 0 1-17.956 21.038C81.037 450.276 27.564 513.617 17.657 588z"></path>
            </svg>
          </a>
        </div>-->
          <!--
        </div>

      </div>
    </nav> -->
    <!----------------------------------------------------------------------------------------------------------------->
    <!--
    <nav class="navbar navbar-expand-lg neon">
    <div class="container-fluid"> -->
      <!-- Logo du zoo --> <!--
      <div class="img-logo-1 rounded-3">
        <img src="../../public/asset/images/logo.jpg" class="logo" alt="logo zoo">
      </div> -->

      <!-- Menu de navigation principal --> <!--
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
      </div> -->

      <!-- Lien pour l'accès administrateur --> <!--
      <div class="Navbar__Link">
        <a class="nav-link nav-admin-link" href="../public/login.php" title="Admin">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512" width="16" height="16" aria-hidden="true" fill="currentColor" class="bi bi-unlock-fill">
            <path d="M423 638H-9c-13.807 0-25-11.193-25-25 0-53.438 17.131-104.058 49.542-146.388 22.2-28.994 50.961-52.656 83.376-69.006C75.53 371.377 62 337.07 62 301c0-79.953 65.047-145 145-145s145 65.047 145 145c0 36.07-13.53 70.377-36.918 96.606 32.416 16.349 61.177 40.012 83.376 69.005C430.869 508.942 448 559.562 448 613c0 13.807-11.193 25-25 25zM17.657 588h378.687c-9.908-74.383-63.38-137.724-136.792-158.682a25 25 0 0 1-5.533-45.75C283.615 366.669 302 335.03 302 301c0-52.383-42.617-95-95-95s-95 42.617-95 95c0 34.03 18.386 65.668 47.981 82.568a25.003 25.003 0 0 1 12.423 24.712 25.003 25.003 0 0 1-17.956 21.038C81.037 450.276 27.564 513.617 17.657 588z"></path>
          </svg>
        </a>
      </div>-->
          <!--
    </div>
  </nav> -->

    <!----------------------------------------------------------------------------------------------------------------->
          <!--
    <nav class="navbar navbar-expand-lg neon">
    <div class="container-fluid"> -->
      <!-- Logo du zoo -->  <!--
      <div class="img-logo-1 rounded-3">
        <img src="../../public/asset/images/logo.jpg" class="logo" alt="logo zoo"> -->
        <!--<img src="../../public/asset/images/new-logo.png" class="logo" alt="Nouveau logo zoo">--> <!--
      </div>
          <style>
            .logo {
              width: 120px; /* Ajustez selon la taille souhaitée */
              height: auto; /* Maintient les proportions */
              border-radius: 8px; /* Coins arrondis (optionnel) */
              box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Ajoute un effet d'ombre */
            }
          </style>  -->
      <!-- Menu de navigation principal --> <!--
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
      </div> -->

      <!-- Lien pour l'accès administrateur -->  <!--
      <div class="Navbar__Link">
        <a class="nav-link nav-admin-link" href="../public/login.php" title="Admin">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512" width="16" height="16" aria-hidden="true" fill="currentColor" class="bi bi-unlock-fill">
            <path d="M423 638H-9c-13.807 0-25-11.193-25-25 0-53.438 17.131-104.058 49.542-146.388 22.2-28.994 50.961-52.656 83.376-69.006C75.53 371.377 62 337.07 62 301c0-79.953 65.047-145 145-145s145 65.047 145 145c0 36.07-13.53 70.377-36.918 96.606 32.416 16.349 61.177 40.012 83.376 69.005C430.869 508.942 448 559.562 448 613c0 13.807-11.193 25-25 25zM17.657 588h378.687c-9.908-74.383-63.38-137.724-136.792-158.682a25 25 0 0 1-5.533-45.75C283.615 366.669 302 335.03 302 301c0-52.383-42.617-95-95-95s-95 42.617-95 95c0 34.03 18.386 65.668 47.981 82.568a25.003 25.003 0 0 1 12.423 24.712 25.003 25.003 0 0 1-17.956 21.038C81.037 450.276 27.564 513.617 17.657 588z"></path>
          </svg>
        </a>
      </div>

    </div>
  </nav> -->










  </header>


  <!------------------------------------------------------------------------------------------------------------------->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark"> 
      <!-- Menu de navigation principal --> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <!--<li><a href="../../public/index-2.php" class="nav-link">Accueil-A</a></li>-->
          <li><a href="../../index-2.php" class="nav-link">Accueil-A</a></li>
          <li><a href="../../public/services.php" class="nav-link">Services</a></li>
          <li><a href="../../public/habitats.php" class="nav-link">Habitats</a></li>
          <li><a href="../../public/contact/contact.html" class="nav-link">Contact</a></li>

          <?php if (isset($user) && $user): ?>
            <?php if (in_array($user['role'], ['veterinaire', 'employe', 'admin'])): ?>
              <li><a href="/dashboard.php" class="nav-link">Tableau de bord</a></li>
            <?php endif; ?>
            <li><a href="/logout.php" class="nav-link">Déconnexion</a></li>
          <?php else: ?>
            <li><a href="../../public/login.php" class="nav-link">Connexion</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </nav> 





    <!--
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">  -->
      <!-- Bouton hamburger pour les petits écrans -->  <!--
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="../../public/index-2.php" class="nav-link">Accueil-1</a>
          </li>
          <li class="nav-item">
            <a href="../../public/services.php" class="nav-link">Services</a>
          </li>
          <li class="nav-item">
            <a href="../../public/habitats.php" class="nav-link">Habitats</a>
          </li>
          <li class="nav-item">
            <a href="../../public/contact/contact.html" class="nav-link">Contact</a>
          </li>
          <li class="nav-item">
            <a href="../../public/login.php" class="nav-link">Connexion</a>
          </li>
        </ul>
      </div>
    </nav> --> <!--

    <style>
      nav {
        position: fixed;
        /* Fixe la barre en haut */

        top: 0;
        /* Positionnée à 0 px du haut */

        left: 0;
        /* Alignée à gauche */

        width: 100%;
        /* Prend toute la largeur de la page */

        z-index: 1000;
        /* Superpose la barre à d'autres éléments */

        background-color: #333;
        /* Couleur de fond */

        padding: 10px 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        /* Ajoute une ombre subtile */

      }

      nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: space-around;
      }

      nav ul li {
        display: inline;
      }

      nav ul li a {
        color: #fff;
        text-decoration: none;
        padding: 8px 16px;
        display: block;
      }

      nav ul li a:hover {
        background-color: #555;
      }

      nav ul li a.active {
        border-bottom: 2px solid #fff;
      }

      /*--------------------------------------------------------------------------------------------------------------*/

      nav ul {
        flex-wrap: wrap;
        /* Les éléments passent à la ligne si nécessaire */

      }

      nav ul li {
        flex: 1 1 auto;
        text-align: center;
      }

      @media (max-width: 768px) {
        nav ul {
          flex-direction: column;
          /* Transforme en liste verticale */

          text-align: center;
        }

        h1 {
          font-size: 1.5rem;
          /* Texte plus petit */

        }

        .images-presentation img {
          width: 90%;
          /* Réduction des images pour petits écrans */

          margin: 5px auto;
        }


      }

      @media (max-width: 480px) {
        body {
          padding: 0 5px;
        }

        nav ul li a {
          font-size: 14px;
          /* Texte plus petit dans le menu */

        }
      }


      /*----------------------------------*/

      .navbar-toggler-icon {
        color: white;
      }
    </style>  -->

  </header> 
  <!------------------------------------------------------------------------------------------------------------------->

  <!--<section id="presentation" class="text-center my-4">
      <h1>Bienvenue au Zoo Arcadia</h1>
      <p>Découvrez notre zoo, entièrement indépendant en matière d'énergie et engagé envers l'écologie.</p>
      <div class="images-presentation">
        <img src="../public/asset/images/image5.jfif" alt="Image du zoo" class="img-fluid rounded">
        <img src="../public/asset/images/image6.jfif" alt="Image des animaux" class="img-fluid rounded">
        <img src="../public/asset/images/images7.jfif" alt="Image d'habitat" class="img-fluid rounded">
      </div>
    </section> -->

  <section id="presentation" class="text-center my-4 container">
    <h1 class="mb-3">Bienvenue au Zoo Arcadia</h1>
    <p>Découvrez notre zoo, entièrement indépendant en matière d'énergie et engagé envers l'écologie.</p>
    <div class="row">
      <div class="col-12 col-md-4">
        <img src="../../public/asset/images/image5.jfif" alt="Image du zoo" class="img-fluid rounded">
      </div>
      <div class="col-12 col-md-4">
        <img src="../../public/asset/images/image6.jfif" alt="Image des animaux" class="img-fluid rounded">
      </div>
      <div class="col-12 col-md-4">
        <img src="../../public/asset/images/images7.jfif" alt="Image d'habitat" class="img-fluid rounded">
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const links = document.querySelectorAll('nav ul li a');
      links.forEach(link => {
        if (link.href === window.location.href) {
          link.classList.add('active');
        }
      });
    });
  </script>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb2Jp3rWL0k8/1R1X+1eT9c6UMYcYjGpG5G49T0bx5pi9FjE8" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9E5PB1z0eug59txg3a3rM1Dkz4tujdPj/ie8XfEfpLuRuKJ7foaoApm" crossorigin="anonymous"></script>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


<!--

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    motDePasse VARCHAR(255),
    role ENUM('visiteur', 'veterinaire', 'employe', 'admin') NOT NULL DEFAULT 'visiteur',
    dateDeCreation DATETIME DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO users (nom, prenom, email, motDePasse, role) VALUES
('Parrot', 'Vincent', 'vincent_parrot@example.com', 'hashed_password', 'admin'),
('Doe', 'John', 'john.doe@example.com', 'hashed_password', 'employe'),
('Smith', 'Anna', 'anna.smith@example.com', 'hashed_password', 'veterinaire'),
('Guest', 'User', 'guest.user@example.com', 'hashed_password', 'visiteur');


session_start();

$user = null;

if (isset($_SESSION['user_id'])) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}

-->


<br>

<section class="margin, pading">

</section>
<style>
  .margin {
    margin: 500px;
  }
</style>

<!--
ChatGPT a dit :
ChatGPT
Voici une version fonctionnelle de votre menu de navigation, adaptée à vos besoins et critères. J'ai inclus toutes les fonctionnalités décrites dans l'US3, tout en utilisant un design simple et efficace. Le menu est structuré pour permettre un accès clair aux différentes sections, et il inclut une logique conditionnelle pour afficher ou masquer certaines options en fonction de l'utilisateur connecté.

Code finalisé :
html
Copier le code
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoo Arcadia - Navigation</title>
  <link rel="stylesheet" href="assets/css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&family=Rajdhani:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    nav {
      background-color: #333;
      padding: 10px;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: space-around;
    }

    nav ul li {
      display: inline;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      padding: 8px 16px;
      display: block;
    }

    nav ul li a:hover {
      background-color: #555;
    }

    nav ul li a.active {
      border-bottom: 2px solid #fff;
    }
  </style>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="habitats.php">Habitats</a></li>
        <li><a href="contact.php">Contact</a></li>
        
        <!?php if (isset($user) && $user): ?>
          <!?php if (in_array($user['role'], ['veterinaire', 'employe', 'admin'])): ?>
            <li><a href="dashboard.php">Tableau de bord</a></li>
          <!?php endif; ?>
          <li><a href="logout.php">Déconnexion</a></li>
        <!?php else: ?>
          <li><a href="login.php">Connexion</a></li>
        <!?php endif; ?>
      </ul>
    </nav>
  </header> 

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const links = document.querySelectorAll('nav ul li a');
      links.forEach(link => {
        if (link.href === window.location.href) {
          link.classList.add('active');
        }
      });
    });
  </script>
</body>

</html>-->















<!--
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Zoo Arcadia - Accueil</title>
  <link rel="stylesheet" href="x--assets/css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&family=Rajdhani:wght@400;700&display=swap" rel="stylesheet">
        -->
<!--style de police d'ecriture--> <!--
  <link href="https://fonts.cdnfonts.com/css/rajdhani" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">  -->

<!-- ajouter au code le 09/10/2024 Test--> <!--
  <title>Test Dropdown</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    nav {
      background-color: #333;
      padding: 10px;

      top: 0; /* Positionnée à 0 px du haut */
      position: fixed; /* Fixe la barre en haut */
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5); /* Ajoute une ombre subtile */
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: space-around;
    }

    nav ul li {
      display: inline;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      padding: 8px 16px;
      display: block;
    }

    nav ul li a:hover {
      background-color: orange;
      /*#555*/
    }

    a:hover {
      color: white;
    }

    nav ul li a.active {
      border-bottom: 2px solid #fff;
    }
  </style>

  <style>
    h1 {
      font-size: 4vw;
      /* La taille dépend de la largeur de la fenêtre */
    }

    p {
      font-size: 1.2rem;
      /* Utilise des unités relatives à la racine */
      line-height: 1.5;
      /* Assure une bonne lisibilité */
    }

    a {
      font-size: 1.2rem;
      /* Utilise des unités relatives à la racine */
      line-height: 1.5;
      /* Assure une bonne lisibilité */
    }

    @media (max-width: 768px) {
      h1 {
        font-size: 2.5rem;
        /* Plus petit sur les tablettes */
      }

      p {
        font-size: 1rem;
        /* Réduction sur tablettes */
      }
    }

    @media (max-width: 480px) {
      h1 {
        font-size: 2rem;
        /* Plus petit sur mobiles */
      }

      p {
        font-size: 0.9rem;
        /* Adapté pour mobiles */
      }
    }
  </style>

  <style>
    body {
      background: url('https://images.unsplash.com/photo-1648432279804-ff4b31d77586?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center;
      background-size: cover;
      height: 100vh;
      color: white;
    }
  </style>

  <style>
    body {
      background: url('https://images.unsplash.com/photo-1648432279804-ff4b31d77586?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center;
      background-size: cover;
      min-height: 100vh;
      /* Remplacé par min-height pour éviter les coupures */
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 0 10px;
      box-sizing: border-box;

      margin: 0; /* Supprime les marges par défaut */
      padding-top: 60px; /* Ajoutez un espace en haut équivalent à la hauteur de la barre */
    }

    header,
    nav,
    section#presentation {
      max-width: 1200px;
      /* Limiter la largeur sur grands écrans */
      width: 100%;
      /* S'adapte à l'écran */
      margin: 0 auto;
    }

    h1 {
      font-size: 2rem;
      text-align: center;
    }

    .images-presentation img {
      max-width: 100%;
      /* Images flexibles */
      height: auto;
      /* Préserve le ratio */
      margin: 10px 0;
    }

    nav ul {
      flex-wrap: wrap;
      /* Les éléments passent à la ligne si nécessaire */
    }

    nav ul li {
      flex: 1 1 auto;
      text-align: center;
    }

    @media (max-width: 768px) {
      nav ul {
        flex-direction: column;
        /* Transforme en liste verticale */
        text-align: center;
      }

      h1 {
        font-size: 1.5rem;
        /* Texte plus petit */
      }

      .images-presentation img {
        width: 90%;
        /* Réduction des images pour petits écrans */
        margin: 5px auto;
      }
    }

    @media (max-width: 480px) {
      body {
        padding: 0 5px;
      }

      nav ul li a {
        font-size: 14px;
        /* Texte plus petit dans le menu */
      }
    }

      .images-presentation img {
        width: 90%;
        /* Réduction des images pour petits écrans */
        margin: 5px auto;
      }

.navbar-toggler {
  border: none; /* Retire la bordure par défaut */
}

.navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%28255, 255, 255, 1%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); /* Icône en blanc */
  transition: background-color 0.3s ease;
}

.navbar-toggler:hover .navbar-toggler-icon {
  background-color: rgba(255, 255, 255, 0.1); /* Légère couleur de fond au survol */
}

.navbar-toggler:focus .navbar-toggler-icon,
.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
  background-color: rgba(255, 255, 255, 0.2); /* Fond visible lorsque le menu est ouvert */
}
  </style>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="../../public/index-2.php">Accueil</a></li>
        <li><a href="../../public/services.php">Services</a></li>
        <li><a href="../../public/habitats.php">Habitats</a></li>
        <li><a href="../../public/contact/contact.html">Contact</a></li>

        <!?php if (isset($user) && $user): ?>
          <!?php if (in_array($user['role'], ['veterinaire', 'employe', 'admin'])): ?>
            <li><a href="/dashboard.php">Tableau de bord</a></li>
          <!?php endif; ?>
          <li><a href="/logout.php">Déconnexion</a></li>
        <!?php else: ?>   -->
<!--<li><a href="../public/admin-2login">Connexion</a></li>--><!-- /login.php --> <!--
          <li><a href="../../public/login.php">Connexion</a></li>
        <!?php endif; ?>
      </ul>
    </nav>
  </header>

</body>

<section id="presentation" class="text-center my-4 container">
  <h1 class="mb-3">Bienvenue au Zoo Arcadia</h1>
  <p>Découvrez notre zoo, entièrement indépendant en matière d'énergie et engagé envers l'écologie.</p>
  <div class="row">
    <div class="col-12 col-md-4">
      <img src="../../public/asset/images/image5.jfif" alt="Image du zoo" class="img-fluid rounded">
    </div>
    <div class="col-12 col-md-4">
      <img src="../../public/asset/images/image6.jfif" alt="Image des animaux" class="img-fluid rounded">
    </div>
    <div class="col-12 col-md-4">
      <img src="../../public/asset/images/images7.jfif" alt="Image d'habitat" class="img-fluid rounded">
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('nav ul li a');
    links.forEach(link => {
      if (link.href === window.location.href) {
        link.classList.add('active');
      }
    });
  });
</script>

</html>  -->



<br>
<br>


<!-- 1. HTML :
        html
        Copier le code -->
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dropdown sans Bootstrap</title>
  <link rel="stylesheet" href="styles.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">  
  <style>
    /*-- 2. CSS (styles.css) : css Copier le code -->

    /* Style général du bouton */
    .dropdown-btn {
      background-color: #6c757d;
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      border-radius: 4px;
    }

    /* Style du menu déroulant, caché par défaut */
    .dropdown-menu {
      display: none;
      position: absolute;
      background-color: #f8f9fa;
      min-width: 160px;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
      border-radius: 4px;
      padding: 10px 0;
    }

    /* Style des éléments du menu */
    .dropdown-item {
      color: #007bff;
      padding: 8px 16px;
      text-decoration: none;
      display: block;
    }

    /* Style au survol des éléments du menu */
    .dropdown-item:hover {
      background-color: #f1f1f1;
    }

    /* Style du texte dans le menu */
    .dropdown-item-text {
      color: #6c757d;
      padding: 8px 16px;
      display: block;
    }
  </style>
  <style>
    /* Style général du bouton */
    .dropdown-btn {
      background-color: #6c757d;
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      border-radius: 4px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* Ajouter une flèche vers le bas après le texte du bouton */
    .dropdown-btn::after {
      /*content: '\2193';*/  /*-- lien vers le site pour l'encodage: https://outils-javascript.aliasdmc.fr/ --*/
      content: '\2BC6';
      /* Code Unicode pour une flèche vers le bas */
      font-size: 14px;
      margin-left: 8px;
      /* Espacement entre le texte et la flèche */
    }

    /* Style du menu déroulant, caché par défaut */
    .dropdown-menu {
      display: none;
      position: absolute;
      background-color: #f8f9fa;
      min-width: 160px;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
      border-radius: 4px;
      padding: 10px 0;
    }

    /* Style des éléments du menu */
    .dropdown-item {
      color: #007bff;
      padding: 8px 16px;
      text-decoration: none;
      display: block;
    }

    /* Style au survol des éléments du menu */
    .dropdown-item:hover {
      background-color: #f1f1f1;
    }

    /* Style du texte dans le menu */
    .dropdown-item-text {
      color: #6c757d;
      padding: 8px 16px;
      display: block;
    }
  </style>
</head>

<body>

  <div class="dropdown">
    <button class="dropdown-btn">Bouton</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Lien</a>
      <button class="dropdown-item" type="button">Bouton</button>
      <span class="dropdown-item-text">Texte</span>
    </div>
  </div>

  <script src="script.js"></script>

  <!-- Bouton Menu Déroulant -->
  <script>
    /*3. JavaScript(script.js):
              javascript
            Copier le code*/
    // Obtenez l'élément bouton du dropdown et le menu du dropdown
    const dropdownBtn = document.querySelector('.dropdown-btn');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    // Ajoutez un événement pour afficher/masquer le menu lorsqu'on clique sur le bouton
    dropdownBtn.addEventListener('click', function() {
      // Toggle le menu en fonction de son état
      dropdownMenu.style.display = (dropdownMenu.style.display === 'block') ? 'none' : 'block';
    });

    // Si un clic est effectué ailleurs sur la page, fermer le menu déroulant
    window.addEventListener('click', function(event) {
      if (!dropdownBtn.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.style.display = 'none';
      }
    });
  </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>


  <!-- Scripts JavaScript nécessaires, y compris Bootstrap --><!--
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>-->
</body>

</html>