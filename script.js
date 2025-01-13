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




// Charger les avis approuvés depuis l'API
/*fetch("avis-api.php")
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
*/
