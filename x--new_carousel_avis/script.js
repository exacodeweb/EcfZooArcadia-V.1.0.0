document.addEventListener("DOMContentLoaded", function () {
  const avisContainer = document.querySelector(".avis-container");
  const avisScrollContainer = document.querySelector(".avis-scroll-container");

  // Fonction pour charger les avis via API
  function chargerAvis() {
    fetch("./get_reviews.php") // API PHP pour récupérer les avis
      .then((response) => {
        if (!response.ok) {
          throw new Error("Erreur lors du chargement des avis.");
        }
        return response.json();
      })
      .then((avisData) => {
        // Ajouter dynamiquement les avis dans le conteneur
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

  // Fonction pour le défilement automatique
  function defilementAutomatique() {
    let scrollAmount = 0;
    const scrollSpeed = 1;

    function scroll() {
      scrollAmount += scrollSpeed;
      if (scrollAmount >= avisContainer.scrollWidth / 2) {
        scrollAmount = 0; // Réinitialisation pour boucle
      }
      avisScrollContainer.scrollLeft = scrollAmount;
      requestAnimationFrame(scroll);
    }

    scroll();
  }

  // Charger les avis au démarrage
  chargerAvis();
});