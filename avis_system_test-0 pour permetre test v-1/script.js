document.addEventListener("DOMContentLoaded", function () {
  const avisContainer = document.querySelector(".avis-container");

  async function chargerAvis() {
    try {
      const response = await fetch("./avis_system_controls/avis-api.php");
      if (!response.ok) throw new Error("Erreur lors du chargement des avis.");
      const avisData = await response.json();

      // Créez et ajoutez les avis
      avisData.forEach((avis) => {
        const avisElement = document.createElement("div");
        avisElement.className = "avis";
        avisElement.innerHTML = `
          <p>“${avis.message}”</p>
          <cite>- ${avis.auteur}</cite>
        `;
        avisContainer.appendChild(avisElement);
      });

      // Dupliquez les avis pour le défilement infini
      const avisElements = document.querySelectorAll(".avis");
      avisElements.forEach((avis) => {
        if (avisContainer.children.length < 10) {
          const clone = avis.cloneNode(true);
          avisContainer.appendChild(clone);
        }
      });

      // Lancez le défilement
      scrollAvis();
    } catch (error) {
      console.error(error.message);
      avisContainer.innerHTML =
        "<p>Erreur lors du chargement des avis. Veuillez réessayer plus tard.</p>";
    }
  }

  function scrollAvis() {
    const scrollSpeed = 1; // Pixels par frame
    let scrollAmount = 0;
    const avisScrollContainer = document.querySelector(".avis-scroll-container");

    function animateScroll() {
      scrollAmount += scrollSpeed;
      if (scrollAmount >= avisContainer.scrollWidth / 2) scrollAmount = 0;
      avisScrollContainer.scrollLeft = scrollAmount;
      requestAnimationFrame(animateScroll);
    }
    animateScroll();
  }

  chargerAvis();
});