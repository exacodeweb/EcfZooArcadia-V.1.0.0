document.addEventListener("DOMContentLoaded", function () {
  const avisData = [
    {
      message: "Une expérience incroyable ! Les habitats sont magnifiques.",
      auteur: "Jean Dupont-D",
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