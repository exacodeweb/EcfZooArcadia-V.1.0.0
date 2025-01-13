
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


  const avisContainer = document.querySelector(".avis-container");
  if (avisContainer) {
    const avisElement = document.createElement("div");
    avisElement.className = "avis";
    avisElement.innerHTML = `<p>“Exemple d'avis”</p><cite>- Test</cite>`;
    avisContainer.appendChild(avisElement);
  } else {
    console.error("Conteneur non trouvé !");
  }



















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

    avisElement.innerHTML = `
      <p>“${avis.message}”</p>
      <cite>- ${avis.auteur}</cite>
    `;

    avisContainer.appendChild(avisElement);
  });
});

/*---------------------------------------------------------------------*/
fetch("url_de_votre_api")
fetch("./avis-api.php")
  .then((response) => response.json())
  .then((data) => {
    data.forEach((avis) => {
      // Ajout des avis
    });
  })
  .catch((error) => console.error("Erreur de chargement des avis :", error));
/*---------------------------------------------------------------------*/
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
/*------------------------------------------------------------------*/
document.getElementById("prev").addEventListener("click", () => {
  const container = document.querySelector(".avis-container-wrapper");
  container.scrollBy({ left: -300, behavior: "smooth" });
});

document.getElementById("next").addEventListener("click", () => {
  const container = document.querySelector(".avis-container-wrapper");
  container.scrollBy({ left: 300, behavior: "smooth" });
});
/*-----------------------------------------------------------------*/
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
  });









