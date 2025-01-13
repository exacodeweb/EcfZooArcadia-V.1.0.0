<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoo Arcadia</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="x./styles/style-avis.css"><!--<<<<<<<<<<<<<<<<-->
  <link rel="stylesheet" href="x./styles/style-avis-caroussel.css">
  <link rel="stylesheet" href="x./avis_system_controls/style.css">
  <style>
    /* ================================================*/
    /* Réinitialisation globale et valeurs par défaut */
    /*=================================================*/
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Corps global */
    body {
      font-family: 'Open Sans', sans-serif;
      line-height: 1.6;
      color: #2A7E50;
      background-color: #F3EDE0;
    }

    /*=============================*/
    /* Header et Menu Navigation */
    /*=============================*/
    header {
      background-color: #2b2b2b;
      /**/
      /*#4CAF50*/
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

    /* Styles globaux */
    .nav-links {
      display: flex;
      gap: 20px;
      list-style: none;
      transition: transform 0.3s ease;

    }

    /* Alignement du logo et du bouton hamburger */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: #2A7E50;
      /*#333*/
      color: white;
      /*whhite*/
    }

    /* Logo */
    .logo {
      height: 75px;
      /*50px*/
      /* Ajustez la taille selon votre logo */
      border-radius: 4px;
    }

    /* Bouton hamburger */
    .menu-toggle {
      font-size: 28px;
      cursor: pointer;
      display: none;
      /* Masquer par défaut sur les grands écrans */
    }

    /* Lien de navigation */
    .nav-links a {
      text-decoration: none;
      color: white;
      padding: 10px;
      text-align: center;


      transition: color 0.3s ease;
      /* Transition douce pour l'effet de survol */
    }

    /*----*/
    .nav-links a:hover {
      color: #F2A007;
      /* Couleur au survol */
      /*#007BFF*/
    }

    /*----*/

    /* Bouton de réservation */
    .cta-btn {
      background-color: #F3EDE0;
      /*#007BFF*/
      /**/
      color: #2A7E50;
      /*#fff*/
      /**/
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .cta-btn:hover {
      background-color: #805D3A;
      /*#0056b3*/
      /*#fff*/
      color: #fff;
    }

    /* Menu toggle */
    @media (max-width: 768px) {

      .nav-links {
        /*position: absolute;*/
        background-color: #2A7E50;
        /*width: 100%;*/
        /*top: 70px;*/
        left: 0;
      }

      .nav-links li {
        margin: 0.5rem 0;
        /*0.5rem*/
      }
    }

    /* Navigation responsive */
    @media (max-width: 768px) {

      .nav-links.show {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
      }

      .menu-toggle {
        display: block;
        cursor: pointer;
        font-size: 24px;
        color: white;
      }
    }

    /* Responsive */
    @media (max-width: 768px) {
      .menu-toggle {
        display: block;
      }

      .nav-links {
        flex-direction: column;
        align-items: center;
        padding: 20px 0;
      }
    }

    /* Navigation responsive */
    @media (max-width: 768px) {
      .nav-links {
        flex-direction: column;
        background-color: rgba(0, 0, 0, 0.8);
        /*background-color: #2A7E50;*/
        position: absolute;
        top: 107px;
        /*70px*/
        /* Ajustez selon la hauteur du header */
        right: 0;
        width: 100%;
        transform: translateY(-100%);
        opacity: 0;
        visibility: hidden;
      }
    }

    /*==========================*/
    /* Section Hero Section */
    /*==========================*/

    h1 {
      font-size: clamp(24px, 5vw, 48px) !important;
      /* Min 24px, Max 48px */
      text-align: center !important;
      margin: 1rem 0;
      line-height: 1.2;
      /*color: #ffff;*/
    }

    #hero {
      background: url('./assets/images/image-resize-(7).jpg') no-repeat center center/cover;
      /**/
      /*image-intro-0.jpg*/
      /*image-intro.jpg*/
      /*zoo.jpg*/
      /*image5.jfif*/
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: #fff;
      padding: 0 1rem;
    }

    .hero-content h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
    }

    .hero-content p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
    }

    .hero-buttons .btn {
      margin: 0 0.5rem;
      background: #F3EDE0;
      color: #2A7E50;
      padding: 0.8rem 1.2rem;
      text-decoration: none;
      font-weight: bold;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .hero-buttons .btn:hover {
      background: #805D3A;
      color: #fff;
    }

    .hero-content {
      background: rgba(0, 0, 0, 0.5);
      /* Fond semi-transparent */
      padding: clamp(10px, 5vw, 20px);
      /* Min 10px, Max 20px, flexible */
      border-radius: 10px;
      /* Coins arrondis */
      max-width: 90%;
      /* Empêche un débordement horizontal */
      margin: 0 auto;
      /* Centre sur l'écran */
      color: #fff;
      /* Texte lisible sur fond sombre */
    }

    /* Pour les plus petits écrans */
    @media (max-width: 400px) {
      h1 {
        font-size: 20px !important;
        /* Réduction spécifique si besoin */
      }
    }

    /* Ajustement pour les très petits écrans */
    @media (max-width: 400px) {
      .hero-content {
        padding: 10px;
        /* Réduction des marges */
        border-radius: 5px;
        /* Coins moins arrondis */
        font-size: 14px;
        /* Réduction de la taille du texte si nécessaire */
      }
    }

    /*==========================*/
    /* About Section À propos */
    /*==========================*/
    /* Section À propos */
    #about {
      padding: 2rem;
      text-align: center;
      background: #fff;
    }

    #about h2 {
      margin-bottom: 1rem;
      color: #2A7E50;
    }

    #about .about-image {
      margin-top: 1rem;
      width: 100%;
      max-width: 600px;
      border-radius: 10px;
    }

    /*==========================*/
    /*Habitats Section Habitats*/
    /*==========================*/
    #habitats {
      padding: 2rem;
      text-align: center;
      background: #F3EDE0;
    }

    #habitats h2 {
      margin-bottom: 2rem;
      color: #2A7E50;
    }

    .habitat-cards {
      display: flex;
      justify-content: space-around;
      gap: 1rem;
      flex-wrap: wrap;
    }

    /*-- carte images ? --*/
    .card {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 1rem;
      width: 30%;
      max-width: 300px;
      text-align: center;
    }

    .card img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 1rem;
    }

    .card h3 {
      color: #2A7E50;
    }

    /* Mise à jour */
    /* Uniformisation des images */
    .habitat-cards img,
    .service-card img {
      height: 200px;
      object-fit: cover;
      width: 100%;
    }

    .card {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    /* Ajustements pour les petits écrans */
    @media (max-width: 768px) {

      .habitat-card,
      .service-card {
        flex: 1 1 100%;
        /* Chaque carte prend toute la largeur */
      }

      #habitats,
      #services {
        padding: 0 0.5rem;
        /* Réduction des marges pour petits écrans */
      }
    }

    /* Gestion spécifique pour les très petits écrans (307px) */
    @media (max-width: 400px) {

      .habitat-card,
      .service-card {
        padding: 0.5rem;
      }

      .habitat-card img,
      .service-card img {
        height: 150px;
        /* Réduction de la hauteur pour s'adapter */
      }
    }

    .mt-3 {
      margin-top: 15px;
    }

    /*==========================*/
    /* Habitats Section Animaux */
    /*==========================*/
    #animaux {
      padding: 2rem;
      text-align: center;
      background: #F3EDE0;
    }

    #animaux h2 {
      margin-bottom: 2rem;
      color: #2A7E50;
    }

    .animaux-cards {
      display: flex;
      justify-content: space-around;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .card {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 1rem;
      width: 30%;
      max-width: 300px;
      text-align: center;
    }

    .card img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 1rem;
    }

    .card h3 {
      color: #2A7E50;
    }

    /* Mise à jour */
    /* Uniformisation des images */
    .animaux-cards img,
    .animaux-card img {
      height: 200px;
      object-fit: cover;
      width: 100%;
    }

    /*==========================
    /* Section Nos Services */
    /*==========================*/

    #services {
      padding: 2rem;
      background: #F3EDE0;
      text-align: center;
    }

    #services h2 {
      margin-bottom: 1.5rem;
      color: #2A7E50;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
    }

    .service-card {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s;
      width: 100%;
      /* Largeur ajustée à la largeur des cards dans la section habitats 30% */
    }

    .service-card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    .service-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }

    .service-card h3 {
      margin: 1rem 0;
      color: #2A7E50;
    }

    .service-card p {
      padding: 0 1rem 1rem;
      color: #555;
      font-size: 0.9rem;
    }

    /*==========================*/
    /*  Section Actualités */
    /*=========================*/

    .news-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    .news-card img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 1rem;
    }

    /*-- Section Actualités */
    /*#news {
      padding: 2rem;
      background: #fff;
      text-align: center;
    }

    #news h2 {
      margin-bottom: 1.5rem;
      color: #2A7E50;
    }

    .news-cards {
      display: flex;
      justify-content: center;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .news-card {
      background: #F3EDE0;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 300px;
      padding: 1rem;
      transition: transform 0.3s, box-shadow 0.3s;
    }*/

    /*-- Section Actualités */
    #news {
      padding: 2rem;
      background: #fff;
      text-align: center;
    }

    #news h2 {
      margin-bottom: 1.5rem;
      color: #2A7E50;
    }

    .news-cards {
      display: flex;
      justify-content: center;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .news-card {
      background: #F3EDE0;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 300px;
      padding: 1rem;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .news-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    .news-card img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 1rem;
    }

    .news-card,
    .eco-content img {
      opacity: 0;
      animation: fadeInUp 1s forwards;
      animation-delay: 0.3s;
    }

    .news-card:nth-child(2) {
      animation-delay: 0.5s;
    }

    /*==========================*/
    /* Footer */
    /*==========================*/
    footer {
      text-align: center;
      padding: 1rem;
      background: #2A7E50;
      color: #fff;
    }

    footer a {
      color: #F3EDE0;
      text-decoration: none;
    }

    /*===============================*/
    /* Section Engagement écologique */
    /*===============================*/
    #eco {
      padding: 2rem;
      background: #2A7E50;
      color: #fff;
      text-align: center;
    }

    #eco h2 {
      margin-bottom: 1.5rem;
    }

    .eco-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
    }

    .eco-content img {
      width: 100%;
      max-width: 500px;
      border-radius: 10px;
    }

    .eco-content img {
      animation-delay: 0.7s;
    }

    /*==========================*/
    /* Responsive Design */
    /*==========================*/
    /* Animations au défilement */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Menu toggle */
    @media (max-width: 768px) {
      .nav-links li {
        margin: 0.5rem 0;
      }
    }

    /* Empilement des sections */
    @media (max-width: 768px) {

      #habitats .habitat-cards,
      #services .services-grid {
        flex-direction: column;
        align-items: center;
      }

      .card {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar">
      <img src="./public/assets/images/Logo-Arcadia-(9).jpg" alt="Logo Zoo Arcadia" class="logo">
      <!-- Bouton Hamburger -->
      <span class="menu-toggle" id="menuToggle">☰</span>

      <ul class="nav-links" id="navLinks">
        <li><a href="#hero">Accueil</a></li>
        <li><a href="#habitats">Habitats</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#about">À propos</a></li>
        <li><a href="./public/contact/contact.html">Contact</a></li><!-- #contact -->

        <!-- Lien pour l'accès administrateur -->
        <!--<div class="Navbar__Link">
            <a class="nav-link nav-admin-link" href="./public/login.php" title="Admin">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512" width="16" height="16" aria-hidden="true"
                fill="currentColor" class="bi bi-unlock-fill">
                <path d="M423 638H-9c-13.807 0-25-11.193-25-25 0-53.438 17.131-104.058 49.542-146.388 22.2-28.994 50.961-52.656 83.376-69.006C75.53 371.377 62 337.07 62 301c0-79.953 65.047-145 145-145s145 65.047 145 145c0 36.07-13.53 70.377-36.918 96.606 32.416 16.349 61.177 40.012 83.376 69.005C430.869 508.942 448 559.562 448 613c0 13.807-11.193 25-25 25zM17.657 588h378.687c-9.908-74.383-63.38-137.724-136.792-158.682a25 25 0 0 1-5.533-45.75C283.615 366.669 302 335.03 302 301c0-52.383-42.617-95-95-95s-95 42.617-95 95c0 34.03 18.386 65.668 47.981 82.568a25.003 25.003 0 0 1 12.423 24.712 25.003 25.003 0 0 1-17.956 21.038C81.037 450.276 27.564 513.617 17.657 588z"></path>
              </svg>
            </a>
          </div>-->

        <li><a href="./public/login.php">Connexion</a></li>
        <li><a href="#reservation" class="cta-btn">Réserver</a></li>
      </ul>
    </nav>
  </header>

  <!-- Section Héros -->
  <section id="hero">
    <div class="hero-content">
      <h1>Bienvenue à Arcadia</h1>
      <p>Explorez un lieu où nature et bien-être animal cohabitent en harmonie.</p>
      <div class="hero-buttons">
        <!--<a href="#habitats" class="btn">Découvrir les habitats</a>-->
        <a href="#services" class="btn">Voir les horaires</a>
      </div>
    </div>
  </section>

  <!-- Section À propos -->
  <section id="about">
    <h2>Arcadia, un zoo engagé pour la planète</h2>

    <img src="./assets/images/Forest wallpaper midday.jpg" alt="Forêt de Brocéliande" class="about-image mb-5"><!-- forest.jpg -->
    <p class="mt-5">Depuis 1960, nous nous engageons à protéger la biodiversité et à offrir un habitat naturel à nos animaux.</p>
  </section>

  <!-- Section Habitats --> <!--
  <section id="habitats">
    <h2>Plongez dans nos mondes naturels</h2>
    <div class="habitat-cards">
      <div class="card">
        <img src="./public/assets/images/image8.jpg" alt="Savane"> --> <!-- savane.jpg --> <!--
        <h3>Savane</h3>
        <p>Découvrez les lions, éléphants et autres espèces emblématiques.</p>
      </div>
      <div class="card">
        <img src="./public/assets/images/photo8.jpg" alt="Jungle"> --> <!-- jungle.jpg --> <!--
        <h3>Jungle</h3>
        <p>Explorez la vie sauvage des singes, toucans et reptiles.</p>
      </div>
      <div class="card">
        <img src="./public/assets/images/images7.jfif" alt="Marais"> --> <!--  marais.jpg --> <!--
        <h3>Marais</h3>
        <p>Observez les crocodiles et autres habitants des zones humides.</p>
      </div>
    </div>  -->

  <!--<a href="./liste-habitats-2.php" class="btn btn-primary">Découvrir les habitats</a>--> <!--
    <button onclick="window.location.href='./liste-habitats-2.php'" class="btn btn-secondary mt-3">Découvrir les habitats</button>
  </section>  -->


  <br>
  <!------------------------------------------------------------------------------------------------ Section Habitat -->
  <?php
  include 'includes/db-connection.php';

  // Récupérer tous les habitats
  $sql = "SELECT id, nom, JSON_UNQUOTE(JSON_EXTRACT(images, '$[0]')) AS image FROM habitats";
  $stmt = $pdo->query($sql);
  ?>

  <section id="habitats">
    <h2>Plongez dans nos mondes naturels</h2>
    <div class="habitat-cards">
      <?php while ($habitat = $stmt->fetch()): ?>
        <div class="card">
          <img src="assets/images/<?= htmlspecialchars($habitat['image']) ?>" alt="<?= htmlspecialchars($habitat['nom']) ?>">
          <h3><?= htmlspecialchars($habitat['nom']) ?></h3>
          <!--<p><!?= htmlspecialchars($habitat['description']) ?></p>-->
          <!--<a href="details-habitat.php?id=<!?= $habitat['id'] ?>" class="btn btn-secondary">Voir détails</a>--><!-- btn-details -->

          <!--<h3><!?= htmlspecialchars($habitat['nom']) ?></h3>
              <p><!?= htmlspecialchars($habitat['description']) ?></p>-->
        </div>
      <?php endwhile; ?>
    </div>

    <button onclick="window.location.href='./liste-habitats-2.php'" class="btn btn-secondary mt-3">Voir les Habitats</button><!-- Découvrir les habitats -->

  </section>

  <?php
  // Inclure et récupérer l'objet PDO
  // $pdo = include '../config/config.php';
  //include '../includes/db-connection.php';

  try {
    // Récupérer tous les services
    $sql = "SELECT * FROM services";
    $stmt = $pdo->query($sql);
    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    die("Erreur lors de la récupération des services : " . $e->getMessage());
  }
  ?>

  <!------------------------------------------------------------------------------------------------- Section Services -->

  <section  id="services"><!-- id="habitats" -->
    <h2>Nos Services</h2>
    <!--<div class="services-grid">-->
    <div class="habitat-cards">
      <?php foreach ($services as $service): ?>
        <div class="card">

          <!--<img src="/assets/images/<!?= htmlspecialchars($service['image']) ?>" alt="<!?= htmlspecialchars($service['nom']) ?>">-->
          <!--<img src="../assets/images/<!?= htmlspecialchars($service['image'] ?: 'default.jpg') ?>" alt="<!?= htmlspecialchars($service['nom']) ?>">-->
          <!--<img src="../assets/images/<!?= htmlspecialchars($service['images']) ?>" alt="<!?= htmlspecialchars($service['nom']) ?>">-->

          <img src="./assets/images/<?= htmlspecialchars($service['images']) ?>?v=<?= time() ?>"
            alt="<?= htmlspecialchars($service['nom']) ?>" onerror="this.src='../assets/images/default.jpg';">

          <h3><?= htmlspecialchars($service['nom']) ?></h3>
          <p><?= htmlspecialchars($service['description']) ?></p>
          <!--<a href="details-habitat.php?id=<!?= $habitat['id'] ?>" class="btn-details">Voir détails</a>-->

        </div>

      <?php endforeach; ?>

    </div>
    <button onclick="window.location.href='./services_system_test/index.php'" class="btn btn-secondary mt-3">Voir les Services <!-- Découvrir les services  Vous êtes prèt ?  --></button>
  </section>
  <!--------------------------------------------------------------------------------------------------------------------->
  <br>





  <!--<section id="avis">
    <h3>Ce que nos visiteurs disent</h3>
    <div class="avis-scroll-container">
      <div class="avis-container"> -->
        <!-- Les avis validés seront insérés ici dynamiquement --> <!--
      </div>
    </div> -->
    <!-- Boutons pour naviguer vers d'autres sections --> <!--
    <button onclick="window.location.href='../tous-les-avis.php'" class="btn btn-primary mt-3">Voir tous les
      avis</button>
    <button onclick="window.location.href='../soumettre-avis.html'" class="btn btn-secondary mt-3">Laisser un
      avis</button>
  </section>-->
  <!--<script src="script.js"></script>-->





  <!-- et pour afficher les avis --> 
  <section id="avis">
    <h3>Ce que nos visiteurs disent</h3>
    <div class="avis-scroll-container">
      <div class="avis-container">
        <!-- Les avis validés seront insérés ici dynamiquement --> 
      </div>
    </div>
    <button onclick="window.location.href='./tous-les-avis.php'" class="btn btn-primary mt-3">Voir tous les avis</button>  <!-- avis.html -->
    <button onclick="window.location.href='soumettre-avis.html'" class="btn btn-secondary mt-3">Laisser un avis</button>
  </section>








  <!-- Section Nos Services --> <!--
  <section id="services">
    <h2>Nos Services</h2>
    <div class="services-grid">

      <div class="service-card">
        <img src="./assets/images/The guide to visiting Ljubljana Zoo.jpg"
          alt="Visite guidée"> --> <!-- visite-guidee.jpg  --><!-- Bientot dispon.png --> <!--
        <h3>Visites Guidées</h3>
        <p>Découvrez les secrets du zoo avec nos guides passionnés.</p>
      </div>

      <div class="service-card ">
        <img src="./assets/images/image-(9)_Bte.jfif" alt="Spectacle animalier"> --> <!-- spectacle-animalier.jpg  -->
  <!--<h3>Spectacles Animaliers</h3>
        <p>Assistez à des démonstrations fascinantes de nos animaux.</p>
      </div>

      <div class="service-card ">
        <img src="./assets/images/image9_Rest.jpg" alt="Restauration"> --> <!-- restaurant.jpg  --> <!--
        <h3>Espaces de Restauration</h3>
        <p>Profitez de nos restaurants et snacks pour une pause gourmande.</p>
      </div>

    </div>  -->
  <!--<a href="./services_system_test/index.php" class="btn btn-primary">Découvrir les services</a>--><!-- voir-habitat.php?id=1 --><!--  --> <!--
    <button onclick="window.location.href='./services_system_test/index.php'" class="btn btn-secondary mt-3">Vous êtes prèt ? --> <!--Découvrir les services--> <!-- </button>
  </section> -->

  <!------------------------------------------------------------------------------------------------------------------->

 <!-- style pour les bouton laisser un avis "en cours de dévelop" -->
 <style>
    .btn {
      display: inline-block;
      padding: 10px 20px;
      text-align: center;
      color: #fff;
      background-color: #007bff;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    .btn-primary {
      background-color: #28a745;
    }

    .btn-primary:hover {
      background-color: #218838;
    }
  </style>






































  <!-- Section Actualités -->
  <section id="news">
    <h2>Actualités et Événements</h2>
    <div class="news-cards">
      <div class="news-card">
        <img src="./public/asset/images/image4.jfif" alt="Nouveau pensionnaire"><!-- event1.jpg -->
        <h3>Bienvenue à Kumba !</h3>
        <p>Notre nouvelle girafe est arrivée ! Venez la découvrir dans la savane.</p>
      </div>
      <div class="news-card">
        <img src="event2.jpg" alt="Événement">
        <h3>La Nuit au Zoo</h3>
        <p>Participez à une visite guidée nocturne exceptionnelle. Réservation obligatoire.</p>
      </div>
    </div>
  </section>

  <!-- Section Engagement écologique -->
  <section id="eco">
    <h2>Nos engagements pour la planète</h2>
    <div class="eco-content">
      <p>Arcadia est fier d'être 100% indépendant énergétiquement grâce à l'énergie solaire et éolienne.</p>
      <p>Nous mettons un point d'honneur à réduire notre empreinte carbone et à sensibiliser nos visiteurs.</p>
      <img src="./public/assets/images/image10.jpg" alt="Panneaux solaires"><!-- solar-panels.jpg  -->
    </div>
  </section>

  <!-- Pied de page -->
  <footer class="eco-content">
    <p>© 2024 Zoo Arcadia - Tous droits réservés. | <a href="#">Mentions légales</a></p>
  </footer>



















  <!------------------------------------------------------------------------------------------------------------------>
  <!-- fichier avis-api.php --> 
  <!--?php
  require './db_config.php';

  try {
    $stmt = $pdo->prepare("SELECT message, auteur FROM avis WHERE statut = 'valide' ORDER BY date_creation DESC");
    $stmt->execute();
    $avis = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Envoyer les avis au format JSON
    header('Content-Type: application/json');
    echo json_encode($avis);
  } catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(["error" => "Erreur lors de la récupération des avis."]);
  }
  ?>
  -->
  <!-- fichier avis_system_test/db_config.php -->
  <!--?php
  $host = "localhost";
  $dbname = "zoo_arcadia";
  $user = "root";
  $password = "G1i9e6t3"; // Mettez le mot de passe si nécessaire

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
  }
  ?> -->



  <!----------------------------------------------------------------------------------------------------------------->



  <!-- et pour afficher les avis --> <!--
  <section id="avis">
    <h3>Ce que nos visiteurs disent</h3>
    <div class="avis-scroll-container">
      <div class="avis-container"> -->
        <!-- Les avis validés seront insérés ici dynamiquement -->  <!--
      </div>
    </div>

    <button onclick="window.location.href='./tous-les-avis.php'" class="btn btn-primary mt-3">Voir tous les avis</button> --> <!-- avis.html --> <!--
    <button onclick="window.location.href='soumettre-avis.html'" class="btn btn-secondary mt-3">Laisser un avis</button>
  -->
    <!--<section id="avis">
      <h3>Vos Avis Nous Comptent</h3>
      <p>Partagez votre expérience avec nous !</p>
      <a href="./avis_system_test/soumetre-avis.php" class="btn btn-primary">Laisser un Avis</a>
    </section>-->


    <!--<a href="./avis_system_test/soumetre-avis.html" class="btn btn-primary">
      <i class="fa fa-pencil"></i> Laisser un Avis
    </a>-->

    <!--<button onclick="window.location.href='./avis_system_test/soumetre-avis.html'" class="btn btn-secondary mt-3">Laisser un avis</button>-->
    <!--
  </section>-->

  <!--
la table avis_2 qui a été créer
CREATE TABLE avis_2 (
    id INT PRIMARY KEY AUTO_INCREMENT,
    message TEXT NOT NULL,
    auteur VARCHAR(100) NOT NULL,
    statut ENUM('en_attente', 'valide', 'rejete') DEFAULT 'en_attente',
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);


l'etat actuel de la table avis_2 dans phpmyadmin

Textes complets
id
message
auteur
statut Croissant 1
date_creation

Éditer Éditer
Copier Copier
Supprimer Supprimer
1
2024-12-26 18:52:12

Éditer Éditer
Copier Copier
Supprimer Supprimer
3
2024-12-26 18:54:06

l'etat actuel de la table avis dans phpmyadmin

Textes complets
id
message
auteur
statut Décroissant 1
date_creation

Éditer Éditer
Copier Copier
Supprimer Supprimer
1
Une expérience incroyable !
Jean Dupont-C
valide
2024-12-14 18:24:57

Éditer Éditer
Copier Copier
Supprimer Supprimer
2
Le zoo est bien entretenu.
Marie Curie
valide
2024-12-14 18:24:57

Éditer Éditer
Copier Copier
Supprimer Supprimer
3
Un endroit parfait pour la famille.
Albert Einstein
valide
2024-12-14 18:24:57

Éditer Éditer
Copier Copier
Supprimer Supprimer
15
en_attente
2024-12-26 18:36:52

Éditer Éditer
Copier Copier
Supprimer Supprimer
4
Un accueil chaleureux.
Isaac Newton
2024-12-14 18:24:57
-->









<!--<a href="./get_reviews.php">-->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // URL de l'API
        const apiUrl = './get_reviewws.php'; // avis-api.php

        // Conteneur pour les avis
        const avisContainer = document.getElementById('avis-container');

        // Appel à l'API
        fetch(apiUrl)// apiUrl
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur réseau lors de la récupération des avis.');
                }
                return response.json();
            })
            .then(data => {
                // Vérifier si des avis sont disponibles
                if (data.length === 0) {
                    avisContainer.innerHTML = '<p>Aucun avis disponible pour le moment.</p>';
                    return;
                }

                // Construire les avis
                const avisHtml = data.map(avis => `
                    <div class="avis">
                        <p>"${avis.message}"</p>
                        <p>- ${avis.auteur}</p>
                    </div>
                `).join('');

                // Insérer les avis dans la page
                avisContainer.innerHTML = avisHtml;
            })
            .catch(error => {
                console.error('Erreur lors de la récupération des avis :', error);
                avisContainer.innerHTML = '<p>Impossible de charger les avis pour le moment.</p>';
            });
    });
</script>

<!--<div id="avis-container"> -->
    <!-- Les avis seront insérés ici --><!--
</div>-->

<!----------------------------------------------------------------------------------------------------------------------->

<!--<section id="avis">
  <h3>Ce que nos visiteurs disent - A</h3>
  <div class="avis-scroll-container">
    <div class="avis-container"> -->
      <!-- Les avis validés seront insérés dynamiquement ici --> <!--
    </div>
  </div>
</section>-->

<style>
  #avis {
    padding: 20px;
    background-color: #f9f9f9;
    text-align: center;
  }

  .avis-scroll-container {
    display: flex;
    overflow: hidden;
    white-space: nowrap;
    margin-top: 20px;
  }

  .avis-container {
    display: flex;
    gap: 20px;
    transition: transform 0.3s ease;
  }

  .avis {
    min-width: 300px;
    padding: 20px;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .avis p {
    font-size: 16px;
    line-height: 1.5;
  }

  .avis cite {
    display: block;
    margin-top: 10px;
    font-style: italic;
    color: #555;
  }
</style>




<style>
    #avis-container {
        margin: 20px auto;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        max-width: 600px;
        background: #f9f9f9;
    }

    .avis {
        margin-bottom: 15px;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .avis:last-child {
        border-bottom: none;
    }

    blockquote {
        font-style: italic;
        color: #555;
    }

    footer {
        text-align: right;
        font-weight: bold;
    }
</style>




<script>
  document.addEventListener("DOMContentLoaded", function () {
    const avisContainer = document.querySelector(".avis-container");
    const avisScrollContainer = document.querySelector(".avis-scroll-container");

    function chargerAvis() {
      fetch("./get_reviews.php")//./avis_system_test // ./avis-api.php
        .then((response) => {
          if (!response.ok) {
            throw new Error("Erreur lors du chargement des avis.");
          }
          return response.json();
        })
        .then((avisData) => {
          // Ajouter dynamiquement les avis
          avisData.forEach((avis) => {
            const avisElement = document.createElement("div");
            avisElement.className = "avis";
            avisElement.innerHTML = `
              <p>“${avis.message}”</p>
              <cite>- ${avis.auteur}</cite>
            `;
            avisContainer.appendChild(avisElement);
          });

          // Dupliquer les avis pour un défilement infini
          const avisElements = Array.from(avisContainer.children);
          avisElements.forEach((avis) => {
            const clone = avis.cloneNode(true);
            avisContainer.appendChild(clone);
          });

          // Lancer le défilement automatique
          defilementAutomatique();
        })
        .catch((error) => {
          console.error(error.message);
          avisContainer.innerHTML = `
            <p>Erreur lors du chargement des avis. Veuillez réessayer plus tard.</p>
          `;
        });
    }

    function defilementAutomatique() {
      let scrollAmount = 0;
      const scrollSpeed = 1;

      function scroll() {
        scrollAmount += scrollSpeed;
        if (scrollAmount >= avisContainer.scrollWidth / 2) {
          scrollAmount = 0; // Réinitialiser pour créer une boucle
        }
        avisScrollContainer.scrollLeft = scrollAmount;
        requestAnimationFrame(scroll);
      }

      scroll();
    }

    chargerAvis();
  });
</script>




  <!--  MENU HAMBURGER -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const menuToggle = document.getElementById('menuToggle');
      const navLinks = document.getElementById('navLinks');

      menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('show');
      });
    });
  </script>
  <!---->

  <!--?php
require_once './config/config.php'; // Inclure les informations de configuration

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Limiter le nombre d'avis retournés à 20
    $stmt = $pdo->prepare("SELECT message, auteur FROM avis_2 WHERE statut = 'approuve' ORDER BY date_creation DESC LIMIT 20");
    $stmt->execute();

    // Récupérer les données
    $avis = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Définir les en-têtes
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET");

    // Retourner les données en JSON
    echo json_encode($avis);
} catch (PDOException $e) {
    // En cas d'erreur, renvoyer un code d'erreur HTTP et un message JSON
    http_response_code(500);
    error_log($e->getMessage(), 3, '../logs/db_errors.log'); // Consigner l'erreur dans un fichier de log
    echo json_encode(["error" => "Erreur lors de la récupération des avis."]);
}
?>-->

<!--?php
// Vérification et inclusion du fichier de configuration
if (!file_exists('../config/config.php')) {
    http_response_code(500);
    echo json_encode(["error" => "Erreur : Fichier de configuration introuvable !"]);
    exit;
}
require_once '../config/config.php';

// Vérification des variables de connexion
if (!isset($host, $dbname, $user, $password)) {
    http_response_code(500);
    echo json_encode(["error" => "Erreur : Informations de connexion non définies."]);
    exit;
}

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête pour récupérer les avis
    $stmt = $pdo->prepare("SELECT message, auteur FROM avis_2 WHERE statut = 'approuve' ORDER BY date_creation DESC LIMIT 20");
    $stmt->execute();
    $avis = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // En-têtes et réponse JSON
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    echo json_encode($avis);
} catch (PDOException $e) {
    // Gestion des erreurs
    http_response_code(500);
    error_log($e->getMessage(), 3, '../logs/db_errors.log'); // Modifier le chemin si nécessaire
    echo json_encode(["error" => "Erreur lors de la récupération des avis."]);
}
?>


  <script src="script.js"></script>
  <script src="../js/script.js"></script>
  -->











  

<!------------------------>
<!--fichier avis-api.php-->
<!------------------------>
<!--?php
require 'db_config.php';

try {
    $stmt = $pdo->prepare("SELECT message, auteur FROM avis WHERE statut = 'valide' ORDER BY date_creation DESC");
    $stmt->execute();
    $avis = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Envoyer les avis au format JSON
    header('Content-Type: application/json');
    echo json_encode($avis);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(["error" => "Erreur lors de la récupération des avis."]);
}
?> -->

<!--fichier avis_system_test/db_config.php-->
<!--?php
$host = "localhost";
$dbname = "zoo_arcadia";
$user = "root";
$password = "G1i9e6t3"; // Mettez le mot de passe si nécessaire

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>-->

<!-------------------------------------------------------------------------->
<!--fichier javascript present dans le fichier index-ideal - copie-(2).php-->
<!-------------------------------------------------------------------------->
  <!-- carousel avis visiteurs -->
  <!--<script>
    document.addEventListener("DOMContentLoaded", function() {
      const avisContainer = document.querySelector(".avis-container");


      // Fonction pour charger les avis depuis l'API
      function chargerAvis() {
        //fetch("./avis-api.php")

        //fetch("./avis_system_controls/avis-api.php")
        fetch("./get-reviews.php")// ./Api-carousel/avis-api.php

          .then((response) => {
            if (!response.ok) {
              throw new Error("Erreur lors du chargement des avis.");
            }
            return response.json(); // Convertit les données JSON
          })

          /*----*/

         .then((avisData) => {
            // Ajouter dynamiquement les avis
            avisData.forEach((avis) => {
              const avisElement = document.createElement("div");
              avisElement.className = "avis";
              avisElement.innerHTML = `
            <p>“${avis.message}”</p>
            <cite>- ${avis.auteur}</cite>
          `;
              avisContainer.appendChild(avisElement);
            });

            // Dupliquer les avis pour permettre un défilement infini
            const avisElements = document.querySelectorAll(".avis");
            avisElements.forEach((avis) => {
              const clone = avis.cloneNode(true);
              avisContainer.appendChild(clone);
            });

            // Lancer le défilement automatique après le chargement des avis
            scrollAvis();
          })
          .catch((error) => {
            console.error(error.message);
            avisContainer.innerHTML =
              "<p>Erreur lors du chargement des avis. Veuillez réessayer plus tard.</p>";
          });
      } 

      /*----*/
     
      // Fonction de défilement automatique
      let scrollAmount = 0;
      const scrollSpeed = 1; // Vitesse du défilement en pixels
      const avisScrollContainer = document.querySelector(".avis-scroll-container");


      function scrollAvis() {
        scrollAmount += scrollSpeed;
        if (scrollAmount >= avisContainer.scrollWidth / 2) {
          scrollAmount = 0; // Réinitialise à la moitié pour créer une boucle
        }
        avisScrollContainer.scrollLeft = scrollAmount;
        requestAnimationFrame(scrollAvis);
      }

      // Charger les avis au démarrage
      chargerAvis();
    });
  </script>

  <script>
    // boîte de dialogue affiche le message:
    document.getElementById("bouton").addEventListener("click", function() {
      alert("Vous avez cliqué sur le bouton !");
    });
  </script> -->

<!----------------------------->
<!--et pour afficher les avis-->
<!----------------------------->
    <!--<section id="avis">
      <h3>Ce que nos visiteurs disent</h3>
      <div class="avis-scroll-container">
        <div class="avis-container">-->
          <!-- Les avis validés seront insérés ici dynamiquement --> <!--
        </div>
      </div>-->

      <!--<button onclick="window.location.href='./tous-les-avis.php'" class="btn btn-primary mt-3">Voir tous les avis</button>--><!-- avis.html -->
      <!--<button onclick="window.location.href='soumettre-avis.html'" class="btn btn-secondary mt-3">Laisser un avis</button>
   
      <section id="avis">
        <h3>Vos Avis Nous Comptent</h3>
        <p>Partagez votre expérience avec nous !</p>
        <a href="./avis_system_test/soumetre-avis.php" class="btn btn-primary">Laisser un Avis</a>
      </section>


      <a href="./avis_system_test/soumetre-avis.html" class="btn btn-primary">
        <i class="fa fa-pencil"></i> Laisser un Avis
      </a>

     </section>-->

 

































       <!------------------------------------------------------------------------------------------------------------------->
  <!-- style pour les bouton laisser un avis "en cours de dévelop" -->
  <style>
    .btn {
      display: inline-block;
      padding: 10px 20px;
      text-align: center;
      color: #fff;
      background-color: #007bff;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    .btn-primary {
      background-color: #28a745;
    }

    .btn-primary:hover {
      background-color: #218838;
    }
  </style>

  <!--</section> <a href="./avis_system_controls/avis-api.php">-->

  <!-- <script --><!--
  <section id="avis">
    <h3>Ce que nos visiteurs disent</h3>
    <div class="avis-scroll-container">
      <div class="avis-container"> -->
        <!-- Les avis validés seront insérés ici dynamiquement --> <!--
      </div>
    </div>  -->
    <!--<button id="scroll-left" class="btn btn-secondary">◀</button>--><!-- ajouter  -->
    <!--<button id="scroll-right" class="btn btn-secondary">▶</button>--><!-- ajouter  --> <!--
  </section> -->

  <!--<section id="avis">
    <h3>Vos Avis Nous Comptent</h3>
    <p>Partagez votre expérience avec nous !</p>  -->
    <!--<a href="./avis_system_test/soumetre-avis.php" class="btn btn-primary">Laisser un Avis</a>-->
    <!--
    <button onclick="window.location.href='./tous-les-avis.php'" class="btn btn-primary mt-3">Voir tous les avis</button>
    <button onclick="window.location.href='soumettre-avis.html'" class="btn btn-secondary mt-3">Laisser un avis</button>
  -->
    <!--<a href="./avis_system_test/soumetre-avis.html" class="btn btn-primary">
      <i class="fa fa-pencil"></i> Laisser un Avis</a> --> <!--  --><!-- btn btn-secondary mt-3 -->  <!--
  </section> -->

  <!--<a href="./avis_system_test/soumetre-avis.html" class="btn btn-primary">
    <i class="fa fa-pencil"></i> Laisser un Avis
  </a>-->

  
  <!--<script>
    document.addEventListener("DOMContentLoaded", function() {
      const avisContainer = document.querySelector(".avis-container");

      // Fonction pour charger les avis depuis l'API
      function chargerAvis() {
        fetch("./avis_system_test/avis-api.php") //./avis-api.php//
          .then((response) => {
            if (!response.ok) {
              throw new Error("Erreur lors du chargement des avis.");
            }
            return response.json(); // Convertit les données JSON
          })
          .then((avisData) => {
            // Ajouter dynamiquement les avis
            console.log(avisData); // Ajoutez ceci pour voir les données reçues
            avisData.forEach((avis) => {
              const avisElement = document.createElement("div");
              avisElement.className = "avis";
              avisElement.innerHTML = `
            <p>“${avis.message}”</p>
            <cite>- ${avis.auteur}</cite>
          `;
              avisContainer.appendChild(avisElement);
            });

            // Dupliquer les avis pour permettre un défilement infini
            const avisElements = document.querySelectorAll(".avis");
            avisElements.forEach((avis) => {
              const clone = avis.cloneNode(true);
              avisContainer.appendChild(clone);
            });

            // Lancer le défilement automatique après le chargement des avis
            scrollAvis();
          })
          .catch((error) => {
            console.error(error.message);
            avisContainer.innerHTML =
              "<p>Erreur lors du chargement des avis. Veuillez réessayer plus tard.</p>";
          });
      }

      // Fonction de défilement automatique
      let scrollAmount = 0;
      const scrollSpeed = 1; // Vitesse du défilement en pixels
      const avisScrollContainer = document.querySelector(".avis-scroll-container");

      function scrollAvis() {
        scrollAmount += scrollSpeed;
        if (scrollAmount >= avisContainer.scrollWidth / 2) {
          scrollAmount = 0; // Réinitialise à la moitié pour créer une boucle
        }
        avisScrollContainer.scrollLeft = scrollAmount;
        requestAnimationFrame(scrollAvis);
      }

      // Charger les avis au démarrage
      chargerAvis();
    });
  </script> -->
  <!------------------------------------------------------------------------------------------------------------------>

  
  <!--<script>
    // JavaScript pour les animations au défilement
    document.addEventListener("DOMContentLoaded", () => {
      const elements = document.querySelectorAll(".news-card, .eco-content img");

      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = "1";
            entry.target.style.animationPlayState = "running";
          }
        });
      });

      elements.forEach((el) => {
        observer.observe(el);
      });
    });
  </script>-->

  <!--<script>
    // Animation pour la section services
    document.addEventListener("DOMContentLoaded", () => {
      const serviceCards = document.querySelectorAll(".service-card");

      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = "1";
            entry.target.style.animationPlayState = "running";
          }
        });
      });

      serviceCards.forEach((card) => {
        observer.observe(card);
      });
    });
  </script>  -->
  <!-------------------------------------------------------------------------------------------------------------------->
  <!-- PERMET DEFAIRE DEFILE LE CAROUSEL AVIS --->
  <!-- pour centrée le carousel -->
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
    }

    #avis {
      max-width: 800px;
      margin: 50px auto;
      text-align: center;
    }

    .avis-scroll-container {
      overflow: hidden;
      /* Masquer la scroll-bar */
      white-space: nowrap;
      width: 100%;
      position: relative;
    }

    .avis-container {
      display: inline-flex;
      gap: 20px;
    }

    .avis {
      flex: 0 0 300px;
      /* Largeur fixe de 300px */
      max-width: 300px;
      padding: 15px;
      border: 1px solid #ddd;
      /*#ddd*/
      border-radius: 8px;
      background: #f9f9f9;
      text-align: center;
      /*left*/
      box-sizing: border-box;
    }

    .avis p {
      font-style: italic;
    }

    .avis cite {
      display: block;
      margin-top: 10px;
      font-size: 0.9em;
      color: #555;
    }
  </style>


















<!--<style>

</style>-->

</body>

</html>
