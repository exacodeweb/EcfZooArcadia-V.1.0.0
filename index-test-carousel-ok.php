<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Section Avis</title>
  <style>
    /* Style général pour la section des avis */
    #avis {
      padding: 20px;
      background-color: #2A7E50;
      text-align: center;
    }

    #avis {
      max-width: 800px;
      margin: 50px auto;
      text-align: center;
    }

    /* Style pour chaque avis */
    .avis {
      min-width: 300px;
      padding: 20px;
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Style pour les citations dans les avis */
    .avis cite {
      display: block;
      margin-top: 10px;
      font-style: italic;
      color: #555;
    }

    /* Style des boutons */
    .btn {
      display: inline-block;
      padding: 10px 20px;
      text-align: center;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s ease;

      margin-top: 50px;
    }

    .btn-primary { background-color: #28a745; }
    .btn-primary:hover { background-color: #218838; }
    .btn-secondary { background-color: #007bff; }
    .btn-secondary:hover { background-color: #0056b3; }



    .avis-scroll-container {
    overflow: hidden;
    white-space: nowrap;
    width: 100%;
    position: relative;
}

.avis-container {
    display: flex;
    gap: 20px;
    animation: defilement 10s linear infinite;
}

@keyframes defilement {
    from {
        transform: translateX(0);
    }
    to {
        transform: translateX(-50%);
    }
}

.avis {
    flex: 0 0 300px;
    max-width: 300px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background: #f9f9f9;
    text-align: center;
    box-sizing: border-box;
}
  </style>
</head>
<body>

<!-- Section affichage des avis -->
<section id="avis">
  <h3>Ce que nos visiteurs disent</h3>
  <div class="avis-scroll-container">
    <div class="avis-container" id="avis-container">
      <!-- Avis insérés dynamiquement ici -->
    </div>
  </div>
  <button onclick="window.location.href='./tous-les-avis.php'" class="btn btn-primary mt-3">Voir tous les avis</button>
  <button onclick="window.location.href='soumettre-avis.html'" class="btn btn-secondary mt-3">Laisser un avis</button>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const apiUrl = './get_reviews.php'; // Fichier qui récupère les avis
    const avisContainer = document.getElementById('avis-container');

    fetch(apiUrl)
      .then(response => {
        if (!response.ok) {
          throw new Error('Erreur réseau lors de la récupération des avis.');
        }
        return response.json();
      })
      .then(data => {
        if (data.length === 0) {
          avisContainer.innerHTML = '<p>Aucun avis disponible pour le moment.</p>';
          return;
        }

        // Construction des avis dynamiquement
        const avisHtml = data.map(avis => `
          <div class="avis">
            <p>"${avis.message}"</p>
            <cite>- ${avis.auteur}</cite>
          </div>`
        ).join('');

        avisContainer.innerHTML = avisHtml;
        defilementAutomatique(); // Active le défilement
      })
      .catch(error => {
        console.error('Erreur lors de la récupération des avis :', error);
        avisContainer.innerHTML = '<p>Impossible de charger les avis.</p>';
      });

    function defilementAutomatique() {
      let scrollAmount = 0;
      const scrollSpeed = 1;
      const scrollContainer = document.querySelector('.avis-scroll-container');

      function scroll() {
        scrollAmount += scrollSpeed;
        if (scrollAmount >= avisContainer.scrollWidth / 2) {
          scrollAmount = 0;
        }
        scrollContainer.scrollLeft = scrollAmount;
        requestAnimationFrame(scroll);
      }

      scroll();
    }
  });
</script>

</body>
</html>






































































