document.addEventListener('DOMContentLoaded', function() {
  const carousel = document.querySelector('.carousel');

  // Charger les avis depuis l'API
  fetch('./avis-api.php')
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        carousel.innerHTML = `<p>${data.error}</p>`;
        return;
      }





      fetch('avis-api.php')
      .then(response => response.json())
      .then(data => {
          console.log('Données récupérées depuis l\'API :', data); // Vérifiez ici les données retournées
          if (data.error) {
              console.error(data.error);
              return;
          }
          // Le reste du code pour insérer les avis
      })
      .catch(error => {
          console.error('Erreur de récupération des avis :', error);
      });


      


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






/*
document.addEventListener("DOMContentLoaded", function () {
  const carousel = document.querySelector(".carousel");

  function chargerAvis() {
    fetch("./avis-api.php")
      .then((response) => response.json())
      .then((avisData) => {
        if (avisData.length === 0) {
          carousel.innerHTML = "<p>Aucun avis disponible pour l'instant.</p>";
          return;
        }

        avisData.forEach((avis) => {
          const avisElement = document.createElement("div");
          avisElement.className = "carousel-item";
          avisElement.innerHTML = `
                            <p>“${avis.message}”</p>
                            <cite>- ${avis.auteur}</cite>
                        `;
          carousel.appendChild(avisElement);
        });
      })
      .catch((error) => {
        console.error("Erreur de chargement des avis :", error);
        carousel.innerHTML = "<p>Erreur lors du chargement des avis.</p>";
      });
  }
  const apiUrl = 'http://localhost/EcfZooArcadia-V.1.0.0/avis-api.php';
  chargerAvis();
});
*/

















/*
document.addEventListener("DOMContentLoaded", function () {
  const carousel = document.querySelector(".carousel");

  function chargerAvis() {
    fetch("avis-api.php")
      .then((response) => response.json())
      .then((avisData) => {
        avisData.forEach((avis) => {
          const avisElement = document.createElement("div");
          avisElement.className = "carousel-item";
          avisElement.innerHTML = `
                            <p>“${avis.message}”</p>
                            <cite>- ${avis.auteur}</cite>
                        `;
          carousel.appendChild(avisElement);
        });
      })
      .catch((error) => {
        console.error("Erreur de chargement des avis :", error);
      });
  }

  chargerAvis();
});
*/





















/*
document.addEventListener("DOMContentLoaded", function () {
    const avisContainer = document.querySelector(".avis-container");
    const avisScrollContainer = document.querySelector(".avis-scroll-container");

    function chargerAvis() {
        fetch("avis-api.php")
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
                defilementAutomatique();
            })
            .catch((error) => {
                console.error("Erreur de chargement des avis :", error);
            });
    }

    function defilementAutomatique() {
        let scrollAmount = 0;
        const scrollSpeed = 1;

        function scroll() {
            scrollAmount += scrollSpeed;
            if (scrollAmount >= avisContainer.scrollWidth / 2) {
                scrollAmount = 0; // Réinitialiser
            }
            avisScrollContainer.scrollLeft = scrollAmount;
            requestAnimationFrame(scroll);
        }
        scroll();
    }

    chargerAvis();
});
*/