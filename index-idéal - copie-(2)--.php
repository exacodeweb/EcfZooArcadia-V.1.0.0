

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoo Arcadia</title>
  <link rel="stylesheet" href="xstyles.css">
  <link rel="stylesheet" href="x./styles/style-avis.css">
  <link rel="stylesheet" href="./styles/style-avis-caroussel.css">
  <link rel="stylesheet" href="./avis_system_controls/style.css">
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

    /*------------------------------------------------------*/
    .nav-links a:hover {
      color: #F2A007;
      /* Couleur au survol */
      /*#007BFF*/
    }

    /*------------------------------------------------------*/

    /* Bouton CTA */
    /*
    .nav-links .cta-btn {
      background-color: #ff6b6b;
      padding: 10px 15px;
      border-radius: 5px;
      color: white;
    }*/

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
      /*
      .menu-toggle {
        display: block;
      }*/

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
      /*
      .nav-links {
        flex-direction: column;
        background-color: rgba(0, 0, 0, 0.8);
        position: absolute;
        top: 70px;
        /* Ajustez selon la hauteur du header */
      /*
        right: 0;
        width: 100%;
        transform: translateY(-100%);
        opacity: 0;
        visibility: hidden;
      }*/

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
      background: url('./assets/images/image-resize-(7).jpg') no-repeat center center/cover;/**//*image-intro-0.jpg*/
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
      transition: background 0.3s ease;
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


    /*----------------------------------------------*/
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

    /*.card:hover {/*-- ajouter --*/
    /*
      transform: scale(1.05);
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s;
    }*/

    /*--------------------------------------------*/
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



    /*--------------------------------------------*/







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

    /*.service-card img {
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
    }*/



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
    /*-------------------------------------------- Animations au défilement */
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

    /*------------------------------------------------ Menu toggle */
    @media (max-width: 768px) {

      /*
      .menu-toggle {
        display: block;
      }*/
      /*
      .nav-links {
        position: absolute;
        background-color: #2A7E50;
        width: 100%;
        top: 70px;
        left: 0;
      }
      */
      .nav-links li {
        margin: 0.5rem 0;
      }
    }


    /*------------------------------------------- Empilement des sections */
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


    /*----------------------------------------------------------------------------------------------------------------*/
  </style>





























  <style>
    /*--*/
    /* Structure de base */
    /*
  header {
    width: 100%;
    background: #fff;
    /* Fond blanc ou personnalisé */
    /*
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    /* Ombre légère */
    /*
    position: fixed;
    /* Fixé en haut */
    /*
    top: 0;
    z-index: 1000;
    /* Au-dessus des autres éléments */
    /*
  }
  
  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    /*max-width: 1200px; /* Largeur maximale */
    /*
  
    background: #2A7E50;
    color: white;
  
    margin: 0 auto;
    padding: 10px 20px;
    /* Espacement intérieur */
    /*
  }
  
  .logo {
    width: 100px;/*clamp(100px, 15%, 150px);*/
    /* Taille adaptable du logo */
    /*
    height: 100px;/*auto*/
    /*
  }
  
  .nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
    /* Espacement entre les éléments */
    /*
    align-items: center;
  }
  
  .nav-links li {
    font-size: 16px;
  }
  
  .nav-links a {
    text-decoration: none;
    color: #fff;
    /*#333*/
    /*
    transition: color 0.3s ease;
  }
  
  .nav-links a:hover {
    color: #F2A007;
    /* Couleur au survol */
    /*#007BFF*/
    /*
  }*/

    /* Bouton de réservation */
    /*
  .cta-btn {
    background-color: #F3EDE0;
    /*#007BFF*/
    /**/
    /*
    color: #2A7E50;
    /*#fff*/
    /**/
    /*
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }
  
  .cta-btn:hover {
    background-color: #805D3A;
    /*#0056b3*/
    /*#fff*/
    /*
    color: #fff;
  }*/

    /* Navigation responsive pour petits écrans */
    /*
  @media (max-width: 768px) {
    .navbar {
      flex-direction: column;
      align-items: flex-start;
    }
  
    .nav-links {
      flex-direction: column;
      gap: 10px;
      display: none;
      /* Masqué par défaut */
    /*
      width: 100%;
      /* S'étend sur toute la largeur */
    /*
      padding: 10px 0;
      background: rgba(0, 0, 0, 0.8);
      /* Fond semi-transparent */
    /*
      border-radius: 5px;
    }
  
    .nav-links li {
      text-align: left;
    }
  
    .nav-links.show {
      display: flex;
      /* Affiche le menu */
    /*
    }
  
    .cta-btn {
      align-self: center;
      margin-top: 10px;
    }
  
    /* Menu hamburger */
    /*
    .menu-toggle {
      display: block;
      font-size: 24px;
      color: #fff;
      /*#333*/
    /*
      cursor: pointer;
    }*/
    /*
  }
  
  /*-- mise à jours --*/
    /* Masquer le menu toggle en mode desktop */
    /*
  @media (min-width: 769px) {
    .menu-toggle {
      display: none;
    }*/
    /*
  
    .nav-links {
      display: flex !important;
      /* Affiche toujours le menu en desktop */
    /*
      flex-direction: row;
      gap: 20px;
    }
  }*/

    /* Section Héros */
    /*
  #hero {
    background: url('./assets/images/image-intro.jpg') no-repeat center center/cover;
    /*zoo.jpg*/
    /*image5.jfif*/
    /*
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: #fff;
    padding: 0 1rem;
  }*/
    /*
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
    transition: background 0.3s ease;
  }
  
  .hero-buttons .btn:hover {
    background: #805D3A;
    color: #fff;
  }*/
    /*
  .hero-content {
    background: rgba(0, 0, 0, 0.5);
    /* Fond semi-transparent */
    /*  
    padding: clamp(10px, 5vw, 20px);
    /* Min 10px, Max 20px, flexible */
    /*
    border-radius: 10px;
    /* Coins arrondis */
    /*   
    max-width: 90%;
    /* Empêche un débordement horizontal */
    /*
    margin: 0 auto;
    /* Centre sur l'écran */
    /*        
    color: #fff;
    /* Texte lisible sur fond sombre */
    /*    
  }                                            
  
  /* Section À propos */
    /*
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
  }  */

    /*------------------------------------------------ Section Habitats */
    /*
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
  }*/

    /* Mise à jour */
    /* Uniformisation des images */
    /*
  .habitat-cards img,
  .service-card img {
    height: 200px;
    object-fit: cover;
    width: 100%;
  }  */

    /*--------------------------------------------------------------- Footer */
    /*
  footer {
    text-align: center;
    padding: 1rem;
    background: #2A7E50;
    color: #fff;
  }
  
  footer a {
    color: #F3EDE0;
    text-decoration: none;
  }*/

    /*-------------------------------------------------- Section Nos Services */
    /*
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
  }
  
  .service-card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
  }*/

    /*--------------------------------------------*/
    /*.card:hover {/*-- ajouter --*/
    /*
    transform: scale(1.05);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
  }*/
    /*
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
  }       */

    /*--------------------------------------------*/
    /*
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
  }  */

    /*------------------------------------------------- Section Actualités */
    /*
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
  }   */

    /*----------------------------------------- Section Engagement écologique */
    /*
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
  }                           */

    /* Animations au défilement */
    /*
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
  
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }*/
    /*
  .news-card,
  .eco-content img {
    opacity: 0;
    animation: fadeInUp 1s forwards;
    animation-delay: 0.3s;
  }
  
  .news-card:nth-child(2) {
    animation-delay: 0.5s;
  }
  
  .eco-content img {
    animation-delay: 0.7s;
  }*/

    /*--*/
    /* Uniformisation des images */
    /*
  .habitat-cards img,
  .service-card img {
    height: 200px;
    object-fit: cover;
    width: 100%;
  }*/

    /* Menu toggle */
    /*
  @media (max-width: 768px) {/*
    /*
    .menu-toggle {
      display: block;
    }*/
    /*
    .nav-links {
      position: absolute;
      background-color: #2A7E50;
      width: 100%;
      top: 70px;
      left: 0;
    }
  
    .nav-links li {
      margin: 0.5rem 0;
    }
  }                  */

    /* Empilement des sections */
    /*
  @media (max-width: 768px) {
  
    #habitats .habitat-cards,
    #services .services-grid {
      flex-direction: column;
      align-items: center;
    }
  }*/
    /*
  @media (max-width: 768px) {
    /*
    .menu-toggle {
      display: block;
    }*/
    /*       
  
    .nav-links {
      position: absolute;
      background-color: #2A7E50;
      width: 100%;
      top: 70px;
      left: 0;
    }
  
    .nav-links li {
      margin: 0.5rem 0;
    }
  }             */

    /* Empilement des sections */
    /*              
  @media (max-width: 768px) {
  
    #habitats .habitat-cards,
    #services .services-grid {
      flex-direction: column;
      align-items: center;
    }
  
    .card {
      width: 100%;
    }
  }                   */

    /*-----------------------------------------------------*/
    /* Section #habitats et #services : largeur adaptative */
    /*
  #habitats,
  #services {
    width: 100%;
    max-width: 100%;
    margin: 0 auto;
    padding: 0 1rem;
    /* Ajouter un léger padding pour l'espacement */
    /*
  }
  
  .habitat-cards,
  .services-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1rem;
    /* Espacement entre les cartes */
    /*
  }*/

    /* Cartes adaptatives */
    /*
  .habitat-card,
  .service-card {
    flex: 1 1 calc(100% - 2rem);
    /* Empilement en mode mobile */
    /*
    max-width: 100%;
    /* Pas de dépassement */
    /*
    box-sizing: border-box;
    padding: 1rem;
    margin: 0;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #fff;
    text-align: center;
  }*/

    /* Images adaptatives */
    /*
  .habitat-card img,
  .service-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 4px;
  }*/
    /*
  .services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    /* Ajuste les colonnes dynamiquement */
    /*
    gap: 1.5rem;
    /* Espacement entre les cartes */
    /*
    width: 100%;
    /* Prend toute la largeur disponible */
    /*
    max-width: 1200px;
    /* Largeur maximale pour un meilleur rendu */
    /*
    margin: 0 auto;
    /* Centre le contenu horizontalement */
    /*
  }*/
    /*
  
  #services {
    padding: 2rem;
    background: #F3EDE0;
    text-align: center;
    width: 100%;
    max-width: 100%;
  }*/

    /* Ajustements pour les petits écrans */
    /*
  @media (max-width: 768px) {
  
    .habitat-card,
    .service-card {
      flex: 1 1 100%;
      /* Chaque carte prend toute la largeur */
    /*
    }*/
    /*
  
    #habitats,
    #services {
      padding: 0 0.5rem;
      /* Réduction des marges pour petits écrans */
    /*
    }
  }*/

    /* Gestion spécifique pour les très petits écrans (307px) */
    /*
  @media (max-width: 400px) {
  
    .habitat-card,
    .service-card {
      padding: 0.5rem;
    }
  
    .habitat-card img,
    .service-card img {
      height: 150px;
      /* Réduction de la hauteur pour s'adapter */
    /*
    }
  }*/

    /* Par défaut : Police flexible utilisant clamp */
    /*
  
  h1 {
    font-size: clamp(24px, 5vw, 48px) !important;
    /* Min 24px, Max 48px */
    /*
    text-align: center !important;
    margin: 1rem 0;
    line-height: 1.2;
    /*color: #ffff;*/
    /*
  }*/

    /* Pour les plus petits écrans */
    /*
  @media (max-width: 400px) {
    h1 {
      font-size: 20px !important;
      /* Réduction spécifique si besoin */
    /*
    }
  }/*
  
  /* Ajustement pour les très petits écrans */
    /*
  @media (max-width: 400px) {
    .hero-content {
      padding: 10px;
      /* Réduction des marges */
    /*
      border-radius: 5px;
      /* Coins moins arrondis */
    /*
      font-size: 14px;
      /* Réduction de la taille du texte si nécessaire */
    /*
    }
  }          */
  </style>

  <style>
    /* Styles globaux */
    /*
  .nav-links {
    display: flex;
    gap: 20px;
    list-style: none;
    transition: transform 0.3s ease;
  }*/

    /* Alignement du logo et du bouton hamburger */
    /*
  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #2A7E50;*/
    /*#333*/
    /*
    color: white;*/
    /*whhite*/
    /*
  }*/

    /* Logo */
    /*
  .logo {
    height: 75px;
    /*50px*/
    /* Ajustez la taille selon votre logo */
    /*
    border-radius: 4px;
  }*/

    /* Bouton hamburger */
    /*
  .menu-toggle {
    font-size: 28px;
    cursor: pointer;
    display: none;
    /* Masquer par défaut sur les grands écrans */
    /*
  }*/

    /* Lien de navigation */
    /*
  .nav-links a {
    text-decoration: none;
    color: white;
    padding: 10px;
    text-align: center;
  
  
    transition: color 0.3s ease;
    /* Transition douce pour l'effet de survol */
    /*
  }*/

    /*------------------------------------------------------*/
    /*
  .nav-links a:hover {
    color: #F2A007;
    /* Couleur au survol */
    /*#007BFF*/
    /*
  }*/

    /*------------------------------------------------------*/

    /* Bouton CTA */
    /*
  .nav-links .cta-btn {
    background-color: #ff6b6b;
    padding: 10px 15px;
    border-radius: 5px;
    color: white;
  }*/

    /* Bouton de réservation */
    /*
  .cta-btn {
    background-color: #F3EDE0;
    /*#007BFF*/
    /*
    /**/
    /*
    color: #2A7E50;*/
    /*#fff*/
    /**/
    /*
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }*/
    /*
  .cta-btn:hover {
    background-color: #805D3A;
    /*#0056b3*/
    /*#fff*/
    /*
    color: #fff;
  }*/

    /*--------------------------------------------------------------*/
    /* Header et Menu Navigation*/
    /*---------------------------------
  header {
    background-color: #2b2b2b;
    /**/
    /*#4CAF50*/
    /*
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
  }*/

    /* Logo dans l'en-tête */
    /*
  .img-logo-1 img {
    max-width: 100px;
    width: 100%;
  }*/

    /*----------------------------------------------------*/
    /*
  .nav-admin-link {
  color: white;
  transition: color 0.3s ease; /* Transition douce pour l'effet de survol */
    /*
  }
  
  /* Cible le SVG à l'intérieur du lien */
    /*
  .nav-admin-link svg {
  /*fill: currentColor; /* Applique la couleur actuelle du lien au SVG */
    /*
  color: white;
  }
  
  .nav-admin-link svg :hover {
  color: #f2a007;/*orange*/
    /*
  }*/
    /*--------------------------------------------------------------*/

    /* Navigation responsive */
    /*-------------------------------------------------------------------------------------*/
    /*
  @media (max-width: 768px) {
    .nav-links {
      flex-direction: column;
      background-color: rgba(0, 0, 0, 0.8);
      position: absolute;
      top: 70px;/*70px*/
    /* Ajustez selon la hauteur du header */
    /*
      right: 0;
      width: 100%;
      transform: translateY(-100%);
      opacity: 0;
      visibility: hidden;
    }  ---------------------------------------------------------------------------------------------------------------*/
    /*
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
  }                  */

    /* Responsive */
    /*
  @media (max-width: 768px) {
    .menu-toggle {
      display: block;
    }
  
    .nav-links {
      flex-direction: column;
      align-items: center;
      padding: 20px 0;
    }
  }*/
  </style>


  <!--<style>
  /* Section Nos Services */
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
  </style>-->

</head>

<body>

  <!-- En-tête -->
  <!--<header>
    <nav class="navbar">
      <img src="./public/assets/images/Logo-Arcadia-(2).jpg" alt="Logo Zoo Arcadia" class="logo">-->

  <!-- Bouton Hamburger --><!--
      <span class="menu-toggle">☰</span>

      <ul class="nav-links">
        <li><a href="#hero">Accueil</a></li>
        <li><a href="#habitats">Animaux</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="./public/contact/contact.html">Contact</a></li>
        <li><a href="./public/login.php">Connexion</a></li>


        <div class="Navbar__Link">
          <a class="nav-link nav-admin-link" href="./public/login.php" title="Admin">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512" width="16" height="16" aria-hidden="true"
              fill="currentColor" class="bi bi-unlock-fill">
              <path d="..."></path>
            </svg>
          </a>
        </div>
      </ul>

      <a href="#reservation" class="cta-btn">Réservez votre visite</a>
    </nav>
  </header>-->

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

        <!-- Lien pour l'accès administrateur --><!--
          <div class="Navbar__Link">
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

  <!-- Section Habitats -->
  <section id="habitats">
    <h2>Plongez dans nos mondes naturels</h2>
    <div class="habitat-cards">
      <div class="card">
        <img src="./public/assets/images/image8.jpg" alt="Savane"><!-- savane.jpg -->
        <h3>Savane</h3>
        <p>Découvrez les lions, éléphants et autres espèces emblématiques.</p>
      </div>
      <div class="card">
        <img src="./public/assets/images/image9.jpg" alt="Jungle"><!-- jungle.jpg -->
        <h3>Jungle</h3>
        <p>Explorez la vie sauvage des singes, toucans et reptiles.</p>
      </div>
      <div class="card">
        <img src="./public/assets/images/images7.jfif" alt="Marais"><!--  marais.jpg -->
        <h3>Marais</h3>
        <p>Observez les crocodiles et autres habitants des zones humides.</p>
      </div>
    </div>
    <a href="./public/habitats.php" class="btn btn-primary">Découvrir les habitats</a><!-- voir-habitat.php?id=1 -->
    <a href="./public/global-habitats/details-habitat.php">Découvrir les habitats</a>
    <a href="./liste-habitats-2.php">Découvrir les habitats</a>
  </section>

  <!------------------------------------------------------------------------------------------------ Section animaux -->
  <!--<section id="habitats">
    <h2>Rencontrez la Faune Fascinante</h2>--><!-- Plongez dans nos mondes naturels --><!--
    <div class="habitat-cards">
      <div class="card">
        <img src="./public/assets/images/image8.jpg" alt="Savane">--><!-- savane.jpg --><!--
        <h3>Savane</h3>
        <p>Immergez-vous dans les vastes plaines de la savane et approchez les majestueux lions,
          les impressionnants éléphants et d'autres espèces emblématiques de ce milieu unique.</p>--><!-- Découvrez les lions, éléphants et autres espèces emblématiques. -->
      <!--</div>
      <div class="card">
        <img src="./public/assets/images/image9.jpg" alt="Jungle">--><!-- jungle.jpg --><!--
        <h3>Jungle</h3>
        <p>Partez à l'aventure dans les jungles luxuriantes et découvrez la vie dynamique des singes agiles,
          des toucans colorés et des reptiles fascinants.</p>--><!-- Explorez la vie sauvage des singes, toucans et reptiles. -->
      <!--</div>
      <div class="card">
        <img src="./public/assets/images/images7.jfif" alt="Marais">--><!--  marais.jpg -->
        <!--<h3>Marais</h3>
        <p>Explorez les mystères des marais, où crocodiles imposants et autres habitants des zones humides règnent en maîtres.</p><!-- Observez les crocodiles et autres habitants des zones humides. -->
      <!--</div>
    </div>
    <a href="./public/animaux.php" class="btn btn-primary">Découvrir les Animaux</a>--><!-- voir-habitat.php?id=1 -->
  <!--</section>-->


  <!--<section id="animaux">
    <h2>Découvrez nos animaux</h2>
    <div class="animal-card">
      <img src="images/lion.jpg" alt="Lion">
      <h3>Lion</h3>
      <p>Le roi des animaux, présent dans notre Savane africaine.</p>
    </div>  -->
  <!-- Répéter pour chaque animal --> <!--
  </section>  -->

  <!--?php
    $query = $db->query("SELECT * FROM animaux INNER JOIN habitats ON animaux.habitat_id = habitats.id");
    $animaux = $query->fetchAll();

    foreach ($animaux as $animal) {
        echo '<div class="animal-card">';
        echo '<img src="' . $animal['image'] . '" alt="' . $animal['nom'] . '">';
        echo '<h3>' . $animal['nom'] . ' (' . $animal['espece'] . ')</h3>';
        echo '<p>' . $animal['description'] . '</p>';
        echo '<p><strong>Habitat :</strong> ' . $animal['habitat'] . '</p>';
        echo '</div>';
    }
  ?>  -->
  <!------------------------------------------------------------------------------------------------------------------->



  <!-- Section Nos Services -->
  <section id="services">
    <h2>Nos Services</h2>
    <div class="services-grid">

      <div class="service-card">
        <img src="./assets/images/The guide to visiting Ljubljana Zoo.jpg"
          alt="Visite guidée"><!-- visite-guidee.jpg  --><!-- Bientot dispon.png -->
        <h3>Visites Guidées</h3>
        <p>Découvrez les secrets du zoo avec nos guides passionnés.</p>
      </div>

      <div class="service-card ">
        <img src="./assets/images/image-(9)_Bte.jfif" alt="Spectacle animalier"><!-- spectacle-animalier.jpg  -->
        <h3>Spectacles Animaliers</h3>
        <p>Assistez à des démonstrations fascinantes de nos animaux.</p>
      </div>

      <!--<div class="service-card">
        <img src="./assets/images/boutique.jpg" alt="Boutiques">
        <h3>Boutiques</h3>
        <p>Découvrez nos boutiques où vous trouverez des souvenirs uniques pour toute la famille.</p>
      </div>-->

      <div class="service-card ">
        <img src="./assets/images/image9_Rest.jpg" alt="Restauration"><!-- restaurant.jpg  -->
        <h3>Espaces de Restauration</h3>
        <p>Profitez de nos restaurants et snacks pour une pause gourmande.</p>
      </div>

    </div>
    <a href="./public/services.php" class="btn btn-primary">Découvrir les services</a><!-- voir-habitat.php?id=1 -->
  </section>








  <!--<section id="habitats">
    <h2>Rencontrez la Faune Fascinante</h2>--><!-- Plongez dans nos mondes naturels --><!---
    <div class="habitat-cards">
      <div class="service-card">
        <img src="./public/assets/images/image8.jpg" alt="Savane">--><!-- savane.jpg --><!--
        <h3>Savane</h3>
        <p>Immergez-vous dans les vastes plaines de la savane et approchez les majestueux lions,
          les impressionnants éléphants et d'autres espèces emblématiques de ce milieu unique.</p>--><!-- Découvrez les lions, éléphants et autres espèces emblématiques. -->
      <!--</div>
      <div class="service-card">
        <img src="./public/assets/images/image9.jpg" alt="Jungle">--><!-- jungle.jpg --><!--
        <h3>Jungle</h3>
        <p>Partez à l'aventure dans les jungles luxuriantes et découvrez la vie dynamique des singes agiles,
          des toucans colorés et des reptiles fascinants.</p>--><!-- Explorez la vie sauvage des singes, toucans et reptiles. -->
      <!--</div>
      <div class="service-card">
        <img src="./public/assets/images/images7.jfif" alt="Marais">--><!--  marais.jpg --><!--
        <h3>Marais</h3>
        <p>Explorez les mystères des marais, où crocodiles imposants et autres habitants des zones humides règnent en maîtres.</p>  --><!-- Observez les crocodiles et autres habitants des zones humides. -->
      <!--</div>
    </div>
    <a href="./public/animaux.php" class="btn btn-primary">Découvrir les Animaux</a>--><!-- voir-habitat.php?id=1 --><!--
  </section>-->

  <!------------------------------------------------------- section avis ---------------------------------------------->







  <!--<!DOCTYPE html>
  <html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Système d'Avis</title>
    <link rel="stylesheet" href="./avis_system_controls/style.css">
  </head>-->

  <!--<body>-->

    <section id="avis">
      <h3>Ce que nos visiteurs disent</h3>
      <div class="avis-scroll-container"><!-- ajouter  -->
        <div class="avis-container">
          <!-- Les avis validés seront insérés ici dynamiquement -->
        </div>
      </div>
      <!--<button id="scroll-left" class="btn btn-secondary">◀</button>--><!-- ajouter  -->
      <!--<button id="scroll-right" class="btn btn-secondary">▶</button>--><!-- ajouter  -->
      <button onclick="window.location.href='./tous-les-avis.php'" class="btn btn-primary mt-3">Voir tous les avis</button><!-- avis.html -->
      <button onclick="window.location.href='soumettre-avis.html'" class="btn btn-secondary mt-3">Laisser un avis</button>
   
      <section id="avis">
        <h3>Vos Avis Nous Comptent</h3>
        <p>Partagez votre expérience avec nous !</p>
        <a href="./avis_system_test/soumetre-avis.php" class="btn btn-primary">Laisser un Avis</a>
      </section>

      <a href="./avis_system_test/soumetre-avis.html" class="btn btn-primary">
        <i class="fa fa-pencil"></i> Laisser un Avis
      </a>
   
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

    </section> <!--<a href="./avis_system_controls/avis-api.php">-->

    <!----------------------------------------------------------------------------------------------------------<script>
      document.addEventListener("DOMContentLoaded", function() {
        const avisContainer = document.querySelector(".avis-container");

        // Fonction pour charger les avis depuis l'API
        function chargerAvis() {
          //fetch("./avis-api.php")
          fetch("./avis_system_controls/avis-api.php")
            .then((response) => {
              if (!response.ok) {
                throw new Error("Erreur lors du chargement des avis.");
              }
              return response.json(); // Convertit les données JSON
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
    </script>---------------------------------------------------------------------------------------------------------->

  <!--</body>-->

  <!--</html>-->




















  <!--  -->
  <section id="avis" class="text-center my-4">
      <h2>Avis des Visiteurs</h2>
      <div class="avis-container-wrapper">
        <div class="avis-container">
          <!-- Les avis approuvés seront insérés dynamiquement ici -->
        </div>
      </div>
      <button onclick="window.location.href='avis.html'" class="btn btn-primary mt-3">Voir tous les avis</button>
      <button onclick="window.location.href='soumettre-avis.html'" class="btn btn-secondary mt-3">Laisser un avis</button>
    </section>

    <!-- Script JavaScript pour Charger les Avis Dynamiquement -->
    <script>// Le script récupère les avis approuvés depuis une API (gérée par PHP) et les insère dans le conteneur.
      // Charger les avis approuvés depuis l'API
      fetch("avis-api.php")
        .then((response) => response.json())
        .then((data) => {
          const avisContainer = document.querySelector(".avis-container");
          data.forEach((avis) => {
            const avisElement = document.createElement("div");
            avisElement.className = "avis";
            avisElement.innerHTML = `<p>“${avis.message}”</p><cite>- ${avis.nom}</cite>`;
            avisContainer.appendChild(avisElement);
          });
        })
        .catch((error) => console.error("Erreur de chargement des avis :", error));
    </script>

    <!-- La Table des Avis dans la Base de Données --><!--
    CREATE TABLE Avis (
      id INT PRIMARY KEY AUTO_INCREMENT,
      nom VARCHAR(100) NOT NULL,
      message TEXT NOT NULL,
      dateSoumission DATETIME DEFAULT CURRENT_TIMESTAMP,
      statut ENUM('en_attente', 'approuve') DEFAULT 'en_attente'
    );-->

    <!-- avis-api.php -->
    <?php
    $conn = new mysqli("localhost", "root", "G1i9e6t3", "garage_vincent_parrot");

    if ($conn->connect_error) {
      die("Erreur de connexion : " . $conn->connect_error);
    }

    $result = $conn->query("SELECT nom, message FROM Avis WHERE statut = 'approuve'");
    $avis = $result->fetch_all(MYSQLI_ASSOC);

    header("Content-Type: application/json");
    echo json_encode($avis);

    $conn->close();
    ?>

  <!-- soumettre-avis.html -->
    <section id="form-avis" class="text-center my-4">
      <h2>Laisser un Avis</h2>
      <form action="soumettre-avis.php" method="POST" class="avis-form">
        <div>
          <label for="nom">Votre Nom :</label>
          <input type="text" id="nom" name="nom" required>
        </div>
        <div>
          <label for="message">Votre Avis :</label>
          <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
      </form>
    </section>


  <!-- soumettre-avis.php -->
  <?php
    $conn = new mysqli("localhost", "root", "G1i9e6t3", "garage_vincent_parrot");

    if ($conn->connect_error) {
      die("Erreur de connexion : " . $conn->connect_error);
    }

    $nom = htmlspecialchars($_POST['nom']);
    $message = htmlspecialchars($_POST['message']);

    $sql = "INSERT INTO Avis (nom, message, statut) VALUES (?, ?, 'en_attente')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nom, $message);

    if ($stmt->execute()) {
      echo "Merci pour votre avis ! Il sera modéré avant d'être publié.";
    } else {
      echo "Erreur : " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
    ?>

  <!-- moderation-avis.php -->
  <?php
    $conn = new mysqli("localhost", "root", "G1i9e6t3", "garage_vincent_parrot");

    $result = $conn->query("SELECT * FROM Avis WHERE statut = 'en_attente'");

    echo "<h2>Avis en attente</h2>";
    while ($row = $result->fetch_assoc()) {
      echo "<div>
              <p><strong>{$row['nom']}</strong> : {$row['message']}</p>
              <form method='POST' action='traiter-avis.php'>
                <input type='hidden' name='id' value='{$row['id']}'>
                <button name='action' value='approuver' class='btn btn-success'>Approuver</button>
                <button name='action' value='rejeter' class='btn btn-danger'>Rejeter</button>
              </form>
            </div>";
    }
    $conn->close();
    ?>

  <!-- traiter-avis.php -->
  <?php
    $conn = new mysqli("localhost", "root", "G1i9e6t3", "garage_vincent_parrot");

    $id = $_POST['id'];
    $action = $_POST['action'];

    if ($action === 'approuver') {
      $conn->query("UPDATE Avis SET statut = 'approuve' WHERE id = $id");
    } elseif ($action === 'rejeter') {
      $conn->query("DELETE FROM Avis WHERE id = $id");
    }

    header("Location: moderation-avis.php");
    exit;
  ?>













<section id="avis" class="text-center my-4">
  <h2>Avis des Visiteurs</h2>
  <div class="avis-container-wrapper">
    <div class="avis-container">
      <!-- Les avis seront insérés dynamiquement ici -->
    </div>
  </div>
  <button onclick="window.location.href='avis.html'" class="btn btn-primary mt-3">Voir tous les avis</button>
</section>

<style>
  /* Styles pour le conteneur du carrousel */
.avis-container-wrapper {
  overflow-x: auto; /* Active le défilement horizontal */
  white-space: nowrap; /* Empêche les éléments de revenir à la ligne */
  scroll-behavior: smooth; /* Défilement fluide */
  padding: 10px 0;
  border: 1px solid #ddd;
  border-radius: 8px;
  margin: 20px auto;
  max-width: 90%;
  background-color: #f9f9f9;
}

/* Style des avis dans le carrousel */
.avis-container {
  display: inline-flex; /* Affiche les enfants côte à côte */
  gap: 20px; /* Espace entre les avis */
}

.avis {
  min-width: 300px; /* Largeur minimale pour chaque avis */
  max-width: 300px; /* Largeur maximale pour uniformité */
  background: #ffffff;
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 15px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  text-align: left;
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

/* Barre de défilement personnalisée */
.avis-container-wrapper::-webkit-scrollbar {
  height: 8px;
}

.avis-container-wrapper::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 4px;
}

.avis-container-wrapper::-webkit-scrollbar-thumb:hover {
  background: #555;
}
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
  const avisData = [
    {
      message: "Une expérience incroyable ! Les habitats sont magnifiques.",
      auteur: "Jean Dupont",
    },
    {
      message: "Le zoo est bien entretenu et les animaux sont bien traités.",
      auteur: "Marie Curie",
    },
    {
      message: "Un endroit parfait pour passer une journée en famille.",
      auteur: "Albert Einstein",
    },
    {
      message: "Un accueil chaleureux et des activités captivantes.",
      auteur: "Isaac Newton",
    },
    {
      message: "Les animaux semblent heureux, un très bon moment !",
      auteur: "Galileo Galilei",
    },
  ];

  const avisContainer = document.querySelector(".avis-container");

  avisData.forEach((avis) => {
    const avisElement = document.createElement("div");
    avisElement.className = "avis";

    avisElement.innerHTML = `
      <p>“${avis.message}”</p>
      <cite>- ${avis.auteur}</cite>
    `;

    avisContainer.appendChild(avisElement);
  });
});
</script>

<script>
  document.getElementById("prev").addEventListener("click", () => {
  const container = document.querySelector(".avis-container-wrapper");
  container.scrollBy({ left: -300, behavior: "smooth" });
});

document.getElementById("next").addEventListener("click", () => {
  const container = document.querySelector(".avis-container-wrapper");
  container.scrollBy({ left: 300, behavior: "smooth" });
});
</script>





  <!------------------------------------------------------------------------------------------------------------------->
  <!------------------------------------------------------------------------------------------------------------------->
  <!-- carousel avis visiteurs -->
  <script>
      document.addEventListener("DOMContentLoaded", function() {
        const avisContainer = document.querySelector(".avis-container");

      // Fonction pour charger les avis depuis l'API
      function chargerAvis() {
        //fetch("./avis-api.php")
        fetch("./avis_system_controls/avis-api.php")
          .then((response) => {
            if (!response.ok) {
              throw new Error("Erreur lors du chargement des avis.");
            }
            return response.json(); // Convertit les données JSON
          })

          /*---------------------------------------------------------------------------------------------------------*/
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
      /*----------------------------------------------------------------------------------------------------------*/
     
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
  </script>
  <!------------------------------------------------------------------------------------------------------------------->
  <!------------------------------------------------------------------------------------------------------------------->

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
  <footer>
    <p>© 2024 Zoo Arcadia - Tous droits réservés. | <a href="#">Mentions légales</a></p>
  </footer>

  <script>
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
  </script>

  <script>
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
  </script>

  <script>
    // const toggle = document.querySelector('.menu-toggle');
    //const navLinks = document.querySelector('.nav-links');

    //toggle.addEventListener('click', () => {
    //navLinks.classList.toggle('show');
    //});

    /*-- mise à jours --*/
    /*
        const toggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');*/

    // Gestion du clic sur le menu toggle
    // toggle.addEventListener('click', () => {
    // if (window.innerWidth <= 768) { // Applique uniquement en mode responsive
    // navLinks.classList.toggle('show');
    //}
    //});

    // Réinitialise l'état du menu lors du redimensionnement de la fenêtre
    //window.addEventListener('resize', () => {
    //if (window.innerWidth > 768) {
    //navLinks.classList.remove('show'); // Assure que le menu reste visible en desktop
    //}
    //});
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const menuToggle = document.getElementById('menuToggle');
      const navLinks = document.getElementById('navLinks');

      menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('show');
      });
    });
  </script>

  <!-- carousel avis visiteurs -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const avisContainer = document.querySelector(".avis-container");


      // Fonction pour charger les avis depuis l'API
      function chargerAvis() {
        fetch("./avis-api.php")
        fetch("./avis_system_controls/avis-api.php")
          .then((response) => {
            if (!response.ok) {
              throw new Error("Erreur lors du chargement des avis.");
            }
            return response.json(); // Convertit les données JSON
          })

          /*---------------------------------------------------------------------------------------------------------*/
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
      /*----------------------------------------------------------------------------------------------------------*/
     
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
  </script>









  <!--<script>
        .then((avisData) => {
      if (avisData.length === 0) {
          avisContainer.innerHTML = "<p>Aucun avis disponible pour le moment.</p>";
          return;
      }
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
  </script>-->

  <script>
  fetch("./avis_system_controls/avis-api.php")
    .then((response) => response.json())
    .then((avisData) => {
      avisData.forEach((avis) => {
        const avisElement = document.createElement("div");
        avisElement.className = "avis";
        avisElement.innerHTML = `
          <p>“${avis.message}”</p>
          <cite>- ${avis.auteur}</cite>
        `;
        avisContainer.appendChild(avisElement);
      });
    });
  </script>

  <script src="script.js"></script>
  <script src="../js/script.js"></script>

</body>

</html>



















































Donc, j'ai pris l'aperçu globladu système, voici ce j'ai mis en place, (fichier index.html
  <section id="avis" class="text-center my-4">
    <h2>Avis des Visiteurs-Test</h2>
    <div class="avis-container-wrapper">
      <div class="avis-container">
        <!-- Les avis approuvés seront insérés dynamiquement ici -->

      </div>
    </div>
    <button onclick="window.location.href='avis.html'" class="btn btn-primary mt-3">Voir tous les avis</button>
    <button onclick="window.location.href='soumettre-avis.html'" class="btn btn-secondary mt-3">Laisser un avis</button>
  </section>


fichier moderate-avis.php
<?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "garage_vincent_parrot");

$result = $conn->query("SELECT * FROM Avis WHERE statut = 'en_attente'");

echo "<h2>Avis en attente</h2>";
while ($row = $result->fetch_assoc()) {
  echo "<div>
          <p><strong>{$row['nom']}</strong> : {$row['message']}</p>
          <form method='POST' action='traiter-avis.php'>
            <input type='hidden' name='id' value='{$row['id']}'>
            <button name='action' value='approuver' class='btn btn-success'>Approuver</button>
            <button name='action' value='rejeter' class='btn btn-danger'>Rejeter</button>
          </form>
        </div>";
}
$conn->close();
?>

fichier avis-api.php
<?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "garage_vincent_parrot");

if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

$result = $conn->query("SELECT nom, message FROM Avis WHERE statut = 'approuve'");
$avis = $result->fetch_all(MYSQLI_ASSOC);

header("Content-Type: application/json");
echo json_encode($avis);

$conn->close();
?>

fichier script.js
// Charger les avis approuvés depuis l'API
fetch("avis-api.php")
  .then((response) => response.json())
  .then((data) => {
    const avisContainer = document.querySelector(".avis-container");
    data.forEach((avis) => {
      const avisElement = document.createElement("div");
      avisElement.className = "avis";
      avisElement.innerHTML = <p>“${avis.message}”</p><cite>- ${avis.nom}</cite>;
      avisContainer.appendChild(avisElement);
    });
  })
  .catch((error) => console.error("Erreur de chargement des avis :", error));


  const avisContainer = document.querySelector(".avis-container");
  if (avisContainer) {
    const avisElement = document.createElement("div");
    avisElement.className = "avis";
    avisElement.innerHTML = <p>“Exemple d'avis”</p><cite>- Test</cite>;
    avisContainer.appendChild(avisElement);
  } else {
    console.error("Conteneur non trouvé !");
  }

fichier traiter-avis.php
<?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "garage_vincent_parrot");

$id = $_POST['id'];
$action = $_POST['action'];

if ($action === 'approuver') {
  $conn->query("UPDATE Avis SET statut = 'approuve' WHERE id = $id");
} elseif ($action === 'rejeter') {
  $conn->query("DELETE FROM Avis WHERE id = $id");
}

header("Location: moderation-avis.php");
exit;
?>

fichier soumetre-avis.html
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soumettre un Avis</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <section id="form-avis" class="text-center my-4">
    <h2>Laisser un Avis</h2>
    <form action="soumettre-avis.php" method="POST" class="avis-form">
      <div>
        <label for="nom">Votre Nom :</label>
        <input type="text" id="nom" name="nom" required>
      </div>
      <div>
        <label for="message">Votre Avis :</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
    </form>
  </section>
</body>
</html>

fichier soumetre-avis.php
<?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "garage_vincent_parrot");

if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

$nom = htmlspecialchars($_POST['nom']);
$message = htmlspecialchars($_POST['message']);

$sql = "INSERT INTO Avis (nom, message, statut) VALUES (?, ?, 'en_attente')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nom, $message);

if ($stmt->execute()) {
  echo "Merci pour votre avis ! Il sera modéré avant d'être publié.";
} else {
  echo "Erreur : " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

la table créer
CREATE TABLE Avis (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(100) NOT NULL,
  message TEXT NOT NULL,
  dateSoumission DATETIME DEFAULT CURRENT_TIMESTAMP,
  statut ENUM('en_attente', 'approuve') DEFAULT 'en_attente'
);).








































<!--1. Base de Données : Fichier db/init.sql-->
CREATE TABLE Avis (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(100) NOT NULL,
  message TEXT NOT NULL,
  dateSoumission DATETIME DEFAULT CURRENT_TIMESTAMP,
  statut ENUM('en_attente', 'approuve') DEFAULT 'en_attente'
);

<!-- 2. Page d'accueil : html/index.html -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil - Avis</title>
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <section id="avis" class="text-center my-4">
    <h2>Avis des Visiteurs</h2>
    <div class="avis-container-wrapper">
      <div class="avis-container">
        <!-- Les avis approuvés seront insérés dynamiquement ici -->
      </div>
    </div>
    <button onclick="window.location.href='avis.html'" class="btn btn-primary mt-3">Voir tous les avis</button>
    <button onclick="window.location.href='soumettre-avis.html'" class="btn btn-secondary mt-3">Laisser un avis</button>
  </section>
  <script src="../js/script.js"></script>
</body>
</html>

<!-- 3. Formulaire d'avis : html/soumettre-avis.html -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soumettre un Avis</title>
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <section id="form-avis" class="text-center my-4">
    <h2>Laisser un Avis</h2>
    <form action="../php/soumettre-avis.php" method="POST" class="avis-form">
      <div>
        <label for="nom">Votre Nom :</label>
        <input type="text" id="nom" name="nom" required>
      </div>
      <div>
        <label for="message">Votre Avis :</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
    </form>
  </section>
</body>
</html>

<!-- 4. Interface de modération : php/moderate-avis.php -->
<?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "garage_vincent_parrot");

if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM Avis WHERE statut = 'en_attente'");

echo "<h2>Avis en attente</h2>";
while ($row = $result->fetch_assoc()) {
  echo "<div>
          <p><strong>{$row['nom']}</strong> : {$row['message']}</p>
          <form method='POST' action='traiter-avis.php'>
            <input type='hidden' name='id' value='{$row['id']}'>
            <button name='action' value='approuver' class='btn btn-success'>Approuver</button>
            <button name='action' value='rejeter' class='btn btn-danger'>Rejeter</button>
          </form>
        </div>";
}
$conn->close();
?>

<!-- 5. Traitement des actions : php/traiter-avis.php -->
<?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "garage_vincent_parrot");

if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

$id = intval($_POST['id']);
$action = $_POST['action'];

if ($action === 'approuver') {
  $conn->query("UPDATE Avis SET statut = 'approuve' WHERE id = $id");
} elseif ($action === 'rejeter') {
  $conn->query("DELETE FROM Avis WHERE id = $id");
}

$conn->close();
header("Location: moderate-avis.php");
exit;
?>

<!-- 6. API pour les avis approuvés : php/avis-api.php -->
<?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "garage_vincent_parrot");

if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

$result = $conn->query("SELECT nom, message FROM Avis WHERE statut = 'approuve'");
$avis = $result->fetch_all(MYSQLI_ASSOC);

header("Content-Type: application/json");
echo json_encode($avis);

$conn->close();
?>

<!-- 7. Insertion d'avis : php/soumettre-avis.php -->
<?php
$conn = new mysqli("localhost", "root", "G1i9e6t3", "garage_vincent_parrot");

if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

$nom = htmlspecialchars($_POST['nom']);
$message = htmlspecialchars($_POST['message']);

$sql = "INSERT INTO Avis (nom, message, statut) VALUES (?, ?, 'en_attente')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nom, $message);

if ($stmt->execute()) {
  echo "Merci pour votre avis ! Il sera modéré avant d'être publié.";
} else {
  echo "Erreur : " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

<!-- 8. Script JavaScript : js/script.js -->
 <script>
// Charger les avis approuvés depuis l'API
fetch("../php/avis-api.php")
  .then((response) => response.json())
  .then((data) => {
    const avisContainer = document.querySelector(".avis-container");
    data.forEach((avis) => {
      const avisElement = document.createElement("div");
      avisElement.className = "avis";
      avisElement.innerHTML = `<p>“${avis.message}”</p><cite>- ${avis.nom}</cite>`;
      avisContainer.appendChild(avisElement);
    });
  })
  .catch((error) => console.error("Erreur de chargement des avis :", error));
</script>

<!-- 9. Fichier CSS : css/styles.css -->
<style>
body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
}

.text-center {
  text-align: center;
}

.avis-container {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.avis {
  background: #f4f4f4;
  padding: 10px;
  border-radius: 5px;
}

button {
  padding: 10px 15px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button.btn-primary {
  background-color: #007bff;
  color: white;
}

button.btn-secondary {
  background-color: #6c757d;
  color: white;
}
</style>



<!--  -->
j'ai tester une version comme ceci, <!--------------------------------------------------- VERSION-1 ------------------------------------------------------->
<!-- HTML de Base -->
<section id="avis" class="text-center my-4">
  <h2>Avis des Visiteurs</h2>
  <div class="avis-container">
    <!-- Les avis seront insérés dynamiquement ici -->
  </div>
  <button onclick="window.location.href='avis.html'" class="btn btn-primary mt-3">Voir tous les avis</button>
</section>

<!-- JavaScript pour insérer dynamiquement les avis -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  // Exemple de données d'avis (vous pouvez les remplacer par un fetch à une API)
  const avisData = [
    {
      message: "Une expérience incroyable ! Les habitats sont magnifiques.",
      auteur: "Jean Dupont",
    },
    {
      message: "Le zoo est bien entretenu et les animaux sont bien traités.",
      auteur: "Marie Curie",
    },
    {
      message: "Un endroit parfait pour passer une journée en famille.",
      auteur: "Albert Einstein",
    },
  ];

  // Cible la div contenant les avis
  const avisContainer = document.querySelector(".avis-container");

  // Insère les avis dans le DOM
  avisData.forEach((avis) => {
    const avisElement = document.createElement("div");
    avisElement.className = "avis";

    avisElement.innerHTML = 
      <p>“${avis.message}”</p>
      <cite>- ${avis.auteur}</cite>
    ;

    avisContainer.appendChild(avisElement);
  });
});

/*-- Récupération des avis via une API  --*//*
fetch("url_de_votre_api")
  .then((response) => response.json())
  .then((data) => {
    data.forEach((avis) => {
      // Ajout des avis
    });
  })
  .catch((error) => console.error("Erreur de chargement des avis :", error));
/*--------------------------------------*/

</script>

<style>
.avis-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

.avis {
  max-width: 300px;
  padding: 15px;
  border: 1px solid #ddd;
  border-radius: 8px;
  background: #f9f9f9;
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

<!--
Resultat obtnue dans le navigateur
Avis des Visiteurs
“Une expérience incroyable ! Les habitats sont magnifiques.”

- Jean Dupont
“Le zoo est bien entretenu et les animaux sont bien traités.”

- Marie Curie
“Un endroit parfait pour passer une journée en famille.”

- Albert Einstein
“Un accueil chaleureux et des activités captivantes.”

- Isaac Newton
“Les animaux semblent heureux, un très bon moment !”

- Galileo Galilei
Voir tous les avis
-->

<!-- 1. Connecter les avis à une base de données ou une API -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  fetch("php/avis-api.php")
    .then((response) => response.json())
    .then((avisData) => {
      const avisContainer = document.querySelector(".avis-container");
      avisData.forEach((avis) => {
        const avisElement = document.createElement("div");
        avisElement.className = "avis";
        avisElement.innerHTML = `
          <p>“${avis.message}”</p>
          <cite>- ${avis.auteur}</cite>
        `;
        avisContainer.appendChild(avisElement);
      });
    })
    .catch((error) => console.error("Erreur de chargement des avis :", error));
});
</script>

<!-- 2. Pagination des avis -->
 <script>
let page = 1;
const limit = 3;

function chargerAvis() {
  fetch(`php/avis-api.php?page=${page}&limit=${limit}`)
    .then((response) => response.json())
    .then((data) => {
      const avisContainer = document.querySelector(".avis-container");
      data.forEach((avis) => {
        const avisElement = document.createElement("div");
        avisElement.className = "avis";
        avisElement.innerHTML = `
          <p>“${avis.message}”</p>
          <cite>- ${avis.auteur}</cite>
        `;
        avisContainer.appendChild(avisElement);
      });
      if (data.length <script limit) {
        document.querySelector("#btn-charger-plus").style.display = "none";
      }
    });
  page++;
}

document.addEventListener("DOMContentLoaded", () => {
  chargerAvis();
  document
    .querySelector("#btn-charger-plus")
    .addEventListener("click", chargerAvis);
});
</script>

<!-- Ajoutez un bouton dans votre HTML  -->
<button id="btn-charger-plus" class="btn btn-primary mt-3">Charger plus</button>

<!-- 3. Amélioration du style  Exemple d'animations avec CSS : -->
<style>
.avis {
  opacity: 0;
  transform: translateY(20px);
  animation: apparaitre 0.5s ease forwards;
}

@keyframes apparaitre {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>


























<!-- 1. Préparer le dossier dédié -->
<!--  
Créer un dossier sur votre serveur ou votre machine locale, par exemple : avis_system_test.
Organiser les fichiers dans ce dossier :
index.html : Page principale pour afficher les avis.
avis-api.php : API pour récupérer les avis validés depuis la base de données.
styles.css : Feuille de style pour la mise en page (optionnel).
db_config.php : Fichier de configuration pour la connexion à la base de données.
submit-avis.php : Script pour soumettre un nouvel avis (facultatif).
-->


<!-- 2. Créer la base de données et les tables
Utilisez ce script SQL pour créer une table d'avis : -->
<!--
CREATE DATABASE IF NOT EXISTS avis_system;
USE avis_system;

CREATE TABLE avis (
  id INT AUTO_INCREMENT PRIMARY KEY,
  message TEXT NOT NULL,
  auteur VARCHAR(255) NOT NULL,
  statut ENUM('en_attente', 'valide') DEFAULT 'en_attente',
  date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);
Ajoutez quelques avis manuellement pour tester :

sql
Copier le code
INSERT INTO avis (message, auteur, statut) VALUES
('Une expérience incroyable !', 'Jean Dupont-C', 'valide'),
('Le zoo est bien entretenu.', 'Marie Curie', 'valide'),
('Un endroit parfait pour la famille.', 'Albert Einstein', 'valide'),
('Un accueil chaleureux.', 'Isaac Newton', 'en_attente');
-->

<!-- 3. Créer les fichiers
db_config.php
Ce fichier centralise la configuration de la connexion à la base de données : -->
<?php
$host = "localhost";
$dbname = "avis_system";
$user = "root";
$password = ""; // Mettez le mot de passe si nécessaire

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>

<!-- avis-api.php
Ce fichier renvoie les avis validés au format JSON : -->
  <?php
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
?>

<!-- index.html
La page principale pour afficher les avis dynamiques : -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Système d'Avis</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <section id="avis">
    <h3>Ce que nos visiteurs disent</h3>
    <div class="avis-container">
      <!-- Les avis validés seront insérés ici dynamiquement -->
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      fetch("avis-api.php")
        .then(response => response.json())
        .then(data => {
          const avisContainer = document.querySelector(".avis-container");

          if (data.length === 0) {
            avisContainer.innerHTML = "<p>Aucun avis disponible pour le moment.</p>";
            return;
          }

          data.forEach(avis => {
            const avisElement = document.createElement("div");
            avisElement.className = "avis";
            avisElement.innerHTML = `
              <p>“${avis.message}”</p>
              <cite>- ${avis.auteur}</cite>
            `;
            avisContainer.appendChild(avisElement);
          });
        })
        .catch(error => {
          console.error("Erreur :", error);
          document.querySelector(".avis-container").innerHTML =
            "<p>Erreur lors du chargement des avis.</p>";
        });
    });
  </script>
</body>
</html>

  <!-- styles.css
Mettez en forme les avis : -->
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

.avis-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

.avis {
  max-width: 300px;
  padding: 15px;
  border: 1px solid #ddd;
  border-radius: 8px;
  background: #f9f9f9;
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

<!-- 4. Tester le système
Placez le dossier avis_system_test dans un environnement serveur (ex. : XAMPP, WAMP, ou un serveur distant).
Accédez à la page index.html via le navigateur (exemple : http://localhost/avis_system_test/index.html).
Vérifiez que les avis validés apparaissent dynamiquement. -->
















La page Google résultat affiché, Ce que nos visiteurs disent 
Erreur lors du chargement des avis.
ChatGPT a dit :
ChatGPT
L'erreur « Erreur lors du chargement des avis » se produit généralement lorsque le fichier avis-api.php rencontre un problème ou ne renvoie pas les données attendues au format JSON. Voici une procédure pour diagnostiquer et corriger l'erreur.

Étape 1 : Vérifier les journaux d'erreurs PHP
Assurez-vous que les erreurs PHP sont activées dans votre environnement.
Modifiez votre fichier php.ini :
ini
Copier le code
display_errors = On
error_reporting = E_ALL
Redémarrez votre serveur (si nécessaire).
Ouvrez le fichier avis-api.php directement dans votre navigateur :
arduino
Copier le code
http://localhost/avis_system_test/avis-api.php
Si une erreur est affichée, elle vous donnera une indication du problème.
Étape 2 : Vérifier la connexion à la base de données
Ouvrez db_config.php et assurez-vous que les informations suivantes sont correctes :

Nom d'hôte (localhost pour la plupart des environnements locaux).
Nom de la base de données (avis_system).
Nom d'utilisateur (root par défaut en local).
Mot de passe (vide par défaut en local, sauf si configuré autrement).
Testez la connexion manuellement dans avis-api.php :

php
Copier le code
require 'db_config.php';

try {
    $stmt = $pdo->query("SELECT 1");
    echo "Connexion réussie.";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
Si la connexion échoue, vous devrez corriger les informations dans db_config.php.
Étape 3 : Vérifier la requête SQL
Ajoutez un débogage dans avis-api.php pour voir si les données sont récupérées correctement :
php
Copier le code
require 'db_config.php';

try {
    $stmt = $pdo->prepare("SELECT message, auteur FROM avis WHERE statut = 'valide' ORDER BY date_creation DESC");
    $stmt->execute();
    $avis = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichez les données pour vérification
    echo "<pre>";
    print_r($avis);
    echo "</pre>";
} catch (PDOException $e) {
    echo "Erreur SQL : " . $e->getMessage();
}
Si les données s'affichent correctement, passez à l'étape suivante. Sinon, vérifiez :
Si la table avis existe dans la base de données.
Si elle contient des données avec statut = 'valide'.
Étape 4 : Corriger les en-têtes JSON
Si tout fonctionne mais que l'erreur persiste, assurez-vous que avis-api.php renvoie bien les données au format JSON :

Ajoutez un débogage temporaire pour vérifier le JSON généré :

php
Copier le code
header('Content-Type: application/json');
echo json_encode($avis, JSON_PRETTY_PRINT);
Testez ce fichier directement dans le navigateur et assurez-vous que le JSON s'affiche comme ceci :

json
Copier le code
[
    {
        "message": "Une expérience incroyable !",
        "auteur": "Jean Dupont-C"
    },
    {
        "message": "Le zoo est bien entretenu.",
        "auteur": "Marie Curie"
    }
]
Si le JSON ne s'affiche pas correctement :

Vérifiez qu'aucun espace ou texte supplémentaire n'est affiché avant ou après le JSON.
Supprimez tout contenu avant header('Content-Type: application/json');.
Étape 5 : Vérifier le JavaScript
Si l'API fonctionne correctement, testez la requête fetch dans index.html :

Ouvrez la console du navigateur (F12 > Console).
Vérifiez les erreurs liées à fetch("avis-api.php").
Modifiez temporairement le JavaScript pour afficher les données reçues :

javascript
Copier le code
fetch("avis-api.php")
  .then(response => {
    if (!response.ok) {
      throw new Error("Erreur HTTP " + response.status);
    }
    return response.json();
  })
  .then(data => {
    console.log("Données reçues :", data);
  })
  .catch(error => {
    console.error("Erreur lors de la requête :", error);
  });
Si des données s'affichent dans la console, vérifiez leur format et corrigez si nécessaire.

Étape 6 : Vérifier les permissions
Assurez-vous que les fichiers PHP et les dossiers ont les bonnes permissions :

En local, donnez les permissions en lecture/écriture :
bash
Copier le code
chmod -R 755 avis_system_test/
Étape 7 : Vérification finale
Une fois toutes les étapes corrigées :

Rechargez index.html.
Assurez-vous que les avis validés s'affichent correctement.
Si vous avez suivi ces étapes et que l'erreur persiste, partagez les erreurs ou résultats intermédiaires pour une aide supplémentaire !






Vous avez dit :
En changeant l'url dans le navigateur avec "http://localhost/avis_system_test/avis-api.php", il s'affiche, ([{"message":"Une exp\u00e9rience incroyable !","auteur":"Jean Dupont-C"},{"message":"Le zoo est bien entretenu.","auteur":"Marie Curie"},{"message":"Un endroit parfait pour la famille.","auteur":"Albert Einstein"}]).
ChatGPT a dit :
ChatGPT
L'API fonctionne correctement puisqu'elle renvoie un JSON valide dans le navigateur. Voici la démarche pour que ces données soient affichées dynamiquement sur la page :

1. Analyse de la réponse JSON
La réponse de l'API :

json
Copier le code
[
    {
        "message": "Une expérience incroyable !",
        "auteur": "Jean Dupont-C"
    },
    {
        "message": "Le zoo est bien entretenu.",
        "auteur": "Marie Curie"
    },
    {
        "message": "Un endroit parfait pour la famille.",
        "auteur": "Albert Einstein"
    }
]
C'est un tableau d'objets contenant les champs message et auteur.

2. Mise à jour du JavaScript
Assurez-vous que le JavaScript récupère les données de l'API et les insère dynamiquement dans la page HTML.

Voici le code complet pour le faire fonctionner correctement :

javascript
Copier le code
document.addEventListener("DOMContentLoaded", function () {
  // URL de l'API
  const apiUrl = "http://localhost/avis_system_test/avis-api.php";

  // Cible la div contenant les avis
  const avisContainer = document.querySelector(".avis-container");

  // Récupère les avis depuis l'API
  fetch(apiUrl)
    .then((response) => {
      if (!response.ok) {
        throw new Error("Erreur lors du chargement des avis : " + response.status);
      }
      return response.json();
    })
    .then((data) => {
      // Insère les avis dans le DOM
      data.forEach((avis) => {
        const avisElement = document.createElement("div");
        avisElement.className = "avis";

        avisElement.innerHTML = `
          <p>“${avis.message}”</p>
          <cite>- ${avis.auteur}</cite>
        `;

        avisContainer.appendChild(avisElement);
      });
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des avis :", error);

      // Message d'erreur affiché sur la page
      avisContainer.innerHTML = `<p class="text-danger">Erreur lors du chargement des avis.</p>`;
    });
});
3. Structure HTML
Voici l'HTML correspondant :

html
Copier le code
<section id="avis" class="text-center my-4">
  <h2>Ce que nos visiteurs disent</h2>
  <div class="avis-container">
    <!-- Les avis seront ajoutés dynamiquement ici -->
  </div>
  <button onclick="window.location.href='avis.html'" class="btn btn-primary mt-3">Voir tous les avis</button>
</section>
4. Style CSS
Ajoutez ce style pour bien formater les avis :

css
Copier le code
.avis-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

.avis {
  max-width: 300px;
  padding: 15px;
  border: 1px solid #ddd;
  border-radius: 8px;
  background: #f9f9f9;
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
5. Vérification dans le navigateur
Rechargez la page contenant le code.
Si tout fonctionne correctement, les avis devraient s'afficher dynamiquement comme prévu.
Si l'erreur persiste, ouvrez la console du navigateur (F12 > Console) pour voir les éventuelles erreurs liées au JavaScript.
Résultat attendu dans le navigateur
Ce que nos visiteurs disent

"Une expérience incroyable !"
Jean Dupont-C
"Le zoo est bien entretenu."
Marie Curie
"Un endroit parfait pour la famille."
Albert Einstein
Si des avis supplémentaires sont ajoutés et validés dans la base de données, ils apparaîtront automatiquement.






Vous avez dit :
voici ce qui ce passe, ([{"message":"Une expérience incroyable !","auteur":"Jean Dupont-C"},{"message":"Le zoo est bien entretenu.","auteur":"Marie Curie"},{"message":"Un endroit parfait pour la famille.","auteur":"Albert Einstein"}]), si je coche la case à cocher impression élégante, ([ 
  {
    "message": "Une expérience incroyable !",
    "auteur": "Jean Dupont-C"
  },
  {
    "message": "Le zoo est bien entretenu.",
    "auteur": "Marie Curie"
  },
  {
    "message": "Un endroit parfait pour la famille.",
    "auteur": "Albert Einstein"
  }
]).
ChatGPT a dit :
ChatGPT
Cela signifie que vous avez activé une option d’impression élégante dans le navigateur ou un outil, qui formate la sortie JSON pour une meilleure lisibilité. Cette option ajoute des sauts de ligne et une indentation pour rendre le JSON plus facile à lire. Cela ne change pas les données réelles renvoyées par l'API, mais uniquement leur présentation dans la vue du navigateur.

