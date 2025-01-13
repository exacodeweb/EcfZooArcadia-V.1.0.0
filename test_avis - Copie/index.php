<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Avis</title>
  <link rel="stylesheet" href="./assets/style.css">
</head>

<body>


  <!--<style>/*
    .carousel-container {
      position: relative;
      max-width: 800px;
      margin: 20px auto;
      overflow: hidden;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .carousel {
      display: flex;
      gap: 20px;
      animation: carouselScroll 20s linear infinite;
    }

    .carousel-item {
      min-width: 300px;
      flex-shrink: 0;
      background-color: #eaeaea;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .carousel-item p {
      font-style: italic;
      color: #555;
    }

    .carousel-item cite {
      display: block;
      margin-top: 10px;
      text-align: right;
      font-weight: bold;
      color: #333;
    }

    @keyframes carouselScroll {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(calc(-300px * 5));*/
        /* Ajustez selon le nombre d'éléments visibles *//*
      }
    }
  </style>*/-->

  <!-------------------------------------------------->

  <style>
    .carousel-container {
      position: relative;
      overflow: hidden;
      width: 100%;
      height: auto;
    }

    .carousel {
      display: flex;
      flex-wrap: nowrap;
      align-items: center;
      transition: transform 0.2s ease;
    }

    .carousel-item {
      flex: 0 0 auto;
      padding: 20px;
      margin: 10px;
      background: #f9f9f9;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      min-width: 250px;
    }

    .stars {
      color: #FFD700;
      font-size: 20px;
      margin: 10px 0;
    }
  </style>

  <section id="avis">
    <h3>Ce que nos visiteurs disent</h3>
    <div class="carousel-container">
      <div class="carousel">
        <!-- Les avis validés seront insérés dynamiquement ici -->
      </div>
    </div>
  </section>

  <!--<script>
    document.addEventListener('DOMContentLoaded', function() {
      const carousel = document.querySelector('.carousel');

      // Charger les avis depuis l'API
      fetch('avis-api.php')
        .then(response => response.json())
        .then(data => {
          if (data.error) {
            carousel.innerHTML = `<p>${data.error}</p>`;
            return;
          }

          // Générer les cartes pour chaque avis
          data.forEach(avis => {
            const avisItem = document.createElement('div');
            avisItem.className = 'carousel-item';

            avisItem.innerHTML = `
                    <p>“${avis.message}”</p>
                    <div class="stars">${'★'.repeat(avis.rating)}${'☆'.repeat(5 - avis.rating)}</div>
                    <cite>- ${avis.auteur}</cite>
                `;

            carousel.appendChild(avisItem);
          });

          // Démarrer l'animation
          initCarousel();
        })
        .catch(error => {
          carousel.innerHTML = '<p>Erreur lors du chargement des avis.</p>';
          console.error(error);
        });

      // Fonction pour démarrer l'animation du carousel
      function initCarousel() {
        let scrollAmount = 0;
        const speed = 2; // Vitesse de défilement
        const container = document.querySelector('.carousel-container');
        const content = carousel.cloneNode(true);

        // Boucle infinie : Ajouter une copie des items à la fin
        content.style.position = 'absolute';
        content.style.left = `${carousel.offsetWidth}px`;
        container.appendChild(content);

        function animate() {
          scrollAmount -= speed;
          carousel.style.transform = `translateX(${scrollAmount}px)`;
          content.style.transform = `translateX(${scrollAmount}px)`;

          // Réinitialiser la position pour un effet de boucle
          if (scrollAmount <= -carousel.offsetWidth) {
            scrollAmount = 0;
          }

          requestAnimationFrame(animate);
        }

        animate();
      }
    });
  </script>-->


  <script src="./script.js"></script>
</body>

</html>