<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


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


</head>

<body>
<section id="avis">
  <h3>Ce que nos visiteurs disent</h3>
  <div class="avis-scroll-container">
    <div class="avis-container">
      <!-- Les avis validés seront insérés dynamiquement ici -->
    </div>
  </div>
</section>

<script>
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
</script>


<!--?php
$host = "localhost";
$dbname = "zoo_arcadia";//nom de votre base de données garage_vincent_parrot
$user = "root";//le nom d'utilisateur MySQL utilisateur_zoo
$password = "G1i9e6t3";//le mot de passe Z00_Arcadia!2024 
?>-->



</body>
</html>