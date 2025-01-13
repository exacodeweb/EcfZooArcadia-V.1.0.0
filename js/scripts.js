document.addEventListener('DOMContentLoaded', () => {
  console.log("JavaScript is ready!");
  // Ajoutez ici vos fonctionnalités JavaScript.
});
async function loadServices() {// Charger et afficher les services
  const response = await fetch('get-services.php');
  const services = await response.json();

  const container = document.getElementById('services-container');
  container.innerHTML = '';
  services.forEach(service => {
      const serviceDiv = document.createElement('div');
      serviceDiv.className = 'service-card';
      serviceDiv.innerHTML = `
          <h3>${service.nom}</h3>
          <p>${service.description}</p>
          <button class="delete-btn" data-id="${service.id}">Supprimer</button>
      `;
      container.appendChild(serviceDiv);
  });

  // Ajouter les écouteurs pour les boutons de suppression
  document.querySelectorAll('.delete-btn').forEach(button => {
      button.addEventListener('click', async () => {
          const serviceId = button.dataset.id;
          const response = await fetch('delete-service.php', {
              method: 'POST',
              headers: { 'Content-Type': 'application/json' },
              body: JSON.stringify({ id: serviceId })
          });

          const result = await response.json();
          if (result.success) {
              alert('Service supprimé !');
              loadServices();
          } else {
              alert('Erreur : ' + result.error);
          }
      });
  });
}

// Ajouter un service
document.getElementById('add-service-form').addEventListener('submit', async (e) => {
  e.preventDefault();

  const nom = document.getElementById('nom').value;
  const description = document.getElementById('description').value;

  const response = await fetch('add-service.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ nom, description })
  });

  const result = await response.json();
  if (result.success) {
      alert('Service ajouté !');
      loadServices();
      document.getElementById('add-service-form').reset();
  } else {
      alert('Erreur : ' + result.error);
  }
});

// Charger les services au démarrage
loadServices();